<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Skills - Mugdha</title>
    @vite('resources/css/app.css')

    <!-- Vanta.js & Three.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r134/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.net.min.js"></script>

    <!-- Animate.css for entrance animations -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>
<body class="text-white">
<div id="vanta-bg" class="min-h-screen">

    <!-- Navbar -->
    <nav class="bg-black/50 backdrop-blur-md text-white px-6 py-4 flex justify-between shadow-md rounded-b-xl">
        <div class="font-bold text-purple-300 text-xl tracking-wider neon-glow">Adit Mugdha Das</div>
        <ul class="flex gap-6 text-sm md:text-base">
            <li><a href="{{ url('/') }}" class="hover:text-purple-300 transition-transform transform duration-300 hover:scale-110 hover:drop-shadow-[0_0_8px_#c084fc]">Home</a></li>
            <li><a href="{{ url('/about') }}" class="hover:text-purple-300 transition-transform transform duration-300 hover:scale-110 hover:drop-shadow-[0_0_8px_#c084fc]">About</a></li>
            <li><a href="{{ url('/education') }}" class="hover:text-purple-300 transition-transform transform duration-300 hover:scale-110 hover:drop-shadow-[0_0_8px_#c084fc]">Education</a></li>
            <li><a href="{{ url('/skills') }}" class="text-purple-300 font-semibold drop-shadow-[0_0_8px_#c084fc] scale-110">Skills</a></li>
            <li><a href="{{ url('/projects') }}" class="hover:text-purple-300 transition-transform transform duration-300 hover:scale-110 hover:drop-shadow-[0_0_8px_#c084fc]">Projects</a></li>
            <li><a href="{{ url('/certifications') }}" class="hover:text-purple-300 transition duration-300 hover:scale-110 hover:drop-shadow-[0_0_8px_#c084fc]">Certifications</a></li>
            <li><a href="{{ url('/test') }}" class="hover:text-purple-300 transition duration-300 hover:scale-110 hover:drop-shadow-[0_0_8px_#c084fc]">Honors & Awards</a></li>


            <li><a href="{{ url('/contact') }}" class="hover:text-purple-300 transition-transform transform duration-300 hover:scale-110 hover:drop-shadow-[0_0_8px_#c084fc]">Contact</a></li>
        </ul>
    </nav>

    <!-- Skills Section -->
    <section class="text-center py-16 px-4 animate__animated animate__fadeIn">
        <h1 class="text-4xl font-bold mb-12 text-white drop-shadow-[0_0_20px_#c084fc]">My Skills</h1>

        <div class="flex flex-wrap justify-center gap-6 max-w-7xl mx-auto text-left">
            <!-- Left Column (6 Cards) -->
            <div class="flex flex-wrap gap-6 w-full lg:w-[68%] animate__animated animate__fadeInLeft">

                <!-- Programming Languages -->
                <div class="bg-black/60 p-6 rounded-xl shadow-lg border border-fuchsia-400/20 w-full sm:w-[45%] transition-all duration-300 transform hover:scale-[1.03] hover:shadow-[0_0_20px_#c084fc]">
                    <h2 class="text-xl font-semibold mb-2 text-fuchsia-400">Programming Languages</h2>
                    <ul class="list-disc list-inside space-y-1">
                        <li>Python</li>
                        <li>C/C++</li>
                        <li>Java</li>
                        <li>JavaScript</li>
                    </ul>
                </div>

                <!-- Web Development -->
                <div class="bg-black/60 p-6 rounded-xl shadow-lg border border-fuchsia-400/20 w-full sm:w-[45%] transition-all duration-300 transform hover:scale-[1.03] hover:shadow-[0_0_20px_#c084fc]">
                    <h2 class="text-xl font-semibold mb-2 text-fuchsia-400">Web Development</h2>
                    <ul class="list-disc list-inside space-y-1">
                        <li>Laravel</li>
                        <li>PHP & MySQL</li>
                        <li>HTML, CSS, Tailwind</li>
                    </ul>
                </div>

                <!-- Tools & Platforms -->
                <div class="bg-black/60 p-6 rounded-xl shadow-lg border border-fuchsia-400/20 w-full sm:w-[45%] transition-all duration-300 transform hover:scale-[1.03] hover:shadow-[0_0_20px_#c084fc]">
                    <h2 class="text-xl font-semibold mb-2 text-fuchsia-400">Tools & Platforms</h2>
                    <ul class="list-disc list-inside space-y-1">
                        <li>Git & GitHub</li>
                        <li>VS Code</li>
                        <li>XAMPP</li>
                        <li>Jupyter Notebook</li>
                        <li>Microsoft Excel</li>
                    </ul>
                </div>

                <!-- Android Development -->
                <div class="bg-black/60 p-6 rounded-xl shadow-lg border border-fuchsia-400/20 w-full sm:w-[45%] transition-all duration-300 transform hover:scale-[1.03] hover:shadow-[0_0_20px_#c084fc]">
                    <h2 class="text-xl font-semibold mb-2 text-fuchsia-400">Android Development</h2>
                    <ul class="list-disc list-inside space-y-1">
                        <li>Android Studio</li>
                        <li>Chaquopy</li>
                        <li>TFLite Integration</li>
                        <li>Flask</li>
                        <li>Tkinter</li>
                    </ul>
                </div>

                <!-- Databases & Cloud -->
                <div class="bg-black/60 p-6 rounded-xl shadow-lg border border-fuchsia-400/20 w-full sm:w-[45%] transition-all duration-300 transform hover:scale-[1.03] hover:shadow-[0_0_20px_#c084fc]">
                    <h2 class="text-xl font-semibold mb-2 text-fuchsia-400">Databases & Cloud</h2>
                    <ul class="list-disc list-inside space-y-1">
                        <li>MySQL</li>
                        <li>Oracle</li>
                        <li>Firebase</li>
                    </ul>
                </div>

                <!-- Additional Technical Skills -->
                <div class="bg-black/60 p-6 rounded-xl shadow-lg border border-fuchsia-400/20 w-full sm:w-[45%] transition-all duration-300 transform hover:scale-[1.03] hover:shadow-[0_0_20px_#c084fc]">
                    <h2 class="text-xl font-semibold mb-2 text-fuchsia-400">Additional Technical Skills</h2>
                    <ul class="list-disc list-inside space-y-1">
                        <li>Data Cleaning</li>
                        <li>Data Migration & Automation</li>
                        <li>Digital Circuit Design (Logisim)</li>
                    </ul>
                </div>
            </div>

            <!-- Right Column (Machine Learning & AI) -->
            <div class="bg-black/60 p-6 rounded-xl shadow-lg border border-fuchsia-400/20 w-full lg:w-[30%] transition-all duration-300 transform hover:scale-[1.03] hover:shadow-[0_0_20px_#c084fc] animate__animated animate__fadeInRight">
                <h2 class="text-xl font-semibold mb-2 text-fuchsia-400">Machine Learning & AI</h2>
                <ul class="list-disc list-inside space-y-1">
                    <li>Supervised & Unsupervised Learning</li>
                    <li>Deep Learning</li>
                    <li>Reinforcement Learning</li>
                    <li>Scikit-learn, TensorFlow, Keras</li>
                    <li>Artificial Neural Networks</li>
                    <li>Regression & Classification Algorithms</li>
                    <li>NLP, Computer Vision</li>
                    <li>Hyperparameter Tuning</li>
                    <li>XGBOOST</li>
                </ul>
            </div>
        </div>
    </section>

</div>

<!-- Vanta.js Background Initialization -->
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
