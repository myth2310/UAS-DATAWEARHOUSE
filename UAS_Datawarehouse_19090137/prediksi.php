<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Latest minified bootstrap css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

    
    <!-- Latest minified bootstrap js -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Hello, world!</title>
  </head>
  <body>

  <style>
   .active{
    background-color: #ffffff;
        }
  </style>



<nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="#" style="margin-left: 100px;">Least Square</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                      <ul class="navbar-nav">
                        <li class="nav-item ">
                          <a class="nav-link" href="index.php" style="margin-right: 50px;">Home</a>
                        </li>
                        <li class="nav-item active">
                          <a class="nav-link" href="prediksi.php">Input</a>
                        </li>
                      </ul>
                    </div>
                  </nav>
          



   
    <div class="container">
        <button class="btn btn-success btn-lg" data-toggle="modal" data-target="#modalForm" style="margin-top: 30px;margin-bottom: 30px;">
            Tambah data
        </button>

        <!-- Modal -->
<div class="modal fade" id="modalForm" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h1>Input data</h1>
            </div>

            
            
            <!-- Modal Body -->
            <div class="modal-body">
                <p class="statusMsg"></p>

                <?php
              include "koneksi.php";

              if(isset($_POST['proses'])){
              mysqli_query($koneksi, "insert into uas set  
              tanggal = '$_POST[tanggal]',
              amount = '$_POST[amount]'");
             
              echo "Data  baru telah tersimpan";
              }
              ?>

                <form role="form" action="" method="post">
                    <div class="form-group">
                        <label>Tanggal</label>
                        <input type="date" class="form-control" name="tanggal"/>
                    </div>
                    <div class="form-group">
                        <label>Nilai</label>
                        <input type="text" class="form-control" name="amount"/>
                    </div>
                </form>
            </div>
            
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary submitBtn" onclick="submitContactForm()">SUBMIT</button>
            </div>
        </div>
    </div>
</div>


        <div class="row">
            <div class="col">
              <table id="example" class="table table-striped table-bordered data" style="width:100%">
              <thead>
                  <tr>
                      <th>Name</th>
                      <th>Position</th>
                      <th>Office</th>
                  </tr>
              </thead>
              <tbody>
                    <?php
                      include "koneksi.php";

                      $no=1;
                      $ambildata = mysqli_query($koneksi,"select * from uas");
                      while($tampil = mysqli_fetch_array($ambildata)){
                          echo "
                          <tr>
                              <td>$no</td>
                              <td>$tampil[tanggal]</td>
                              <td>$tampil[amount]</td>
                          <tr>";
                          $no++;
                      }
                      ?>
                    
                      </tbody>
                  </table>
            </div>
        </div>
    </div>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>