(self["webpackChunk"] = self["webpackChunk"] || []).push([["assets_controllers_sandbox_api_grid_controller_js"],{

/***/ "./assets/controllers/sandbox_api_grid_controller.js":
/*!***********************************************************!*\
  !*** ./assets/controllers/sandbox_api_grid_controller.js ***!
  \***********************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ _default)
/* harmony export */ });
/* harmony import */ var core_js_modules_es_array_map_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/es.array.map.js */ "./node_modules/core-js/modules/es.array.map.js");
/* harmony import */ var core_js_modules_es_array_map_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_map_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_es_function_name_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/es.function.name.js */ "./node_modules/core-js/modules/es.function.name.js");
/* harmony import */ var core_js_modules_es_function_name_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_function_name_js__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var core_js_modules_es_array_filter_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! core-js/modules/es.array.filter.js */ "./node_modules/core-js/modules/es.array.filter.js");
/* harmony import */ var core_js_modules_es_array_filter_js__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_filter_js__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var core_js_modules_es_array_for_each_js__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! core-js/modules/es.array.for-each.js */ "./node_modules/core-js/modules/es.array.for-each.js");
/* harmony import */ var core_js_modules_es_array_for_each_js__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_for_each_js__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var core_js_modules_web_dom_collections_for_each_js__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! core-js/modules/web.dom-collections.for-each.js */ "./node_modules/core-js/modules/web.dom-collections.for-each.js");
/* harmony import */ var core_js_modules_web_dom_collections_for_each_js__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_dom_collections_for_each_js__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var core_js_modules_es_array_join_js__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! core-js/modules/es.array.join.js */ "./node_modules/core-js/modules/es.array.join.js");
/* harmony import */ var core_js_modules_es_array_join_js__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_join_js__WEBPACK_IMPORTED_MODULE_6__);
/* harmony import */ var core_js_modules_es_object_assign_js__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! core-js/modules/es.object.assign.js */ "./node_modules/core-js/modules/es.object.assign.js");
/* harmony import */ var core_js_modules_es_object_assign_js__WEBPACK_IMPORTED_MODULE_7___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_assign_js__WEBPACK_IMPORTED_MODULE_7__);
/* harmony import */ var core_js_modules_es_regexp_exec_js__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! core-js/modules/es.regexp.exec.js */ "./node_modules/core-js/modules/es.regexp.exec.js");
/* harmony import */ var core_js_modules_es_regexp_exec_js__WEBPACK_IMPORTED_MODULE_8___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_regexp_exec_js__WEBPACK_IMPORTED_MODULE_8__);
/* harmony import */ var core_js_modules_es_string_search_js__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! core-js/modules/es.string.search.js */ "./node_modules/core-js/modules/es.string.search.js");
/* harmony import */ var core_js_modules_es_string_search_js__WEBPACK_IMPORTED_MODULE_9___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_string_search_js__WEBPACK_IMPORTED_MODULE_9__);
/* harmony import */ var core_js_modules_es_array_concat_js__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! core-js/modules/es.array.concat.js */ "./node_modules/core-js/modules/es.array.concat.js");
/* harmony import */ var core_js_modules_es_array_concat_js__WEBPACK_IMPORTED_MODULE_10___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_concat_js__WEBPACK_IMPORTED_MODULE_10__);
/* harmony import */ var core_js_modules_es_array_includes_js__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! core-js/modules/es.array.includes.js */ "./node_modules/core-js/modules/es.array.includes.js");
/* harmony import */ var core_js_modules_es_array_includes_js__WEBPACK_IMPORTED_MODULE_11___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_includes_js__WEBPACK_IMPORTED_MODULE_11__);
/* harmony import */ var core_js_modules_es_string_includes_js__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! core-js/modules/es.string.includes.js */ "./node_modules/core-js/modules/es.string.includes.js");
/* harmony import */ var core_js_modules_es_string_includes_js__WEBPACK_IMPORTED_MODULE_12___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_string_includes_js__WEBPACK_IMPORTED_MODULE_12__);
/* harmony import */ var core_js_modules_es_object_entries_js__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! core-js/modules/es.object.entries.js */ "./node_modules/core-js/modules/es.object.entries.js");
/* harmony import */ var core_js_modules_es_object_entries_js__WEBPACK_IMPORTED_MODULE_13___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_entries_js__WEBPACK_IMPORTED_MODULE_13__);
/* harmony import */ var core_js_modules_es_object_values_js__WEBPACK_IMPORTED_MODULE_14__ = __webpack_require__(/*! core-js/modules/es.object.values.js */ "./node_modules/core-js/modules/es.object.values.js");
/* harmony import */ var core_js_modules_es_object_values_js__WEBPACK_IMPORTED_MODULE_14___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_values_js__WEBPACK_IMPORTED_MODULE_14__);
/* harmony import */ var core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_15__ = __webpack_require__(/*! core-js/modules/es.object.define-property.js */ "./node_modules/core-js/modules/es.object.define-property.js");
/* harmony import */ var core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_15___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_15__);
/* harmony import */ var core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_16__ = __webpack_require__(/*! core-js/modules/es.object.set-prototype-of.js */ "./node_modules/core-js/modules/es.object.set-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_16___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_16__);
/* harmony import */ var core_js_modules_es_function_bind_js__WEBPACK_IMPORTED_MODULE_17__ = __webpack_require__(/*! core-js/modules/es.function.bind.js */ "./node_modules/core-js/modules/es.function.bind.js");
/* harmony import */ var core_js_modules_es_function_bind_js__WEBPACK_IMPORTED_MODULE_17___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_function_bind_js__WEBPACK_IMPORTED_MODULE_17__);
/* harmony import */ var core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_18__ = __webpack_require__(/*! core-js/modules/es.object.get-prototype-of.js */ "./node_modules/core-js/modules/es.object.get-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_18___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_18__);
/* harmony import */ var core_js_modules_es_reflect_construct_js__WEBPACK_IMPORTED_MODULE_19__ = __webpack_require__(/*! core-js/modules/es.reflect.construct.js */ "./node_modules/core-js/modules/es.reflect.construct.js");
/* harmony import */ var core_js_modules_es_reflect_construct_js__WEBPACK_IMPORTED_MODULE_19___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_reflect_construct_js__WEBPACK_IMPORTED_MODULE_19__);
/* harmony import */ var core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_20__ = __webpack_require__(/*! core-js/modules/es.object.create.js */ "./node_modules/core-js/modules/es.object.create.js");
/* harmony import */ var core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_20___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_20__);
/* harmony import */ var core_js_modules_es_reflect_get_js__WEBPACK_IMPORTED_MODULE_21__ = __webpack_require__(/*! core-js/modules/es.reflect.get.js */ "./node_modules/core-js/modules/es.reflect.get.js");
/* harmony import */ var core_js_modules_es_reflect_get_js__WEBPACK_IMPORTED_MODULE_21___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_reflect_get_js__WEBPACK_IMPORTED_MODULE_21__);
/* harmony import */ var core_js_modules_es_object_get_own_property_descriptor_js__WEBPACK_IMPORTED_MODULE_22__ = __webpack_require__(/*! core-js/modules/es.object.get-own-property-descriptor.js */ "./node_modules/core-js/modules/es.object.get-own-property-descriptor.js");
/* harmony import */ var core_js_modules_es_object_get_own_property_descriptor_js__WEBPACK_IMPORTED_MODULE_22___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_get_own_property_descriptor_js__WEBPACK_IMPORTED_MODULE_22__);
/* harmony import */ var core_js_modules_es_object_keys_js__WEBPACK_IMPORTED_MODULE_23__ = __webpack_require__(/*! core-js/modules/es.object.keys.js */ "./node_modules/core-js/modules/es.object.keys.js");
/* harmony import */ var core_js_modules_es_object_keys_js__WEBPACK_IMPORTED_MODULE_23___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_keys_js__WEBPACK_IMPORTED_MODULE_23__);
/* harmony import */ var core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_24__ = __webpack_require__(/*! core-js/modules/es.symbol.js */ "./node_modules/core-js/modules/es.symbol.js");
/* harmony import */ var core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_24___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_24__);
/* harmony import */ var core_js_modules_es_object_get_own_property_descriptors_js__WEBPACK_IMPORTED_MODULE_25__ = __webpack_require__(/*! core-js/modules/es.object.get-own-property-descriptors.js */ "./node_modules/core-js/modules/es.object.get-own-property-descriptors.js");
/* harmony import */ var core_js_modules_es_object_get_own_property_descriptors_js__WEBPACK_IMPORTED_MODULE_25___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_get_own_property_descriptors_js__WEBPACK_IMPORTED_MODULE_25__);
/* harmony import */ var core_js_modules_es_object_define_properties_js__WEBPACK_IMPORTED_MODULE_26__ = __webpack_require__(/*! core-js/modules/es.object.define-properties.js */ "./node_modules/core-js/modules/es.object.define-properties.js");
/* harmony import */ var core_js_modules_es_object_define_properties_js__WEBPACK_IMPORTED_MODULE_26___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_define_properties_js__WEBPACK_IMPORTED_MODULE_26__);
/* harmony import */ var core_js_modules_es_array_is_array_js__WEBPACK_IMPORTED_MODULE_27__ = __webpack_require__(/*! core-js/modules/es.array.is-array.js */ "./node_modules/core-js/modules/es.array.is-array.js");
/* harmony import */ var core_js_modules_es_array_is_array_js__WEBPACK_IMPORTED_MODULE_27___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_is_array_js__WEBPACK_IMPORTED_MODULE_27__);
/* harmony import */ var core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_28__ = __webpack_require__(/*! core-js/modules/es.symbol.description.js */ "./node_modules/core-js/modules/es.symbol.description.js");
/* harmony import */ var core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_28___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_28__);
/* harmony import */ var core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_29__ = __webpack_require__(/*! core-js/modules/es.symbol.iterator.js */ "./node_modules/core-js/modules/es.symbol.iterator.js");
/* harmony import */ var core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_29___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_29__);
/* harmony import */ var core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_30__ = __webpack_require__(/*! core-js/modules/es.array.iterator.js */ "./node_modules/core-js/modules/es.array.iterator.js");
/* harmony import */ var core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_30___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_30__);
/* harmony import */ var core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_31__ = __webpack_require__(/*! core-js/modules/es.string.iterator.js */ "./node_modules/core-js/modules/es.string.iterator.js");
/* harmony import */ var core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_31___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_31__);
/* harmony import */ var core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_32__ = __webpack_require__(/*! core-js/modules/web.dom-collections.iterator.js */ "./node_modules/core-js/modules/web.dom-collections.iterator.js");
/* harmony import */ var core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_32___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_32__);
/* harmony import */ var core_js_modules_es_array_slice_js__WEBPACK_IMPORTED_MODULE_33__ = __webpack_require__(/*! core-js/modules/es.array.slice.js */ "./node_modules/core-js/modules/es.array.slice.js");
/* harmony import */ var core_js_modules_es_array_slice_js__WEBPACK_IMPORTED_MODULE_33___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_slice_js__WEBPACK_IMPORTED_MODULE_33__);
/* harmony import */ var core_js_modules_es_array_from_js__WEBPACK_IMPORTED_MODULE_34__ = __webpack_require__(/*! core-js/modules/es.array.from.js */ "./node_modules/core-js/modules/es.array.from.js");
/* harmony import */ var core_js_modules_es_array_from_js__WEBPACK_IMPORTED_MODULE_34___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_from_js__WEBPACK_IMPORTED_MODULE_34__);
/* harmony import */ var _hotwired_stimulus__WEBPACK_IMPORTED_MODULE_35__ = __webpack_require__(/*! @hotwired/stimulus */ "./node_modules/@hotwired/stimulus/dist/stimulus.js");
/* harmony import */ var axios__WEBPACK_IMPORTED_MODULE_36__ = __webpack_require__(/*! axios */ "./node_modules/axios/index.js");
/* harmony import */ var axios__WEBPACK_IMPORTED_MODULE_36___default = /*#__PURE__*/__webpack_require__.n(axios__WEBPACK_IMPORTED_MODULE_36__);
/* harmony import */ var datatables_net_bs5__WEBPACK_IMPORTED_MODULE_37__ = __webpack_require__(/*! datatables.net-bs5 */ "./node_modules/datatables.net-bs5/js/dataTables.bootstrap5.js");
/* harmony import */ var datatables_net_bs5__WEBPACK_IMPORTED_MODULE_37___default = /*#__PURE__*/__webpack_require__.n(datatables_net_bs5__WEBPACK_IMPORTED_MODULE_37__);
/* harmony import */ var datatables_net_select_bs5__WEBPACK_IMPORTED_MODULE_38__ = __webpack_require__(/*! datatables.net-select-bs5 */ "./node_modules/datatables.net-select-bs5/js/select.bootstrap5.js");
/* harmony import */ var datatables_net_select_bs5__WEBPACK_IMPORTED_MODULE_38___default = /*#__PURE__*/__webpack_require__.n(datatables_net_select_bs5__WEBPACK_IMPORTED_MODULE_38__);
/* harmony import */ var datatables_net_responsive__WEBPACK_IMPORTED_MODULE_39__ = __webpack_require__(/*! datatables.net-responsive */ "./node_modules/datatables.net-responsive/js/dataTables.responsive.mjs");
/* harmony import */ var datatables_net_buttons_bs5__WEBPACK_IMPORTED_MODULE_40__ = __webpack_require__(/*! datatables.net-buttons-bs5 */ "./node_modules/datatables.net-buttons-bs5/js/buttons.bootstrap5.js");
/* harmony import */ var datatables_net_buttons_bs5__WEBPACK_IMPORTED_MODULE_40___default = /*#__PURE__*/__webpack_require__.n(datatables_net_buttons_bs5__WEBPACK_IMPORTED_MODULE_40__);
/* harmony import */ var datatables_net_searchpanes_bs5__WEBPACK_IMPORTED_MODULE_41__ = __webpack_require__(/*! datatables.net-searchpanes-bs5 */ "./node_modules/datatables.net-searchpanes-bs5/js/searchPanes.bootstrap5.js");
/* harmony import */ var datatables_net_searchpanes_bs5__WEBPACK_IMPORTED_MODULE_41___default = /*#__PURE__*/__webpack_require__.n(datatables_net_searchpanes_bs5__WEBPACK_IMPORTED_MODULE_41__);
/* harmony import */ var datatables_net_scroller_bs5__WEBPACK_IMPORTED_MODULE_42__ = __webpack_require__(/*! datatables.net-scroller-bs5 */ "./node_modules/datatables.net-scroller-bs5/js/scroller.bootstrap5.js");
/* harmony import */ var datatables_net_scroller_bs5__WEBPACK_IMPORTED_MODULE_42___default = /*#__PURE__*/__webpack_require__.n(datatables_net_scroller_bs5__WEBPACK_IMPORTED_MODULE_42__);
/* harmony import */ var datatables_net_buttons_js_buttons_colVis_min__WEBPACK_IMPORTED_MODULE_43__ = __webpack_require__(/*! datatables.net-buttons/js/buttons.colVis.min */ "./node_modules/datatables.net-buttons/js/buttons.colVis.min.js");
/* harmony import */ var datatables_net_buttons_js_buttons_colVis_min__WEBPACK_IMPORTED_MODULE_43___default = /*#__PURE__*/__webpack_require__.n(datatables_net_buttons_js_buttons_colVis_min__WEBPACK_IMPORTED_MODULE_43__);
/* harmony import */ var datatables_net_buttons_js_buttons_html5_min__WEBPACK_IMPORTED_MODULE_44__ = __webpack_require__(/*! datatables.net-buttons/js/buttons.html5.min */ "./node_modules/datatables.net-buttons/js/buttons.html5.min.js");
/* harmony import */ var datatables_net_buttons_js_buttons_html5_min__WEBPACK_IMPORTED_MODULE_44___default = /*#__PURE__*/__webpack_require__.n(datatables_net_buttons_js_buttons_html5_min__WEBPACK_IMPORTED_MODULE_44__);
/* harmony import */ var datatables_net_buttons_js_buttons_print_min__WEBPACK_IMPORTED_MODULE_45__ = __webpack_require__(/*! datatables.net-buttons/js/buttons.print.min */ "./node_modules/datatables.net-buttons/js/buttons.print.min.js");
/* harmony import */ var datatables_net_buttons_js_buttons_print_min__WEBPACK_IMPORTED_MODULE_45___default = /*#__PURE__*/__webpack_require__.n(datatables_net_buttons_js_buttons_print_min__WEBPACK_IMPORTED_MODULE_45__);
/* harmony import */ var _vendor_friendsofsymfony_jsrouting_bundle_Resources_public_js_router_min_js__WEBPACK_IMPORTED_MODULE_46__ = __webpack_require__(/*! ../../vendor/friendsofsymfony/jsrouting-bundle/Resources/public/js/router.min.js */ "./vendor/friendsofsymfony/jsrouting-bundle/Resources/public/js/router.min.js");
/* harmony import */ var _vendor_friendsofsymfony_jsrouting_bundle_Resources_public_js_router_min_js__WEBPACK_IMPORTED_MODULE_46___default = /*#__PURE__*/__webpack_require__.n(_vendor_friendsofsymfony_jsrouting_bundle_Resources_public_js_router_min_js__WEBPACK_IMPORTED_MODULE_46__);
/* harmony import */ var twig_twig_min__WEBPACK_IMPORTED_MODULE_47__ = __webpack_require__(/*! twig/twig.min */ "./node_modules/twig/twig.min.js");
/* harmony import */ var twig_twig_min__WEBPACK_IMPORTED_MODULE_47___default = /*#__PURE__*/__webpack_require__.n(twig_twig_min__WEBPACK_IMPORTED_MODULE_47__);
/* harmony import */ var bootstrap_js_dist_modal__WEBPACK_IMPORTED_MODULE_48__ = __webpack_require__(/*! bootstrap/js/dist/modal */ "./node_modules/bootstrap/js/dist/modal.js");
/* harmony import */ var bootstrap_js_dist_modal__WEBPACK_IMPORTED_MODULE_48___default = /*#__PURE__*/__webpack_require__.n(bootstrap_js_dist_modal__WEBPACK_IMPORTED_MODULE_48__);
function _typeof(obj) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (obj) { return typeof obj; } : function (obj) { return obj && "function" == typeof Symbol && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }, _typeof(obj); }

function _slicedToArray(arr, i) { return _arrayWithHoles(arr) || _iterableToArrayLimit(arr, i) || _unsupportedIterableToArray(arr, i) || _nonIterableRest(); }

function _nonIterableRest() { throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); }

function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }

function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }

function _iterableToArrayLimit(arr, i) { var _i = arr == null ? null : typeof Symbol !== "undefined" && arr[Symbol.iterator] || arr["@@iterator"]; if (_i == null) return; var _arr = []; var _n = true; var _d = false; var _s, _e; try { for (_i = _i.call(arr); !(_n = (_s = _i.next()).done); _n = true) { _arr.push(_s.value); if (i && _arr.length === i) break; } } catch (err) { _d = true; _e = err; } finally { try { if (!_n && _i["return"] != null) _i["return"](); } finally { if (_d) throw _e; } } return _arr; }

function _arrayWithHoles(arr) { if (Array.isArray(arr)) return arr; }

function ownKeys(object, enumerableOnly) { var keys = Object.keys(object); if (Object.getOwnPropertySymbols) { var symbols = Object.getOwnPropertySymbols(object); enumerableOnly && (symbols = symbols.filter(function (sym) { return Object.getOwnPropertyDescriptor(object, sym).enumerable; })), keys.push.apply(keys, symbols); } return keys; }

function _objectSpread(target) { for (var i = 1; i < arguments.length; i++) { var source = null != arguments[i] ? arguments[i] : {}; i % 2 ? ownKeys(Object(source), !0).forEach(function (key) { _defineProperty(target, key, source[key]); }) : Object.getOwnPropertyDescriptors ? Object.defineProperties(target, Object.getOwnPropertyDescriptors(source)) : ownKeys(Object(source)).forEach(function (key) { Object.defineProperty(target, key, Object.getOwnPropertyDescriptor(source, key)); }); } return target; }





































function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, "prototype", { writable: false }); return Constructor; }

function _get() { if (typeof Reflect !== "undefined" && Reflect.get) { _get = Reflect.get.bind(); } else { _get = function _get(target, property, receiver) { var base = _superPropBase(target, property); if (!base) return; var desc = Object.getOwnPropertyDescriptor(base, property); if (desc.get) { return desc.get.call(arguments.length < 3 ? target : receiver); } return desc.value; }; } return _get.apply(this, arguments); }

function _superPropBase(object, property) { while (!Object.prototype.hasOwnProperty.call(object, property)) { object = _getPrototypeOf(object); if (object === null) break; } return object; }

function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function"); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, writable: true, configurable: true } }); Object.defineProperty(subClass, "prototype", { writable: false }); if (superClass) _setPrototypeOf(subClass, superClass); }

function _setPrototypeOf(o, p) { _setPrototypeOf = Object.setPrototypeOf ? Object.setPrototypeOf.bind() : function _setPrototypeOf(o, p) { o.__proto__ = p; return o; }; return _setPrototypeOf(o, p); }

function _createSuper(Derived) { var hasNativeReflectConstruct = _isNativeReflectConstruct(); return function _createSuperInternal() { var Super = _getPrototypeOf(Derived), result; if (hasNativeReflectConstruct) { var NewTarget = _getPrototypeOf(this).constructor; result = Reflect.construct(Super, arguments, NewTarget); } else { result = Super.apply(this, arguments); } return _possibleConstructorReturn(this, result); }; }

function _possibleConstructorReturn(self, call) { if (call && (_typeof(call) === "object" || typeof call === "function")) { return call; } else if (call !== void 0) { throw new TypeError("Derived constructors may only return object or undefined"); } return _assertThisInitialized(self); }

function _assertThisInitialized(self) { if (self === void 0) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return self; }

function _isNativeReflectConstruct() { if (typeof Reflect === "undefined" || !Reflect.construct) return false; if (Reflect.construct.sham) return false; if (typeof Proxy === "function") return true; try { Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], function () {})); return true; } catch (e) { return false; } }

function _getPrototypeOf(o) { _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf.bind() : function _getPrototypeOf(o) { return o.__proto__ || Object.getPrototypeOf(o); }; return _getPrototypeOf(o); }

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }

// during dev, from project_dir run
// ln -s ~/survos/bundles/api-grid-bundle/assets/src/controllers/sandbox_api_controller.js assets/controllers/sandbox_api_controller.js




 // import 'datatables.net-responsive-bs5';






 // shouldn't these be automatically included (from package.json)
// import 'datatables.net-scroller';
// import 'datatables.net-scroller-bs5';
// import 'datatables.net-datetime';
// import 'datatables.net-searchbuilder-bs5';
// import 'datatables.net-fixedheader-bs5';
// import 'datatables.net-responsive-bs5';
// const DataTable = require('datatables.net');
// import('datatables.net-buttons-bs5');
// import('datatables.net-bs5');
// import('datatables.net-select-bs5');
// if component

var routes = false; // if live
// import Routing from '../../../../../vendor/friendsofsymfony/jsrouting-bundle/Resources/public/js/router.min.js';
// routes = require('../../../../../public/js/fos_js_routes.json');
// if local

routes = __webpack_require__(/*! ../../public/js/fos_js_routes.json */ "./public/js/fos_js_routes.json");

_vendor_friendsofsymfony_jsrouting_bundle_Resources_public_js_router_min_js__WEBPACK_IMPORTED_MODULE_46___default().setRoutingData(routes);

twig_twig_min__WEBPACK_IMPORTED_MODULE_47___default().extend(function (Twig) {
  Twig._function.extend('path', function (route, routeParams) {
    delete routeParams._keys; // seems to be added by twigjs

    var path = _vendor_friendsofsymfony_jsrouting_bundle_Resources_public_js_router_min_js__WEBPACK_IMPORTED_MODULE_46___default().generate(route, routeParams); // if (route == 'category_show') {
    //     console.error(route);
    //     console.warn(routeParams);
    //     console.log(path);
    // }

    return path;
  });
}); // import {Modal} from "bootstrap"; !!
// https://stackoverflow.com/questions/68084742/dropdown-doesnt-work-after-modal-of-bootstrap-imported

 // import cb from "../js/app-buttons";

console.assert((_vendor_friendsofsymfony_jsrouting_bundle_Resources_public_js_router_min_js__WEBPACK_IMPORTED_MODULE_46___default()), 'Routing is not defined'); // global.Routing = Routing;
// try {
// } catch (e) {
//     console.error(e);
//     console.warn("FOS JS Routing not loaded, so path() won't work");
// }

var contentTypes = {
  'PATCH': 'application/merge-patch+json',
  'POST': 'application/json'
};
/* stimulusFetch: 'lazy' */

var _default = /*#__PURE__*/function (_Controller) {
  _inherits(_default, _Controller);

  var _super = _createSuper(_default);

  function _default() {
    _classCallCheck(this, _default);

    return _super.apply(this, arguments);
  }

  _createClass(_default, [{
    key: "cols",
    value: // with searchPanes dom: {type: String, default: 'P<"dtsp-dataTable"rQfti>'},
    // sortableFields: {type: String, default: '[]'},
    // searchableFields: {type: String, default: '[]'},
    // searchBuilderFields: {type: String, default: '[]'},
    function cols() {
      var _this = this;

      var x = this.columns.map(function (c) {
        var render = null;

        if (c.twigTemplate) {
          var template = twig_twig_min__WEBPACK_IMPORTED_MODULE_47___default().twig({
            data: c.twigTemplate
          });

          render = function render(data, type, row, meta) {
            return template.render({
              data: data,
              row: row,
              field_name: c.name
            });
          };
        }

        if (c.name === '_actions') {
          return _this.actions({
            prefix: c.prefix,
            actions: c.actions
          });
        }

        return _this.c({
          propertyName: c.name,
          data: c.name,
          label: c.title,
          route: c.route,
          locale: c.locale,
          render: render
        });
      });
      return x;
    }
  }, {
    key: "connect",
    value: function connect() {
      var _this2 = this;

      _get(_getPrototypeOf(_default.prototype), "connect", this).call(this); //


      var event = new CustomEvent("changeFormUrlEvent", {
        formUrl: 'testing formURL!'
      });
      window.dispatchEvent(event);
      this.columns = JSON.parse(this.columnConfigurationValue); // "compile" the custom twig blocks
      // var columnRender = [];

      this.dom = this.domValue; // dom: 'Plfrtip',

      console.assert(this.dom, "Missing dom");
      this.filter = JSON.parse(this.filterValue || '[]');
      this.sortableFields = JSON.parse(this.sortableFieldsValue);
      this.searchableFields = JSON.parse(this.searchableFieldsValue);
      this.searchBuilderFields = JSON.parse(this.searchBuilderFieldsValue);
      this.locale = this.localeValue;
      console.log('hola from ' + this.identifier + ' locale: ' + this.localeValue); // console.log(this.hasTableTarget ? 'table target exists' : 'missing table target')
      // console.log(this.hasModalTarget ? 'target exists' : 'missing modalstarget')
      // // console.log(this.fieldSearch ? 'target exists' : 'missing fieldSearch')
      // console.log(this.sortableFieldsValue);

      console.assert(this.hasModalTarget, "Missing modal target");
      this.that = this;
      this.tableElement = false;

      if (this.hasTableTarget) {
        this.tableElement = this.tableTarget;
      } else if (this.element.tagName === 'TABLE') {
        this.tableElement = this.element;
      } else {
        this.tableElement = document.getElementsByTagName('table')[0];
      } // else {
      //     console.error('A table element is required.');
      // }


      if (this.tableElement) {
        // get the (cached) fields first, then load the datatable
        if (this.searchPanesDataUrlValue) {
          axios__WEBPACK_IMPORTED_MODULE_36___default().get(this.searchPanesDataUrlValue, {}).then(function (response) {
            // handle success
            // console.log(response.data);
            _this2.dt = _this2.initDataTable(_this2.tableElement, response.data);
          });
        } else {
          this.dt = this.initDataTable(this.tableElement, []);
        }

        this.initialized = true;
      }
    }
  }, {
    key: "openModal",
    value: function openModal(e) {
      console.error('yay, open modal!', e, e.currentTarget, e.currentTarget.dataset);
      this.modalTarget.addEventListener('show.bs.modal', function (e) {
        console.log(e, e.relatedTarget, e.currentTarget); // do something...
      });
      this.modal = new (bootstrap_js_dist_modal__WEBPACK_IMPORTED_MODULE_48___default())(this.modalTarget);
      console.log(this.modal);
      this.modal.show();
    }
  }, {
    key: "createdRow",
    value: function createdRow(row, data, dataIndex) {// we could add the thumbnail URL here.
      // console.log(row, data, dataIndex, this.identifier);
      // let aaController = 'projects';
      // row.classList.add("text-danger");
      // row.setAttribute('data-action', aaController + '#openModal');
      // row.setAttribute('data-controller', 'modal-form', {formUrl: 'test'});
    }
  }, {
    key: "notify",
    value: function notify(message) {
      console.log(message);
      this.messageTarget.innerHTML = message;
    }
  }, {
    key: "handleTrans",
    value: function handleTrans(el) {
      var _this3 = this;

      var transitionButtons = el.querySelectorAll('button.transition'); // console.log(transitionButtons);

      transitionButtons.forEach(function (btn) {
        return btn.addEventListener('click', function (event) {
          var isButton = event.target.nodeName === 'BUTTON';

          if (!isButton) {
            return;
          }

          console.log(event, event.target, event.currentTarget);

          var row = _this3.dt.row(event.target.closest('tr'));

          var data = row.data();
          console.log(row, data);

          _this3.notify('deleting ' + data.id); // console.dir(event.target.id);

        });
      });
    }
  }, {
    key: "requestTransition",
    value: function requestTransition(route, entityClass, id) {} // eh... not working

  }, {
    key: "modalController",
    get: function get() {
      return this.application.getControllerForElementAndIdentifier(this.modalTarget, "modal_form");
    }
  }, {
    key: "addButtonClickListener",
    value: function addButtonClickListener(dt) {
      var _this4 = this;

      console.log("Listening for button.transition and button .btn-modal clicks events");
      dt.on('click', 'tr td button.transition', function ($event) {
        console.log($event.currentTarget);
        var target = $event.currentTarget;
        var data = dt.row(target.closest('tr')).data();
        var transition = target.dataset['t'];
        console.log(transition, target);
        console.log(data, $event);
        _this4.that.modalBodyTarget.innerHTML = transition;
        _this4.modal = new (bootstrap_js_dist_modal__WEBPACK_IMPORTED_MODULE_48___default())(_this4.modalTarget);

        _this4.modal.show();
      }); // dt.on('click', 'tr td button .btn-modal',  ($event, x) => {

      dt.on('click', 'tr td button ', function ($event, x) {
        console.log($event, $event.currentTarget);
        var data = dt.row($event.currentTarget.closest('tr')).data();
        console.log(data, $event, x);
        console.warn("dispatching changeFormUrlEvent");
        var event = new CustomEvent("changeFormUrlEvent", {
          formUrl: 'test'
        });
        window.dispatchEvent(event);
        var btn = $event.currentTarget;
        var modalRoute = btn.dataset.modalRoute;

        if (modalRoute) {
          _this4.modalBodyTarget.innerHTML = data.code;
          _this4.modal = new (bootstrap_js_dist_modal__WEBPACK_IMPORTED_MODULE_48___default())(_this4.modalTarget);

          _this4.modal.show();

          console.assert(data.rp, "missing rp, add @Groups to entity");
          var formUrl = _vendor_friendsofsymfony_jsrouting_bundle_Resources_public_js_router_min_js__WEBPACK_IMPORTED_MODULE_46___default().generate(modalRoute, _objectSpread(_objectSpread({}, data.rp), {}, {
            _page_content_only: 1
          }));
          console.warn("dispatching changeFormUrlEvent");

          var _event = new CustomEvent("changeFormUrlEvent", {
            detail: {
              formUrl: formUrl
            }
          });

          window.dispatchEvent(_event);
          document.dispatchEvent(_event);
          console.log('getting formURL ' + formUrl);
          axios__WEBPACK_IMPORTED_MODULE_36___default().get(formUrl).then(function (response) {
            return _this4.modalBodyTarget.innerHTML = response.data;
          })["catch"](function (error) {
            return _this4.modalBodyTarget.innerHTML = error;
          });
        }
      });
    }
  }, {
    key: "addRowClickListener",
    value: function addRowClickListener(dt) {
      var _this5 = this;

      dt.on('click', 'tr td', function ($event) {
        var el = $event.currentTarget;
        console.log($event, $event.currentTarget);
        var data = dt.row($event.currentTarget).data();
        var btn = el.querySelector('button');
        console.log(btn);
        var modalRoute = null;

        if (btn) {
          console.error(btn, btn.dataset, btn.dataset.modalRoute);
          modalRoute = btn.dataset.modalRoute;
        }

        if (el.querySelector("a")) {
          return; // skip links, let it bubble up to handle
        }

        if (modalRoute) {
          _this5.modalBodyTarget.innerHTML = data.code;
          _this5.modal = new (bootstrap_js_dist_modal__WEBPACK_IMPORTED_MODULE_48___default())(_this5.modalTarget);

          _this5.modal.show();

          console.assert(data.rp, "missing rp, add @Groups to entity");
          var formUrl = _vendor_friendsofsymfony_jsrouting_bundle_Resources_public_js_router_min_js__WEBPACK_IMPORTED_MODULE_46___default().generate(modalRoute, data.rp);
          axios__WEBPACK_IMPORTED_MODULE_36___default()({
            method: 'get',
            //you can set what request you want to be
            url: formUrl,
            // data: {id: varID},
            headers: {
              _page_content_only: '1' // could send blocks that we want??

            }
          }).then(function (response) {
            return _this5.modalBodyTarget.innerHTML = response.data;
          })["catch"](function (error) {
            return _this5.modalBodyTarget.innerHTML = error;
          });
        }
      });
    }
  }, {
    key: "initDataTable",
    value: function initDataTable(el, fields) {
      var _this6 = this;

      var lookup = [];
      fields.forEach(function (field, index) {
        lookup[field.jsonKeyCode] = field;
      });
      var searchFieldsByColumnNumber = [];
      var options = [];
      this.columns.forEach(function (column, index) {
        console.log(column);

        if (column.searchable || column.browsable) {
          console.error(index);
          searchFieldsByColumnNumber.push(index);
        }

        if (column.browsable && column.name in lookup) {
          var field = lookup[column.name];
          options[field.jsonKeyCode] = [];

          for (var label in field.valueCounts) {
            var count = field.valueCounts[label]; //     console.log(field.valueCounts);
            // field.valueCounts.protoforEach( (label, count) =>
            // {

            options[field.jsonKeyCode].push({
              label: label,
              count: field.distinctValuesCount,
              value: label,
              total: count
            });
          }
        } else {// console.warn("Missing " + column.name, Object.keys(lookup));
        }
      });
      console.error('searchFields', searchFieldsByColumnNumber);
      var apiPlatformHeaders = {
        'Accept': 'application/ld+json',
        'Content-Type': 'application/json'
      };
      var userLocale = navigator.languages && navigator.languages.length ? navigator.languages[0] : navigator.language; // console.log('user locale: ' + userLocale); // 👉️ "en-US"
      // console.error('this.locale: ' + this.locale);

      if (this.locale !== '') {
        apiPlatformHeaders['Accept-Language'] = this.locale;
        apiPlatformHeaders['X-LOCALE'] = this.locale;
      }

      var setup = {
        // let dt = new DataTable(el, {
        language: {
          searchPlaceholder: 'srch: ' + this.searchableFields.join(',')
        },
        createdRow: this.createdRow,
        // paging: true,
        scrollY: '70vh',
        // vh is percentage of viewport height, https://css-tricks.com/fun-viewport-units/
        // scrollY: true,
        // displayLength: 50, // not sure how to adjust the 'length' sent to the server
        // pageLength: 15,
        orderCellsTop: true,
        fixedHeader: true,
        deferRender: true,
        // scrollX:        true,
        // scrollCollapse: true,
        scroller: true,
        // scroller: {
        //     // rowHeight: 90, // @WARNING: Problematic!!
        //     // displayBuffer: 10,
        //     loadingIndicator: true,
        // },
        // "processing": true,
        serverSide: true,
        initComplete: function initComplete(obj, data) {
          _this6.handleTrans(el); // let xapi = new DataTable.Api(obj);
          // console.log(xapi);
          // console.log(xapi.table);
          // this.addRowClickListener(dt);


          _this6.addButtonClickListener(dt);
        },
        dom: this.dom,
        // dom: 'Plfrtip',
        // dom: '<"js-dt-buttons"B><"js-dt-info"i>ft',
        // dom: 'Q<"js-dt-buttons"B><"js-dt-info"i>' + (this.searchableFields.length ? 'f' : '') + 't',
        buttons: [],
        // this.buttons,
        columns: this.cols(),
        searchPanes: {
          layout: 'columns-1'
        },
        searchBuilder: {
          columns: this.searchBuilderFields,
          depthLimit: 1
        },
        // columns:
        //     [
        //     this.c({
        //         propertyName: 'name',
        //     }),
        // ],
        columnDefs: this.columnDefs(searchFieldsByColumnNumber),
        ajax: function ajax(params, callback, settings) {
          var apiParams = _this6.dataTableParamsToApiPlatformParams(params); // this.debug &&
          // console.error(params, apiParams);
          // console.log(`DataTables is requesting ${params.length} records starting at ${params.start}`, apiParams);


          Object.assign(apiParams, _this6.filter); // yet another locale hack

          if (_this6.locale !== '') {
            apiParams['_locale'] = _this6.locale;
          } // console.warn(apiPlatformHeaders);


          console.log("calling API " + _this6.apiCallValue, apiParams);
          axios__WEBPACK_IMPORTED_MODULE_36___default().get(_this6.apiCallValue, {
            params: apiParams,
            headers: apiPlatformHeaders
          }).then(function (response) {
            // handle success
            var hydraData = response.data;
            var total = hydraData.hasOwnProperty('hydra:totalItems') ? hydraData['hydra:totalItems'] : 999999; // Infinity;

            var itemsReturned = hydraData['hydra:member'].length; // let first = (params.page - 1) * params.itemsPerPage;

            if (params.search.value) {
              console.log("dt search: ".concat(params.search.value));
            } // console.log(`dt request: ${params.length} starting at ${params.start}`);
            // let first = (apiOptions.page - 1) * apiOptions.itemsPerPage;


            var d = hydraData['hydra:member'];

            if (d.length) {
              console.log(d[0]);
            } // if next page isn't working, make sure api_platform.yaml is correctly configured
            // defaults:
            //     pagination_client_items_per_page: true
            // if there's a "next" page and we didn't get everything, fetch the next page and return the slice.


            var next = hydraData["hydra:view"]['hydra:next']; // we need the searchpanes options, too.

            var searchPanes = {
              options: options
            };
            var callbackValues = {
              draw: params.draw,
              data: d,
              searchPanes: searchPanes,
              recordsTotal: total,
              recordsFiltered: total //  itemsReturned,

            };
            callback(callbackValues);
          })["catch"](function (error) {
            // handle error
            console.error(error);
          });
        }
      };
      var dt = new (datatables_net_bs5__WEBPACK_IMPORTED_MODULE_37___default())(el, setup);
      dt.searchPanes(); // console.log('moving panes.');

      $("div.search-panes").append(dt.searchPanes.container());
      return dt;
    }
  }, {
    key: "columnDefs",
    value: function columnDefs(searchPanesColumns) {
      // console.error(searchPanesColumns);
      return [{
        searchPanes: {
          show: true
        },
        targets: searchPanesColumns
      }, {
        targets: [0, 1],
        visible: true
      }, // defaultContent is critical! Otherwise, lots of stuff fails.
      {
        targets: '_all',
        visible: true,
        sortable: false,
        "defaultContent": "~~"
      }]; // { targets: [0, 1], visible: true},
      // { targets: '_all', visible: true, sortable: false,  "defaultContent": "~~" }
    } // get columns() {
    //     // if columns isn't overwritten, use the th's in the first tr?  or data-field='status', and then make the api call with _fields=...?
    //     // or https://datatables.net/examples/ajax/null_data_source.html
    //     return [
    //         {title: '@id', data: 'id'}
    //     ]
    // }

  }, {
    key: "actions",
    value: function actions() {
      var _ref = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : {},
          _ref$prefix = _ref.prefix,
          prefix = _ref$prefix === void 0 ? null : _ref$prefix,
          _ref$actions = _ref.actions,
          _actions = _ref$actions === void 0 ? ['edit', 'show', 'qr'] : _ref$actions;

      var icons = {
        edit: 'fas fa-edit',
        show: 'fas fa-eye text-success',
        'qr': 'fas fa-qrcode',
        'delete': 'fas fa-trash text-danger'
      };

      var buttons = _actions.map(function (action) {
        var modal_route = prefix + action;
        var icon = icons[action]; // return action + ' ' + modal_route;
        // Routing.generate()

        return "<button data-modal-route=\"".concat(modal_route, "\" class=\"btn btn-modal btn-action-").concat(action, "\" \ntitle=\"").concat(modal_route, "\"><span class=\"action-").concat(action, " fas fa-").concat(icon, "\"></span></button>");
      }); // console.log(buttons);


      return {
        title: 'actions',
        render: function render() {
          return buttons.join(' ');
        }
      };

      _actions.forEach(function (action) {});
    }
  }, {
    key: "c",
    value: function c() {
      var _ref2 = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : {},
          _ref2$propertyName = _ref2.propertyName,
          propertyName = _ref2$propertyName === void 0 ? null : _ref2$propertyName,
          _ref2$name = _ref2.name,
          name = _ref2$name === void 0 ? null : _ref2$name,
          _ref2$route = _ref2.route,
          route = _ref2$route === void 0 ? null : _ref2$route,
          _ref2$modal_route = _ref2.modal_route,
          modal_route = _ref2$modal_route === void 0 ? null : _ref2$modal_route,
          _ref2$label = _ref2.label,
          label = _ref2$label === void 0 ? null : _ref2$label,
          _ref2$modal = _ref2.modal,
          modal = _ref2$modal === void 0 ? false : _ref2$modal,
          _ref2$render = _ref2.render,
          render = _ref2$render === void 0 ? null : _ref2$render,
          _ref2$locale = _ref2.locale,
          locale = _ref2$locale === void 0 ? null : _ref2$locale,
          _ref2$renderType = _ref2.renderType,
          renderType = _ref2$renderType === void 0 ? 'string' : _ref2$renderType;

      if (render === null) {
        render = function render(data, type, row, meta) {
          // if (!label) {
          //     // console.log(row, data);
          //     label = data || propertyName;
          // }
          var displayData = data; // @todo: move some twig templates to a common library

          if (renderType === 'image') {
            return "<img class=\"img-thumbnail plant-thumb\" alt=\"".concat(data, "\" src=\"").concat(data, "\" />");
          }

          if (route) {
            if (locale) {
              row.rp['_locale'] = locale;
            }

            var url = _vendor_friendsofsymfony_jsrouting_bundle_Resources_public_js_router_min_js__WEBPACK_IMPORTED_MODULE_46___default().generate(route, row.rp);

            if (modal) {
              return "<button class=\"btn btn-primary\"></button>";
            } else {
              return "<a href=\"".concat(url, "\">").concat(displayData, "</a>");
            }
          } else {
            if (modal_route) {
              return "<button data-modal-route=\"".concat(modal_route, "\" class=\"btn btn-success\">").concat(modal_route, "</button>");
            } else {
              // console.log(propertyName, row[propertyName], row);
              return row[propertyName];
            }
          }
        };
      }

      return {
        title: label,
        data: propertyName || '',
        render: render,
        sortable: this.sortableFields.includes(propertyName)
      }; // ...function body...
    }
  }, {
    key: "guessColumn",
    value: function guessColumn(v) {
      var renderFunction = null;

      switch (v) {
        case 'id':
          renderFunction = function renderFunction(data, type, row, meta) {
            console.warn('id render');
            return "<b>" + data + "!!</b>";
          };

          break;

        case 'newestPublishTime':
        case 'createTime':
          renderFunction = function renderFunction(data, type, row, meta) {
            var isoTime = data;
            var str = isoTime ? '<time class="timeago" datetime="' + data + '">' + data + '</time>' : '';
            return str;
          };

          break;
        // default:
        //     renderFunction = ( data, type, row, meta ) => { return data; }
      }

      var obj = {
        title: v,
        data: v
      };

      if (renderFunction) {
        obj.render = renderFunction;
      }

      console.warn(obj);
      return obj;
    }
  }, {
    key: "dataTableParamsToApiPlatformParams",
    value: function dataTableParamsToApiPlatformParams(params) {
      var columns = params.columns; // get the columns passed back to us, sanity.
      // var apiData = {
      //     page: 1
      // };
      // console.error(params);
      // apiData.start = params.start; // ignored?s

      var apiData = {};

      if (params.length) {
        // was apiData.itemsPerPage = params.length;
        apiData.limit = params.length;
      } // same as #[ApiFilter(MultiFieldSearchFilter::class, properties: ["label", "code"], arguments: ["searchParameterName"=>"search"])]


      if (params.search && params.search.value) {
        apiData['search'] = params.search.value;
      }

      var order = {}; // https://jardin.wip/api/projects.jsonld?page=1&itemsPerPage=14&order[code]=asc

      params.order.forEach(function (o, index) {
        var c = params.columns[o.column];

        if (c.data) {
          order[c.data] = o.dir; // apiData.order = order;

          apiData['order[' + c.data + ']'] = o.dir;
        } // console.error(c, order, o.column, o.dir);

      });

      var _loop = function _loop() {
        var _Object$entries$_i = _slicedToArray(_Object$entries[_i], 2),
            key = _Object$entries$_i[0],
            value = _Object$entries$_i[1];

        // console.log(value, key, Object.values(value)); // "a 5", "b 7", "c 9"
        // if ($attr = $request->get('a')) {
        //     $filter['attribute_search']['operator'] = sprintf("%s,%s,%s", $attr, '=', $request->get('v'));
        // }
        if (Object.values(value).length) {
          Object.values(value).forEach(function (vvv) {
            return apiData['attributes[operator]'] = key + ',=,' + vvv;
          });
          console.warn(apiData);
        }
      };

      for (var _i = 0, _Object$entries = Object.entries(params.searchPanes); _i < _Object$entries.length; _i++) {
        _loop();
      } // if (params.searchPanes.length) {
      //     params.searchPanes.forEach((c, index) => {
      //         console.warn(c);
      //         // apiData[c.origData + '[]'] = c.value1;
      //     });
      // }


      if (params.searchBuilder && params.searchBuilder.criteria) {
        params.searchBuilder.criteria.forEach(function (c, index) {
          console.warn(c);
          apiData[c.origData + '[]'] = c.value1;
        });
      }

      params.columns.forEach(function (column, index) {
        if (column.search && column.search.value) {
          // console.error(column);
          var value = column.search.value; // check the first character for a range filter operator
          // data is the column field, at least for right now.

          apiData[column.data] = value;
        }
      });

      if (params.start) {// was apiData.page = Math.floor(params.start / params.length) + 1;
        // apiData.page = Math.floor(params.start / apiData.itemsPerPage) + 1;
      }

      apiData.offset = params.start; // console.error(apiData);
      // add our own filters
      // apiData['marking'] = ['fetch_success'];

      return apiData;
    }
  }, {
    key: "initFooter",
    value: function initFooter(el) {
      return;
      var footer = el.querySelector('tfoot');

      if (footer) {
        return; // do not initiate twice
      }

      var handleInput = function handleInput(column) {
        var input = $('<input class="form-control" type="text">');
        input.attr('placeholder', column.filter.placeholder || column.data);
        return input;
      };

      this.debug && console.log('adding footer'); // var tr = $('<tr>');
      // var that = this;
      // console.log(this.columns());
      // Create an empty <tfoot> element and add it to the table:

      var footer = el.createTFoot();
      footer.classList.add('show-footer-above');
      var thead = el.querySelector('thead');
      el.insertBefore(footer, thead); // Create an empty <tr> element and add it to the first position of <tfoot>:

      var row = footer.insertRow(0); // Insert a new cell (<td>) at the first position of the "new" <tr> element:
      // Add some bold text in the new cell:
      //         cell.innerHTML = "<b>This is a table footer</b>";

      this.columns().forEach(function (column, index) {
        var cell = row.insertCell(index); // cell.innerHTML = column.data;

        var input = document.createElement("input");
        input.setAttribute("type", "text");
        input.setAttribute("placeholder", column.data);
        cell.appendChild(input); // if (column.filter === true || column.filter.type === 'input') {
        //         el = handleInput(column);
        //     } else if (column.filter.type === 'select') {
        //         el = handleSelect(column);
        //     }
        // var cell = row.insertCell(index);
        // var td = $('<td>');
        // if (column.filter !== undefined) {
        //     var el;
        //     if (column.filter === true || column.filter.type === 'input') {
        //         el = handleInput(column);
        //     } else if (column.filter.type === 'select') {
        //         el = handleSelect(column);
        //     }
        //     that.handleFieldSearch(this.el, el, index);
        //
        //     td.append(el);
      }); // footer = $('<tfoot>');
      // footer.append(tr);
      // console.log(footer);
      // this.el.append(footer);
      // see http://live.datatables.net/giharaka/1/edit for moving the footer to below the header
    }
  }]);

  return _default;
}(_hotwired_stimulus__WEBPACK_IMPORTED_MODULE_35__.Controller);

