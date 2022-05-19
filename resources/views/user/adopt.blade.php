@extends('layouts.apps')
@section('title')<title>{{ config('app.name') }} </title>@endsection
@section('page')
	<!--Page Title-->
    <section class="page-title" style="background-image:url(asset/images/background/7.jpg)">
        <div class="auto-container">
            <div class="clearfix">
                <div class="pull-left">
                    <h1>Adopt Pet</h1>
                </div>
                <div class="pull-right">

                </div>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <div class="pet about second">
        <section class="team">
            <div class="container">
                <div class="heading text-center">
                    <p class="wow fadeInUp"><span class="purple"><i class="fas fa-paw"></i> </span><span
                            class="orange"><i class="fas fa-paw"></i> </span><span class="purple"><i
                                class="fas fa-paw"></i> </span></p>
                    <h2 class="wow fadeInDown">Ready to Adopt <span class="wow pulse" data-wow-delay="1s">
                            Pets</span>
                    </h2>
                </div>
                <div class="row">
                    @if(count($adopt) > 0)
                        @foreach($adopt as $pet)
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="member">
                                    <div class="image">
                                        <img src="{{ asset('asset/images/pets/thumb/'.$pet->filename) }}" alt="image of pet" title="pet"
                                            class="img-fluid customer">
                                    </div>
                                    <div class="content">
                                        <h4 class="wow fadeInDown">{{ $pet->name }}</h4>
                                        <ul>
                                            <li><i class="fas fa-paw"></i> <strong>Age:</strong> {{ $pet->age }}</li>
                                            <li><i class="fas fa-paw"></i> <strong>Gender:</strong> {{ $pet->gender }}</li>
                                            <li><i class="fas fa-paw"></i> <strong>Breed:</strong> {{ $pet->breed }}</li>
                                            <li><i class="fas fa-paw"></i> <strong>Color:</strong> {{ $pet->color }}</li>
                                        </ul>
                                        <small>Date Posted: {{ date('M d, Y', strtotime($pet->created_at)) }}</small>
                                        <div class="button wow fadeInUp">
                                            <a href="{{ URL::to('pet/details/'.$pet->id) }}" class="btn main" title="contact">
                                                Adopt me <i class="fas fa-paw"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="text-center">
                            <h2><i class="fa fa-paw"></i></h1>
                            <h3><strong>NO DATA FOUND</strong></h2>
                        </div>
                    @endif

                </div>

                <div class="row mt-5">
                    <nav aria-label="Page navigation example" class="d-flex justify-content-center">
                        {{ $adopt->links() }}
                    </nav>
                </div>
            </div>
        </section>
    </div>


@endsection