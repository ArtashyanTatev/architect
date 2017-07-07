
jQuery(document).on('submit', '#commentform',function (e) {

    e.preventDefault();

    if(jQuery('#author').val() == '' || jQuery('#comment').val() == ''){
        jQuery('#error_box').css('display','block');
    } else {
        jQuery.ajax({
            url: jQuery('#commentform').attr('action'),
            type: jQuery('#commentform').attr('method'),
            data: jQuery('#commentform').serialize(),
            success:function (e) {
                if(e['comment']){
                    jQuery('#comments').prepend(
                        // '<strong>'+e["email"]+'</strong>'
                        '<h5> <i class="fa fa-user" aria-hidden="true"></i>'
                        + "   " + e["name"] +
                        '</h5> <p style="display: block;padding-left: 25px;">'
                        + e["comment"] +
                        '</p>  <h4> (Site)'
                        + e["site"] +
                        '</h4>'
                    )
                }

            }
        })
    }


});



