$(document).ready(function() {

    $('#post-button').on("click", function() {
        console.log("sending to ajax");
        var img = $('<img />').attr({
            'src': './ajax-loader.gif',
            'alt': 'JSFiddle logo',
            'title': 'JSFiddle logo',
            'width': 50,
            'class': 'm-auto p-auto',
        });
        $("#confirmation-message").html('<hr class="my-1">');
        $("#confirmation-message").append('<h4 class="mt-3 text-center">Status of email sent to the Students is: </h4>');
        $("#confirmation-message").append('<div class="mb-5 pb-5 d-flex justify-content-center"><img src="img/ajax-loader.gif" alt=""></div>');

        var trArray = [];
        var i_loop = 0;
        $('table tr').each(function() {

            if (i_loop != 0) {
                var this_row = $(this);
                var productId = $.trim(this_row.find('td:nth-of-type(2)').html());
                trArray.push(this_row.find('td:nth-of-type(2)').html());
            }
            i_loop = i_loop + 1;

        });


        $.ajax({
            url: './send-mail.php',
            type: 'POST',
            data: {
                Form_message: $("#Form_message").val(),
                arr: trArray,
            },
            success: function(data) {
                $('#confirmation-message').html(data);
            }
        });
    });
})