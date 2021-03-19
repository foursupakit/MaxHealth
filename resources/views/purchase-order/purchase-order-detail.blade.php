@extends('layout.main')

@section('style')
    <style>
        .icon-wrap > .icon {
            font-size: 65px;
        }

        .pointer {
            cursor: pointer;
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: initial;
        }
        .table-striped tbody tr:nth-of-type(2n) {
            background-color: rgba(238,238,238,.3);
        }
    </style>
@endsection

@section('content')
    <div class="page">
        <div class="page-header">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/sale-order"><i class="icon md-chevron-left" aria-hidden="true">รายการซื้อ</i></a></li>
            </ol>
            <h1 class="page-title">รายละเอียดรายการซื้อ</h1>
        </div>
        <div class="page-content container-fluid">
            <div class="panel">
                @include('purchase-order.modal')
                <div class="row">
                    <div class="col-md-6">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="icon icon-circle md-assignment white bg-blue-600" style="pointer-events: none;" aria-hidden="true"></i><span class="ml-10">ข้อมูล</span>
                            </h3>
                        </div>
                        <div class="panel-body">
                            <div class="example">
                                <form>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">รายการ</label>
                                        <div class="col-md-9">
                                            <p class="form-control-plaintext">PO-202102001</p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">ประเภท</label>
                                        <div class="col-md-9">
                                            <p class="form-control-plaintext">ซื้อสินค้าเข้า</p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">วันที่</label>
                                        <div class="col-md-9">
                                            <p class="form-control-plaintext">9/2/2564</p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="icon icon-circle md-account white bg-blue-600" style="pointer-events: none;" aria-hidden="true"></i><span class="ml-10">ผู้ติดต่อ</span>
                            </h3>
                        </div>
                        <div class="panel-body">
                            <div class="example">
                                <form>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">ชื่อบริษัท</label>
                                        <div class="col-md-9 col-form-label">
                                            <a href="/contact/detail">บริษัท Shippop จำกัด</a>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">เบอร์โทรศัพท์</label>
                                        <div class="col-md-9">
                                            <p class="form-control-plaintext">024567890</p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">อีเมล</label>
                                        <div class="col-md-9">
                                            <p class="form-control-plaintext">you@zortshop.com</p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">ที่อยู่บริษัท</label>
                                        <div class="col-md-9">
                                            <p class="form-control-plaintext">234 แขวงอนุสาวรีย์ เขตบางเขน กรุงเทพมหานคร 10220</p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="icon icon-circle md-dropbox white bg-blue-600" style="pointer-events: none;" aria-hidden="true"></i><span class="ml-10">สินค้า</span>
                            </h3>
                        </div>
                        <div class="panel-body container-fluid pb-0">
                            <div class="row row-lg">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class="bg-grey-100">
                                            <tr>
                                                <th>#</th>
                                                <th>รหัส</th>
                                                <th>ชื่อสินค้า</th>
                                                <th>จำนวน</th>
                                                <th>มูลค่าต่อหน่วย</th>
                                                <th>รวม</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>P0007</td>
                                                <td>
                                                    <p class="form-control-plaintext">
                                                        <img src="/assets/images/cloth.jpg" width="15" class="mr-1">
                                                        <span title="cloth" >เสื้อ(M)</span>
                                                    </p>
                                                </td>
                                                <td>1 ตัว</td>
                                                <td>300</td>
                                                <td>1,500.00</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="panel-body pt-0">
                            <div class="example">
                                <form>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">หมายเหตุ</label>
                                        <div class="col-md-9">
                                            <p class="form-control-plaintext">-</p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel-body pt-0">
                            <div class="example">
                                <form class="text-md-right">
                                    <div class="form-group row">
                                        <label class="col-md-5 col-form-label">จำนวนทั้งหมด</label>
                                        <div class="col-md-7">
                                            <p class="form-control-plaintext">1</p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-5 col-form-label">มูลค่ารวม</label>
                                        <div class="col-md-7">
                                            <p class="form-control-plaintext">300.00</p>
                                        </div>
                                    </div>
                                    <div class="form-group row bg-grey-100 p-10">
                                        <label class="col-md-5 col-form-label" style="font-weight: 700;">มูลค่ารวมสุทธิ</label>
                                        <div class="col-md-7">
                                            <p class="form-control-plaintext" style="font-weight: 700;">300.00</p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel">
                <div class="row">
                    <div class="col-md-6">
                        <div class="panel-body pt-0">
                            <div class="example">
                                <form>
                                    <div class="panel-heading">
                                        <h3 class="panel-title px-0">
                                            <i class="icon icon-circle md-money white bg-blue-600" style="pointer-events: none;" aria-hidden="true"></i><span class="ml-10">การชำระเงิน</span>
                                        </h3>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-4 col-form-label"><span class="badge badge-warning" style="font-size: 100%;">รอการชำระเงิน</span></label>
                                        <div class="col-md-8 text-right">
                                            <button type="button" class="btn btn-outline-secondary" data-target="#modalPayment" data-toggle="modal"><i class="icon md-plus" aria-hidden="true"></i>ชำระเพิ่ม</button>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-0">
                                        <label class="col-md-4 col-form-label">จำนวนเงินที่ชำระ</label>
                                        <div class="col-md-8 text-right">
                                            <p class="form-control-plaintext">0</p>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-0">
                                        <label class="col-md-4 col-form-label">ยอดคงเหลือที่ต้องชำระ</label>
                                        <div class="col-md-8 text-right">
                                            <p class="form-control-plaintext">300</p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel-body pt-0">
                            <div class="example">
                                <form>
                                    <div class="panel-heading">
                                        <h3 class="panel-title px-0">
                                            <i class="icon icon-circle md-swap white bg-blue-600" style="pointer-events: none;" aria-hidden="true"></i><span class="ml-10">การโอนสินค้า</span>
                                        </h3>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-4 col-form-label"><span class="badge badge-warning" style="font-size: 100%;">รอโอนสินค้า</span></label>
                                        <div class="col-md-8 text-right">
                                            <button type="button" class="btn btn-outline-secondary"><i class="icon md-swap mr-5" aria-hidden="true"></i>โอนสินค้าบางส่วน</button>
                                            <button type="button" class="btn btn-primary"><i class="icon md-swap" aria-hidden="true"></i>โอนสินค้าเข้าคลัง</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <!-- Page -->
    <script src="../../../global/js/Plugin/peity.js"></script>
    <script src="../../../global/js/Plugin/asselectable.js"></script>
    <script src="../../../global/js/Plugin/selectable.js"></script>
    <script src="../../../global/js/Plugin/table.js"></script>
@endsection
