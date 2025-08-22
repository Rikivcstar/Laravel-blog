<?php

use App\Http\Controllers\PostDashboardController;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use Pest\Plugins\Profile;

// Route untuk halaman beranda ('/')
Route::get('/', function (Category $category) {

    return view('Home', ["title" => "Home Page", 'category' => $category]);
});

// Route untuk halaman semua postingan blog ('/posts')
Route::get('/posts', function () {
    // Mengambil semua postingan terbaru dari database menggunakan model Post
    // $posts = Post::with(['author', 'category'])->latest()->get(); // ini versi dengan relasi
    $posts = Post::latest()->filter(request(['search', 'category', 'author']))->paginate(9)->withQueryString(); // versi tanpa eager loading
    // Menampilkan view 'posts' dan mengirimkan data 'title' dan 'posts'
    return view('posts', ["title" => "Blog Page", "posts" => $posts]);
});

// Route untuk menampilkan semua postingan berdasarkan username penulis
// Route::get('/authors/{user:username}', function (User $user) {
//     // Mengakses semua postingan milik user yang dicari berdasarkan username
//     // $posts = $user->posts->load('author', 'category'); // versi dengan relasi
//     // Menampilkan view 'posts' dan mengirimkan jumlah artikel dan semua postingan user
//     return view('posts', [
//         "title" => count($user->posts) . " Article by : " . $user->username,
//         "posts" => $user->posts
//     ]);
// });

// Route untuk menampilkan semua postingan dalam kategori tertentu
// Route::get('/categories/{category:slug}', function (Category $category) {
//     // Mengakses semua postingan berdasarkan kategori yang dicari melalui slug
//     // $posts = $category->posts->load('author', 'category'); // versi dengan relasi
//     // Menampilkan view 'posts' dan mengirimkan nama kategori serta daftar postingan
//     return view('posts', [
//         "title" => "Category : " . $category->nama,
//         "posts" => $category->posts
//     ]);
// });

// Route untuk menampilkan detail dari satu postingan berdasarkan slug
Route::get('/posts/{post:slug}', function(Post $post) {
    // Menampilkan view 'post' dengan detail satu postingan
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});     

// Route untuk halaman About
Route::get('/about', function () {
    // Menampilkan view 'About' dengan data 'title'
    return view('About', ["title" => "About Page"]);
});

Route::get('/course', function () {
    // Menampilkan view 'About' dengan data 'title'
    return view('Course', ["title" => "Course Page"]);
});

// Route untuk halaman Contact
Route::get('/contact', function () {
    // Menampilkan view 'Contact' dengan data 'title'
    return view('Contact', ["title" => "Contact Page"]);
});


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [PostDashboardController::class, 'index'])->name('dashboard');
    Route::post('/dashboard', [PostDashboardController::class, 'store']);
    Route::get('/dashboard/create', [PostDashboardController::class, 'create']);
    Route::delete('/dashboard/{post:slug}', [PostDashboardController::class, 'destroy']);
    Route::get('/dashboard/{post:slug}/edit', [PostDashboardController::class, 'edit']);
    Route::patch('/dashboard/{post:slug}', [PostDashboardController::class, 'update']);
    Route::get('/dashboard/{post:slug}', [PostDashboardController::class, 'show']);
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/upload', [ProfileController::class, 'upload']);
});

require __DIR__.'/auth.php';
