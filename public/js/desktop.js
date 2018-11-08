/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 181);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */,
/* 1 */
/***/ (function(module, exports) {

throw new Error("Module build failed: Error: ENOENT: no such file or directory, open '/home/rin4ik/work/delivery/node_modules/vue-loader/lib/component-normalizer.js'");

/***/ }),
/* 2 */,
/* 3 */
/***/ (function(module, __webpack_exports__) {

"use strict";
throw new Error("Module build failed: Error: ENOENT: no such file or directory, open '/home/rin4ik/work/delivery/node_modules/vuex/dist/vuex.esm.js'");

/***/ }),
/* 4 */
/***/ (function(module, exports) {

throw new Error("Module build failed: Error: ENOENT: no such file or directory, open '/home/rin4ik/work/delivery/node_modules/lodash/lodash.js'");

/***/ }),
/* 5 */,
/* 6 */
/***/ (function(module, exports) {

throw new Error("Module build failed: Error: ENOENT: no such file or directory, open '/home/rin4ik/work/delivery/node_modules/localforage/dist/localforage.js'");

/***/ }),
/* 7 */
/***/ (function(module, exports) {

throw new Error("Module build failed: Error: ENOENT: no such file or directory, open '/home/rin4ik/work/delivery/node_modules/css-loader/lib/css-base.js'");

/***/ }),
/* 8 */
/***/ (function(module, exports) {

throw new Error("Module build failed: Error: ENOENT: no such file or directory, open '/home/rin4ik/work/delivery/node_modules/vue-style-loader/lib/addStylesClient.js'");

/***/ }),
/* 9 */,
/* 10 */
/***/ (function(module, exports) {

"use strict";
throw new Error("Module build failed: Error: ENOENT: no such file or directory, open '/home/rin4ik/work/delivery/node_modules/vue/dist/vue.common.js'");

/***/ }),
/* 11 */
/***/ (function(module, exports) {

throw new Error("Module build failed: Error: ENOENT: no such file or directory, open '/home/rin4ik/work/delivery/node_modules/babel-runtime/regenerator/index.js'");

/***/ }),
/* 12 */,
/* 13 */,
/* 14 */,
/* 15 */,
/* 16 */,
/* 17 */,
/* 18 */,
/* 19 */
/***/ (function(module, exports) {

throw new Error("Module build failed: Error: ENOENT: no such file or directory, open '/home/rin4ik/work/delivery/node_modules/axios/index.js'");

/***/ }),
/* 20 */,
/* 21 */,
/* 22 */,
/* 23 */,
/* 24 */,
/* 25 */,
/* 26 */,
/* 27 */,
/* 28 */,
/* 29 */,
/* 30 */,
/* 31 */,
/* 32 */,
/* 33 */,
/* 34 */,
/* 35 */,
/* 36 */,
/* 37 */,
/* 38 */,
/* 39 */,
/* 40 */,
/* 41 */,
/* 42 */,
/* 43 */,
/* 44 */,
/* 45 */,
/* 46 */,
/* 47 */,
/* 48 */,
/* 49 */,
/* 50 */,
/* 51 */,
/* 52 */,
/* 53 */,
/* 54 */,
/* 55 */,
/* 56 */,
/* 57 */,
/* 58 */,
/* 59 */,
/* 60 */,
/* 61 */,
/* 62 */,
/* 63 */,
/* 64 */,
/* 65 */,
/* 66 */,
/* 67 */,
/* 68 */,
/* 69 */,
/* 70 */,
/* 71 */,
/* 72 */,
/* 73 */,
/* 74 */,
/* 75 */,
/* 76 */,
/* 77 */,
/* 78 */,
/* 79 */,
/* 80 */,
/* 81 */,
/* 82 */,
/* 83 */,
/* 84 */,
/* 85 */,
/* 86 */,
/* 87 */,
/* 88 */,
/* 89 */,
/* 90 */,
/* 91 */,
/* 92 */,
/* 93 */,
/* 94 */,
/* 95 */,
/* 96 */,
/* 97 */,
/* 98 */,
/* 99 */,
/* 100 */,
/* 101 */,
/* 102 */,
/* 103 */,
/* 104 */,
/* 105 */,
/* 106 */,
/* 107 */,
/* 108 */,
/* 109 */,
/* 110 */,
/* 111 */,
/* 112 */,
/* 113 */,
/* 114 */,
/* 115 */,
/* 116 */,
/* 117 */,
/* 118 */,
/* 119 */,
/* 120 */,
/* 121 */,
/* 122 */,
/* 123 */,
/* 124 */,
/* 125 */,
/* 126 */,
/* 127 */,
/* 128 */,
/* 129 */,
/* 130 */,
/* 131 */,
/* 132 */,
/* 133 */,
/* 134 */,
/* 135 */,
/* 136 */,
/* 137 */,
/* 138 */,
/* 139 */,
/* 140 */,
/* 141 */,
/* 142 */,
/* 143 */,
/* 144 */,
/* 145 */,
/* 146 */,
/* 147 */,
/* 148 */,
/* 149 */,
/* 150 */,
/* 151 */,
/* 152 */,
/* 153 */,
/* 154 */,
/* 155 */,
/* 156 */,
/* 157 */,
/* 158 */,
/* 159 */,
/* 160 */,
/* 161 */,
/* 162 */,
/* 163 */,
/* 164 */,
/* 165 */
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
function injectStyle (ssrContext) {
  if (disposed) return
  __webpack_require__(230)
}
var normalizeComponent = __webpack_require__(1)
/* script */
var __vue_script__ = __webpack_require__(232)
/* template */
var __vue_template__ = __webpack_require__(233)
/* template functional */
var __vue_template_functional__ = false
/* styles */
var __vue_styles__ = injectStyle
/* scopeId */
var __vue_scopeId__ = "data-v-4655b325"
/* moduleIdentifier (server only) */
var __vue_module_identifier__ = null
var Component = normalizeComponent(
  __vue_script__,
  __vue_template__,
  __vue_template_functional__,
  __vue_styles__,
  __vue_scopeId__,
  __vue_module_identifier__
)
Component.options.__file = "resources/assets/js/front/desktop/pages/NotFound.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-4655b325", Component.options)
  } else {
    hotAPI.reload("data-v-4655b325", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),
/* 166 */
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(1)
/* script */
var __vue_script__ = __webpack_require__(234)
/* template */
var __vue_template__ = __webpack_require__(240)
/* template functional */
var __vue_template_functional__ = false
/* styles */
var __vue_styles__ = null
/* scopeId */
var __vue_scopeId__ = null
/* moduleIdentifier (server only) */
var __vue_module_identifier__ = null
var Component = normalizeComponent(
  __vue_script__,
  __vue_template__,
  __vue_template_functional__,
  __vue_styles__,
  __vue_scopeId__,
  __vue_module_identifier__
)
Component.options.__file = "resources/assets/js/front/desktop/pages/catalog/Products.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-7d035dd0", Component.options)
  } else {
    hotAPI.reload("data-v-7d035dd0", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),
/* 167 */
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(1)
/* script */
var __vue_script__ = __webpack_require__(245)
/* template */
var __vue_template__ = __webpack_require__(246)
/* template functional */
var __vue_template_functional__ = false
/* styles */
var __vue_styles__ = null
/* scopeId */
var __vue_scopeId__ = null
/* moduleIdentifier (server only) */
var __vue_module_identifier__ = null
var Component = normalizeComponent(
  __vue_script__,
  __vue_template__,
  __vue_template_functional__,
  __vue_styles__,
  __vue_scopeId__,
  __vue_module_identifier__
)
Component.options.__file = "resources/assets/js/front/desktop/components/modals/Product.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-320ed538", Component.options)
  } else {
    hotAPI.reload("data-v-320ed538", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),
/* 168 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_vuex__ = __webpack_require__(3);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_vuex___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_0_vuex__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1_vue__ = __webpack_require__(10);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1_vue___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_1_vue__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2__state__ = __webpack_require__(255);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_3__mutations__ = __webpack_require__(256);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_4__actions__ = __webpack_require__(257);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_5__getters__ = __webpack_require__(169);






__WEBPACK_IMPORTED_MODULE_1_vue__["default"].use(__WEBPACK_IMPORTED_MODULE_0_vuex__["default"]);

/* harmony default export */ __webpack_exports__["a"] = (new __WEBPACK_IMPORTED_MODULE_0_vuex__["default"].Store({
    state: __WEBPACK_IMPORTED_MODULE_2__state__["a" /* default */],
    mutations: __WEBPACK_IMPORTED_MODULE_3__mutations__,
    getters: __WEBPACK_IMPORTED_MODULE_5__getters__,
    actions: __WEBPACK_IMPORTED_MODULE_4__actions__
}));

/***/ }),
/* 169 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "user", function() { return user; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "regionId", function() { return regionId; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "regionName", function() { return regionName; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "locale", function() { return locale; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "regionSlug", function() { return regionSlug; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "cart", function() { return cart; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "delivery_price", function() { return delivery_price; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "totalCart", function() { return totalCart; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "manager", function() { return manager; });
var user = function user(state) {
    return state.user;
};
var regionId = function regionId(state) {
    return state.user.region;
};
var regionName = function regionName(state) {
    return state.user.regionName;
};
var locale = function locale(state) {
    return state.user.lang;
};
var regionSlug = function regionSlug(state) {
    return state.user.regionSlug;
};
var cart = function cart(state) {
    return state.cart;
};
var delivery_price = function delivery_price(state) {
    return state.delivery_price;
};
var totalCart = function totalCart(state) {
    return state.cart.total;
};
var manager = function manager(state) {
    return state.cart.manager;
};
// export const lang = (state) => {
//     return state.user.lang
// }
// export const navbar = (state) => {
//     return state.navbar
// }
// export const minOrder = (state) => {
//     return state.user.minOrder
// }
// export const maxDelivery = (state) => {
//     return state.user.maxDelivery
// }
// export const deliveryPrice = (state) => {
//     return state.user.deliveryPrice
// }
// export const total = (state) => {
//     return state.user.total
// }

/***/ }),
/* 170 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_vue__ = __webpack_require__(10);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_vue___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_0_vue__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1_raf__ = __webpack_require__(291);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1_raf___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_1_raf__);



/* harmony default export */ __webpack_exports__["a"] = ({
  name: 'PuPortal',
  abstract: true,
  props: {
    puAttachToParent: Boolean,
    puTarget: {
      type: null,
      validator: function validator(value) {
        if (HTMLElement && value && value instanceof HTMLElement) {
          return true;
        }

        __WEBPACK_IMPORTED_MODULE_0_vue__["default"].util.warn('The pu-target-el prop is invalid. You should pass a valid HTMLElement.', this);

        return false;
      }
    }
  },
  data: function data() {
    return {
      leaveTimeout: null,
      originalParentEl: null
    };
  },
  computed: {
    transitionName: function transitionName() {
      var childrenComponent = this._vnode.componentOptions.children[0];

      if (childrenComponent) {
        var transition = childrenComponent.data.transition;

        if (transition) {
          return transition.name;
        } else {
          var _transition = childrenComponent.componentOptions.propsData.name;

          if (_transition) {
            return _transition;
          }
        }
      }

      return 'v';
    },
    leaveClass: function leaveClass() {
      return this.transitionName + '-leave';
    },
    leaveActiveClass: function leaveActiveClass() {
      return this.transitionName + '-leave-active';
    },
    leaveToClass: function leaveToClass() {
      return this.transitionName + '-leave-to';
    }
  },
  watch: {
    puTarget: function puTarget(newTarget, oldTarget) {
      this.changeParentEl(newTarget);

      if (oldTarget) {
        this.$forceUpdate();
      }
    }
  },
  methods: {
    getTransitionDuration: function getTransitionDuration(el) {
      var duration = window.getComputedStyle(el).transitionDuration;
      var num = parseFloat(duration, 10);
      var unit = duration.match(/m?s/);

      if (unit) {
        unit = unit[0];
      }

      if (unit === 's') {
        return num * 1000;
      }

      if (unit === 'ms') {
        return num;
      }

      return 0;
    },
    killGhostElement: function killGhostElement(el) {
      if (el.parentNode) {
        this.changeParentEl(this.originalParentEl);
        this.$options._parentElm = this.originalParentEl;
        el.parentNode.removeChild(el);
      }
    },
    initDestroy: function initDestroy(manualCall) {
      var _this = this;

      var el = this.$el;

      if (manualCall && this.$el.nodeType === Node.COMMENT_NODE) {
        el = this.$vnode.elm;
      }

      el.classList.add(this.leaveClass);
      el.classList.add(this.leaveActiveClass);

      this.$nextTick().then(function () {
        el.classList.add(_this.leaveToClass);

        clearTimeout(_this.leaveTimeout);
        _this.leaveTimeout = setTimeout(function () {
          _this.destroyElement(el);
        }, _this.getTransitionDuration(el));
      });
    },
    destroyElement: function destroyElement(el) {
      var _this2 = this;

      Object(__WEBPACK_IMPORTED_MODULE_1_raf__["default"])(function () {
        el.classList.remove(_this2.leaveClass);
        el.classList.remove(_this2.leaveActiveClass);
        el.classList.remove(_this2.leaveToClass);
        _this2.$emit('pu-destroy');
        _this2.killGhostElement(el);
      });
    },
    changeParentEl: function changeParentEl(newTarget) {
      newTarget && newTarget.appendChild(this.$el);
    }
  },
  mounted: function mounted() {
    if (!this.originalParentEl) {
      this.originalParentEl = this.$el.parentNode;
      this.$emit('pu-initial-parent', this.$el.parentNode);
    }

    if (this.puAttachToParent && this.$el.parentNode.parentNode) {
      this.changeParentEl(this.$el.parentNode.parentNode);
    } else if (document) {
      this.changeParentEl(this.puTarget || document.body);
    }
  },
  beforeDestroy: function beforeDestroy() {
    if (this.$el.classList) {
      this.initDestroy();
    } else {
      this.killGhostElement(this.$el);
    }
  },
  render: function render() {
    var defaultSlot = this.$slots.default;

    if (defaultSlot && defaultSlot[0]) {
      return defaultSlot[0];
    }
  }
});

/***/ }),
/* 171 */,
/* 172 */,
/* 173 */,
/* 174 */,
/* 175 */,
/* 176 */,
/* 177 */,
/* 178 */,
/* 179 */
/***/ (function(module, exports) {

throw new Error("Module build failed: Error: ENOENT: no such file or directory, open '/home/rin4ik/work/delivery/node_modules/style-loader/lib/addStyles.js'");

/***/ }),
/* 180 */,
/* 181 */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(182);


/***/ }),
/* 182 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__router__ = __webpack_require__(183);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__vuex__ = __webpack_require__(168);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2_vuex__ = __webpack_require__(3);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2_vuex___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_2_vuex__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_3_vuex_i18n__ = __webpack_require__(259);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_3_vuex_i18n___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_3_vuex_i18n__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_4__vue_i18n_locales_generated_js__ = __webpack_require__(260);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_5_localforage__ = __webpack_require__(6);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_5_localforage___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_5_localforage__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_6__components_modals_index__ = __webpack_require__(261);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_7__components_prisma_material__ = __webpack_require__(268);
window.Vue = __webpack_require__(10);






// require('../../bootstrap')


// import vuelidate from 'vuelidate'

// Vue.use(vuelidate)
Vue.use(__WEBPACK_IMPORTED_MODULE_7__components_prisma_material__["a" /* default */]);
var config = {
    moduleName: 'lang',
    translateFilterName: 't'
    // set the start locale to use
};Vue.use(__WEBPACK_IMPORTED_MODULE_3_vuex_i18n__["default"].plugin, __WEBPACK_IMPORTED_MODULE_1__vuex__["a" /* default */], config);

Vue.i18n.add('ru', __WEBPACK_IMPORTED_MODULE_4__vue_i18n_locales_generated_js__["a" /* default */].ru);
Vue.i18n.add('uz', __WEBPACK_IMPORTED_MODULE_4__vue_i18n_locales_generated_js__["a" /* default */].uz);
Vue.i18n.fallback('ru');

Object.values(__WEBPACK_IMPORTED_MODULE_6__components_modals_index__).forEach(function (Modal) {
    Vue.use(Modal);
});

window.axios = __webpack_require__(19);

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Next we will register the CSRF Token as a common header with Axios so that
 * all outgoing HTTP requests automatically have it attached. This is just
 * a simple convenience so we don't have to attach every token manually.
 */

var token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}

__WEBPACK_IMPORTED_MODULE_5_localforage__["default"].config({
    driver: __WEBPACK_IMPORTED_MODULE_5_localforage__["default"].LOCALSTORAGE
    // storeName: 'delivery'
});
Vue.filter('toCurrency', function (value) {
    if (typeof value !== "number") {
        return value;
    }
    return value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ");
});

// Vue.component('PuRadio', require('./front/desktop/components/PuRadio/PuRadio.vue')) 

var app = new Vue({
    store: __WEBPACK_IMPORTED_MODULE_1__vuex__["a" /* default */],
    el: '#desktop',
    router: __WEBPACK_IMPORTED_MODULE_0__router__["a" /* default */],
    data: {
        showPage: false
    },
    methods: {
        pageReady: function pageReady() {
            this.showPage = true;
        }
    },
    beforeCreate: function beforeCreate() {
        __WEBPACK_IMPORTED_MODULE_1__vuex__["a" /* default */].dispatch('checkLangExists');
        __WEBPACK_IMPORTED_MODULE_1__vuex__["a" /* default */].dispatch('setManager').then(function () {
            __WEBPACK_IMPORTED_MODULE_1__vuex__["a" /* default */].dispatch("setCart");
            __WEBPACK_IMPORTED_MODULE_1__vuex__["a" /* default */].dispatch('setTotal');
        });
        __WEBPACK_IMPORTED_MODULE_1__vuex__["a" /* default */].dispatch('setToken').then(function () {
            __WEBPACK_IMPORTED_MODULE_1__vuex__["a" /* default */].dispatch('fetchUser').catch(function () {
                __WEBPACK_IMPORTED_MODULE_1__vuex__["a" /* default */].dispatch('clearAuth');
                __WEBPACK_IMPORTED_MODULE_0__router__["a" /* default */].replace({ name: 'home' });
            }).catch(function () {
                __WEBPACK_IMPORTED_MODULE_1__vuex__["a" /* default */].dispatch('clearAuth');
                __WEBPACK_IMPORTED_MODULE_1__vuex__["a" /* default */].dispatch('showNavbar');
            });
        });
    }
});

/***/ }),
/* 183 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_vue__ = __webpack_require__(10);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_vue___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_0_vue__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__routes__ = __webpack_require__(184);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2_vue_router__ = __webpack_require__(253);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2_vue_router___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_2_vue_router__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_3__beforeEach__ = __webpack_require__(254);

// import store from './store'




__WEBPACK_IMPORTED_MODULE_0_vue__["default"].use(__WEBPACK_IMPORTED_MODULE_2_vue_router__["default"]);

var router = new __WEBPACK_IMPORTED_MODULE_2_vue_router__["default"]({
    linkActiveClass: "active",
    mode: 'history',
    routes: __WEBPACK_IMPORTED_MODULE_1__routes__["a" /* default */],
    scrollBehavior: function scrollBehavior(to, from, savedPosition) {
        //https://router.vuejs.org/guide/advanced/scroll-behavior.html
        if (to.hash) {
            return { selector: to.hash };
        } else if (savedPosition) {

            return savedPosition;
        } else {
            if (to.name != 'category' && to.name != 'catalog' && to.name != 'tp' && to.name != 'pp') {
                // alert(to.name)
                return new Promise(function (resolve, reject) {
                    setTimeout(function () {
                        resolve({ x: 0, y: 0 });
                    }, 500);
                });
            }
        }
    }
});
router.beforeEach(__WEBPACK_IMPORTED_MODULE_3__beforeEach__["a" /* default */]);
/* harmony default export */ __webpack_exports__["a"] = (router);

/***/ }),
/* 184 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__layouts_Dashboard__ = __webpack_require__(185);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__layouts_Dashboard___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_0__layouts_Dashboard__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__pages_main_Home__ = __webpack_require__(201);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__pages_main_Home___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_1__pages_main_Home__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2__pages_Profile__ = __webpack_require__(206);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2__pages_Profile___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_2__pages_Profile__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_3__pages_Orders__ = __webpack_require__(216);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_3__pages_Orders___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_3__pages_Orders__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_4__pages_Delivery__ = __webpack_require__(219);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_4__pages_Delivery___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_4__pages_Delivery__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_5__pages_Return__ = __webpack_require__(222);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_5__pages_Return___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_5__pages_Return__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_6__pages_Partners__ = __webpack_require__(225);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_6__pages_Partners___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_6__pages_Partners__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_7__pages_catalog_Catalog__ = __webpack_require__(228);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_7__pages_catalog_Catalog___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_7__pages_catalog_Catalog__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_8__pages_catalog_Products__ = __webpack_require__(166);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_8__pages_catalog_Products___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_8__pages_catalog_Products__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_9__components_modals_Product__ = __webpack_require__(167);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_9__components_modals_Product___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_9__components_modals_Product__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_10__pages_Cart__ = __webpack_require__(247);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_10__pages_Cart___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_10__pages_Cart__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_11__pages_NotFound__ = __webpack_require__(165);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_11__pages_NotFound___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_11__pages_NotFound__);













// import store from '../vuex'

/* harmony default export */ __webpack_exports__["a"] = ([{
    path: '',
    component: __WEBPACK_IMPORTED_MODULE_0__layouts_Dashboard___default.a,
    children: [{
        path: '/',
        name: 'home',
        component: __WEBPACK_IMPORTED_MODULE_1__pages_main_Home___default.a,
        meta: {
            guest: true,
            needsAuth: false
        }
    }, {
        path: '/profile',
        name: 'profile',
        component: __WEBPACK_IMPORTED_MODULE_2__pages_Profile___default.a,
        meta: {
            guest: false,
            needsAuth: true
        }
    }, {
        path: '/orders',
        name: 'orders',
        component: __WEBPACK_IMPORTED_MODULE_3__pages_Orders___default.a,
        meta: {
            guest: false,
            needsAuth: true
        }
    }, {
        path: '/cart',
        name: 'cart',
        component: __WEBPACK_IMPORTED_MODULE_10__pages_Cart___default.a,
        meta: {
            guest: true,
            needsAuth: false
        }
    }, {
        path: '/return',
        name: 'return',
        component: __WEBPACK_IMPORTED_MODULE_5__pages_Return___default.a,
        meta: {
            guest: true,
            needsAuth: false
        }
    }, {
        path: '/partners',
        name: 'partners',
        component: __WEBPACK_IMPORTED_MODULE_6__pages_Partners___default.a,
        meta: {
            guest: true,
            needsAuth: false
        }
    }, {
        path: '/delivery',
        name: 'delivery',
        component: __WEBPACK_IMPORTED_MODULE_4__pages_Delivery___default.a,
        meta: {
            guest: true,
            needsAuth: false
        }
    }, {
        path: '/:city/:slug',
        name: 'catalog',
        component: __WEBPACK_IMPORTED_MODULE_7__pages_catalog_Catalog___default.a,
        meta: {
            guest: true,
            needsAuth: false
        },
        children: [{
            path: 'cats/:sluged',
            name: 'category',
            component: __WEBPACK_IMPORTED_MODULE_8__pages_catalog_Products___default.a,
            meta: {
                guest: true,
                needsAuth: false
            },
            children: [{
                path: ':product',
                name: 'pp',
                component: __WEBPACK_IMPORTED_MODULE_9__components_modals_Product___default.a,
                meta: {
                    guest: true,
                    needsAuth: false
                }
            }]
        }, {
            path: ':product',
            name: 'tp',
            component: __WEBPACK_IMPORTED_MODULE_9__components_modals_Product___default.a,
            meta: {
                guest: true,
                needsAuth: false
            }
        }]
    }, {
        path: '*',
        name: 'notFound',
        component: __WEBPACK_IMPORTED_MODULE_11__pages_NotFound___default.a,
        meta: {
            guest: true,
            needsAuth: false
        }
    }]
    // {
    //     path: '/settings',
    //     name: 'settings',
    //     component: Settings,
    //     meta: {
    //         guest: false,
    //         needsAuth: true
    //     }
    // },
    // {
    //     path: '/orders',
    //     name: 'orders',
    //     component: Orders,
    //     meta: {
    //         guest: false,
    //         needsAuth: true
    //     }
    // },
    // {
    //     path: '/contacts',
    //     name: 'contacts',
    //     component: Contacts,
    //     meta: {
    //         guest: true,
    //         needsAuth: false
    //     }
    // },
    // {
    //     path: '/cart',
    //     name: 'cart',
    //     component: Cart,
    //     meta: {
    //         guest: true,
    //         needsAuth: false
    //     }
    // },
    // {
    //     path: '/terms',
    //     name: 'terms',
    //     component: Terms,
    //     meta: {
    //         guest: true,
    //         needsAuth: false
    //     }
    // },
    // {
    //     path: '/delivery',
    //     name: 'delivery',
    //     component: Delivery,
    //     meta: {
    //         guest: true,
    //         needsAuth: false
    //     }
    // },
    // {
    //     path: '/checkout',
    //     name: 'checkout',
    //     component: Checkout,
    //     meta: {
    //         guest: false,
    //         needsAuth: true
    //     }
}]);

/***/ }),
/* 185 */
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(1)
/* script */
var __vue_script__ = __webpack_require__(186)
/* template */
var __vue_template__ = __webpack_require__(200)
/* template functional */
var __vue_template_functional__ = false
/* styles */
var __vue_styles__ = null
/* scopeId */
var __vue_scopeId__ = null
/* moduleIdentifier (server only) */
var __vue_module_identifier__ = null
var Component = normalizeComponent(
  __vue_script__,
  __vue_template__,
  __vue_template_functional__,
  __vue_styles__,
  __vue_scopeId__,
  __vue_module_identifier__
)
Component.options.__file = "resources/assets/js/front/desktop/layouts/Dashboard.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-48a983da", Component.options)
  } else {
    hotAPI.reload("data-v-48a983da", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),
/* 186 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_babel_runtime_regenerator__ = __webpack_require__(11);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_babel_runtime_regenerator___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_0_babel_runtime_regenerator__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1_localforage__ = __webpack_require__(6);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1_localforage___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_1_localforage__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2_lodash__ = __webpack_require__(4);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2_lodash___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_2_lodash__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_3__components_Footer__ = __webpack_require__(189);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_3__components_Footer___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_3__components_Footer__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_4__components_Navbar__ = __webpack_require__(191);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_4__components_Navbar___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_4__components_Navbar__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_5__components_CartInfo__ = __webpack_require__(197);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_5__components_CartInfo___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_5__components_CartInfo__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_6_vuex__ = __webpack_require__(3);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_6_vuex___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_6_vuex__);


var _extends = Object.assign || function (target) { for (var i = 1; i < arguments.length; i++) { var source = arguments[i]; for (var key in source) { if (Object.prototype.hasOwnProperty.call(source, key)) { target[key] = source[key]; } } } return target; };

function _asyncToGenerator(fn) { return function () { var gen = fn.apply(this, arguments); return new Promise(function (resolve, reject) { function step(key, arg) { try { var info = gen[key](arg); var value = info.value; } catch (error) { reject(error); return; } if (info.done) { resolve(value); } else { return Promise.resolve(value).then(function (value) { step("next", value); }, function (err) { step("throw", err); }); } } return step("next"); }); }; }

//
//
//
//
//
//
//
//
//
//
//
//








/* harmony default export */ __webpack_exports__["default"] = ({
  data: function data() {
    return {
      regions: [],
      showPage: false

    };
  },

  components: { CartInfo: __WEBPACK_IMPORTED_MODULE_5__components_CartInfo___default.a, Navbar: __WEBPACK_IMPORTED_MODULE_4__components_Navbar___default.a, Footer: __WEBPACK_IMPORTED_MODULE_3__components_Footer___default.a },
  computed: _extends({}, Object(__WEBPACK_IMPORTED_MODULE_6_vuex__["mapGetters"])({
    lang: 'locale'
  })),
  methods: _extends({}, Object(__WEBPACK_IMPORTED_MODULE_6_vuex__["mapActions"])({
    setRegionId: 'setRegionId',
    setRegion: 'setRegion'
  }), {
    getRegions: function () {
      var _ref = _asyncToGenerator( /*#__PURE__*/__WEBPACK_IMPORTED_MODULE_0_babel_runtime_regenerator__["default"].mark(function _callee() {
        var response;
        return __WEBPACK_IMPORTED_MODULE_0_babel_runtime_regenerator__["default"].wrap(function _callee$(_context) {
          while (1) {
            switch (_context.prev = _context.next) {
              case 0:
                _context.next = 2;
                return axios.get("/api/regions");

              case 2:
                response = _context.sent;

                this.regions = response.data.data;
                _context.next = 6;
                return this.$emit("ready");

              case 6:
              case "end":
                return _context.stop();
            }
          }
        }, _callee, this);
      }));

      function getRegions() {
        return _ref.apply(this, arguments);
      }

      return getRegions;
    }(),
    setRegionD: function () {
      var _ref2 = _asyncToGenerator( /*#__PURE__*/__WEBPACK_IMPORTED_MODULE_0_babel_runtime_regenerator__["default"].mark(function _callee2() {
        var _this = this;

        return __WEBPACK_IMPORTED_MODULE_0_babel_runtime_regenerator__["default"].wrap(function _callee2$(_context2) {
          while (1) {
            switch (_context2.prev = _context2.next) {
              case 0:
                _context2.next = 2;
                return __WEBPACK_IMPORTED_MODULE_1_localforage__["default"].getItem('region').then(function (region) {
                  if (Object(__WEBPACK_IMPORTED_MODULE_2_lodash__["isEmpty"])(region)) {
                    _this.setRegionId("1");
                  }
                });

              case 2:
              case "end":
                return _context2.stop();
            }
          }
        }, _callee2, this);
      }));

      function setRegionD() {
        return _ref2.apply(this, arguments);
      }

      return setRegionD;
    }()
    // replacePage() {
    //   if (this.$route.params.sluged) {
    //     this.$router.replace({
    //       name: "category",
    //       params: { sluged: this.$route.params.sluged }
    //     });
    //   } else {
    //     this.$router.replace({
    //       name: "catalog",
    //       params: { slug: this.$route.params.slug }
    //     });
    //   }
    // }

  }),
  watch: {
    $route: {
      immediate: true,
      handler: function handler($route) {
        Vue.nextTick(function () {
          if ($route.name == "pp") {
            $("#product").modal("show");
          } else {
            if ($route.name == "tp") {
              $("#product").modal("show");
            }
          }
        });
      }
    },
    lang: function lang() {
      this.getRegions();
    }
  },
  created: function () {
    var _ref3 = _asyncToGenerator( /*#__PURE__*/__WEBPACK_IMPORTED_MODULE_0_babel_runtime_regenerator__["default"].mark(function _callee3() {
      var _this2 = this;

      return __WEBPACK_IMPORTED_MODULE_0_babel_runtime_regenerator__["default"].wrap(function _callee3$(_context3) {
        while (1) {
          switch (_context3.prev = _context3.next) {
            case 0:
              this.$router.beforeEach(function (to, from, next) {
                _this2.showPage = false;
                next();
              });
              this.$nextTick(function () {
                _this2.getRegions();
              });
              _context3.next = 4;
              return this.setRegion();

            case 4:
              $("#Regions").on("hide.bs.modal", this.setRegionD);

            case 5:
            case "end":
              return _context3.stop();
          }
        }
      }, _callee3, this);
    }));

    function created() {
      return _ref3.apply(this, arguments);
    }

    return created;
  }()
});

/***/ }),
/* 187 */,
/* 188 */,
/* 189 */
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(1)
/* script */
var __vue_script__ = null
/* template */
var __vue_template__ = __webpack_require__(190)
/* template functional */
var __vue_template_functional__ = false
/* styles */
var __vue_styles__ = null
/* scopeId */
var __vue_scopeId__ = null
/* moduleIdentifier (server only) */
var __vue_module_identifier__ = null
var Component = normalizeComponent(
  __vue_script__,
  __vue_template__,
  __vue_template_functional__,
  __vue_styles__,
  __vue_scopeId__,
  __vue_module_identifier__
)
Component.options.__file = "resources/assets/js/front/desktop/components/Footer.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-579cb379", Component.options)
  } else {
    hotAPI.reload("data-v-579cb379", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),
/* 190 */
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("footer", { staticClass: "footer" }, [
    _c("div", { staticClass: "container" }, [
      _c("div", { staticClass: "row" }, [
        _c("div", { staticClass: "col-3" }, [
          _c("h5", { staticClass: "title" }, [_vm._v("Покупателям")]),
          _vm._v(" "),
          _c("ul", { staticClass: "nav footer-nav" }, [
            _c(
              "li",
              { staticClass: "nav-item" },
              [
                _c("router-link", { attrs: { to: { name: "delivery" } } }, [
                  _vm._v("\n              Доставка и оплата\n            ")
                ])
              ],
              1
            ),
            _vm._v(" "),
            _c(
              "li",
              { staticClass: "nav-item" },
              [
                _c("router-link", { attrs: { to: { name: "return" } } }, [
                  _vm._v("\n              Возврат \n            ")
                ])
              ],
              1
            )
          ])
        ]),
        _vm._v(" "),
        _c("div", { staticClass: "col-3" }, [
          _c("h5", { staticClass: "title" }, [_vm._v("Магазинам")]),
          _vm._v(" "),
          _c("ul", { staticClass: "nav footer-nav" }, [
            _c(
              "li",
              { staticClass: "nav-item" },
              [
                _c("router-link", { attrs: { to: { name: "partners" } } }, [
                  _vm._v(
                    "\n            Как начать сотрудничество\n            "
                  )
                ])
              ],
              1
            ),
            _vm._v(" "),
            _vm._m(0)
          ])
        ]),
        _vm._v(" "),
        _vm._m(1)
      ])
    ])
  ])
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("li", { staticClass: "nav-item" }, [
      _c("a", { staticClass: "nav-link", attrs: { href: "/cp" } }, [
        _vm._v("Войти в личный кабинет")
      ])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "col-6 text-right" }, [
      _c("h5", { staticClass: "footer-phone" }, [
        _c("a", { attrs: { href: "/" } }, [_vm._v("+998 (91) 7778811")])
      ]),
      _vm._v(" "),
      _c("ul", { staticClass: "nav footer-nav" }, [
        _c("li", { staticClass: "nav-item footer-dev" }, [
          _vm._v("Дизайн и разработка"),
          _c("a", { staticClass: "nav-link", attrs: { href: "/" } }, [
            _vm._v("Prisma")
          ])
        ]),
        _vm._v(" "),
        _c("li", { staticClass: "nav-item footer-copy" }, [
          _vm._v("© 2018 Dostavka")
        ])
      ])
    ])
  }
]
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-579cb379", module.exports)
  }
}

