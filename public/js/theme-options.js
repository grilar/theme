$(document).ready((function(){$(document).find(".colorpicker-input").length>0&&$(document).find(".colorpicker-input").colorpicker(),$(document).find(".iconpicker-input").length>0&&$(document).find(".iconpicker-input").iconpicker({selected:!0,hideOnSelect:!0}),$(document).ready((function(){$(document).on("click",".button-save-theme-options",(function(e){e.preventDefault();var n=$(e.currentTarget);if(n.addClass("button-loading"),"undefined"!=typeof tinymce)for(var t in tinymce.editors)tinymce.editors[t].getContent&&$("#"+t).html(tinymce.editors[t].getContent());var o=n.closest("form");$.ajax({url:o.prop("action"),type:"POST",data:o.serialize(),success:function(e){n.removeClass("button-loading"),e.error?Grilar.showError(e.message):(Grilar.showSuccess(e.message),o.removeClass("dirty"))},error:function(e){n.removeClass("button-loading"),Grilar.handleError(e)}})})),$('.theme-option-sidebar a[data-bs-toggle="tab"]').on("click",(function(){Grilar.initResources(),"undefined"!=typeof EditorManagement&&(window.EDITOR=(new EditorManagement).init(),window.EditorManagement=window.EditorManagement||EditorManagement)}))}))}));