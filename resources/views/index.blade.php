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
        <!-- <div class='col-md-12'>
<! <input type='button' class='btn btn-primary' name='l[i].OK' id='add'  value='購買' onclick="alert('123')"> -->
        <!-- <img src="http://127.0.0.1:8000/image/phone.jpg" /> -->
        <!-- <img src='../public/image/phone /'> -->
        <!-- <img src='../product/+" p "+.jpg /'> -->
        </br>
      </div>

    </div>
  </div>
  </div>




  <table class="table table-condensed" name='table' id='table'>
    <caption>購物清單</caption>
    <thead>
      <tr>
        <th>商品名稱</th>
        <th>商品價格</th>
        <th>商品數量</th>
        <th>商品總價</th>
        <th>操作</th>
      </tr>
    </thead>
    <tbody>
      <tr>

      <tr>

      <tr>


    </tbody>

  </table>
  <input type='button' class='btn btn-primary ' name='addtable2' id="addtable2" value='新增'>

</body>

</html>
<script>
  $(document).ready(function() {
    $(document).on('click', '#addtable2', function() {

      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });

      $.ajax({
        type: "POST",
        url: 'insertshop',
        data: {
          test3: CSRF_TOKEN
        },
        dataType: "JSON",
        success: function(response) {





          alert('l');
        },

        error: function(thrownError) {
          alert('新增失敗');
        }
      });

    });

    // $(document).on('click', '#addtable2', function() {
    //   $('#table').append("<tr><td>add_row2-01</td><td>add_row2-02</td><td>add_row2-03</td><td>123</td><td>   <input type='button'  class='btn btn-danger delete' name='delete'  id = " + b + "    value='刪除' > </td></tr>");
    // });



    $(document).on('click', '.delete', function() {
      $(this).parent().parent().remove();
    });

    $(document).on('click', '.add', function() {

      var product_id = $(this).attr("id");
      var product_quilty = $("input[id=" + product_id + "]").val();
      alert(product_quilty);


    });

    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    var a = $('#Account').val();

    var b = $('#Password').val();

    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });



    $.ajax({
      type: "POST",
      url: 'allproduct',
      data: {
        test2: CSRF_TOKEN
      },
      dataType: "JSON",
      success: function(response) {

        var l = response.length;

        for (var i = 0; i < l; i++) {
          var b = response[i].a;
          var p = response[i].name;

          var all = 'http://127.0.0.1:8000/image/' + p + '.jpg'

          var main = "<div class='col-md-4'><div class='panel panel-success'><div class='panel-heading'>Panel with panel-success class></div><div class='panel-body'><img src=" + all + "  width='150' height='150'/><br><input type='textbox' class='form-control'  id=" + b + " name='quilty'><br><input type='button'  class='btn btn-primary add' name='add'  id = " + b + "    value='購買' ></div></div></div>"
          $("#view").append(main);
        }


        // alert(l);		
      },

      error: function(thrownError) {
        alert('123');
      }
    });
    $.ajax({
      type: "POST",
      url: 'Shopproduct1',
      data: {
        test2: CSRF_TOKEN
      },
      dataType: "JSON",
      success: function(response) {

        let l = response.data1;
        let n = l.length
        for (var i = 0; i < n; i++) {
          var productname = l[i].name;
          var productquantity = l[i].quantity;
          var producttotal = l[i].total;
          var productprice = l[i].price;
          alert(productprice);

          var shopmain = "<tr><td>  " + productname + "  </td><td>" + productprice + " </td><td>" + productquantity + "</td><td>" + producttotal + "</td><td>   <input type='button'  class='btn btn-danger delete' name='delete'  id = " + b + "    value='刪除' > </td></tr>"
          $("#table").append(shopmain);
        }

      },

      error: function(thrownError) {
        alert('123');



      }
    });
  });



  // $(document).on('click', '.add', function() {
  //   $.ajax({
  //     type: "POST",
  //     url: 'InsertShop',
  //     data: {
  //       test2: CSRF_TOKEN
  //     },
  //     dataType: "JSON",
  //     success: function(response) {




  //     },

  //     error: function(thrownError) {
  //       alert('123');



  //     }


  //   });
  // });
</script>