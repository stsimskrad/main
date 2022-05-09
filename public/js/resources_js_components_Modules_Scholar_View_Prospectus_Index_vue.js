"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_components_Modules_Scholar_View_Prospectus_Index_vue"],{

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Modules/Scholar/View/Prospectus/Index.vue?vue&type=script&lang=js&":
/*!********************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Modules/Scholar/View/Prospectus/Index.vue?vue&type=script&lang=js& ***!
  \********************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var simplebar_vue__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! simplebar-vue */ "./node_modules/simplebar-vue/dist/simplebar-vue.esm.js");
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
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
      height: this.$parent.$parent.$parent.$parent.$parent.height,
      counts: this.$parent.$parent.$parent.$parent.$parent.counts,
      tabIndex: 0,
      tabIndex2: 0,
      prospectus: {},
      semesters: []
    };
  },
  created: function created() {
    this.id = this.$route.params.id;
    this.fetch();
  },
  methods: {
    fetch: function fetch() {
      var _this = this;

      axios.get(this.currentUrl + '/request/enrollment/prospectus/' + this.id).then(function (response) {
        _this.prospectus = response.data.data;
        _this.semesters = JSON.parse(_this.prospectus.information);
        _this.semesters = _this.semesters.prospectus;
      })["catch"](function (err) {
        return console.log(err);
      });
    },
    totalUnits: function totalUnits(lists) {
      var sum = 0;

      if (lists != undefined) {
        lists.forEach(function (e) {
          sum += Number(e.unit);
        });
      }

      return sum;
    },
    totalGrade: function totalGrade(lists) {
      var sum = 0;
      var tot = 0;

      if (lists != undefined) {
        lists.forEach(function (e) {
          if (e.is_nonacademic == false && e.grade != undefined) {
            tot++;
            sum += Number(e.grade);
          }
        });
      }

      if (sum != 0 || sum != '') {
        return (sum / tot).toFixed(3);
      } else {
        return '-';
      }
    },
    nxt: function nxt(type) {
      type == 'next' ? this.tabIndex++ : this.tabIndex--;
      this.tabIndex2 = 0;
    }
  },
  components: {
    simplebar: simplebar_vue__WEBPACK_IMPORTED_MODULE_0__["default"]
  }
});

/***/ }),

/***/ "./node_modules/css-loader/dist/cjs.js??clonedRuleSet-11[0].rules[0].use[1]!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-11[0].rules[0].use[2]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Modules/Scholar/View/Prospectus/Index.vue?vue&type=style&index=0&lang=css&":
/*!******************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/css-loader/dist/cjs.js??clonedRuleSet-11[0].rules[0].use[1]!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-11[0].rules[0].use[2]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Modules/Scholar/View/Prospectus/Index.vue?vue&type=style&index=0&lang=css& ***!
  \******************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************/
/***/ ((module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../../../../../../../node_modules/css-loader/dist/runtime/api.js */ "./node_modules/css-loader/dist/runtime/api.js");
/* harmony import */ var _node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0__);
// Imports

var ___CSS_LOADER_EXPORT___ = _node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0___default()(function(i){return i[1]});
// Module
___CSS_LOADER_EXPORT___.push([module.id, "\n.nav-tabs {\r\n    display: none;\n}\r\n", ""]);
// Exports
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (___CSS_LOADER_EXPORT___);


/***/ }),

/***/ "./node_modules/style-loader/dist/cjs.js!./node_modules/css-loader/dist/cjs.js??clonedRuleSet-11[0].rules[0].use[1]!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-11[0].rules[0].use[2]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Modules/Scholar/View/Prospectus/Index.vue?vue&type=style&index=0&lang=css&":
/*!**********************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/style-loader/dist/cjs.js!./node_modules/css-loader/dist/cjs.js??clonedRuleSet-11[0].rules[0].use[1]!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-11[0].rules[0].use[2]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Modules/Scholar/View/Prospectus/Index.vue?vue&type=style&index=0&lang=css& ***!
  \**********************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_style_loader_dist_runtime_injectStylesIntoStyleTag_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! !../../../../../../../node_modules/style-loader/dist/runtime/injectStylesIntoStyleTag.js */ "./node_modules/style-loader/dist/runtime/injectStylesIntoStyleTag.js");
