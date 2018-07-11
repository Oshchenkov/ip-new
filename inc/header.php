<header class="container-fluid px-0">
  <div class="header-top container-fluid mt-2 mb-3 px-0">
    <div class="top-bar mb-2 container">
      <div class="row">
        <div class="col">
          <img class="top-logo" src="img/iplanner-logo.png" alt="">
        </div>
        <div class="col text-right">
          <?php include('top-links.php'); ?>
        </div>
      </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="input-group">
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search..." aria-label="Search...">
          </form>
          <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="button"><i class="fa fa-search"></i></button>
          </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="#">Company Dashboard <sup><span class="badge badge-light">4</span></sup></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                My Profile
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item small" href="#">Action</a>
                <a class="dropdown-item small" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item small" href="#">Something else here</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Logout <i class="fa fa-sign-out-alt"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <div class="header-bottom container mb-4 px-0">
    <div class="col">
      <div class="row pb-3">
        <div class="client col">
          <img class="client-image" src="img/aria-logo.png">
          <span class="client-name small ml-2">ARIA Private Clients (Dubai Branch)</span>
        </div>
        <div class="user col text-right py-1">
          <div class="user-welcome">Welcome, John</div>
          <div class="user-datetimeplace small">Thursday April 21st, 11:08am Dubai</div>
        </div>
      </div>
      <div class="row pb-3">
        <div class="col">
          <nav class="nav nav-fill justify-content-center small py-1">
            <a class="nav-item nav-link" href="#">Home</a>
            <a class="nav-item nav-link" href="#">Investment Options</a>
            <a class="nav-item nav-link" href="#">Account Types</a>
            <a class="nav-item nav-link" href="#">Client Management</a>
            <a class="nav-item nav-link" href="#">Literature Library</a>
            <a class="nav-item nav-link" href="#">News &amp; Views</a>
          </nav>
        </div>
      </div>
      <div class="ticker row">
        <div class="input-group col">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon3">Latest News</span>
          </div>
          <input type="text" class="form-control" placeholder="The latest version of iPlanner, (version 2.0) is due to be released on 14th October, with a number scheduled..." aria-label="The latest version of iPlanner, (version 2.0) is due to be reelase on 14th October, with a number scheduled..." aria-describedby="basic-addon2" readonly>
          <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="button"><i class="fa fa-angle-left"></i></button>
            <button class="btn btn-outline-secondary" type="button"><i class="fa fa-pause"></i></button>
            <button class="btn btn-outline-secondary" type="button"><i class="fa fa-angle-right"></i></button>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