_defineProperty(_default, "targets", ['table', 'modal', 'modalBody', 'fieldSearch', 'message']);

_defineProperty(_default, "values", {
  apiCall: {
    type: String,
    "default": ''
  },
  searchPanesDataUrl: {
    type: String,
    "default": ''
  },
  columnConfiguration: {
    type: String,
    "default": '[]'
  },
  locale: {
    type: String,
    "default": 'no-locale!'
  },
  dom: {
    type: String,
    "default": 'Plfrtip'
  },
  filter: String
});



/***/ }),

/***/ "./vendor/friendsofsymfony/jsrouting-bundle/Resources/public/js/router.min.js":
/*!************************************************************************************!*\
  !*** ./vendor/friendsofsymfony/jsrouting-bundle/Resources/public/js/router.min.js ***!
  \************************************************************************************/
/***/ (function(module, exports, __webpack_require__) {

var __WEBPACK_AMD_DEFINE_FACTORY__, __WEBPACK_AMD_DEFINE_ARRAY__, __WEBPACK_AMD_DEFINE_RESULT__;function _typeof(obj) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (obj) { return typeof obj; } : function (obj) { return obj && "function" == typeof Symbol && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }, _typeof(obj); }

__webpack_require__(/*! core-js/modules/es.object.freeze.js */ "./node_modules/core-js/modules/es.object.freeze.js");

__webpack_require__(/*! core-js/modules/es.regexp.constructor.js */ "./node_modules/core-js/modules/es.regexp.constructor.js");

__webpack_require__(/*! core-js/modules/es.regexp.exec.js */ "./node_modules/core-js/modules/es.regexp.exec.js");

__webpack_require__(/*! core-js/modules/es.regexp.to-string.js */ "./node_modules/core-js/modules/es.regexp.to-string.js");

__webpack_require__(/*! core-js/modules/es.array.for-each.js */ "./node_modules/core-js/modules/es.array.for-each.js");

__webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");

__webpack_require__(/*! core-js/modules/web.dom-collections.for-each.js */ "./node_modules/core-js/modules/web.dom-collections.for-each.js");

__webpack_require__(/*! core-js/modules/es.object.assign.js */ "./node_modules/core-js/modules/es.object.assign.js");

__webpack_require__(/*! core-js/modules/es.array.is-array.js */ "./node_modules/core-js/modules/es.array.is-array.js");

__webpack_require__(/*! core-js/modules/es.array.index-of.js */ "./node_modules/core-js/modules/es.array.index-of.js");

__webpack_require__(/*! core-js/modules/es.object.keys.js */ "./node_modules/core-js/modules/es.object.keys.js");

__webpack_require__(/*! core-js/modules/es.array.join.js */ "./node_modules/core-js/modules/es.array.join.js");

__webpack_require__(/*! core-js/modules/es.string.replace.js */ "./node_modules/core-js/modules/es.string.replace.js");

__webpack_require__(/*! core-js/modules/es.symbol.js */ "./node_modules/core-js/modules/es.symbol.js");

__webpack_require__(/*! core-js/modules/es.symbol.description.js */ "./node_modules/core-js/modules/es.symbol.description.js");

__webpack_require__(/*! core-js/modules/es.symbol.iterator.js */ "./node_modules/core-js/modules/es.symbol.iterator.js");

__webpack_require__(/*! core-js/modules/es.array.iterator.js */ "./node_modules/core-js/modules/es.array.iterator.js");

__webpack_require__(/*! core-js/modules/es.string.iterator.js */ "./node_modules/core-js/modules/es.string.iterator.js");

__webpack_require__(/*! core-js/modules/web.dom-collections.iterator.js */ "./node_modules/core-js/modules/web.dom-collections.iterator.js");

!function (e) {
  (t = {}).__esModule = !0, t.Routing = t.Router = void 0, o = function () {
    function l(e, t) {
      this.context_ = e || {
        base_url: "",
        prefix: "",
        host: "",
        port: "",
        scheme: "",
        locale: ""
      }, this.setRoutes(t || {});
    }

    return l.getInstance = function () {
      return t.Routing;
    }, l.setData = function (e) {
      l.getInstance().setRoutingData(e);
    }, l.prototype.setRoutingData = function (e) {
      this.setBaseUrl(e.base_url), this.setRoutes(e.routes), void 0 !== e.prefix && this.setPrefix(e.prefix), void 0 !== e.port && this.setPort(e.port), void 0 !== e.locale && this.setLocale(e.locale), this.setHost(e.host), void 0 !== e.scheme && this.setScheme(e.scheme);
    }, l.prototype.setRoutes = function (e) {
      this.routes_ = Object.freeze(e);
    }, l.prototype.getRoutes = function () {
      return this.routes_;
    }, l.prototype.setBaseUrl = function (e) {
      this.context_.base_url = e;
    }, l.prototype.getBaseUrl = function () {
      return this.context_.base_url;
    }, l.prototype.setPrefix = function (e) {
      this.context_.prefix = e;
    }, l.prototype.setScheme = function (e) {
      this.context_.scheme = e;
    }, l.prototype.getScheme = function () {
      return this.context_.scheme;
    }, l.prototype.setHost = function (e) {
      this.context_.host = e;
    }, l.prototype.getHost = function () {
      return this.context_.host;
    }, l.prototype.setPort = function (e) {
      this.context_.port = e;
    }, l.prototype.getPort = function () {
      return this.context_.port;
    }, l.prototype.setLocale = function (e) {
      this.context_.locale = e;
    }, l.prototype.getLocale = function () {
      return this.context_.locale;
    }, l.prototype.buildQueryParams = function (o, e, n) {
      var t,
          r = this,
          s = new RegExp(/\[\]$/);
      if (e instanceof Array) e.forEach(function (e, t) {
        s.test(o) ? n(o, e) : r.buildQueryParams(o + "[" + ("object" == _typeof(e) ? t : "") + "]", e, n);
      });else if ("object" == _typeof(e)) for (t in e) {
        this.buildQueryParams(o + "[" + t + "]", e[t], n);
      } else n(o, e);
    }, l.prototype.getRoute = function (e) {
      var t,
          o = [this.context_.prefix + e, e + "." + this.context_.locale, this.context_.prefix + e + "." + this.context_.locale, e];

      for (t in o) {
        if (o[t] in this.routes_) return this.routes_[o[t]];
      }

      throw new Error('The route "' + e + '" does not exist.');
    }, l.prototype.generate = function (r, e, p) {
      var t,
          s = this.getRoute(r),
          i = e || {},
          u = Object.assign({}, i),
          c = "",
          a = !0,
          o = "",
          e = void 0 === this.getPort() || null === this.getPort() ? "" : this.getPort();

      if (s.tokens.forEach(function (e) {
        if ("text" === e[0] && "string" == typeof e[1]) return c = l.encodePathComponent(e[1]) + c, void (a = !1);
        if ("variable" !== e[0]) throw new Error('The token type "' + e[0] + '" is not supported.');
        6 === e.length && !0 === e[5] && (a = !1);
        var t = s.defaults && !Array.isArray(s.defaults) && "string" == typeof e[3] && e[3] in s.defaults;

        if (!1 === a || !t || "string" == typeof e[3] && e[3] in i && !Array.isArray(s.defaults) && i[e[3]] != s.defaults[e[3]]) {
          var o,
              n = void 0;
          if ("string" == typeof e[3] && e[3] in i) n = i[e[3]], delete u[e[3]];else {
            if ("string" != typeof e[3] || !t || Array.isArray(s.defaults)) {
              if (a) return;
              throw new Error('The route "' + r + '" requires the parameter "' + e[3] + '".');
            }

            n = s.defaults[e[3]];
          }
          (!0 === n || !1 === n || "" === n) && a || (o = l.encodePathComponent(n), c = e[1] + (o = "null" === o && null === n ? "" : o) + c), a = !1;
        } else t && "string" == typeof e[3] && e[3] in u && delete u[e[3]];
      }), "" === c && (c = "/"), s.hosttokens.forEach(function (e) {
        var t;
        "text" !== e[0] ? "variable" === e[0] && (e[3] in i ? (t = i[e[3]], delete u[e[3]]) : s.defaults && !Array.isArray(s.defaults) && e[3] in s.defaults && (t = s.defaults[e[3]]), o = e[1] + t + o) : o = e[1] + o;
      }), c = this.context_.base_url + c, s.requirements && "_scheme" in s.requirements && this.getScheme() != s.requirements._scheme ? (t = o || this.getHost(), c = s.requirements._scheme + "://" + t + (-1 < t.indexOf(":" + e) || "" === e ? "" : ":" + e) + c) : void 0 !== s.schemes && void 0 !== s.schemes[0] && this.getScheme() !== s.schemes[0] ? (t = o || this.getHost(), c = s.schemes[0] + "://" + t + (-1 < t.indexOf(":" + e) || "" === e ? "" : ":" + e) + c) : o && this.getHost() !== o + (-1 < o.indexOf(":" + e) || "" === e ? "" : ":" + e) ? c = this.getScheme() + "://" + o + (-1 < o.indexOf(":" + e) || "" === e ? "" : ":" + e) + c : !0 === p && (c = this.getScheme() + "://" + this.getHost() + (-1 < this.getHost().indexOf(":" + e) || "" === e ? "" : ":" + e) + c), 0 < Object.keys(u).length) {
        var f = function f(e, t) {
          t = null === (t = "function" == typeof t ? t() : t) ? "" : t, h.push(l.encodeQueryComponent(e) + "=" + l.encodeQueryComponent(t));
        };

        var n,
            h = [];

        for (n in u) {
          u.hasOwnProperty(n) && this.buildQueryParams(n, u[n], f);
        }

        c = c + "?" + h.join("&");
      }

      return c;
    }, l.customEncodeURIComponent = function (e) {
      return encodeURIComponent(e).replace(/%2F/g, "/").replace(/%40/g, "@").replace(/%3A/g, ":").replace(/%21/g, "!").replace(/%3B/g, ";").replace(/%2C/g, ",").replace(/%2A/g, "*").replace(/\(/g, "%28").replace(/\)/g, "%29").replace(/'/g, "%27");
    }, l.encodePathComponent = function (e) {
      return l.customEncodeURIComponent(e).replace(/%3D/g, "=").replace(/%2B/g, "+").replace(/%21/g, "!").replace(/%7C/g, "|");
    }, l.encodeQueryComponent = function (e) {
      return l.customEncodeURIComponent(e).replace(/%3F/g, "?");
    }, l;
  }(), t.Router = o, t.Routing = new o(), t["default"] = t.Routing;
  var t,
      o = {
    Router: t.Router,
    Routing: t.Routing
  };
   true ? !(__WEBPACK_AMD_DEFINE_ARRAY__ = [], __WEBPACK_AMD_DEFINE_FACTORY__ = (o.Routing),
		__WEBPACK_AMD_DEFINE_RESULT__ = (typeof __WEBPACK_AMD_DEFINE_FACTORY__ === 'function' ?
		(__WEBPACK_AMD_DEFINE_FACTORY__.apply(exports, __WEBPACK_AMD_DEFINE_ARRAY__)) : __WEBPACK_AMD_DEFINE_FACTORY__),
		__WEBPACK_AMD_DEFINE_RESULT__ !== undefined && (module.exports = __WEBPACK_AMD_DEFINE_RESULT__)) : 0;
}(this);

/***/ }),

/***/ "./public/js/fos_js_routes.json":
/*!**************************************!*\
  !*** ./public/js/fos_js_routes.json ***!
  \**************************************/
/***/ ((module) => {

"use strict";
module.exports = JSON.parse('{"base_url":"","routes":{"app_congress_show":{"tokens":[["variable","/","[^/]++","id",true],["text","/congress"]],"defaults":[],"requirements":[],"hosttokens":[],"methods":["GET"],"schemes":[]}},"prefix":"","host":"localhost","port":"","scheme":"http","locale":""}');

/***/ })

}]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiYXNzZXRzX2NvbnRyb2xsZXJzX3NhbmRib3hfYXBpX2dyaWRfY29udHJvbGxlcl9qcy5qcyIsIm1hcHBpbmdzIjoiOzs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7QUFBQTtBQUNBO0FBQ0E7QUFFQTtBQUNBO0FBQ0E7Q0FFQTs7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0NBR0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBRUE7QUFDQTtBQUVBOztBQUNBLElBQUlJLE1BQU0sR0FBRyxLQUFiLEVBRUE7QUFDQTtBQUNBO0FBQ0E7O0FBQ0FBLE1BQU0sR0FBR0MsbUJBQU8sQ0FBQywwRUFBRCxDQUFoQjtBQUNBO0FBRUFDLGtJQUFBLENBQXVCRixNQUF2QjtBQUVBO0FBRUFJLDREQUFBLENBQVksVUFBVUEsSUFBVixFQUFnQjtFQUN4QkEsSUFBSSxDQUFDRSxTQUFMLENBQWVELE1BQWYsQ0FBc0IsTUFBdEIsRUFBOEIsVUFBQ0UsS0FBRCxFQUFRQyxXQUFSLEVBQXdCO0lBRWxELE9BQU9BLFdBQVcsQ0FBQ0MsS0FBbkIsQ0FGa0QsQ0FFeEI7O0lBQzFCLElBQUlDLElBQUksR0FBR1IsNEhBQUEsQ0FBaUJLLEtBQWpCLEVBQXdCQyxXQUF4QixDQUFYLENBSGtELENBSWxEO0lBQ0E7SUFDQTtJQUNBO0lBQ0E7O0lBQ0EsT0FBT0UsSUFBUDtFQUNILENBVkQ7QUFXSCxDQVpELEdBZUE7QUFDQTs7Q0FFQTs7QUFHQUcsT0FBTyxDQUFDQyxNQUFSLENBQWVaLHFIQUFmLEVBQXdCLHdCQUF4QixHQUNBO0FBRUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTs7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b00sQ0FBSixFQUFyNkksRUFBMjZJZ0MsQ0FBQyxXQUFELEdBQVVBLENBQUMsQ0FBQ3BPLE9BQXY3STtFQUErN0ksSUFBSW9PLENBQUo7RUFBQSxJQUFNaEMsQ0FBQyxHQUFDO0lBQUNrQyxNQUFNLEVBQUNGLENBQUMsQ0FBQ0UsTUFBVjtJQUFpQnRPLE9BQU8sRUFBQ29PLENBQUMsQ0FBQ3BPO0VBQTNCLENBQVI7RUFBNEMsUUFBc0M0UixpQ0FBTyxFQUFELG9DQUFJeEYsQ0FBQyxDQUFDcE0sT0FBTjtBQUFBO0FBQUE7QUFBQSxrR0FBNUMsR0FBMkQsQ0FBM0Q7QUFBMEssQ0FBanFKLENBQWtxSixJQUFscUosQ0FBRCIsInNvdXJjZXMiOlsid2VicGFjazovLy8uL2Fzc2V0cy9jb250cm9sbGVycy9zYW5kYm94X2FwaV9ncmlkX2NvbnRyb2xsZXIuanMiLCJ3ZWJwYWNrOi8vLy4vdmVuZG9yL2ZyaWVuZHNvZnN5bWZvbnkvanNyb3V0aW5nLWJ1bmRsZS9SZXNvdXJjZXMvcHVibGljL2pzL3JvdXRlci5taW4uanMiXSwic291cmNlc0NvbnRlbnQiOlsiLy8gZHVyaW5nIGRldiwgZnJvbSBwcm9qZWN0X2RpciBydW5cbi8vIGxuIC1zIH4vc3Vydm9zL2J1bmRsZXMvYXBpLWdyaWQtYnVuZGxlL2Fzc2V0cy9zcmMvY29udHJvbGxlcnMvc2FuZGJveF9hcGlfY29udHJvbGxlci5qcyBhc3NldHMvY29udHJvbGxlcnMvc2FuZGJveF9hcGlfY29udHJvbGxlci5qc1xuaW1wb3J0IHtDb250cm9sbGVyfSBmcm9tIFwiQGhvdHdpcmVkL3N0aW11bHVzXCI7XG5cbmltcG9ydCB7ZGVmYXVsdCBhcyBheGlvc30gZnJvbSBcImF4aW9zXCI7XG5pbXBvcnQgRGF0YVRhYmxlcyBmcm9tIFwiZGF0YXRhYmxlcy5uZXQtYnM1XCI7XG5pbXBvcnQgJ2RhdGF0YWJsZXMubmV0LXNlbGVjdC1iczUnO1xuaW1wb3J0ICdkYXRhdGFibGVzLm5ldC1yZXNwb25zaXZlJztcbi8vIGltcG9ydCAnZGF0YXRhYmxlcy5uZXQtcmVzcG9uc2l2ZS1iczUnO1xuaW1wb3J0ICdkYXRhdGFibGVzLm5ldC1idXR0b25zLWJzNSc7XG5pbXBvcnQgJ2RhdGF0YWJsZXMubmV0LXNlYXJjaHBhbmVzLWJzNSc7XG5pbXBvcnQgJ2RhdGF0YWJsZXMubmV0LXNjcm9sbGVyLWJzNSc7XG5pbXBvcnQgJ2RhdGF0YWJsZXMubmV0LWJ1dHRvbnMvanMvYnV0dG9ucy5jb2xWaXMubWluJztcbmltcG9ydCAnZGF0YXRhYmxlcy5uZXQtYnV0dG9ucy9qcy9idXR0b25zLmh0bWw1Lm1pbic7XG5pbXBvcnQgJ2RhdGF0YWJsZXMubmV0LWJ1dHRvbnMvanMvYnV0dG9ucy5wcmludC5taW4nO1xuXG4vLyBzaG91bGRuJ3QgdGhlc2UgYmUgYXV0b21hdGljYWxseSBpbmNsdWRlZCAoZnJvbSBwYWNrYWdlLmpzb24pXG4vLyBpbXBvcnQgJ2RhdGF0YWJsZXMubmV0LXNjcm9sbGVyJztcbi8vIGltcG9ydCAnZGF0YXRhYmxlcy5uZXQtc2Nyb2xsZXItYnM1Jztcbi8vIGltcG9ydCAnZGF0YXRhYmxlcy5uZXQtZGF0ZXRpbWUnO1xuLy8gaW1wb3J0ICdkYXRhdGFibGVzLm5ldC1zZWFyY2hidWlsZGVyLWJzNSc7XG4vLyBpbXBvcnQgJ2RhdGF0YWJsZXMubmV0LWZpeGVkaGVhZGVyLWJzNSc7XG4vLyBpbXBvcnQgJ2RhdGF0YWJsZXMubmV0LXJlc3BvbnNpdmUtYnM1Jztcbi8vIGNvbnN0IERhdGFUYWJsZSA9IHJlcXVpcmUoJ2RhdGF0YWJsZXMubmV0Jyk7XG4vLyBpbXBvcnQoJ2RhdGF0YWJsZXMubmV0LWJ1dHRvbnMtYnM1Jyk7XG5cbi8vIGltcG9ydCgnZGF0YXRhYmxlcy5uZXQtYnM1Jyk7XG4vLyBpbXBvcnQoJ2RhdGF0YWJsZXMubmV0LXNlbGVjdC1iczUnKTtcblxuLy8gaWYgY29tcG9uZW50XG5sZXQgcm91dGVzID0gZmFsc2U7XG5cbi8vIGlmIGxpdmVcbi8vIGltcG9ydCBSb3V0aW5nIGZyb20gJy4uLy4uLy4uLy4uLy4uL3ZlbmRvci9mcmllbmRzb2ZzeW1mb255L2pzcm91dGluZy1idW5kbGUvUmVzb3VyY2VzL3B1YmxpYy9qcy9yb3V0ZXIubWluLmpzJztcbi8vIHJvdXRlcyA9IHJlcXVpcmUoJy4uLy4uLy4uLy4uLy4uL3B1YmxpYy9qcy9mb3NfanNfcm91dGVzLmpzb24nKTtcbi8vIGlmIGxvY2FsXG5yb3V0ZXMgPSByZXF1aXJlKCcuLi8uLi9wdWJsaWMvanMvZm9zX2pzX3JvdXRlcy5qc29uJyk7XG5pbXBvcnQgUm91dGluZyBmcm9tICcuLi8uLi92ZW5kb3IvZnJpZW5kc29mc3ltZm9ueS9qc3JvdXRpbmctYnVuZGxlL1Jlc291cmNlcy9wdWJsaWMvanMvcm91dGVyLm1pbi5qcyc7XG5cblJvdXRpbmcuc2V0Um91dGluZ0RhdGEocm91dGVzKTtcblxuaW1wb3J0IFR3aWcgZnJvbSAndHdpZy90d2lnLm1pbic7XG5cblR3aWcuZXh0ZW5kKGZ1bmN0aW9uIChUd2lnKSB7XG4gICAgVHdpZy5fZnVuY3Rpb24uZXh0ZW5kKCdwYXRoJywgKHJvdXRlLCByb3V0ZVBhcmFtcykgPT4ge1xuXG4gICAgICAgIGRlbGV0ZSByb3V0ZVBhcmFtcy5fa2V5czsgLy8gc2VlbXMgdG8gYmUgYWRkZWQgYnkgdHdpZ2pzXG4gICAgICAgIGxldCBwYXRoID0gUm91dGluZy5nZW5lcmF0ZShyb3V0ZSwgcm91dGVQYXJhbXMpO1xuICAgICAgICAvLyBpZiAocm91dGUgPT0gJ2NhdGVnb3J5X3Nob3cnKSB7XG4gICAgICAgIC8vICAgICBjb25zb2xlLmVycm9yKHJvdXRlKTtcbiAgICAgICAgLy8gICAgIGNvbnNvbGUud2Fybihyb3V0ZVBhcmFtcyk7XG4gICAgICAgIC8vICAgICBjb25zb2xlLmxvZyhwYXRoKTtcbiAgICAgICAgLy8gfVxuICAgICAgICByZXR1cm4gcGF0aDtcbiAgICB9KTtcbn0pO1xuXG5cbi8vIGltcG9ydCB7TW9kYWx9IGZyb20gXCJib290c3RyYXBcIjsgISFcbi8vIGh0dHBzOi8vc3RhY2tvdmVyZmxvdy5jb20vcXVlc3Rpb25zLzY4MDg0NzQyL2Ryb3Bkb3duLWRvZXNudC13b3JrLWFmdGVyLW1vZGFsLW9mLWJvb3RzdHJhcC1pbXBvcnRlZFxuaW1wb3J0IE1vZGFsIGZyb20gJ2Jvb3RzdHJhcC9qcy9kaXN0L21vZGFsJztcbi8vIGltcG9ydCBjYiBmcm9tIFwiLi4vanMvYXBwLWJ1dHRvbnNcIjtcblxuXG5jb25zb2xlLmFzc2VydChSb3V0aW5nLCAnUm91dGluZyBpcyBub3QgZGVmaW5lZCcpO1xuLy8gZ2xvYmFsLlJvdXRpbmcgPSBSb3V0aW5nO1xuXG4vLyB0cnkge1xuLy8gfSBjYXRjaCAoZSkge1xuLy8gICAgIGNvbnNvbGUuZXJyb3IoZSk7XG4vLyAgICAgY29uc29sZS53YXJuKFwiRk9TIEpTIFJvdXRpbmcgbm90IGxvYWRlZCwgc28gcGF0aCgpIHdvbid0IHdvcmtcIik7XG4vLyB9XG5cbmNvbnN0IGNvbnRlbnRUeXBlcyA9IHtcbiAgICAnUEFUQ0gnOiAnYXBwbGljYXRpb24vbWVyZ2UtcGF0Y2granNvbicsXG4gICAgJ1BPU1QnOiAnYXBwbGljYXRpb24vanNvbidcbn07XG5cbi8qIHN0aW11bHVzRmV0Y2g6ICdsYXp5JyAqL1xuZXhwb3J0IGRlZmF1bHQgY2xhc3MgZXh0ZW5kcyBDb250cm9sbGVyIHtcbiAgICBzdGF0aWMgdGFyZ2V0cyA9IFsndGFibGUnLCAnbW9kYWwnLCAnbW9kYWxCb2R5JywgJ2ZpZWxkU2VhcmNoJywgJ21lc3NhZ2UnXTtcbiAgICBzdGF0aWMgdmFsdWVzID0ge1xuICAgICAgICBhcGlDYWxsOiB7dHlwZTogU3RyaW5nLCBkZWZhdWx0OiAnJ30sXG4gICAgICAgIHNlYXJjaFBhbmVzRGF0YVVybDoge3R5cGU6IFN0cmluZywgZGVmYXVsdDogJyd9LFxuICAgICAgICBjb2x1bW5Db25maWd1cmF0aW9uOiB7dHlwZTogU3RyaW5nLCBkZWZhdWx0OiAnW10nfSxcbiAgICAgICAgbG9jYWxlOiB7dHlwZTogU3RyaW5nLCBkZWZhdWx0OiAnbm8tbG9jYWxlISd9LFxuICAgICAgICBkb206IHt0eXBlOiBTdHJpbmcsIGRlZmF1bHQ6ICdQbGZydGlwJ30sXG4gICAgICAgIGZpbHRlcjogU3RyaW5nXG4gICAgfVxuICAgIC8vIHdpdGggc2VhcmNoUGFuZXMgZG9tOiB7dHlwZTogU3RyaW5nLCBkZWZhdWx0OiAnUDxcImR0c3AtZGF0YVRhYmxlXCJyUWZ0aT4nfSxcbiAgICAvLyBzb3J0YWJsZUZpZWxkczoge3R5cGU6IFN0cmluZywgZGVmYXVsdDogJ1tdJ30sXG4gICAgLy8gc2VhcmNoYWJsZUZpZWxkczoge3R5cGU6IFN0cmluZywgZGVmYXVsdDogJ1tdJ30sXG4gICAgLy8gc2VhcmNoQnVpbGRlckZpZWxkczoge3R5cGU6IFN0cmluZywgZGVmYXVsdDogJ1tdJ30sXG5cbiAgICBjb2xzKCkge1xuICAgICAgICBsZXQgeCA9IHRoaXMuY29sdW1ucy5tYXAoYyA9PiB7XG4gICAgICAgICAgICBsZXQgcmVuZGVyID0gbnVsbDtcbiAgICAgICAgICAgIGlmIChjLnR3aWdUZW1wbGF0ZSkge1xuICAgICAgICAgICAgICAgIGxldCB0ZW1wbGF0ZSA9IFR3aWcudHdpZyh7XG4gICAgICAgICAgICAgICAgICAgIGRhdGE6IGMudHdpZ1RlbXBsYXRlXG4gICAgICAgICAgICAgICAgfSk7XG4gICAgICAgICAgICAgICAgcmVuZGVyID0gKGRhdGEsIHR5cGUsIHJvdywgbWV0YSkgPT4ge1xuICAgICAgICAgICAgICAgICAgICByZXR1cm4gdGVtcGxhdGUucmVuZGVyKHtkYXRhOiBkYXRhLCByb3c6IHJvdywgZmllbGRfbmFtZTogYy5uYW1lfSlcbiAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICB9XG5cbiAgICAgICAgICAgIGlmIChjLm5hbWUgPT09ICdfYWN0aW9ucycpIHtcbiAgICAgICAgICAgICAgICByZXR1cm4gdGhpcy5hY3Rpb25zKHtwcmVmaXg6IGMucHJlZml4LCBhY3Rpb25zOiBjLmFjdGlvbnN9KVxuICAgICAgICAgICAgfVxuXG4gICAgICAgICAgICByZXR1cm4gdGhpcy5jKHtcbiAgICAgICAgICAgICAgICBwcm9wZXJ0eU5hbWU6IGMubmFtZSxcbiAgICAgICAgICAgICAgICBkYXRhOiBjLm5hbWUsXG4gICAgICAgICAgICAgICAgbGFiZWw6IGMudGl0bGUsXG4gICAgICAgICAgICAgICAgcm91dGU6IGMucm91dGUsXG4gICAgICAgICAgICAgICAgbG9jYWxlOiBjLmxvY2FsZSxcbiAgICAgICAgICAgICAgICByZW5kZXI6IHJlbmRlclxuICAgICAgICAgICAgfSlcbiAgICAgICAgfSk7XG4gICAgICAgIHJldHVybiB4O1xuXG4gICAgfVxuXG4gICAgY29ubmVjdCgpIHtcbiAgICAgICAgc3VwZXIuY29ubmVjdCgpOyAvL1xuICAgICAgICBjb25zdCBldmVudCA9IG5ldyBDdXN0b21FdmVudChcImNoYW5nZUZvcm1VcmxFdmVudFwiLCB7Zm9ybVVybDogJ3Rlc3RpbmcgZm9ybVVSTCEnfSk7XG4gICAgICAgIHdpbmRvdy5kaXNwYXRjaEV2ZW50KGV2ZW50KTtcblxuXG4gICAgICAgIHRoaXMuY29sdW1ucyA9IEpTT04ucGFyc2UodGhpcy5jb2x1bW5Db25maWd1cmF0aW9uVmFsdWUpO1xuICAgICAgICAvLyBcImNvbXBpbGVcIiB0aGUgY3VzdG9tIHR3aWcgYmxvY2tzXG4gICAgICAgIC8vIHZhciBjb2x1bW5SZW5kZXIgPSBbXTtcbiAgICAgICAgdGhpcy5kb20gPSB0aGlzLmRvbVZhbHVlO1xuICAgICAgICAvLyBkb206ICdQbGZydGlwJyxcbiAgICAgICAgY29uc29sZS5hc3NlcnQodGhpcy5kb20sIFwiTWlzc2luZyBkb21cIik7XG5cbiAgICAgICAgdGhpcy5maWx0ZXIgPSBKU09OLnBhcnNlKHRoaXMuZmlsdGVyVmFsdWUgfHwgJ1tdJylcbiAgICAgICAgdGhpcy5zb3J0YWJsZUZpZWxkcyA9IEpTT04ucGFyc2UodGhpcy5zb3J0YWJsZUZpZWxkc1ZhbHVlKTtcbiAgICAgICAgdGhpcy5zZWFyY2hhYmxlRmllbGRzID0gSlNPTi5wYXJzZSh0aGlzLnNlYXJjaGFibGVGaWVsZHNWYWx1ZSk7XG4gICAgICAgIHRoaXMuc2VhcmNoQnVpbGRlckZpZWxkcyA9IEpTT04ucGFyc2UodGhpcy5zZWFyY2hCdWlsZGVyRmllbGRzVmFsdWUpO1xuXG4gICAgICAgIHRoaXMubG9jYWxlID0gdGhpcy5sb2NhbGVWYWx1ZTtcblxuICAgICAgICBjb25zb2xlLmxvZygnaG9sYSBmcm9tICcgKyB0aGlzLmlkZW50aWZpZXIgKyAnIGxvY2FsZTogJyArIHRoaXMubG9jYWxlVmFsdWUpO1xuXG4gICAgICAgIC8vIGNvbnNvbGUubG9nKHRoaXMuaGFzVGFibGVUYXJnZXQgPyAndGFibGUgdGFyZ2V0IGV4aXN0cycgOiAnbWlzc2luZyB0YWJsZSB0YXJnZXQnKVxuICAgICAgICAvLyBjb25zb2xlLmxvZyh0aGlzLmhhc01vZGFsVGFyZ2V0ID8gJ3RhcmdldCBleGlzdHMnIDogJ21pc3NpbmcgbW9kYWxzdGFyZ2V0JylcbiAgICAgICAgLy8gLy8gY29uc29sZS5sb2codGhpcy5maWVsZFNlYXJjaCA/ICd0YXJnZXQgZXhpc3RzJyA6ICdtaXNzaW5nIGZpZWxkU2VhcmNoJylcbiAgICAgICAgLy8gY29uc29sZS5sb2codGhpcy5zb3J0YWJsZUZpZWxkc1ZhbHVlKTtcbiAgICAgICAgY29uc29sZS5hc3NlcnQodGhpcy5oYXNNb2RhbFRhcmdldCwgXCJNaXNzaW5nIG1vZGFsIHRhcmdldFwiKTtcbiAgICAgICAgdGhpcy50aGF0ID0gdGhpcztcbiAgICAgICAgdGhpcy50YWJsZUVsZW1lbnQgPSBmYWxzZTtcbiAgICAgICAgaWYgKHRoaXMuaGFzVGFibGVUYXJnZXQpIHtcbiAgICAgICAgICAgIHRoaXMudGFibGVFbGVtZW50ID0gdGhpcy50YWJsZVRhcmdldDtcbiAgICAgICAgfSBlbHNlIGlmICh0aGlzLmVsZW1lbnQudGFnTmFtZSA9PT0gJ1RBQkxFJykge1xuICAgICAgICAgICAgdGhpcy50YWJsZUVsZW1lbnQgPSB0aGlzLmVsZW1lbnQ7XG4gICAgICAgIH0gZWxzZSB7XG4gICAgICAgICAgICB0aGlzLnRhYmxlRWxlbWVudCA9IGRvY3VtZW50LmdldEVsZW1lbnRzQnlUYWdOYW1lKCd0YWJsZScpWzBdO1xuICAgICAgICB9XG4gICAgICAgIC8vIGVsc2Uge1xuICAgICAgICAvLyAgICAgY29uc29sZS5lcnJvcignQSB0YWJsZSBlbGVtZW50IGlzIHJlcXVpcmVkLicpO1xuICAgICAgICAvLyB9XG4gICAgICAgIGlmICh0aGlzLnRhYmxlRWxlbWVudCkge1xuICAgICAgICAgICAgLy8gZ2V0IHRoZSAoY2FjaGVkKSBmaWVsZHMgZmlyc3QsIHRoZW4gbG9hZCB0aGUgZGF0YXRhYmxlXG4gICAgICAgICAgICBpZiAodGhpcy5zZWFyY2hQYW5lc0RhdGFVcmxWYWx1ZSkge1xuICAgICAgICAgICAgICAgIGF4aW9zLmdldCh0aGlzLnNlYXJjaFBhbmVzRGF0YVVybFZhbHVlLCB7fSlcbiAgICAgICAgICAgICAgICAgICAgLnRoZW4oKHJlc3BvbnNlKSA9PiB7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgLy8gaGFuZGxlIHN1Y2Nlc3NcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAvLyBjb25zb2xlLmxvZyhyZXNwb25zZS5kYXRhKTtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICB0aGlzLmR0ID0gdGhpcy5pbml0RGF0YVRhYmxlKHRoaXMudGFibGVFbGVtZW50LCByZXNwb25zZS5kYXRhKTtcbiAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgKTtcbiAgICAgICAgICAgIH0gZWxzZSB7XG4gICAgICAgICAgICAgICAgdGhpcy5kdCA9IHRoaXMuaW5pdERhdGFUYWJsZSh0aGlzLnRhYmxlRWxlbWVudCwgW10pO1xuICAgICAgICAgICAgfVxuICAgICAgICAgICAgdGhpcy5pbml0aWFsaXplZCA9IHRydWU7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICBvcGVuTW9kYWwoZSkge1xuICAgICAgICBjb25zb2xlLmVycm9yKCd5YXksIG9wZW4gbW9kYWwhJywgZSwgZS5jdXJyZW50VGFyZ2V0LCBlLmN1cnJlbnRUYXJnZXQuZGF0YXNldCk7XG5cbiAgICAgICAgdGhpcy5tb2RhbFRhcmdldC5hZGRFdmVudExpc3RlbmVyKCdzaG93LmJzLm1vZGFsJywgKGUpID0+IHtcbiAgICAgICAgICAgIGNvbnNvbGUubG9nKGUsIGUucmVsYXRlZFRhcmdldCwgZS5jdXJyZW50VGFyZ2V0KTtcbiAgICAgICAgICAgIC8vIGRvIHNvbWV0aGluZy4uLlxuICAgICAgICB9KTtcblxuICAgICAgICB0aGlzLm1vZGFsID0gbmV3IE1vZGFsKHRoaXMubW9kYWxUYXJnZXQpO1xuICAgICAgICBjb25zb2xlLmxvZyh0aGlzLm1vZGFsKTtcbiAgICAgICAgdGhpcy5tb2RhbC5zaG93KCk7XG5cbiAgICB9XG5cbiAgICBjcmVhdGVkUm93KHJvdywgZGF0YSwgZGF0YUluZGV4KSB7XG4gICAgICAgIC8vIHdlIGNvdWxkIGFkZCB0aGUgdGh1bWJuYWlsIFVSTCBoZXJlLlxuICAgICAgICAvLyBjb25zb2xlLmxvZyhyb3csIGRhdGEsIGRhdGFJbmRleCwgdGhpcy5pZGVudGlmaWVyKTtcbiAgICAgICAgLy8gbGV0IGFhQ29udHJvbGxlciA9ICdwcm9qZWN0cyc7XG4gICAgICAgIC8vIHJvdy5jbGFzc0xpc3QuYWRkKFwidGV4dC1kYW5nZXJcIik7XG4gICAgICAgIC8vIHJvdy5zZXRBdHRyaWJ1dGUoJ2RhdGEtYWN0aW9uJywgYWFDb250cm9sbGVyICsgJyNvcGVuTW9kYWwnKTtcbiAgICAgICAgLy8gcm93LnNldEF0dHJpYnV0ZSgnZGF0YS1jb250cm9sbGVyJywgJ21vZGFsLWZvcm0nLCB7Zm9ybVVybDogJ3Rlc3QnfSk7XG4gICAgfVxuXG4gICAgbm90aWZ5KG1lc3NhZ2UpIHtcbiAgICAgICAgY29uc29sZS5sb2cobWVzc2FnZSk7XG4gICAgICAgIHRoaXMubWVzc2FnZVRhcmdldC5pbm5lckhUTUwgPSBtZXNzYWdlO1xuICAgIH1cblxuXG4gICAgaGFuZGxlVHJhbnMoZWwpIHtcbiAgICAgICAgbGV0IHRyYW5zaXRpb25CdXR0b25zID0gZWwucXVlcnlTZWxlY3RvckFsbCgnYnV0dG9uLnRyYW5zaXRpb24nKTtcbiAgICAgICAgLy8gY29uc29sZS5sb2codHJhbnNpdGlvbkJ1dHRvbnMpO1xuICAgICAgICB0cmFuc2l0aW9uQnV0dG9ucy5mb3JFYWNoKGJ0biA9PiBidG4uYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCAoZXZlbnQpID0+IHtcbiAgICAgICAgICAgIGNvbnN0IGlzQnV0dG9uID0gZXZlbnQudGFyZ2V0Lm5vZGVOYW1lID09PSAnQlVUVE9OJztcbiAgICAgICAgICAgIGlmICghaXNCdXR0b24pIHtcbiAgICAgICAgICAgICAgICByZXR1cm47XG4gICAgICAgICAgICB9XG4gICAgICAgICAgICBjb25zb2xlLmxvZyhldmVudCwgZXZlbnQudGFyZ2V0LCBldmVudC5jdXJyZW50VGFyZ2V0KTtcblxuICAgICAgICAgICAgbGV0IHJvdyA9IHRoaXMuZHQucm93KGV2ZW50LnRhcmdldC5jbG9zZXN0KCd0cicpKTtcbiAgICAgICAgICAgIGxldCBkYXRhID0gcm93LmRhdGEoKTtcbiAgICAgICAgICAgIGNvbnNvbGUubG9nKHJvdywgZGF0YSk7XG4gICAgICAgICAgICB0aGlzLm5vdGlmeSgnZGVsZXRpbmcgJyArIGRhdGEuaWQpO1xuXG4gICAgICAgICAgICAvLyBjb25zb2xlLmRpcihldmVudC50YXJnZXQuaWQpO1xuICAgICAgICB9KSk7XG5cbiAgICB9XG5cbiAgICByZXF1ZXN0VHJhbnNpdGlvbihyb3V0ZSwgZW50aXR5Q2xhc3MsIGlkKSB7XG5cbiAgICB9XG5cbi8vIGVoLi4uIG5vdCB3b3JraW5nXG4gICAgZ2V0IG1vZGFsQ29udHJvbGxlcigpIHtcbiAgICAgICAgcmV0dXJuIHRoaXMuYXBwbGljYXRpb24uZ2V0Q29udHJvbGxlckZvckVsZW1lbnRBbmRJZGVudGlmaWVyKHRoaXMubW9kYWxUYXJnZXQsIFwibW9kYWxfZm9ybVwiKVxuICAgIH1cblxuICAgIGFkZEJ1dHRvbkNsaWNrTGlzdGVuZXIoZHQpIHtcbiAgICAgICAgY29uc29sZS5sb2coXCJMaXN0ZW5pbmcgZm9yIGJ1dHRvbi50cmFuc2l0aW9uIGFuZCBidXR0b24gLmJ0bi1tb2RhbCBjbGlja3MgZXZlbnRzXCIpO1xuXG4gICAgICAgIGR0Lm9uKCdjbGljaycsICd0ciB0ZCBidXR0b24udHJhbnNpdGlvbicsICgkZXZlbnQpID0+IHtcbiAgICAgICAgICAgIGNvbnNvbGUubG9nKCRldmVudC5jdXJyZW50VGFyZ2V0KTtcbiAgICAgICAgICAgIGxldCB0YXJnZXQgPSAkZXZlbnQuY3VycmVudFRhcmdldDtcbiAgICAgICAgICAgIHZhciBkYXRhID0gZHQucm93KHRhcmdldC5jbG9zZXN0KCd0cicpKS5kYXRhKCk7XG4gICAgICAgICAgICBsZXQgdHJhbnNpdGlvbiA9IHRhcmdldC5kYXRhc2V0Wyd0J107XG4gICAgICAgICAgICBjb25zb2xlLmxvZyh0cmFuc2l0aW9uLCB0YXJnZXQpO1xuICAgICAgICAgICAgY29uc29sZS5sb2coZGF0YSwgJGV2ZW50KTtcbiAgICAgICAgICAgIHRoaXMudGhhdC5tb2RhbEJvZHlUYXJnZXQuaW5uZXJIVE1MID0gdHJhbnNpdGlvbjtcbiAgICAgICAgICAgIHRoaXMubW9kYWwgPSBuZXcgTW9kYWwodGhpcy5tb2RhbFRhcmdldCk7XG4gICAgICAgICAgICB0aGlzLm1vZGFsLnNob3coKTtcblxuICAgICAgICB9KTtcblxuICAgICAgICAvLyBkdC5vbignY2xpY2snLCAndHIgdGQgYnV0dG9uIC5idG4tbW9kYWwnLCAgKCRldmVudCwgeCkgPT4ge1xuICAgICAgICBkdC5vbignY2xpY2snLCAndHIgdGQgYnV0dG9uICcsICgkZXZlbnQsIHgpID0+IHtcbiAgICAgICAgICAgIGNvbnNvbGUubG9nKCRldmVudCwgJGV2ZW50LmN1cnJlbnRUYXJnZXQpO1xuICAgICAgICAgICAgdmFyIGRhdGEgPSBkdC5yb3coJGV2ZW50LmN1cnJlbnRUYXJnZXQuY2xvc2VzdCgndHInKSkuZGF0YSgpO1xuICAgICAgICAgICAgY29uc29sZS5sb2coZGF0YSwgJGV2ZW50LCB4KTtcbiAgICAgICAgICAgIGNvbnNvbGUud2FybihcImRpc3BhdGNoaW5nIGNoYW5nZUZvcm1VcmxFdmVudFwiKTtcbiAgICAgICAgICAgIGNvbnN0IGV2ZW50ID0gbmV3IEN1c3RvbUV2ZW50KFwiY2hhbmdlRm9ybVVybEV2ZW50XCIsIHtmb3JtVXJsOiAndGVzdCd9KTtcbiAgICAgICAgICAgIHdpbmRvdy5kaXNwYXRjaEV2ZW50KGV2ZW50KTtcblxuXG4gICAgICAgICAgICBsZXQgYnRuID0gJGV2ZW50LmN1cnJlbnRUYXJnZXQ7XG4gICAgICAgICAgICBsZXQgbW9kYWxSb3V0ZSA9IGJ0bi5kYXRhc2V0Lm1vZGFsUm91dGU7XG4gICAgICAgICAgICBpZiAobW9kYWxSb3V0ZSkge1xuICAgICAgICAgICAgICAgIHRoaXMubW9kYWxCb2R5VGFyZ2V0LmlubmVySFRNTCA9IGRhdGEuY29kZTtcbiAgICAgICAgICAgICAgICB0aGlzLm1vZGFsID0gbmV3IE1vZGFsKHRoaXMubW9kYWxUYXJnZXQpO1xuICAgICAgICAgICAgICAgIHRoaXMubW9kYWwuc2hvdygpO1xuICAgICAgICAgICAgICAgIGNvbnNvbGUuYXNzZXJ0KGRhdGEucnAsIFwibWlzc2luZyBycCwgYWRkIEBHcm91cHMgdG8gZW50aXR5XCIpXG4gICAgICAgICAgICAgICAgbGV0IGZvcm1VcmwgPSBSb3V0aW5nLmdlbmVyYXRlKG1vZGFsUm91dGUsIHsuLi5kYXRhLnJwLCBfcGFnZV9jb250ZW50X29ubHk6IDF9KTtcbiAgICAgICAgICAgICAgICBjb25zb2xlLndhcm4oXCJkaXNwYXRjaGluZyBjaGFuZ2VGb3JtVXJsRXZlbnRcIik7XG4gICAgICAgICAgICAgICAgY29uc3QgZXZlbnQgPSBuZXcgQ3VzdG9tRXZlbnQoXCJjaGFuZ2VGb3JtVXJsRXZlbnRcIiwge2RldGFpbDoge2Zvcm1Vcmw6IGZvcm1Vcmx9fSk7XG4gICAgICAgICAgICAgICAgd2luZG93LmRpc3BhdGNoRXZlbnQoZXZlbnQpO1xuICAgICAgICAgICAgICAgIGRvY3VtZW50LmRpc3BhdGNoRXZlbnQoZXZlbnQpO1xuXG4gICAgICAgICAgICAgICAgY29uc29sZS5sb2coJ2dldHRpbmcgZm9ybVVSTCAnICsgZm9ybVVybCk7XG5cblxuICAgICAgICAgICAgICAgIGF4aW9zLmdldChmb3JtVXJsKVxuICAgICAgICAgICAgICAgICAgICAudGhlbihyZXNwb25zZSA9PiB0aGlzLm1vZGFsQm9keVRhcmdldC5pbm5lckhUTUwgPSByZXNwb25zZS5kYXRhKVxuICAgICAgICAgICAgICAgICAgICAuY2F0Y2goZXJyb3IgPT4gdGhpcy5tb2RhbEJvZHlUYXJnZXQuaW5uZXJIVE1MID0gZXJyb3IpXG4gICAgICAgICAgICAgICAgO1xuICAgICAgICAgICAgfVxuXG4gICAgICAgIH0pO1xuICAgIH1cblxuICAgIGFkZFJvd0NsaWNrTGlzdGVuZXIoZHQpIHtcbiAgICAgICAgZHQub24oJ2NsaWNrJywgJ3RyIHRkJywgKCRldmVudCkgPT4ge1xuICAgICAgICAgICAgbGV0IGVsID0gJGV2ZW50LmN1cnJlbnRUYXJnZXQ7XG4gICAgICAgICAgICBjb25zb2xlLmxvZygkZXZlbnQsICRldmVudC5jdXJyZW50VGFyZ2V0KTtcbiAgICAgICAgICAgIHZhciBkYXRhID0gZHQucm93KCRldmVudC5jdXJyZW50VGFyZ2V0KS5kYXRhKCk7XG4gICAgICAgICAgICB2YXIgYnRuID0gZWwucXVlcnlTZWxlY3RvcignYnV0dG9uJyk7XG4gICAgICAgICAgICBjb25zb2xlLmxvZyhidG4pO1xuICAgICAgICAgICAgbGV0IG1vZGFsUm91dGUgPSBudWxsO1xuICAgICAgICAgICAgaWYgKGJ0bikge1xuICAgICAgICAgICAgICAgIGNvbnNvbGUuZXJyb3IoYnRuLCBidG4uZGF0YXNldCwgYnRuLmRhdGFzZXQubW9kYWxSb3V0ZSk7XG4gICAgICAgICAgICAgICAgbW9kYWxSb3V0ZSA9IGJ0bi5kYXRhc2V0Lm1vZGFsUm91dGU7XG4gICAgICAgICAgICB9XG5cblxuICAgICAgICAgICAgaWYgKGVsLnF1ZXJ5U2VsZWN0b3IoXCJhXCIpKSB7XG4gICAgICAgICAgICAgICAgcmV0dXJuOyAvLyBza2lwIGxpbmtzLCBsZXQgaXQgYnViYmxlIHVwIHRvIGhhbmRsZVxuICAgICAgICAgICAgfVxuXG4gICAgICAgICAgICBpZiAobW9kYWxSb3V0ZSkge1xuICAgICAgICAgICAgICAgIHRoaXMubW9kYWxCb2R5VGFyZ2V0LmlubmVySFRNTCA9IGRhdGEuY29kZTtcbiAgICAgICAgICAgICAgICB0aGlzLm1vZGFsID0gbmV3IE1vZGFsKHRoaXMubW9kYWxUYXJnZXQpO1xuICAgICAgICAgICAgICAgIHRoaXMubW9kYWwuc2hvdygpO1xuICAgICAgICAgICAgICAgIGNvbnNvbGUuYXNzZXJ0KGRhdGEucnAsIFwibWlzc2luZyBycCwgYWRkIEBHcm91cHMgdG8gZW50aXR5XCIpXG4gICAgICAgICAgICAgICAgbGV0IGZvcm1VcmwgPSBSb3V0aW5nLmdlbmVyYXRlKG1vZGFsUm91dGUsIGRhdGEucnApO1xuXG4gICAgICAgICAgICAgICAgYXhpb3Moe1xuICAgICAgICAgICAgICAgICAgICBtZXRob2Q6ICdnZXQnLCAvL3lvdSBjYW4gc2V0IHdoYXQgcmVxdWVzdCB5b3Ugd2FudCB0byBiZVxuICAgICAgICAgICAgICAgICAgICB1cmw6IGZvcm1VcmwsXG4gICAgICAgICAgICAgICAgICAgIC8vIGRhdGE6IHtpZDogdmFySUR9LFxuICAgICAgICAgICAgICAgICAgICBoZWFkZXJzOiB7XG4gICAgICAgICAgICAgICAgICAgICAgICBfcGFnZV9jb250ZW50X29ubHk6ICcxJyAvLyBjb3VsZCBzZW5kIGJsb2NrcyB0aGF0IHdlIHdhbnQ/P1xuICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgfSlcbiAgICAgICAgICAgICAgICAgICAgLnRoZW4ocmVzcG9uc2UgPT4gdGhpcy5tb2RhbEJvZHlUYXJnZXQuaW5uZXJIVE1MID0gcmVzcG9uc2UuZGF0YSlcbiAgICAgICAgICAgICAgICAgICAgLmNhdGNoKGVycm9yID0+IHRoaXMubW9kYWxCb2R5VGFyZ2V0LmlubmVySFRNTCA9IGVycm9yKVxuICAgICAgICAgICAgICAgIDtcbiAgICAgICAgICAgIH1cbiAgICAgICAgfSk7XG4gICAgfVxuXG4gICAgaW5pdERhdGFUYWJsZShlbCwgZmllbGRzKSB7XG5cbiAgICAgICAgbGV0IGxvb2t1cCA9IFtdO1xuICAgICAgICBmaWVsZHMuZm9yRWFjaCgoZmllbGQsIGluZGV4KSA9PiB7XG4gICAgICAgICAgICBsb29rdXBbZmllbGQuanNvbktleUNvZGVdID0gZmllbGQ7XG4gICAgICAgIH0pO1xuICAgICAgICBsZXQgc2VhcmNoRmllbGRzQnlDb2x1bW5OdW1iZXIgPSBbXTtcbiAgICAgICAgbGV0IG9wdGlvbnMgPSBbXTtcbiAgICAgICAgdGhpcy5jb2x1bW5zLmZvckVhY2goKGNvbHVtbiwgaW5kZXgpID0+IHtcbiAgICAgICAgICAgIGNvbnNvbGUubG9nKGNvbHVtbik7XG4gICAgICAgICAgICBpZiAoY29sdW1uLnNlYXJjaGFibGUgfHwgY29sdW1uLmJyb3dzYWJsZSApIHtcbiAgICAgICAgICAgICAgICBjb25zb2xlLmVycm9yKGluZGV4KTtcbiAgICAgICAgICAgICAgICBzZWFyY2hGaWVsZHNCeUNvbHVtbk51bWJlci5wdXNoKGluZGV4KTtcbiAgICAgICAgICAgIH1cbiAgICAgICAgICAgIGlmIChjb2x1bW4uYnJvd3NhYmxlICYmIChjb2x1bW4ubmFtZSBpbiBsb29rdXApKSB7XG4gICAgICAgICAgICAgICAgbGV0IGZpZWxkID0gbG9va3VwW2NvbHVtbi5uYW1lXTtcbiAgICAgICAgICAgICAgICBvcHRpb25zW2ZpZWxkLmpzb25LZXlDb2RlXSA9IFtdO1xuICAgICAgICAgICAgICAgIGZvciAoY29uc3QgbGFiZWwgaW4gZmllbGQudmFsdWVDb3VudHMpIHtcbiAgICAgICAgICAgICAgICAgICAgbGV0IGNvdW50ID0gZmllbGQudmFsdWVDb3VudHNbbGFiZWxdO1xuICAgICAgICAgICAgICAgICAgICAvLyAgICAgY29uc29sZS5sb2coZmllbGQudmFsdWVDb3VudHMpO1xuICAgICAgICAgICAgICAgICAgICAvLyBmaWVsZC52YWx1ZUNvdW50cy5wcm90b2ZvckVhY2goIChsYWJlbCwgY291bnQpID0+XG4gICAgICAgICAgICAgICAgICAgIC8vIHtcbiAgICAgICAgICAgICAgICAgICAgb3B0aW9uc1tmaWVsZC5qc29uS2V5Q29kZV0ucHVzaCh7XG4gICAgICAgICAgICAgICAgICAgICAgICBsYWJlbDogbGFiZWwsXG4gICAgICAgICAgICAgICAgICAgICAgICBjb3VudDogZmllbGQuZGlzdGluY3RWYWx1ZXNDb3VudCxcbiAgICAgICAgICAgICAgICAgICAgICAgIHZhbHVlOiBsYWJlbCxcbiAgICAgICAgICAgICAgICAgICAgICAgIHRvdGFsOiBjb3VudFxuICAgICAgICAgICAgICAgICAgICB9KTtcbiAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICB9IGVsc2Uge1xuICAgICAgICAgICAgICAgIC8vIGNvbnNvbGUud2FybihcIk1pc3NpbmcgXCIgKyBjb2x1bW4ubmFtZSwgT2JqZWN0LmtleXMobG9va3VwKSk7XG4gICAgICAgICAgICB9XG4gICAgICAgIH0pO1xuICAgICAgICBjb25zb2xlLmVycm9yKCdzZWFyY2hGaWVsZHMnLCBzZWFyY2hGaWVsZHNCeUNvbHVtbk51bWJlcik7XG5cbiAgICAgICAgbGV0IGFwaVBsYXRmb3JtSGVhZGVycyA9IHtcbiAgICAgICAgICAgICdBY2NlcHQnOiAnYXBwbGljYXRpb24vbGQranNvbicsXG4gICAgICAgICAgICAnQ29udGVudC1UeXBlJzogJ2FwcGxpY2F0aW9uL2pzb24nXG4gICAgICAgIH07XG5cbiAgICAgICAgY29uc3QgdXNlckxvY2FsZSA9XG4gICAgICAgICAgICBuYXZpZ2F0b3IubGFuZ3VhZ2VzICYmIG5hdmlnYXRvci5sYW5ndWFnZXMubGVuZ3RoXG4gICAgICAgICAgICAgICAgPyBuYXZpZ2F0b3IubGFuZ3VhZ2VzWzBdXG4gICAgICAgICAgICAgICAgOiBuYXZpZ2F0b3IubGFuZ3VhZ2U7XG5cbiAgICAgICAgLy8gY29uc29sZS5sb2coJ3VzZXIgbG9jYWxlOiAnICsgdXNlckxvY2FsZSk7IC8vIPCfkYnvuI8gXCJlbi1VU1wiXG4gICAgICAgIC8vIGNvbnNvbGUuZXJyb3IoJ3RoaXMubG9jYWxlOiAnICsgdGhpcy5sb2NhbGUpO1xuICAgICAgICBpZiAodGhpcy5sb2NhbGUgIT09ICcnKSB7XG4gICAgICAgICAgICBhcGlQbGF0Zm9ybUhlYWRlcnNbJ0FjY2VwdC1MYW5ndWFnZSddID0gdGhpcy5sb2NhbGU7XG4gICAgICAgICAgICBhcGlQbGF0Zm9ybUhlYWRlcnNbJ1gtTE9DQUxFJ10gPSB0aGlzLmxvY2FsZTtcbiAgICAgICAgfVxuXG5cbiAgICAgICAgbGV0IHNldHVwID0ge1xuICAgICAgICAgICAgLy8gbGV0IGR0ID0gbmV3IERhdGFUYWJsZShlbCwge1xuICAgICAgICAgICAgbGFuZ3VhZ2U6IHtcbiAgICAgICAgICAgICAgICBzZWFyY2hQbGFjZWhvbGRlcjogJ3NyY2g6ICcgKyB0aGlzLnNlYXJjaGFibGVGaWVsZHMuam9pbignLCcpXG4gICAgICAgICAgICB9LFxuICAgICAgICAgICAgY3JlYXRlZFJvdzogdGhpcy5jcmVhdGVkUm93LFxuICAgICAgICAgICAgLy8gcGFnaW5nOiB0cnVlLFxuICAgICAgICAgICAgc2Nyb2xsWTogJzcwdmgnLCAvLyB2aCBpcyBwZXJjZW50YWdlIG9mIHZpZXdwb3J0IGhlaWdodCwgaHR0cHM6Ly9jc3MtdHJpY2tzLmNvbS9mdW4tdmlld3BvcnQtdW5pdHMvXG4gICAgICAgICAgICAvLyBzY3JvbGxZOiB0cnVlLFxuICAgICAgICAgICAgLy8gZGlzcGxheUxlbmd0aDogNTAsIC8vIG5vdCBzdXJlIGhvdyB0byBhZGp1c3QgdGhlICdsZW5ndGgnIHNlbnQgdG8gdGhlIHNlcnZlclxuICAgICAgICAgICAgLy8gcGFnZUxlbmd0aDogMTUsXG4gICAgICAgICAgICBvcmRlckNlbGxzVG9wOiB0cnVlLFxuICAgICAgICAgICAgZml4ZWRIZWFkZXI6IHRydWUsXG5cbiAgICAgICAgICAgIGRlZmVyUmVuZGVyOiB0cnVlLFxuICAgICAgICAgICAgLy8gc2Nyb2xsWDogICAgICAgIHRydWUsXG4gICAgICAgICAgICAvLyBzY3JvbGxDb2xsYXBzZTogdHJ1ZSxcbiAgICAgICAgICAgIHNjcm9sbGVyOiB0cnVlLFxuICAgICAgICAgICAgLy8gc2Nyb2xsZXI6IHtcbiAgICAgICAgICAgIC8vICAgICAvLyByb3dIZWlnaHQ6IDkwLCAvLyBAV0FSTklORzogUHJvYmxlbWF0aWMhIVxuICAgICAgICAgICAgLy8gICAgIC8vIGRpc3BsYXlCdWZmZXI6IDEwLFxuICAgICAgICAgICAgLy8gICAgIGxvYWRpbmdJbmRpY2F0b3I6IHRydWUsXG4gICAgICAgICAgICAvLyB9LFxuICAgICAgICAgICAgLy8gXCJwcm9jZXNzaW5nXCI6IHRydWUsXG4gICAgICAgICAgICBzZXJ2ZXJTaWRlOiB0cnVlLFxuXG4gICAgICAgICAgICBpbml0Q29tcGxldGU6IChvYmosIGRhdGEpID0+IHtcbiAgICAgICAgICAgICAgICB0aGlzLmhhbmRsZVRyYW5zKGVsKTtcbiAgICAgICAgICAgICAgICAvLyBsZXQgeGFwaSA9IG5ldyBEYXRhVGFibGUuQXBpKG9iaik7XG4gICAgICAgICAgICAgICAgLy8gY29uc29sZS5sb2coeGFwaSk7XG4gICAgICAgICAgICAgICAgLy8gY29uc29sZS5sb2coeGFwaS50YWJsZSk7XG5cbiAgICAgICAgICAgICAgICAvLyB0aGlzLmFkZFJvd0NsaWNrTGlzdGVuZXIoZHQpO1xuICAgICAgICAgICAgICAgIHRoaXMuYWRkQnV0dG9uQ2xpY2tMaXN0ZW5lcihkdCk7XG4gICAgICAgICAgICB9LFxuXG4gICAgICAgICAgICBkb206IHRoaXMuZG9tLFxuICAgICAgICAgICAgLy8gZG9tOiAnUGxmcnRpcCcsXG5cbiAgICAgICAgICAgIC8vIGRvbTogJzxcImpzLWR0LWJ1dHRvbnNcIkI+PFwianMtZHQtaW5mb1wiaT5mdCcsXG4gICAgICAgICAgICAvLyBkb206ICdRPFwianMtZHQtYnV0dG9uc1wiQj48XCJqcy1kdC1pbmZvXCJpPicgKyAodGhpcy5zZWFyY2hhYmxlRmllbGRzLmxlbmd0aCA/ICdmJyA6ICcnKSArICd0JyxcbiAgICAgICAgICAgIGJ1dHRvbnM6IFtdLCAvLyB0aGlzLmJ1dHRvbnMsXG4gICAgICAgICAgICBjb2x1bW5zOiB0aGlzLmNvbHMoKSxcbiAgICAgICAgICAgIHNlYXJjaFBhbmVzOiB7XG4gICAgICAgICAgICAgICAgbGF5b3V0OiAnY29sdW1ucy0xJyxcbiAgICAgICAgICAgIH0sXG4gICAgICAgICAgICBzZWFyY2hCdWlsZGVyOiB7XG4gICAgICAgICAgICAgICAgY29sdW1uczogdGhpcy5zZWFyY2hCdWlsZGVyRmllbGRzLFxuICAgICAgICAgICAgICAgIGRlcHRoTGltaXQ6IDFcbiAgICAgICAgICAgIH0sXG4gICAgICAgICAgICAvLyBjb2x1bW5zOlxuICAgICAgICAgICAgLy8gICAgIFtcbiAgICAgICAgICAgIC8vICAgICB0aGlzLmMoe1xuICAgICAgICAgICAgLy8gICAgICAgICBwcm9wZXJ0eU5hbWU6ICduYW1lJyxcbiAgICAgICAgICAgIC8vICAgICB9KSxcbiAgICAgICAgICAgIC8vIF0sXG4gICAgICAgICAgICBjb2x1bW5EZWZzOiB0aGlzLmNvbHVtbkRlZnMoc2VhcmNoRmllbGRzQnlDb2x1bW5OdW1iZXIpLFxuICAgICAgICAgICAgYWpheDogKHBhcmFtcywgY2FsbGJhY2ssIHNldHRpbmdzKSA9PiB7XG4gICAgICAgICAgICAgICAgbGV0IGFwaVBhcmFtcyA9IHRoaXMuZGF0YVRhYmxlUGFyYW1zVG9BcGlQbGF0Zm9ybVBhcmFtcyhwYXJhbXMpO1xuICAgICAgICAgICAgICAgIC8vIHRoaXMuZGVidWcgJiZcbiAgICAgICAgICAgICAgICAvLyBjb25zb2xlLmVycm9yKHBhcmFtcywgYXBpUGFyYW1zKTtcbiAgICAgICAgICAgICAgICAvLyBjb25zb2xlLmxvZyhgRGF0YVRhYmxlcyBpcyByZXF1ZXN0aW5nICR7cGFyYW1zLmxlbmd0aH0gcmVjb3JkcyBzdGFydGluZyBhdCAke3BhcmFtcy5zdGFydH1gLCBhcGlQYXJhbXMpO1xuXG4gICAgICAgICAgICAgICAgT2JqZWN0LmFzc2lnbihhcGlQYXJhbXMsIHRoaXMuZmlsdGVyKTtcbiAgICAgICAgICAgICAgICAvLyB5ZXQgYW5vdGhlciBsb2NhbGUgaGFja1xuICAgICAgICAgICAgICAgIGlmICh0aGlzLmxvY2FsZSAhPT0gJycpIHtcbiAgICAgICAgICAgICAgICAgICAgYXBpUGFyYW1zWydfbG9jYWxlJ10gPSB0aGlzLmxvY2FsZTtcbiAgICAgICAgICAgICAgICB9XG5cbiAgICAgICAgICAgICAgICAvLyBjb25zb2xlLndhcm4oYXBpUGxhdGZvcm1IZWFkZXJzKTtcbiAgICAgICAgICAgICAgICBjb25zb2xlLmxvZyhcImNhbGxpbmcgQVBJIFwiICsgdGhpcy5hcGlDYWxsVmFsdWUsIGFwaVBhcmFtcyk7XG4gICAgICAgICAgICAgICAgYXhpb3MuZ2V0KHRoaXMuYXBpQ2FsbFZhbHVlLCB7XG4gICAgICAgICAgICAgICAgICAgIHBhcmFtczogYXBpUGFyYW1zLFxuICAgICAgICAgICAgICAgICAgICBoZWFkZXJzOiBhcGlQbGF0Zm9ybUhlYWRlcnNcbiAgICAgICAgICAgICAgICB9KVxuICAgICAgICAgICAgICAgICAgICAudGhlbigocmVzcG9uc2UpID0+IHtcbiAgICAgICAgICAgICAgICAgICAgICAgIC8vIGhhbmRsZSBzdWNjZXNzXG4gICAgICAgICAgICAgICAgICAgICAgICBsZXQgaHlkcmFEYXRhID0gcmVzcG9uc2UuZGF0YTtcblxuICAgICAgICAgICAgICAgICAgICAgICAgdmFyIHRvdGFsID0gaHlkcmFEYXRhLmhhc093blByb3BlcnR5KCdoeWRyYTp0b3RhbEl0ZW1zJykgPyBoeWRyYURhdGFbJ2h5ZHJhOnRvdGFsSXRlbXMnXSA6IDk5OTk5OTsgLy8gSW5maW5pdHk7XG4gICAgICAgICAgICAgICAgICAgICAgICB2YXIgaXRlbXNSZXR1cm5lZCA9IGh5ZHJhRGF0YVsnaHlkcmE6bWVtYmVyJ10ubGVuZ3RoO1xuICAgICAgICAgICAgICAgICAgICAgICAgLy8gbGV0IGZpcnN0ID0gKHBhcmFtcy5wYWdlIC0gMSkgKiBwYXJhbXMuaXRlbXNQZXJQYWdlO1xuICAgICAgICAgICAgICAgICAgICAgICAgaWYgKHBhcmFtcy5zZWFyY2gudmFsdWUpIHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBjb25zb2xlLmxvZyhgZHQgc2VhcmNoOiAke3BhcmFtcy5zZWFyY2gudmFsdWV9YCk7XG4gICAgICAgICAgICAgICAgICAgICAgICB9XG5cbiAgICAgICAgICAgICAgICAgICAgICAgIC8vIGNvbnNvbGUubG9nKGBkdCByZXF1ZXN0OiAke3BhcmFtcy5sZW5ndGh9IHN0YXJ0aW5nIGF0ICR7cGFyYW1zLnN0YXJ0fWApO1xuXG4gICAgICAgICAgICAgICAgICAgICAgICAvLyBsZXQgZmlyc3QgPSAoYXBpT3B0aW9ucy5wYWdlIC0gMSkgKiBhcGlPcHRpb25zLml0ZW1zUGVyUGFnZTtcbiAgICAgICAgICAgICAgICAgICAgICAgIGxldCBkID0gaHlkcmFEYXRhWydoeWRyYTptZW1iZXInXTtcbiAgICAgICAgICAgICAgICAgICAgICAgIGlmIChkLmxlbmd0aCkge1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNvbnNvbGUubG9nKGRbMF0pO1xuICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgLy8gaWYgbmV4dCBwYWdlIGlzbid0IHdvcmtpbmcsIG1ha2Ugc3VyZSBhcGlfcGxhdGZvcm0ueWFtbCBpcyBjb3JyZWN0bHkgY29uZmlndXJlZFxuICAgICAgICAgICAgICAgICAgICAgICAgLy8gZGVmYXVsdHM6XG4gICAgICAgICAgICAgICAgICAgICAgICAvLyAgICAgcGFnaW5hdGlvbl9jbGllbnRfaXRlbXNfcGVyX3BhZ2U6IHRydWVcblxuICAgICAgICAgICAgICAgICAgICAgICAgLy8gaWYgdGhlcmUncyBhIFwibmV4dFwiIHBhZ2UgYW5kIHdlIGRpZG4ndCBnZXQgZXZlcnl0aGluZywgZmV0Y2ggdGhlIG5leHQgcGFnZSBhbmQgcmV0dXJuIHRoZSBzbGljZS5cbiAgICAgICAgICAgICAgICAgICAgICAgIGxldCBuZXh0ID0gaHlkcmFEYXRhW1wiaHlkcmE6dmlld1wiXVsnaHlkcmE6bmV4dCddO1xuICAgICAgICAgICAgICAgICAgICAgICAgLy8gd2UgbmVlZCB0aGUgc2VhcmNocGFuZXMgb3B0aW9ucywgdG9vLlxuICAgICAgICAgICAgICAgICAgICAgICAgbGV0IHNlYXJjaFBhbmVzID0ge1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgIG9wdGlvbnM6IG9wdGlvbnNcbiAgICAgICAgICAgICAgICAgICAgICAgIH07XG5cblxuICAgICAgICAgICAgICAgICAgICAgICAgbGV0IGNhbGxiYWNrVmFsdWVzID0ge1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgIGRyYXc6IHBhcmFtcy5kcmF3LFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIGRhdGE6IGQsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgc2VhcmNoUGFuZXM6IHNlYXJjaFBhbmVzLFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIHJlY29yZHNUb3RhbDogdG90YWwsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgcmVjb3Jkc0ZpbHRlcmVkOiB0b3RhbCwgLy8gIGl0ZW1zUmV0dXJuZWQsXG4gICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICBjYWxsYmFjayhjYWxsYmFja1ZhbHVlcyk7XG4gICAgICAgICAgICAgICAgICAgIH0pXG4gICAgICAgICAgICAgICAgICAgIC5jYXRjaChmdW5jdGlvbiAoZXJyb3IpIHtcbiAgICAgICAgICAgICAgICAgICAgICAgIC8vIGhhbmRsZSBlcnJvclxuICAgICAgICAgICAgICAgICAgICAgICAgY29uc29sZS5lcnJvcihlcnJvcik7XG4gICAgICAgICAgICAgICAgICAgIH0pXG4gICAgICAgICAgICAgICAgO1xuXG4gICAgICAgICAgICB9LFxuICAgICAgICB9O1xuICAgICAgICBsZXQgZHQgPSBuZXcgRGF0YVRhYmxlcyhlbCwgc2V0dXApO1xuICAgICAgICBkdC5zZWFyY2hQYW5lcygpO1xuICAgICAgICAvLyBjb25zb2xlLmxvZygnbW92aW5nIHBhbmVzLicpO1xuICAgICAgICAkKFwiZGl2LnNlYXJjaC1wYW5lc1wiKS5hcHBlbmQoZHQuc2VhcmNoUGFuZXMuY29udGFpbmVyKCkpO1xuXG4gICAgICAgIHJldHVybiBkdDtcbiAgICB9XG5cbiAgICBjb2x1bW5EZWZzKHNlYXJjaFBhbmVzQ29sdW1ucykge1xuICAgICAgICAvLyBjb25zb2xlLmVycm9yKHNlYXJjaFBhbmVzQ29sdW1ucyk7XG4gICAgICAgIHJldHVybiBbXG4gICAgICAgICAgICB7XG4gICAgICAgICAgICAgICAgc2VhcmNoUGFuZXM6IHtzaG93OiB0cnVlfSwgdGFyZ2V0czogc2VhcmNoUGFuZXNDb2x1bW5zLFxuICAgICAgICAgICAgfSxcbiAgICAgICAgICAgIHt0YXJnZXRzOiBbMCwgMV0sIHZpc2libGU6IHRydWV9LFxuICAgICAgICAgICAgLy8gZGVmYXVsdENvbnRlbnQgaXMgY3JpdGljYWwhIE90aGVyd2lzZSwgbG90cyBvZiBzdHVmZiBmYWlscy5cbiAgICAgICAgICAgIHt0YXJnZXRzOiAnX2FsbCcsIHZpc2libGU6IHRydWUsIHNvcnRhYmxlOiBmYWxzZSwgXCJkZWZhdWx0Q29udGVudFwiOiBcIn5+XCJ9XG4gICAgICAgIF07XG5cbiAgICAgICAgLy8geyB0YXJnZXRzOiBbMCwgMV0sIHZpc2libGU6IHRydWV9LFxuICAgICAgICAvLyB7IHRhcmdldHM6ICdfYWxsJywgdmlzaWJsZTogdHJ1ZSwgc29ydGFibGU6IGZhbHNlLCAgXCJkZWZhdWx0Q29udGVudFwiOiBcIn5+XCIgfVxuICAgIH1cblxuXG4vLyBnZXQgY29sdW1ucygpIHtcbi8vICAgICAvLyBpZiBjb2x1bW5zIGlzbid0IG92ZXJ3cml0dGVuLCB1c2UgdGhlIHRoJ3MgaW4gdGhlIGZpcnN0IHRyPyAgb3IgZGF0YS1maWVsZD0nc3RhdHVzJywgYW5kIHRoZW4gbWFrZSB0aGUgYXBpIGNhbGwgd2l0aCBfZmllbGRzPS4uLj9cbi8vICAgICAvLyBvciBodHRwczovL2RhdGF0YWJsZXMubmV0L2V4YW1wbGVzL2FqYXgvbnVsbF9kYXRhX3NvdXJjZS5odG1sXG4vLyAgICAgcmV0dXJuIFtcbi8vICAgICAgICAge3RpdGxlOiAnQGlkJywgZGF0YTogJ2lkJ31cbi8vICAgICBdXG4vLyB9XG5cbiAgICBhY3Rpb25zKHtwcmVmaXggPSBudWxsLCBhY3Rpb25zID0gWydlZGl0JywgJ3Nob3cnLCAncXInXX0gPSB7fSkge1xuICAgICAgICBsZXQgaWNvbnMgPSB7XG4gICAgICAgICAgICBlZGl0OiAnZmFzIGZhLWVkaXQnLFxuICAgICAgICAgICAgc2hvdzogJ2ZhcyBmYS1leWUgdGV4dC1zdWNjZXNzJyxcbiAgICAgICAgICAgICdxcic6ICdmYXMgZmEtcXJjb2RlJyxcbiAgICAgICAgICAgICdkZWxldGUnOiAnZmFzIGZhLXRyYXNoIHRleHQtZGFuZ2VyJ1xuICAgICAgICB9O1xuICAgICAgICBsZXQgYnV0dG9ucyA9IGFjdGlvbnMubWFwKGFjdGlvbiA9PiB7XG4gICAgICAgICAgICBsZXQgbW9kYWxfcm91dGUgPSBwcmVmaXggKyBhY3Rpb247XG4gICAgICAgICAgICBsZXQgaWNvbiA9IGljb25zW2FjdGlvbl07XG4gICAgICAgICAgICAvLyByZXR1cm4gYWN0aW9uICsgJyAnICsgbW9kYWxfcm91dGU7XG4gICAgICAgICAgICAvLyBSb3V0aW5nLmdlbmVyYXRlKClcblxuICAgICAgICAgICAgcmV0dXJuIGA8YnV0dG9uIGRhdGEtbW9kYWwtcm91dGU9XCIke21vZGFsX3JvdXRlfVwiIGNsYXNzPVwiYnRuIGJ0bi1tb2RhbCBidG4tYWN0aW9uLSR7YWN0aW9ufVwiIFxudGl0bGU9XCIke21vZGFsX3JvdXRlfVwiPjxzcGFuIGNsYXNzPVwiYWN0aW9uLSR7YWN0aW9ufSBmYXMgZmEtJHtpY29ufVwiPjwvc3Bhbj48L2J1dHRvbj5gO1xuICAgICAgICB9KTtcblxuICAgICAgICAvLyBjb25zb2xlLmxvZyhidXR0b25zKTtcbiAgICAgICAgcmV0dXJuIHtcbiAgICAgICAgICAgIHRpdGxlOiAnYWN0aW9ucycsXG4gICAgICAgICAgICByZW5kZXI6ICgpID0+IHtcbiAgICAgICAgICAgICAgICByZXR1cm4gYnV0dG9ucy5qb2luKCcgJyk7XG4gICAgICAgICAgICB9XG4gICAgICAgIH1cbiAgICAgICAgYWN0aW9ucy5mb3JFYWNoKGFjdGlvbiA9PiB7XG4gICAgICAgIH0pXG5cbiAgICB9XG5cbiAgICBjKHtcbiAgICAgICAgICBwcm9wZXJ0eU5hbWUgPSBudWxsLFxuICAgICAgICAgIG5hbWUgPSBudWxsLFxuICAgICAgICAgIHJvdXRlID0gbnVsbCxcbiAgICAgICAgICBtb2RhbF9yb3V0ZSA9IG51bGwsXG4gICAgICAgICAgbGFiZWwgPSBudWxsLFxuICAgICAgICAgIG1vZGFsID0gZmFsc2UsXG4gICAgICAgICAgcmVuZGVyID0gbnVsbCxcbiAgICAgICAgICBsb2NhbGUgPSBudWxsLFxuICAgICAgICAgIHJlbmRlclR5cGUgPSAnc3RyaW5nJ1xuICAgICAgfSA9IHt9KSB7XG5cbiAgICAgICAgaWYgKHJlbmRlciA9PT0gbnVsbCkge1xuICAgICAgICAgICAgcmVuZGVyID0gKGRhdGEsIHR5cGUsIHJvdywgbWV0YSkgPT4ge1xuICAgICAgICAgICAgICAgIC8vIGlmICghbGFiZWwpIHtcbiAgICAgICAgICAgICAgICAvLyAgICAgLy8gY29uc29sZS5sb2cocm93LCBkYXRhKTtcbiAgICAgICAgICAgICAgICAvLyAgICAgbGFiZWwgPSBkYXRhIHx8IHByb3BlcnR5TmFtZTtcbiAgICAgICAgICAgICAgICAvLyB9XG4gICAgICAgICAgICAgICAgbGV0IGRpc3BsYXlEYXRhID0gZGF0YTtcbiAgICAgICAgICAgICAgICAvLyBAdG9kbzogbW92ZSBzb21lIHR3aWcgdGVtcGxhdGVzIHRvIGEgY29tbW9uIGxpYnJhcnlcbiAgICAgICAgICAgICAgICBpZiAocmVuZGVyVHlwZSA9PT0gJ2ltYWdlJykge1xuICAgICAgICAgICAgICAgICAgICByZXR1cm4gYDxpbWcgY2xhc3M9XCJpbWctdGh1bWJuYWlsIHBsYW50LXRodW1iXCIgYWx0PVwiJHtkYXRhfVwiIHNyYz1cIiR7ZGF0YX1cIiAvPmA7XG4gICAgICAgICAgICAgICAgfVxuXG4gICAgICAgICAgICAgICAgaWYgKHJvdXRlKSB7XG4gICAgICAgICAgICAgICAgICAgIGlmIChsb2NhbGUpIHtcbiAgICAgICAgICAgICAgICAgICAgICAgIHJvdy5ycFsnX2xvY2FsZSddID0gbG9jYWxlO1xuICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgIGxldCB1cmwgPSBSb3V0aW5nLmdlbmVyYXRlKHJvdXRlLCByb3cucnApO1xuICAgICAgICAgICAgICAgICAgICBpZiAobW9kYWwpIHtcbiAgICAgICAgICAgICAgICAgICAgICAgIHJldHVybiBgPGJ1dHRvbiBjbGFzcz1cImJ0biBidG4tcHJpbWFyeVwiPjwvYnV0dG9uPmA7XG4gICAgICAgICAgICAgICAgICAgIH0gZWxzZSB7XG4gICAgICAgICAgICAgICAgICAgICAgICByZXR1cm4gYDxhIGhyZWY9XCIke3VybH1cIj4ke2Rpc3BsYXlEYXRhfTwvYT5gO1xuICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgfSBlbHNlIHtcbiAgICAgICAgICAgICAgICAgICAgaWYgKG1vZGFsX3JvdXRlKSB7XG4gICAgICAgICAgICAgICAgICAgICAgICByZXR1cm4gYDxidXR0b24gZGF0YS1tb2RhbC1yb3V0ZT1cIiR7bW9kYWxfcm91dGV9XCIgY2xhc3M9XCJidG4gYnRuLXN1Y2Nlc3NcIj4ke21vZGFsX3JvdXRlfTwvYnV0dG9uPmA7XG4gICAgICAgICAgICAgICAgICAgIH0gZWxzZSB7XG4gICAgICAgICAgICAgICAgICAgICAgICAvLyBjb25zb2xlLmxvZyhwcm9wZXJ0eU5hbWUsIHJvd1twcm9wZXJ0eU5hbWVdLCByb3cpO1xuICAgICAgICAgICAgICAgICAgICAgICAgcmV0dXJuIHJvd1twcm9wZXJ0eU5hbWVdO1xuICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgfVxuXG4gICAgICAgICAgICB9XG4gICAgICAgIH1cblxuICAgICAgICByZXR1cm4ge1xuICAgICAgICAgICAgdGl0bGU6IGxhYmVsLFxuICAgICAgICAgICAgZGF0YTogcHJvcGVydHlOYW1lIHx8ICcnLFxuICAgICAgICAgICAgcmVuZGVyOiByZW5kZXIsXG4gICAgICAgICAgICBzb3J0YWJsZTogdGhpcy5zb3J0YWJsZUZpZWxkcy5pbmNsdWRlcyhwcm9wZXJ0eU5hbWUpXG4gICAgICAgIH1cbiAgICAgICAgLy8gLi4uZnVuY3Rpb24gYm9keS4uLlxuICAgIH1cblxuICAgIGd1ZXNzQ29sdW1uKHYpIHtcblxuICAgICAgICBsZXQgcmVuZGVyRnVuY3Rpb24gPSBudWxsO1xuICAgICAgICBzd2l0Y2ggKHYpIHtcbiAgICAgICAgICAgIGNhc2UgJ2lkJzpcbiAgICAgICAgICAgICAgICByZW5kZXJGdW5jdGlvbiA9IChkYXRhLCB0eXBlLCByb3csIG1ldGEpID0+IHtcbiAgICAgICAgICAgICAgICAgICAgY29uc29sZS53YXJuKCdpZCByZW5kZXInKTtcbiAgICAgICAgICAgICAgICAgICAgcmV0dXJuIFwiPGI+XCIgKyBkYXRhICsgXCIhITwvYj5cIlxuICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICBicmVhaztcbiAgICAgICAgICAgIGNhc2UgJ25ld2VzdFB1Ymxpc2hUaW1lJzpcbiAgICAgICAgICAgIGNhc2UgJ2NyZWF0ZVRpbWUnOlxuICAgICAgICAgICAgICAgIHJlbmRlckZ1bmN0aW9uID0gKGRhdGEsIHR5cGUsIHJvdywgbWV0YSkgPT4ge1xuICAgICAgICAgICAgICAgICAgICBsZXQgaXNvVGltZSA9IGRhdGE7XG4gICAgICAgICAgICAgICAgICAgIGxldCBzdHIgPSBpc29UaW1lID8gJzx0aW1lIGNsYXNzPVwidGltZWFnb1wiIGRhdGV0aW1lPVwiJyArIGRhdGEgKyAnXCI+JyArIGRhdGEgKyAnPC90aW1lPicgOiAnJztcbiAgICAgICAgICAgICAgICAgICAgcmV0dXJuIHN0cjtcbiAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgYnJlYWs7XG4gICAgICAgICAgICAvLyBkZWZhdWx0OlxuICAgICAgICAgICAgLy8gICAgIHJlbmRlckZ1bmN0aW9uID0gKCBkYXRhLCB0eXBlLCByb3csIG1ldGEgKSA9PiB7IHJldHVybiBkYXRhOyB9XG5cblxuICAgICAgICB9XG4gICAgICAgIGxldCBvYmogPSB7XG4gICAgICAgICAgICB0aXRsZTogdixcbiAgICAgICAgICAgIGRhdGE6IHYsXG4gICAgICAgIH1cbiAgICAgICAgaWYgKHJlbmRlckZ1bmN0aW9uKSB7XG4gICAgICAgICAgICBvYmoucmVuZGVyID0gcmVuZGVyRnVuY3Rpb247XG4gICAgICAgIH1cbiAgICAgICAgY29uc29sZS53YXJuKG9iaik7XG4gICAgICAgIHJldHVybiBvYmo7XG4gICAgfVxuXG4gICAgZGF0YVRhYmxlUGFyYW1zVG9BcGlQbGF0Zm9ybVBhcmFtcyhwYXJhbXMpIHtcbiAgICAgICAgbGV0IGNvbHVtbnMgPSBwYXJhbXMuY29sdW1uczsgLy8gZ2V0IHRoZSBjb2x1bW5zIHBhc3NlZCBiYWNrIHRvIHVzLCBzYW5pdHkuXG4gICAgICAgIC8vIHZhciBhcGlEYXRhID0ge1xuICAgICAgICAvLyAgICAgcGFnZTogMVxuICAgICAgICAvLyB9O1xuICAgICAgICAvLyBjb25zb2xlLmVycm9yKHBhcmFtcyk7XG5cbiAgICAgICAgLy8gYXBpRGF0YS5zdGFydCA9IHBhcmFtcy5zdGFydDsgLy8gaWdub3JlZD9zXG5cbiAgICAgICAgbGV0IGFwaURhdGEgPSB7fTtcbiAgICAgICAgaWYgKHBhcmFtcy5sZW5ndGgpIHtcbiAgICAgICAgICAgIC8vIHdhcyBhcGlEYXRhLml0ZW1zUGVyUGFnZSA9IHBhcmFtcy5sZW5ndGg7XG4gICAgICAgICAgICBhcGlEYXRhLmxpbWl0ID0gcGFyYW1zLmxlbmd0aDtcbiAgICAgICAgfVxuXG4gICAgICAgIC8vIHNhbWUgYXMgI1tBcGlGaWx0ZXIoTXVsdGlGaWVsZFNlYXJjaEZpbHRlcjo6Y2xhc3MsIHByb3BlcnRpZXM6IFtcImxhYmVsXCIsIFwiY29kZVwiXSwgYXJndW1lbnRzOiBbXCJzZWFyY2hQYXJhbWV0ZXJOYW1lXCI9Plwic2VhcmNoXCJdKV1cbiAgICAgICAgaWYgKHBhcmFtcy5zZWFyY2ggJiYgcGFyYW1zLnNlYXJjaC52YWx1ZSkge1xuICAgICAgICAgICAgYXBpRGF0YVsnc2VhcmNoJ10gPSBwYXJhbXMuc2VhcmNoLnZhbHVlO1xuICAgICAgICB9XG5cbiAgICAgICAgbGV0IG9yZGVyID0ge307XG4gICAgICAgIC8vIGh0dHBzOi8vamFyZGluLndpcC9hcGkvcHJvamVjdHMuanNvbmxkP3BhZ2U9MSZpdGVtc1BlclBhZ2U9MTQmb3JkZXJbY29kZV09YXNjXG4gICAgICAgIHBhcmFtcy5vcmRlci5mb3JFYWNoKChvLCBpbmRleCkgPT4ge1xuICAgICAgICAgICAgbGV0IGMgPSBwYXJhbXMuY29sdW1uc1tvLmNvbHVtbl07XG4gICAgICAgICAgICBpZiAoYy5kYXRhKSB7XG4gICAgICAgICAgICAgICAgb3JkZXJbYy5kYXRhXSA9IG8uZGlyO1xuICAgICAgICAgICAgICAgIC8vIGFwaURhdGEub3JkZXIgPSBvcmRlcjtcbiAgICAgICAgICAgICAgICBhcGlEYXRhWydvcmRlclsnICsgYy5kYXRhICsgJ10nXSA9IG8uZGlyO1xuICAgICAgICAgICAgfVxuICAgICAgICAgICAgLy8gY29uc29sZS5lcnJvcihjLCBvcmRlciwgby5jb2x1bW4sIG8uZGlyKTtcbiAgICAgICAgfSk7XG4gICAgICAgIGZvciAoY29uc3QgW2tleSwgdmFsdWVdIG9mIE9iamVjdC5lbnRyaWVzKHBhcmFtcy5zZWFyY2hQYW5lcykpIHtcbiAgICAgICAgICAgIC8vIGNvbnNvbGUubG9nKHZhbHVlLCBrZXksIE9iamVjdC52YWx1ZXModmFsdWUpKTsgLy8gXCJhIDVcIiwgXCJiIDdcIiwgXCJjIDlcIlxuXG4gICAgICAgICAgICAvLyBpZiAoJGF0dHIgPSAkcmVxdWVzdC0+Z2V0KCdhJykpIHtcbiAgICAgICAgICAgIC8vICAgICAkZmlsdGVyWydhdHRyaWJ1dGVfc2VhcmNoJ11bJ29wZXJhdG9yJ10gPSBzcHJpbnRmKFwiJXMsJXMsJXNcIiwgJGF0dHIsICc9JywgJHJlcXVlc3QtPmdldCgndicpKTtcbiAgICAgICAgICAgIC8vIH1cblxuICAgICAgICAgICAgaWYgKE9iamVjdC52YWx1ZXModmFsdWUpLmxlbmd0aCkge1xuICAgICAgICAgICAgICAgIE9iamVjdC52YWx1ZXModmFsdWUpLmZvckVhY2goKHZ2dikgPT4gYXBpRGF0YVsnYXR0cmlidXRlc1tvcGVyYXRvcl0nXSA9IGtleSArICcsPSwnICsgdnZ2KTtcbiAgICAgICAgICAgICAgICBjb25zb2xlLndhcm4oYXBpRGF0YSk7XG4gICAgICAgICAgICB9XG4gICAgICAgIH1cbiAgICAgICAgLy8gaWYgKHBhcmFtcy5zZWFyY2hQYW5lcy5sZW5ndGgpIHtcbiAgICAgICAgLy8gICAgIHBhcmFtcy5zZWFyY2hQYW5lcy5mb3JFYWNoKChjLCBpbmRleCkgPT4ge1xuICAgICAgICAvLyAgICAgICAgIGNvbnNvbGUud2FybihjKTtcbiAgICAgICAgLy8gICAgICAgICAvLyBhcGlEYXRhW2Mub3JpZ0RhdGEgKyAnW10nXSA9IGMudmFsdWUxO1xuICAgICAgICAvLyAgICAgfSk7XG4gICAgICAgIC8vIH1cblxuICAgICAgICBpZiAocGFyYW1zLnNlYXJjaEJ1aWxkZXIgJiYgcGFyYW1zLnNlYXJjaEJ1aWxkZXIuY3JpdGVyaWEpIHtcbiAgICAgICAgICAgIHBhcmFtcy5zZWFyY2hCdWlsZGVyLmNyaXRlcmlhLmZvckVhY2goKGMsIGluZGV4KSA9PiB7XG4gICAgICAgICAgICAgICAgY29uc29sZS53YXJuKGMpO1xuICAgICAgICAgICAgICAgIGFwaURhdGFbYy5vcmlnRGF0YSArICdbXSddID0gYy52YWx1ZTE7XG4gICAgICAgICAgICB9KTtcbiAgICAgICAgfVxuICAgICAgICBwYXJhbXMuY29sdW1ucy5mb3JFYWNoKGZ1bmN0aW9uIChjb2x1bW4sIGluZGV4KSB7XG4gICAgICAgICAgICBpZiAoY29sdW1uLnNlYXJjaCAmJiBjb2x1bW4uc2VhcmNoLnZhbHVlKSB7XG4gICAgICAgICAgICAgICAgLy8gY29uc29sZS5lcnJvcihjb2x1bW4pO1xuICAgICAgICAgICAgICAgIGxldCB2YWx1ZSA9IGNvbHVtbi5zZWFyY2gudmFsdWU7XG4gICAgICAgICAgICAgICAgLy8gY2hlY2sgdGhlIGZpcnN0IGNoYXJhY3RlciBmb3IgYSByYW5nZSBmaWx0ZXIgb3BlcmF0b3JcblxuICAgICAgICAgICAgICAgIC8vIGRhdGEgaXMgdGhlIGNvbHVtbiBmaWVsZCwgYXQgbGVhc3QgZm9yIHJpZ2h0IG5vdy5cbiAgICAgICAgICAgICAgICBhcGlEYXRhW2NvbHVtbi5kYXRhXSA9IHZhbHVlO1xuICAgICAgICAgICAgfVxuICAgICAgICB9KTtcblxuICAgICAgICBpZiAocGFyYW1zLnN0YXJ0KSB7XG4gICAgICAgICAgICAvLyB3YXMgYXBpRGF0YS5wYWdlID0gTWF0aC5mbG9vcihwYXJhbXMuc3RhcnQgLyBwYXJhbXMubGVuZ3RoKSArIDE7XG4gICAgICAgICAgICAvLyBhcGlEYXRhLnBhZ2UgPSBNYXRoLmZsb29yKHBhcmFtcy5zdGFydCAvIGFwaURhdGEuaXRlbXNQZXJQYWdlKSArIDE7XG4gICAgICAgIH1cbiAgICAgICAgYXBpRGF0YS5vZmZzZXQgPSBwYXJhbXMuc3RhcnQ7XG4gICAgICAgIC8vIGNvbnNvbGUuZXJyb3IoYXBpRGF0YSk7XG5cbiAgICAgICAgLy8gYWRkIG91ciBvd24gZmlsdGVyc1xuICAgICAgICAvLyBhcGlEYXRhWydtYXJraW5nJ10gPSBbJ2ZldGNoX3N1Y2Nlc3MnXTtcblxuICAgICAgICByZXR1cm4gYXBpRGF0YTtcbiAgICB9XG5cbiAgICBpbml0Rm9vdGVyKGVsKSB7XG4gICAgICAgIHJldHVybjtcblxuICAgICAgICB2YXIgZm9vdGVyID0gZWwucXVlcnlTZWxlY3RvcigndGZvb3QnKTtcbiAgICAgICAgaWYgKGZvb3Rlcikge1xuICAgICAgICAgICAgcmV0dXJuOyAvLyBkbyBub3QgaW5pdGlhdGUgdHdpY2VcbiAgICAgICAgfVxuXG4gICAgICAgIHZhciBoYW5kbGVJbnB1dCA9IGZ1bmN0aW9uIChjb2x1bW4pIHtcbiAgICAgICAgICAgIHZhciBpbnB1dCA9ICQoJzxpbnB1dCBjbGFzcz1cImZvcm0tY29udHJvbFwiIHR5cGU9XCJ0ZXh0XCI+Jyk7XG4gICAgICAgICAgICBpbnB1dC5hdHRyKCdwbGFjZWhvbGRlcicsIGNvbHVtbi5maWx0ZXIucGxhY2Vob2xkZXIgfHwgY29sdW1uLmRhdGEpO1xuICAgICAgICAgICAgcmV0dXJuIGlucHV0O1xuICAgICAgICB9O1xuXG4gICAgICAgIHRoaXMuZGVidWcgJiYgY29uc29sZS5sb2coJ2FkZGluZyBmb290ZXInKTtcbiAgICAgICAgLy8gdmFyIHRyID0gJCgnPHRyPicpO1xuICAgICAgICAvLyB2YXIgdGhhdCA9IHRoaXM7XG4gICAgICAgIC8vIGNvbnNvbGUubG9nKHRoaXMuY29sdW1ucygpKTtcbiAgICAgICAgLy8gQ3JlYXRlIGFuIGVtcHR5IDx0Zm9vdD4gZWxlbWVudCBhbmQgYWRkIGl0IHRvIHRoZSB0YWJsZTpcbiAgICAgICAgdmFyIGZvb3RlciA9IGVsLmNyZWF0ZVRGb290KCk7XG4gICAgICAgIGZvb3Rlci5jbGFzc0xpc3QuYWRkKCdzaG93LWZvb3Rlci1hYm92ZScpO1xuXG4gICAgICAgIHZhciB0aGVhZCA9IGVsLnF1ZXJ5U2VsZWN0b3IoJ3RoZWFkJyk7XG4gICAgICAgIGVsLmluc2VydEJlZm9yZShmb290ZXIsIHRoZWFkKTtcblxuLy8gQ3JlYXRlIGFuIGVtcHR5IDx0cj4gZWxlbWVudCBhbmQgYWRkIGl0IHRvIHRoZSBmaXJzdCBwb3NpdGlvbiBvZiA8dGZvb3Q+OlxuICAgICAgICB2YXIgcm93ID0gZm9vdGVyLmluc2VydFJvdygwKTtcblxuXG4vLyBJbnNlcnQgYSBuZXcgY2VsbCAoPHRkPikgYXQgdGhlIGZpcnN0IHBvc2l0aW9uIG9mIHRoZSBcIm5ld1wiIDx0cj4gZWxlbWVudDpcblxuLy8gQWRkIHNvbWUgYm9sZCB0ZXh0IGluIHRoZSBuZXcgY2VsbDpcbi8vICAgICAgICAgY2VsbC5pbm5lckhUTUwgPSBcIjxiPlRoaXMgaXMgYSB0YWJsZSBmb290ZXI8L2I+XCI7XG5cbiAgICAgICAgdGhpcy5jb2x1bW5zKCkuZm9yRWFjaCgoY29sdW1uLCBpbmRleCkgPT4ge1xuICAgICAgICAgICAgICAgIHZhciBjZWxsID0gcm93Lmluc2VydENlbGwoaW5kZXgpO1xuXG4gICAgICAgICAgICAgICAgLy8gY2VsbC5pbm5lckhUTUwgPSBjb2x1bW4uZGF0YTtcblxuICAgICAgICAgICAgICAgIGNvbnN0IGlucHV0ID0gZG9jdW1lbnQuY3JlYXRlRWxlbWVudChcImlucHV0XCIpO1xuICAgICAgICAgICAgICAgIGlucHV0LnNldEF0dHJpYnV0ZShcInR5cGVcIiwgXCJ0ZXh0XCIpO1xuICAgICAgICAgICAgICAgIGlucHV0LnNldEF0dHJpYnV0ZShcInBsYWNlaG9sZGVyXCIsIGNvbHVtbi5kYXRhKTtcbiAgICAgICAgICAgICAgICBjZWxsLmFwcGVuZENoaWxkKGlucHV0KTtcblxuICAgICAgICAgICAgICAgIC8vIGlmIChjb2x1bW4uZmlsdGVyID09PSB0cnVlIHx8IGNvbHVtbi5maWx0ZXIudHlwZSA9PT0gJ2lucHV0Jykge1xuICAgICAgICAgICAgICAgIC8vICAgICAgICAgZWwgPSBoYW5kbGVJbnB1dChjb2x1bW4pO1xuICAgICAgICAgICAgICAgIC8vICAgICB9IGVsc2UgaWYgKGNvbHVtbi5maWx0ZXIudHlwZSA9PT0gJ3NlbGVjdCcpIHtcbiAgICAgICAgICAgICAgICAvLyAgICAgICAgIGVsID0gaGFuZGxlU2VsZWN0KGNvbHVtbik7XG4gICAgICAgICAgICAgICAgLy8gICAgIH1cblxuICAgICAgICAgICAgICAgIC8vIHZhciBjZWxsID0gcm93Lmluc2VydENlbGwoaW5kZXgpO1xuICAgICAgICAgICAgICAgIC8vIHZhciB0ZCA9ICQoJzx0ZD4nKTtcbiAgICAgICAgICAgICAgICAvLyBpZiAoY29sdW1uLmZpbHRlciAhPT0gdW5kZWZpbmVkKSB7XG4gICAgICAgICAgICAgICAgLy8gICAgIHZhciBlbDtcbiAgICAgICAgICAgICAgICAvLyAgICAgaWYgKGNvbHVtbi5maWx0ZXIgPT09IHRydWUgfHwgY29sdW1uLmZpbHRlci50eXBlID09PSAnaW5wdXQnKSB7XG4gICAgICAgICAgICAgICAgLy8gICAgICAgICBlbCA9IGhhbmRsZUlucHV0KGNvbHVtbik7XG4gICAgICAgICAgICAgICAgLy8gICAgIH0gZWxzZSBpZiAoY29sdW1uLmZpbHRlci50eXBlID09PSAnc2VsZWN0Jykge1xuICAgICAgICAgICAgICAgIC8vICAgICAgICAgZWwgPSBoYW5kbGVTZWxlY3QoY29sdW1uKTtcbiAgICAgICAgICAgICAgICAvLyAgICAgfVxuICAgICAgICAgICAgICAgIC8vICAgICB0aGF0LmhhbmRsZUZpZWxkU2VhcmNoKHRoaXMuZWwsIGVsLCBpbmRleCk7XG4gICAgICAgICAgICAgICAgLy9cbiAgICAgICAgICAgICAgICAvLyAgICAgdGQuYXBwZW5kKGVsKTtcbiAgICAgICAgICAgIH1cbiAgICAgICAgKTtcbiAgICAgICAgLy8gZm9vdGVyID0gJCgnPHRmb290PicpO1xuICAgICAgICAvLyBmb290ZXIuYXBwZW5kKHRyKTtcbiAgICAgICAgLy8gY29uc29sZS5sb2coZm9vdGVyKTtcbiAgICAgICAgLy8gdGhpcy5lbC5hcHBlbmQoZm9vdGVyKTtcblxuICAgICAgICAvLyBzZWUgaHR0cDovL2xpdmUuZGF0YXRhYmxlcy5uZXQvZ2loYXJha2EvMS9lZGl0IGZvciBtb3ZpbmcgdGhlIGZvb3RlciB0byBiZWxvdyB0aGUgaGVhZGVyXG4gICAgfVxuXG5cbn1cbiIsIiFmdW5jdGlvbihlKXsodD17fSkuX19lc01vZHVsZT0hMCx0LlJvdXRpbmc9dC5Sb3V0ZXI9dm9pZCAwLG89ZnVuY3Rpb24oKXtmdW5jdGlvbiBsKGUsdCl7dGhpcy5jb250ZXh0Xz1lfHx7YmFzZV91cmw6XCJcIixwcmVmaXg6XCJcIixob3N0OlwiXCIscG9ydDpcIlwiLHNjaGVtZTpcIlwiLGxvY2FsZTpcIlwifSx0aGlzLnNldFJvdXRlcyh0fHx7fSl9cmV0dXJuIGwuZ2V0SW5zdGFuY2U9ZnVuY3Rpb24oKXtyZXR1cm4gdC5Sb3V0aW5nfSxsLnNldERhdGE9ZnVuY3Rpb24oZSl7bC5nZXRJbnN0YW5jZSgpLnNldFJvdXRpbmdEYXRhKGUpfSxsLnByb3RvdHlwZS5zZXRSb3V0aW5nRGF0YT1mdW5jdGlvbihlKXt0aGlzLnNldEJhc2VVcmwoZS5iYXNlX3VybCksdGhpcy5zZXRSb3V0ZXMoZS5yb3V0ZXMpLHZvaWQgMCE9PWUucHJlZml4JiZ0aGlzLnNldFByZWZpeChlLnByZWZpeCksdm9pZCAwIT09ZS5wb3J0JiZ0aGlzLnNldFBvcnQoZS5wb3J0KSx2b2lkIDAhPT1lLmxvY2FsZSYmdGhpcy5zZXRMb2NhbGUoZS5sb2NhbGUpLHRoaXMuc2V0SG9zdChlLmhvc3QpLHZvaWQgMCE9PWUuc2NoZW1lJiZ0aGlzLnNldFNjaGVtZShlLnNjaGVtZSl9LGwucHJvdG90eXBlLnNldFJvdXRlcz1mdW5jdGlvbihlKXt0aGlzLnJvdXRlc189T2JqZWN0LmZyZWV6ZShlKX0sbC5wcm90b3R5cGUuZ2V0Um91dGVzPWZ1bmN0aW9uKCl7cmV0dXJuIHRoaXMucm91dGVzX30sbC5wcm90b3R5cGUuc2V0QmFzZVVybD1mdW5jdGlvbihlKXt0aGlzLmNvbnRleHRfLmJhc2VfdXJsPWV9LGwucHJvdG90eXBlLmdldEJhc2VVcmw9ZnVuY3Rpb24oKXtyZXR1cm4gdGhpcy5jb250ZXh0Xy5iYXNlX3VybH0sbC5wcm90b3R5cGUuc2V0UHJlZml4PWZ1bmN0aW9uKGUpe3RoaXMuY29udGV4dF8ucHJlZml4PWV9LGwucHJvdG90eXBlLnNldFNjaGVtZT1mdW5jdGlvbihlKXt0aGlzLmNvbnRleHRfLnNjaGVtZT1lfSxsLnByb3RvdHlwZS5nZXRTY2hlbWU9ZnVuY3Rpb24oKXtyZXR1cm4gdGhpcy5jb250ZXh0Xy5zY2hlbWV9LGwucHJvdG90eXBlLnNldEhvc3Q9ZnVuY3Rpb24oZSl7dGhpcy5jb250ZXh0Xy5ob3N0PWV9LGwucHJvdG90eXBlLmdldEhvc3Q9ZnVuY3Rpb24oKXtyZXR1cm4gdGhpcy5jb250ZXh0Xy5ob3N0fSxsLnByb3RvdHlwZS5zZXRQb3J0PWZ1bmN0aW9uKGUpe3RoaXMuY29udGV4dF8ucG9ydD1lfSxsLnByb3RvdHlwZS5nZXRQb3J0PWZ1bmN0aW9uKCl7cmV0dXJuIHRoaXMuY29udGV4dF8ucG9ydH0sbC5wcm90b3R5cGUuc2V0TG9jYWxlPWZ1bmN0aW9uKGUpe3RoaXMuY29udGV4dF8ubG9jYWxlPWV9LGwucHJvdG90eXBlLmdldExvY2FsZT1mdW5jdGlvbigpe3JldHVybiB0aGlzLmNvbnRleHRfLmxvY2FsZX0sbC5wcm90b3R5cGUuYnVpbGRRdWVyeVBhcmFtcz1mdW5jdGlvbihvLGUsbil7dmFyIHQscj10aGlzLHM9bmV3IFJlZ0V4cCgvXFxbXFxdJC8pO2lmKGUgaW5zdGFuY2VvZiBBcnJheSllLmZvckVhY2goZnVuY3Rpb24oZSx0KXtzLnRlc3Qobyk/bihvLGUpOnIuYnVpbGRRdWVyeVBhcmFtcyhvK1wiW1wiKyhcIm9iamVjdFwiPT10eXBlb2YgZT90OlwiXCIpK1wiXVwiLGUsbil9KTtlbHNlIGlmKFwib2JqZWN0XCI9PXR5cGVvZiBlKWZvcih0IGluIGUpdGhpcy5idWlsZFF1ZXJ5UGFyYW1zKG8rXCJbXCIrdCtcIl1cIixlW3RdLG4pO2Vsc2UgbihvLGUpfSxsLnByb3RvdHlwZS5nZXRSb3V0ZT1mdW5jdGlvbihlKXt2YXIgdCxvPVt0aGlzLmNvbnRleHRfLnByZWZpeCtlLGUrXCIuXCIrdGhpcy5jb250ZXh0Xy5sb2NhbGUsdGhpcy5jb250ZXh0Xy5wcmVmaXgrZStcIi5cIit0aGlzLmNvbnRleHRfLmxvY2FsZSxlXTtmb3IodCBpbiBvKWlmKG9bdF1pbiB0aGlzLnJvdXRlc18pcmV0dXJuIHRoaXMucm91dGVzX1tvW3RdXTt0aHJvdyBuZXcgRXJyb3IoJ1RoZSByb3V0ZSBcIicrZSsnXCIgZG9lcyBub3QgZXhpc3QuJyl9LGwucHJvdG90eXBlLmdlbmVyYXRlPWZ1bmN0aW9uKHIsZSxwKXt2YXIgdCxzPXRoaXMuZ2V0Um91dGUociksaT1lfHx7fSx1PU9iamVjdC5hc3NpZ24oe30saSksYz1cIlwiLGE9ITAsbz1cIlwiLGU9dm9pZCAwPT09dGhpcy5nZXRQb3J0KCl8fG51bGw9PT10aGlzLmdldFBvcnQoKT9cIlwiOnRoaXMuZ2V0UG9ydCgpO2lmKHMudG9rZW5zLmZvckVhY2goZnVuY3Rpb24oZSl7aWYoXCJ0ZXh0XCI9PT1lWzBdJiZcInN0cmluZ1wiPT10eXBlb2YgZVsxXSlyZXR1cm4gYz1sLmVuY29kZVBhdGhDb21wb25lbnQoZVsxXSkrYyx2b2lkKGE9ITEpO2lmKFwidmFyaWFibGVcIiE9PWVbMF0pdGhyb3cgbmV3IEVycm9yKCdUaGUgdG9rZW4gdHlwZSBcIicrZVswXSsnXCIgaXMgbm90IHN1cHBvcnRlZC4nKTs2PT09ZS5sZW5ndGgmJiEwPT09ZVs1XSYmKGE9ITEpO3ZhciB0PXMuZGVmYXVsdHMmJiFBcnJheS5pc0FycmF5KHMuZGVmYXVsdHMpJiZcInN0cmluZ1wiPT10eXBlb2YgZVszXSYmZVszXWluIHMuZGVmYXVsdHM7aWYoITE9PT1hfHwhdHx8XCJzdHJpbmdcIj09dHlwZW9mIGVbM10mJmVbM11pbiBpJiYhQXJyYXkuaXNBcnJheShzLmRlZmF1bHRzKSYmaVtlWzNdXSE9cy5kZWZhdWx0c1tlWzNdXSl7dmFyIG8sbj12b2lkIDA7aWYoXCJzdHJpbmdcIj09dHlwZW9mIGVbM10mJmVbM11pbiBpKW49aVtlWzNdXSxkZWxldGUgdVtlWzNdXTtlbHNle2lmKFwic3RyaW5nXCIhPXR5cGVvZiBlWzNdfHwhdHx8QXJyYXkuaXNBcnJheShzLmRlZmF1bHRzKSl7aWYoYSlyZXR1cm47dGhyb3cgbmV3IEVycm9yKCdUaGUgcm91dGUgXCInK3IrJ1wiIHJlcXVpcmVzIHRoZSBwYXJhbWV0ZXIgXCInK2VbM10rJ1wiLicpfW49cy5kZWZhdWx0c1tlWzNdXX0oITA9PT1ufHwhMT09PW58fFwiXCI9PT1uKSYmYXx8KG89bC5lbmNvZGVQYXRoQ29tcG9uZW50KG4pLGM9ZVsxXSsobz1cIm51bGxcIj09PW8mJm51bGw9PT1uP1wiXCI6bykrYyksYT0hMX1lbHNlIHQmJlwic3RyaW5nXCI9PXR5cGVvZiBlWzNdJiZlWzNdaW4gdSYmZGVsZXRlIHVbZVszXV19KSxcIlwiPT09YyYmKGM9XCIvXCIpLHMuaG9zdHRva2Vucy5mb3JFYWNoKGZ1bmN0aW9uKGUpe3ZhciB0O1widGV4dFwiIT09ZVswXT9cInZhcmlhYmxlXCI9PT1lWzBdJiYoZVszXWluIGk/KHQ9aVtlWzNdXSxkZWxldGUgdVtlWzNdXSk6cy5kZWZhdWx0cyYmIUFycmF5LmlzQXJyYXkocy5kZWZhdWx0cykmJmVbM11pbiBzLmRlZmF1bHRzJiYodD1zLmRlZmF1bHRzW2VbM11dKSxvPWVbMV0rdCtvKTpvPWVbMV0rb30pLGM9dGhpcy5jb250ZXh0Xy5iYXNlX3VybCtjLHMucmVxdWlyZW1lbnRzJiZcIl9zY2hlbWVcImluIHMucmVxdWlyZW1lbnRzJiZ0aGlzLmdldFNjaGVtZSgpIT1zLnJlcXVpcmVtZW50cy5fc2NoZW1lPyh0PW98fHRoaXMuZ2V0SG9zdCgpLGM9cy5yZXF1aXJlbWVudHMuX3NjaGVtZStcIjovL1wiK3QrKC0xPHQuaW5kZXhPZihcIjpcIitlKXx8XCJcIj09PWU/XCJcIjpcIjpcIitlKStjKTp2b2lkIDAhPT1zLnNjaGVtZXMmJnZvaWQgMCE9PXMuc2NoZW1lc1swXSYmdGhpcy5nZXRTY2hlbWUoKSE9PXMuc2NoZW1lc1swXT8odD1vfHx0aGlzLmdldEhvc3QoKSxjPXMuc2NoZW1lc1swXStcIjovL1wiK3QrKC0xPHQuaW5kZXhPZihcIjpcIitlKXx8XCJcIj09PWU/XCJcIjpcIjpcIitlKStjKTpvJiZ0aGlzLmdldEhvc3QoKSE9PW8rKC0xPG8uaW5kZXhPZihcIjpcIitlKXx8XCJcIj09PWU/XCJcIjpcIjpcIitlKT9jPXRoaXMuZ2V0U2NoZW1lKCkrXCI6Ly9cIitvKygtMTxvLmluZGV4T2YoXCI6XCIrZSl8fFwiXCI9PT1lP1wiXCI6XCI6XCIrZSkrYzohMD09PXAmJihjPXRoaXMuZ2V0U2NoZW1lKCkrXCI6Ly9cIit0aGlzLmdldEhvc3QoKSsoLTE8dGhpcy5nZXRIb3N0KCkuaW5kZXhPZihcIjpcIitlKXx8XCJcIj09PWU/XCJcIjpcIjpcIitlKStjKSwwPE9iamVjdC5rZXlzKHUpLmxlbmd0aCl7ZnVuY3Rpb24gZihlLHQpe3Q9bnVsbD09PSh0PVwiZnVuY3Rpb25cIj09dHlwZW9mIHQ/dCgpOnQpP1wiXCI6dCxoLnB1c2gobC5lbmNvZGVRdWVyeUNvbXBvbmVudChlKStcIj1cIitsLmVuY29kZVF1ZXJ5Q29tcG9uZW50KHQpKX12YXIgbixoPVtdO2ZvcihuIGluIHUpdS5oYXNPd25Qcm9wZXJ0eShuKSYmdGhpcy5idWlsZFF1ZXJ5UGFyYW1zKG4sdVtuXSxmKTtjPWMrXCI/XCIraC5qb2luKFwiJlwiKX1yZXR1cm4gY30sbC5jdXN0b21FbmNvZGVVUklDb21wb25lbnQ9ZnVuY3Rpb24oZSl7cmV0dXJuIGVuY29kZVVSSUNvbXBvbmVudChlKS5yZXBsYWNlKC8lMkYvZyxcIi9cIikucmVwbGFjZSgvJTQwL2csXCJAXCIpLnJlcGxhY2UoLyUzQS9nLFwiOlwiKS5yZXBsYWNlKC8lMjEvZyxcIiFcIikucmVwbGFjZSgvJTNCL2csXCI7XCIpLnJlcGxhY2UoLyUyQy9nLFwiLFwiKS5yZXBsYWNlKC8lMkEvZyxcIipcIikucmVwbGFjZSgvXFwoL2csXCIlMjhcIikucmVwbGFjZSgvXFwpL2csXCIlMjlcIikucmVwbGFjZSgvJy9nLFwiJTI3XCIpfSxsLmVuY29kZVBhdGhDb21wb25lbnQ9ZnVuY3Rpb24oZSl7cmV0dXJuIGwuY3VzdG9tRW5jb2RlVVJJQ29tcG9uZW50KGUpLnJlcGxhY2UoLyUzRC9nLFwiPVwiKS5yZXBsYWNlKC8lMkIvZyxcIitcIikucmVwbGFjZSgvJTIxL2csXCIhXCIpLnJlcGxhY2UoLyU3Qy9nLFwifFwiKX0sbC5lbmNvZGVRdWVyeUNvbXBvbmVudD1mdW5jdGlvbihlKXtyZXR1cm4gbC5jdXN0b21FbmNvZGVVUklDb21wb25lbnQoZSkucmVwbGFjZSgvJTNGL2csXCI/XCIpfSxsfSgpLHQuUm91dGVyPW8sdC5Sb3V0aW5nPW5ldyBvLHQuZGVmYXVsdD10LlJvdXRpbmc7dmFyIHQsbz17Um91dGVyOnQuUm91dGVyLFJvdXRpbmc6dC5Sb3V0aW5nfTtcImZ1bmN0aW9uXCI9PXR5cGVvZiBkZWZpbmUmJmRlZmluZS5hbWQ/ZGVmaW5lKFtdLG8uUm91dGluZyk6XCJvYmplY3RcIj09dHlwZW9mIG1vZHVsZSYmbW9kdWxlLmV4cG9ydHM/bW9kdWxlLmV4cG9ydHM9by5Sb3V0aW5nOihlLlJvdXRpbmc9by5Sb3V0aW5nLGUuZm9zPXtSb3V0ZXI6by5Sb3V0ZXJ9KX0odGhpcyk7Il0sIm5hbWVzIjpbIkNvbnRyb2xsZXIiLCJkZWZhdWx0IiwiYXhpb3MiLCJEYXRhVGFibGVzIiwicm91dGVzIiwicmVxdWlyZSIsIlJvdXRpbmciLCJzZXRSb3V0aW5nRGF0YSIsIlR3aWciLCJleHRlbmQiLCJfZnVuY3Rpb24iLCJyb3V0ZSIsInJvdXRlUGFyYW1zIiwiX2tleXMiLCJwYXRoIiwiZ2VuZXJhdGUiLCJNb2RhbCIsImNvbnNvbGUiLCJhc3NlcnQiLCJjb250ZW50VHlwZXMiLCJ4IiwiY29sdW1ucyIsIm1hcCIsImMiLCJyZW5kZXIiLCJ0d2lnVGVtcGxhdGUiLCJ0ZW1wbGF0ZSIsInR3aWciLCJkYXRhIiwidHlwZSIsInJvdyIsIm1ldGEiLCJmaWVsZF9uYW1lIiwibmFtZSIsImFjdGlvbnMiLCJwcmVmaXgiLCJwcm9wZXJ0eU5hbWUiLCJsYWJlbCIsInRpdGxlIiwibG9jYWxlIiwiZXZlbnQiLCJDdXN0b21FdmVudCIsImZvcm1VcmwiLCJ3aW5kb3ciLCJkaXNwYXRjaEV2ZW50IiwiSlNPTiIsInBhcnNlIiwiY29sdW1uQ29uZmlndXJhdGlvblZhbHVlIiwiZG9tIiwiZG9tVmFsdWUiLCJmaWx0ZXIiLCJmaWx0ZXJWYWx1ZSIsInNvcnRhYmxlRmllbGRzIiwic29ydGFibGVGaWVsZHNWYWx1ZSIsInNlYXJjaGFibGVGaWVsZHMiLCJzZWFyY2hhYmxlRmllbGRzVmFsdWUiLCJzZWFyY2hCdWlsZGVyRmllbGRzIiwic2VhcmNoQnVpbGRlckZpZWxkc1ZhbHVlIiwibG9jYWxlVmFsdWUiLCJsb2ciLCJpZGVudGlmaWVyIiwiaGFzTW9kYWxUYXJnZXQiLCJ0aGF0IiwidGFibGVFbGVtZW50IiwiaGFzVGFibGVUYXJnZXQiLCJ0YWJsZVRhcmdldCIsImVsZW1lbnQiLCJ0YWdOYW1lIiwiZG9jdW1lbnQiLCJnZXRFbGVtZW50c0J5VGFnTmFtZSIsInNlYXJjaFBhbmVzRGF0YVVybFZhbHVlIiwiZ2V0IiwidGhlbiIsInJlc3BvbnNlIiwiZHQiLCJpbml0RGF0YVRhYmxlIiwiaW5pdGlhbGl6ZWQiLCJlIiwiZXJyb3IiLCJjdXJyZW50VGFyZ2V0IiwiZGF0YXNldCIsIm1vZGFsVGFyZ2V0IiwiYWRkRXZlbnRMaXN0ZW5lciIsInJlbGF0ZWRUYXJnZXQiLCJtb2RhbCIsInNob3ciLCJkYXRhSW5kZXgiLCJtZXNzYWdlIiwibWVzc2FnZVRhcmdldCIsImlubmVySFRNTCIsImVsIiwidHJhbnNpdGlvbkJ1dHRvbnMiLCJxdWVyeVNlbGVjdG9yQWxsIiwiZm9yRWFjaCIsImJ0biIsImlzQnV0dG9uIiwidGFyZ2V0Iiwibm9kZU5hbWUiLCJjbG9zZXN0Iiwibm90aWZ5IiwiaWQiLCJlbnRpdHlDbGFzcyIsImFwcGxpY2F0aW9uIiwiZ2V0Q29udHJvbGxlckZvckVsZW1lbnRBbmRJZGVudGlmaWVyIiwib24iLCIkZXZlbnQiLCJ0cmFuc2l0aW9uIiwibW9kYWxCb2R5VGFyZ2V0Iiwid2FybiIsIm1vZGFsUm91dGUiLCJjb2RlIiwicnAiLCJfcGFnZV9jb250ZW50X29ubHkiLCJkZXRhaWwiLCJxdWVyeVNlbGVjdG9yIiwibWV0aG9kIiwidXJsIiwiaGVhZGVycyIsImZpZWxkcyIsImxvb2t1cCIsImZpZWxkIiwiaW5kZXgiLCJqc29uS2V5Q29kZSIsInNlYXJjaEZpZWxkc0J5Q29sdW1uTnVtYmVyIiwib3B0aW9ucyIsImNvbHVtbiIsInNlYXJjaGFibGUiLCJicm93c2FibGUiLCJwdXNoIiwidmFsdWVDb3VudHMiLCJjb3VudCIsImRpc3RpbmN0VmFsdWVzQ291bnQiLCJ2YWx1ZSIsInRvdGFsIiwiYXBpUGxhdGZvcm1IZWFkZXJzIiwidXNlckxvY2FsZSIsIm5hdmlnYXRvciIsImxhbmd1YWdlcyIsImxlbmd0aCIsImxhbmd1YWdlIiwic2V0dXAiLCJzZWFyY2hQbGFjZWhvbGRlciIsImpvaW4iLCJjcmVhdGVkUm93Iiwic2Nyb2xsWSIsIm9yZGVyQ2VsbHNUb3AiLCJmaXhlZEhlYWRlciIsImRlZmVyUmVuZGVyIiwic2Nyb2xsZXIiLCJzZXJ2ZXJTaWRlIiwiaW5pdENvbXBsZXRlIiwib2JqIiwiaGFuZGxlVHJhbnMiLCJhZGRCdXR0b25DbGlja0xpc3RlbmVyIiwiYnV0dG9ucyIsImNvbHMiLCJzZWFyY2hQYW5lcyIsImxheW91dCIsInNlYXJjaEJ1aWxkZXIiLCJkZXB0aExpbWl0IiwiY29sdW1uRGVmcyIsImFqYXgiLCJwYXJhbXMiLCJjYWxsYmFjayIsInNldHRpbmdzIiwiYXBpUGFyYW1zIiwiZGF0YVRhYmxlUGFyYW1zVG9BcGlQbGF0Zm9ybVBhcmFtcyIsIk9iamVjdCIsImFzc2lnbiIsImFwaUNhbGxWYWx1ZSIsImh5ZHJhRGF0YSIsImhhc093blByb3BlcnR5IiwiaXRlbXNSZXR1cm5lZCIsInNlYXJjaCIsImQiLCJuZXh0IiwiY2FsbGJhY2tWYWx1ZXMiLCJkcmF3IiwicmVjb3Jkc1RvdGFsIiwicmVjb3Jkc0ZpbHRlcmVkIiwiJCIsImFwcGVuZCIsImNvbnRhaW5lciIsInNlYXJjaFBhbmVzQ29sdW1ucyIsInRhcmdldHMiLCJ2aXNpYmxlIiwic29ydGFibGUiLCJpY29ucyIsImVkaXQiLCJhY3Rpb24iLCJtb2RhbF9yb3V0ZSIsImljb24iLCJyZW5kZXJUeXBlIiwiZGlzcGxheURhdGEiLCJpbmNsdWRlcyIsInYiLCJyZW5kZXJGdW5jdGlvbiIsImlzb1RpbWUiLCJzdHIiLCJhcGlEYXRhIiwibGltaXQiLCJvcmRlciIsIm8iLCJkaXIiLCJrZXkiLCJ2YWx1ZXMiLCJ2dnYiLCJlbnRyaWVzIiwiY3JpdGVyaWEiLCJvcmlnRGF0YSIsInZhbHVlMSIsInN0YXJ0Iiwib2Zmc2V0IiwiZm9vdGVyIiwiaGFuZGxlSW5wdXQiLCJpbnB1dCIsImF0dHIiLCJwbGFjZWhvbGRlciIsImRlYnVnIiwiY3JlYXRlVEZvb3QiLCJjbGFzc0xpc3QiLCJhZGQiLCJ0aGVhZCIsImluc2VydEJlZm9yZSIsImluc2VydFJvdyIsImNlbGwiLCJpbnNlcnRDZWxsIiwiY3JlYXRlRWxlbWVudCIsInNldEF0dHJpYnV0ZSIsImFwcGVuZENoaWxkIiwiYXBpQ2FsbCIsIlN0cmluZyIsInNlYXJjaFBhbmVzRGF0YVVybCIsImNvbHVtbkNvbmZpZ3VyYXRpb24iLCJ0IiwiX19lc01vZHVsZSIsIlJvdXRlciIsImwiLCJjb250ZXh0XyIsImJhc2VfdXJsIiwiaG9zdCIsInBvcnQiLCJzY2hlbWUiLCJzZXRSb3V0ZXMiLCJnZXRJbnN0YW5jZSIsInNldERhdGEiLCJwcm90b3R5cGUiLCJzZXRCYXNlVXJsIiwic2V0UHJlZml4Iiwic2V0UG9ydCIsInNldExvY2FsZSIsInNldEhvc3QiLCJzZXRTY2hlbWUiLCJyb3V0ZXNfIiwiZnJlZXplIiwiZ2V0Um91dGVzIiwiZ2V0QmFzZVVybCIsImdldFNjaGVtZSIsImdldEhvc3QiLCJnZXRQb3J0IiwiZ2V0TG9jYWxlIiwiYnVpbGRRdWVyeVBhcmFtcyIsIm4iLCJyIiwicyIsIlJlZ0V4cCIsIkFycmF5IiwidGVzdCIsImdldFJvdXRlIiwiRXJyb3IiLCJwIiwiaSIsInUiLCJhIiwidG9rZW5zIiwiZW5jb2RlUGF0aENvbXBvbmVudCIsImRlZmF1bHRzIiwiaXNBcnJheSIsImhvc3R0b2tlbnMiLCJyZXF1aXJlbWVudHMiLCJfc2NoZW1lIiwiaW5kZXhPZiIsInNjaGVtZXMiLCJrZXlzIiwiZiIsImgiLCJlbmNvZGVRdWVyeUNvbXBvbmVudCIsImN1c3RvbUVuY29kZVVSSUNvbXBvbmVudCIsImVuY29kZVVSSUNvbXBvbmVudCIsInJlcGxhY2UiLCJkZWZpbmUiLCJhbWQiLCJtb2R1bGUiLCJleHBvcnRzIiwiZm9zIl0sInNvdXJjZVJvb3QiOiIifQ==