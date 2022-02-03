$(function () {
    $("#show_datetime_format").keyup(function (event) {
        $.ajax({
            type: "POST",
            url: $(this).closest("form").data("preview-url"),
            data: {
                "show_datetime_format": $("#show_datetime_format").val()
            },
            success: function (result) {
                if (result != "") {
                    $("#date_format_preview").html(result);
                }

            }
        });

    });
});