<script>
import { defineComponent, ref } from "vue";
import DevAuth from "@/Layouts/DevAuth.vue";
import { Head } from "@inertiajs/inertia-vue3";
import { useForm } from "@inertiajs/inertia-vue3";
import { NButton, NSpace, NInput, NForm } from "naive-ui";
import { Link } from "@inertiajs/inertia-vue3";

export default defineComponent({
  layout: DevAuth,

  components: {
    Head,
    DevAuth,
    NButton,
    NSpace,
    NInput,
    NForm,
    Link,
  },

  setup() {
    const form = useForm({
      title: null,
      description: null,
    });
    return { form };
  },

  methods: {
    addForm() {
      this.form.post(route("dev.post.store"));
    },
  },
});
</script>

<template>
  <Head title="Dev Posts Add" />
  <n-form @submit.prevent="addForm">
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