/***/ }),
/* 191 */
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
function injectStyle (ssrContext) {
  if (disposed) return
  __webpack_require__(192)
}
var normalizeComponent = __webpack_require__(1)
/* script */
var __vue_script__ = __webpack_require__(195)
/* template */
var __vue_template__ = __webpack_require__(196)
/* template functional */
var __vue_template_functional__ = false
/* styles */
var __vue_styles__ = injectStyle
/* scopeId */
var __vue_scopeId__ = null
/* moduleIdentifier (server only) */
var __vue_module_identifier__ = null
var Component = normalizeComponent(
  __vue_script__,
  __vue_template__,
  __vue_template_functional__,
  __vue_styles__,
  __vue_scopeId__,
  __vue_module_identifier__
)
Component.options.__file = "resources/assets/js/front/desktop/components/Navbar.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-13625124", Component.options)
  } else {
    hotAPI.reload("data-v-13625124", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),
/* 192 */
/***/ (function(module, exports, __webpack_require__) {

// style-loader: Adds some css to the DOM by adding a <style> tag

// load the styles
var content = __webpack_require__(193);
if(typeof content === 'string') content = [[module.i, content, '']];
if(content.locals) module.exports = content.locals;
// add the styles to the DOM
var update = __webpack_require__(8)("97d34a20", content, false, {});
// Hot Module Replacement
if(false) {
 // When the styles change, update the <style> tags
 if(!content.locals) {
   module.hot.accept("!!../../../../../../node_modules/css-loader/index.js!../../../../../../node_modules/vue-loader/lib/style-compiler/index.js?{\"vue\":true,\"id\":\"data-v-13625124\",\"scoped\":false,\"hasInlineConfig\":true}!../../../../../../node_modules/vue-loader/lib/selector.js?type=styles&index=0!./Navbar.vue", function() {
     var newContent = require("!!../../../../../../node_modules/css-loader/index.js!../../../../../../node_modules/vue-loader/lib/style-compiler/index.js?{\"vue\":true,\"id\":\"data-v-13625124\",\"scoped\":false,\"hasInlineConfig\":true}!../../../../../../node_modules/vue-loader/lib/selector.js?type=styles&index=0!./Navbar.vue");
     if(typeof newContent === 'string') newContent = [[module.id, newContent, '']];
     update(newContent);
   });
 }
 // When the module is disposed, remove the <style> tags
 module.hot.dispose(function() { update(); });
}

/***/ }),
/* 193 */
/***/ (function(module, exports, __webpack_require__) {

exports = module.exports = __webpack_require__(7)(false);
// imports


// module
exports.push([module.i, "\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n/* .dropdown-item:hover {\n  background-color: #4aae9b;\n  color: white;\n} */\n.highlightText {\n  font-weight: 600;\n  /* background-color: #fd5646; */\n  color: black;\n}\n", ""]);

// exports


/***/ }),
/* 194 */,
/* 195 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_vuex__ = __webpack_require__(3);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_vuex___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_0_vuex__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1_lodash__ = __webpack_require__(4);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1_lodash___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_1_lodash__);
var _extends = Object.assign || function (target) { for (var i = 1; i < arguments.length; i++) { var source = arguments[i]; for (var key in source) { if (Object.prototype.hasOwnProperty.call(source, key)) { target[key] = source[key]; } } } return target; };

//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//



/* harmony default export */ __webpack_exports__["default"] = ({
  props: ["regions"],
  data: function data() {
    return {
      region: "",
      show: true,
      search: "",
      products: [],
      id: this.regionId
    };
  },

  methods: _extends({
    highlight: function highlight(name) {
      if (!this.search) {
        return name;
      }
      return name.replace(new RegExp(this.search, "gi"), function (match) {
        return '<em class="highlightText">' + match + "</em>";
      });
    },
    showProduct: function showProduct(product) {
      if (this.$route.name == "catalog") {
        this.$router.push({ name: "tp", params: { product: product.slug } });
      } else {
        this.$router.push({ name: "pp", params: { product: product.slug } });
      }
      this.show = false;
    }
  }, Object(__WEBPACK_IMPORTED_MODULE_0_vuex__["mapActions"])({
    logout: "logout",
    setRegion: "setRegionId",
    setRegionName: "setRegionName",
    langChange: "langChange"
  }), {
    regionData: function regionData() {
      var _this = this;

      this.regions.map(function (value, key) {
        if (value.id == _this.regionId) {
          _this.region = value;
          _this.setRegionName(value);
        }
      });
    },
    signout: function signout() {
      var _this2 = this;

      this.logout().then(function () {
        _this2.phone = "";
        if (!_this2.$route.meta.guest) {
          _this2.$router.replace({ name: "home" });
        }
      });
    },
    changeLocale: function changeLocale(lang) {
      if (lang != this.locale) {
        this.langChange(lang);
      }
    }
  }),
  computed: Object(__WEBPACK_IMPORTED_MODULE_0_vuex__["mapGetters"])({
    regionId: "regionId",
    locale: "locale",
    user: "user"
  }),

  watch: {
    $route: function $route() {
      this.search = "";
    },

    regionId: {
      immediate: true,
      handler: function handler(regionId) {
        this.setRegion(regionId);
        this.regionData();
      }
    },
    regions: {
      immediate: true,
      handler: function handler(regions) {
        this.regionData();
      }
    },
    search: __WEBPACK_IMPORTED_MODULE_1_lodash__["default"].debounce(function () {
      var _this3 = this;

      if (this.search.length < 3) {
        this.products = [];
        return;
      }
      axios.get("/api/products/search?q=" + this.search + "&manager=" + this.$route.params.slug).then(function (response) {
        _this3.products = response.data.data;
      });
    }, 300)
  }
});

/***/ }),
/* 196 */
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("header", { staticClass: "header" }, [
    _c("div", { staticClass: "container" }, [
      _c("div", { staticClass: "header-inner" }, [
        _c("ul", { staticClass: "nav header-nav" }, [
          _c(
            "li",
            { staticClass: "nav-item" },
            [
              _c(
                "router-link",
                {
                  staticClass: "nav-link",
                  attrs: { to: { name: "home" }, exact: "" }
                },
                [_vm._v(_vm._s(_vm.$t("header.shops")))]
              )
            ],
            1
          ),
          _vm._v(" "),
          _c(
            "li",
            { staticClass: "nav-item" },
            [
              _c(
                "router-link",
                {
                  staticClass: "nav-link",
                  attrs: { to: { name: "delivery" } }
                },
                [_vm._v(_vm._s(_vm.$t("header.delivery")))]
              )
            ],
            1
          )
        ]),
        _vm._v(" "),
        _vm.$route.name == "catalog" ||
        _vm.$route.name == "category" ||
        _vm.$route.name == "pp" ||
        _vm.$route.name == "tp"
          ? _c("div", { staticClass: "input-group header-search" }, [
              _c("input", {
                directives: [
                  {
                    name: "model",
                    rawName: "v-model",
                    value: _vm.search,
                    expression: "search"
                  }
                ],
                staticClass: "form-control",
                attrs: { type: "search", placeholder: "Поиск товаров" },
                domProps: { value: _vm.search },
                on: {
                  focus: function($event) {
                    _vm.show = true
                  },
                  input: function($event) {
                    if ($event.target.composing) {
                      return
                    }
                    _vm.search = $event.target.value
                  }
                }
              }),
              _vm._v(" "),
              _c(
                "div",
                {
                  directives: [
                    {
                      name: "show",
                      rawName: "v-show",
                      value: _vm.products.length && _vm.show,
                      expression: "products.length && show"
                    }
                  ],
                  staticClass: "dropdown-menu w-100  ",
                  staticStyle: { display: "block" }
                },
                _vm._l(_vm.products, function(product) {
                  return _c(
                    "div",
                    {
                      key: product.id,
                      staticClass: "dropdown-item",
                      on: {
                        click: function($event) {
                          _vm.showProduct(product)
                        }
                      }
                    },
                    [
                      _c("div", {
                        domProps: {
                          innerHTML: _vm._s(_vm.highlight(product.name))
                        }
                      })
                    ]
                  )
                })
              )
            ])
          : _vm._e(),
        _vm._v(" "),
        _c("div", { staticClass: "header-controls" }, [
          _c("div", { staticClass: "dropdown" }, [
            _c(
              "button",
              {
                staticClass: "btn btn-link header-lang-toggle dropdown-toggle",
                attrs: {
                  type: "button",
                  "data-toggle": "dropdown",
                  "aria-haspopup": "true",
                  "aria-expanded": "false"
                }
              },
              [_vm._v(_vm._s(_vm.locale == "ru" ? "Русский" : "O`zbekcha"))]
            ),
            _vm._v(" "),
            _c("div", { staticClass: "dropdown-menu" }, [
              _c(
                "a",
                {
                  staticClass: "dropdown-item acitve",
                  on: {
                    click: function($event) {
                      $event.preventDefault()
                      _vm.changeLocale("ru")
                    }
                  }
                },
                [_vm._v("Русский")]
              ),
              _vm._v(" "),
              _c(
                "a",
                {
                  staticClass: "dropdown-item",
                  on: {
                    click: function($event) {
                      $event.preventDefault()
                      _vm.changeLocale("uz")
                    }
                  }
                },
                [_vm._v("O`zbekcha")]
              )
            ])
          ]),
          _vm._v(" "),
          _c(
            "button",
            {
              staticClass: "btn btn-link header-profile-toggle",
              attrs: {
                type: "button",
                "data-toggle": "modal",
                "data-target": "#Regions"
              }
            },
            [
              _c("i", { staticClass: "icon" }, [_vm._v("place")]),
              _c("span", { staticClass: "text" }, [
                _vm._v(_vm._s(_vm.region.name))
              ])
            ]
          ),
          _vm._v(" "),
          _vm.user.data && _vm.user.data.phone
            ? _c("div", { staticClass: "dropdown" }, [
                _vm._m(0),
                _vm._v(" "),
                _c(
                  "div",
                  { staticClass: "dropdown-menu dropdown-menu-right" },
                  [
                    _c(
                      "router-link",
                      {
                        staticClass: "dropdown-item",
                        attrs: { to: { name: "profile" } }
                      },
                      [_vm._v("Мои данные")]
                    ),
                    _vm._v(" "),
                    _c(
                      "router-link",
                      {
                        staticClass: "dropdown-item",
                        attrs: { to: { name: "orders" } }
                      },
                      [_vm._v("Мои Заказы")]
                    ),
                    _vm._v(" "),
                    _c("div", { staticClass: "dropdown-divider" }),
                    _vm._v(" "),
                    _c(
                      "a",
                      {
                        staticClass: "dropdown-item",
                        on: {
                          click: function($event) {
                            $event.preventDefault()
                            return _vm.signout($event)
                          }
                        }
                      },
                      [_vm._v(_vm._s(_vm.$t("header.logout")))]
                    )
                  ],
                  1
                )
              ])
            : _c(
                "button",
                {
                  staticClass: "btn btn-link header-profile-toggle",
                  attrs: {
                    type: "button",
                    "data-toggle": "modal",
                    "data-target": "#login"
                  }
                },
                [
                  _c("i", { staticClass: "icon" }, [_vm._v("person")]),
                  _c("span", { staticClass: "text" }, [
                    _vm._v(_vm._s(_vm.$t("header.login")))
                  ])
                ]
              )
        ])
      ])
    ])
  ])
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "button",
      {
        staticClass: "btn btn-link header-profile-toggle",
        attrs: {
          type: "button",
          "data-toggle": "dropdown",
          "aria-haspopup": "true",
          "aria-expanded": "false"
        }
      },
      [
        _c("i", { staticClass: "icon" }, [_vm._v("person")]),
        _c("span", { staticClass: "text" }, [_vm._v("Mening profilim")])
      ]
    )
  }
]
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-13625124", module.exports)
  }
}

/***/ }),
/* 197 */
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(1)
/* script */
var __vue_script__ = __webpack_require__(198)
/* template */
var __vue_template__ = __webpack_require__(199)
/* template functional */
var __vue_template_functional__ = false
/* styles */
var __vue_styles__ = null
/* scopeId */
var __vue_scopeId__ = null
/* moduleIdentifier (server only) */
var __vue_module_identifier__ = null
var Component = normalizeComponent(
  __vue_script__,
  __vue_template__,
  __vue_template_functional__,
  __vue_styles__,
  __vue_scopeId__,
  __vue_module_identifier__
)
Component.options.__file = "resources/assets/js/front/desktop/components/CartInfo.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-99537268", Component.options)
  } else {
    hotAPI.reload("data-v-99537268", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),
/* 198 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_vuex__ = __webpack_require__(3);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_vuex___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_0_vuex__);
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//


/* harmony default export */ __webpack_exports__["default"] = ({
  data: function data() {
    return {
      // manager: null
    };
  },

  computed: Object(__WEBPACK_IMPORTED_MODULE_0_vuex__["mapGetters"])({
    cartInfo: "cart",
    manager: "manager"
  }),
  watch: {
    manager: {
      immediate: true,
      handler: function handler() {
        // this.fetchManager();
        this.getTotalOfCart();
      }
    },
    cartInfo: function cartInfo() {
      // getTotalOfCart();
    }
  },
  methods: {
    // fetchManager() {
    //   console.log(this.managerSlug);
    //   axios.get(`/api/managers/${this.managerSlug}`).then(response => {
    //     this.manager = response.data.data;
    //   });
    // },
    getTotalOfCart: function getTotalOfCart() {
      // if (this.manager.slug) {
      //   axios
      //     .get(`/api/managers/${this.manager.slug}/products`)
      //     .then(response => {
      //       let manager = response.data;
      //       // manager.products;
      //     });
      // }
    }
  }
});

/***/ }),
/* 199 */
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _vm.cartInfo.total > 0 && _vm.manager && _vm.$route.name != "cart"
    ? _c("div", { staticClass: "cart-card" }, [
        _c("div", { staticClass: "container" }, [
          _c("div", { staticClass: "row" }, [
            _c(
              "div",
              { staticClass: "col-auto" },
              [
                _c("router-link", { attrs: { to: { name: "cart" } } }, [
                  _c("i", { staticClass: "icon" }, [_vm._v("shopping_cart")]),
                  _vm._v(" "),
                  _c("span", { staticClass: "text" }, [
                    _vm._v(_vm._s(_vm.$t("cart.cart")))
                  ])
                ])
              ],
              1
            ),
            _vm._v(" "),
            _c("div", { staticClass: "col cart-card-center" }, [
              _c("div", { staticClass: "item" }, [
                _vm._v(_vm._s(_vm.$t("cart.shop")) + ": "),
                _c("a", { attrs: { href: "/" } }, [
                  _vm._v(_vm._s(_vm.manager.name))
                ])
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "item" }, [
                _vm._v(
                  _vm._s(_vm.$t("cart.inCart")) +
                    " " +
                    _vm._s(_vm.cartInfo.prods.length)
                )
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "item" }, [
                _vm._v(
                  _vm._s(_vm.$t("cart.price")) +
                    " " +
                    _vm._s(_vm._f("toCurrency")(_vm.cartInfo.total)) +
                    " " +
                    _vm._s(_vm.$t("cart.sum"))
                )
              ])
            ]),
            _vm._v(" "),
            _c(
              "div",
              { staticClass: "col-auto" },
              [
                _c(
                  "router-link",
                  {
                    staticClass: "btn btn-green",
                    attrs: { to: { name: "cart" } }
                  },
                  [_vm._v(_vm._s(_vm.$t("cart.button")))]
                )
              ],
              1
            )
          ])
        ])
      ])
    : _vm._e()
}
var staticRenderFns = []
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-99537268", module.exports)
  }
}

/***/ }),
/* 200 */
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "div",
    [
      _c("Navbar", { attrs: { regions: _vm.regions } }),
      _vm._v(" "),
      _c("router-view"),
      _vm._v(" "),
      _c("CartInfo"),
      _vm._v(" "),
      _c("Footer"),
      _vm._v(" "),
      _c("RegionModal", { attrs: { regions: _vm.regions } }),
      _vm._v(" "),
      _c("LoginModal"),
      _vm._v(" "),
      _c("ProductModal")
    ],
    1
  )
}
var staticRenderFns = []
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-48a983da", module.exports)
  }
}

/***/ }),
/* 201 */
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(1)
/* script */
var __vue_script__ = __webpack_require__(202)
/* template */
var __vue_template__ = __webpack_require__(205)
/* template functional */
var __vue_template_functional__ = false
/* styles */
var __vue_styles__ = null
/* scopeId */
var __vue_scopeId__ = null
/* moduleIdentifier (server only) */
var __vue_module_identifier__ = null
var Component = normalizeComponent(
  __vue_script__,
  __vue_template__,
  __vue_template_functional__,
  __vue_styles__,
  __vue_scopeId__,
  __vue_module_identifier__
)
Component.options.__file = "resources/assets/js/front/desktop/pages/main/Home.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-98b60822", Component.options)
  } else {
    hotAPI.reload("data-v-98b60822", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),
/* 202 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_babel_runtime_regenerator__ = __webpack_require__(11);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_babel_runtime_regenerator___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_0_babel_runtime_regenerator__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__components_InnerHeader__ = __webpack_require__(203);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__components_InnerHeader___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_1__components_InnerHeader__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2_vuex__ = __webpack_require__(3);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2_vuex___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_2_vuex__);


var _extends = Object.assign || function (target) { for (var i = 1; i < arguments.length; i++) { var source = arguments[i]; for (var key in source) { if (Object.prototype.hasOwnProperty.call(source, key)) { target[key] = source[key]; } } } return target; };

function _asyncToGenerator(fn) { return function () { var gen = fn.apply(this, arguments); return new Promise(function (resolve, reject) { function step(key, arg) { try { var info = gen[key](arg); var value = info.value; } catch (error) { reject(error); return; } if (info.done) { resolve(value); } else { return Promise.resolve(value).then(function (value) { step("next", value); }, function (err) { step("throw", err); }); } } return step("next"); }); }; }

//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//




/* harmony default export */ __webpack_exports__["default"] = ({
  data: function data() {
    return {
      categories: [],
      active: 0,
      category: [],
      showPage: false
    };
  },

  watch: {
    lang: function lang() {
      this.getCats();
    },
    regionName: function regionName() {
      this.getCats();
    }
  },
  components: { InnerHeader: __WEBPACK_IMPORTED_MODULE_1__components_InnerHeader___default.a },
  computed: _extends({}, Object(__WEBPACK_IMPORTED_MODULE_2_vuex__["mapGetters"])({
    region: "regionId",
    regionName: "regionName",
    regionSlug: "regionSlug",
    lang: "locale"
  }), {
    filtered: function filtered() {
      var data = [];
      if (this.active != 0) {
        this.category.managers.map(function (value, key) {
          if (value.branches.length > 0) {
            data.push(value);
          }
        });
      } else {
        this.categories.map(function (value, key) {
          value.managers.map(function (v, k) {
            if (v.branches.length > 0) {
              data.push(v);
            }
          });
        });
      }
      return data;
    }
  }),
  methods: {
    getCats: function () {
      var _ref = _asyncToGenerator( /*#__PURE__*/__WEBPACK_IMPORTED_MODULE_0_babel_runtime_regenerator__["default"].mark(function _callee() {
        var _this = this;

        var response;
        return __WEBPACK_IMPORTED_MODULE_0_babel_runtime_regenerator__["default"].wrap(function _callee$(_context) {
          while (1) {
            switch (_context.prev = _context.next) {
              case 0:
                if (!this.region) {
                  _context.next = 9;
                  break;
                }

                _context.next = 3;
                return axios.get("api/categories_managers?withManagers&region=" + this.region);

              case 3:
                response = _context.sent;

                this.categories = response.data.data;
                _context.next = 7;
                return true;

              case 7:
                this.showPage = _context.sent;

                if (this.active != 0) {
                  this.categories.map(function (value, key) {
                    if (_this.category.id == value.id) {
                      _this.category = value;
                    }
                  });
                } else {
                  this.category = [];
                }

              case 9:
              case "end":
                return _context.stop();
            }
          }
        }, _callee, this);
      }));

      function getCats() {
        return _ref.apply(this, arguments);
      }

      return getCats;
    }(),
    updateList: function updateList(category) {
      if (category == "all") {
        this.active = 0;
        return;
      }
      this.category = category;
      this.active = category.id;
    }
  },
  created: function created() {
    this.getCats();
  }
});

/***/ }),
/* 203 */
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(1)
/* script */
var __vue_script__ = null
/* template */
var __vue_template__ = __webpack_require__(204)
/* template functional */
var __vue_template_functional__ = false
/* styles */
var __vue_styles__ = null
/* scopeId */
var __vue_scopeId__ = null
/* moduleIdentifier (server only) */
var __vue_module_identifier__ = null
var Component = normalizeComponent(
  __vue_script__,
  __vue_template__,
  __vue_template_functional__,
  __vue_styles__,
  __vue_scopeId__,
  __vue_module_identifier__
)
Component.options.__file = "resources/assets/js/front/desktop/components/InnerHeader.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-697d3895", Component.options)
  } else {
    hotAPI.reload("data-v-697d3895", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),
/* 204 */
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", { staticClass: "partners-intro" }, [
    _c("div", { staticClass: "container" }, [
      _c("h1", { staticClass: "title intro-title" }, [
        _vm._v(_vm._s(_vm.$t("header.title")))
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "row" }, [
        _c("div", { staticClass: "col-4 intro-item" }, [
          _vm._m(0),
          _vm._v(" "),
          _c("div", { staticClass: "intro-item-text" }, [
            _vm._v(_vm._s(_vm.$t("header.step1")))
          ])
        ]),
        _vm._v(" "),
        _c("div", { staticClass: "col-4 intro-item" }, [
          _vm._m(1),
          _vm._v(" "),
          _c("div", { staticClass: "intro-item-text" }, [
            _vm._v(_vm._s(_vm.$t("header.step2")))
          ])
        ]),
        _vm._v(" "),
        _c("div", { staticClass: "col-4 intro-item" }, [
          _vm._m(2),
          _vm._v(" "),
          _c("div", { staticClass: "intro-item-text" }, [
            _vm._v(_vm._s(_vm.$t("header.step3")))
          ])
        ])
      ])
    ])
  ])
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "intro-item-icon" }, [
      _c("div", { staticClass: "icon-number" }, [_vm._v("1")]),
      _vm._v(" "),
      _c("div", { staticClass: "icon-shadow" }, [
        _c("i", { staticClass: "icon" }, [_vm._v("store")])
      ])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "intro-item-icon" }, [
      _c("div", { staticClass: "icon-number" }, [_vm._v("2")]),
      _vm._v(" "),
      _c("div", { staticClass: "icon-shadow" }, [
        _c("i", { staticClass: "icon" }, [_vm._v("shopping_cart")])
      ])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "intro-item-icon" }, [
      _c("div", { staticClass: "icon-number" }, [_vm._v("3")]),
      _vm._v(" "),
      _c("div", { staticClass: "icon-shadow" }, [
        _c("i", { staticClass: "icon" }, [_vm._v("local_shipping")])
      ])
    ])
  }
]
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-697d3895", module.exports)
  }
}

/***/ }),
/* 205 */
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", { staticClass: "content" }, [
    !_vm.showPage
      ? _c("div", { staticClass: "loader" }, [
          _c("div", { staticClass: "loader-container" })
        ])
      : _c(
          "div",
          [
            _c("InnerHeader"),
            _vm._v(" "),
            _c("div", { staticClass: "container" }, [
              _c("h1", { staticClass: "main-title" }, [
                _vm._v("Магазины и сети " + _vm._s(_vm.regionName))
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "content-inner" }, [
                _c("main", { staticClass: "main" }, [
                  _c(
                    "div",
                    {
                      staticClass:
                        "main-sorter btn-group btn-group-sm btn-group-toggle"
                    },
                    [
                      _c(
                        "a",
                        {
                          staticClass: "btn btn-outline-light",
                          class: { active: _vm.active == 0 },
                          on: {
                            click: function($event) {
                              $event.preventDefault()
                              _vm.updateList("all")
                            }
                          }
                        },
                        [_vm._v("Все")]
                      ),
                      _vm._v(" "),
                      _vm._l(_vm.categories, function(category) {
                        return _c(
                          "a",
                          {
                            key: category.id,
                            staticClass: "btn btn-outline-light",
                            class: { active: _vm.active == category.id },
                            on: {
                              click: function($event) {
                                $event.preventDefault()
                                _vm.updateList(category)
                              }
                            }
                          },
                          [_vm._v(_vm._s(category.name))]
                        )
                      })
                    ],
                    2
                  ),
                  _vm._v(" "),
                  _vm.filtered.length > 0
                    ? _c(
                        "ul",
                        { staticClass: "partners" },
                        _vm._l(_vm.filtered, function(manager) {
                          return _c(
                            "li",
                            { key: manager.id, staticClass: "partner" },
                            [
                              _c(
                                "router-link",
                                {
                                  staticClass: "partner-inner",
                                  attrs: {
                                    to: {
                                      name: "catalog",
                                      params: {
                                        city: _vm.regionSlug
                                          ? _vm.regionSlug
                                          : "here",
                                        slug: manager.slug
                                      }
                                    }
                                  }
                                },
                                [
                                  _c("div", { staticClass: "partner-logo" }, [
                                    _c("img", { attrs: { src: manager.logo } })
                                  ]),
                                  _vm._v(" "),
                                  _c("div", { staticClass: "partner-info" }, [
                                    _c("div", { staticClass: "partner-name" }, [
                                      _vm._v(_vm._s(manager.name))
                                    ]),
                                    _vm._v(" "),
                                    _c(
                                      "div",
                                      { staticClass: "partner-category" },
                                      [_vm._v(_vm._s(manager.cat))]
                                    )
                                  ])
                                ]
                              )
                            ],
                            1
                          )
                        })
                      )
                    : _vm._e()
                ])
              ])
            ])
          ],
          1
        )
  ])
}
var staticRenderFns = []
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-98b60822", module.exports)
  }
}

