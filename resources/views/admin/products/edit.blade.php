@extends('admin.layouts.app')

@section('title', 'Category List Page')

@section('content')
    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="row">
            <div class="col-3 offset-7 mb-2">
                @if (session('updateSuccess'))
                    <div class="">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <i class="fa-solid fa-circle-xmark"></i> {{ session('updateSuccess') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                @endif
            </div>
        </div>
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="col-lg-8 offset-1">
                    <div class="card">
                        <div class="card-body">
                            <div class="ms-5">
                                    <i class="fa-solid fa-arrow-left text-dark" onclick="history.back()"></i>
                            </div>
                            <div class="card-title">
                                <h3 class="text-center title-2">Products detail</h3>
                            </div>

                            <hr>
                            <div class="row">
                                <div class="col-3 offset-1">
                                    <img src="{{ asset('storage/'.$pizza->image) }}" class="img-cir shadow-sm" />
                                </div>
                                <div class="col-7">
                                    <h3 class="my-3 text-center"> {{ $pizza->name }}</h3>
                                    <span class="my-3 btn bg-dark text-white"> <i class="fa-solid fs-4 fa-money-bill-wave me-2"></i> {{ $pizza->price }}
                                    </span>
                                    <span class="my-3 btn bg-dark text-white"> <i class="fa-regular fs-4 fa-hourglass-half me-2"></i>
                                        {{ $pizza->waiting_time }}</span>
                                    <span class="my-3 btn bg-dark text-white"> <i class="fa-solid fs-4 fa-eye me-2"></i>{{ $pizza->view_count }}</span>
                                    <span class="my-3 btn bg-dark text-white"> <i class="fa-solid fa-coins me-2"></i>{{ $pizza->category_name }}</span>
                                    <span class="my-3 btn bg-dark text-white"> <i class="fa-solid fs-4 fa-user-clock me-2"></i>
                                        {{ $pizza->created_at->format('j F Y') }}</span>
                                    <div class="my-3"> <i class="fa-solid fa-file-lines me-2"></i> Details </div>
                                    <div class="">{{ $pizza->description }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT-->
@endsection
