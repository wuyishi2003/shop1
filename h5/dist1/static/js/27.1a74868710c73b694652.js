webpackJsonp([27],{CzrR:function(t,e){},tLJp:function(t,e,i){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var a={render:function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("div",{staticClass:"notice"},[i("h2",{staticClass:"notice-title"},[t._v(t._s(t.article.title))]),t._v(" "),i("div",{staticClass:"notice-content"},[i("p",{domProps:{innerHTML:t._s(t.article.content)}})]),t._v(" "),i("div",{staticClass:"notice-footer"},[i("span",[t._v(t._s(this.GLOBAL.timeToDate(t.article.ctime)))])])])},staticRenderFns:[]};var n=i("VU/8")({data:function(){return{article:[]}},created:function(){var t=this;this.$api.articleInfo({article_id:this.$route.query.article_id},function(e){e.data?t.article=e.data:t.$dialog.alert({mes:"该文章信息不存在",callback:function(){t.$router.go(-1)}})})}},a,!1,function(t){i("CzrR")},null,null);e.default=n.exports}});
//# sourceMappingURL=27.1a74868710c73b694652.js.map