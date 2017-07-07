<div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">
            Are you sure you want to delete this news?
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger delete_news" data-status="new_{{$res->id}}" data-dismiss="modal">Delete</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
    </div>

</div>