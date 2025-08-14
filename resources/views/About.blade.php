<x-layout :title="$title">
<!-- About Section -->
    <section id="about" class="py-2 mt-10 relative overflow-hidden">
        <!-- Background decorations -->
        <div class="absolute top-20 right-0 w-96 h-96 bg-gradient-to-br from-blue-100 to-purple-100 rounded-full mix-blend-multiply filter blur-3xl opacity-50"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-gradient-to-tr from-indigo-100 to-pink-100 rounded-full mix-blend-multiply filter blur-3xl opacity-50"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
            <!-- Section Header -->
            <div class="text-center mb-16">
                <div class="inline-flex items-center bg-purple-100 text-purple-800 px-4 py-2 rounded-full text-sm font-medium mb-6">
                    <span class="w-2 h-2 bg-purple-500 rounded-full mr-2 animate-pulse"></span>
                    Our Story
                </div>
                <h2 class="text-4xl lg:text-5xl font-bold text-[#b4fb9a] my-4">
                    About <span class="gradient-text">BlogSphere</span>
                </h2>
                <p class="text-xl text-slate-400 max-w-3xl mx-auto">
                    We're passionate storytellers, dedicated to sharing insights that inspire, educate, and transform how people think about technology and innovation.
                </p>
            </div>

            <!-- Mission Statement -->
            <div class="grid lg:grid-cols-2 gap-12 items-center mb-20">
                <div class="order-2 lg:order-1">
                    <div class="bg-gradient-to-br from-blue-50 to-indigo-100 rounded-3xl p-8 lg:p-12 hover-lift">
                        <div class="w-16 h-16 bg-gradient-to-r from-blue-600 to-purple-600 rounded-2xl flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                            </svg>
                        </div>
                        <h3 class="text-3xl font-bold text-gray-900 mb-4">Our Mission</h3>
                        <p class="text-lg text-gray-700 mb-6 leading-relaxed">
                            To democratize access to cutting-edge knowledge and insights, empowering individuals and organizations to navigate the rapidly evolving digital landscape with confidence and clarity.
                        </p>
                        <div class="flex items-center space-x-4">
                            <div class="flex -space-x-2">
                                <div class="w-10 h-10 bg-gradient-to-r from-pink-400 to-red-500 rounded-full border-2 border-white"></div>
                                <div class="w-10 h-10 bg-gradient-to-r from-green-400 to-blue-500 rounded-full border-2 border-white"></div>
                                <div class="w-10 h-10 bg-gradient-to-r from-yellow-400 to-orange-500 rounded-full border-2 border-white"></div>
                                <div class="w-10 h-10 bg-gradient-to-r from-purple-400 to-pink-500 rounded-full border-2 border-white flex items-center justify-center text-white text-sm font-bold">
                                    +
                                </div>
                            </div>
                            <span class="text-sm text-gray-600">Trusted by 50,000+ readers worldwide</span>
                        </div>
                    </div>
                </div>
                
                <div class="order-1 lg:order-2">
                    <div class="relative">
                        <div class="absolute -top-4 -right-4 w-72 h-72 bg-purple-200 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-float"></div>
                        <div class="relative bg-white rounded-3xl shadow-2xl p-8 hover-lift">
                            <div class="grid grid-cols-2 gap-6">
                                <div class="text-center">
                                    <div class="text-4xl font-bold gradient-text mb-2">5+</div>
                                    <div class="text-sm text-gray-600">Years of Excellence</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-4xl font-bold gradient-text mb-2">1.2K+</div>
                                    <div class="text-sm text-gray-600">Articles Published</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-4xl font-bold gradient-text mb-2">50K+</div>
                                    <div class="text-sm text-gray-600">Active Readers</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-4xl font-bold gradient-text mb-2">15+</div>
                                    <div class="text-sm text-gray-600">Expert Writers</div>
                                </div>
                            </div>
                            <div class="mt-8 p-4 bg-gradient-to-r from-blue-50 to-purple-50 rounded-2xl">
                                <div class="flex items-center space-x-3">
                                    <div class="w-10 h-10 bg-gradient-to-r from-yellow-400 to-orange-500 rounded-full flex items-center justify-center">
                                        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="font-semibold text-gray-900">4.9/5 Rating</div>
                                        <div class="text-sm text-gray-600">Based on reader feedback</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Values Section -->
            <div class="mb-20">
                <div class="text-center mb-12">
                    <h3 class="text-3xl lg:text-4xl font-bold text-[#b4fb9a] mb-4">Our Core Values</h3>
                    <p class="text-lg text-slate-400 max-w-2xl mx-auto">
                        These principles guide everything we do, from the content we create to the community we build.
                    </p>
                </div>
                
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <!-- Value 1 -->
                    <div class="group">
                        <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl p-6 h-full hover-lift group-hover:from-blue-100 group-hover:to-blue-200 transition-all duration-300">
                            <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-blue-600 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                                </svg>
                            </div>
                            <h4 class="text-xl font-bold text-gray-900 mb-3">Innovation</h4>
                            <p class="text-gray-600 leading-relaxed">We stay ahead of trends and explore emerging technologies to bring you the most relevant insights.</p>
                        </div>
                    </div>
                    
                    <!-- Value 2 -->
                    <div class="group">
                        <div class="bg-gradient-to-br from-purple-50 to-purple-100 rounded-2xl p-6 h-full hover-lift group-hover:from-purple-100 group-hover:to-purple-200 transition-all duration-300">
                            <div class="w-12 h-12 bg-gradient-to-r from-purple-500 to-purple-600 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                </svg>
                            </div>
                            <h4 class="text-xl font-bold text-gray-900 mb-3">Quality</h4>
                            <p class="text-gray-600 leading-relaxed">Every piece of content is meticulously researched, fact-checked, and crafted to deliver maximum value.</p>
                        </div>
                    </div>
                    
                    <!-- Value 3 -->
                    <div class="group">
                        <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-2xl p-6 h-full hover-lift group-hover:from-green-100 group-hover:to-green-200 transition-all duration-300">
                            <div class="w-12 h-12 bg-gradient-to-r from-green-500 to-green-600 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                                </svg>
                            </div>
                            <h4 class="text-xl font-bold text-gray-900 mb-3">Community</h4>
                            <p class="text-gray-600 leading-relaxed">We foster an inclusive environment where knowledge is shared freely and discussions flourish.</p>
                        </div>
                    </div>
                    
                    <!-- Value 4 -->
                    <div class="group">
                        <div class="bg-gradient-to-br from-orange-50 to-orange-100 rounded-2xl p-6 h-full hover-lift group-hover:from-orange-100 group-hover:to-orange-200 transition-all duration-300">
                            <div class="w-12 h-12 bg-gradient-to-r from-orange-500 to-orange-600 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                </svg>
                            </div>
                            <h4 class="text-xl font-bold text-gray-900 mb-3">Impact</h4>
                            <p class="text-gray-600 leading-relaxed">We measure success by the positive change our content creates in our readers' personal and professional lives.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Team Section -->
            <div class="mb-20 ">
                <div class="text-center mb-12">
                    <h3 class="text-3xl lg:text-4xl font-bold text-[#b4fb9a] mb-4">Meet Our Team</h3>
                    <p class="text-lg text-slate-400 max-w-2xl mx-auto">
                        Behind every great article is a passionate writer, editor, and subject matter expert dedicated to bringing you the best content.
                    </p>
                </div>
                
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Team Member 1 -->
                    <div class="group">
                        <div class="bg-white rounded-3xl p-8 shadow-lg hover-lift group-hover:shadow-2xl transition-all duration-300 border border-gray-100">
                            <div class="relative mb-6">
                                <div class="w-24 h-24 bg-gradient-to-r from-blue-500 to-purple-600 rounded-full mx-auto flex items-center justify-center text-white text-2xl font-bold group-hover:scale-110 transition-transform duration-300">
                                    SC
                                </div>
                                <div class="absolute -bottom-2 -right-2 w-8 h-8 bg-green-500 rounded-full border-4 border-white flex items-center justify-center">
                                    <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                            </div>
                            <h4 class="text-xl font-bold text-gray-900 mb-2 text-center">Sarah Chen</h4>
                            <p class="text-purple-600 font-medium mb-3 text-center">Editor-in-Chief</p>
                            <p class="text-gray-600 text-center mb-4 leading-relaxed">Former tech journalist with 8+ years experience covering emerging technologies and digital transformation.</p>
                            <div class="flex justify-center space-x-3">
                                <a href="#" class="w-8 h-8 bg-gray-100 rounded-full flex items-center justify-center text-gray-600 hover:bg-blue-500 hover:text-white transition-colors duration-300">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                                    </svg>
                                </a>
                                <a href="#" class="w-8 h-8 bg-gray-100 rounded-full flex items-center justify-center text-gray-600 hover:bg-blue-700 hover:text-white transition-colors duration-300">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Team Member 2 -->
                    <div class="group">
                        <div class="bg-white rounded-3xl p-8 shadow-lg hover-lift group-hover:shadow-2xl transition-all duration-300 border border-gray-100">
                            <div class="relative mb-6">
                                <div class="w-24 h-24 bg-gradient-to-r from-green-500 to-teal-600 rounded-full mx-auto flex items-center justify-center text-white text-2xl font-bold group-hover:scale-110 transition-transform duration-300">
                                    MJ
                                </div>
                                <div class="absolute -bottom-2 -right-2 w-8 h-8 bg-green-500 rounded-full border-4 border-white flex items-center justify-center">
                                    <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                            </div>
                            <h4 class="text-xl font-bold text-gray-900 mb-2 text-center">Mike Johnson</h4>
                            <p class="text-green-600 font-medium mb-3 text-center">Lead Developer</p>
                            <p class="text-gray-600 text-center mb-4 leading-relaxed">Full-stack developer and technical writer specializing in modern web technologies and performance optimization.</p>
                            <div class="flex justify-center space-x-3">
                                <a href="#" class="w-8 h-8 bg-gray-100 rounded-full flex items-center justify-center text-gray-600 hover:bg-gray-800 hover:text-white transition-colors duration-300">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                                    </svg>
                                </a>
                                <a href="#" class="w-8 h-8 bg-gray-100 rounded-full flex items-center justify-center text-gray-600 hover:bg-blue-700 hover:text-white transition-colors duration-300">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                     <div class="group">
                        <div class="bg-white rounded-3xl p-8 shadow-lg hover-lift group-hover:shadow-2xl transition-all duration-300 border border-gray-100">
                            <div class="relative mb-6">
                                <div class="w-24 h-24 bg-gradient-to-r from-green-500 to-yellow-600 rounded-full mx-auto flex items-center justify-center text-white text-2xl font-bold group-hover:scale-110 transition-transform duration-300">
                                    LN
                                </div>
                                <div class="absolute -bottom-2 -right-2 w-8 h-8 bg-green-500 rounded-full border-4 border-white flex items-center justify-center">
                                    <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                            </div>
                            <h4 class="text-xl font-bold text-gray-900 mb-2 text-center">Leon Kennedy.</h4>
                            <p class="text-green-600 font-medium mb-3 text-center">UI/UX Designer</p>
                           <p class="text-gray-600 text-center mb-4 leading-relaxed">Creative designer with expertise in user experience and digital product design, passionate about accessible design.</p>
                            <div class="flex justify-center space-x-3">
                                <a href="#" class="w-8 h-8 bg-gray-100 rounded-full flex items-center justify-center text-gray-600 hover:bg-gray-800 hover:text-white transition-colors duration-300">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                                    </svg>
                                </a>
                                <a href="#" class="w-8 h-8 bg-gray-100 rounded-full flex items-center justify-center text-gray-600 hover:bg-blue-700 hover:text-white transition-colors duration-300">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
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