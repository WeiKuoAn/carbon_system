@extends('layouts.master')
@section('title')
    職稱設定
@endsection
@section('css')
    <!-- choices css -->
    <link href="{{ URL::asset('build/libs/choices.js/public/assets/styles/choices.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- color picker css -->
    <link rel="stylesheet" href="{{ URL::asset('build/libs/@simonwep/pickr/themes/classic.min.css') }}" /> <!-- 'classic' theme -->
    <link rel="stylesheet" href="{{ URL::asset('build/libs/@simonwep/pickr/themes/monolith.min.css') }}" /> <!-- 'monolith' theme -->
    <link rel="stylesheet" href="{{ URL::asset('build/libs/@simonwep/pickr/themes/nano.min.css') }}" /> <!-- 'nano' theme -->

    <!-- datepicker css -->
    <link rel="stylesheet" href="{{ URL::asset('build/libs/flatpickr/flatpickr.min.css') }}">
@endsection
@section('page-title')
    職稱設定
@endsection
@section('body')

    <body>
    @endsection
    @section('content')
    <div class="row align-items-center">
            <div class="col-md-6">
                {{-- <div class="mb-3">
                    <h5 class="card-title">Contact List <span class="text-muted fw-normal ms-2">(834)</span></h5>
                </div> --}}
            </div>

            <div class="col-md-6 mt-3">
                <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">
                    <div>
                        <a href="#" data-bs-toggle="modal" data-bs-target=".add-new" class="btn btn-primary">
                        <i class="bx bx-plus me-1"></i>新增職稱</a>
                    </div>
                    <!--
                    <div>
                        <a href="#" data-bs-toggle="modal" data-bs-target=".add-new" class="btn btn-primary">
                        <i class="bx bx-plus me-1"></i>修改職稱</a>
                    </div>
                    <div>
                        <a href="#" data-bs-toggle="modal" data-bs-target=".add-new" class="btn btn-primary">
                        <i class="bx bx-plus me-1"></i>刪除職稱</a>
                    </div>
                    -->
                    <!-- The part below here is a comment out
                    {{-- <div class="dropdown">
                        <a class="btn btn-link text-muted py-1 font-size-16 shadow-none dropdown-toggle" href="#"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bx bx-dots-horizontal-rounded"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div> --}}
                    -->
                </div>

            </div>
        </div>

        <!-- end row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-nowrap align-middle">
                            <!-- Table head and body-->
                                <thead class="table-light">
                                    <!-- row 1 includes checkbox, Name, Position, Email, Projects, Action -->
                                    <tr>
                                        <th scope="col" class="ps-4" style="width: 50px;">
                                            <div class="form-check font-size-16">
                                                <input type="checkbox" class="form-check-input" id="contacusercheck">
                                                <label class="form-check-label" for="contacusercheck"></label>
                                            </div>
                                        </th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Position</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Projects</th>
                                        <th scope="col" style="width: 200px;">Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <th scope="row" class="ps-4">
                                            <div class="form-check font-size-16">
                                                <input type="checkbox" class="form-check-input" id="contacusercheck1">
                                                <label class="form-check-label" for="contacusercheck1"></label>
                                            </div>
                                        </th>
                                        <td>
                                            <img src="{{ URL::asset('build/images/users/avatar-2.jpg') }}" alt=""
                                                class="avatar rounded-circle img-thumbnail me-2">
                                            <a href="#" class="text-body">Simon Ryles</a>
                                        </td>
                                        <td><span class="badge badge-soft-success mb-0">Full Stack Developer</span></td>
                                        <td>SimonRyles@minible.com</td>
                                        <td>125</td>
                                        <td>
                                            <ul class="list-inline mb-0">
                                                <!-- context button -->
                                                <li class="list-inline-item">
                                                    <a href="javascript:void(0);" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Edit" class="px-2 text-primary"><i
                                                            class="bx bx-pencil font-size-18"></i></a>
                                                </li>
                                                <!-- Trash bin button-->
                                                <li class="list-inline-item">
                                                    <a href="javascript:void(0);" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Delete" class="px-2 text-danger"><i
                                                            class="bx bx-trash-alt font-size-18"></i></a>
                                                </li>
                                                <!-- dots -->
                                                <li class="list-inline-item dropdown">
                                                    <a class="text-muted dropdown-toggle font-size-18 px-2" href="#"
                                                        role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                    </a>

                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!--  
        <div class="row g-0 align-items-center pb-4">
            <div class="col-sm-6">
                <div>
                    {{-- <p class="mb-sm-0">Showing 1 to 10 of 57 entries</p> --}}
                </div>
            </div>
            <div class="col-sm-6">
                <div class="float-sm-end">
                    <ul class="pagination mb-sm-0">
                        <li class="page-item disabled">
                            <a href="#" class="page-link"><i class="mdi mdi-chevron-left"></i></a>
                        </li>
                        <li class="page-item active">
                            <a href="#" class="page-link">1</a>
                        </li>
                        <li class="page-item">
                            <a href="#" class="page-link">2</a>
                        </li>
                        <li class="page-item">
                            <a href="#" class="page-link">3</a>
                        </li>
                        <li class="page-item">
                            <a href="#" class="page-link">4</a>
                        </li>
                        <li class="page-item">
                            <a href="#" class="page-link">5</a>
                        </li>
                        <li class="page-item">
                            <a href="#" class="page-link"><i class="mdi mdi-chevron-right"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end row -->


        </div>
        <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
        <form action="{{ route('job.store') }}" method="POST">
            @csrf
            <div class="modal fade add-new" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="myExtraLargeModalLabel">新增職稱</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="AddNew-Username">職稱名稱</label>
                                        <input type="text" class="form-control" name="name">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="AddNew-Username">公司ID</label>
                                        <input type="text" class="form-control" name="company_ID">
                                    </div>
                                </div>    

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="AddNew-Username">部們ID</label>
                                        <input type="text" class="form-control" name="department_ID">
                                    </div>
                                </div>    

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="AddNew-Phone">職稱簡介</label>
                                        <input type="text" class="form-control" name="memo">
                                    </div>
                                </div>

                            <div class="row mt-2">
                                <div class="col-12 text-end">
                                    <button type="button" class="btn btn-danger me-1" data-bs-dismiss="modal"><i
                                            class="bx bx-x me-1 align-middle"></i>取消</button>
                                    <button type="submit" class="btn btn-success" data-bs-toggle="modal"
                                        data-bs-target="#success-btn" id="btn-save-event"><i
                                            class="bx bx-check me-1 align-middle"></i>確認</button>
                                </div>
                            </div>

                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
        </form>    
    
    @endsection
    @section('scripts')
        <!-- choices js -->
        <script src="{{ URL::asset('build/libs/choices.js/public/assets/scripts/choices.min.js') }}"></script>

        <!-- color picker js -->
        <script src="{{ URL::asset('build/libs/@simonwep/pickr/pickr.min.js') }}"></script>
        <script src="{{ URL::asset('build/libs/@simonwep/pickr/pickr.es5.min.js') }}"></script>

        <!-- datepicker js -->
        <script src="{{ URL::asset('build/libs/flatpickr/flatpickr.min.js') }}"></script>

        <!-- init js -->
        <script src="{{ URL::asset('build/js/pages/form-advanced.init.js') }}"></script>
        <!-- App js -->
        <script src="{{ URL::asset('build/js/app.js') }}"></script>
    @endsection


