<div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title"></h4>
        </div>

        <form action="{{route('create_news')}}" method="post"  class="formImage" enctype="multipart/form-data">


        <div class="modal-body">



            <div class="">
                <div class=" text-center">
                    <div class="col-sm">
                        <input type="file" name="file" id="file" class="upload2">
                    </div>
                    <div class="col-md text-center">
                        <div class="upload-demo2">
                            <span class="span_reset_file"><i class="fa fa-times" aria-hidden="true"></i></span>
                        </div>
                    </div>
                </div>
            </div>

                <div class="row" style="margin-top:30px;">
                    <div class="span3">
                        <span class="js-fileName"><b>Header AM</b></span>
                    </div>
                    <div class="span3">
                        <span class="js-fileName"><b>Header RU</b></span>
                    </div>
                    <div class="span3">
                        <span class="js-fileName"><b>Header EN</b></span>
                    </div>
                </div>
                <div class="row">
                    <div class="span3">
                        <input type="text" name="header_hy">
                    </div>
                    <div class="span3">
                        <input type="text" name="header_ru">
                    </div>
                    <div class="span3">
                        <input type="text" name="header_en">
                    </div>
                </div>


                <div class="row">
                    <div class="span3">
                        <span class="js-fileName"><b>Text AM</b></span>
                    </div>
                    <div class="span3">
                        <span class="js-fileName"><b>Text RU</b></span>
                    </div>
                    <div class="span3">
                        <span class="js-fileName"><b>Text EN</b></span>
                    </div>
                </div>
                <div class="row">
                    <div class="span3">
                        <textarea name="text_hy"></textarea>
                    </div>
                    <div class="span3">
                        <textarea name="text_ru"></textarea>
                    </div>
                    <div class="span3">
                        <textarea name="text_en"></textarea>
                    </div>
                </div>

        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-default modal-btn">Create</button>
        </div>

            <input type="hidden" name="image">
            {{csrf_field()}}
        </form>

    </div>

</div>

<script>
    $uploadCrop = jQuery(".upload-demo2").croppie({
        enableExif: true,
        viewport: {
            width: 300,
            height: 300
        },
        boundary: {
            width: 400,
            height: 400
        }
    });
    w = 1000;
    h = 1000;

    jQuery( ".formImage" ).validate({
        rules: {
            file: {
                accept: "image/jpeg, image/jpg, image/png, image/bmp, image/gif, image/svg"
            }
        }
    });
</script>