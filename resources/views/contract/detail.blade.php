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
                                    <label for="ten_khach_hang_thanh_toan" class="col-form-label">Ten Khach Hang Thanh
                                        Toan</label>
                                    <input type="text" class="form-control" id="ten_khach_hang_thanh_toan"
                                           placeholder="1234 Main St"
                                           value="{{ isset($contract->customer->ten_khach_hang_thanh_toan) ? $contract->customer->ten_khach_hang_thanh_toan : '' }}">
                                </div>
                                <div class="form-group">
                                    <label for="dia_chi_khach_hang_thanh_toan" class="col-form-label">Dia Chi Khach Hang
                                        Thanh Toan</label>
                                    <input type="text" class="form-control" id="dia_chi_khach_hang_thanh_toan"
                                           placeholder="1234 Main St"
                                           value="{{ isset($contract->customer->dia_chi_khach_hang_thanh_toan) ? $contract->customer->dia_chi_khach_hang_thanh_toan : '' }}">
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="so_dien_thoai" class="col-form-label">So Dien Thoai</label>
                                        <input type="text" class="form-control" id="so_dien_thoai"
                                               placeholder="0163xxxx"
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
                                    <input type="text" class="form-control" id="khach_hang_ket_qua"
                                           placeholder="1234 Main St"
                                           value="{{ isset($contract->customer->khach_hang_ket_qua) ? $contract->customer->khach_hang_ket_qua : '' }}">
                                </div>
                                <div class="form-group">
                                    <label for="dia_chi_khach_hang_ket_qua" class="col-form-label">Dia Chi Khach Hang
                                        Kết quả</label>
                                    <input type="text" class="form-control" id="dia_chi_khach_hang_ket_qua"
                                           placeholder="1234 Main St"
                                           value="{{ isset($contract->customer->dia_chi_khach_hang_ket_qua) ? $contract->customer->dia_chi_khach_hang_ket_qua : '' }}">
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card-box">
                            <div class="dropdown pull-right">
                                <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"
                                   aria-expanded="false">
                                    <i class="zmdi zmdi-more-vert"></i>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="#create-sample-modal" data-animation="fadein" data-plugin="custommodal"
                                           data-overlayspeed="200" data-overlaycolor="#36404a"> Thêm mẫu</a>
                                    </li>
                                </ul>
                            </div>
                            <h4 class="header-title m-t-0 m-b-30"> Danh sách mẫu thuộc hợp
                                đồng {{ $contract->so_hop_dong }}</h4>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Stt</th>
                                        <th>Tên Mẫu</th>
                                        <th>Chỉ Tieu</th>
                                        <th>Phân loại</th>
                                        <th>Ngày bắt đầu</th>
                                        <th>Ngày kết Thúc</th>
                                        <th>Note</th>
                                        <th style="width: 102px"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($contract->samples as $key=>$sample)
                                        <tr>
                                            <td>{{$key +1 }}</td>
                                            <td>{{ $sample->name }}</td>
                                            <td>
                                                @if($sample->specifications->count())
                                                    <a href="{{ route('assign.task', ['sample_id' => $sample->id, 'contract_id' => $contract->id ]) }}">
                                                        {{ $sample->specifications->implode('name', ', ')  }}
                                                    </a>
                                                @else
                                                    <a href="{{ route('assign.task', ['sample_id' => $sample->id]) }}">
                                                        Thêm Chỉ Tiêu
                                                    </a>
                                                @endif
                                            </td>
                                            <td>{{  $sample->category }}</td>
                                            <td>{{  $sample->created_at }}</td>
                                            <td>{{  $sample->updated_at }}</td>
                                            <td>{{  $sample->note }}</td>
                                            <td class="actions">
                                                <a href="{{ route('assign.task', ['sample_id' => $sample->id]) }}"
                                                   class="btn btn-sm btn-info"><i
                                                            class="glyphicon glyphicon-pencil"></i></a>
                                                <a class="btn btn-sm btn-danger"><i
                                                            class="glyphicon glyphicon-trash"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
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
    <div id="create-sample-modal" class="modal-demo">
        <button type="button" class="close" onclick="Custombox.close();">
            <span>&times;</span><span class="sr-only">Close</span>
        </button>
        <h4 class="custom-modal-title">Thêm mẫu</h4>
        <div class="custom-modal-text text-left">
            <form role="form" method="post" action="{{ route('sample.create') }}">
                <div class="form-group">
                    <label for="name">Tên mẫu</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter name">
                </div>
                <div class="form-group">
                    <label for="category">Phân loại</label>
                    <input type="text" class="form-control" name="category" placeholder="loại">
                </div>
                <div class="form-group">
                    <label for="quantity">Số Lượng mẫu</label>
                    <input type="text" class="form-control" name="quantity" placeholder="Số lượng mẫu" value="1">
                </div>
                <div class="form-group">
                    <label for="note">Ghi Chú</label>
                    <textarea class="form-control" name="note" rows="3"></textarea>
                </div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="contract_id" value="{{ $contract->id }}">
                <button type="submit" class="btn btn-success waves-effect waves-light">Save</button>
            </form>
        </div>
    </div>
@endsection
