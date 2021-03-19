<div class="container">
    <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('homepage') }}" style="color: #26514E">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">List Foods</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-9">
            <h2><Strong>{{$title}}</Strong></h2>
        </div>
        <div class="col-md-3">
            <div class="input-group mb-3">

                <input type="text" wire:model="search" class="form-control" placeholder="Search..." aria-label="Search"
                    aria-describedby="basic-addon1">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-search"></i></span>
                </div>
            </div>
        </div>
    </div>

    <section class="products mb-5">
        <div class="row mt-2 ">
            @foreach ($products as $product)
            <div class="col-md-4 mt-4 ">
                <div class="card shadow ">
                    <img src="{{$product->image}}" alt="{{$product->name}}" class="img-fluid">
                    <div class="card-body text-center">
                        <div class="row mt-2 mb-4">
                            <div class="col-md-12">
                                <h4><strong>{{$product->name}}</strong></h4>
                                <h5>IDR {{number_format($product->price)}}</h5>
                            </div>

                        </div>
                        <div class="row mt-2 mb-2">
                            <div class="col-md-12">
                                <a href="{{ route('products.detail', $product->id) }}"
                                    class="btn btn-custom-primary btn-block"><i class="fas fa-eye"></i> Detail
                                    Food</a>
                            </div>

                        </div>

                    </div>


                </div>
            </div>
            @endforeach
        </div>
        <div class="row mt-3">
            <div class="col">
                {{$products->links()}}
            </div>
        </div>
    </section>
</div>