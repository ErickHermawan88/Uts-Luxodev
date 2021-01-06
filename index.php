<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>>
    <title>Shining Clothes</title>
  </head>

    <style>

        .toko{
            font-size: 25px;
            font-style: bold;
        }
        .img2 {
            width: 300px;
        }


        .checked {
            color: orange;
        }
        .label {
            font-size: 12px;
            color: grey;
        }
        .beli {
            float: right;
        }

        .stylecard {
            margin-right: 10px;
            /* width: 300px;
            height: 300px */
        }
    </style>
  <body>
    <!-- navbar nama website -->
        <nav class="navbar navbar-light bg-navy">
        <div class="container-fluid ">
            <a class="navbar-brand" href="#">
            <img src="img/LOGO 2.png" alt="" width="50" height="33" class="d-inline-block align-top">
            Shining Clothes
            </a>
        </div>
        </nav>

    <!-- navbar nama toko -->
        <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand toko">SHINING CLOTHES PROJECT</a>
            <form class="d-flex">
            <input class="form-control me-2" type="search" id="keyword" placeholder="Cari" aria-label="Search">
            <button class="btn btn-warning" id="submit" type="submit">Go</button>
            </form>
        </div>
        </nav>

    <!-- colum keranjang belanja -->
    <style>
        .keranjang {
            padding: 10px;
        }
    </style>