/***/ }),
/* 206 */
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(1)
/* script */
var __vue_script__ = __webpack_require__(207)
/* template */
var __vue_template__ = __webpack_require__(215)
/* template functional */
var __vue_template_functional__ = false
/* styles */
var __vue_styles__ = null
/* scopeId */
var __vue_scopeId__ = null
/* moduleIdentifier (server only) */
var __vue_module_identifier__ = null
var Component = normalizeComponent(
  __vue_script__,
  __vue_template__,
  __vue_template_functional__,
  __vue_styles__,
  __vue_scopeId__,
  __vue_module_identifier__
)
Component.options.__file = "resources/assets/js/front/desktop/pages/Profile.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-3a32673a", Component.options)
  } else {
    hotAPI.reload("data-v-3a32673a", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),
/* 207 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__components_DatePicker__ = __webpack_require__(208);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__components_DatePicker___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_0__components_DatePicker__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1_vuex__ = __webpack_require__(3);
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//




/* harmony default export */ __webpack_exports__["default"] = ({
  components: { DatePicker: __WEBPACK_IMPORTED_MODULE_0__components_DatePicker___default.a },
  data: function data() {
    return {
      user: null,
      showPage: false
      // form: {
      //   date: null,
      //   phone: this.user && this.user.data ? this.user.data.phone : null
      // }
    };
  },

  methods: {
    saveUserData: function saveUserData() {
      var _this = this;

      axios.patch("api/clients/" + this.user.data.id + "/settings", this.user.data).then(function (response) {
        _this.$store.dispatch("fetchUser").then(function () {
          flash("Изменение прошло успешно!");
        });
      });
    }
  },
  mounted: function mounted() {
    var _this2 = this;

    // setTimeout(() => {
    axios.get("api/me").then(function (response) {
      _this2.user = response.data;
      _this2.showPage = true;
    });
    // }, 0);
  }
});

/***/ }),
/* 208 */
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(1)
/* script */
var __vue_script__ = __webpack_require__(209)
/* template */
var __vue_template__ = __webpack_require__(214)
/* template functional */
var __vue_template_functional__ = false
/* styles */
var __vue_styles__ = null
/* scopeId */
var __vue_scopeId__ = null
/* moduleIdentifier (server only) */
var __vue_module_identifier__ = null
var Component = normalizeComponent(
  __vue_script__,
  __vue_template__,
  __vue_template_functional__,
  __vue_styles__,
  __vue_scopeId__,
  __vue_module_identifier__
)
Component.options.__file = "resources/assets/js/front/desktop/components/DatePicker.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-eca7e78c", Component.options)
  } else {
    hotAPI.reload("data-v-eca7e78c", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),
/* 209 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_pikaday__ = __webpack_require__(210);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_pikaday___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_0_pikaday__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1_pikaday_css_pikaday_css__ = __webpack_require__(212);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1_pikaday_css_pikaday_css___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_1_pikaday_css_pikaday_css__);
var _extends = Object.assign || function (target) { for (var i = 1; i < arguments.length; i++) { var source = arguments[i]; for (var key in source) { if (Object.prototype.hasOwnProperty.call(source, key)) { target[key] = source[key]; } } } return target; };

//
//
//
//




/* harmony default export */ __webpack_exports__["default"] = ({
  data: function data() {
    return {};
  },

  props: {
    value: { required: true },
    format: { default: "YYYY.MM.DD" },
    options: {}
  },

  mounted: function mounted() {
    var _this = this;

    var picker = new __WEBPACK_IMPORTED_MODULE_0_pikaday__["default"](_extends({
      field: this.$refs.input,
      format: this.format,
      onSelect: function onSelect() {
        _this.$emit("input", picker.toString());
      }
    }, this.options));
  }
});

/***/ }),
/* 210 */
/***/ (function(module, exports) {

throw new Error("Module build failed: Error: ENOENT: no such file or directory, open '/home/rin4ik/work/delivery/node_modules/pikaday/pikaday.js'");

/***/ }),
/* 211 */,
/* 212 */
/***/ (function(module, exports, __webpack_require__) {

// style-loader: Adds some css to the DOM by adding a <style> tag

// load the styles
var content = __webpack_require__(213);
if(typeof content === 'string') content = [[module.i, content, '']];
// Prepare cssTransformation
var transform;

var options = {}
options.transform = transform
// add the styles to the DOM
var update = __webpack_require__(179)(content, options);
if(content.locals) module.exports = content.locals;
// Hot Module Replacement
if(false) {
	// When the styles change, update the <style> tags
	if(!content.locals) {
		module.hot.accept("!!../../css-loader/index.js!./pikaday.css", function() {
			var newContent = require("!!../../css-loader/index.js!./pikaday.css");
			if(typeof newContent === 'string') newContent = [[module.id, newContent, '']];
			update(newContent);
		});
	}
	// When the module is disposed, remove the <style> tags
	module.hot.dispose(function() { update(); });
}

/***/ }),
/* 213 */
/***/ (function(module, exports) {

throw new Error("Module build failed: Error: ENOENT: no such file or directory, open '/home/rin4ik/work/delivery/node_modules/pikaday/css/pikaday.css'");

/***/ }),
/* 214 */
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("input", {
    ref: "input",
    staticClass: "pu-input",
    domProps: { value: _vm.value }
  })
}
var staticRenderFns = []
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-eca7e78c", module.exports)
  }
}

/***/ }),
/* 215 */
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _vm.user
    ? _c("div", { staticClass: "content" }, [
        !_vm.showPage
          ? _c("div", { staticClass: "loader" }, [
              _c("div", { staticClass: "loader-container" })
            ])
          : _c("div", { staticClass: "container" }, [
              _c("div", { staticClass: "content-inner" }, [
                _c("main", { staticClass: "main" }, [
                  _c("h1", { staticClass: "main-title" }, [
                    _vm._v("Мои данние")
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "card" }, [
                    _c(
                      "form",
                      {
                        staticClass: "card-body needs-validation",
                        attrs: { novalidate: "" }
                      },
                      [
                        _c("div", { staticClass: "form-group row" }, [
                          _c(
                            "label",
                            {
                              staticClass: "col-3 col-form-label",
                              attrs: { for: "profile_firstname" }
                            },
                            [_vm._v("Имя")]
                          ),
                          _vm._v(" "),
                          _c("div", { staticClass: "col-9" }, [
                            _c("input", {
                              directives: [
                                {
                                  name: "model",
                                  rawName: "v-model",
                                  value: _vm.user.data.first_name,
                                  expression: "user.data.first_name"
                                }
                              ],
                              staticClass: "form-control",
                              attrs: {
                                id: "profile_firstname",
                                name: "profile_firstname",
                                type: "text",
                                placeholder: "Заполните это поле",
                                required: ""
                              },
                              domProps: { value: _vm.user.data.first_name },
                              on: {
                                input: function($event) {
                                  if ($event.target.composing) {
                                    return
                                  }
                                  _vm.$set(
                                    _vm.user.data,
                                    "first_name",
                                    $event.target.value
                                  )
                                }
                              }
                            }),
                            _vm._v(" "),
                            _c("div", { staticClass: "invalid-feedback" }, [
                              _vm._v("Пожалуйста заполните поле")
                            ])
                          ])
                        ]),
                        _vm._v(" "),
                        _c("div", { staticClass: "form-group row" }, [
                          _c(
                            "label",
                            {
                              staticClass: "col-3 col-form-label",
                              attrs: { for: "profile_lastname" }
                            },
                            [_vm._v("Фамилия")]
                          ),
                          _vm._v(" "),
                          _c("div", { staticClass: "col-9" }, [
                            _c("input", {
                              directives: [
                                {
                                  name: "model",
                                  rawName: "v-model",
                                  value: _vm.user.data.last_name,
                                  expression: "user.data.last_name"
                                }
                              ],
                              staticClass: "form-control",
                              attrs: {
                                id: "profile_lastname",
                                name: "profile_lastname",
                                type: "text",
                                placeholder: "Заполните это поле",
                                required: ""
                              },
                              domProps: { value: _vm.user.data.last_name },
                              on: {
                                input: function($event) {
                                  if ($event.target.composing) {
                                    return
                                  }
                                  _vm.$set(
                                    _vm.user.data,
                                    "last_name",
                                    $event.target.value
                                  )
                                }
                              }
                            }),
                            _vm._v(" "),
                            _c("div", { staticClass: "invalid-feedback" }, [
                              _vm._v("Пожалуйста заполните поле")
                            ])
                          ])
                        ]),
                        _vm._v(" "),
                        _c("div", { staticClass: "form-group row" }, [
                          _c(
                            "label",
                            {
                              staticClass: "col-3 col-form-label",
                              attrs: { for: "profile_birthday" }
                            },
                            [_vm._v("Дата рождения")]
                          ),
                          _vm._v(" "),
                          _c(
                            "div",
                            { staticClass: "col-9" },
                            [
                              _c("DatePicker", {
                                staticClass: "form-control",
                                attrs: {
                                  value: _vm.user.data.birth_date,
                                  placeholder: "DD.MM.YYYY"
                                },
                                model: {
                                  value: _vm.user.data.birth_date,
                                  callback: function($$v) {
                                    _vm.$set(_vm.user.data, "birth_date", $$v)
                                  },
                                  expression: "user.data.birth_date"
                                }
                              }),
                              _vm._v(" "),
                              _c("div", { staticClass: "invalid-feedback" }, [
                                _vm._v("Пожалуйста заполните поле")
                              ])
                            ],
                            1
                          )
                        ]),
                        _vm._v(" "),
                        _c("div", { staticClass: "form-group row" }, [
                          _c(
                            "label",
                            {
                              staticClass: "col-3",
                              attrs: { for: "profile_gender" }
                            },
                            [_vm._v("Пол")]
                          ),
                          _vm._v(" "),
                          _c("div", { staticClass: "col-9" }, [
                            _c(
                              "div",
                              {
                                staticClass:
                                  "custom-control custom-radio custom-control-inline"
                              },
                              [
                                _c("input", {
                                  directives: [
                                    {
                                      name: "model",
                                      rawName: "v-model",
                                      value: _vm.user.data.jender,
                                      expression: "user.data.jender"
                                    }
                                  ],
                                  staticClass: "custom-control-input",
                                  attrs: {
                                    type: "radio",
                                    id: "profile_gender1",
                                    name: "profile_gender",
                                    value: "1",
                                    checked: "",
                                    required: ""
                                  },
                                  domProps: {
                                    checked: _vm._q(_vm.user.data.jender, "1")
                                  },
                                  on: {
                                    change: function($event) {
                                      _vm.$set(_vm.user.data, "jender", "1")
                                    }
                                  }
                                }),
                                _vm._v(" "),
                                _c(
                                  "label",
                                  {
                                    staticClass: "custom-control-label",
                                    attrs: { for: "profile_gender1" }
                                  },
                                  [_vm._v("Мужской")]
                                )
                              ]
                            ),
                            _vm._v(" "),
                            _c(
                              "div",
                              {
                                staticClass:
                                  "custom-control custom-radio custom-control-inline"
                              },
                              [
                                _c("input", {
                                  directives: [
                                    {
                                      name: "model",
                                      rawName: "v-model",
                                      value: _vm.user.data.jender,
                                      expression: "user.data.jender"
                                    }
                                  ],
                                  staticClass: "custom-control-input",
                                  attrs: {
                                    type: "radio",
                                    id: "profile_gender2",
                                    name: "profile_gender",
                                    value: "2",
                                    required: ""
                                  },
                                  domProps: {
                                    checked: _vm._q(_vm.user.data.jender, "2")
                                  },
                                  on: {
                                    change: function($event) {
                                      _vm.$set(_vm.user.data, "jender", "2")
                                    }
                                  }
                                }),
                                _vm._v(" "),
                                _c(
                                  "label",
                                  {
                                    staticClass: "custom-control-label",
                                    attrs: { for: "profile_gender2" }
                                  },
                                  [_vm._v("Женский")]
                                )
                              ]
                            ),
                            _vm._v(" "),
                            _c("div", { staticClass: "invalid-feedback" }, [
                              _vm._v("Пожалуйста заполните поле")
                            ])
                          ])
                        ]),
                        _vm._v(" "),
                        _c("div", { staticClass: "form-group row" }, [
                          _c(
                            "label",
                            {
                              staticClass: "col-3 col-form-label",
                              attrs: { for: "profile_phone" }
                            },
                            [_vm._v("Телефон")]
                          ),
                          _vm._v(" "),
                          _c("div", { staticClass: "col-9" }, [
                            _c("input", {
                              directives: [
                                {
                                  name: "model",
                                  rawName: "v-model",
                                  value: _vm.user.data.phone,
                                  expression: "user.data.phone"
                                }
                              ],
                              staticClass: "form-control",
                              attrs: {
                                id: "profile_phone",
                                name: "profile_phone",
                                type: "text",
                                disabled: "",
                                required: ""
                              },
                              domProps: { value: _vm.user.data.phone },
                              on: {
                                input: function($event) {
                                  if ($event.target.composing) {
                                    return
                                  }
                                  _vm.$set(
                                    _vm.user.data,
                                    "phone",
                                    $event.target.value
                                  )
                                }
                              }
                            })
                          ])
                        ]),
                        _vm._v(" "),
                        _c("div", { staticClass: "row" }, [
                          _c("div", { staticClass: "col-9 offset-3" }, [
                            _c(
                              "button",
                              {
                                staticClass: "btn btn-green",
                                on: {
                                  click: function($event) {
                                    $event.preventDefault()
                                    return _vm.saveUserData($event)
                                  }
                                }
                              },
                              [_vm._v("Редактировать")]
                            )
                          ])
                        ])
                      ]
                    )
                  ])
                ]),
                _vm._v(" "),
                _c("aside", { staticClass: "aside" })
              ])
            ])
      ])
    : _vm._e()
}
var staticRenderFns = []
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-3a32673a", module.exports)
  }
}

/***/ }),
/* 216 */
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(1)
/* script */
var __vue_script__ = __webpack_require__(217)
/* template */
var __vue_template__ = __webpack_require__(218)
/* template functional */
var __vue_template_functional__ = false
/* styles */
var __vue_styles__ = null
/* scopeId */
var __vue_scopeId__ = null
/* moduleIdentifier (server only) */
var __vue_module_identifier__ = null
var Component = normalizeComponent(
  __vue_script__,
  __vue_template__,
  __vue_template_functional__,
  __vue_styles__,
  __vue_scopeId__,
  __vue_module_identifier__
)
Component.options.__file = "resources/assets/js/front/desktop/pages/Orders.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-1a0b1bca", Component.options)
  } else {
    hotAPI.reload("data-v-1a0b1bca", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),
/* 217 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
  data: function data() {
    return {
      showPage: false
    };
  },
  mounted: function mounted() {
    this.showPage = true;
  }
});

/***/ }),
/* 218 */
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", { staticClass: "content" }, [
    !_vm.showPage
      ? _c("div", { staticClass: "loader" }, [
          _c("div", { staticClass: "loader-container" })
        ])
      : _c("div", { staticClass: "container" }, [
          _c("h1", { staticClass: "main-title" }, [_vm._v("Мои заказы")]),
          _vm._v(" "),
          _vm._m(0)
        ])
  ])
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "content-inner" }, [
      _c("main", { staticClass: "main" }, [
        _c("ul", { staticClass: "orders" }, [
          _c("li", { staticClass: "order" }, [
            _c("div", { staticClass: "order-inner" }, [
              _c("div", { staticClass: "order-column order-store" }, [
                _c("img", { attrs: { src: "/desktop/img/makrologo.jpg" } })
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "order-column order-info" }, [
                _c("div", [_vm._v("Номер заказа")]),
                _vm._v(" "),
                _c("div", [_vm._v("Дата и время заказа")]),
                _vm._v(" "),
                _c("div", [_vm._v("Статус заказа")])
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "order-column order-products" }, [
                _c("a", { attrs: { href: "/order.php" } }, [
                  _c("div", [_vm._v("15")]),
                  _vm._v(" "),
                  _c("div", [_vm._v("Товаров")])
                ])
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "order-column order-sum" }, [
                _c("div", { staticClass: "order-sum-number" }, [
                  _vm._v("5 2000 сум")
                ]),
                _vm._v(" "),
                _c("div", { staticClass: "order-sum-text" }, [
                  _vm._v("Общая сумма")
                ])
              ])
            ])
          ])
        ])
      ]),
      _vm._v(" "),
      _c("aside", { staticClass: "aside" })
    ])
  }
]
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-1a0b1bca", module.exports)
  }
}

/***/ }),
/* 219 */
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(1)
/* script */
var __vue_script__ = __webpack_require__(220)
/* template */
var __vue_template__ = __webpack_require__(221)
/* template functional */
var __vue_template_functional__ = false
/* styles */
var __vue_styles__ = null
/* scopeId */
var __vue_scopeId__ = null
/* moduleIdentifier (server only) */
var __vue_module_identifier__ = null
var Component = normalizeComponent(
  __vue_script__,
  __vue_template__,
  __vue_template_functional__,
  __vue_styles__,
  __vue_scopeId__,
  __vue_module_identifier__
)
Component.options.__file = "resources/assets/js/front/desktop/pages/Delivery.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-5c45bc2a", Component.options)
  } else {
    hotAPI.reload("data-v-5c45bc2a", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),
/* 220 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
  data: function data() {
    return {
      showPage: false
    };
  },
  mounted: function mounted() {
    this.showPage = true;
  }
});

/***/ }),
/* 221 */
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", { staticClass: "content" }, [
    !_vm.showPage
      ? _c("div", { staticClass: "loader" }, [
          _c("div", { staticClass: "loader-container" })
        ])
      : _c("div", { staticClass: "container" }, [
          _c("h1", { staticClass: "main-title" }, [
            _vm._v("Доставка и оплата")
          ]),
          _vm._v(" "),
          _vm._m(0)
        ])
  ])
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "content-inner" }, [
      _c("main", { staticClass: "main" }),
      _vm._v(" "),
      _c("aside", { staticClass: "aside" })
    ])
  }
]
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-5c45bc2a", module.exports)
  }
}

/***/ }),
/* 222 */
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(1)
/* script */
var __vue_script__ = __webpack_require__(223)
/* template */
var __vue_template__ = __webpack_require__(224)
/* template functional */
var __vue_template_functional__ = false
/* styles */
var __vue_styles__ = null
/* scopeId */
var __vue_scopeId__ = null
/* moduleIdentifier (server only) */
var __vue_module_identifier__ = null
var Component = normalizeComponent(
  __vue_script__,
  __vue_template__,
  __vue_template_functional__,
  __vue_styles__,
  __vue_scopeId__,
  __vue_module_identifier__
)
Component.options.__file = "resources/assets/js/front/desktop/pages/Return.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-148d2ee6", Component.options)
  } else {
    hotAPI.reload("data-v-148d2ee6", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),
/* 223 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
//
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
  data: function data() {
    return {
      showPage: false
    };
  },
  mounted: function mounted() {
    this.showPage = true;
  }
});

/***/ }),
/* 224 */
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", { staticClass: "content" }, [
    !_vm.showPage
      ? _c("div", { staticClass: "loader" }, [
          _c("div", { staticClass: "loader-container" })
        ])
      : _c("div", [_vm._v("\n    HERE YOU GO REFUND\n")])
  ])
}
var staticRenderFns = []
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-148d2ee6", module.exports)
  }
}

/***/ }),
/* 225 */
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(1)
/* script */
var __vue_script__ = __webpack_require__(226)
/* template */
var __vue_template__ = __webpack_require__(227)
/* template functional */
var __vue_template_functional__ = false
/* styles */
var __vue_styles__ = null
/* scopeId */
var __vue_scopeId__ = null
/* moduleIdentifier (server only) */
var __vue_module_identifier__ = null
var Component = normalizeComponent(
  __vue_script__,
  __vue_template__,
  __vue_template_functional__,
  __vue_styles__,
  __vue_scopeId__,
  __vue_module_identifier__
)
Component.options.__file = "resources/assets/js/front/desktop/pages/Partners.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-3e522961", Component.options)
  } else {
    hotAPI.reload("data-v-3e522961", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),
/* 226 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
//
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
  data: function data() {
    return {
      showPage: false
    };
  },
  mounted: function mounted() {
    this.showPage = true;
  }
});

/***/ }),
/* 227 */
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", { staticClass: "content" }, [
    !_vm.showPage
      ? _c("div", { staticClass: "loader" }, [
          _c("div", { staticClass: "loader-container" })
        ])
      : _c("div", [_vm._v("\n    HERE I'M PARTNER\n")])
  ])
}
var staticRenderFns = []
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-3e522961", module.exports)
  }
}

/***/ }),
/* 228 */
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(1)
/* script */
var __vue_script__ = __webpack_require__(229)
/* template */
var __vue_template__ = __webpack_require__(244)
/* template functional */
var __vue_template_functional__ = false
/* styles */
var __vue_styles__ = null
/* scopeId */
var __vue_scopeId__ = null
/* moduleIdentifier (server only) */
var __vue_module_identifier__ = null
var Component = normalizeComponent(
  __vue_script__,
  __vue_template__,
  __vue_template_functional__,
  __vue_styles__,
  __vue_scopeId__,
  __vue_module_identifier__
)
Component.options.__file = "resources/assets/js/front/desktop/pages/catalog/Catalog.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-53113046", Component.options)
  } else {
    hotAPI.reload("data-v-53113046", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),
/* 229 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_babel_runtime_regenerator__ = __webpack_require__(11);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_babel_runtime_regenerator___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_0_babel_runtime_regenerator__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1_vuex__ = __webpack_require__(3);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1_vuex___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_1_vuex__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2__NotFound__ = __webpack_require__(165);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2__NotFound___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_2__NotFound__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_3__Products__ = __webpack_require__(166);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_3__Products___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_3__Products__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_4__SubCategories__ = __webpack_require__(241);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_4__SubCategories___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_4__SubCategories__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_5_localforage__ = __webpack_require__(6);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_5_localforage___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_5_localforage__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_6_lodash__ = __webpack_require__(4);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_6_lodash___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_6_lodash__);


var _extends = Object.assign || function (target) { for (var i = 1; i < arguments.length; i++) { var source = arguments[i]; for (var key in source) { if (Object.prototype.hasOwnProperty.call(source, key)) { target[key] = source[key]; } } } return target; };

function _asyncToGenerator(fn) { return function () { var gen = fn.apply(this, arguments); return new Promise(function (resolve, reject) { function step(key, arg) { try { var info = gen[key](arg); var value = info.value; } catch (error) { reject(error); return; } if (info.done) { resolve(value); } else { return Promise.resolve(value).then(function (value) { step("next", value); }, function (err) { step("throw", err); }); } } return step("next"); }); }; }

//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//








/* harmony default export */ __webpack_exports__["default"] = ({
  data: function data() {
    return {
      active: 0,
      catalog: null,
      notFound: false,
      id: 0,
      products: [],
      categories: [],
      showPage: false,
      branchName: null,
      sortByPrice: false
    };
  },

  components: { NotFound: __WEBPACK_IMPORTED_MODULE_2__NotFound___default.a, Products: __WEBPACK_IMPORTED_MODULE_3__Products___default.a, SubCategories: __WEBPACK_IMPORTED_MODULE_4__SubCategories___default.a },
  watch: {
    $route: {
      immediate: true,
      handler: function handler($route) {
        if ($route.name == "catalog") {
          this.id = 0;
          this.active = 0;
        }
      }
    },
    lang: function lang() {
      this.showPage = false;
      this.getCatalog();
    }
    // regionSlug: {
    //   handler(region) {
    //     this.getCatalog();
    //   }
    // }

  },
  methods: {
    setActive: function setActive(id) {
      this.active = id;
      this.id = id;
    },
    getCatalog: function () {
      var _ref = _asyncToGenerator( /*#__PURE__*/__WEBPACK_IMPORTED_MODULE_0_babel_runtime_regenerator__["default"].mark(function _callee() {
        var _this = this;

        var uri, response;
        return __WEBPACK_IMPORTED_MODULE_0_babel_runtime_regenerator__["default"].wrap(function _callee$(_context) {
          while (1) {
            switch (_context.prev = _context.next) {
              case 0:
                // setTimeout(() => {
                uri = "/api/managers/" + this.$route.params.slug + "?withManagers&region=" + this.$route.params.city;
                _context.next = 3;
                return axios.get(uri).then(function (response) {
                  _this.catalog = response.data.data;
                  if (_this.catalog.branches.length > 0) {
                    _this.branchName = _this.catalog.branches[0].region_name;
                  } else {
                    _this.notFound = true;
                    _this.showPage = true;
                    _this.catalog = null;
                    return;
                    // this.$router.replace({ name: "notFound" });
                  }
                  _this.getCategories();
                }).catch(function () {
                  _this.$router.push({ name: "notFound" });
                });

              case 3:
                response = _context.sent;

              case 4:
              case "end":
                return _context.stop();
            }
          }
        }, _callee, this);
      }));

      function getCatalog() {
        return _ref.apply(this, arguments);
      }

      return getCatalog;
    }(),
    getCategories: function () {
      var _ref2 = _asyncToGenerator( /*#__PURE__*/__WEBPACK_IMPORTED_MODULE_0_babel_runtime_regenerator__["default"].mark(function _callee2() {
        var _this2 = this;

        var response;
        return __WEBPACK_IMPORTED_MODULE_0_babel_runtime_regenerator__["default"].wrap(function _callee2$(_context2) {
          while (1) {
            switch (_context2.prev = _context2.next) {
              case 0:
                _context2.next = 2;
                return axios.get("/api/categories?withManager&manager=" + this.catalog.id);

              case 2:
                response = _context2.sent;

                // .then(response => {
                this.categories = response.data.data;
                this.showPage = true;
                this.categories.map(function (v, k) {
                  if (v.children.length == 0) {
                    if (_this2.$route.params.sluged == v.slug) {
                      _this2.setActive(v.id);
                    }
                  } else {
                    if (_this2.$route.params.sluged == v.slug) {
                      _this2.setActive(v.id);
                    }
                    v.children.map(function (ve, ke) {
                      if (_this2.$route.params.sluged == ve.slug) {
                        _this2.setActive(ve.id);
                      }
                    });
                  }
                });
                // });
                // });

              case 6:
              case "end":
                return _context2.stop();
            }
          }
        }, _callee2, this);
      }));

      function getCategories() {
        return _ref2.apply(this, arguments);
      }

      return getCategories;
    }()
  },
  computed: _extends({}, Object(__WEBPACK_IMPORTED_MODULE_1_vuex__["mapGetters"])({
    region: "regionId",
    regionName: "regionName",
    regionSlug: "regionSlug",
    lang: "locale"
  })),
  created: function () {
    var _ref3 = _asyncToGenerator( /*#__PURE__*/__WEBPACK_IMPORTED_MODULE_0_babel_runtime_regenerator__["default"].mark(function _callee3() {
      return __WEBPACK_IMPORTED_MODULE_0_babel_runtime_regenerator__["default"].wrap(function _callee3$(_context3) {
        while (1) {
          switch (_context3.prev = _context3.next) {
            case 0:
              this.getCatalog();

            case 1:
            case "end":
              return _context3.stop();
          }
        }
      }, _callee3, this);
    }));

    function created() {
      return _ref3.apply(this, arguments);
    }

    return created;
  }()
});

/***/ }),
/* 230 */
/***/ (function(module, exports, __webpack_require__) {

// style-loader: Adds some css to the DOM by adding a <style> tag

// load the styles
var content = __webpack_require__(231);
if(typeof content === 'string') content = [[module.i, content, '']];
if(content.locals) module.exports = content.locals;
// add the styles to the DOM
var update = __webpack_require__(8)("5e4b8312", content, false, {});
// Hot Module Replacement
if(false) {
 // When the styles change, update the <style> tags
 if(!content.locals) {
   module.hot.accept("!!../../../../../../node_modules/css-loader/index.js!../../../../../../node_modules/vue-loader/lib/style-compiler/index.js?{\"vue\":true,\"id\":\"data-v-4655b325\",\"scoped\":true,\"hasInlineConfig\":true}!../../../../../../node_modules/vue-loader/lib/selector.js?type=styles&index=0!./NotFound.vue", function() {
     var newContent = require("!!../../../../../../node_modules/css-loader/index.js!../../../../../../node_modules/vue-loader/lib/style-compiler/index.js?{\"vue\":true,\"id\":\"data-v-4655b325\",\"scoped\":true,\"hasInlineConfig\":true}!../../../../../../node_modules/vue-loader/lib/selector.js?type=styles&index=0!./NotFound.vue");
     if(typeof newContent === 'string') newContent = [[module.id, newContent, '']];
     update(newContent);
   });
 }
 // When the module is disposed, remove the <style> tags
 module.hot.dispose(function() { update(); });
}

/***/ }),
/* 231 */
/***/ (function(module, exports, __webpack_require__) {

exports = module.exports = __webpack_require__(7)(false);
// imports


// module
exports.push([module.i, "\n#notfound[data-v-4655b325] {\n  padding-top: -70px;\n\n  width: 100%;\n  background: #fff;\n\n  position: relative;\n  height: 100vh;\n}\n#notfound .notfound[data-v-4655b325] {\n  position: absolute;\n  left: 50%;\n  top: 50%;\n  -webkit-transform: translate(-50%, -50%);\n  transform: translate(-50%, -50%);\n}\n.notfound[data-v-4655b325] {\n  max-width: 520px;\n  width: 100%;\n  line-height: 1.4;\n  text-align: center;\n}\n.notfound .notfound-404[data-v-4655b325] {\n  position: relative;\n  height: 200px;\n  margin: 0px auto 20px;\n  z-index: -1;\n}\n.notfound .notfound-404 h1[data-v-4655b325] {\n  font-family: \"Montserrat\", sans-serif;\n  font-size: 236px !important;\n  font-weight: 100 !important;\n  margin: 0px;\n  color: #211b19;\n  text-transform: uppercase;\n  position: absolute;\n  left: 50%;\n  top: 50%;\n  -webkit-transform: translate(-50%, -50%);\n  transform: translate(-50%, -50%);\n}\n.notfound .notfound-404 h2[data-v-4655b325] {\n  font-family: \"Montserrat\", sans-serif;\n  font-size: 28px;\n  font-weight: 400 !important;\n  text-transform: uppercase;\n  color: #211b19;\n  background: #fff;\n  padding: 10px 5px;\n  margin: auto;\n  display: inline-block;\n  position: absolute;\n  bottom: 0px;\n  left: 0;\n  right: 0;\n}\n.notfound a[data-v-4655b325] {\n  font-family: \"Montserrat\", sans-serif;\n  display: inline-block;\n  font-weight: 700;\n  text-decoration: none;\n  color: #fff;\n  text-transform: uppercase;\n  padding: 13px 23px;\n  background: #27ae61;\n  font-size: 18px;\n  -webkit-transition: 0.2s all;\n  transition: 0.2s all;\n}\n.notfound a[data-v-4655b325]:hover {\n  color: #27ae61;\n  background: #211b19;\n}\n@media only screen and (max-width: 767px) {\n.notfound .notfound-404 h1[data-v-4655b325] {\n    font-size: 148px;\n}\n}\n@media only screen and (max-width: 480px) {\n.notfound .notfound-404[data-v-4655b325] {\n    height: 148px;\n    margin: 0px auto 10px;\n}\n.notfound .notfound-404 h1[data-v-4655b325] {\n    font-size: 86px;\n}\n.notfound .notfound-404 h2[data-v-4655b325] {\n    font-size: 16px;\n}\n.notfound a[data-v-4655b325] {\n    padding: 7px 15px;\n    font-size: 14px;\n}\n}\n", ""]);

// exports


/***/ }),
/* 232 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
  created: function created() {
    this.$emit("ready");
  }
});

/***/ }),
/* 233 */
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", { attrs: { id: "notfound" } }, [
    _c(
      "div",
      { staticClass: "notfound" },
      [
        _vm._m(0),
        _vm._v(" "),
        _c("router-link", { attrs: { to: { name: "home" } } }, [
          _vm._v("Домашняя страница")
        ])
      ],
      1
    )
  ])
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "notfound-404" }, [
      _c("h1", [_vm._v("Oops!")]),
      _vm._v(" "),
      _c("h2", [_vm._v("404 - Запращиваемая страница не найдена")])
    ])
  }
]
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-4655b325", module.exports)
  }
}

