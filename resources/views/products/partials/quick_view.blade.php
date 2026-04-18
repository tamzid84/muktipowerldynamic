<div class="row">

    {{-- ================= IMAGE SECTION ================= --}}
    <div class="col-md-5">

        {{-- MAIN IMAGE --}}
        <img src="{{ asset('storage/'.$product->image1) }}"
             alt="{{ $product->title }}"
             class="img-fluid rounded mb-2">

        {{-- OPTIONAL EXTRA IMAGES --}}
        <div class="d-flex gap-2">
            @if($product->image2)
                <img src="{{ asset('storage/'.$product->image2) }}" width="60" class="rounded border">
            @endif

            @if($product->image3)
                <img src="{{ asset('storage/'.$product->image3) }}" width="60" class="rounded border">
            @endif
        </div>

    </div>

    {{-- ================= DETAILS SECTION ================= --}}
    <div class="col-md-7">

        {{-- TITLE --}}
        <h3 class="fw-bold">{{ $product->title }}</h3>

        {{-- BADGE --}}
        @if($product->stock > 0)
            <span class="badge bg-success">In Stock</span>
        @else
            <span class="badge bg-danger">Out of Stock</span>
        @endif

        <h4 class="text-primary mt-2">
            {{ $product->price }} ৳
        </h4>

        {{-- SHORT DESCRIPTION --}}
        <p class="text-muted">
            {{ $product->description }}
        </p>

        <hr>

        {{-- ================= QUANTITY ================= --}}
        <div class="mb-3">
            <label>Quantity</label>
            <div class="input-group" style="width:150px;">
                <button class="btn btn-outline-secondary" type="button" id="minusBtn">-</button>

                <input type="text" id="qty" value="1" class="form-control text-center">

                <button class="btn btn-outline-secondary" type="button" id="plusBtn">+</button>
            </div>
        </div>

        {{-- ================= ACTION BUTTONS ================= --}}
        <div class="d-flex gap-2">

            {{-- ADD TO CART --}}
            <button class="btn btn-success w-100 add-to-cart"
                    data-id="{{ $product->id }}">
                Add to Cart
            </button>

            {{-- WISHLIST --}}
            <button class="btn btn-outline-danger">
                ❤️
            </button>

        </div>

        {{-- ================= EXTRA FEATURES ================= --}}
        <hr>

        <ul class="list-unstyled small text-muted">
            <li>✔ Free Delivery Available</li>
            <li>✔ Cash on Delivery</li>
            <li>✔ 7 Days Return Policy</li>
        </ul>

    </div>

</div>