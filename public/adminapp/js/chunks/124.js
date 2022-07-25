(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[124],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/adminapp/js/cruds/UniversityRequests/Edit.vue?vue&type=script&lang=js&":
/*!**************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/adminapp/js/cruds/UniversityRequests/Edit.vue?vue&type=script&lang=js& ***!
  \**************************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var vuex__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! vuex */ "./node_modules/vuex/dist/vuex.esm.js");
function ownKeys(object, enumerableOnly) { var keys = Object.keys(object); if (Object.getOwnPropertySymbols) { var symbols = Object.getOwnPropertySymbols(object); enumerableOnly && (symbols = symbols.filter(function (sym) { return Object.getOwnPropertyDescriptor(object, sym).enumerable; })), keys.push.apply(keys, symbols); } return keys; }

function _objectSpread(target) { for (var i = 1; i < arguments.length; i++) { var source = null != arguments[i] ? arguments[i] : {}; i % 2 ? ownKeys(Object(source), !0).forEach(function (key) { _defineProperty(target, key, source[key]); }) : Object.getOwnPropertyDescriptors ? Object.defineProperties(target, Object.getOwnPropertyDescriptors(source)) : ownKeys(Object(source)).forEach(function (key) { Object.defineProperty(target, key, Object.getOwnPropertyDescriptor(source, key)); }); } return target; }

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }

