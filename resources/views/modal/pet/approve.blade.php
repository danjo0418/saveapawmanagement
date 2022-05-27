<!-- The Modal -->
<div class="modal" id="approve">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Approved Pet</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <p>Pet informations are reliable and trusted? If yes, please <i>click the <span class="text-success">Approved</span> button to continue</i>.</p>
                <form method="POST" action="{{ URL::to('petApprove') }}">
                    {{  csrf_field() }}
                    <input type="hidden" value="{{ $detail->id }}" name="petid">
                    <input type="hidden" value="1" name="is_approved">
                    <input type="hidden" value="{{ $detail->user_id }}" name="petowner">
                    <button class="btn btn-success">Approved</button>
                </form>
            </div>

        </div>
    </div>
</div>