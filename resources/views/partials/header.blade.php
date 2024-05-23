<nav class="navbar navbar-expand-sm navbar-light border-bottom fw-bold">
    <div class="container-fluid d-flex justify-content-around align-items-center">
        <a href=""><i class="fa-solid fa-train fs-4"></i></a>
        <a class="navbar-brand text-white {{Route::currentRouteName() == 'home' ? 'active' : ''}}" aria-current="page"
            href="{{route('home')}}">
            <h1 class="text-center my-3">Ferrovie Improbabili Mondiali</h1>
        </a>
        <a class="{{Route::currentRouteName() == 'garbage' ? 'active' : ''}}" aria-current="page"
            href="{{route('garbage')}}"><i class="fa-solid fa-trash fs-4"></i></a>
    </div>
</nav>