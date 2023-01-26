<div class="infoContact">
    <div class="row">
        <div class="col-md-6">
            <span>
                {{ get_settings("phone") }} <i class="bi bi-phone"></i> - {{ get_settings("mobile") }} <i class="bi bi-telephone"></i>
            </span>
        </div>
        <div class="col-md-6 text-start">
             {{ get_settings("location") }} <i class="bi bi-geo-alt"></i>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand font-weight-800" href="{{ url('/') }}"> {{ get_settings("site_name") }} </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ url('/') }}">الـرئيسية</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ route('compare-page') }}"> المقارنة </a>
          </li>


          <li class="nav-item">
            <a class="nav-link" href="{{ route('fav-page') }}"> المفضلة </a>
          </li>

          {{-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li> --}}
          {{-- <li class="nav-item">
            <a class="nav-link disabled"></a>
          </li> --}}
        </ul>
        {{-- <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="إبحث عن ما تريد" aria-label="Search">
          <button class="btn btn-outline-light" type="submit">بحـــث</button>
        </form> --}}
      </div>
    </div>
  </nav>
