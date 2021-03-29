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
                <li class="breadcrumb-item"><a href="/contact/agent/list"><i class="icon md-chevron-left" aria-hidden="true">ตัวแทนจำหน่าย</i></a></li>
            </ol>
            <h1 class="page-title">แก้ไขตัวแทนจำหน่าย</h1>
        </div>
        <div class="page-content container-fluid">
            <div class="panel">
                <div class="row">
                    <div class="col-md-7">
                        <div class="panel-body">
                            <form>
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label">ชื่อตัวแทนจำหน่าย<span class="required">*</span></label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" autocomplete="off" value="ข้อมูลตัวอย่าง 1" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label">เบอร์โทรศัพท์</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" autocomplete="off" value="0812345678" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label">อีเมล<span class="required">*</span></label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" autocomplete="off" value="you@zortshop.com" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label">ที่อยู่</label>
                                    <div class="col-md-8">
                                        <textarea class="form-control" rows="3">123 วัดชลอ บางกรวย นนทบุรี 11130</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label">ที่อยู่</label>
                                    <div class="col-md-8">
                                        <textarea class="form-control" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-md-4 col-md-8">
                                        <button type="button" class="btn btn-round btn-primary btn-lg">บันทึก</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection
