<header class="flex flex-wrap sm:justify-start sm:flex-nowrap z-50 w-full bg-white border-b border-gray-200 text-sm py-3 sm:py-0 dark:bg-gray-800 dark:border-gray-700">
  <nav class="relative max-w-7xl w-full mx-auto px-4 sm:flex sm:items-center sm:justify-between sm:px-6 lg:px-8" aria-label="Global">
    <div class="flex items-center justify-between">
      <a class="flex-none text-xl font-semibold dark:text-white" href="/#" aria-label="Brand">LM_AMSBD</a>
      <div class="sm:hidden">
        <button type="button" class="hs-collapse-toggle w-9 h-9 flex justify-center items-center text-sm font-semibold rounded-lg border border-gray-200 text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" data-hs-collapse="#navbar-collapse-with-animation" aria-controls="navbar-collapse-with-animation" aria-label="Toggle navigation">
          <svg class="hs-collapse-open:hidden w-4 h-4" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
          </svg>
          <svg class="hs-collapse-open:block flex-shrink-0 hidden w-4 h-4" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
          </svg>
        </button>
      </div>
    </div>
    <div id="navbar-collapse-with-animation" class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow sm:block">
      <div class="flex flex-col gap-y-4 gap-x-0 mt-5 sm:flex-row sm:items-center sm:justify-end sm:gap-y-0 sm:gap-x-7 sm:mt-0 sm:ps-7">

        <!-- 検索Form -->
        <form class="w-full lg:w-[500px]" method="GET" action="{{ route('searchs.search') }}">
          <div class="relative flex space-x-[6px] px-[10px] py-[6px] bg-white border rounded-lg shadow-lg shadow-gray-100 dark:bg-slate-900 dark:border-gray-700 dark:shadow-gray-900/[.2]">
            <div class="flex-[1_0_0%] pt-[3.5px]">
              <label for="hs-search-article-1" class="block text-sm text-gray-700 font-medium dark:text-white"><span class="sr-only">スレッド検索</span></label>
              <input type="text" name="search" name="hs-search-article-1" id="hs-search-article-1" class="py-2.5 px-4 block w-full border-transparent rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-transparent dark:text-gray-400 dark:focus:ring-gray-600" placeholder="スレッド検索">
            </div>
            <button type="submit">
            <div class="flex-[0_0_auto]">
              <a class="w-[46px] h-[46px] inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                </svg>
              </a>
            </div>
          </button>
          </div>
        </form>
        <!-- 検索Form End -->

       <!-- スレッド作成ボタン -->
<a id="open-modal-button" class="flex items-center gap-x-2 font-medium text-gray-500 hover:text-blue-600 sm:border-s sm:border-gray-300 sm:my-6 sm:ps-6 dark:border-gray-700 dark:text-gray-400 dark:hover:text-blue-500" href="#">
  <svg version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="width: 30px; height: 30px; opacity: 1;" xml:space="preserve">
            <g>
              <polygon class="st0" points="93.539,218.584 275.004,218.584 354.699,138.894 355.448,138.145 355.448,125.045 93.539,125.045 	" style="fill: rgb(75, 75, 75);"></polygon>
              <polygon class="st0" points="402.213,433.724 46.77,433.724 46.77,78.276 402.213,78.276 402.213,91.467 448.983,56.572 
                448.983,31.506 0,31.506 0,480.494 448.983,480.494 448.983,289.204 402.213,335.974 	" style="fill: rgb(75, 75, 75);"></polygon>
              <path class="st0" d="M229.358,274.708H93.539v28.062h120.476C218.602,292.858,223.932,283.312,229.358,274.708z" style="fill: rgb(75, 75, 75);"></path>
              <path class="st0" d="M93.539,349.539v28.062h110.935c-3.275-8.796-4.302-18.334-3.649-28.062H93.539z" style="fill: rgb(75, 75, 75);"></path>
              <path class="st0" d="M290.939,268.789c-15.501,15.501-55.612,80.76-40.11,96.27c15.51,15.51,80.76-24.609,96.27-40.11l63.755-63.77
                l-56.155-56.15L290.939,268.789z" style="fill: rgb(75, 75, 75);"></path>
              <path class="st0" d="M500.374,115.509c-15.511-15.502-40.649-15.502-56.15,0l-76.682,76.685l56.156,56.15l76.676-76.685
                C515.875,156.158,515.875,131.019,500.374,115.509z M400.166,202.361l-9.636-9.628l53.684-53.684l9.619,9.618L400.166,202.361z" style="fill: rgb(75, 75, 75);"></path>
            </g>
            </svg>
          スレッドを作成する
        </a>
        
      </div>
    </div>
  </nav>
</header>

<script src="{{ url('js/modal.js') }}" defer></script>


