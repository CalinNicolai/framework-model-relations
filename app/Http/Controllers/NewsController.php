<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return view('news.index', [
            'count' => News::count(),
            'news' => News::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('news.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        News::create($request->all());

        return redirect()->route('news.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id): View
    {
        $news = News::findOrFail($id);

        $tags = $news->tags;

        return view('news.show', [
            'news' => News::findOrFail($id),
            'tags' => $tags
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $news = News::findOrFail($id);

        return view('news.edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $news = News::findOrFail($id);

        $news->update($request->all());

        return redirect()->route('news.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $news = News::destroy($id);

        return redirect()->route('news.index');
    }
}