/***/ }),
/* 234 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_babel_runtime_regenerator__ = __webpack_require__(11);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_babel_runtime_regenerator___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_0_babel_runtime_regenerator__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1_localforage__ = __webpack_require__(6);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1_localforage___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_1_localforage__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2_lodash__ = __webpack_require__(4);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2_lodash___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_2_lodash__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_3_vuex__ = __webpack_require__(3);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_3_vuex___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_3_vuex__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_4__components_Pagination__ = __webpack_require__(235);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_4__components_Pagination___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_4__components_Pagination__);


var _extends = Object.assign || function (target) { for (var i = 1; i < arguments.length; i++) { var source = arguments[i]; for (var key in source) { if (Object.prototype.hasOwnProperty.call(source, key)) { target[key] = source[key]; } } } return target; };

function _asyncToGenerator(fn) { return function () { var gen = fn.apply(this, arguments); return new Promise(function (resolve, reject) { function step(key, arg) { try { var info = gen[key](arg); var value = info.value; } catch (error) { reject(error); return; } if (info.done) { resolve(value); } else { return Promise.resolve(value).then(function (value) { step("next", value); }, function (err) { step("throw", err); }); } } return step("next"); }); }; }

//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//






/* harmony default export */ __webpack_exports__["default"] = ({
  props: ["price", "branch"],
  components: { Pagination: __WEBPACK_IMPORTED_MODULE_4__components_Pagination___default.a },
  data: function data() {
    return {
      pagination: {},
      product: "",
      productMenu: [],
      products: [],
      active: false,
      showPage: false,
      scrolled: false
    };
  },


  watch: {
    lang: function lang(_lang) {
      this.scrolled = false;
      this.showPage = false;
      if (this.$route.name == "category") {

        this.fetchItems();
      } else {
        this.allProducts();
      }
    },
    $route: function $route(route) {
      if (route.name == "category") {
        //  this.scrolled = false

        this.fetchItems();
      } else {
        // this.allProducts();
      }
    },
    price: function price(_price) {
      this.scrolled = false;

      if (this.$route.name == "catalog") {
        this.allProducts();
        return;
      }
      this.fetchItems();
    },

    cart: {
      deep: true,
      handler: function handler() {
        this.cartEvent();
        this.productMenu = [];
      }
    }

  },
  created: function created() {
    window.scrollTo(0, 0);
    $("#product").on("hide.bs.modal", this.replacePage);

    if (!this.$route.params.sluged) {
      this.allProducts();
    } else {
      this.fetchItems();
    }
  },

  computed: Object(__WEBPACK_IMPORTED_MODULE_3_vuex__["mapGetters"])({
    totalCart: "totalCart",
    manager: "manager",
    cart: "cart",
    lang: "locale"
  }),
  methods: _extends({
    scrollTOP: function () {
      var _ref = _asyncToGenerator( /*#__PURE__*/__WEBPACK_IMPORTED_MODULE_0_babel_runtime_regenerator__["default"].mark(function _callee() {
        return __WEBPACK_IMPORTED_MODULE_0_babel_runtime_regenerator__["default"].wrap(function _callee$(_context) {
          while (1) {
            switch (_context.prev = _context.next) {
              case 0:
                new Promise(function (resolve, reject) {
                  $("html, body").animate({ scrollTop: 140 }, 600);
                });

              case 1:
              case "end":
                return _context.stop();
            }
          }
        }, _callee, this);
      }));

      function scrollTOP() {
        return _ref.apply(this, arguments);
      }

      return scrollTOP;
    }(),
    replacePage: function replacePage() {
      if (this.$route.params.sluged) {
        this.$router.replace({
          name: "category",
          params: { sluged: this.$route.params.sluged }
        });
      } else {
        this.$router.replace({
          name: "catalog",
          params: { slug: this.$route.params.slug }
        });
      }
    },
    allProducts: function () {
      var _ref2 = _asyncToGenerator( /*#__PURE__*/__WEBPACK_IMPORTED_MODULE_0_babel_runtime_regenerator__["default"].mark(function _callee2() {
        var params, response;
        return __WEBPACK_IMPORTED_MODULE_0_babel_runtime_regenerator__["default"].wrap(function _callee2$(_context2) {
          while (1) {
            switch (_context2.prev = _context2.next) {
              case 0:
                // if(this.scrolled){
                //     new Promise((resolve, reject) => {
                //       $("html, body").animate({ scrollTop: 140 }, 600);
                //     })
                // }
                // this.scrolled = true
                params = {};

                if (this.price) {
                  params["price"] = this.price;
                }
                if (this.pagination) {
                  params["page"] = this.pagination.current_page;
                }
                _context2.next = 5;
                return axios.get("/api/products?manager=" + this.$route.params.slug, {
                  params: params
                });

              case 5:
                response = _context2.sent;

                this.products = response.data.data;
                this.pagination = response.data.meta;
                _context2.next = 10;
                return true;

              case 10:
                this.showPage = _context2.sent;

                this.fetchProducts();

              case 12:
              case "end":
                return _context2.stop();
            }
          }
        }, _callee2, this);
      }));

      function allProducts() {
        return _ref2.apply(this, arguments);
      }

      return allProducts;
    }(),
    fetchItems: function () {
      var _ref3 = _asyncToGenerator( /*#__PURE__*/__WEBPACK_IMPORTED_MODULE_0_babel_runtime_regenerator__["default"].mark(function _callee3() {
        var params, response;
        return __WEBPACK_IMPORTED_MODULE_0_babel_runtime_regenerator__["default"].wrap(function _callee3$(_context3) {
          while (1) {
            switch (_context3.prev = _context3.next) {
              case 0:
                //   if(this.scrolled){
                //     new Promise((resolve, reject) => {
                //       $("html, body").animate({ scrollTop: 140 }, 600);
                //     }) 
                //   }
                // this.scrolled = true
                params = {};

                if (this.price) {
                  params["price"] = this.price;
                }
                if (this.pagination) {
                  params["page"] = this.pagination.current_page;
                }

                _context3.next = 5;
                return axios.get("/api/products?manager=" + this.$route.params.slug + "&category=" + this.$route.params.sluged, { params: params });

              case 5:
                response = _context3.sent;
                _context3.next = 8;
                return response.data.data;

              case 8:
                this.products = _context3.sent;
                _context3.next = 11;
                return response.data.meta;

              case 11:
                this.pagination = _context3.sent;
                _context3.next = 14;
                return true;

              case 14:
                this.showPage = _context3.sent;


                this.fetchProducts();

              case 16:
              case "end":
                return _context3.stop();
            }
          }
        }, _callee3, this);
      }));

      function fetchItems() {
        return _ref3.apply(this, arguments);
      }

      return fetchItems;
    }()
  }, Object(__WEBPACK_IMPORTED_MODULE_3_vuex__["mapActions"])({
    setCart: "setCart",
    setManager: "setManager",
    setTotal: "setTotal",
    addToTotal: "addToTotal"
  }), {
    removeFromCart: function removeFromCart(product) {
      var item = this.productMenu.findIndex(function (prod) {
        return prod.id == product.id;
      });
      if (this.productMenu.length == 1) {
        this.productMenu = [];
        __WEBPACK_IMPORTED_MODULE_1_localforage__["default"].removeItem("cart");
        __WEBPACK_IMPORTED_MODULE_1_localforage__["default"].removeItem("manager");
        __WEBPACK_IMPORTED_MODULE_1_localforage__["default"].removeItem("cartRegion");
        __WEBPACK_IMPORTED_MODULE_1_localforage__["default"].removeItem("totalCart");
        this.setManager("empty");
        this.setCart("empty");
      } else {
        this.addToTotal(-product.new_price);

        this.productMenu.splice(item, 1);
      }

      this.cartData(this.productMenu);
    },
    fetchProducts: function () {
      var _ref4 = _asyncToGenerator( /*#__PURE__*/__WEBPACK_IMPORTED_MODULE_0_babel_runtime_regenerator__["default"].mark(function _callee4() {
        var _this = this;

        var res;
        return __WEBPACK_IMPORTED_MODULE_0_babel_runtime_regenerator__["default"].wrap(function _callee4$(_context4) {
          while (1) {
            switch (_context4.prev = _context4.next) {
              case 0:
                _context4.next = 2;
                return __WEBPACK_IMPORTED_MODULE_1_localforage__["default"].getItem("cart").then(function (response) {
                  if (!Object(__WEBPACK_IMPORTED_MODULE_2_lodash__["isEmpty"])(response)) {
                    _this.productMenu = response;
                    _this.products.map(function (v, k) {
                      v.quantity = 1;
                      _this.productMenu.map(function (l, o) {
                        if (v.id == l.id) {
                          v.quantity = l.quantity;
                          Vue.set(_this.products, k, v);
                          l = v;
                          Vue.set(_this.productMenu, o, l);
                        } else {
                          if (!l.new_price) {
                            // this.productMenu.splice(o, 1);
                          }
                        }
                      });
                    });
                  }
                });

              case 2:
                res = _context4.sent;

              case 3:
              case "end":
                return _context4.stop();
            }
          }
        }, _callee4, this);
      }));

      function fetchProducts() {
        return _ref4.apply(this, arguments);
      }

      return fetchProducts;
    }(),
    decreaseQuantity: function decreaseQuantity(product) {
      var index = this.productMenu.findIndex(function (prod) {
        return prod.id == product.id;
      });
      --product.quantity;
      this.addToTotal(-product.new_price);
      Vue.set(this.productMenu, index, product);
      this.cartData();
    },
    showModal: function showModal(product) {
      this.product = product;
    },
    getPersentage: function getPersentage(product) {
      var value = product.old_price - product.new_price;
      return Math.round(value / product.old_price * 100);
    },
    productInCart: function productInCart(product) {
      var item = this.productMenu.find(function (prod) {
        return prod.id == product.id;
      });
      return item ? true : false;
    },
    cartData: function cartData() {
      var total = 0;

      var cart = [];
      var data = {
        id: "",
        quantity: 0
      };
      this.productMenu.map(function (value, key) {
        data = {
          id: "",
          quantity: 0
        };
        if (value.id != data.id) {
          data.id = value.id;
          data.quantity = value.quantity;
          cart.unshift(data);
        }
      });
      __WEBPACK_IMPORTED_MODULE_1_localforage__["default"].setItem("cart", cart);
      this.setCart(cart);
      // this.setTotal(total);
    },
    cartEvent: function cartEvent() {
      var _this2 = this;

      __WEBPACK_IMPORTED_MODULE_1_localforage__["default"].getItem("cart").then(function (response) {
        if (!Object(__WEBPACK_IMPORTED_MODULE_2_lodash__["isEmpty"])(response)) {
          // this.productMenu = response;
          _this2.fetchProducts();
        }
      });
    },
    confirmAdd: function confirmAdd() {
      this.productMenu = [];
      // this.productMenu.push(product);
      __WEBPACK_IMPORTED_MODULE_1_localforage__["default"].removeItem("cart");
      __WEBPACK_IMPORTED_MODULE_1_localforage__["default"].removeItem("totalCart");
      this.setTotal(0);
      this.addToTotal(this.product.new_price);

      this.emptyCartAdd(this.product);
      this.cartData();
    },
    emptyCartAdd: function emptyCartAdd(product) {
      var _this3 = this;

      var cart = [];
      __WEBPACK_IMPORTED_MODULE_1_localforage__["default"].setItem("cartRegion", this.$route.params.city);
      axios.get("/api/managers/" + this.$route.params.slug).then(function (response) {
        _this3.setManager(response.data.data);
        __WEBPACK_IMPORTED_MODULE_1_localforage__["default"].setItem("manager", response.data.data);
      });

      product.quantity = 1;
      cart.unshift({ id: product.id, quantity: 1 });
      this.productMenu.push(product);
      __WEBPACK_IMPORTED_MODULE_1_localforage__["default"].setItem("cart", cart);
    },
    addToCart: function addToCart(product) {
      var _this4 = this;

      this.product = product;
      __WEBPACK_IMPORTED_MODULE_1_localforage__["default"].getItem("cart").then(function (response) {
        var d = 0;
        var data = {
          id: "",
          quantity: 0
        };
        if (Object(__WEBPACK_IMPORTED_MODULE_2_lodash__["isEmpty"])(response)) {
          _this4.addToTotal(product.new_price);

          _this4.emptyCartAdd(product);
          _this4.cartData();

          return;
        } else {
          if (_this4.manager.slug != _this4.$route.params.slug) {
            _this4.active = true;
            return;
          }
          _this4.productMenu.map(function (value, key) {
            if (value.id == _this4.product.id) {
              _this4.addToTotal(product.new_price);
              __WEBPACK_IMPORTED_MODULE_1_localforage__["default"].setItem("cartRegion", _this4.$route.params.city);

              _this4.product.quantity++;
              Vue.set(_this4.productMenu, key, _this4.product);
              d = 1;
            }
          });

          if (d != 1) {
            _this4.addToTotal(product.new_price);
            __WEBPACK_IMPORTED_MODULE_1_localforage__["default"].setItem("cartRegion", _this4.$route.params.city);

            _this4.product.quantity = 1;
            _this4.productMenu.unshift(_this4.product);
          }
        }
        _this4.cartData();
      });
    }
  })
});

/***/ }),
/* 235 */
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
function injectStyle (ssrContext) {
  if (disposed) return
  __webpack_require__(236)
}
var normalizeComponent = __webpack_require__(1)
/* script */
var __vue_script__ = __webpack_require__(238)
/* template */
var __vue_template__ = __webpack_require__(239)
/* template functional */
var __vue_template_functional__ = false
/* styles */
var __vue_styles__ = injectStyle
/* scopeId */
var __vue_scopeId__ = null
/* moduleIdentifier (server only) */
var __vue_module_identifier__ = null
var Component = normalizeComponent(
  __vue_script__,
  __vue_template__,
  __vue_template_functional__,
  __vue_styles__,
  __vue_scopeId__,
  __vue_module_identifier__
)
Component.options.__file = "resources/assets/js/front/desktop/components/Pagination.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-c9d36a10", Component.options)
  } else {
    hotAPI.reload("data-v-c9d36a10", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),
/* 236 */
/***/ (function(module, exports, __webpack_require__) {

// style-loader: Adds some css to the DOM by adding a <style> tag

// load the styles
var content = __webpack_require__(237);
if(typeof content === 'string') content = [[module.i, content, '']];
if(content.locals) module.exports = content.locals;
// add the styles to the DOM
var update = __webpack_require__(8)("59b044d7", content, false, {});
// Hot Module Replacement
if(false) {
 // When the styles change, update the <style> tags
 if(!content.locals) {
   module.hot.accept("!!../../../../../../node_modules/css-loader/index.js!../../../../../../node_modules/vue-loader/lib/style-compiler/index.js?{\"vue\":true,\"id\":\"data-v-c9d36a10\",\"scoped\":false,\"hasInlineConfig\":true}!../../../../../../node_modules/vue-loader/lib/selector.js?type=styles&index=0!./Pagination.vue", function() {
     var newContent = require("!!../../../../../../node_modules/css-loader/index.js!../../../../../../node_modules/vue-loader/lib/style-compiler/index.js?{\"vue\":true,\"id\":\"data-v-c9d36a10\",\"scoped\":false,\"hasInlineConfig\":true}!../../../../../../node_modules/vue-loader/lib/selector.js?type=styles&index=0!./Pagination.vue");
     if(typeof newContent === 'string') newContent = [[module.id, newContent, '']];
     update(newContent);
   });
 }
 // When the module is disposed, remove the <style> tags
 module.hot.dispose(function() { update(); });
}

/***/ }),
/* 237 */
/***/ (function(module, exports, __webpack_require__) {

exports = module.exports = __webpack_require__(7)(false);
// imports


// module
exports.push([module.i, "\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n", ""]);

// exports


/***/ }),
/* 238 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
  props: ["pagination", "offset"],
  methods: {
    isCurrentPage: function isCurrentPage(page) {
      return this.pagination.current_page === page;
    },
    changePage: function changePage(page) {
      if (page > this.pagination.last_page) {
        page = this.pagination.last_page;
      }
      this.pagination.current_page = page;
      this.$emit("paginate");
    }
  },
  computed: {
    pages: function pages() {
      var pages = [];
      var from = this.pagination.current_page - Math.floor(this.offset / 2);
      //   console.log(from);
      if (from < 1) {
        from = 1;
      }
      var to = from + this.offset - 1;
      //   console.log(to);
      if (to > this.pagination.last_page) {
        to = this.pagination.last_page;
      }
      while (from <= to) {
        pages.push(from);
        from++;
      }
      return pages;
    }
  }
});

/***/ }),
/* 239 */
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", { staticClass: "page-body-footer" }, [
    _c("nav", [
      _c(
        "ul",
        { staticClass: "pagination" },
        [
          _c(
            "li",
            {
              staticClass: "page-item",
              class: _vm.pagination.current_page <= 1 ? "disabled" : ""
            },
            [
              _c(
                "a",
                {
                  staticClass: "page-link",
                  on: {
                    click: [
                      function($event) {
                        _vm.$emit("topGo")
                      },
                      function($event) {
                        $event.preventDefault()
                        _vm.changePage(_vm.pagination.current_page - 1)
                      }
                    ]
                  }
                },
                [_vm._v("← " + _vm._s(_vm.$t("pagination.previous")))]
              )
            ]
          ),
          _vm._v(" "),
          _vm._l(_vm.pages, function(page) {
            return _c(
              "li",
              {
                key: page.id,
                staticClass: "page-item",
                class: _vm.isCurrentPage(page) ? "active" : "",
                on: {
                  click: function($event) {
                    $event.preventDefault()
                    _vm.changePage(page)
                  }
                }
              },
              [
                _c(
                  "a",
                  {
                    staticClass: "page-link",
                    on: {
                      click: function($event) {
                        _vm.$emit("topGo")
                      }
                    }
                  },
                  [_vm._v(_vm._s(page))]
                )
              ]
            )
          }),
          _vm._v(" "),
          _c(
            "li",
            {
              staticClass: "page-item",
              class:
                _vm.pagination.current_page >= _vm.pagination.last_page
                  ? "disabled"
                  : ""
            },
            [
              _c(
                "a",
                {
                  staticClass: "page-link",
                  on: {
                    click: [
                      function($event) {
                        _vm.$emit("topGo")
                      },
                      function($event) {
                        $event.preventDefault()
                        _vm.changePage(_vm.pagination.current_page + 1)
                      }
                    ]
                  }
                },
                [_vm._v(" " + _vm._s(_vm.$t("pagination.next")) + " →")]
              )
            ]
          )
        ],
        2
      )
    ])
  ])
}
var staticRenderFns = []
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-c9d36a10", module.exports)
  }
}

/***/ }),
/* 240 */
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "div",
    [
      !_vm.showPage
        ? _c("div", { staticClass: "loader" }, [
            _c("div", { staticClass: "loader-container" })
          ])
        : _vm._e(),
      _vm._v(" "),
      _c(
        "ul",
        { staticClass: "products" },
        _vm._l(_vm.products, function(product) {
          return _c("li", { key: product.id, staticClass: "product" }, [
            _c(
              "div",
              { staticClass: "product-inner" },
              [
                (_vm.$route.name == "catalog") | (_vm.$route.name == "tp")
                  ? _c(
                      "router-link",
                      {
                        attrs: {
                          to: { name: "tp", params: { product: product.slug } }
                        }
                      },
                      [
                        product.new_price < product.old_price
                          ? _c("div", { staticClass: "product-discount" }, [
                              _vm._v(
                                "-" + _vm._s(_vm.getPersentage(product)) + "%"
                              )
                            ])
                          : _vm._e(),
                        _vm._v(" "),
                        _c("div", { staticClass: "product-image" }, [
                          _c("img", { attrs: { src: product.image } })
                        ]),
                        _vm._v(" "),
                        _c("div", { staticClass: "product-title" }, [
                          _vm._v(_vm._s(product.name))
                        ])
                      ]
                    )
                  : _vm._e(),
                _vm._v(" "),
                (_vm.$route.name == "category") | (_vm.$route.name == "pp")
                  ? _c(
                      "router-link",
                      {
                        attrs: {
                          to: { name: "pp", params: { product: product.slug } }
                        }
                      },
                      [
                        product.new_price < product.old_price
                          ? _c("div", { staticClass: "product-discount" }, [
                              _vm._v(
                                "-" + _vm._s(_vm.getPersentage(product)) + "%"
                              )
                            ])
                          : _vm._e(),
                        _vm._v(" "),
                        _c("div", { staticClass: "product-image" }, [
                          _c("img", { attrs: { src: product.image } })
                        ]),
                        _vm._v(" "),
                        _c("div", { staticClass: "product-title" }, [
                          _vm._v(_vm._s(product.name))
                        ])
                      ]
                    )
                  : _vm._e(),
                _vm._v(" "),
                _vm.productInCart(product)
                  ? _c("div", { staticClass: "product-footer" }, [
                      _c("div", { staticClass: "counter-widget input-group" }, [
                        product.quantity == 1
                          ? _c("div", { staticClass: "input-group-prepend" }, [
                              _c(
                                "button",
                                {
                                  staticClass: "btn btn-outline-red",
                                  attrs: { type: "button" },
                                  on: {
                                    click: function($event) {
                                      _vm.removeFromCart(product)
                                    }
                                  }
                                },
                                [
                                  _c("i", { staticClass: "icon" }, [
                                    _vm._v("clear")
                                  ])
                                ]
                              )
                            ])
                          : _c("div", { staticClass: "input-group-prepend" }, [
                              _c(
                                "button",
                                {
                                  staticClass: "btn btn-outline-red",
                                  attrs: { type: "button" },
                                  on: {
                                    click: function($event) {
                                      _vm.decreaseQuantity(product)
                                    }
                                  }
                                },
                                [
                                  _c("i", { staticClass: "icon" }, [
                                    _vm._v("remove")
                                  ])
                                ]
                              )
                            ]),
                        _vm._v(" "),
                        _c("input", {
                          staticClass: "form-control",
                          attrs: { type: "text", disabled: "" },
                          domProps: {
                            value: product.quantity + " " + product.measure
                          }
                        }),
                        _vm._v(" "),
                        _c("div", { staticClass: "input-group-append" }, [
                          _c(
                            "button",
                            {
                              staticClass: "btn btn-outline-green",
                              attrs: { type: "button" },
                              on: {
                                click: function($event) {
                                  _vm.addToCart(product)
                                }
                              }
                            },
                            [_c("i", { staticClass: "icon" }, [_vm._v("add")])]
                          )
                        ])
                      ])
                    ])
                  : _c("div", { staticClass: "product-footer" }, [
                      _c("div", { staticClass: "product-price" }, [
                        _c("div", { staticClass: "product-price-new" }, [
                          _vm._v(
                            _vm._s(_vm._f("toCurrency")(product.new_price)) +
                              " сумов"
                          )
                        ]),
                        _c("div", { staticClass: "product-quantity" }, [
                          _vm._v("за 1 " + _vm._s(product.measure) + ".")
                        ])
                      ]),
                      _vm._v(" "),
                      _c(
                        "button",
                        {
                          staticClass: "btn btn-green product-add-button",
                          attrs: { type: "submit" },
                          on: {
                            click: function($event) {
                              _vm.addToCart(product)
                            }
                          }
                        },
                        [_vm._v("В корзину")]
                      )
                    ])
              ],
              1
            )
          ])
        })
      ),
      _vm._v(" "),
      _vm.showPage
        ? _c("Pagination", {
            attrs: { pagination: _vm.pagination, offset: 3 },
            on: { topGo: _vm.scrollTOP, paginate: _vm.allProducts }
          })
        : _vm._e(),
      _vm._v(" "),
      _vm.manager && _vm.showPage
        ? _c("pu-dialog-confirm", {
            attrs: {
              "pu-active": _vm.active,
              "pu-size": 500,
              "pu-title": _vm.$t("cart.confirmTitle"),
              "pu-content": _vm.$t("cart.confirmContent", {
                shop: _vm.manager.name ? _vm.manager.name : "none"
              }),
              "pu-confirm-text": _vm.$t("helper.yes"),
              "pu-cancel-text": _vm.$t("helper.no")
            },
            on: {
              "update:puActive": function($event) {
                _vm.active = $event
              },
              "pu-confirm": _vm.confirmAdd
            }
          })
        : _vm._e()
    ],
    1
  )
}
var staticRenderFns = []
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-7d035dd0", module.exports)
  }
}

/***/ }),
/* 241 */
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(1)
/* script */
var __vue_script__ = __webpack_require__(242)
/* template */
var __vue_template__ = __webpack_require__(243)
/* template functional */
var __vue_template_functional__ = false
/* styles */
var __vue_styles__ = null
/* scopeId */
var __vue_scopeId__ = null
/* moduleIdentifier (server only) */
var __vue_module_identifier__ = null
var Component = normalizeComponent(
  __vue_script__,
  __vue_template__,
  __vue_template_functional__,
  __vue_styles__,
  __vue_scopeId__,
  __vue_module_identifier__
)
Component.options.__file = "resources/assets/js/front/desktop/pages/catalog/SubCategories.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-70aa3dc0", Component.options)
  } else {
    hotAPI.reload("data-v-70aa3dc0", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),
/* 242 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
//
//
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
  name: "SubCategories",
  props: ["category", "activeIndex", "index"],
  data: function data() {
    return {
      isOpen: false
    };
  },

  methods: {
    updateActive: function updateActive(id) {
      if (this.category.id == id) {
        this.isOpen = true;
      }
      this.$emit("updateActive", id);
      this.$router.push({
        name: "category",
        params: { sluged: this.category.slug }
      });
    }
  },
  computed: {
    fieldClasses: function fieldClasses() {
      return {
        active: this.activeIndex == this.category.id,
        selected: this.childSelected
      };
    },
    childSelected: function childSelected() {
      var _this = this;

      var data = 0;
      if (this.category.children.length) {
        this.category.children.map(function (v, k) {
          if (v.slug == _this.$route.params.sluged || _this.category.slug == _this.$route.params.sluged) {
            _this.isOpen = true;
            data = 1;
          }
        });
      }

      if (this.activeIndex == this.category.id) {
        return true;
      }
      if (data == 1) {
        return true;
      }
    }
    // isParentSelected() {
    //   let data = 0;
    //   if (!this.category.children && !this.category.children.length >= 1) {
    //     return false;
    //   }
    //   if (
    //     this.category.id == this.activeIndex &&
    //     this.category.children.length >= 1
    //   ) {
    //     return true;
    //   }
    //   this.category.children.map((value, key) => {
    //     if (value.id == this.activeIndex) {
    //       data = 1;
    //       return true;
    //     }
    //   });
    //   if (data == 1) {
    //     return true;
    //   }
    //   if (this.category.slug == this.$route.params.sluged) {
    //     return true;
    //   }
    //   return false;
    // }

  },
  mounted: function mounted() {}
});

/***/ }),
/* 243 */
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("li", { staticClass: "nav-item" }, [
    _c(
      "a",
      {
        staticClass: "nav-link",
        class: [_vm.fieldClasses],
        on: {
          click: function($event) {
            $event.preventDefault()
            _vm.updateActive(_vm.category.id)
          }
        }
      },
      [_vm._v("\n    " + _vm._s(_vm.category.name))]
    ),
    _vm._v(" "),
    _vm.childSelected && _vm.isOpen
      ? _c(
          "ul",
          { staticClass: "nav" },
          _vm._l(_vm.category.children, function(cat) {
            return _c("SubCategories", {
              key: cat.id,
              attrs: {
                index: cat.id,
                activeIndex: _vm.activeIndex,
                category: cat
              },
              on: {
                updateActive: function($event) {
                  _vm.updateActive(cat.id)
                }
              }
            })
          })
        )
      : _vm._e()
  ])
}
var staticRenderFns = []
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-70aa3dc0", module.exports)
  }
}

