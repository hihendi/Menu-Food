@extends('layouts.default')

@section('title', 'Add Food')

@section('content')
<div class="container mb-4">


    <div class="card border-o shadow rounded mt-4 ">

        <div class="card-body">
            <form action="{{ route('categories.store') }}" method="post">
                @method('POST')
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="name" class="font-weight-bold">Name Categories</label>
                        <input type="text" name="name" value="{{ old('name') }}"
                            class="form-control @error('name') is-invalid @enderror">

                        @error('name')
                        <div class="text-muted">{{$message}}</div>
                        @enderror
                    </div>



                    <div class="form-group col-md-6">
                        <label for="name_of_indo" class="font-weight-bold">Name Of Indonesian</label>
                        <input type="text" name="name_of_indo" value="{{old('name_of_indo')}}"
                            class="form-control @error('name_of_indo') is-invalid @enderror">

                        @error('name_of_indo')
                        <div class="text-muted">{{$error}}</div>
                        @enderror
                    </div>




                    <div class="form-group col-md-6">
                        <button type="submit" class="btn btn-primary rounded btn-md">Save Changes</button>
                        <button type="reset" class="btn btn-warning rounded btn-md">Reset</button>

                    </div>

                    <div class="form-group col-md-4 offset-md-2">
                        <a href="{{ route('categories.index') }}"
                            class="btn btn-secondary rounded btn-md float-right">Back</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection