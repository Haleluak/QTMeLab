@extends('layouts.app')

@section('content')
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">
                <!-- end row -->

                <div class="row">
                    <div class="col-md-6">
                        <div class="card-box">
                            <h4 class="m-t-0 header-title"><b>Tạo nhóm</b></h4>

                            <form class="form-horizontal" role="form">
                                <div class="form-group">
                                    <label for="name" class="col-sm-3 control-label">name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="name" placeholder="name">
                                    </div>
                                </div>
                                <div class="form-group m-b-0">
                                    <div class="col-sm-offset-3 col-sm-9">
                                        <button type="submit" class="btn btn-info waves-effect waves-light">Create</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- end row -->

            </div> <!-- container -->

        </div> <!-- content -->
    </div>
@endsection
