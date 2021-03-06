@extends('layouts.default')

@section('title', 'Dashboard')


@section('content')

<!-- *************************************************************** -->
<!-- Start First Cards -->
<!-- *************************************************************** -->
<div class="card-group">

    <div class="card border-right">
        <div class="card-body">
            <div class="d-flex d-lg-flex d-md-block align-items-center">
                <div>
                    <h2 class="text-dark mb-1 w-100 text-truncate font-weight-medium"><sup
                            class="set-doller">{{$product}}</h2>
                    <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Product
                    </h6>
                </div>

            </div>
        </div>
    </div>
    <div class="card border-right">
        <div class="card-body">
            <div class="d-flex d-lg-flex d-md-block align-items-center">
                <div>
                    <h2 class="text-dark mb-1 w-100 text-truncate font-weight-medium"><sup
                            class="set-doller">{{$category}}</h2>
                    <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Category
                    </h6>
                </div>

            </div>
        </div>
    </div>
    {{-- <div class="card border-right">
        <div class="card-body">
            <div class="d-flex d-lg-flex d-md-block align-items-center">
                <div>
                    <div class="d-inline-flex align-items-center">
                        <h2 class="text-dark mb-1 font-weight-medium">1538</h2>
                        <span
                            class="badge bg-danger font-12 text-white font-weight-medium badge-pill ml-2 d-md-none d-lg-block">-18.33%</span>
                    </div>
                    <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">New Projects</h6>
                </div>
                <div class="ml-auto mt-md-3 mt-lg-0">
                    <span class="opacity-7 text-muted"><i data-feather="file-plus"></i></span>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="d-flex d-lg-flex d-md-block align-items-center">
                <div>
                    <h2 class="text-dark mb-1 font-weight-medium">864</h2>
                    <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Projects</h6>
                </div>
                <div class="ml-auto mt-md-3 mt-lg-0">
                    <span class="opacity-7 text-muted"><i data-feather="globe"></i></span>
                </div>
            </div>
        </div>
    </div> --}}
</div>
<!-- *************************************************************** -->
<!-- End First Cards -->
<!-- *************************************************************** -->


@endsection