//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
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
      status: '',
      activeField: ''
    };
  },
  computed: _objectSpread({}, Object(vuex__WEBPACK_IMPORTED_MODULE_0__["mapGetters"])('UniversityRequestsSingle', ['entry', 'loading', 'lists'])),
  beforeDestroy: function beforeDestroy() {
    this.resetState();
  },
  watch: {
    '$route.params.id': {
      immediate: true,
      handler: function handler() {
        this.resetState();
        this.fetchEditData(this.$route.params.id);
      }
    }
  },
  methods: _objectSpread(_objectSpread({}, Object(vuex__WEBPACK_IMPORTED_MODULE_0__["mapActions"])('UniversityRequestsSingle', ['fetchEditData', 'updateData', 'resetState', 'setStudentFirstName', 'setStudentLastName', 'setGendre', 'setNationality', 'setLevelOfStudy', 'setEmail', 'setPhone', 'setCountry', 'setPostCode', 'setState', 'setCity', 'setAddress1', 'setAddress2', 'setSpecialNeeds', 'setComments', 'setPreferredIntake', 'setUniversityDegree', 'setUniversityCollege', 'setSecondarySchool', 'setEnglishProficiency', 'setCurrentAddress', 'setDateOfBirth', 'setSubject', 'setUniversity'])), {}, {
    updateStudentFirstName: function updateStudentFirstName(e) {
      this.setStudentFirstName(e.target.value);
    },
    updateStudentLastName: function updateStudentLastName(e) {
      this.setStudentLastName(e.target.value);
    },
    updateGendre: function updateGendre(value) {
      this.setGendre(value);
    },
    updateNationality: function updateNationality(value) {
      this.setNationality(value);
    },
    updateLevelOfStudy: function updateLevelOfStudy(value) {
      this.setLevelOfStudy(value);
    },
    updateEmail: function updateEmail(e) {
      this.setEmail(e.target.value);
    },
    updatePhone: function updatePhone(e) {
      this.setPhone(e.target.value);
    },
    updateCountry: function updateCountry(e) {
      this.setCountry(e.target.value);
    },
    updatePostCode: function updatePostCode(e) {
      this.setPostCode(e.target.value);
    },
    updateState: function updateState(e) {
      this.setState(e.target.value);
    },
    updateCity: function updateCity(e) {
      this.setCity(e.target.value);
    },
    updateAddress1: function updateAddress1(e) {
      this.setAddress1(e.target.value);
    },
    updateAddress2: function updateAddress2(e) {
      this.setAddress2(e.target.value);
    },
    updateSpecialNeeds: function updateSpecialNeeds(e) {
      this.setSpecialNeeds(e.target.value);
    },
    updateComments: function updateComments(e) {
      this.setComments(e.target.value);
    },
    updatePreferredIntake: function updatePreferredIntake(e) {
      this.setPreferredIntake(e.target.value);
    },
    updateUniversityDegree: function updateUniversityDegree(e) {
      this.setUniversityDegree(e.target.value);
    },
    updateUniversityCollege: function updateUniversityCollege(e) {
      this.setUniversityCollege(e.target.value);
    },
    updateSecondarySchool: function updateSecondarySchool(e) {
      this.setSecondarySchool(e.target.value);
    },
    updateEnglishProficiency: function updateEnglishProficiency(e) {
      this.setEnglishProficiency(e.target.value);
    },
    updateCurrentAddress: function updateCurrentAddress(e) {
      this.setCurrentAddress(e.target.value);
    },
    updateDateOfBirth: function updateDateOfBirth(e) {
      this.setDateOfBirth(e.target.value);
    },
    updateSubject: function updateSubject(value) {
      this.setSubject(value);
    },
    updateUniversity: function updateUniversity(value) {
      this.setUniversity(value);
    },
    submitForm: function submitForm() {
      var _this = this;

      this.updateData().then(function () {
        _this.$router.push({
          name: 'university_requests.index'
        });

        _this.$eventHub.$emit('update-success');
      })["catch"](function (error) {
        _this.status = 'failed';

        _.delay(function () {
          _this.status = '';
        }, 3000);
      });
    },
    focusField: function focusField(name) {
      this.activeField = name;
    },
    clearFocus: function clearFocus() {
      this.activeField = '';
    }
  })
});

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/adminapp/js/cruds/UniversityRequests/Edit.vue?vue&type=template&id=3b06c8c8&":
/*!******************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/adminapp/js/cruds/UniversityRequests/Edit.vue?vue&type=template&id=3b06c8c8& ***!
  \******************************************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function() { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return staticRenderFns; });
var render = function () {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", { staticClass: "container-fluid" }, [
    _c(
      "form",
      {
        on: {
          submit: function ($event) {
            $event.preventDefault()
            return _vm.submitForm.apply(null, arguments)
          },
        },
      },
      [
        _c("div", { staticClass: "row" }, [
          _c("div", { staticClass: "col-md-12" }, [
            _c("div", { staticClass: "card" }, [
              _c(
                "div",
                {
                  staticClass:
                    "card-header card-header-primary card-header-icon",
                },
                [
                  _vm._m(0),
                  _vm._v(" "),
                  _c("h4", { staticClass: "card-title" }, [
                    _vm._v(
                      "\n              " +
                        _vm._s(_vm.$t("global.edit")) +
                        "\n              "
                    ),
                    _c("strong", [
                      _vm._v(
                        _vm._s(_vm.$t("cruds.universityRequest.title_singular"))
                      ),
                    ]),
                  ]),
                ]
              ),
              _vm._v(" "),
              _c("div", { staticClass: "card-body" }, [_c("back-button")], 1),
              _vm._v(" "),
              _c(
                "div",
                { staticClass: "card-body" },
                [
                  _c("bootstrap-alert"),
                  _vm._v(" "),
                  _c("div", { staticClass: "row" }, [
                    _c("div", { staticClass: "col-md-12" }, [
                      _c("div", { staticClass: "form-group" }, [
                        _c("label", [
                          _vm._v(
                            _vm._s(
                              _vm.$t(
                                "cruds.universityRequest.fields.student_first_name"
                              )
                            )
                          ),
                        ]),
                        _vm._v(" "),
                        _c(
                          "div",
                          {
                            staticClass: "form-group bmd-form-group",
                            class: {
                              "has-items": _vm.entry.student_first_name,
                              "is-focused":
                                _vm.activeField == "student_first_name",
                            },
                          },
                          [
                            _c("label", { staticClass: "bmd-label-floating" }, [
                              _vm._v(
                                _vm._s(
                                  _vm.$t(
                                    "cruds.universityRequest.fields.student_first_name_helper"
                                  )
                                )
                              ),
                            ]),
                            _vm._v(" "),
                            _c("input", {
                              staticClass: "form-control",
                              attrs: { type: "text" },
                              domProps: { value: _vm.entry.student_first_name },
                              on: {
                                input: _vm.updateStudentFirstName,
                                focus: function ($event) {
                                  return _vm.focusField("student_first_name")
                                },
                                blur: _vm.clearFocus,
                              },
                            }),
                          ]
                        ),
                      ]),
                      _vm._v(" "),
                      _c("div", { staticClass: "form-group" }, [
                        _c("label", [
                          _vm._v(
                            _vm._s(
                              _vm.$t(
                                "cruds.universityRequest.fields.student_last_name"
                              )
                            )
                          ),
                        ]),
                        _vm._v(" "),
                        _c(
                          "div",
                          {
                            staticClass: "form-group bmd-form-group",
                            class: {
                              "has-items": _vm.entry.student_last_name,
                              "is-focused":
                                _vm.activeField == "student_last_name",
                            },
                          },
                          [
                            _c("label", { staticClass: "bmd-label-floating" }, [
                              _vm._v(
                                _vm._s(
                                  _vm.$t(
                                    "cruds.universityRequest.fields.student_last_name_helper"
                                  )
                                )
                              ),
                            ]),
                            _vm._v(" "),
                            _c("input", {
                              staticClass: "form-control",
                              attrs: { type: "text" },
                              domProps: { value: _vm.entry.student_last_name },
                              on: {
                                input: _vm.updateStudentLastName,
                                focus: function ($event) {
                                  return _vm.focusField("student_last_name")
                                },
                                blur: _vm.clearFocus,
                              },
                            }),
                          ]
                        ),
                      ]),
                      _vm._v(" "),
                      _c(
                        "div",
                        { staticClass: "form-group" },
                        [
                          _c("label", [
                            _vm._v(
                              _vm._s(
                                _vm.$t("cruds.universityRequest.fields.gendre")
                              )
                            ),
                          ]),
                          _vm._v(" "),
                          _c("v-radio", {
                            attrs: {
                              value: _vm.entry.gendre,
                              options: _vm.lists.gendre,
                            },
                            on: { change: _vm.updateGendre },
                          }),
                        ],
                        1
                      ),
                      _vm._v(" "),
                      _c(
                        "div",
                        {
                          staticClass: "form-group bmd-form-group",
                          class: {
                            "has-items": _vm.entry.nationality,
                            "is-focused": _vm.activeField == "nationality",
                          },
                        },
                        [
                          _c("label", { staticClass: "bmd-label-floating" }, [
                            _vm._v(
                              _vm._s(
                                _vm.$t(
                                  "cruds.universityRequest.fields.nationality"
                                )
                              )
                            ),
                          ]),
                          _vm._v(" "),
                          _c("v-select", {
                            key: "nationality-field",
                            attrs: {
                              name: "nationality",
                              value: _vm.entry.nationality,
                              options: _vm.lists.nationality,
                              reduce: function (entry) {
                                return entry.value
                              },
                            },
                            on: {
                              input: _vm.updateNationality,
                              search: [
                                function ($event) {
                                  if (
                                    !$event.type.indexOf("key") &&
                                    _vm._k(
                                      $event.keyCode,
                                      "focus",
                                      undefined,
                                      $event.key,
                                      undefined
                                    )
                                  ) {
                                    return null
                                  }
                                  return _vm.focusField("nationality")
                                },
                                function ($event) {
                                  if (
                                    !$event.type.indexOf("key") &&
                                    _vm._k(
                                      $event.keyCode,
                                      "blur",
                                      undefined,
                                      $event.key,
                                      undefined
                                    )
                                  ) {
                                    return null
                                  }
                                  return _vm.clearFocus.apply(null, arguments)
                                },
                              ],
                            },
                          }),
                        ],
                        1
                      ),
                      _vm._v(" "),
                      _c(
                        "div",
                        {
                          staticClass: "form-group bmd-form-group",
                          class: {
                            "has-items": _vm.entry.level_of_study,
                            "is-focused": _vm.activeField == "level_of_study",
                          },
                        },
                        [
                          _c("label", { staticClass: "bmd-label-floating" }, [
                            _vm._v(
                              _vm._s(
                                _vm.$t(
                                  "cruds.universityRequest.fields.level_of_study"
                                )
                              )
                            ),
                          ]),
                          _vm._v(" "),
                          _c("v-select", {
                            key: "level_of_study-field",
                            attrs: {
                              name: "level_of_study",
                              value: _vm.entry.level_of_study,
                              options: _vm.lists.level_of_study,
                              reduce: function (entry) {
                                return entry.value
                              },
                            },
                            on: {
                              input: _vm.updateLevelOfStudy,
                              search: [
                                function ($event) {
                                  if (
                                    !$event.type.indexOf("key") &&
                                    _vm._k(
                                      $event.keyCode,
                                      "focus",
                                      undefined,
                                      $event.key,
                                      undefined
                                    )
                                  ) {
                                    return null
                                  }
                                  return _vm.focusField("level_of_study")
                                },
                                function ($event) {
                                  if (
                                    !$event.type.indexOf("key") &&
                                    _vm._k(
                                      $event.keyCode,
                                      "blur",
                                      undefined,
                                      $event.key,
                                      undefined
                                    )
                                  ) {
                                    return null
                                  }
                                  return _vm.clearFocus.apply(null, arguments)
                                },
                              ],
                            },
                          }),
                        ],
                        1
                      ),
                      _vm._v(" "),
                      _c(
                        "div",
                        {
                          staticClass: "form-group bmd-form-group",
                          class: {
                            "has-items": _vm.entry.email,
                            "is-focused": _vm.activeField == "email",
                          },
                        },
                        [
                          _c(
                            "label",
                            { staticClass: "bmd-label-floating required" },
                            [
                              _vm._v(
                                _vm._s(
                                  _vm.$t("cruds.universityRequest.fields.email")
                                )
                              ),
                            ]
                          ),
                          _vm._v(" "),
                          _c("input", {
                            staticClass: "form-control",
                            attrs: { type: "text", required: "" },
                            domProps: { value: _vm.entry.email },
                            on: {
                              input: _vm.updateEmail,
                              focus: function ($event) {
                                return _vm.focusField("email")
                              },
                              blur: _vm.clearFocus,
                            },
                          }),
                        ]
                      ),
                      _vm._v(" "),
                      _c(
                        "div",
                        {
                          staticClass: "form-group bmd-form-group",
                          class: {
                            "has-items": _vm.entry.phone,
                            "is-focused": _vm.activeField == "phone",
                          },
                        },
                        [
                          _c("label", { staticClass: "bmd-label-floating" }, [
                            _vm._v(
                              _vm._s(
                                _vm.$t("cruds.universityRequest.fields.phone")
                              )
                            ),
                          ]),
                          _vm._v(" "),
                          _c("input", {
                            staticClass: "form-control",
                            attrs: { type: "text" },
                            domProps: { value: _vm.entry.phone },
                            on: {
                              input: _vm.updatePhone,
                              focus: function ($event) {
                                return _vm.focusField("phone")
                              },
                              blur: _vm.clearFocus,
                            },
                          }),
                        ]
                      ),
                      _vm._v(" "),
                      _c(
                        "div",
                        {
                          staticClass: "form-group bmd-form-group",
                          class: {
                            "has-items": _vm.entry.country,
                            "is-focused": _vm.activeField == "country",
                          },
                        },
                        [
                          _c(
                            "label",
                            { staticClass: "bmd-label-floating required" },
                            [
                              _vm._v(
                                _vm._s(
                                  _vm.$t(
                                    "cruds.universityRequest.fields.country"
                                  )
                                )
                              ),
                            ]
                          ),
                          _vm._v(" "),
                          _c("input", {
                            staticClass: "form-control",
                            attrs: { type: "text", required: "" },
                            domProps: { value: _vm.entry.country },
                            on: {
                              input: _vm.updateCountry,
                              focus: function ($event) {
                                return _vm.focusField("country")
                              },
                              blur: _vm.clearFocus,
                            },
                          }),
                        ]
                      ),
                      _vm._v(" "),
                      _c(
                        "div",
                        {
                          staticClass: "form-group bmd-form-group",
                          class: {
                            "has-items": _vm.entry.post_code,
                            "is-focused": _vm.activeField == "post_code",
                          },
                        },
                        [
                          _c(
                            "label",
                            { staticClass: "bmd-label-floating required" },
                            [
                              _vm._v(
                                _vm._s(
                                  _vm.$t(
                                    "cruds.universityRequest.fields.post_code"
                                  )
                                )
                              ),
                            ]
                          ),
                          _vm._v(" "),
                          _c("input", {
                            staticClass: "form-control",
                            attrs: { type: "text", required: "" },
                            domProps: { value: _vm.entry.post_code },
                            on: {
                              input: _vm.updatePostCode,
                              focus: function ($event) {
                                return _vm.focusField("post_code")
                              },
                              blur: _vm.clearFocus,
                            },
                          }),
                        ]
                      ),
                      _vm._v(" "),
                      _c(
                        "div",
                        {
                          staticClass: "form-group bmd-form-group",
                          class: {
                            "has-items": _vm.entry.state,
                            "is-focused": _vm.activeField == "state",
                          },
                        },
                        [
                          _c("label", { staticClass: "bmd-label-floating" }, [
                            _vm._v(
                              _vm._s(
                                _vm.$t("cruds.universityRequest.fields.state")
                              )
                            ),
                          ]),
                          _vm._v(" "),
                          _c("input", {
                            staticClass: "form-control",
                            attrs: { type: "text" },
                            domProps: { value: _vm.entry.state },
                            on: {
                              input: _vm.updateState,
                              focus: function ($event) {
                                return _vm.focusField("state")
                              },
                              blur: _vm.clearFocus,
                            },
                          }),
                        ]
                      ),
                      _vm._v(" "),
                      _c(
                        "div",
                        {
                          staticClass: "form-group bmd-form-group",
                          class: {
                            "has-items": _vm.entry.city,
                            "is-focused": _vm.activeField == "city",
                          },
                        },
                        [
                          _c("label", { staticClass: "bmd-label-floating" }, [
                            _vm._v(
                              _vm._s(
                                _vm.$t("cruds.universityRequest.fields.city")
                              )
                            ),
                          ]),
                          _vm._v(" "),
                          _c("input", {
                            staticClass: "form-control",
                            attrs: { type: "text" },
                            domProps: { value: _vm.entry.city },
                            on: {
                              input: _vm.updateCity,
                              focus: function ($event) {
                                return _vm.focusField("city")
                              },
                              blur: _vm.clearFocus,
                            },
                          }),
                        ]
                      ),
                      _vm._v(" "),
                      _c(
                        "div",
                        {
                          staticClass: "form-group bmd-form-group",
                          class: {
                            "has-items": _vm.entry.address_1,
                            "is-focused": _vm.activeField == "address_1",
                          },
                        },
                        [
                          _c("label", { staticClass: "bmd-label-floating" }, [
                            _vm._v(
                              _vm._s(
                                _vm.$t(
                                  "cruds.universityRequest.fields.address_1"
                                )
                              )
                            ),
                          ]),
                          _vm._v(" "),
                          _c("input", {
                            staticClass: "form-control",
                            attrs: { type: "text" },
                            domProps: { value: _vm.entry.address_1 },
                            on: {
                              input: _vm.updateAddress1,
                              focus: function ($event) {
                                return _vm.focusField("address_1")
                              },
                              blur: _vm.clearFocus,
                            },
                          }),
                        ]
                      ),
                      _vm._v(" "),
                      _c(
                        "div",
                        {
                          staticClass: "form-group bmd-form-group",
                          class: {
                            "has-items": _vm.entry.address_2,
                            "is-focused": _vm.activeField == "address_2",
                          },
                        },
                        [
                          _c("label", { staticClass: "bmd-label-floating" }, [
                            _vm._v(
                              _vm._s(
                                _vm.$t(
                                  "cruds.universityRequest.fields.address_2"
                                )
                              )
                            ),
                          ]),
                          _vm._v(" "),
                          _c("input", {
                            staticClass: "form-control",
                            attrs: { type: "text" },
                            domProps: { value: _vm.entry.address_2 },
                            on: {
                              input: _vm.updateAddress2,
                              focus: function ($event) {
                                return _vm.focusField("address_2")
                              },
                              blur: _vm.clearFocus,
                            },
                          }),
                        ]
                      ),
                      _vm._v(" "),
                      _c(
                        "div",
                        {
                          staticClass: "form-group bmd-form-group",
                          class: {
                            "has-items": _vm.entry.special_needs,
                            "is-focused": _vm.activeField == "special_needs",
                          },
                        },
                        [
                          _c("label", { staticClass: "bmd-label-floating" }, [
                            _vm._v(
                              _vm._s(
                                _vm.$t(
                                  "cruds.universityRequest.fields.special_needs"
                                )
                              )
                            ),
                          ]),
                          _vm._v(" "),
                          _c("input", {
                            staticClass: "form-control",
                            attrs: { type: "text" },
                            domProps: { value: _vm.entry.special_needs },
                            on: {
                              input: _vm.updateSpecialNeeds,
                              focus: function ($event) {
                                return _vm.focusField("special_needs")
                              },
                              blur: _vm.clearFocus,
                            },
                          }),
                        ]
                      ),
                      _vm._v(" "),
                      _c(
                        "div",
                        {
                          staticClass: "form-group bmd-form-group",
                          class: {
                            "has-items": _vm.entry.comments,
                            "is-focused": _vm.activeField == "comments",
                          },
                        },
                        [
                          _c("label", { staticClass: "bmd-label-floating" }, [
                            _vm._v(
                              _vm._s(
                                _vm.$t(
                                  "cruds.universityRequest.fields.comments"
                                )
                              )
                            ),
                          ]),
                          _vm._v(" "),
                          _c("input", {
                            staticClass: "form-control",
                            attrs: { type: "text" },
                            domProps: { value: _vm.entry.comments },
                            on: {
                              input: _vm.updateComments,
                              focus: function ($event) {
                                return _vm.focusField("comments")
                              },
                              blur: _vm.clearFocus,
                            },
                          }),
                        ]
                      ),
                      _vm._v(" "),
                      _c(
                        "div",
                        {
                          staticClass: "form-group bmd-form-group",
                          class: {
                            "has-items": _vm.entry.preferred_intake,
                            "is-focused": _vm.activeField == "preferred_intake",
                          },
                        },
                        [
                          _c(
                            "label",
                            { staticClass: "bmd-label-floating required" },
                            [
                              _vm._v(
                                _vm._s(
                                  _vm.$t(
                                    "cruds.universityRequest.fields.preferred_intake"
                                  )
                                )
                              ),
                            ]
                          ),
                          _vm._v(" "),
                          _c("input", {
                            staticClass: "form-control",
                            attrs: { type: "text", required: "" },
                            domProps: { value: _vm.entry.preferred_intake },
                            on: {
                              input: _vm.updatePreferredIntake,
                              focus: function ($event) {
                                return _vm.focusField("preferred_intake")
                              },
                              blur: _vm.clearFocus,
                            },
                          }),
                        ]
                      ),
                      _vm._v(" "),
                      _c(
                        "div",
                        {
                          staticClass: "form-group bmd-form-group",
                          class: {
                            "has-items": _vm.entry.university_degree,
                            "is-focused":
                              _vm.activeField == "university_degree",
                          },
                        },
                        [
                          _c("label", { staticClass: "bmd-label-floating" }, [
                            _vm._v(
                              _vm._s(
                                _vm.$t(
                                  "cruds.universityRequest.fields.university_degree"
                                )
                              )
                            ),
                          ]),
                          _vm._v(" "),
                          _c("input", {
                            staticClass: "form-control",
                            attrs: { type: "text" },
                            domProps: { value: _vm.entry.university_degree },
                            on: {
                              input: _vm.updateUniversityDegree,
                              focus: function ($event) {
                                return _vm.focusField("university_degree")
                              },
                              blur: _vm.clearFocus,
                            },
                          }),
                        ]
                      ),
                      _vm._v(" "),
                      _c(
                        "div",
                        {
                          staticClass: "form-group bmd-form-group",
                          class: {
                            "has-items": _vm.entry.university_college,
                            "is-focused":
                              _vm.activeField == "university_college",
                          },
                        },
                        [
                          _c("label", { staticClass: "bmd-label-floating" }, [
                            _vm._v(
                              _vm._s(
                                _vm.$t(
                                  "cruds.universityRequest.fields.university_college"
                                )
                              )
                            ),
                          ]),
                          _vm._v(" "),
                          _c("input", {
                            staticClass: "form-control",
                            attrs: { type: "text" },
                            domProps: { value: _vm.entry.university_college },
                            on: {
                              input: _vm.updateUniversityCollege,
                              focus: function ($event) {
                                return _vm.focusField("university_college")
                              },
                              blur: _vm.clearFocus,
                            },
                          }),
                        ]
                      ),
                      _vm._v(" "),
                      _c(
                        "div",
                        {
                          staticClass: "form-group bmd-form-group",
                          class: {
                            "has-items": _vm.entry.secondary_school,
                            "is-focused": _vm.activeField == "secondary_school",
                          },
                        },
                        [
                          _c("label", { staticClass: "bmd-label-floating" }, [
                            _vm._v(
                              _vm._s(
                                _vm.$t(
                                  "cruds.universityRequest.fields.secondary_school"
                                )
                              )
                            ),
                          ]),
                          _vm._v(" "),
                          _c("input", {
                            staticClass: "form-control",
                            attrs: { type: "text" },
                            domProps: { value: _vm.entry.secondary_school },
                            on: {
                              input: _vm.updateSecondarySchool,
                              focus: function ($event) {
                                return _vm.focusField("secondary_school")
                              },
                              blur: _vm.clearFocus,
                            },
                          }),
                        ]
                      ),
                      _vm._v(" "),
                      _c(
                        "div",
                        {
                          staticClass: "form-group bmd-form-group",
                          class: {
                            "has-items": _vm.entry.english_proficiency,
                            "is-focused":
                              _vm.activeField == "english_proficiency",
                          },
                        },
                        [
                          _c("label", { staticClass: "bmd-label-floating" }, [
                            _vm._v(
                              _vm._s(
                                _vm.$t(
                                  "cruds.universityRequest.fields.english_proficiency"
                                )
                              )
                            ),
                          ]),
                          _vm._v(" "),
                          _c("input", {
                            staticClass: "form-control",
                            attrs: { type: "text" },
                            domProps: { value: _vm.entry.english_proficiency },
                            on: {
                              input: _vm.updateEnglishProficiency,
                              focus: function ($event) {
                                return _vm.focusField("english_proficiency")
                              },
                              blur: _vm.clearFocus,
                            },
                          }),
                        ]
                      ),
                      _vm._v(" "),
                      _c(
                        "div",
                        {
                          staticClass: "form-group bmd-form-group",
                          class: {
                            "has-items": _vm.entry.current_address,
                            "is-focused": _vm.activeField == "current_address",
                          },
                        },
                        [
                          _c("label", { staticClass: "bmd-label-floating" }, [
                            _vm._v(
                              _vm._s(
                                _vm.$t(
                                  "cruds.universityRequest.fields.current_address"
                                )
                              )
                            ),
                          ]),
                          _vm._v(" "),
                          _c("input", {
                            staticClass: "form-control",
                            attrs: { type: "text" },
                            domProps: { value: _vm.entry.current_address },
                            on: {
                              input: _vm.updateCurrentAddress,
                              focus: function ($event) {
                                return _vm.focusField("current_address")
                              },
                              blur: _vm.clearFocus,
                            },
                          }),
                        ]
                      ),
                      _vm._v(" "),
                      _c(
                        "div",
                        {
                          staticClass: "form-group bmd-form-group",
                          class: {
                            "has-items": _vm.entry.date_of_birth,
                            "is-focused": _vm.activeField == "date_of_birth",
                          },
                        },
                        [
                          _c("label", { staticClass: "bmd-label-floating" }, [
                            _vm._v(
                              _vm._s(
                                _vm.$t(
                                  "cruds.universityRequest.fields.date_of_birth"
                                )
                              )
                            ),
                          ]),
                          _vm._v(" "),
                          _c("datetime-picker", {
                            staticClass: "form-control",
                            attrs: {
                              type: "text",
                              picker: "date",
                              value: _vm.entry.date_of_birth,
                            },
                            on: {
                              input: _vm.updateDateOfBirth,
                              focus: function ($event) {
                                return _vm.focusField("date_of_birth")
                              },
                              blur: _vm.clearFocus,
                            },
                          }),
                        ],
                        1
                      ),
                      _vm._v(" "),
                      _c(
                        "div",
                        {
                          staticClass: "form-group bmd-form-group",
                          class: {
                            "has-items": _vm.entry.subject_id !== null,
                            "is-focused": _vm.activeField == "subject",
                          },
                        },
                        [
                          _c("label", { staticClass: "bmd-label-floating" }, [
                            _vm._v(
                              _vm._s(
                                _vm.$t("cruds.universityRequest.fields.subject")
                              )
                            ),
                          ]),
                          _vm._v(" "),
                          _c("v-select", {
                            key: "subject-field",
                            attrs: {
                              name: "subject",
                              label: "name",
                              value: _vm.entry.subject_id,
                              options: _vm.lists.subject,
                              reduce: function (entry) {
                                return entry.id
                              },
                            },
                            on: {
                              input: _vm.updateSubject,
                              search: [
                                function ($event) {
                                  if (
                                    !$event.type.indexOf("key") &&
                                    _vm._k(
                                      $event.keyCode,
                                      "focus",
                                      undefined,
                                      $event.key,
                                      undefined
                                    )
                                  ) {
                                    return null
                                  }
                                  return _vm.focusField("subject")
                                },
                                function ($event) {
                                  if (
                                    !$event.type.indexOf("key") &&
                                    _vm._k(
                                      $event.keyCode,
                                      "blur",
                                      undefined,
                                      $event.key,
                                      undefined
                                    )
                                  ) {
                                    return null
                                  }
                                  return _vm.clearFocus.apply(null, arguments)
                                },
                              ],
                            },
                          }),
                        ],
                        1
                      ),
                      _vm._v(" "),
                      _c(
                        "div",
                        {
                          staticClass: "form-group bmd-form-group",
                          class: {
                            "has-items": _vm.entry.university_id !== null,
                            "is-focused": _vm.activeField == "university",
                          },
                        },
                        [
                          _c("label", { staticClass: "bmd-label-floating" }, [
                            _vm._v(
                              _vm._s(
                                _vm.$t(
                                  "cruds.universityRequest.fields.university"
                                )
                              )
                            ),
                          ]),
                          _vm._v(" "),
                          _c("v-select", {
                            key: "university-field",
                            attrs: {
                              name: "university",
                              label: "name",
                              value: _vm.entry.university_id,
                              options: _vm.lists.university,
                              reduce: function (entry) {
                                return entry.id
                              },
                            },
                            on: {
                              input: _vm.updateUniversity,
                              search: [
                                function ($event) {
                                  if (
                                    !$event.type.indexOf("key") &&
                                    _vm._k(
                                      $event.keyCode,
                                      "focus",
                                      undefined,
                                      $event.key,
                                      undefined
                                    )
                                  ) {
                                    return null
                                  }
                                  return _vm.focusField("university")
                                },
                                function ($event) {
                                  if (
                                    !$event.type.indexOf("key") &&
                                    _vm._k(
                                      $event.keyCode,
                                      "blur",
                                      undefined,
                                      $event.key,
                                      undefined
                                    )
                                  ) {
                                    return null
                                  }
                                  return _vm.clearFocus.apply(null, arguments)
                                },
                              ],
                            },
                          }),
                        ],
                        1
                      ),
                    ]),
                  ]),
                ],
                1
              ),
              _vm._v(" "),
              _c(
                "div",
                { staticClass: "card-footer" },
                [
                  _c(
                    "vue-button-spinner",
                    {
                      staticClass: "btn-primary",
                      attrs: {
                        status: _vm.status,
                        isLoading: _vm.loading,
                        disabled: _vm.loading,
                      },
                    },
                    [
                      _vm._v(
                        "\n              " +
                          _vm._s(_vm.$t("global.save")) +
                          "\n            "
                      ),
                    ]
                  ),
                ],
                1
              ),
            ]),
          ]),
        ]),
      ]
    ),
  ])
}
var staticRenderFns = [
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "card-icon" }, [
      _c("i", { staticClass: "material-icons" }, [_vm._v("edit")]),
    ])
  },
]
render._withStripped = true



/***/ }),

