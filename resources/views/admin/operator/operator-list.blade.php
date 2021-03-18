@extends('admin.inc.master')
    @section('operator')
        <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                      <div class="page-breadcrumb">
                            <h2>Operator Page</h2>
                        </div>
                    </div>
                </div>
            </div>
             <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                        <h2 class="page header-title text-center">
                            <!-- Trigger the modal with a button -->
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">
                                        <i class="fa fa-plus"></i> Add New Operator</button>
                                        @include('admin.operator.add-operator-modal')
                        </h2>
                        
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Admin</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Operator</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    
                </div>
            </div>
             <!-- hoverable table -->
                        <!-- ============================================================== -->
                        <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">List of Operators</h5>
                                <div class="card-body">
                                    @include('admin.inc.alert')
                                    @if(count($operators)== 0)
                                            
                                            <h5>Oh Snap!..No Registered Operators yet!</h5>
                                        
                                        @else
                                <div class="table table-responsive">
                                    <table class="table table-hover table-bordered" id="myDatatable">
                                        <thead>
                                            <tr>
                                                <th scope="col">S/N</th>
                                                <th scope="col">Full name</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Address</th>
                                                <th scope="col">Photo</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $count = 1; ?>
                                             @foreach($operators as $operator)
                                            <tr>
                                                <th scope="row">{{$count++}}</th>
                                                <td>{{$operator->operator_name}}</td>
                                                <td>{{$operator->operator_email}}</td>
                                                <td>{{$operator->operator_address}}</td>
                                                <td><img src="{{url('uploads/'.$operator->operator_logo)}}" width="100" height="100"></td>
                                                <td>
                                                    <!-- Trigger the modal with a button -->
                                                <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal_{{$operator->id}}">
                                             <i class="fa fa-edit"></i> </button>
                                             @include('admin.operator.edit-operator-modal')

                                             <a href="{{'destroy/'.$operator->id}}" class="btn btn-danger btn-xs"> <i class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                     @endif
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end hoverable table -->
                    </div>
            @endsection