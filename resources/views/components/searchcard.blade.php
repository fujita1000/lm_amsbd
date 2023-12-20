@foreach ($searchResults as $result)
    <!-- ここに検索結果の表示コードを追加 -->
    <div class="py-[10px]">  
        <a href='{{ url("threads/{$result->id}") }}'>
        <p>作成日時:{{ $result->updated_at }}</p>
        <h3>スレッドタイトル:{{ $result->title }}</h3>
        </a>
    </div>
@endforeach