/***/ }),
/* 244 */
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "div",
    [
      !_vm.notFound
        ? _c("div", { staticClass: "content" }, [
            !_vm.showPage
              ? _c("div", { staticClass: "loader" }, [
                  _c("div", { staticClass: "loader-container" })
                ])
              : _vm._e(),
            _vm._v(" "),
            !_vm.notFound && _vm.catalog && _vm.showPage
              ? _c("div", { staticClass: "container" }, [
                  _c("div", { staticClass: "main-actions" }, [
                    _c(
                      "a",
                      {
                        staticClass: "btn btn-outline-green",
                        on: {
                          click: function($event) {
                            _vm.$router.push({ name: "home" })
                          }
                        }
                      },
                      [_vm._v("← " + _vm._s(_vm.$t("pages.back")))]
                    )
                  ]),
                  _vm._v(" "),
                  _vm.branchName
                    ? _c("h1", { staticClass: "main-title" }, [
                        _vm._v(
                          "Каталог продуктов магазина «" +
                            _vm._s(_vm.catalog.name) +
                            "» " +
                            _vm._s(_vm.branchName)
                        )
                      ])
                    : _vm._e(),
                  _vm._v(" "),
                  _c("div", { staticClass: "content-inner" }, [
                    _c(
                      "main",
                      { staticClass: "main" },
                      [
                        _c(
                          "div",
                          {
                            staticClass:
                              "btn-group btn-group-sm btn-group-toggle main-sorter",
                            attrs: { "data-toggle": "buttons" }
                          },
                          [
                            _c("span", { staticClass: "main-sorter-title" }, [
                              _vm._v("Сортировать:")
                            ]),
                            _vm._v(" "),
                            _c(
                              "div",
                              {
                                staticClass: "btn btn-outline-light",
                                class: { active: !_vm.sortByPrice },
                                on: {
                                  click: function($event) {
                                    $event.preventDefault()
                                    _vm.sortByPrice = false
                                  }
                                }
                              },
                              [
                                _vm._v(
                                  "\n                По популярности \n              "
                                )
                              ]
                            ),
                            _vm._v(" "),
                            _c(
                              "div",
                              {
                                staticClass: "btn btn-outline-light",
                                class: { active: _vm.sortByPrice },
                                on: {
                                  click: function($event) {
                                    $event.preventDefault()
                                    _vm.sortByPrice = true
                                  }
                                }
                              },
                              [
                                _vm._v(
                                  " \n                По цене\n              "
                                )
                              ]
                            )
                          ]
                        ),
                        _vm._v(" "),
                        _vm.active != 0
                          ? _c("router-view", {
                              attrs: {
                                branch: _vm.branchName,
                                price: _vm.sortByPrice
                              },
                              on: { setActive: _vm.setActive }
                            })
                          : _vm._e(),
                        _vm._v(" "),
                        _vm.active == 0
                          ? _c("Products", {
                              attrs: {
                                branch: _vm.branchName,
                                price: _vm.sortByPrice
                              }
                            })
                          : _vm._e()
                      ],
                      1
                    ),
                    _vm._v(" "),
                    _c("aside", { staticClass: "aside" }, [
                      _c("nav", { staticClass: "categories" }, [
                        _c(
                          "ul",
                          { staticClass: "nav" },
                          [
                            _c(
                              "li",
                              { staticClass: "nav-item" },
                              [
                                _c(
                                  "router-link",
                                  {
                                    staticClass: "nav-link",
                                    class: { active: _vm.$route.name == "tp" },
                                    attrs: {
                                      to: {
                                        name: "catalog",
                                        params: { slug: _vm.catalog.slug }
                                      },
                                      exact: ""
                                    }
                                  },
                                  [_vm._v("Все категории")]
                                )
                              ],
                              1
                            ),
                            _vm._v(" "),
                            _vm._l(_vm.categories, function(category, index) {
                              return _c("SubCategories", {
                                key: category.id,
                                attrs: {
                                  activeIndex: _vm.active,
                                  index: category.id,
                                  category: category
                                },
                                on: { updateActive: _vm.setActive }
                              })
                            })
                          ],
                          2
                        )
                      ])
                    ])
                  ])
                ])
              : _vm._e()
          ])
        : _vm._e(),
      _vm._v(" "),
      _vm.notFound && !_vm.catalog && _vm.showPage ? _c("NotFound") : _vm._e()
    ],
    1
  )
}
var staticRenderFns = []
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-53113046", module.exports)
  }
}

/***/ }),
/* 245 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_localforage__ = __webpack_require__(6);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_localforage___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_0_localforage__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1_lodash__ = __webpack_require__(4);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1_lodash___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_1_lodash__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2_vuex__ = __webpack_require__(3);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2_vuex___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_2_vuex__);
var _extends = Object.assign || function (target) { for (var i = 1; i < arguments.length; i++) { var source = arguments[i]; for (var key in source) { if (Object.prototype.hasOwnProperty.call(source, key)) { target[key] = source[key]; } } } return target; };

//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//




/* harmony default export */ __webpack_exports__["default"] = ({
  data: function data() {
    return {
      product: [],
      active: false,
      productMenu: [],
      quantity: 1,
      value: null,
      showPage: false
    };
  },

  watch: {
    $route: function $route() {
      if (this.$route.params.product) {
        this.showPage = false;
        this.storageCart();
        this.fetchProduct();
      }
    }
  },
  computed: _extends({
    productInCart: function productInCart() {
      var _this = this;

      var item = this.productMenu.find(function (prod) {
        return prod.id == _this.product.id;
      });
      return item ? true : false;
    }
  }, Object(__WEBPACK_IMPORTED_MODULE_2_vuex__["mapGetters"])({
    cart: "cart",
    manager: "manager"
  })),
  methods: _extends({
    onCancel: function onCancel() {
      this.active = false;
    }
  }, Object(__WEBPACK_IMPORTED_MODULE_2_vuex__["mapActions"])({
    setCart: "setCart",
    setManager: "setManager",
    setTotal: "setTotal",
    addToTotal: "addToTotal"
  }), {
    hideModal: function hideModal() {
      $("#product").modal("hide");
    },
    changeRoute: function changeRoute(slug) {
      this.$router.replace({ name: "category", params: { sluged: slug } });
      this.hideModal();
    },
    confirmAdd: function confirmAdd() {
      var _this2 = this;

      this.productMenu = [];
      __WEBPACK_IMPORTED_MODULE_0_localforage__["default"].removeItem("cart");
      __WEBPACK_IMPORTED_MODULE_0_localforage__["default"].removeItem("totalCart");

      this.setTotal(0);
      this.addToTotal(this.product.new_price * this.quantity);
      this.productMenu.unshift({
        id: this.product.id,
        quantity: this.quantity
      });
      __WEBPACK_IMPORTED_MODULE_0_localforage__["default"].setItem("cartRegion", this.$route.params.city);
      axios.get("/api/managers/" + this.$route.params.slug).then(function (response) {
        _this2.setManager(response.data.data);
        __WEBPACK_IMPORTED_MODULE_0_localforage__["default"].setItem("manager", response.data.data);
      });
      __WEBPACK_IMPORTED_MODULE_0_localforage__["default"].setItem("cart", this.productMenu);
      this.setCart(this.productMenu);
      this.hideModal();
      return;
    },
    addToCart: function addToCart() {
      var _this3 = this;

      if (this.manager && this.manager.slug != this.$route.params.slug) {
        __WEBPACK_IMPORTED_MODULE_0_localforage__["default"].getItem("cart").then(function (response) {
          if (Object(__WEBPACK_IMPORTED_MODULE_1_lodash__["isEmpty"])(response)) {
            _this3.setTotal(0);
            _this3.addToTotal(_this3.product.new_price * _this3.quantity);
            _this3.productMenu.unshift({
              id: _this3.product.id,
              quantity: _this3.quantity
            });
            __WEBPACK_IMPORTED_MODULE_0_localforage__["default"].setItem("cartRegion", _this3.$route.params.city);
            __WEBPACK_IMPORTED_MODULE_0_localforage__["default"].setItem("cart", _this3.productMenu);
            axios.get("/api/managers/" + _this3.$route.params.slug).then(function (response) {
              _this3.setManager(response.data.data);
              __WEBPACK_IMPORTED_MODULE_0_localforage__["default"].setItem("manager", response.data.data);
            });
            _this3.setCart(_this3.productMenu);
            _this3.hideModal();
          } else {
            _this3.active = true;
            return;
          }
        });
      } else {
        this.productMenu.unshift({
          id: this.product.id,
          quantity: this.quantity
        });
        this.hideModal();
        this.addToTotal(this.product.new_price * this.quantity);
        __WEBPACK_IMPORTED_MODULE_0_localforage__["default"].setItem("cart", this.productMenu);
        __WEBPACK_IMPORTED_MODULE_0_localforage__["default"].setItem("cartRegion", this.$route.params.city);
        this.setCart(this.productMenu);
        return;
      }
    },
    increaseCart: function increaseCart() {
      var _this4 = this;

      setTimeout(function () {
        _this4.hideModal();

        if (_this4.product.quantity == _this4.quantity) {
          return;
        }
      }, 0);
      if (this.product.quantity > this.quantity) {
        var d = this.product.quantity - this.quantity;
        this.addToTotal(-(this.product.new_price * d));
        var _index = this.productMenu.findIndex(function (product) {
          return product.id == _this4.product.id;
        });
        this.productMenu.splice(_index, 1);
        this.productMenu.unshift({
          id: this.product.id,
          quantity: this.quantity
        });

        __WEBPACK_IMPORTED_MODULE_0_localforage__["default"].setItem("cart", this.productMenu);
        this.setCart(this.productMenu);
        return;
      }
      this.addToTotal(this.product.new_price * this.quantity);

      var index = this.productMenu.findIndex(function (product) {
        return product.id == _this4.product.id;
      });
      this.productMenu.splice(index, 1);
      this.productMenu.unshift({
        id: this.product.id,
        quantity: this.quantity
      });

      __WEBPACK_IMPORTED_MODULE_0_localforage__["default"].setItem("cart", this.productMenu);
      this.setCart(this.productMenu);
      return;
    },
    removeFromCart: function removeFromCart() {
      var _this5 = this;

      var index = this.productMenu.findIndex(function (prod) {
        return prod.id == _this5.product.id;
      });
      this.addToTotal(-(this.product.quantity * this.product.new_price));
      this.productMenu.splice(index, 1);
      $("#product").modal("hide");
      alert(this.productMenu);
      if (!this.productMenu.length) {
        __WEBPACK_IMPORTED_MODULE_0_localforage__["default"].removeItem("manager");
        this.setManager("empty");
        __WEBPACK_IMPORTED_MODULE_0_localforage__["default"].removeItem("cart");
        __WEBPACK_IMPORTED_MODULE_0_localforage__["default"].removeItem("totalCart");
        __WEBPACK_IMPORTED_MODULE_0_localforage__["default"].removeItem("cartRegion");
      }
      __WEBPACK_IMPORTED_MODULE_0_localforage__["default"].setItem("cart", this.productMenu);
      this.setCart("empty");
    },
    increaseQuantity: function increaseQuantity() {
      this.quantity++;
    },
    decreaseQuantity: function decreaseQuantity() {
      this.quantity--;
    },
    fetchProduct: function fetchProduct() {
      var _this6 = this;

      axios.get("/api/products/" + this.$route.params.product).then(function (response) {
        _this6.product = response.data.data;
        var l = _this6.productMenu.find(function (p) {
          return p.id == _this6.product.id;
        });
        if (l) {
          _this6.quantity = l.quantity;
          _this6.product.quantity = l.quantity;
        } else {
          _this6.product.quantity = 1;

          _this6.quantity = 1;
        }
        _this6.showPage = true;
      });
    },
    storageCart: function storageCart() {
      var _this7 = this;

      __WEBPACK_IMPORTED_MODULE_0_localforage__["default"].getItem("cart").then(function (response) {
        if (!Object(__WEBPACK_IMPORTED_MODULE_1_lodash__["isEmpty"])(response)) {
          _this7.productMenu = response;
        }
      });
    }
  }),
  mounted: function mounted() {
    if (this.$route.params.product) {
      this.fetchProduct();
    }
    this.storageCart();
  }
});

/***/ }),
/* 246 */
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "div",
    {
      staticClass: "modal fade",
      attrs: {
        id: "product",
        tabindex: "-1",
        role: "dialog",
        "aria-hidden": "true"
      }
    },
    [
      _c(
        "div",
        { staticClass: "modal-dialog modal-lg", attrs: { role: "document" } },
        [
          _c("div", { staticClass: "modal-content" }, [
            _c("div", { staticClass: "modal-body p-0" }, [
              _vm._m(0),
              _vm._v(" "),
              !_vm.showPage
                ? _c("div", { staticClass: "loader" }, [
                    _c("div", { staticClass: "loader-container" })
                  ])
                : _c("div", { staticClass: "row" }, [
                    _c("div", { staticClass: "col-auto f-product-image" }, [
                      _c("div", { staticClass: "f-product-image-inner" }, [
                        _c("img", {
                          staticClass: "f-product-img",
                          attrs: { src: _vm.product.image, alt: "" }
                        })
                      ])
                    ]),
                    _vm._v(" "),
                    _c("div", { staticClass: "col f-product-content" }, [
                      _c(
                        "div",
                        { staticClass: "f-product-content-inner" },
                        [
                          _c("h1", { staticClass: "title f-product-title" }, [
                            _vm._v(_vm._s(_vm.product.name))
                          ]),
                          _vm._v(" "),
                          _vm.product.category
                            ? _c("div", { staticClass: "f-product-segment" }, [
                                _vm.product.category.parent
                                  ? _c(
                                      "a",
                                      {
                                        on: {
                                          click: function($event) {
                                            $event.preventDefault()
                                            _vm.changeRoute(
                                              _vm.product.category.parent.slug
                                            )
                                          }
                                        }
                                      },
                                      [
                                        _vm._v(
                                          _vm._s(
                                            _vm.product.category.parent.name
                                          ) + "  / "
                                        )
                                      ]
                                    )
                                  : _vm._e(),
                                _vm._v(" "),
                                _c(
                                  "a",
                                  {
                                    on: {
                                      click: function($event) {
                                        $event.preventDefault()
                                        _vm.changeRoute(
                                          _vm.product.category.slug
                                        )
                                      }
                                    }
                                  },
                                  [_vm._v(_vm._s(_vm.product.category.name))]
                                )
                              ])
                            : _vm._e(),
                          _vm._v(" "),
                          _c("div", { staticClass: "f-product-quantity" }, [
                            _vm._v(
                              _vm._s(
                                _vm._f("toCurrency")(_vm.product.new_price)
                              ) + " сум за 1 шт"
                            )
                          ]),
                          _vm._v(" "),
                          _c("div", { staticClass: "f-product-price" }, [
                            _c("div", { staticClass: "f-product-price-new" }, [
                              _vm._v(
                                _vm._s(
                                  _vm._f("toCurrency")(
                                    _vm.product.new_price * _vm.quantity
                                  )
                                ) + " сум"
                              )
                            ]),
                            _vm._v(" "),
                            _c("div", { staticClass: "f-product-price-old" })
                          ]),
                          _vm._v(" "),
                          _c("div", { staticClass: "row mt-auto" }, [
                            _c("div", { staticClass: "col" }, [
                              _c(
                                "div",
                                { staticClass: "counter-widget input-group" },
                                [
                                  _vm.productInCart & (_vm.quantity == 1)
                                    ? _c(
                                        "div",
                                        { staticClass: "input-group-prepend" },
                                        [
                                          _c(
                                            "button",
                                            {
                                              staticClass:
                                                "btn btn-outline-red",
                                              attrs: { type: "button" },
                                              on: { click: _vm.removeFromCart }
                                            },
                                            [
                                              _c("i", { staticClass: "icon" }, [
                                                _vm._v("clear")
                                              ])
                                            ]
                                          )
                                        ]
                                      )
                                    : _vm._e(),
                                  _vm._v(" "),
                                  !_vm.productInCart & (_vm.quantity == 1)
                                    ? _c(
                                        "div",
                                        { staticClass: "input-group-prepend" },
                                        [_vm._m(1)]
                                      )
                                    : _vm._e(),
                                  _vm._v(" "),
                                  _vm.quantity > 1
                                    ? _c(
                                        "div",
                                        { staticClass: "input-group-prepend" },
                                        [
                                          _c(
                                            "button",
                                            {
                                              staticClass:
                                                "btn btn-outline-red",
                                              attrs: { type: "button" },
                                              on: {
                                                click: _vm.decreaseQuantity
                                              }
                                            },
                                            [
                                              _c("i", { staticClass: "icon" }, [
                                                _vm._v("remove")
                                              ])
                                            ]
                                          )
                                        ]
                                      )
                                    : _vm._e(),
                                  _vm._v(" "),
                                  _c("input", {
                                    staticClass: "form-control",
                                    attrs: { type: "text", disabled: "" },
                                    domProps: {
                                      value:
                                        _vm.quantity + " " + _vm.product.measure
                                    }
                                  }),
                                  _vm._v(" "),
                                  _c(
                                    "div",
                                    { staticClass: "input-group-append" },
                                    [
                                      _c(
                                        "button",
                                        {
                                          staticClass: "btn btn-outline-green",
                                          attrs: { type: "button" },
                                          on: { click: _vm.increaseQuantity }
                                        },
                                        [
                                          _c("i", { staticClass: "icon" }, [
                                            _vm._v("add")
                                          ])
                                        ]
                                      )
                                    ]
                                  )
                                ]
                              )
                            ]),
                            _vm._v(" "),
                            _c("div", { staticClass: "col" }, [
                              !_vm.productInCart
                                ? _c(
                                    "button",
                                    {
                                      staticClass: "btn btn-block btn-green",
                                      on: { click: _vm.addToCart }
                                    },
                                    [_vm._v("Добавить в корзину")]
                                  )
                                : _c(
                                    "button",
                                    {
                                      staticClass: "btn btn-block btn-green",
                                      on: { click: _vm.increaseCart }
                                    },
                                    [_vm._v("Готово")]
                                  )
                            ])
                          ]),
                          _vm._v(" "),
                          _vm.manager
                            ? _c("pu-dialog-confirm", {
                                attrs: {
                                  "pu-active": _vm.active,
                                  "pu-size": 500,
                                  "pu-title": _vm.$t("cart.confirmTitle"),
                                  "pu-content": _vm.$t("cart.confirmContent", {
                                    shop: _vm.manager.name
                                      ? _vm.manager.name
                                      : "none"
                                  }),
                                  "pu-confirm-text": _vm.$t("helper.yes"),
                                  "pu-cancel-text": _vm.$t("helper.no")
                                },
                                on: {
                                  "update:puActive": function($event) {
                                    _vm.active = $event
                                  },
                                  "pu-cancel": _vm.onCancel,
                                  "pu-confirm": _vm.confirmAdd
                                }
                              })
                            : _vm._e()
                        ],
                        1
                      )
                    ])
                  ])
            ])
          ])
        ]
      )
    ]
  )
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "button",
      {
        staticClass: "close d-none",
        attrs: {
          type: "button",
          "data-dismiss": "modal",
          "aria-label": "Close"
        }
      },
      [_c("span", { attrs: { "aria-hidden": "true" } }, [_vm._v("×")])]
    )
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "button",
      {
        staticClass: "btn btn-outline-red",
        attrs: { type: "button", disabled: "" }
      },
      [_c("i", { staticClass: "icon" }, [_vm._v("remove")])]
    )
  }
]
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-320ed538", module.exports)
  }
}

/***/ }),
/* 247 */
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(1)
/* script */
var __vue_script__ = __webpack_require__(248)
/* template */
var __vue_template__ = __webpack_require__(252)
/* template functional */
var __vue_template_functional__ = false
/* styles */
var __vue_styles__ = null
/* scopeId */
var __vue_scopeId__ = null
/* moduleIdentifier (server only) */
var __vue_module_identifier__ = null
var Component = normalizeComponent(
  __vue_script__,
  __vue_template__,
  __vue_template_functional__,
  __vue_styles__,
  __vue_scopeId__,
  __vue_module_identifier__
)
Component.options.__file = "resources/assets/js/front/desktop/pages/Cart.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-68f7b754", Component.options)
  } else {
    hotAPI.reload("data-v-68f7b754", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),
/* 248 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_babel_runtime_regenerator__ = __webpack_require__(11);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_babel_runtime_regenerator___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_0_babel_runtime_regenerator__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1_vuex__ = __webpack_require__(3);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1_vuex___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_1_vuex__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2__components_modals_ModalStep__ = __webpack_require__(249);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2__components_modals_ModalStep___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_2__components_modals_ModalStep__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_3_localforage__ = __webpack_require__(6);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_3_localforage___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_3_localforage__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_4_lodash__ = __webpack_require__(4);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_4_lodash___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_4_lodash__);


var _extends = Object.assign || function (target) { for (var i = 1; i < arguments.length; i++) { var source = arguments[i]; for (var key in source) { if (Object.prototype.hasOwnProperty.call(source, key)) { target[key] = source[key]; } } } return target; };

function _asyncToGenerator(fn) { return function () { var gen = fn.apply(this, arguments); return new Promise(function (resolve, reject) { function step(key, arg) { try { var info = gen[key](arg); var value = info.value; } catch (error) { reject(error); return; } if (info.done) { resolve(value); } else { return Promise.resolve(value).then(function (value) { step("next", value); }, function (err) { step("throw", err); }); } } return step("next"); }); }; }

//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//





/* harmony default export */ __webpack_exports__["default"] = ({
  components: { ModalStep: __WEBPACK_IMPORTED_MODULE_2__components_modals_ModalStep___default.a },
  data: function data() {
    return {
      products: [],
      region: null,
      errors: [],
      showPage: false,
      nameError: null,
      phoneError: null,
      lastNameError: null,
      regions: [],
      form: {
        user: {
          first_name: '',
          last_name: '',
          phone: '',
          region_id: 1,
          total: 0
        },
        // delivery_price: this.$store.getters('delivery_price'),
        manager_id: null,
        payment_type_id: 1,
        delivery_address_home: '',
        delivery_address_street: '',
        delivery_address_floor: '',
        delivery_address_apartment: ''
      }
    };
  },

  computed: _extends({}, Object(__WEBPACK_IMPORTED_MODULE_1_vuex__["mapGetters"])({
    // region: "region",
    user: "user",
    cartInfo: "cart",
    delivery_price: "delivery_price",
    manager: "manager",
    lang: "locale"
  }), {
    filteredProducts: function filteredProducts() {
      var _this = this;

      var d = [];
      this.products.map(function (v, k) {
        if (_this.cartInfo.prods.length) {
          _this.cartInfo.prods.map(function (value, key) {
            if (v.id == value.id) {
              v.quantity = value.quantity;
              d.unshift(v);
            }
          });
        }
      });
      return d;
    }
  }),
  watch: {
    lang: function lang() {
      this.showPage = false;
      this.getRegions();
      this.fetchRegion(this.region.slug);
    },

    user: {
      deep: true,
      immediate: true,
      handler: function handler(user) {
        if (user.data && user.data.phone) {
          this.form.user.first_name = user.data.first_name;
          this.form.user.phone = user.data.phone.substr(4, 12);
          this.form.user.last_name = user.data.last_name;
        } else {
          this.form.user = {
            first_name: null,
            last_name: null,
            phone: null,
            region_id: this.region ? this.region.id : 1
          };
        }
      }
    }
  },
  methods: _extends({
    fetchRegion: function fetchRegion(region) {
      var _this2 = this;

      if (region) {
        axios.get("/api/regions/" + region).then(function (response) {
          _this2.region = response.data.data;
          _this2.form.user.region_id = _this2.region.id;
          _this2.getProducts();
        });
      }
    },
    getRegions: function getRegions() {
      var _this3 = this;

      axios.get('/api/regions').then(function (response) {
        _this3.regions = response.data.data;
        _this3.showPage = true;
      });
    }
  }, Object(__WEBPACK_IMPORTED_MODULE_1_vuex__["mapActions"])({
    setCart: "setCart",
    setTotal: "setTotal",
    setManager: "setManager",
    addToTotal: "addToTotal"
  }), {
    proceedOrder: function proceedOrder() {
      var _this4 = this;

      this.form.manager_id = this.manager.id;
      this.form.delivery_price = this.delivery_price;
      this.form.user.phone = '+998' + this.form.user.phone;
      var params = {};
      var p = void 0;
      this.products.map(function (v, k) {
        if (!p) {
          return p = v.id + '-' + v.quantity;
        }
        p = p + "," + v.id + '-' + v.quantity;
      });
      params["phone"] = this.form.user.phone;
      params["products"] = p;
      params["form"] = this.form;
      axios.post('api/orders', { params: params }).then(function (response) {
        _this4.setEmpty();
      }).catch(function (error) {
        _this4.errors = error.response.data.errors;
      });
    },
    order: function order() {
      if (this.products.length) {
        if (!this.user.data | !this.form.user.phone | !this.form.user.last_name | !this.form.user.first_name) {
          if (!this.form.user.first_name) {
            this.nameError = 'error';
          }
          if (!this.form.user.last_name) {
            this.lastNameError = 'error';
          }
          if (!this.form.user.phone) {
            this.phoneError = 'error';
          }
          if (!this.form.user.phone | !this.form.user.last_name | !this.form.user.first_name) {
            return;
          }
        }

        if (!this.user.data.phone && 9 == this.form.user.phone.length) {
          $('#modalstep').modal('show');
          return;
        }
        this.proceedOrder();
      }
    },
    cartData: function cartData() {
      var total = 0;

      var cart = [];
      var data = {
        id: "",
        quantity: 0
      };
      this.products.map(function (value, key) {
        data = {
          id: "",
          quantity: 0
        };
        if (value.id != data.id) {
          data.id = value.id;
          data.quantity = value.quantity;
          cart.unshift(data);
        }
      });
      __WEBPACK_IMPORTED_MODULE_3_localforage__["default"].setItem("cart", cart);
      this.setCart(cart);
      // this.setTotal(total);
    },
    decreaseQuantity: function decreaseQuantity(product) {
      var index = this.products.findIndex(function (prod) {
        return prod.id == product.id;
      });
      --product.quantity;
      this.addToTotal(-product.new_price);
      Vue.set(this.products, index, product);
      this.cartData();
    },
    setEmpty: function setEmpty() {
      __WEBPACK_IMPORTED_MODULE_3_localforage__["default"].removeItem("cart");
      __WEBPACK_IMPORTED_MODULE_3_localforage__["default"].removeItem("manager");
      __WEBPACK_IMPORTED_MODULE_3_localforage__["default"].removeItem("cartRegion");
      __WEBPACK_IMPORTED_MODULE_3_localforage__["default"].removeItem("totalCart");
      this.setManager("empty");
      this.setCart("empty");
      this.products = [];
    },
    removeFromCart: function removeFromCart(product) {
      var item = this.products.findIndex(function (prod) {
        return prod.id == product.id;
      });
      if (this.products.length == 1) {
        this.products = [];
        this.setEmpty();
      } else {
        this.addToTotal(-product.new_price);

        this.products.splice(item, 1);
      }

      this.cartData();
    },
    addToCart: function addToCart(product) {
      var _this5 = this;

      var d = 0;
      var data = {
        id: "",
        quantity: 0
      };
      this.products.map(function (value, key) {
        if (value.id == product.id) {
          _this5.addToTotal(product.new_price);
          // localforage.setItem("cartRegion", this.$route.params.city);
          product.quantity++;
          Vue.set(_this5.products, key, product);
          d = 1;
        }
      });

      this.cartData();
    },
    getProducts: function () {
      var _ref = _asyncToGenerator( /*#__PURE__*/__WEBPACK_IMPORTED_MODULE_0_babel_runtime_regenerator__["default"].mark(function _callee() {
        var params, p, response;
        return __WEBPACK_IMPORTED_MODULE_0_babel_runtime_regenerator__["default"].wrap(function _callee$(_context) {
          while (1) {
            switch (_context.prev = _context.next) {
              case 0:
                // this.$nextTick(() => {
                params = {};
                p = void 0;

                this.form.total = this.cartInfo.total;

                if (!this.cartInfo.prods.length) {
                  _context.next = 10;
                  break;
                }

                this.cartInfo.prods.map(function (v, k) {
                  if (!p) {
                    return p = v.id;
                  }
                  p = p + "," + v.id;
                });
                params["ids"] = p;
                _context.next = 8;
                return axios.get("/api/managers/" + this.manager.slug + "/products/cart", {
                  params: params
                });

              case 8:
                response = _context.sent;


                this.products = response.data.data;

              case 10:
              case "end":
                return _context.stop();
            }
          }
        }, _callee, this);
      }));

      function getProducts() {
        return _ref.apply(this, arguments);
      }

      return getProducts;
    }(),

    isNumber: function isNumber(evt) {
      evt = evt ? evt : window.event;
      var charCode = evt.which ? evt.which : evt.keyCode;
      if (charCode > 31 && (charCode < 48 || charCode > 57) && charCode !== 46) {
        evt.preventDefault();
      } else {
        return true;
      }
    }
  }),
  created: function created() {
    var _this6 = this;

    this.getProducts();
    __WEBPACK_IMPORTED_MODULE_3_localforage__["default"].getItem("cartRegion").then(function (region) {
      if (!Object(__WEBPACK_IMPORTED_MODULE_4_lodash__["isEmpty"])("region")) {
        _this6.fetchRegion(region);
        _this6.getRegions();
      } else {
        _this6.showPage = true;
      }
    });
  }
});

/***/ }),
/* 249 */
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(1)
/* script */
var __vue_script__ = __webpack_require__(250)
/* template */
var __vue_template__ = __webpack_require__(251)
/* template functional */
var __vue_template_functional__ = false
/* styles */
var __vue_styles__ = null
/* scopeId */
var __vue_scopeId__ = null
/* moduleIdentifier (server only) */
var __vue_module_identifier__ = null
var Component = normalizeComponent(
  __vue_script__,
  __vue_template__,
  __vue_template_functional__,
  __vue_styles__,
  __vue_scopeId__,
  __vue_module_identifier__
)
Component.options.__file = "resources/assets/js/front/desktop/components/modals/ModalStep.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-e273d164", Component.options)
  } else {
    hotAPI.reload("data-v-e273d164", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),
/* 250 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_babel_runtime_regenerator__ = __webpack_require__(11);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_babel_runtime_regenerator___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_0_babel_runtime_regenerator__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1_vuex__ = __webpack_require__(3);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1_vuex___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_1_vuex__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2_lodash__ = __webpack_require__(4);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2_lodash___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_2_lodash__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_3_localforage__ = __webpack_require__(6);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_3_localforage___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_3_localforage__);


var _extends = Object.assign || function (target) { for (var i = 1; i < arguments.length; i++) { var source = arguments[i]; for (var key in source) { if (Object.prototype.hasOwnProperty.call(source, key)) { target[key] = source[key]; } } } return target; };

function _asyncToGenerator(fn) { return function () { var gen = fn.apply(this, arguments); return new Promise(function (resolve, reject) { function step(key, arg) { try { var info = gen[key](arg); var value = info.value; } catch (error) { reject(error); return; } if (info.done) { resolve(value); } else { return Promise.resolve(value).then(function (value) { step("next", value); }, function (err) { step("throw", err); }); } } return step("next"); }); }; }

//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//




/* harmony default export */ __webpack_exports__["default"] = ({
  props: ['phone', 'last_name', 'fist_name'],

  data: function data() {
    return {
      error: null,
      max: 9,
      sent: false,
      code: 4,
      step: 1,
      form: {
        phone: null,
        code: null
      }
    };
  },

  computed: Object(__WEBPACK_IMPORTED_MODULE_1_vuex__["mapGetters"])({
    user: "user"
  }),
  methods: _extends({}, Object(__WEBPACK_IMPORTED_MODULE_1_vuex__["mapActions"])({
    fetchUser: "fetchUser",
    setToken: "setToken"
  }), {
    repeatSmsSend: function repeatSmsSend() {
      this.sent = !this.sent;
      this.sendSMS();
    },
    sendSMS: function () {
      var _ref = _asyncToGenerator( /*#__PURE__*/__WEBPACK_IMPORTED_MODULE_0_babel_runtime_regenerator__["default"].mark(function _callee() {
        var data, response;
        return __WEBPACK_IMPORTED_MODULE_0_babel_runtime_regenerator__["default"].wrap(function _callee$(_context) {
          while (1) {
            switch (_context.prev = _context.next) {
              case 0:
                if (!(this.phone && this.max == this.phone.length)) {
                  _context.next = 5;
                  break;
                }

                data = "+998" + this.phone;
                _context.next = 4;
                return axios.post("/api/sms/create", {
                  phone: data, last_name: this.last_name ? this.last_name : "",
                  first_name: this.first_name ? this.first_name : ""
                });

              case 4:
                response = _context.sent;

              case 5:
              case "end":
                return _context.stop();
            }
          }
        }, _callee, this);
      }));

      function sendSMS() {
        return _ref.apply(this, arguments);
      }

      return sendSMS;
    }(),
    verifyCode: function verifyCode() {
      var _this = this;

      if (this.form.code && this.code == this.form.code.length) {
        var data = "+998" + this.phone;
        axios.get("/api/sms/check?its=1&code=" + this.form.code + "&phone=" + data).then(function (response) {
          $('#modalstep').modal('hide');
          _this.$emit('fine');
          var token = response.data.meta.token;
          _this.setToken(token).then(function () {
            _this.fetchUser();
            // this.setPhone(response.data.data.phone);
          });
          _this.form = {
            phone: "",
            code: ""
          };
        }).catch(function (error) {
          _this.error = "Не правильный пароль";
        });
      }
    },

    isNumber: function isNumber(evt) {
      evt = evt ? evt : window.event;
      var charCode = evt.which ? evt.which : evt.keyCode;
      if (charCode > 31 && (charCode < 48 || charCode > 57) && charCode !== 46) {
        evt.preventDefault();
      } else {
        return true;
      }
    }
  }),
  mounted: function mounted() {
    $("#modalstep").on("show.bs.modal", this.sendSMS);
  }
});

/***/ }),
/* 251 */
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "div",
    {
      staticClass: "modal fade login",
      attrs: { id: "modalstep", tabindex: "-1" }
    },
    [
      _c("div", { staticClass: "modal-dialog" }, [
        _c("div", { staticClass: "modal-content" }, [
          _c(
            "form",
            {
              staticClass: "modal-body",
              on: {
                submit: function($event) {
                  $event.preventDefault()
                  return _vm.verifyCode($event)
                }
              }
            },
            [
              _c("h4", [_vm._v("+998 " + _vm._s(_vm.phone))]),
              _vm._v(" "),
              _c("p", [_vm._v(_vm._s(_vm.$t("login.sms_sent_info")))]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group" }, [
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.form.code,
                      expression: "form.code"
                    }
                  ],
                  staticClass: "form-control",
                  attrs: {
                    maxlength: _vm.code,
                    type: "text",
                    placeholder: _vm.$t("login.sms_code")
                  },
                  domProps: { value: _vm.form.code },
                  on: {
                    input: function($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.$set(_vm.form, "code", $event.target.value)
                    }
                  }
                }),
                _vm._v(" "),
                _vm.error
                  ? _c("p", [
                      _vm._v(_vm._s(_vm.$t("login.incorrect_password")))
                    ])
                  : _vm._e(),
                _vm._v(" "),
                _c("div", { staticClass: "form-text" }, [
                  _c(
                    "button",
                    {
                      staticClass: "btn btn-link",
                      attrs: { disabled: _vm.sent, type: "button" },
                      on: {
                        click: function($event) {
                          $event.preventDefault()
                          return _vm.repeatSmsSend($event)
                        }
                      }
                    },
                    [
                      !_vm.sent
                        ? _c("i", { staticClass: "icon" }, [_vm._v("refresh")])
                        : _c("i", { staticClass: "icon" }, [_vm._v("done")]),
                      _vm._v(" "),
                      _c("span", { staticClass: "text" }, [
                        _vm._v(
                          _vm._s(_vm.$t("login.send_again")) +
                            "\n                            "
                        )
                      ])
                    ]
                  )
                ])
              ]),
              _vm._v(" "),
              _c(
                "button",
                {
                  staticClass: "btn btn-block btn-green",
                  attrs: {
                    type: "submit",
                    disabled:
                      _vm.form.code == null ||
                      (_vm.form.code && _vm.code != _vm.form.code.length)
                  },
                  on: {
                    click: function($event) {
                      $event.preventDefault()
                      return _vm.verifyCode($event)
                    }
                  }
                },
                [_vm._v(_vm._s(_vm.$t("login.next")))]
              )
            ]
          )
        ])
      ])
    ]
  )
}
var staticRenderFns = []
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-e273d164", module.exports)
  }
}

