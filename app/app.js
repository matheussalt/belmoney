!function(e){var t={};function n(o){if(t[o])return t[o].exports;var r=t[o]={i:o,l:!1,exports:{}};return e[o].call(r.exports,r,r.exports,n),r.l=!0,r.exports}n.m=e,n.c=t,n.d=function(e,t,o){n.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:o})},n.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},n.t=function(e,t){if(1&t&&(e=n(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var o=Object.create(null);if(n.r(o),Object.defineProperty(o,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var r in e)n.d(o,r,function(t){return e[t]}.bind(null,r));return o},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,"a",t),t},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.p="",n(n.s=0)}([function(e,t,n){e.exports=n(4)},function(e,t,n){},function(e,t){},function(e,t){!function(e,t,n){function o(e,t){return typeof e===t}function r(e){var t=A.className,n=c._config.classPrefix||"";if(f&&(t=t.baseVal),c._config.enableJSClass){var o=new RegExp("(^|\\s)"+n+"no-js(\\s|$)");t=t.replace(o,"$1"+n+"js$2")}c._config.enableClasses&&(t+=" "+n+e.join(" "+n),f?A.className.baseVal=t:A.className=t)}function a(e,t){if("object"==typeof e)for(var n in e)u(e,n)&&a(n,e[n]);else{var o=(e=e.toLowerCase()).split("."),i=c[o[0]];if(2==o.length&&(i=i[o[1]]),void 0!==i)return c;t="function"==typeof t?t():t,1==o.length?c[o[0]]=t:(!c[o[0]]||c[o[0]]instanceof Boolean||(c[o[0]]=new Boolean(c[o[0]])),c[o[0]][o[1]]=t),r([(t&&0!=t?"":"no-")+o.join("-")]),c._trigger(e,t)}return c}var i=[],s=[],l={_version:"3.6.0",_config:{classPrefix:"",enableClasses:!0,enableJSClass:!0,usePrefixes:!0},_q:[],on:function(e,t){var n=this;setTimeout((function(){t(n[e])}),0)},addTest:function(e,t,n){s.push({name:e,fn:t,options:n})},addAsyncTest:function(e){s.push({name:null,fn:e})}},c=function(){};c.prototype=l,c=new c;var u,A=t.documentElement,f="svg"===A.nodeName.toLowerCase();!function(){var e={}.hasOwnProperty;u=o(e,"undefined")||o(e.call,"undefined")?function(e,t){return t in e&&o(e.constructor.prototype[t],"undefined")}:function(t,n){return e.call(t,n)}}(),l._l={},l.on=function(e,t){this._l[e]||(this._l[e]=[]),this._l[e].push(t),c.hasOwnProperty(e)&&setTimeout((function(){c._trigger(e,c[e])}),0)},l._trigger=function(e,t){if(this._l[e]){var n=this._l[e];setTimeout((function(){var e;for(e=0;e<n.length;e++)(0,n[e])(t)}),0),delete this._l[e]}},c._q.push((function(){l.addTest=a})),c.addAsyncTest((function(){function e(e,t,n){function o(t){var o=!(!t||"load"!==t.type)&&1==r.width;a(e,"webp"===e&&o?new Boolean(o):o),n&&n(t)}var r=new Image;r.onerror=o,r.onload=o,r.src=t}var t=[{uri:"data:image/webp;base64,UklGRiQAAABXRUJQVlA4IBgAAAAwAQCdASoBAAEAAwA0JaQAA3AA/vuUAAA=",name:"webp"},{uri:"data:image/webp;base64,UklGRkoAAABXRUJQVlA4WAoAAAAQAAAAAAAAAAAAQUxQSAwAAAABBxAR/Q9ERP8DAABWUDggGAAAADABAJ0BKgEAAQADADQlpAADcAD++/1QAA==",name:"webp.alpha"},{uri:"data:image/webp;base64,UklGRlIAAABXRUJQVlA4WAoAAAASAAAAAAAAAAAAQU5JTQYAAAD/////AABBTk1GJgAAAAAAAAAAAAAAAAAAAGQAAABWUDhMDQAAAC8AAAAQBxAREYiI/gcA",name:"webp.animation"},{uri:"data:image/webp;base64,UklGRh4AAABXRUJQVlA4TBEAAAAvAAAAAAfQ//73v/+BiOh/AAA=",name:"webp.lossless"}],n=t.shift();e(n.name,n.uri,(function(n){if(n&&"load"===n.type)for(var o=0;o<t.length;o++)e(t[o].name,t[o].uri)}))})),function(){var e,t,n,r,a,l;for(var u in s)if(s.hasOwnProperty(u)){if(e=[],(t=s[u]).name&&(e.push(t.name.toLowerCase()),t.options&&t.options.aliases&&t.options.aliases.length))for(n=0;n<t.options.aliases.length;n++)e.push(t.options.aliases[n].toLowerCase());for(r=o(t.fn,"function")?t.fn():t.fn,a=0;a<e.length;a++)1===(l=e[a].split(".")).length?c[l[0]]=r:(!c[l[0]]||c[l[0]]instanceof Boolean||(c[l[0]]=new Boolean(c[l[0]])),c[l[0]][l[1]]=r),i.push((r?"":"no-")+l.join("-"))}}(),r(i),delete l.addTest,delete l.addAsyncTest;for(var d=0;d<c._q.length;d++)c._q[d]();e.Modernizr=c}(window,document)},function(e,t,n){"use strict";n.r(t);n(1);function o(e,t){const n=document.querySelector(e),o=document.querySelector(t);if(!n&&!o)return null;n.addEventListener("click",e=>{e.preventDefault(),o&&o.classList.toggle("active"),n&&n.classList.toggle("active")})}function r(e,t){const n=document.querySelectorAll(e),o=document.querySelectorAll(t);n.forEach((e,t)=>{e.addEventListener("click",e=>{e.preventDefault(),o[t].classList.toggle("ativo")})})}n(2),n(3);o(".menu-hamb",".header-wrapper"),o(".choose-language",null),r(".continente-name",".continente"),r(".termo-title",".termo"),function(){const e=document.querySelectorAll(".nomes button"),t=document.querySelectorAll(".descricao-item"),n=document.querySelector(".descricao-left"),o=document.querySelector(".descricao-right");let r=0;if(!(e&&t&&n&&o))return null;e.forEach((e,n)=>{e.addEventListener("click",e=>{e.preventDefault(),t.forEach(e=>{e.classList.remove("active")}),t[n].classList.add("active"),r=n,window.scrollTo({left:0,top:window.scrollY+(t[n].getBoundingClientRect().y-64),behavior:"smooth"})})}),n.addEventListener("click",e=>{e.preventDefault(),r>0&&(r--,t.forEach(e=>{e.classList.remove("active")}),t[r].classList.add("active"))}),o.addEventListener("click",n=>{n.preventDefault(),r<e.length-1&&(r++,t.forEach(e=>{e.classList.remove("active")}),t[r].classList.add("active"))})}(),function(){document.querySelectorAll("[data-animar]").forEach(e=>{if(e.getBoundingClientRect().top<window.innerHeight)return e.classList.add("animar");window.addEventListener("scroll",t=>{const n=.85*window.innerHeight;e.getBoundingClientRect().top<n&&e.classList.add("animar")})});const e=document.querySelectorAll("[data-anima-tempo]");window.setTimeout(()=>{e.forEach(e=>{e.classList.add("animar")})},500)}(),function(e,t){const n=document.querySelectorAll(".carrossel-equipe .funcionario"),o=document.querySelector(".carrossel-wrapper");let r,a,i=0,s=0;if(!n||!o)return null;function l(e){e.preventDefault(),o.style.setProperty("transform",`translate3d(${-(r-e.clientX)}px, 0, 0)`)}o.addEventListener("mousedown",e=>{e.preventDefault(),r=e.clientX,o.addEventListener("mousemove",l)}),o.addEventListener("mouseup",e=>{e.preventDefault(),a=e.clientX,s<n.length-1&&r>a?(s++,n.forEach((e,t)=>{e.classList.remove("active"),t===s&&e.classList.add("active")}),i-=312,o.style.setProperty("left",`${i}px`),o.style.setProperty("transform","translate3d(0, 0, 0)")):0!==s?(s--,n.forEach((e,t)=>{e.classList.remove("active"),t===s&&e.classList.add("active")}),i+=312,o.style.setProperty("left",`${i}px`),o.style.setProperty("transform","translate3d(0, 0, 0)")):(i=0,o.style.setProperty("left",`${i}px`),o.style.setProperty("transform","translate3d(0, 0, 0)")),o.removeEventListener("mousemove",l)})}()}]);