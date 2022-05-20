<!-- The Modal -->
<div class="modal" id="adoptDeclined">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Adoption Request</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <p>Lorem ipsum, dolor sit amet, consectetur adipisicing elit. Suscipit optio quam doloribus sunt quis fugit impedit pariatur cumque praesentium a itaque quaerat earum amet ducimus quisquam laboriosam similique, deserunt consectetur!</p>
                <form method="POST" action="{{ URL::to('adoptDeclined') }}">
                    {{  csrf_field() }}
                    <input type="hidden" class="js-adoptid" name="adoptid">
                    <button class="btn btn-danger">Declined</button>
                </form>
            </div>

        </div>
    </div>
</div>