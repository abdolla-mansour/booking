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
                            <li class="breadcrumb-item"><a href="#">Properties</a></li>
                            <li class="breadcrumb-item active">Create</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">







                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">Create new property</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('dashboard.props.store') }}" method="POST" autocomplete="off" enctype="multipart/form-data">
                            @csrf
                            <input name="title" value="{{ old('title') }}" class="form-control" type="text" placeholder="Title">
                            @error('title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <br>
                            <textarea name="description" id="" cols="30" rows="10" placeholder="Description" class="form-control">{{ old('description') }}</textarea>
                            @error('description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <br>
                            <input name="count_rooms" value="{{ old('count_rooms') }}" class="form-control" type="number" placeholder="Count rooms">
                            @error('count_rooms')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <br>
                            <input name="count_bedrooms" value="{{ old('count_bedrooms') }}" class="form-control" type="number" placeholder="Count bedrooms">
                            @error('count_bedrooms')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <br>
                            <input name="count_bathrooms" value="{{ old('count_bathrooms') }}" class="form-control" type="number" placeholder="Count bathrooms">
                            @error('count_bathrooms')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <br>
                            <input name="salary" value="{{ old('salary') }}" class="form-control" type="number" placeholder="Salary">
                            @error('salary')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <br>
                            <div class="custom-file">
                                <input onchange="changeImage(event)" name="image" type="file" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                            @error('image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <div style="max-width: 100px" class="mt-2"><img class="w-100" id="myImageable" alt=""/></div>
                            
                            <button class="mt-4 btn btn-success w-100">Create</button>
                        </form>
                    </div>
                    <!-- /.card-body -->
                </div>





            </div>
        </section>
    </div>

    
    <script>
        function changeImage(e) {
            if (e.target.files.length > 0) {
                let img = document.getElementById('myImageable');
                let src = URL.createObjectURL(e.target.files[0]);
                img.src = src;
            }
        }
    </script>

    <!-- /.content-wrapper -->
@endsection