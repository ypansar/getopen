!function(e){var t={};function i(n){if(t[n])return t[n].exports;var r=t[n]={i:n,l:!1,exports:{}};return e[n].call(r.exports,r,r.exports,i),r.l=!0,r.exports}i.m=e,i.c=t,i.d=function(e,t,n){i.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:n})},i.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},i.t=function(e,t){if(1&t&&(e=i(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var n=Object.create(null);if(i.r(n),Object.defineProperty(n,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var r in e)i.d(n,r,function(t){return e[t]}.bind(null,r));return n},i.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return i.d(t,"a",t),t},i.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},i.p="",i(i.s=7)}({7:function(e,t){jQuery(document).ready((function(e){function t(){return"undefined"!=typeof tinymce&&null!=tinymce.get("job_description")}e(document.body).on("click",".job-manager-remove-uploaded-file",(function(){var t=e(this).closest(".fieldset-type-file").find("input[type=file][multiple][data-file_limit]");return e(this).closest(".job-manager-uploaded-file").remove(),t.trigger("update_status"),!1})),e(document.body).on("update_status",".fieldset-type-file input[type=file][multiple][data-file_limit]",(function(){var t=parseInt(e(this).data("file_limit"),10)-parseInt(e(this).siblings(".job-manager-uploaded-files").first().children(".job-manager-uploaded-file").length,10);t>0?e(this).prop("disabled",!1):e(this).prop("disabled",!0),e(this).data("file_limit_left",t)})),e(document.body).on("change",".fieldset-type-file input[type=file][multiple][data-file_limit]",(function(){var t=parseInt(e(this).data("file_limit"),10),i=t-parseInt(e(this).siblings(".job-manager-uploaded-files").first().children(".job-manager-uploaded-file").length,10),n=e(this).get(0);if(void 0!==n.files){var r=parseInt(n.files.length,10);if(t&&r>i){var a=job_manager_job_submission.i18n_over_upload_limit;e(this).data("file_limit_message")&&"string"==typeof e(this).data("file_limit_message")&&(a=e(this).data("file_limit_message")),a=a.replace("%d",t),n.setCustomValidity(a)}else n.setCustomValidity("");n.reportValidity()}return!0})),e(".fieldset-type-file input[type=file][multiple][data-file_limit]").trigger("update_status"),e(document.body).on("click","#submit-job-form .button.save_draft",(function(){var t=e(this).closest("#submit-job-form"),i=!0;return t.addClass("disable-validation"),setTimeout((function(){t.removeClass("disable-validation")}),1e3),t.find("div.draft-required input[required]").each((function(){if(e(this).get(0).reportValidity(),e(this).is(":invalid"))return i=!1,!1})),i})),e(document.body).on("submit",".job-manager-form",(function(i){e(this).hasClass("disable-validation")||!function(){if((n=e("#job_category")).length&&(!n.val()||!n.val().length)&&n.parent().hasClass("required-field")&&n.next().hasClass("select2")){e(this).find("input[type=submit]").blur();var i=e(".fieldset-job_category .select2-search__field")[0];return i.setCustomValidity(job_manager_job_submission.i18n_required_field),i.reportValidity(),!0}var n;if(function(){if(!t())return!1;var i=tinymce.get("job_description").getContent(),n=e("#job_description");return 0===i.length&&n.parents(".required-field").length&&n.parents(".required-field").is(":visible")}()){e(this).find("input[type=submit]").blur();var r=e("#job_description");return r.css({height:1,resize:"none",padding:0}),r.show(),r[0].setCustomValidity(job_manager_job_submission.i18n_required_field),r[0].reportValidity(),!0}return!1}()?e(this).hasClass("prevent-spinner-behavior")||(e(this).find(".spinner").addClass("is-active"),e(this).find("input[type=submit]").addClass("disabled").on("click",(function(){return!1}))):i.preventDefault()})),e("#job_category").on("select2:select",(function(){var t=e(".fieldset-job_category .select2-search__field")[0];t.setCustomValidity(""),t.reportValidity()})),setTimeout((function(){t()&&tinymce.get("job_description").on("Change",(function(){var t=e("#job_description");t.hide(),t[0].setCustomValidity(""),t[0].reportValidity()}))}),1e3)}))}});