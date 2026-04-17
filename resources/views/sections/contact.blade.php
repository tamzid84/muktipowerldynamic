<!-- ================= CONTACT ================= -->
<section class="py-5 bg-dark text-white" id="contacts">
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