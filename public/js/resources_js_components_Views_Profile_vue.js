"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_components_Views_Profile_vue"],{

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

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Views/Profile.vue?vue&type=script&lang=js&":
/*!********************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Views/Profile.vue?vue&type=script&lang=js& ***!
  \********************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _Layouts_Header_vue__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../Layouts/Header.vue */ "./resources/js/components/Layouts/Header.vue");
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
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
  props: ['dropdowns', 'regions', 'user'],
  components: {
    PageHeader: _Layouts_Header_vue__WEBPACK_IMPORTED_MODULE_0__["default"]
  },
  data: function data() {
    return {
      currentUrl: window.location.origin,
      height: this.$parent.$parent.$parent.height,
      title: "My Profile",
      items: [{
        text: "Profile",
        href: "/"
      }, {
        text: "Information",
        active: true
      }],
      errors: [],
      current_password: '',
      password: '',
      password_confirmation: '',
      logs: [],
      pagination: {}
    };
  },
  created: function created() {
    this.mylogs();
  },
  methods: {
    makePagination: function makePagination(meta, links) {
      var pagination = {
        current_page: meta.current_page,
        last_page: meta.last_page,
        next_page_url: links.next,
        prev_page_url: links.prev,
        total: meta.total,
        per_page: meta.per_page
      };
      this.pagination = pagination;
    },
    onSubmit: function onSubmit(evt) {
      var _this = this;

      evt.preventDefault();
      axios.post(this.currentUrl + '/request/user/password', {
        current_password: this.current_password,
        password: this.password,
        password_confirmation: this.password_confirmation
      }).then(function (response) {
        if (response.data.success == "First Attempt") {
          alert('wew');
        } else {
          _this.current_password = '';
          _this.password = '';
          _this.password_confirmation = '';
          _this.errors = [];
          _this.test = '';
          Vue.$toast.success('<strong>Password Changed</strong>', {
            position: 'bottom-right'
          });
        }
      })["catch"](function (error) {
        if (error.response.status == 422) {
          _this.errors = error.response.data.errors;
        }

        if (error.response.status == 401) {
          _this.errors = error.response.data.error;
        }
      });
    },
    mylogs: function mylogs(page_url) {
      var _this2 = this;

      var vm = this;
      page_url = page_url || this.currentUrl + '/request/user/logs';
      axios.get(page_url).then(function (response) {
        _this2.logs = response.data.data;
        vm.makePagination(response.data.meta, response.data.links);
      })["catch"](function (err) {
        return console.log(err);
      });
    }
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

/***/ "./resources/js/components/Views/Profile.vue":
/*!***************************************************!*\
  !*** ./resources/js/components/Views/Profile.vue ***!
  \***************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _Profile_vue_vue_type_template_id_11ee928d___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Profile.vue?vue&type=template&id=11ee928d& */ "./resources/js/components/Views/Profile.vue?vue&type=template&id=11ee928d&");
/* harmony import */ var _Profile_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Profile.vue?vue&type=script&lang=js& */ "./resources/js/components/Views/Profile.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _Profile_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _Profile_vue_vue_type_template_id_11ee928d___WEBPACK_IMPORTED_MODULE_0__.render,
  _Profile_vue_vue_type_template_id_11ee928d___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/Views/Profile.vue"
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

/***/ "./resources/js/components/Views/Profile.vue?vue&type=script&lang=js&":
/*!****************************************************************************!*\
  !*** ./resources/js/components/Views/Profile.vue?vue&type=script&lang=js& ***!
  \****************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Profile_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./Profile.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Views/Profile.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Profile_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

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

/***/ "./resources/js/components/Views/Profile.vue?vue&type=template&id=11ee928d&":
/*!**********************************************************************************!*\
  !*** ./resources/js/components/Views/Profile.vue?vue&type=template&id=11ee928d& ***!
  \**********************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Profile_vue_vue_type_template_id_11ee928d___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Profile_vue_vue_type_template_id_11ee928d___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Profile_vue_vue_type_template_id_11ee928d___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./Profile.vue?vue&type=template&id=11ee928d& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Views/Profile.vue?vue&type=template&id=11ee928d&");


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

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Views/Profile.vue?vue&type=template&id=11ee928d&":
/*!*************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Views/Profile.vue?vue&type=template&id=11ee928d& ***!
  \*************************************************************************************************************************************************************************************************************************/
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
      _c("div", { staticClass: "row" }, [
        _c("div", { staticClass: "col-lg-12" }, [
          _c("div", { staticClass: "card" }, [
            _c("div", { staticClass: "card-body" }, [
              _c("div", { staticClass: "row" }, [
                _c("div", { staticClass: "col-lg-4" }, [
                  _c("div", { staticClass: "d-flex" }, [
                    _c("div", { staticClass: "me-3" }, [
                      _c("img", {
                        staticClass: "avatar-md rounded-circle img-thumbnail",
                        attrs: {
                          src:
                            _vm.currentUrl +
                            "/images/avatars/" +
                            _vm.user.avatar,
                          alt: "",
                        },
                      }),
                    ]),
                    _vm._v(" "),
                    _c(
                      "div",
                      { staticClass: "flex-grow-1 align-self-center" },
                      [
                        _c("div", { staticClass: "text-muted" }, [
                          _c("h5", { staticClass: "mb-1" }, [
                            _vm._v(
                              _vm._s(_vm.user.profile.firstname) +
                                " " +
                                _vm._s(_vm.user.profile.lastname)
                            ),
                          ]),
                          _vm._v(" "),
                          _c("p", { staticClass: "mb-0" }, [
                            _vm._v(_vm._s(_vm.user.role)),
                          ]),
                        ]),
                      ]
                    ),
                  ]),
                ]),
                _vm._v(" "),
                _vm._m(0),
                _vm._v(" "),
                _vm._m(1),
              ]),
            ]),
          ]),
        ]),
        _vm._v(" "),
        _c("div", { staticClass: "col-lg-4" }, [
          _c(
            "div",
            { staticClass: "card", style: { height: _vm.height - 130 + "px" } },
            [
              _c("div", { staticClass: "card-body" }, [
                _c("h4", { staticClass: "card-title mb-4" }, [
                  _vm._v("Personal Information"),
                ]),
                _vm._v(" "),
                _c("p", { staticClass: "text-muted mb-4" }, [
                  _vm._v(
                    "Don't share your account email and password.\n                        Dont' use easy-to-guess passwords, instead of trying to remember a different complex strong\n                        password for every account and site login."
                  ),
                ]),
                _vm._v(" "),
                _c("div", { staticClass: "table-responsive " }, [
                  _c("table", { staticClass: "table table-nowrap mb-0" }, [
                    _c("tbody", [
                      _c("tr", [
                        _c("th", { attrs: { scope: "row" } }, [
                          _vm._v("Full Name :"),
                        ]),
                        _vm._v(" "),
                        _c("td", [
                          _vm._v(
                            _vm._s(_vm.user.profile.firstname) +
                              " " +
                              _vm._s(_vm.user.profile.middlename) +
                              "\n                                        " +
                              _vm._s(_vm.user.profile.lastname)
                          ),
                        ]),
                      ]),
                      _vm._v(" "),
                      _c("tr", [
                        _c("th", { attrs: { scope: "row" } }, [
                          _vm._v("Mobile :"),
                        ]),
                        _vm._v(" "),
                        _c("td", [_vm._v(_vm._s(_vm.user.profile.mobile))]),
                      ]),
                      _vm._v(" "),
                      _c("tr", [
                        _c("th", { attrs: { scope: "row" } }, [
                          _vm._v("E-mail :"),
                        ]),
                        _vm._v(" "),
                        _c("td", [_vm._v(_vm._s(_vm.user.email))]),
                      ]),
                      _vm._v(" "),
                      _c("tr", [
                        _c("th", { attrs: { scope: "row" } }, [
                          _vm._v("Role :"),
                        ]),
                        _vm._v(" "),
                        _c("td", [_vm._v(_vm._s(_vm.user.role))]),
                      ]),
                    ]),
                  ]),
                ]),
              ]),
            ]
          ),
        ]),
        _vm._v(" "),
        _c("div", { staticClass: "col-md-4" }, [
          _c(
            "div",
            { staticClass: "card", style: { height: _vm.height - 130 + "px" } },
            [
              _c("div", { staticClass: "card-body" }, [
                _c(
                  "ul",
                  {
                    staticClass:
                      "list-inline user-chat-nav float-end text-end mb-0 mt-n2 dropdown",
                  },
                  [
                    _c(
                      "li",
                      {
                        staticClass:
                          "list-inline-item d-none d-sm-inline-block font-size-12",
                      },
                      [
                        _vm._v(
                          "\n                            " +
                            _vm._s(
                              _vm.pagination.current_page == 1
                                ? "1"
                                : (_vm.pagination.current_page - 1) *
                                    _vm.pagination.per_page +
                                    1
                            ) +
                            "-" +
                            _vm._s(
                              _vm.pagination.last_page ==
                                _vm.pagination.current_page
                                ? _vm.pagination.total
                                : _vm.pagination.current_page *
                                    _vm.pagination.per_page
                            ) +
                            " of " +
                            _vm._s(_vm.pagination.total) +
                            "\n                        "
                        ),
                      ]
                    ),
                    _vm._v(" "),
                    _c(
                      "li",
                      {
                        staticClass:
                          "list-inline-item d-none d-sm-inline-block",
                      },
                      [
                        _c(
                          "a",
                          {
                            staticClass: "btn nav-btn",
                            class: [
                              { disabled: !_vm.pagination.prev_page_url },
                            ],
                            on: {
                              click: function ($event) {
                                return _vm.mylogs(_vm.pagination.prev_page_url)
                              },
                            },
                          },
                          [
                            _c("i", {
                              staticClass: "bx bx-chevron-left mt-1 h4",
                            }),
                          ]
                        ),
                      ]
                    ),
                    _vm._v(" "),
                    _c(
                      "li",
                      {
                        staticClass:
                          "list-inline-item d-none d-sm-inline-block",
                      },
                      [
                        _c(
                          "a",
                          {
                            staticClass: "btn nav-btn",
                            class: [
                              { disabled: !_vm.pagination.next_page_url },
                            ],
                            on: {
                              click: function ($event) {
                                return _vm.mylogs(_vm.pagination.next_page_url)
                              },
                            },
                          },
                          [
                            _c("i", {
                              staticClass: "bx bx-chevron-right mt-1 h4",
                            }),
                          ]
                        ),
                      ]
                    ),
                  ]
                ),
                _vm._v(" "),
                _c("h4", { staticClass: "card-title mb-4" }, [
                  _vm._v("Activities"),
                ]),
                _vm._v(" "),
                _c(
                  "div",
                  {
                    staticClass: "mt-2",
                    style: { height: _vm.height - 220 + "px" },
                    attrs: { "data-simplebar": "" },
                  },
                  [
                    _c(
                      "ul",
                      { staticClass: "verti-timeline list-unstyled" },
                      _vm._l(_vm.logs, function (log, index) {
                        return _c(
                          "li",
                          { key: log.id, staticClass: "event-list active" },
                          [
                            _c("div", { staticClass: "event-timeline-dot" }, [
                              _c("i", {
                                staticClass:
                                  "bx bxs-right-arrow-circle font-size-18",
                                class: [index == 0 ? "bx-fade-right" : ""],
                              }),
                            ]),
                            _vm._v(" "),
                            _c("div", { staticClass: "d-flex" }, [
                              _c("div", { staticClass: "me-3" }, [
                                _c("h5", { staticClass: "font-size-11" }, [
                                  _vm._v(
                                    "\n                                            User " +
                                      _vm._s(log.description) +
                                      "\n                                            "
                                  ),
                                  _c("i", {
                                    staticClass:
                                      "bx bx-right-arrow-alt font-size-16 text-primary align-middle ms-2",
                                  }),
                                ]),
                              ]),
                              _vm._v(" "),
                              _c(
                                "div",
                                { staticClass: "flex-grow-1 float-end" },
                                [
                                  _c("div", [
                                    _c(
                                      "span",
                                      { staticClass: "text-muted float-end" },
                                      [_vm._v(_vm._s(log.created_at))]
                                    ),
                                  ]),
                                ]
                              ),
                            ]),
                          ]
                        )
                      }),
                      0
                    ),
                  ]
                ),
              ]),
            ]
          ),
        ]),
        _vm._v(" "),
        _c("div", { staticClass: "col-md-4" }, [
          _c(
            "div",
            { staticClass: "card", style: { height: _vm.height - 130 + "px" } },
            [
              _c(
                "div",
                { staticClass: "card-body" },
                [
                  _c("h4", { staticClass: "card-title mb-4" }, [
                    _vm._v("Settings"),
                  ]),
                  _vm._v(" "),
                  _c("p", { staticClass: "text-muted mb-4" }, [
                    _vm._v(
                      "Dont' use easy-to-guess passwords, instead of trying to remember a different complex strong password."
                    ),
                  ]),
                  _vm._v(" "),
                  _c(
                    "b-form",
                    { staticClass: "customform", on: { submit: _vm.onSubmit } },
                    [
                      _c("div", { staticClass: "row" }, [
                        _c("div", { staticClass: "col-md-12" }, [
                          _c("div", { staticClass: "form-group" }, [
                            _c("label", [
                              _vm._v("Current Password: "),
                              _vm.errors.current_password
                                ? _c("span", { staticClass: "haveerror" }, [
                                    _vm._v(
                                      "(" +
                                        _vm._s(_vm.errors.current_password[0]) +
                                        ")"
                                    ),
                                  ])
                                : _vm._e(),
                            ]),
                            _vm._v(" "),
                            _c("input", {
                              directives: [
                                {
                                  name: "model",
                                  rawName: "v-model",
                                  value: _vm.current_password,
                                  expression: "current_password",
                                },
                              ],
                              staticClass: "form-control",
                              class: [
                                _vm.errors.current_password ? "is-invalid" : "",
                              ],
                              attrs: { type: "password" },
                              domProps: { value: _vm.current_password },
                              on: {
                                input: function ($event) {
                                  if ($event.target.composing) {
                                    return
                                  }
                                  _vm.current_password = $event.target.value
                                },
                              },
                            }),
                          ]),
                        ]),
                        _vm._v(" "),
                        _c("div", { staticClass: "col-md-12" }, [_c("hr")]),
                        _vm._v(" "),
                        _c("div", { staticClass: "col-md-12" }, [
                          _c("div", { staticClass: "form-group" }, [
                            _c("label", [
                              _vm._v("New Password: "),
                              _vm.errors.password
                                ? _c("span", { staticClass: "haveerror" }, [
                                    _vm._v(
                                      "(" + _vm._s(_vm.errors.password[0]) + ")"
                                    ),
                                  ])
                                : _vm._e(),
                            ]),
                            _vm._v(" "),
                            _c("input", {
                              directives: [
                                {
                                  name: "model",
                                  rawName: "v-model",
                                  value: _vm.password,
                                  expression: "password",
                                },
                              ],
                              staticClass: "form-control",
                              class: [_vm.errors.password ? "is-invalid" : ""],
                              attrs: { type: "password" },
                              domProps: { value: _vm.password },
                              on: {
                                input: function ($event) {
                                  if ($event.target.composing) {
                                    return
                                  }
                                  _vm.password = $event.target.value
                                },
                              },
                            }),
                          ]),
                        ]),
                        _vm._v(" "),
                        _c("div", { staticClass: "col-md-12" }, [
                          _c("div", { staticClass: "form-group" }, [
                            _c("label", [
                              _vm._v("Confirm Password: "),
                              _vm.errors.password_confirmation
                                ? _c("span", { staticClass: "haveerror" }, [
                                    _vm._v(
                                      "(" +
                                        _vm._s(
                                          _vm.errors.password_confirmation[0]
                                        ) +
                                        ")"
                                    ),
                                  ])
                                : _vm._e(),
                            ]),
                            _vm._v(" "),
                            _c("input", {
                              directives: [
                                {
                                  name: "model",
                                  rawName: "v-model",
                                  value: _vm.password_confirmation,
                                  expression: "password_confirmation",
                                },
                              ],
                              staticClass: "form-control",
                              class: [
                                _vm.errors.password_confirmation
                                  ? "is-invalid"
                                  : "",
                              ],
                              attrs: { type: "password" },
                              domProps: { value: _vm.password_confirmation },
                              on: {
                                input: function ($event) {
                                  if ($event.target.composing) {
                                    return
                                  }
                                  _vm.password_confirmation =
                                    $event.target.value
                                },
                              },
                            }),
                          ]),
                        ]),
                        _vm._v(" "),
                        _c(
                          "div",
                          { staticClass: "col-md-12 d-inline-block mt-2" },
                          [
                            _c(
                              "button",
                              {
                                staticClass:
                                  "btn btn-info btn-sm w-lg float-end waves-effect waves-light mt-0",
                                attrs: { type: "submit" },
                              },
                              [
                                _vm._v(
                                  "Update\n                                    Password"
                                ),
                              ]
                            ),
                          ]
                        ),
                      ]),
                    ]
                  ),
                ],
                1
              ),
            ]
          ),
        ]),
      ]),
    ],
    1
  )
}
var staticRenderFns = [
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "col-lg-4 align-self-center" }, [
      _c("div", { staticClass: "text-lg-center mt-4 mt-lg-0" }, [
        _c("div", { staticClass: "row" }),
      ]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "col-lg-4 d-none d-lg-block" }, [
      _c("div", { staticClass: "clearfix mt-4 mt-lg-0" }),
    ])
  },
]
render._withStripped = true



/***/ })

}]);