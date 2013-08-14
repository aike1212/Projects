jQuery(document).ready(function(c){c("#a-hide-rows").click(function(){var h=c('#table_contents tr:not(".table-foot") :checked').length;if(h==0){alert(WP_Table_Reloaded_Admin.str_UnHideRowsNoSelection)}else{c('#table_contents tr:not(".table-foot") :checked').removeAttr("checked").next().val(true).parents("tr").addClass("row-hidden");a()}return false});c("#a-unhide-rows").click(function(){var h=c('#table_contents tr:not(".table-foot") :checked').length;if(h==0){alert(WP_Table_Reloaded_Admin.str_UnHideRowsNoSelection)}else{c('#table_contents tr:not(".table-foot") :checked').removeAttr("checked").next().val(false).parents("tr").removeClass("row-hidden");a()}return false});c("#a-hide-columns").click(function(){var h=c("#table_contents .table-foot :checked").length;if(h==0){alert(WP_Table_Reloaded_Admin.str_UnHideColsNoSelection)}else{c("#table_contents .table-foot :checked").removeAttr("checked").next().val(true).each(function(){c("#table_contents ."+this.id).addClass("column-hidden")});a()}return false});c("#a-unhide-columns").click(function(){var h=c("#table_contents .table-foot :checked").length;if(h==0){alert(WP_Table_Reloaded_Admin.str_UnHideColsNoSelection)}else{c("#table_contents .table-foot :checked").removeAttr("checked").next().val(false).each(function(){c("#table_contents ."+c(this).attr("id")).removeClass("column-hidden")});a()}return false});c("#button-insert-rows").click(function(){var h=c('#table_contents tr:not(".table-foot") :checked').length;if(h==0){alert(WP_Table_Reloaded_Admin.str_InsertRowsNoSelection);return false}else{return true}});c("#button-insert-columns").click(function(){var h=c("#table_contents .table-foot :checked").length;if(h==0){alert(WP_Table_Reloaded_Admin.str_InsertColsNoSelection);return false}else{return true}});function e(h){c(this).val(h.data.span_type);c("#table_contents").undelegate("textarea","click",e);a()}c("#a-add-colspan").click(function(){if(confirm(WP_Table_Reloaded_Admin.str_DataManipulationAddColspan)){c("#table_contents").delegate("textarea","click",{span_type:"#colspan#"},e)}return false});c("#a-add-rowspan").click(function(){if(confirm(WP_Table_Reloaded_Admin.str_DataManipulationAddRowspan)){c("#table_contents").delegate("textarea","click",{span_type:"#rowspan#"},e)}return false});var d=c(null);if(WP_Table_Reloaded_Admin.option_growing_textareas){c("#table_contents").delegate("textarea","focus",function(){d.removeClass("focus");d=c(this).closest("tr").addClass("focus")})}c("#options_custom_css").one("focus",function(){c(this).addClass("focus")});c("#export_format").change(function(){if("csv"==c(this).val()){c(".tr-export-delimiter").show()}else{c(".tr-export-delimiter").hide()}}).change();var g=c(".wp-table-reloaded-table-information #table_id").val();c(".wp-table-reloaded-table-information #table_id").change(function(){if(g!=c(this).val()){if(confirm(WP_Table_Reloaded_Admin.str_ChangeTableID)){g=c(this).val();a()}else{c(this).val(g)}}});c(".tr-import-addreplace input").click(function(){if("replace"==c(".tr-import-addreplace input:checked").val()){c(".tr-import-addreplace-table").show()}else{c(".tr-import-addreplace-table").hide()}});c(".tr-import-addreplace input:checked").click();c(".tr-import-from input").click(function(){c(".tr-import-file-upload, .tr-import-url, .tr-import-form-field, .tr-import-server").hide();c(".tr-import-"+c(".tr-import-from input:checked").val()).show()});c(".tr-import-from input:checked").click();c("#options_use_custom_css").change(function(){if(c(this).attr("checked")){c("#options_custom_css").removeAttr("disabled")}else{c("#options_custom_css").attr("disabled","disabled")}});c("#options_enable_tablesorter").change(function(){if(c(this).attr("checked")){c("#options_tablesorter_script").removeAttr("disabled")}else{c("#options_tablesorter_script").attr("disabled","disabled")}});if(WP_Table_Reloaded_Admin.option_tablesorter_enabled&&WP_Table_Reloaded_Admin.option_datatables_active){c("#table_options_first_row_th").change(function(){if(c(this).attr("checked")){c("#table_options_use_tablesorter").removeAttr("disabled").change()}else{c("#table_options_use_tablesorter").attr("disabled","disabled");c(".wp-table-reloaded-datatables-options input").attr("disabled","disabled")}});c("#table_options_use_tablesorter").change(function(){if(c(this).attr("checked")){c(".wp-table-reloaded-datatables-options input").removeAttr("disabled");if(!WP_Table_Reloaded_Admin.option_tabletools_active){c("#table_options_datatables_tabletools").attr("disabled","disabled")}c("#table_options_datatables_paginate").change()}else{c(".wp-table-reloaded-datatables-options input").attr("disabled","disabled")}});c("#table_options_datatables_paginate").change(function(){if(c(this).attr("checked")){c("#table_options_datatables_paginate_entries").removeAttr("disabled")}else{c("#table_options_datatables_paginate_entries").attr("disabled","disabled")}})}else{if(WP_Table_Reloaded_Admin.option_tablesorter_enabled){c("#table_options_first_row_th").change(function(){if(c(this).attr("checked")){c("#table_options_use_tablesorter").removeAttr("disabled")}else{c("#table_options_use_tablesorter").attr("disabled","disabled")}})}}c("#table_options_print_name, #table_options_print_description").change(function(){if(c(this).attr("checked")){c("#"+this.id+"_position").removeAttr("disabled")}else{c("#"+this.id+"_position").attr("disabled","disabled")}});c("#options_uninstall_upon_deactivation").click(function(){if(c(this).attr("checked")){return confirm(WP_Table_Reloaded_Admin.str_UninstallCheckboxActivation)}});function b(h){c(this).val(c(this).val()+h.data.html);c("#table_contents").undelegate("textarea","click",b);a()}c("#a-insert-link").click(function(){var i=prompt(WP_Table_Reloaded_Admin.str_DataManipulationLinkInsertURL+":","http://");if(i){var h=prompt(WP_Table_Reloaded_Admin.str_DataManipulationLinkInsertText+":",WP_Table_Reloaded_Admin.str_DataManipulationLinkInsertText);if(h){var k="";if(WP_Table_Reloaded_Admin.option_add_target_blank_to_links){k=' target="_blank"'}var j='<a href="'+i+'"'+k+">"+h+"</a>";j=prompt(WP_Table_Reloaded_Admin.str_DataManipulationLinkInsertExplain,j);if(j){c("#table_contents").delegate("textarea","click",{html:j},b)}}}return false});function f(){edCanvas=this;c("#table_contents").undelegate("textarea","click",f);var h=c("#a-insert-image");tb_show(h.attr("title"),h.attr("href"),false);tb_my_position();c(this).blur();a()}c("#a-insert-image").click(function(){if(confirm(WP_Table_Reloaded_Admin.str_DataManipulationImageInsertThickbox)){c("#table_contents").delegate("textarea","click",f)}return false});c("#insert_custom_field_name").keyup(function(){c(this).val(c(this).val().toLowerCase().replace(/[^a-z0-9_-]/g,""))});c(".focus-blur-change").focus(function(){if(c(this).attr("title")==c(this).val()){c(this).val("")}}).blur(function(){if(""==c(this).val()){c(this).val(c(this).attr("title"))}});c("#table_custom_fields").delegate("textarea","focus",function(){c("#table_custom_fields .focus").removeClass("focus");c(this).addClass("focus")});c("input.bulk_copy_tables").click(function(){return confirm(WP_Table_Reloaded_Admin.str_BulkCopyTablesLink)});c("input.bulk_delete_tables").click(function(){return confirm(WP_Table_Reloaded_Admin.str_BulkDeleteTablesLink)});c("input.bulk_wp_table_import_tables").click(function(){return confirm(WP_Table_Reloaded_Admin.str_BulkImportwpTableTablesLink)});c("a.copy_table_link").click(function(){return confirm(WP_Table_Reloaded_Admin.str_CopyTableLink)});c("#wp-table-reloaded-list a.delete_table_link").click(function(){return confirm(WP_Table_Reloaded_Admin.str_DeleteTableLink)});c("#button-delete-rows").click(function(){var i=c('#table_contents tr:not(".table-foot") :checkbox').length-1;var h=c('#table_contents tr:not(".table-foot") :checked').length;if(h==0){alert(WP_Table_Reloaded_Admin.str_DeleteRowsFailedNoSelection);return false}else{if(i==h){alert(WP_Table_Reloaded_Admin.str_DeleteRowsFailedNotAll);return false}else{return confirm(WP_Table_Reloaded_Admin.str_DeleteRowsConfirm)}}});c("#button-delete-columns").click(function(){var h=c("#table_contents .table-foot :checkbox").length;var i=c("#table_contents .table-foot :checked").length;if(i==0){alert(WP_Table_Reloaded_Admin.str_DeleteColsFailedNoSelection);return false}else{if(h==i){alert(WP_Table_Reloaded_Admin.str_DeleteColsFailedNotAll);return false}else{return confirm(WP_Table_Reloaded_Admin.str_DeleteColsConfirm)}}});c("a.import_wptable_link").click(function(){return confirm(WP_Table_Reloaded_Admin.str_ImportwpTableLink)});c("#import_wp_table_reloaded_dump_file").click(function(){return confirm(WP_Table_Reloaded_Admin.str_ImportDumpFile)});c("#uninstall_plugin_link").click(function(){if(confirm(WP_Table_Reloaded_Admin.str_UninstallPluginLink_1)){return confirm(WP_Table_Reloaded_Admin.str_UninstallPluginLink_2)}else{return false}});c("a.cf_shortcode_link").click(function(){var h=prompt(WP_Table_Reloaded_Admin.str_CFShortcodeMessage,c(this).attr("title"));return false});c("a.table_shortcode_link").click(function(){var h=prompt(WP_Table_Reloaded_Admin.str_TableShortcodeMessage,c(this).attr("title"));return false});c(".postbox h3, .postbox .handlediv").click(function(){c(c(this).parent().get(0)).toggleClass("closed")});function a(){if(!WP_Table_Reloaded_Admin.option_show_exit_warning){return}window.onbeforeunload=function(){return WP_Table_Reloaded_Admin.str_saveAlert};c("#wp_table_reloaded_edit_table").undelegate("#table_name, textarea, .wp-table-reloaded-options input, .wp-table-reloaded-options select","change",a)}if(WP_Table_Reloaded_Admin.option_show_exit_warning){c("#wp_table_reloaded_edit_table").delegate("#table_name, textarea, .wp-table-reloaded-options input, .wp-table-reloaded-options select","change",a);c("#wp_table_reloaded_edit_table").find('input[name="submit[update]"], input[name="submit[save_back]"]').click(function(){window.onbeforeunload=null})}c("#wp_table_reloaded_edit_table").find('input[name="submit[update]"], input[name="submit[save_back]"]').click(function(){c("#wp_table_reloaded_edit_table .wp-table-reloaded-options").find("input, select").removeAttr("disabled")});tb_init("a.help-link");tb_init("a.preview-link");tb_my_position()});function send_to_editor(a){jQuery(edCanvas).val(jQuery(edCanvas).val()+a);tb_remove()}var tb_my_position;(function(a){tb_my_position=function(){var f=a("#TB_window"),e=a(window).width(),d=a(window).height(),c=(720<e)?720:e,b=0;if(a("body.admin-bar").length){b=28}if(f.size()){f.width(c-50).height(d-45-b);a("#TB_iframeContent").width(c-50).height(d-75-b);f.css({"margin-left":"-"+parseInt(((c-50)/2),10)+"px"});if(typeof document.body.style.maxWidth!="undefined"){f.css({top:20+b+"px","margin-top":"0"})}}return a("a.preview-link").each(function(){var g=a(this).attr("href");if(!g){return}g=g.replace(/&width=[0-9]+/g,"");g=g.replace(/&height=[0-9]+/g,"");a(this).attr("href",g+"&width="+(c-80)+"&height="+(d-85-b))})};a(window).resize(function(){tb_my_position()})})(jQuery);