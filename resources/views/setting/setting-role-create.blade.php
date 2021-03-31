@extends('layout.main')

@section('style')
    <style>
        .icon-wrap > .icon {
            font-size: 65px;
        }
        .pointer {
            cursor: pointer;
        }
    </style>
@endsection

@section('content')
    <div class="page page-profile">
        <div class="page-header">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/setting/role/list"><i class="icon md-chevron-left" aria-hidden="true">สิทธิ์การใช้งาน</i></a></li>
            </ol>
            <h1 class="page-title">เพิ่มสิทธิ์การใช้งาน</h1>
        </div>
        <div class="page-content container-fluid">
            <div class="panel">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="icon icon-circle md-alert-circle-o white bg-blue-600" style="pointer-events: none;" aria-hidden="true"></i><span class="ml-10">ข้อมูลรายละเอียด</span>
                            </h3>
                        </div>
                        <div class="panel-body">
                            <form>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label text-md-right">ชื่อสิทธิ์การใช้งาน<span class="required">*</span></label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control w-auto" autocomplete="off" />
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="icon icon-circle md-eye white bg-blue-600" style="pointer-events: none;" aria-hidden="true"></i><span class="ml-10">กำหนดสิทธิ์ต่างๆ</span>
                            </h3>
                        </div>
                        <div class="panel-body">
                            <form>
                                <div class="form-group row">
                                    <label class="col-md-3 text-md-right">หน้ารายงาน</label>
                                    <div class="col-md-9">
                                        <div class="radio-custom radio-default radio-inline">
                                            <input type="radio" id="inputRadiosReportNone" name="inputRadiosReport" checked />
                                            <label for="inputRadiosReportNone">ไม่มี</label>
                                        </div>
                                        <div class="radio-custom radio-default radio-inline">
                                            <input type="radio" id="inputRadiosReportAll" name="inputRadiosReport" />
                                            <label for="inputRadiosReportAll">ทั้งหมด</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 text-md-right">รายการขาย</label>
                                    <div class="col-md-9">
                                        <div class="radio-custom radio-default radio-inline">
                                            <input type="radio" id="inputRadiosSaleOrderNone" name="inputRadiosSaleOrder" checked />
                                            <label for="inputRadiosSaleOrderNone">ไม่มี</label>
                                        </div>
                                        <div class="radio-custom radio-default radio-inline">
                                            <input type="radio" id="inputRadiosSaleOrderAll" name="inputRadiosSaleOrder" />
                                            <label for="inputRadiosSaleOrderAll">ทั้งหมด</label>
                                        </div>
                                        <div class="radio-custom radio-default radio-inline">
                                            <input type="radio" id="inputRadiosSaleOrderReadonly" name="inputRadiosSaleOrder" />
                                            <label for="inputRadiosSaleOrderReadonly">ดูรายการเท่านั้น</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 text-md-right">รายการซื้อ</label>
                                    <div class="col-md-9">
                                        <div class="radio-custom radio-default radio-inline">
                                            <input type="radio" id="inputRadiosPurchaseOrderNone" name="inputRadiosPurchaseOrder" checked />
                                            <label for="inputRadiosPurchaseOrderNone">ไม่มี</label>
                                        </div>
                                        <div class="radio-custom radio-default radio-inline">
                                            <input type="radio" id="inputRadiosPurchaseOrderAll" name="inputRadiosPurchaseOrder" />
                                            <label for="inputRadiosPurchaseOrderAll">ทั้งหมด</label>
                                        </div>
                                        <div class="radio-custom radio-default radio-inline">
                                            <input type="radio" id="inputRadiosPurchaseOrderReadonly" name="inputRadiosPurchaseOrder" />
                                            <label for="inputRadiosPurchaseOrderReadonly">ดูรายการเท่านั้น</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 text-md-right">หน้าสินค้าและหมวดหมู่</label>
                                    <div class="col-md-9">
                                        <div class="radio-custom radio-default radio-inline">
                                            <input type="radio" id="inputRadiosProductNone" name="inputRadiosProduct" checked />
                                            <label for="inputRadiosProductNone">ไม่มี</label>
                                        </div>
                                        <div class="radio-custom radio-default radio-inline">
                                            <input type="radio" id="inputRadiosProductAll" name="inputRadiosProduct" />
                                            <label for="inputRadiosProductAll">ทั้งหมด</label>
                                        </div>
                                        <div class="radio-custom radio-default radio-inline">
                                            <input type="radio" id="inputRadiosProductReadonly" name="inputRadiosProduct" />
                                            <label for="inputRadiosProductReadonly">ดูข้อมูลเท่านั้น</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 text-md-right">หน้าคลังสินค้า</label>
                                    <div class="col-md-9">
                                        <div class="radio-custom radio-default radio-inline">
                                            <input type="radio" id="inputRadiosWarehouseNone" name="inputRadiosWarehouse" checked />
                                            <label for="inputRadiosWarehouseNone">ไม่มี</label>
                                        </div>
                                        <div class="radio-custom radio-default radio-inline">
                                            <input type="radio" id="inputRadiosWarehouseAll" name="inputRadiosWarehouse" />
                                            <label for="inputRadiosWarehouseAll">ทั้งหมด</label>
                                        </div>
                                        <div class="radio-custom radio-default radio-inline">
                                            <input type="radio" id="inputRadiosWarehouseSome" name="inputRadiosWarehouse" />
                                            <label for="inputRadiosWarehouseSome">บางส่วน</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 text-md-right">หน้าผู้ติดต่อ</label>
                                    <div class="col-md-9">
                                        <div class="radio-custom radio-default radio-inline">
                                            <input type="radio" id="inputRadiosContactNone" name="inputRadiosContact" checked />
                                            <label for="inputRadiosContactNone">ไม่มี</label>
                                        </div>
                                        <div class="radio-custom radio-default radio-inline">
                                            <input type="radio" id="inputRadiosContactAll" name="inputRadiosContact" />
                                            <label for="inputRadiosContactAll">ทั้งหมด</label>
                                        </div>
                                        <div class="radio-custom radio-default radio-inline">
                                            <input type="radio" id="inputRadiosContactReadonly" name="inputRadiosContact" />
                                            <label for="inputRadiosContactReadonly">ดูข้อมูลเท่านั้น</label>
                                        </div>
                                    </div>
                                </div>
{{--                                <div class="form-group row">--}}
{{--                                    <label class="col-md-3 text-md-right">การเงินพื้นฐาน</label>--}}
{{--                                    <div class="col-md-9">--}}
{{--                                        <div class="radio-custom radio-default radio-inline">--}}
{{--                                            <input type="radio" id="inputRadiosMoneyNone" name="inputRadiosMoney" checked />--}}
{{--                                            <label for="inputRadiosMoneyNone">ไม่มี</label>--}}
{{--                                        </div>--}}
{{--                                        <div class="radio-custom radio-default radio-inline">--}}
{{--                                            <input type="radio" id="inputRadiosMoneyAll1" name="inputRadiosMoney" />--}}
{{--                                            <label for="inputRadiosMoneyAll1">ทั้งหมด</label>--}}
{{--                                        </div>--}}
{{--                                        <div class="radio-custom radio-default radio-inline">--}}
{{--                                            <input type="radio" id="inputRadiosMoneyIncome" name="inputRadiosMoney" />--}}
{{--                                            <label for="inputRadiosMoneyIncome">รายได้เท่านั้น</label>--}}
{{--                                        </div>--}}
{{--                                        <div class="radio-custom radio-default radio-inline">--}}
{{--                                            <input type="radio" id="inputRadiosMoneyExpenditure" name="inputRadiosMoney" />--}}
{{--                                            <label for="inputRadiosMoneyExpenditure">รายจ่ายเท่านั้น</label>--}}
{{--                                        </div>--}}
{{--                                        <div class="radio-custom radio-default radio-inline">--}}
{{--                                            <input type="radio" id="inputRadiosMoneyAll2" name="inputRadiosMoney" />--}}
{{--                                            <label for="inputRadiosMoneyAll2">รายได้และรายจ่ายเท่านั้น</label>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                                <div class="form-group row">
                                    <label class="col-md-3 text-md-right">ตั้งค่าระบบขายหน้าร้าน</label>
                                    <div class="col-md-9">
                                        <div class="radio-custom radio-default radio-inline">
                                            <input type="radio" id="inputRadiosSettingPageNone" name="inputRadiosSettingPage" checked />
                                            <label for="inputRadiosSettingPageNone">ไม่มี</label>
                                        </div>
                                        <div class="radio-custom radio-default radio-inline">
                                            <input type="radio" id="inputRadiosSettingPageAll" name="inputRadiosSettingPage" />
                                            <label for="inputRadiosSettingPageAll">ทั้งหมด</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 text-md-right">ตั้งค่า</label>
                                    <div class="col-md-9">
                                        <div class="radio-custom radio-default radio-inline">
                                            <input type="radio" id="inputRadiosSettingNone" name="inputRadiosSetting" checked />
                                            <label for="inputRadiosSettingPageNone">ไม่มี</label>
                                        </div>
                                        <div class="radio-custom radio-default radio-inline">
                                            <input type="radio" id="inputRadiosSettingAll" name="inputRadiosSetting" />
                                            <label for="inputRadiosSettingPageAll">ทั้งหมด</label>
                                        </div>
                                        <div class="radio-custom radio-default radio-inline">
                                            <input type="radio" id="inputRadiosSettingSome" name="inputRadiosSetting" />
                                            <label for="inputRadiosSettingSome">บางส่วน</label>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="panel-footer">
                            <button type="button" class="offset-md-3 col-md-9 btn btn-round btn-primary btn-lg w-auto">บันทึก</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <!-- Plugins -->
    <script src="../../../global/vendor/jquery-placeholder/jquery.placeholder.js"></script>

    <!-- Page -->
    <script src="../../../global/js/Plugin/jquery-placeholder.js"></script>
    <script src="../../../global/js/Plugin/input-group-file.js"></script>
@endsection
