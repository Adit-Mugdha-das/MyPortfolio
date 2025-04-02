<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact - Mugdha</title>
    @vite('resources/css/app.css')

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

    <!-- Animate.css for entrance animations -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <!-- Vanta.js & Three.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r134/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.net.min.js"></script>

    <style>
        .neon-glow {
            text-shadow: 0 0 5px #c084fc, 0 0 10px #c084fc, 0 0 20px #c084fc, 0 0 40px #a855f7, 0 0 80px #9333ea;
        }

        .contact-wrapper {
            background-color: rgba(0, 0, 0, 0.6);
            border-radius: 1rem;
            box-shadow: 0 0 12px rgba(255, 255, 255, 0.2);
            transition: transform 0.4s ease, box-shadow 0.4s ease;
        }

        .contact-wrapper:hover {
            transform: scale(1.01);
            box-shadow: 0 0 20px rgba(192, 132, 252, 0.6);
        }

        /* Social Hover Colors */
        .icon-hover-linkedin:hover { color: #0077b5; transform: scale(1.2); }
        .icon-hover-github:hover { color: #c2c2c2; transform: scale(1.2); }
        .icon-hover-whatsapp:hover { color: #25d366; transform: scale(1.2); }
        .icon-hover-facebook:hover { color: #1877f2; transform: scale(1.2); }

        .social-icon:hover {
            transition: all 0.3s ease;
            filter: drop-shadow(0 0 6px #9333ea);
        }

        .form-animate {
            animation: fadeInUp 1.1s ease both;
        }

        @keyframes fadeInUp {
            0% { opacity: 0; transform: translateY(30px); }
            100% { opacity: 1; transform: translateY(0); }
        }

        .submit-hover:hover {
            animation: bounce 0.4s;
        }

        @keyframes bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-6px); }
        }

        /* NEW: Glow effect on input and textarea hover */
        input:hover,
        textarea:hover {
            box-shadow: 0 0 12px rgba(192, 132, 252, 0.6);
            transition: all 0.3s ease;
        }
    </style>
</head>
<body class="text-white">
<div id="vanta-bg" class="min-h-screen">

    <!-- Navbar -->
    <nav class="bg-black/50 backdrop-blur-md text-white px-6 py-4 flex justify-between shadow-md rounded-b-xl">
        <div class="font-bold text-purple-300 text-xl tracking-wider neon-glow">Adit Mugdha Das</div>
        <ul class="flex gap-6 text-sm md:text-base">
            <li><a href="{{ url('/') }}" class="hover:text-purple-300 transition duration-300 hover:scale-110 hover:drop-shadow-[0_0_8px_#c084fc]">Home</a></li>
            <li><a href="{{ url('/about') }}" class="hover:text-purple-300 transition duration-300 hover:scale-110 hover:drop-shadow-[0_0_8px_#c084fc]">About</a></li>
            <li><a href="{{ url('/education') }}" class="hover:text-purple-300 transition duration-300 hover:scale-110 hover:drop-shadow-[0_0_8px_#c084fc]">Education</a></li>
            <li><a href="{{ url('/skills') }}" class="hover:text-purple-300 transition duration-300 hover:scale-110 hover:drop-shadow-[0_0_8px_#c084fc]">Skills</a></li>
            <li><a href="{{ url('/projects') }}" class="hover:text-purple-300 transition duration-300 hover:scale-110 hover:drop-shadow-[0_0_8px_#c084fc]">Projects</a></li>
            <li><a href="{{ url('/certifications') }}" class="hover:text-purple-300 transition duration-300 hover:scale-110 hover:drop-shadow-[0_0_8px_#c084fc]">Certifications</a></li>
            <li><a href="{{ url('/test') }}" class="hover:text-purple-300 transition duration-300 hover:scale-110 hover:drop-shadow-[0_0_8px_#c084fc]">Honors & Awards</a></li>


            <li><a href="{{ url('/contact') }}" class="text-purple-300 font-semibold drop-shadow-[0_0_8px_#c084fc] scale-110">Contact</a></li>
        </ul>
    </nav>

    <!-- Contact Section -->
    <section class="py-20 px-6 text-center">
        <!-- Heading -->
        <div class="mb-14 animate__animated animate__fadeInDown">
            <h1 class="text-4xl font-bold text-white drop-shadow-[0_0_20px_#c084fc]">SEND ME A MESSAGE</h1>
            <div class="w-24 h-1 bg-purple-500 mx-auto mt-2"></div>
        </div>

        <!-- Contact Box -->
        <div class="contact-wrapper max-w-6xl mx-auto p-10 flex flex-col lg:flex-row gap-10 animate__animated animate__fadeInUp">
            <!-- Left Column -->
            <div class="w-full lg:w-1/2 space-y-6 text-left">
                <h2 class="text-2xl font-semibold text-white">Getting in touch is easy!</h2>

                <div class="text-gray-300 space-y-3 text-[1.1rem]">
                    <p><i class="fas fa-map-marker-alt mr-3 text-fuchsia-400 text-lg"></i> Road 14, Adabor, Dhaka, Bangladesh</p>
                    <p><i class="fas fa-phone mr-3 text-fuchsia-400 text-lg"></i> +8801718108344</p>
                    <p><i class="fas fa-envelope mr-3 text-fuchsia-400 text-lg"></i> 
                        <a href="mailto:{{ config('contact.email') }}" class="text-purple-300 hover:text-purple-400">
                            {{ config('contact.email') }}
                        </a>
                    </p>
                </div>

                <!-- Social Icons -->
                <div class="flex gap-6 mt-4 text-4xl">
                    <a href="{{ config('contact.linkedin') }}" target="_blank" class="text-fuchsia-400 icon-hover-linkedin social-icon transition duration-300"><i class="fab fa-linkedin"></i></a>
                    <a href="{{ config('contact.github') }}" target="_blank" class="text-fuchsia-400 icon-hover-github social-icon transition duration-300"><i class="fab fa-github"></i></a>
                    <a href="https://wa.me/8801718108344" target="_blank" class="text-fuchsia-400 icon-hover-whatsapp social-icon transition duration-300"><i class="fab fa-whatsapp"></i></a>
                    <a href="https://www.facebook.com/aditmugdha.das.3" target="_blank" class="text-fuchsia-400 icon-hover-facebook social-icon transition duration-300"><i class="fab fa-facebook"></i></a>
                </div>

                <!-- Download CV -->
                <a href="{{ asset('documents/Mugdha_CV.pdf') }}" download 
                   class="submit-hover social-icon inline-block mt-6 bg-fuchsia-600 hover:bg-fuchsia-700 text-white px-5 py-2 rounded shadow-md transition">
                    <i class="fas fa-download mr-2"></i>Download CV
                </a>
            </div>

            <!-- Right Column (Form) -->
            <div class="w-full lg:w-1/2 form-animate">
                @if(session('success'))
                    <div class="bg-green-600/80 text-white p-4 rounded-lg mb-6 shadow-lg text-center">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('contact.submit') }}" method="POST" class="space-y-5">
                    @csrf
                    <input type="text" name="name" placeholder="Your Name"
                           class="w-full bg-white/15 text-white placeholder-white/80 px-4 py-3 rounded-lg border border-purple-400/60 focus:outline-none focus:ring-2 focus:ring-white focus:shadow-[0_0_10px_#ffffff80] transition" required>

                    <input type="email" name="email" placeholder="Your Email"
                           class="w-full bg-white/15 text-white placeholder-white/80 px-4 py-3 rounded-lg border border-purple-400/60 focus:outline-none focus:ring-2 focus:ring-white focus:shadow-[0_0_10px_#ffffff80] transition" required>

                    <textarea name="message" rows="5" placeholder="Write us about any project. We’d love to work with you!"
                              class="w-full bg-white/15 text-white placeholder-white/80 px-4 py-3 rounded-lg border border-purple-400/60 focus:outline-none focus:ring-2 focus:ring-white focus:shadow-[0_0_10px_#ffffff80] transition" required></textarea>

                    <button type="submit"
                            class="submit-hover bg-fuchsia-500 hover:bg-fuchsia-600 text-white px-6 py-3 rounded shadow-md hover:shadow-lg transition-all w-full">
                        Send Message
                    </button>
                </form>
            </div>
        </div>
    </section>
</div>

<!-- Vanta.js Background -->
<script>
    VANTA.NET({
        el: "#vanta-bg",
        mouseControls: true,
        touchControls: true,
        minHeight: 200.00,
        minWidth: 200.00,
        scale: 1.0,
        scaleMobile: 1.0,
        color: 0xc084fc,
        backgroundColor: 0x0b1120
    });
</script>
</body>
</html>
