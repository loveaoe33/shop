



<head>
  <script src="https://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <style>
  
    @*@import url(font-awesome.css);
@import url(http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300);*@
    body {
        margin: 0;
        padding-bottom: 20px;
        font-family: 'Roboto Condensed', sans-serif;
        font-size: 14px;
        line-height: 16px;
        color: #333;
        background: #fff;
        overflow-x: hidden;
        scrollbar-face-color: #121212;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-family: 'Roboto Condensed', sans-serif;
    }

    #Carousel .carousel-inner > .item > img {
        display: block;
        position: absolute;
        width: 100%;
        height: 300%;
    }

    /*[3. LOGO]*/
    .logo {
        margin-bottom: 40px;
    }

        .logo h1,
        .logo h2 {
            margin: 5px 0 5px;
            text-align: left;
            font-size: 32px;
            line-height: 34px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: -1px;
        }

            .logo h1 span,
            .logo h2 span {
                font-weight: 300;
            }

            .logo h1 a,
            .logo h2 a {
                color: #333;
                text-decoration: none;
                -webkit-transition: color 0.3s ease-in-out, text-decoration 0.5s ease-in-out;
                -moz-transition: color 0.3s ease-in-out, text-decoration 0.5s ease-in-out;
                -ms-transition: color 0.3s ease-in-out, text-decoration 0.5s ease-in-out;
                -o-transition: color 0.3s ease-in-out, text-decoration 0.5s ease-in-out;
                transition: color 0.3s ease-in-out, text-decoration 0.5s ease-in-out;
            }

                .logo h1 a:hover,
                .logo h2 a:hover {
                    color: #888;
                    text-decoration: underline;
                }


    .account {
        text-align: right;
    }

        .account a {
            color: #333;
            text-decoration: none;
        }

            .account a:hover {
                color: #333;
                text-decoration: underline;
            }

        .account h4 {
            font-weight: 600;
            text-transform: uppercase;
            line-height: 20px;
            margin-bottom: 10px;
        }

        .account ul {
            list-style-type: none;
            margin-left: -20px;
            float: right;
        }

            .account ul > li {
                float: left;
                margin: 0 0 0 10px;
            }

                .account ul > li:nth-child(1),
                .account ul > #your-account {
                    border-right: 1px solid #333;
                    padding-right: 12px;
                }

    /*[4. NAV MENU]*/


    .nav-menus {
        border-top: 2px solid #333;
        padding-top: 10px;
        padding-bottom: 20px;
    }

        .nav-menus .nav-pills > li > a {
            background: transparent;
            color: #333;
        }

            .nav-menus .nav-pills > li > a:hover {
                background: #eaeaea;
                color: #333;
            }

        .nav-menus .nav-pills > .active > a,
        .nav-menus .nav-pills > .active > a:hover,
        .nav-menus .nav-pills > .active > a:focus {
            background: #333;
            color: #fff;
        }

    /*CAROUSEL*/
    .main-text {
        position: absolute;
        top: 100px;
        width: 96.66666666666666%;
        color: #FFF;
    }

    .carousel-btns {
        margin-top: 2em;
    }

        .carousel-btns .btn {
            width: 150px;
        }

    .carousel-inner .imgOverlay {
        position: absolute;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(6, 28, 38, 0.5);
    }

    .carousel-inner img {
        width: 100%;
    }

    /*CONTROL*/
    .carousel-control {
        width: auto;
    }

        .carousel-control .icon-prev,
        .carousel-control .icon-next,
        .carousel-control .fa-chevron-left,
        .carousel-control .fa-chevron-right {
            position: absolute;
            top: 47%;
            right: 0;
            z-index: 5;
            display: inline-block;
            background-color: #000;
            width: 38px;
            height: 38px;
            line-height: 40px;
            font-size: 14px;
        }

        .carousel-control .icon-prev,
        .carousel-control .fa-chevron-left {
            left: 0;
        }

    .carousel-indicators li {
        width: 12px;
        height: 12px;
        margin: 0 1px;
        border: 2px solid #fff;
        opacity: .8;
    }

    .carousel-indicators .active {
        background-color: #28ace2;
        border-color: #28ace2;
    }

    .carousel-control .icon-prev, .carousel-control .fa-chevron-left,
    .carousel-control .icon-right, .carousel-control .fa-chevron-right {
        border-radius: 50px;
    }

    .copyright {
        font-size: 14px;
        line-height: 16px;
        font-weight: 400;
    }

        .copyright .copyright-left {
            text-align: left;
        }

    .carousel-control .icon-prev, .carousel-control .fa-chevron-left {
        left: 30px;
    }

    .carousel-control .icon-right, .carousel-control .fa-chevron-right {
        right: 30px;
    }


    .olContent {
        width: 100%;
    }

        .olContent h2 {
            color: #fff;
            font-size: 19px;
            padding: 9px 0 0;
        }

    .olSearch {
        width: 100%;
    }

        .olSearch .inputComn {
            margin-bottom: 0;
        }

    .inputComn {
        color: black;
        font-size: 14px;
        height: 44px;
        width: 100%;
        cursor: pointer;
        padding: 0 15px;
    }

    .searchIcon {
        position: absolute;
        top: 0;
        right: 0;
    }

    .searchBtn {
        background-color: #005faa;
        border: 0 none;
        color: #fff;
        font-size: 16px;
        padding: 11px 16px;
        text-transform: uppercase;
        cursor: pointer;
        height: 44px;
    }

        .searchBtn:hover {
            background-color: #326987;
        }

    .olSearch {
        position: relative;
    }

    .content {
    }

        .content .page-header {
            padding-bottom: 5px;
            margin: 20px 0 30px;
            border-bottom: 1px solid #eee;
        }

            .content .page-header h2 {
                font-weight: 700;
            }


    .product-item {
        position: relative;
    }

        .product-item .caption h5 {
            font-weight: 600;
            font-size: 16px;
            line-height: 20px;
            border-top: 2px solid #333;
            margin-top: 10px;
            padding-top: 10px;
        }

        .product-item .caption .product-item-price {
            font-size: 14px;
            line-height: 16px;
            font-weight: 400;
        }


        .product-item .product-item-badge {
            position: absolute;
            top: 4px;
            left: 4px;
            padding: 5px 12px 6px;
            color: #fff;
            font-size: 12px;
            line-height: 14px;
            font-weight: 600;
            background: #333;
            -webkit-border-radius: 4px 0 4px 0;
            -moz-border-radius: 4px 0 4px 0;
            -o-border-radius: 4px 0 4px 0;
            border-radius: 4px 0 4px 0;
        }

    .copyright .copyright-right {
        text-align: right;
    }

    .copyright .list-social {
        float: right;
        margin-top: -10px;
    }

        .copyright .list-social > li {
            display: inline;
            float: left;
            margin: 2px 5px;
        }

            .copyright .list-social > li > a {
                display: block;
                width: 30px;
                height: 30px;
                position: relative;
                background: #ffffff;
                border: 1px solid #ccc;
                -webkit-border-radius: 100%;
                -moz-border-radius: 100%;
                -o-border-radius: 100%;
                border-radius: 100%;
                font-size: 20px;
                color: #333333;
            }

                .copyright .list-social > li > a:hover {
                    background: #333333;
                    border: 1px solid #333333;
                    font-size: 20px;
                    color: #ffffff;
                }

                .copyright .list-social > li > a .fa {
                    position: absolute;
                    left: 50%;
                    top: 50%;
                    margin-left: -8px;
                    margin-top: -9px;
                }

  </style>
