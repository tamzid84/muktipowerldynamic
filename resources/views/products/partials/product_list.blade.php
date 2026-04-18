{{-- resources/views/products/partials/product_list.blade.php --}}

@if(isset($products) && $products->count() > 0)

    <div class="row">

        @foreach($products as $product)
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm h-100">

                    {{-- PRODUCT IMAGE --}}
                   <img src="{{ asset('storage/'.$product->image1) }}"
                    class="card-img-top"
                        style="height:200px; object-fit:cover;"
                        alt="{{ $product->name }}"
                    >

                    {{-- PRODUCT INFO --}}
                    <div class="card-body">
                        <h5 class="card-title">
                            {{ $product->title }}
                        </h5>

                        <p class="card-text">
                            Price: <strong>{{ $product->price }} ৳</strong>
                        </p>

                        @if(!empty($product->short_description))
                            <p class="text-muted small">
                                {{ \Illuminate\Support\Str::limit($product->description, 80) }}
                            </p>
                        @endif
                    </div>

                    {{-- FOOTER --}}
                    <div class="card-footer bg-white border-0">
    <button 
        class="btn btn-sm btn-primary w-100 quick-view-btn"
        data-id="{{ $product->id }}"
    >
        Quick View
    </button>
</div>

                </div>
            </div>
        @endforeach

    </div>

    {{-- PAGINATION --}}
    <div class="d-flex justify-content-center mt-3">
        {{ $products->links() }}
    </div>

@else

    {{-- EMPTY STATE --}}
    <div class="text-center py-5">
        <h5 class="text-muted">No products found</h5>
    </div>

@endif