<script>
import { defineComponent, ref } from "vue";
import DevAuth from "@/Layouts/DevAuth.vue";
import { Head } from "@inertiajs/inertia-vue3";
import { useForm } from "@inertiajs/inertia-vue3";
import { NButton, NSpace, NInput, NForm } from "naive-ui";
import { Link } from "@inertiajs/inertia-vue3"

export default defineComponent({
  layout: DevAuth,

  components: {
    Head,
    DevAuth,
    NButton,
    NSpace,
    NInput,
    NForm,
    Link
  },

  setup(props) {
    const form = useForm({
      title: props.post.title,
      description: props.post.description,
    });
    return { form };
  },

  props: {
    post: Object,
  },

  methods: {
    editForm() {
      this.form.put(route("dev.post.update", this.post.id));
    },
  },
});
</script>

<template>
  <Head title="Dev Posts Edit" />
  <n-form @submit.prevent="editForm">
    <n-space vertical>
      <n-input v-model:value="form.title" type="text" placeholder="Sarlavha" />
      <n-input
        v-model:value="form.description"
        type="textarea"
        placeholder="Qo'shimcha ma'lumot"
      />
      <div class="flex">
        <button type="submit" class="px-6 py-2 mr-2 text-white bg-green-500 rounded">
          Saqlash
        </button>
        <Link
          class="px-6 py-2 text-red-100 bg-red-500 rounded"
          :href="route('dev.post.index')"
        >
          Ortga
        </Link>
      </div>
    </n-space>
  </n-form>
</template>
