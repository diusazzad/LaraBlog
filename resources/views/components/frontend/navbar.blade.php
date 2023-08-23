<!--Medium Device-->
<div class="items-center justify-between hidden py-2 mb-0 md:flex">
    <a href="/" class="flex items-center">
        <img src="{{asset('img/user.png')}}" alt="logo" class="object-cover object-center w-10 h-10 rounded-full">
        <div class="ml-4 font-semibold">Al Imran Ahmed</div>
    </a>
    <form action="{{route("search-article")}}">
        <div class="flex">
            <input name="query_string"
                   aria-label="Query string"
                   required
                   class="w-full px-2 bg-gray-100 border-t border-b border-l border-blue-200 rounded-l-full outline-none appearance-none focus:bg-white"
            >
            <button
                class="px-2 text-blue-800 border-t border-b border-r border-blue-200 rounded-r-full focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18">
                    <path class="heroicon-ui" fill="currentColor"
                          d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6
         6 0 1 0 0-12 6 6 0 0 0 0 12z"/>
                </svg>
            </button>
        </div>
    </form>
    <div class="grid grid-cols-3 ">
        <a href="{{route('articles')}}" class="ml-4 uppercase hover:underline">Blog</a>
        <a href="{{route('page.about')}}" class="ml-4 uppercase hover:underline">About</a>
        <a href="{{route('login-form')}}" class="ml-4 uppercase hover:underline">Login</a>
    </div>
</div>

<!--Small device-->
<div class="py-2 mb-0 md:hidden">
    <div class="flex items-center justify-between">

        <a href="/" class="flex items-center">
            <img src="{{asset('img/user.png')}}" alt="logo"
                 class="object-cover object-center w-10 h-10 rounded-full">
            <div class="ml-4 font-semibold">Al Imran Ahmed</div>
        </a>

        <a class="hidden text-red-900 bg-red-500 rounded-full sm-hide-menu"
           onclick="document.querySelector('.sm-navs').classList.add('hidden');
       document.querySelector('.sm-show-menu').classList.remove('hidden');
        document.querySelector('.sm-hide-menu').classList.add('hidden');">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18" fill="currentColor">
                <path class="heroicon-ui"
                      d="M16.24 14.83a1 1 0 0 1-1.41 1.41L12 13.41l-2.83 2.83a1 1 0 0 1-1.41-1.41L10.59 12 7.76 9.17a1 1 0 0 1 1.41-1.41L12 10.59l2.83-2.83a1 1 0 0 1 1.41 1.41L13.41 12l2.83 2.83z"/>
            </svg>
        </a>

        <a class="text-blue-900 rounded-full inset sm-show-menu"
           onclick="document.querySelector('.sm-navs').classList.remove('hidden');
       document.querySelector('.sm-show-menu').classList.add('hidden');
        document.querySelector('.sm-hide-menu').classList.remove('hidden');">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18" fill="currentColor">
                <path class="heroicon-ui"
                      d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"/>
            </svg>
        </a>
    </div>

    <div class="hidden sm-navs">
        <form action="{{route("search-article")}}">
            <div class="flex mt-4">
                <input name="query_string"
                       aria-label="Query string"
                       required
                       class="w-full px-2 bg-gray-100 border-t border-b border-l border-blue-200 rounded-l-full outline-none appearance-none focus:bg-white">
                <button type="submit"
                        class="px-2 text-blue-800 border-t border-b border-r border-blue-200 rounded-r-full focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18">
                        <path class="heroicon-ui" fill="currentColor"
                              d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6
         6 0 1 0 0-12 6 6 0 0 0 0 12z"/>
                    </svg>
                </button>
            </div>
        </form>
        <div class="mt-4">
            <a href="{{route('articles')}}" class="uppercase hover:underline">Blog</a>
        </div>
        <div class="my-4">
            <a href="{{route('page.about')}}" class="uppercase hover:underline">About</a>
        </div>
        <div class="my-4">
            <a href="{{route('login-form')}}" class="uppercase hover:underline hover:animate-ping">Login</a>
        </div>

    </div>
</div>

