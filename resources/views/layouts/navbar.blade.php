<!-- Navbar -->
@php
    $menu = \App\Models\Menu::where('name', 'header')->with('items')->first();
@endphp

<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
        <a class="navbar-brand fw-bold fs-3 d-flex align-items-center" href="/">
    <img src="{{ setting('site_logo') ? asset('storage/' . setting('site_logo')) : asset('default-logo.png') }}"
         height="40"
         class="me-2">
    Mukti Power
</a>
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                @foreach($menu->items as $item)
                    @if($item->is_active)
                        <li class="nav-item">
                            <a class="nav-link" href="{{ $item->url }}">
                                {{ $item->title }}
                            </a>
                        </li>
                    @endif
                @endforeach
            </ul>
        </div>
    </div>
</nav>