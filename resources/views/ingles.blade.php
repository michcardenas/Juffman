<!-- Header & Navigation -->
   @extends('layouts.app_ingles')

    <!-- Hero Section -->
<section id="inicio" class="hero-carousel">
    <!-- Simple and robust Bootstrap carousel -->
    <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
        <!-- Indicators -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="3"></button>
        </div>
        
        <!-- Carousel slides -->
        <div class="carousel-inner">
            <!-- Slide 1 -->
            <div class="carousel-item active">
                <div class="hero-slide" style="background-image: url('{{ asset('images/kitchen1.jpg') }}');">
                    <div class="hero-overlay"></div>
                    <div class="hero-content container">
                        <div class="row">
                            <div class="col-lg-8 ps-lg-5">
                                <h1>We Design Your Dream Kitchen Before Installation</h1>
                                <p class="lead mb-4">Visualize it in 3D and experience it in virtual reality.</p>
                                <a href="#contacto" class="btn btn-primary btn-lg">Schedule Your Design</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Slide 2 -->
            <div class="carousel-item">
                <div class="hero-slide" style="background-image: url('{{ asset('images/kitchen2.jpg') }}');">
                    <div class="hero-overlay"></div>
                    <div class="hero-content container">
                        <div class="row">
                            <div class="col-lg-8 ps-lg-5">
                                <h1>Modern Kitchens Adapted to Your Space</h1>
                                <p class="lead mb-4">Smart solutions and high-quality materials.</p>
                                <a href="#contacto" class="btn btn-primary btn-lg">Discover More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Slide 3 -->
            <div class="carousel-item">
                <div class="hero-slide" style="background-image: url('{{ asset('images/kitchen3.jpg') }}');">
                    <div class="hero-overlay"></div>
                    <div class="hero-content container">
                        <div class="row">
                            <div class="col-lg-8 ps-lg-5">
                                <h1>Quality and Elegance in Every Detail</h1>
                                <p class="lead mb-4">Designs that combine aesthetics with functionality.</p>
                                <a href="#contacto" class="btn btn-primary btn-lg">View Our Designs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Slide 4 -->
            <div class="carousel-item">
                <div class="hero-slide" style="background-image: url('{{ asset('images/kitchen4.jpg') }}');">
                    <div class="hero-overlay"></div>
                    <div class="hero-content container">
                        <div class="row">
                            <div class="col-lg-8 ps-lg-5">
                                <h1>Transform Your Home with Exclusive Designs</h1>
                                <p class="lead mb-4">Custom kitchens that reflect your style.</p>
                                <a href="#contacto" class="btn btn-primary btn-lg">Start Your Project</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Navigation controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
</section>

<!-- About Us Section -->
<section id="nosotros" class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <img src="{{ asset('images/architect.jpg') }}" alt="About JUFMAN Kitchen Designs" class="img-fluid rounded">
            </div>
            <div class="col-lg-6">
                <h2 class="section-title">Design with purpose. Service with heart.</h2>
                <p class="mb-4">At JUFMAN Kitchen Designs we combine technology, creativity and professional execution to transform kitchens into functional, modern and personalized spaces. We believe a kitchen should adapt to your lifestyle, not the other way around.</p>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div class="d-flex align-items-start">
                            <i class="fas fa-vr-cardboard text-primary me-3 mt-1" style="font-size: 1.5rem;"></i>
                            <div>
                                <h5>3D Visualization + Virtual Reality</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="d-flex align-items-start">
                            <i class="fas fa-tools text-primary me-3 mt-1" style="font-size: 1.5rem;"></i>
                            <div>
                                <h5>Supervised installation from start to finish</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="d-flex align-items-start">
                            <i class="fas fa-handshake text-primary me-3 mt-1" style="font-size: 1.5rem;"></i>
                            <div>
                                <h5>Personal, direct and transparent approach</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="d-flex align-items-start">
                            <i class="fas fa-lightbulb text-primary me-3 mt-1" style="font-size: 1.5rem;"></i>
                            <div>
                                <h5>Real solutions, not just cabinets</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section id="servicios" class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title text-center">What we do for you?</h2>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-drafting-compass"></i>
                    </div>
                    <h4>3D Kitchen Design</h4>
                    <p>We view your space together and design your ideal kitchen.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-vr-cardboard"></i>
                    </div>
                    <h4>Virtual Reality Tour</h4>
                    <p>Experience it before you buy.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-comments"></i>
                    </div>
                    <h4>Personalized Consultation</h4>
                    <p>We guide you step by step in materials, layout and style.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-hammer"></i>
                    </div>
                    <h4>Supervised Installation</h4>
                    <p>We accompany you throughout the entire process until the end.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Portfolio Section -->
