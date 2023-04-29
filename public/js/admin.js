/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/admin.js":
/*!*******************************!*\
  !*** ./resources/js/admin.js ***!
  \*******************************/
/***/ ((__unused_webpack_module, __unused_webpack_exports, __webpack_require__) => {

eval("var req = __webpack_require__(\"./resources/js/components/admin sync recursive _[^_].*\\\\.(js)$\");\nreq.keys().forEach(function (key) {\n  return req(key);\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvYWRtaW4uanMuanMiLCJtYXBwaW5ncyI6IkFBQUEsSUFBTUEsR0FBRyxHQUFHQyxxRkFBNkQ7QUFDekVELEdBQUcsQ0FBQ0csSUFBSSxFQUFFLENBQUNDLE9BQU8sQ0FBQyxVQUFBQyxHQUFHO0VBQUEsT0FBSUwsR0FBRyxDQUFDSyxHQUFHLENBQUM7QUFBQSxFQUFDIiwic291cmNlcyI6WyJ3ZWJwYWNrOi8vLy4vcmVzb3VyY2VzL2pzL2FkbWluLmpzPzkyNmQiXSwic291cmNlc0NvbnRlbnQiOlsiY29uc3QgcmVxID0gcmVxdWlyZS5jb250ZXh0KFwiLi9jb21wb25lbnRzL2FkbWluXCIsIHRydWUsIC9fW15fXS4qXFwuKGpzKSQvKTtcbnJlcS5rZXlzKCkuZm9yRWFjaChrZXkgPT4gcmVxKGtleSkpO1xuIl0sIm5hbWVzIjpbInJlcSIsInJlcXVpcmUiLCJjb250ZXh0Iiwia2V5cyIsImZvckVhY2giLCJrZXkiXSwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/js/admin.js\n");

/***/ }),

/***/ "./resources/js/components/admin/_form.js":
/*!************************************************!*\
  !*** ./resources/js/components/admin/_form.js ***!
  \************************************************/
/***/ (() => {

eval("$(document).ready(function () {\n  $('form').validate({\n    rules: {\n      title: {\n        required: true\n      },\n      description: {\n        required: true\n      },\n      preview: {\n        required: true\n      },\n      text: {\n        required: true\n      }\n    },\n    messages: {\n      title: {\n        required: 'Заполните данное поле'\n      },\n      description: {\n        required: 'Заполните данное поле'\n      },\n      preview: {\n        required: 'Заполните данное поле'\n      },\n      text: {\n        required: 'Заполните данное поле'\n      }\n    }\n  });\n  $('form .form__btn').on('click', function (e) {\n    e.preventDefault();\n    var form = $(this).closest('form');\n    if (form.valid()) {\n      var formData = new FormData(form.get(0));\n      formData.append('text', tinymce.get('text').getContent({\n        format: 'Document'\n      }));\n      $.ajax({\n        type: 'POST',\n        url: form.attr('data-url'),\n        headers: {\n          'X-CSRF-TOKEN': $('meta[name=\"csrf-token\"]').attr('content')\n        },\n        data: formData,\n        cache: false,\n        contentType: false,\n        processData: false,\n        success: function success() {\n          if (form.attr('redirect-on-submit') !== undefined) {\n            window.location.href = '/home';\n            return;\n          }\n          alert('Форма была отправлена.');\n        },\n        error: function error() {\n          alert('Ошибка при отправке формы.');\n        }\n      });\n    }\n  });\n  $('.form__field_file').on('change', function () {\n    $(this).closest('.form__block').find('.form__field_label').html(this.files.length ? this.files[0].name : 'Выберите файл');\n  });\n  $('.form__checkbox-label').on('click', function () {\n    $(this).toggleClass('form__checkbox-label_active');\n  });\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvY29tcG9uZW50cy9hZG1pbi9fZm9ybS5qcy5qcyIsIm5hbWVzIjpbIiQiLCJkb2N1bWVudCIsInJlYWR5IiwidmFsaWRhdGUiLCJydWxlcyIsInRpdGxlIiwicmVxdWlyZWQiLCJkZXNjcmlwdGlvbiIsInByZXZpZXciLCJ0ZXh0IiwibWVzc2FnZXMiLCJvbiIsImUiLCJwcmV2ZW50RGVmYXVsdCIsImZvcm0iLCJjbG9zZXN0IiwidmFsaWQiLCJmb3JtRGF0YSIsIkZvcm1EYXRhIiwiZ2V0IiwiYXBwZW5kIiwidGlueW1jZSIsImdldENvbnRlbnQiLCJmb3JtYXQiLCJhamF4IiwidHlwZSIsInVybCIsImF0dHIiLCJoZWFkZXJzIiwiZGF0YSIsImNhY2hlIiwiY29udGVudFR5cGUiLCJwcm9jZXNzRGF0YSIsInN1Y2Nlc3MiLCJ1bmRlZmluZWQiLCJ3aW5kb3ciLCJsb2NhdGlvbiIsImhyZWYiLCJhbGVydCIsImVycm9yIiwiZmluZCIsImh0bWwiLCJmaWxlcyIsImxlbmd0aCIsIm5hbWUiLCJ0b2dnbGVDbGFzcyJdLCJzb3VyY2VSb290IjoiIiwic291cmNlcyI6WyJ3ZWJwYWNrOi8vLy4vcmVzb3VyY2VzL2pzL2NvbXBvbmVudHMvYWRtaW4vX2Zvcm0uanM/OTE2NCJdLCJzb3VyY2VzQ29udGVudCI6WyIkKGRvY3VtZW50KS5yZWFkeShmdW5jdGlvbigpIHtcbiAgICAkKCdmb3JtJykudmFsaWRhdGUoe1xuICAgICAgICBydWxlczoge1xuICAgICAgICAgICAgdGl0bGU6IHtcbiAgICAgICAgICAgICAgICByZXF1aXJlZDogdHJ1ZSxcbiAgICAgICAgICAgIH0sXG4gICAgICAgICAgICBkZXNjcmlwdGlvbjoge1xuICAgICAgICAgICAgICAgIHJlcXVpcmVkOiB0cnVlLFxuICAgICAgICAgICAgfSxcbiAgICAgICAgICAgIHByZXZpZXc6IHtcbiAgICAgICAgICAgICAgICByZXF1aXJlZDogdHJ1ZSxcbiAgICAgICAgICAgIH0sXG4gICAgICAgICAgICB0ZXh0OiB7XG4gICAgICAgICAgICAgICAgcmVxdWlyZWQ6IHRydWUsXG4gICAgICAgICAgICB9LFxuICAgICAgICB9LFxuICAgICAgICBtZXNzYWdlczoge1xuICAgICAgICAgICAgdGl0bGU6IHtcbiAgICAgICAgICAgICAgICByZXF1aXJlZDogJ9CX0LDQv9C+0LvQvdC40YLQtSDQtNCw0L3QvdC+0LUg0L/QvtC70LUnLFxuICAgICAgICAgICAgfSxcbiAgICAgICAgICAgIGRlc2NyaXB0aW9uOiB7XG4gICAgICAgICAgICAgICAgcmVxdWlyZWQ6ICfQl9Cw0L/QvtC70L3QuNGC0LUg0LTQsNC90L3QvtC1INC/0L7Qu9C1JyxcbiAgICAgICAgICAgIH0sXG4gICAgICAgICAgICBwcmV2aWV3OiB7XG4gICAgICAgICAgICAgICAgcmVxdWlyZWQ6ICfQl9Cw0L/QvtC70L3QuNGC0LUg0LTQsNC90L3QvtC1INC/0L7Qu9C1JyxcbiAgICAgICAgICAgIH0sXG4gICAgICAgICAgICB0ZXh0OiB7XG4gICAgICAgICAgICAgICAgcmVxdWlyZWQ6ICfQl9Cw0L/QvtC70L3QuNGC0LUg0LTQsNC90L3QvtC1INC/0L7Qu9C1JyxcbiAgICAgICAgICAgIH0sXG4gICAgICAgIH0sXG4gICAgfSlcblxuICAgICQoJ2Zvcm0gLmZvcm1fX2J0bicpLm9uKCdjbGljaycsIGZ1bmN0aW9uKGUpIHtcbiAgICAgICAgZS5wcmV2ZW50RGVmYXVsdCgpO1xuICAgICAgICBjb25zdCBmb3JtID0gJCh0aGlzKS5jbG9zZXN0KCdmb3JtJyk7XG5cbiAgICAgICAgaWYgKGZvcm0udmFsaWQoKSkge1xuICAgICAgICAgICAgY29uc3QgZm9ybURhdGEgPSBuZXcgRm9ybURhdGEoZm9ybS5nZXQoMCkpO1xuICAgICAgICAgICAgZm9ybURhdGEuYXBwZW5kKCd0ZXh0JywgdGlueW1jZS5nZXQoJ3RleHQnKS5nZXRDb250ZW50KHtmb3JtYXQ6ICdEb2N1bWVudCd9KSk7XG5cbiAgICAgICAgICAgICQuYWpheCh7XG4gICAgICAgICAgICAgICAgdHlwZTogJ1BPU1QnLFxuICAgICAgICAgICAgICAgIHVybDogZm9ybS5hdHRyKCdkYXRhLXVybCcpLFxuICAgICAgICAgICAgICAgIGhlYWRlcnM6IHtcbiAgICAgICAgICAgICAgICAgICAgJ1gtQ1NSRi1UT0tFTic6ICQoJ21ldGFbbmFtZT1cImNzcmYtdG9rZW5cIl0nKS5hdHRyKCdjb250ZW50JyksXG4gICAgICAgICAgICAgICAgfSxcbiAgICAgICAgICAgICAgICBkYXRhOiBmb3JtRGF0YSxcbiAgICAgICAgICAgICAgICBjYWNoZTogZmFsc2UsXG4gICAgICAgICAgICAgICAgY29udGVudFR5cGU6IGZhbHNlLFxuICAgICAgICAgICAgICAgIHByb2Nlc3NEYXRhOiBmYWxzZSxcbiAgICAgICAgICAgICAgICBzdWNjZXNzOiAoKSA9PiB7XG4gICAgICAgICAgICAgICAgICAgIGlmIChmb3JtLmF0dHIoJ3JlZGlyZWN0LW9uLXN1Ym1pdCcpICE9PSB1bmRlZmluZWQpIHtcbiAgICAgICAgICAgICAgICAgICAgICAgIHdpbmRvdy5sb2NhdGlvbi5ocmVmID0gJy9ob21lJztcbiAgICAgICAgICAgICAgICAgICAgICAgIHJldHVybjtcbiAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICBhbGVydCgn0KTQvtGA0LzQsCDQsdGL0LvQsCDQvtGC0L/RgNCw0LLQu9C10L3QsC4nKTtcbiAgICAgICAgICAgICAgICB9LFxuICAgICAgICAgICAgICAgIGVycm9yOiAoKSA9PiB7XG4gICAgICAgICAgICAgICAgICAgIGFsZXJ0KCfQntGI0LjQsdC60LAg0L/RgNC4INC+0YLQv9GA0LDQstC60LUg0YTQvtGA0LzRiy4nKTtcbiAgICAgICAgICAgICAgICB9LFxuICAgICAgICAgICAgfSk7XG4gICAgICAgIH1cbiAgICB9KTtcblxuICAgICQoJy5mb3JtX19maWVsZF9maWxlJykub24oJ2NoYW5nZScsIGZ1bmN0aW9uKCkge1xuICAgICAgICAkKHRoaXMpLmNsb3Nlc3QoJy5mb3JtX19ibG9jaycpLmZpbmQoJy5mb3JtX19maWVsZF9sYWJlbCcpLmh0bWwodGhpcy5maWxlcy5sZW5ndGggPyB0aGlzLmZpbGVzWzBdLm5hbWUgOiAn0JLRi9Cx0LXRgNC40YLQtSDRhNCw0LnQuycpO1xuICAgIH0pO1xuXG4gICAgJCgnLmZvcm1fX2NoZWNrYm94LWxhYmVsJykub24oJ2NsaWNrJywgZnVuY3Rpb24oKSB7XG4gICAgICAgICQodGhpcykudG9nZ2xlQ2xhc3MoJ2Zvcm1fX2NoZWNrYm94LWxhYmVsX2FjdGl2ZScpO1xuICAgIH0pO1xufSk7XG4iXSwibWFwcGluZ3MiOiJBQUFBQSxDQUFDLENBQUNDLFFBQVEsQ0FBQyxDQUFDQyxLQUFLLENBQUMsWUFBVztFQUN6QkYsQ0FBQyxDQUFDLE1BQU0sQ0FBQyxDQUFDRyxRQUFRLENBQUM7SUFDZkMsS0FBSyxFQUFFO01BQ0hDLEtBQUssRUFBRTtRQUNIQyxRQUFRLEVBQUU7TUFDZCxDQUFDO01BQ0RDLFdBQVcsRUFBRTtRQUNURCxRQUFRLEVBQUU7TUFDZCxDQUFDO01BQ0RFLE9BQU8sRUFBRTtRQUNMRixRQUFRLEVBQUU7TUFDZCxDQUFDO01BQ0RHLElBQUksRUFBRTtRQUNGSCxRQUFRLEVBQUU7TUFDZDtJQUNKLENBQUM7SUFDREksUUFBUSxFQUFFO01BQ05MLEtBQUssRUFBRTtRQUNIQyxRQUFRLEVBQUU7TUFDZCxDQUFDO01BQ0RDLFdBQVcsRUFBRTtRQUNURCxRQUFRLEVBQUU7TUFDZCxDQUFDO01BQ0RFLE9BQU8sRUFBRTtRQUNMRixRQUFRLEVBQUU7TUFDZCxDQUFDO01BQ0RHLElBQUksRUFBRTtRQUNGSCxRQUFRLEVBQUU7TUFDZDtJQUNKO0VBQ0osQ0FBQyxDQUFDO0VBRUZOLENBQUMsQ0FBQyxpQkFBaUIsQ0FBQyxDQUFDVyxFQUFFLENBQUMsT0FBTyxFQUFFLFVBQVNDLENBQUMsRUFBRTtJQUN6Q0EsQ0FBQyxDQUFDQyxjQUFjLEVBQUU7SUFDbEIsSUFBTUMsSUFBSSxHQUFHZCxDQUFDLENBQUMsSUFBSSxDQUFDLENBQUNlLE9BQU8sQ0FBQyxNQUFNLENBQUM7SUFFcEMsSUFBSUQsSUFBSSxDQUFDRSxLQUFLLEVBQUUsRUFBRTtNQUNkLElBQU1DLFFBQVEsR0FBRyxJQUFJQyxRQUFRLENBQUNKLElBQUksQ0FBQ0ssR0FBRyxDQUFDLENBQUMsQ0FBQyxDQUFDO01BQzFDRixRQUFRLENBQUNHLE1BQU0sQ0FBQyxNQUFNLEVBQUVDLE9BQU8sQ0FBQ0YsR0FBRyxDQUFDLE1BQU0sQ0FBQyxDQUFDRyxVQUFVLENBQUM7UUFBQ0MsTUFBTSxFQUFFO01BQVUsQ0FBQyxDQUFDLENBQUM7TUFFN0V2QixDQUFDLENBQUN3QixJQUFJLENBQUM7UUFDSEMsSUFBSSxFQUFFLE1BQU07UUFDWkMsR0FBRyxFQUFFWixJQUFJLENBQUNhLElBQUksQ0FBQyxVQUFVLENBQUM7UUFDMUJDLE9BQU8sRUFBRTtVQUNMLGNBQWMsRUFBRTVCLENBQUMsQ0FBQyx5QkFBeUIsQ0FBQyxDQUFDMkIsSUFBSSxDQUFDLFNBQVM7UUFDL0QsQ0FBQztRQUNERSxJQUFJLEVBQUVaLFFBQVE7UUFDZGEsS0FBSyxFQUFFLEtBQUs7UUFDWkMsV0FBVyxFQUFFLEtBQUs7UUFDbEJDLFdBQVcsRUFBRSxLQUFLO1FBQ2xCQyxPQUFPLEVBQUUsbUJBQU07VUFDWCxJQUFJbkIsSUFBSSxDQUFDYSxJQUFJLENBQUMsb0JBQW9CLENBQUMsS0FBS08sU0FBUyxFQUFFO1lBQy9DQyxNQUFNLENBQUNDLFFBQVEsQ0FBQ0MsSUFBSSxHQUFHLE9BQU87WUFDOUI7VUFDSjtVQUNBQyxLQUFLLENBQUMsd0JBQXdCLENBQUM7UUFDbkMsQ0FBQztRQUNEQyxLQUFLLEVBQUUsaUJBQU07VUFDVEQsS0FBSyxDQUFDLDRCQUE0QixDQUFDO1FBQ3ZDO01BQ0osQ0FBQyxDQUFDO0lBQ047RUFDSixDQUFDLENBQUM7RUFFRnRDLENBQUMsQ0FBQyxtQkFBbUIsQ0FBQyxDQUFDVyxFQUFFLENBQUMsUUFBUSxFQUFFLFlBQVc7SUFDM0NYLENBQUMsQ0FBQyxJQUFJLENBQUMsQ0FBQ2UsT0FBTyxDQUFDLGNBQWMsQ0FBQyxDQUFDeUIsSUFBSSxDQUFDLG9CQUFvQixDQUFDLENBQUNDLElBQUksQ0FBQyxJQUFJLENBQUNDLEtBQUssQ0FBQ0MsTUFBTSxHQUFHLElBQUksQ0FBQ0QsS0FBSyxDQUFDLENBQUMsQ0FBQyxDQUFDRSxJQUFJLEdBQUcsZUFBZSxDQUFDO0VBQzdILENBQUMsQ0FBQztFQUVGNUMsQ0FBQyxDQUFDLHVCQUF1QixDQUFDLENBQUNXLEVBQUUsQ0FBQyxPQUFPLEVBQUUsWUFBVztJQUM5Q1gsQ0FBQyxDQUFDLElBQUksQ0FBQyxDQUFDNkMsV0FBVyxDQUFDLDZCQUE2QixDQUFDO0VBQ3RELENBQUMsQ0FBQztBQUNOLENBQUMsQ0FBQyJ9\n//# sourceURL=webpack-internal:///./resources/js/components/admin/_form.js\n");

/***/ }),

/***/ "./resources/js/components/admin/_logout.js":
/*!**************************************************!*\
  !*** ./resources/js/components/admin/_logout.js ***!
  \**************************************************/
/***/ (() => {

eval("$(document).ready(function () {\n  $('.logout').on('click', function (e) {\n    e.preventDefault();\n    $.ajax({\n      type: 'POST',\n      url: '/logout',\n      datatype: 'json',\n      headers: {\n        'X-CSRF-TOKEN': $('meta[name=\"csrf-token\"]').attr('content')\n      },\n      success: function success() {\n        window.location.href = '/home';\n      },\n      error: function error(e) {\n        alert(\"\\u041F\\u0440\\u043E\\u0438\\u0437\\u043E\\u0448\\u043B\\u0430 \\u043E\\u0448\\u0438\\u0431\\u043A\\u0430: \".concat(e));\n      }\n    });\n  });\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJuYW1lcyI6WyIkIiwiZG9jdW1lbnQiLCJyZWFkeSIsIm9uIiwiZSIsInByZXZlbnREZWZhdWx0IiwiYWpheCIsInR5cGUiLCJ1cmwiLCJkYXRhdHlwZSIsImhlYWRlcnMiLCJhdHRyIiwic3VjY2VzcyIsIndpbmRvdyIsImxvY2F0aW9uIiwiaHJlZiIsImVycm9yIiwiYWxlcnQiXSwic291cmNlcyI6WyJ3ZWJwYWNrOi8vLy4vcmVzb3VyY2VzL2pzL2NvbXBvbmVudHMvYWRtaW4vX2xvZ291dC5qcz9jMzAyIl0sInNvdXJjZXNDb250ZW50IjpbIiQoZG9jdW1lbnQpLnJlYWR5KGZ1bmN0aW9uKCkge1xuICAgJCgnLmxvZ291dCcpLm9uKCdjbGljaycsIGZ1bmN0aW9uKGUpIHtcbiAgICAgICBlLnByZXZlbnREZWZhdWx0KCk7XG4gICAgICAgJC5hamF4KHtcbiAgICAgICAgICAgdHlwZTogJ1BPU1QnLFxuICAgICAgICAgICB1cmw6ICcvbG9nb3V0JyxcbiAgICAgICAgICAgZGF0YXR5cGU6ICdqc29uJyxcbiAgICAgICAgICAgaGVhZGVyczoge1xuICAgICAgICAgICAgICAgJ1gtQ1NSRi1UT0tFTic6ICQoJ21ldGFbbmFtZT1cImNzcmYtdG9rZW5cIl0nKS5hdHRyKCdjb250ZW50JyksXG4gICAgICAgICAgIH0sXG4gICAgICAgICAgIHN1Y2Nlc3M6ICgpID0+IHtcbiAgICAgICAgICAgICAgIHdpbmRvdy5sb2NhdGlvbi5ocmVmID0gJy9ob21lJztcbiAgICAgICAgICAgfSxcbiAgICAgICAgICAgZXJyb3I6IChlKSA9PiB7XG4gICAgICAgICAgICAgICBhbGVydChg0J/RgNC+0LjQt9C+0YjQu9CwINC+0YjQuNCx0LrQsDogJHtlfWApXG4gICAgICAgICAgIH1cbiAgICAgICB9KTtcbiAgIH0pO1xufSk7XG4iXSwibWFwcGluZ3MiOiJBQUFBQSxDQUFDLENBQUNDLFFBQVEsQ0FBQyxDQUFDQyxLQUFLLENBQUMsWUFBVztFQUMxQkYsQ0FBQyxDQUFDLFNBQVMsQ0FBQyxDQUFDRyxFQUFFLENBQUMsT0FBTyxFQUFFLFVBQVNDLENBQUMsRUFBRTtJQUNqQ0EsQ0FBQyxDQUFDQyxjQUFjLEVBQUU7SUFDbEJMLENBQUMsQ0FBQ00sSUFBSSxDQUFDO01BQ0hDLElBQUksRUFBRSxNQUFNO01BQ1pDLEdBQUcsRUFBRSxTQUFTO01BQ2RDLFFBQVEsRUFBRSxNQUFNO01BQ2hCQyxPQUFPLEVBQUU7UUFDTCxjQUFjLEVBQUVWLENBQUMsQ0FBQyx5QkFBeUIsQ0FBQyxDQUFDVyxJQUFJLENBQUMsU0FBUztNQUMvRCxDQUFDO01BQ0RDLE9BQU8sRUFBRSxtQkFBTTtRQUNYQyxNQUFNLENBQUNDLFFBQVEsQ0FBQ0MsSUFBSSxHQUFHLE9BQU87TUFDbEMsQ0FBQztNQUNEQyxLQUFLLEVBQUUsZUFBQ1osQ0FBQyxFQUFLO1FBQ1ZhLEtBQUssd0dBQXNCYixDQUFDLEVBQUc7TUFDbkM7SUFDSixDQUFDLENBQUM7RUFDTixDQUFDLENBQUM7QUFDTCxDQUFDLENBQUMiLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvY29tcG9uZW50cy9hZG1pbi9fbG9nb3V0LmpzLmpzIiwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/js/components/admin/_logout.js\n");

/***/ }),

