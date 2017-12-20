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
                                        <a href="#create-assign-modal" data-animation="fadein" data-plugin="custommodal"
                                           data-overlayspeed="200" data-overlaycolor="#36404a"> Thêm chỉ tiêu</a>
                                    </li>
                                </ul>
                            </div>
                            <h4 class="header-title m-t-0 m-b-30"> Danh sách chỉ tiêu</h4>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Tên chỉ tiêu</th>
                                        <th>Nhóm</th>
                                        <th>Người làm</th>
                                        <th>Ngày bắt đầu</th>
                                        <th>Ngày kết Thúc</th>
                                        <th style="width: 102px"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td> 12</td>
                                        <td>01/01/2016</td>
                                        <td>
                                            <div class="assign-team">
                                                <div>
                                                    <a href="#"> <img class="img-circle thumb-sm" alt="64x64"
                                                                      src="http://coderthemes.com/adminto/light/assets/images/users/avatar-5.jpg">
                                                    </a>
                                                    <a href="#"> <img class="img-circle thumb-sm" alt="64x64"
                                                                      src="http://coderthemes.com/adminto/light/assets/images/users/avatar-3.jpg">
                                                    </a>
                                                    <a href="#"> <img class="img-circle thumb-sm" alt="64x64"
                                                                      src="http://coderthemes.com/adminto/light/assets/images/users/avatar-5.jpg">
                                                    </a>
                                                    <a href="#"> <img class="img-circle thumb-sm" alt="64x64"
                                                                      src="http://coderthemes.com/adminto/light/assets/images/users/avatar-8.jpg">
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td><span class="label label-danger">Released</span></td>
                                        <td>01/01/2016</td>
                                        <td class="actions">
                                            <a href="{{ route('assign.task') }}" class="btn btn-sm btn-info"><i
                                                        class="glyphicon glyphicon-pencil"></i></a>
                                            <a class="btn btn-sm btn-danger"><i
                                                        class="glyphicon glyphicon-trash"></i></a>
                                        </td>
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
    <div id="create-assign-modal" class="modal-demo">
        <button type="button" class="close" onclick="Custombox.close();">
            <span>&times;</span><span class="sr-only">Close</span>
        </button>
        <h4 class="custom-modal-title">Thêm mẫu</h4>
        <div class="custom-modal-text text-left">
            <form role="form" method="post" action="{{ route('sample.create') }}">
                <div class="form-group">
                    <label for="ten_khach_hang_thanh_toan" class="col-form-label">Chọn chỉ tiêu</label>
                    <select class="form-control select2">
                        <option value=1>SML</option>
                        <option value=2>DGB</option>
                        <option value=3>SC</option>
                        <option value=4>VOX</option>
                        <option value=5>LMC</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="group" class="col-form-label">Chọn nhóm</label>
                    <select class="form-control">
                        <option>Chọn nhóm</option>
                        @foreach($groups as $group)
                            <option value="{{ $group->id }}">{{ $group->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="assignTo" class="col-form-label"> Assign To </label>
                    <select class="form-control" id="assignTo">
                        <option>Select</option>
                    </select>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="Sdate" class="col-form-label"> Start Date </label>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="mm/dd/yyyy"
                                   id="Sdate">
                            <span class="input-group-addon bg-primary b-0 text-white"><i
                                        class="ti-calendar"></i></span>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="Edate" class="col-form-label"> End Date </label>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="mm/dd/yyyy"
                                   id="Edate">
                            <span class="input-group-addon bg-primary b-0 text-white"><i
                                        class="ti-calendar"></i></span>
                        </div>
                    </div>
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

