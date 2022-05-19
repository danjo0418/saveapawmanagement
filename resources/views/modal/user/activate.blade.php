<!-- The Modal -->
<div class="modal" id="activate">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Activate User</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <p>Would you like to activate <strong>{{ ucfirst($details->fname).' '.ucfirst($details->lname) }}</strong> ? <i>click the <span class="text-success">Activate</span> button to continue</i>.</p>
                <form method="POST" action="{{ URL::to('status') }}">
                    {{  csrf_field() }}
                    <input type="hidden" value="{{ $details->id }}" name="userid">
                    <input type="hidden" value="active" name="status">
                    <button class="btn btn-success">Activate</button>
                </form>
            </div>
        </div>
    </div>
</div>