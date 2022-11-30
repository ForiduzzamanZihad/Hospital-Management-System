@extends('admin.layout.app')
@section('content')
<div class="content-wrapper">
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Add New Department</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form>
                                <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Description</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="description">
                                </div>
                                
                                
                                <div class="form-group">
                                    <div class="dropdown">
                                    <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Status </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton5" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 29px, 0px);">
                                        <a class="dropdown-item" href="#">Active</a>
                                        <a class="dropdown-item" href="#">Deactive</a>
                                    </div>
                                </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer mr-2">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                                
                            </form>
                            </div>
                        </div>
                    </div>
                
            </div>
        </div>
    </div>
</div>
@endsection