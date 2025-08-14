<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class PostDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    

    public function index()
    {
        //
        $posts =  Post::latest()->where('author_id', Auth::user()->id);

        if(request('search_title'))
            {
                $posts->where('title', 'like', '%' . request('search_title') . '%');
            }

        return view('dashboard.index', ['posts' => $posts->paginate(7)->withQueryString()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('dashboard.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // validation 
        // $request->validate( 
        //       [  'title' => 'required',
        //          'category_id' => 'required',
        //          'body' => 'required'
             
        //     ]);

        Validator::make($request->all(),[
                'title' => 'required|unique:posts|max:100|min:5',
                'category_id' => 'required',
                'body' => 'required'
            ],
            [
                'title.required' => 'Field :attribute harus di isi',
                'category_id.required' => 'Pilih salah satu Category',
                'body.required' => 'Field :attribute  wajib di isi'
            ])->validate();

        //Create data post
        Post::create([
            'title' => $request->title,
            'author_id' => Auth::user()->id,
            'category_id' => $request->category_id,
            'slug' => Str::slug($request->title),
            'body' => $request->body
        ]);

        return redirect('/dashboard')->with(['success' => 'your post has been saved!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Post  $post)
    {
        //
        return view('dashboard.show', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
        $post->delete();
        return redirect('/dashboard')->with(['success' => 'your post has been removed!']);
    }
}
