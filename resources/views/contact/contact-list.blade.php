@extends('layout.main')

@section('style')
    <!-- Plugins -->
    <link rel="stylesheet" href="../../assets/examples/css/tables/basic.css">

    <style>
        .icon-wrap > .icon {
            font-size: 65px;
        }

        /* Important part */
        #modalCreate .modal-dialog{
            overflow-y: initial !important
        }
        #modalCreate .modal-body{
            height: 80vh;
            overflow-y: auto;
        }
    </style>
@endsection

@section('content')
    <div class="page">
        <div class="page-header">
            <h1 class="page-title">ผู้ติดต่อ</h1>
            <div class="page-header-actions">
                <button type="button" class="btn btn-primary btn-round" data-target="#modalCreate" data-toggle="modal">
                    เพิ่มผู้ติดต่อใหม่
                </button>
            </div>
            <div class="row no-gutters mt-20">
                <div class="col-md-6 col-lg-4">
                    <div class="input-search">
                        <i class="input-search-icon md-search" aria-hidden="true"></i>
                        <input type="text" class="form-control" name="" placeholder="พิมพ์คำค้นหา">
                        <button type="button" class="input-search-close icon md-close" aria-label="Close"></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-content container-fluid">
            <!-- Panel Input Groups -->
            <div class="panel">
                <div class="panel-body container-fluid p-0">
                    <div class="row row-lg">
                        <div class="col-lg-12">
                            @include('contact.modal')
                            <div class="table-responsive">
                                <table class="table table-striped mb-0">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>รหัส</th>
                                        <th>ชื่อ</th>
                                        <th>เลขประจำตัวผู้เสียภาษี</th>
                                        <th>เบอร์โทรศัพท์</th>
                                        <th>อีเมล</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>C0001</td>
                                        <td>
                                            <a href="/contact/detail">บริษัท ABC จำกัด</a>
                                            <div class="d-block">
                                                <small class="mt-0 mb-5"><i class="icon bd-facebook mr-10"></i>Your Facebook</small>
                                            </div>
                                            <div class="d-block">
                                                <small class="mt-0 mb-5"><img src="/assets/images/line.png" width="15" class="mr-10">Your Line</small>
                                            </div>
                                        </td>
                                        <td>1234567890123</td>
                                        <td>024567890</td>
                                        <td>you@maxheathshop.com</td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-default" data-toggle="tooltip"
                                                    data-original-title="Edit" onclick="location.href='/contact/edit'">
                                                <i class="icon md-edit" aria-hidden="true"></i>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                                                    data-target="#modalDelete" data-toggle="modal">
                                                <i class="icon md-delete" aria-hidden="true"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>C0002</td>
                                        <td>
                                            <a href="/contact/detail">บริษัท Shippop จำกัด</a>
                                            <div class="d-block">
                                                <small class="mt-0 mb-5"><i class="icon bd-facebook mr-10"></i>Your Facebook</small>
                                            </div>
                                            <div class="d-block">
                                                <small class="mt-0 mb-5"><img src="/assets/images/line.png" width="15" class="mr-10">Your Line</small>
                                            </div>
                                        </td>
                                        <td>1234567890123</td>
                                        <td>034567890</td>
                                        <td>you@maxheathshop.com</td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-default" data-toggle="tooltip"
                                                    data-original-title="Edit" onclick="location.href='/contact/edit'">
                                                <i class="icon md-edit" aria-hidden="true"></i>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                                                    data-target="#modalDelete" data-toggle="modal">
                                                <i class="icon md-delete" aria-hidden="true"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <!-- Plugins -->
    <script src="../../../global/vendor/peity/jquery.peity.min.js"></script>

    <!-- Page -->
    <script src="../../../global/js/Plugin/peity.js"></script>
    <script src="../../../global/js/Plugin/asselectable.js"></script>
    <script src="../../../global/js/Plugin/selectable.js"></script>
    <script src="../../../global/js/Plugin/table.js"></script>

    <script src="../../assets/examples/js/charts/peity.js"></script>
@endsection
