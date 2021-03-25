@extends('layout.main')

@section('style')
    <!-- Plugins -->
    <link rel="stylesheet" href="../../../global/vendor/blueimp-file-upload/jquery.fileupload.css">
    <link rel="stylesheet" href="../../../global/vendor/dropify/dropify.css">

    <link rel="stylesheet" href="../../assets/examples/css/pages/profile.css">

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
            <h1 class="page-title">ข้อมูลส่วนตัว</h1>
        </div>
        <div class="page-content container-fluid">
            <div class="panel">
                @include('setting.modal')
                <div class="row">
                    <div class="col-md-7">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="icon icon-circle md-assignment white bg-blue-600" style="pointer-events: none;" aria-hidden="true"></i><span class="ml-10">ข้อมูลบริษัท</span>
                            </h3>
                        </div>
                        <div class="panel-body">
                            <div class="example">
                                <form>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">ชื่อบริษัท</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" autocomplete="off" value="Max Health" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">เลขผู้เสียภาษี</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" autocomplete="off" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">ที่อยู่</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" autocomplete="off" />
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="icon icon-circle md-assignment white bg-blue-600" style="pointer-events: none;" aria-hidden="true"></i><span class="ml-10">ข้อมูลติดต่อ</span>
                            </h3>
                        </div>
                        <div class="panel-body">
                            <div class="example">
                                <form>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">อีเมล</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" autocomplete="off" value="test@gmail.com" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">โทรสาร(Fax)</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" autocomplete="off" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">Website</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" autocomplete="off" />
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="icon icon-circle md-settings white bg-blue-600" style="pointer-events: none;" aria-hidden="true"></i><span class="ml-10">ตั้งค่าอื่นๆ</span>
                            </h3>
                        </div>
                        <div class="panel-body">
                            <div class="example">
                                <form>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">รหัสผ่าน</label>
                                        <div class="col-md-9">
                                            <p class="form-control-plaintext">
                                                ********
                                                <a href="/setting/change-password" class="mt-1 float-right"><i class="icon md-comment-edit"></i> เปลี่ยนรหัสผ่าน</a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">ลายเซ็นอิเล็กทรอนิกส์</label>
                                        <div class="col-md-9">
                                            <a href="" class="form-control-plaintext" style="color: #3949ab;" data-target="#modalSignature" data-toggle="modal">เพิ่มรูปภาพ</a>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">ภาษา</label>
                                        <div class="col-md-9">
                                            <select class="form-control example mt-5">
                                                <option>ภาษาไทย</option>
                                                <option>ภาษาอังกฤษ</option>
                                            </select>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <button type="button" class="btn btn-round btn-primary btn-lg">บันทึก</button>
                        </div>
                    </div>
                    <div class="col-md-5 text-center">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="icon icon-circle md-image white bg-blue-600" style="pointer-events: none;" aria-hidden="true"></i><span class="ml-10">รูปโลโก้บริษัท</span>
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
        </div>
    </div>
@endsection

@section('script')
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
