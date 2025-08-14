<x-layout :title="$title">
  <!-- Course Section -->
  <section class="py-16 px-4 mt-10 md:px-12 max-w-6xl mx-auto">
    <!-- Title -->
    <div class="text-center mb-12">
      <h2 class="text-5xl font-bold mb-2 text-[#b4fb9a]">Top Courses</h2>
      <p class="text-gray-300">Upgrade your skills with trending tech topics</p>
    </div>

    <!-- Video Preview -->
    <div class="mb-12 rounded-xl overflow-hidden shadow-lg">
      <div class="relative w-full" style="padding-bottom: 56.25%">
        <iframe
          class="absolute top-0 left-0 w-full h-full"
          src="/image/03_Keltner_Channel_–_Akademi_Crypto_Belajar_Crypto_2024_04_25_11.mp4"
          title="Course Preview"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen
        ></iframe>
      </div>
    </div>

    <!-- Courses as Product Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
      
      <!-- Card 1 -->
      <div class="bg-green-900 rounded-xl shadow-lg overflow-hidden hover:scale-[1.02] transition">
        <img src="/image/WP.jpeg" alt="web programing">
        <div class="p-6">
          <h3 class="text-xl font-bold mb-2 text-slate-200">Web Programming</h3>
          <p class="text-slate-200 mb-4">Learn how to build responsive websites using HTML, CSS, and JavaScript.</p>
          <div class="flex items-center justify-between mt-8">
            <span class="text-green-400 font-semibold">$29.99</span>
            <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg text-sm font-medium">
              Enroll Now
            </button>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="bg-green-900 rounded-xl shadow-lg overflow-hidden hover:scale-[1.02] transition">
         <img src="/image/BL.jpeg" alt="Blockchain" >
        <div class="p-6">
          <h3 class="text-xl font-bold mb-2 text-slate-200">Web3 Blockchain</h3>
          <p class="text-slate-200 mb-4">Understand blockchain fundamentals and develop decentralized apps (DApps).</p>
          <div class="flex items-center justify-between mt-4">
            <span class="text-green-400 font-semibold">$39.99</span>
            <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg text-sm font-medium">
              Enroll Now
            </button>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="bg-green-900 rounded-xl shadow-lg overflow-hidden hover:scale-[1.02] transition">
        <img src="/image/AI.jpeg" alt="artificial intelegent">
        <div class="p-6">
          <h3 class="text-xl font-bold mb-2 text-slate-200">Artificial Intelligence</h3>
          <p class=" mb-4 text-slate-200">Explore the basics of AI, including machine perception and reasoning systems.</p>
          <div class="flex items-center justify-between mt-4">
            <span class="text-green-400 font-semibold">$49.99</span>
            <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg text-sm font-medium">
              Enroll Now
            </button>
          </div>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="bg-green-900 rounded-xl shadow-lg overflow-hidden hover:scale-[1.02] transition">
        <img src="/image/DS.jpeg" alt="Web Design">
        <div class="p-6">
          <h3 class="text-xl font-bold mb-2 text-slate-200">Web Design</h3>
          <p class="text-slate-200 mb-4">Master the principles of UI/UX design to create beautiful and user-friendly interfaces.</p>
          <div class="flex items-center justify-between mt-4">
            <span class="text-green-400 font-semibold">$24.99</span>
            <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg text-sm font-medium">
              Enroll Now
            </button>
          </div>
        </div>
      </div>

      <!-- Card 5 -->
      <div class="bg-green-900 rounded-xl shadow-lg overflow-hidden hover:scale-[1.02] transition">
        <img src="/image/MC.jpeg" alt="mechine learning">
        <div class="p-4">
          <h3 class="text-xl font-bold mb-2 text-slate-200">Machine Learning</h3>
          <p class="text-slate-200 mb-4">Build intelligent systems using Python, TensorFlow, and real datasets Lorem ipsum dolor sit amet..</p>
          <div class="flex items-center justify-between mt-4">
            <span class="text-green-400 font-semibold">$59.99</span>
            <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg text-sm font-medium">
              Enroll Now
            </button>
          </div>
        </div>
      </div>

    </div>
  </section>

      <footer class=" text-[#b4fb9a] py-16 mt-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-4 gap-8">
                <div class="md:col-span-2">
                    <div class="flex items-center space-x-2 mb-6">
                        <div class="w-10 h-10 bg-gradient-to-r from-blue-600 to-purple-600 rounded-xl flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <span class="text-2xl font-bold">BlogSphere</span>
                    </div>
                    <p class="text-gray-400 mb-6 max-w-md">
                        Empowering minds through exceptional content. Join our community of thinkers, creators, and innovators shaping the future.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 bg-yellow-600 rounded-full flex items-center justify-center hover:bg-yellow-800 transition-colors duration-300">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-10 h-10 bg-yellow-600 rounded-full flex items-center justify-center hover:bg-yellow-800 transition-colors duration-300">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-10 h-10 bg-yellow-600 rounded-full flex items-center justify-center hover:bg-yellow-800 transition-colors duration-300">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                    </div>
                </div>
                
                <div>
                    <h3 class="text-lg font-semibold mb-6">Quick Links</h3>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-300">About Us</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-300">Contact</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-300">Privacy Policy</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-300">Terms of Service</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-lg font-semibold mb-6">Categories</h3>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-300">Technology</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-300">Design</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-300">Business</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-300">Lifestyle</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-gray-200 mt-12 pt-8 text-center">
                <p class="text-gray-400">
                    © 2024 BlogSphere. All rights reserved. Made with ❤️ for the community.
                </p>
            </div>
        </div>
    </footer>
</x-layout>