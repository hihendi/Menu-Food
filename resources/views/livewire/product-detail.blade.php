<div class="container">
    <div class="row mt-2">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('homepage') }}" style="color: #26514E">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('products') }}" style="color: #26514E">List Foods</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Food Detail</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card image-product">
                <img src="{{$product->image}}" alt="{{$product->name}}" class="img-fluid image-product">
            </div>
        </div>
        <div class="col-md-6 pt-5">

            <h2><strong>{{$product->name}}</strong>

            </h2>

            <h5>
                @if ($product->is_ready == 1)
                <span class="badge badge-success"><i class="fas fa-check"></i> Ready to Serve</span>
                @else
                <span class="badge badge-danger"><i class="fas fa-times"></i> Sold Out</span>
                @endif
            </h5>


            <div class="row">
                <div class="col">
                    <table class="table" style="border-top: hidden">
                        <tr>
                            <td>Price</td>
                            <td>:</td>
                            <td>IDR {{ number_format($product->price) }}</td>
                        </tr>
                        <tr>
                            <td>Description</td>
                            <td>:</td>
                            <td>{{$product->description}}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>