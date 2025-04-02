<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Honors & Awards - Mugdha</title>
  @vite('resources/css/app.css')

  <!-- Three.js and Vanta.js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r134/three.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.net.min.js"></script>

  <!-- AOS and Animate.css -->
  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

  <!-- Alpine.js -->
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="text-white">
<div id="vanta-bg" class="min-h-screen" x-data="{ modalOpen: false, modalImage: '' }">

  <!-- Navbar -->
  <nav class="bg-black/50 backdrop-blur-md text-white px-6 py-4 flex justify-between shadow-md rounded-b-xl">
    <div class="font-bold text-purple-300 text-xl tracking-wider neon-glow">Adit Mugdha Das</div>
    <ul class="flex gap-6 text-sm md:text-base">
      <li><a href="{{ url('/') }}">Home</a></li>
      <li><a href="{{ url('/about') }}">About</a></li>
      <li><a href="{{ url('/education') }}">Education</a></li>
      <li><a href="{{ url('/skills') }}">Skills</a></li>
      <li><a href="{{ url('/projects') }}">Projects</a></li>
      <li><a href="{{ url('/certifications') }}">Certifications</a></li>
      <li><a href="{{ url('/test') }}" class="text-purple-300 font-semibold drop-shadow-[0_0_8px_#c084fc] scale-110">Honors & Awards</a></li>
      <li><a href="{{ url('/contact') }}">Contact</a></li>
    </ul>
  </nav>

  <!-- Section Title -->
  <section class="text-center py-16 px-4 animate__animated animate__fadeIn">
    <h1 class="text-4xl md:text-5xl font-bold mb-12 text-white drop-shadow-[0_0_20px_#c084fc]">Honors & Awards</h1>

    <div class="grid gap-8 max-w-6xl mx-auto text-left sm:grid-cols-2 lg:grid-cols-[repeat(auto-fit,minmax(360px,1fr))] text-lg">
      @php
        $honors = [
          [
            'title' => 'Best Project Award',
            'issuer' => 'KUET – Dec 2024',
            'desc' => 'Awarded for the desktop project "Mind Map" in the Advanced Programming Course. <br><br>Supervised and nominated by <span class="text-purple-300 font-semibold">Sir</span> <span class="font-semibold text-fuchsia-400">Kazi Saeed Alam</span> and <span class="text-purple-300 font-semibold">Sir</span> <span class="font-semibold text-fuchsia-400">Argha Chandra Dhar</span>.',
            'image' => 'images/best_project.jpeg'
          ],
          [
            'title' => 'Best Talent – District Level',
            'issuer' => 'Sylhet District Edu. Office – Mar 2018',
            'desc' => 'Awarded in Math & CS at District Level (Grades 9–10) in Sustainable Talent Search 2018. <br><br>Issued by <span class="text-purple-300 font-semibold">Mr.</span> <span class="font-semibold text-fuchsia-400">Gaziur Rahman Khan</span> and <span class="text-purple-300 font-semibold">Mr.</span> <span class="font-semibold text-fuchsia-400">Md. Amirul Islam</span>.',
            'image' => 'images/district_level.jpeg'
          ],
          [
            'title' => 'Best Talent – Upazila Level',
            'issuer' => 'Upazila Secondary Edu. Office – Feb 2018',
            'desc' => 'Recognized for excellence in Math & CS at Upazila Level in 2018 talent search competition. <br><br>Issued by <span class="text-purple-300 font-semibold">Upazila Secondary Education Officer</span> and <span class="text-purple-300 font-semibold">UNO</span>, Fenchuganj, Sylhet.',
            'image' => 'images/upazila_level.jpeg'
          ]
        ];
      @endphp

      @foreach ($honors as $index => $honor)
        <div class="bg-black/60 border border-fuchsia-400/20 rounded-xl p-6 shadow-lg transition-transform duration-1000 ease-in-out transform hover:scale-[1.03] hover:shadow-[0_0_20px_#c084fc]"
             data-aos="{{ $index === 0 ? 'fade-left' : ($index === 1 ? 'fade-up' : 'fade-right') }}"
             data-aos-delay="{{ $index * 300 }}"
             data-aos-duration="800"
             data-aos-once="true"
        >
          <img src="{{ asset($honor['image']) }}" alt="{{ $honor['title'] }}"
               class="rounded-lg mb-4 w-full cursor-zoom-in"
               @click="modalImage = '{{ asset($honor['image']) }}'; modalOpen = true">

          <h2 class="text-2xl font-bold text-fuchsia-300 mb-2">{{ $honor['title'] }}</h2>
          <p class="text-base text-purple-200 font-semibold mb-2">{{ $honor['issuer'] }}</p>
          <p class="text-base text-gray-300 leading-relaxed">{!! $honor['desc'] !!}</p>

          <div class="mt-4 space-x-6 text-base font-medium">
            <a href="{{ asset($honor['image']) }}" target="_blank" class="text-fuchsia-300 underline hover:scale-105 hover:drop-shadow-[0_0_8px_#c084fc] transition-transform">View</a>
            <a href="{{ asset($honor['image']) }}" download class="text-fuchsia-400 underline hover:scale-105 hover:drop-shadow-[0_0_8px_#c084fc] transition-transform">Download</a>
          </div>
        </div>
      @endforeach
    </div>
  </section>

  <!-- Modal -->
  <div x-show="modalOpen" x-transition class="fixed inset-0 z-50 flex items-center justify-center">
    <div class="absolute inset-0 bg-black/80" @click="modalOpen = false"></div>
    <img :src="modalImage" class="relative max-w-full max-h-[90vh] rounded-lg shadow-lg border-4 border-fuchsia-400 z-10">
  </div>
</div>

<!-- Scripts -->
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

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
</body>
</html>
