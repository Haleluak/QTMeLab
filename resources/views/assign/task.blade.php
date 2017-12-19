@extends('layouts.app')

@section('styles')
    <link href="{{ asset('admin/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}"
          rel="stylesheet">
    <link href="{{ asset('admin/plugins/select2/dist/css/select2.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin/plugins/select2/dist/css/select2-bootstrap.css') }}" rel="stylesheet" type="text/css">
@endSection

@section('content')
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">
                <!-- end row -->

                <div class="row">

                    <div class="col-md-8">
                        <div class="card-box">
                            <h4 class="m-t-0 m-b-30 header-title">Thêm Chi tiêu cho mẫu</h4>
                            <form>
                                <div class="form-group">
                                    <label for="ten_khach_hang_thanh_toan" class="col-form-label">Chọn chỉ tiêu</label>
                                    <select class="form-control">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="assignTo" class="col-form-label"> Assign To </label>
                                    <select class="form-control select2" id="assignTo">
                                        <option>Select</option>
                                        <option value="CT">Connecticut</option>
                                        <option value="DE">Delaware</option>
                                        <option value="FL">Florida</option>
                                        <option value="GA">Georgia</option>
                                        <option value="IN">Indiana</option>
                                        <option value="ME">Maine</option>
                                        <option value="MD">Maryland</option>
                                        <option value="MA">Massachusetts</option>
                                        <option value="MI">Michigan</option>
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
                                <button type="submit" class="btn btn-primary">Create</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- end row -->

            </div> <!-- container -->

        </div> <!-- content -->
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('admin/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/select2/dist/js/select2.min.js') }}" type="text/javascript"></script>
    <script type="text/javascript" src="{{ asset('js/main.js')}}"></script>
@endsection

