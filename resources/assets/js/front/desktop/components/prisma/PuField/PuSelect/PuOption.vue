<template>
  <pu-menu-item :class="optionClasses" :disabled="isDisabled" @click="setSelection">
    <pu-checkbox class="pu-primary" v-model="isChecked" v-if="PuSelect.multiple" :disabled="isDisabled" />

    <span class="pu-list-item-text" ref="text">
      <slot />
    </span>
  </pu-menu-item>
</template>

<script>
export default {
  name: "PuOption",
  props: {
    value: [String, Number, Boolean],
    disabled: Boolean
  },
  inject: {
    PuSelect: {},
    PuOptgroup: {
      default: {}
    }
  },
  data: () => ({
    uniqueId:
      "pu-option-" +
      Math.random()
        .toString(36)
        .slice(4),
    isSelected: false,
    isChecked: false
  }),
  computed: {
    selectValue() {
      return this.PuSelect.modelValue;
    },
    isMultiple() {
      return this.PuSelect.multiple;
    },
    isDisabled() {
      return this.PuOptgroup.disabled || this.disabled;
    },
    key() {
      let isSet = this.value || this.value === 0;
      return isSet ? this.value : this.uniqueId;
    },
    inputLabel() {
      return this.PuSelect.label;
    },
    optionClasses() {
      return {
        "pu-selected": this.isSelected || this.isChecked
      };
    }
  },
  watch: {
    selectValue() {
      this.setIsSelected();
    },
    isChecked(val) {
      if (val === this.isSelected) {
        return;
      }
      this.setSelection();
    },
    isSelected(val) {
      this.isChecked = val;
    }
  },
  methods: {
    getTextContent() {
      if (this.$el) {
        return this.$el.textContent.trim();
      }

      const slot = this.$slots.default;

      return slot ? slot[0].text.trim() : "";
    },
    setIsSelected() {
      if (!this.isMultiple) {
        this.isSelected = this.selectValue === this.value;
        return;
      }
      if (this.selectValue === undefined) {
        this.isSelected = false;
        return;
      }
      this.isSelected = this.selectValue.includes(this.value);
    },
    setSingleSelection() {
      this.PuSelect.setValue(this.value);
    },
    setMultipleSelection() {
      this.PuSelect.setMultipleValue(this.value);
    },
    setSelection() {
      if (!this.isDisabled) {
        if (this.isMultiple) {
          this.setMultipleSelection();
        } else {
          this.setSingleSelection();
        }
      }
    },
    setItem() {
      this.$set(this.PuSelect.items, this.key, this.getTextContent());
    }
  },
  updated() {
    this.setItem();
  },
  created() {
    this.setItem();
    this.setIsSelected();
  }
};
</script>

<style lang="scss">
</style>
