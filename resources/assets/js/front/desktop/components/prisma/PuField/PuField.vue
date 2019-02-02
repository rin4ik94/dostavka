<template>
  <div class="pu-field" :class="[fieldClasses]" @blur="onBlur">
    <slot />
  </div>
</template>

<script>
export default {
  name: "PuField",
  data: () => ({
    showPassword: true,
    PuField: {
      value: null,
      focused: false,
      highlighted: false,
      disabled: false,
      required: false,
      placeholder: false,
      textarea: false,
      password: null,
      file: false
    }
  }),
  provide() {
    return {
      PuField: this.PuField
    };
  },
  computed: {
    stringValue() {
      return (
        (this.PuField.value || this.PuField.value === 0) &&
        this.PuField.value.toString()
      );
    },
    hasValue() {
      return this.stringValue && this.stringValue.length > 0;
    },
    fieldClasses() {
      return {
        "pu-focused": this.PuField.focused,
        "pu-highlight": this.PuField.highlighted,
        "pu-disabled": this.PuField.disabled,
        "pu-required": this.PuField.required,
        "pu-has-value": this.hasValue,
        "pu-has-placeholder": this.PuField.placeholder,
        "pu-has-textarea": this.PuField.textarea,
        "pu-has-password": this.PuField.password,
        "pu-has-file": this.PuField.file,
        "pu-has-select": this.PuField.select
      };
    }
  },
  methods: {
    onBlur() {
      this.PuField.highlighted = false;
    }
  }
};
</script>

<style lang="scss">
.pu-field-group {
  display: table;
  width: 100%
}
.pu-field {
  font: inherit;
  color: rgba(0, 0, 0, 0.87);
  width: 100%;
  min-height: 48px;
  padding-top: 16px;
  position: relative;

  label {
    position: absolute;
    top: 23px;
    left: 0;
    pointer-events: none;
    font-size: 16px;
    line-height: 20px;
    color: rgba(0, 0, 0, 0.54);
    transition: all 0.15s ease-in-out;
  }

  .pu-suffix {
    display: table-cell;
    vertical-align: bottom;
    width: 1%;
    font-size: 16px;
    line-height: 32px;
  }

  .pu-prefix {
    display: none;
    vertical-align: top;
    width: 1%;
    padding-right: 4px;
    font-size: 16px;
    line-height: 32px;
  }

  &.pu-focused,
  &.pu-has-value {
    .pu-prefix {
      display: table-cell;
    }
  }

  .pu-input,
  .pu-textarea {
    display: table-cell;
    vertical-align: bottom;
    width: 100%;
    height: 32px;
    padding: 0;
    outline: 0;
    border: none;
    background: none;
    font-family: inherit;
    font-size: 16px;
    line-height: 32px;

    &[type="date"] {
      font-size: 16px;
    }

    &[disabled] {
      cursor: default;
    }

    &::-webkit-input-placeholder {
      font-size: 16px;
      text-shadow: none;
      -webkit-text-fill-color: initial;
      transition: all 0.15s ease-in-out;
    }
  }

  .pu-textarea {
    min-height: 32px;
    max-height: 230px;
    padding: 5px 0;
    resize: none;
    line-height: 1.3em;
  }
}

.pu-field {
  &.pu-has-placeholder {
    label {
      pointer-events: auto;
      top: 10px;
      opacity: 0;
      font-size: 12px;
    }

    .pu-input,
    .pu-textarea {
      font-size: 16px;
    }
  }

  &.pu-has-file {
    &:before,
    &:after,
    label {
      left: 36px;
    }

    .pu-input {
      margin-left: 12px;
    }
  }

  .pu-field-underline {
    position: absolute;
    left: 0;
    width: 100%;
    height: 1px;
    margin-top: 1px;
    background-color: rgba(0, 0, 0, 0.42);
    pointer-events: none;
  }
  .pu-field-underline::before {
    content: "";
    opacity: 0;
    visibility: none;
    position: absolute;
    top: -1px;
    height: 2px;
    width: 100%;
    background-color: #ff4700;
    transition: all 0.15s ease-in-out;
  }
  &.pu-focused .pu-field-underline::before,
  &.pu-highlight .pu-field-underline::before {
    opacity: 1;
    visibility: visible;
    z-index: 2;
  }

  &.pu-focused label {
    color: #ff4700;
  }
  &.pu-focused,
  &.pu-has-value {
    label {
      pointer-events: auto;
      top: 0;
      opacity: 1;
      font-size: 12px;
    }

    .pu-input,
    .pu-textarea {
      font-size: 16px;
    }
  }

  &.pu-inline {
    label {
      pointer-events: none;
    }

    &.pu-focused {
      label {
        top: 23px;
        font-size: 16px;
      }
    }

    &.pu-has-value {
      label {
        opacity: 0;
      }
    }
  }

  &.pu-disabled {
    &:after {
      background: bottom left repeat-x;
      background-size: 4px 1px;
    }
  }
}
</style>
