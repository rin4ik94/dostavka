<template>
  <pu-portal>
    <transition name="pu-dialog">
      <div v-on:keyup.up="incrementI" class="pu-dialog" :class="[dialogClasses]" v-on="$listeners" @keydown.esc="onEsc" v-if="puActive">
          <div :style="{ width:  puSize + 'px' }" class="pu-dialog-container">
            <slot/>
              <pu-focus-trap> 
                <keep-alive>
                  <pu-overlay :pu-active="puActive" @click="onClick" v-if="puBackdrop" />
                </keep-alive>
              </pu-focus-trap> 
          </div>
      </div>
    </transition>
  </pu-portal>
</template>

<script>
import PuPortal from "../PuPortal/PuPortal";
import PuOverlay from "../PuOverlay/PuOverlay";
import PuFocusTrap from "../PuFocusTrap/PuFocusTrap";

export default {
  name: "PuDialog",
  components: {
    PuPortal,
    PuFocusTrap,
    PuOverlay
  },
  props: {
    puSize: {
      default: "auto"
    },
    puActive: Boolean,
    puBackdrop: {
      type: Boolean,
      default: true
    },
    puBackdropClass: {
      type: String,
      default: "pu-dialog-overlay"
    },
    puCloseOnEsc: {
      type: Boolean,
      default: true
    },
    puClickOutsideToClose: {
      type: Boolean,
      default: true
    },
    puFullscreen: {
      type: Boolean,
      default: false
    },
    puAnimateFromSource: false
  },
  computed: {
    dialogClasses() {
      return {
        "pu-dialog-fullscreen": this.puFullscreen
      };
    }
  },
  watch: {
    puActive(isActive) {
      this.$nextTick().then(() => {
        if (isActive) {
          this.$emit("pu-opened");
        } else {
          this.$emit("pu-closed");
        }
      });
    }
  },
  created() {
    const escapeHandler = e => {
      if (e.key == "Escape") {
        this.closeDialog();
      }
    };
    document.addEventListener("keydown", escapeHandler);
    this.$once("hook:destroyed", () => {
      document.removeEventListener("keydown", escapeHandler);
    });
  },
  methods: {
    closeDialog() {
      this.$emit("update:puActive", false);
    },

    onClick() {
      if (this.puClickOutsideToClose) {
        this.closeDialog();
      }
      this.$emit("pu-clicked-outside");
    }
  }
};
</script>

<style lang="scss">
.pu-dialog {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  text-align: center;
  overflow: hidden;
  z-index: 9999;
  pointer-events: none;
}
.pu-dialog-leave-active {
  transition: opacity 0.15s ease;
}
.pu-dialog::before {
  content: "";
  display: inline-block;
  vertical-align: middle;
  height: 100%;
}
.pu-dialog-container {
  pointer-events: auto;
  position: relative;
  display: inline-block;
  vertical-align: middle;
  text-align: left;
  // width: auto;
  min-width: 280px;
  max-width: 100%;
  max-height: 100%;
  margin: 0 auto;
  outline: 0;
  pointer-events: auto;
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0 11px 15px -7px rgba(0, 0, 0, 0.2),
    0 24px 38px 3px rgba(0, 0, 0, 0.14), 0 9px 46px 8px rgba(0, 0, 0, 0.12);
  transition: opacity 0.15s ease, transform 0.15s ease;
}
.pu-dialog-enter-active .pu-dialog-container,
.pu-dialog-leave-active .pu-dialog-container {
  opacity: 0;
  transform: translate3d(0, 35px, 0);
}
.pu-dialog-title {
  padding: 24px 24px 0;
}
.pu-dialog-content {
  padding: 20px 24px 1px 24px;

  overflow: auto;
  position: relative;

  &:first-child {
    padding-top: 24px;
  }

  p:first-child:not(:only-child) {
    margin-top: 0;
  }

  p:last-child:not(:only-child) {
    margin-bottom: 0;
  }
}
.pu-dialog-actions {
  min-height: 52px;
  padding: 1px 24px 1px 24px;
  text-align: right;
  position: relative;

  .pu-button {
    min-width: 64px;
    margin: 0;

    + .pu-button {
      margin-left: 12px;
    }
  }
}
</style>
