<div class="row owl-carousel owl-theme d-flex ">
    @foreach ($gocnhin as $tt)
    <a href="{{route('article',$tt)}}" class=" text-dark text-decoration-none p-2 w-100">

        <img src="{{ asset( $tt->img) }}" alt="" style=" width: 100%;" height="150px">
        <h5 class="mt-2" style="font-size: 15px;">

            {{ $tt->title }}
        </h5>
    </a>
    @endforeach

</div>

