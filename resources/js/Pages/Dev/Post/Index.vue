<script>
import { defineComponent, ref, h } from "vue";
import DevAuth from "@/Layouts/DevAuth.vue";
import { Head } from "@inertiajs/inertia-vue3";
import { NButton, NSpace, NDataTable } from "naive-ui";
import { Link } from "@inertiajs/inertia-vue3";
import { Inertia } from "@inertiajs/inertia";

// const columns = [
//     {
//         title: 'ID',
//         key: 'id',
//         defaultSortOrder: 'ascend',
//         sorter: 'default'
//     },
//     {
//         title: 'Title',
//         key: 'title',
//         defaultSortOrder: 'ascend',
//         sorter: 'default'
//     },
//     {
//         title: 'Description',
//         key: 'description',
//     },
// ]

const columns = ({ deletePost }) => {
  return [
    {
      title: "ID",
      key: "id",
      defaultSortOrder: "ascend",
      sorter: "default",
    },
    {
      title: "Title",
      key: "title",
      defaultSortOrder: "ascend",
      sorter: "default",
    },
    {
      title: "Description",
      key: "description",
    },
    {
      title: "",
      render(row) {
        return h(
          NButton,
          {
            type: "warning",
            tertiary: true,
            size: "small",
            onClick: () => Inertia.get(route("dev.post.edit", { id: row.id })),
          },
          { default: () => "Yangilash" }
        );
      },
    },
    {
      title: "",
      render(row) {
        return h(
          NButton,
          {
            type: "error",
            tertiary: true,
            size: "small",
            class: "bg-red-500 text-white",
            onClick: () => deletePost(row),
          },
          { default: () => "O'chirish" }
        );
      },
    },
  ];
};

export default defineComponent({
  layout: DevAuth,

  components: {
    Head,
    Link,
    DevAuth,
    NButton,
    NSpace,
    NDataTable,
  },

  props: {
    posts: Object,
  },

  setup(props) {
    const dataTableInstRef = ref(null);
    return {
      columns,
      data: props.posts,
      // columns: columns,
      columns: columns({
        deletePost(row) {
          Inertia.delete(route("dev.post.delete", { id: row.id }), {
            preserveState: false,
          });
        },
      }),
      pagination: ref({ pageSize: 12 }),
    };
  },
});
</script>

<template>
  <Head title="Dev Posts" />
  <div class="mb-4 flex flex-row-reverse">
    <Link
      class="px-6 py-2 mb-2 text-green-100 bg-green-500 rounded"
      :href="route('dev.post.create')"
    >
      Post qo'shish
    </Link>
  </div>
  <n-space vertical :size="12">
    <n-data-table
      ref="dataTableInstRef"
      :columns="columns"
      :data="data"
      :pagination="pagination"
    />
  </n-space>
</template>
