export default {
  props: {
    value: {},
    placeholder: String,
    name: String,
    readonly: Boolean,
    required: Boolean,
    disabled: Boolean,
  },
  data () {
    return {
      localValue: this.value,
      textareaHeight: false
    }
  },
  computed: {
    model: {
      get () {
        return this.localValue
      },
      set (value) {
        if (value.constructor.toString().match(/function (\w*)/)[1].toLowerCase() !== 'inputevent') {
          this.$nextTick(() => {
            this.localValue = value
          })
        }
      }
    },
    attributes () {
      return {
        ...this.$attrs,
        type: this.type,
        id: this.id,
        name: this.name,
        disabled: this.disabled,
        placeholder: this.placeholder,
        readonly: this.readonly,
      }
    }
  },
  watch: {
    model () {
      this.setFieldValue()
    },
    placeholder () {
      this.setPlaceholder()
    },
    disabled () {
      this.setDisabled()
    },
    localValue (val) {
      this.$emit('input', val)
    },
    value (val) {
      this.localValue = val
    }
  },
  methods: {
    setLabelFor () {
      if (this.$el.parentNode) {
        const label = this.$el.parentNode.querySelector('label')

        if (label) {
          const forAttribute = label.getAttribute('for')

          if (!forAttribute || forAttribute.indexOf('pu-') >= 0) {
            label.setAttribute('for', this.id)
          }
        }
      }
    },
    setFieldValue () {
      this.PuField.value = this.model
    },
    setPlaceholder () {
      this.PuField.placeholder = Boolean(this.placeholder)
    },
    setDisabled () {
      this.PuField.disabled = Boolean(this.disabled)
    },
    onFocus () {
      this.PuField.focused = true
    },
    onBlur () {
      this.PuField.focused = false
    }
  },
  created () {
    this.setFieldValue()
    this.setPlaceholder()
    this.setDisabled()
  },
  mounted () {
    this.setLabelFor()
  }
}