<!-- Koneksi data base -->
          <?php
                $koneksi = mysqli_connect("localhost", "root","","utsluxodev");

                if (mysqli_connect_error()){
                    echo "eror :".mysqli_connect_error();
                }

            
            ?>

    <div class="container-fluid keranjang">
        <div class="row">
            <div class="col">
               <H5>Keranjang Belanja</H5>
            <!-- tabel Keranjang -->
                <table class="table table-hover table-sm">
                    <thead>
                        <tr>
                        <th scope="col" colspan="2">Nama Barang</th>
                        <th scope="col">Qty</th>
                        <th scope="col">Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td colspan="2">Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        </tr>
                        <tr>
                        <td colspan="2">Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        </tr>
                        <tr>
                        <td colspan="2" class="table-active">Total Pembayaran</td>
                        <td class="table-active"></td>
                        <td colspan="2" class="table-active">Rp 1.000.000</td>
                        </tr>
                    </tbody>
                    </table>
            </div>


            <!-- card item -->
            <div class="col-9">
                <div class="card-group" id="card">
            <!-- menampilakan produk data base -->
                    <div class="card stylecard">
                    <img src="img/8a27b6d7910c09749361c436ad39ce45.jpg" class="card-img-top img2" alt="...">
                    <div class="card-body">
                        <h5 class="card-title" id="nama">Botol Lock and Lock</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <div class="row">
                            <div class="col">
                                <span class="fa fa-star " id="star1"></span>
                                <span class="fa fa-star " id="star1"></span>
                                <span class="fa fa-star " id="star1"></span>
                                <span class="fa fa-star " id="star1" ></span>
                                <span class="fa fa-star " id="star1"></span>
                                <a href="#" id="beli" class="btn btn-success beli">Beli</a>
                            </div>
                        </div>
                    </div>
                 </div>

                 <div class="card stylecard">
                    <img src="img/8a27b6d7910c09749361c436ad39ce45.jpg" class="card-img-top img2" alt="...">
                    <div class="card-body">
                        <h5 class="card-title" id="nama">Botol Lock and Lock</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <div class="row">
                            <div class="col">
                                <span class="fa fa-star checked " id="star1"></span>
                                <span class="fa fa-star  " id="star1"></span>
                                <span class="fa fa-star " id="star1"></span>
                                <span class="fa fa-star " id="star1" ></span>
                                <span class="fa fa-star " id="star1"></span>
                                <a href="#" id="beli" class="btn btn-success beli">Beli</a>
                            </div>
                        </div>
                    </div>
                 </div>

                 <div class="card stylecard">
                    <img src="img/8a27b6d7910c09749361c436ad39ce45.jpg" class="card-img-top img2" alt="...">
                    <div class="card-body">
                        <h5 class="card-title" id="nama">Botol Lock and Lock</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <div class="row">
                            <div class="col">
                                <span class="fa fa-star checked " id="star1"></span>
                                <span class="fa fa-star checked " id="star1"></span>
                                <span class="fa fa-star " id="star1"></span>
                                <span class="fa fa-star " id="star1" ></span>
                                <span class="fa fa-star " id="star1"></span>
                                <a href="#" id="beli" class="btn btn-success beli">Beli</a>
                            </div>
                        </div>
                    </div>
                 </div>
                 </div>

             
            <div class="card-group">
                 <div class="card stylecard">
                    <img src="img/8a27b6d7910c09749361c436ad39ce45.jpg" class="card-img-top img2" alt="...">
                    <div class="card-body">
                        <h5 class="card-title" id="nama">Botol Lock and Lock</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <div class="row">
                            <div class="col">
                                <span class="fa fa-star checked " id="star1"></span>
                                <span class="fa fa-star checked  " id="star1"></span>
                                <span class="fa fa-star checked" id="star1"></span>
                                <span class="fa fa-star " id="star1" ></span>
                                <span class="fa fa-star " id="star1"></span>
                                <a href="#" id="beli" class="btn btn-success beli">Beli</a>
                            </div>
                        </div>
                    </div>
                    
                 </div>

                                  <div class="card stylecard">
                    <img src="img/8a27b6d7910c09749361c436ad39ce45.jpg" class="card-img-top img2" alt="...">
                    <div class="card-body">
                        <h5 class="card-title" id="nama">Botol Lock and Lock</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <div class="row">
                            <div class="col">
                                <span class="fa fa-star checked " id="star1"></span>
                                <span class="fa fa-star checked " id="star1"></span>
                                <span class="fa fa-star checked" id="star1"></span>
                                <span class="fa fa-star  checked" id="star1" ></span>
                                <span class="fa fa-star " id="star1"></span>
                                <a href="#" id="beli" class="btn btn-success beli">Beli</a>
                            </div>
                        </div>
                    </div>
                 </div>

                 <div class="card stylecard" id="botol">
                    <img src="img/8a27b6d7910c09749361c436ad39ce45.jpg" class="card-img-top img2" alt="...">
                    <div class="card-body">
                        <h5 class="card-title" id="nama">Botol Lock and Lock</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <div class="row">
                            <div class="col">
                                <span class="fa fa-star checked " id="star1"></span>
                                <span class="fa fa-star checked " id="star1"></span>
                                <span class="fa fa-star  checked" id="star1"></span>
                                <span class="fa fa-star  checked" id="star1" ></span>
                                <span class="fa fa-star checked" id="star1"></span>
                                <a href="#" id="beli" class="btn btn-success beli">Beli</a>
                            </div>
                        </div>
                    </div>
                 </div>
            </div>
                 <div id="newcard">

                 </div>
            <!-- end card item -->
            </div>
        </div>
        </div>
    </div>

<script type="text/javascript">
// $(document).ready(function(){
// 		app = {
// 			show: function(){
// 				$("#card").load('tampil.php', {type: 'view'}, function(response){
// 					$("#card").html(response);
// 				})		
// 			}
// 		}
// 		app.show()
// 	})]

// var keyword = document.getElementById('keyword');

    keyword.addEventListener('keyup', function(){
        $(".stylecard").empty();
        $('#card').load($("#keyword").val());
        $
    })

    // $('#keyword').on('keyup', function(){
    //     console.log(ok);
    //     $('card').load('.stylecard');
    // });

//     function myFunction() {
//   var change, keyword;
//   keyword = document.getElementById('keyword');
//   change = keyword.value.toUpperCase();
//   chang = document.getElementById("card");
//   styles = ducument.getElementsBy('.stylecard')

//   // Loop through all list items, and hide those who don't match the search query
//   for (i = 0; i < styles.length; i++) {
//     a = styles[i].getElementsBy("rubah")[0];
//     txtValue = a.textContent || a.innerText;
//     if (txtValue.toUpperCase().indexOf(filter) > -1) {
//       chang[i].style.display = "";
//     } else {
//       chang[i].style.display = "none";
//     }
//   }
// }
</script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>