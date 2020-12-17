function getAvatar() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    return $.ajax({
        url: '/avatar/get_avatar',
        type: 'POST'
    });
}

var urls = [];
var user_urls = [];

function drawAvatar() {
    getAvatar().then(function (e) {
        urls = {
            face: {
                url: e.avatar.face_url,
                offset_y: 85,
                offset_x: 33,
                z_index: 1
            },
            hair: {
                url: e.avatar.hair_url,
                offset_y: 0,
                offset_x: 10,
                z_index: 3
            },
            shirts: {
                url: e.avatar.shirt_url,
                offset_y: 190,
                offset_x: 10,
                z_index: 2
            },
            sleeves: {
                url: e.avatar.sleeves_url,
                offset_y: 192,
                offset_x: 132,
                z_index: 1
            },
            hands: {
                url: e.avatar.hands_url,
                offset_y: 280,
                offset_x: 396,
                z_index: 0
            },
            pants: {
                url: e.avatar.pants_url,
                offset_y: 350,
                offset_x: 45,
                z_index: 1
            },
            shoes: {
                url: e.avatar.shoes_url,
                offset_y: 500,
                offset_x: 80,
                z_index: 0
            },
            skin: {
                url: e.avatar.skin_url,
                offset_y: 44,
                offset_x: 0,
                z_index: 0
            }
        };

        user_urls = urls;

        $('.category-canvas').each(function (i) {
            var ctx = this.getContext('2d');
            var canvas = this;
            // Store the current transformation matrix
            ctx.save();

            // Use the identity matrix while clearing the canvas
            ctx.setTransform(1, 0, 0, 1, 0, 0);
            ctx.clearRect(0, 0, canvas.width, canvas.height);

            // Restore the transform
            ctx.restore();

        });


        $('.category-canvas').each(function (index) {
            var img = new Image();
            var ctx = this.getContext('2d');
            var canvas = this;
            canvas.width = 300;
            canvas.height = 150;
            var id = this.getAttribute('id');
            var offset = 0;
            img.src = urls[id].url;

            if (id == 'sleeves') {
                $(canvas).css('left', ((canvas.width / 2) - urls[id].offset_x * 1.27) + 'px');
            } else if (id == 'pants') {
                $(canvas).css('left', ((canvas.width / 2) - urls[id].offset_x * 1.81) + 'px');
            } else if (id == 'shoes') {
                $(canvas).css('left', ((canvas.width / 2)) - urls[id].offset_x * 0.70 + 'px');
            } else if (id == 'hands') {
                $(canvas).css('left', ((canvas.width / 2)) - urls[id].offset_x * 0.5 + 'px');
            } else {
                $(canvas).css('left', ((canvas.width / 2) + urls[id].offset_x) + 'px');
            }

            $(this).css('z-index', urls[id].z_index);

            $(canvas).css('top', (urls[id].offset_y) + 'px');
            img.onload = function () {
                if (id == 'shoes') {
                    canvas.width = canvas.offsetWidth;
                    canvas.height = this.naturalHeight;
                    ctx.save();
                    ctx.scale(-1, 1);
                    ctx.translate(-img.width, 0);
                    ctx.drawImage(img, -img.width + urls[id].offset_x, 0);
                    ctx.restore();
                    ctx.drawImage(img, img.width + urls[id].offset_x, 0);
                } else if (id == 'sleeves') {
                    canvas.width = canvas.offsetWidth;
                    canvas.height = this.naturalHeight;
                    ctx.save();
                    ctx.scale(-1, 1);
                    ctx.translate(-img.width, 0);
                    ctx.drawImage(img, -img.width - (172 - img.width) + img.width - 35, 0);
                    ctx.restore();
                    ctx.drawImage(img, img.width + (172 - img.width) + urls[id].offset_x, 0);
                } else if (id == 'pants') {
                    canvas.width = canvas.offsetWidth;
                    canvas.height = this.naturalHeight;
                    ctx.save();
                    ctx.scale(-1, 1);
                    ctx.translate(-img.width, 0);
                    ctx.drawImage(img, -img.width - (111 - img.width) + img.width - 66, 0);
                    ctx.restore();
                    ctx.drawImage(img, img.width + (111 - img.width) + urls[id].offset_x, 0);
                } else if (id == 'hands') {
                    canvas.width = canvas.offsetWidth;
                    canvas.height = this.naturalHeight;
                    ctx.save();
                    ctx.scale(-1, 1);
                    ctx.translate(-img.width, 0);
                    ctx.drawImage(img, -img.width, 0);
                    ctx.restore();
                    ctx.drawImage(img, img.width + urls[id].offset_x, 0);
                } else {
                    canvas.width = canvas.offsetWidth;
                    canvas.height = this.naturalHeight;
                    ctx.clearRect(0, 0, this.naturalWidth, this.naturalHeight);
                    ctx.drawImage(this, 0, 0, this.naturalWidth, this.naturalHeight);
                }
            }
        });
    })
}

