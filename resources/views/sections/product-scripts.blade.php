<script>
const products = @json($products);

/* FILTER */
document.querySelectorAll('.filter-btn').forEach(btn => {
    btn.addEventListener('click', function () {

        document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
        this.classList.add('active');

        let filter = this.dataset.filter;

        document.querySelectorAll('.product-item').forEach(item => {
            item.style.display =
                (filter === 'all' || item.dataset.category === filter)
                ? 'block' : 'none';
        });

    });
});

/* MODAL */
function showProduct(id) {

    const product = products.find(p => p.id === id);
    if (!product) return;

    document.getElementById('modalTitle').innerText = product.title;
    document.getElementById('modalImage1').src = '/storage/' + product.image1;
    document.getElementById('modalDescription').innerText = product.description;

    let features = typeof product.features === 'string'
        ? JSON.parse(product.features)
        : product.features;

    let list = document.getElementById('modalFeatures');
    list.innerHTML = '';

    features.forEach(f => {
        list.innerHTML += `<li>✔ ${f}</li>`;
    });

    new bootstrap.Modal(document.getElementById('productModal')).show();
}
</script>