        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title" style="padding-bottom: 10px;"></h4>
        </div>

        <form action="{{route('aboutus_1')}}" method="post" class="formImage" enctype="multipart/form-data">

        <div class="modal-body">

            <div class="">
                <div class=" text-center" >
                    <div class="col-sm">
                        <input type="file" name="file" id="file" class="upload2" >

                    </div>
                    <div class="col-md text-center">
                        <div class="upload-demo2">
                            <span class="span_reset_file"><i class="fa fa-times" aria-hidden="true"></i></span>
                        </div>
                    </div>
                </div>
            </div>

                <div class="row" style="margin-top: 30px;">
                    <div class="span3">
                        <span class="js-fileName"><b>Title AM</b></span>
                    </div>   <div class="span3">
                        <span class="js-fileName"><b>Title RU</b></span>
                    </div>   <div class="span3">
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

                <div class="row">
                    <div class="span3">
                        <span class="js-fileName"><b>Header AM</b></span>
                    </div>   <div class="span3">
                        <span class="js-fileName"><b>Header RU</b></span>
                    </div>   <div class="span3">
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


                <div class="row">
                    <div class="span3">
                        <span class="js-fileName"><b>Description AM</b></span>
                    </div>   <div class="span3">
                        <span class="js-fileName"><b>Description RU</b></span>
                    </div>   <div class="span3">
                        <span class="js-fileName"><b>Description EN</b></span>
                    </div>
                </div>

                <div class="row">
                    <div class="span3">
                        <textarea name="decsription_hy">{{$res->decsription_hy}}</textarea>
                    </div><div class="span3">
                        <textarea name="decsription_ru">{{$res->decsription_ru}}</textarea>
                    </div><div class="span3">
                        <textarea name="decsription_en">{{$res->decsription_en}}</textarea>
                    </div>
                </div>


                <div class="row">
                    <div class="span3">
                        <span class="js-fileName"><b>N1 AM</b></span>
                    </div>   <div class="span3">
                        <span class="js-fileName"><b>N1 RU</b></span>
                    </div>   <div class="span3">
                        <span class="js-fileName"><b>N1 EN</b></span>
                    </div>
                </div>

                <div class="row">
                    <div class="span3">
                        <input type="text" name="l1_hy" value="{{$res->l1_hy}}">
                    </div>
                    <div class="span3">
                        <input type="text" name="l1_ru" value="{{$res->l1_ru}}">
                    </div>
                    <div class="span3">
                        <input type="text" name="l1_en" value="{{$res->l1_en}}">
                    </div>
                </div>

                <div class="row">
                    <div class="span3">
                        <span class="js-fileName"><b>N2 AM</b></span>
                    </div>   <div class="span3">
                        <span class="js-fileName"><b>N2 RU</b></span>
                    </div>   <div class="span3">
                        <span class="js-fileName"><b>N2 EN</b></span>
                    </div>
                </div>

                <div class="row">
                    <div class="span3">
                        <input type="text" name="l2_hy" value="{{$res->l2_hy}}">
                    </div>
                    <div class="span3">
                        <input type="text" name="l2_ru" value="{{$res->l2_ru}}">
                    </div>
                    <div class="span3">
                        <input type="text" name="l2_en" value="{{$res->l2_en}}">
                    </div>
                </div>



                <div class="row">
                    <div class="span3">
                        <span class="js-fileName"><b>N3 AM</b></span>
                    </div>   <div class="span3">
                        <span class="js-fileName"><b>N3 RU</b></span>
                    </div>   <div class="span3">
                        <span class="js-fileName"><b>N3 EN</b></span>
                    </div>
                </div>

                <div class="row">
                    <div class="span3">
                        <input type="text" name="l3_hy" value="{{$res->l3_hy}}">
                    </div>
                    <div class="span3">
                        <input type="text" name="l3_ru" value="{{$res->l3_ru}}">
                    </div>
                    <div class="span3">
                        <input type="text" name="l3_en" value="{{$res->l3_en}}">
                    </div>
                </div>


                <div class="row">
                    <div class="span3">
                        <span class="js-fileName"><b>N4 AM</b></span>
                    </div>   <div class="span3">
                        <span class="js-fileName"><b>N4 RU</b></span>
                    </div>   <div class="span3">
                        <span class="js-fileName"><b>N4 EN</b></span>
                    </div>
                </div>

                <div class="row">
                    <div class="span3">
                        <input type="text" name="l4_hy" value="{{$res->l4_hy}}">
                    </div>
                    <div class="span3">
                        <input type="text" name="l4_ru" value="{{$res->l4_ru}}">
                    </div>
                    <div class="span3">
                        <input type="text" name="l4_en" value="{{$res->l4_en}}">
                    </div>
                </div>


                <div class="row">
                    <div class="span3">
                        <span class="js-fileName"><b>N5 AM</b></span>
                    </div>   <div class="span3">
                        <span class="js-fileName"><b>N5 RU</b></span>
                    </div>   <div class="span3">
                        <span class="js-fileName"><b>N5 EN</b></span>
                    </div>
                </div>

                <div class="row">
                    <div class="span3">
                        <input type="text" name="l5_hy" value="{{$res->l5_hy}}">
                    </div>
                    <div class="span3">
                        <input type="text" name="l5_ru" value="{{$res->l5_ru}}">
                    </div>
                    <div class="span3">
                        <input type="text" name="l5_en" value="{{$res->l5_en}}">
                    </div>
                </div>

                <div class="row">
                    <div class="span3">
                        <span class="js-fileName"><b>N6 AM</b></span>
                    </div>   <div class="span3">
                        <span class="js-fileName"><b>N6 RU</b></span>
                    </div>   <div class="span3">
                        <span class="js-fileName"><b>N6 EN</b></span>
                    </div>
                </div>

                <div class="row">
                    <div class="span3">
                        <input type="text" name="l6_hy" value="{{$res->l6_hy}}">
                    </div>
                    <div class="span3">
                        <input type="text" name="l6_ru" value="{{$res->l6_ru}}">
                    </div>
                    <div class="span3">
                        <input type="text" name="l6_en" value="{{$res->l6_en}}">
                    </div>
                </div>



                <div class="row">
                    <div class="span3">
                        <span class="js-fileName"><b>N7 AM</b></span>
                    </div>   <div class="span3">
                        <span class="js-fileName"><b>N7 RU</b></span>
                    </div>   <div class="span3">
                        <span class="js-fileName"><b>N7 EN</b></span>
                    </div>
                </div>

                <div class="row">
                    <div class="span3">
                        <input type="text" name="l7_hy" value="{{$res->l7_hy}}">
                    </div>
                    <div class="span3">
                        <input type="text" name="l7_ru" value="{{$res->l7_ru}}">
                    </div>
                    <div class="span3">
                        <input type="text" name="l7_en" value="{{$res->l7_en}}">
                    </div>
                </div>


            <hr>
            <div class="span2"></div>
            <div class="span4" style="padding-left: 25px;">
                    <span class="row">
                        <b>Enter Font Size for Title</b>
                    </span>
                <input type="number" class="" name="fs" value="{{$res->fs}}">
            </div>
            <div class="span3"></div>


            <input type="hidden" name="image">
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-default modal-btn">Save</button>
        </div>



        {{csrf_field()}}
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

    jQuery( ".formImage" ).validate({
        rules: {
            file: {
                accept: "image/jpeg, image/jpg, image/png, image/bmp, image/gif, image/svg"
            }
        }
    });
</script>
 