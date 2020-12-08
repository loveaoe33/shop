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

    </tbody>
    <tfoot>
      <tr>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>

      </tr>
    </tfoot>
  </table>




</body>

</html>
<script>
  $(document).ready(function() {
    $(document).on('click', '.delete1', function() {
      $(this).parent().parent().remove();

      // $('#delete1' + id + '').trigger('click');全部刪除

    });
    var shoptotal = 0;
    $(document).on('click', '.delete1', function() {
      let shopid = $(this).attr("name");
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }

      });
      $.ajax({
        type: "POST",
        url: 'deleteshop',
        data: {
          test4: CSRF_TOKEN,
          deleteid: shopid
        },
        dataType: "JSON",
        success: function(response) {

          shoptotal = response.ok;
          // alert(shoptotal);
          let shoptotal2 = "<tfoot><tr><td></td><td></td><td></td><td>總價格為:" + shoptotal + "</td><td><input type='button'  class='btn-success' name='gobuy'  id = 'gobuy' value='提交' ></td><td>   <input type='button'  class='btn-success' name='post'  id = 'post' value='購買' ></td></tr></tfoot>"
          $("#table").append(shoptotal2);
          
          $('#post').click();
          $("#post").hide();
         

          // $(this).parent().parent().remove();
          buttoncheck(shoptotal); 



        },
        error: function(thrownError) {
          alert('刪除失敗');
        }

      });
     
      $("#post").hide();


    });


    $(document).on('click', '.add', function() {


      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });

      let shopid = $(this).attr("id");
      let shopquilty = $("input[id=" + shopid + "]").val();
      $.ajax({
        type: "POST",
        url: 'insertshop',
        data: {
          test3: CSRF_TOKEN,
          shopidd: shopid,
          shopquiltyy: shopquilty
        },
        dataType: "JSON",
        success: function(response) {

          let l = response.data1;
          let n = l.length
          let exist = response.data2;
          var shoptotal = response.data3;


          for (var i = 0; i < n; i++) {
            var productname = l[i].name;
            var productquantity = l[i].quantity;
            var producttotal = l[i].total;
            var productprice = l[i].price;
            var productid = l[i].productid;


            // alert(productprice);

            let shopmain = "<tr><td>  " + productname + "  </td><td>" + productprice + " </td><td>" + productquantity + "</td><td>" + producttotal + "</td><td>   <input type='button'  class='btn btn-danger delete1' name=" + productid + "  id = 'delete1" + productid + "'    value='刪除' ></td><td>   <input type='button'  class='btn btn-danger delete11' name=" + productid + "  id = 'delete11" + productid + "'    value='刪除' ></td></tr>"
            let shoptotal2 = "<tfoot><tr><td></td><td></td><td></td><td>總價格為:" + shoptotal + "</td><td><input type='button'  class='btn-success' name='gobuy'  id = 'gobuy' value='提交' ></td><td>   <input type='button'  class='btn-success' name='post'  id = 'post' value='購買' ></td></tr></tfoot>"
            $("#table").append(shopmain);
            $("#table").append(shoptotal2);

            test(productid);
            $("#delete11" + productid + "").hide();
            
           
            if (exist == 'true') {
              $('#delete11' + productid + '').click();
              $("#delete11" + productid + "").hide();
              $("#post").hide();

            }
            clear(productid);
            $('#post').click();
            $(document).on('click', '#post', function() {
              $(this).parent().parent().remove();



            });
          }
          $("#post").hide();
        },
        error: function(thrownError) {
          alert('新增失敗');
        }

      });

    });



    // $(document).on('click', '#addtable2', function() {
    //   $('#table').append("<tr><td>add_row2-01</td><td>add_row2-02</td><td>add_row2-03</td><td>123</td><td>   <input type='button'  class='btn btn-danger delete' name='delete'  id = " + b + "    value='刪除' > </td></tr>");
    // });
    function buttoncheck(shoptotal) {
      if(shoptotal<=0)
      document.getElementById("gobuy").disabled = true,
      document.getElementById('gobuy').value = '無法提交';

      
     
      else
      {
        document.getElementById("gobuy").disabled = false;
      }
    }

    function clear(id) {
      $("input[name='quilty" + id + "']").val("");

    }

    function test(id) {
      $(document).on('click', '#delete11' + id + '', function() {
        $(this).parent().parent().remove();

        // $('#delete1' + id + '').trigger('click');全部刪除

      });
    };



    // $(document).on('click', '.add', function() {

    //   var product_id = $(this).attr("id");
    //   var product_quilty = $("input[id=" + product_id + "]").val();
    //   alert(product_quilty);


    // });

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

          var main = "<div class='col-md-4'><div class='panel panel-success'><div class='panel-heading'>Panel with panel-success class></div><div class='panel-body'><img src=" + all + "  width='150' height='150'/><br><input type='textbox' class='form-control'  id=" + b + " name='quilty" + b + "'><br><input type='button'  class='btn btn-primary add' name='add'  id = " + b + "   value='購買' ></div></div></div>"
          $("#view").append(main);
        }


        // alert(l);		
      },

      error: function(thrownError) {
        alert('123');
      }
    });
    //   $.ajax({
    //     type: "POST",
    //     url: 'Shopproduct1',
    //     data: {
    //       test2: CSRF_TOKEN
    //     },
    //     dataType: "JSON",
    //     success: function(response) {

    //       let l = response.data1;
    //       let n = l.length
    //       for (var i = 0; i < n; i++) {
    //         var productname = l[i].name;
    //         var productquantity = l[i].quantity;
    //         var producttotal = l[i].total;
    //         var productprice = l[i].price;
    //         // alert(productprice);

    //         var shopmain = "<tr><td>  " + productname + "  </td><td>" + productprice + " </td><td>" + productquantity + "</td><td>" + producttotal + "</td><td>   <input type='button'  class='btn btn-danger delete' name='delete'  id = " + b + "    value='刪除' > </td></tr>"
    //         $("#table").append(shopmain);
    //       }

    //     },

    //     error: function(thrownError) {
    //       alert('123');



    //     }
    //   });
    // });



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
  });
</script>