/***/ }),
/* 252 */
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "div",
    { staticClass: "content" },
    [
      !_vm.showPage
        ? _c("div", { staticClass: "loader" }, [
            _c("div", { staticClass: "loader-container" })
          ])
        : _c("div", { staticClass: "container" }, [
            _c(
              "div",
              { staticClass: "main-actions" },
              [
                _c(
                  "router-link",
                  {
                    staticClass: "btn btn-outline-green",
                    attrs: { to: { name: "home" }, exact: "" }
                  },
                  [_vm._v("←  " + _vm._s(_vm.$t("pages.back")))]
                )
              ],
              1
            ),
            _vm._v(" "),
            _vm.region && _vm.manager
              ? _c("h1", { staticClass: "main-title" }, [
                  _vm._v(
                    "Ваша корзина из магазина «" +
                      _vm._s(_vm.manager.name) +
                      "» " +
                      _vm._s(_vm.region.name)
                  )
                ])
              : _vm._e(),
            _vm._v(" "),
            _c("div", { staticClass: "content-inner" }, [
              _vm.filteredProducts.length > 0
                ? _c("main", { staticClass: "main" }, [
                    _c(
                      "ul",
                      { staticClass: "cart-items" },
                      _vm._l(_vm.filteredProducts, function(product) {
                        return _c(
                          "li",
                          { key: product.id, staticClass: "cart-item" },
                          [
                            _c(
                              "a",
                              {
                                staticClass: "cart-item-column cart-item-image"
                              },
                              [_c("img", { attrs: { src: product.image } })]
                            ),
                            _vm._v(" "),
                            _c(
                              "div",
                              {
                                staticClass: "cart-item-column cart-item-desc"
                              },
                              [_c("a", [_vm._v(_vm._s(product.name))])]
                            ),
                            _vm._v(" "),
                            _c(
                              "div",
                              {
                                staticClass:
                                  "cart-item-column cart-item-counter"
                              },
                              [
                                _c(
                                  "div",
                                  {
                                    staticClass:
                                      "counter-widget input-group input-group-sm"
                                  },
                                  [
                                    product.quantity == 1
                                      ? _c(
                                          "div",
                                          {
                                            staticClass: "input-group-prepend"
                                          },
                                          [
                                            _c(
                                              "button",
                                              {
                                                staticClass:
                                                  "btn btn-outline-red",
                                                attrs: { type: "button" },
                                                on: {
                                                  click: function($event) {
                                                    _vm.removeFromCart(product)
                                                  }
                                                }
                                              },
                                              [
                                                _c(
                                                  "i",
                                                  { staticClass: "icon" },
                                                  [_vm._v("clear")]
                                                )
                                              ]
                                            )
                                          ]
                                        )
                                      : _c(
                                          "div",
                                          {
                                            staticClass: "input-group-prepend"
                                          },
                                          [
                                            _c(
                                              "button",
                                              {
                                                staticClass:
                                                  "btn btn-outline-red",
                                                attrs: { type: "button" },
                                                on: {
                                                  click: function($event) {
                                                    _vm.decreaseQuantity(
                                                      product
                                                    )
                                                  }
                                                }
                                              },
                                              [
                                                _c(
                                                  "i",
                                                  { staticClass: "icon" },
                                                  [_vm._v("remove")]
                                                )
                                              ]
                                            )
                                          ]
                                        ),
                                    _vm._v(" "),
                                    _c("input", {
                                      staticClass: "form-control",
                                      attrs: { type: "text", disabled: "" },
                                      domProps: {
                                        value:
                                          product.quantity +
                                          " " +
                                          product.measure
                                      }
                                    }),
                                    _vm._v(" "),
                                    _c(
                                      "div",
                                      { staticClass: "input-group-append" },
                                      [
                                        _c(
                                          "button",
                                          {
                                            staticClass:
                                              "btn btn-outline-green",
                                            attrs: { type: "button" },
                                            on: {
                                              click: function($event) {
                                                _vm.addToCart(product)
                                              }
                                            }
                                          },
                                          [
                                            _c("i", { staticClass: "icon" }, [
                                              _vm._v("add")
                                            ])
                                          ]
                                        )
                                      ]
                                    )
                                  ]
                                ),
                                _vm._v(" "),
                                product.quantity > 1
                                  ? _c("span", [
                                      _vm._v(
                                        "\n               " +
                                          _vm._s(
                                            _vm._f("toCurrency")(
                                              product.new_price
                                            )
                                          ) +
                                          " за 1" +
                                          _vm._s(product.measure) +
                                          "\n              "
                                      )
                                    ])
                                  : _vm._e()
                              ]
                            ),
                            _vm._v(" "),
                            _c(
                              "div",
                              {
                                staticClass: "cart-item-column cart-item-price"
                              },
                              [
                                _c(
                                  "div",
                                  { staticClass: "cart-item-price-new" },
                                  [
                                    _vm._v(
                                      _vm._s(
                                        _vm._f("toCurrency")(
                                          product.new_price * product.quantity
                                        )
                                      ) + " сум"
                                    )
                                  ]
                                ),
                                _vm._v(" "),
                                product.new_price < product.old_price
                                  ? _c(
                                      "div",
                                      { staticClass: "cart-item-price-old" },
                                      [
                                        _vm._v(
                                          _vm._s(
                                            _vm._f("toCurrency")(
                                              product.old_price *
                                                product.quantity
                                            )
                                          ) + " сум"
                                        )
                                      ]
                                    )
                                  : _vm._e()
                              ]
                            )
                          ]
                        )
                      })
                    )
                  ])
                : _c("main", { staticClass: "main" }, [
                    _c("h1", [_vm._v("content goes here")])
                  ]),
              _vm._v(" "),
              _vm.products.length
                ? _c("aside", { staticClass: "aside" }, [
                    _c("div", { staticClass: "card" }, [
                      _c("form", { staticClass: "card-body" }, [
                        _vm._m(0),
                        _vm._v(" "),
                        _c("div", { staticClass: "form-group" }, [
                          _c("input", {
                            directives: [
                              {
                                name: "model",
                                rawName: "v-model",
                                value: _vm.form.user.first_name,
                                expression: "form.user.first_name"
                              }
                            ],
                            staticClass: "form-control",
                            class: _vm.nameError ? "is-invalid" : "",
                            attrs: { type: "text", placeholder: "Имя" },
                            domProps: { value: _vm.form.user.first_name },
                            on: {
                              input: [
                                function($event) {
                                  if ($event.target.composing) {
                                    return
                                  }
                                  _vm.$set(
                                    _vm.form.user,
                                    "first_name",
                                    $event.target.value
                                  )
                                },
                                function($event) {
                                  _vm.nameError = ""
                                }
                              ]
                            }
                          }),
                          _vm._v(" "),
                          _vm.nameError
                            ? _c("div", [
                                _c("p", { staticStyle: { color: "red" } }, [
                                  _vm._v(_vm._s(_vm.$t("validation.nameError")))
                                ])
                              ])
                            : _vm._e()
                        ]),
                        _vm._v(" "),
                        _c("div", { staticClass: "form-group" }, [
                          _c("input", {
                            directives: [
                              {
                                name: "model",
                                rawName: "v-model",
                                value: _vm.form.user.last_name,
                                expression: "form.user.last_name"
                              }
                            ],
                            staticClass: "form-control",
                            class: _vm.lastNameError ? "is-invalid" : "",
                            attrs: { type: "text", placeholder: "Фамилия" },
                            domProps: { value: _vm.form.user.last_name },
                            on: {
                              input: [
                                function($event) {
                                  if ($event.target.composing) {
                                    return
                                  }
                                  _vm.$set(
                                    _vm.form.user,
                                    "last_name",
                                    $event.target.value
                                  )
                                },
                                function($event) {
                                  _vm.lastNameError = ""
                                }
                              ]
                            }
                          }),
                          _vm._v(" "),
                          _vm.lastNameError
                            ? _c("div", [
                                _c("p", { staticStyle: { color: "red" } }, [
                                  _vm._v(
                                    _vm._s(_vm.$t("validation.lastNameError"))
                                  )
                                ])
                              ])
                            : _vm._e()
                        ]),
                        _vm._v(" "),
                        _c("div", { staticClass: "form-group" }, [
                          _c("div", { staticClass: "input-group" }, [
                            _vm._m(1),
                            _vm._v(" "),
                            _c("input", {
                              directives: [
                                {
                                  name: "model",
                                  rawName: "v-model",
                                  value: _vm.form.user.phone,
                                  expression: "form.user.phone"
                                }
                              ],
                              staticClass: "form-control",
                              class: _vm.phoneError ? "is-invalid" : "",
                              attrs: {
                                disabled: _vm.user.data && _vm.user.data.phone,
                                maxlength: 9,
                                type: "text",
                                placeholder: "Телефон"
                              },
                              domProps: { value: _vm.form.user.phone },
                              on: {
                                keypress: function($event) {
                                  _vm.isNumber($event)
                                },
                                input: [
                                  function($event) {
                                    if ($event.target.composing) {
                                      return
                                    }
                                    _vm.$set(
                                      _vm.form.user,
                                      "phone",
                                      $event.target.value
                                    )
                                  },
                                  function($event) {
                                    _vm.phoneError = ""
                                  }
                                ]
                              }
                            })
                          ]),
                          _vm._v(" "),
                          _vm.phoneError
                            ? _c("div", [
                                _c("p", { staticStyle: { color: "red" } }, [
                                  _vm._v(
                                    _vm._s(_vm.$t("validation.phoneError"))
                                  )
                                ])
                              ])
                            : _vm._e()
                        ]),
                        _vm._v(" "),
                        _c("div", { staticClass: "form-group" }, [
                          _c(
                            "select",
                            {
                              directives: [
                                {
                                  name: "model",
                                  rawName: "v-model",
                                  value: _vm.form.user.region_id,
                                  expression: "form.user.region_id"
                                }
                              ],
                              staticClass: "custom-select",
                              on: {
                                change: function($event) {
                                  var $$selectedVal = Array.prototype.filter
                                    .call($event.target.options, function(o) {
                                      return o.selected
                                    })
                                    .map(function(o) {
                                      var val =
                                        "_value" in o ? o._value : o.value
                                      return val
                                    })
                                  _vm.$set(
                                    _vm.form.user,
                                    "region_id",
                                    $event.target.multiple
                                      ? $$selectedVal
                                      : $$selectedVal[0]
                                  )
                                }
                              }
                            },
                            _vm._l(_vm.regions, function(region) {
                              return _c(
                                "option",
                                {
                                  attrs: { disabled: "", selected: "" },
                                  domProps: { value: region.id }
                                },
                                [_vm._v(_vm._s(region.name))]
                              )
                            })
                          )
                        ]),
                        _vm._v(" "),
                        _c("div", { staticClass: "form-group" }, [
                          _c("input", {
                            directives: [
                              {
                                name: "model",
                                rawName: "v-model",
                                value: _vm.form.delivery_address_street,
                                expression: "form.delivery_address_street"
                              }
                            ],
                            staticClass: "form-control",
                            attrs: { type: "text", placeholder: "Улица" },
                            domProps: {
                              value: _vm.form.delivery_address_street
                            },
                            on: {
                              input: function($event) {
                                if ($event.target.composing) {
                                  return
                                }
                                _vm.$set(
                                  _vm.form,
                                  "delivery_address_street",
                                  $event.target.value
                                )
                              }
                            }
                          })
                        ]),
                        _vm._v(" "),
                        _c("div", { staticClass: "form-group form-row" }, [
                          _c("div", { staticClass: "col" }, [
                            _c("input", {
                              directives: [
                                {
                                  name: "model",
                                  rawName: "v-model",
                                  value: _vm.form.delivery_address_home,
                                  expression: "form.delivery_address_home"
                                }
                              ],
                              staticClass: "form-control",
                              attrs: { type: "text", placeholder: "Дом" },
                              domProps: {
                                value: _vm.form.delivery_address_home
                              },
                              on: {
                                input: function($event) {
                                  if ($event.target.composing) {
                                    return
                                  }
                                  _vm.$set(
                                    _vm.form,
                                    "delivery_address_home",
                                    $event.target.value
                                  )
                                }
                              }
                            })
                          ]),
                          _vm._v(" "),
                          _c("div", { staticClass: "col" }, [
                            _c("input", {
                              directives: [
                                {
                                  name: "model",
                                  rawName: "v-model",
                                  value: _vm.form.delivery_address_floor,
                                  expression: "form.delivery_address_floor"
                                }
                              ],
                              staticClass: "form-control",
                              attrs: { type: "text", placeholder: "Корп." },
                              domProps: {
                                value: _vm.form.delivery_address_floor
                              },
                              on: {
                                input: function($event) {
                                  if ($event.target.composing) {
                                    return
                                  }
                                  _vm.$set(
                                    _vm.form,
                                    "delivery_address_floor",
                                    $event.target.value
                                  )
                                }
                              }
                            })
                          ]),
                          _vm._v(" "),
                          _c("div", { staticClass: "col" }, [
                            _c("input", {
                              directives: [
                                {
                                  name: "model",
                                  rawName: "v-model",
                                  value: _vm.form.delivery_address_apartment,
                                  expression: "form.delivery_address_apartment"
                                }
                              ],
                              staticClass: "form-control",
                              attrs: { type: "text", placeholder: "Кв." },
                              domProps: {
                                value: _vm.form.delivery_address_apartment
                              },
                              on: {
                                input: function($event) {
                                  if ($event.target.composing) {
                                    return
                                  }
                                  _vm.$set(
                                    _vm.form,
                                    "delivery_address_apartment",
                                    $event.target.value
                                  )
                                }
                              }
                            })
                          ])
                        ]),
                        _vm._v(" "),
                        _c("div", { staticClass: "form-group" }, [
                          _c(
                            "div",
                            {
                              staticClass:
                                "custom-control custom-radio custom-control-inline"
                            },
                            [
                              _c("input", {
                                directives: [
                                  {
                                    name: "model",
                                    rawName: "v-model",
                                    value: _vm.form.payment_type_id,
                                    expression: "form.payment_type_id"
                                  }
                                ],
                                staticClass: "custom-control-input",
                                attrs: {
                                  type: "radio",
                                  id: "cart_payment_1",
                                  name: "cart_payment",
                                  value: "1",
                                  checked: ""
                                },
                                domProps: {
                                  checked: _vm._q(_vm.form.payment_type_id, "1")
                                },
                                on: {
                                  change: function($event) {
                                    _vm.$set(_vm.form, "payment_type_id", "1")
                                  }
                                }
                              }),
                              _vm._v(" "),
                              _c(
                                "label",
                                {
                                  staticClass: "custom-control-label",
                                  attrs: { for: "cart_payment_1" }
                                },
                                [_vm._v("Наличными")]
                              )
                            ]
                          )
                        ]),
                        _vm._v(" "),
                        _c(
                          "button",
                          {
                            staticClass: "btn btn-block btn-green",
                            attrs: { type: "submit" },
                            on: {
                              click: function($event) {
                                $event.preventDefault()
                                return _vm.order($event)
                              }
                            }
                          },
                          [_vm._v("Заказать")]
                        )
                      ])
                    ])
                  ])
                : _vm._e()
            ])
          ]),
      _vm._v(" "),
      _c("ModalStep", {
        attrs: {
          lastName: _vm.form.user.last_name,
          firstName: _vm.form.user.first_name,
          phone: _vm.form.user.phone
        },
        on: { fine: _vm.proceedOrder }
      })
    ],
    1
  )
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "form-group" }, [
      _c("div", { staticClass: "card-title" }, [_vm._v("Оформление")])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "input-group-prepend" }, [
      _c(
        "span",
        { staticClass: "input-group-text", attrs: { id: "basic-addon1" } },
        [_vm._v("+998")]
      )
    ])
  }
]
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-68f7b754", module.exports)
  }
}

/***/ }),
/* 253 */
/***/ (function(module, __webpack_exports__) {

"use strict";
throw new Error("Module build failed: Error: ENOENT: no such file or directory, open '/home/rin4ik/work/delivery/node_modules/vue-router/dist/vue-router.esm.js'");

/***/ }),
/* 254 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__vuex__ = __webpack_require__(168);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1_localforage__ = __webpack_require__(6);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1_localforage___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_1_localforage__);



var beforeEach = function beforeEach(to, from, next) {
    // localforage.removeItem('intended')

    __WEBPACK_IMPORTED_MODULE_0__vuex__["a" /* default */].dispatch('checkTokenExists').then(function () {
        next();
    }).catch(function () {
        if (to.meta.needsAuth) {
            next({ name: 'home' });
            return;
        }

        next();
    });
};

/* harmony default export */ __webpack_exports__["a"] = (beforeEach);

/***/ }),
/* 255 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony default export */ __webpack_exports__["a"] = ({
    delivery_price: Number(window.App.deliveryPrice),
    user: {
        authenticated: false,
        total: 0,
        region: '',
        regionName: '',
        regionSlug: '',
        // phone: '',
        lang: '',
        data: {}
    },
    cart: {
        total: null,
        quantity: null,
        region_id: null,
        manager: {},
        prods: {}
    }
});

/***/ }),
/* 256 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "setToken", function() { return setToken; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "setAuthenticated", function() { return setAuthenticated; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "setUserData", function() { return setUserData; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "setRegion", function() { return setRegion; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "setManager", function() { return setManager; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "setLang", function() { return setLang; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "setRegionName", function() { return setRegionName; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "setCart", function() { return setCart; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "addToTotal", function() { return addToTotal; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "setTotal", function() { return setTotal; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_localforage__ = __webpack_require__(6);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_localforage___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_0_localforage__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1_lodash__ = __webpack_require__(4);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1_lodash___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_1_lodash__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2__getters__ = __webpack_require__(169);



var setToken = function setToken(state, token) {
    if (Object(__WEBPACK_IMPORTED_MODULE_1_lodash__["isEmpty"])(token)) {
        __WEBPACK_IMPORTED_MODULE_0_localforage__["default"].removeItem('authtoken', token);
        return;
    }
    __WEBPACK_IMPORTED_MODULE_0_localforage__["default"].setItem('authtoken', token);
};
// export const setPhone = (state, phone) => {
//     if (isEmpty(phone)) {
//         localforage.removeItem('phone', phone)
//         return
//     }
//     localforage.setItem('phone', phone)
// }
var setAuthenticated = function setAuthenticated(state, trueOrFalse) {
    state.user.authenticated = trueOrFalse;
};
var setUserData = function setUserData(state, user) {
    state.user.data = user;
};
var setRegion = function setRegion(state, regionId) {
    state.user.region = regionId;
};
var setManager = function setManager(state, manager) {
    state.cart.manager = manager;
};
var setLang = function setLang(state, lang) {
    state.user.lang = lang;
};
var setRegionName = function setRegionName(state, region) {
    if (!Object(__WEBPACK_IMPORTED_MODULE_1_lodash__["isEmpty"])(region)) {
        state.user.regionName = region.name;
        state.user.regionSlug = region.slug;
        return;
    }
};
var setCart = function setCart(state, cart) {
    if (cart == 'empty') {
        state.cart.prods = {};
        state.cart.quantity = 0;
        state.cart.total = 0;
        return;
    }
    // let d = 0
    // cart.map((v, k) => {
    //     d = d + v.quantity
    // })

    state.cart.prods = cart;
    // state.cart.quantity = d;
    return;
};
var addToTotal = function addToTotal(state, price) {
    state.cart.total = state.cart.total + price;
    __WEBPACK_IMPORTED_MODULE_0_localforage__["default"].setItem('totalCart', state.cart.total);
    return;
};
var setTotal = function setTotal(state, total) {
    if (total == null) {
        __WEBPACK_IMPORTED_MODULE_0_localforage__["default"].getItem("totalCart").then(function (total) {
            if (!Object(__WEBPACK_IMPORTED_MODULE_1_lodash__["isEmpty"])('total')) {
                state.cart.total = total;
            }
        });
        return;
    }
    state.cart.total = total;
    __WEBPACK_IMPORTED_MODULE_0_localforage__["default"].setItem('totalCart', state.cart.total);

    return;
};

/***/ }),
/* 257 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "login", function() { return login; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "fetchUser", function() { return fetchUser; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "checkTokenExists", function() { return checkTokenExists; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "clearAuth", function() { return clearAuth; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "setRegionId", function() { return setRegionId; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "setCart", function() { return setCart; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "logout", function() { return logout; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "setToken", function() { return setToken; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "setTotal", function() { return setTotal; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "addToTotal", function() { return addToTotal; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "setRegionName", function() { return setRegionName; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "setManager", function() { return setManager; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "setRegion", function() { return setRegion; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "checkLangExists", function() { return checkLangExists; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "langChange", function() { return langChange; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_lodash__ = __webpack_require__(4);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_lodash___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_0_lodash__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1_localforage__ = __webpack_require__(6);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1_localforage___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_1_localforage__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2__helpers_index__ = __webpack_require__(258);



// window.Vue = require('vue');


var login = function login(_ref, _ref2) {
    var dispatch = _ref.dispatch;
    var payload = _ref2.payload,
        context = _ref2.context;

    return axios.post('/api/login', payload).then(function (response) {
        dispatch('setToken', response.data.meta.token, response.data.data.phone).then(function () {
            dispatch('fetchUser');
        });
    }).catch(function (error) {
        context.errors = error.response.data.errors;
    });
};

var fetchUser = function fetchUser(_ref3) {
    var commit = _ref3.commit;

    return axios.get('/api/me').then(function (response) {
        commit('setAuthenticated', true);
        commit('setUserData', response.data.data);
    });
};

var checkTokenExists = function checkTokenExists(_ref4, token) {
    var commit = _ref4.commit,
        dispatch = _ref4.dispatch;

    return __WEBPACK_IMPORTED_MODULE_1_localforage__["default"].getItem('authtoken').then(function (token) {
        if (Object(__WEBPACK_IMPORTED_MODULE_0_lodash__["isEmpty"])(token)) {
            return Promise.reject('NO_STORAGE_TOKEN');
        }

        return Promise.resolve(token);
    });
};
// export const checkPhoneExists = ({ commit, dispatch }, phone) => {
//     return localforage.getItem('phone').then((phone) => {
//         if (isEmpty(phone)) {
//             return;
//         }
//         return Promise.resolve(phone)
//     })
// }
var clearAuth = function clearAuth(_ref5, token) {
    var commit = _ref5.commit;

    commit('setAuthenticated', false);
    commit('setUserData', null);
    commit('setToken', null);
    // commit('setPhone', null)
    Object(__WEBPACK_IMPORTED_MODULE_2__helpers_index__["a" /* setHttpToken */])(null);
};

var setRegionId = function setRegionId(_ref6, regionId) {
    var commit = _ref6.commit,
        dispatch = _ref6.dispatch;

    commit('setRegion', regionId);
    __WEBPACK_IMPORTED_MODULE_1_localforage__["default"].setItem('region', regionId);
};
var setCart = function setCart(_ref7, cart) {
    var commit = _ref7.commit,
        dispatch = _ref7.dispatch;

    if (cart == 'empty') {
        commit('setCart', 'empty');
        return;
    }
    // commit('setRegion', regionId)
    // localforage.setItem('region', regionId)
    // console.log(cart)
    return __WEBPACK_IMPORTED_MODULE_1_localforage__["default"].getItem('cart').then(function (cart) {
        if (!Object(__WEBPACK_IMPORTED_MODULE_0_lodash__["isEmpty"])(cart)) {
            commit('setCart', cart);
        }
    });
};

var logout = function logout(_ref8) {
    var dispatch = _ref8.dispatch;

    return axios.post('/api/logout').then(function (response) {
        dispatch('clearAuth');
    });
};

var setToken = function setToken(_ref9, token) {
    var commit = _ref9.commit,
        dispatch = _ref9.dispatch;

    if (Object(__WEBPACK_IMPORTED_MODULE_0_lodash__["isEmpty"])(token)) {
        return dispatch('checkTokenExists').then(function (token) {

            Object(__WEBPACK_IMPORTED_MODULE_2__helpers_index__["a" /* setHttpToken */])(token);
        });
    }
    commit('setToken', token);
    Object(__WEBPACK_IMPORTED_MODULE_2__helpers_index__["a" /* setHttpToken */])(token);
};
// export const setPhone = ({ commit, dispatch }, phone) => {
//     if (isEmpty(phone)) {
//         return dispatch('checkPhoneExists')
//     }
//     commit('setPhone', phone)
// }
var setTotal = function setTotal(_ref10, total) {
    var commit = _ref10.commit,
        dispatch = _ref10.dispatch;

    // commit('setRegion', regionId)
    // localforage.setItem('region', regionId)    console.log(cart)

    commit('setTotal', total);
};
var addToTotal = function addToTotal(_ref11, price) {
    var commit = _ref11.commit,
        dispatch = _ref11.dispatch;

    // commit('setRegion', regionId)
    // localforage.setItem('region', regionId)    console.log(cart)

    commit('addToTotal', price);
};
var setRegionName = function setRegionName(_ref12, region) {
    var commit = _ref12.commit,
        dispatch = _ref12.dispatch;

    commit('setRegionName', region);
};
var setManager = function setManager(_ref13, manager) {
    var commit = _ref13.commit,
        dispatch = _ref13.dispatch;

    if (manager == 'empty') {
        commit('setManager', null);
        return;
    }
    if (!manager) {
        __WEBPACK_IMPORTED_MODULE_1_localforage__["default"].getItem('manager').then(function (manager) {
            if (!Object(__WEBPACK_IMPORTED_MODULE_0_lodash__["isEmpty"])(manager)) {
                commit('setManager', manager);
            }
        });
        return;
    }
    commit('setManager', manager);
};
var setRegion = function setRegion(_ref14) {
    var commit = _ref14.commit,
        dispatch = _ref14.dispatch;


    __WEBPACK_IMPORTED_MODULE_1_localforage__["default"].getItem('region').then(function (regionId) {
        if (Object(__WEBPACK_IMPORTED_MODULE_0_lodash__["isEmpty"])(regionId)) {
            $("#Regions").modal('show');
            return Promise.reject('NO_REGION_CHOOSEN');
        } else {
            commit('setRegion', regionId);
            return Promise.resolve(regionId);
        }
    });
};

var checkLangExists = function checkLangExists(_ref15) {
    var commit = _ref15.commit,
        dispatch = _ref15.dispatch;

    return __WEBPACK_IMPORTED_MODULE_1_localforage__["default"].getItem('lang').then(function (lang) {
        dispatch('langChange', lang);
    });
};
var langChange = function langChange(_ref16, lang) {
    var commit = _ref16.commit,
        dispatch = _ref16.dispatch;


    if (Object(__WEBPACK_IMPORTED_MODULE_0_lodash__["isEmpty"])(lang)) {
        __WEBPACK_IMPORTED_MODULE_1_localforage__["default"].setItem('lang', 'ru');
        Vue.i18n.set('ru');
        commit('setLang', 'ru');
    } else {
        axios.get('/api/locale/' + lang);
        commit('setLang', lang);
        __WEBPACK_IMPORTED_MODULE_1_localforage__["default"].setItem('lang', lang);
        Vue.i18n.set(lang);
    }
};
// export const setToken = ({ commit, dispatch }, token) => {
//     if (isEmpty(token)) {
//         return dispatch('checkTokenExists').then((token) => {
//             setHttpToken(token)
//         })
//     }
//     commit('setToken', token)
//     setHttpToken(token)
// }
// export const setPhone = ({ commit, dispatch }, phone) => {
//     if (isEmpty(phone)) {
//         return dispatch('checkPhoneExists')
//     }
//     commit('setPhone', phone)
// }
// export const setTotal = ({ commit }, total) => {
//     commit('setTotal', total)
// }
// export const checkLangExists = ({ commit, dispatch }) => {
//     return localforage.getItem('lang').then((lang) => {
//         dispatch('langChange', lang)
//     })
// }
// export const langChange = ({ commit, dispatch }, lang) => {
//     axios.get(`/api/locale/${lang}`)
//     commit('setLang', lang)
//     if (isEmpty(lang)) {
//         localforage.setItem('lang', 'ru')
//         Vue.i18n.set('ru');
//         commit('setLang', 'ru')

//     } else {
//         localforage.setItem('lang', lang)
//         Vue.i18n.set(lang);
//     }
// }
// export const checkTokenExists = ({ commit, dispatch }, token) => {
//     return localforage.getItem('authtoken').then((token) => {
//         if (isEmpty(token)) {

//             return Promise.reject('NO_STORAGE_TOKEN');
//         }

//         return Promise.resolve(token)
//     })
// }

// export const checkPhoneExists = ({ commit, dispatch }, phone) => {
//     return localforage.getItem('phone').then((phone) => {
//         if (isEmpty(phone)) {
//             return;
//         }
//         return Promise.resolve(phone)
//     })
// }
// export const clearAuth = ({ commit }, token) => {
//     commit('setAuthenticated', false)
//     commit('setUserData', null)
//     commit('setToken', null)
//     commit('setPhone', null)
//     setHttpToken(null)
// }

/***/ }),
/* 258 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return setHttpToken; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_lodash__ = __webpack_require__(4);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_lodash___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_0_lodash__);


var setHttpToken = function setHttpToken(token) {
    if (Object(__WEBPACK_IMPORTED_MODULE_0_lodash__["isEmpty"])(token)) {
        window.axios.defaults.headers.common['Authorization'] = null;
    }
    window.axios.defaults.headers.common['Authorization'] = 'Bearer ' + token;
};

/***/ }),
/* 259 */
/***/ (function(module, __webpack_exports__) {

"use strict";
throw new Error("Module build failed: Error: ENOENT: no such file or directory, open '/home/rin4ik/work/delivery/node_modules/vuex-i18n/dist/vuex-i18n.es.js'");

/***/ }),
/* 260 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony default export */ __webpack_exports__["a"] = ({
    "ru": {
        "login": {
            "title": "Вход",
            "pre_title": "Введите свой номер телефона",
            "sms_info": "На указанный номер будет отправлено SMS с кодом подтверждения номера.",
            "button_send": "Получить код для входа",
            "phone_placeholder": "Телефон",
            "sms_sent_info": "Мы отправили вам SMS с кодом. Пожалуйста, введите его в поле ниже",
            "incorrect_password": "Неправильный код",
            "send_again": "Отправить еще раз",
            "next": "Далее",
            "sms_code": "Код из SMS",
            "change_number": "Изменить номер"
        },
        "header": {
            "title": "Быстрая доставка продуктов",
            "step1": "Выберите свой любимый магазин в своем регионе",
            "step2": "Собирайте нужные продукты в корзину и оформляйте заказ",
            "step3": "Наш курьер доставит Ваш заказ по указанному адресу и времени",
            "delivery": "Доставка",
            "login": "Вход",
            "logout": "Выйти",
            "shops": "Магазины"
        },
        "validation": {
            "accepted": "The {attribute} must be accepted.",
            "active_url": "The {attribute} is not a valid URL.",
            "after": "The {attribute} must be a date after {date}.",
            "after_or_equal": "The {attribute} must be a date after or equal to {date}.",
            "alpha": "The {attribute} may only contain letters.",
            "alpha_dash": "The {attribute} may only contain letters, numbers, dashes and underscores.",
            "alpha_num": "The {attribute} may only contain letters and numbers.",
            "array": "The {attribute} must be an array.",
            "before": "The {attribute} must be a date before {date}.",
            "before_or_equal": "The {attribute} must be a date before or equal to {date}.",
            "between": {
                "numeric": "The {attribute} must be between {min} and {max}.",
                "file": "The {attribute} must be between {min} and {max} kilobytes.",
                "string": "The {attribute} must be between {min} and {max} characters.",
                "array": "The {attribute} must have between {min} and {max} items."
            },
            "boolean": "The {attribute} field must be true or false.",
            "confirmed": "The {attribute} confirmation does not match.",
            "date": "The {attribute} is not a valid date.",
            "date_format": "The {attribute} does not match the format {format}.",
            "different": "The {attribute} and {other} must be different.",
            "digits": "The {attribute} must be {digits} digits.",
            "digits_between": "The {attribute} must be between {min} and {max} digits.",
            "dimensions": "The {attribute} has invalid image dimensions.",
            "distinct": "The {attribute} field has a duplicate value.",
            "email": "The {attribute} must be a valid email address.",
            "exists": "The selected {attribute} is invalid.",
            "file": "The {attribute} must be a file.",
            "filled": "The {attribute} field must have a value.",
            "gt": {
                "numeric": "The {attribute} must be greater than {value}.",
                "file": "The {attribute} must be greater than {value} kilobytes.",
                "string": "The {attribute} must be greater than {value} characters.",
                "array": "The {attribute} must have more than {value} items."
            },
            "gte": {
                "numeric": "The {attribute} must be greater than or equal {value}.",
                "file": "The {attribute} must be greater than or equal {value} kilobytes.",
                "string": "The {attribute} must be greater than or equal {value} characters.",
                "array": "The {attribute} must have {value} items or more."
            },
            "image": "The {attribute} must be an image.",
            "in": "The selected {attribute} is invalid.",
            "in_array": "The {attribute} field does not exist in {other}.",
            "integer": "The {attribute} must be an integer.",
            "ip": "The {attribute} must be a valid IP address.",
            "ipv4": "The {attribute} must be a valid IPv4 address.",
            "ipv6": "The {attribute} must be a valid IPv6 address.",
            "json": "The {attribute} must be a valid JSON string.",
            "lt": {
                "numeric": "The {attribute} must be less than {value}.",
                "file": "The {attribute} must be less than {value} kilobytes.",
                "string": "The {attribute} must be less than {value} characters.",
                "array": "The {attribute} must have less than {value} items."
            },
            "lte": {
                "numeric": "The {attribute} must be less than or equal {value}.",
                "file": "The {attribute} must be less than or equal {value} kilobytes.",
                "string": "The {attribute} must be less than or equal {value} characters.",
                "array": "The {attribute} must not have more than {value} items."
            },
            "max": {
                "numeric": "The {attribute} may not be greater than {max}.",
                "file": "The {attribute} may not be greater than {max} kilobytes.",
                "string": "The {attribute} may not be greater than {max} characters.",
                "array": "The {attribute} may not have more than {max} items."
            },
            "mimes": "The {attribute} must be a file of type: {values}.",
            "mimetypes": "The {attribute} must be a file of type: {values}.",
            "min": {
                "numeric": "The {attribute} must be at least {min}.",
                "file": "The {attribute} must be at least {min} kilobytes.",
                "string": "The {attribute} must be at least {min} characters.",
                "array": "The {attribute} must have at least {min} items."
            },
            "not_in": "The selected {attribute} is invalid.",
            "not_regex": "The {attribute} format is invalid.",
            "numeric": "The {attribute} must be a number.",
            "present": "The {attribute} field must be present.",
            "regex": "The {attribute} format is invalid.",
            "required": "Заполните это поле.",
            "required_if": "The {attribute} field is required when {other} is {value}.",
            "required_unless": "The {attribute} field is required unless {other} is in {values}.",
            "required_with": "The {attribute} field is required when {values} is present.",
            "required_with_all": "The {attribute} field is required when {values} is present.",
            "required_without": "The {attribute} field is required when {values} is not present.",
            "required_without_all": "The {attribute} field is required when none of {values} are present.",
            "same": "The {attribute} and {other} must match.",
            "size": {
                "numeric": "The {attribute} must be {size}.",
                "file": "The {attribute} must be {size} kilobytes.",
                "string": "The {attribute} must be {size} characters.",
                "array": "The {attribute} must contain {size} items."
            },
            "string": "The {attribute} must be a string.",
            "timezone": "The {attribute} must be a valid zone.",
            "unique": "The {attribute} has already been taken.",
            "uploaded": "The {attribute} failed to upload.",
            "url": "The {attribute} format is invalid.",
            "nameError": "Заполните это поле.",
            "lastNameError": "Заполните это поле.",
            "phoneError": "Заполните это поле.",
            "custom": {
                "attribute-name": {
                    "rule-name": "custom-message"
                }
            },
            "attributes": []
        },
        "helper": {
            "yes": "Да",
            "no": "Нет"
        },
        "cart": {
            "shop": "Магазин",
            "inCart": "Товаров в корзине",
            "price": "На сумму",
            "sum": "сум",
            "cart": "Корзина",
            "button": "Оформить заказ",
            "confirmContent": "В вашей корзине продукты из магазина <b>{shop}<\/b> вы действительно хотите удалить их?",
            "confirmTitle": "Подтвердите действие:"
        },
        "passwords": {
            "password": "Passwords must be at least six characters and match the confirmation.",
            "reset": "Your password has been reset!",
            "sent": "We have e-mailed your password reset link!",
            "token": "This password reset token is invalid.",
            "user": "We can't find a user with that e-mail address."
        },
        "auth": {
            "failed": "These credentials do not match our records.",
            "throttle": "Too many login attempts. Please try again in {seconds} seconds."
        },
        "pagination": {
            "previous": "Назад",
            "next": "Вперед"
        },
        "pages": {
            "back": "Назад к списку магазинов"
        }
    },
    "uz": {
        "login": {
            "title": "Kirish",
            "pre_title": "Telefon raqamingizni kiriting",
            "sms_info": "Siz ko'rstagan raqamga sms yuboriladi",
            "button_send": "Kodni jo'natish",
            "phone_placeholder": "Telefon",
            "sms_sent_info": "Sizga kodni SMS orqali jo'natdik",
            "incorrect_password": "Noto'gri kod",
            "send_again": "Yana bir maratoba jo'natish",
            "next": "Tasdiqlash",
            "sms_code": "SMS da kelgan kodni kiriting",
            "change_number": "Raqamni o'zgartirish"
        },
        "header": {
            "title": "Mahsulotlarni tezda yetkazib beramiz",
            "step1": "O'z regioningizdagi sevimli do'koningizni tanlang",
            "step2": "Kerakli maxsulotlarni savatchaga to'ldiring va buyurtma qiling",
            "step3": "Sizning kureringiz buyurtmangizni aytilgan manzilga aytilgan vaqtda yetkazadi",
            "delivery": "Buyurtma",
            "login": "Kirish",
            "logout": "Chiqish",
            "shops": "Do'konlar"
        },
        "validation": {
            "accepted": "The {attribute} must be accepted.",
            "active_url": "The {attribute} is not a valid URL.",
            "after": "The {attribute} must be a date after {date}.",
            "after_or_equal": "The {attribute} must be a date after or equal to {date}.",
            "alpha": "The {attribute} may only contain letters.",
            "alpha_dash": "The {attribute} may only contain letters, numbers, dashes and underscores.",
            "alpha_num": "The {attribute} may only contain letters and numbers.",
            "array": "The {attribute} must be an array.",
            "before": "The {attribute} must be a date before {date}.",
            "before_or_equal": "The {attribute} must be a date before or equal to {date}.",
            "between": {
                "numeric": "The {attribute} must be between {min} and {max}.",
                "file": "The {attribute} must be between {min} and {max} kilobytes.",
                "string": "The {attribute} must be between {min} and {max} characters.",
                "array": "The {attribute} must have between {min} and {max} items."
            },
            "boolean": "The {attribute} field must be true or false.",
            "confirmed": "The {attribute} confirmation does not match.",
            "date": "The {attribute} is not a valid date.",
            "date_format": "The {attribute} does not match the format {format}.",
            "different": "The {attribute} and {other} must be different.",
            "digits": "The {attribute} must be {digits} digits.",
            "digits_between": "The {attribute} must be between {min} and {max} digits.",
            "dimensions": "The {attribute} has invalid image dimensions.",
            "distinct": "The {attribute} field has a duplicate value.",
            "email": "The {attribute} must be a valid email address.",
            "exists": "The selected {attribute} is invalid.",
            "file": "The {attribute} must be a file.",
            "filled": "The {attribute} field must have a value.",
            "gt": {
                "numeric": "The {attribute} must be greater than {value}.",
                "file": "The {attribute} must be greater than {value} kilobytes.",
                "string": "The {attribute} must be greater than {value} characters.",
                "array": "The {attribute} must have more than {value} items."
            },
            "gte": {
                "numeric": "The {attribute} must be greater than or equal {value}.",
                "file": "The {attribute} must be greater than or equal {value} kilobytes.",
                "string": "The {attribute} must be greater than or equal {value} characters.",
                "array": "The {attribute} must have {value} items or more."
            },
            "image": "The {attribute} must be an image.",
            "in": "The selected {attribute} is invalid.",
            "in_array": "The {attribute} field does not exist in {other}.",
            "integer": "The {attribute} must be an integer.",
            "ip": "The {attribute} must be a valid IP address.",
            "ipv4": "The {attribute} must be a valid IPv4 address.",
            "ipv6": "The {attribute} must be a valid IPv6 address.",
            "json": "The {attribute} must be a valid JSON string.",
            "lt": {
                "numeric": "The {attribute} must be less than {value}.",
                "file": "The {attribute} must be less than {value} kilobytes.",
                "string": "The {attribute} must be less than {value} characters.",
                "array": "The {attribute} must have less than {value} items."
            },
            "lte": {
                "numeric": "The {attribute} must be less than or equal {value}.",
                "file": "The {attribute} must be less than or equal {value} kilobytes.",
                "string": "The {attribute} must be less than or equal {value} characters.",
                "array": "The {attribute} must not have more than {value} items."
            },
            "max": {
                "numeric": "The {attribute} may not be greater than {max}.",
                "file": "The {attribute} may not be greater than {max} kilobytes.",
                "string": "The {attribute} may not be greater than {max} characters.",
                "array": "The {attribute} may not have more than {max} items."
            },
            "mimes": "The {attribute} must be a file of type: {values}.",
            "mimetypes": "The {attribute} must be a file of type: {values}.",
            "min": {
                "numeric": "The {attribute} must be at least {min}.",
                "file": "The {attribute} must be at least {min} kilobytes.",
                "string": "The {attribute} must be at least {min} characters.",
                "array": "The {attribute} must have at least {min} items."
            },
            "not_in": "The selected {attribute} is invalid.",
            "not_regex": "The {attribute} format is invalid.",
            "numeric": "The {attribute} must be a number.",
            "present": "The {attribute} field must be present.",
            "regex": "The {attribute} format is invalid.",
            "required": "Iltimos {attribute} kiriting.",
            "required_if": "The {attribute} field is required when {other} is {value}.",
            "required_unless": "The {attribute} field is required unless {other} is in {values}.",
            "required_with": "The {attribute} field is required when {values} is present.",
            "required_with_all": "The {attribute} field is required when {values} is present.",
            "required_without": "The {attribute} field is required when {values} is not present.",
            "required_without_all": "The {attribute} field is required when none of {values} are present.",
            "same": "The {attribute} and {other} must match.",
            "size": {
                "numeric": "The {attribute} must be {size}.",
                "file": "The {attribute} must be {size} kilobytes.",
                "string": "The {attribute} must be {size} characters.",
                "array": "The {attribute} must contain {size} items."
            },
            "string": "The {attribute} must be a string.",
            "timezone": "The {attribute} must be a valid zone.",
            "unique": "The {attribute} has already been taken.",
            "uploaded": "The {attribute} failed to upload.",
            "url": "The {attribute} format is invalid.",
            "nameError": "Iltimos bu yerni to'ldiring",
            "lastNameError": "Iltimos bu yerni to'ldiring",
            "phoneError": "Iltimos bu yerni to'ldiring",
            "custom": {
                "attribute-name": {
                    "rule-name": "custom-message"
                }
            },
            "attributes": []
        },
        "helper": {
            "yes": "Xa",
            "no": "Yo'q"
        },
        "cart": {
            "shop": "Do'kon",
            "inCart": "Savatchadagi maxsulotlar",
            "price": "Umumiy puli",
            "sum": "sum",
            "cart": "Savatcha",
            "button": "Buyurtma qilish",
            "confirmContent": "Sizning savatingizda <b>{shop}<\/b> do'konidan maxsulotlar bor, siz rostdan xam ularni ochirishga rozimisiz?",
            "confirmTitle": "Amalni tasdiqlang:"
        },
        "passwords": {
            "password": "Passwords must be at least six characters and match the confirmation.",
            "reset": "Your password has been reset!",
            "sent": "We have e-mailed your password reset link!",
            "token": "This password reset token is invalid.",
            "user": "We can't find a user with that e-mail address."
        },
        "auth": {
            "failed": "These credentials do not match our records.",
            "throttle": "Too many login attempts. Please try again in {seconds} seconds."
        },
        "pagination": {
            "previous": "Orqaga",
            "next": "Oldinga"
        },
        "pages": {
            "back": "Orqaga, do'konlar ro'yhati"
        }
    }
});

/***/ }),
/* 261 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__Region__ = __webpack_require__(262);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__Region___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_0__Region__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__Product__ = __webpack_require__(167);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__Product___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_1__Product__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2__Login__ = __webpack_require__(265);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2__Login___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_2__Login__);



/* harmony default export */ __webpack_exports__["default"] = (function (Vue) {
    Vue.component('RegionModal', __WEBPACK_IMPORTED_MODULE_0__Region___default.a);
    Vue.component('LoginModal', __WEBPACK_IMPORTED_MODULE_2__Login___default.a);
    Vue.component('ProductModal', __WEBPACK_IMPORTED_MODULE_1__Product___default.a);
});

/***/ }),
/* 262 */
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(1)
/* script */
var __vue_script__ = __webpack_require__(263)
/* template */
var __vue_template__ = __webpack_require__(264)
/* template functional */
var __vue_template_functional__ = false
/* styles */
var __vue_styles__ = null
/* scopeId */
var __vue_scopeId__ = null
/* moduleIdentifier (server only) */
var __vue_module_identifier__ = null
var Component = normalizeComponent(
  __vue_script__,
  __vue_template__,
  __vue_template_functional__,
  __vue_styles__,
  __vue_scopeId__,
  __vue_module_identifier__
)
Component.options.__file = "resources/assets/js/front/desktop/components/modals/Region.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-1fff7a8f", Component.options)
  } else {
    hotAPI.reload("data-v-1fff7a8f", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),
/* 263 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_vuex__ = __webpack_require__(3);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_vuex___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_0_vuex__);
var _extends = Object.assign || function (target) { for (var i = 1; i < arguments.length; i++) { var source = arguments[i]; for (var key in source) { if (Object.prototype.hasOwnProperty.call(source, key)) { target[key] = source[key]; } } } return target; };

//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//



/* harmony default export */ __webpack_exports__["default"] = ({
  props: ["regions"],
  data: function data() {
    return {
      showPage: false
    };
  },

  methods: _extends({}, Object(__WEBPACK_IMPORTED_MODULE_0_vuex__["mapActions"])({
    setRegion: "setRegionId"
  }), {
    submitRegion: function submitRegion(id) {
      this.setRegion(id).then(function () {
        $("#Regions").modal("hide");
      });
    }
  }),
  mounted: function mounted() {
    this.showPage = true;
  }
});

/***/ }),
/* 264 */
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "div",
    {
      staticClass: "modal fade regions",
      attrs: {
        id: "Regions",
        tabindex: "-1",
        role: "dialog",
        "aria-hidden": "true"
      }
    },
    [
      _c("div", { staticClass: "modal-dialog", attrs: { role: "document" } }, [
        !_vm.showPage
          ? _c("div", { staticClass: "loader" }, [
              _c("div", { staticClass: "loader-container" })
            ])
          : _c("div", { staticClass: "modal-content" }, [
              _c("div", { staticClass: "modal-body" }, [
                _c("h5", { staticClass: "modal-title" }, [
                  _vm._v("Ваш регион")
                ]),
                _vm._v(" "),
                _c(
                  "ul",
                  { staticClass: "nav regions-nav" },
                  _vm._l(_vm.regions, function(region) {
                    return _c(
                      "li",
                      { key: region.id, staticClass: "nav-item" },
                      [
                        _c(
                          "a",
                          {
                            staticClass: "nav-link",
                            on: {
                              click: function($event) {
                                $event.preventDefault()
                                _vm.submitRegion(region.id)
                              }
                            }
                          },
                          [_vm._v(_vm._s(region.name))]
                        )
                      ]
                    )
                  })
                )
              ])
            ])
      ])
    ]
  )
}
var staticRenderFns = []
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-1fff7a8f", module.exports)
  }
}

/***/ }),
/* 265 */
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(1)
/* script */
var __vue_script__ = __webpack_require__(266)
/* template */
var __vue_template__ = __webpack_require__(267)
/* template functional */
var __vue_template_functional__ = false
/* styles */
var __vue_styles__ = null
/* scopeId */
var __vue_scopeId__ = null
/* moduleIdentifier (server only) */
var __vue_module_identifier__ = null
var Component = normalizeComponent(
  __vue_script__,
  __vue_template__,
  __vue_template_functional__,
  __vue_styles__,
  __vue_scopeId__,
  __vue_module_identifier__
)
Component.options.__file = "resources/assets/js/front/desktop/components/modals/Login.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-437a9e1e", Component.options)
  } else {
    hotAPI.reload("data-v-437a9e1e", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),
/* 266 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_babel_runtime_regenerator__ = __webpack_require__(11);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_babel_runtime_regenerator___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_0_babel_runtime_regenerator__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1_vuex__ = __webpack_require__(3);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1_vuex___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_1_vuex__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2_lodash__ = __webpack_require__(4);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2_lodash___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_2_lodash__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_3_localforage__ = __webpack_require__(6);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_3_localforage___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_3_localforage__);


var _extends = Object.assign || function (target) { for (var i = 1; i < arguments.length; i++) { var source = arguments[i]; for (var key in source) { if (Object.prototype.hasOwnProperty.call(source, key)) { target[key] = source[key]; } } } return target; };

function _asyncToGenerator(fn) { return function () { var gen = fn.apply(this, arguments); return new Promise(function (resolve, reject) { function step(key, arg) { try { var info = gen[key](arg); var value = info.value; } catch (error) { reject(error); return; } if (info.done) { resolve(value); } else { return Promise.resolve(value).then(function (value) { step("next", value); }, function (err) { step("throw", err); }); } } return step("next"); }); }; }

//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//




/* harmony default export */ __webpack_exports__["default"] = ({
  data: function data() {
    return {
      error: null,
      max: 9,
      sent: false,
      code: 4,
      step: 1,
      form: {
        phone: null,
        code: null
      }
    };
  },

  computed: Object(__WEBPACK_IMPORTED_MODULE_1_vuex__["mapGetters"])({
    user: "user"
  }),
  methods: _extends({}, Object(__WEBPACK_IMPORTED_MODULE_1_vuex__["mapActions"])({
    fetchUser: "fetchUser",
    setToken: "setToken"
  }), {
    repeatSmsSend: function repeatSmsSend() {

      this.sent = !this.sent;

      this.sendSMS();
    },
    sendSMS: function () {
      var _ref = _asyncToGenerator( /*#__PURE__*/__WEBPACK_IMPORTED_MODULE_0_babel_runtime_regenerator__["default"].mark(function _callee() {
        var data, response;
        return __WEBPACK_IMPORTED_MODULE_0_babel_runtime_regenerator__["default"].wrap(function _callee$(_context) {
          while (1) {
            switch (_context.prev = _context.next) {
              case 0:
                if (!(this.form.phone && this.max == this.form.phone.length)) {
                  _context.next = 6;
                  break;
                }

                this.step = 2;

                data = "+998" + this.form.phone;
                _context.next = 5;
                return axios.post("/api/sms/create", {
                  phone: data
                });

              case 5:
                response = _context.sent;

              case 6:
              case "end":
                return _context.stop();
            }
          }
        }, _callee, this);
      }));

      function sendSMS() {
        return _ref.apply(this, arguments);
      }

      return sendSMS;
    }(),
    verifyCode: function verifyCode() {
      var _this = this;

      if (this.form.code && this.code == this.form.code.length) {
        var data = "+998" + this.form.phone;
        axios.get("/api/sms/check?its=1&code=" + this.form.code + "&phone=" + data).then(function (response) {
          var token = response.data.meta.token;
          $("#login").modal("hide");
          _this.setToken(token).then(function () {
            _this.fetchUser();
            // this.setPhone(response.data.data.phone);
          });
          if (response.data.new == 1) {
            _this.$router.replace({ name: "profile" });
          }
          _this.form = {
            phone: "",
            code: ""
          };
        }).catch(function (error) {
          _this.error = "Не правильный пароль";
        });
      }
    },

    isNumber: function isNumber(evt) {
      evt = evt ? evt : window.event;
      var charCode = evt.which ? evt.which : evt.keyCode;
      if (charCode > 31 && (charCode < 48 || charCode > 57) && charCode !== 46) {
        evt.preventDefault();
      } else {
        return true;
      }
    }
  }),
  mounted: function mounted() {
    var _this2 = this;

    $("#login").on("hide.bs.modal", function (e) {
      return _this2.step = 1;
    });
  }
});

/***/ }),
/* 267 */
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "div",
    { staticClass: "modal fade login", attrs: { id: "login", tabindex: "-1" } },
    [
      _c("div", { staticClass: "modal-dialog" }, [
        _c("div", { staticClass: "modal-content" }, [
          _vm.step == 1
            ? _c("form", { staticClass: "modal-body" }, [
                _c("h4", [_vm._v(_vm._s(_vm.$t("login.title")))]),
                _vm._v(" "),
                _c("p", [_vm._v(_vm._s(_vm.$t("login.pre_title")))]),
                _vm._v(" "),
                _c("div", { staticClass: "form-group" }, [
                  _c("div", { staticClass: "input-group" }, [
                    _vm._m(0),
                    _vm._v(" "),
                    _c("input", {
                      directives: [
                        {
                          name: "model",
                          rawName: "v-model",
                          value: _vm.form.phone,
                          expression: "form.phone"
                        }
                      ],
                      staticClass: "form-control",
                      attrs: {
                        maxlength: _vm.max,
                        type: "text",
                        id: "login_phone",
                        placeholder: _vm.$t("login.phone_placeholder")
                      },
                      domProps: { value: _vm.form.phone },
                      on: {
                        keypress: function($event) {
                          _vm.isNumber($event)
                        },
                        input: function($event) {
                          if ($event.target.composing) {
                            return
                          }
                          _vm.$set(_vm.form, "phone", $event.target.value)
                        }
                      }
                    })
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "form-text" }, [
                    _vm._v(_vm._s(_vm.$t("login.sms_info")))
                  ])
                ]),
                _vm._v(" "),
                _c(
                  "button",
                  {
                    staticClass: "btn btn-block btn-green",
                    attrs: {
                      disabled:
                        _vm.form.phone == null ||
                        (_vm.form.phone && _vm.max != _vm.form.phone.length)
                    },
                    on: {
                      click: function($event) {
                        $event.preventDefault()
                        return _vm.sendSMS($event)
                      }
                    }
                  },
                  [_vm._v(_vm._s(_vm.$t("login.button_send")))]
                )
              ])
            : _vm._e(),
          _vm._v(" "),
          _vm.step == 2
            ? _c(
                "form",
                {
                  staticClass: "modal-body",
                  on: {
                    submit: function($event) {
                      $event.preventDefault()
                      return _vm.verifyCode($event)
                    }
                  }
                },
                [
                  _c("h4", [_vm._v("+998" + _vm._s(_vm.form.phone))]),
                  _vm._v(" "),
                  _c("p", [_vm._v(_vm._s(_vm.$t("login.sms_sent_info")))]),
                  _vm._v(" "),
                  _c("div", { staticClass: "form-group" }, [
                    _c("input", {
                      directives: [
                        {
                          name: "model",
                          rawName: "v-model",
                          value: _vm.form.code,
                          expression: "form.code"
                        }
                      ],
                      staticClass: "form-control",
                      attrs: {
                        maxlength: _vm.code,
                        type: "text",
                        placeholder: _vm.$t("login.sms_code")
                      },
                      domProps: { value: _vm.form.code },
                      on: {
                        input: function($event) {
                          if ($event.target.composing) {
                            return
                          }
                          _vm.$set(_vm.form, "code", $event.target.value)
                        }
                      }
                    }),
                    _vm._v(" "),
                    _vm.error
                      ? _c("p", [
                          _vm._v(_vm._s(_vm.$t("login.incorrect_password")))
                        ])
                      : _vm._e(),
                    _vm._v(" "),
                    _c("div", { staticClass: "form-text" }, [
                      _c(
                        "button",
                        {
                          staticClass: "btn btn-link",
                          attrs: { disabled: _vm.sent, type: "button" },
                          on: {
                            click: function($event) {
                              $event.preventDefault()
                              return _vm.repeatSmsSend($event)
                            }
                          }
                        },
                        [
                          !_vm.sent
                            ? _c("i", { staticClass: "icon" }, [
                                _vm._v("refresh")
                              ])
                            : _c("i", { staticClass: "icon" }, [
                                _vm._v("done")
                              ]),
                          _vm._v(" "),
                          _c("span", { staticClass: "text" }, [
                            _vm._v(
                              _vm._s(_vm.$t("login.send_again")) +
                                "\n              "
                            )
                          ])
                        ]
                      )
                    ])
                  ]),
                  _vm._v(" "),
                  _c(
                    "button",
                    {
                      staticClass: "btn btn-block btn-green",
                      attrs: {
                        type: "submit",
                        disabled:
                          _vm.form.code == null ||
                          (_vm.form.code && _vm.code != _vm.form.code.length)
                      },
                      on: {
                        click: function($event) {
                          $event.preventDefault()
                          return _vm.verifyCode($event)
                        }
                      }
                    },
                    [_vm._v(_vm._s(_vm.$t("login.next")))]
                  ),
                  _vm._v(" "),
                  _c(
                    "button",
                    {
                      staticClass: "btn btn-block btn-light",
                      on: {
                        click: function($event) {
                          $event.preventDefault()
                          _vm.step = 1
                        }
                      }
                    },
                    [_vm._v(_vm._s(_vm.$t("login.change_number")))]
                  )
                ]
              )
            : _vm._e()
        ])
      ])
    ]
  )
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "label",
      { staticClass: "input-group-prepend", attrs: { for: "login_phone" } },
      [_c("span", { staticClass: "input-group-text" }, [_vm._v("+998")])]
    )
  }
]
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-437a9e1e", module.exports)
  }
}

