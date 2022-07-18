@extends('layout.admin')

@section('content')
<div class="row">
<div class="col-lg-8 margin-tb">
    <div class="pull-right">
        <a class="btn btn-success" href="{{ route('offers.create') }}"> Create New Offer</a>
    </div>
</div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered">
<tr>
    <th>No</th>
    <th>Image</th>
    <th>Name</th>
    <th>Details</th>
    <th>Action</th>
</tr>
@foreach ($offers as $offer)
<tr>
    <td>{{ ++$i }}</td>
    <td><img src="/image/{{ $offer->image }}" width="100px"></td>
    <td>{{ $offer->name }}</td>
    <td>{{ $offer->detail }}</td>
    <td>
        <form action="{{ route('offers.destroy',$offer->id) }}" method="POST">

            @csrf
            <button type="submit" onclick="alert('Are you sure you want to delete this offer?'');" class="btn btn-danger btn-sm">Delete</button>
        </form>
    </td>
</tr>
@endforeach
</table>

{!! $offers->links() !!}
@endsection