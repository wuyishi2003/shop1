webpackJsonp([24],{sdPH:function(t,n,s){"use strict";Object.defineProperty(n,"__esModule",{value:!0});var o={render:function(){var t=this,n=t.$createElement,s=t._self._c||n;return t.couponList.length?s("div",{staticClass:"coupon"},t._l(t.couponList,function(n,o){return s("div",{key:o,staticClass:"coupon-content"},[s("div",{staticClass:"coupon-red"},[s("div",{staticClass:"coupon-content-left"},[t._v(t._s(n.name))]),t._v(" "),s("div",{staticClass:"coupon-content-right"},[s("div",{},[s("p",[t._v(t._s(n.stime))]),t._v(" "),s("p",[t._v("到")]),t._v(" "),s("p",[t._v(t._s(n.etime))])])])])])})):s("div",{staticClass:"data-none"},[t._v("\n    竟然什么都没有，快去领券吧\n")])},staticRenderFns:[]};var e=s("VU/8")({data:function(){return{couponList:[]}},created:function(){this.userCoupon()},methods:{userCoupon:function(){var t=this;this.$api.userCoupon({},function(n){n.status&&(t.couponList=n.data)})}}},o,!1,function(t){s("vJ2i")},null,null);n.default=e.exports},vJ2i:function(t,n){}});
//# sourceMappingURL=24.a6f887a75ec40a1894b2.js.map