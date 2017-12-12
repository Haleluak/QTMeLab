@extends('layouts.app')
<link href="{{ asset('admin/plugins/fileuploads/css/dropify.min.css') }}" rel="stylesheet" type="text/css" />
@section('content')
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">
                <!-- end row -->

                <div class="row">
                    <div class="col-md-6">
                        <form role="form" action="{{url('importExcel')}}" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <div class="card-box">
                                    <h4 class="header-title m-t-0 m-b-30">Max File size</h4>
                                    <input type="file" class="dropify" data-max-file-size="1M" name="imported-file"/>
                                </div>
                            </div>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" >
                            <button type="submit" class="btn btn-purple waves-effect waves-light">Submit</button>
                        </form>
                    </div><!-- end col -->

                </div>
                <!-- end row -->

            </div> <!-- container -->

        </div> <!-- content -->

        <footer class="footer text-right">
            2016 - 2017 © Adminto.
        </footer>

    </div>
@endsection