<?php

namespace App\Http\Controllers;

use App\Map;
use Illuminate\Http\Request;

class MapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $type = $request->input('type');
        $hashTag = $request->input('hashTag');

        $maps = Map::all();

        $items = [];
        foreach ($maps as $map) {
        $tempContext = explode('▎', $map->context)[1];
        $tempContext = explode('特色：', $tempContext)[1];

        $item = [
            'url' => $map->image,
            'title' => $map->title,
            'context' => $tempContext,
            'id' => $map->id
        ];
        $items =  array_merge($items, [$item]);
    }

        if ($type != null) $type = 'type=' . $type;
        if ($hashTag != null) $hashTag = 'hashTag=' . $hashTag;

        return view('story')
            ->with('times', $items)
            ->with('type', $type)
            ->with('hashTag', $hashTag)
            ->with('searchName', '');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $type = $request->input('type');
        $hashTag = $request->input('hashTag');
        $searchName = $request->input("search");

        $maps = Map::where('title', 'like', '%' . $searchName . '%')
            ->orWhere('context', 'like', '%' . $searchName . '%')
            ->get();

        $items = [];
        foreach ($maps as $map) {
            $tempContext = explode('▎', $map->context)[1];
            $tempContext = explode('特色：', $tempContext)[1];

            $item = [
                'url' => $map->image,
                'title' => $map->title,
                'context' => $tempContext,
                'id' => $map->id
            ];
            $items =  array_merge($items, [$item]);
        }


        if ($hashTag != null) $hashTag = 'hashTag=' . $hashTag;
        if ($type != null) $type = 'type=' . $type;

        return view('story')
            ->with('times', $items)
            ->with('type', $type)
            ->with('hashTag', $hashTag)
            ->with('searchName', $searchName);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Map  $map
     * @return \Illuminate\Http\Response
     */
    public function show(Map $map)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Map  $map
     * @return \Illuminate\Http\Response
     */
    public function edit(Map $map)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Map  $map
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Map $map)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Map  $map
     * @return \Illuminate\Http\Response
     */
    public function destroy(Map $map)
    {
        //
    }
}
