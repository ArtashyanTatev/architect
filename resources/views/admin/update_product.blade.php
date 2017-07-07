        <div class="modal-body">
            <form action="{{route('update_product')}}" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <label class="button" for="images">Upload Images</label>
                            <input type="file" name="image[]" id="images" data-name="c" class="image"
                                   multiple="multiple"/>
                            <div id="multiple-file-preview">

                                <div class="clear-both">
                                    <ul id="sortable" data-xname="c" class="sort">

                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <span class="js-fileName">Header AM</span>
                    <input type="text" name="title_hy">
                </div>
                <div class="col-sm-4">
                    <span class="js-fileName">Header RU</span>
                    <input type="text" name="title_ru">
                </div>
                <div class="col-sm-4">
                    <span class="js-fileName">Header EN</span>
                    <input type="text" name="title_en">
                </div>

                <div class="col-sm-4">
                    <span class="js-fileName">Text AM</span>
                    <textarea name="description_hy"></textarea>
                </div>
                <div class="col-sm-4">
                    <span class="js-fileName">Text RU</span>
                    <textarea name="description_ru"></textarea>
                </div>
                <div class="col-sm-4">
                    <span class="js-fileName">Text EN</span>
                    <textarea name="description_en"></textarea>
                </div>

                <input type="submit" class="btn btn-info" value="Create">
                {{csrf_field()}}
            </form>

        </div>

