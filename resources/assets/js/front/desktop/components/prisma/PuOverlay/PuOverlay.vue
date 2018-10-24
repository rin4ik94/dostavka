<template>
  <pu-portal :pu-attach-to-parent="puAttachToParent">
    <transition name="pu-overlay">
      <div class="pu-overlay"  v-on="$listeners" v-if="puActive"></div>
    </transition>
  </pu-portal>
</template>

<script>
import PuPortal from "../PuPortal/PuPortal";

export default {
  name: "PuOverlay",
  components: {
    PuPortal
  },
  props: {
    puActive: Boolean,
    puAttachToParent: Boolean
  }
};
</script>

<style lang="scss">
.pu-overlay {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 100;
  overflow: hidden;
  background: rgba(0, 0, 0, 0.288);
  transition: opacity 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
}

.pu-overlay-enter,
.pu-overlay-leave-active {
  opacity: 0;
  pointer-events: none;
}
</style>
