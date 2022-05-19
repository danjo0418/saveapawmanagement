<!-- The Modal -->
<div class="modal" id="deactivate">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Inactive User</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <p>After this request <strong>{{ ucfirst($details->fname).' '.ucfirst($details->lname) }}</strong> has no access on website. Would you like to continue? <i>click the <span class="text-danger">Inactive</span> button</i>.</p>
                <form method="POST" action="{{ URL::to('status') }}">
                    {{  csrf_field() }}
                    <input type="hidden" value="{{ $details->id }}" name="userid">
                    <input type="hidden" value="inactive" name="status">
                    <button class="btn btn-danger">Inactive</button>
                </form>
            </div>

        </div>
    </div>
</div>