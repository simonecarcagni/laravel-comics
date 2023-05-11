<header>
    <div class="container ms_container">
        <div>
            <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="DC Logo">
        </div>
        <div class="h-100 my-5">
            <ul class="h-100">
                @foreach ($navRoutes as $navRoute)
                    <li class="h-100">
                        <a href="{{route($navRoute['href'])}}">
                            {{$navRoute['name']}}
                        </a>
                    </li>
                @endforeach
                @foreach ($navs as $nav)
                    <li class="h-100">
                        <a href="{{$nav['href'] }}">
                            {{$nav['name']}}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</header>
