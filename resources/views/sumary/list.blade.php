@extends('layouts.app')

@section('styles')
    <link href="{{ asset('admin/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}"
          rel="stylesheet">
    <style>
        .typeahead, .tt-query, .tt-hint {
            border: 2px solid #CCCCCC;
            border-radius: 8px;
            font-size: 22px; /* Set input font size */
            height: 30px;
            line-height: 30px;
            outline: medium none;
            padding: 8px 12px;
            width: 396px;
        }

        .typeahead {
            background-color: #FFFFFF;
        }

        .typeahead:focus {
            border: 2px solid #0097CF;
        }

        .tt-query {
            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
        }

        .tt-hint {
            color: #999999;
        }

        .tt-menu {
            background-color: #FFFFFF;
            border: 1px solid rgba(0, 0, 0, 0.2);
            border-radius: 8px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
            margin-top: 12px;
            padding: 8px 0;
            width: 422px;
        }

        .tt-suggestion {
            font-size: 14px; /* Set suggestion dropdown font size */
            padding: 3px 20px;
        }

        .tt-suggestion:hover {
            cursor: pointer;
            background-color: #0097CF;
            color: #FFFFFF;
        }

        .tt-suggestion p {
            margin: 0;
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
                    <div class="col-lg-6">
                        <div class="card-box">
                            <form role="form" class="form-inline" method="GET"  action="{{ route('sumary.search') }}">
                                <div class="form-group">
                                    <input type="text" class="form-control typeahead tt-query" id="contract_code"
                                           name="contract_code"
                                           placeholder="Mã hop đồng" value="{{ isset($_GET['contract_code']) ? $_GET['contract_code'] : '' }}">
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="mm/dd/yyyy"
                                               id="datepicker" name="due_day" value="{{ isset($_GET['due_day']) ? $_GET['due_day'] : '' }}">
                                        <span class="input-group-addon bg-primary b-0 text-white"><i
                                                    class="ti-calendar"></i></span>
                                    </div><!-- input-group -->
                                </div>
                                <button type="submit" class="btn btn-success">Search</button>
                            </form>
                        </div>
                    </div><!-- end col -->
                </div>
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
                                        <th>Nhóm làm</th>
                                        <th>Status</th>
                                        <th>Ngày Trả hợp đồng</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($contracts as $contract)
                                        <tr>
                                            <td>
                                                <a href="{{ url('/contract/view/' .$contract->id) }}">{{ $contract->so_hop_dong }}</a>
                                            </td>
                                            <td>
                                                @if(isset($contract->sumary))
                                                    <a href="">
                                                        {{ implode(", ",array_column($contract->sumary, 'group_name')) }}
                                                    </a>
                                                @else
                                                    chưa có
                                                @endif
                                            </td>
                                            <td>
                                                <span class="label {{ $contract->status == 'pending' ? 'label-danger' : 'label-purple'}}">{{ $contract->status }}</span>
                                            </td>
                                            <td>{{ $contract->ngay_lap_hd }}</td>
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
@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/corejs-typeahead/1.2.1/typeahead.bundle.min.js"></script>
    <script src="{{ asset('admin/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
    <script>
        $(document).ready(function () {
            // Defining the local dataset
            var cars = ['KT3-00061MT6/L2', 'KT3-00183BMT7', 'KT3-00506BMT7', 'KT3-00787MT4', 'KT3-01864BMT7', 'KT3-02391MT4', 'KT3-02697MT4', 'KT3-03298AMT7', 'Rolls-Royce', 'Volkswagen'];

            // Constructing the suggestion engine
            var cars = new Bloodhound({
                datumTokenizer: Bloodhound.tokenizers.whitespace,
                queryTokenizer: Bloodhound.tokenizers.whitespace,
                local: cars
            });

            // Initializing the typeahead
            $('.typeahead').typeahead({
                    hint: true,
                    highlight: true, /* Enable substring highlighting */
                    minLength: 1 /* Specify minimum characters required for showing result */
                },
                {
                    name: 'cars',
                    source: cars
                });
            $('#datepicker').datepicker();
        });
    </script>
@endsection
