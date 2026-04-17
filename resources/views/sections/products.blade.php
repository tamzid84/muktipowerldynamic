   <!-- Premium Products Section (Updated with Filter & Modal) -->
  

<!-- ================= PRODUCTS ================= -->
<section class="py-5" id="products">
    <div class="container">

         <div class="text-center mb-5">
                <h2 class="section-title display-5 fw-bold">Our Premium Products</h2>
                <p class="lead">Click on category to filter • Click on any product to see details</p>
            </div>

        <!-- FILTER -->
        <div class="text-center mb-4">
            <button class="btn btn-primary filter-btn active" data-filter="all">All</button>

            @foreach($categories as $cat)
                <button class="btn btn-outline-primary filter-btn" data-filter="{{ $cat->slug }}">
                    {{ $cat->name }}
                </button>
            @endforeach
        </div>

        <!-- PRODUCTS -->
        <div class="row" id="productContainer">

            @foreach($products as $product)
                <div class="col-md-4 mb-4 product-item"
                     data-category="{{ $product->category->slug ?? '' }}">

                    <div class="card h-100 product-card"
                         onclick="showProduct({{ $product->id }})"
                         style="cursor:pointer;">

                        <img src="{{ asset('storage/'.$product->image1) }}"
                             class="card-img-top"
                             style="height:220px;object-fit:cover;">

                        <div class="card-body">
                            <h5>{{ $product->title }}</h5>
                            <p>{{ $product->short_description }}</p>
                        </div>

                    </div>
                </div>
            @endforeach

        </div>
    </div>

    @include('sections.product-modal')

</section>
