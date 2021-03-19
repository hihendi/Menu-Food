@extends('layouts.default')

@section('title', 'Detail Food')

@section('content')
<div class="container mb-4">

    <div class="card border-o shadow rounded mt-4 ">
        <div class=" card-header bg-primary text-white text-center">
            <h4>Detail Food <strong>{{$data->name}}</strong></h4>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">

                    <img src="{{$data->image}}" class="card-img" style="max-height: 500px" />
                </div>
            </div>
            <hr>

            <div class="row">
                <div class="col-md-4">
                    <h5 class="card-title">Category</h5>
                    <p class="card-text">{{$data->category->name}}</p>
                </div>
                <div class="col-md-4">
                    <h5 class="card-title">Price Food</h5>
                    <p class="card-text">{{$data->price}}</p>
                </div>
                <div class="col-md-4">


                    <h5 class="card-title">Ready Stock ?</h5>
                    @if ($data->is_ready)
                    <p class="card-text text-success">Ready Stock</p>
                    @else
                    <p class="card-text text-danger">Out Of Stock</p>

                    @endif
                </div>
            </div>

            <hr>
            <div class="row">
                <div class="col-md-12">
                    <h5 class="card-title">Description</h5>
                    <p class="card-text">{{$data->description}}</p>
                </div>

            </div>

        </div>
        <div class="card-footer">

            <a href="{{ route('products.index') }}" class="btn btn-secondary btn-sm float-right text-white">Back to
                Home</a>

            <a href="{{ route('products.edit', $data->id) }}"
                class="btn btn-info btn-sm float-right text-white mr-4">Edit
                Food</a>
        </div>
    </div>



</div>
@endsection