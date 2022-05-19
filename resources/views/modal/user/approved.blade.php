<!-- The Modal -->
<div class="modal" id="approve">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Approved User</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <p>Would you like <strong>{{ ucfirst($details->fname).' '.ucfirst($details->lname) }}</strong> have access on the website? <i>click the <span class="text-success">Approved</span> button to continue</i>.</p>
                <form method="POST" action="{{ URL::to('approved') }}">
                    {{  csrf_field() }}
                    <input type="hidden" value="{{ $details->id }}" name="userid">
                    <input type="hidden" value="active" name="status">
                    <input type="hidden" value="1" name="is_approved">
                    <button class="btn btn-success">Approved</button>
                </form>
            </div>

        </div>
    </div>
</div>