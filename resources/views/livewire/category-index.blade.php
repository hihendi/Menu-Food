<div class="container">
    <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('homepage') }}" style="color: #26514E">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Categories Food</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-12">
            <h2><Strong>Categories Food</Strong></h2>
        </div>

    </div>

    {{-- Chosee Category --}}
    <section class="choose-category">
        <div class="row mt-4 ">
            @foreach ($categories as $category)
            <div class="col-md-4 mt-4 ">
                <a href="{{ route('products.category', $category->id) }}" style="text-decoration: none">
                    <div class="card shadow">
                        <div class="card-body text-center">

                            <strong>
                                <h4>{{$category->name}}</h4>
                            </strong>

                            <i>
                                <p>{{$category->name_of_indo}}</p>
                            </i>
                        </div>
                    </div>
                </a>

            </div>
            @endforeach
        </div>
    </section>
    {{-- End Chosee Category --}}
</div>