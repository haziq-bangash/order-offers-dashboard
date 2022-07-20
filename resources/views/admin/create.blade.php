@extends('layout.app')

@section('content')
<div class="row">
    <div class="col-10 col-md-6 m-auto my-5">
        <div class="col-lg-12 margin-tb">
            <div class="text-center">
                <h2 class="display-4" >Add New Offer</h2>
            </div>
        </div>     
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <form action="{{ route('offers.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <div class="form-group">
                    <strong>Detail:</strong>
                    <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <div class="form-group">
                    <strong>Image:</strong>
                    <input type="file" name="image" class="form-control" placeholder="image">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center mb-3">
                <a class="btn btn-warning" href="{{ route('admin.offers') }}"> Back</a>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>   
        </form>
    </div>
</div>
@endsection