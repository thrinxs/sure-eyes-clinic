<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <!-- Primary Meta Tags -->
    <title>Sure Eyes Clinic | Eye Care & Optical Services in Port Harcourt</title>
    <meta name="description"
        content="Sure Eyes Clinic offers trusted eye care, optical services, eye examinations, contact lenses, and glasses & frames in Port Harcourt. Affordable and modern eye care for all ages.">
    <meta name="keywords"
        content="eye clinic Port Harcourt, optical services, eye care, eye examination, contact lenses, glasses & frames">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Open Graph / Social Media -->
    <meta property="og:title" content="Sure Eyes Clinic | Eye Care & Optical Services in Port Harcourt">
    <meta property="og:description"
        content="Trusted eye care and optical services in Port Harcourt. Eye exams, glasses, contact lenses, and more.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://sureeyesclinic.com.ng">
    <meta property="og:image" content="https://sureeyesclinic.com.ng/assets/sureeyes-logo.png">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Sure Eyes Clinic | Eye Care & Optical Services in Port Harcourt">
    <meta name="twitter:description"
        content="Trusted eye care and optical services in Port Harcourt. Eye exams, glasses, contact lenses, and more.">
    <meta name="twitter:image" content="https://sureeyesclinic.com.ng/assets/sureeyes-logo.png">

    <!-- Schema Markup -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "MedicalClinic",
      "name": "Sure Eyes Clinic & Optical Services Ltd",
      "image": "https://sureeyesclinic.com.ng/assets/sureeyes-logo.png",
      "url": "https://sureeyesclinic.com.ng",
      "telephone": "+2349160191333",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "No. 168 Pipeline Rumuagholu Road, Off New Airport Road",
        "addressLocality": "Port Harcourt",
        "addressRegion": "Rivers",
        "postalCode": "500211",
        "addressCountry": "NG"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 4.8493,
        "longitude": 7.0333
      },
      "openingHoursSpecification": [
        {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday"],
          "opens": "08:00",
          "closes": "18:00"
        },
        {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": ["Saturday"],
          "opens": "09:00",
          "closes": "14:00"
        }
      ],
      "priceRange": "₦₦",
      "sameAs": [
        "https://facebook.com/yourpage",
        "https://instagram.com/yourpage",
        "https://twitter.com/yourpage",
        "https://tiktok.com/@yourpage",
        "https://youtube.com/yourchannel",
        "https://wa.me/2349160191333"
      ]
    }
    </script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css" />

    <!-- Favicon -->
    <link rel="icon" href="/assets/favicon_io/favicon.ico" type="image/png" height="60px" />

    <!-- Apple Touch Icon -->
    <link rel="apple-touch-icon" href="/assets/favicon_io/apple-touch-icon.png" />

    <style>
        @keyframes borderFlash {
            0% {
                border-color: #ffffff;
                box-shadow: 0 0 10px rgba(255, 255, 255, 0.4);
            }

            50% {
                border-color: #03b152;
                /* brand green */
                box-shadow: 0 0 18px rgba(3, 177, 82, 0.6);
            }

            100% {
                border-color: #ffffff;
                box-shadow: 0 0 10px rgba(255, 255, 255, 0.4);
            }
        }

        .animate-border-flash {
            border-width: 2px !important;
            border-style: solid;
            animation: borderFlash 1.2s infinite ease-in-out;
        }
    </style>
</head>

<body>
    <!-- Holiday Notification Card -->
