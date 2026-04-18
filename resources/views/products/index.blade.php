@extends('layouts.app')

@section('content')

<br>
        
    <div class="container py-5">

    <div class="text-center mb-4">
        <h2 class="section-title display-5 fw-bold">Our Premium Products</h2>
        <p class="lead">Click on category to filter • Click on any product to see details</p>
    </div>

    {{-- CATEGORY FILTER --}}
    <div class="text-center mb-4">
        <button class="btn btn-primary filter-btn" data-id="">All</button>

        @foreach(App\Models\Category::all() as $cat)
            <button class="btn btn-outline-primary filter-btn" data-id="{{ $cat->id }}">
                {{ $cat->name }}
            </button>
        @endforeach
    </div>

    {{-- PRODUCT LIST --}}
    <div id="product-area">
        @include('products.partials.product_list', ['products' => $products])
    </div>

</div>
@include('sections.about')
@include('sections.solutions')
@include('sections.whyus')
@include('sections.contact')
@endsection
{{-- 🔥 ADD MODAL HERE (IMPORTANT) --}}
<div class="modal fade" id="quickViewModal" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">Product Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body" id="quickViewContent">
                <div class="text-center py-5">
                    Loading...
                </div>
            </div>

        </div>
    </div>
</div>

@push('scripts')
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script>
$(document).ready(function(){

    loadProducts('');

    // category filter click
    $('.filter-btn').click(function(){
        let category_id = $(this).data('id');
        loadProducts(category_id);
    });

    // pagination click (dynamic)
    $(document).on('click', '.pagination a', function(e){
        e.preventDefault();

        let url = $(this).attr('href');
        fetch(url);
    });

    function loadProducts(category_id, page = 1)
    {
        $.ajax({
            url: "{{ route('products.filter') }}?category_id=" + category_id + "&page=" + page,
            success: function(data){
                $('#product-area').html(data);
            }
        });
    }

    function fetch(url)
    {
        $.ajax({
            url: url,
            success: function(data){
                $('#product-area').html(data);
            }
        });
    }

});
</script>

<script>
$(document).ready(function(){

    // QUICK VIEW CLICK
    $(document).on('click', '.quick-view-btn', function(){

        let id = $(this).data('id');

        $('#quickViewModal').modal('show');

        $('#quickViewContent').html(`
            <div class="text-center py-5">
                Loading...
            </div>
        `);

        $.ajax({
            url: "/products/quick-view/" + id,
            type: "GET",
            success: function(res){
                $('#quickViewContent').html(res);
            },
            error: function(){
                $('#quickViewContent').html(`
                    <div class="text-danger text-center py-5">
                        Failed to load product.
                    </div>
                `);
            }
        });

    });

});
</script>
{{-- 👇 ADD QUANTITY CONTROL HERE --}}
<script>

$(document).on('click', '#plusBtn', function(){
    let qty = parseInt($('#qty').val());
    $('#qty').val(qty + 1);
});

$(document).on('click', '#minusBtn', function(){
    let qty = parseInt($('#qty').val());
    if(qty > 1){
        $('#qty').val(qty - 1);
    }
});

</script>

<script>
    $(document).on('click', '.add-to-cart', function(){

    let productId = $(this).data('id');
    let qty = $('#qty').val() ?? 1;

    $.ajax({
        url: "/cart/add",
        method: "POST",
        data: {
            product_id: productId,
            quantity: qty,
            _token: $('meta[name="csrf-token"]').attr('content')
        },
        success: function(response){

            alert("Product added to cart!");

            // optional: update cart counter
            if(response.cart_count){
                $('#cart-count').text(response.cart_count);
            }

        },
        error: function(){
            alert("Something went wrong!");
        }
    });

});
</script>
@endpush