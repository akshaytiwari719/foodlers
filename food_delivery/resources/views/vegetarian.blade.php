<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
input[type=number] {
  width: 50%;
  padding: 5px 20px;
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
  <form
  @csrf

    <table class="table">
      <thead class="thead-dark">
        <tr>

          <th>Dish Name</th>
          <th>Type</th>
          <th>Quantity</th>
          <th>Price</th>
        </thead></tr>

        @foreach($product as $key)
        <?php $total = 0 ?>
        <tr>
          <td>{{$key['Product_Name']}}</td>
          <td>{{$key['Type']}}</td>
          <td><input class="form-control otc_oty" type="text" name="otc_qty[]" id="otc_qty" value="0" placeholder="Quantity"> </td>
          <td><input class="form-control otc_price" type="number"  name="otc_price[]" id="otc_price" value="0" placeholder="Unit Price"></td>
          <td><input class="form-control" type="hidden" name="otc_total_price[]" id="otc_total_price" value="0" readonly="" placeholder="Total Price"></td>
           $('.form-layout').on('change', '[name="otc_qty[]"],[name="otc_price[]"]','[name="otc_tax[]"]', function () {
             var qty = $(this).parent().parent().find('[name="otc_qty[]"]').val();
               var price = $(this).parent().parent().find('[name="otc_price[]"]').val();
               var total = $(this).parent().parent().find('[name="otc_total_price[]"]');
               var tx  = $(this).parent().parent().find('[name="otc_tax[]"]').val();
               if (qty != "" && price != "") {
                 total.val(qty * price);
               }
               var gst =  parseFloat(total.val() * (tx / 100));
               total.val(parseFloat(total.val()) + gst );
               $out.recalTotalPrice();
                });




      </tr>
        @endforeach
       </table>
       <div class="text-center">
         <button class="btn btn-primary" value="submit" name="submit">submit</button>
       </div>
  </form>
</body>
</html>
