webpackJsonp([28],{qNJW:function(t,i){},qygY:function(t,i,e){"use strict";Object.defineProperty(i,"__esModule",{value:!0});var s=e("Gu7T"),o=e.n(s),a={data:function(){return{page:1,pageSize:10,list:[]}},created:function(){this.goodsBrowsing()},methods:{showDetail:function(t){this.$router.push({path:"/goodsdetail",query:{goods_id:t}})},goodsBrowsing:function(){var t=this;this.$api.goodsBrowsing({page:this.page,limit:this.pageSize},function(i){var e=t.dateFormat(i.data.list);t.list=[].concat(o()(e)),e.length<t.pageSize&&t.$refs.infinitescrollDemo.$emit("ydui.infinitescroll.loadedDone")})},loadMore:function(){var t=this;this.$api.goodsBrowsing({page:++this.page,limit:this.pageSize},function(i){var e=t.dateFormat(i.data.list);t.list=[].concat(o()(t.list),o()(e)),e.length<t.pageSize?t.$refs.infinitescrollDemo.$emit("ydui.infinitescroll.loadedDone"):t.$refs.infinitescrollDemo.$emit("ydui.infinitescroll.finishLoad")})},dateFormat:function(t){for(var i in t)t[i].ctime=this.GLOBAL.timeToDate(t[i].ctime);return t},skip:function(){},touchStart:function(t){this.startX=t.touches[0].clientX},touchEnd:function(t){var i=t.currentTarget.parentElement;this.endX=t.changedTouches[0].clientX,"0"===i.dataset.type&&this.startX-this.endX>30&&(this.restSlide(),i.dataset.type=1),"1"===i.dataset.type&&this.startX-this.endX<-30&&(this.restSlide(),i.dataset.type=0),this.startX=0,this.endX=0},checkSlide:function(){for(var t=document.querySelectorAll(".list-item"),i=0;i<t.length;i++)if("1"===t[i].dataset.type)return!0;return!1},restSlide:function(){for(var t=document.querySelectorAll(".list-item"),i=0;i<t.length;i++)t[i].dataset.type=0},deleteItem:function(t){var i=this,e=t.currentTarget.dataset.index;this.$api.delGoodsBrowsing({goods_ids:this.list[e].goods_id},function(t){t.status?(i.$dialog.toast({mes:t.msg,timeout:1e3,icon:"success"}),i.restSlide(),i.list.splice(e,1)):i.$dialog.toast({mes:t.msg,timeout:1e3,icon:"error"})})}}},n={render:function(){var t=this,i=t.$createElement,s=t._self._c||i;return s("div",{staticClass:"history"},[s("yd-infinitescroll",{ref:"infinitescrollDemo",attrs:{callback:t.loadMore,distance:2}},[s("ul",{attrs:{slot:"list"},slot:"list"},t._l(t.list,function(i,o){return i.goods?s("li",{key:o,staticClass:"list-item",attrs:{"data-type":"0"}},[s("div",{staticClass:"list-box",staticStyle:{padding:".15rem"},on:{"!touchstart":function(i){return t.touchStart(i)},"!touchend":function(i){return t.touchEnd(i)},click:function(e){t.showDetail(i.goods_id)}}},[s("img",{directives:[{name:"lazy",rawName:"v-lazy",value:i.goods.image_url,expression:"item.goods.image_url"}],staticClass:"goodsimg",attrs:{slot:"img"},slot:"img"}),t._v(" "),s("div",{staticClass:"list-body"},[s("h3",{staticClass:"goodsname",attrs:{slot:"title"},slot:"title"},[t._v(t._s(i.goods_name))]),t._v(" "),s("div",{staticClass:"btn-numbox"},[s("div",[s("span",{staticClass:"demo-list-price"},[s("em",[t._v("¥")]),t._v(t._s(i.goods.price))])])]),t._v(" "),s("div",{attrs:{slot:"other"},slot:"other"},[s("div",[s("span",{staticClass:"time"},[t._v(t._s(i.ctime))])])]),t._v(" "),s("img",{staticClass:"right-img",attrs:{slot:"other",src:e("oenc")},slot:"other"})])]),t._v(" "),s("div",{staticClass:"delete",attrs:{"data-index":o},on:{click:t.deleteItem}},[t._v("删除")])]):t._e()}))])],1)},staticRenderFns:[]};var r=e("VU/8")(a,n,!1,function(t){e("qNJW")},null,null);i.default=r.exports}});
//# sourceMappingURL=28.84fe8318dd681474dc5a.js.map