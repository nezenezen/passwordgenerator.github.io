!function(a){if("object"===typeof exports&&"undefined"!==typeof module)module.exports=a();else if("function"===typeof define&&define.amd)define([],a);else{var b;b="undefined"!==typeof window?window:"undefined"!==typeof global?global:"undefined"!==typeof self?self:this,b.Clipboard=a()}}(function(){var a;return function d(a,b,c){function e(g,h){if(!b[g]){if(!a[g]){var i="function"==typeof require&&require;if(!h&&i)return i(g,!0);if(f)return f(g,!0);var j=new Error("Cannot find module '"+g+"'");throw j.code="MODULE_NOT_FOUND",j}var k=b[g]={exports:{}};a[g][0].call(k.exports,function(b){var c=a[g][1][b];return e(c?c:b)},k,k.exports,d,a,b,c)}return b[g].exports}for(var f="function"==typeof require&&require,g=0;g<c.length;g++)e(c[g]);return e}({1:[function(a,b){function e(a,b){for(;a&&a!==document;){if(a.matches(b))return a;a=a.parentNode}}if(Element&&!Element.prototype.matches){var d=Element.prototype;d.matches=d.matchesSelector||d.mozMatchesSelector||d.msMatchesSelector||d.oMatchesSelector||d.webkitMatchesSelector}b.exports=e},{}],2:[function(a,b){function e(a,b,c,d,e){var g=f.apply(this,arguments);return a.addEventListener(c,g,e),{destroy:function(){a.removeEventListener(c,g,e)}}}function f(a,b,c,e){return function(c){c.delegateTarget=d(c.target,b),c.delegateTarget&&e.call(a,c)}}var d=a("./closest");b.exports=e},{"./closest":1}],3:[function(a,b,c){c.node=function(a){return void 0!==a&&a instanceof HTMLElement&&1===a.nodeType},c.nodeList=function(a){var b=Object.prototype.toString.call(a);return void 0!==a&&("[object NodeList]"===b||"[object HTMLCollection]"===b)&&"length"in a&&(0===a.length||c.node(a[0]))},c.string=function(a){return"string"===typeof a||a instanceof String},c.fn=function(a){var b=Object.prototype.toString.call(a);return"[object Function]"===b}},{}],4:[function(a,b){function f(a,b,c){if(!a&&!b&&!c)throw new Error("Missing required arguments");if(!d.string(b))throw new TypeError("Second argument must be a String");if(!d.fn(c))throw new TypeError("Third argument must be a Function");if(d.node(a))return g(a,b,c);if(d.nodeList(a))return h(a,b,c);if(d.string(a))return i(a,b,c);throw new TypeError("First argument must be a String, HTMLElement, HTMLCollection, or NodeList")}function g(a,b,c){return a.addEventListener(b,c),{destroy:function(){a.removeEventListener(b,c)}}}function h(a,b,c){return Array.prototype.forEach.call(a,function(a){a.addEventListener(b,c)}),{destroy:function(){Array.prototype.forEach.call(a,function(a){a.removeEventListener(b,c)})}}}function i(a,b,c){return e(document.body,a,b,c)}var d=a("./is"),e=a("delegate");b.exports=f},{"./is":3,delegate:2}],5:[function(a,b){function d(a){var b;if("SELECT"===a.nodeName)a.focus(),b=a.value;else if("INPUT"===a.nodeName||"TEXTAREA"===a.nodeName)a.focus(),a.setSelectionRange(0,a.value.length),b=a.value;else{a.hasAttribute("contenteditable")&&a.focus();var c=window.getSelection(),d=document.createRange();d.selectNodeContents(a),c.removeAllRanges(),c.addRange(d),b=c.toString()}return b}b.exports=d},{}],6:[function(a,b){function d(){}d.prototype={on:function(a,b,c){var d=this.e||(this.e={});return(d[a]||(d[a]=[])).push({fn:b,ctx:c}),this},once:function(a,b,c){function e(){d.off(a,e),b.apply(c,arguments)}var d=this;return e._=b,this.on(a,e,c)},emit:function(a){var b=[].slice.call(arguments,1),c=((this.e||(this.e={}))[a]||[]).slice(),d=0,e=c.length;for(d;d<e;d++)c[d].fn.apply(c[d].ctx,b);return this},off:function(a,b){var c=this.e||(this.e={}),d=c[a],e=[];if(d&&b)for(var f=0,g=d.length;f<g;f++)d[f].fn!==b&&d[f].fn._!==b&&e.push(d[f]);return e.length?c[a]=e:delete c[a],this}},b.exports=d},{}],7:[function(b,c,d){!function(e,f){if("function"===typeof a&&a.amd)a(["module","select"],f);else if("undefined"!==typeof d)f(c,b("select"));else{var g={exports:{}};f(g,e.select),e.clipboardAction=g.exports}}(this,function(a,b){"use strict";function d(a){return a&&a.__esModule?a:{"default":a}}function f(a,b){if(!(a instanceof b))throw new TypeError("Cannot call a class as a function")}var c=d(b),e="function"===typeof Symbol&&"symbol"===typeof Symbol.iterator?function(a){return typeof a}:function(a){return a&&"function"===typeof Symbol&&a.constructor===Symbol&&a!==Symbol.prototype?"symbol":typeof a},g=function(){function a(a,b){for(var c=0;c<b.length;c++){var d=b[c];d.enumerable=d.enumerable||!1,d.configurable=!0,"value"in d&&(d.writable=!0),Object.defineProperty(a,d.key,d)}}return function(b,c,d){return c&&a(b.prototype,c),d&&a(b,d),b}}(),h=function(){function a(b){f(this,a),this.resolveOptions(b),this.initSelection()}return g(a,[{key:"resolveOptions",value:function(){var a=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{};this.action=a.action,this.emitter=a.emitter,this.target=a.target,this.text=a.text,this.trigger=a.trigger,this.selectedText=""}},{key:"initSelection",value:function(){this.text?this.selectFake():this.target&&this.selectTarget()}},{key:"selectFake",value:function(){var a=this,b="rtl"==document.documentElement.getAttribute("dir");this.removeFake(),this.fakeHandlerCallback=function(){return a.removeFake()},this.fakeHandler=document.body.addEventListener("click",this.fakeHandlerCallback)||!0,this.fakeElem=document.createElement("textarea"),this.fakeElem.style.fontSize="12pt",this.fakeElem.style.border="0",this.fakeElem.style.padding="0",this.fakeElem.style.margin="0",this.fakeElem.style.position="absolute",this.fakeElem.style[b?"right":"left"]="-9999px";var d=window.pageYOffset||document.documentElement.scrollTop;this.fakeElem.addEventListener("focus",window.scrollTo(0,d)),this.fakeElem.style.top=d+"px",this.fakeElem.setAttribute("readonly",""),this.fakeElem.value=this.text,document.body.appendChild(this.fakeElem),this.selectedText=c.default(this.fakeElem),this.copyText()}},{key:"removeFake",value:function(){this.fakeHandler&&(document.body.removeEventListener("click",this.fakeHandlerCallback),this.fakeHandler=null,this.fakeHandlerCallback=null),this.fakeElem&&(document.body.removeChild(this.fakeElem),this.fakeElem=null)}},{key:"selectTarget",value:function(){this.selectedText=c.default(this.target),this.copyText()}},{key:"copyText",value:function(){var a=void 0;try{a=document.execCommand(this.action)}catch(b){a=!1}this.handleResult(a)}},{key:"handleResult",value:function(a){this.emitter.emit(a?"success":"error",{action:this.action,text:this.selectedText,trigger:this.trigger,clearSelection:this.clearSelection.bind(this)})}},{key:"clearSelection",value:function(){this.target&&this.target.blur(),window.getSelection().removeAllRanges()}},{key:"destroy",value:function(){this.removeFake()}},{key:"action",set:function(){var a=arguments.length>0&&void 0!==arguments[0]?arguments[0]:"copy";if(this._action=a,"copy"!==this._action&&"cut"!==this._action)throw new Error('Invalid "action" value, use either "copy" or "cut"')},get:function(){return this._action}},{key:"target",set:function(a){if(void 0!==a){if(!a||"object"!==("undefined"===typeof a?"undefined":e(a))||1!==a.nodeType)throw new Error('Invalid "target" value, use a valid Element');if("copy"===this.action&&a.hasAttribute("disabled"))throw new Error('Invalid "target" attribute. Please use "readonly" instead of "disabled" attribute');if("cut"===this.action&&(a.hasAttribute("readonly")||a.hasAttribute("disabled")))throw new Error('Invalid "target" attribute. You can\'t cut text from elements with "readonly" or "disabled" attributes');this._target=a}},get:function(){return this._target}}]),a}();a.exports=h})},{select:5}],8:[function(b,c,d){!function(e,f){if("function"===typeof a&&a.amd)a(["module","./clipboard-action","tiny-emitter","good-listener"],f);else if("undefined"!==typeof d)f(c,b("./clipboard-action"),b("tiny-emitter"),b("good-listener"));else{var g={exports:{}};f(g,e.clipboardAction,e.tinyEmitter,e.goodListener),e.clipboard=g.exports}}(this,function(a,b,c,d){"use strict";function h(a){return a&&a.__esModule?a:{"default":a}}function i(a,b){if(!(a instanceof b))throw new TypeError("Cannot call a class as a function")}function k(a,b){if(!a)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return!b||"object"!==typeof b&&"function"!==typeof b?a:b}function l(a,b){if("function"!==typeof b&&null!==b)throw new TypeError("Super expression must either be null or a function, not "+typeof b);a.prototype=Object.create(b&&b.prototype,{constructor:{value:a,enumerable:!1,writable:!0,configurable:!0}}),b&&(Object.setPrototypeOf?Object.setPrototypeOf(a,b):a.__proto__=b)}function n(a,b){var c="data-clipboard-"+a;if(b.hasAttribute(c))return b.getAttribute(c)}var e=h(b),f=h(c),g=h(d),j=function(){function a(a,b){for(var c=0;c<b.length;c++){var d=b[c];d.enumerable=d.enumerable||!1,d.configurable=!0,"value"in d&&(d.writable=!0),Object.defineProperty(a,d.key,d)}}return function(b,c,d){return c&&a(b.prototype,c),d&&a(b,d),b}}(),m=function(a){function b(a,c){i(this,b);var d=k(this,(b.__proto__||Object.getPrototypeOf(b)).call(this));return d.resolveOptions(c),d.listenClick(a),d}return l(b,a),j(b,[{key:"resolveOptions",value:function(){var a=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{};this.action="function"===typeof a.action?a.action:this.defaultAction,this.target="function"===typeof a.target?a.target:this.defaultTarget,this.text="function"===typeof a.text?a.text:this.defaultText}},{key:"listenClick",value:function(a){var b=this;this.listener=g.default(a,"click",function(a){return b.onClick(a)})}},{key:"onClick",value:function(a){var b=a.delegateTarget||a.currentTarget;this.clipboardAction&&(this.clipboardAction=null),this.clipboardAction=new e.default({action:this.action(b),target:this.target(b),text:this.text(b),trigger:b,emitter:this})}},{key:"defaultAction",value:function(a){return n("action",a)}},{key:"defaultTarget",value:function(a){var b=n("target",a);return b?document.querySelector(b):void 0}},{key:"defaultText",value:function(a){return n("text",a)}},{key:"destroy",value:function(){this.listener.destroy(),this.clipboardAction&&(this.clipboardAction.destroy(),this.clipboardAction=null)}}]),b}(f.default);a.exports=m})},{"./clipboard-action":7,"good-listener":4,"tiny-emitter":6}]},{},[8])(8)});