webpackJsonp([35],{vdVF:function(t,e,i){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var o={data:function(){return{tab:parseInt(this.GLOBAL.getStorage("loginType"))||0,invitecode:this.GLOBAL.getStorage("invitecode")||"",mobile:null,password:null,code:null,isShowCaptcha:!1,captcha:"",localCaptcha:this.GLOBAL.getCaptcha(),countDown:!1,authList:[]}},created:function(){var t=this;this.GLOBAL.getStorage("user_token")&&this.$dialog.toast({mes:"你已经登录!",timeout:2e3,callback:function(){t.$router.go(-1)}}),this.getAuth()},computed:{rightMobile:function(){var t={};return this.mobile?/^1[345678]{1}\d{9}$/gi.test(this.mobile)?t.status=!0:(t.status=!1,t.msg="手机号格式不正确"):(t.status=!1,t.msg="请输入手机号"),t}},methods:{itemClick:function(t){this.tab=t,this.GLOBAL.setStorage("loginType",t)},sendCode:function(){var t=this;this.rightMobile.status?(this.$dialog.loading.open("发送中..."),setTimeout(function(){t.$dialog.loading.close(),t.$api.sms({mobile:t.mobile,code:"login"},function(e){e.status&&(t.countDown=!0,t.$dialog.toast({mes:e.msg,icon:"success",timeout:1e3}))})},1e3)):this.$dialog.toast({mes:this.rightMobile.msg,timeout:1e3})},login:function(){var t=this;if(this.rightMobile.status)if(this.tab)if(this.code){var e={mobile:this.mobile,code:this.code,invitecode:this.invitecode};this.$api.smsLogin(e,function(e){e.status&&(t.GLOBAL.setStorage("user_token",e.data),t.redirectHandler())})}else this.$dialog.toast({mes:"请输入短信验证码!",timeout:1e3});else this.password?this.$api.login({mobile:this.mobile,password:this.password},function(e){e.status?(t.GLOBAL.setStorage("user_token",e.data),t.redirectHandler()):(10013===e.data&&(t.isShowCaptcha=!0),t.isShowCaptcha&&(t.localCaptcha=t.GLOBAL.getCaptcha()))}):this.$dialog.toast({mes:"请输入密码!",timeout:1e3});else this.$dialog.toast({mes:this.rightMobile.msg,timeout:1e3})},redirectHandler:function(){this.$router.replace(this.$route.query.redirect?decodeURIComponent(this.$route.query.redirect):"/")},toRegister:function(){this.$route.query.redirect?this.$router.replace({path:"/register",query:{redirect:decodeURIComponent(this.$route.query.redirect)}}):this.$router.replace({path:"/register"})},reloadCaptcha:function(){this.localCaptcha=this.GLOBAL.getCaptcha()},getAuth:function(){var t=this;this.$api.getTrustLogin({url:window.location.protocol+"//"+window.location.host,uuid:this.genNonDuplicateID()},function(e){e.status&&(t.authList=e.data)})},toAuth:function(t){window.location.href=t},genNonDuplicateID:function(){var t=Math.random().toString(36).substr(3);return this.GLOBAL.setStorage("uuid",t),t}}},s={render:function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("div",{staticClass:"login"},[t._m(0),t._v(" "),i("yd-tab",{attrs:{"prevent-default":!1,"item-click":t.itemClick},model:{value:t.tab,callback:function(e){t.tab=e},expression:"tab"}},[i("yd-tab-panel",{attrs:{label:"账号登陆"}},[i("div",{staticClass:"login-content"},[i("yd-cell-item",[i("span",{attrs:{slot:"left"},slot:"left"},[t._v("手机号：")]),t._v(" "),i("yd-input",{ref:"tel",attrs:{slot:"right",required:"","show-success-icon":!1,regex:"mobile",placeholder:"请输入手机号"},slot:"right",model:{value:t.mobile,callback:function(e){t.mobile=e},expression:"mobile"}})],1),t._v(" "),i("yd-cell-item",[i("span",{attrs:{slot:"left"},slot:"left"},[t._v("登录密码：")]),t._v(" "),i("yd-input",{attrs:{slot:"right",type:"password",placeholder:"请输入密码"},slot:"right",model:{value:t.password,callback:function(e){t.password=e},expression:"password"}})],1),t._v(" "),t.isShowCaptcha?i("yd-cell-item",[i("span",{staticClass:"w4",attrs:{slot:"left"},slot:"left"},[t._v("验证码：")]),t._v(" "),i("yd-input",{attrs:{slot:"right",type:"text",placeholder:"请输入验证码"},slot:"right",model:{value:t.captcha,callback:function(e){t.captcha=e},expression:"captcha"}}),t._v(" "),i("img",{attrs:{slot:"right",src:t.localCaptcha,alt:"",width:"150"},on:{click:t.reloadCaptcha},slot:"right"})],1):t._e()],1)]),t._v(" "),i("yd-tab-panel",{attrs:{label:"手机号登陆"}},[i("div",{staticClass:"login-content"},[i("yd-cell-item",[i("span",{attrs:{slot:"left"},slot:"left"},[t._v("手机号：")]),t._v(" "),i("yd-input",{ref:"tel",attrs:{slot:"right",type:"text",required:"","show-success-icon":!1,regex:"mobile",placeholder:"请输入手机号码"},slot:"right",model:{value:t.mobile,callback:function(e){t.mobile=e},expression:"mobile"}}),t._v(" "),i("yd-sendcode",{attrs:{slot:"right","storage-key":"login","init-str":"获取验证码",type:"primary"},nativeOn:{click:function(e){return t.sendCode(e)}},slot:"right",model:{value:t.countDown,callback:function(e){t.countDown=e},expression:"countDown"}})],1),t._v(" "),i("yd-cell-item",[i("span",{attrs:{slot:"left"},slot:"left"},[t._v("验证码：")]),t._v(" "),i("yd-input",{attrs:{slot:"right",placeholder:"请输入短信验证码"},slot:"right",model:{value:t.code,callback:function(e){t.code=e},expression:"code"}})],1)],1)]),t._v(" "),i("yd-button",{attrs:{size:"large",type:"danger"},nativeOn:{click:function(e){return t.login(e)}}},[t._v("登录")]),t._v(" "),t.authList.length?i("div",t._l(t.authList,function(e,o){return i("div",{key:o},t._l(e,function(e,o){return i("div",{key:o,staticClass:"wechat-login"},[i("img",{attrs:{src:"https://b2c.jihainet.com/static/images/wechat_login.png",alt:""},on:{click:function(i){t.toAuth(e.url)}}})])}))})):t._e()],1),t._v(" "),t._v("\n    没有账号?"),i("span",{staticStyle:{color:"#10aeff"},on:{click:t.toRegister}},[t._v(" 立即注册")])],1)},staticRenderFns:[function(){var t=this.$createElement,e=this._self._c||t;return e("div",{staticClass:"login-img"},[e("img",{attrs:{src:i("vKgw")}})])}]};var a=i("VU/8")(o,s,!1,function(t){i("y9Ho")},null,null);e.default=a.exports},y9Ho:function(t,e){}});
//# sourceMappingURL=35.5f88a639aa4c80344189.js.map