/***/ "./resources/adminapp/js/cruds/UniversityRequests/Edit.vue":
/*!*****************************************************************!*\
  !*** ./resources/adminapp/js/cruds/UniversityRequests/Edit.vue ***!
  \*****************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _Edit_vue_vue_type_template_id_3b06c8c8___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Edit.vue?vue&type=template&id=3b06c8c8& */ "./resources/adminapp/js/cruds/UniversityRequests/Edit.vue?vue&type=template&id=3b06c8c8&");
/* harmony import */ var _Edit_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Edit.vue?vue&type=script&lang=js& */ "./resources/adminapp/js/cruds/UniversityRequests/Edit.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _Edit_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _Edit_vue_vue_type_template_id_3b06c8c8___WEBPACK_IMPORTED_MODULE_0__["render"],
  _Edit_vue_vue_type_template_id_3b06c8c8___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/adminapp/js/cruds/UniversityRequests/Edit.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/adminapp/js/cruds/UniversityRequests/Edit.vue?vue&type=script&lang=js&":
/*!******************************************************************************************!*\
  !*** ./resources/adminapp/js/cruds/UniversityRequests/Edit.vue?vue&type=script&lang=js& ***!
  \******************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Edit_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/babel-loader/lib??ref--4-0!../../../../../node_modules/vue-loader/lib??vue-loader-options!./Edit.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/adminapp/js/cruds/UniversityRequests/Edit.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Edit_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/adminapp/js/cruds/UniversityRequests/Edit.vue?vue&type=template&id=3b06c8c8&":
/*!************************************************************************************************!*\
  !*** ./resources/adminapp/js/cruds/UniversityRequests/Edit.vue?vue&type=template&id=3b06c8c8& ***!
  \************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Edit_vue_vue_type_template_id_3b06c8c8___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../node_modules/vue-loader/lib??vue-loader-options!./Edit.vue?vue&type=template&id=3b06c8c8& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/adminapp/js/cruds/UniversityRequests/Edit.vue?vue&type=template&id=3b06c8c8&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Edit_vue_vue_type_template_id_3b06c8c8___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Edit_vue_vue_type_template_id_3b06c8c8___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ })

}]);