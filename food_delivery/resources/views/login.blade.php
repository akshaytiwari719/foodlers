<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="ie6 ielt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7 ielt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<title>Paper Stack</title>
<style>
input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: none;
  border-radius: 3px;
}
input[type=email]{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: none;
  border-radius: 3px;
}
input[type=tel] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: none;
  border-radius: 3px;
}
input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: none;
  border-radius: 3px;
}
input[type=button], button {
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: none;
  background-color: #323334;
  border-radius: 3px;
  color: #fff;
  cursor: pointer;
}
.abc{
  align-items: center;
  width: 50%;
  text-align: center;
  margin: auto;
}
form{
border: 1px solid #b8b8b8;
padding: 20px;
border-radius: 3px;
background-color: #727272;
}
body{
  color: #ffffff;
}
p a{color: #ffffff;}
</style>
</head>
<body>
<div class="abc">
  @if($message = Session::get('error'))
    <div class="alert alert-danger alert-block">
      <button type="button" class="close" data-dismiss-"alert">X</button>
      <strong>{{$message}}<strong>
    </div>
  @endif

  @if(count($errors)>0)
    <div class="aleret alert-danger">
      <ul>
        @foreach($errors->all() as $error)
          <li>{{$error}}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <form action="/verify" method="post">
    @csrf
  <h3>Please Fill Your Information Here</h3>


  <!--<label for="email">Email</label>-->
  <input type="email" id="email" name="email" placeholder="Email Address" required>


  <!--<label for="pass">Password</label>-->
  <input type="password" id="pass" name="password" placeholder="Password" required>


  <button class="btn btn-primary" value="submit" name="submit">submit</button>
  <p><a href="#">Forgot Password</a></p>
  </form>
</div >
</body>
</html>
