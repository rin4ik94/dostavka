<template>
  <input :value="value" class="pu-input" ref="input">
</template>

<script>
import Pikaday from "pikaday";
import "pikaday/css/pikaday.css";

export default {
  data() {
    return {};
  },
  props: {
    value: { required: true },
    format: { default: "YYYY-MM-DD" },
    options: { default: {} }
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
