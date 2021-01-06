                <?php
                $koneksi = mysqli_connect("localhost", "root","","utsluxodev");

                if (mysqli_connect_error()){
                    echo "eror :".mysqli_connect_error();
                }
                    $tampil = $koneksi->query('SELECT * FROM produk');
                    $totalproduk =mysqli_num_rows($tampil);
                    while($row = mysqli_fetch_array($tampil)){
                    
                ?>
                
                <div class="card stylecard">
                    <img src="img/<?= $row['gambar'] ;?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?=$row['nama_produk'];?></h5>
                        <p class="card-text"><?=$row['deskripsi'];?></p>
                        <div class="row">
                            <div class="col">
                                <span class="fa fa-star checked"></span>
                                <a href="#" class="btn btn-success beli">Beli</a>
                            </div>
                        </div>
                    </div>
                 </div>
                 <?php  }?>