<div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title"></h4>
        </div>

        <form action="{{route('update_3')}}" method="post" enctype="multipart/form-data">

            <div class="modal-body">

                <div class="col-sm-4">

                    <div class="row" style="margin-top:30px">
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
                            <input type="text" name="title_hy" value="{{$section_3->title_hy}}">
                        </div>
                        <div class="span3">
                            <input type="text" name="title_ru" value="{{$section_3->title_ru}}">
                        </div>
                        <div class="span3">
                            <input type="text" name="title_en" value="{{$section_3->title_en}}">
                        </div>
                    </div>

                    <hr>
                    <div class="span2"></div>
                    <div class="span4" style="padding-left: 25px;">
                    <span class="row">
                        <b>Enter Font Size for Title</b>
                    </span>
                        <input type="number" class="" name="fs" value="{{$section_3->fs}}">
                    </div>
                    <div class="span3"></div>

                </div>


            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-default modal-btn">Save</button>
            </div>

            {{csrf_field()}}

        </form>
    </div>

</div>