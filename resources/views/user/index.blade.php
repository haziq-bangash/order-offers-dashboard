@extends('layout.app')

@section('content')
<main class="container-fluid">
    <div class="row py-4">
        <div id="orders" class="col-12 col-md-6 border-end" >
          <h1 class="pb-1" >Orders</h1>
            <div class="tile">
                <div class="tile-body">
                  <div class="table-responsive">
                    <table class="table table-hover table-bordered" id="sampleTable">
                      <thead>
                        <tr>
                          <th>#Sr.</th>
                          <th>Order</th>
                        </tr>
                      </thead>
                      <tbody>
                        @php
                          $customers = array("john", "mike", "joe", "bob", "mary", "christie", "anna", "lisa");
                        @endphp
                            @for ($i = 0; $i < count($customers); $i++)
                            <tr>
                                <td>{{ $i+1 }}</td>
                                <td>{{ $customers[$i] }}</td>
                            </tr>
                            @endfor
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
        </div>
    
        <div id="offers" class="col-12 col-md-6" >
          <h1 class="pb-1" >Offers</h1>
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://c.neh.tw/thumb/f/720/68a7924e42df41488c06.jpg" class="d-block w-100" width="100%" height="90%" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="https://i.pinimg.com/474x/d1/cf/d7/d1cfd726f334ebbfca08ab29975e1942.jpg" class="d-block w-100" width="100%" height="90%" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="https://i.pinimg.com/474x/d1/cf/d7/d1cfd726f334ebbfca08ab29975e1942.jpg" class="d-block w-100" width="100%" height="90%" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </div>
    </div>
</main>
@endsection

@section('js')

<!-- Page specific javascripts-->
    <!-- Data table plugin-->
    <script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>

@endsection