"use strict";
!function(s,e){
  "function"==typeof define&&"object"==typeof define.amd?define(e):"object"==typeof exports?module.exports=e():s.sendcloud=e()
}(
  this,function(){

    function s(s){
      if("load"===s)window.onload=function(){
        b.classList.add("animated",a.showClass[a.type]),b.style.display="block"
      };
      else if("scroll"===s)window.onscroll=function(){
        b.classList.add("animated",a.showClass[a.type]),b.style.display="block"
      };
      else{
        var e=document.querySelector(s);
        e.addEventListener("click",function(s){
          s.preventDefault(),b.classList.remove(a.hiddenClass[a.type]),b.classList.add("animated",a.showClass[a.type]),b.style.display="block"
        })
      }
    }

    function e(s,e){
      var c=b=document.createElement("div");c.id="sendcloud-subscribe-wrapper",c.className="sendcloud-"+s+"-wrapper",c.innerHTML=g[s],c.querySelector(".subscribe-title").innerHTML=e,"embed"===s?document.querySelector("#sendcloud-embed-subscribe").appendChild(c):y.appendChild(c)
    }

    function c(s){
      for(var e=["http://sendcloud.sohu.com/css/subscribe.css","http://sendcloud.sohu.com/css/animate.css"],c=0;c<e.length;c++){var t=document.createElement("link");t.setAttribute("rel","stylesheet"),t.href=e[c],h.appendChild(t)}
    }

    function t(){
      d=b.querySelector(".subscribe-form"),p=b.querySelector(".subscribe-email-input"),m=b.querySelector(".subscribe-submit-btn"),v=b.querySelector(".close");var s;p.addEventListener("blur",function(e){e.preventDefault(),s=r(this.value),n(s?"":"邮件格式不正确")}),m.addEventListener("click",function(e){e.preventDefault(),s=r(p.value),s&&(i(p.value),this.setAttribute("disabled","true"))}),v.addEventListener("click",o)
    }

    function i(s){
      var e=new XMLHttpRequest;e.onload=function(){m.removeAttribute("disabled");var s=JSON.parse(e.responseText);s.success?u():n(s.message)},e.onerror=function(){u()},e.open("POST",a.url+"?invitecode="+a.invitecode+"&email="+s),e.send()
    }

    function n(s){
      var e=b.querySelector(".subscribe-msg");e.innerText=s
    }

    function u(){
      b.querySelector(".subscribe-success").style.display="block",b.querySelector(".subscribe-success-msg").innerText=a.successMsg,setTimeout(o,1e3)
    }

    function o(){
      b.classList.remove(a.showClass[a.type]),b.classList.add(a.hiddenClass[a.type]),setTimeout(function(){"load"==a.trigger||"scroll"==a.trigger?b.remove():null,b.style.display="none"},1e3),document.cookie="sendcloud_subscribe=hidden;path=/;expires="+new Date(Date.now()+parseInt(a.expires)).toUTCString()
    }

    function r(s){
      var e=/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;return e.test(s)
    }

    function l(s,e){
      for(var c in e)e[c]&&e[c].constructor&&"object"===e[c].constructor?(s[c]=s[c]||{},anguments.callee(s[c],e[c])):s[c]=e[c];return s
    }

    var a,b,d,p,m,v,f=window.sendcloud=window.sendcloud||{},
    y=document.body,
    h=document.head,
    g={
      pop:'<div class="sendcloud-subscribe sendcloud-pop-subscribe"><form class="subscribe-pop-form subscribe-form"><div class="subscribe-title"></div><div class="subscribe-input-control"><input type="email" class="subscribe-email-input" placeholder="Email"></input><span class="subscribe-msg"></span></div><button class="subscribe-submit-btn" type="submit">订阅</button><div class="subscribe-success"><span class="subscribe-success-msg"></span></div></form><span class="close">x</span></div>',
      banner:'<div class="sendcloud-subscribe sendcloud-banner-subscribe"><form class="subscribe-banner-form subscribe-form"><div class="subscribe-title"></div><div class="subscribe-input-control"><input type="email" class="subscribe-email-input" placeholder="Email"></input><span class="subscribe-msg"></span></div><button class="subscribe-submit-btn" type="submit">订阅</button><div class="subscribe-success"><span class="subscribe-success-msg"></span></div></form><span class="close">x</span></div>',
      bottom:'<div class="sendcloud-subscribe sendcloud-bottom-subscribe"><form class="subscribe-bottom-form subscribe-form"><div class="subscribe-title"></div><div class="subscribe-input-control"><input type="email" class="subscribe-email-input" placeholder="Email"></input><span class="subscribe-msg"></span></div><button class="subscribe-submit-btn" type="submit">订阅</button><div class="subscribe-success"><span class="subscribe-success-msg"></span></div></form><span class="close">x</span></div>',
      embed:'<div class="sendcloud-subscribe sendcloud-embed-subscribe"><form class="subscribe-embed-form subscribe-form"><div class="subscribe-title"></div><div class="subscribe-input-control"><input type="email" class="subscribe-email-input" placeholder="Email"></input><span class="subscribe-msg"></span></div><button class="subscribe-submit-btn" type="submit">订阅</button><div class="subscribe-success"><span class="subscribe-success-msg"></span></div></form><span class="close">x</span></div>'
    },
    w={
      invitecode:"your invitecode",type:"",expires:"86400000",trigger:"scroll",title:"邮件获取通知！",successMsg:"通知会第一时间发送给您的预留邮箱！",showClass:{banner:"fadeInDown",bottom:"fadeInRight",pop:"bounceIn",embed:"shake"},hiddenClass:{banner:"fadeOutUp",bottom:"fadeOutRight",pop:"bounceOut",embed:"fadeOut"},url:"http://sendcloud.sohu.com/subInvite/subscription.do"
    };

    return f.subscribe=function(i){
      i.type&&"-1"==document.cookie.indexOf("sendcloud_subscribe")&&(a=l(w,i),c(a.type),e(a.type,a.title),t(),s(a.trigger))
    },f
});
