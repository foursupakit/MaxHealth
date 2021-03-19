@extends('layout.main')

@section('style')
    <style>
        .icon-wrap > .icon {
            font-size: 65px;
        }
    </style>
@endsection

@section('content')
    <div class="page">
        <div class="page-header">
            <h1 class="page-title">ทางลัดของคุณ</h1>
        </div>

        <div class="page-content container-fluid">
            <div class="row" data-plugin="matchHeight" data-by-row="true">
                <div class="col-xl-4 col-md-6">
                    <div class="card card-shadow text-center">
                        <div class="card-block p-20 pt-10">
                            <div class="icon-wrap pb-10">
                                <i class="icon md-search-in-file" aria-hidden="true"></i>
                            </div>
                            <a href="#" class="btn btn-sm btn-default btn-round">ดูรายงาน</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="card card-shadow text-center">
                        <div class="card-block p-20 pt-10">
                            <div class="icon-wrap pb-10">
                                <i class="icon wb-clipboard" aria-hidden="true"></i>
                            </div>
                            <a href="/sale-order" class="btn btn-sm btn-default btn-round">ดูรายการขาย</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="card card-shadow text-center">
                        <div class="card-block p-20 pt-10">
                            <div class="icon-wrap pb-10">
                                <i class="icon wb-plus-circle" aria-hidden="true"></i>
                            </div>
                            <a href="/purchase-order/create" class="btn btn-sm btn-default btn-round">สร้างรายการซื้อ</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="card card-shadow text-center">
                        <div class="card-block p-20 pt-10">
                            <div class="icon-wrap pb-10">
                                <i class="icon md-home" aria-hidden="true"></i>
                            </div>
                            <a href="#" class="btn btn-sm btn-default btn-round">คลังสินค้า/สาขา</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="card card-shadow text-center">
                        <div class="card-block p-20 pt-10">
                            <div class="icon-wrap pb-10">
                                <i class="icon md-dropbox" aria-hidden="true"></i>
                            </div>
                            <a href="/product" class="btn btn-sm btn-default btn-round">ดูสินค้า</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="card card-shadow text-center">
                        <div class="card-block p-20 pt-10">
                            <div class="icon-wrap pb-10">
                                <i class="icon md-truck" aria-hidden="true"></i>
                            </div>
                            <a href="#" class="btn btn-sm btn-default btn-round">ดูบริการขนส่ง</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection
