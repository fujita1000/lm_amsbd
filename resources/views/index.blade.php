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
    <body class="antialiased h-screen w-screen bg-white">
        
        <!-- ヘッダー -->
        @include('components.header')
        <!-- ヘッダー -->

        <!-- モーダル -->
        @include('components.modal')
        <!-- モーダル -->

        <!-- スレッド全表示 -->
        <main class="w-full sm:w-[600px] lg:w-[1000px] m-auto bg-gray-100 h-screen z-10 py-[10px] px-[20px]">
            <x-threadcard :threads="$threads" />
            <div class="flex justify-center items-center">
            {{ $threads->links() }}
            </div>
        </main>
        <!-- スレッド全表示 -->
        
    </body>
</html>
