@extends('layouts.app')

@section('content')
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">
                <!-- end row -->
                <div class="row">
                    <div class="col-xl-4">
                        <a href="#create-regulation-modal" class="btn btn-success btn-md waves-effect waves-light m-b-30" data-animation="fadein" data-plugin="custommodal" data-overlayspeed="200" data-overlaycolor="#36404a"><i class="md md-add"></i> Tạo Quy Chuẩn</a>
                    </div><!-- end col -->
                </div>
                <div class="row">

                    <div class="col-lg-12">
                        <div class="card-box">

                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>name</th>
                                        <th>Created date</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($regulations as $regulation)
                                        <tr>
                                            <td><a href="{{ url('/group/view/' .$regulation->id) }}">{{ $regulation->name }}</a></td>
                                            <td>{{ $regulation->created_at }}</td>
                                            <td style="white-space: nowrap">
                                                <a href="javascript:void(0)" class="btn-edit-membership"
                                                   data-id="{{ $regulation->id }}" data-action="{{ route('group.add') }}"
                                                   title="Edit">
                                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                </a>
                                                |
                                                <a href="javascript:void(0)" data-id="{{ $regulation->id }}"
                                                   class="btn-delete-membership" title="Trash">
                                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                                </a>
                                            </td>

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
    <div id="create-regulation-modal" class="modal-demo">
        <button type="button" class="close" onclick="Custombox.close();">
            <span>&times;</span><span class="sr-only">Close</span>
        </button>
        <h4 class="custom-modal-title">Tạo Quy Chuẩn</h4>
        <div class="custom-modal-text text-left">
            <form role="form" method="post" action="{{ route('regulation.create') }}">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter name">
                </div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}" >
                <button type="submit" class="btn btn-success waves-effect waves-light">Save</button>
            </form>
        </div>
    </div>
@endsection