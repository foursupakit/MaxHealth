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

        .form-group.row {
            margin-bottom: 0.5rem;
        }
    </style>
@endsection

@section('content')
    <div class="page">
        @include('purchase-order.modal')
        <div class="page-header">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/sale-order"><i class="icon md-chevron-left" aria-hidden="true">รายการขาย</i></a></li>
            </ol>
            <h1 class="page-title">รายละเอียดรายการขาย</h1>
        </div>
        <div class="page-content container-fluid">
            <div class="panel">
                <div class="row">
                    <div class="col-md-6">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="icon icon-circle md-assignment white bg-blue-600" style="pointer-events: none;" aria-hidden="true"></i><span class="ml-10">ข้อมูล</span>
                            </h3>
                        </div>
                        <div class="panel-body">
                            <form>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">รายการ</label>
                                    <div class="col-md-9">
                                        <p class="form-control-plaintext">SO-202102001</p>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">ประเภทรายการ</label>
                                    <div class="col-md-9">
                                        <p class="form-control-plaintext">ขายสินค้าออก</p>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">วันที่</label>
                                    <div class="col-md-9">
                                        <p class="form-control-plaintext">9 มกราคม 2564</p>
                                    </div>
                                </div>
                                @if($id == '1' || $id == '3')
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">ช่องทางการขาย</label>
                                        <div class="col-md-9">
                                            <p class="form-control-plaintext">ตัวแทนจำหน่าย</p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">ตัวแทนจำหน่าย</label>
                                        <div class="col-md-9">
                                            <p class="form-control-plaintext">ตัวแทนจำหน่าย1</p>
                                        </div>
                                    </div>
                                @elseif($id == '2')
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">ช่องทางการขาย</label>
                                        <div class="col-md-9">
                                            <p class="form-control-plaintext">
                                                <img src="/assets/images/lazada_icon.png" width="15" class="mr-1">
                                                <span title="Lazada" >Lazada</span>
                                            </p>
                                        </div>
                                    </div>
                                @endif
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="icon icon-circle md-account white bg-blue-600" style="pointer-events: none;" aria-hidden="true"></i><span class="ml-10">ลูกค้า</span>
                            </h3>
                        </div>
                        <div class="panel-body">
                            <form>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">ชื่อลูกค้า</label>
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
                                    <label class="col-md-3 col-form-label">ที่อยู่ลูกค้า</label>
                                    <div class="col-md-9">
                                        <p class="form-control-plaintext">234 แขวงอนุสาวรีย์ เขตบางเขน กรุงเทพมหานคร 10220</p>
                                    </div>
                                </div>
                            </form>
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
                                                <td>5 ตัว</td>
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
                    <div class="col-md-6">
                        <div class="panel-body pt-0">
                            <form class="text-md-right">
                                <div class="form-group row">
                                    <label class="col-md-5 col-form-label">จำนวนทั้งหมด</label>
                                    <div class="col-md-7">
                                        <p class="form-control-plaintext">5</p>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-5 col-form-label">มูลค่ารวม</label>
                                    <div class="col-md-7">
                                        <p class="form-control-plaintext">1,500.00</p>
                                    </div>
                                </div>
                                <div class="form-group row bg-grey-100 p-10">
                                    <label class="col-md-5 col-form-label" style="font-weight: 700;">มูลค่ารวมสุทธิ</label>
                                    <div class="col-md-7">
                                        <p class="form-control-plaintext" style="font-weight: 700;">1,500.00</p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel">
                <div class="row">
                    <div class="col-md-6">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="icon icon-circle md-assignment white bg-blue-600" style="pointer-events: none;" aria-hidden="true"></i><span class="ml-10">ข้อมูลที่อยู่ผู้รับ</span>
                            </h3>
                        </div>
                        <div class="panel-body">
                            <form>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">ชื่อผู้รับ</label>
                                    <div class="col-md-9">
                                        <p class="form-control-plaintext">ร้านค้าบางเขน</p>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">ที่อยู่/จัดส่ง</label>
                                    <div class="col-md-9">
                                        <p class="form-control-plaintext">123 วัดชลอ บางกรวย นนทบุรี 11130</p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="icon icon-circle md-assignment white bg-blue-600" style="pointer-events: none;" aria-hidden="true"></i><span class="ml-10">ข้อมูลการจัดส่งสินค้า</span>
                            </h3>
                        </div>
                        <div class="panel-body">
                            <form>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">วันส่งสินค้า</label>
                                    <div class="col-md-9">
                                        <p class="form-control-plaintext">13 กุมภาพันธ์ 2564 05:45</p>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Tracking No.</label>
                                    <div class="col-md-9">
                                        <p class="form-control-plaintext"></p>
                                    </div>
                                </div>
                            </form>
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
