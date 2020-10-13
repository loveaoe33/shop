<head>
<script src="https://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<meta name="csrf-token" content="{{ csrf_token() }}" />
</head>



<html>
<body>
<div class='contanier'>
<div class='row'>
<div class='view' id='view' name='view'>
<div class='col-md-12'>
<input type='button' class='btn btn-primary' name='l[i].OK' id='add'  value='購買' onclick="alert('123')">
<!-- <img src="http://127.0.0.1:8000/image/phone.jpg" /> -->
<!-- <img src='../public/image/phone /'> -->
<!-- <img src='../product/+" p "+.jpg /'> -->
</br>
</div>

</div>
</div>
</div>




<table class="table table-condensed">
  <caption>購物清單</caption>
  <thead>
    <tr>
      <th>商品名稱</th>
      <th>商品價格</th>
      <th>商品數量</th>
      <th>商品總價</th>
      </tr>
  </thead>
  <tbody>
    <tr>
      <td>Tanmay</td>
      <td>Bangalore</td>
      <td>560001</td>
      <td>560001</td></tr>
    <tr>
      <td>Sachin</td>
      <td>Mumbai</td>
      <td>400003</td></tr>
    <tr>
      <td>Uma</td>
      <td>Pune</td>
      <td>411027</td></tr>
      
  </tbody>
</table>


</body>

</html>
<script>



$(document).ready(function() {
    
 $(document).on('click', '.add', function(){

    var product_id = $(this).attr("id");
          alert(product_id);


});
    
	var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
		var a=$('#Account').val();
		
		var b=$('#Password').val();

    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$.ajax({
    type: "POST",
    url: 'allproduct',
    data: { test2:CSRF_TOKEN },
    dataType: "JSON",
    success: function (response) {

      var l = response.length;
      
      for (var i=0;i<l; i++) {
       var b =response[i].a;
       var p =response[i].name;
       var all='http://127.0.0.1:8000/image/' +p+ '.jpg'

var main="<div class='col-md-4'><div class='panel panel-success'><div class='panel-heading'>Panel with panel-success class></div><div class='panel-body'><img src=" + all +" width='50' height='50'/><br><input type='button'  class='btn btn-primary add' name='add'  id = " + b +"    value='購買' ></div></div></div>"
        $("#view").append(main);

 
 

}
z
    
// alert(l);

	
		
    },

    error: function (thrownError) {
	alert('123');

		
      
    }
});
});


    </script>