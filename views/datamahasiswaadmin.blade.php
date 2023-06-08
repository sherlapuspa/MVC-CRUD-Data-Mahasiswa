<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- bootstrap 5 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="js/bootstrap.bundle.min.js"></script>
        <!-- Data Tables -->
        <script src="//code.jquery.com/jquery-1.12.3.js"></script>
<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script
    src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
<link rel="stylesheet"
    href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet"
    href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"  />   

        <title>Halaman ADMIN</title>
    </head>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>$(document).ready(function () {
            $('#dt').DataTable();
        });</script>
        

    <body>
    
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand">Hi, {{Auth::user()->username}}!</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/datamahasiswaadmin">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/logout">Logout</a>
      </li>
      
    </ul>
  </div>
</nav>


        <!-- ALERT-->
    
        @if ($message= Session::get('success'))
            
            <div class="alert alert-success alert-dismissible" role="alert">
              
            {{$message}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            
        @endif


        <div class="container">
            <div class="table-responsive">
                <p>
                    <center>
                        <h1>Data Mahasiswa</h1>
                    </center>
                </p>
                <table id="dt" class="table table-bordered border-dark table-hover table-striped ">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">NIM</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Program Studi</th>
                            <th scope="col">Email</th>
                            <th scope="col">Update</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($data as $row){?>
                            <tr>
                                <th scope="row">
                                    <?php echo $no++;
                                    echo "."; ?>
                                </th>
                                <td>
                                    <?php echo $row['nim']; ?>
                                </td>
                                <td>
                                    <?php echo $row['nama']; ?>
                                </td>
                                <td>
                                    <?php echo $row['program_studi']; ?>
                                </td>
                                <td>
                                    <?php echo $row['email']; ?>
                                </td>
                                <td>
                                    <a href="/tampilkandata/ <?php echo $row['nim']; ?>" type= "button" class="btn btn-warning btn-sm"><i class=" fa fa-pencil"></i> Edit</a>
                                    <a href="#" type="button" class="btn btn-danger btn-sm delete" data-nim="<?php echo $row['nim']; ?>"><i class=" fa fa-trash"></i> Hapus</a>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
                <center>
                    <div class="mt-2">
                        <a href="tambahmahasiswa" type="button" class="btn btn-primary"><i class=" fa fa-plus"></i> Tambah Data </a>
                    </div>
                </center>
            </div>
        </div>
        <div class="mb-5">
        </div>
    </body>
    <script>
                        $('.delete').click(function(){
                            var mahasiswanim = $(this).attr('data-nim');
                            swal({
                title: "Anda Yakin?",
                text: "Menghapus data mahasiswa dengan NIM : "+mahasiswanim+"",
                icon: "warning",
                buttons: true,
                dangerMode: true,
                })
                .then((willDelete) => {
                if (willDelete) {
                    window.location="/delete/"+mahasiswanim+""
                    swal("Poof! Data berhasil dihapus!", {
                    icon: "success",
                    });
                } else {
                    swal("Data tidak jadi dihapus");
                }
                });
                        });

                            
        </script>  
    </html>