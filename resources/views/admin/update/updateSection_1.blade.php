        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title"></h4>
        </div>
        <form action="{{route('update_1')}}" method="post" class="formImage" enctype="multipart/form-data">
            <div class="modal-body">

                <div class="row">
                    <div class=" text-center">
                        <div class="col-sm">
                            <input type="file" name="file" id="file" class="upload2"
                                   data-image="imageVarietyUpdate">
                        </div>
                        <div class="col-md text-center">
                            <div class="upload-demo2"  >
                                <span class="span_reset_file"><i class="fa fa-times" aria-hidden="true"></i></span>
                            </div>
                        </div>
                    </div>
                </div>

                {{csrf_field()}}


            </div>

            <div class="modal-footer">
                <button type="submit" class="btn btn-default modal-btn">Save</button>

            </div>
            <input type="hidden" name="image">
        </form>

<script>
    $uploadCrop = jQuery(".upload-demo2").croppie({
        enableExif: true,
        viewport: {
            width: 540,
            height: 250
        },
        boundary: {
            width: 640,
            height: 300
        }
    });
    w = 1920;
    h = 900;

    jQuery( ".formImage" ).validate({
        rules: {
            file: {
                accept: "image/jpeg, image/jpg, image/png, image/bmp, image/gif, image/svg"
            }
        }
    });
</script>
