<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Waitlist - REAN Solar Limited </title>
    <meta name="description"
        content="Connect with trusted solar manufacturers, distributors, and recyclers across Nigeria. Find the best solar solutions near you with REAN Solar Limited.">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.13.3/cdn.min.js" defer></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        .gradient-bg {
            background: linear-gradient(135deg, rgb(2, 28, 140) 0%, #764ba2 100%);
        }

        .hero-pattern {
            background-image: url("https://www.freepik.com/free-photo/solar-panels-meadow_999831.htm#fromView=search&page=1&position=24&uuid=af31c96b-13e4-4ff3-87fd-692d6a7990af&query=solar"),
                radial-gradient(circle at 75px 75px, rgba(255, 255, 255, .2) 2%, transparent 2%);
            background-size: 100px 100px;
        }

        .solar-animation {
            animation: float 3s ease-in-out infinite;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        .fade-in {
            animation: fadeIn 0.6s ease-in;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body class="bg-gray-50">
  
 <!-- Navigation -->
<nav class="bg-white shadow-lg fixed w-full z-50">
    <div class="container mx-auto px-6 py-3">
        <div class="flex justify-between items-center">
            <!-- Logo -->
            <div class="flex items-center space-x-4">
                <img src="/assets/img/rean-logo.png" alt="REAN Solar Limited Logo" class="h-14 w-auto">
            </div>

            <!-- Desktop Menu -->
            <div class="hidden md:flex space-x-6">
                <a href="#features" class="text-gray-600 hover:text-blue-600 transition">Features</a>
                <a href="#about" class="text-gray-600 hover:text-blue-600 transition">About</a>
                <a href="#faq" class="text-gray-600 hover:text-blue-600 transition">FAQ</a>
                <a href="#contact" class="text-gray-600 hover:text-blue-600 transition">Contact</a>
            </div>

            <!-- Mobile Icon -->
            <div class="md:hidden">
                <button id="menuToggle">
                    <i class="fas fa-bars text-gray-600 text-2xl hover:text-blue-600 transition"></i>
                </button>
            </div>
        </div>

        <!-- Mobile Dropdown Menu -->
        <div id="mobileMenu" class="md:hidden hidden flex-col bg-white shadow-md rounded-b px-4 pb-4 pt-2 transition-all duration-300 ease-in-out">
            <a href="#features" class="block py-2 text-gray-700 hover:text-blue-600 transition">Features</a>
            <a href="#about" class="block py-2 text-gray-700 hover:text-blue-600 transition">About</a>
            <a href="#faq" class="block py-2 text-gray-700 hover:text-blue-600 transition">FAQ</a>
            <a href="#contact" class="block py-2 text-gray-700 hover:text-blue-600 transition">Contact</a>
        </div>
    </div>
</nav>


    <!-- Hero Section -->
<section class="min-h-screen flex items-center pt-[96px] pb-20 sm:pb-32" style="
    background: linear-gradient(rgba(0,60,30,0.7), rgba(0,60,30,0.7)),
    url('assets/img/hero-bg.jpg'); 
    background-size: cover; 
    background-position: center;">

    <div class="container mx-auto px-6 text-center">
        <div class="max-w-4xl mx-auto fade-in">
            <div class="solar-animation mb-6 sm:mb-8 flex justify-center">
                <img src="/assets/img/iconography.png" alt="Sun Icon"
                    class="h-14 sm:h-20 w-auto animate-spin-slightly-faster" />
            </div>

            <h1 class="text-3xl sm:text-5xl font-bold text-white mb-4 sm:mb-6 drop-shadow-lg">
                Bridging the Solar Supply Gap Across Nigeria
            </h1>
            <p class="text-base sm:text-xl text-green-100 mb-6 sm:mb-8 leading-relaxed">
                Rean Solar Limited connects businesses and households with the right solar manufacturers,
                distributors, and recyclers — using advanced location-matching and seamless communication tools.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <button onclick="openWaitlistModal()"
                    class="bg-green-700 text-yellow-300 px-6 py-3 sm:px-8 sm:py-4 rounded-full font-semibold text-base sm:text-lg hover:bg-green-800 hover:text-yellow-200 transition transform hover:scale-105 shadow-lg">
                    <i class="fas fa-rocket mr-2"></i>
                    Join Waitlist
                </button>
                <a href="#features"
                    class="bg-transparent border-2 border-yellow-300 text-yellow-300 px-6 py-3 sm:px-8 sm:py-4 rounded-full font-semibold text-base sm:text-lg hover:bg-yellow-300 hover:text-green-900 transition shadow-lg">
                    <i class="fas fa-info-circle mr-2"></i>
                    Learn More
                </a>
            </div>
        </div>
    </div>
</section>


    <!-- Features Section -->
    <section id="features" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Powerful Features for Everyone</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Whether you're a manufacturer, distributor, or consumer, our platform has everything you need.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-gray-50 p-8 rounded-xl hover:shadow-lg transition">
                    <div class="w-16 h-16 bg-blue-500 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-map-marker-alt text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-semibold mb-4">Location-Based Matching</h3>
                    <p class="text-gray-600">Find manufacturers, distributors, and recyclers near you with our advanced
                        GPS tracking and mapping system.</p>
                </div>

                <div class="bg-gray-50 p-8 rounded-xl hover:shadow-lg transition">
                    <div class="w-16 h-16 bg-green-500 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-comments text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-semibold mb-4">Seamless Communication</h3>
                    <p class="text-gray-600">Built-in messaging system connecting all stakeholders with document sharing
                        and video consultation.</p>
                </div>

                <div class="bg-gray-50 p-8 rounded-xl hover:shadow-lg transition">
                    <div class="w-16 h-16 bg-yellow-500 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-star text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-semibold mb-4">Reviews & Ratings</h3>
                    <p class="text-gray-600">Make informed decisions with comprehensive review systems and reliability
                        scores for all service providers.</p>
                </div>

                <div class="bg-gray-50 p-8 rounded-xl hover:shadow-lg transition">
                    <div class="w-16 h-16 bg-purple-500 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-shopping-cart text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-semibold mb-4">Complete Marketplace</h3>
                    <p class="text-gray-600">Browse catalogs, compare prices, manage inventory, and handle bulk orders
                        all in one platform.</p>
                </div>

                <div class="bg-gray-50 p-8 rounded-xl hover:shadow-lg transition">
                    <div class="w-16 h-16 bg-red-500 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-newspaper text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-semibold mb-4">Industry Updates</h3>
                    <p class="text-gray-600">Stay informed with the latest solar industry news, government incentives,
                        and technical resources.</p>
                </div>

                <div class="bg-gray-50 p-8 rounded-xl hover:shadow-lg transition">
                    <div class="w-16 h-16 bg-indigo-500 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-recycle text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-semibold mb-4">Eco-Friendly Recycling</h3>
                    <p class="text-gray-600">Connect with certified recycling facilities for sustainable solar panel
                        disposal and environmental compliance.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-gray-100">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-4xl font-bold text-gray-800 mb-8">About REAN Solar Ltd</h2>
                <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                    REAN Solar Limited is a pioneering company in the renewable energy sector, dedicated to making
                    solar energy accessible to every Nigerian. With years of experience in the solar industry, we
                    understand the challenges faced by manufacturers, distributors, and consumers in connecting with
                    each other.
                </p>
                <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                    Our Solar Connect platform bridges these gaps by creating a comprehensive ecosystem where all
                    stakeholders can find, communicate, and transact with confidence. We're committed to accelerating
                    Nigeria's transition to clean, sustainable energy through innovative technology solutions.
                </p>
                <div class="grid md:grid-cols-3 gap-8 mt-12">
                    <div class="text-center">
                        <div class="text-3xl font-bold text-blue-600 mb-2">500+</div>
                        <div class="text-gray-600">Registered Users</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-green-600 mb-2">50+</div>
                        <div class="text-gray-600">Partner Companies</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-yellow-600 mb-2">200+</div>
                        <div class="text-gray-600">Verified Listings</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- User Categories -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Who Can Use REAN Solar Connect?</h2>
                <p class="text-xl text-gray-600">Our platform serves the entire solar energy ecosystem</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center bg-blue-50 p-8 rounded-xl">
                    <div class="w-20 h-20 bg-blue-500 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-industry text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Manufacturers</h3>
                    <p class="text-gray-600">Solar panel producers and component manufacturers looking to reach
                        distributors and expand market presence.</p>
                </div>

                <div class="text-center bg-green-50 p-8 rounded-xl">
                    <div class="w-20 h-20 bg-green-500 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-store text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Distributors</h3>
                    <p class="text-gray-600">Retailers and wholesalers connecting manufacturers with end consumers
                        across Nigeria.</p>
                </div>

                <div class="text-center bg-yellow-50 p-8 rounded-xl">
                    <div class="w-20 h-20 bg-yellow-500 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-home text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Consumers</h3>
                    <p class="text-gray-600">Homeowners and businesses seeking reliable solar solutions and trusted
                        service providers.</p>
                </div>

                <div class="text-center bg-purple-50 p-8 rounded-xl">
                    <div class="w-20 h-20 bg-purple-500 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-recycle text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Recyclers</h3>
                    <p class="text-gray-600">Environmental services companies specializing in solar panel recycling and
                        disposal.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section id="faq" class="py-20 bg-gray-100">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-4xl font-bold text-gray-800 text-center mb-12">Frequently Asked Questions</h2>

                <div class="space-y-6" x-data="{ openFaq: null }">
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <button
                            class="w-full px-6 py-4 text-left font-semibold text-lg focus:outline-none hover:bg-gray-50"
                            @click="openFaq = openFaq === 1 ? null : 1">
                            <div class="flex justify-between items-center">
                                <span>How does the location-based matching work?</span>
                                <i class="fas fa-chevron-down transition-transform"
                                    :class="openFaq === 1 ? 'rotate-180' : ''"></i>
                            </div>
                        </button>
                        <div class="px-6 py-4 border-t bg-gray-50" x-show="openFaq === 1" x-transition>
                            <p class="text-gray-600">Our platform uses GPS technology and Google Maps API to show you
                                manufacturers, distributors, and recyclers within your specified radius. You can filter
                                by distance, ratings, and services offered.</p>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <button
                            class="w-full px-6 py-4 text-left font-semibold text-lg focus:outline-none hover:bg-gray-50"
                            @click="openFaq = openFaq === 2 ? null : 2">
                            <div class="flex justify-between items-center">
                                <span>Is there a fee to use the platform?</span>
                                <i class="fas fa-chevron-down transition-transform"
                                    :class="openFaq === 2 ? 'rotate-180' : ''"></i>
                            </div>
                        </button>
                        <div class="px-6 py-4 border-t bg-gray-50" x-show="openFaq === 2" x-transition>
                            <p class="text-gray-600">Basic registration and browsing are free for all users. We charge a
                                small transaction fee only when deals are completed through our platform. Premium
                                features are available for enhanced business accounts.</p>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <button
                            class="w-full px-6 py-4 text-left font-semibold text-lg focus:outline-none hover:bg-gray-50"
                            @click="openFaq = openFaq === 3 ? null : 3">
                            <div class="flex justify-between items-center">
                                <span>How do you verify the credibility of service providers?</span>
                                <i class="fas fa-chevron-down transition-transform"
                                    :class="openFaq === 3 ? 'rotate-180' : ''"></i>
                            </div>
                        </button>
                        <div class="px-6 py-4 border-t bg-gray-50" x-show="openFaq === 3" x-transition>
                            <p class="text-gray-600">We require all business users to submit valid registration
                                documents, certifications, and licenses. Additionally, our review and rating system
                                allows users to share their experiences, helping maintain quality standards.</p>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <button
                            class="w-full px-6 py-4 text-left font-semibold text-lg focus:outline-none hover:bg-gray-50"
                            @click="openFaq = openFaq === 4 ? null : 4">
                            <div class="flex justify-between items-center">
                                <span>Can I use the platform on my mobile device?</span>
                                <i class="fas fa-chevron-down transition-transform"
                                    :class="openFaq === 4 ? 'rotate-180' : ''"></i>
                            </div>
                        </button>
                        <div class="px-6 py-4 border-t bg-gray-50" x-show="openFaq === 4" x-transition>
                            <p class="text-gray-600">Yes! REAN Solar Connect is built as a Progressive Web App (PWA),
                                which means it works seamlessly on all devices and can be installed on your phone like a
                                native app.</p>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <button
                            class="w-full px-6 py-4 text-left font-semibold text-lg focus:outline-none hover:bg-gray-50"
                            @click="openFaq = openFaq === 5 ? null : 5">
                            <div class="flex justify-between items-center">
                                <span>When will the platform be available?</span>
                                <i class="fas fa-chevron-down transition-transform"
                                    :class="openFaq === 5 ? 'rotate-180' : ''"></i>
                            </div>
                        </button>
                        <div class="px-6 py-4 border-t bg-gray-50" x-show="openFaq === 5" x-transition>
                            <p class="text-gray-600">We're currently in active development and plan to launch within the
                                next month. Join our waitlist to be among the first to access the platform when it goes
                                live.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Reviews/Testimonials -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">What Our Beta Users Say</h2>
                <p class="text-xl text-gray-600">Early feedback from our testing community</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-gray-50 p-8 rounded-xl">
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-6">"This platform has revolutionized how we connect with distributors.
                        The location-based matching saved us weeks of research."</p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-blue-500 rounded-full flex items-center justify-center mr-4">
                            <span class="text-white font-semibold">AO</span>
                        </div>
                        <div>
                            <div class="font-semibold">Adebayo Ogundimu</div>
                            <div class="text-gray-500 text-sm">Solar Manufacturer, Lagos</div>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-50 p-8 rounded-xl">
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-6">"The messaging system made it so easy to coordinate with multiple
                        manufacturers. Great user experience overall."</p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-green-500 rounded-full flex items-center justify-center mr-4">
                            <span class="text-white font-semibold">FK</span>
                        </div>
                        <div>
                            <div class="font-semibold">Fatima Kano</div>
                            <div class="text-gray-500 text-sm">Solar Distributor, Abuja</div>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-50 p-8 rounded-xl">
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-6">"Finally found reliable solar installers in my area. The review system
                        gave me confidence in my choice."</p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-purple-500 rounded-full flex items-center justify-center mr-4">
                            <span class="text-white font-semibold">CU</span>
                        </div>
                        <div>
                            <div class="font-semibold">Chidubem Ugwu</div>
                            <div class="text-gray-500 text-sm">Homeowner, Port Harcourt</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-gray-100">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-4xl font-bold text-gray-800 mb-4">Get In Touch</h2>
                    <p class="text-xl text-gray-600">Have questions? We're here to help!</p>
                </div>

                <div class="grid md:grid-cols-2 gap-12">
                    <!-- Contact Info -->
                    <div>
                        <h3 class="text-2xl font-semibold mb-6">Contact Information</h3>
                        <div class="space-y-4">
                            <!-- Email -->
                            <div class="flex items-center">
                                <div class="w-12 h-12 bg-blue-500 rounded-full flex items-center justify-center mr-4">
                                    <i class="fas fa-envelope text-white"></i>
                                </div>
                                <div>
                                    <div class="font-semibold">Email</div>
                                    <a href="mailto:admin@reansolar.com"
                                        class="text-gray-600 hover:text-blue-600 no-underline">
                                        admin@reansolar.com
                                    </a>
                                </div>
                            </div>

                            <!-- Phone -->
                            <div class="flex items-center">
                                <div class="w-12 h-12 bg-green-500 rounded-full flex items-center justify-center mr-4">
                                    <i class="fas fa-phone text-white"></i>
                                </div>
                                <div>
                                    <div class="font-semibold">Phone</div>
                                    <a href="tel:+2347042820613" class="text-gray-600 hover:text-blue-600 no-underline">
                                        +2347042820613
                                    </a>
                                </div>
                            </div>

                            <!-- WhatsApp -->
                            <div class="flex items-center">
                                <div class="w-12 h-12 bg-green-600 rounded-full flex items-center justify-center mr-4">
                                    <i class="fab fa-whatsapp text-white"></i>
                                </div>
                                <div>
                                    <div class="font-semibold">WhatsApp</div>
                                    <a href="https://wa.me/19432039706" target="_blank"
                                        class="text-gray-600 hover:text-blue-600 no-underline">
                                        +1 943 203 9706
                                    </a>
                                </div>
                            </div>

                            <!-- Address -->
                            <div class="flex items-center">
                                <div class="w-12 h-12 bg-purple-500 rounded-full flex items-center justify-center mr-4">
                                    <i class="fas fa-map-marker-alt text-white"></i>
                                </div>
                                <div>
                                    <div class="font-semibold">Address</div>
                                    <div class="text-gray-600">Lagos, Nigeria</div>
                                </div>
                            </div>
                        </div>

                        <!-- Social Media -->
                        <div class="mt-8">
                            <h4 class="text-lg font-semibold mb-4">Follow Us</h4>
                            <div class="flex space-x-4">
                                <a href="#"
                                    class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center text-white hover:bg-blue-700 transition">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#"
                                    class="w-10 h-10 bg-blue-400 rounded-full flex items-center justify-center text-white hover:bg-blue-500 transition">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#"
                                    class="w-10 h-10 bg-blue-700 rounded-full flex items-center justify-center text-white hover:bg-blue-800 transition">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <a href="#"
                                    class="w-10 h-10 bg-pink-500 rounded-full flex items-center justify-center text-white hover:bg-pink-600 transition">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Form -->
                    <div>
                        <h3 class="text-2xl font-semibold mb-6">Got questions? Let’s Talk!</h3>
                        <form class="space-y-4" action="submit_contact.php" method="POST" id="contact-form">
                            <div>
                                <label class="block text-gray-700 text-sm font-bold mb-2">Name</label>
                                <input type="text" name="full_name"
                                    class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500"
                                    placeholder="Your Name" required>
                            </div>
                            <div>
                                <label class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                                <input type="email" name="email"
                                    class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500"
                                    placeholder="your@email.com" required>
                            </div>
                            <div>
                                <label class="block text-gray-700 text-sm font-bold mb-2">Subject</label>
                                <select name="subject"
                                    class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500">
                                    <option>General Inquiry</option>
                                    <option>Partnership Opportunity</option>
                                    <option>Technical Support</option>
                                    <option>Business Registration</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-gray-700 text-sm font-bold mb-2">Message</label>
                                <textarea name="message" rows="4"
                                    class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500"
                                    placeholder="Your message here..." required></textarea>
                            </div>
                            <button type="submit"
                                class="w-full bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-700 transition">
                                Send Message
                            </button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-12">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <div class="flex items-center space-x-4 mb-6">

                        <img src="/assets/img/footer-logo.png" alt="REAN Solar Footer Logo"
                            class="h-14 w-auto">
                    </div>
                    <p class="text-gray-400 mb-4">Connecting Nigeria's solar energy ecosystem for a sustainable future.
                    </p>
                    <p class="text-gray-500 text-sm">© 2025 REAN Nig Ltd. All rights reserved.</p>
                </div>

                <div>
                    <h4 class="text-lg font-semibold mb-4">Platform</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white transition">For Manufacturers</a></li>
                        <li><a href="#" class="hover:text-white transition">For Distributors</a></li>
                        <li><a href="#" class="hover:text-white transition">For Consumers</a></li>
                        <li><a href="#" class="hover:text-white transition">For Recyclers</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-lg font-semibold mb-4">Resources</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white transition">Solar News</a></li>
                        <li><a href="#" class="hover:text-white transition">Industry Reports</a></li>
                        <li><a href="#" class="hover:text-white transition">Installation Guide</a></li>
                        <li><a href="#" class="hover:text-white transition">Government Incentives</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-lg font-semibold mb-4">Support</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white transition">Help Center</a></li>
                        <li><a href="#" class="hover:text-white transition">Privacy Policy</a></li>
                        <li><a href="#" class="hover:text-white transition">Terms of Service</a></li>
                        <li><a href="#" class="hover:text-white transition">Contact Support</a></li>
                    </ul>
                </div>
            </div>

           <div class="border-t border-gray-700 mt-8 pt-8">
    <div class="flex flex-col md:flex-row justify-between items-center text-sm text-white text-center gap-2">
        <p class="mb-0">Not affiliated with Renewable Energy Association of Nigeria (REAN)</p>
        <p>
            Made by <a href="mailto:decimaltechy@gmail.com"
                class="underline hover:text-blue-400 transition">Decimal Technologies</a>
        </p>
    </div>
</div>

        </div>
    </footer>


    <!-- Waitlist Modal -->
    <div id="waitlistModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
        <div class="bg-white rounded-xl p-8 max-w-md w-full mx-4 relative">
            <!-- Close Icon -->
            <button onclick="closeWaitlistModal()"
                class="absolute top-4 right-4 text-gray-500 hover:text-red-500 text-xl">
                <i class="fas fa-times"></i>
            </button>

            <div class="text-center mb-6">
                <div
                    class="w-16 h-16 bg-gradient-to-r from-yellow-400 to-orange-500 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-rocket text-white text-2xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-800 mb-2">Join Our Waitlist</h3>
                <p class="text-gray-600">Be among the first to experience REAN Solar Connect when we launch!</p>
            </div>

            <form action="submit_waitlist.php" method="POST" class="space-y-4">
                <div>
                    <label class="block text-gray-700 text-sm font-bold mb-2">Full Name</label>
                    <input type="text" name="name" required
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500"
                        placeholder="Enter your full name">
                </div>
                <div>
                    <label class="block text-gray-700 text-sm font-bold mb-2">Email Address</label>
                    <input type="email" name="email" required
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500"
                        placeholder="your@email.com">
                </div>
                <div>
                    <label class="block text-gray-700 text-sm font-bold mb-2">Phone Number</label>
                    <input type="tel" name="phone" required
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500"
                        placeholder="+234 xxx xxx xxxx">
                </div>
                <div>
                    <label class="block text-gray-700 text-sm font-bold mb-2">I am a:</label>
                    <select name="interest_area" required
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500">
                        <option value="">Select your category</option>
                        <option value="manufacturer">Solar Manufacturer</option>
                        <option value="distributor">Solar Distributor/Seller</option>
                        <option value="consumer">Solar Truckers </option>
                        <option value="recycler">Solar Recycling Company</option>
                    </select>
                </div>
                <div>
                    <label class="block text-gray-700 text-sm font-bold mb-2">State/Location</label>
                    <input type="text" name="location" required
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500"
                        placeholder="e.g., Lagos, Abuja, etc.">
                </div>

                <div class="flex items-start">
                    <input type="checkbox" name="agree" class="mt-1 mr-2" required>
                    <label class="text-sm text-gray-600">
                        I agree to receive updates about REAN Solar Connect and consent to the processing of my personal
                        data.
                    </label>
                </div>

                <div class="flex space-x-4">
                    <button type="button" onclick="closeWaitlistModal()"
                        class="flex-1 px-4 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 transition">
                        Cancel
                    </button>
                    <button type="submit"
                        class="flex-1 px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
                        Join Waitlist
                    </button>
                </div>
            </form>

        </div>
    </div>

    <script>
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

// Waitlist modal functions
function openWaitlistModal() {
    document.getElementById('waitlistModal').classList.remove('hidden');
    document.getElementById('waitlistModal').classList.add('flex');
    document.body.style.overflow = 'hidden';
}

function closeWaitlistModal() {
    document.getElementById('waitlistModal').classList.add('hidden');
    document.getElementById('waitlistModal').classList.remove('flex');
    document.body.style.overflow = 'auto';
}

// Close modal when clicking outside
document.getElementById('waitlistModal').addEventListener('click', function (e) {
    if (e.target === this) {
        closeWaitlistModal();
    }
});

// Waitlist form submit function (AJAX)
document.querySelector('#waitlistModal form').addEventListener('submit', async function (e) {
    e.preventDefault();

    const form = this;
    const formData = new FormData(form);

    try {
        const response = await fetch('submit_waitlist.php', {
            method: 'POST',
            body: formData
        });

        const result = await response.text();
        alert(result);

        if (response.ok) {
            form.reset();
            closeWaitlistModal();
        }
    } catch (error) {
        console.error('Submission failed:', error);
        alert('❌ Something went wrong. Please try again.');
    }
});


        document.querySelector('#contact-form').addEventListener('submit', function (e) {
            e.preventDefault();

            const formData = new FormData(this);

            fetch('submit_contact.php', {
                method: 'POST',
                body: formData
            })
                .then(res => res.text())
                .then(response => {
                    alert(response); // success or error message
                    this.reset();
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert("There was an error submitting the form.");
                });
        });
        // Add scroll effect to navigation
        window.addEventListener('scroll', function () {
            const nav = document.querySelector('nav');
            if (window.scrollY > 50) {
                nav.classList.add('shadow-lg');
            } else {
                nav.classList.remove('shadow-lg');
            }
        });
        
          document.addEventListener('DOMContentLoaded', () => {
        const toggleBtn = document.getElementById('menuToggle');
        const mobileMenu = document.getElementById('mobileMenu');

        toggleBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Optional: close menu when any link is clicked
        document.querySelectorAll('#mobileMenu a').forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
            });
        });
    });
    </script>
</body>

</html>