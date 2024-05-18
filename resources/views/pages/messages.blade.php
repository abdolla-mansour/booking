@extends('dash_layouts.app')

@section('active_nav_message', 'active')
@section('layout_style', 'hold-transition')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Messages</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Messages</li>
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
                                <h3 class="">All Messages</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Message</th>
                                            <th>Control</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($messages as $message)
                                            <tr>
                                                <td>{{ $message->id }}</td>
                                                <td>{{ $message->username }}</td>
                                                <td>{{ $message->email }}</td>
                                                <td>{{ $message->phone }}</td>
                                                <td
                                                    style="
                                                        display: block;
                                                        overflow: hidden;
                                                        text-overflow: ellipsis;
                                                        width: 200px;
                                                    ">
                                                    {{ $message->message }}
                                                </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#send_{{ $message->id }}">
                                                            Send Message
                                                        </button>
                                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#read_{{ $message->id }}">
                                                            Read
                                                        </button><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete_{{ $message->id }}">
                                                            Delete
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>



                                            <!-- Delete Modal -->
                                            <div class="modal fade" id="delete_{{ $message->id }}">
                                                <div class="modal-dialog">
                                                    <div class="modal-content bg-danger">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Delete Message</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>are you chore you want to delete this message ?</p>
                                                        </div>
                                                        <div class="modal-footer justify-content-between">
                                                            <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                                                            <form action="{{ route('dashboard.message.delete', $message->id) }}" method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <!-- Button trigger modal -->
                                                                <button class="btn btn-danger">
                                                                    Delete
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>
                                            <!-- /.modal -->


                                            <!-- Read Modal -->
                                            <div class="modal fade" id="read_{{ $message->id }}">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">from <span class="text-primary">{{ $message->username }}</span></h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>{{ $message->message }}</p>
                                                        </div>
                                                        <div class="modal-footer justify-content-between">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>
                                            <!-- /.modal -->

                                            <!-- Contact User Modal -->
                                            <div class="modal fade" id="send_{{ $message->id }}">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Send to <span class="text-primary">{{ $message->email }}</span></h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form method="POST" action="{{ route('dashboard.message.send', $message->id) }}">
                                                            @csrf
                                                            <div class="modal-body">
                                                                <input class="form-control" name="title" type="text" placeholder="Title" /><br>
                                                                <textarea name="message" class="form-control" cols="30" rows="10"></textarea>
                                                            </div>
                                                            <div class="modal-footer justify-content-between">
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                <button class="btn btn-primary">Send</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>
                                            <!-- /.modal -->

                                            
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
