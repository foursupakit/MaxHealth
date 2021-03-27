@extends('layout.main')

@section('style')
    <!-- datepicker -->
    <link rel="stylesheet" href="../../../global/vendor/bootstrap-datepicker/bootstrap-datepicker.css">

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
        .btn-outline-secondary {
            background-color: white;
        }
    </style>
@endsection

@section('content')
    <div class="page">
        <div class="page-header">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/sale-order"><i class="icon md-chevron-left" aria-hidden="true">รายการซื้อ</i></a></li>
            </ol>
            <h1 class="page-title">สร้างรายการซื้อ</h1>
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
                                        <label class="col-md-3 col-form-label">ประเภท</label>
                                        <div class="col-md-9">
                                            <p class="form-control-plaintext">ซื้อสินค้าเข้า</p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">รายการ
                                            <span class="required">*</span>
                                        </label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="list" value="PO-202102001"
                                                   autocomplete="off" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">วันที่
                                            <span class="required">*</span>
                                        </label>
                                        <div class="col-md-9">
                                            <div class="form-group mb-0">
                                                <div class="input-group input-group-icon">
                                                    <input type="text" class="form-control datepicker" data-plugin="datepicker" data-date-format="d/m/yyyy" readonly>
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">
                                                          <i class="icon md-close" aria-hidden="true"></i>
                                                        </span>
                                                        <span class="input-group-text">
                                                          <i class="icon md-calendar" aria-hidden="true"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">ประเภทภาษี</label>
                                        <div class="col-md-9">
                                            <select class="form-control example mt-5">
                                                <option>ไม่มีภาษี</option>
                                                <option>แยกภาษีมูลค่าเพิ่ม 7%</option>
                                                <option>รวมภาษีมูลค่าเพิ่ม 7%</option>
                                            </select>
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
                                        <div class="col-md-9">
                                            <div class="input-group input-group-icon">
                                                <input type="text" class="form-control" name="company" placeholder="พิมพ์ ชื่อ,รหัส"
                                                       autocomplete="off" />
                                                <div class="input-group-append">
                                                    <span type="button" class="input-group-text pointer border-0" data-target="#modalCompany" data-toggle="modal"
                                                          style="background-color: initial;">
                                                      <i class="icon md-book-image" aria-hidden="true"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">เบอร์โทรศัพท์</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="phone"
                                                   autocomplete="off" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">อีเมล</label>
                                        <div class="col-md-9">
                                            <input type="email" class="form-control" name="email"
                                                   autocomplete="off" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">ที่อยู่บริษัท</label>
                                        <div class="col-md-9">
                                            <textarea class="form-control" id="textareaDefault" rows="3"></textarea>
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
                                        <table class="table table-hover">
                                            <thead class="bg-grey-100">
                                            <tr>
                                                <th></th>
                                                <th>รหัส</th>
                                                <th>ชื่อสินค้า</th>
                                                <th>จำนวน</th>
                                                <th>มูลค่าต่อหน่วย</th>
                                                <th>รวม</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td><button type="button" class="btn btn-sm btn-outline-secondary" data-target="#modalGoods" data-toggle="modal">เลือก</button></td>
                                                <td>
                                                    <input type="text" class="form-control" autocomplete="off" />
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" autocomplete="off" />
                                                </td>
                                                <td>
                                                    <input type="number" class="form-control" autocomplete="off" />
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" autocomplete="off" placeholder="0.00"/>
                                                </td>
                                                <td>0.00 <i class="icon md-close" aria-hidden="true"></i></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <button type="button" class="btn btn-sm btn-pure button"><i class="icon md-plus" aria-hidden="true"></i> เพิ่มสินค้า</button>
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
                                        <label class="col-md-3 col-form-label">ช่องทางจัดส่ง</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control"
                                                   autocomplete="off" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">หมายเหตุ</label>
                                        <div class="col-md-9">
                                            <textarea class="form-control" id="textareaDefault" rows="3"></textarea>
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
                                        <label class="col-md-5 col-form-label">ค่าส่ง (ที่ถูกเก็บจากผู้ติดต่อ)
                                            <span class="panel-desc">
                                                <input type="checkbox">ภาษีมูลค่าเพิ่ม
                                            </span>
                                        </label>
                                        <div class="col-md-7 d-flex align-items-center">
                                            <input type="text" class="form-control text-md-right" placeholder="0.00"
                                                   autocomplete="off" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-5 col-form-label">มูลค่ารวมก่อนภาษี</label>
                                        <div class="col-md-7">
                                            <p class="form-control-plaintext">0.00</p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-5 col-form-label">ภาษีมูลค่าเพิ่ม(7%)</label>
                                        <div class="col-md-7">
                                            <p class="form-control-plaintext">0.00</p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-5 col-form-label">มูลค่ารวม</label>
                                        <div class="col-md-7">
                                            <p class="form-control-plaintext">0.00</p>
                                        </div>
                                    </div>
                                    <div class="form-group row bg-grey-100">
                                        <label class="col-md-5 col-form-label" style="font-weight: 700;">มูลค่ารวมสุทธิ</label>
                                        <div class="col-md-7">
                                            <p class="form-control-plaintext" style="font-weight: 700;">0.00</p>
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
                                <i class="icon icon-circle md-truck white bg-blue-600" style="pointer-events: none;" aria-hidden="true"></i><span class="ml-10">ข้อมูลการจัดส่งสินค้า</span>
                            </h3>
                        </div>
                        <div class="panel-body pb-0">
                            <div class="row row-lg">
                                <div class="col-lg-6">
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">วันที่ส่งสินค้า</label>
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <div class="input-group input-group-icon">
                                                    <input type="text" class="form-control datepicker" data-plugin=datepicker"" data-date-format="d/m/yyyy" readonly>
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">
                                                          <i class="icon md-close" aria-hidden="true"></i>
                                                        </span>
                                                        <span class="input-group-text">
                                                          <i class="icon md-calendar" aria-hidden="true"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel">
                <div class="row">
                    <div class="col-md-6">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="icon icon-circle md-money white bg-blue-600" style="pointer-events: none;" aria-hidden="true"></i><span class="ml-10">การชำระเงิน</span>
                            </h3>
                        </div>
                        <div class="panel-body">
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">การชำระเงิน</label>
                                <div class="col-md-9">
                                    <p class="form-control-plaintext">ไม่มี</p>
                                    <button type="button" class="btn btn-sm btn-outline-secondary" data-target="#modalPayment" data-toggle="modal">เพิ่มการชำระเงิน</button>
                                    <p class="form-control-plaintext">ใช้สำหรับบันทึกการชำระเงิน เพื่อแสดงสถานะการชำระเงินของรายการซื้อ</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="icon icon-circle md-dropbox white bg-blue-600" style="pointer-events: none;" aria-hidden="true"></i><span class="ml-10">คลังสินค้า/สาขา</span>
                            </h3>
                        </div>
                        <div class="panel-body">
                            <div class="form-group row">
                                <label class="col-md-5 col-form-label">การโอนสินค้า</label>
                                <div class="col-md-7">
                                    <input type="radio" name="transfer" checked> รอโอนสินค้า
                                    <select class="form-control example mt-5">
                                        <option>ไม่ระบุ</option>
                                        <option>คลังสินค้าหลัก</option>
                                        <option>สาขาพระราม 9</option>
                                        <option>สาขานนทบุรี</option>
                                    </select>
                                    <input class="mt-5" name="transfer" type="radio"> โอนทันทีเข้าคลังสินค้า
                                    <select class="form-control example mt-5">
                                        <option>คลังสินค้าหลัก</option>
                                        <option>สาขาพระราม 9</option>
                                        <option>สาขานนทบุรี</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-md-12 d-flex justify-content-between">
                    <button type="button" class="btn btn-round btn-pure btn-lg">กลับ</button>
                    <button type="button" class="btn btn-round btn-primary btn-lg">บันทึก</button>
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

    <!-- datepicker -->
    <script src="../../../global/vendor/bootstrap-datepicker/bootstrap-datepicker.js"></script>
    <script src="../../../global/js/Plugin/bootstrap-datepicker.js"></script>

    <script>
        $(document).ready(function() {
            $('.datepicker').datepicker('setDate', new Date());
        });
    </script>
@endsection
