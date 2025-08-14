<x-layout :title="$title">
  {{-- @foreach ($posts as $post )
<article class="py-8 max-w-screen">
  <a href="/posts/{{ $post['slug'] }}" class="hover:underline">
  <h2 class="text-2xl font-bold text-slate-900 my-2">{{ $post["title"] }}</h2>
  </a>
  <div class="text-slate-500">
    By <a href="/authors/{{ $post->author->username }}" class="font-medium text-base/loose text-slate-900 hover:underline ">{{ $post->author->name }}</a> In <a class="hover:underline text-slate-900" href="/categories/{{ $post->category->slug }}">{{ $post->category->nama }}</a> | 25 Juni 2025
  </div>

  <p class="text-base/loose text-slate-500 my-3">{{ Str::limit( $post["body"], 100) }} </p>
  <a href="/posts/{{ $post["slug"] }}" class="text-base text-blue-600 ">Read more.. &raquo;</a>

</article>
 @endforeach --}}
  
  <h2 class="text-[#b4fb9a] font-bold text-4xl text-center mt-20 mb-8" >Blog List</h2>
  <p class=" text-[#b4fb9a] font-medium text-sm italic my-1 text-center">"Menulis untuk Menginspirasi, Berbagi untuk Mengubah Dunia."</p>
  <div class="py-4 px-4 mx-auto max-w-screen-xl lg:px-6">

<form class="max-w-md mx-auto my-8">   
  @if (request('category'))
    <input type="hidden" name="category" value="{{ request('category') }}">
  @endif

  @if (request('author'))
    <input type="hidden" name="author" value="{{ request('author') }}">
  @endif

    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
    <div class="relative">
        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
            </svg>
        </div>
        <input type="search" id="default-search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Post Title..." autofocus autocomplete="off"  name="search" />
        <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
    </div>
</form>
<div class="font-bold text-green-400">
  {{ $posts->links() }}
</div>
      <div class=" mt-4 grid gap-8 lg:grid-cols-3 md:grid-cols-2">
        @forelse ($posts as $post )
          <article class="p-6 bg-[#24640c] rounded-lg border border-slate-900 shadow-md dark:bg-gray-800 dark:border-gray-700">
              <div class="flex justify-between items-center mb-5 text-slate-50">
                <a href="/posts?category={{ $post->category->slug }}">
                  <span class="{{ $post->category->color }} text-slate-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                      {{ $post->category->nama }}
                  </span>
                </a>
                  <span class="text-sm font-medium">{{ $post->created_at->diffForHumans() }}</span>
              </div>
              <h2 class="mb-2 text-2xl font-bold tracking-tight text-slate-100 dark:text-white"><a href="/posts/{{ $post['slug'] }}">{{ $post['title'] }}</a></h2>
              <p class="mb-5 font-light text-slate-100 dark:text-gray-400">{{ Str::limit( $post["body"], 100) }}</p>
              <div class="flex justify-between items-center">
                <a href="/posts?author={{ $post->author->username }}" class="text-slate-50 text-sm font-medium">
                  <div class="flex items-center space-x-4">
                      <img class="w-7 h-7 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png" alt="{{ $post->author->username }}" />
                      <span class="font-medium text-xs dark:text-white">
                          {{ $post->author->username }}
                      </span>
                  </div>
                  </a>
                  <a href="/posts/{{ $post["slug"] }}" class="inline-flex text-xs items-center font-medium text-slate-200 dark:text-primary-500 hover:underline">
                      Read more
                      <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                  </a>
              </div>
          </article> 
          @empty
          <div class="empty">
            <h2 class="font-bold text-3xl text-slate-200 my-4">Article Not Found...</h2>
            <a href="/posts" class="text-[#b4fb9a] font-medium text-sm">&laquo; Back to Post</a>
          </div>
          @endforelse                 
      </div>  
  </div>

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