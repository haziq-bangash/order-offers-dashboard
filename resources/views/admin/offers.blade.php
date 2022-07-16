@extends('layout.admin')

@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Offers</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Offers</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Offers Table
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Photo</th>
                            <th>Title</th>
                            <th>Status</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Photo</th>
                            <th>Title</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @forelse ($offers as $offer)
                        <tr>
                            <td>{{ $offer->id }}</td>
                            <td><img src="{{ $offer->photo_url }}" alt="" height="100px"></td>
                            <td>{{ $offer->title }}</td>
                            <td>{{ $offer->created_at }}</td>
                            <td>{{ $offer->updated_at }}</td>
                            <td>
                                <form action="/admin/offer/delete/{{ $offer->id }}" method="post">
                                    @csrf
                                    <button type="submit" onclick="alert('Are you sure you want to delete this song?'');" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                            <tr>
                                <td colspan="6" >No Offers yet</td>
                            </tr>
                        @endforelse
                        <tr>
                            <td colspan="6" class="text-center" ><a href="{{ route('admin.add.offer') }}"><button class="btn btn-primary btn-sm" >Add</button></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection