<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index() {
        $tags= Tag::all();
        return view("tag/tags")->with("tags", $tags);
    }

    public function create() {
        return view("tag/create_tag");
    }

    public function save(Request $request) {
        request()->validate([
            'name' => 'required'
        ]);
        $tag = new Tag($request->all());
        $tag->save();
        return redirect()->back();
    }

    public function edit(Tag $tag){
        return view("tag/edit_tag")->with("tag", $tag);
    }

    public function update(Request $request, Tag $tag) {
        $tag->update($request->all());
        return redirect()->route("tags.all");
    }

    public function delete(Tag $tag) {
        $tag->delete();
        return redirect()->back();
    }
}


