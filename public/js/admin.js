(()=>{var e,t={6018:()=>{$(document).ready((function(){$("form").validate({rules:{title:{required:!0},description:{required:!0},preview:{required:!0},text:{required:!0}},messages:{title:{required:"Заполните данное поле"},description:{required:"Заполните данное поле"},preview:{required:"Заполните данное поле"},text:{required:"Заполните данное поле"}}}),$("form .form__btn").on("click",(function(e){e.preventDefault();var t=$(this).closest("form");if(t.valid()){var r=new FormData(t.get(0));$.ajax({type:"POST",url:t.attr("data-url"),headers:{"X-CSRF-TOKEN":$('meta[name="csrf-token"]').attr("content")},data:r,cache:!1,contentType:!1,processData:!1,success:function(){void 0===t.attr("redirect-on-submit")?alert("Форма была отправлена."):window.location.href="/home"},error:function(){alert("Ошибка при отправке формы.")}})}})),$(".form__field_file").on("change",(function(){$(this).closest(".form__block").find(".form__field_label").html(this.files.length?this.files[0].name:"Выберите файл")})),$(".form__checkbox-label").on("click",(function(){$(this).toggleClass("form__checkbox-label_active")}))}))},5760:()=>{$(document).ready((function(){$(".logout").on("click",(function(e){e.preventDefault(),$.ajax({type:"POST",url:"/logout",datatype:"json",headers:{"X-CSRF-TOKEN":$('meta[name="csrf-token"]').attr("content")},success:function(){window.location.href="/home"},error:function(e){alert("Произошла ошибка: ".concat(e))}})}))}))},5608:(e,t,r)=>{var o={"./_form.js":6018,"./_logout.js":5760};function n(e){var t=i(e);return r(t)}function i(e){if(!r.o(o,e)){var t=new Error("Cannot find module '"+e+"'");throw t.code="MODULE_NOT_FOUND",t}return o[e]}n.keys=function(){return Object.keys(o)},n.resolve=i,e.exports=n,n.id=5608}},r={};function o(e){var n=r[e];if(void 0!==n)return n.exports;var i=r[e]={exports:{}};return t[e](i,i.exports,o),i.exports}o.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),(e=o(5608)).keys().forEach((function(t){return e(t)}))})();