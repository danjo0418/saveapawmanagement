<!-- The Modal -->
<div class="modal" id="update">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Update Blog</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body mb-3">
                <form class="form-horizontal" enctype="multipart/form-data" method="POST" action="{{ URL::to('blogUpdate') }}">
                   {{ csrf_field() }}
                   <input type="hidden" value="{{ $detail->id }}" name="blogid">
                   <div class="row">
                       <div class="col-md-5 text-center">
                           <img id="imagePreview" class="img-fluid mt-3" src="{{ asset('asset/images/blogs/'.$detail->filename) }}" />
                       </div>
                       <div class="col-md-6">
                           <div class="form-group">
                                <label for="">Photo: </label>
                                <input type="file" class="form-control" accept="image/*" name="image" onchange="loadFile(event)">
                                <small><i>Image file extention must be .jpg, .jpeg, .png, and .gif</i></small><br/>
                                <small class="text-danger"><i>{{ session('error') }}</i></small>
                           </div>
                           <div class="form-group mb-3">
                                <label for="title">Title</label>
                                <input id="title"  type="text" class="form-control" value="{{ $detail->title }}" name="title" required>
                           </div>

                           <div class="form-group mb-3">
                                <label for="description">Description</label>
                                <textarea id="description" class="form-control" name="description" rows="9" required>{{ $detail->description }}</textarea>
                           </div>
                           <button class="btn btn-primary"><i class="fa fa-check-circle"></i> Save</button>
                       </div>
                   </div>
               </form>
            </div>
        </div>
    </div>
</div>