var $ = jQuery.noConflict();
$(document).ready(function () {
    $('#group_lab').on('change', function (e) {
        var optionSelected = $("option:selected", this);
        var valueSelected = this.value;
        $.ajax({
            type: "get",
            url: "/member",
            dataType: 'json',
            data: {group_id: valueSelected},
            success: function (data, statusText, xhr) {
                var options;
                options = '<option>Select</option>';
                $.each(data.data, function (index, object) {
                    options += '<option value="' + object['id'] + '">' + object['name'] + '</option>';
                });
                $('#assignTo').html(options);
            }
        });
    });

    jQuery(".select2").select2({dropdownCssClass: "increasedzindexclass",});
    $(".rerulation :checkbox").click(function () {
        $("." + $(this).attr('id')).prop('checked', $(this).prop("checked"));
    });
    $("#addtask").click(function () {
        $.ajax({
            type: "post",
            url: "/addTask",
            dataType: 'json',
            data: {sample_id: 12, specification_ids: [12, 23, 45]},
            success: function (data, statusText, xhr) {
                console.log(data);
            }
        });
    });
})
;