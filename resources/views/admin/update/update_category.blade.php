<div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title"></h4>
        </div>
        <form action="{{route('update_category',['id'=>$res->id])}}" class="formImage" method="post" enctype="multipart/form-data">

        <div class="modal-body">

            <div class="">
                <div class=" text-center" >
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


            <div class="row" style="margin-top:30px">
                <div class="span3">
                    <span class="js-fileName">
                        <b>Name AM</b>
                    </span>
                    </div>
                <div class="span3">
                    <span class="js-fileName">
                        <b>Name RU</b>
                    </span>
                    </div>
                <div class="span3">
                    <span class="js-fileName">
                        <b>Name EN</b>
                    </span>
                    </div>
            </div>
            <div class="row">
                <div class="span3">

                    <input type="text" name="name_hy" value="{{$res->name_hy}}">
                </div>
                <div class="span3">

                    <input type="text" name="name_ru" value="{{$res->name_ru}}">
                </div>
                <div class="span3">

                    <input type="text" name="name_en" value="{{$res->name_en}}">
                </div>
            </div>


        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-default modal-btn">Save</button>
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
            width: 317,
            height: 370
        },
        boundary: {
            width: 347,
            height: 400
        }
    });
    w = 317;
    h = 347;

    jQuery( ".formImage" ).validate({
        rules: {
            file: {
                accept: "image/jpeg, image/jpg, image/png, image/bmp, image/gif, image/svg"
            }
        }
    });
</script>
