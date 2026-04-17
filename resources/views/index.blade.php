@extends('layouts.app')

@section('title', 'Mukti Power Pvt Ltd')

@section('content')

<!-- Hero Section with Background Carousel -->
<section id="home" class="hero position-relative">
    
    <!-- Background Carousel -->
    <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
        <div class="carousel-inner">
            
            <!-- Slide 0 -->
            
             <!-- Slide 1 -->
            <div class="carousel-item active">
               <img src="{{ asset('storage/products/tf1.png') }}" class="d-block w-100" alt="Transformer">
            </div>
            
            <!-- Slide 2 -->
            <div class="carousel-item">
                <img src="{{ asset('storage/products/gen1.png') }}" class="d-block w-100" alt="Generator Installation">
           
            </div>
            
            <!-- Slide 3 -->
            <div class="carousel-item">
                <img src="{{ asset('storage/products/solar1.png') }}" class="d-block w-100" alt="Solar Power">
            </div>
            
            <!-- Slide 4 -->
            <div class="carousel-item">
                <img src="{{ asset('storage/products/pump1.png') }}" class="d-block w-100" alt="Substation">
            </div>
             <!-- Slide 5 -->
            <div class="carousel-item active">
                <img src="{{ asset('storage/products/swg1.png') }}" alt="Electrical Projects">
            </div>
            <!-- Slide 6 -->
             <div class="carousel-item active">
                <img src="{{ asset('storage/products/bbt1.png') }}" alt="Electrical Projects">
            </div>
            <!-- Slide 7 -->
             <div class="carousel-item active">
                <img src="{{ asset('storage/products/avr1.png') }}" alt="Electrical Projects">
            </div>
            <!-- Slide 8 -->
            <div class="carousel-item active">
                <img src="{{ asset('storage/products/all.png') }}" class="d-block w-100" alt="Transformer">
            </div>
        </div>
    </div>

    <!-- Dark Overlay -->
    <div class="overlay"></div>

    <!-- Content -->
    <div class="container position-relative z-3">
        <div class="row align-items-center min-vh-100">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="display-3 fw-bold mb-3">Mukti Power Private Limited</h1>
                <p class="text-warning lead mb-4 fs-4">Supply • Installation • Maintenance of All Electrical Equipment</p>
                <h2 class="text-white mb-4">WE DEAL WITH TOTAL SOLUTION</h2>
                <p class="text-warning mb-5">Transformers • Generators • Solar • Lifts • Substations • Switchgear • BBT • AVR & More</p>
                
                <a href="#contact" class="btn btn-success btn-lg px-5 py-3 me-3">Get a Quote Today</a>
                <a href="tel:+8801553436939" class="btn btn-outline-light btn-lg px-5 py-3">
                    <i class="fas fa-phone me-2"></i> Call Now
                </a>
            </div>
        </div>
    </div>
</section>

    <!-- About Us -->
    <section id="about" class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title display-5 fw-bold">About Mukti Power</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="bg-light p-5 rounded-4 shadow-sm">
                        <p class="lead">Mukti Power Private Ltd came into existence with the objective of ensuring safe power supply and self-employment by supplying quality equipment to the power sector of the country.</p>
                        <p>We are determined not to deviate from the standard of supply equipment. We have established strong business relationships with European and Chinese high-quality manufacturers. Our honesty, devotion and service mentality is our main strength.</p>
                        <p class="fw-bold text-success">We are committed to provide the best service to all our customers in the power sector of Bangladesh.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Solutions -->
    <section id="solutions" class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title display-5 fw-bold">Total Power Solutions</h2>
            </div>
            <div class="row g-4 text-center">
                <div class="col-md-3 col-6"><div class="p-4 bg-white rounded-3 shadow-sm"><i class="fas fa-subway fa-3x text-primary mb-3"></i><h6>Sub-Station</h6></div></div>
                <div class="col-md-3 col-6"><div class="p-4 bg-white rounded-3 shadow-sm"><i class="fas fa-bolt fa-3x text-primary mb-3"></i><h6>Generator</h6></div></div>
                <div class="col-md-3 col-6"><div class="p-4 bg-white rounded-3 shadow-sm"><i class="fas fa-sun fa-3x text-primary mb-3"></i><h6>Solar System</h6></div></div>
                <div class="col-md-3 col-6"><div class="p-4 bg-white rounded-3 shadow-sm"><i class="fas fa-elevator fa-3x text-primary mb-3"></i><h6>Lift / Elevator</h6></div></div>
                <div class="col-md-3 col-6"><div class="p-4 bg-white rounded-3 shadow-sm"><i class="fas fa-pump-soap fa-3x text-primary mb-3"></i><h6>Pumps & Pumping</h6></div></div>
                <div class="col-md-3 col-6"><div class="p-4 bg-white rounded-3 shadow-sm"><i class="fas fa-plug fa-3x text-primary mb-3"></i><h6>Bus-Bar Trunking</h6></div></div>
                <div class="col-md-3 col-6"><div class="p-4 bg-white rounded-3 shadow-sm"><i class="fas fa-tachometer-alt fa-3x text-primary mb-3"></i><h6>Industrial AVR</h6></div></div>
                <div class="col-md-3 col-6"><div class="p-4 bg-white rounded-3 shadow-sm"><i class="fas fa-cogs fa-3x text-primary mb-3"></i><h6>Switchgear</h6></div></div>
            </div>
        </div>
    </section>

    <!-- Premium Products Section (Updated with Filter & Modal) -->
  

