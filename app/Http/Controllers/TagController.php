<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tags = Tag::join('news_tags', 'tags.id', '=', 'news_tags.tag_id')
            ->select('tags.*', DB::raw('COUNT(news_tags.tag_id) as news_count'))
            ->groupBy('tags.id')
            ->get();

        return view('tags.index', [
            'tags' => $tags
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
    public function show(Tag $tag)
    {

        $news = $tag->news;

        return view('tags.show', [
            'tag' => $tag,
            'news' => $news,
            'count' => $news->count(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tag $tag)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tag $tag)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tag $tag)
    {
        //
    }
}
