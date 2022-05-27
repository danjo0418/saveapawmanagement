<!-- The Modal -->
<div class="modal" id="decline">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Decline Pet</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <p>Pet informations are unreliable? If yes, please <i>click the <span class="text-success">Declined</span> button to continue</i>.</p>
                <form method="POST" action="{{ URL::to('petApprove') }}">
                    {{  csrf_field() }}
                    <input type="hidden" value="{{ $detail->id }}" name="petid">
                    <input type="hidden" value="2" name="is_approved">
                    <input type="hidden" value="{{ $detail->user_id }}" name="petowner">
                    <button class="btn btn-warning">Declined</button>
                </form>
            </div>

        </div>
    </div>
</div>