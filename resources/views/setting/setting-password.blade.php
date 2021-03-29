@extends('layout.main')

@section('style')
    <style>
        .icon-wrap > .icon {
            font-size: 65px;
        }
        .pointer {
            cursor: pointer;
        }

        .panel-warning>.panel-body {
            color: #fff;
            background-color: #ff9800;
            border-color: #f06700;
        }
    </style>
@endsection

@section('content')
    <div class="page page-profile">
        <div class="page-header">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/setting"><i class="icon md-chevron-left" aria-hidden="true">กลับ</i></a></li>
            </ol>
            <h1 class="page-title">เปลี่ยนรหัสผ่าน</h1>
        </div>
        <div class="page-content container-fluid">
            <div class="panel panel-warning shadow-none" style="background-color: initial;">
                <div class="panel-body" style="border-radius: 1.5rem;">
                    <h3 class="text-white">คำแนะนำในการตั้งรหัสผ่าน</h3>
                    <ul>
                        <li>มีความยาวอย่างน้อย 8 ตัวอักษร</li>
                        <li>ต้องมีตัวเลข, ตัวอักษรภาษาอังกฤษพิมพ์ใหญ่, และตัวอักษรภาษาอังกฤษพิมพ์เล็ก อย่างน้อย 1 ตัวอักษร</li>
                        <li>อย่าตั้งรหัสผ่านที่ง่ายเกินไปเพื่อความปลอดภัย</li>
                    </ul>
                </div>
            </div>
            <div class="panel">
                <div class="row">
                    <div class="col-md-7">
                        <div class="panel-body">
                            <form>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">รหัสผ่านเดิม</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" autocomplete="off" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">รหัสผ่านใหม่</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" autocomplete="off" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">ยืนยันรหัสผ่านใหม่</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" autocomplete="off" />
                                    </div>
                                </div>
                        </form>
                        </div>
                        <div class="panel-footer">
                            <button type="button" class="btn btn-round btn-primary btn-lg">เปลี่ยนรหัสผ่าน</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection
