<!doctype html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
body{background-color: #9a3939;}
table, th, td {
  border: 1px solid black;
}
img{border-radius: 3px;
    height: 200px;
    width: 300px;}
.navbar {
    background-color: #F06292;
    border-color: #E7E7E7;
  }
  a{
    text-decoration: none;
    color: #000000;
  }
  a:hover{
    text-decoration: none;
    color: #ffffff;
  }
</style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="#">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">about</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">comment</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
<form >
  <div class="container">
  <div class="row mt-3">
    <div class="col-md-6 text-center mb-4">
      <?php $aks=Storage::url('vegeterian.jpg');?>
      <a href="Veg"><img src="{{$aks}}" alt="vegeterian">
      <h4>Vegeterian</h4></a>
    </div>
    <div class="col-md-6  text-center mb-4">
      <?php $aks=Storage::url('non-vegeterian.jpg');?>
      <a href=""><img src="{{$aks}}" alt="non-vegeterian">
      <h4>Nonvegeterian</h4></a>
    </div>
    <div class="col-md-6 text-center mb-4">
      <?php $aks=Storage::url('Breakfast.jpg');?>
      <a href=""><img src="{{$aks}}" alt="Breakfast">
      <h4>Breakfast</h4></a>
    </div>
    <div class="col-md-6  text-center mb-4">
      <?php $aks=Storage::url('sweet.jpg');?>
      <a href=""><img src="{{$aks}}" alt="sweet">
      <h4>Sweet</h4></a>
    </div>
  </div>
</div>
</form>
</body>
</html>
