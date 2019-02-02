
// // import raf from "raf";
// // import PuComponent from "../../../core/PuComponent";
// // import PuDropDownIcon from "../../../core/icons/PuDropDownIcon";
// import PuMenu from "../../PuMenu/PuMenu";
// import PuMenuContent from "../../PuMenu/PuMenuContent";
// import PuInput from "../PuInput/PuInput";
// import PuFieldMixin from "../PuFieldMixin";

// const defaultOffset = {
//   x: -15,
//   y: -48
// };

// export default {
//   name: "PuSelect",
//   components: {
//     PuInput,
//     PuMenu,
//     PuMenuContent,
//     PuDropDownIcon
//   },
//   mixins: [PuFieldMixin],
//   props: {
//     puDense: Boolean,
//     puClass: String,
//     multiple: Boolean,
//     id: String,
//     name: String
//   },
//   inject: ["PuField"],
//   data() {
//     return {
//       menuStyles: {},
//       offset: {
//         x: defaultOffset.x,
//         y: 0
//       },
//       showSelect: true,
//       didMount: false,
//       PuSelect: {
//         items: {},
//         label: null,
//         multiple: false,
//         modelValue: this.localValue,
//         setValue: this.setValue,
//         setContent: this.setContent,
//         setMultipleValue: this.setMultipleValue,
//         setMultipleContent: this.setMultipleContent
//       }
//     };
//   },
//   provide() {
//     const PuSelect = this.PuSelect;

//     return { PuSelect };
//   },
//   computed: {
//     attrs() {
//       return {
//         ...this.$attrs,
//         name: this.name,
//         id: this.id
//       };
//     },
//     inputListeners() {
//       return {
//         ...this.$listeners,
//         input: undefined
//       };
//     }
//   },
//   watch: {
//     localValue: {
//       immediate: true,
//       handler(val) {
//         this.setFieldContent();
//         this.PuSelect.modelValue = this.localValue;
//         this.emitSelected(val);
//       }
//     },
//     multiple: {
//       immediate: true,
//       handler(isMultiple) {
//         this.PuSelect.multiple = isMultiple;
//         this.$nextTick(this.initialLocalValueByDefault);
//       }
//     }
//   },
//   methods: {
//     elHasScroll(el) {
//       return el.scrollHeight > el.offsetHeight;
//     },
//     scrollToSelectedOption(el, menu) {
//       const top = el.offsetTop;
//       const elHeight = el.offsetHeight;
//       const menuHeight = menu.offsetHeight;

//       menu.scrollTop = top - (menuHeight - elHeight) / 2;
//     },
//     setOffsets(target) {
//       if (!this.$isServer) {
//         const menu = this.$refs.menu.$refs.container;

//         if (menu) {
//           const selected = target || menu.querySelector(".pu-selected");

//           if (selected) {
//             this.scrollToSelectedOption(selected, menu);
//             this.offset.y =
//               defaultOffset.y - selected.offsetTop + menu.scrollTop + 8;
//             this.menuStyles = {
//               "transform-origin": `0 ${Math.abs(this.offset.y)}px`
//             };
//           } else {
//             this.offset.y = defaultOffset.y + 1;
//             this.menuStyles = {};
//           }
//         }
//       }
//     },
//     onMenuEnter() {
//       if (!this.didMount) {
//         return;
//       }

