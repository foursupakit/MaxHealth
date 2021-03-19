@extends('layout.main')

@section('style')
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
                    <div class="col-md-6">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="icon icon-circle md-accounts white bg-blue-600" style="pointer-events: none;" aria-hidden="true"></i><span class="ml-10">ข้อมูล</span>
                            </h3>
                        </div>
                        <div class="panel-body">
                            <div class="example">
                                <form>
                                    <div class="form-group">
                                        <div class="row">
                                            <label for="addpicture" class="col-md-4 pt-md-2">รูปภาพ</label>
                                            <div class="col-md-8">
                                                <input type="text" id="addpicture" class="form-control w-200" autocomplete="off" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label for="addcode" class="col-md-4 pt-md-2">รหัส<span class="required-field">*</span></label>
                                            <div class="col-md-8">
                                                <input type="text" id="addcode" class="form-control w-200" autocomplete="off" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label for="addname" class="col-md-4 pt-md-2">ชื่อ<span class="required-field">*</span></label>
                                            <div class="col-md-8">
                                                <input type="text" id="addname" class="form-control" autocomplete="off" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label for="addnumtag" class="col-md-4 pt-md-2">เลขผู้เสียภาษี</label>
                                            <div class="col-md-8">
                                                <input type="text" id="addnumtag" class="form-control" autocomplete="off" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label for="addnamecompany" class="col-md-4 pt-md-2">ชื่อสาขา</label>
                                            <div class="col-md-8">
                                                <input type="text" id="addnamecompany" class="form-control" autocomplete="off" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label for="addnumcompany" class="col-md-4 pt-md-2">เลขที่สาขา</label>
                                            <div class="col-md-8">
                                                <input type="text" id="addnumcompany" class="form-control" autocomplete="off" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label for="addDetail" class="col-md-4 pt-md-2">คำอธิบาย</label>
                                            <div class="col-md-8">
                                                <textarea type="text" id="addDetail" class="form-control" autocomplete="off"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label for="addtag" class="col-md-4 pt-md-2">Tag ผู้ติดต่อ</label>
                                            <div class="col-md-8">
                                                <input type="text" id="addtag" class="form-control" autocomplete="off" />
                                                <div class="text-muted mt-2">ใช้เแบ่งประเภทของผู้ติดต่อ เพื่อเพิ่มประสิทธิภาพในการค้นหาอย่างรวดเร็ว</div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
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
