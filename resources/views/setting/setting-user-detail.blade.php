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
                <li class="breadcrumb-item"><a href="/setting/user/list"><i class="icon md-chevron-left" aria-hidden="true">ผู้ใช้งาน</i></a></li>
            </ol>
            <h1 class="page-title">รายละเอียดผู้ใช้งาน</h1>
        </div>
        <div class="page-content container-fluid">
            <div class="panel">
                <div class="row">
                    <div class="col-md-7">
                        <div class="panel-body">
                            <form>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">อีเมล</label>
                                    <div class="col-md-9">
                                        <p class="form-control-plaintext">your@email.com</p>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">ชื่อผู้ใช้งาน</label>
                                    <div class="col-md-9">
                                        <p class="form-control-plaintext">Admin</p>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">สิทธิ์การใช้งาน</label>
                                    <div class="col-md-9">
                                        <select class="form-control w-200" disabled>
                                            <option>Admin</option>
                                            <option>User</option>
                                            <option>Staff</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">สถานะ</label>
                                    <div class="col-md-9">
                                        <p class="form-control-plaintext"><span class="badge badge-success">ใช้งานได้</span></p>
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
