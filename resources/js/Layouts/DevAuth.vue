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
          <div class="p-4 mb-4">
            <svg viewBox="0 0 1117 154" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="dw" transform="translate(-20.000000, 0.000000)"> <g id="English" transform="translate(20.000000, 0.000000)"> <path d="M665.871,118.578 L665.871,54.941 L704.461,54.656 C709.824,54.617 714.617,54.836 718.828,55.133 C721.992,55.359 724.883,55.801 727.504,56.488 C730.129,57.172 732.355,58 734.184,58.969 C736.012,59.957 737.57,61.055 738.816,62.262 C740.082,63.473 741.082,64.887 741.863,66.527 C742.625,68.152 743.07,69.902 743.203,71.762 C743.352,73.848 743.125,75.805 742.547,77.621 C741.965,79.434 740.973,81.152 739.539,82.742 C738.133,84.352 736.297,85.734 734.062,86.895 C731.828,88.059 728.652,89.25 724.531,90.461 L743.625,117.988 L717.395,117.988 L695.457,82.871 C697.75,83.172 700.527,83.234 702.715,83.234 C705.762,83.234 709.137,83.215 711.578,82.527 C714.02,81.844 714.668,80.562 715.852,79.129 C717.016,77.699 717.555,76.203 717.441,74.613 C717.348,73.273 716.793,72.098 715.754,71.094 C714.715,70.078 713.141,69.328 711.023,68.836 C708.93,68.344 705.715,68.086 701.402,68.086 C699.922,68.086 698.418,68.109 696.836,68.152 L692.004,68.277 L692.648,118.578 L665.871,118.578 Z" id="Fill-27" fill="#006430"></path> <polygon id="Fill-28" fill="#006430" points="366.961 55.684 401.09 55.684 414.266 94.152 427.379 55.684 461.391 55.684 461.391 118.914 440.203 118.914 440.203 70.699 423.766 118.914 404.59 118.914 388.211 70.699 388.211 118.914 366.961 118.914"></polygon> <path d="M322.242,94.801 L312.957,72.07 L303.73,94.801 L322.242,94.801 Z M327.676,108.477 L298.121,108.477 L294.055,118.914 L267.551,118.914 L299.098,55.684 L327.383,55.684 L358.949,118.914 L331.797,118.914 L327.676,108.477 Z" id="Fill-29" fill="#006430"></path> <polygon id="Fill-30" fill="#006430" points="178.441 55.684 204.379 55.684 204.379 77.812 232.738 77.812 232.738 55.684 258.793 55.684 258.793 118.914 232.738 118.914 232.738 93.344 204.379 93.344 204.379 118.914 178.441 118.914"></polygon> <path d="M505.199,85.336 C513.738,75.555 522.52,65.844 530.34,55.695 C539.977,55.777 549.586,55.766 559.223,55.695 L531.719,85.102 L562.93,118.445 C552.781,118.379 542.648,118.359 532.5,118.445 C526.938,110.992 517.836,99.961 505.199,85.336 Z M477.895,118.445 L504.199,118.445 L504.199,55.695 L477.895,55.695 L477.895,118.445 Z" id="Fill-31" fill="#006430"></path> <path d="M590.07,54.504 L628.957,54.504 C642.453,54.504 653.488,64.277 653.488,76.223 L653.488,96.848 C653.488,108.793 642.453,118.566 628.957,118.566 L590.07,118.566 C576.574,118.566 565.539,108.793 565.539,96.848 L565.539,76.223 C565.539,64.277 576.574,54.504 590.07,54.504 Z M599.547,70.117 L619.48,70.117 C626.395,70.117 632.051,75.129 632.051,81.25 L632.051,91.82 C632.051,97.941 626.395,102.949 619.48,102.949 L599.547,102.949 C592.633,102.949 586.977,97.941 586.977,91.82 L586.977,81.25 C586.977,75.129 592.633,70.117 599.547,70.117 Z" id="Fill-32" fill="#006430"></path> <polygon id="Fill-33" fill="#55AE24" points="937.262 55.684 961.5 55.684 993.109 90.664 993.109 55.684 1017.559 55.684 1017.559 118.914 993.109 118.914 961.656 84.199 961.656 118.914 937.262 118.914"></polygon> <path d="M892.094,94.801 L882.809,72.07 L873.582,94.801 L892.094,94.801 Z M897.527,108.477 L867.973,108.477 L863.906,118.914 L837.402,118.914 L868.949,55.684 L897.234,55.684 L928.801,118.914 L901.648,118.914 L897.527,108.477 Z" id="Fill-34" fill="#55AE24"></path> <path d="M782.891,105.328 L796.121,105.328 C800.598,105.328 803.742,104.734 805.562,103.547 C807.395,102.348 808.316,100.746 808.316,98.73 C808.316,96.863 807.418,95.359 805.602,94.227 C803.781,93.094 800.617,92.52 796.062,92.52 L782.891,92.52 L782.891,105.328 Z M782.891,80.492 L794.168,80.492 C798.215,80.492 801.035,79.969 802.629,78.914 C804.219,77.863 804.996,76.34 804.996,74.367 C804.996,72.527 804.215,71.082 802.629,70.051 C801.027,69.008 798.27,68.492 794.344,68.492 L782.891,68.492 L782.891,80.492 Z M756.715,55.684 L805.289,55.684 C813.383,55.684 819.594,57.207 823.914,60.219 C828.25,63.238 830.426,66.977 830.426,71.422 C830.426,75.16 828.887,78.375 825.793,81.051 C823.727,82.836 820.711,84.246 816.742,85.273 C822.762,86.363 827.207,88.242 830.055,90.898 C832.898,93.555 834.316,96.906 834.316,100.926 C834.316,104.207 833.305,107.156 831.285,109.773 C829.258,112.398 826.496,114.453 822.977,115.984 C820.809,116.93 817.523,117.617 813.125,118.047 C807.281,118.617 803.41,118.914 801.496,118.914 L756.715,118.914 L756.715,55.684 Z" id="Fill-35" fill="#55AE24"></path> <path d="M1059.309,85.336 C1067.848,75.555 1076.625,65.844 1084.445,55.695 C1094.082,55.777 1103.691,55.766 1113.328,55.695 L1085.824,85.102 L1117.035,118.445 C1106.887,118.379 1096.754,118.359 1086.605,118.445 C1081.043,110.992 1071.945,99.961 1059.309,85.336 Z M1032.004,118.445 L1058.305,118.445 L1058.305,55.695 L1032.004,55.695 L1032.004,118.445 Z" id="Fill-36" fill="#55AE24"></path> <polygon id="Fill-37" fill="#55AE24" points="51.078 31.301 95.301 31.301 44.602 153.855 0.379 153.855"></polygon> <polygon id="Fill-38" fill="#55AE24" points="114.035 0 158.258 0 107.559 122.555 63.336 122.555"></polygon> </g> </g> </g> </svg>
          </div>
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
