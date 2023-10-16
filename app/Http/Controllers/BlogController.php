<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $blogs = DB::table('blogs as b')
                ->select('b.*', 'u.name')
                ->join('users as u', 'b.user_id', '=', 'u.id')
                ->orderBy('b.updated_at', 'desc')
                ->paginate(6);
        
        // Consultamos los blog relacionados según el tema de la entrada.
        $recents = DB::table('blogs')
                ->orderBy('updated_at', 'desc')
                ->skip(0)->take(7)->get();

        return view('blog.blog')
                ->with('blogs',    $blogs)
                ->with('recents',  $recents);
    }
    
    /**
     * Display a listing of the resource.
     */
    public function admin(Request $request)
    {

        $blogs = DB::table('blogs as b')
                ->select('b.*', 'u.name')
                ->join('users as u', 'b.user_id', '=', 'u.id')
                ->orderBy('b.updated_at', 'desc')
                ->paginate(5);

        return view('home')
                ->with('blogs',   $blogs);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return View('blog.create')
            ->with('action',    'Crear')
            ->with('status',    null)
            ->with('message',   '');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $blog              =  new Blog();
        $blog->title       = $request->get('title');
        $blog->user_id     = Auth::user()->id;
        $blog->created_at  = date("Y-m-d H:i:s");
        $blog->content     = $request->get('content');
        $blog->slug        = strtolower(slugify($request->get('title')));
        
        if ($request->hasfile('image')) {
            $file   = $request->file('image');
            $file->move(public_path().'/img/blog/', $blog->slug.'.jpg');
            $blog->image = $blog->slug.'.jpg';
        }
        
        try {

            $blog->save();

            return  redirect()->route('admin')
                    ->with('status',    1)
                    ->with('message',  'Se creó correctamente el blog');
        
        } catch (\Illuminate\Database\QueryException $ex) {dd($ex);
            return  redirect()->route('blog.create')
                    ->with('status',   0)
                    ->with('message',  $ex->errorInfo[2]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        // Validamos que exista el blog segun el  identificador slug
        $existsBlog = Blog::where('slug', '=', $slug)->firstOrFail();
        
        $blog = DB::table('blogs as b')
                ->select('b.*', 'u.name')
                ->join('users as u', 'b.user_id', '=', 'u.id')
                ->where('b.id', $existsBlog->id)->get();
        
        // Consultamos los blog relacionados según el tema de la entrada.
        $recents = DB::table('blogs')
                ->where('id', '!=', $existsBlog->id)
                ->orderBy('updated_at', 'desc')
                ->skip(0)->take(5)->get();
    
        
        return view('blog.show')
                ->with('blog',      $blog[0])
                ->with('recents',   $recents)
                ->with('status',    null)
                ->with('message',   '');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $slug)
    {
        
        // Validamos que exista el blog segun el  identificador slug
        $existsBlog = Blog::where('slug', '=', $slug)->firstOrFail();

        // se obtiene la información del blog...
        $blog = DB::table('blogs as b')
                ->select('b.*', 'u.name')
                ->join('users as u', 'b.user_id', '=', 'u.id')
                ->where('b.id', $existsBlog->id)->get();
        
        return view('blog.edit')
                ->with('blog',      $blog[0])
                ->with('action',    'Editar')
                ->with('status',    null)
                ->with('message',   '')
                ;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $blog              = Blog::where('id', $id)->firstOrFail();
        $blog->title       = $request->get('title');
        $blog->user_id     = Auth::user()->id;
        $blog->updated_at  = date("Y-m-d H:i:s");
        $blog->content     = $request->get('content');
        $blog->slug        = strtolower(slugify($request->get('title')));
        
        if ($request->hasfile('image')) {
            $file   = $request->file('image');
            $file->move(public_path().'/img/blog/', "Blog-" . $blog->id.'.jpg');
            $blog->image = "Blog-" . $blog->id . '.jpg';
        }
        
        try {

            $blog->save();

            return  redirect()->route('admin')
                    ->with('status',    1)
                    ->with('message',  'Se actualizó correctamente la información del blog');
        
        } catch (\Illuminate\Database\QueryException $ex) {
            return  redirect()->route('blog.edit',  [ $blog->slug ])
                    ->with('status',   0)
                    ->with('message',  $ex->errorInfo[2]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Validamos que exista el blog segun el  identificador slug
        $existsBlog = Blog::where('id', '=', $id)->firstOrFail();

        try {

            $existsBlog->delete();

            return  redirect()->route('admin')
                    ->with('status',   1)
                    ->with('message',  'Se eliminó correctamente el blog');
        
        } catch (\Illuminate\Database\QueryException $ex) {
            return  redirect()->route('admin')
                    ->with('status',   0)
                    ->with('message',  $ex->errorInfo[2]);
        }
    }
}
