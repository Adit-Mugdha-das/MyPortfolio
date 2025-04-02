<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Certifications - Mugdha</title>
  @vite('resources/css/app.css')

  <!-- Vanta.js & Three.js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r134/three.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.net.min.js"></script>

  <!-- Animate.css & AOS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />

  <!-- Alpine.js -->
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="text-white">
<div id="vanta-bg" class="min-h-screen" x-data="{ modalOpen: false, modalImage: '' }">

  <!-- Navbar -->
  <nav class="bg-black/50 backdrop-blur-md text-white px-6 py-4 flex justify-between shadow-md rounded-b-xl">
    <div class="font-bold text-purple-300 text-xl tracking-wider neon-glow">Adit Mugdha Das</div>
    <ul class="flex gap-6 text-sm md:text-base">
      <li><a href="{{ url('/') }}" class="hover:text-purple-300 transition duration-300 hover:scale-110 hover:drop-shadow-[0_0_8px_#c084fc]">Home</a></li>
      <li><a href="{{ url('/about') }}" class="hover:text-purple-300 transition duration-300 hover:scale-110 hover:drop-shadow-[0_0_8px_#c084fc]">About</a></li>
      <li><a href="{{ url('/education') }}" class="hover:text-purple-300 transition duration-300 hover:scale-110 hover:drop-shadow-[0_0_8px_#c084fc]">Education</a></li>
      <li><a href="{{ url('/skills') }}" class="hover:text-purple-300 transition duration-300 hover:scale-110 hover:drop-shadow-[0_0_8px_#c084fc]">Skills</a></li>
      <li><a href="{{ url('/projects') }}" class="hover:text-purple-300 transition duration-300 hover:scale-110 hover:drop-shadow-[0_0_8px_#c084fc]">Projects</a></li>
      <li><a href="{{ url('/certifications') }}" class="text-purple-300 font-semibold drop-shadow-[0_0_8px_#c084fc] scale-110">Certifications</a></li>
      <li><a href="{{ url('/test') }}" class="hover:text-purple-300 transition duration-300 hover:scale-110 hover:drop-shadow-[0_0_8px_#c084fc]">Honors & Awards</a></li>


      <li><a href="{{ url('/contact') }}" class="hover:text-purple-300 transition duration-300 hover:scale-110 hover:drop-shadow-[0_0_8px_#c084fc]">Contact</a></li>
    </ul>
  </nav>

  <!-- Certifications Section -->
  <section class="text-center py-16 px-4 animate__animated animate__fadeIn">
    <h1 class="text-4xl font-bold mb-12 text-white drop-shadow-[0_0_20px_#c084fc]">Licenses & Certifications</h1>

    <div class="grid gap-8 max-w-6xl mx-auto text-left sm:grid-cols-2 lg:grid-cols-[repeat(auto-fit,minmax(300px,1fr))]">
      @php
        $certs = [
          [
            'title' => 'Advanced Learning Algorithms',
            'issuer' => 'Stanford Online',
            'date' => 'Mar 2025',
            'id' => 'T133QK2542ZJ',
            'skills' => 'TensorFlow , Keras, NLP, Hyperparameter Tuning, +6 skills',
            'image' => 'certificates/advanced_learning_algorithms.png',
            'link' => 'https://coursera.org/verify/T133QK2542ZJ'
          ],
          [
            'title' => 'Neural Networks and Deep Learning',
            'issuer' => 'DeepLearning.AI',
            'date' => 'Mar 2025',
            'id' => '27BS1R4411JV',
            'skills' => 'Deep Learning, Neural Networks, +2 skills',
            'image' => 'certificates/neural_networks.png',
            'link' => 'https://coursera.org/verify/27BS1R4411JV'
          ],
          [
            'title' => 'Supervised Machine Learning: Regression and Classification',
            'issuer' => 'Stanford Online',
            'date' => 'Mar 2025',
            'id' => 'OWOEBASEFPWQ',
            'skills' => 'TensorFlow, Scikit-Learn, Classification, Regression',
            'image' => 'certificates/supervised_ml.png',
            'link' => 'https://coursera.org/verify/OWOEBASEFPWQ'
          ],
          [
            'title' => 'Unsupervised Learning, Recommenders, Reinforcement Learning',
            'issuer' => 'Stanford Online',
            'date' => 'Mar 2025',
            'id' => 'GSCWZZHE2WQY',
            'skills' => 'Unsupervised Learning, RL, Recommender Systems',
            'image' => 'certificates/unsupervised_rl.png',
            'link' => 'https://coursera.org/verify/GSCWZZHE2WQY'
          ]
        ];
      @endphp

      @foreach ($certs as $index => $cert)
        <div 
          class="bg-black/60 border border-fuchsia-400/20 rounded-xl p-6 shadow-lg 
                 transition-transform duration-2000 ease-in-out transform 
                 hover:scale-[1.03] hover:shadow-[0_0_20px_#c084fc]"
          data-aos="fade-up"
          data-aos-delay="{{ $index * 200 }}"
          data-aos-duration="500"
          data-aos-once="true"
        >
          <img src="{{ asset($cert['image']) }}" alt="{{ $cert['title'] }}"
               class="rounded-lg mb-4 w-full cursor-zoom-in"
               @click="modalImage = '{{ asset($cert['image']) }}'; modalOpen = true">

          <h2 class="text-2xl font-semibold text-fuchsia-300 mb-2">{{ $cert['title'] }}</h2>
          <p class="text-base text-purple-200 font-semibold">{{ $cert['issuer'] }}</p>
          <p class="text-base text-gray-300">Issued {{ $cert['date'] }}</p>
          <p class="text-base text-gray-400">Credential ID: {{ $cert['id'] }}</p>
          <p class="mt-2 text-base text-gray-200">Skills: {{ $cert['skills'] }}</p>

          <div class="mt-5 space-x-6 text-base font-medium">
            <a href="{{ $cert['link'] }}" target="_blank"
               class="text-fuchsia-300 underline transition-transform duration-300 transform hover:scale-105 hover:drop-shadow-[0_0_8px_#c084fc]">
              Show Credential
            </a>
            <a href="{{ asset($cert['image']) }}" download
               class="text-fuchsia-400 underline transition-transform duration-300 transform hover:scale-105 hover:drop-shadow-[0_0_8px_#c084fc]">
              Download
            </a>
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

<!-- Vanta Background -->
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

<!-- AOS Scroll Animation -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
</body>
</html>
