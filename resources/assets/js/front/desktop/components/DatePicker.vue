<template>
  <input class="pu-input" ref="input">
</template>

<script>
import Pikaday from "pikaday";
import "pikaday/css/pikaday.css";

export default {
  data() {
    return {};
  },
  props: {
    format: { default: "DD.MM.YYYY" },
    options: {}
  },

  mounted() {
    const picker = new Pikaday({
      field: this.$refs.input,
      format: this.format,
      onSelect: () => {
        this.$emit("input", picker.toString());
      },
      ...this.options
    });
  }
};
</script>
