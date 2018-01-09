@extends('layouts.app')
@section('styles')
    <link href="{{ asset('admin/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}"
          rel="stylesheet">
    <link href="{{ asset('admin/plugins/select2/dist/css/select2.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin/plugins/select2/dist/css/select2-bootstrap.css') }}" rel="stylesheet" type="text/css">
    <style>
        .select2-drop {
            z-index: 99999;
        }

        .select2-drop-mask {
            z-index: 99998;
        }
    </style>
@endSection
@section('content')
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">
                <!-- end row -->

                <div class="row">
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
                                           data-overlayspeed="200" data-overlaycolor="#36404a"> Thêm Chỉ Tiêu</a>
                                    </li>
                                </ul>
                            </div>
                            <h4 class="header-title m-t-0 m-b-30"> Danh sách mẫu</h4>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Tên Chỉ tiêu</th>
                                        <th>Quy Chuẩn</th>
                                        <th>Nhóm</th>
                                        <th>Thành Viên</th>
                                        <th style="width: 102px"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($specifications as $specification)
                                        <tr>
                                            <td>
                                                <a href="{{ url('/group/view/' .$specification->id) }}">{{ $specification->name }}</a>
                                            </td>
                                            <td>{{ $specification->regulation['name'] }}</td>
                                            <td>{{ $specification->group['name'] }}</td>
                                            <td>{{ $specification->member['name'] }}</td>
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
    --<div id="create-sample-modal" class="modal-demo">
        <button type="button" class="close" onclick="Custombox.close();">
            <span>&times;</span><span class="sr-only">Close</span>
        </button>
        <h4 class="custom-modal-title">Thêm Chỉ tiêu</h4>
        <div class="custom-modal-text text-left">
            <form role="form" method="post" action="{{ route('sample.create') }}">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter name">
                </div>
                <div class="form-group">
                    <label for="ten_khach_hang_thanh_toan" class="col-form-label">Chọn Tieu Chuan</label>
                    <select class="form-control select2">
                        <option>Chọn Tieu chuan</option>
                        @foreach($regulations as $regulation)
                            <option value="{{ $regulation->id }}">{{ $regulation->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="group" class="col-form-label">Chọn nhóm</label>
                    <select class="form-control" id="group_lab">
                        @foreach($groups as $group)
                            <option value="{{ $group->id }}">{{ $group->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="assignTo" class="col-form-label"> Assign To </label>
                    <select class="form-control" id="assignTo">
                        <option>Select</option>
                        @foreach($members as $member)
                            <option value="{{ $member->id }}">{{ $member->name }}</option>
                        @endforeach
                    </select>
                </div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="contract_id" value="3">
                <button type="submit" class="btn btn-success waves-effect waves-light">Save</button>
            </form>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('admin/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/select2/dist/js/select2.min.js') }}" type="text/javascript"></script>
    <script type="text/javascript" src="{{ asset('js/main.js')}}"></script>
@endsection
