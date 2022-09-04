function VerifyLead(url, form, redirect) {
    var rizwan = document.getElementById(form);
    $.ajax({
        type: "POST",
        url: url,
        data: new FormData(rizwan), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
        contentType: false, // The content type used when sending data to the server.
        cache: false, // To unable request pages to be cached
        processData: false,
        beforeSend: function () {
            $("#loading_num3").show();
            // // $(".request_call").hide();
            $('.btn').prop('disabled', true);
			$("#loader_form").fadeIn();
            // $('#' + btn).prop('disabled', true);

        },
        success: function (data) {
            // alert(data);
            if ($.isEmptyObject(data.error)) {
                $("#loading_num3").hide();
                $('.btn').prop('disabled', false);
                // alert(data.success);
                // window.location.href = data.success;
                // // window.open = data.success;
                // window.open(data.success, '_blank');
                $("#loader_form").fadeOut();
                $("#show_on_chance").show();
                alert(data.success);

                setTimeout(() => {
                    // alert("wait meanwhile we are redirecting you...");
                    window.location.href = redirect;
                }, 1000);
            } else {
                $('.btn').prop('disabled', false);
                // alert("S");
                $("#loading_num3").hide();
                $("#loader_form").fadeOut();


                printErrorMsg(data.error);
            }
        }

    });
}

//
function printErrorMsg(msg) {
    $(".print-error-msg").find("ul").html('');
    $(".print-error-msg").css('display', 'block');
    $.each(msg, function (key, value) {
        $(".print-error-msg").find("ul").append('<li>' + value + '</li>');
    });
}
