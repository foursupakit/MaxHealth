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
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/product/warehouse"><i class="icon md-chevron-left" aria-hidden="true">กลับ</i></a></li>
            </ol>
            <h1 class="page-title">แก้ไขคลังสินค้า/สาขา</h1>
        </div>
        <div class="page-content container-fluid">
            <div class="panel">
                @include('setting.modal')
                <div class="row">
                    <div class="col-md-7">
                        <div class="panel-body">
                            <form>
                                <div class="form-group">
                                    <div class="row">
                                        <label for="editcategory" class="col-md-4 col-form-label">รหัสคลัง/สาขา</label>
                                        <div class="col-md-8">
                                            <select class="form-control mt-5" id="editcategory" disabled>
                                                <option>ทั่วไป</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label for="editwarehouse" class="col-md-4 col-form-label">รหัสคลัง/สาขา</label>
                                        <div class="col-md-8">
                                            <input type="text" id="editwarehouse" class="form-control" autocomplete="off" value="W0001" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label for="editbranch" class="col-md-4 col-form-label">ชื่อคลัง/สาขา</label>
                                        <div class="col-md-8">
                                            <input type="text" id="editbranch" class="form-control" autocomplete="off" value="คลังสินค้าหลัก" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label for="editprovince" class="col-md-4 col-form-label">จังหวัด</label>
                                        <div class="col-md-8">
                                            <select class="form-control mt-5 w-200" id="editprovince">
                                                <option>ไม่ระบุ</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label for="editDistrict" class="col-md-4 col-form-label">อำเภอ/เขต</label>
                                        <div class="col-md-8">
                                            <select class="form-control mt-5 w-200" id="editDistrict">
                                                <option>ไม่ระบุ</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label for="editAddress" class="col-md-4 col-form-label">ที่อยู่</label>
                                        <div class="col-md-8">
                                            <textarea class="form-control" id="editAddress" rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="panel-footer">
                            <button type="button" class="offset-md-4 col-md-8 btn btn-round btn-primary btn-lg w-auto" onclick="location.href='/product/warehouse'">บันทึก</button>
                        </div>
                    </div>
                    <div class="col-md-5 text-center">
                        <div class="panel-body">
                            <div class="text-center">
                                รูปโลโก้บริษัท
                            </div>
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
