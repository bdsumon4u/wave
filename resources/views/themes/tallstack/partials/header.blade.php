<header x-data="{ mobileMenuOpen: false }" class="relative z-30 @if(Request::is('/')){{ 'bg-white' }}@else{{ 'bg-gray-50' }}@endif">
    <div class="px-8 mx-auto max-w-7xl xl:px-5">
        <div class="flex justify-between items-center h-24 border-b-2 border-gray-100 md:justify-start md:space-x-6">
            <div class="inline-flex">
            <!-- data-replace='{ "translate-y-12": "translate-y-0", "scale-110": "scale-100", "opacity-0": "opacity-100" }' -->
                <a href="{{ route('wave.home') }}" class="flex justify-center items-center space-x-3 transition-all duration-1000 ease-out transform text-wave-500">
                    @if(theme('logo'))
                        <img class="h-9" src="{{ Voyager::image(theme('logo')) }}" alt="Company name">
                    @else
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-auto h-5" viewBox="0 0 647 129" fill="none"><path fill="#00CEFF" d="M198.883 128.814h-39.31c5.774-34.761-4.775-71.74-31.537-98.613l27.428-27.539c34.425 34.425 48.86 81.29 43.419 126.152Z"/><path fill="#009AFF" d="M158.24 110.265a114.936 114.936 0 0 1-1.555 18.549h-39.976a71.03 71.03 0 0 0-18.323-69.073c-13.658-13.55-31.536-20.767-51.08-20.875L47.083 0c29.872.108 57.744 11.213 78.843 32.31 20.877 20.767 32.314 48.529 32.314 77.955Z"/><path fill="#006EFF" d="M113.267 128.814H70.181c9.439-11.332 8.772-28.32-1.776-38.98-11.327-11.218-29.65-11.327-40.976 0L0 62.295c26.429-26.428 69.403-26.428 95.944 0 17.989 17.99 23.764 43.643 17.323 66.519Z"/><path fill="#000" d="M245.597 28.99h18.875l8.883 28.87 8.407 29.184 20.144-58.053h15.068l19.986 58.37 17.289-58.37h18.876l-26.013 78.356h-18.876l-7.455-22.364-11.261-31.407-11.262 31.407-7.455 22.364h-19.034l-26.172-78.356ZM416.676 109.092c-7.613 0-14.381-1.692-20.303-5.076-5.816-3.489-10.363-8.353-13.641-14.592-3.278-6.24-4.917-13.324-4.917-21.255 0-7.93 1.639-15.015 4.917-21.255 3.278-6.238 7.825-11.05 13.641-14.434 5.922-3.49 12.69-5.234 20.303-5.234 6.028 0 11.526 1.11 16.496 3.331 4.97 2.115 8.988 5.076 12.055 8.883l.159-10.47h15.861v78.357h-15.861l-.159-10.468c-3.067 3.807-7.085 6.82-12.055 9.041-4.97 2.115-10.468 3.172-16.496 3.172ZM395.58 68.169c0 7.297 2.221 13.271 6.662 17.924 4.441 4.547 10.204 6.82 17.289 6.82 7.085 0 12.848-2.273 17.289-6.82 4.442-4.653 6.662-10.627 6.662-17.924 0-7.296-2.22-13.218-6.662-17.765-4.441-4.653-10.204-6.979-17.289-6.979-7.085 0-12.848 2.326-17.289 6.98-4.441 4.546-6.662 10.468-6.662 17.764ZM474.553 28.99h19.351l10.944 26.807 12.531 33.15 12.689-33.15 10.945-26.806h19.034l-33.151 78.356h-19.034l-33.309-78.356ZM607.597 109.568c-8.565 0-16.073-1.692-22.523-5.076-6.345-3.489-11.262-8.354-14.752-14.592-3.489-6.24-5.234-13.483-5.234-21.73 0-8.037 1.692-15.122 5.076-21.256 3.383-6.133 8.142-10.891 14.275-14.275 6.133-3.49 13.218-5.234 21.255-5.234 12.689 0 22.629 3.648 29.82 10.944 7.19 7.297 10.786 17.395 10.786 30.296 0 1.375-.106 3.437-.318 6.186h-62.653c.74 5.71 3.331 10.257 7.772 13.641 4.441 3.384 10.099 5.076 16.972 5.076 4.441 0 8.724-.74 12.848-2.22 4.124-1.481 7.349-3.438 9.675-5.87l10.786 10.469c-3.912 4.23-8.882 7.561-14.91 9.993-5.921 2.432-12.213 3.648-18.875 3.648Zm21.413-48.537c-.634-5.604-3.013-10.045-7.137-13.323-4.019-3.279-9.253-4.917-15.703-4.917-6.134 0-11.156 1.586-15.069 4.758-3.913 3.172-6.45 7.666-7.614 13.482h45.523Z"/></svg>
                    @endif
                </a>
            </div>
            <div class="flex flex-grow justify-end -my-2 -mr-2 md:hidden">
                <button @click="mobileMenuOpen = true" type="button" class="inline-flex justify-center items-center p-2 text-gray-400 rounded-md transition duration-150 ease-in-out hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500">
                    <svg class="w-6 h-6" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h16M4 16h16"></path></svg>
                </button>
            </div>

            <!-- This is the homepage nav when a user is not logged in -->
            @if(auth()->guest())
                @include('theme::menus.guest')
            @else <!-- Otherwise we want to show the menu for the logged in user -->
                @include('theme::menus.authenticated')
            @endif

        </div>
    </div>

    @if(auth()->guest())
        @include('theme::menus.guest-mobile')
    @else
        @include('theme::menus.authenticated-mobile')
    @endif
</header>
