@extends('layouts.apps')
@section('title')<title>{{ config('app.name') }} | My Pets</title>@endsection
@section('page')

    <section class="page-title" style="background-image:url(asset/images/background/7.jpg)">
        <div class="auto-container">
            <div class="clearfix">
                <div class="pull-left">
                    <h1>My Pets</h1>
                </div>
            </div>
        </div>
    </section>
    <div class="auto-container mt-5">
        <div class="clearfix">
            <section class="brows-job-category mt-3">
                <div class="container">
                    @if(count($mypets) > 0)
                        @foreach($mypets as $pet)
                            <a href="{{ URL::to('mypet/details/'.$pet->id) }}" class="{{ $pet->is_approved == 2 ? 'disabled-link':'item-click' }}">
                                <article>
                                    <div class="brows-job-list {{ $pet->is_approved == 2 ? 'bg-declined':''}}">
                                        <div class="row">
                                            <div class="col-lg-2 text-center small-padding">
                                                <div class="brows-job-company-img">
                                                    <img src="{{ asset('asset/images/pets/thumb/'.$pet->filename) }}" class="img-responsive circle" alt="">
                                                </div>
                                            </div>
                                            <div class="col-lg-10 col-sm-12">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="brows-job-position">
                                                            <small class="text-primary">Posted By: {{ $pet->user->fname.' '.$pet->user->lname }} </small>

                                                            <small class="text-primary float-end">Date: {{ date('M d, Y', strtotime($pet->created_at)) }}</small>

                                                            <h3>{{ $pet->name }}</h3>
                                                            <small>
                                                                @if($pet->status == 'adopt')
                                                                    <span class="text-success">Adopt</span>
                                                                @else
                                                                    <span class="text-danger">Lost and Found</span>
                                                                @endif
                                                            </small>

                                                            <p>{{ $pet->description }}</p>

                                                            @if($pet->is_approved == 0)
                                                                <span class="text-warning"><i>Pending</i></span>
                                                            @elseif ($pet->is_approved == 1)
                                                                <span class="text-success"><i>Approved</i></span>
                                                            @else
                                                                <span class="text-danger"><i>Declined</i></span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>     
                                        </div>
                                    </div>
                                </article>
                            </a>
                        @endforeach
                    @else
                        <div class="text-center">
                            <h1><i class="fa fa-paw"></i></h1>
                            <h2><strong>NO DATA FOUND</strong></h2>
                        </div>
                    @endif

                    <nav aria-label="Page navigation example">
                        {{ $mypets->links() }}
                    </nav>
                </div>
            </section>

        </div>
    </div>
@endsection