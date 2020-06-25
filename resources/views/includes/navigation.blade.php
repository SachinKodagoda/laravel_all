<nav class="navbar navbar-expand-lg navbar-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link {{ Request::route()->getName() == 'post_index' ? 'active' : 'diact'}}"
                   href="{{ route('post_index') }}">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::route()->getName() == 'post_create' ?  'active' : 'diact'}}"
                   href="{{ route('post_create') }}">ADD</a>
            </li>
        </ul>
    </div>
</nav>