<div id="holidayCard" class="holiday-card">
    <div class="holiday-card-hidden" id=""holidayCard>
      <span class="close-btn" id="holidayClose">&times;</span>
      <h2 id="holidayTitle">Holiday Notice</h2>
      <p id="holidayMessage">Sure-Eyes Clinic will be closed for the holidays from <strong class="date">24th December</strong> and will resume operations on <strong class="date">5th January</strong>.</p>
      <br><h5 id="holidayFooter">Wishing you a <strong class="wish">Happy New Year</strong> </h5>
    </div>
  </div>
  

    <header class="sticky top-0 z-50 bg-[var(--brand-green)] shadow-md">
        <div class="max-w-[var(--maxw)] mx-auto px-5 flex items-center justify-between py-3 relative">

            <!-- Left: Logo + Name + RC -->
            <div class="logo-container">
            <a href="index.php" class="flex items-center gap-3">
                <img src="/assets/sureeyes-logo.png" alt="Sure Eyes Clinic Logo"
                    class="w-11 h-11 rounded-[var(--radius)] bg-gradient-to-br from-[var(--brand-green)] to-[var(--brand-green-light)] logo-sparkle">
              
                <div class="flex flex-col leading-tight text-white site-name">
                    <span class="font-bold text-xl">Sure Eyes Clinic</span>
                    <span class="font-medium text-sm">& Optical Services Ltd | RC - 8526455</span>
                </div>
            </a>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center gap-6">
                <a href="index.php"
                    class="text-white font-bold tracking-wide relative hover:after:w-full after:absolute after:left-0 after:bottom-0 after:h-[2px] after:bg-white after:w-0 after:transition-all">Home</a>
                <a href="#about"
                    class="text-white font-bold tracking-wide relative hover:after:w-full after:absolute after:left-0 after:bottom-0 after:h-[2px] after:bg-white after:w-0 after:transition-all">About</a>
                <a href="#services"
                    class="text-white font-bold tracking-wide relative hover:after:w-full after:absolute after:left-0 after:bottom-0 after:h-[2px] after:bg-white after:w-0 after:transition-all">Services</a>
                <a href="#why"
                    class="text-white font-bold tracking-wide relative hover:after:w-full after:absolute after:left-0 after:bottom-0 after:h-[2px] after:bg-white after:w-0 after:transition-all">Why
                    Us</a>
                <a href="#testimonials"
                    class="text-white font-bold tracking-wide relative hover:after:w-full after:absolute after:left-0 after:bottom-0 after:h-[2px] after:bg-white after:w-0 after:transition-all">Testimonials</a>
                <a href="#faq"
                    class="text-white font-bold tracking-wide relative hover:after:w-full after:absolute after:left-0 after:bottom-0 after:h-[2px] after:bg-white after:w-0 after:transition-all">FAQ</a>
                <a href="appointment.html"
                    class="bg-[var(--brand-blue)] hover:bg-[var(--brand-blue-dark)] text-white font-semibold px-4 py-2 rounded-[var(--radius)] transition">
                    Book Now
                </a>
            </div>

            <!-- Hamburger Icon (mobile only, pushed right) -->
            <div id="hamburger" class="flex flex-col gap-1.5 cursor-pointer z-50 md:hidden">
                <span class="block w-6 h-0.5 bg-white transition-all"></span>
                <span class="block w-6 h-0.5 bg-white transition-all"></span>
                <span class="block w-6 h-0.5 bg-white transition-all"></span>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu"
            class="fixed top-0 left-0 w-3/4 max-w-xs h-full bg-[var(--brand-green)] flex flex-col p-16 gap-6 transform -translate-x-full opacity-0 transition-transform duration-500 z-40 md:hidden">
            <a href="index.php"
                class="text-white font-bold text-lg relative hover:after:w-full after:absolute after:left-0 after:bottom-0 after:h-[2px] after:bg-white after:w-0 after:transition-all">Home</a>
            <a href="#about"
                class="text-white font-bold text-lg relative hover:after:w-full after:absolute after:left-0 after:bottom-0 after:h-[2px] after:bg-white after:w-0 after:transition-all">About</a>
            <a href="#services"
                class="text-white font-bold text-lg relative hover:after:w-full after:absolute after:left-0 after:bottom-0 after:h-[2px] after:bg-white after:w-0 after:transition-all">Services</a>
            <a href="#why"
                class="text-white font-bold text-lg relative hover:after:w-full after:absolute after:left-0 after:bottom-0 after:h-[2px] after:bg-white after:w-0 after:transition-all">Why
                Us</a>
            <a href="#testimonials"
                class="text-white font-bold text-lg relative hover:after:w-full after:absolute after:left-0 after:bottom-0 after:h-[2px] after:bg-white after:w-0 after:transition-all">Testimonials</a>
            <a href="#faq"
                class="text-white font-bold text-lg relative hover:after:w-full after:absolute after:left-0 after:bottom-0 after:h-[2px] after:bg-white after:w-0 after:transition-all">FAQ</a>
            <a href="appointment.html"
                class="bg-[var(--brand-blue)] hover:bg-[var(--brand-blue-dark)] text-white px-4 py-2 rounded-[var(--radius)] font-semibold">Book
                Now</a>
        </div>
    </header>


    <script>
        const hamburger = document.getElementById('hamburger');
        const mobileMenu = document.getElementById('mobile-menu');
        let menuOpen = false;

        hamburger.addEventListener('click', () => {
            menuOpen = !menuOpen;
            if (menuOpen) {
                // Animate menu in
                mobileMenu.classList.remove('-translate-x-full', 'opacity-0');
                mobileMenu.classList.add('translate-x-0', 'opacity-100');
                // Animate hamburger to X
                hamburger.children[0].classList.add('rotate-45', 'translate-y-2');
                hamburger.children[1].classList.add('opacity-0');
                hamburger.children[2].classList.add('-rotate-45', 'translate-y-[-8px]');
            } else {
                // Animate menu out
                mobileMenu.classList.remove('translate-x-0', 'opacity-100');
                mobileMenu.classList.add('-translate-x-full', 'opacity-0');
                // Animate X back to hamburger
                hamburger.children[0].classList.remove('rotate-45', 'translate-y-2');
                hamburger.children[1].classList.remove('opacity-0');
                hamburger.children[2].classList.remove('-rotate-45', 'translate-y-[-8px]');
            }
        });
    </script>

    <!-- HERO SECTION SLIDESHOW -->
    <section class="hero-slider" id="home">
        <div class="hero-contents">
            <h1>Your Vision, Our Priority</h1>
            <p class="hero-subtitle">Trusted Eye Care & Optical Services in Port Harcourt</p>
            <!-- <p
                class="hero-subtitle2 max-w-md mx-auto text-center text-white/80 text-sm md:text-base leading-normal mt-3">
                Get professional eye tests, quality prescription glasses, and expert treatment at
                <span class="font-semibold text-white">Sure-Eyes Clinic</span> — the leading eye care center in Port
                Harcourt.
            </p> -->

            <div class="hero-actions">
                <a href="#services" class="cta-btn alt-btn">View Services</a>
                <a href="appointment.html" id="contact" class="cta-btn animate-border-flash">Book your eye examination today</a>

            </div>
        </div>
        <div class="slide active" style="background-image: url('/assets/hero/hero.jpeg');">
            <div class="overlay">

            </div>
        </div>
        <div class="slide" style="background-image: url('/assets/hero/hero2.jpeg');">
            <div class="overlay">
            </div>
        </div>
        <div class="slide" style="background-image: url('/assets/hero/hero3.jpeg');">
            <div class="overlay">
            </div>
        </div>
        <div class="slide" style="background-image: url('/assets/hero/hero4.jpeg');">
            <div class="overlay">
            </div>
        </div>
    </section>




    <section id="about">
        <div class="container">
            <h2 class="section-title text-center">About Us</h2>

            <div class="about-grid">
                <div class="about-text">
                    <p>
                        Sure-Eyes Clinic is a modern eye care and optical centre in Port Harcourt, dedicated to
                        providing accurate eye examinations, professional diagnosis, and high-quality vision care for
                        patients of all ages.
                    </p>

                    <p>
                        Since <strong>2020</strong>, our clinic has grown to serve over <strong>1,000 patients
                            every month</strong>, earning a strong reputation for reliable, affordable, and
                        compassionate eye care.
                    </p>

                    <p>
                        At Sure-Eyes Clinic, our mission is simple: protect your vision and enhance your quality of life
                        through trusted, personalized eye care.
                    </p>
                </div>

                <div class="image-curve-box">
                    <img src="/assets/about/clinic-pic.png" alt="Sure-Eyes Clinic(before & now)">
                </div>

            </div>
        </div>
    </section>


    <!-- SERVICES SECTION -->
    <section id="services" class="services-section">
        <div class="container">
            <h2 class="section-title">Our Services</h2>
            <div class="fancy-line"></div>

            <div class="services-grid">

                <!-- Comprehensive Eye Check -->
                <div class="service-card" style="--bg-img: url('/assets/services/eye-check.jpeg')">
                    <span class="border-line left"></span>
                    <span class="border-line right"></span>
                    <span class="border-line top"></span>
                    <span class="border-line bottom"></span>

                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="var(--brand-green)"
                            viewBox="0 0 24 24">
                            <path
                                d="M12 4.5C7.305 4.5 3.135 7.135 1.5 12c1.635 4.865 5.805 7.5 10.5 7.5s8.865-2.635 10.5-7.5C20.865 7.135 16.695 4.5 12 4.5zm0 12a4.5 4.5 0 1 1 0-9 4.5 4.5 0 0 1 0 9z" />
                            <circle cx="12" cy="12" r="2.5" />
                        </svg>
                    </div>
                    <h3>Comprehensive Eye Check</h3>
                    <p>Full vision assessment including refraction, eye-health evaluation, and diagnostic screening.</p>
                </div>

                <!-- Diagnosing & Treatment of Eye Conditions -->
                <div class="service-card" style="--bg-img: url('/assets/services/eye-treatment.png')">
                    <span class="border-line left"></span>
                    <span class="border-line right"></span>
                    <span class="border-line top"></span>
                    <span class="border-line bottom"></span>

                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="var(--brand-green)"
                            viewBox="0 0 24 24">
                            <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z" />
                        </svg>
                    </div>
                    <h3>Diagnosing & Treatment of Eye Conditions</h3>
                    <p>Professional management of conjunctivitis, dry eye syndrome, infections, allergies, and more.</p>
                </div>

                <!-- Refraction & Prescription of Glasses -->
                <div class="service-card" style="--bg-img: url('/assets/services/glasses.jpeg')">
                    <span class="border-line left"></span>
                    <span class="border-line right"></span>
                    <span class="border-line top"></span>
                    <span class="border-line bottom"></span>

                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="var(--brand-green)"
                            viewBox="0 0 24 24">
                            <path
                                d="M2 10c0-1.1.9-2 2-2h2c1.1 0 2 .9 2 2v2c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2v-2zm14 0c0-1.1.9-2 2-2h2c1.1 0 2 .9 2 2v2c0 1.1-.9 2-2 2h-2c-1.1 0-2-.9-2-2v-2zM6 12h12v-2H6v2z" />
                        </svg>
                    </div>
                    <h3>Refraction & Prescription of Glasses</h3>
                    <p>Accurate optical prescriptions with a wide range of frames and lenses for all ages.</p>
                </div>

                <!-- Contact Lens Fitting -->
                <div class="service-card" style="--bg-img: url('/assets/services/contact-lens.jpeg')">
                    <span class="border-line left"></span>
                    <span class="border-line right"></span>
                    <span class="border-line top"></span>
                    <span class="border-line bottom"></span>

                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="var(--brand-green)"
                            viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="9" stroke="var(--brand-green)" stroke-width="2" fill="none"
                                id="1stcircle" />
                            <circle cx="12" cy="12" r="4" fill="var(--brand-green)" id="secondcircle" />
                        </svg>
                    </div>
                    <h3>Contact Lens Fitting</h3>
                    <p>Soft lenses, toric lenses, cosmetic lenses, and proper training for safe usage.</p>
                </div>

                <!-- Optical Services & Accessories -->
                <div class="service-card" style="--bg-img: url('/assets/services/optical-accessories.jpg')">
                    <span class="border-line left"></span>
                    <span class="border-line right"></span>
                    <span class="border-line top"></span>
                    <span class="border-line bottom"></span>

                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="var(--brand-green)"
                            viewBox="0 0 24 24">
                            <path d="M2 12c0-5 4-9 9-9s9 4 9 9-4 9-9 9-9-4-9-9zm2 0a7 7 0 1 0 14 0 7 7 0 0 0-14 0z" />
                            <circle cx="7.5" cy="12" r="2" />
                            <circle cx="16.5" cy="12" r="2" />
                            <path d="M9.5 12h5" />
                        </svg>
                    </div>
                    <h3>Optical Services & Accessories</h3>
                    <p>Frames, medicated glasses, sunshades, lenses, and optical accessories for every style.</p>
                </div>

                <!-- Glaucoma Screening -->
                <div class="service-card" style="--bg-img: url('/assets/services/glaucoma.jpeg')">
                    <span class="border-line left"></span>
                    <span class="border-line right"></span>
                    <span class="border-line top"></span>
                    <span class="border-line bottom"></span>

                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="var(--brand-green)"
                            viewBox="0 0 24 24">
                            <path
                                d="M12 5C7 5 2.73 8.11 1 12c1.73 3.89 6 7 11 7s9.27-3.11 11-7c-1.73-3.89-6-7-11-7zm0 12a5 5 0 1 1 0-10 5 5 0 0 1 0 10z" />
                            <circle cx="12" cy="12" r="2.5" />
                        </svg>
                    </div>
                    <h3>Glaucoma Screening</h3>
                    <p>Early detection using intraocular pressure tests and optic nerve evaluations.</p>
                </div>

                <!-- Safety & Sport Glasses -->
                <div class="service-card" style="--bg-img: url('/assets/services/safety-sport.jpeg')">
                    <span class="border-line left"></span>
                    <span class="border-line right"></span>
                    <span class="border-line top"></span>
                    <span class="border-line bottom"></span>

                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="var(--brand-green)"
                            viewBox="0 0 24 24">
                            <path d="M3 9c0-1.1.9-2 2-2h14c1.1 0 2 .9 2 2v3c0 1.1-.9 2-2 2H5c-1.1 0-2-.9-2-2V9z" />
                        </svg>
                    </div>
                    <h3>Safety & Sport Glasses</h3>
                    <p>Durable eyewear for industrial work, sports, and field operations.</p>
                </div>

            </div>
        </div>
    </section>

    <!-- WHY CHOOSE US SECTION -->
    <section id="why-choose-us" class="bg-light py-16">
        <div class="container mx-auto px-5">
            <h2 class="section-title text-3xl font-bold text-center mb-4">Why Choose Us</h2>
            <p class="section-subtitle text-center text-lg text-gray-700 mb-12">
                We combine expertise, care, and modern technology to give you the best eye care experience.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Card 1 -->
                <div class="why-item flex flex-col items-center text-center bg-white p-6 rounded-lg shadow-md">

                    <div class="icon mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="var(--brand-green)"
                            viewBox="0 0 24 24">
                            <path
                                d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
                        </svg>
                    </div>
                    <h3 class="font-semibold text-lg mb-2">Experienced Optometrists</h3>
                    <p class="text-gray-600">Certified professionals with years of practice ensuring accurate diagnosis
                        and care.</p>
                </div>

                <!-- Card 2 -->
                <div class="why-item flex flex-col items-center text-center bg-white p-6 rounded-lg shadow-md">
                    <div class="icon mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="var(--brand-green)"
                            viewBox="0 0 24 24">
                            <path
                                d="M20 6h-2V4c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v2H4v2h16V6zM6 8v12h12V8H6zm5 3h2v2h-2v-2zm0 4h2v2h-2v-2z" />
                        </svg>
                    </div>
                    <h3 class="font-semibold text-lg mb-2">Advanced Equipment</h3>
                    <p class="text-gray-600">Using the latest diagnostic and corrective tools for precise treatment and
                        examinations.</p>
                </div>

                <!-- Card 3 -->
                <div class="why-item flex flex-col items-center text-center bg-white p-6 rounded-lg shadow-md">
                    <div class="icon mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="var(--brand-green)"
                            viewBox="0 0 24 24">
                            <path
                                d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm6 2c-1.33 0-4 0-6 0s-4 0-6 0c-1.11 0-2 .89-2 2v2h16v-2c0-1.11-.89-2-2-2z" />
                        </svg>
                    </div>
                    <h3 class="font-semibold text-lg mb-2">Comfortable Environment</h3>
                    <p class="text-gray-600">Modern, friendly, and welcoming space designed for a relaxed visit.</p>
                </div>

                <!-- Card 4 -->
                <div class="why-item flex flex-col items-center text-center bg-white p-6 rounded-lg shadow-md">
                    <div class="icon mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="var(--brand-green)"
                            viewBox="0 0 24 24">
                            <path
                                d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zM12 11c-1.66 0-3-1.34-3-3s1.34-3 3-3 3 1.34 3 3-1.34 3-3 3z" />
                        </svg>
                    </div>
                    <h3 class="font-semibold text-lg mb-2">Affordable & Transparent</h3>
                    <p class="text-gray-600">Clear pricing and honest consultations without hidden charges.</p>
                </div>
            </div>
        </div>
    </section>


    <!-- OUR TEAM SECTION -->
    <section id="team" class="py-16 bg-light">
        <div class="container mx-auto px-5">
            <h2 class="text-3xl font-bold text-center text-[var(--brand-green)] mb-4">Our Team</h2>
            <p class="text-center text-gray-700 mb-12">
                Meet the dedicated professionals who make Sure Eyes Clinic exceptional.
            </p>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                <!-- Team Member 1 -->
                <div
                    class="team-card bg-white rounded-lg shadow-md p-6 flex flex-col items-center text-center transition-transform transform hover:scale-105 hover:shadow-lg">
                    <div class="team-photo w-32 h-32 mb-4">
                        <img src="/assets/team/adline.jpeg" alt="Dr. Adline Anuri Chinwendu"
                            class="w-full h-full object-cover rounded-full border-4 border-[var(--brand-green)]">
                    </div>
                    <h3 class="team-name text-lg font-semibold text-[var(--brand-green)] mb-1">DR. ADLINE ANURI
                        CHINWENDU</h3>
                    <p class="team-position text-gray-600">Medical Director</p>
                </div>

                <!-- Team Member 2 -->
                <div
                    class="team-card bg-white rounded-lg shadow-md p-6 flex flex-col items-center text-center transition-transform transform hover:scale-105 hover:shadow-lg">
                    <div class="team-photo w-32 h-32 mb-4">
                        <img src="/assets/team/josh.png" alt="Baridubari Joshua Joe-Amos"
                            class="w-full h-full object-cover rounded-full border-4 border-[var(--brand-green)]">
                    </div>
                    <h3 class="team-name text-lg font-semibold text-[var(--brand-green)] mb-1">BARIDUBARI JOSHUA
                        JOE-AMOS</h3>
                    <p class="team-position text-gray-600">IT & Media Head</p>
                </div>

                <!-- Team Member 3 (Optional) -->
                <!--
            <div class="team-card bg-white rounded-lg shadow-md p-6 flex flex-col items-center text-center transition-transform transform hover:scale-105 hover:shadow-lg">
                <div class="team-photo w-32 h-32 mb-4">
                    <img src="/assets/team/profile.png" alt="Iheme Abigail" class="w-full h-full object-cover rounded-full border-4 border-[var(--brand-green)]">
                </div>
                <h3 class="team-name text-lg font-semibold text-[var(--brand-green)] mb-1">IHEME ABIGAIL</h3>
                <p class="team-position text-gray-600">Secretary</p>
            </div>
            -->
            </div>
        </div>
    </section>


    <!-- Partners -->
    <section id="partners" class="partners-section">
        <div class="container">
            <h2 class="partners-title">Our Partners</h2>
            <p class="partners-subtitle">
                Organizations and HMOs that trust our expertise
            </p>

            <div class="partners-grid">

                <!-- Corporate Clients -->
                <!-- <div class="partner-card"><img src="capital-index.png" alt="Capital Index Ltd"></div>
                <div class="partner-card"><img src="sterling-food.png" alt="Sterling Food Services Ltd"></div>
                <div class="partner-card"><img src="izzi-motors.png" alt="Izzi Motors Ltd"></div>
                <div class="partner-card"><img src="arrow-construction.png" alt="Arrow Construction Company Ltd"></div> -->

                <!-- HMO Partners -->
                <div class="partner-card"><img src="/assets/partners/axahmo.png" alt="Axa Mansard HMO"></div>
                <div class="partner-card"><img src="/assets/partners/reliancehmo.jpeg" alt="Reliance HMO"></div>
                <div class="partner-card"><img src="/assets/partners/hygeiahmo.png" alt="Hygeia HMO"></div>
                <div class="partner-card"><img src="/assets/partners/dothmo.png" alt="Dot HMO"></div>

            </div>
        </div>
    </section>



    <!-- ================= TESTIMONIALS & LEAVE REVIEW ================= -->
    <!-- TESTIMONIALS SECTION -->
    <section id="testimonials" class="bg-section">
        <div class="container">
            <h2 class="section-title">Testimonials</h2>
            <p class="section-subtitle">See what our patients say about us. You can also leave your own review!</p>

            <div class="testimonials-wrapper">
                <button class="testimonial-prev">&lt;</button>
                <div class="testimonials-slider" id="testimonialsSlider">
                    <?php include 'display_review.php'; ?>
                </div>
                <button class="testimonial-next">&gt;</button>
            </div>

            <!-- Leave a Review -->
            <div class="rate-review-section">
                <h3>Leave a Review</h3>
                <form id="reviewForm">
                    <input type="text" id="reviewName" name="reviewName" placeholder="Your Name" required>
                    <input type="email" id="reviewEmail" name="reviewEmail" placeholder="Your Email" required>
                    <input type="text" id="reviewPhone" name="reviewPhone" placeholder="Your Phone">
                    <input type="text" id="reviewLocation" name="reviewLocation" placeholder="Your Location">
                    <select id="reviewRating" name="reviewRating" required>
                        <option value="">Rating</option>
                        <option value="5">5 - Excellent</option>
                        <option value="4">4 - Very Good</option>
                        <option value="3">3 - Good</option>
                        <option value="2">2 - Fair</option>
                        <option value="1">1 - Poor</option>
                    </select>
                    <textarea id="reviewText" name="reviewText" placeholder="Your Review" required></textarea>
                    <button type="submit" class="cta-btn">Submit Review</button>
                </form>
            </div>
        </div>

        <!-- Success message -->
        <div id="reviewMessage" class="review-success-message"></div>
    </section>



    <!-- Google Review Link -->
    <div class="google-review-link">
        <a href="https://www.google.com/maps/place/?q=place_id:YOUR_PLACE_ID" target="_blank" class="cta-btn alt-btn">
            Write a Review on Google
        </a>
    </div>
    </section>


    <!-- FAQ SECTION -->
    <section id="faq">
        <div class="container">
            <h2 class="section-title">Frequently Asked Questions</h2>

            <div class="accordion">

                <button>Do I need an appointment?</button>
                <div class="panel">Walk-ins are welcome, but appointments help speed up service.</div>

                <button>How long does an eye exam take?</button>
                <div class="panel">Usually 15–30 minutes depending on test requirements.</div>

                <button>Do you offer children’s eye care?</button>
                <div class="panel">Yes — we assess and correct vision issues in children.</div>

                <button>Can I get same-day glasses?</button>
                <div class="panel">Yes, depending on your prescription and lens type.</div>

            </div>

        </div>
    </section>

    <!-- CONTACT SECTION -->
    <section id="contact-section">
        <div class="container">
            <h2 class="section-title">Contact Us</h2>
            <p class="section-subtitle">We’re here to help. Reach out to us or visit our clinic.</p>

            <div class="contact-grid">
                <!-- Contact Info + Map -->
                <div class="contact-details">
                    <div class="contact-info">
                        <p>📍 <strong>Address:</strong> No. 168 Pipeline Rumuagholu Road, Off New Airport Road, Port
                            Harcourt, Rivers State</p>
                        <p>📞 <strong>Phone:</strong>
                            <a href="tel:+2349160191333">+234 916 019 1333</a> |
                            <a href="tel:+2347012345514">+234 701 234 5514</a>
                        </p>
                        <p>📧 <strong>Email:</strong>
                            <a href="info@sureeyesclinic.com.ng">info@sureeyesclinic.com.ng</a>
                        </p>
                        <p>⏰ <strong>Opening Hours:</strong> Mon – Sat: 8:00 AM – 6:00 PM | Sun: Closed</p>
                    </div>

                    <!-- Google Map Embed -->
                    <div class="contact-map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3975.3216031343472!2d6.962499999999987!3d4.885707800000007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1069d18a0fa8ddf3%3A0x7ee2ea907c4d830!2sSURE%20EYES%20CLINIC!5e0!3m2!1sen!2sng!4v1765245727799!5m2!1sen!2sng"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="contact-form">
                    <form id="contactForm" action="submit_contact.php" method="POST">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" placeholder="Your Name" required>

                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="Your Email" required>

                        <label for="message">Message</label>
                        <textarea id="message" name="message" placeholder="Your Message" rows="5" required></textarea>

                        <label>
                            <input type="checkbox" id="subscribe" name="subscribe" value="1">Subscribe to our Newsletter
                        </label>

                        <button type="submit" class="cta-btn">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= FOOTER ================= -->
    <footer class="bg-[#0d3311] text-white pt-16 pb-8">
        <div class="max-w-7xl mx-auto px-6 py-12 grid grid-cols-1 gap-10 md:grid-cols-5">

            <!-- Column 1: Clinic Info -->
            <div class="space-y-3 text-center md:text-left">
                <h3 class="text-2xl font-bold text-white">Sure-Eyes Clinic</h3>
                <p class="text-[#8ed19b]">Trusted Eye Care • Affordable Eyewear • Modern Diagnostics</p>

                <p class="text-[#8ed19b]">
                    📍 No. 168 Pipeline Rumuagholu Road,<br>
                    Off New Airport Road, Port Harcourt
                </p>

                <p class="text-[#8ed19b]">
                    📞 <a href="tel:+2349160191333" class="hover:text-white transition">+234 916 019 1333</a><br>
                    📞 <a href="tel:+2347012345514" class="hover:text-white transition">+234 701 234 5514</a>
                </p>

                <p class="text-[#8ed19b]">
                    📧 <a href="mailto:info@sureeyesclinic.com.ng"
                        class="hover:text-white transition">info@sureeyesclinic.com.ng</a>
                </p>
            </div>

            <!-- Columns 2 & 3 wrapped in a mobile inner grid -->
            <div class="grid grid-cols-2 gap-6 md:grid-cols-2">

                <!-- Column 2: Quick Links -->
                <div class="space-y-6 text-center md:text-left">
                    <h4 class="text-xl font-semibold text-white mb-3">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="#home" class="text-[#8ed19b] hover:text-white transition">Home</a></li>
                        <li><a href="#about" class="text-[#8ed19b] hover:text-white transition">About Us</a></li>
                        <li><a href="#services" class="text-[#8ed19b] hover:text-white transition">Our Services</a></li>
                        <li><a href="#faq" class="text-[#8ed19b] hover:text-white transition">FAQ</a></li>
                        <li><a href="#contact-section" class="text-[#8ed19b] hover:text-white transition">Contact</a>
                        </li>
                        <li><a href="/career.html" class="text-[#8ed19b] hover:text-white transition">Career</a></li>
                        <li><a href="/appointment.html" class="text-[#8ed19b] hover:text-white transition">Book
                                Appointment</a></li>
                    </ul>
                </div>

                <!-- Column 3: Services -->
                <div class="space-y-6 text-center md:text-left">
                    <h4 class="text-xl font-semibold text-white mb-3">Services</h4>
                    <ul class="space-y-2 text-[#8ed19b]">
                        <li>Eye Examination</li>
                        <li>Glasses & Frames</li>
                        <li>Contact Lenses</li>
                        <li>Children’s Eye Care</li>
                        <li>Glaucoma Screening</li>
                        <li>Optical Diagnosis</li>
                    </ul>
                </div>
            </div>

            <!-- Column 4: Social Links -->
            <div class="space-y-3 text-center md:text-left">
                <h4 class="text-xl font-semibold text-white mb-3">Connect With Us</h4>
                <div class="flex justify-center md:justify-start flex-wrap gap-3">
                    <a href="https://facebook.com/yourpage" target="_blank" class="hover:scale-110 transition">
                        <img src="/assets/social-media/Facebook.png" alt="Facebook" class="w-8 h-8 filter invert">
                    </a>
                    <a href="https://instagram.com/yourpage" target="_blank" class="hover:scale-110 transition">
                        <img src="/assets/social-media/Instagram.png" alt="Instagram" class="w-8 h-8 filter invert">
                    </a>
                    <a href="https://twitter.com/yourpage" target="_blank" class="hover:scale-110 transition">
                        <img src="/assets/social-media/X.png" alt="X (Twitter)" class="w-8 h-8 filter invert">
                    </a>
                    <a href="https://tiktok.com/@yourpage" target="_blank" class="hover:scale-110 transition">
                        <img src="/assets/social-media/Tiktok.png" alt="TikTok" class="w-8 h-8 filter invert">
                    </a>
                    <a href="https://youtube.com/yourchannel" target="_blank" class="hover:scale-110 transition">
                        <img src="/assets/social-media/YouTube.png" alt="YouTube" class="w-8 h-8 filter invert">
                    </a>
                    <a href="https://wa.me/2349160191333" target="_blank" class="hover:scale-110 transition">
                        <img src="/assets/social-media/WhatsApp.png" alt="WhatsApp" class="w-8 h-8 filter invert">
                    </a>
                </div>
            </div>

            <!-- Column 5: Newsletter -->
            <div class="space-y-3 text-center md:text-left">
                <h4 class="text-xl font-semibold text-white mb-3">Newsletter</h4>
                <form id="newsletterForm" class="flex flex-col gap-3">
                    <input type="email" name="email" id="newsletterEmail" placeholder="Enter your email" required
                        class="p-2 rounded-md border border-gray-300 focus:outline-none focus:ring-1 focus:ring-[#8ed19b] focus:border-[#8ed19b] w-full text-black">
                    <button type="submit"
                        class="bg-[#8ed19b] text-[#0d3311] font-bold py-2 rounded-md hover:bg-white transition">Subscribe</button>
                    <p id="newsletterMsg" class="text-sm mt-1"></p>
                </form>
            </div>

        </div>

        <!-- Footer Bottom -->
        <div class="mt-10 border-t border-[#2b5c31] pt-5 text-center text-sm text-[#89b693] space-y-1">
            <p>© 2025 Sure-Eyes Clinic & Optical Services Ltd. All rights reserved.</p>
            <p>Designed & Powered by
                <a href="https://www.thrinxs.com.ng" target="_blank"
                    class="text-[#8ed19b] font-semibold hover:text-white transition">Thrinxs.</a>
            </p>
        </div>
    </footer>

    <script src="home.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const slides = document.querySelectorAll('.slide');
            let currentSlide = 0;

            function changeSlide() {
                slides[currentSlide].classList.remove('active');
                currentSlide = (currentSlide + 1) % slides.length;
                slides[currentSlide].classList.add('active');
            }

            setInterval(changeSlide, 5000);
        });
    </script>

    <script>
        // Testimonial slider functionality
        const slider = document.getElementById('testimonialsSlider');
        const prevBtn = document.querySelector('.testimonial-prev');
        const nextBtn = document.querySelector('.testimonial-next');

        let scrollAmount = 0;
        const scrollPerClick = 300; // adjust based on card width

        prevBtn.addEventListener('click', () => {
            slider.scrollBy({ left: -scrollPerClick, behavior: 'smooth' });
        });

        nextBtn.addEventListener('click', () => {
            slider.scrollBy({ left: scrollPerClick, behavior: 'smooth' });
        });

        // AJAX submission
        const reviewForm = document.getElementById('reviewForm');
        const reviewMessage = document.getElementById('reviewMessage');

        reviewForm.addEventListener('submit', async (e) => {
            e.preventDefault();

            const formData = new FormData(reviewForm);

            try {
                const response = await fetch('submit_review.php', {
                    method: 'POST',
                    body: formData
                });

                const result = await response.json();

                if (result.success) {
                    // Create new testimonial card dynamically
                    const newSlide = document.createElement('div');
                    newSlide.classList.add('testimonial-slide');
                    newSlide.innerHTML = `
                <div class="testimonial-person">
                    <h4 class="testimonial-name">${result.name}</h4>
                    <div class="testimonial-rating">${'★'.repeat(result.rating)}${'☆'.repeat(5 - result.rating)}</div>
                    ${result.phone ? `<p class="testimonial-phone">${result.phone}</p>` : ''}
                    ${result.location ? `<p class="testimonial-location">${result.location}</p>` : ''}
                </div>
                <p class="testimonial-text">${result.review_text}</p>
            `;

                    slider.prepend(newSlide); // Add new review to start
                    reviewForm.reset();

                    // Show success message
                    reviewMessage.textContent = "Thank you! Your review has been submitted.";
                    reviewMessage.style.opacity = 1;
                    setTimeout(() => { reviewMessage.style.opacity = 0; }, 3000);
                } else {
                    reviewMessage.textContent = "Oops! Failed to submit review.";
                    reviewMessage.style.opacity = 1;
                    setTimeout(() => { reviewMessage.style.opacity = 0; }, 3000);
                }
            } catch (error) {
                reviewMessage.textContent = "Error submitting review.";
                reviewMessage.style.opacity = 1;
                setTimeout(() => { reviewMessage.style.opacity = 0; }, 3000);
            }
        });
    </script>
    <script>
        const contactForm = document.getElementById('contactForm');

        contactForm.addEventListener('submit', async (e) => {
            e.preventDefault();

            const formData = new FormData(contactForm);
            let contactMessage = document.getElementById('contactMessage');

            if (!contactMessage) {
                contactMessage = document.createElement('div');
                contactMessage.id = 'contactMessage';
                contactMessage.style.cssText = `
            position: fixed;
            top: 20px;
            left: 50%;
            transform: translateX(-50%);
            background: #4BB543;
            color: white;
            padding: 15px 25px;
            border-radius: 8px;
            font-weight: bold;
            z-index: 9999;
            opacity: 0;
            transition: opacity 0.3s ease;
        `;
                document.body.appendChild(contactMessage);
            }

            try {
                const response = await fetch('submit_contact.php', {
                    method: 'POST',
                    body: formData
                });

                const result = await response.json();

                contactMessage.textContent = result.message;
                contactMessage.style.opacity = 1;

                setTimeout(() => { contactMessage.style.opacity = 0; }, 4000);

                if (result.success) {
                    contactForm.reset();
                }

            } catch (error) {
                contactMessage.textContent = "Error sending message.";
                contactMessage.style.opacity = 1;
                setTimeout(() => { contactMessage.style.opacity = 0; }, 4000);
            }
        });
    </script>
    <script>
        document.getElementById('newsletterForm').addEventListener('submit', function (e) {
            e.preventDefault(); // stop normal form submission

            const emailInput = document.getElementById('newsletterEmail');
            const msg = document.getElementById('newsletterMsg');
            const email = emailInput.value.trim();

            if (email === '') {
                msg.style.color = 'red';
                msg.textContent = 'Please enter your email.';
                return;
            }

            // Show temporary message
            msg.style.color = 'black';
            msg.textContent = 'Subscribing...';

            fetch('submit_newsletter.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                body: 'email=' + encodeURIComponent(email)
            })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        msg.style.color = 'green';
                        msg.textContent = data.message;
                        emailInput.value = ''; // clear input
                    } else {
                        msg.style.color = 'red';
                        msg.textContent = data.message;
                    }
                })
                .catch(err => {
                    msg.style.color = 'red';
                    msg.textContent = 'Something went wrong!';
                    console.error(err);
                });
        });
    </script>

    <script>
        const hamburger = document.querySelector('.hamburger');
        const menu = document.querySelector('.menu');

        hamburger.addEventListener('click', () => {
            hamburger.classList.toggle('active');
            menu.classList.toggle('active');
        });
    </script>
// Holiday Card Close
<script>
const holidayCard = document.getElementById('holidayCard');
const holidayClose = document.getElementById('holidayClose');

holidayClose.addEventListener('click', () => {
    holidayCard.style.display = 'none';
});

// Auto-hide after 10 seconds (optional)
setTimeout(() => {
    if(holidayCard) holidayCard.style.display = 'none';
}, 10000);

// Create snowflakes
const snowContainer = document.getElementById('snow-container');
const snowflakeCount = 25;

for(let i = 0; i < snowflakeCount; i++) {
    const snow = document.createElement('div');
    snow.classList.add('snowflake');
    snow.style.left = Math.random() * 100 + 'vw';
    snow.style.fontSize = (10 + Math.random() * 20) + 'px';
    snow.style.animationDuration = (5 + Math.random() * 10) + 's';
    snow.style.opacity = Math.random();
    snow.innerHTML = '❄'; // Snowflake character
    snowContainer.appendChild(snow);
}

</script>
</body>

</html>