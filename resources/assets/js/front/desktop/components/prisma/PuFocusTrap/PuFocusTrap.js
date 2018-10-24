import Vue from 'vue'

export default {
  name: 'PuFocusTrap',
  abstract: true,
  methods: {
    setFocus () {
      window.setTimeout(() => {
        if (this.$el.tagName) {
          this.$el.setAttribute('tabindex', '-1')
          this.$el.focus()
        }
      }, 20)
    }
  },
  mounted () {
    this.setFocus()
  },
  render () {
    try {
      const defaultSlot = this.$slots.default

      if (!defaultSlot) {
        return null
      }

      if (defaultSlot.length > 1) {
        throw new Error()
      }

      return defaultSlot[0]
    } catch (e) {
      Vue.util.warn('PuFocusTrap can only render one, and exactly one child component.', this)
    }

    return null
  }
}
