@extends('layouts.apps')
@section('title')<title>{{ config('app.name') }} | Pet Details </title>@endsection
@section('page')

    <section class="page-title" style="background-image:url(asset/images/background/7.jpg)">
        <div class="auto-container">
            <div class="clearfix">
                <div class="pull-left">
                    <h1>Pet Details</h1>
                </div>
                <div class="pull-right">
                    <ul class="page-breadcrumb">
                        <li>
                            @if($petdetail->status == 'adopt')
                                For Adoption
                            @else
                                Lost and Found
                            @endif

                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="pet profile">
         <section class="profile">
            <div class="container">
                <div class="slide">
                    <div class="row">
                        <div class="col-lg-7 col-md-12 col-sm-12">
                            <div class="new_custom images">
                                <div class="owl-carousel">
                                    <div class="item">
                                        <div class="testimon">
                                            <div class="image">
                                                <img src="{{ asset('asset/images/pets/thumb/'.$petdetail->filename) }}" alt="image of pet" title="pet"
                                                    class="img-fluid customer">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-5 col-md-12 col-sm-12">
                            <div class="spec">
                                @if($petdetail->status == 'adopt')
                                    <a href="{{ URL::to('adopt') }}" class="text-primary"><i class="fa fa-angle-left"></i> Go to Adopt</a>
                                @else
                                    <a href="{{ URL::to('lost-and-found') }}" class="text-primary"><i class="fa fa-angle-left"></i> Go to Lost and Found</a>
                                @endif
                                
                                <div class="name">
                                    <small class="float-end">
                                        Date: {{ date('M d, Y', strtotime($petdetail->created_at)) }}<br/>
                                    </small>
                                    <small>Posted By:</small>
                                    <p class="m-0" style="font-size:18px;"><strong>{{ ucfirst($petdetail->user->fname).' '.ucfirst($petdetail->user->lname) }}</strong></p>
                                    <p class="m-0">{{ $petdetail->user->email }}</p>
                                    <p class="m-0">{{ $petdetail->user->contact }}</p>
                                    <hr/>
                                    <h3>Name: {{ $petdetail->name }}</h3>
                                </div>
                                @if($petdetail->status == 'adopt')
                                    <span class="text-success">For Adoption</span>
                                @else
                                    <span class="text-danger">Lost and Found</span>
                                @endif
                                <ul>
                                    <li><i class="fas fa-paw yellow me-2"></i> Age: {{ $petdetail->age }}</li>
                                    <li><i class="fas fa-paw yellow me-2"></i> Gender: {{ $petdetail->gender }}</li>
                                    <li><i class="fas fa-paw yellow me-2"></i> Color: {{ $petdetail->color }}</li>
                                    <li><i class="fas fa-paw yellow me-2"></i> Breed: {{ $petdetail->breed }}</li>
                                </ul>

                                <p>
                                    <strong>Description:</strong>
                                    <br/>{{ $petdetail->description }}
                                </p>

                                <p>
                                    <strong>Is Vaccinated?</strong> <br/>
                                    <i class="fa fa-check-circle text-success"></i> {{ ucfirst($petdetail->is_vaccinated) }}
                                </p>

                                <hr>
                                @if(Auth::user()->id != $petdetail->user_id)
                                    <div class="button">
                                        @if($petdetail->status == 'adopt')
                                            @if(session('success'))
                                                <div class="alert alert-success text-center">
                                                   Hi! <strong>{{ ucfirst(Auth::user()->fname) }}</strong> Your request was already submitted. The administrator will contact you using your email or phone number. Please keep updated, thank you.
                                                </div>
                                            @endif
                                            <div class="card">
                                                <div class="card-body">
                                                    <h3 class="text-center">Adopt Form</h3>
                                                    <form enctype="multipart/form-data" method="POST" action="{{ URL::to('adoptForm') }}">
                                                        {{ csrf_field() }}
                                                        <input type="hidden" value="{{ Auth::user()->id }}" name="userid">
                                                        <input type="hidden" value="{{ $petdetail->id }}" name="petid">
                                                        <div class="form-group">
                                                            <label>Type of Valid ID:</label>
                                                            <select class="form-control" name="type_id" required>
                                                                <option disabled selected>-- Select Type of ID</option>
                                                                <option value="Phil Health">Phil Health</option>
                                                                <option value="Unified Multi-Purpose (UMID)">Unified Multi-Purpose (UMID)</option>
                                                                <option value="Social Security System (SSS)">Social Security System (SSS)</option>
                                                                <option value="Loyalty Card (PAG-IBIG)">Loyalty Card (PAG-IBIG)</option>
                                                                <option value="Philippine Postal (PHIL-POST)">Philippine Postal (PHIL-POST)</option>
                                                                <option value="Drivers License">Driver's License</option>
                                                                <option value="School ID">School ID</option>
                                                                <option value="Passport">Passport</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>ID Number: </label>
                                                            <input type="text" class="form-control" placeholder="" name="id_no" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Photo of Valid ID: </label>
                                                            <input type="file" class="form-control" accept="image/*" name="image" onchange="loadFile(event)" required>
                                                            <small>{{ session('warning') }}</small>
                                                        </div>

                                                        <div class="text-center m-3">
                                                            <img id="imagePreview" src="{{ asset('asset/images/valid/placeholder.png') }}" style="width: 300px; height: 193px; object-fit: cover;"/>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Numbers of Pet You Own:</label>
                                                            <input type="number" class="form-control"  name="no_pet" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Reasons:</label>
                                                            <textarea class="form-control" name="reasons" required rows="5"></textarea>
                                                        </div>
                                                        
                                                        <div class="form-group mt-3">
                                                            <button class="btn btn-warning"><i class="fas fa-paw"></i> Adopt Me</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        @else

                                            @if(session('success'))
                                                <div class="alert alert-success text-center">
                                                   Hi! <strong>{{ ucfirst(Auth::user()->fname) }}</strong> Your request was already submitted. The administrator will contact you using your email or phone number. Please keep updated, thank you.
                                                </div>
                                            @endif

                                            <div class="card">
                                                <div class="card-body">
                                                    <h3 class="text-center">Lost And Found Form</h3>
                                                    <form enctype="multipart/form-data" method="POST" action="{{ URL::to('claimForm') }}">
                                                        {{ csrf_field() }}

                                                        <input type="hidden" value="{{ Auth::user()->id }}" name="userid">
                                                        <input type="hidden" value="{{ $petdetail->id }}" name="petid">
                                                        <input type="hidden" value="{{ $petdetail->user->id }}" name="petowner">
                                                        <div class="text-center m-3">
                                                            <img id="imagePreview" src="{{ asset('asset/images/lost/placeholder.png') }}" style="width: 400px; height: 300px; object-fit: cover;"/>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Photo with your lost pet: </label>
                                                            <input type="file" class="form-control" accept="image/*" name="image" onchange="loadFile(event)" required>
                                                        </div>
                                                        <div class="form-group mt-3">
                                                            <p>Hi <strong class="text-primary">{{ ucfirst(Auth::user()->fname).' '.ucfirst(Auth::user()->lname) }}</strong>, please provide information of a witness that could verify your claims.</p>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Witness Name:</label>
                                                            <input type="text" class="form-control" placeholder="" name="witness_name">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Witness Email:</label>
                                                            <input type="email" class="form-control"  name="witness_email">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Witness Contact No.:</label>
                                                            <input type="text" class="form-control" placeholder="" name="witness_no">
                                                        </div>
                                                        <div class="form-group mt-3">
                                                            <button class="btn btn-warning"><i class="fas fa-paw"></i> Find Me</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                @else
                                    <p class="text-center mt-3">Note:  Hi !<strong>{{ ucfirst($petdetail->user->fname) }}</strong> <small>you own this post. If you want to post more just click the  button below.</small></p>
                                    <p class="text-center"><a href="{{ URL::to('pets-form') }}" class="btn btn-warning"><i class="fa fa-paw"></i> Add Pet</a></p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>

@endsection

@section('script')
    <script src="{{ asset('asset/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('asset/js/mousewheel.js') }}"></script>
    <script src="{{ asset('asset/js/vivus.min.js') }}"></script>
@endsection