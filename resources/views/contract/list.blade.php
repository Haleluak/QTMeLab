@extends('layouts.app')

@section('content')
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">
                <!-- end row -->

                <div class="row">

                    <div class="col-lg-12">
                        <div class="card-box">
                            <div class="dropdown pull-right">
                                <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"
                                   aria-expanded="false">
                                    <i class="zmdi zmdi-more-vert"></i>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                            </div>

                            <h4 class="header-title m-t-0 m-b-30">Latest Projects</h4>

                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Mã Hợp Đồng</th>
                                        <th>Ngày lập hợp đồng</th>
                                        <th>Tên Khach Hang</th>
                                        <th>Status</th>
                                        <th>Due Date</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($contracts as $contract)
                                        <tr>
                                            <td><a href="{{ url('/contract/view/' .$contract->id) }}">{{ $contract->so_hop_dong }}</a></td>
                                            <td>{{ $contract->ngay_lap_hd }}</td>
                                            <td>{{ $contract->customer->ten_khach_hang_thanh_toan }}</td>
                                            <td><span class="label label-pink">{{ $contract->status }}</span></td>
                                            <td>{{ $contract->created_at }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div><!-- end col -->

                </div>
                <!-- end row -->

            </div> <!-- container -->

        </div> <!-- content -->
    </div>
@endsection
