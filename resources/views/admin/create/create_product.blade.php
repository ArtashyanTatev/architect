        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title"></h4>
        </div>
        <form action="{{route('create_product')}}" method="post" enctype="multipart/form-data">

        <div class="modal-body">
                <div class="row">
                    <div class="span9">
                        <div class="block">

                            <div class="span3" style="margin-right:7%"></div>
                            <div class="span3">
                                <label class="button" for="images">Upload Images</label>
                                <input type="file" name="image[]" id="images" data-name="c" class="image"
                                       multiple="multiple"/>
                            </div>




                            <div id="multiple-file-preview" style="margin-left: 10px;">
                                <div class="clear-both">
                                    <ul id="sortable" data-xname="c" class="sort"></ul>
                                </div>
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
                    <input type="text" name="title_hy">
                </div>
                <div class="span3">
                    <input type="text" name="title_ru">
                </div>
                <div class="span3">
                    <input type="text" name="title_en">
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
                    <textarea name="description_hy"></textarea>
                </div>
                <div class="span3">
                    <textarea name="description_ru"></textarea>
                </div>
                <div class="span3">
                    <textarea name="description_en"></textarea>
                </div>
            </div>


        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-default modal-btn">Create</button>
        </div>

            {{csrf_field()}}
        </form>