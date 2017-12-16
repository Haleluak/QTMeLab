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

                </div>
                <!-- end row -->

            </div> <!-- container -->

        </div> <!-- content -->
    </div>
@endsection
