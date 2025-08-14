<x-layout :title="$title">
 
   <section id="home" class="overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 items-center my-20">
                <div class="animate-fade-in-up">
                    <div class="inline-flex items-center bg-blue-100 text-blue-800 px-4 py-2 rounded-full text-sm font-medium mb-6">
                        <span class="w-2 h-2 bg-blue-500 rounded-full mr-2 animate-pulse"></span>
                        Welcome to the Future of Blogging And than Courses Online 
                    </div>
                    
                    <h1 class="text-5xl lg:text-6xl font-black text-[#b4fb9a] leading-tight mb-6">
                        Knowlage Is
                        <span class="gradient-text block">Power</span>
                        & Transform Yourself
                    </h1>
                    
                    <p class="text-xl text-[#b4fb9a] mb-8 leading-relaxed max-w-xl">
                        Discover cutting-edge insights, trending topics, and transformative ideas that shape our digital world. Join thousands of readers exploring the future.
                    </p>
                    
                    <div class="flex flex-col sm:flex-row gap-4 mb-12">
                        <button class="bg-gradient-to-r from-[#b4fb9a] to-[#6ad045] text-slate-900 px-8 py-4 rounded-2xl font-semibold text-lg hover:from-[#071802] hover:to-[#296e11] hover:text-white  transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                            Start Reading
                        </button>
                        <button class="border-2 border-gray-300 text-[#b4fb9a] px-8 py-4 rounded-2xl font-semibold text-lg hover:border-[#b4fb9a] hover:text-[#5ca841] transition-all duration-300 transform hover:scale-105">
                            Watch Demo
                        </button>
                    </div>
                    
                    <div class="flex items-center space-x-8">
                        <div class="text-center">
                            <div class="text-3xl font-bold text-gray-100">50K+</div>
                            <div class="text-sm text-[#b4fb9a]">Active Readers</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-gray-100">1.2K+</div>
                            <div class="text-sm text-[#b4fb9a]">Articles</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-gray-100">98%</div>
                            <div class="text-sm text-[#b4fb9a]">Satisfaction</div>
                        </div>
                    </div>
                </div>
                 
              <div class="flex justify-center">
                  <div class="relative group">
                      <div class="absolute inset-0 bg-gradient-to-r from-[#b4fb9a] via-[#002731] to-[#5ca841] rounded-3xl blur-lg opacity-75 group-hover:opacity-100 transition duration-1000 animate-pulse-glow"></div>
                      <div class="relative p-8 bg-white/10 backdrop-blur-lg rounded-3xl border border-white/20 shadow-2xl">
                          <div class="absolute top-4 right-4 w-4 h-4 bg-green-400 rounded-full animate-pulse"></div>
                          <div class="absolute top-4 left-4 w-3 h-3 bg-yellow-400 rounded-full animate-pulse" style="animation-delay: 1s;"></div>
                          <div class="absolute bottom-4 left-4 w-2 h-2 bg-red-400 rounded-full animate-pulse" style="animation-delay: 2s;"></div>
                          <img src="/image/astronot.png" alt="Astronaut reading book" class="w-full max-w-lg rounded-2xl shadow-lg transition-transform duration-500 group-hover:scale-105">
                      </div>
                  </div>
              </div>
        </div>
            </div>
        </div>
    </section>

    {{-- Futers section --}}
    <section id="articles" class="py-25 my-28 max-[]:w-full bg-transparent rounded-2xl">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-bold text-[#b4fb9a] mb-4">
                    Trending <span class="gradient-text">Articles</span>
                </h2>
                <p class="text-xl text-slate-200 max-w-3xl mx-auto">
                    Discover the most popular and engaging content from our community of expert writers and thought leaders.
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Article 1 -->
                <a href="/posts?category=web-programming">
                <article class="bg-gradient-to-br from-[#1f3816] to-[#47992a] rounded-3xl p-8 hover-lift">
                    <div class="bg-gradient-to-r from-blue-500 to-purple-600 w-16 h-16 rounded-2xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"/>
                        </svg>
                    </div>
                    
                    <h3 class="text-2xl font-bold text-slate-100 mb-4">Web Programming & Web Design</h3>
                    <p class="text-slate-100 mb-6 leading-relaxed">Learn the essential principles that drive exceptional user experiences in today's digital landscape.</p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <div class="w-8 h-8 bg-gradient-to-r from-pink-400 to-red-500 rounded-full"></div>
                            <span class="text-sm font-medium text-slate-200">Sarah Chen</span>
                        </div>
                        <span class="text-sm text-slate-200">5 min read</span>
                    </div>
                </article>
                </a>
                 <a href="/posts?category=web-programming">
                <article class="bg-gradient-to-br from-[#1f3816] to-[#47992a] rounded-3xl p-8 hover-lift">
                    <div class="bg-gradient-to-r from-blue-500 to-purple-600 w-16 h-16 rounded-2xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"/>
                        </svg>
                    </div>
                    
                    <h3 class="text-2xl font-bold text-slate-100 mb-4">Web Programming & Web Design</h3>
                    <p class="text-slate-100 mb-6 leading-relaxed">Learn the essential principles that drive exceptional user experiences in today's digital landscape.</p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <div class="w-8 h-8 bg-gradient-to-r from-pink-400 to-red-500 rounded-full"></div>
                            <span class="text-sm font-medium text-slate-200">Sarah Chen</span>
                        </div>
                        <span class="text-sm text-slate-200">5 min read</span>
                    </div>
                </article>
                </a>
                 <a href="/posts?category=web-programming">
                <article class="bg-gradient-to-br from-[#1f3816] to-[#47992a] rounded-3xl p-8 hover-lift">
                    <div class="bg-gradient-to-r from-blue-500 to-purple-600 w-16 h-16 rounded-2xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"/>
                        </svg>
                    </div>
                    
                    <h3 class="text-2xl font-bold text-slate-100 mb-4">Web Programming & Web Design</h3>
                    <p class="text-slate-100 mb-6 leading-relaxed">Learn the essential principles that drive exceptional user experiences in today's digital landscape.</p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <div class="w-8 h-8 bg-gradient-to-r from-pink-400 to-red-500 rounded-full"></div>
                            <span class="text-sm font-medium text-slate-200">Sarah Chen</span>
                        </div>
                        <span class="text-sm text-slate-200">5 min read</span>
                    </div>
                </article>
                </a>
                <!-- Article 2 -->
                <article class="bg-gradient-to-br from-[#1f3816] to-[#47992a] rounded-3xl p-8 hover-lift">
                    <div class="bg-gradient-to-r from-purple-500 to-pink-600 w-16 h-16 rounded-2xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M12.316 3.051a1 1 0 01.633 1.265l-4 12a1 1 0 11-1.898-.632l4-12a1 1 0 011.265-.633zM5.707 6.293a1 1 0 010 1.414L3.414 10l2.293 2.293a1 1 0 11-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0zm8.586 0a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 11-1.414-1.414L16.586 10l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-100 mb-4">JavaScript Performance Optimization</h3>
                    <p class="text-slate-100 mb-6 leading-relaxed">Advanced techniques to boost your JavaScript applications' performance and user experience.</p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <div class="w-8 h-8 bg-gradient-to-r from-green-400 to-blue-500 rounded-full"></div>
                            <span class="text-sm font-medium text-slate-200">Mike Johnson</span>
                        </div>
                        <span class="text-sm text-slate-200">8 min read</span>
                    </div>
                </article>
                
                <!-- Article 3 -->
                <article class="bg-gradient-to-br from-[#1f3816] to-[#47992a] rounded-3xl p-8 hover-lift">
                    <div class="bg-gradient-to-r from-green-500 to-teal-600 w-16 h-16 rounded-2xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-100 mb-4">Building Sustainable Tech Teams</h3>
                    <p class="text-slate-100 mb-6 leading-relaxed">Strategies for creating and maintaining high-performing development teams in the modern workplace.</p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <div class="w-8 h-8 bg-gradient-to-r from-yellow-400 to-orange-500 rounded-full"></div>
                            <span class="text-sm font-medium text-slate-200">Lisa Rodriguez</span>
                        </div>
                        <span class="text-sm text-slate-200">6 min read</span>
                    </div>
                </article>
            </div>
            
            <div class="text-center mt-12">
              <a href="/posts/">
                <button class="bg-gradient-to-r from-[#b4fb9a] to-[#6ad045] text-slate-900 px-8 py-4 rounded-2xl font-semibold text-lg hover:from-[#071802] hover:to-[#296e11] hover:text-white  transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                    View All Articles
                </button>
                </a>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-transparent relative overflow-hidden">
        <!-- Background decorations -->
        <div class="absolute top-0 left-0 w-72 h-72 bg-blue-200 rounded-full mix-blend-multiply filter blur-xl opacity-30 animate-float"></div>
        <div class="absolute bottom-0 right-0 w-72 h-72 bg-purple-200 rounded-full mix-blend-multiply filter blur-xl opacity-30 animate-float" style="animation-delay: 3s;"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="text-center mb-16">
                <div class="inline-flex items-center bg-blue-100 text-blue-800 px-4 py-2 rounded-full text-sm font-medium mb-6">
                    <span class="w-2 h-2 bg-blue-500 rounded-full mr-2 animate-pulse"></span>
                    Let's Connect
                </div>
                <h2 class="text-4xl lg:text-5xl font-bold  text-[#b4fb9a] mb-4">
                    Get In <span class="gradient-text">Touch</span>
                </h2>
                <p class="text-xl text-slate-400 max-w-3xl mx-auto">
                    Have a story to share, a question to ask, or want to collaborate? We'd love to hear from you. Let's create something amazing together.
                </p>
            </div>
            
            <div class="grid lg:grid-cols-2 gap-12 items-start">
                <!-- Contact Form -->
                <div class="bg-white rounded-3xl shadow-2xl p-8 lg:p-10 hover-lift">
                    <div class="mb-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">Send us a message</h3>
                        <p class="text-gray-600">Fill out the form below and we'll get back to you within 24 hours.</p>
                    </div>
                    
                    <form class="space-y-6" id="contactForm">
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label for="firstName" class="block text-sm font-semibold text-gray-700 mb-2">First Name</label>
                                <input 
                                    type="text" 
                                    id="firstName" 
                                    name="firstName" 
                                    required
                                    class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300 bg-gray-50 focus:bg-white"
                                    placeholder="John"
                                >
                            </div>
                            <div>
                                <label for="lastName" class="block text-sm font-semibold text-gray-700 mb-2">Last Name</label>
                                <input 
                                    type="text" 
                                    id="lastName" 
                                    name="lastName" 
                                    required
                                    class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300 bg-gray-50 focus:bg-white"
                                    placeholder="Doe"
                                >
                            </div>
                        </div>
                        
                        <div>
                            <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">Email Address</label>
                            <input 
                                type="email" 
                                id="email" 
                                name="email" 
                                required
                                class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300 bg-gray-50 focus:bg-white"
                                placeholder="john@example.com"
                            >
                        </div>
                        <div>
                            <label for="message" class="block text-sm font-semibold text-gray-700 mb-2">Message</label>
                            <textarea 
                                id="message" 
                                name="message" 
                                rows="5" 
                                required
                                class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300 bg-gray-50 focus:bg-white resize-none"
                                placeholder="Tell us about your project, question, or how we can help you..."
                            ></textarea>
                        </div>
                        
                        <div class="flex items-start space-x-3">
                            <input 
                                type="checkbox" 
                                id="privacy" 
                                name="privacy" 
                                required
                                class="mt-1 w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500"
                            >
                            <label for="privacy" class="text-sm text-gray-600">
                                I agree to the <a href="#" class="text-blue-600 hover:text-blue-700 font-medium">Privacy Policy</a> and <a href="#" class="text-blue-600 hover:text-blue-700 font-medium">Terms of Service</a>
                            </label>
                        </div>
                        
                        <button 
                            type="submit"
                            class="w-full bg-gradient-to-r from-blue-600 to-purple-600 text-white py-4 px-6 rounded-xl font-semibold text-lg hover:from-blue-700 hover:to-purple-700 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl flex items-center justify-center space-x-2"
                        >
                            <span>Send Message</span>
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                            </svg>
                        </button>
                    </form>
                </div>
                
                <!-- Contact Information -->
                <div class="space-y-8">
                    <!-- Contact Cards -->
                    <div class="grid gap-15">
                        <!-- Email Card -->
                        <div class="bg-white rounded-2xl p-6 shadow-lg hover-lift border border-gray-100">
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-purple-600 rounded-xl flex items-center justify-center">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900">Email Us</h4>
                                    <p class="text-gray-600">hello@blogsphere.com</p>
                                    <p class="text-sm text-gray-500">We'll respond within 24 hours</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Phone Card -->
                        <div class="bg-white rounded-2xl p-6 shadow-lg hover-lift border border-gray-100">
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 bg-gradient-to-r from-green-500 to-teal-600 rounded-xl flex items-center justify-center">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900">Call Us</h4>
                                    <p class="text-gray-600">+1 (555) 123-4567</p>
                                    <p class="text-sm text-gray-500">Mon-Fri, 9am-6pm EST</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Location Card -->
                        <div class="bg-white rounded-2xl p-6 shadow-lg hover-lift border border-gray-100">
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 bg-gradient-to-r from-purple-500 to-pink-600 rounded-xl flex items-center justify-center">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900">Visit Us</h4>
                                    <p class="text-gray-600">123 Innovation Street</p>
                                    <p class="text-sm text-gray-500">San Francisco, CA 94102</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Social Media -->
                    <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100">
                        <h4 class="font-semibold text-gray-900 mb-4">Follow Us</h4>
                        <div class="flex space-x-4">
                            <a href="#" class="w-12 h-12 bg-blue-600 rounded-xl flex items-center justify-center text-white hover:bg-blue-700 transition-colors duration-300 transform hover:scale-110">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                                </svg>
                            </a>
                            <a href="#" class="w-12 h-12 bg-blue-700 rounded-xl flex items-center justify-center text-white hover:bg-blue-800 transition-colors duration-300 transform hover:scale-110">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                </svg>
                            </a>
                            <a href="#" class="w-12 h-12 bg-pink-600 rounded-xl flex items-center justify-center text-white hover:bg-pink-700 transition-colors duration-300 transform hover:scale-110">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.174-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.099.12.112.225.085.347-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.402.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.357-.629-2.746-1.378l-.747 2.848c-.269 1.045-1.004 2.352-1.498 3.146 1.123.345 2.306.535 3.55.535 6.624 0 11.99-5.367 11.99-11.989C24.007 5.367 18.641.001 12.017.001z"/>
                                </svg>
                            </a>
                            <a href="#" class="w-12 h-12 bg-red-600 rounded-xl flex items-center justify-center text-white hover:bg-red-700 transition-colors duration-300 transform hover:scale-110">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                                </svg>
                            </a>
                        </div>
                        <p class="text-sm text-gray-500 mt-4">Join our community of 50,000+ followers for daily inspiration and updates.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- footer Section --}}
    <footer class=" text-[#b4fb9a] py-16">
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