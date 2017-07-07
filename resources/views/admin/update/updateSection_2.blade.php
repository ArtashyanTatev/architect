<style>
    .updateModal{
        width: 80% !important;
        margin-left: -40% !important;
        color: rgba(0, 0, 0, 0.74);
        text-align: center;
    }
</style>
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title"></h4>
        </div>

        <form action="{{route('update_2')}}" method="post" class="formImage" enctype="multipart/form-data">
            <div class="modal-body">


               <div class="row">

                   <div class="span5 pull-right">
                       <div class=" text-center">
                           <div class="col-sm">
                               <input type="file" name="file1" id="file" class="upload3">
                           </div>
                           @if($section_2->logo)
                               <a href = "{{route('delete_logo')}}" >
                                   <i class="icon-remove-sign pull-right delete-icon" title="delete image"></i>
                               </a>
                           @endif
                           <div class="col-md text-center">
                               <div class="upload-demo3" style="width:350px; position: relative;">
                                   {{--<span class="span_reset_file1"><i class="fa fa-times" aria-hidden="true"></i></span>--}}
                               </div>
                           </div>
                       </div>
                   </div>


                   <div class="span5 pull-right">
                       <div class=" text-center">
                           <div class="col-sm">
                               <input type="file" name="file" id="file" class="upload2">
                           </div>
                           <div class="col-md text-center">
                               <div class="upload-demo2" style="width:350px; position: relative;">
                                   <span class="span_reset_file"><i class="fa fa-times" aria-hidden="true"></i></span>
                               </div>
                           </div>
                       </div>
                   </div>


            </div>


                <div class="row" style="margin-top: 30px;">
                    <div class="span4" style="display: inline-block;">
                        <span class="js-fileName">
                            <b>Title AM</b>
                        </span>
                    </div>
                    <div class="span3" style="display: inline-block;">
                        <span class="js-fileName">
                            <b>Title RU</b>
                        </span>
                    </div>
                    <div class="span3" style="display: inline-block;">
                        <span class="js-fileName">
                           <b> Title EN</b>
                        </span>
                    </div>
                </div>

                <div class="row">
                    <div class="span4" style="display: inline-block;">
                        <input type="text" name="title_hy" value="{{$section_2->title_hy}}">
                    </div>
                    <div class="span3" style="display: inline-block;">
                        <input type="text" name="title_ru" value="{{$section_2->title_ru}}">
                    </div>
                    <div class="span3" style="display: inline-block;">
                        <input type="text" name="title_en" value="{{$section_2->title_en}}">
                    </div>
                </div>


                <div class="row" style="margin-top:30px">
                    <div class="span4">
                        <span class="js-fileName">
                            <b> Description AM </b>
                        </span>
                    </div>
                    <div class="span3">
                        <span class="js-fileName">
                             <b>  Description RU </b>
                        </span>
                    </div>
                    <div class="span3">
                        <span class="js-fileName">
                            <b> Description EN </b>
                        </span>
                    </div>
                </div>


                <div class="row">
                    <div class="span4">
                        <textarea name="description_hy">{{$section_2->description_hy}}</textarea>
                    </div>
                    <div class="span3">
                        <textarea name="description_ru">{{$section_2->description_ru}}</textarea>
                    </div>
                    <div class="span3">
                        <textarea name="description_en">{{$section_2->description_en}}</textarea>
                    </div>
                </div>


                <hr>
                <div class="span3"></div>
                <div class="span4" style="padding-left: 25px;">
                    <span class="row">
                        <b>Enter Font Size for Title</b>
                    </span>
                    <input type="number" class="" name="fs" value="{{$section_2->fs}}">
                </div>
                <div class="span3"></div>



            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-default modal-btn">Save</button>
            </div>

            <input type="hidden" name="image">
            <input type="hidden" name="image1">
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


    $uploadCrop1 = jQuery(".upload-demo3").croppie({
        enableExif: true,
        viewport: {
            width: 146,
            height: 105
        },
        boundary: {
            width: 200,
            height: 150
        }
    });
    w1 = 439;
    h1 = 316;

    jQuery( ".formImage" ).validate({
        rules: {
            file: {
                accept: "image/jpeg, image/jpg, image/png, image/bmp, image/gif, image/svg"
            },
            file1: {
                accept: "image/jpeg, image/jpg, image/png, image/bmp, image/gif, image/svg"
            }
        }
    });
</script>