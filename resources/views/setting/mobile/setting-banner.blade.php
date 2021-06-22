@extends('layout.main')

@section('style')
    <link rel="stylesheet" href="../../../global/vendor/blueimp-file-upload/jquery.fileupload.css">
    <link rel="stylesheet" href="../../../global/vendor/dropify/dropify.css">

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
            <h1 class="page-title">จัดการ Banner</h1>
        </div>
        <div class="page-content container-fluid">
            <div class="panel">
                <div class="row row-lg">
                    <div class="col-md-12">
                        <div class="panel-body">
                            <form>
                                <div class="col-md-10 col-lg-8">
                                    <!-- Example Input Focus -->
                                    <div class="form-group">
                                        <h4 class="example-title">ชื่อ Banner</h4>
                                        <input type="text" class="form-control" id="nameBanner">
                                    </div>
                                    <!-- End Example Input Focus -->
                                </div>
                                <div class="col-md-10 col-lg-8">
                                    <!-- Example Textarea -->
                                    <div class="form-group">
                                        <h4 class="example-title">รายละเอียด Banner</h4>
                                        <textarea class="form-control" id="textareaBanner" rows="3"></textarea>
                                    </div>
                                    <!-- End Example Textarea -->
                                </div>
                                <div class="col-md-10 col-lg-8">
                                    <div class="form-group">
                                        <h4 class="example-title">รูปภาพ (อัพโหลดได้หลายรูป)</h4>
                                        <div class="example">
                                            <input type="file" id="input-file-now" data-plugin="dropify" data-default-file="" multiple
                                            />
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="panel-footer">
                            <div class="col-md-8">
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

    <!-- Dropify -->
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

    <script src="../../../global/js/Plugin/dropify.js"></script>

    <script src="../../assets/examples/js/forms/uploads.js"></script>
@endsection
