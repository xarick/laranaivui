<script>
import { h, defineComponent, ref } from "vue";
import { Link } from "@inertiajs/inertia-vue3";
import {
  NIcon,
  NLayout,
  NLayoutHeader,
  NLayoutFooter,
  NLayoutSider,
  NMenu,
  NSpace,
  NSwitch,
} from "naive-ui";
import {
  BookOutline as BookIcon,
  PersonOutline as PersonIcon,
  WineOutline as WineIcon,
} from "@vicons/ionicons5";

function renderIcon(icon) {
  return () => h(NIcon, null, { default: () => h(icon) });
}

const menuOptions = [
  {
    label: "Maqolalar",
    key: "maqolalar",
    icon: renderIcon(BookIcon),
    href: "/dev/posts",
  },
  {
    label: "Bo'limlar",
    key: "bolimlar",
    icon: renderIcon(BookIcon),
    children: [
      {
        label: "Narrator",
        key: "narrator",
        icon: renderIcon(PersonIcon),
      },
      {
        label: "Sheep Man",
        key: "sheep-man",
        icon: renderIcon(PersonIcon),
      },
    ],
  },
];

export default defineComponent({
  components: {
    Link,
    NIcon,
    NLayout,
    NLayoutHeader,
    NLayoutFooter,
    NLayoutSider,
    NMenu,
    NSpace,
    NSwitch,
  },
  setup() {
    return {
      inverted: ref(false),
      menuOptions,
      renderMenuLabel(option) {
        if ("href" in option) {
          return h(Link, { href: option.href }, [
            option.label,
          ]);
        }
        return option.label;
      },
    };
  },
});
</script>

<template>
  <n-space vertical>
    <n-layout class="relative">
      <!-- <n-layout-header
        :inverted="inverted"
        bordered
        class="h-12 pt-3 fixed top-0 left-0 right-0 z-10"
      >
        <div class="px-6 flex justify-between">
          <div>HAMKOR PROJECT</div>
          <div>
            <n-space> <n-switch v-model:value="inverted" /> Dark </n-space>
          </div>
        </div>
      </n-layout-header> -->
      <n-layout has-sider>
        <n-layout-sider
          bordered
          show-trigger
          collapse-mode="width"
          :collapsed-width="64"
          :width="240"
          :native-scrollbar="false"
          :inverted="inverted"
          class="min-h-screen pt-8"
        >
          <n-menu
            :inverted="inverted"
            :collapsed-width="64"
            :collapsed-icon-size="22"
            :render-label="renderMenuLabel"
            :options="menuOptions"
          />
        </n-layout-sider>
        <div class="w-full">
          <n-layout-header :inverted="inverted" bordered class="h-12 pt-3">
            <div class="px-6 flex justify-between">
              <div>HAMKOR PROJECT</div>
              <n-space> <n-switch v-model:value="inverted"/>Dark</n-space>
            </div>
          </n-layout-header>
          <div class="p-8">
            <slot />
          </div>
        </div>
      </n-layout>
    </n-layout>
  </n-space>
</template>
