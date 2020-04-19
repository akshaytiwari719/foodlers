<!DOCTYPE html>
<html>
<head>
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
input[type=button] , button {
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
input[type=date]{
width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    border-radius: 3px;
  }
</style>
</head>
<body>
    <div class="abc">
<form action="/save_customer" method="post">
  @csrf
    <h3>Please Fill Your Information Here</h3>

    <!--<label for="fname">First Name</label>-->
    <input type="text" id="fname" name="name" value="{{old('name')}}" placeholder="Enter Your Name" required>
    <!--<label for="lname">Last Name</label>-->
    <!--<input type="text" id="lname" name="lname" placeholder="Last Name" required>-->
    <!--<label for="email">Email</label>-->
    <input type="email" id="email" name="email" value="{{old('email')}}" placeholder="Email Address" required>
    <!--<label for="c_no">Contact Number</label>-->
    <input type="tel" id="c_no" name="c_no" value="{{old('c_no')}}" placeholder="Contact Number" pattern="[0-9]{10}" required>
    <!--<label for="address">address</label>-->
    <input type="date" id="date" name="DOB" value="{{old('DOB')}}" placeholder="Enter your Date of Birth" required>
    <input type="text" id="address" name="address" value="{{old('address')}}" placeholder="Enter your Address" required>
    <!--<label for="pass">Password</label>-->
    <input type="password" id="pass" name="password" placeholder="Password" required>
    <!--<label for="c_pass">Confirm Password</label>-->
    <input type="password" id="c_pass" name="password_confirmation" placeholder="Confirm Password" required>
    <!-- <input type="button" value="submit" name="submit"> -->
    <button class="btn btn-primary" value="submit" name="submit">submit</button>

</form>
@if($errors->count())
  <div class="alert alert-danger">
    @foreach($errors->all() as $error)
      {{$error}}<br>
    @endforeach
  </div>
@endif

  </div >

</body>
</html>
