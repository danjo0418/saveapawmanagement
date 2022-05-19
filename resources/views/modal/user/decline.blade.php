<!-- The Modal -->
<div class="modal" id="decline">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Decline User</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <p><strong>{{ ucfirst($details->fname).' '.ucfirst($details->lname) }}</strong> informations are not reliable? If, Yes please <i>click the <span class="text-warning">Declined</span> button to continue</i>.</p>
                <form method="POST" action="{{ URL::to('decline') }}">
                    {{  csrf_field() }}
                    <input type="hidden" value="{{ $details->id }}" name="userid">
                    <button class="btn btn-warning">Declined</button>
                </form>
            </div>

        </div>
    </div>
</div>