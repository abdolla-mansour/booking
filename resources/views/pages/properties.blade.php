@extends('dash_layouts.app')

@section('active_nav_property', 'active')
@section('layout_style', 'hold-transition')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Properties</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Properties</li>
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
                                <h3 class="">All Properties in your project</h3>


                                <a href="{{ route('dashboard.props.create') }}" class="d-inline-flex btn btn-primary">Create Properties</a>
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
                                            <th>Count of rooms</th>
                                            <th>Count of bedrooms</th>
                                            <th>Count of bathrooms</th>
                                            <th>Salary</th>
                                            <th>Rooms</th>
                                            <th>Control</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($props as $prop)
                                            <tr>
                                                <td>{{ $prop->id }}</td>
                                                <td>
                                                    <img style="border-radius: 50%" width="50" height="50" src="{{ asset('properties_image/' . $prop->image->name) }}" alt="">
                                                </td>
                                                <td>{{ $prop->title }}</td>
                                                <td style="
                                                        display: block;
                                                        overflow: hidden;
                                                        text-overflow: ellipsis;
                                                        width: 200px;
                                                    ">
                                                    {{ $prop->description }}
                                                </td>
                                                <td>{{ $prop->count_rooms }}</td>
                                                <td>{{ $prop->count_bedrooms }}</td>
                                                <td>{{ $prop->count_bathrooms }}</td>
                                                <td>{{ $prop->salary }}</td>
                                                <td><a href="{{ route('dashboard.rooms.show', $prop->id) }}">Rooms</a></td>
                                                <td>
                                                    <div class="btn-group">
                                                        <form action="{{ route('dashboard.props.destroy', $prop->id) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="btn btn-danger">Delete</button>
                                                        </form>
                                                        <a href="{{ route('dashboard.props.edit', $prop->id) }}" class="btn btn-primary">Update</a>
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
