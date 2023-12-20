
<!-- モーダルコンポーネント -->
<div id="modal" class="hidden">
<div class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center">
    <div class="bg-white p-8 rounded-lg lg:w-[800px] w-[95%] lg:h-[800px] h-[90%] relative">
      <div id="close-modal-button" class="absolute  top-[35px] lg:top-[20px] right-[20px] lg:h-[50px] lg:w-[50px] h-[30px] w-[30px]  ">
        <img src="{{ asset('images/closebutton.svg') }}" alt="Close Button">
      </div>
          <!-- モーダル内のフォーム -->
      <form action="{{ route('threads.store') }}" method="post" class="w-[80%] h-[90%] relative m-auto">
        @csrf
      <div class="flex m-auto justify-center items-center">
          <img src="{{ asset('images/kizi.svg') }}" alt="Close Button" class="w-[35px] h-[35px] mr-[20px]">
          <h2 class="text-center text-[24px] lg:text-[30px] font-bold">新規スレッドの作成</h2>
      </div>

      <!-- スレッドの名前（30文字以内） -->
      <div class="absolute top-[100px] left-[0px] w-full">
          <label for="thread-name" class="font-bold text-[20px]">スレッドの名前<span class="font-normal text-[16px]">(30文字以内)</span></label>
          <div class="border-[3px] rounded-sm border-blue-600 h-[40px] relative">
            <input type="text" id="thread-name" name="title" class="thread-name w-full h-full" maxlength="30" required autocomplete="off">
          </div>
      </div>

      <div class="absolute top-[200px] left-0 w-full h-[200px]">
          <label for="thread-description" class="text-[20px] font-bold">スレッドの説明<span class="font-normal text-[16px]">(400文字以内)</span></label>
          <div class="w-full h-[300px] rounded-sm border-[3px] border-blue-600">
              <textarea id="thread-description" name="description" class="w-full h-full rounded-sm" maxlength="400" required autocomplete="off"></textarea>
          </div>
      </div>

      <!-- 送信ボタンなどを追加 -->
      <div class="absolute top-[600px] left-1/2 transform -translate-x-1/2 w-full hover:opacity-80">
          <button type="submit" class="w-full h-[70px] flex justify-center items-center bg-blue-600 text-white font-bold rounded-[10px]">スレッドを作成する</button>
      </div>
      </form>
    </div>
</div>
</div>

