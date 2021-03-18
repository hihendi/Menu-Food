<div class="container">
    {{-- Banner --}}
    <div class="row mt-4">
        <div class="col-md-6">
            <div class="d-flex h-100">
                <div class="justify-content-center align-self-center pl-4">
                    <h1>
                        <strong>Delicious Food Menu, </strong>
                        <br>
                        In your Gadget
                    </h1>
                    <br>
                    <h5>Les't go to order your favorit foods here.</h5>
                    <br>
                    <a href="{{ route('products') }}" class="btn btn-custom-primary btn-lg">See all Menu <i
                            class="fas fa-eye"></i></a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <img src="{{ asset('images/banner_raasaa.png') }}" alt="banner" width="100%">
        </div>
    </div>
    {{-- End Banner --}}





    {{-- Best Foods --}}
    <section class="products mt-4 mb-5">
        <h2>
            <Strong>Best Foods</Strong>

            <a href="{{ route('products') }}" class="btn btn-custom-primary float-right">See all Menu <i
                    class="fas fa-eye"></i></a>
        </h2>
        <div class="row mt-3 ">
            @foreach ($product as $product)
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
    </section>