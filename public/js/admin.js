var token = jQuery("meta[name='csrf-token']").attr('content');


jQuery('.update_section').click(function () {
    jQuery('#modalContent').html('');
    var url = jQuery(this).data('update_href');
    var id = jQuery(this).data('id');
    jQuery.ajax({
        url: url,
        type: 'post',
        data: {key: 'one', id: id, _token: token},
        success: function (e) {
            jQuery('#modalContent').html(e);
            jQuery('.sort, #sortable').sortable();
            flag = false;
        }
    })

});

//  ==================== CREATE GENERAL SLIDE =======================//

function readURL(input, img) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            jQuery('img[data-image="' + img + '"]').attr('src', e.target.result);
            if (jQuery('img[data-image="' + img + '"]').hasClass('display_none')) {
                jQuery('img[data-image="' + img + '"]').fadeIn();
            }
        }

        reader.readAsDataURL(input.files[0]);

    }

}

jQuery(document).on('change', '.oneImageFile', function () {
    var img = jQuery(this).data('image');
    readURL(this, img);
});


//  ==================== INPUT FILE =======================//
// (function () {

jQuery(document).on('click', '.js-labelFile', function () {
    jQuery('.input-file').each(function () {
        var jQueryinput = jQuery(this),
            jQuerylabel = jQueryinput.next('.js-labelFile'),
            labelVal = jQuerylabel.html();

        jQueryinput.on('change', function (element) {
            var fileName = '';
            if (element.target.value) fileName = element.target.value.split('\\').pop();
            fileName ? jQuerylabel.addClass('has-file').find('.js-fileName').html(fileName) : jQuerylabel.removeClass('has-file').html(labelVal);
        });
    });
});

// })();

jQuery(document).on('click', '.delete_news', function () {
    parent = jQuery(this).data('status');
    url = jQuery('a[data-delete="' + parent + '"]').data('update_href');
    id = jQuery('a[data-delete="' + parent + '"]').data('id');
    jQuery.ajax({
        url: url,
        type: 'post',
        data: {id: id, _token: token},
        success: function (e) {
            if (e == 1) {
                jQuery('[data-target="' + parent + '"]').fadeOut(1000, function () {
                    jQuery(this).remove();
                });
            }
        }
    })
});

jQuery(function () {
    jQuery(document).on('change', '.image', function (e) {
        this_file = jQuery(this).data('name');
        var files = e.target.files;
        for (var i = 0; i <= files.length; i++) {

            // when i == files.length reorder and break
            if (i == files.length) {
                // need timeout to reorder beacuse prepend is not done
                setTimeout(function () {
                    reorderImages();
                }, 100);
                break;
            }
            var file = files[i];
            var reader = new FileReader();
            jQuery('.sort').html('');
            reader.onload = (function (file) {
                return function (event) {
                    jQuery('.sort[data-xname="' + this_file + '"]').prepend('<li class="ui-state-default" data-order=0 data-id="' + file.lastModified + '"><img src="' + event.target.result + '" style="width:100%;" /> <div class="order-number"></div></li>');
                };
            })(file);
            reader.readAsDataURL(file);
        }// end for;
    });

    jQuery('.sort, #sortable').sortable();
    jQuery('.sort, #sortable').disableSelection();
    jQuery('.sort, #sortable').on('sortbeforestop', function (event) {
        reorderImages();
    });
    function reorderImages() {
        var images = jQuery('.sort');
        var i = 0, nrOrder = 0;
        for (i; i < images.length; i++) {
            var image = jQuery(images[i]);
            if (image.hasClass('ui-state-default') && !image.hasClass('ui-sortable-placeholder')) {
                image.attr('data-order', nrOrder);
                var orderNumberBox = image.find('.order-number');
                orderNumberBox.html(nrOrder + 1);
                nrOrder++;
            }
        }
    }
});

jQuery(document).on('click', '.iconDeleteProductImage', function () {
    data = jQuery(this).data('status');
    parent = jQuery('[data-target="' + data + '"]');
    url = parent.data('href_delete');
    key = parent.data('key');
    prod = parent.data('prod');
    if (!flag) {
        parent.append('<div class="dll"><a class="delYes" href="#0">Yes</a> / <a class="delNo" href="#0">No</a></div>')
        flag = true
    }


});

jQuery(document).on('click', '.delNo', function () {
    jQuery('.dll').fadeOut().remove();
    flag = false;
});

jQuery(document).on('click', '.delYes', function () {
    jQuery('.dll').fadeOut().remove();
    flag = false;
    jQuery.ajax({
        url: url,
        type: 'post',
        data: {key: key, prod: prod, _token: token},
        success: function (e) {
            if (e == 1) {
                parent.fadeOut().remove();
            }
        }
    })
});


jQuery(document).on('click', '.delete_product', function () {
    parent = jQuery(this).data('status');
    url = jQuery('a[data-delete="' + parent + '"]').data('update_href');
    id = jQuery('a[data-delete="' + parent + '"]').data('id');
    jQuery.ajax({
        url: url,
        type: 'post',
        data: {id: id, _token: token},
        success: function (e) {
            if (e == 1) {
                jQuery('[data-target="' + parent + '"]').fadeOut(1000, function () {
                    jQuery(this).remove();
                });
            }
        }
    })
});

jQuery('.slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.slider-nav'
});
jQuery('.slider-nav').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    asNavFor: '.slider-for',
    dots: false,
    arrows: true,
    centerMode: true,
    focusOnSelect: true
});

//=============================  IMAGE CROP ========================//




jQuery(document).on("change", '.upload2', function () {
    jQuery(".span_reset_file").fadeIn();
    jQuery(".cr-image").fadeIn();
    var reader = new FileReader();
    reader.onload = function (e) {
        $uploadCrop.croppie("bind", {
            url: e.target.result
        });
    };
    reader.readAsDataURL(this.files[0]);
});



jQuery(document).on("change", '.upload3', function () {

    jQuery(".span_reset_file").fadeIn();
    jQuery(".cr-image").fadeIn();
    var reader = new FileReader();
    reader.onload = function (e) {
        $uploadCrop1.croppie("bind", {
            url: e.target.result
        });
    };
    reader.readAsDataURL(this.files[0]);
});

jQuery(document).on('submit', ".formImage", function (form) {
    form = form;
    $uploadCrop.croppie('result', {
        type: 'canvas',
        size: {
            width: w,
            height: h
        }
    }).then(function (resp) {
        if (jQuery('.upload2').val()) {
            resp = resp;
            jQuery('input[name="image"]').val(resp);
        }
    });
    $uploadCrop1.croppie('result', {
        type: 'canvas',
        size: {
            width: w1,
            height: h1
        }
    }).then(function (resp) {
        if (jQuery('.upload3').val()) {
            resp = resp;
            jQuery('input[name="image1"]').val(resp);
        }
    });
});



jQuery(document).on('click', ".span_reset_file", function () {
    jQuery(".cr-image").fadeOut();
    jQuery('.upload2').val('');
    jQuery('.js-labelFile').removeClass('has-file').find('.js-fileName').text('Change a Image');
    jQuery(this).fadeOut();
});