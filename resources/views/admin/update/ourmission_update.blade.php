<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title"></h4>
</div>

<form action="{{route('ourmission_update')}}" class="formImage" method="post" enctype="multipart/form-data">

    <div class="modal-body">
        <div class="col-sm-4">

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


            <div class="row" style="margin-top: 35px">
                <div class="span3">
                    <span class="js-fileName"><b>Title AM</b></span>
                </div>
                <div class="span3">
                    <span class="js-fileName"><b>Title RU</b></span>
                </div>
                <div class="span3">
                    <span class="js-fileName"><b>Title EN</b></span>
                </div>
            </div>


            <div class="row">
                <div class="span3">
                    <input type="text" name="title_hy" value="{{$res->title_hy}}">
                </div>
                <div class="span3">
                    <input type="text" name="title_ru" value="{{$res->title_ru}}">
                </div>
                <div class="span3">
                    <input type="text" name="title_en" value="{{$res->title_en}}">
                </div>
            </div>

            {{csrf_field()}}

            <input type="hidden" name="image">


            <hr>
            <div class="span2"></div>
            <div class="span4" style="padding-left: 25px;">
                    <span class="row">
                        <b>Enter Font Size for Title</b>
                    </span>
                <input type="number" class="" name="fs" value="{{$res->fs}}">
            </div>
            <div class="span3"></div>


        </div>
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-default modal-btn">Save</button>
    </div>


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

    jQuery(".formImage").validate({
        rules: {
            file: {
                accept: "image/jpeg, image/jpg, image/png, image/bmp, image/gif, image/svg"
            }
        }
    });

</script>