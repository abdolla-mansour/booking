@extends('dash_layouts.app')

@section('active_nav_user', 'active')
@section('layout_style', 'hold-transition')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Users</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Users</a></li>
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
                        <h3 class="card-title">Create new user</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('dashboard.users.store') }}" method="POST" autocomplete="off" enctype="multipart/form-data">
                            @csrf
                            <input name="name" value="{{ old('name') }}" class="form-control" type="text" placeholder="Name">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <br>
                            <input name="email" value="{{ old('email') }}" class="form-control" type="email" placeholder="E-mail">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <br>
                            <input name="password" class="form-control" type="password" placeholder="Password">
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <br>
                            <input name="password_confirmation" class="form-control" type="password" placeholder="Confirm password">
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
