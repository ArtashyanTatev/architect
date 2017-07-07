<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title"></h4>
</div>
<form action="{{route('newest_releases')}}" method="post" class="formImage" enctype="multipart/form-data">

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


        <div class="row" style="margin-top: 35px">
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
                <input type="text" name="header_hy" value="{{$res->header_hy}}">
            </div>
            <div class="span3">
                <input type="text" name="header_ru" value="{{$res->header_ru}}">
            </div>
            <div class="span3">
                <input type="text" name="header_en" value="{{$res->header_en}}">
            </div>
        </div>


        <div class="row" style="margin-top: 35px">
            <div class="span3">
                <span class="js-fileName"><b>Description AM</b></span>
            </div>
            <div class="span3">
                <span class="js-fileName"><b>Description RU</b></span>
            </div>
            <div class="span3">
                <span class="js-fileName"><b>Description EN</b></span>
            </div>
        </div>

        <div class="row">
            <div class="span3">
                <textarea name="description_hy">{{$res->description_hy}}</textarea>
            </div>
            <div class="span3">
                <textarea name="description_ru">{{$res->description_ru}}</textarea>
            </div>
            <div class="span3">
                <textarea name="description_en">{{$res->description_en}}</textarea>
            </div>
        </div>

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

    <div class="modal-footer">
        <button type="submit" class="btn btn-default modal-btn">Save</button>
    </div>


    {{csrf_field()}}
    </div>

</form>


<script>
    $uploadCrop = jQuery(".upload-demo2").croppie({
        enableExif: true,
        viewport: {
            width: 400,
            height: 300
        },
        boundary: {
            width: 433,
            height: 333
        }
    });
    w = 1000;
    h = 1000;
</script>