/* harmony import */ var _node_modules_style_loader_dist_runtime_injectStylesIntoStyleTag_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_style_loader_dist_runtime_injectStylesIntoStyleTag_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _node_modules_css_loader_dist_cjs_js_clonedRuleSet_11_0_rules_0_use_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_dist_cjs_js_clonedRuleSet_11_0_rules_0_use_2_node_modules_vue_loader_lib_index_js_vue_loader_options_Index_vue_vue_type_style_index_0_lang_css___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! !!../../../../../../../node_modules/css-loader/dist/cjs.js??clonedRuleSet-11[0].rules[0].use[1]!../../../../../../../node_modules/vue-loader/lib/loaders/stylePostLoader.js!../../../../../../../node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-11[0].rules[0].use[2]!../../../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./Index.vue?vue&type=style&index=0&lang=css& */ "./node_modules/css-loader/dist/cjs.js??clonedRuleSet-11[0].rules[0].use[1]!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-11[0].rules[0].use[2]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Modules/Scholar/View/Prospectus/Index.vue?vue&type=style&index=0&lang=css&");

            

var options = {};

options.insert = "head";
options.singleton = false;

var update = _node_modules_style_loader_dist_runtime_injectStylesIntoStyleTag_js__WEBPACK_IMPORTED_MODULE_0___default()(_node_modules_css_loader_dist_cjs_js_clonedRuleSet_11_0_rules_0_use_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_dist_cjs_js_clonedRuleSet_11_0_rules_0_use_2_node_modules_vue_loader_lib_index_js_vue_loader_options_Index_vue_vue_type_style_index_0_lang_css___WEBPACK_IMPORTED_MODULE_1__["default"], options);



/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_css_loader_dist_cjs_js_clonedRuleSet_11_0_rules_0_use_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_dist_cjs_js_clonedRuleSet_11_0_rules_0_use_2_node_modules_vue_loader_lib_index_js_vue_loader_options_Index_vue_vue_type_style_index_0_lang_css___WEBPACK_IMPORTED_MODULE_1__["default"].locals || {});

/***/ }),

/***/ "./resources/js/components/Modules/Scholar/View/Prospectus/Index.vue":
/*!***************************************************************************!*\
  !*** ./resources/js/components/Modules/Scholar/View/Prospectus/Index.vue ***!
  \***************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _Index_vue_vue_type_template_id_23d60c4b___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Index.vue?vue&type=template&id=23d60c4b& */ "./resources/js/components/Modules/Scholar/View/Prospectus/Index.vue?vue&type=template&id=23d60c4b&");
/* harmony import */ var _Index_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Index.vue?vue&type=script&lang=js& */ "./resources/js/components/Modules/Scholar/View/Prospectus/Index.vue?vue&type=script&lang=js&");
/* harmony import */ var _Index_vue_vue_type_style_index_0_lang_css___WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./Index.vue?vue&type=style&index=0&lang=css& */ "./resources/js/components/Modules/Scholar/View/Prospectus/Index.vue?vue&type=style&index=0&lang=css&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! !../../../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");



;


/* normalize component */

var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_3__["default"])(
  _Index_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _Index_vue_vue_type_template_id_23d60c4b___WEBPACK_IMPORTED_MODULE_0__.render,
  _Index_vue_vue_type_template_id_23d60c4b___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/Modules/Scholar/View/Prospectus/Index.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/components/Modules/Scholar/View/Prospectus/Index.vue?vue&type=script&lang=js&":
/*!****************************************************************************************************!*\
  !*** ./resources/js/components/Modules/Scholar/View/Prospectus/Index.vue?vue&type=script&lang=js& ***!
  \****************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Index_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./Index.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Modules/Scholar/View/Prospectus/Index.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Index_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/Modules/Scholar/View/Prospectus/Index.vue?vue&type=style&index=0&lang=css&":
/*!************************************************************************************************************!*\
  !*** ./resources/js/components/Modules/Scholar/View/Prospectus/Index.vue?vue&type=style&index=0&lang=css& ***!
  \************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_style_loader_dist_cjs_js_node_modules_css_loader_dist_cjs_js_clonedRuleSet_11_0_rules_0_use_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_dist_cjs_js_clonedRuleSet_11_0_rules_0_use_2_node_modules_vue_loader_lib_index_js_vue_loader_options_Index_vue_vue_type_style_index_0_lang_css___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../../node_modules/style-loader/dist/cjs.js!../../../../../../../node_modules/css-loader/dist/cjs.js??clonedRuleSet-11[0].rules[0].use[1]!../../../../../../../node_modules/vue-loader/lib/loaders/stylePostLoader.js!../../../../../../../node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-11[0].rules[0].use[2]!../../../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./Index.vue?vue&type=style&index=0&lang=css& */ "./node_modules/style-loader/dist/cjs.js!./node_modules/css-loader/dist/cjs.js??clonedRuleSet-11[0].rules[0].use[1]!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-11[0].rules[0].use[2]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Modules/Scholar/View/Prospectus/Index.vue?vue&type=style&index=0&lang=css&");


