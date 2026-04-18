<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('meta_description', 'Mukti Power Private Limited - Total Electrical Solutions')">

    <title>@yield('title', 'Mukti Power Pvt Ltd')</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Custom Style -->
    <style>
        :root {
            --primary: #003087;
            --accent: #00b140;
        }

        body {
            font-family: 'Segoe UI', system-ui, sans-serif;
        }

        .navbar {
            background: rgba(0, 48, 135, 0.95) !important;
            backdrop-filter: blur(10px);
        }

        .hero {
            min-height: 100vh;
            position: relative;
            overflow: hidden;
        }

        #heroCarousel {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
        }

        #heroCarousel .carousel-item img {
            height: 100vh;
            object-fit: cover;
            filter: brightness(0.85);
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(rgba(0, 48, 135, 0.85), rgba(0, 48, 135, 0.85));
            z-index: 2;
        }

        .hero .container {
            z-index: 3;
            position: relative;
        }

        .section-title {
            color: var(--primary);
            position: relative;
        }

        .section-title:after {
            content: '';
            position: absolute;
            width: 80px;
            height: 4px;
            background: var(--accent);
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
        }

        .product-card {
            transition: all 0.3s;
            cursor: pointer;
        }

        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 176, 64, 0.25);
        }

        .category-btn {
            margin: 5px;
        }

        .modal-image {
            max-height: 420px;
            object-fit: cover;
            border-radius: 10px;
        }

        footer {
            background: #001f4d;
        }
    </style>

    @stack('styles')
</head>