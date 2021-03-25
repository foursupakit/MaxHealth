@extends('layout.main')

@section('style')
    <!-- Plugins -->
    <link rel="stylesheet" href="../../assets/examples/css/tables/basic.css">

    <style>
        .icon-wrap > .icon {
            font-size: 65px;
        }
    </style>
@endsection

@section('content')
    <div class="page">
        <div class="page-header">
            <h1 class="page-title">ช่องทางจัดส่ง</h1>
            <span class="panel-desc">จำนวน 3 รายการ</span>
            <div class="page-header-actions">
                <button type="button" class="btn btn-primary btn-round btn-lg" data-target="#modalCreateTransport" data-toggle="modal">
                    เพิ่มช่องทางจัดส่ง
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
                @include('setting.modal')
                <div class="panel-body container-fluid p-0">
                    <div class="row row-lg">
                        <div class="col-lg-12">
                            <div class="table-responsive">
                                <table class="table table-striped mb-0">
                                    <thead>
                                    <tr>
                                        <th width="40%">รายการช่องทางจัดส่ง</th>
                                        <th>ค่าส่งพื้นฐาน</th>
                                        <th>+ต่อชิ้น</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>ไปรษณีย์ไทย</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                                                    data-target="#modalEditTransport" data-toggle="modal">
                                                <i class="icon md-edit" aria-hidden="true"></i>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                                                    data-target="#modalDeleteTransport" data-toggle="modal">
                                                <i class="icon md-delete" aria-hidden="true"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Kerry</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                                                    data-target="#modalEditTransport" data-toggle="modal">
                                                <i class="icon md-edit" aria-hidden="true"></i>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                                                    data-target="#modalDeleteTransport" data-toggle="modal">
                                                <i class="icon md-delete" aria-hidden="true"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>LINE MAN</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                                                    data-target="#modalEditTransport" data-toggle="modal">
                                                <i class="icon md-edit" aria-hidden="true"></i>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                                                    data-target="#modalDeleteTransport" data-toggle="modal">
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