<section id="portafolio" class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title text-center">Real inspiration for your next kitchen</h2>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="portfolio-item">
                    <img src="{{ asset('images/kitchen1.jpg') }}" alt="Kitchen Design 1" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="portfolio-item">
                    <img src="{{ asset('images/kitchen2.jpg') }}" alt="Kitchen Design 2" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="portfolio-item">
                    <img src="{{ asset('images/kitchen3.jpg') }}" alt="Kitchen Design 3" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="portfolio-item">
                    <img src="{{ asset('images/kitchen4.jpg') }}" alt="Kitchen Design 4" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="portfolio-item">
                    <img src="{{ asset('images/kitchen5.jpg') }}" alt="Kitchen Design 5" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="portfolio-item">
                    <img src="{{ asset('images/kitchen6.jpg') }}" alt="Kitchen Design 6" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section id="testimonios" class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title text-center">What our clients say</h2>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="testimonial-card">
                    <img src="{{ asset('images/testimonial-1.jpg') }}" alt="Client 1" class="testimonial-avatar" onerror="this.src='{{ asset('images/user.png') }}'">
                    <h5>Maria Gonzalez</h5>
                    <p class="text-muted">Minneapolis, MN</p>
                    <p>"Seeing my kitchen in 3D before installation was incredible. The final design turned out exactly as we visualized it."</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="testimonial-card">
                    <img src="{{ asset('images/testimonial-2.jpg') }}" alt="Client 2" class="testimonial-avatar" onerror="this.src='{{ asset('images/user.png') }}'">
                    <h5>Carlos Ramirez</h5>
                    <p class="text-muted">St. Paul, MN</p>
                    <p>"The JUFMAN team understood perfectly what we wanted and surprised us with solutions we hadn't considered."</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="testimonial-card">
                    <img src="{{ asset('images/testimonial-3.jpg') }}" alt="Client 3" class="testimonial-avatar" onerror="this.src='{{ asset('images/user.png') }}'">
                    <h5>Ana Martinez</h5>
                    <p class="text-muted">Bloomington, MN</p>
                    <p>"Professional, detail-oriented, and very committed. Our kitchen turned out spectacular and functional for the whole family."</p>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Call to Action -->
  <section class="cta-section" style="background-image: url('{{ asset('images/cta-bg.jpg') }}'); background-size: cover; background-position: center;">
    <div class="container text-center">
        <h2 class="display-4 mb-4">Ready to transform your kitchen?</h2>
        <a href="#contacto" class="btn btn-light btn-lg">Request your free design</a>
    </div>
</section>

<!-- Contact Section -->
<section id="contacto" class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center mb-5">
                <h2 class="section-title text-center">Contact Us</h2>
                <p class="lead">We're ready to make your dream kitchen a reality</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <form class="contact-form">
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Full name" required>
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="mb-3">
                        <input type="tel" class="form-control" placeholder="Phone" required>
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" rows="4" placeholder="Message" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Send message</button>
                </form>
            </div>
            <div class="col-lg-6">
                <div class="ps-lg-5">
                    <div class="mb-4">
                        <h4>Location</h4>
                        <p>Minneapolis, MN</p>
                    </div>
                    <div class="mb-4">
                        <h4>Email</h4>
                        <p>info@jufmankitchens.com</p>
                    </div>
                    <div class="mb-4">
                        <h4>Social Media</h4>
                        <p>Instagram: @jufmankitchen</p>
                    </div>
                    <!-- <div>
                        <a href="https://wa.me/1234567890" class="whatsapp-btn">
                            <i class="fab fa-whatsapp"></i> Chat with us
                        </a>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mb-4 mb-lg-0">
                <img src="{{ asset('images/jufman_blanco.png') }}" alt="JUFMAN Kitchen Designs" height="160">
                <p class="mt-3">Transforming kitchen spaces into homes with personality.</p>
            </div>
            <div class="col-lg-4 mb-4 mb-lg-0 text-lg-center">
                <h5>Quick Links</h5>
                <div class="footer-menu mt-3">
                    <a href="#inicio">Home</a>
                    <a href="#servicios">Services</a>
                    <a href="#portafolio">Portfolio</a>
                    <a href="#testimonios">Testimonials</a>
                    <a href="#contacto">Contact</a>
                </div>
            </div>
            <div class="col-lg-4 text-lg-end">
                <h5>Follow Us</h5>
                <div class="social-links mt-3">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-pinterest"></i></a>
                    <a href="#"><i class="fab fa-houzz"></i></a>
                </div>
            </div>
        </div>
        <div class="footer-bottom text-center">
            <p>Copyright JUFMAN Kitchen Designs LLC © 2025</p>
            <div>
                <a href="#" class="text-white-50">Privacy Policy</a> | 
                <a href="#" class="text-white-50">Terms and Conditions</a>
            </div>
        </div>
    </div>
</footer>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>