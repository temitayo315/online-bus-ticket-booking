@extends('admin.inc.master')
    @section('operator')
        <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                      <div class="page-breadcrumb">
                            <h2>Buses Page</h2>
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
                                        <i class="fa fa-plus"></i> Register Bus</button>
                                        @include('admin.bus.add-bus-modal')
                        </h2>
                        
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Admin</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Buses</li>
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
                                <h5 class="card-header">List of Available Vehicles</h5>
                                <div class="card-body">
                                    @include('admin.inc.alert')
                                    @if(count($buses)== 0)
                                            
                                            <h5>Oh Snap!..No Bus Vehicle Available</h5>
                                        
                                        @else
                                <div class="table table-responsive">
                                    <table class="table table-hover table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">S/N</th>
                                                <th scope="col">Vehicle name</th>
                                                <th scope="col">Code</th>
                                                <th scope="col">Total Seats</th>
                                               <th>Operator Name</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $count = 1; ?>
                                             @foreach($buses as $bus)
                                            <tr>
                                                <th scope="row">{{$count++}}</th>
                                                <td>{{$bus->bus_name}}</td>
                                                <td>{{$bus->bus_code}}</td>
                                                <td>{{$bus->total_seats}}</td>
                                               <td>{{$bus->operator->operator_name}}</td>
                                                <td>
                                                    <!-- Trigger the modal with a button -->
                                                <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal_{{$bus->id}}">
                                             <i class="fa fa-edit"></i> Edit</button>

                                             @include('admin.bus.edit-bus-modal')
                                             
                                             <a href="{{route('bus.destroy', $bus->id)}}" class="btn btn-danger btn-xs">Delete <i class="fa fa-trash"></i></a>
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