<!-- ================= PRODUCTS ================= -->
<section class="py-5">
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
</section>
<!-- Why Us -->
    <section id="whyus" class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title display-5 fw-bold">Why Choose Mukti Power</h2>
            </div>
            <div class="row g-5 text-center">
                <div class="col-md-4">
                    <i class="fas fa-users fa-4x text-primary mb-4"></i>
                    <h4>Expert Team</h4>
                    <p>Highly trained engineers and technical persons from home and abroad.</p>
                </div>
                <div class="col-md-4">
                    <i class="fas fa-tools fa-4x text-primary mb-4"></i>
                    <h4>Modern Equipment</h4>
                    <p>We use the latest tools and never compromise with safety and quality.</p>
                </div>
                <div class="col-md-4">
                    <i class="fas fa-headset fa-4x text-primary mb-4"></i>
                    <h4>Best After-Sale Service</h4>
                    <p>Committed to provide service whenever you need. Best service team always ready.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Vision & Mission -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="border-start border-5 border-primary ps-4">
                        <h2 class="fw-bold text-primary">Our Vision</h2>
                        <p class="lead">To supply high quality equipment at low cost and contribute to the power sector of Bangladesh.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="border-start border-5 border-success ps-4">
                        <h2 class="fw-bold text-success">Our Mission</h2>
                        <p class="lead">Achieve our goals with modern machinery, skilled manpower and excellent management.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- ================= CONTACT ================= -->
<section class="py-5 bg-dark text-white">
    <div class="container">

        <div class="row">

            <div class="col-lg-6">
                    <h2 class="mb-4">Contact Us</h2>
                    <p class="lead">Ready to power your project?</p>
                    <div class="mt-4">
                        <p><i class="fas fa-phone me-3"></i> +880 1553-436939</p>
                        <p><i class="fas fa-phone me-3"></i> +880 1816-624881</p>
                        <p><i class="fas fa-phone me-3"></i> +880 1972-373745</p>
                        <p><i class="fas fa-envelope me-3"></i> muktipowerpvtltd@gmail.com</p>
                        <p><i class="fas fa-globe me-3"></i> www.muktipower.com</p>
                    </div>
                </div>

            <div class="col-md-6">
                <form method="POST" action="/contact" class="bg-white text-dark p-4 rounded">
                    @csrf
                    <input type="text" name="name" class="form-control mb-3" placeholder="Name">
                    <input type="text" name="phone" class="form-control mb-3" placeholder="Phone">
                    <textarea name="message" class="form-control mb-3" rows="4" placeholder="Your Requirement/Message"></textarea>
                    <button class="btn btn-success w-100">Send</button>
                </form>
            </div>

        </div>

    </div>
</section>

<!-- ================= PRODUCT MODAL ================= -->
<div class="modal fade" id="productModal" tabindex="-1">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">

            <div class="modal-header">
                <h5 id="modalTitle" class="modal-title"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <div class="row">

                    <div class="col-md-6">
                        <img id="modalImage1" class="img-fluid mb-3">
                    </div>

                    <div class="col-md-6">
                        <p id="modalDescription"></p>
                        <ul id="modalFeatures"></ul>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
 

@endsection

<!-- ================= SCRIPTS ================= -->
@push('scripts')

<script>

const products = @json($products);

/* ================= FILTER ================= */
document.querySelectorAll('.filter-btn').forEach(btn => {
    btn.addEventListener('click', function () {

        document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
        this.classList.add('active');

        let filter = this.dataset.filter;

        document.querySelectorAll('.product-item').forEach(item => {
            if (filter === 'all' || item.dataset.category === filter) {
                item.style.display = 'block';
            } else {
                item.style.display = 'none';
            }
        });

    });
});

/* ================= MODAL ================= */
function showProduct(id) {

    const product = products.find(p => p.id === id);
    if (!product) return;

    document.getElementById('modalTitle').innerText = product.title;
    document.getElementById('modalImage1').src = '/storage/' + product.image1;
    document.getElementById('modalDescription').innerText = product.description;

    let features = product.features;

    if (typeof features === 'string') {
        features = JSON.parse(features);
    }

    let list = document.getElementById('modalFeatures');
    list.innerHTML = '';

    features.forEach(f => {
        list.innerHTML += `<li>✔ ${f}</li>`;
    });

    new bootstrap.Modal(document.getElementById('productModal')).show();
}

</script>

@endpush