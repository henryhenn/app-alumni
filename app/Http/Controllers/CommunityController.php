<?php

namespace App\Http\Controllers;

use App\Models\Community;
use Illuminate\Http\Request;

class CommunityController extends Controller
{
    public function index()
    {

    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'foto' => 'required|file|mimes:jpeg,jpg,png|image',
            'pesan' => 'required|string',
            'user_id' => 'nullable',
            'judul' => 'required|string|max:100',
        ]);

        $data['user_id'] = auth()->id();

        $data['foto'] = $request->file('foto')->store('communities-image');

        Community::create($data);

        return back()->with('message', 'Post berhasil dibuat!');
    }

    public function create()
    {
        return view('community.create');
    }

    public function usersCommunity()
    {
        $posts = Community::query()
            ->where('user_id', auth()->id())
            ->latest()
            ->get();

        return view('community.my-posts', compact('posts'));
    }
}
