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
</br>
</div>

</div>
</div>
</div>





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
    //    alert(b);
var main="<div class='col-md-4'><div class='panel panel-success'><div class='panel-heading'>Panel with panel-success class></div><div class='panel-body'><input type='button'  class='btn btn-primary add' name='add'  id = " + b +"    value='購買' ></div></div></div>"
        $("#view").append(main);
        // $('.add').attr('id',i);
 

}

    
// alert(l);

	
		
    },

    error: function (thrownError) {
	alert('123');

		
      
    }
});
});


    </script>