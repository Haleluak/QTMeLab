var $ = jQuery.noConflict();
$(document).ready(function () {
    $(".duplicate").click(function () {
        getValueUsingClass();
    });
    $('.chk').change(function() {
        var value = $(this).val();
        $(".chk").each(function() {

        });
        $(this).siblings().attr("disabled", $(this).is(":checked"));
        /*if ($(this).val() == "none") {

            $(this).siblings("input[type=checkbox]").attr('checked', false);

        } else {

            $(this).siblings("input[value=none]").attr('checked', false);

        }*/
    });
});
function getValueUsingClass(){
    /* declare an checkbox array */
    var chkArray = [];

    /* look for all checkboes that have a class 'chk' attached to it and check if it was checked */
    $(".chk:checked").each(function() {
        chkArray.push($(this).val());
    });

    /* we join the array separated by the comma */
    var selected;
    selected = chkArray.join(',') ;

    /* check if there is selected checkboxes, by default the length is 1 as it contains one single comma */
    if(selected.length > 0){
        alert("You have selected " + selected);
    }else{
        alert("Please at least check one of the checkbox");
    }
}