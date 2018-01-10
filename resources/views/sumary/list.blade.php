@extends('layouts.app')

@section('content')
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">
                <!-- end row -->
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card-box project-box">
                            <div class="label label-success">Completed</div>
                            <h4 class="m-t-0 m-b-5"><a href="" class="text-inverse">New Admin Design</a></h4>

                            <p class="text-success text-uppercase m-b-20 font-13">Web Design</p>
                            <p class="text-muted font-13">Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. When an unknown printer took a galley of type and
                                scrambled it...<a href="#" class="font-600 text-muted">view more</a>
                            </p>

                            <ul class="list-inline">
                                <li>
                                    <h3 class="m-b-0">56</h3>
                                    <p class="text-muted">Questions</p>
                                </li>
                                <li>
                                    <h3 class="m-b-0">452</h3>
                                    <p class="text-muted">Comments</p>
                                </li>
                            </ul>

                            <div class="project-members m-b-20">
                                <span class="m-r-5 font-600">Team :</span>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mat Helme">
                                    <img src="assets/images/users/avatar-1.jpg" class="img-circle thumb-sm" alt="friend">
                                </a>

                                <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Michael Zenaty">
                                    <img src="assets/images/users/avatar-2.jpg" class="img-circle thumb-sm" alt="friend">
                                </a>

                                <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="James Anderson">
                                    <img src="assets/images/users/avatar-3.jpg" class="img-circle thumb-sm" alt="friend">
                                </a>

                                <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mat Helme">
                                    <img src="assets/images/users/avatar-4.jpg" class="img-circle thumb-sm" alt="friend">
                                </a>

                                <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Username">
                                    <img src="assets/images/users/avatar-5.jpg" class="img-circle thumb-sm" alt="friend">
                                </a>
                            </div>

                            <p class="font-600 m-b-5">Progress <span class="text-success pull-right">80%</span></p>
                            <div class="progress progress-bar-success-alt progress-sm m-b-5">
                                <div class="progress-bar progress-bar-success progress-animated wow animated animated" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%; visibility: visible; animation-name: animationProgress;">
                                </div><!-- /.progress-bar .progress-bar-danger -->
                            </div><!-- /.progress .no-rounded -->

                        </div>
                    </div>
                </div>
                <!-- end row -->

            </div> <!-- container -->

        </div> <!-- content -->
    </div>
@endsection