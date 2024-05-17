@extends('dash_layouts.app')

@section('layout_style', 'hold-transition')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Rooms</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item">Rooms</li>
                            <li class="breadcrumb-item active">Rooms</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">



                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="">All rooms in this room</h3>


                                <a href="{{ route('dashboard.rooms.create', $property_id) }}" class="d-inline-flex btn btn-primary">Create Room</a>
                                <div class="card-tools">
                                    <div class="input-group input-group-sm" style="width: 150px;">
                                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-default">
                                                <i class="fas fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Image</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>control</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($rooms as $room)
                                            <tr>
                                                <td>{{ $room->id }}</td>
                                                <td>
                                                    @if ($room->image)
                                                        <img style="border-radius: 50%" width="50" height="50" src="{{ asset('rooms_image/' . $room->image->name) }}" alt="">
                                                    @else   
                                                        <img style="border-radius: 50%" width="50" height="50" src="{{ asset('rooms_image/default.jpg') }}" alt="">
                                                    @endif
                                                </td>
                                                <td>{{ $room->title }}</td>
                                                <td>{{ $room->description }}</td>
                                                <td>
                                                    <div class="btn-group">
                                                        <form action="{{ route('dashboard.rooms.destroy', [$room->id, $property_id]) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="btn btn-danger">Delete</button>
                                                        </form>
                                                        <a href="{{ route('dashboard.rooms.edit', [$room->id, $property_id]) }}" class="btn btn-primary">Update</a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>



            </div>
        </section>
    </div>
    <!-- /.content-wrapper -->
@endsection
