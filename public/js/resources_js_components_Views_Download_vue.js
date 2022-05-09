"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_components_Views_Download_vue"],{

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Layouts/Header.vue?vue&type=script&lang=js&":
/*!*********************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Layouts/Header.vue?vue&type=script&lang=js& ***!
  \*********************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/**
 * Page-header component
 */
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  components: {},
  props: {
    title: {
      type: String,
      "default": ''
    },
    items: {
      type: Array,
      "default": function _default() {
        return [];
      }
    }
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Modules/Download/Index.vue?vue&type=script&lang=js&":
/*!*****************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Modules/Download/Index.vue?vue&type=script&lang=js& ***!
  \*****************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var vue_loading_overlay__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! vue-loading-overlay */ "./node_modules/vue-loading-overlay/dist/vue-loading.min.js");
/* harmony import */ var vue_loading_overlay__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(vue_loading_overlay__WEBPACK_IMPORTED_MODULE_0__);
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  data: function data() {
    return {
      currentUrl: window.location.origin,
      counts: this.$parent.$parent.$parent.$parent.counts,
      pagination: {},
      addresses: [],
      lists: [],
      school: {
        overall: '',
        regional: ''
      },
      loading1: false,
      loading2: false,
      loading3: false,
      isLoading: false,
      fullPage: true,
      agency: {
        region: {}
      },
      region: []
    };
  },
  created: function created() {
    this.fetch();
    this.fetchSchools();
    this.fetchLocations();
    this.fetchLists();
  },
  methods: {
    fetch: function fetch() {
      var _this = this;

      axios.get(this.currentUrl + '/request/download/info').then(function (response) {
        _this.agency = response.data.agency;
        _this.region = response.data.region;
      })["catch"](function (err) {
        return console.log(err);
      });
    },
    fetchSchools: function fetchSchools() {
      var _this2 = this;

      axios.get(this.currentUrl + '/sync/schools/check/all').then(function (response) {
        _this2.school = response.data;
      })["catch"](function (err) {
        return console.log(err);
      });
    },
    downloadSchools: function downloadSchools(category, index) {
      var _this3 = this;

      this.loading3 = true;
      axios.get(this.currentUrl + '/sync/schools/download/local').then(function (response) {
        _this3.loading3 = false;

        _this3.fetchSchools();

        Vue.$toast.success('<strong>Schools was downloaded!</strong>', {
          position: 'bottom-right'
        });
      })["catch"](function (err) {
        return console.log(err);
      });
    },
    fetchLocations: function fetchLocations() {
      var _this4 = this;

      this.addresses = [];
      this.loading1 = true;
      axios.get(this.currentUrl + '/sync/addresses/check/all').then(function (response) {
        _this4.addresses = response.data;
        _this4.loading1 = false;
      })["catch"](function (err) {
        return console.log(err);
      });
    },
    download: function download(category, index) {
      var _this5 = this;

      this.isLoading = true;
      axios.get(this.currentUrl + '/sync/addresses/download/' + category).then(function (response) {
        _this5.isLoading = false;
        _this5.addresses[category].downloaded = response.data;
        Vue.$toast.success('<strong>' + category + ' lists was downloaded!</strong>', {
          position: 'bottom-right'
        });
      })["catch"](function (err) {
        return console.log(err);
      });
    },
    fetchLists: function fetchLists() {
      var _this6 = this;

      this.lists = [];
      this.loading2 = true;
      axios.get(this.currentUrl + '/sync/lists/check/all').then(function (response) {
        _this6.lists = response.data;
        _this6.loading2 = false;
      })["catch"](function (err) {
        return console.log(err);
      });
    },
    downloadLists: function downloadLists(category, index) {
      var _this7 = this;

      this.isLoading = true;
      axios.get(this.currentUrl + '/sync/lists/download/' + category).then(function (response) {
        _this7.isLoading = false;
        _this7.lists[category].downloaded = response.data;
        Vue.$toast.success('<strong>' + category + ' lists was downloaded!</strong>', {
          position: 'bottom-right'
        });
      })["catch"](function (err) {
        return console.log(err);
      });
    }
  },
  components: {
    Loading: (vue_loading_overlay__WEBPACK_IMPORTED_MODULE_0___default())
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Views/Download.vue?vue&type=script&lang=js&":
/*!*********************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Views/Download.vue?vue&type=script&lang=js& ***!
  \*********************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _Modules_Download_Index_vue__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../Modules/Download/Index.vue */ "./resources/js/components/Modules/Download/Index.vue");
/* harmony import */ var _Layouts_main_vue__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../Layouts/main.vue */ "./resources/js/components/Layouts/main.vue");
/* harmony import */ var _Layouts_Header_vue__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../Layouts/Header.vue */ "./resources/js/components/Layouts/Header.vue");
//
//
//
//
//
//



/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  components: {
    Layout: _Layouts_main_vue__WEBPACK_IMPORTED_MODULE_1__["default"],
    PageHeader: _Layouts_Header_vue__WEBPACK_IMPORTED_MODULE_2__["default"],
    Index: _Modules_Download_Index_vue__WEBPACK_IMPORTED_MODULE_0__["default"]
  },
  data: function data() {
    return {
      currentUrl: window.location.origin,
      height: this.$parent.$parent.$parent.height,
      title: "Downloads",
      items: [{
        text: "Download",
        href: "/"
      }, {
        text: "Lists",
        active: true
      }]
    };
  }
});

/***/ }),

/***/ "./node_modules/css-loader/dist/cjs.js??clonedRuleSet-11[0].rules[0].use[1]!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-11[0].rules[0].use[2]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Layouts/Header.vue?vue&type=style&index=0&lang=css&":
/*!*******************************************************************************************************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/css-loader/dist/cjs.js??clonedRuleSet-11[0].rules[0].use[1]!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-11[0].rules[0].use[2]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Layouts/Header.vue?vue&type=style&index=0&lang=css& ***!
  \*******************************************************************************************************************************************************************************************************************************************************************************************************************************************************************/
/***/ ((module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../../../../node_modules/css-loader/dist/runtime/api.js */ "./node_modules/css-loader/dist/runtime/api.js");
/* harmony import */ var _node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0__);
// Imports

var ___CSS_LOADER_EXPORT___ = _node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0___default()(function(i){return i[1]});
// Module
___CSS_LOADER_EXPORT___.push([module.id, "\n.page-title-box h4 {\r\n  font-size: 13px !important;\n}\r\n", ""]);
// Exports
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (___CSS_LOADER_EXPORT___);


/***/ }),

/***/ "./node_modules/style-loader/dist/cjs.js!./node_modules/css-loader/dist/cjs.js??clonedRuleSet-11[0].rules[0].use[1]!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-11[0].rules[0].use[2]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Layouts/Header.vue?vue&type=style&index=0&lang=css&":
/*!***********************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/style-loader/dist/cjs.js!./node_modules/css-loader/dist/cjs.js??clonedRuleSet-11[0].rules[0].use[1]!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-11[0].rules[0].use[2]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Layouts/Header.vue?vue&type=style&index=0&lang=css& ***!
  \***********************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_style_loader_dist_runtime_injectStylesIntoStyleTag_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! !../../../../node_modules/style-loader/dist/runtime/injectStylesIntoStyleTag.js */ "./node_modules/style-loader/dist/runtime/injectStylesIntoStyleTag.js");
/* harmony import */ var _node_modules_style_loader_dist_runtime_injectStylesIntoStyleTag_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_style_loader_dist_runtime_injectStylesIntoStyleTag_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _node_modules_css_loader_dist_cjs_js_clonedRuleSet_11_0_rules_0_use_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_dist_cjs_js_clonedRuleSet_11_0_rules_0_use_2_node_modules_vue_loader_lib_index_js_vue_loader_options_Header_vue_vue_type_style_index_0_lang_css___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! !!../../../../node_modules/css-loader/dist/cjs.js??clonedRuleSet-11[0].rules[0].use[1]!../../../../node_modules/vue-loader/lib/loaders/stylePostLoader.js!../../../../node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-11[0].rules[0].use[2]!../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./Header.vue?vue&type=style&index=0&lang=css& */ "./node_modules/css-loader/dist/cjs.js??clonedRuleSet-11[0].rules[0].use[1]!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-11[0].rules[0].use[2]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Layouts/Header.vue?vue&type=style&index=0&lang=css&");

            

var options = {};

options.insert = "head";
options.singleton = false;

var update = _node_modules_style_loader_dist_runtime_injectStylesIntoStyleTag_js__WEBPACK_IMPORTED_MODULE_0___default()(_node_modules_css_loader_dist_cjs_js_clonedRuleSet_11_0_rules_0_use_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_dist_cjs_js_clonedRuleSet_11_0_rules_0_use_2_node_modules_vue_loader_lib_index_js_vue_loader_options_Header_vue_vue_type_style_index_0_lang_css___WEBPACK_IMPORTED_MODULE_1__["default"], options);



/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_css_loader_dist_cjs_js_clonedRuleSet_11_0_rules_0_use_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_dist_cjs_js_clonedRuleSet_11_0_rules_0_use_2_node_modules_vue_loader_lib_index_js_vue_loader_options_Header_vue_vue_type_style_index_0_lang_css___WEBPACK_IMPORTED_MODULE_1__["default"].locals || {});

/***/ }),

/***/ "./resources/js/components/Layouts/Header.vue":
/*!****************************************************!*\
  !*** ./resources/js/components/Layouts/Header.vue ***!
  \****************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _Header_vue_vue_type_template_id_3dd4c29e___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Header.vue?vue&type=template&id=3dd4c29e& */ "./resources/js/components/Layouts/Header.vue?vue&type=template&id=3dd4c29e&");
/* harmony import */ var _Header_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Header.vue?vue&type=script&lang=js& */ "./resources/js/components/Layouts/Header.vue?vue&type=script&lang=js&");
/* harmony import */ var _Header_vue_vue_type_style_index_0_lang_css___WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./Header.vue?vue&type=style&index=0&lang=css& */ "./resources/js/components/Layouts/Header.vue?vue&type=style&index=0&lang=css&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! !../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");



;


/* normalize component */

var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_3__["default"])(
  _Header_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _Header_vue_vue_type_template_id_3dd4c29e___WEBPACK_IMPORTED_MODULE_0__.render,
  _Header_vue_vue_type_template_id_3dd4c29e___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/Layouts/Header.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/components/Modules/Download/Index.vue":
/*!************************************************************!*\
  !*** ./resources/js/components/Modules/Download/Index.vue ***!
  \************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _Index_vue_vue_type_template_id_74f92284___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Index.vue?vue&type=template&id=74f92284& */ "./resources/js/components/Modules/Download/Index.vue?vue&type=template&id=74f92284&");
/* harmony import */ var _Index_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Index.vue?vue&type=script&lang=js& */ "./resources/js/components/Modules/Download/Index.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _Index_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _Index_vue_vue_type_template_id_74f92284___WEBPACK_IMPORTED_MODULE_0__.render,
  _Index_vue_vue_type_template_id_74f92284___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/Modules/Download/Index.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/components/Views/Download.vue":
/*!****************************************************!*\
  !*** ./resources/js/components/Views/Download.vue ***!
  \****************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _Download_vue_vue_type_template_id_27abfdd4___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Download.vue?vue&type=template&id=27abfdd4& */ "./resources/js/components/Views/Download.vue?vue&type=template&id=27abfdd4&");
/* harmony import */ var _Download_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Download.vue?vue&type=script&lang=js& */ "./resources/js/components/Views/Download.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _Download_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _Download_vue_vue_type_template_id_27abfdd4___WEBPACK_IMPORTED_MODULE_0__.render,
  _Download_vue_vue_type_template_id_27abfdd4___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/Views/Download.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/components/Layouts/Header.vue?vue&type=script&lang=js&":
/*!*****************************************************************************!*\
  !*** ./resources/js/components/Layouts/Header.vue?vue&type=script&lang=js& ***!
  \*****************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Header_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./Header.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Layouts/Header.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Header_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/Modules/Download/Index.vue?vue&type=script&lang=js&":
/*!*************************************************************************************!*\
  !*** ./resources/js/components/Modules/Download/Index.vue?vue&type=script&lang=js& ***!
  \*************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Index_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./Index.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Modules/Download/Index.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Index_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/Views/Download.vue?vue&type=script&lang=js&":
/*!*****************************************************************************!*\
  !*** ./resources/js/components/Views/Download.vue?vue&type=script&lang=js& ***!
  \*****************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Download_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./Download.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Views/Download.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Download_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/Layouts/Header.vue?vue&type=style&index=0&lang=css&":
/*!*************************************************************************************!*\
  !*** ./resources/js/components/Layouts/Header.vue?vue&type=style&index=0&lang=css& ***!
  \*************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_style_loader_dist_cjs_js_node_modules_css_loader_dist_cjs_js_clonedRuleSet_11_0_rules_0_use_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_dist_cjs_js_clonedRuleSet_11_0_rules_0_use_2_node_modules_vue_loader_lib_index_js_vue_loader_options_Header_vue_vue_type_style_index_0_lang_css___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/style-loader/dist/cjs.js!../../../../node_modules/css-loader/dist/cjs.js??clonedRuleSet-11[0].rules[0].use[1]!../../../../node_modules/vue-loader/lib/loaders/stylePostLoader.js!../../../../node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-11[0].rules[0].use[2]!../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./Header.vue?vue&type=style&index=0&lang=css& */ "./node_modules/style-loader/dist/cjs.js!./node_modules/css-loader/dist/cjs.js??clonedRuleSet-11[0].rules[0].use[1]!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-11[0].rules[0].use[2]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Layouts/Header.vue?vue&type=style&index=0&lang=css&");


/***/ }),

/***/ "./resources/js/components/Layouts/Header.vue?vue&type=template&id=3dd4c29e&":
/*!***********************************************************************************!*\
  !*** ./resources/js/components/Layouts/Header.vue?vue&type=template&id=3dd4c29e& ***!
  \***********************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Header_vue_vue_type_template_id_3dd4c29e___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Header_vue_vue_type_template_id_3dd4c29e___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Header_vue_vue_type_template_id_3dd4c29e___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./Header.vue?vue&type=template&id=3dd4c29e& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Layouts/Header.vue?vue&type=template&id=3dd4c29e&");


/***/ }),

/***/ "./resources/js/components/Modules/Download/Index.vue?vue&type=template&id=74f92284&":
/*!*******************************************************************************************!*\
  !*** ./resources/js/components/Modules/Download/Index.vue?vue&type=template&id=74f92284& ***!
  \*******************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Index_vue_vue_type_template_id_74f92284___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Index_vue_vue_type_template_id_74f92284___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Index_vue_vue_type_template_id_74f92284___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./Index.vue?vue&type=template&id=74f92284& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Modules/Download/Index.vue?vue&type=template&id=74f92284&");


/***/ }),

/***/ "./resources/js/components/Views/Download.vue?vue&type=template&id=27abfdd4&":
/*!***********************************************************************************!*\
  !*** ./resources/js/components/Views/Download.vue?vue&type=template&id=27abfdd4& ***!
  \***********************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Download_vue_vue_type_template_id_27abfdd4___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Download_vue_vue_type_template_id_27abfdd4___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Download_vue_vue_type_template_id_27abfdd4___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./Download.vue?vue&type=template&id=27abfdd4& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Views/Download.vue?vue&type=template&id=27abfdd4&");


/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Layouts/Header.vue?vue&type=template&id=3dd4c29e&":
/*!**************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Layouts/Header.vue?vue&type=template&id=3dd4c29e& ***!
  \**************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* binding */ render),
/* harmony export */   "staticRenderFns": () => (/* binding */ staticRenderFns)
/* harmony export */ });
var render = function () {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", { staticClass: "row" }, [
    _c("div", { staticClass: "col-12" }, [
      _c(
        "div",
        {
          staticClass:
            "page-title-box d-flex align-items-center justify-content-between",
        },
        [
          _c(
            "h4",
            {
              staticStyle: { "margin-bottom": "-15px", "margin-top": "-15px" },
            },
            [_vm._v(_vm._s(_vm.title))]
          ),
          _vm._v(" "),
          _c(
            "div",
            { staticClass: "page-title-right font-size-11" },
            [
              _c("b-breadcrumb", {
                staticClass: "m-0",
                attrs: { items: _vm.items },
              }),
            ],
            1
          ),
        ]
      ),
    ]),
  ])
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Modules/Download/Index.vue?vue&type=template&id=74f92284&":
/*!**********************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Modules/Download/Index.vue?vue&type=template&id=74f92284& ***!
  \**********************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* binding */ render),
