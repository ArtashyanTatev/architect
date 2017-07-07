<div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title"></h4>
        </div>

        <form action="{{route('update_product')}}" method="post" enctype="multipart/form-data">

        <div class="modal-body">


                <div class="row">
                    <div class="span9">
                        <div class="block">

                            <div class="span3" style="margin-right:7%"></div>
                            <label class="button"  for="images">Upload Images</label>
                            <input type="file" name="image[]" id="images" data-name="updateProduct" class="image"
                                   multiple="multiple"/>


                            <div id="multiple-file-preview">

                                <div class="clear-both">
                                    <ul id="sortable" data-xname="updateProduct" class="sort">

                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>



                <div class="row">
                    <div class="span8">
                        <div id="multiple-file-preview">
                            <div class="clear-both">
                                <ul id="sortable" class="sort_update">
                                    @php($img = 0)
                                    @foreach($product->images as $image)
                                        <li class="ui-state-default" data-order="0" data-target="productImage_{{$img}}"
                                            data-prod="{{$image->id}}"
                                            data-href_delete="{{route('delete_product')}}" data-key="image">
                                            <img src="{{asset('img/'.$image->image)}}" style="width:100%;"/>
                                             <span class="iconDeleteProductImage" data-status="productImage_{{$img}}">
                                                <i class="fa fa-trash fa-2x"></i>
                                            </span>
                                            <input type="hidden" name="image_name[]" value="{{$image->image}}">
                                        </li>
                                        @php($img ++)
                                    @endforeach
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>



                <div class="row" style="margin-top: 35px;">
                    <div class="span3" style="display: inline-block;">
                        <span class="js-fileName"><b>Header AM</b></span>
                    </div>
                    <div class="span3" style="display: inline-block;">
                        <span class="js-fileName"><b>Header RU</b></span>
                    </div>
                    <div class="span3" style="display: inline-block;">
                        <span class="js-fileName"><b>Header EN</b></span>
                    </div>
                </div>

                <div class="row">
                    <div class="span3" style="display: inline-block;">
                        <input type="text" name="title_hy" value="{{$product->title_hy}}">
                    </div>
                    <div class="span3" style="display: inline-block;">
                        <input type="text" name="title_ru" value="{{$product->title_ru}}">
                    </div>
                    <div class="span3" style="display: inline-block;">
                        <input type="text" name="title_en" value="{{$product->title_en}}">
                    </div>
                </div>


                <div class="row">
                    <div class="span3" style="display: inline-block;">
                        <span class="js-fileName"><b>Text AM</b></span>
                    </div>
                    <div class="span3" style="display: inline-block;">
                        <span class="js-fileName"><b>Text RU</b></span>
                    </div>
                    <div class="span3" style="display: inline-block;">
                        <span class="js-fileName"><b>Text EN</b></span>
                    </div>
                </div>

                <div class="row">
                    <div class="span3" style="display: inline-block;">
                        <textarea name="description_hy">{{$product->description_hy}}</textarea>
                    </div>
                    <div class="span3" style="display: inline-block;">
                        <textarea name="description_ru">{{$product->description_ru}}</textarea>
                    </div>
                    <div class="span3" style="display: inline-block;">
                        <textarea name="description_en">{{$product->description_en}}</textarea>

                    </div>
                </div>


                <input type="hidden" name="id" value="{{$product->id}}">

        </div>

        <div class="modal-footer">
            <button type="submit" class="btn btn-default modal-btn">Save</button>
            {{--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>--}}
        </div>

            {{csrf_field()}}
        </form>
    </div>

</div>