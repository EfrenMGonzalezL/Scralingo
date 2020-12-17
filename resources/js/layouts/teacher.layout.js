$(document).ready(function () {
    color = $('.content').data('color');
    if(color != null) {
        $('body').css('color', color);
        $('.menu').css('background', color);
        $('.menu *').css('color', 'white');
        $('.btn-float').css('color', 'white');
        $('.btn-float').css('background', color);
    }

    $('.nav-item').click(function (e) {
        $('.nav-item').removeClass('selected');
        $(this).addClass('selected');
        e.preventDefault();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: $(this).attr('href'),
            type: 'POST',
            data: { id: 1 },
            success: function (e) {
                $('.content').html(e.html);
            }, error: function (e) {
                console.log(e);
            }
        });
    });
})