/***/ }),
/* 268 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__index__ = __webpack_require__(269);

var VueMaterial = function VueMaterial(Vue) {
  Object.values(__WEBPACK_IMPORTED_MODULE_0__index__).forEach(function (PuComponent) {
    Vue.use(PuComponent);
  });
};
/* harmony default export */ __webpack_exports__["a"] = (VueMaterial);

/***/ }),
/* 269 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__PuDialog__ = __webpack_require__(270);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__PuDialog_PuDialogConfirm__ = __webpack_require__(286);
/* harmony reexport (binding) */ __webpack_require__.d(__webpack_exports__, "PuDialog", function() { return __WEBPACK_IMPORTED_MODULE_0__PuDialog__["a"]; });
/* harmony reexport (binding) */ __webpack_require__.d(__webpack_exports__, "PuDialogConfirm", function() { return __WEBPACK_IMPORTED_MODULE_1__PuDialog_PuDialogConfirm__["a"]; });






/***/ }),
/* 270 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__PuDialogTitle__ = __webpack_require__(271);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__PuDialogTitle___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_0__PuDialogTitle__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__PuDialogContent__ = __webpack_require__(276);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__PuDialogContent___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_1__PuDialogContent__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2__PuDialogActions__ = __webpack_require__(281);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2__PuDialogActions___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_2__PuDialogActions__);
// import material from '../../material'
// import PuDialog from './PuDialog'




/* harmony default export */ __webpack_exports__["a"] = (function (Vue) {
  // material(Vue)
  // Vue.component(PuDialog.name, PuDialog)
  Vue.component(__WEBPACK_IMPORTED_MODULE_0__PuDialogTitle___default.a.name, __WEBPACK_IMPORTED_MODULE_0__PuDialogTitle___default.a);
  Vue.component(__WEBPACK_IMPORTED_MODULE_1__PuDialogContent___default.a.name, __WEBPACK_IMPORTED_MODULE_1__PuDialogContent___default.a);
  Vue.component(__WEBPACK_IMPORTED_MODULE_2__PuDialogActions___default.a.name, __WEBPACK_IMPORTED_MODULE_2__PuDialogActions___default.a);
});

/***/ }),
/* 271 */
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
function injectStyle (ssrContext) {
  if (disposed) return
  __webpack_require__(272)
}
var normalizeComponent = __webpack_require__(1)
/* script */
var __vue_script__ = __webpack_require__(274)
/* template */
var __vue_template__ = __webpack_require__(275)
/* template functional */
var __vue_template_functional__ = false
/* styles */
var __vue_styles__ = injectStyle
/* scopeId */
var __vue_scopeId__ = null
/* moduleIdentifier (server only) */
var __vue_module_identifier__ = null
var Component = normalizeComponent(
  __vue_script__,
  __vue_template__,
  __vue_template_functional__,
  __vue_styles__,
  __vue_scopeId__,
  __vue_module_identifier__
)
Component.options.__file = "resources/assets/js/front/desktop/components/prisma/PuDialog/PuDialogTitle.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-697cdeac", Component.options)
  } else {
    hotAPI.reload("data-v-697cdeac", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),
/* 272 */
/***/ (function(module, exports, __webpack_require__) {

// style-loader: Adds some css to the DOM by adding a <style> tag

// load the styles
var content = __webpack_require__(273);
if(typeof content === 'string') content = [[module.i, content, '']];
if(content.locals) module.exports = content.locals;
// add the styles to the DOM
var update = __webpack_require__(8)("6a992cc4", content, false, {});
// Hot Module Replacement
if(false) {
 // When the styles change, update the <style> tags
 if(!content.locals) {
   module.hot.accept("!!../../../../../../../../node_modules/css-loader/index.js!../../../../../../../../node_modules/vue-loader/lib/style-compiler/index.js?{\"vue\":true,\"id\":\"data-v-697cdeac\",\"scoped\":false,\"hasInlineConfig\":true}!../../../../../../../../node_modules/sass-loader/lib/loader.js!../../../../../../../../node_modules/vue-loader/lib/selector.js?type=styles&index=0!./PuDialogTitle.vue", function() {
     var newContent = require("!!../../../../../../../../node_modules/css-loader/index.js!../../../../../../../../node_modules/vue-loader/lib/style-compiler/index.js?{\"vue\":true,\"id\":\"data-v-697cdeac\",\"scoped\":false,\"hasInlineConfig\":true}!../../../../../../../../node_modules/sass-loader/lib/loader.js!../../../../../../../../node_modules/vue-loader/lib/selector.js?type=styles&index=0!./PuDialogTitle.vue");
     if(typeof newContent === 'string') newContent = [[module.id, newContent, '']];
     update(newContent);
   });
 }
 // When the module is disposed, remove the <style> tags
 module.hot.dispose(function() { update(); });
}

/***/ }),
/* 273 */
/***/ (function(module, exports, __webpack_require__) {

exports = module.exports = __webpack_require__(7)(false);
// imports


// module
exports.push([module.i, "", ""]);

// exports


/***/ }),
/* 274 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
  name: "PuDialogTitle"
});

/***/ }),
/* 275 */
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "div",
    { staticClass: "pu-dialog-title pu-title" },
    [_vm._t("default")],
    2
  )
}
var staticRenderFns = []
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-697cdeac", module.exports)
  }
}

/***/ }),
/* 276 */
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
function injectStyle (ssrContext) {
  if (disposed) return
  __webpack_require__(277)
}
var normalizeComponent = __webpack_require__(1)
/* script */
var __vue_script__ = __webpack_require__(279)
/* template */
var __vue_template__ = __webpack_require__(280)
/* template functional */
var __vue_template_functional__ = false
/* styles */
var __vue_styles__ = injectStyle
/* scopeId */
var __vue_scopeId__ = null
/* moduleIdentifier (server only) */
var __vue_module_identifier__ = null
var Component = normalizeComponent(
  __vue_script__,
  __vue_template__,
  __vue_template_functional__,
  __vue_styles__,
  __vue_scopeId__,
  __vue_module_identifier__
)
Component.options.__file = "resources/assets/js/front/desktop/components/prisma/PuDialog/PuDialogContent.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-0a11a3cb", Component.options)
  } else {
    hotAPI.reload("data-v-0a11a3cb", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),
/* 277 */
/***/ (function(module, exports, __webpack_require__) {

// style-loader: Adds some css to the DOM by adding a <style> tag

// load the styles
var content = __webpack_require__(278);
if(typeof content === 'string') content = [[module.i, content, '']];
if(content.locals) module.exports = content.locals;
// add the styles to the DOM
var update = __webpack_require__(8)("3f3e178e", content, false, {});
// Hot Module Replacement
if(false) {
 // When the styles change, update the <style> tags
 if(!content.locals) {
   module.hot.accept("!!../../../../../../../../node_modules/css-loader/index.js!../../../../../../../../node_modules/vue-loader/lib/style-compiler/index.js?{\"vue\":true,\"id\":\"data-v-0a11a3cb\",\"scoped\":false,\"hasInlineConfig\":true}!../../../../../../../../node_modules/sass-loader/lib/loader.js!../../../../../../../../node_modules/vue-loader/lib/selector.js?type=styles&index=0!./PuDialogContent.vue", function() {
     var newContent = require("!!../../../../../../../../node_modules/css-loader/index.js!../../../../../../../../node_modules/vue-loader/lib/style-compiler/index.js?{\"vue\":true,\"id\":\"data-v-0a11a3cb\",\"scoped\":false,\"hasInlineConfig\":true}!../../../../../../../../node_modules/sass-loader/lib/loader.js!../../../../../../../../node_modules/vue-loader/lib/selector.js?type=styles&index=0!./PuDialogContent.vue");
     if(typeof newContent === 'string') newContent = [[module.id, newContent, '']];
     update(newContent);
   });
 }
 // When the module is disposed, remove the <style> tags
 module.hot.dispose(function() { update(); });
}

/***/ }),
/* 278 */
/***/ (function(module, exports, __webpack_require__) {

exports = module.exports = __webpack_require__(7)(false);
// imports


// module
exports.push([module.i, "", ""]);

// exports


/***/ }),
/* 279 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
  name: "PuDialogContent"
});

/***/ }),
/* 280 */
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", { staticClass: "pu-dialog-content" }, [_vm._t("default")], 2)
}
var staticRenderFns = []
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-0a11a3cb", module.exports)
  }
}

/***/ }),
/* 281 */
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
function injectStyle (ssrContext) {
  if (disposed) return
  __webpack_require__(282)
}
var normalizeComponent = __webpack_require__(1)
/* script */
var __vue_script__ = __webpack_require__(284)
/* template */
var __vue_template__ = __webpack_require__(285)
/* template functional */
var __vue_template_functional__ = false
/* styles */
var __vue_styles__ = injectStyle
/* scopeId */
var __vue_scopeId__ = null
/* moduleIdentifier (server only) */
var __vue_module_identifier__ = null
var Component = normalizeComponent(
  __vue_script__,
  __vue_template__,
  __vue_template_functional__,
  __vue_styles__,
  __vue_scopeId__,
  __vue_module_identifier__
)
Component.options.__file = "resources/assets/js/front/desktop/components/prisma/PuDialog/PuDialogActions.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-fe965362", Component.options)
  } else {
    hotAPI.reload("data-v-fe965362", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),
/* 282 */
/***/ (function(module, exports, __webpack_require__) {

// style-loader: Adds some css to the DOM by adding a <style> tag

// load the styles
var content = __webpack_require__(283);
if(typeof content === 'string') content = [[module.i, content, '']];
if(content.locals) module.exports = content.locals;
// add the styles to the DOM
var update = __webpack_require__(8)("6c5b6afa", content, false, {});
// Hot Module Replacement
if(false) {
 // When the styles change, update the <style> tags
 if(!content.locals) {
   module.hot.accept("!!../../../../../../../../node_modules/css-loader/index.js!../../../../../../../../node_modules/vue-loader/lib/style-compiler/index.js?{\"vue\":true,\"id\":\"data-v-fe965362\",\"scoped\":false,\"hasInlineConfig\":true}!../../../../../../../../node_modules/sass-loader/lib/loader.js!../../../../../../../../node_modules/vue-loader/lib/selector.js?type=styles&index=0!./PuDialogActions.vue", function() {
     var newContent = require("!!../../../../../../../../node_modules/css-loader/index.js!../../../../../../../../node_modules/vue-loader/lib/style-compiler/index.js?{\"vue\":true,\"id\":\"data-v-fe965362\",\"scoped\":false,\"hasInlineConfig\":true}!../../../../../../../../node_modules/sass-loader/lib/loader.js!../../../../../../../../node_modules/vue-loader/lib/selector.js?type=styles&index=0!./PuDialogActions.vue");
     if(typeof newContent === 'string') newContent = [[module.id, newContent, '']];
     update(newContent);
   });
 }
 // When the module is disposed, remove the <style> tags
 module.hot.dispose(function() { update(); });
}

/***/ }),
/* 283 */
/***/ (function(module, exports, __webpack_require__) {

exports = module.exports = __webpack_require__(7)(false);
// imports


// module
exports.push([module.i, "", ""]);

// exports


/***/ }),
/* 284 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
  name: "PuDialogActions"
});

/***/ }),
/* 285 */
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", { staticClass: "pu-dialog-actions" }, [_vm._t("default")], 2)
}
var staticRenderFns = []
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-fe965362", module.exports)
  }
}

/***/ }),
/* 286 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__PuDialog__ = __webpack_require__(287);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__PuDialog___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_0__PuDialog__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__PuDialogConfirm__ = __webpack_require__(300);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__PuDialogConfirm___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_1__PuDialogConfirm__);




/* harmony default export */ __webpack_exports__["a"] = (function (Vue) {
  Vue.component(__WEBPACK_IMPORTED_MODULE_0__PuDialog___default.a.name, __WEBPACK_IMPORTED_MODULE_0__PuDialog___default.a);
  Vue.component(__WEBPACK_IMPORTED_MODULE_1__PuDialogConfirm___default.a.name, __WEBPACK_IMPORTED_MODULE_1__PuDialogConfirm___default.a);
});

/***/ }),
/* 287 */
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
function injectStyle (ssrContext) {
  if (disposed) return
  __webpack_require__(288)
}
var normalizeComponent = __webpack_require__(1)
/* script */
var __vue_script__ = __webpack_require__(290)
/* template */
var __vue_template__ = __webpack_require__(299)
/* template functional */
var __vue_template_functional__ = false
/* styles */
var __vue_styles__ = injectStyle
/* scopeId */
var __vue_scopeId__ = null
/* moduleIdentifier (server only) */
var __vue_module_identifier__ = null
var Component = normalizeComponent(
  __vue_script__,
  __vue_template__,
  __vue_template_functional__,
  __vue_styles__,
  __vue_scopeId__,
  __vue_module_identifier__
)
Component.options.__file = "resources/assets/js/front/desktop/components/prisma/PuDialog/PuDialog.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-6d13ab04", Component.options)
  } else {
    hotAPI.reload("data-v-6d13ab04", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),
/* 288 */
/***/ (function(module, exports, __webpack_require__) {

// style-loader: Adds some css to the DOM by adding a <style> tag

// load the styles
var content = __webpack_require__(289);
if(typeof content === 'string') content = [[module.i, content, '']];
if(content.locals) module.exports = content.locals;
// add the styles to the DOM
var update = __webpack_require__(8)("73a702df", content, false, {});
// Hot Module Replacement
if(false) {
 // When the styles change, update the <style> tags
 if(!content.locals) {
   module.hot.accept("!!../../../../../../../../node_modules/css-loader/index.js!../../../../../../../../node_modules/vue-loader/lib/style-compiler/index.js?{\"vue\":true,\"id\":\"data-v-6d13ab04\",\"scoped\":false,\"hasInlineConfig\":true}!../../../../../../../../node_modules/sass-loader/lib/loader.js!../../../../../../../../node_modules/vue-loader/lib/selector.js?type=styles&index=0!./PuDialog.vue", function() {
     var newContent = require("!!../../../../../../../../node_modules/css-loader/index.js!../../../../../../../../node_modules/vue-loader/lib/style-compiler/index.js?{\"vue\":true,\"id\":\"data-v-6d13ab04\",\"scoped\":false,\"hasInlineConfig\":true}!../../../../../../../../node_modules/sass-loader/lib/loader.js!../../../../../../../../node_modules/vue-loader/lib/selector.js?type=styles&index=0!./PuDialog.vue");
     if(typeof newContent === 'string') newContent = [[module.id, newContent, '']];
     update(newContent);
   });
 }
 // When the module is disposed, remove the <style> tags
 module.hot.dispose(function() { update(); });
}

/***/ }),
/* 289 */
/***/ (function(module, exports, __webpack_require__) {

exports = module.exports = __webpack_require__(7)(false);
// imports


// module
exports.push([module.i, "\n.pu-dialog {\n  position: fixed;\n  top: 0;\n  right: 0;\n  bottom: 0;\n  left: 0;\n  text-align: center;\n  overflow: hidden;\n  z-index: 9999;\n  pointer-events: none;\n}\n.pu-dialog-leave-active {\n  -webkit-transition: opacity 0.15s ease;\n  transition: opacity 0.15s ease;\n}\n.pu-dialog::before {\n  content: \"\";\n  display: inline-block;\n  vertical-align: middle;\n  height: 100%;\n}\n.pu-dialog-container {\n  pointer-events: auto;\n  position: relative;\n  display: inline-block;\n  vertical-align: middle;\n  text-align: left;\n  min-width: 280px;\n  max-width: 100%;\n  max-height: 100%;\n  margin: 0 auto;\n  outline: 0;\n  pointer-events: auto;\n  background-color: #fff;\n  border-radius: 10px;\n  -webkit-box-shadow: 0 11px 15px -7px rgba(0, 0, 0, 0.2), 0 24px 38px 3px rgba(0, 0, 0, 0.14), 0 9px 46px 8px rgba(0, 0, 0, 0.12);\n          box-shadow: 0 11px 15px -7px rgba(0, 0, 0, 0.2), 0 24px 38px 3px rgba(0, 0, 0, 0.14), 0 9px 46px 8px rgba(0, 0, 0, 0.12);\n  -webkit-transition: opacity 0.15s ease, -webkit-transform 0.15s ease;\n  transition: opacity 0.15s ease, -webkit-transform 0.15s ease;\n  transition: opacity 0.15s ease, transform 0.15s ease;\n  transition: opacity 0.15s ease, transform 0.15s ease, -webkit-transform 0.15s ease;\n}\n.pu-dialog-enter-active .pu-dialog-container,\n.pu-dialog-leave-active .pu-dialog-container {\n  opacity: 0;\n  -webkit-transform: translate3d(0, 35px, 0);\n          transform: translate3d(0, 35px, 0);\n}\n.pu-dialog-title {\n  padding: 24px 24px 0;\n}\n.pu-dialog-content {\n  padding: 24px 24px 1px 24px;\n  overflow: auto;\n  position: relative;\n}\n.pu-dialog-content:first-child {\n    padding-top: 24px;\n}\n.pu-dialog-content p:first-child:not(:only-child) {\n    margin-top: 0;\n}\n.pu-dialog-content p:last-child:not(:only-child) {\n    margin-bottom: 0;\n}\n.pu-dialog-actions {\n  min-height: 52px;\n  padding: 1px 24px 1px 24px;\n  text-align: right;\n  position: relative;\n}\n.pu-dialog-actions .pu-button {\n    min-width: 64px;\n    margin: 0;\n}\n.pu-dialog-actions .pu-button + .pu-button {\n      margin-left: 12px;\n}\n", ""]);

// exports


/***/ }),
/* 290 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__PuPortal_PuPortal__ = __webpack_require__(170);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__PuOverlay_PuOverlay__ = __webpack_require__(293);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__PuOverlay_PuOverlay___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_1__PuOverlay_PuOverlay__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2__PuFocusTrap_PuFocusTrap__ = __webpack_require__(298);
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//





/* harmony default export */ __webpack_exports__["default"] = ({
  name: "PuDialog",
  components: {
    PuPortal: __WEBPACK_IMPORTED_MODULE_0__PuPortal_PuPortal__["a" /* default */],
    PuFocusTrap: __WEBPACK_IMPORTED_MODULE_2__PuFocusTrap_PuFocusTrap__["a" /* default */],
    PuOverlay: __WEBPACK_IMPORTED_MODULE_1__PuOverlay_PuOverlay___default.a
  },
  props: {
    puSize: {
      default: "auto"
    },
    puActive: Boolean,
    puBackdrop: {
      type: Boolean,
      default: true
    },
    puBackdropClass: {
      type: String,
      default: "pu-dialog-overlay"
    },
    puCloseOnEsc: {
      type: Boolean,
      default: true
    },
    puClickOutsideToClose: {
      type: Boolean,
      default: true
    },
    puFullscreen: {
      type: Boolean,
      default: false
    },
    puAnimateFromSource: false
  },
  computed: {
    dialogClasses: function dialogClasses() {
      return {
        "pu-dialog-fullscreen": this.puFullscreen
      };
    }
  },
  watch: {
    puActive: function puActive(isActive) {
      var _this = this;

      this.$nextTick().then(function () {
        if (isActive) {
          _this.$emit("pu-opened");
        } else {
          _this.$emit("pu-closed");
        }
      });
    }
  },
  created: function created() {
    var _this2 = this;

    var escapeHandler = function escapeHandler(e) {
      if (e.key == "Escape") {
        _this2.closeDialog();
      }
    };
    document.addEventListener("keydown", escapeHandler);
    this.$once("hook:destroyed", function () {
      document.removeEventListener("keydown", escapeHandler);
    });
  },

  methods: {
    closeDialog: function closeDialog() {
      this.$emit("update:puActive", false);
    },
    onClick: function onClick() {
      if (this.puClickOutsideToClose) {
        this.closeDialog();
      }
      this.$emit("pu-clicked-outside");
    }
  }
});

/***/ }),
/* 291 */
/***/ (function(module, exports) {

throw new Error("Module build failed: Error: ENOENT: no such file or directory, open '/home/rin4ik/work/delivery/node_modules/raf/index.js'");

/***/ }),
/* 292 */,
/* 293 */
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
function injectStyle (ssrContext) {
  if (disposed) return
  __webpack_require__(294)
}
var normalizeComponent = __webpack_require__(1)
/* script */
var __vue_script__ = __webpack_require__(296)
/* template */
var __vue_template__ = __webpack_require__(297)
/* template functional */
var __vue_template_functional__ = false
/* styles */
var __vue_styles__ = injectStyle
/* scopeId */
var __vue_scopeId__ = null
/* moduleIdentifier (server only) */
var __vue_module_identifier__ = null
var Component = normalizeComponent(
  __vue_script__,
  __vue_template__,
  __vue_template_functional__,
  __vue_styles__,
  __vue_scopeId__,
  __vue_module_identifier__
)
Component.options.__file = "resources/assets/js/front/desktop/components/prisma/PuOverlay/PuOverlay.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-7913a4b6", Component.options)
  } else {
    hotAPI.reload("data-v-7913a4b6", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),
/* 294 */
/***/ (function(module, exports, __webpack_require__) {

// style-loader: Adds some css to the DOM by adding a <style> tag

// load the styles
var content = __webpack_require__(295);
if(typeof content === 'string') content = [[module.i, content, '']];
if(content.locals) module.exports = content.locals;
// add the styles to the DOM
var update = __webpack_require__(8)("46448f8a", content, false, {});
// Hot Module Replacement
if(false) {
 // When the styles change, update the <style> tags
 if(!content.locals) {
   module.hot.accept("!!../../../../../../../../node_modules/css-loader/index.js!../../../../../../../../node_modules/vue-loader/lib/style-compiler/index.js?{\"vue\":true,\"id\":\"data-v-7913a4b6\",\"scoped\":false,\"hasInlineConfig\":true}!../../../../../../../../node_modules/sass-loader/lib/loader.js!../../../../../../../../node_modules/vue-loader/lib/selector.js?type=styles&index=0!./PuOverlay.vue", function() {
     var newContent = require("!!../../../../../../../../node_modules/css-loader/index.js!../../../../../../../../node_modules/vue-loader/lib/style-compiler/index.js?{\"vue\":true,\"id\":\"data-v-7913a4b6\",\"scoped\":false,\"hasInlineConfig\":true}!../../../../../../../../node_modules/sass-loader/lib/loader.js!../../../../../../../../node_modules/vue-loader/lib/selector.js?type=styles&index=0!./PuOverlay.vue");
     if(typeof newContent === 'string') newContent = [[module.id, newContent, '']];
     update(newContent);
   });
 }
 // When the module is disposed, remove the <style> tags
 module.hot.dispose(function() { update(); });
}

/***/ }),
/* 295 */
/***/ (function(module, exports, __webpack_require__) {

exports = module.exports = __webpack_require__(7)(false);
// imports


// module
exports.push([module.i, "\n.pu-overlay {\n  position: fixed;\n  top: 0;\n  right: 0;\n  bottom: 0;\n  left: 0;\n  z-index: 100;\n  overflow: hidden;\n  background: rgba(0, 0, 0, 0.288);\n  -webkit-transition: opacity 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);\n  transition: opacity 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);\n}\n.pu-overlay-enter,\n.pu-overlay-leave-active {\n  opacity: 0;\n  pointer-events: none;\n}\n", ""]);

// exports


/***/ }),
/* 296 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__PuPortal_PuPortal__ = __webpack_require__(170);
//
//
//
//
//
//
//
//



/* harmony default export */ __webpack_exports__["default"] = ({
  name: "PuOverlay",
  components: {
    PuPortal: __WEBPACK_IMPORTED_MODULE_0__PuPortal_PuPortal__["a" /* default */]
  },
  props: {
    puActive: Boolean,
    puAttachToParent: Boolean
  }
});

/***/ }),
/* 297 */
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "pu-portal",
    { attrs: { "pu-attach-to-parent": _vm.puAttachToParent } },
    [
      _c("transition", { attrs: { name: "pu-overlay" } }, [
        _vm.puActive
          ? _c("div", _vm._g({ staticClass: "pu-overlay" }, _vm.$listeners))
          : _vm._e()
      ])
    ],
    1
  )
}
var staticRenderFns = []
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-7913a4b6", module.exports)
  }
}

/***/ }),
/* 298 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_vue__ = __webpack_require__(10);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_vue___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_0_vue__);


/* harmony default export */ __webpack_exports__["a"] = ({
  name: 'PuFocusTrap',
  abstract: true,
  methods: {
    setFocus: function setFocus() {
      var _this = this;

      window.setTimeout(function () {
        if (_this.$el.tagName) {
          _this.$el.setAttribute('tabindex', '-1');
          _this.$el.focus();
        }
      }, 20);
    }
  },
  mounted: function mounted() {
    this.setFocus();
  },
  render: function render() {
    try {
      var defaultSlot = this.$slots.default;

      if (!defaultSlot) {
        return null;
      }

      if (defaultSlot.length > 1) {
        throw new Error();
      }

      return defaultSlot[0];
    } catch (e) {
      __WEBPACK_IMPORTED_MODULE_0_vue__["default"].util.warn('PuFocusTrap can only render one, and exactly one child component.', this);
    }

    return null;
  }
});

/***/ }),
/* 299 */
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "pu-portal",
    [
      _c("transition", { attrs: { name: "pu-dialog" } }, [
        _vm.puActive
          ? _c(
              "div",
              _vm._g(
                {
                  staticClass: "pu-dialog",
                  class: [_vm.dialogClasses],
                  on: {
                    keyup: function($event) {
                      if (
                        !("button" in $event) &&
                        _vm._k($event.keyCode, "up", 38, $event.key, [
                          "Up",
                          "ArrowUp"
                        ])
                      ) {
                        return null
                      }
                      return _vm.incrementI($event)
                    },
                    keydown: function($event) {
                      if (
                        !("button" in $event) &&
                        _vm._k($event.keyCode, "esc", 27, $event.key, "Escape")
                      ) {
                        return null
                      }
                      return _vm.onEsc($event)
                    }
                  }
                },
                _vm.$listeners
              ),
              [
                _c(
                  "div",
                  {
                    staticClass: "pu-dialog-container",
                    style: { width: _vm.puSize + "px" }
                  },
                  [
                    _vm._t("default"),
                    _vm._v(" "),
                    _c(
                      "pu-focus-trap",
                      [
                        _c(
                          "keep-alive",
                          [
                            _vm.puBackdrop
                              ? _c("pu-overlay", {
                                  attrs: { "pu-active": _vm.puActive },
                                  on: { click: _vm.onClick }
                                })
                              : _vm._e()
                          ],
                          1
                        )
                      ],
                      1
                    )
                  ],
                  2
                )
              ]
            )
          : _vm._e()
      ])
    ],
    1
  )
}
var staticRenderFns = []
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-6d13ab04", module.exports)
  }
}

/***/ }),
/* 300 */
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(1)
/* script */
var __vue_script__ = __webpack_require__(301)
/* template */
var __vue_template__ = __webpack_require__(302)
/* template functional */
var __vue_template_functional__ = false
/* styles */
var __vue_styles__ = null
/* scopeId */
var __vue_scopeId__ = null
/* moduleIdentifier (server only) */
var __vue_module_identifier__ = null
var Component = normalizeComponent(
  __vue_script__,
  __vue_template__,
  __vue_template_functional__,
  __vue_styles__,
  __vue_scopeId__,
  __vue_module_identifier__
)
Component.options.__file = "resources/assets/js/front/desktop/components/prisma/PuDialog/PuDialogConfirm/PuDialogConfirm.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-4c4a8a94", Component.options)
  } else {
    hotAPI.reload("data-v-4c4a8a94", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),
/* 301 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
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
    onCancel: function onCancel() {
      this.$emit("pu-cancel");
      this.$emit("update:puActive", false);
    },
    onConfirm: function onConfirm() {
      this.$emit("pu-confirm");
      this.$emit("update:puActive", false);
    }
  }
});

/***/ }),
/* 302 */
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "pu-dialog",
    _vm._g(
      _vm._b(
        { attrs: { "pu-fullscreen": false } },
        "pu-dialog",
        _vm.$attrs,
        false
      ),
      _vm.$listeners
    ),
    [
      _vm.puTitle
        ? _c("pu-dialog-title", [_vm._v(_vm._s(_vm.puTitle))])
        : _vm._e(),
      _vm._v(" "),
      _vm.puContent
        ? _c("pu-dialog-content", {
            domProps: { innerHTML: _vm._s(_vm.puContent) }
          })
        : _vm._e(),
      _vm._v(" "),
      _c("pu-dialog-actions", [
        _c(
          "button",
          { staticClass: "btn btn-danger", on: { click: _vm.onCancel } },
          [_vm._v(_vm._s(_vm.puCancelText))]
        ),
        _vm._v(" "),
        _c(
          "button",
          { staticClass: "btn btn-green", on: { click: _vm.onConfirm } },
          [_vm._v(_vm._s(_vm.puConfirmText))]
        )
      ])
    ],
    1
  )
}
var staticRenderFns = []
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-4c4a8a94", module.exports)
  }
}

/***/ })
/******/ ]);