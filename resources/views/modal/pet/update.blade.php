<!-- The Modal -->
<div class="modal" id="update">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Update Pet Details</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body mb-3">
                <form class="form-horizontal" enctype="multipart/form-data" method="POST" action="{{ URL::to('petUpdate') }}">
                   {{ csrf_field() }}
                   <div class="row">
                        <div class="col-md-4 text-center">
                           <img id="imagePreview" class="img-fluid mt-3" src="{{ asset('asset/images/pets/thumb/'.$detail->filename) }}" />
                        </div>
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="hidden" value="{{ $detail->id }}" name="petid">
                                   <div class="form-group">
                                        <label for="">Pet: </label>
                                        <input type="file" class="form-control" accept="image/*" name="image" onchange="loadFile(event)">
                                        <small><i>Image file extention must be .jpg, .jpeg, .png, and .gif</i></small><br/>
                                   </div>
                                   <div class="form-group mt-3">
                                       <label for="status">Status: </label>
                                       <select id="status" class="form-control" name="status">
                                           <option selected disabled>-- Select Status --</option>
                                           <option value="adopt" {{ $detail->status == 'adopt' ? 'selected':'' }}>Adopt</option>
                                           <option value="lostandfound" {{ $detail->status == 'lostandfound' ? 'selected':'' }}>Lost and Found</option>
                                       </select>
                                   </div>
                                   <div class="form-group">
                                        <label for="name">Name: </label>
                                        <input id="name" type="text" class="form-control" name="name" value="{{ $detail->name }}">
                                   </div>
                                   <div class="form-group">
                                        <label for="breed">Breed: </label>
                                        <input id="breed" type="text" class="form-control" name="breed" value="{{ $detail->breed }}" required>
                                   </div>
                                    <div class="form-group">
                                        <label for="color">Color: </label>
                                        <input id="color" type="text" class="form-control" name="color" value="{{ $detail->color }}" required>
                                   </div>                           
                                </div>

                                <div class="col-md-6">
                                   <div class="form-group">
                                        <label for="gender">Gender: </label>
                                        <select id="gender" class="form-control" name="gender" required>
                                            <option disabled selected>-- Select Gender --</option>
                                            <option value="male" {{ $detail->gender == 'male' ? 'selected':'' }}>Male</option>
                                            <option value="female" {{ $detail->gender == 'female' ? 'selected':'' }}>Female</option>
                                        </select>
                                   </div>
                                   <div class="form-group">
                                        <label for="age">Age: </label>
                                        <input id="age" type="text" class="form-control" name="age" value="{{ $detail->age }}" required>
                                   </div>
                                   <div class="form-group mb-3">
                                        <label for="description">Description:</label>
                                        <textarea id="description" class="form-control" name="description" rows="8">{{ $detail->description }}</textarea>
                                   </div>
                                </div>
                                <div class="col-md-12 mt-4">
                                    <button class="btn btn-primary"><i class="fa fa-pencil-square-o"></i> Save</button>
                                </div>
                            </div>
                        </div>
                   </div>
               </form>
            </div>

        </div>
    </div>
</div>