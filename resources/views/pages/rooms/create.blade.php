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
                            <li class="breadcrumb-item"><a href="#">Property</a></li>
                            <li class="breadcrumb-item"><a href="#">Rooms</a></li>
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
                        <h3 class="card-title">Create new room</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('dashboard.rooms.store') }}" method="POST" autocomplete="off" enctype="multipart/form-data">
                            @csrf
                            <input name="property_id" value="{{ $property_id }}" type="hidden" />
                            <input name="title" value="{{ old('title') }}" class="form-control" type="text" placeholder="title">
                            @error('title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <br>
                            <textarea class="form-control" name="description" cols="30" rows="10">{{ old('description') }}</textarea>
                            @error('description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <br>
                            <select class="form-control" name="type">
                                <option @selected(old('type') == 'baderoom') value="baderoom">Baderoom</option>
                                <option @selected(old('type') == 'bathroom') value="bathroom">Bathroom</option>
                                <option @selected(old('type') == 'kitchen') value="kitchen">Kitchen</option>
                            </select>
                            <br>
                            <div class="custom-file">
                                <input onchange="changeImage(event)" name="image" type="file" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                            @error('image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <div style="max-width: 100px" class="mt-2"><img class="w-100" id="myImageable" alt="" /></div>

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
