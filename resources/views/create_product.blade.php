<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
  <div class="container">

<br><br>
<h2>CREATE PRODUCT |DASHBOARD</h2>
<hr class="solid">

<form action="/products" method="POST">
    {{ csrf_field() }}
    <div class="mb-3">
        <label class="form-label">Name:</label>
        <input type="text" class="form-control" placeholder="Enter your name" name="myname">

    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Details:</label>
        <input type="text" class="form-control" placeholder="Enter your details" name="mydetails">
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Price:</label>
        <input type="number" class="form-control" placeholder="Enter your product price" name="myprice">
    </div>

    <br>
    <div class="action" >
        <a class="btn btn-danger btn-lg" href="/products">Close</a>
        <button type="submit" class="btn btn-primary btn-lg">Submit</button>
    </div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