/* harmony export */   "staticRenderFns": () => (/* binding */ staticRenderFns)
/* harmony export */ });
var render = function () {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "div",
    { staticClass: "row g-3" },
    [
      _c("div", { staticClass: "col-xl-6" }, [
        _c("div", { staticClass: "card" }, [
          _c(
            "div",
            {
              staticClass: "card-body",
              staticStyle: {
                "padding-bottom": "-15px",
                "margin-bottom": "-15px",
              },
            },
            [
              _c("div", { staticClass: "d-flex align-items-start" }, [
                _c("div", { staticClass: "flex-grow-1" }, [
                  _c("div", { staticClass: "text-muted" }, [
                    _c("h5", { staticClass: "mb-0" }, [
                      _vm._v(_vm._s(_vm.agency.name)),
                    ]),
                    _vm._v(" "),
                    _c("p", { staticClass: "mb-0" }, [
                      _vm._v(
                        _vm._s(_vm.agency.region.name) +
                          ", " +
                          _vm._s(_vm.agency.region.region)
                      ),
                    ]),
                    _vm._v(" "),
                    _c("p", { staticClass: "mb-0" }, [
                      _vm._v(_vm._s(_vm.agency.acronym)),
                    ]),
                  ]),
                ]),
              ]),
            ]
          ),
          _vm._v(" "),
          _c("div", { staticClass: "card-body border-top mb-n3" }, [
            _c("i", {
              staticClass: "text-muted float-end bx bx-sync h3",
              staticStyle: { cursor: "pointer" },
              on: {
                click: function ($event) {
                  return _vm.fetchLocations()
                },
              },
            }),
            _vm._v(" "),
            _c("p", { staticClass: "text-muted fw-bold" }, [
              _vm._v(
                _vm._s(_vm.agency.region.name) +
                  ", " +
                  _vm._s(_vm.agency.region.region)
              ),
            ]),
          ]),
          _vm._v(" "),
          _c("div", { staticClass: "card-body border-top" }, [
            _c("div", { staticClass: "text-center text-muted" }, [
              _c(
                "div",
                { staticClass: "row" },
                _vm._l(_vm.region, function (value, name, index) {
                  return _c("div", { key: index, staticClass: "col-4" }, [
                    _c("div", { staticClass: "mt-0 mb-n3" }, [
                      _c("p", { staticClass: "mb-0 text-truncate" }, [
                        _c("i", {
                          staticClass: "bx bxs-map text-primary me-1",
                        }),
                        _vm._v(
                          _vm._s(name) + "\n                                "
                        ),
                      ]),
                      _vm._v(" "),
                      _c("h5", [_vm._v(_vm._s(value))]),
                    ]),
                  ])
                }),
                0
              ),
            ]),
          ]),
          _vm._v(" "),
          _c("div", { staticClass: "card-body border-top mb-n3" }, [
            _c("i", {
              staticClass: "text-muted float-end bx bx-sync h3",
              staticStyle: { cursor: "pointer" },
              on: {
                click: function ($event) {
                  return _vm.fetchLocations()
                },
              },
            }),
            _vm._v(" "),
            _c("p", { staticClass: "text-muted fw-bold" }, [
              _vm._v("Philippine Addresses"),
            ]),
          ]),
          _vm._v(" "),
          _c("div", { staticClass: "card-body border-top mb-n3" }, [
            _vm.loading1 == false
              ? _c("div", { staticClass: "mt-n3" }, [_vm._m(0)])
              : _vm._e(),
            _vm._v(" "),
            _c("div", { staticClass: "text-center" }, [
              _c(
                "div",
                { staticClass: "row" },
                _vm._l(_vm.addresses, function (value, name, index) {
                  return _c("div", { key: index, staticClass: "col-sm-3" }, [
                    _c("div", [
                      _vm._m(1, true),
                      _vm._v(" "),
                      _c("p", { staticClass: "text-muted mb-0" }, [
                        _vm._v(_vm._s(name)),
                      ]),
                      _vm._v(" "),
                      _c("p", { staticClass: "mt-0" }, [
                        _vm._v(_vm._s(value.downloaded) + " "),
                        _c("span", { staticClass: "text-muted" }, [
                          _vm._v("of"),
                        ]),
                        _vm._v(" "),
                        _c(
                          "span",
                          {
                            class: [
                              value.downloaded != value.count
                                ? "text-danger"
                                : "",
                            ],
                          },
                          [_vm._v(_vm._s(value.count))]
                        ),
                      ]),
                      _vm._v(" "),
                      _c("div", { staticClass: "mt-3" }, [
                        _c(
                          "button",
                          {
                            staticClass: "btn btn-primary btn-sm w-md",
                            attrs: {
                              disabled:
                                value.downloaded == value.count ? true : false,
                            },
                            on: {
                              click: function ($event) {
                                return _vm.download(name, index)
                              },
                            },
                          },
                          [_vm._v("Download")]
                        ),
                      ]),
                    ]),
                  ])
                }),
                0
              ),
              _vm._v(" "),
              _vm.loading1 == true
                ? _c("div", [
                    _c("i", {
                      staticClass:
                        "bx bx-loader-circle bx-spin bx-rotate-90 h1",
                    }),
                  ])
                : _vm._e(),
            ]),
            _vm._v(" "),
            _vm.loading1 == false
              ? _c("div", { staticClass: "mt-4 mb-0" }, [_vm._m(2)])
              : _vm._e(),
          ]),
        ]),
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "col-xl-6" }, [
        _c("div", { staticClass: "row g-3" }, [
          _c("div", { staticClass: "col-sm-12" }, [
            _c("div", { staticClass: "card" }, [
              _c("div", { staticClass: "card-body" }, [
                _c("i", {
                  staticClass: "text-muted float-end bx bx-sync h3",
                  staticStyle: { cursor: "pointer" },
                  on: {
                    click: function ($event) {
                      return _vm.fetchLists()
                    },
                  },
                }),
                _vm._v(" "),
                _c("p", { staticClass: "text-muted fw-bold" }, [
                  _vm._v("Schools"),
                ]),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "card-body mt-n3 border-top" }, [
                _vm.loading3 == true
                  ? _c(
                      "div",
                      {
                        staticClass: "text-center",
                        staticStyle: { height: "115px" },
                      },
                      [
                        _c("i", {
                          staticClass:
                            "bx bx-loader-circle bx-spin bx-rotate-90 h1 mt-4",
                        }),
                      ]
                    )
                  : _c(
                      "div",
                      {
                        staticClass: "row",
                        staticStyle: { "margin-top": "-7px" },
                      },
                      [
                        _c("div", { staticClass: "col-sm-6" }, [
                          _c("div", [
                            _c("h5", [_vm._v("Overall Schools")]),
                            _vm._v(" "),
                            _c("p", { staticClass: "text-muted mb-0" }, [
                              _c("span", { staticClass: "fw-bold" }, [
                                _vm._v(_vm._s(_vm.school.overall.all)),
                              ]),
                              _vm._v(" Total schools"),
                            ]),
                            _vm._v(" "),
                            _c("p", { staticClass: "text-muted mb-0" }, [
                              _c("span", { staticClass: "fw-bold" }, [
                                _vm._v(_vm._s(_vm.school.overall.campuses)),
                              ]),
                              _vm._v(" Total campuses"),
                            ]),
                          ]),
                        ]),
                        _vm._v(" "),
                        _c("div", { staticClass: "col-sm-6" }, [
                          _c(
                            "div",
                            { staticClass: "text-sm-start mt-4 mt-sm-0" },
                            [
                              _c("h5", [
                                _vm._v(
                                  _vm._s(_vm.agency.region.region) + " Schools"
                                ),
                              ]),
                              _vm._v(" "),
                              _c("p", { staticClass: "text-muted mb-0" }, [
                                _vm._v("Schools : "),
                                _c("span", { staticClass: "fw-bold" }, [
                                  _vm._v(
                                    _vm._s(
                                      _vm.school.regional.downloaded_schools
                                    ) +
                                      " of " +
                                      _vm._s(_vm.school.regional.all)
                                  ),
                                ]),
                                _vm._v(" downloaded"),
                              ]),
                              _vm._v(" "),
                              _c("p", { staticClass: "text-muted mb-0" }, [
                                _vm._v("Other Schools : "),
                                _c("span", { staticClass: "fw-bold" }, [
                                  _vm._v(
                                    _vm._s(_vm.school.regional.other_schools)
                                  ),
                                ]),
                                _vm._v(" downloaded"),
                              ]),
                            ]
                          ),
                        ]),
                        _vm._v(" "),
                        _c("div", {
                          staticClass: "col-sm-12 border-top mb-2 mt-2",
                        }),
                        _vm._v(" "),
                        _c("div", { staticClass: "col-sm-6 mb-n2" }, [
                          _c("div", [
                            _c("p", { staticClass: "text-muted mb-0" }, [
                              _c("span", { staticClass: "fw-bold" }, [
                                _vm._v(_vm._s(_vm.school.regional.all)),
                              ]),
                              _vm._v(
                                " Schools within " +
                                  _vm._s(_vm.agency.region.region)
                              ),
                            ]),
                            _vm._v(" "),
                            _c("p", { staticClass: "text-muted mb-0" }, [
                              _c("span", { staticClass: "fw-bold" }, [
                                _vm._v(_vm._s(_vm.school.regional.campuses)),
                              ]),
                              _vm._v(
                                " Campuses within " +
                                  _vm._s(_vm.agency.region.region)
                              ),
                            ]),
                          ]),
                        ]),
                        _vm._v(" "),
                        _c("div", { staticClass: "col-sm-6 mb-n2" }, [
                          _c(
                            "div",
                            { staticClass: "text-sm-start mt-4 mt-sm-0" },
                            [
                              _c("p", { staticClass: "text-muted mb-0" }, [
                                _vm._v("Campuses : "),
                                _c("span", { staticClass: "fw-bold" }, [
                                  _vm._v(
                                    _vm._s(
                                      _vm.school.regional.downloaded_campuses
                                    ) +
                                      " of " +
                                      _vm._s(_vm.school.regional.campuses)
                                  ),
                                ]),
                                _vm._v(" downloaded"),
                              ]),
                              _vm._v(" "),
                              _c("p", { staticClass: "text-muted mb-2" }, [
                                _vm._v("Other Campuses : "),
                                _c("span", { staticClass: "fw-bold" }, [
                                  _vm._v(
                                    _vm._s(_vm.school.regional.other_campuses)
                                  ),
                                ]),
                                _vm._v(" downloaded"),
                              ]),
                              _vm._v(" "),
                              _c(
                                "button",
                                {
                                  staticClass:
                                    "btn btn-primary btn-sm w-md me-1",
                                  attrs: { type: "button" },
                                  on: { click: _vm.downloadSchools },
                                },
                                [_vm._v("Download")]
                              ),
                              _vm._v(" "),
                              _c(
                                "button",
                                { staticClass: "btn btn-light btn-sm w-md" },
                                [_vm._v("Request")]
                              ),
                            ]
                          ),
                        ]),
                      ]
                    ),
              ]),
            ]),
          ]),
        ]),
        _vm._v(" "),
        _c("div", { staticClass: "row g-3" }, [
          _c("div", { staticClass: "col-sm-12" }, [
            _c("div", { staticClass: "card mt-n2" }, [
              _c("div", { staticClass: "card-body" }, [
                _c("i", {
                  staticClass: "text-muted float-end bx bx-sync h3",
                  staticStyle: { cursor: "pointer" },
                  on: {
                    click: function ($event) {
                      return _vm.fetchLists()
                    },
                  },
                }),
                _vm._v(" "),
                _c("p", { staticClass: "text-muted fw-bold" }, [
                  _vm._v("Lists"),
                ]),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "card-body mt-n3 border-top" }, [
                _c("div", { staticClass: "table-responsive" }, [
                  _c(
                    "table",
                    {
                      staticClass:
                        "table align-middle table-nowrap table-hover mb-0 mt-n1",
                    },
                    [
                      _c(
                        "tbody",
                        _vm._l(_vm.lists, function (value, name, index) {
                          return _c("tr", { key: index }, [
                            _c("td", [
                              _c(
                                "a",
                                {
                                  staticClass: "text-dark fw-medium",
                                  attrs: { href: "javascript: void(0);" },
                                },
                                [
                                  _c("i", {
                                    staticClass:
                                      "bx bx-cloud-download  font-size-16 align-middle text-primary me-2",
                                  }),
                                  _vm._v(
                                    _vm._s(name) +
                                      "\n                                            "
                                  ),
                                ]
                              ),
                            ]),
                            _vm._v(" "),
                            _c("td", { staticClass: "text-center" }, [
                              _vm._v(_vm._s(value.downloaded) + " "),
                              _c("span", { staticClass: "text-muted" }, [
                                _vm._v("of"),
                              ]),
                              _vm._v(" "),
                              _c(
                                "span",
                                {
                                  class: [
                                    value.downloaded != value.count
                                      ? "text-danger"
                                      : "",
                                  ],
                                },
                                [_vm._v(_vm._s(value.count))]
                              ),
                            ]),
                            _vm._v(" "),
                            _c("td", { staticClass: "text-center" }, [
                              _vm._v("0"),
                            ]),
                            _vm._v(" "),
                            _c("td", { staticClass: "text-end" }, [
                              _c(
                                "button",
                                { staticClass: "btn btn-success btn-sm w-md" },
                                [_vm._v("Request")]
                              ),
                              _vm._v(" "),
                              _c(
                                "button",
                                {
                                  staticClass: "btn btn-primary btn-sm",
                                  attrs: {
                                    disabled:
                                      value.downloaded == value.count
                                        ? true
                                        : false,
                                  },
                                  on: {
                                    click: function ($event) {
                                      return _vm.downloadLists(name, index)
                                    },
                                  },
                                },
                                [_c("i", { staticClass: "bx bx-download" })]
                              ),
                            ]),
                          ])
                        }),
                        0
                      ),
                    ]
                  ),
                ]),
                _vm._v(" "),
                _vm.loading2 == true
                  ? _c("div", { staticClass: "text-center" }, [
                      _c("i", {
                        staticClass:
                          "bx bx-loader-circle bx-spin bx-rotate-90 h1",
                      }),
                    ])
                  : _vm._e(),
              ]),
            ]),
          ]),
        ]),
      ]),
      _vm._v(" "),
      _c("loading", {
        attrs: {
          active: _vm.isLoading,
          "can-cancel": false,
          loader: "dots",
          "background-color": "black",
          "is-full-page": _vm.fullPage,
        },
        on: {
          "update:active": function ($event) {
            _vm.isLoading = $event
          },
        },
      }),
    ],
    1
  )
}
var staticRenderFns = [
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "div",
      {
        staticClass: "mt-2 alert alert-dismissible alert-warning",
        attrs: { role: "alert", "aria-live": "polite", "aria-atomic": "true" },
      },
      [
        _c("i", { staticClass: "mdi mdi-alert-circle-outline me-2" }),
        _vm._v(
          "Municipality and Barangay district can be\n                        updated later on.\n                    "
        ),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "font-size-24 text-primary mb-0" }, [
      _c("i", { staticClass: "bx bxs-cloud-download" }),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("p", { staticClass: "text-muted font-size-11" }, [
      _vm._v("Current data is as of June 30, 2021. Data is based from "),
      _c(
        "a",
        {
          staticClass: "fw-bold",
          attrs: {
            href: "https://psa.gov.ph/classification/psgc/",
            target: "_blank",
          },
        },
        [_vm._v("Philippine Standard Geographic Code (PSGC).")]
      ),
    ])
  },
]
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Views/Download.vue?vue&type=template&id=27abfdd4&":
/*!**************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Views/Download.vue?vue&type=template&id=27abfdd4& ***!
  \**************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* binding */ render),
/* harmony export */   "staticRenderFns": () => (/* binding */ staticRenderFns)
/* harmony export */ });
var render = function () {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "div",
    [
      _c("PageHeader", { attrs: { title: _vm.title, items: _vm.items } }),
      _vm._v(" "),
      _c("Index"),
    ],
    1
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ })

}]);