//       this.setOffsets();
//       this.PuField.focused = true;
//       this.$emit("pu-opened");
//     },
//     applyHighlight() {
//       this.PuField.focused = false;
//       this.PuField.highlighted = true;
//       this.$refs.input.$el.focus();
//     },
//     onClose() {
//       this.$emit("pu-closed");
//       if (this.didMount) {
//         this.applyHighlight();
//       }
//     },
//     onFocus() {
//       if (this.didMount) {
//         this.applyHighlight();
//       }
//     },
//     removeHighlight() {
//       this.PuField.highlighted = false;
//     },
//     openSelect() {
//       if (!this.disabled) {
//         this.showSelect = true;
//       }
//     },
//     arrayAccessorRemove(arr, index) {
//       let before = arr.slice(0, index);
//       let after = arr.slice(index + 1, arr.length);
//       return before.concat(after);
//     },
//     toggleArrayValue(value) {
//       let index = this.localValue.indexOf(value);
//       let includes = index > -1;
//       if (!includes) {
//         this.localValue = this.localValue.concat([value]);
//       } else {
//         this.localValue = this.arrayAccessorRemove(this.localValue, index);
//       }
//     },
//     setValue(newValue) {
//       this.model = newValue;
//       this.setFieldValue();
//       this.showSelect = false;
//     },
//     setContent(newLabel) {
//       this.PuSelect.label = newLabel;
//     },
//     setContentByValue() {
//       const textContent = this.PuSelect.items[this.localValue];

//       if (textContent) {
//         this.setContent(textContent);
//       } else {
//         this.setContent("");
//       }
//     },
//     setMultipleValue(value) {
//       const newValue = value;
//       this.toggleArrayValue(newValue);
//       this.setFieldValue();
//     },
//     setMultipleContentByValue() {
//       if (!this.localValue) {
//         this.initialLocalValueByDefault();
//       }

//       let content = [];

//       this.localValue.forEach(item => {
//         const textContent = this.PuSelect.items[item];

//         if (textContent) {
//           content.push(textContent);
//         }
//       });

//       this.setContent(content.join(", "));
//     },
//     setFieldContent() {
//       if (this.multiple) {
//         this.setMultipleContentByValue();
//       } else {
//         this.setContentByValue();
//       }
//     },
//     isLocalValueSet() {
//       return this.localValue !== undefined && this.localValue !== null;
//     },
//     setLocalValueIfMultiple() {
//       if (this.isLocalValueSet()) {
//         this.localValue = [this.localValue];
//       } else {
//         this.localValue = [];
//       }
//     },
//     setLocalValueIfNotMultiple() {
//       if (this.localValue.length > 0) {
//         this.localValue = this.localValue[0];
//       } else {
//         this.localValue = null;
//       }
//     },
//     initialLocalValueByDefault() {
//       let isArray = Array.isArray(this.localValue);

//       if (this.multiple && !isArray) {
//         this.localValue = this.setLocalValueIfMultiple();
//       } else if (!this.multiple && isArray) {
//         this.localValue = this.setLocalValueIfNotMultiple();
//       }
//     },
//     emitSelected(value) {
//       this.$emit("pu-selected", value);
//     }
//   },
//   mounted() {
//     this.showSelect = false;
//     this.setFieldContent();

//     this.$nextTick().then(() => {
//       this.didMount = true;
//     });
//   },
//   updated() {
//     this.setFieldContent();
//   }
// };
// </script>

// <style lang="scss">
// .pu-menu.pu-select {
//   display: flex;
//   flex: 1;
//   overflow: auto;

//   &:not(.pu-disabled) {
//     .pu-input,
//     .pu-icon {
//       cursor: pointer;
//       outline: none;
//     }
//   }

//   .pu-input {
//     flex: 1;
//     min-width: 0;
//   }

//   select,
//   .pu-input-fake {
//     width: 1px;
//     height: 1px;
//     margin: -1px;
//     padding: 0;
//     overflow: hidden;
//     position: absolute;
//     clip: rect(0 0 0 0);
//     border: 0;
//   }
// }
// .pu-menu-content.pu-select-menu {
//   z-index: 111;
//   width: 100%;

//   &.pu-menu-content-enter {
//     transform: translate3d(0, -8px, 0) scaleY(0.3);
//   }

//   .pu-list {
//     transition: opacity 0.3s cubic-bezier(0.55, 0, 0.55, 0.2);
//   }
// }
//
</style>
