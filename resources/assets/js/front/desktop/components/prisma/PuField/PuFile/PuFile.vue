<template>
  <div class="pu-file">
    <!-- <pu-file-icon @click.native="openPicker" /> -->

    <input
      class="pu-input"
      readonly
      v-model="model"
      v-bind="{ disabled, required, placeholder }"
      @focus="openPicker"
      @blur="onBlur">

    <input type="file" ref="inputFile" v-bind="attributes" v-on="$listeners" @change="onChange" />
  </div>
</template>

<script>
// import PuUuid from "../../../core/utils/PuUuid";
// import PuFileIcon from "../../../core/icons/PuFileIcon";
import PuFieldMixin from "../PuFieldMixin";

export default {
  name: "PuFile",
  components: {
    // PuFileIcon
  },
  props: {
    id: {
      type: String,
      default: () =>
        "pu-file-" +
        Math.random()
          .toString(36)
          .slice(4)
    },
    name: String
  },
  mixins: [PuFieldMixin],
  inject: ["PuField"],
  methods: {
    getMultipleName(files) {
      let names = [];

      [...files].forEach(({ name }) => names.push(name));

      return names.join(", ");
    },
    getFileName(files, target) {
      if (!files || files.length === 0) {
        return target.value.split("\\").pop();
      }

      if (files.length > 1) {
        return this.getMultipleName(files);
      }

      if (files.length === 1) {
        return files[0].name;
      }

      return null;
    },
    openPicker() {
      this.onFocus();
      this.$refs.inputFile.click();
    },
    onChange($event) {
      this.onFileSelected($event);
    },
    onFileSelected({ target, dataTransfer }) {
      const files = target.files || dataTransfer.files;

      this.model = this.getFileName(files, target);
      this.$emit("pu-change", files || target.value);
    }
  },
  created() {
    this.PuField.file = true;
  },
  beforeDestroy() {
    this.PuField.file = false;
  }
};
</script>

<style lang="scss">
.pu-file {
  display: flex;
  flex: 1;

  input[type="file"] {
    width: 1px;
    height: 1px;
    margin: -1px;
    padding: 0;
    overflow: hidden;
    position: absolute;
    clip: rect(0 0 0 0);
    border: 0;
  }

  .pu-icon {
    cursor: pointer;
  }
}
</style>
