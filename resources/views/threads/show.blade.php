{{-- threads/show.blade.php --}}

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite('resources/css/app.css')
</head>
<body class="antialiased">

<!-- ヘッダー -->
@include('components.header')
<!-- ヘッダー -->

<!-- モーダル -->
@include('components.modal')
<!-- モーダル -->

<main class="w-full sm:w-[600px] lg:w-[1000px] m-auto bg-gray-100 h-full z-10 pt-[10px] pb-[50px] px-[20px]">
    <!-- スレッド情報を表示 -->
        <h1 class="lg:text-[30px] text-[20px]">{{ $thread->title }}</h1>
        <div class="w-full h-[1px] bg-black"></div>
        <p class="lg:text-[24px] text-[16px]">{{ $thread->description }}</p>
    <!-- スレッド情報を表示 -->

    <!-- コメントの表示 -->
        @foreach ($thread->comments as $comment)
        <div class="mt-4">
        <p>{{ $comment->name }}</p>
        <p>{{ $comment->comment }}</p>
        </div>
        @endforeach
    <!-- コメントの表示 -->

    <!-- コメント投稿フォーム -->
        <form action="{{ route('comments.store', $thread->id) }}" method="post">
            @csrf
            <div class="mt-4">
                <label for="name">名前:</label>
                <input type="text" name="name" id="name" placeholder="名無しさん">
            </div>
                <div class="mt-4">
                <label for="comment">コメント:</label>
                <textarea name="comment" id="comment" rows="4" required></textarea>
            </div>
            <div class="mt-4">
                <button type="submit">コメントする</button>
            </div>
        </form>
    <!-- コメント投稿フォーム -->
</main>

</body>
</html>