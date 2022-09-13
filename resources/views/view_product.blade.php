<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <title>View Product | Dashboard</title>
  </head>
  <body>

    <div class="container">

      <br><br>
      <h1>Table</h1>

        <form action="/products" method="POST" style="text-align:right">
          <a  href="{{url('/create_product')}}" class="btn btn-outline-success">Create</a>
        </form>
        <br>

      <div class="table-responsive">          
        <table class="table">
          <thead>
            <tr class="table-dark">
              <th>#</th>
              <th>Name</th>
              <th>Detail</th>
              <th>Price</th>
              <th></th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($product_data as $row) {   ?>
                <tr>
                    <td>{{ $row['id']}}</td>
                    <td>{{ $row['name']}}</td>
                    <td>{{ $row['detail']}}</td>
                    <td>{{ $row['price']}}</td>
                    <td>
                      <form onsubmit="return confirm('Do you want to delete?')" 
                      action="{{action('App\Http\Controllers\ProductController@destroy', $row['id'])}}" 
                        method="post">
                        {{csrf_field()}}
                        <input name="_method" type="hidden" value="DELETE">
                        <button class="btn btn-danger type="submit">DELETE</button>
                      </form>
                    </td>
                </tr>                                      
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>