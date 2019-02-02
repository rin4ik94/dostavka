<template>
  <div class="pu-optgroup">
    <pu-subheader>{{ label }}</pu-subheader>
    <slot />
  </div>
</template>

<script>
  export default {
    name: 'PuOptgroup',
    props: {
      label: String,
      disabled: Boolean
    },
    provide () {
      return {
        PuOptgroup: {
          disabled: this.disabled
        }
      }
    }
  }
</script>

<style lang="scss">
  .pu-optgroup {
    .pu-subheader {
      text-transform: uppercase;
    }

    .pu-ripple.pu-list-item-content {
      padding-left: 24px;
    }
  }
</style>
