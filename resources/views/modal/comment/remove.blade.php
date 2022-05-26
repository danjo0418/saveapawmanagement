<!-- The Modal -->
<div class="modal" id="commentRemoved">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Remove Comment</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <p>Hi, <strong>{{ Auth::user()->fname }}</strong>! are you sure you want to remove your comment? just click the removed button.</p>
                <form method="POST" action="">
                    {{  csrf_field() }}
                    <input type="text" class="js-commentid" name="commentid">
                    <button class="btn btn-primary">Removed</button>
                </form>
            </div>

        </div>
    </div>
</div>