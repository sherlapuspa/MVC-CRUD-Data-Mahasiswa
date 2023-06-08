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
  <section class="h-100">
    <div class="container h-100">
      <div class="row justify-content-sm-center h-100">
        <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
            <br>
            <br>
            <br>
            <br>
          <div class="card shadow-lg ">
            <div class="card-body p-5">
              <div class="text-center my-5">
                <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor"
                  class="bi bi-person-circle" viewBox="0 0 16 16">
                  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                  <path fill-rule="evenodd"
                    d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                </svg>
              </div>
              <center>
              <h1 class="fs-10 card-title fw-bold mb-2">LOGIN</h1>
              </center>
              <form class="" action="/loginuser" method="post" autocomplete="off">
              @csrf 
              <div class="mb-3 mt-5">
                  <label class="mb-2" for="">Username : </label>
                  <div class="single-input">
                      <span ><i class="fa fa-user"></i></span>
                    <input type="text" class="form-control" name="username" required value=""
                      placeholder="Type your username">
                  </div>
                  <label class="mb-2" for="">Password : </label>
                  <div class="single-input">
                      <span ><i class="fa fa-key"></i></span>
                    <input type="password" class="form-control" name="password" required value=""
                      placeholder="Type your password">
                </div>
                <br>
                <div class="text-center mb-3">
                  <button type="submit" class="btn btn-primary ms-auto" name="submit">Login</button>
                </div>
                <center><div class="mb-5">Don't Have an Account? <a href="/register">Create an Account</a></center>
              </form>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
</body>

</html