</head>



<html>
<div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="logo">
                    <h1><a href="#">Online <span>Shopping Store</span></a></h1>
                    <p>My Shop</p>
                </div>
            </div>

            <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="account">
                    <ul>
                        <li>
                            <div class="hidden-xs">
                                <h4><a>Call</a></h4>
                                <p>018##-######</p>
                            </div>

                            <div class="visible-xs">

                                <p>018##-######</p>
                            </div>

                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-md-12">
                <div class="nav-menus">

                    <ul class="nav nav-pills">
                        <li class="active"><a style="border-radius:initial;" href="#">Home</a></li>
                        <li><a style="border-radius:initial;" href="#">Location</a></li>
                        <li><a style="border-radius:initial;" href="#">About</a></li>
                    </ul>
                </div>
            </div>

        </div>

        <div id="myCarousel" name="Carousel" class="carousel slide">
            <!-- 轮播（Carousel）指标 -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <!-- 轮播（Carousel）项目 -->
            <div class="carousel-inner">
                <div class="item active">
                    <img style="height:420px;width:100%" src="'http://127.0.0.1:8000/image/apple.jpg" alt="First slide">
                    <div class="carousel-caption">蘋果專賣</div>
                </div>
                <div class="item">
                    <img style="height:420px;width:100%" src="http://127.0.0.1:8000/image/p5.jpg" alt="Second slide">
                    <div class="carousel-caption">華碩專賣</div>
                </div>
                <div class="item">
                    <img style="height:420px;width:100%" src="http://127.0.0.1:8000/image/pslogo.jpg" alt="Third slide">
                    <div class="carousel-caption">Play Station</div>
                </div>
            </div>
            <!-- 轮播（Carousel）导航 -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="olContent f1"><h2 style="color:black">Search Product/Category</h2></div>
        <div class="olSearch fr">
            <input type="text" placeholder="Enter Keyword" name="searchKey" class="inputComn houseText form-control" />
            <div class="searchIcon">
                <button type="button" class="searchBtn">
                    <img  style="height:30px;width:100%" src="~/shopp/icons8-search-100.png" />
                </button>
            </div>

<div class="row">
    <div class="col-md-12">
        <div class="page-header">
            <h2>商品區 <small>Our  products</small></h2>
        </div>
    </div>
</div>

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
    let userid = '';
    let shoptotal = 0;
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
            userid = l[i].userid;

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
          Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: '數量不得為空!',
            footer: '<a href>Why do I have this issue?</a>'
          })
       
        }

      });

    });



    // $(document).on('click', '#addtable2', function() {
    //   $('#table').append("<tr><td>add_row2-01</td><td>add_row2-02</td><td>add_row2-03</td><td>123</td><td>   <input type='button'  class='btn btn-danger delete' name='delete'  id = " + b + "    value='刪除' > </td></tr>");
    // });
    function buttoncheck(shoptotal) {
      if (shoptotal <= 0)
        document.getElementById("gobuy").disabled = true,
        document.getElementById('gobuy').value = '無法提交';



      else {
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

          var main = "<div class='col-md-4'><div class='panel panel-primary '><div class='panel-heading'>商品庫存</div><div class='panel-body'><img src=" + all + "  width='150' height='150'/><br><input type='textbox' class='form-control'  id=" + b + " name='quilty" + b + "'><br><input type='button'  class='btn btn-primary add' name='add'  id = " + b + "   value='購買' ></div></div></div>"
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




    $(document).on('click', '#gobuy', function() {
      $.ajax({
        type: "post",
        url: 'CardTest',
        data: {
          test5: CSRF_TOKEN,
          userid: userid
        },
        dataType: "JSON",
        success: function(response) {
          const id = response.okUser;
          Swal.fire({
            icon: 'success',
            title: '訂單完成',
            showConfirmButton: false,
            timer: 1500
            // "CardTest1?id="+id+""


          })
          setTimeout(function() {
            window.location.href = "CardTest1/" + id + ""
          }, 1700);

        },
        error: function(thrownError) {
          Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: '訂單錯誤請聯絡!',
            footer: '<a href>Why do I have this issue?</a>'
          })
        }
      });


    });

  });
</script>