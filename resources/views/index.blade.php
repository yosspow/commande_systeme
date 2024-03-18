<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>Gestion  des commandes </title>
  </head>
  <body>
    @if(Session::has('deleted') )
    <div class="alert alert-dark p-0 m-0" role="alert">
        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAABVUlEQVR4nO2YS07DMBBA354C4hztEWAFS1RYIihBUPERcA1WcILmSqgbTsANKEjIbDCKNNlETUxq106redJsHDvxi38jg6IoiqIoirKKDIAcmErkUrZSZMAPYCtRlI3oMNvAMTBukCjDSJ2i7pG07QSPwGdDx10xAx5SS9x5CFTjJpVET/5mKJFiVDdTiAwDSpRxmELkegkiVylELjw7/TunLIstce7YYl3xAlzWbM1nsSQGASR2gNea5wboxxDJlyhhJSYxRKYNHXgHvj0lrHwjqcgJcDBHpo2EjSXSNLW+gL2KzHNLCRtrarkWeymzDzwtIGFiLXYkFTcOmd0FJU6JTOboVCHz1nJXy1iTFGWcQmRtksZe4DT+A9ggEbcBRYqpmpR7z5GZyTs6wZZcJJSXD+aflw9DadtZRjUySc4JX/qSapQXdJOYJ7aiKIqiKIpCMP4AxyHDvHGqg1AAAAAASUVORK5CYII=">
        {{ Session::get('deleted') }}
      </div>
    @endif


  <div class="content">

    <div class="container">
      <h2 class="mb-5"> Commandes </h2>
      <button class="btn btn-info" ><a href="{{ route('create_commande') }}" class=" text-dark">create commande</a>  </button>


      <div class="table-responsive custom-table-responsive">

        <table class="table custom-table">
          <thead>
            <tr>



              <th scope="col">commandes</th>
              <th scope="col">Client Name</th>
              <th scope="col">email</th>
              <th scope="col">Contact</th>
              <th scope="col">Show</th>
              <th scope="col">Edit</th>
              <th scope="col">Delete</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($data as $item )


            <tr scope="row">

              <td>
                {{ $item->id }}
              </td>
              <td><a href="#">{{ $item->name }}</a></td>
              <td>
                {{ $item->email }}
              </td>
              <td>{{ $item->contact }}</td>
              <td><a href="{{ route('show',$item->id) }}"><button class="btn btn-success">Show</button></td>
              <td><a href="{{ route('edit',$item->id) }}"><button class="btn btn-info">Modify</button></a></td>
              <td><a href="{{ route('delete',$item->id) }}"><button class="btn btn-danger">Delete</button></a></td>
            </tr>
            @endforeach

          </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {!! $data->links() !!}
        </div>
      </div>


    </div>

  </div>



    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
