<nav>
    <ul class=" list-unstyled lh-lg text-dark  d-flex  align-items-center">
        <li><a href="{{route('home')}}" class="text-decoration-none me-5"><i class="fa-solid fa-house me-2"
                    style="color: #000000;"></i></a></li>
        {{-- {{dd($CategoryAll->count())}} --}}
        @for($i = 0; $i < $categoryAll->count(); $i++)
            @if ($i < 8) <li class="me-5">
                <a class="text-decoration-none text-dark "
                    href="{{route('category',$categoryAll[$i])}}">{{$categoryAll[$i]->name}} </a>

                <ul class="sub-menu text-center">
                    @foreach($categoryAll[$i]->children as $one)
                    <li class=""><a href="{{route('categorychild',$one)}}">{{ $one->name}}</a></li>
                    @endforeach
                </ul>
                </li>
                @endif
                @endfor

    </ul>

</nav>