/***/ "./resources/js/components/admin/_project-edit.js":
/*!********************************************************!*\
  !*** ./resources/js/components/admin/_project-edit.js ***!
  \********************************************************/
/***/ (() => {

eval("$(document).ready(function () {\n  $('.project-delete').on('click', function (e) {\n    e.preventDefault();\n    var projectID = Number($(this).attr('data-project-id'));\n    $.ajax({\n      headers: {\n        'X-CSRF-TOKEN': $('meta[name=\"csrf-token\"]').attr('content')\n      },\n      url: '/admin/projects/delete',\n      method: 'POST',\n      dataType: 'json',\n      data: {\n        projectID: projectID\n      },\n      success: function success() {\n        location.reload();\n      },\n      error: function error() {\n        alert('Произошла ошибка при удалении записи.');\n      }\n    });\n  });\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJuYW1lcyI6WyIkIiwiZG9jdW1lbnQiLCJyZWFkeSIsIm9uIiwiZSIsInByZXZlbnREZWZhdWx0IiwicHJvamVjdElEIiwiTnVtYmVyIiwiYXR0ciIsImFqYXgiLCJoZWFkZXJzIiwidXJsIiwibWV0aG9kIiwiZGF0YVR5cGUiLCJkYXRhIiwic3VjY2VzcyIsImxvY2F0aW9uIiwicmVsb2FkIiwiZXJyb3IiLCJhbGVydCJdLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvY29tcG9uZW50cy9hZG1pbi9fcHJvamVjdC1lZGl0LmpzP2Q2ZTEiXSwic291cmNlc0NvbnRlbnQiOlsiJChkb2N1bWVudCkucmVhZHkoZnVuY3Rpb24oKSB7XG4gICAgJCgnLnByb2plY3QtZGVsZXRlJykub24oJ2NsaWNrJywgZnVuY3Rpb24oZSkge1xuICAgICAgICBlLnByZXZlbnREZWZhdWx0KCk7XG4gICAgICAgIGNvbnN0IHByb2plY3RJRCA9IE51bWJlcigkKHRoaXMpLmF0dHIoJ2RhdGEtcHJvamVjdC1pZCcpKTtcbiAgICAgICAgJC5hamF4KHtcbiAgICAgICAgICAgIGhlYWRlcnM6IHtcbiAgICAgICAgICAgICAgICAnWC1DU1JGLVRPS0VOJzogJCgnbWV0YVtuYW1lPVwiY3NyZi10b2tlblwiXScpLmF0dHIoJ2NvbnRlbnQnKSxcbiAgICAgICAgICAgIH0sXG4gICAgICAgICAgICB1cmw6ICcvYWRtaW4vcHJvamVjdHMvZGVsZXRlJyxcbiAgICAgICAgICAgIG1ldGhvZDogJ1BPU1QnLFxuICAgICAgICAgICAgZGF0YVR5cGU6ICdqc29uJyxcbiAgICAgICAgICAgIGRhdGE6IHtcbiAgICAgICAgICAgICAgICBwcm9qZWN0SUQsXG4gICAgICAgICAgICB9LFxuICAgICAgICAgICAgc3VjY2VzczogKCkgPT4ge1xuICAgICAgICAgICAgICAgIGxvY2F0aW9uLnJlbG9hZCgpO1xuICAgICAgICAgICAgfSxcbiAgICAgICAgICAgIGVycm9yOiAoKSA9PiB7XG4gICAgICAgICAgICAgICAgYWxlcnQoJ9Cf0YDQvtC40LfQvtGI0LvQsCDQvtGI0LjQsdC60LAg0L/RgNC4INGD0LTQsNC70LXQvdC40Lgg0LfQsNC/0LjRgdC4LicpO1xuICAgICAgICAgICAgfVxuICAgICAgICB9KVxuICAgIH0pO1xufSk7XG4iXSwibWFwcGluZ3MiOiJBQUFBQSxDQUFDLENBQUNDLFFBQVEsQ0FBQyxDQUFDQyxLQUFLLENBQUMsWUFBVztFQUN6QkYsQ0FBQyxDQUFDLGlCQUFpQixDQUFDLENBQUNHLEVBQUUsQ0FBQyxPQUFPLEVBQUUsVUFBU0MsQ0FBQyxFQUFFO0lBQ3pDQSxDQUFDLENBQUNDLGNBQWMsRUFBRTtJQUNsQixJQUFNQyxTQUFTLEdBQUdDLE1BQU0sQ0FBQ1AsQ0FBQyxDQUFDLElBQUksQ0FBQyxDQUFDUSxJQUFJLENBQUMsaUJBQWlCLENBQUMsQ0FBQztJQUN6RFIsQ0FBQyxDQUFDUyxJQUFJLENBQUM7TUFDSEMsT0FBTyxFQUFFO1FBQ0wsY0FBYyxFQUFFVixDQUFDLENBQUMseUJBQXlCLENBQUMsQ0FBQ1EsSUFBSSxDQUFDLFNBQVM7TUFDL0QsQ0FBQztNQUNERyxHQUFHLEVBQUUsd0JBQXdCO01BQzdCQyxNQUFNLEVBQUUsTUFBTTtNQUNkQyxRQUFRLEVBQUUsTUFBTTtNQUNoQkMsSUFBSSxFQUFFO1FBQ0ZSLFNBQVMsRUFBVEE7TUFDSixDQUFDO01BQ0RTLE9BQU8sRUFBRSxtQkFBTTtRQUNYQyxRQUFRLENBQUNDLE1BQU0sRUFBRTtNQUNyQixDQUFDO01BQ0RDLEtBQUssRUFBRSxpQkFBTTtRQUNUQyxLQUFLLENBQUMsdUNBQXVDLENBQUM7TUFDbEQ7SUFDSixDQUFDLENBQUM7RUFDTixDQUFDLENBQUM7QUFDTixDQUFDLENBQUMiLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvY29tcG9uZW50cy9hZG1pbi9fcHJvamVjdC1lZGl0LmpzLmpzIiwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/js/components/admin/_project-edit.js\n");

/***/ }),

/***/ "./resources/js/components/admin sync recursive _[^_].*\\.(js)$":
/*!************************************************************!*\
  !*** ./resources/js/components/admin/ sync _[^_].*\.(js)$ ***!
  \************************************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {

var map = {
	"./_form.js": "./resources/js/components/admin/_form.js",
	"./_logout.js": "./resources/js/components/admin/_logout.js",
	"./_project-edit.js": "./resources/js/components/admin/_project-edit.js"
};


function webpackContext(req) {
	var id = webpackContextResolve(req);
	return __webpack_require__(id);
}
function webpackContextResolve(req) {
	if(!__webpack_require__.o(map, req)) {
		var e = new Error("Cannot find module '" + req + "'");
		e.code = 'MODULE_NOT_FOUND';
		throw e;
	}
	return map[req];
}
webpackContext.keys = function webpackContextKeys() {
	return Object.keys(map);
};
webpackContext.resolve = webpackContextResolve;
module.exports = webpackContext;
webpackContext.id = "./resources/js/components/admin sync recursive _[^_].*\\.(js)$";

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = __webpack_require__("./resources/js/admin.js");
/******/ 	
/******/ })()
;