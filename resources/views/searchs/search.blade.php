<!-- resources/views/searchs/search.blade.php -->

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

<main class="w-full sm:w-[600px] lg:w-[1000px] m-auto bg-gray-100 h-screen z-10 py-[10px] px-[20px]">
    <h2>検索結果</h2>

    @foreach ($searchResults as $result)
        <!-- ここに検索結果の表示コードを追加 -->
        <div class="py-[10px]">  
            <a href='{{ url("threads/{$result->id}") }}'>
            <p>作成日時:{{ $result->updated_at }}</p>
            <h3>スレッドタイトル:{{ $result->title }}</h3>
            </a>
        </div>
    @endforeach

    <div class="flex justify-center items-center">
        {{ $searchResults->links() }}
    </div>

</main>

</body>
</html>
