<!-- components/threadcard.blade.php -->

@foreach($threads as $thread)
    <div class="py-[10px]">  
    <a href='{{ url("threads/{$thread->id}") }}'>
        <p>作成日時:{{ $thread->updated_at }}</p>
        <h2>スレッドタイトル: {{ $thread->title }}</h2>
    </a>
    </div>
@endforeach
