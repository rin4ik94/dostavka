<template>
  <pu-dialog v-bind="$attrs" v-on="$listeners" :pu-fullscreen="false">
    <pu-dialog-title v-if="puTitle">{{ puTitle }}</pu-dialog-title>
    <pu-dialog-content v-if="puContent" v-html="puContent" />

    <pu-dialog-actions>
      <button class="btn btn-danger" @click="onCancel">{{ puCancelText }}</button>
      <button class="btn btn-green" @click="onConfirm">{{ puConfirmText }}</button>
    </pu-dialog-actions>
  </pu-dialog>
</template>

<script>
export default {
  name: "PuDialogConfirm",
  props: {
    puTitle: String,
    puContent: String,
    puConfirmText: {
      type: String,
      default: "Ok"
    },
    puCancelText: {
      type: String,
      default: "Cancel"
    }
  },
  methods: {
    onCancel() {
      this.$emit("pu-cancel");
      this.$emit("update:puActive", false);
    },
    onConfirm() {
      this.$emit("pu-confirm");
      this.$emit("update:puActive", false);
    }
  }
};
</script>
