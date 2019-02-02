<template>
  <input
    ref="input"
    class="pu-input"
    v-model="model"
    v-bind="attributes"
    v-on="listeners"
    @focus="onFocus"
    @blur="onBlur"
    >
</template>

<script>
import PuFieldMixin from "../PuFieldMixin";

export default {
  data() {
    return {
      focus: this.focused
    };
  },
  name: "PuInput",
  mixins: [PuFieldMixin],
  inject: ["PuField"],
  props: {
    id: {
      type: String,
      default: () =>
        "pu-input-" +
        Math.random()
          .toString(36)
          .slice(4)
    },
    type: {
      type: String,
      default: "text"
    },
    focused: {
      type: Boolean,
      default: false
    }
  },
  computed: {
    toggleType() {
      return this.PuField.togglePassword;
    },
    isPassword() {
      return this.type === "password";
    },
    listeners() {
      var l = { ...this.$listeners };
      delete l.input;
      return l;
    }
  },
  watch: {
    type(type) {
      this.setPassword(this.isPassword);
    },

    toggleType(toggle) {
      if (toggle) {
        this.setTypeText();
      } else {
        this.setTypePassword();
      }
    }
  },
  methods: {
    setPassword(state) {
      this.PuField.password = state;
      this.PuField.togglePassword = false;
    },
    setTypePassword() {
      this.$el.type = "password";
    },
    setTypeText() {
      this.$el.type = "text";
    }
  },
  mounted() {
    if (this.focus) {
      window.setTimeout(() => {
        this.$refs.input.focus();
      }, 50);
      this.focus = false;
    }
  },
  created() {
    this.setPassword(this.isPassword);
  },
  beforeDestroy() {
    this.setPassword(false);
  }
};
</script>
