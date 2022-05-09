<script>
import simplebar from "simplebar-vue";

import SideNav from "./Navigation.vue";

/**
 * Sidebar component
 */
export default {
  components: { simplebar, SideNav },
  props: {
    isCondensed: {
      type: Boolean,
      default: false,
    },
    user: {
      type: Object
    }
  },
  data() {
    return {
      settings: {
        minScrollbarLength: 60,
      },
    };
  },
  methods: {
    onRoutechange() {
      setTimeout(() => {
        if(document.getElementsByClassName("mm-active").length > 0) {
        const currentPosition = document.getElementsByClassName("mm-active")[0].offsetTop;
        if (currentPosition > 500)
          this.$refs.currentMenu.SimpleBar.getScrollElement().scrollTop =
            currentPosition + 300;
        }
      }, 300);
    },
  },
  watch: {
    $route: {
      handler: "onRoutechange",
      immediate: true,
      deep: true,
    },
  }
};
</script>

<template>
  <!-- ========== Left Sidebar Start ========== -->
  <div class="vertical-menu">
    <simplebar
      v-if="!isCondensed"
      :settings="settings"
      class="h-100"
      ref="currentMenu"
       id="my-element"
    >
      <SideNav :user="user" />
    </simplebar>

    <simplebar v-else class="h-100">
      <SideNav :user="user" />
    </simplebar>
  </div>
  <!-- Left Sidebar End -->
</template>

