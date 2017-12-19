@extends('layouts.app')

@section('content')
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">
                <!-- end row -->

                <div class="row">

                    <div class="col-md-12">
                        <div class="card-box">
                            <h4 class="m-t-0 m-b-30 header-title">Thông tin khách hàng</h4>
                            <form>
                                <div class="form-group">
                                    <label for="ten_khach_hang_thanh_toan" class="col-form-label">Ten Khach Hang Thanh Toan</label>
                                    <input type="text" class="form-control" id="ten_khach_hang_thanh_toan" placeholder="1234 Main St"
                                           value="{{ isset($contract->customer->ten_khach_hang_thanh_toan) ? $contract->customer->ten_khach_hang_thanh_toan : '' }}">
                                </div>
                                <div class="form-group">
                                    <label for="dia_chi_khach_hang_thanh_toan" class="col-form-label">Dia Chi Khach Hang Thanh Toan</label>
                                    <input type="text" class="form-control" id="dia_chi_khach_hang_thanh_toan" placeholder="1234 Main St"
                                           value="{{ isset($contract->customer->dia_chi_khach_hang_thanh_toan) ? $contract->customer->dia_chi_khach_hang_thanh_toan : '' }}">
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="so_dien_thoai" class="col-form-label">So Dien Thoai</label>
                                        <input type="text" class="form-control" id="so_dien_thoai" placeholder="0163xxxx"
                                               value="{{ isset($contract->customer->so_dien_thoai) ? $contract->customer->so_dien_thoai : '' }}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="ma_so_thue" class="col-form-label">Ma So Thue</label>
                                        <input type="text" class="form-control" id="ma_so_thue"
                                               value="{{ isset($contract->customer->ma_so_thue) ? $contract->customer->ma_so_thue : '' }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="khach_hang_ket_qua" class="col-form-label">Khach Hang Ket Qua</label>
                                    <input type="text" class="form-control" id="khach_hang_ket_qua" placeholder="1234 Main St"
                                           value="{{ isset($contract->customer->khach_hang_ket_qua) ? $contract->customer->khach_hang_ket_qua : '' }}">
                                </div>
                                <div class="form-group">
                                    <label for="dia_chi_khach_hang_ket_qua" class="col-form-label">Dia Chi Khach Hang Kết quả</label>
                                    <input type="text" class="form-control" id="dia_chi_khach_hang_ket_qua" placeholder="1234 Main St"
                                           value="{{ isset($contract->customer->dia_chi_khach_hang_ket_qua) ? $contract->customer->dia_chi_khach_hang_ket_qua : '' }}">
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card-box">
                            <div class="dropdown pull-right">
                                <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                                    <i class="zmdi zmdi-more-vert"></i>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ route('assign.task') }}">Thêm Chỉ Tiêu</a></li>
                                </ul>
                            </div>
                            <h4 class="header-title m-t-0 m-b-30"> Tên Mẫu: Nước</h4>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Tên Chỉ Tiêu</th>
                                        <th>Phương pháp thử</th>
                                        <th>Người làm</th>
                                        <th>Ngày bắt đầu</th>
                                        <th>Ngày kết Thúc</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Adminto Admin v1</td>
                                        <td>01/01/2016</td>
                                        <td>
                                            <div class="assign-team">
                                                <div>
                                                    <a href="#"> <img class="img-circle thumb-sm" alt="64x64" src="http://coderthemes.com/adminto/light/assets/images/users/avatar-5.jpg"> </a>
                                                    <a href="#"> <img class="img-circle thumb-sm" alt="64x64" src="http://coderthemes.com/adminto/light/assets/images/users/avatar-3.jpg"> </a>
                                                    <a href="#"> <img class="img-circle thumb-sm" alt="64x64" src="http://coderthemes.com/adminto/light/assets/images/users/avatar-5.jpg"> </a>
                                                    <a href="#"> <img class="img-circle thumb-sm" alt="64x64" src="http://coderthemes.com/adminto/light/assets/images/users/avatar-8.jpg"> </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td><span class="label label-danger">Released</span></td>
                                        <td>01/01/2016</td>
                                    </tr>
                                    <tr>
                                        <td>Adminto Frontend v1</td>
                                        <td>01/01/2016</td>
                                        <td>26/04/2016</td>
                                        <td><span class="label label-success">Released</span></td>
                                        <td>Adminto admin</td>
                                    </tr>
                                    <tr>
                                        <td>Adminto Admin v1.1</td>
                                        <td>01/05/2016</td>
                                        <td>10/05/2016</td>
                                        <td><span class="label label-pink">Pending</span></td>
                                        <td>Coderthemes</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

            </div> <!-- container -->

        </div> <!-- content -->
    </div>
@endsection