$('ul.tabs .tab-link-outer').click(function () {
    var tab_id = $(this).attr('data-tab');

    $('ul.tabs .tab-link-outer').removeClass('current');
    $('.tab-content').removeClass('current');

    $(this).addClass('current');
    $("#" + tab_id).addClass('current');
});

$('.tab-link').click(function () {
    var tab_id = $(this).attr('data-tab');

    $('.tab-link').removeClass('current');
    $('.tab-content-inner').removeClass('current');

    $(this).addClass('current');
    $("#" + tab_id).addClass('current');
});

$(document).on('click', '.tab-content .selectable', function () {
    var img = new Image();
    var canvas = this;
    var id = this.getAttribute('data-category');
    var canvas = $('#' + id)[0];
    var ctx = canvas.getContext('2d');

    img.src = this.src;
    user_urls[id].url = img.src;

    if (id == 'hair') {
        $(canvas).css('top', (img.height / 10) + 'px');
    }
    else
        $(this).css('top', (urls[id].offset_y + img.naturalHeight) + 'px');

    if (id == 'sleeves') {
        $(this).css('left', ((canvas.width / 2) - (urls[id].offset_x * 1.27)) + 'px');
    } else if (id == 'pants') {
        $(this).css('left', ((canvas.width / 2) - urls[id].offset_x * 1.81) + 'px');
    } else if (id == 'shoes') {
        $(this).css('left', ((canvas.width / 2)) - urls[id].offset_x * 0.70 + 'px');
    } else if (id == 'hands') {
        $(this).css('left', ((canvas.width / 2)) - urls[id].offset_x * 0.5 + 'px');
    } else {
        $(this).css('left', ((canvas.width / 2) + urls[id].offset_x) + 'px');
    }
    $(this).css('z-index', urls[id].z_index);

    img.onload = function () {
        if (id == 'shoes') {
            canvas.width = canvas.offsetWidth;
            canvas.height = this.naturalHeight;
            ctx.save();
            ctx.scale(-1, 1);
            ctx.translate(-img.width, 0);
            ctx.drawImage(img, -img.width + urls[id].offset_x, 0);
            ctx.restore();
            ctx.drawImage(img, img.width + urls[id].offset_x, 0);
        } else if (id == 'sleeves') {
            canvas.width = canvas.offsetWidth;
            canvas.height = this.naturalHeight;
            ctx.save();
            ctx.scale(-1, 1);
            ctx.translate(-img.width, 0);
            ctx.drawImage(img, -img.width - (172 - img.width) + img.width - 35, 0);
            ctx.restore();
            ctx.drawImage(img, img.width + (172 - img.width) + urls[id].offset_x, 0);
        } else if (id == 'pants') {
            canvas.width = canvas.offsetWidth;
            canvas.height = this.naturalHeight;
            ctx.save();
            ctx.scale(-1, 1);
            ctx.translate(-img.width, 0);
            ctx.drawImage(img, -img.width - (111 - img.width) + img.width - 66, 0);
            ctx.restore();
            ctx.drawImage(img, img.width + (111 - img.width) + urls[id].offset_x, 0);
        } else if (id == 'hands') {
            canvas.width = canvas.offsetWidth;
            canvas.height = this.naturalHeight;
            ctx.save();
            ctx.scale(-1, 1);
            ctx.translate(-img.width, 0);
            ctx.drawImage(img, -img.width, 0);
            ctx.restore();
            ctx.drawImage(img, img.width + urls[id].offset_x, 0);
        } else {
            canvas.width = canvas.offsetWidth;
            canvas.height = this.naturalHeight;
            ctx.clearRect(0, 0, this.naturalWidth, this.naturalHeight);
            ctx.drawImage(this, 0, 0, this.naturalWidth, this.naturalHeight);
        }
    }
});

$('.cancel-avatar').click(function (e) {
    drawAvatar();
});

$('.save-avatar').click(function (e) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        url: '/avatar/save_avatar',
        type: 'POST',
        data: {
            'face': user_urls['face'].url,
            'hair': user_urls['hair'].url,
            'hands': user_urls['hands'].url,
            'shirts': user_urls['shirts'].url,
            'pants': user_urls['pants'].url,
            'sleeves': user_urls['sleeves'].url,
            'shoes': user_urls['shoes'].url,
            'skin': user_urls['skin'].url
        }, success: function (e) {
            $('#success-modal').addClass('modal-active');
            $('#success-modal').css('display', 'block');
            $('#success-modal .modal-dialog').addClass('slide-in');
            $('#success-modal .modal-body').html(e.message);

            if(e.success) {
                $('#success-modal .modal-header').html('¡Éxito!');
            } else {
                $('#success-modal .modal-header').html('Error :(');
            }
        }, error: function (e) {
            console.error(e);
        }
    })
});

$('.btn').click(function (e) {
    if ($(this).attr('data-toggle') != null) {
        $('#' + $(this).attr('data-toggle')).addClass('modal-active');
        $('#' + $(this).attr('data-toggle')).css('display', 'block');
        $('#' + $(this).attr('data-toggle') + ' .modal-dialog').addClass('slide-in');
    }

    if ($(this).attr('data-dismiss') != null) {
        $('#' + $(this).attr('data-dismiss') + ' .modal-dialog').removeClass('slide-in');
        $('#' + $(this).attr('data-dismiss') + ' .modal-dialog').addClass('slide-out');
        window.setTimeout(() => {
            $('#' + $(this).attr('data-dismiss')).removeClass('modal-active');
            $('#' + $(this).attr('data-dismiss')).css('display', 'none');
            $('#' + $(this).attr('data-dismiss') + ' .modal-dialog').removeClass('slide-out');
        }, 300);
    }
});

$('.tab-content .not-selectable').click(function (e) {
    if ($(this).attr('data-toggle') != null) {
        $('.modal-header').html('Comprar');
        $('#' + $(this).attr('data-toggle')).addClass('modal-active');
        $('#' + $(this).attr('data-toggle')).css('display', 'block');
        $('#' + $(this).attr('data-toggle') + ' .modal-dialog').addClass('slide-in');

        $('#' + $(this).attr('data-toggle') + ' .modal-body').html('¿Deseas comprar este artículo?<br>Nivel requerido: ' + $(this).attr('data-level') + '<br>Precio: ' + $(this).attr('data-price'));
        $('.confirm-purchase').data('id', this.getAttribute('data-id'));
        $('.confirm-purchase').data('img', this);
        $('.confirm-purchase').data('modal', $(this).attr('data-toggle'));
    }
});

$('.confirm-purchase').click(function (e) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    var id = $(this).data('id');
    var modal = $(this).data('modal');
    var img = $(this).data('img');

    $.ajax({
        url: '/purchase/' + id,
        type: 'POST',
        data: { id: id },
        success: function (e) {
            console.log(e);

            $('#' + modal).addClass('modal-active');
            $('#' + modal).css('display', 'block');
            $('#' + modal + ' .modal-dialog').addClass('slide-in');

            if (e.success) {
                $('.modal-header').html('¡Éxito!');
                $('#' + modal + ' .modal-dialog').removeClass('slide-in');
                $('#' + modal + ' .modal-dialog').addClass('slide-out');
                window.setTimeout(() => {
                    $('#' + modal).removeClass('modal-active');
                    $('#' + modal).css('display', 'none');
                    $('#' + modal + ' .modal-dialog').removeClass('slide-out');
                }, 300);
                $('.user-money').html('Dinero: ' + e.money + '  <i class="fas fa-coins">');
                $(img).removeClass('not-selectable');
                $(img).addClass('selectable');
                $(img).removeAttr('data-toggle');
            } else {
                $('.modal-header').html('¡Error! :(');
            }

            $('.modal-body').html(e.message);
        }, error: function (e) {
            console.error(e);
        }
    })
});

$(document).ready(function () {
    drawAvatar();
});