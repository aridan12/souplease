!function(e){var t={};function n(r){if(t[r])return t[r].exports;var o=t[r]={i:r,l:!1,exports:{}};return e[r].call(o.exports,o,o.exports,n),o.l=!0,o.exports}n.m=e,n.c=t,n.d=function(e,t,r){n.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:r})},n.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},n.t=function(e,t){if(1&t&&(e=n(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var r=Object.create(null);if(n.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var o in e)n.d(r,o,function(t){return e[t]}.bind(null,o));return r},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,"a",t),t},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.p="/dist",n(n.s=1)}([function(e,t){e.exports=jQuery},function(e,t,n){"use strict";n.r(t);var r=n(0),o=n.n(r);function u(e,t){for(var n=0;n<t.length;n++){var r=t[n];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(e,r.key,r)}}var i=function(){function e(t){!function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,e),this.$elem=o()(t)}var t,n,r;return t=e,(n=[{key:"run",value:function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{},t=e.copy,n=void 0===t||t;this.select(),n&&this.copy()}},{key:"select",value:function(){this.$elem.is(":input")?this.selectInput():this.selectRange()}},{key:"selectInput",value:function(){var e=this.$elem.prop("readonly");this.$elem.prop("readonly",!1).select().prop("readonly",e)}},{key:"selectRange",value:function(){var e=document.createRange();e.selectNodeContents(this.$elem.get(0));var t=window.getSelection();t.removeAllRanges(),t.addRange(e)}},{key:"copy",value:function(){document.execCommand("copy")}}])&&u(t.prototype,n),r&&u(t,r),e}();o.a.fn.pickText=function(e){return this.each((function(t,n){new i(o()(n)).run(e)}))}}]);