webpackJsonp([5],{AhuL:function(t,o){t.exports="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAA8CAYAAABmdppWAAABS2lUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4KPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNS42LWMxNDIgNzkuMTYwOTI0LCAyMDE3LzA3LzEzLTAxOjA2OjM5ICAgICAgICAiPgogPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4KICA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIi8+CiA8L3JkZjpSREY+CjwveDp4bXBtZXRhPgo8P3hwYWNrZXQgZW5kPSJyIj8+nhxg7wAAAR5JREFUWIWt1ssRgjAURuGjNSiVWYVZWgvahJVhEboQHR4h3MfPDAs2Z/iGJJfD+4byuhyFsRPQK4MPoFMFL+ONIngC+t+DIvgAOlXwT1UEZ1RFcEbNBlfUTLBKzQSr1GhwkxoJNqmRYJPqDe5SPUET1RM0Ua1BM9USdFEtQRd1L+imtoJnAtRW8E6AuhUMU2vBFLUWTFGXwTR1GpRQp0EJdRqUXkegAC9lcACuyiDAc7xlQRDRp0EJffmV0/TasknRa8EUfWthh+mtnRKit4Ih+t5edtMth0Ph+7ay4DBGZUFw0D3noYnuCZro3hN7lx4ZAU16JNikR4fUJj0z9ar0TLBKz87lFV0x6Gd0RXBGV/2K/OnKf5sCDMrgAJQPzqQ8PpZ6HUYAAAAASUVORK5CYII="},DCR3:function(t,o){},WpuH:function(t,o,s){"use strict";var a=s("ZqI4"),i={props:{config:"config",product:{type:[Object,Array],default:function(){return{}}},brief:{type:String},buyCount:{type:Number},unit:{type:String},stock:{type:Number,default:function(){return 0}},etime:{type:Number,default:function(){return 0}}},components:{countDown:a.a},data:function(){return{show1:!1,url:"",source:"",title:"",description:"",image:"",sites:["qzone","qq","weibo","wechat","douban"],disabled:["google","facebook","twitter"],wechatQrcodeTitle:"微信扫一扫：分享",wechatQrcodeHelper:"<p>微信里点“发现”，扫一下</p><p>二维码便可将本文分享至朋友圈。</p>"}}},e={render:function(){var t=this,o=t.$createElement,a=t._self._c||o;return a("div",{staticClass:"goodstitle"},[a("div",{staticClass:"goodsheader"},[a("div",{staticClass:"goodsheader-left"},[a("h3",{staticClass:"goodsname"},[t._v(t._s(t.product.name))]),t._v(" "),a("p",[t._v(t._s(t.brief))])]),t._v(" "),a("yd-button",{staticClass:"share",nativeOn:{click:function(o){t.show1=!0}}},[a("img",{attrs:{src:s("ILAY")}}),t._v(" "),a("p",[t._v("分享")])])],1),t._v(" "),a("div",{staticClass:"group-buying"},[a("div",{staticClass:"price"},[a("h2",[t._v("￥"+t._s(this.GLOBAL.formatMoney(t.product.price,2,"")))]),t._v(" "),a("p",[t._v("￥"+t._s(t.product.mktprice))])]),t._v(" "),a("div",{staticClass:"salesvolume"},[a("p",[t._v("已售"+t._s(t.buyCount)+" "+t._s(t.unit)+"/剩余 "+t._s(t.stock)+" "+t._s(t.unit))]),t._v(" "),a("p",[t._v("累计销售"+t._s(t.buyCount)+" "+t._s(t.unit))])]),t._v(" "),a("div",{staticClass:"commodity-time"},[a("p",[t._v("距结束仅剩")]),t._v(" "),a("count-down",{attrs:{endTime:t.etime,endText:"已经结束了"}})],1),t._v(" "),a("img",{staticClass:"sanjiao",attrs:{src:s("AhuL"),alt:""}})]),t._v(" "),a("yd-popup",{attrs:{position:"center",width:"90%"},model:{value:t.show1,callback:function(o){t.show1=o},expression:"show1"}},[a("div",{staticStyle:{"background-color":"#fff",padding:"20px"}},[a("share",{attrs:{config:t.config}})],1)])],1)},staticRenderFns:[]};var n=s("VU/8")(i,e,!1,function(t){s("DCR3")},null,null);o.a=n.exports},amT1:function(t,o,s){"use strict";Object.defineProperty(o,"__esModule",{value:!0});var a=s("Gu7T"),i=s.n(a),e=s("2oac"),n=s("WpuH"),r=s("VOUH"),c=s("PFDR"),d=s("L+nx"),l=s("o6mg"),u={data:function(){return{labelName:"立即秒杀",page:1,pageSize:5,goodsId:this.$route.query.goods_id?this.$route.query.goods_id:"",goodsData:[],productSpes:[],promotion:[],stock:"",params:[],comment:[],load:!0,is_fav:!1,num:1,rate1:5,rate2:3,rate3:1}},components:{slider:e.a,activitytitle:n.a,goodsservice:r.a,goodsstandard:c.a,goodsnum:d.a,activityfooter:l.a},created:function(){this.activityDetail(),this.goodsParams(),this.goodsComment()},computed:{checkPromotion:function(){if(this.promotion){var t=[];for(var o in this.promotion)2!==this.promotion[o].type&&!0!==this.promotion[o].type||t.push(this.promotion[o]);return t}}},methods:{activityDetail:function(){var t=this;this.$api.activityDetail({id:this.goodsId,token:this.GLOBAL.getStorage("user_token")},function(o){o.status&&0!==o.data.length?(t.goodsData=o.data,"false"===o.data.isfav?t.is_fav=!1:t.is_fav=!0,t.productSpes=o.data.product,t.promotion=o.data.product.promotion_list,t.GLOBAL.getStorage("user_token")&&t.goodsBrowsing()):t.$dialog.alert({mes:"该商品不存在",callback:function(){t.$router.go(-1)}})})},goodsParams:function(){var t=this;this.$api.goodsParams({id:this.goodsId},function(o){o.status&&(t.params=o.data)})},goodsComment:function(){var t=this;this.$api.goodsComment({page:this.page,limit:this.pageSize,goods_id:this.goodsId},function(o){if(o.status){var s=o.data.list;for(var a in s)s[a].ctime=t.GLOBAL.timeToDate(s[a].ctime);s.length<t.pageSize&&(t.load=!1),t.comment=[].concat(i()(s))}})},loadMore:function(){var t=this;this.$api.goodsComment({page:++this.page,limit:this.pageSize,goods_id:this.goodsId},function(o){if(o.status){var s=o.data.list;for(var a in s)s[a].ctime=t.GLOBAL.timeToDate(s[a].ctime);s.length<t.pageSize&&(t.load=!1),t.comment=[].concat(i()(t.comment),i()(s))}})},changeSpes:function(t){var o=this;this.$api.getProductInfo({id:t},function(t){t.status&&(o.productSpes=t.data)})},goodsNum:function(t){this.num=t},goodsBrowsing:function(){this.$api.addGoodsBrowsing({goods_id:this.goodsData.id},function(t){})},collection:function(){var t=this;this.$api.goodsCollection({goods_id:this.goodsData.id},function(o){o.status&&(t.is_fav=!t.is_fav,t.$dialog.toast({mes:o.msg,timeout:1e3}))})},add:function(){var t=this;this.$api.addCart({product_id:this.productSpes.id,nums:this.num},function(o){o.status&&t.$dialog.toast({mes:o.msg,timeout:1e3,icon:"success"})})},buyNow:function(){var t=this;this.$api.addCart({product_id:this.productSpes.id,nums:this.num,type:2},function(o){if(o.status){var s=o.data;t.$router.push({path:"/firmorder",query:{cartIds:s}})}})},goBack:function(){this.$router.back(-1)}}},p={render:function(){var t=this,o=t.$createElement,s=t._self._c||o;return s("div",{staticClass:"goodsdetail"},[s("div",{staticClass:"goodsdetail-back"},[s("i",{staticClass:"iconfont icon-zuo",on:{click:t.goBack}})]),t._v(" "),s("slider",{attrs:{imgList:t.goodsData.album}}),t._v(" "),s("activitytitle",{attrs:{product:t.productSpes,brief:t.goodsData.brief,buyCount:t.goodsData.buy_count,unit:t.goodsData.unit,stock:t.productSpes.stock,etime:t.goodsData.etime}}),t._v(" "),s("goodsservice",{attrs:{promotion:t.checkPromotion}}),t._v(" "),s("goodsstandard",{attrs:{spes:t.productSpes.default_spes_desc},on:{changeSpes:t.changeSpes}}),t._v(" "),s("goodsnum",{attrs:{stock:t.productSpes.stock},on:{num:t.goodsNum}}),t._v(" "),s("yd-tab",[s("yd-tab-panel",{attrs:{label:"图文详情"}},[s("ul",{domProps:{innerHTML:t._s(t.goodsData.intro)}})]),t._v(" "),s("yd-tab-panel",{staticClass:"params",attrs:{label:"产品参数"}},[t.params.length?s("ul",t._l(t.params,function(o,a){return s("li",{key:a},[s("span",{attrs:{id:"paramsleft"}},[t._v(t._s(o.name)+" : ")]),s("span",{attrs:{id:"paramsright"}},[t._v(t._s(o.value))])])})):s("ul",[t._v("没有详细参数")])]),t._v(" "),s("yd-tab-panel",{staticClass:"comment",attrs:{label:"买家评论"}},[s("ul",[t._l(t.comment,function(o,a){return s("li",{key:a},[s("div",{},[s("img",{staticClass:"user-img",attrs:{src:o.user.avatar,alt:""}}),t._v(" "),s("p",{staticClass:"user-name"},[t._v(t._s(o.user.nickname))]),t._v(" "),1===o.score?s("yd-rate",{attrs:{slot:"left",readonly:!0,size:".2rem"},slot:"left",model:{value:t.rate1,callback:function(o){t.rate1=o},expression:"rate1"}}):0===o.score?s("yd-rate",{attrs:{slot:"left",readonly:!0,size:".2rem"},slot:"left",model:{value:t.rate2,callback:function(o){t.rate2=o},expression:"rate2"}}):s("yd-rate",{attrs:{slot:"left",readonly:!0,size:".2rem"},slot:"left",model:{value:t.rate3,callback:function(o){t.rate3=o},expression:"rate3"}})],1),t._v(" "),s("p",[t._v(t._s(o.ctime)+"      "+t._s(o.addon))]),t._v(" "),s("p",[t._v(t._s(o.content))]),t._v(" "),o.images_url.length?s("div",{staticClass:"comment-imgs"},t._l(o.images_url,function(t,o){return s("div",{key:o,staticClass:"comment-img"},[s("img",{attrs:{src:t}})])})):t._e()])}),t._v(" "),s("li",{staticStyle:{"text-align":"center"}},[t.load?s("yd-button",{attrs:{size:"small",type:"hollow",color:"#F00",shape:"circle"},nativeOn:{click:function(o){return t.loadMore(o)}}},[t._v("加载更多评论")]):s("yd-button",{attrs:{size:"small",type:"hollow",color:"#AAA",shape:"circle"}},[t._v("没有更多评论了")])],1)],2)])],1),t._v(" "),s("activityfooter",{attrs:{is_fav:t.is_fav,label:t.labelName},on:{collection:t.collection,buyNow:t.buyNow}})],1)},staticRenderFns:[]};var m=s("VU/8")(u,p,!1,function(t){s("mQMu")},null,null);o.default=m.exports},mQMu:function(t,o){},o6mg:function(t,o,s){"use strict";var a={props:{is_fav:{type:Boolean,default:function(){return!1}},label:{type:String,default:function(){return""}}},methods:{buyNow:function(){this.$emit("buyNow")},collection:function(){this.$emit("collection")},showChat:function(){window._AIHECONG("ini",{entId:this.GLOBAL.hecong(),button:!1,appearance:{panelMobile:{tone:"#FF3B44",sideMargin:30,ratio:"part",headHeight:50}}}),_AIHECONG("showChat")}}},i={render:function(){var t=this,o=t.$createElement,a=t._self._c||o;return a("div",{staticClass:"goodsdetailfooter"},[a("div",{staticClass:"goodsdetailfooter-left"},[a("div",{staticClass:"customservice",on:{click:t.showChat}},[a("img",{attrs:{src:s("OsEz")}}),t._v(" "),a("p",[t._v("客服")])]),t._v(" "),a("div",{directives:[{name:"show",rawName:"v-show",value:!t.is_fav,expression:"!is_fav"}],staticClass:"goods-cart",on:{click:t.collection}},[a("img",{attrs:{src:s("75rK")}}),t._v(" "),a("p",[t._v("收藏")])]),t._v(" "),a("div",{directives:[{name:"show",rawName:"v-show",value:t.is_fav,expression:"is_fav"}],staticClass:"goods-cart",on:{click:t.collection}},[a("img",{attrs:{src:s("SCM3")}}),t._v(" "),a("p",[t._v("取消收藏")])]),t._v(" "),a("router-link",{staticClass:"star",attrs:{tag:"div",to:"/cart"}},[a("img",{attrs:{src:s("7F5C")}}),t._v(" "),a("p",[t._v("购物车")])])],1),t._v(" "),a("div",{staticClass:"goodsdetailfooter-right"},[a("div",{staticClass:"kill"},[a("yd-button",{attrs:{type:"danger"},nativeOn:{click:function(o){return t.buyNow(o)}}},[t._v(t._s(t.label))])],1)])])},staticRenderFns:[]};var e=s("VU/8")(a,i,!1,function(t){s("vvyo")},null,null);o.a=e.exports},vvyo:function(t,o){}});
//# sourceMappingURL=5.5e477c39ea4b010d9267.js.map