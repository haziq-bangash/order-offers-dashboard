@extends('layout.app')

@section('styles')
  <style>
       tr {
        font-size: 1.5rem;
       }
  </style>
@endsection

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
                        {{-- @php --}}
                          {{-- $customers = array("john", "mike", "joe", "bob", "mary", "christie", "anna", "lisa"); --}}
                        {{-- @endphp --}}
                        @php
                          $i = 1
                        @endphp  
                            @forelse ($orders as $order)
                                <tr>
                                  <td>{{ $i++ }}</td>
                                  <td>{{ $order->name }}</td>
                                </tr>
                            @empty
                                
                            @endforelse
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
        </div>
    
        <div id="offers" class="col-12 col-md-6" >
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="/image/{{ $offers[0]->image }}" class="d-block w-100" width="100%" height="90%" alt="...">
                  </div>
                  @foreach ($offers as $offer)
                  <div class="carousel-item">
                    <img src="/image/{{ $offer->image }}" class="d-block w-100" width="100%" height="90%" alt="...">
                  </div>
                  @endforeach
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
    {{-- <script type="text/javascript">$('#sampleTable').DataTable();</script> --}}

    <script>
      $(document).ready( function () {
  var table = $('#sampleTable').DataTable( {
    pageLength : 5,
    lengthMenu: [[5, 10, 20, -1], [5, 10, 20, 'Todos']]
  } )
} );
    </script>
@endsection