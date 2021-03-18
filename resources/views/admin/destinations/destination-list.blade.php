@extends('admin.inc.master')
@section('destination')
<div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
              <div class="page-breadcrumb">
                    <h2>Destination Page</h2>
                </div>
            </div>
        </div>
    </div>
     <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h2 class="page header-title text-center">
                    List of States and Cities
                </h2>
                
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Admin</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Destination</li>
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
                        <h5 class="card-header">Destinations</h5>
                        <div class="card-body">
                        <div class="table table-responsive" >
                            <table class="table table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">S/N</th>
                                        <th scope="col">City Name</th>
                                        <th scope="col">Destination name</th>
                                        <th scope="col">Destination Code</th>
                                        <th>Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end hoverable table -->
            </div>
    @endsection