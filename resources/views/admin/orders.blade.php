@extends('layout.admin')

@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Orders</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Orders</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Orders Table
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Ordered By</th>
                            {{-- <th>Ordered At</th> --}}
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Ordered By</th>
                            {{-- <th>Ordered At</th> --}}
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @forelse ($orders as $order)
                        <tr>
                            <td>{{ $order->id }}</td>
                            <td>{{ $order->name }}</td>
                            {{-- <td>{{ $order->created_at }}</td> --}}
                            <td>
                                <form action="/admin/order/delete/{{ $order->id }}" method="post">
                                    @csrf
                                    <button type="submit" onclick="alert('Are you sure you want to delete this song?'');" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                            <tr>
                                <td colspan="6" >No Orders yet</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection