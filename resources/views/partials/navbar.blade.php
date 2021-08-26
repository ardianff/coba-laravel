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
            <li class="nav-item ms-auto">
                <a href="/login" class="nav-link {{ ($active == "login")?'active':'' }}"><i class="bi bi-box-arrow-in-right"></i> Login</a>
            </li>
        </ul>
      </div>
    </div>
  </nav>
