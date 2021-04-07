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
                                <i class="icon icon-circle md-alert-circle-o white bg-blue-900" style="pointer-events: none;" aria-hidden="true"></i><span class="ml-10">ข้อมูลรายละเอียด</span>
                            </h3>
                        </div>
                        <div class="panel-body">
                            <form>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label text-md-right">ชื่อสิทธิ์การใช้งาน<span class="required">*</span></label>
                                    <div class="col-md-9">
                                        @if($id == '1')
                                            <input type="text" class="form-control w-auto" autocomplete="off" value="admin" disabled />
                                        @elseif($id == '2')
                                            <input type="text" class="form-control w-auto" autocomplete="off" value="User" />
                                        @elseif($id == '3')
                                            <input type="text" class="form-control w-auto" autocomplete="off" value="Staff" />
                                        @endif
                                    </div>
                                </div>
                            </form>
                        </div>
                        @if($id == '1')
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="icon icon-circle md-eye white bg-blue-900" style="pointer-events: none;" aria-hidden="true"></i><span class="ml-10">กำหนดสิทธิ์ต่างๆ</span>
                                </h3>
                            </div>
                            <div class="panel-body admin" >
                                <form>
                                    <div class="form-group row">
                                        <label class="col-md-3 text-md-right">หน้ารายงาน</label>
                                        <div class="col-md-9">
                                            <div class="radio-custom radio-default radio-inline">
                                                <input type="radio" id="inputRadiosReportNone" name="inputRadiosReport" value="none" />
                                                <label for="inputRadiosReportNone">ไม่มี</label>
                                            </div>
                                            <div class="radio-custom radio-default radio-inline">
                                                <input type="radio" id="inputRadiosReportAll" name="inputRadiosReport" value="all" checked />
                                                <label for="inputRadiosReportAll">ทั้งหมด</label>
                                            </div>
                                        </div>
                                        <div class="offset-md-3 col-md-9 adjustReport">
                                            <div class="card-block border rounded">
                                                กำหนดสิทธิ์การทำงาน
                                                <div class="checkbox-custom checkbox-primary">
                                                    <input type="checkbox" id="inputCheckboxReport" name="inputCheckboxReport" value="all" checked />
                                                    <label for="inputCheckboxReport">Export ข้อมูลได้</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 text-md-right">รายการขาย</label>
                                        <div class="col-md-9">
                                            <div class="radio-custom radio-default radio-inline">
                                                <input type="radio" id="inputRadiosSaleOrderNone" name="inputRadiosSaleOrder" value="none" />
                                                <label for="inputRadiosSaleOrderNone">ไม่มี</label>
                                            </div>
                                            <div class="radio-custom radio-default radio-inline">
                                                <input type="radio" id="inputRadiosSaleOrderAll" name="inputRadiosSaleOrder" value="all" checked />
                                                <label for="inputRadiosSaleOrderAll">ทั้งหมด</label>
                                            </div>
                                            <div class="radio-custom radio-default radio-inline">
                                                <input type="radio" id="inputRadiosSaleOrderReadonly" name="inputRadiosSaleOrder" value="readonly" />
                                                <label for="inputRadiosSaleOrderReadonly">ดูรายการเท่านั้น</label>
                                            </div>
                                        </div>
                                        <div class="offset-md-3 col-md-9 adjustSaleOrder">
                                            <div class="card-block border rounded">
                                                กำหนดสิทธิ์การทำงาน
                                                <div class="checkbox-custom checkbox-primary">
                                                    <input type="checkbox" id="subSaleOrder1" name="subSaleOrder" value="1" checked />
                                                    <label for="subSaleOrder1">เพิ่มข้อมูลลูกค้าใหม่ได้</label><br>
                                                    <input type="checkbox" id="subSaleOrder2" name="subSaleOrder" value="2" checked />
                                                    <label for="subSaleOrder2">เพิ่มข้อมูลสินค้าใหม่ได้</label><br>
                                                    <input type="checkbox" id="subSaleOrder3" name="subSaleOrder" value="3" checked />
                                                    <label for="subSaleOrder3">โอนรายการสินค้าได้</label><br>
                                                    <input type="checkbox" id="subSaleOrder4" name="subSaleOrder" value="4" checked />
                                                    <label for="subSaleOrder4">บันทึกการชำระเงินได้</label><br>
                                                    <input type="checkbox" id="subSaleOrder5" name="subSaleOrder" value="5" checked />
                                                    <label for="subSaleOrder5">ลบรายการขายได้</label><br>
                                                    <input type="checkbox" id="subSaleOrder6" name="subSaleOrder" value="6" checked />
                                                    <label for="subSaleOrder6">Export ข้อมูลได้</label>
                                                </div>
                                            </div>
                                            <div class="card-block border rounded mt-2">
                                                กำหนดการแสดงผล
                                                <div class="radio-custom radio-default">
                                                    <input type="radio" id="subSaleOrderShow1" name="subSaleOrderShow" value="all" checked />
                                                    <label for="subSaleOrderShow1">แสดงรายการทั้งหมด</label><br>
                                                    <input type="radio" id="subSaleOrderShow2" name="subSaleOrderShow" value="allSelf" />
                                                    <label for="subSaleOrderShow2">แสดงรายการที่สร้างเองเท่านั้น</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 text-md-right">รายการซื้อ</label>
                                        <div class="col-md-9">
                                            <div class="radio-custom radio-default radio-inline">
                                                <input type="radio" id="inputRadiosPurchaseOrderNone" name="inputRadiosPurchaseOrder" value="none" />
                                                <label for="inputRadiosPurchaseOrderNone">ไม่มี</label>
                                            </div>
                                            <div class="radio-custom radio-default radio-inline">
                                                <input type="radio" id="inputRadiosPurchaseOrderAll" name="inputRadiosPurchaseOrder" value="all" checked />
                                                <label for="inputRadiosPurchaseOrderAll">ทั้งหมด</label>
                                            </div>
                                            <div class="radio-custom radio-default radio-inline">
                                                <input type="radio" id="inputRadiosPurchaseOrderReadonly" name="inputRadiosPurchaseOrder" value="readonly" />
                                                <label for="inputRadiosPurchaseOrderReadonly">ดูรายการเท่านั้น</label>
                                            </div>
                                        </div>
                                        <div class="offset-md-3 col-md-9 adjustPurchaseOrder">
                                            <div class="card-block border rounded">
                                                กำหนดสิทธิ์การทำงาน
                                                <div class="checkbox-custom checkbox-primary">
                                                    <input type="checkbox" id="subPurchaseOrder1" name="subPurchaseOrder" value="1" checked />
                                                    <label for="subPurchaseOrder1">เพิ่มข้อมูลลูกค้าใหม่ได้</label><br>
                                                    <input type="checkbox" id="subPurchaseOrder2" name="subPurchaseOrder" value="2" checked />
                                                    <label for="subPurchaseOrder2">เพิ่มข้อมูลสินค้าใหม่ได้</label><br>
                                                    <input type="checkbox" id="subPurchaseOrder3" name="subPurchaseOrder" value="3" checked />
                                                    <label for="subPurchaseOrder3">โอนรายการสินค้าได้</label><br>
                                                    <input type="checkbox" id="subPurchaseOrder4" name="subPurchaseOrder" value="4" checked />
                                                    <label for="subPurchaseOrder4">บันทึกการชำระเงินได้</label><br>
                                                    <input type="checkbox" id="subPurchaseOrder5" name="subPurchaseOrder" value="5" checked />
                                                    <label for="subPurchaseOrder5">ลบรายการขายได้</label><br>
                                                    <input type="checkbox" id="subPurchaseOrder6" name="subPurchaseOrder" value="6" checked />
                                                    <label for="subPurchaseOrder6">Export ข้อมูลได้</label>
                                                </div>
                                            </div>
                                            <div class="card-block border rounded mt-2">
                                                กำหนดการแสดงผล
                                                <div class="radio-custom radio-default">
                                                    <input type="radio" id="subPurchaseOrderShow1" name="subPurchaseOrderShow" value="all" checked />
                                                    <label for="subPurchaseOrderShow1">แสดงรายการทั้งหมด</label><br>
                                                    <input type="radio" id="subPurchaseOrderShow2" name="subPurchaseOrderShow" value="allSelf" />
                                                    <label for="subPurchaseOrderShow2">แสดงรายการที่สร้างเองเท่านั้น</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 text-md-right">หน้าสินค้าและหมวดหมู่</label>
                                        <div class="col-md-9">
                                            <div class="radio-custom radio-default radio-inline">
                                                <input type="radio" id="inputRadiosProductNone" name="inputRadiosProduct" value="none" />
                                                <label for="inputRadiosProductNone">ไม่มี</label>
                                            </div>
                                            <div class="radio-custom radio-default radio-inline">
                                                <input type="radio" id="inputRadiosProductAll" name="inputRadiosProduct" value="all" checked />
                                                <label for="inputRadiosProductAll">ทั้งหมด</label>
                                            </div>
                                            <div class="radio-custom radio-default radio-inline">
                                                <input type="radio" id="inputRadiosProductReadonly" name="inputRadiosProduct" value="readonly" />
                                                <label for="inputRadiosProductReadonly">ดูข้อมูลเท่านั้น</label>
                                            </div>
                                        </div>
                                        <div class="offset-md-3 col-md-9 adjustProduct">
                                            <div class="card-block border rounded adjustProduct1">
                                                กำหนดสิทธิ์การทำงาน
                                                <div class="checkbox-custom checkbox-primary">
                                                    <input type="checkbox" id="subProduct1" name="subProduct" value="1" checked />
                                                    <label for="subProduct1">Export ข้อมูลได้</label><br>
                                                    <div class="subProduct2show">
                                                        <input type="checkbox" id="subProduct2" name="subProduct" value="2" checked />
                                                        <label for="subProduct2">ปรับจำนวนได้</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-block border rounded mt-2 adjustProduct2">
                                                กำหนดการแสดงผล
                                                <div class="checkbox-custom checkbox-primary">
                                                    <input type="checkbox" id="subProductShow1" name="subProductShow" value="report" checked />
                                                    <label for="subProductShow1">ดูรายงาน</label><br>
                                                    <input type="checkbox" id="subProductShow2" name="subProductShow" value="productCost" checked />
                                                    <label for="subProductShow2">แสดงต้นทุนสินค้า</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 text-md-right">หน้าคลังสินค้า</label>
                                        <div class="col-md-9">
                                            <div class="radio-custom radio-default radio-inline">
                                                <input type="radio" id="inputRadiosWarehouseNone" name="inputRadiosWarehouse" value="none" />
                                                <label for="inputRadiosWarehouseNone">ไม่มี</label>
                                            </div>
                                            <div class="radio-custom radio-default radio-inline">
                                                <input type="radio" id="inputRadiosWarehouseAll" name="inputRadiosWarehouse" value="all" checked />
                                                <label for="inputRadiosWarehouseAll">ทั้งหมด</label>
                                            </div>
                                            <div class="radio-custom radio-default radio-inline">
                                                <input type="radio" id="inputRadiosWarehouseSome" name="inputRadiosWarehouse" value="some" />
                                                <label for="inputRadiosWarehouseSome">บางส่วน</label>
                                            </div>
                                        </div>
                                        <div class="offset-md-3 col-md-9 adjustWarehouse">
                                            <div class="card-block border rounded mb-2 adjustWarehouse1">
                                                เลือกคลังสินค้า<br>
                                                <div class="checkbox-custom checkbox-primary checkbox-inline">
                                                    <input type="checkbox" id="subChooseWarehouse1" name="subChooseWarehouse" value="1" />
                                                    <label for="subChooseWarehouse1">คลังสินค้าหลัก</label>
                                                </div>
                                                <div class="checkbox-custom checkbox-primary checkbox-inline">
                                                    <input type="checkbox" id="subChooseWarehouse2" name="subChooseWarehouse" value="2" />
                                                    <label for="subChooseWarehouse2">สาขาพระราม 9</label>
                                                </div>
                                                <div class="checkbox-custom checkbox-primary checkbox-inline">
                                                    <input type="checkbox" id="subChooseWarehouse3" name="subChooseWarehouse" value="3" />
                                                    <label for="subChooseWarehouse3">สาขาธนบุรี</label>
                                                </div>
                                            </div>
                                            <div class="card-block border rounded">
                                                กำหนดสิทธิ์การทำงาน
                                                <div class="checkbox-custom checkbox-primary">
                                                    <input type="checkbox" id="subWarehouse1" name="subWarehouse" value="1" checked />
                                                    <label for="subWarehouse1">Export ข้อมูลได้</label><br>
                                                    <input type="checkbox" id="subWarehouse2" name="subWarehouse" value="2" checked />
                                                    <label for="subWarehouse2">ปรับจำนวนได้</label>
                                                </div>
                                            </div>
                                            <div class="card-block border rounded mt-2">
                                                กำหนดการแสดงผล
                                                <div class="checkbox-custom checkbox-primary">
                                                    <input type="checkbox" id="subWarehouseShow1" name="subWarehouseShow" value="report" checked />
                                                    <label for="subWarehouseShow1">ดูรายงาน</label><br>
                                                    <input type="checkbox" id="subWarehouseShow2" name="subWarehouseShow" value="productCost" checked />
                                                    <label for="subWarehouseShow2">แสดงต้นทุนสินค้า</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 text-md-right">หน้าผู้ติดต่อ</label>
                                        <div class="col-md-9">
                                            <div class="radio-custom radio-default radio-inline">
                                                <input type="radio" id="inputRadiosContactNone" name="inputRadiosContact" value="none" />
                                                <label for="inputRadiosContactNone">ไม่มี</label>
                                            </div>
                                            <div class="radio-custom radio-default radio-inline">
                                                <input type="radio" id="inputRadiosContactAll" name="inputRadiosContact" value="all" checked />
                                                <label for="inputRadiosContactAll">ทั้งหมด</label>
                                            </div>
                                            <div class="radio-custom radio-default radio-inline">
                                                <input type="radio" id="inputRadiosContactReadonly" name="inputRadiosContact" value="readonly" />
                                                <label for="inputRadiosContactReadonly">ดูข้อมูลเท่านั้น</label>
                                            </div>
                                        </div>
                                        <div class="offset-md-3 col-md-9 adjustContact">
                                            <div class="card-block border rounded">
                                                กำหนดสิทธิ์การทำงาน
                                                <div class="checkbox-custom checkbox-primary">
                                                    <input type="checkbox" id="subContact" name="subContact" value="1" checked />
                                                    <label for="subContact">Export ข้อมูลได้</label>
                                                </div>
                                            </div>
                                            <div class="card-block border rounded mt-2">
                                                กำหนดการแสดงผล
                                                <div class="checkbox-custom checkbox-primary">
                                                    <input type="checkbox" id="subContactShow" name="subContactShow" value="report" checked />
                                                    <label for="subContactShow">ดูรายงาน</label><br>
                                                </div>
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
                                                <input type="radio" id="inputRadiosSettingPageNone" name="inputRadiosSettingPage" />
                                                <label for="inputRadiosSettingPageNone">ไม่มี</label>
                                            </div>
                                            <div class="radio-custom radio-default radio-inline">
                                                <input type="radio" id="inputRadiosSettingPageAll" name="inputRadiosSettingPage" checked />
                                                <label for="inputRadiosSettingPageAll">ทั้งหมด</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 text-md-right">ตั้งค่า</label>
                                        <div class="col-md-9">
                                            <div class="radio-custom radio-default radio-inline">
                                                <input type="radio" id="inputRadiosSettingNone" name="inputRadiosSetting" value="none" />
                                                <label for="inputRadiosSettingNone">ไม่มี</label>
                                            </div>
                                            <div class="radio-custom radio-default radio-inline">
                                                <input type="radio" id="inputRadiosSettingAll" name="inputRadiosSetting" value="all" checked />
                                                <label for="inputRadiosSettingAll">ทั้งหมด</label>
                                            </div>
                                            <div class="radio-custom radio-default radio-inline">
                                                <input type="radio" id="inputRadiosSettingSome" name="inputRadiosSetting" value="some" />
                                                <label for="inputRadiosSettingSome">บางส่วน</label>
                                            </div>
                                        </div>
                                        <div class="offset-md-3 col-md-9 adjustSetting">
                                            <div class="card-block border rounded">
                                                กำหนดสิทธิ์การทำงาน
                                                <div class="checkbox-custom checkbox-primary">
                                                    <input type="checkbox" id="subSetting1" name="subSetting" value="1" checked />
                                                    <label for="subSetting1">บริษัท/ร้านค้า</label><br>
                                                    <input type="checkbox" id="subSetting2" name="subSetting" value="2" checked />
                                                    <label for="subSetting2">ผู้ใช้งาน</label><br>
                                                    <input type="checkbox" id="subSetting3" name="subSetting" value="3" checked />
                                                    <label for="subSetting3">สิทธิ์การใช้งาน</label><br>
                                                    <input type="checkbox" id="subSetting4" name="subSetting" value="4" checked />
                                                    <label for="subSetting4">ตั้งค่าการแจ้งเตือน</label><br>
                                                    <input type="checkbox" id="subSetting5" name="subSetting" value="5" checked />
                                                    <label for="subSetting5">ตั้งค่าการเชื่อมต่อ</label><br>
                                                    <input type="checkbox" id="subSetting6" name="subSetting" value="6" checked />
                                                    <label for="subSetting6">แพ็คเกจ</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="panel-footer">
                                <button type="button" class="offset-md-3 col-md-9 btn btn-round btn-primary btn-lg w-auto" disabled>บันทึก</button>
                            </div>
                        @elseif($id == '2' || $id == '3')
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="icon icon-circle md-eye white bg-blue-900" style="pointer-events: none;" aria-hidden="true"></i><span class="ml-10">กำหนดสิทธิ์ต่างๆ</span>
                                </h3>
                            </div>
                            <div class="panel-body other">
                                <form>
                                    <div class="form-group row">
                                        <label class="col-md-3 text-md-right">หน้ารายงาน</label>
                                        <div class="col-md-9">
                                            <div class="radio-custom radio-default radio-inline">
                                                <input type="radio" id="inputRadiosReportNone" name="inputRadiosReport" value="none" checked />
                                                <label for="inputRadiosReportNone">ไม่มี</label>
                                            </div>
                                            <div class="radio-custom radio-default radio-inline">
                                                <input type="radio" id="inputRadiosReportAll" name="inputRadiosReport" value="all" />
                                                <label for="inputRadiosReportAll">ทั้งหมด</label>
                                            </div>
                                        </div>
                                        <div class="offset-md-3 col-md-9 adjustReport">
                                            <div class="card-block border rounded">
                                                กำหนดสิทธิ์การทำงาน
                                                <div class="checkbox-custom checkbox-primary">
                                                    <input type="checkbox" id="inputCheckboxReport" name="inputCheckboxReport" value="all" checked />
                                                    <label for="inputCheckboxReport">Export ข้อมูลได้</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 text-md-right">รายการขาย</label>
                                        <div class="col-md-9">
                                            <div class="radio-custom radio-default radio-inline">
                                                <input type="radio" id="inputRadiosSaleOrderNone" name="inputRadiosSaleOrder" value="none" checked />
                                                <label for="inputRadiosSaleOrderNone">ไม่มี</label>
                                            </div>
                                            <div class="radio-custom radio-default radio-inline">
                                                <input type="radio" id="inputRadiosSaleOrderAll" name="inputRadiosSaleOrder" value="all" />
                                                <label for="inputRadiosSaleOrderAll">ทั้งหมด</label>
                                            </div>
                                            <div class="radio-custom radio-default radio-inline">
                                                <input type="radio" id="inputRadiosSaleOrderReadonly" name="inputRadiosSaleOrder" value="readonly" />
                                                <label for="inputRadiosSaleOrderReadonly">ดูรายการเท่านั้น</label>
                                            </div>
                                        </div>
                                        <div class="offset-md-3 col-md-9 adjustSaleOrder">
                                            <div class="card-block border rounded">
                                                กำหนดสิทธิ์การทำงาน
                                                <div class="checkbox-custom checkbox-primary">
                                                    <input type="checkbox" id="subSaleOrder1" name="subSaleOrder" value="1" checked />
                                                    <label for="subSaleOrder1">เพิ่มข้อมูลลูกค้าใหม่ได้</label><br>
                                                    <input type="checkbox" id="subSaleOrder2" name="subSaleOrder" value="2" checked />
                                                    <label for="subSaleOrder2">เพิ่มข้อมูลสินค้าใหม่ได้</label><br>
                                                    <input type="checkbox" id="subSaleOrder3" name="subSaleOrder" value="3" checked />
                                                    <label for="subSaleOrder3">โอนรายการสินค้าได้</label><br>
                                                    <input type="checkbox" id="subSaleOrder4" name="subSaleOrder" value="4" checked />
                                                    <label for="subSaleOrder4">บันทึกการชำระเงินได้</label><br>
                                                    <input type="checkbox" id="subSaleOrder5" name="subSaleOrder" value="5" checked />
                                                    <label for="subSaleOrder5">ลบรายการขายได้</label><br>
                                                    <input type="checkbox" id="subSaleOrder6" name="subSaleOrder" value="6" checked />
                                                    <label for="subSaleOrder6">Export ข้อมูลได้</label>
                                                </div>
                                            </div>
                                            <div class="card-block border rounded mt-2">
                                                กำหนดการแสดงผล
                                                <div class="radio-custom radio-default">
                                                    <input type="radio" id="subSaleOrderShow1" name="subSaleOrderShow" value="all" checked />
                                                    <label for="subSaleOrderShow1">แสดงรายการทั้งหมด</label><br>
                                                    <input type="radio" id="subSaleOrderShow2" name="subSaleOrderShow" value="allSelf" />
                                                    <label for="subSaleOrderShow2">แสดงรายการที่สร้างเองเท่านั้น</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 text-md-right">รายการซื้อ</label>
                                        <div class="col-md-9">
                                            <div class="radio-custom radio-default radio-inline">
                                                <input type="radio" id="inputRadiosPurchaseOrderNone" name="inputRadiosPurchaseOrder" value="none" checked />
                                                <label for="inputRadiosPurchaseOrderNone">ไม่มี</label>
                                            </div>
                                            <div class="radio-custom radio-default radio-inline">
                                                <input type="radio" id="inputRadiosPurchaseOrderAll" name="inputRadiosPurchaseOrder" value="all" />
                                                <label for="inputRadiosPurchaseOrderAll">ทั้งหมด</label>
                                            </div>
                                            <div class="radio-custom radio-default radio-inline">
                                                <input type="radio" id="inputRadiosPurchaseOrderReadonly" name="inputRadiosPurchaseOrder" value="readonly" />
                                                <label for="inputRadiosPurchaseOrderReadonly">ดูรายการเท่านั้น</label>
                                            </div>
                                        </div>
                                        <div class="offset-md-3 col-md-9 adjustPurchaseOrder">
                                            <div class="card-block border rounded">
                                                กำหนดสิทธิ์การทำงาน
                                                <div class="checkbox-custom checkbox-primary">
                                                    <input type="checkbox" id="subPurchaseOrder1" name="subPurchaseOrder" value="1" checked />
                                                    <label for="subPurchaseOrder1">เพิ่มข้อมูลลูกค้าใหม่ได้</label><br>
                                                    <input type="checkbox" id="subPurchaseOrder2" name="subPurchaseOrder" value="2" checked />
                                                    <label for="subPurchaseOrder2">เพิ่มข้อมูลสินค้าใหม่ได้</label><br>
                                                    <input type="checkbox" id="subPurchaseOrder3" name="subPurchaseOrder" value="3" checked />
                                                    <label for="subPurchaseOrder3">โอนรายการสินค้าได้</label><br>
                                                    <input type="checkbox" id="subPurchaseOrder4" name="subPurchaseOrder" value="4" checked />
                                                    <label for="subPurchaseOrder4">บันทึกการชำระเงินได้</label><br>
                                                    <input type="checkbox" id="subPurchaseOrder5" name="subPurchaseOrder" value="5" checked />
                                                    <label for="subPurchaseOrder5">ลบรายการขายได้</label><br>
                                                    <input type="checkbox" id="subPurchaseOrder6" name="subPurchaseOrder" value="6" checked />
                                                    <label for="subPurchaseOrder6">Export ข้อมูลได้</label>
                                                </div>
                                            </div>
                                            <div class="card-block border rounded mt-2">
                                                กำหนดการแสดงผล
                                                <div class="radio-custom radio-default">
                                                    <input type="radio" id="subPurchaseOrderShow1" name="subPurchaseOrderShow" value="all" checked />
                                                    <label for="subPurchaseOrderShow1">แสดงรายการทั้งหมด</label><br>
                                                    <input type="radio" id="subPurchaseOrderShow2" name="subPurchaseOrderShow" value="allSelf" />
                                                    <label for="subPurchaseOrderShow2">แสดงรายการที่สร้างเองเท่านั้น</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 text-md-right">หน้าสินค้าและหมวดหมู่</label>
                                        <div class="col-md-9">
                                            <div class="radio-custom radio-default radio-inline">
                                                <input type="radio" id="inputRadiosProductNone" name="inputRadiosProduct" value="none" checked />
                                                <label for="inputRadiosProductNone">ไม่มี</label>
                                            </div>
                                            <div class="radio-custom radio-default radio-inline">
                                                <input type="radio" id="inputRadiosProductAll" name="inputRadiosProduct" value="all" />
                                                <label for="inputRadiosProductAll">ทั้งหมด</label>
                                            </div>
                                            <div class="radio-custom radio-default radio-inline">
                                                <input type="radio" id="inputRadiosProductReadonly" name="inputRadiosProduct" value="readonly" />
                                                <label for="inputRadiosProductReadonly">ดูข้อมูลเท่านั้น</label>
                                            </div>
                                        </div>
                                        <div class="offset-md-3 col-md-9 adjustProduct">
                                            <div class="card-block border rounded adjustProduct1">
                                                กำหนดสิทธิ์การทำงาน
                                                <div class="checkbox-custom checkbox-primary">
                                                    <input type="checkbox" id="subProduct1" name="subProduct" value="1" checked />
                                                    <label for="subProduct1">Export ข้อมูลได้</label><br>
                                                    <div class="subProduct2show">
                                                        <input type="checkbox" id="subProduct2" name="subProduct" value="2" checked />
                                                        <label for="subProduct2">ปรับจำนวนได้</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-block border rounded mt-2 adjustProduct2">
                                                กำหนดการแสดงผล
                                                <div class="checkbox-custom checkbox-primary">
                                                    <input type="checkbox" id="subProductShow1" name="subProductShow" value="report" checked />
                                                    <label for="subProductShow1">ดูรายงาน</label><br>
                                                    <input type="checkbox" id="subProductShow2" name="subProductShow" value="productCost" checked />
                                                    <label for="subProductShow2">แสดงต้นทุนสินค้า</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 text-md-right">หน้าคลังสินค้า</label>
                                        <div class="col-md-9">
                                            <div class="radio-custom radio-default radio-inline">
                                                <input type="radio" id="inputRadiosWarehouseNone" name="inputRadiosWarehouse" value="none" checked />
                                                <label for="inputRadiosWarehouseNone">ไม่มี</label>
                                            </div>
                                            <div class="radio-custom radio-default radio-inline">
                                                <input type="radio" id="inputRadiosWarehouseAll" name="inputRadiosWarehouse" value="all" />
                                                <label for="inputRadiosWarehouseAll">ทั้งหมด</label>
                                            </div>
                                            <div class="radio-custom radio-default radio-inline">
                                                <input type="radio" id="inputRadiosWarehouseSome" name="inputRadiosWarehouse" value="some" />
                                                <label for="inputRadiosWarehouseSome">บางส่วน</label>
                                            </div>
                                        </div>
                                        <div class="offset-md-3 col-md-9 adjustWarehouse">
                                            <div class="card-block border rounded mb-2 adjustWarehouse1">
                                                เลือกคลังสินค้า<br>
                                                <div class="checkbox-custom checkbox-primary checkbox-inline">
                                                    <input type="checkbox" id="subChooseWarehouse1" name="subChooseWarehouse" value="1" />
                                                    <label for="subChooseWarehouse1">คลังสินค้าหลัก</label>
                                                </div>
                                                <div class="checkbox-custom checkbox-primary checkbox-inline">
                                                    <input type="checkbox" id="subChooseWarehouse2" name="subChooseWarehouse" value="2" />
                                                    <label for="subChooseWarehouse2">สาขาพระราม 9</label>
                                                </div>
                                                <div class="checkbox-custom checkbox-primary checkbox-inline">
                                                    <input type="checkbox" id="subChooseWarehouse3" name="subChooseWarehouse" value="3" />
                                                    <label for="subChooseWarehouse3">สาขาธนบุรี</label>
                                                </div>
                                            </div>
                                            <div class="card-block border rounded">
                                                กำหนดสิทธิ์การทำงาน
                                                <div class="checkbox-custom checkbox-primary">
                                                    <input type="checkbox" id="subWarehouse1" name="subWarehouse" value="1" checked />
                                                    <label for="subWarehouse1">Export ข้อมูลได้</label><br>
                                                    <input type="checkbox" id="subWarehouse2" name="subWarehouse" value="2" checked />
                                                    <label for="subWarehouse2">ปรับจำนวนได้</label>
                                                </div>
                                            </div>
                                            <div class="card-block border rounded mt-2">
                                                กำหนดการแสดงผล
                                                <div class="checkbox-custom checkbox-primary">
                                                    <input type="checkbox" id="subWarehouseShow1" name="subWarehouseShow" value="report" checked />
                                                    <label for="subWarehouseShow1">ดูรายงาน</label><br>
                                                    <input type="checkbox" id="subWarehouseShow2" name="subWarehouseShow" value="productCost" checked />
                                                    <label for="subWarehouseShow2">แสดงต้นทุนสินค้า</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 text-md-right">หน้าผู้ติดต่อ</label>
                                        <div class="col-md-9">
                                            <div class="radio-custom radio-default radio-inline">
                                                <input type="radio" id="inputRadiosContactNone" name="inputRadiosContact" value="none" checked />
                                                <label for="inputRadiosContactNone">ไม่มี</label>
                                            </div>
                                            <div class="radio-custom radio-default radio-inline">
                                                <input type="radio" id="inputRadiosContactAll" name="inputRadiosContact" value="all" />
                                                <label for="inputRadiosContactAll">ทั้งหมด</label>
                                            </div>
                                            <div class="radio-custom radio-default radio-inline">
                                                <input type="radio" id="inputRadiosContactReadonly" name="inputRadiosContact" value="readonly" />
                                                <label for="inputRadiosContactReadonly">ดูข้อมูลเท่านั้น</label>
                                            </div>
                                        </div>
                                        <div class="offset-md-3 col-md-9 adjustContact">
                                            <div class="card-block border rounded">
                                                กำหนดสิทธิ์การทำงาน
                                                <div class="checkbox-custom checkbox-primary">
                                                    <input type="checkbox" id="subContact" name="subContact" value="1" checked />
                                                    <label for="subContact">Export ข้อมูลได้</label>
                                                </div>
                                            </div>
                                            <div class="card-block border rounded mt-2">
                                                กำหนดการแสดงผล
                                                <div class="checkbox-custom checkbox-primary">
                                                    <input type="checkbox" id="subContactShow" name="subContactShow" value="report" checked />
                                                    <label for="subContactShow">ดูรายงาน</label><br>
                                                </div>
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
                                                <input type="radio" id="inputRadiosSettingNone" name="inputRadiosSetting" value="none" checked />
                                                <label for="inputRadiosSettingNone">ไม่มี</label>
                                            </div>
                                            <div class="radio-custom radio-default radio-inline">
                                                <input type="radio" id="inputRadiosSettingAll" name="inputRadiosSetting" value="all" />
                                                <label for="inputRadiosSettingAll">ทั้งหมด</label>
                                            </div>
                                            <div class="radio-custom radio-default radio-inline">
                                                <input type="radio" id="inputRadiosSettingSome" name="inputRadiosSetting" value="some" />
                                                <label for="inputRadiosSettingSome">บางส่วน</label>
                                            </div>
                                        </div>
                                        <div class="offset-md-3 col-md-9 adjustSetting">
                                            <div class="card-block border rounded">
                                                กำหนดสิทธิ์การทำงาน
                                                <div class="checkbox-custom checkbox-primary">
                                                    <input type="checkbox" id="subSetting1" name="subSetting" value="1" checked />
                                                    <label for="subSetting1">บริษัท/ร้านค้า</label><br>
                                                    <input type="checkbox" id="subSetting2" name="subSetting" value="2" checked />
                                                    <label for="subSetting2">ผู้ใช้งาน</label><br>
                                                    <input type="checkbox" id="subSetting3" name="subSetting" value="3" checked />
                                                    <label for="subSetting3">สิทธิ์การใช้งาน</label><br>
                                                    <input type="checkbox" id="subSetting4" name="subSetting" value="4" checked />
                                                    <label for="subSetting4">ตั้งค่าการแจ้งเตือน</label><br>
                                                    <input type="checkbox" id="subSetting5" name="subSetting" value="5" checked />
                                                    <label for="subSetting5">ตั้งค่าการเชื่อมต่อ</label><br>
                                                    <input type="checkbox" id="subSetting6" name="subSetting" value="6" checked />
                                                    <label for="subSetting6">แพ็คเกจ</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="panel-footer">
                                <button type="button" class="offset-md-3 col-md-9 btn btn-round btn-primary btn-lg w-auto">บันทึก</button>
                            </div>
                        @endif
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
    <script>
        $(document).ready(function() {
            $('.admin .adjustReport').css('display', 'block');
            $('.admin .adjustSaleOrder').css('display', 'block');
            $('.admin .adjustPurchaseOrder').css('display', 'block');
            $('.admin .adjustProduct').css('display', 'block');
            $('.admin .adjustWarehouse').css('display', 'block');
            $('.admin .adjustContact').css('display', 'block');
            $('.admin .adjustSetting').css('display', 'block');
            $('.admin input').prop('disabled', true);

            $('.other .adjustReport').css('display', 'none');
            $('.other .adjustSaleOrder').css('display', 'none');
            $('.other .adjustPurchaseOrder').css('display', 'none');
            $('.other .adjustProduct').css('display', 'none');
            $('.other .adjustWarehouse').css('display', 'none');
            $('.other .adjustContact').css('display', 'none');
            $('.other .adjustSetting').css('display', 'none');
        });

        $(function() {
            $('input[type=radio][name=inputRadiosReport]').change(function() {
                var radioValue = $(this).val();
                if(radioValue === 'none'){
                    $('.adjustReport').css('display', 'none');
                } else if(radioValue === 'all'){
                    $('.adjustReport').css('display', 'block');
                }
            });

            $('input[type=radio][name=inputRadiosSaleOrder]').change(function() {
                var radioValue = $(this).val();
                if(radioValue === 'none'){
                    $('.adjustSaleOrder').css('display', 'none');
                } else if(radioValue === 'all'){
                    $('.adjustSaleOrder').css('display', 'block');
                } else if(radioValue === 'readonly'){
                    $('.adjustSaleOrder').css('display', 'none');
                }
            });

            $('input[type=radio][name=inputRadiosPurchaseOrder]').change(function() {
                var radioValue = $(this).val();
                if(radioValue === 'none'){
                    $('.adjustPurchaseOrder').css('display', 'none');
                } else if(radioValue === 'all'){
                    $('.adjustPurchaseOrder').css('display', 'block');
                } else if(radioValue === 'readonly'){
                    $('.adjustPurchaseOrder').css('display', 'none');
                }
            });

            $('input[type=radio][name=inputRadiosProduct]').change(function() {
                var radioValue = $(this).val();
                if(radioValue === 'none'){
                    $('.adjustProduct1').css('display', 'none');
                    $('.adjustProduct2').css('display', 'block');
                } else if(radioValue === 'all'){
                    $('.adjustProduct1').css('display', 'block');
                    $('.adjustProduct').css('display', 'block');
                    $('.subProduct2show').css('display', 'block');
                } else if(radioValue === 'readonly'){
                    $('.adjustProduct1').css('display', 'block');
                    $('.adjustProduct').css('display', 'block');
                    $('.subProduct2show').css('display', 'none');
                }
            });

            $('input[type=radio][name=inputRadiosWarehouse]').change(function() {
                var radioValue = $(this).val();
                if(radioValue === 'none'){
                    $('.adjustWarehouse').css('display', 'none');
                } else if(radioValue === 'all'){
                    $('.adjustWarehouse').css('display', 'block');
                    $('.adjustWarehouse1').css('display', 'none');
                } else if(radioValue === 'some'){
                    $('.adjustWarehouse').css('display', 'block');
                    $('.adjustWarehouse1').css('display', 'block');
                }
            });

            $('input[type=radio][name=inputRadiosContact]').change(function() {
                var radioValue = $(this).val();
                if(radioValue === 'none'){
                    $('.adjustContact').css('display', 'none');
                } else if(radioValue === 'all'){
                    $('.adjustContact').css('display', 'block');
                } else if(radioValue === 'readonly'){
                    $('.adjustContact').css('display', 'block');
                }
            });

            $('input[type=radio][name=inputRadiosSetting]').change(function() {
                var radioValue = $(this).val();
                if(radioValue === 'none'){
                    $('.adjustSetting').css('display', 'none');
                } else if(radioValue === 'all'){
                    $('.adjustSetting').css('display', 'none');
                } else if(radioValue === 'some'){
                    $('.adjustSetting').css('display', 'block');
                }
            });
        });
    </script>
@endsection
