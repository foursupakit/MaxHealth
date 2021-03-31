@extends('layout.main')

@section('style')
    <!-- Plugins -->
    <link rel="stylesheet" href="../../../global/vendor/blueimp-file-upload/jquery.fileupload.css">
    <link rel="stylesheet" href="../../../global/vendor/dropify/dropify.css">

    <style>
        .pointer {
            cursor: pointer;
        }
    </style>
@endsection

@section('content')
    <div class="page">
        <div class="page-header">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/product"><i class="icon md-chevron-left" aria-hidden="true">กลับไปยังหน้าสินค้า</i></a></li>
            </ol>
            <h1 class="page-title">แก้ไข</h1>
        </div>
        <div class="page-content container-fluid">
            <div class="panel">
                <div class="row">
                    <div class="col-md-7">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="icon icon-circle md-alert-circle-o white bg-blue-600" style="pointer-events: none;" aria-hidden="true"></i><span class="ml-10">ข้อมูล</span>
                            </h3>
                        </div>
                        <div class="panel-body">
                            <form>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-md-4 col-form-label">รหัสสินค้า</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" autocomplete="off" value="P0001-1" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-md-4 col-form-label">ชื่อสินค้า<span class="required">*</span></label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" autocomplete="off" value="เสื้อ(s)" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-md-4 col-form-label">หมวดหมู่</label>
                                        <div class="col-md-8">
                                            <select class="form-control mt-5">
                                                <option>ไม่มีหมวดหมู่</option>
                                                <option>เครื่องใช้ในบ้าน</option>
                                                <option selected>เครื่องแต่งกาย</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-md-4 col-form-label">ราคาซื้อ</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control w-200" autocomplete="off" value="300.00" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-md-4 col-form-label">ราคาขาย</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control w-200" autocomplete="off" value="600.00" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label for="addnumcompany" class="col-md-4 col-form-label">น้ำหนัก (กรัม)</label>
                                        <div class="col-md-8">
                                            <input type="text" id="addnumcompany" class="form-control w-200" autocomplete="off" value="0.00" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label for="addnumcompany" class="col-md-4 col-form-label">ขนาด (ซม.)</label>
                                        <div class="col-md-8">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <input type="text" class="form-control" autocomplete="off" placeholder="กว้าง" value="0.00" />
                                                </div>
                                                <div class="col-md-4">
                                                    <input type="text" class="form-control" autocomplete="off" placeholder="ยาว" value="0.00" />
                                                </div>
                                                <div class="col-md-4">
                                                    <input type="text" class="form-control" autocomplete="off" placeholder="สูง" value="0.00" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label  class="col-md-4 col-form-label">หน่วย</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" autocomplete="off" value="ตัว" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-md-4 col-form-label">คำอธิบาย</label>
                                        <div class="col-md-8">
                                            <textarea type="text" class="form-control" autocomplete="off"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-md-4 col-form-label">Tag ผู้ติดต่อ</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" autocomplete="off" />
                                            <div class="text-muted mt-2">ใช้เแบ่งประเภทของผู้ติดต่อ เพื่อเพิ่มประสิทธิภาพในการค้นหาอย่างรวดเร็ว</div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="icon icon-circle md-image white bg-blue-600" style="pointer-events: none;" aria-hidden="true"></i><span class="ml-10">รูปภาพ</span>
                            </h3>
                        </div>
                        <div class="panel-body">
                            <input type="file" id="input-file-now" data-plugin="dropify" data-default-file="" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="icon icon-circle md-settings white bg-blue-600" style="pointer-events: none;" aria-hidden="true"></i><span class="ml-10">ตั้งค่า</span>
                            </h3>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-md-4">การตั้งค่า</label>
                                    <div class="col-md-8">
                                        <input type="checkbox" id="vehicle1" name="vehicle1" value="">
                                        <label for="vehicle1"> แสดงในหน้าสั่งซื้อ</label><br>
                                        <div class="d-flex">
                                            <div class="mr-3">
                                                <input type="checkbox" id="vehicle3" name="vehicle3" value="">
                                            </div>
                                            <div>
                                                <label for="vehicle3"> ล็อต/วันหมดอายุ</label><br>
                                                <input type="text" class="form-control d-inline-block w-50 mr-1" autocomplete="off" value="90" /> วัน
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
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
                                        <div class="d-flex">
                                            <div class="mr-3">
                                                <input type="checkbox" id="inventory" name="inventory" value="">
                                            </div>
                                            <div>
                                                <label for="inventory">แจ้งเตือนสินค้าคงเหลือน้อยกว่า</label><br>
                                                <input type="text" class="form-control d-inline-block w-100 mr-1" autocomplete="off" value="5" disabled /> ชิ้น
                                            </div>
                                        </div>
                                        <div class="d-flex mt-4">
                                            <div class="mr-3">
                                                <input type="checkbox" id="isremind" name="isremind" value="">
                                            </div>
                                            <div>
                                                <label for="isremind">แจ้งเตือนหลังทำรายการขาย</label><br>
                                                <input type="text" class="form-control d-inline-block w-50 mr-1" autocomplete="off" value="5" /> วัน
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <div class="col-md-12">
                            <button type="button" class="btn btn-round btn-primary btn-lg">บันทึก</button>
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

    <!-- Plugins -->
    <script src="../../../global/vendor/jquery-ui/jquery-ui.js"></script>
    <script src="../../../global/vendor/blueimp-tmpl/tmpl.js"></script>
    <script src="../../../global/vendor/blueimp-canvas-to-blob/canvas-to-blob.js"></script>
    <script src="../../../global/vendor/blueimp-load-image/load-image.all.min.js"></script>
    <script src="../../../global/vendor/blueimp-file-upload/jquery.fileupload.js"></script>
    <script src="../../../global/vendor/blueimp-file-upload/jquery.fileupload-process.js"></script>
    <script src="../../../global/vendor/blueimp-file-upload/jquery.fileupload-image.js"></script>
    <script src="../../../global/vendor/blueimp-file-upload/jquery.fileupload-audio.js"></script>
    <script src="../../../global/vendor/blueimp-file-upload/jquery.fileupload-video.js"></script>
    <script src="../../../global/vendor/blueimp-file-upload/jquery.fileupload-validate.js"></script>
    <script src="../../../global/vendor/blueimp-file-upload/jquery.fileupload-ui.js"></script>
    <script src="../../../global/vendor/dropify/dropify.min.js"></script>

    <!-- Page -->
    <script src="../../../global/js/Plugin/dropify.js"></script>
    <script src="../../assets/examples/js/forms/uploads.js"></script>
@endsection