/***/ }),

/***/ "./resources/js/components/Modules/Scholar/View/Prospectus/Index.vue?vue&type=template&id=23d60c4b&":
/*!**********************************************************************************************************!*\
  !*** ./resources/js/components/Modules/Scholar/View/Prospectus/Index.vue?vue&type=template&id=23d60c4b& ***!
  \**********************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Index_vue_vue_type_template_id_23d60c4b___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Index_vue_vue_type_template_id_23d60c4b___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Index_vue_vue_type_template_id_23d60c4b___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./Index.vue?vue&type=template&id=23d60c4b& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Modules/Scholar/View/Prospectus/Index.vue?vue&type=template&id=23d60c4b&");


/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Modules/Scholar/View/Prospectus/Index.vue?vue&type=template&id=23d60c4b&":
/*!*************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Modules/Scholar/View/Prospectus/Index.vue?vue&type=template&id=23d60c4b& ***!
  \*************************************************************************************************************************************************************************************************************************************************/
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
      _c(
        "b-tabs",
        {
          model: {
            value: _vm.tabIndex,
            callback: function ($$v) {
              _vm.tabIndex = $$v
            },
            expression: "tabIndex",
          },
        },
        _vm._l(_vm.semesters, function (semester, index) {
          return _c("b-tab", { key: index }, [
            _c(
              "div",
              { staticClass: "table-responsive" },
              [
                _c("table", { staticClass: "table table-bordered mb-0" }, [
                  _c("thead", [
                    _c(
                      "tr",
                      {
                        staticClass:
                          "text-center text-primary font-weight-bold font-size-12",
                      },
                      [
                        _c("th", { attrs: { colspan: "2" } }, [
                          _c(
                            "a",
                            {
                              staticClass: "bx-tada float-start",
                              on: {
                                click: function ($event) {
                                  return _vm.nxt("back")
                                },
                              },
                            },
                            [_c("i", { staticClass: "bx bx-chevrons-left" })]
                          ),
                          _vm._v(
                            "\r\n                                " +
                              _vm._s(semester.year_level.toUpperCase()) +
                              "\r\n                                "
                          ),
                          _c(
                            "a",
                            {
                              staticClass: "bx-tada float-end",
                              on: {
                                click: function ($event) {
                                  return _vm.nxt("next")
                                },
                              },
                            },
                            [_c("i", { staticClass: "bx bx-chevrons-right" })]
                          ),
                        ]),
                      ]
                    ),
                  ]),
                ]),
                _vm._v(" "),
                _c(
                  "b-tabs",
                  {
                    model: {
                      value: _vm.tabIndex2,
                      callback: function ($$v) {
                        _vm.tabIndex2 = $$v
                      },
                      expression: "tabIndex2",
                    },
                  },
                  _vm._l(semester.semesters, function (s, index2) {
                    return _c(
                      "b-tab",
                      { key: index2 },
                      [
                        _c(
                          "table",
                          { staticClass: "table table-bordered mb-0" },
                          [
                            _c("thead", [
                              _c(
                                "tr",
                                {
                                  staticClass:
                                    "text-center text-danger font-weight-bold font-size-12",
                                },
                                [
                                  _c("th", { attrs: { colspan: "4" } }, [
                                    _c(
                                      "a",
                                      {
                                        staticClass: "bx-tada float-start",
                                        on: {
                                          click: function ($event) {
                                            _vm.tabIndex2--
                                          },
                                        },
                                      },
                                      [
                                        _c("i", {
                                          staticClass: "bx bx-chevrons-left",
                                        }),
                                      ]
                                    ),
                                    _vm._v(" "),
                                    _c("span", { staticClass: "mt-2" }, [
                                      _vm._v(
                                        _vm._s(s.semester.toUpperCase()) + " "
                                      ),
                                    ]),
                                    _vm._v(" "),
                                    _c(
                                      "a",
                                      {
                                        staticClass: "bx-tada float-end",
                                        on: {
                                          click: function ($event) {
                                            _vm.tabIndex2++
                                          },
                                        },
                                      },
                                      [
                                        _c("i", {
                                          staticClass: "bx bx-chevrons-right",
                                        }),
                                      ]
                                    ),
                                  ]),
                                ]
                              ),
                              _vm._v(" "),
                              _c(
                                "tr",
                                {
                                  staticClass:
                                    "text-center text-muted font-size-11",
                                },
                                [
                                  _c("th", { staticStyle: { width: "15%" } }, [
                                    _vm._v("Code"),
                                  ]),
                                  _vm._v(" "),
                                  _c("th", { staticStyle: { width: "65%" } }, [
                                    _vm._v("Subject"),
                                  ]),
                                  _vm._v(" "),
                                  _c("th", { staticStyle: { width: "10%" } }, [
                                    _vm._v("Unit"),
                                  ]),
                                  _vm._v(" "),
                                  _c("th", { staticStyle: { width: "10%" } }, [
                                    _vm._v("Grade"),
                                  ]),
                                ]
                              ),
                            ]),
                          ]
                        ),
                        _vm._v(" "),
                        _c(
                          "simplebar",
                          { style: { "max-height": _vm.height - 210 + "px" } },
                          [
                            _c(
                              "table",
                              { staticClass: "table table-bordered mb-0" },
                              [
                                _c(
                                  "tbody",
                                  { staticClass: "font-size-12" },
                                  _vm._l(s.courses, function (course, index3) {
                                    return _c("tr", { key: "a-" + index3 }, [
                                      _c(
                                        "td",
                                        {
                                          staticClass: "text-center",
                                          staticStyle: { width: "15%" },
                                        },
                                        [
                                          _vm._v(
                                            _vm._s(course.code.toUpperCase())
                                          ),
                                        ]
                                      ),
                                      _vm._v(" "),
                                      _c(
                                        "td",
                                        {
                                          staticClass: "text-center",
                                          staticStyle: { width: "65%" },
                                        },
                                        [_vm._v(_vm._s(course.subject))]
                                      ),
                                      _vm._v(" "),
                                      _c(
                                        "td",
                                        {
                                          staticClass: "text-center",
                                          staticStyle: { width: "10%" },
                                        },
                                        [_vm._v(_vm._s(course.unit))]
                                      ),
                                      _vm._v(" "),
                                      _c(
                                        "td",
                                        {
                                          staticClass:
                                            "text-center fw-bold text-success",
                                          staticStyle: { width: "10%" },
                                        },
                                        [_vm._v(_vm._s(course.grade))]
                                      ),
                                    ])
                                  }),
                                  0
                                ),
                              ]
                            ),
                          ]
                        ),
                        _vm._v(" "),
                        _c(
                          "table",
                          { staticClass: "table table-bordered mb-0" },
                          [
                            _c("tbody", [
                              _c(
                                "tr",
                                { staticClass: "text-center font-size-12" },
                                [
                                  _c("td", { staticStyle: { width: "80%" } }),
                                  _vm._v(" "),
                                  _c(
                                    "td",
                                    {
                                      staticClass: " fw-bold",
                                      staticStyle: { width: "10%" },
                                    },
                                    [_vm._v(_vm._s(_vm.totalUnits(s.courses)))]
                                  ),
                                  _vm._v(" "),
                                  _c(
                                    "td",
                                    {
                                      staticClass: " fw-bold text-primary",
                                      staticStyle: { width: "10%" },
                                    },
                                    [_vm._v(_vm._s(_vm.totalGrade(s.courses)))]
                                  ),
                                ]
                              ),
                            ]),
                          ]
                        ),
                      ],
                      1
                    )
                  }),
                  1
                ),
              ],
              1
            ),
          ])
        }),
        1
      ),
    ],
    1
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ })

}]);