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
                <form role="form" method="post" action="{{ route('assgin.add') }}">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box">
                                <div class="row">
                                    <div class="col-lg-12">

                                        <ul class="nav nav-tabs">
                                            @foreach($groups as $key=>$group)
                                                <li role="presentation" class="{{ $key == 0 ? "active" : "" }}">
                                                    <a href="#{{ str_slug($group->name, "-")}}" role="tab"
                                                       data-toggle="tab"
                                                       aria-expanded="{{ $key == 0 ? "false" : "true" }}">{{ $group->name }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                        <div class="tab-content">
                                            @foreach($groups as $key=>$group)
                                                <div role="tabpanel"
                                                     class="tab-pane fade {{ $key == 0 ? 'active in' :''}}"
                                                     id="{{ str_slug($group->name, "-")}}">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-6">
                                                                @foreach($group->spectifications as $specification )
                                                                    <div class="col-sm-4">
                                                                        <div class="checkbox checkbox-success">
                                                                            <input value="{{ $specification->id }}"
                                                                                   name="specification_ids[]"
                                                                                   id="checkbox-{{str_slug($specification->name, "-")  }}"
                                                                                   type="checkbox"
                                                                                   class="{{str_slug($specification->regulation['name'] , "-") }}">
                                                                            <label for="checkbox-{{str_slug($specification->name, "-") }}">
                                                                                {{ $specification->name }}
                                                                            </label>
                                                                        </div>
                                                                    </div><!-- end col -->
                                                                @endforeach
                                                        </div>
                                                        <div class="col-md-4">
                                                            <h4 class="card-title">Quy Chuẩn</h4>
                                                            @foreach($group->regulations as $regulation )
                                                                <div class="checkbox checkbox-success rerulation">
                                                                    <input id="{{str_slug($regulation->name, "-") }}"
                                                                           type="checkbox"
                                                                           value="{{ $regulation->id }}">
                                                                    <label for="{{str_slug($regulation->name, "-") }}">
                                                                        {{ $regulation->name }}
                                                                    </label>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div><!-- end col -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <button type="submit" class="btn btn-success waves-effect waves-light m-l-10 btn-md">Hoàn Thành
                        </button>
                    </div>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="sample_id" value="{{ $_GET['sample_id'] }}">
                </form>
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

