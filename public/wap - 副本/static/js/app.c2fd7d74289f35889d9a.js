webpackJsonp([40],{ENeJ:function(e,t){},NHnr:function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var o=n("7+uW"),a={render:function(){var e=this.$createElement,t=this._self._c||e;return t("yd-navbar",{attrs:{slot:"navbar",title:this.title},slot:"navbar"},[t("div",{attrs:{slot:"left"},on:{click:this.back},slot:"left"},[t("yd-navbar-back-icon")],1)])},staticRenderFns:[]};var i={data:function(){return{tab:[{title:"首页",link:"/index",type:"iconfont icon-shouyeshouye1",active:!0},{title:"全部分类",link:"/classify",type:"iconfont icon-fenlei1",active:!1},{title:"购物车",link:"/cart",type:"iconfont icon-gouwuche",active:!1},{title:"个人中心",link:"/user",type:"iconfont icon-icongerenzhongxin",active:!1}]}},mounted:function(){for(var e in this.$route.meta.title&&(document.title=this.$route.meta.title),this.tab)this.tab[e].link===this.$route.path?this.tab[e].active=!0:this.tab[e].active=!1},watch:{$route:function(){for(var e in this.tab)this.tab[e].link===this.$route.path?this.tab[e].active=!0:this.tab[e].active=!1}}},r={render:function(){var e=this,t=e.$createElement,n=e._self._c||t;return n("div",{ref:"tabbar",staticClass:"tabbar",attrs:{slot:"tabbar"},slot:"tabbar"},e._l(e.tab,function(t,o){return n("router-link",{key:o,staticClass:"tabbar-item",attrs:{tag:"div",id:t.active,to:t.link}},[n("i",{class:t.type}),e._v(" "),n("span",[e._v(e._s(t.title))])])}))},staticRenderFns:[]};var s={components:{navbar:n("VU/8")({props:["title"],methods:{back:function(){this.$router.go(-1)}}},a,!1,function(e){n("f0n6")},null,null).exports,tabbar:n("VU/8")(i,r,!1,function(e){n("yqbW")},null,null).exports},methods:{getShopName:function(){var e=this,t="";return this.$api.getSetting({key:"shop_name"},function(n){""!==n.data&&e.GLOBAL.setStorage("shop_name",n.data),t=n.data}),t}},watch:{$route:{handler:function(){"/index"===this.$route.path&&(document.title=this.GLOBAL.getStorage("shop_name")?this.GLOBAL.getStorage("shop_name"):this.getShopName())}}},beforeDestroy:function(){this.GLOBAL.removeStorage("shop_name")}},u={render:function(){var e=this,t=e.$createElement,n=e._self._c||t;return n("yd-layout",{attrs:{id:"app"}},[n("navbar",{directives:[{name:"show",rawName:"v-show",value:e.$route.meta.navShow,expression:"$route.meta.navShow"}],attrs:{slot:"navbar",title:e.$route.meta.title},slot:"navbar"}),e._v(" "),n("transition",{attrs:{name:"router-fade",mode:"out-in"}},[n("keep-alive",[e.$route.meta.keepAlive?n("router-view",{staticClass:"top"}):e._e()],1)],1),e._v(" "),n("transition",{attrs:{name:"router-fade",mode:"out-in"}},[e.$route.meta.keepAlive?e._e():n("router-view",{staticClass:"top"})],1),e._v(" "),n("tabbar",{directives:[{name:"show",rawName:"v-show",value:e.$route.meta.tabShow,expression:"$route.meta.tabShow"}],attrs:{slot:"tabbar"},slot:"tabbar"})],1)},staticRenderFns:[]};var c=n("VU/8")(s,u,!1,function(e){n("nVoq")},null,null).exports,l=[{path:"/",redirect:"/index"},{path:"/authbind",component:function(e){return Promise.all([n.e(0),n.e(22)]).then(function(){var t=[n("NbfK")];e.apply(null,t)}.bind(this)).catch(n.oe)},name:"AuthBind",meta:{navShow:!1,tabShow:!0,title:"用户绑定",keepAlive:!0}},{path:"/author",component:function(e){return n.e(15).then(function(){var t=[n("PfCH")];e.apply(null,t)}.bind(this)).catch(n.oe)},name:"author",meta:{navShow:!1,tabShow:!1,keepAlive:!0}},{path:"/index",component:function(e){return Promise.all([n.e(0),n.e(1)]).then(function(){var t=[n("eerB")];e.apply(null,t)}.bind(this)).catch(n.oe)},name:"Index",meta:{navShow:!1,tabShow:!0,keepAlive:!0}},{path:"/classify",component:function(e){return n.e(8).then(function(){var t=[n("kE/w")];e.apply(null,t)}.bind(this)).catch(n.oe)},name:"Classify",meta:{navShow:!0,tabShow:!0,title:"全部分类",keepAlive:!0}},{path:"/cart",component:function(e){return Promise.all([n.e(0),n.e(18)]).then(function(){var t=[n("HrDi")];e.apply(null,t)}.bind(this)).catch(n.oe)},name:"Cart",meta:{navShow:!0,tabShow:!1,title:"购物车",keepAlive:!1,isLogin:!0}},{path:"/user",component:function(e){return n.e(2).then(function(){var t=[n("35em")];e.apply(null,t)}.bind(this)).catch(n.oe)},name:"user",meta:{navShow:!1,tabShow:!0,title:"个人中心",keepAlive:!1,isLogin:!0}},{path:"/login",component:function(e){return Promise.all([n.e(0),n.e(33)]).then(function(){var t=[n("vdVF")];e.apply(null,t)}.bind(this)).catch(n.oe)},name:"Login",meta:{navShow:!0,tabShow:!1,title:"用户登录",keepAlive:!1}},{path:"/goodslist",component:function(e){return Promise.all([n.e(0),n.e(29)]).then(function(){var t=[n("bMQg")];e.apply(null,t)}.bind(this)).catch(n.oe)},name:"GoodsList",meta:{navShow:!0,tabShow:!1,title:"商品列表",keepAlive:!1}},{path:"/goodsdetail",component:function(e){return Promise.all([n.e(0),n.e(3)]).then(function(){var t=[n("/AAr")];e.apply(null,t)}.bind(this)).catch(n.oe)},name:"GoodsDetail",meta:{navShow:!1,tabShow:!1,title:"商品详情",keepAlive:!1}},{path:"/firmorder",component:function(e){return Promise.all([n.e(0),n.e(5)]).then(function(){var t=[n("aT31")];e.apply(null,t)}.bind(this)).catch(n.oe)},name:"FirmOrder",meta:{tabShow:!1,navShow:!0,title:"订单确认",keepAlive:!1,isLogin:!0}},{path:"/cashierdesk",component:function(e){return Promise.all([n.e(0),n.e(32)]).then(function(){var t=[n("HeT/")];e.apply(null,t)}.bind(this)).catch(n.oe)},name:"CashierDesk",meta:{tabShow:!1,title:"订单支付",keepAlive:!1,isLogin:!0}},{path:"/allorder",component:function(e){return Promise.all([n.e(0),n.e(12)]).then(function(){var t=[n("mm0H")];e.apply(null,t)}.bind(this)).catch(n.oe)},name:"AllOrder",meta:{navShow:!0,tabShow:!1,title:"订单列表",keepAlive:!1,isLogin:!0}},{path:"/orderdetail",component:function(e){return Promise.all([n.e(0),n.e(4)]).then(function(){var t=[n("E9as")];e.apply(null,t)}.bind(this)).catch(n.oe)},name:"OrderDetail",meta:{tabShow:!1,title:"订单详情",keepAlive:!1,isLogin:!0}},{path:"/afterservice",component:function(e){return n.e(10).then(function(){var t=[n("dLxA")];e.apply(null,t)}.bind(this)).catch(n.oe)},name:"AfterService",meta:{tabShow:!1,title:"申请售后",keepAlive:!1,isLogin:!0}},{path:"/allafterservice",component:function(e){return Promise.all([n.e(0),n.e(20)]).then(function(){var t=[n("NGAE")];e.apply(null,t)}.bind(this)).catch(n.oe)},name:"AllAfterService",meta:{tabShow:!1,title:"售后单列表",keepAlive:!1,isLogin:!0}},{path:"/collect",component:function(e){return Promise.all([n.e(0),n.e(37)]).then(function(){var t=[n("xJOu")];e.apply(null,t)}.bind(this)).catch(n.oe)},name:"Collect",meta:{navShow:!0,tabShow:!1,title:"我的关注",keepAlive:!1,isLogin:!0}},{path:"/history",component:function(e){return Promise.all([n.e(0),n.e(28)]).then(function(){var t=[n("qygY")];e.apply(null,t)}.bind(this)).catch(n.oe)},name:"History",meta:{navShow:!0,tabShow:!1,title:"我的足迹",keepAlive:!1,isLogin:!0}},{path:"/notice",component:function(e){return n.e(19).then(function(){var t=[n("KxNL")];e.apply(null,t)}.bind(this)).catch(n.oe)},name:"Notice",meta:{tabShow:!1,title:"公告详情",keepAlive:!1}},{path:"/article",component:function(e){return n.e(23).then(function(){var t=[n("tLJp")];e.apply(null,t)}.bind(this)).catch(n.oe)},name:"Article",meta:{tabShow:!1,title:"文章详情",keepAlive:!1}},{path:"/coupon",component:function(e){return n.e(30).then(function(){var t=[n("sdPH")];e.apply(null,t)}.bind(this)).catch(n.oe)},name:"Coupon",meta:{navShow:!0,tabShow:!1,title:"我的优惠券",keepAlive:!1,isLogin:!0}},{path:"/evaluate",component:function(e){return n.e(13).then(function(){var t=[n("FmEr")];e.apply(null,t)}.bind(this)).catch(n.oe)},name:"Evaluate",meta:{tabShow:!1,title:"订单评价",keepAlive:!1,isLogin:!0}},{path:"/datasetting",component:function(e){return n.e(11).then(function(){var t=[n("JGp4")];e.apply(null,t)}.bind(this)).catch(n.oe)},name:"DataSetting",meta:{navShow:!0,tabShow:!1,title:"资料设置",keepAlive:!1,isLogin:!0}},{path:"/aftersalesdetail",component:function(e){return n.e(34).then(function(){var t=[n("rpiT")];e.apply(null,t)}.bind(this)).catch(n.oe)},name:"AfterSalesDetail",meta:{tabShow:!1,title:"售后单详情",keepAlive:!1,isLogin:!0}},{path:"/searchpage",component:function(e){return n.e(14).then(function(){var t=[n("MYsb")];e.apply(null,t)}.bind(this)).catch(n.oe)},name:"SearchPage",meta:{tabShow:!1,title:"商品搜索",keepAlive:!1}},{path:"/address",component:function(e){return n.e(17).then(function(){var t=[n("uM3d")];e.apply(null,t)}.bind(this)).catch(n.oe)},name:"Address",meta:{navShow:!0,tabshow:!1,title:"地址详情",keepAlive:!1,isLogin:!0}},{path:"/addresslist",component:function(e){return Promise.all([n.e(0),n.e(38)]).then(function(){var t=[n("P3sQ")];e.apply(null,t)}.bind(this)).catch(n.oe)},name:"AddressList",meta:{navShow:!0,tabshow:!1,title:"地址管理",keepAlive:!1,isLogin:!0}},{path:"/balance",component:function(e){return n.e(7).then(function(){var t=[n("p4Z9")];e.apply(null,t)}.bind(this)).catch(n.oe)},name:"Balance",meta:{navShow:!0,tabshow:!1,title:"我的余额",keepAlive:!1}},{path:"/balancelist",component:function(e){return Promise.all([n.e(0),n.e(27)]).then(function(){var t=[n("dhDQ")];e.apply(null,t)}.bind(this)).catch(n.oe)},name:"BalanceList",meta:{navShow:!0,tabShow:!1,title:"余额明细",keepAlive:!1}},{path:"/withdrawcash",component:function(e){return Promise.all([n.e(0),n.e(25)]).then(function(){var t=[n("KZdo")];e.apply(null,t)}.bind(this)).catch(n.oe)},name:"WithDrawCash",meta:{navShow:!0,tabshow:!1,title:"余额提现",keepAlive:!1}},{path:"/bankcard",component:function(e){return n.e(16).then(function(){var t=[n("cceV")];e.apply(null,t)}.bind(this)).catch(n.oe)},name:"BankCard",meta:{navShow:!0,tabShow:!1,title:"添加银行卡",keepAlive:!1}},{path:"/mybankcardlist",component:function(e){return n.e(31).then(function(){var t=[n("qDIR")];e.apply(null,t)}.bind(this)).catch(n.oe)},name:"MyBankCardList",meta:{navShow:!0,tabShow:!1,title:"我的银行卡",keepAlive:!1}},{path:"/rewardlist",component:function(e){return n.e(9).then(function(){var t=[n("db5S")];e.apply(null,t)}.bind(this)).catch(n.oe)},name:"RewardList",meta:{navShow:!0,tabShow:!1,title:"我的奖励金",keepAlive:!1}},{path:"/recommendlist",component:function(e){return Promise.all([n.e(0),n.e(26)]).then(function(){var t=[n("nj6G")];e.apply(null,t)}.bind(this)).catch(n.oe)},name:"RecommendList",meta:{navShow:!0,tabShow:!1,title:"推荐记录",keepAlive:!1}},{path:"/share",component:function(e){return n.e(36).then(function(){var t=[n("qhXZ")];e.apply(null,t)}.bind(this)).catch(n.oe)},name:"Share",meta:{navShow:!0,tabShow:!1,title:"推荐好友",keepAlive:!1}},{path:"/cashlist",component:function(e){return Promise.all([n.e(0),n.e(24)]).then(function(){var t=[n("RIhi")];e.apply(null,t)}.bind(this)).catch(n.oe)},name:"CashList",meta:{navShow:!0,tabShow:!1,title:"提现记录",keepAlive:!1}},{path:"/setting",component:function(e){return n.e(6).then(function(){var t=[n("rlSs")];e.apply(null,t)}.bind(this)).catch(n.oe)},name:"Setting",meta:{navShow:!0,tabShow:!1,title:"更多设置",keepAlive:!1}},{path:"/register",component:function(e){return Promise.all([n.e(0),n.e(21)]).then(function(){var t=[n("PmIv")];e.apply(null,t)}.bind(this)).catch(n.oe)},name:"Register",meta:{navShow:!0,tabShow:!1,title:"用户注册",keepAlive:!1}},{path:"/articlelist",component:function(e){return Promise.all([n.e(0),n.e(35)]).then(function(){var t=[n("DIsE")];e.apply(null,t)}.bind(this)).catch(n.oe)},name:"ArticleList",meta:{navShow:!0,tabShow:!1,title:"文章列表",keepAlive:!1}}],h=n("/ocq"),d=n("fZjL"),p=n.n(d),f=n("mtWM"),m=n.n(f),g=n("mw3O"),v=n.n(g),b=n("pFYg"),w=n.n(b),S=n("mvHQ"),k=n.n(S);var y={setStorage:function(e,t){e&&("string"!=typeof t&&(t=k()(t)),window.localStorage.setItem(e,t))},getStorage:function(e){if(e)return window.localStorage.getItem(e)},removeStorage:function(e){e&&window.localStorage.removeItem(e)},deepCopy:function e(t,n){if("object"!==(void 0===n?"undefined":w()(n)))return n;for(var o in n){var a={};t[o]&&(a=t[o]),t[o]=e(a,n[o])}return t},jumpToLogin:function(){G.$router.push({path:"/login",query:{redirect:G.$route.fullPath}})},timeToDate:function(e){var t=new Date(1e3*e);return t.getFullYear()+"-"+(t.getMonth()+1<10?"0"+(t.getMonth()+1):t.getMonth()+1)+"-"+(t.getDate()<10?"0"+t.getDate():t.getDate())+" "+(t.getHours()<10?"0"+t.getHours():t.getHours())+":"+(t.getMinutes()<10?"0"+t.getMinutes():t.getMinutes())+":"+(t.getSeconds()<10?"0"+t.getSeconds():t.getSeconds())},formatMoney:function(e,t,n,o,a){e=e||0,t=isNaN(t=Math.abs(t))?2:t,n=void 0!==n?n:"￥",o=o||",",a=a||".";var i=e<0?"-":"",r=parseInt(e=Math.abs(+e||0).toFixed(t),10)+"",s=r.length>3?r.length%3:0;return n+i+(s?r.substr(0,s)+o:"")+r.substr(s).replace(/(\d{3})(?=\d)/g,"$1"+o)+(t?a+Math.abs(e-r).toFixed(t).slice(2):"")},errorToBack:function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:"出错了，请重试",t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:1500;G.$dialog.toast({mes:e,timeout:t})},successToShow:function(){arguments.length>0&&void 0!==arguments[0]&&arguments[0],arguments.length>1&&void 0!==arguments[1]&&arguments[1]},throttle:function(e,t,n){clearTimeout(e.timeoutId),e.timeoutId=setTimeout(function(){e.call(t)},n)},getCaptcha:function(){var e=10*Math.random()+1;return window.apiUrl.replace("api","captcha")+"?"+e},hecong:function(){return window.entId}},A=["user.info","user.editinfo","user.changeavatar","user.logout","user.addgoodsbrowsing","user.delgoodsbrowsing","user.goodsbrowsing","user.goodscollection","user.goodscollectionlist","user.saveusership","user.vuesaveusership","user.getshipdetail","user.setdefship","user.editship","user.removeship","user.getusership","user.pay","user.orderevaluate","user.getuserdefaultship","user.issign","user.sign","user.mypoint","user.pointlog","user.getbankcardlist","user.getdefaultbankcard","user.addbankcard","user.removebankcard","user.setdefaultbankcard","user.getbankcardinfo","user.editpwd","user.forgotpwd","user.recommend","user.balancelist","user.sharecode","user.cash","user.cashlist","coupon.getcoupon","coupon.usercoupon","cart.add","cart.del","cart.getlist","cart.setnums","order.cancel","order.del","order.details","order.confirm","order.getlist","order.create","order.getship","order.getorderlist","order.getorderstatusnum","order.aftersaleslist","order.aftersalesinfo","order.aftersalesstatus","order.addaftersales","order.sendreship","order.iscomment","order.logistics","payments.getinfo"],L=function(){return window.apiUrl||y.errorToBack("缺少配置参数!"),window.apiUrl};function C(e,t,n){A.indexOf(e)>=0&&(t.token=y.getStorage("user_token")),t.method=e,P(L(),v.a.stringify(t),{},n)}function P(e,t){var n=arguments.length>2&&void 0!==arguments[2]?arguments[2]:{},o=arguments[3];G.$dialog.loading.open(p()(n).length?"上传中...":"加载中..."),m.a.post(e,t,n).then(function(e){G.$dialog.loading.close(),e.data.status||(y.errorToBack(e.data.msg),14007!=e.data.data&&14006!=e.data.data||(y.removeStorage("user_token"),y.jumpToLogin())),o(e.data)}).catch(function(e){if(e&&e.response){switch(e.response.status){case 400:e.message="请求参数错误";break;case 401:e.message="未授权，请登录";break;case 403:e.message="跨域拒绝访问";break;case 404:e.message="请求地址出错: "+e.response.config.url;break;case 408:e.message="请求超时";break;case 500:e.message="服务器内部错误";break;case 501:e.message="服务未实现";break;case 502:e.message="网关错误";break;case 503:e.message="服务不可用";break;case 504:e.message="网关超时";break;case 505:e.message="HTTP版本不受支持"}G.$dialog.loading.close(),y.errorToBack(e.message)}})}var B={reg:function(e,t){C("user.reg",e,t)},login:function(e,t){C("user.login",e,t)},sms:function(e,t){C("user.sms",e,t)},userInfo:function(e,t){C("user.info",e,t)},changeAvatar:function(e,t){C("user.changeavatar",e,t)},editInfo:function(e,t){C("user.editinfo",e,t)},smsLogin:function(e,t){C("user.smslogin",e,t)},notice:function(e,t){C("notice.noticeList",e,t)},noticeInfo:function(e,t){C("notice.noticeInfo",e,t)},logout:function(e,t){C("user.logout",e,t)},sliderHeader:function(e,t){C("advert.getAdvertList",e,t)},categories:function(e,t){C("categories.getallcat",e,t)},goodsList:function(e,t){C("goods.getlist",e,t)},goodsDetail:function(e,t){C("goods.getdetial",e,t)},goodsParams:function(e,t){C("goods.getgoodsparams",e,t)},goodsComment:function(e,t){C("goods.getgoodscomment",e,t)},getProductInfo:function(e,t){C("goods.getproductinfo",e,t)},addCart:function(e,t){C("cart.add",e,t)},articleInfo:function(e,t){C("articles.getArticleDetail",e,t)},removeCart:function(e,t){C("cart.del",e,t)},cartList:function(e,t){C("cart.getlist",e,t)},setCartNum:function(e,t){C("cart.setnums",e,t)},userShip:function(e,t){C("user.getusership",e,t)},userDefaultShip:function(e,t){C("user.getuserdefaultship",e,t)},saveUserShip:function(e,t){C("user.vuesaveusership",e,t)},shipDetail:function(e,t){C("user.getshipdetail",e,t)},editShip:function(e,t){C("user.editship",e,t)},removeShip:function(e,t){C("user.removeship",e,t)},setDefShip:function(e,t){C("user.setdefship",e,t)},createOrder:function(e,t){C("order.create",e,t)},orderList:function(e,t){C("order.getorderlist",e,t)},getOrderList:function(e,t){C("order.getlist",e,t)},cancelOrder:function(e,t){C("order.cancel",e,t)},delOrder:function(e,t){C("order.del",e,t)},orderDetail:function(e,t){C("order.details",e,t)},confirmOrder:function(e,t){C("order.confirm",e,t)},orderShip:function(e,t){C("order.getship",e,t)},sendShip:function(e,t){C("order.sendreship",e,t)},getOrderStatusSum:function(e,t){C("order.getorderstatusnum",e,t)},afterSalesList:function(e,t){C("order.aftersaleslist",e,t)},afterSalesInfo:function(e,t){C("order.aftersalesinfo",e,t)},afterSalesStatus:function(e,t){C("order.aftersalesstatus",e,t)},addAfterSales:function(e,t){C("order.addaftersales",e,t)},addGoodsBrowsing:function(e,t){C("user.addgoodsbrowsing",e,t)},delGoodsBrowsing:function(e,t){C("user.delgoodsbrowsing",e,t)},goodsBrowsing:function(e,t){C("user.goodsbrowsing",e,t)},goodsCollection:function(e,t){C("user.goodscollection",e,t)},goodsCollectionList:function(e,t){C("user.goodscollectionlist",e,t)},pay:function(e,t){C("user.pay",e,t)},paymentList:function(e,t){C("payments.getlist",e,t)},paymentInfo:function(e,t){C("payments.getinfo",e,t)},orderEvaluate:function(e,t){C("user.orderevaluate",e,t)},isSign:function(e,t){C("user.issign",e,t)},sign:function(e,t){C("user.sign",e,t)},myPoint:function(e,t){C("user.mypoint",e,t)},pointLog:function(e,t){C("user.pointlog",e,t)},logistics:function(e,t){C("order.logistics",e,t)},couponList:function(e,t){C("coupon.couponlist",e,t)},couponDetail:function(e,t){C("coupon.coupondetail",e,t)},getCoupon:function(e,t){C("coupon.getcoupon",e,t)},userCoupon:function(e,t){C("coupon.usercoupon",e,t)},uploadFile:function(e,t,n){"image"===e?t.append("method","images.upload"):"video"===e&&t.append("method","videos.addvideo"),P(L(),t,{headers:{"Content-Type":"multipart/form-data"}},n)},getSetting:function(e,t){C("user.getsetting",e,t)},getSellerSetting:function(e,t){C("user.getsellersetting",e,t)},getBankCardList:function(e,t){C("user.getbankcardlist",e,t)},getDefaultBankCard:function(e,t){C("user.getdefaultbankcard",e,t)},addBankCard:function(e,t){C("user.addbankcard",e,t)},removeBankCard:function(e,t){C("user.removebankcard",e,t)},setDefaultBankCard:function(e,t){C("user.setdefaultbankcard",e,t)},getBankCardInfo:function(e,t){C("user.getbankcardinfo",e,t)},shareCode:function(e,t){C("user.sharecode",e,t)},recommendList:function(e,t){C("user.recommend",e,t)},editPwd:function(e,t){C("user.editpwd",e,t)},forgotPwd:function(e,t){C("user.forgotpwd",e,t)},getBankCardOrganization:function(e,t){C("user.getbankcardorganization",e,t)},getBalanceList:function(e,t){C("user.balancelist",e,t)},userToCash:function(e,t){C("user.cash",e,t)},cashList:function(e,t){C("user.cashlist",e,t)},articleList:function(e,t){C("articles.getArticleList",e,t)},post:C,getTrustLogin:function(e,t){C("user.gettrustlogin",e,t)},trustBind:function(e,t){C("user.trustbind",e,t)},trustLogin:function(e,t){C("user.trustcallback",e,t)}},$=n("r8FW"),D=n.n($),_=(n("ENeJ"),n("/Hfw")),T=n.n(_),I=(n("OXKT"),n("V/Xd")),O=n.n(I),x=n("f3u+"),M=n.n(x),H=n("cTzj"),N=n.n(H);o.default.use(M.a),o.default.use(O.a),o.default.use(T.a),o.default.use(h.a),o.default.use(D.a),o.default.use(N.a,{preLoad:1.3,loading:"./static/image/loading.gif",attempt:1}),o.default.config.productionTip=!1,o.default.prototype.$api=B,o.default.prototype.GLOBAL=y;var E=new h.a({mode:"hash",routes:l,scrollBehavior:function(e,t,n){return n||{x:0,y:0}}}),F=new o.default({el:"#app",router:E,components:{App:c},template:"<App/>"});E.beforeEach(function(e,t,n){document.title=e.meta.title?e.meta.title:"",e.meta.isLogin&&(y.getStorage("user_token")||y.jumpToLogin()),0===e.matched.length?t.name?n({name:t.name}):n("/index"):n()});var G=t.default=F},OXKT:function(e,t){},f0n6:function(e,t){},nVoq:function(e,t){},yqbW:function(e,t){}},["NHnr"]);
//# sourceMappingURL=app.c2fd7d74289f35889d9a.js.map