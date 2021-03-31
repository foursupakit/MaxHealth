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
            <h1 class="page-title">ตั้งค่าทั่วไป</h1>
        </div>
        <div class="page-content container-fluid">
            <div class="panel">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="icon icon-circle md-money white bg-blue-600" style="pointer-events: none;" aria-hidden="true"></i><span class="ml-10">ตั้งค่าส่วนแบ่งยอดขาย</span>
                            </h3>
                        </div>
                        <div class="panel-body">
                            <form>
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label">เปอร์เซ็นจากยอดขายสินค้าสำหรับ Dealer</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control w-300 d-inline-block" autocomplete="off" /> ต่อสินค้า 1 ชิ้น
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label">เปอร์เซ็นจากยอดขายสินค้าสำหรับ Distributor</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control w-300 d-inline-block" autocomplete="off" /> ต่อสินค้า 1 ชิ้น
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="panel-footer">
                            <div class="offset-md-4 col-md-8">
                                <button type="button" class="btn btn-round btn-primary btn-lg w-auto">บันทึก</button>
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
                                <i class="icon icon-circle md-money white bg-blue-600" style="pointer-events: none;" aria-hidden="true"></i><span class="ml-10">ตั้งค่าการถอดเงินขั้นต่ำ</span>
                            </h3>
                        </div>
                        <div class="panel-body">
                            <form>
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label">ถอดเงินขั้นต่ำ</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control w-300" autocomplete="off" value="10,000 บาท" />
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="panel-footer">
                            <div class="offset-md-4 col-md-8">
                                <button type="button" class="btn btn-round btn-primary btn-lg w-auto">บันทึก</button>
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
                                <i class="icon icon-circle md-notifications white bg-blue-600" style="pointer-events: none;" aria-hidden="true"></i><span class="ml-10">แจ้งเตือน</span>
                            </h3>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-md-4">แจ้งเตือนสินค้าคงเหลือ</label>
                                    <div class="col-md-8">
                                        <div class="checkbox-custom checkbox-primary">
                                            <input type="checkbox" id="inventory" name="inventory" value="">
                                            <label for="inventory">แจ้งเตือนสินค้าคงเหลือน้อยกว่า</label><br>
                                            <input type="text" class="form-control d-inline-block w-100 mr-1 ml-10 mt-2" autocomplete="off" value="5" disabled /> ชิ้น
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <div class="offset-md-4 col-md-8">
                                <button type="button" class="btn btn-round btn-primary btn-lg w-auto">บันทึก</button>
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
    <script src="../../../global/vendor/jquery-placeholder/jquery.placeholder.js"></script>

    <!-- Page -->
    <script src="../../../global/js/Plugin/jquery-placeholder.js"></script>
    <script src="../../../global/js/Plugin/input-group-file.js"></script>
@endsection
