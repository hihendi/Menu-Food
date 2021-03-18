@extends('layouts.default')

@section('title', 'Add Food')

@section('content')
<div class="container mb-4">


    <div class="card border-o shadow rounded mt-4 ">

        <div class="card-body">
            <form action="{{ route('products.update', $data->id) }}" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-8">
                        <label for="name" class="font-weight-bold">Name Food</label>
                        <input type="text" name="name" value="{{ old('name') ? old('name') : $data->name }}" required
                            class="form-control @error('name') is-invalid @enderror">

                        @error('name')
                        <div class="text-muted">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="form-group col-md-4">
                        <label for="image" class="font-weight-bold">Image Food</label>
                        <input type="file" name="image" value="{{old('image')}}" accept="image/*" required
                            class="form-control @error('image') is-invalid @enderror">

                        @error('image')
                        <div class="text-muted">{{$message}}</div>
                        @enderror
                    </div>



                    <div class="form-group col-md-4">
                        <label for="category_id" class="font-weight-bold">Choose Category</label>
                        <select class="form-control" name="category_id" id="exampleFormControlSelect1" required>
                            <option value="{{ $data->category_id }}">{{$data->category->name}}</option>
                            @foreach ($items as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach

                        </select>
                        @error('category_id')
                        <div class="text-muted">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="form-group col-md-4">
                        <label for="price" class="font-weight-bold">Price Food</label>
                        <input type="text" name="price" value="{{old('price') ? old('price') : $data->price}}" required
                            class="form-control @error('price') is-invalid @enderror">

                        @error('price')
                        <div class="text-muted">{{$error}}</div>
                        @enderror
                    </div>




                    <div class="form-group col-md-4">
                        <label for="is_ready" class="font-weight-bold">Ready Stock ?</label>
                        <select class="form-control" name="is_ready" id="exampleFormControlSelect1" required>
                            <option value={{true}}>Ready Stock</option>

                            <option value={{false}}>Out Of Stock</option>


                        </select>
                        @error('is_ready')
                        <div class="text-muted">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="form-group col-md-12">
                        <label for="description" class="font-weight-bold">Description Food</label>
                        <input type="text" name="description" required
                            class="form-control @error('description') is-invaldi @enderror"
                            value="{{old('description') ? old('description') : $data->description}}">

                        @error('description')
                        <div class="text-muted">{{$message}}</div>
                        @enderror
                    </div>



                    <div class="form-group col-md-6">
                        <button type="submit" class="btn btn-primary rounded btn-md">Save Changes</button>
                        <button type="reset" class="btn btn-warning rounded btn-md">Reset</button>

                    </div>

                    <div class="form-group col-md-4 offset-md-2">
                        <a href="{{ route('products.index') }}"
                            class="btn btn-secondary rounded btn-md float-right">Back</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection