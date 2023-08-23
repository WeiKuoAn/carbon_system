@extends('layouts.master')
@section('title')
    廠商列表
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
    廠商列表
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
                        <a href="#" data-bs-toggle="modal" data-bs-target=".add-new" class="btn btn-primary"><i
                                class="bx bx-plus me-1"></i>新增用戶</a>
                    </div>
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
                                <thead class="table-light">
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
                                                <li class="list-inline-item">
                                                    <a href="javascript:void(0);" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Edit" class="px-2 text-primary"><i
                                                            class="bx bx-pencil font-size-18"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="javascript:void(0);" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Delete" class="px-2 text-danger"><i
                                                            class="bx bx-trash-alt font-size-18"></i></a>
                                                </li>
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
        <!-- end row -->

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

        <!--  successfully modal  -->
        <div id="success-btn" class="modal fade" tabindex="-1" aria-labelledby="success-btnLabel" aria-hidden="true"
            data-bs-scroll="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="text-center">
                            <i class="bx bx-check-circle display-1 text-success"></i>
                            <h4 class="mt-3">User Added Successfully</h4>
                        </div>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <!--  Extra Large modal example -->
        <form action="{{ route('customer.store') }}" method="POST">
            @csrf
            <div class="modal fade add-new" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="myExtraLargeModalLabel">新增廠商</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="AddNew-Username">廠商名稱</label>
                                        <input type="text" class="form-control" name="name">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">公司規模</label>
                                        <select class="form-select" name="company_scale">
                                            <option value="0" selected>10人以下</option>
                                            <option value="1" selected>10人已上</option>
                                            <option value="2" selected>50人以上、100以下</option>
                                            <option value="3" selected>100人以上</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">行業別</label>
                                        <select class="form-select" name="industry_id">
                                            <option value="1" selected>鋼鐵業</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">上市櫃狀態</label>
                                        <select class="form-select" name="stock_status">
                                            <option value="0" selected>未上櫃,有以IPO為目標</option>
                                            <option value="1" >未上櫃,未來也無意上櫃</option>
                                            <option value="2" >已上櫃/已上市</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="AddNew-Phone">公司聯絡人姓名</label>
                                        <input type="text" class="form-control" name="primary_contact_name">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">銷售方向</label>
                                        <select class="form-select" name="sales_orientation">
                                            <option value="0" selected>B2B</option>
                                            <option value="1" >B2C</option>
                                            <option value="2" >B2G</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="AddNew-Phone">公司聯絡人職稱</label>
                                        <input type="text" class="form-control" name="contact_job">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="AddNew-Phone">銷售區域</label>
                                        <input type="text" class="form-control" name="sales_region">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="AddNew-Phone">公司聯絡人電話</label>
                                        <input type="text" class="form-control" name="primary_contact_phone">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="AddNew-Phone">成立日期</label>
                                        <input type="date" class="form-control" name="established_date">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="AddNew-Email">公司聯絡人信箱</label>
                                        <input type="email" class="form-control" name="primary_contact_email">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">營運狀態</label>
                                        <select class="form-select" name="operational_status">
                                            <option value="0" selected>正常營運</option>
                                            <option value="1" >暫停營運</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="AddNew-Phone">公司地址</label>
                                        <input type="text" class="form-control" name="primary_address">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">檢視權限</label>
                                        <select class="form-select" name="permission_status">
                                            <option value="0" selected>啟用</option>
                                            <option value="1" >禁用</option>
                                        </select>
                                    </div>
                                </div>
                               
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="AddNew-Phone">統一編號</label>
                                        <input type="text" class="form-control" name="business_registration_no">
                                    </div>
                                </div>
                                

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="AddNew-Phone">備註</label>
                                        <input type="text" class="form-control" name="note">
                                    </div>
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
