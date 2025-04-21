{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Panglao Resort Booking</title>

        <!-- Fonts & Icons -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

        <style>
            :root {
                --primary: #2c3e50;
                --secondary: #3498db;
                --accent: #e74c3c;
                --light: #ecf0f1;
                --dark: #2c3e50;
            }
        
            body {
                font-family: 'Nunito', sans-serif;
                margin: 0;
                padding: 0;
                color: var(--dark);
            }
        
            .hero {
                background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
                            url('https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
                background-size: cover;
                background-position: center;
                height: 100vh;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                text-align: center;
                color: white;
                padding: 0 20px;
            }
        
            .hero h1 {
                font-family: 'Playfair Display', serif;
                font-size: 4rem;
                margin-bottom: 20px;
            }
        
            .hero p {
                font-size: 1.5rem;
                max-width: 800px;
                margin-bottom: 30px;
            }
        
            .btn {
                display: inline-block;
                background: var(--accent);
                color: white;
                padding: 12px 30px;
                border-radius: 30px;
                text-decoration: none;
                font-weight: bold;
                transition: all 0.3s ease;
            }
        
            .btn:hover {
                background: #c0392b;
                transform: translateY(-3px);
            }
        
            .booking-form {
                background: white;
                padding: 30px;
                border-radius: 10px;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
                max-width: 1000px;
                margin: -80px auto 50px;
                position: relative;
                z-index: 10;
            }
        
            .form-grid {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
                gap: 20px;
            }
        
            .form-group {
                margin-bottom: 20px;
            }
        
            .form-group label {
                display: block;
                margin-bottom: 8px;
                font-weight: bold;
            }
        
            .form-group input, .form-group select {
                width: 100%;
                padding: 12px;
                border: 1px solid #ddd;
                border-radius: 5px;
            }
        
            .nav {
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                padding: 20px 50px;
                display: flex;
                justify-content: space-between;
                align-items: center;
                z-index: 1000;
                transition: all 0.3s ease;
            }
        
            .nav.scrolled {
                background: white;
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
                padding: 15px 50px;
            }
        
            .nav.scrolled a {
                color: var(--dark);
            }
        
            .nav-logo {
                font-family: 'Playfair Display', serif;
                font-size: 1.8rem;
                font-weight: bold;
                color: white;
                text-decoration: none;
            }
        
            .nav.scrolled .nav-logo {
                color: var(--primary);
            }
        
            .nav-links a {
                color: white;
                text-decoration: none;
                margin-left: 30px;
                font-weight: 600;
                transition: all 0.3s ease;
            }
        
            .nav-links a:hover {
                color: var(--accent);
            }
        
            .section {
                padding: 80px 20px;
                max-width: 1200px;
                margin: 0 auto;
                display: none;
            }
        
            .logged-in .section {
                display: block;
            }
        
            .section-title {
                text-align: center;
                font-family: 'Playfair Display', serif;
                font-size: 2.5rem;
                margin-bottom: 50px;
                color: var(--primary);
            }
        
            .rooms {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
                gap: 30px;
            }
        
            .room-card {
                background: white;
                border-radius: 10px;
                overflow: hidden;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
                transition: all 0.3s ease;
            }
        
            .room-card:hover {
                transform: translateY(-10px);
                box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
            }
        
            .room-img {
                height: 200px;
                width: 100%;
                object-fit: cover;
            }
        
            .room-content {
                padding: 20px;
            }
        
            .room-title {
                font-family: 'Playfair Display', serif;
                font-size: 1.5rem;
                margin-bottom: 10px;
            }
        
            .room-price {
                color: var(--accent);
                font-weight: bold;
                font-size: 1.2rem;
                margin-bottom: 15px;
            }
        
            .room-features {
                display: flex;
                flex-wrap: wrap;
                gap: 10px;
                margin-bottom: 20px;
            }
        
            .feature {
                background: var(--light);
                padding: 5px 10px;
                border-radius: 20px;
                font-size: 0.8rem;
            }
        
            .amenities {
                background: var(--light);
                padding: 60px 20px;
            }
        
            .amenities-grid {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
                gap: 30px;
                text-align: center;
            }
        
            .amenity {
                padding: 20px;
            }
        
            .amenity i {
                font-size: 2.5rem;
                color: var(--secondary);
                margin-bottom: 20px;
            }
        
            footer {
                background: var(--dark);
                color: white;
                padding: 50px 20px;
                text-align: center;
            }
        
            .footer-links {
                display: flex;
                justify-content: center;
                gap: 30px;
                margin-bottom: 30px;
            }
        
            .footer-links a {
                color: white;
                text-decoration: none;
            }
        
            .social-links {
                margin-bottom: 30px;
            }
        
            .social-links a {
                color: white;
                margin: 0 10px;
                font-size: 1.2rem;
            }
        
            .auth-only {
                display: none;
            }
        
            .logged-in .auth-only {
                display: inline-block;
            }
        
            @media (max-width: 768px) {
                .hero h1 {
                    font-size: 2.5rem;
                }
        
                .nav {
                    padding: 15px 20px;
                }
        
                .nav-links {
                    display: none;
                }
        
                .form-grid {
                    grid-template-columns: 1fr;
                }
            }
        </style>        
    </head>
    <body class="antialiased">
        <!-- Navigation -->
        <nav class="nav">
            <a href="#" class="nav-logo">Panglao Resort Booking</a>
            <div class="nav-links">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                @endif
            </div>
        </nav>

        <!-- Hero Section -->
        <section class="hero" id="home">
            <h1>Experience Luxury by the Ocean</h1>
            <p>Discover the perfect blend of comfort and elegance at our beachfront resort with world-class amenities and breathtaking views.</p>
            @if (Route::has('login'))
                @auth
                    <a href="#booking" class="btn">Book Your Stay</a>
                @else
                    <a href="{{ route('login') }}" class="btn">Log in to Book</a>
                @endauth
            @endif
        </section>
        <!-- Footer -->
        <footer id="contact">
            <div class="footer-links">
                <a href="#">About Us</a>
                <a href="#">Privacy Policy</a>
                @if (Route::has('login'))
                    @auth
                        <a href="#contact" class="auth-only">Contact</a>
                    @endauth
                @endif
            </div>
            <div class="social-links">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-tripadvisor"></i></a>
            </div>
            <p>Panglao Resorts, Bohol | Phone: 09060173544 | Email: panglaoresorts@gmail.com</p>
            <p>&copy; 2025 Panglao Resorts Bohol. All rights reserved.</p>
        </footer>

        <script>
            // Navbar scroll effect
            window.addEventListener('scroll', function() {
                const nav = document.querySelector('.nav');
                if (window.scrollY > 50) {
                    nav.classList.add('scrolled');
                } else {
                    nav.classList.remove('scrolled');
                }
            });
            
            // Smooth scrolling for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth'
                        });
                    }
                });
            });
        </script>
    </body>
</html> --}}
