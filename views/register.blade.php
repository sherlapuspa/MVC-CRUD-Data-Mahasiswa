<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- Data Tables -->
    <script src="//code.jquery.com/jquery-1.12.3.js"></script>
    <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"  />   
    <link rel="stylesheet" href="{{asset('cssfile/style.css')}}">


    <title>Halaman LOGIN</title>
    
</head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
<script>$(document).ready(function () {
        $('#dt').DataTable();
    });</script>

<body>
  <br>
  <br>
  <br>
  <br>
  <section class="h-100">
    <div class="container h-100">
      <div class="row justify-content-sm-center h-100">
        <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">

          <div class="card shadow-lg mt-5">
            <div class="card-body p-5">

              <center>
                <h1 class="fs-10 card-title fw-bold mb-2">REGISTER FORM</h1>
                <div class="mb-5">Already Have an Account? <a href="/login">LOG IN</a>
                </div>
              </center>
              <form class="" action="/registeruser" method="post" autocomplete="off">
                @csrf
                <div class="mb-3 mt-5">
                  <label class="mb-2" for="">Username : </label>
                  <div class="single-input">
                      <span ><i class="fa fa-user"></i></span>
                    <input type="text" class="form-control" name="username" required value=""
                      placeholder="Type your username">
                  </div>
                  <label class="mb-2" for="">Email : </label>
                  <div class="single-input">
                      <span ><i class="fa fa-envelope"></i></span>
                    <input type="text" class="form-control" name="email_user" required value=""
                      placeholder="example@student.ub.ac.id">
                  </div>
                  <label class="mb-2" for="">Password : </label>
                  <div class="single-input">
                      <span ><i class="fa fa-key"></i></span>
                    <input type="password" class="form-control" name="password" required value=""
                      placeholder="Type your password">
                </div><br>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-danger ms-auto" name="submit">Create Account</button>
                </div>
              </form>
            </div>
            <div class="card-footer py-3 border-0">
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
</body>
<br> <br>
<a href="login.php">Login</a>
</body>

</html