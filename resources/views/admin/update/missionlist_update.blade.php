<div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title"></h4>
        </div>
        <form action="{{route('missionlist_update',['id'=>$res->id])}}" method="post" enctype="multipart/form-data">

            <div class="modal-body">

                <div class="col-sm-4">

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


                </div>
            </div>

            <div class="modal-footer">
                <button type="submit" class="btn btn-default modal-btn">Save</button>
            </div>

            {{csrf_field()}}

        </form>
    </div>

</div>