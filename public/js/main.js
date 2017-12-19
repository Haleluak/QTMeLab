var $ = jQuery.noConflict();
$(document).ready(function () {
    jQuery('#Sdate').datepicker();
    jQuery('#Edate').datepicker();
    jQuery('#datepicker-autoclose').datepicker({
        autoclose: true,
        todayHighlight: true
    });
    jQuery(".select2").select2();
});