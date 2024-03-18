<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Au Register Forms by Colorlib</title>

    <!-- Icons font CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">


    <style>
        @media (min-width: 1025px) {
.h-custom {
height: 100vh !important;
}
}

.horizontal-timeline .items {
border-top: 2px solid #ddd;
}

.horizontal-timeline .items .items-list {
position: relative;
margin-right: 0;
}

.horizontal-timeline .items .items-list:before {
content: "";
position: absolute;
height: 8px;
width: 8px;
border-radius: 50%;
background-color: #ddd;
top: 0;
margin-top: -5px;
}

.horizontal-timeline .items .items-list {
padding-top: 15px;
}
    </style>
</head>

<body>
    <section class="h-100 h-custom" style="background-color: #eee;">

        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-8 col-xl-6">

              <div class="card border-top border-bottom border-3" style="border-color: #f37a27 !important;">
                <a href="/"><button class="btn btn-success"> Back</button></a>
                <div class="card-body p-5">

                  <p class="lead fw-bold mb-5" style="color: #f37a27;">Details Commande</p>

                  <div class="row">
                    <div class="col mb-3">
                      <p class="small text-muted mb-1">Date</p>
                      <p>{{ $data[0]->created_at }}</p>
                    </div>
                    <div class="col mb-3">
                      <p class="small text-muted mb-1">Order No.</p>
                      <p>{{ $data[0]->Commande_id}}</p>
                    </div>
                  </div>

                  <div class="mx-n5 px-5 py-4" style="background-color: #f2f2f2;">
                    <div class="row">
                      <div class="col-md-8 col-lg-9">
                        <p>{{ $data[0]->product }}</p>
                      </div>
                      <div class="col-md-4 col-lg-3">
                        <p>${{ $data[0]->price }}</p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-8 col-lg-9">
                        <p class="mb-0">Shipping</p>
                      </div>
                      <div class="col-md-4 col-lg-3">
                        <p class="mb-0">${{ $data[0]->shiping }}</p>
                      </div>
                    </div>
                  </div>

                  <div class="row my-4">
                    <div class="col-md-4 offset-md-8 col-lg-3 offset-lg-9">
                      <p class="lead fw-bold mb-0" style="color: #f37a27;">${{ $data[0]->price + $data[0]->shiping }}</p>
                    </div>
                  </div>

                  <p class="lead fw-bold mb-4 pb-2" style="color: #f37a27;">Tracking Order</p>

                  <div class="row">
                    <div class="col-lg-12">

                      <div class="horizontal-timeline">

                        <ul class="list-inline items d-flex justify-content-between">
                          <li class="list-inline-item items-list">
                            <p class="py-1 px-2 rounded text-white" style="background-color: #f37a27;">{{ $data[0]->tracking }}</p
                              class="py-1 px-2 rounded text-white" style="background-color: #f37a27;">
                          </li>

                        </ul>

                      </div>

                    </div>
                  </div>


                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
