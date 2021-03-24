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
                <li class="breadcrumb-item"><a href="/product"><i class="icon md-chevron-left" aria-hidden="true">สินค้า</i></a></li>
            </ol>
            <h1 class="page-title">เพิ่มสินค้าใหม่</h1>
        </div>
        <div class="page-content container-fluid">
            <div class="panel">
                @include('product.modal')
                <div class="row">
                    <div class="col-md-6">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="icon icon-circle md-assignment white bg-blue-600" style="pointer-events: none;" aria-hidden="true"></i><span class="ml-10">รายละเอียดสินค้า</span>
                            </h3>
                        </div>
                        <div class="panel-body">
                            <div class="example">
                                <form>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">รหัสสินค้า</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" autocomplete="off" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">ชื่อสินค้า
                                            <span class="required">*</span>
                                        </label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" autocomplete="off" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">หมวดหมู่</label>
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <select class="form-control mt-5">
                                                    <option>ไม่มีหมวดหมู่</option>
                                                    <option>เครื่องใช้ในบ้าน</option>
                                                    <option>เครื่องแต่งกาย</option>
                                                </select>
                                                <a href="" class="d-block mt-1" data-target="#modalCreate" data-toggle="modal">+เพิ่มหมวดหมู่</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">หน่วย</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" autocomplete="off" placeholder="ตัวอย่าง: ชิ้น, ตัว" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">Tag สินค้า</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" autocomplete="off" />
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="icon icon-circle md-truck white bg-blue-600" style="pointer-events: none;" aria-hidden="true"></i><span class="ml-10">ราคาสินค้า</span>
                            </h3>
                        </div>
                        <div class="panel-body">
                            <div class="example">
                                <form>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">ราคาซื้อ</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" autocomplete="off" placeholder="0" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">ราคาขาย</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" autocomplete="off" placeholder="0" />
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="icon icon-circle md-truck white bg-blue-600" style="pointer-events: none;" aria-hidden="true"></i><span class="ml-10">ข้อมูลขนส่ง</span>
                            </h3>
                        </div>
                        <div class="panel-body">
                            <div class="example">
                                <form>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">น้ำหนัก (กรัม)</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" autocomplete="off" placeholder="0" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">ขนาด (กว้าง ยาว สูง) (ซม.)</label>
                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <input type="text" class="form-control" autocomplete="off" placeholder="กว้าง" />
                                                </div>
                                                <div class="col-md-4">
                                                    <input type="text" class="form-control" autocomplete="off" placeholder="ยาว" />
                                                </div>
                                                <div class="col-md-4">
                                                    <input type="text" class="form-control" autocomplete="off" placeholder="สูง" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="icon icon-circle md-image white bg-blue-600" style="pointer-events: none;" aria-hidden="true"></i><span class="ml-10">รูปภาพสินค้า</span>
                            </h3>
                        </div>
                        <div class="panel-body">
                            <div class="example">
                                <input type="file" id="input-file-now" data-plugin="dropify" data-default-file="" />
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
                                <i class="icon icon-circle md-assignment white bg-blue-600" style="pointer-events: none;" aria-hidden="true"></i><span class="ml-10">คลังสินค้า</span>
                            </h3>
                        </div>
                        <div class="panel-body">
                            <div class="example">
                                <form>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">ยอดยกมา</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" autocomplete="off" placeholder="0" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">สินค้าเข้าที่</label>
                                        <div class="col-md-9">
                                            <select class="form-control mt-5">
                                                <option>คลังสินค้าหลัก</option>
                                                <option>สาขาพระราม 9</option>
                                                <option>สาขาธนบุรี</option>
                                            </select>
                                        </div>
                                    </div>
                                </form>
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
