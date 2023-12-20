<?php

// app/Http/Controllers/ThreadController.php

namespace App\Http\Controllers;

use App\Models\Thread;
use Illuminate\Http\Request;

class ThreadController extends Controller
{
    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'title' => 'required|max:30',
                'description' => 'required|max:400',
            ]);

            Thread::create($validatedData);

            return redirect()->back()->with('success', 'スレッドが作成されました！');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'エラーが発生しました: ' . $e->getMessage());
        }
    }

    public function show($id)
    {
        $thread = Thread::findOrFail($id);
        return view('threads.show', compact('thread'));
    }

    public function edit($id)
    {
        $thread = Thread::findOrFail($id);
        return view('threads.edit', compact('thread'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:30',
            'description' => 'required|max:400',
        ]);

        $thread = Thread::findOrFail($id);
        $thread->update($validatedData);

        return redirect()->back()->with('success', 'スレッドが更新されました！');
    }

    public function index()
    {
        $threads = Thread::latest()->paginate(10);
        return view('index', compact('threads'));
    }

    public function search(Request $request)
    {
        $searchTerm = $request->input('search');
        $searchResults = Thread::where('title', 'like', '%' . $searchTerm . '%')->paginate(10);

        return view('searchs.search', compact('searchTerm', 'searchResults'));
    }

}