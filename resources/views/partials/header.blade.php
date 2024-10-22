<header>
    <nav>
        <figure>
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Logo" height="60">
        </figure>
        <ul>
            @foreach ($menuLinks as $element)
            <li>
                <a href="#">{{$element['name'] }}</a>
            </li>
            @endforeach
        </ul>
    </nav>
    
</header>
