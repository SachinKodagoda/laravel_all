<nav class="navbar navbar-expand-lg navbar-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link {{ Request::route()->getName() == 'getAllPosts' ? 'active' : 'diact'}}" href="{{ route('getAllPosts') }}">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::route()->getName() == 'addPost' ?  'active' : 'diact'}}" href="{{ route('addPost') }}">ADD</a>
      </li>
    </ul>
  </div>
</nav>