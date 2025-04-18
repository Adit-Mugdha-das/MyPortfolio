<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mugdha's Portfolio</title>
    @vite('resources/css/app.css')

    <!-- Font Awesome for social icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

    <!-- Animate.css for entrance animation -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <!-- Vanta.js and Three.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r134/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.net.min.js"></script>

    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
        .neon-glow {
            text-shadow:
                0 0 5px #c084fc,
                0 0 10px #c084fc,
                0 0 20px #c084fc,
                0 0 40px #a855f7,
                0 0 80px #9333ea;
        }
        .neon-button {
            box-shadow: 0 0 10px #8e44ad, 0 0 20px #8e44ad, 0 0 30px #8e44ad;
            transition: transform 0.3s ease, background-color 0.3s ease, box-shadow 0.3s ease;
        }
        .neon-button:hover {
            transform: scale(1.10);
            background-color: #f3e8ff;
            box-shadow: 0 0 15px #a855f7, 0 0 30px #9333ea;
        }
    </style>
</head>
<body class="text-white">
    <div id="vanta-bg" class="min-h-screen w-full relative" x-data="{ modalOpen: false, modalImage: '' }">

        <!-- Navbar -->
        <nav class="bg-black/50 backdrop-blur-md text-white px-6 py-4 flex justify-between shadow-md rounded-b-xl">
            <div class="font-bold text-purple-300 text-xl tracking-wider neon-glow">Adit Mugdha Das</div>
            <ul class="flex gap-6 text-sm md:text-base">
                <li><a href="{{ url('/') }}" class="text-purple-300 font-semibold drop-shadow-[0_0_8px_#c084fc] scale-110">Home</a></li>
                <li><a href="{{ url('/about') }}" class="hover:text-purple-300 transition-transform transform duration-300 hover:scale-110 hover:drop-shadow-[0_0_8px_#c084fc]">About</a></li>
                <li><a href="{{ url('/education') }}" class="hover:text-purple-300 transition-transform transform duration-300 hover:scale-110 hover:drop-shadow-[0_0_8px_#c084fc]">Education</a></li>
                <li><a href="{{ url('/skills') }}" class="hover:text-purple-300 transition-transform transform duration-300 hover:scale-110 hover:drop-shadow-[0_0_8px_#c084fc]">Skills</a></li>
                <li><a href="{{ url('/projects') }}" class="hover:text-purple-300 transition-transform transform duration-300 hover:scale-110 hover:drop-shadow-[0_0_8px_#c084fc]">Projects</a></li>
                <li><a href="{{ url('/certifications') }}" class="hover:text-purple-300 transition duration-300 hover:scale-110 hover:drop-shadow-[0_0_8px_#c084fc]">Certifications</a></li>
                <li><a href="{{ url('/test') }}" class="hover:text-purple-300 transition duration-300 hover:scale-110 hover:drop-shadow-[0_0_8px_#c084fc]">Honors & Awards</a></li>
                <li><a href="{{ url('/contact') }}" class="hover:text-purple-300 transition-transform transform duration-300 hover:scale-110 hover:drop-shadow-[0_0_8px_#c084fc]">Contact</a></li>
            </ul>
        </nav>

        <!-- Hero Section -->
        <section class="flex flex-col items-center justify-center text-center py-20 px-6">
            <!-- Profile Image with modal zoom and lavender border -->
            <img src="{{ asset('images/profile.jpeg') }}" alt="Mugdha"
                 class="w-80 h-80 mb-6 object-cover border-4 border-[#d8b4fe] drop-shadow-[0_0_10px_#d8b4fe] shadow-xl transition-transform duration-300 hover:scale-105 animate__animated animate__fadeInDown cursor-zoom-in"
                 @click="modalImage = '{{ asset('images/profile.jpeg') }}'; modalOpen = true" />

            <!-- Intro Text -->
            <h1 class="text-3xl md:text-4xl font-bold text-white mb-4 tracking-wide neon-glow animate__animated animate__fadeInUp animate__delay-1s">
                Hello, I'm Mugdha
            </h1>

            <!-- Description -->
            <p class="text-lg md:text-xl text-white/90 max-w-2xl mb-6 drop-shadow leading-relaxed animate__animated animate__fadeInUp animate__delay-2s">
                I'm a 3rd-year CSE student at <span class="text-yellow-200 font-medium">KUET</span>, driven by curiosity in 
                <span class="text-pink-200 font-medium">AI</span>, 
                <span class="text-pink-200 font-medium">Machine Learning</span>, and 
                <span class="text-pink-200 font-medium">Deep Learning</span>. 
                I thrive on solving real-world problems and crafting unique, innovative tech with clean, elegant code.
            </p>

            <!-- Download Button -->
            <a href="{{ asset('documents/Mugdha_CV.pdf') }}" download
               class="px-6 py-3 bg-white text-gray-900 font-semibold rounded-lg shadow-lg neon-button animate__animated animate__fadeInUp animate__delay-3s">
                Download CV
            </a>

            <!-- Social Icons -->
            <div class="flex justify-center gap-8 mt-6 text-white text-4xl animate__animated animate__fadeInUp animate__delay-4s">
                <a href="https://www.linkedin.com/in/adit-mugdha-das-0a6723314/" target="_blank"
                   class="hover:text-blue-400 hover:drop-shadow-[0_0_8px_#3b82f6] transition-transform transform duration-300 hover:scale-110" title="LinkedIn">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="https://github.com/Adit-Mugdha-das" target="_blank"
                   class="hover:text-gray-300 hover:drop-shadow-[0_0_8px_#d1d5db] transition-transform transform duration-300 hover:scale-110" title="GitHub">
                    <i class="fab fa-github"></i>
                </a>
                <a href="mailto:mailbox.mugdha@gmail.com"
                   class="hover:text-red-400 hover:drop-shadow-[0_0_8px_#f87171] transition-transform transform duration-300 hover:scale-110" title="Email">
                    <i class="fas fa-envelope"></i>
                </a>
                <a href="https://wa.me/8801718108344" target="_blank"
                   class="hover:text-green-400 hover:drop-shadow-[0_0_8px_#4ade80] transition-transform transform duration-300 hover:scale-110" title="WhatsApp">
                    <i class="fab fa-whatsapp"></i>
                </a>
                <a href="https://www.facebook.com/aditmugdha.das.3" target="_blank"
                   class="hover:text-blue-500 hover:drop-shadow-[0_0_8px_#3b82f6] transition-transform transform duration-300 hover:scale-110" title="Facebook">
                    <i class="fab fa-facebook"></i>
                </a>
            </div>
        </section>

        <!-- Modal for Profile Image Zoom -->
        <div x-show="modalOpen" x-transition class="fixed inset-0 z-50 flex items-center justify-center">
            <div class="absolute inset-0 bg-black/80" @click="modalOpen = false"></div>
            <img :src="modalImage" class="relative max-w-full max-h-[90vh] rounded-lg shadow-lg border-4 border-purple-400 z-10">
        </div>

        <!-- Vanta.js Initialization -->
        <script>
            VANTA.NET({
                el: "#vanta-bg",
                mouseControls: true,
                touchControls: true,
                gyroControls: false,
                minHeight: 200.00,
                minWidth: 200.00,
                scale: 1.00,
                scaleMobile: 1.00,
                color: 0x8e44ad,
                backgroundColor: 0x0f172a
            });
        </script>
    </div>
</body>
</html>
