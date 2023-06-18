@extends('admin.index')
@section('content')
    <div class="content wrapper">
        <!--DataTables Example-->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="crad">
                            <div class="card-shadow mb-4">
                                <div class="card">
                                    <div class="crad-header">

                                        <h3 class="crad-title">Data Pondok</h3>

                                        <div class="card-tools">
                                            <ul class="pagination pagination-sm float-right">
                                                <li class="page-item"><a class="page-link" href="#">ADD</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="crad-header">
                                    <div class="crad-tools">
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-default">
                                                <i class="fas fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>

                                        <th>No</th>
                                        <th>Nama Pondok</th>
                                        <th width="120">Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </div>
@endsection
