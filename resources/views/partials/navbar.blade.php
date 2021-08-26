<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="/">My Blog</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{ ($active == "home")?'active':'' }}" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active == "about")?'active':'' }}" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active == "blog")?'active':'' }}" href="/blog">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active == "categories")?'active':'' }}" href="/categories">Categories</a>
          </li>
        </ul>
        <ul class="navbar-nav">
            @auth
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Welcome back, {{ auth()->user()->name }}
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> Dashboard</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li>
                      <form action="/logout" method="post">
                        @csrf
                          <button class="dropdown-item" type="submit"><i class="bi bi-box-arrow-in-right"></i> Logout</li></button>
                      </form>
                </ul>
              </li>
            @else
            <li class="nav-item ms-auto">
                <a href="/login" class="nav-link {{ ($active == "login")?'active':'' }}"><i class="bi bi-box-arrow-in-right"></i> Login</a>
            </li>
            @endauth
        </ul>
      </div>
    </div>
  </nav>
