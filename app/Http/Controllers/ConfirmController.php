<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class ConfirmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('admin');
        
        return view('dashboard.confirms.manageConfirms', [
            "title" => "Manage Confirmation",
            "blogs" => Blog::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog, Request $request)
    {   
        return $blog;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, $slug)
    {
        $validatedData = $request->validate([
            'is_confirm' => ['required', 'in:confirmed,rejected'],
        ]);
        
        $blog = Blog::where('slug', $slug)->firstOrFail();
        
        $blog->update([
            'is_confirmed' => $validatedData['is_confirm'],
        ]);
        
        return redirect('/dashboard/confirms')->with('success', 'Blog has been confirmated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
