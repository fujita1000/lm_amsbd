<?php

// app/Http/Controllers/CommentController.php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Thread;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class CommentController extends Controller
{
    public function store(Request $request, $threadId)
    {
        // 投稿回数や速度の制限
        $ip = $request->ip();
        $key = 'post_count_' . $ip;

        $postCount = Cache::get($key, 0);

        if ($postCount >= 3) {
            // 一分間に3回以上の投稿は禁止
            return redirect()->back()->with('error', '投稿回数が制限されています。');
        }

        // 投稿回数をインクリメントし、キャッシュする
        Cache::put($key, $postCount + 1, now()->addMinutes(1));

        $request->validate([
            'name' => 'nullable|string|max:10', // 名前は空欄でも最大10文字まで許容
            'comment' => 'required|string',
        ]);

        // 名前が空欄の場合、「名無しさん」に設定
        $name = $request->filled('name') ? $request->input('name') : '名無しさん';

        // 関連するスレッドが存在するか確認
        $thread = Thread::findOrFail($threadId);

        // コメント内容に http または https を含む場合は投稿を拒否
        if (preg_match('/https?:\/\/\S+/', $request->input('comment'))) {
            return redirect()->back()->with('error', 'URLを含む投稿は禁止されています。');
        }

        // コメントを保存する際に thread_id を指定
        $thread->comments()->create([
            'name' => $name,
            'comment' => $request->input('comment'),
        ]);

        return redirect()->back()->with('success', 'コメントが投稿されました');
    }
}