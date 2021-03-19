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
                <li class="breadcrumb-item"><a href="/product"><i class="icon md-chevron-left" aria-hidden="true">ผู้ติดต่อ</i></a></li>
            </ol>
            <h1 class="page-title">แก้ไขผู้ติดต่อ</h1>
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
            <div class="panel">
                <div class="row">
                    <div class="col-md-6">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="icon icon-circle md-accounts white bg-blue-600" style="pointer-events: none;" aria-hidden="true"></i><span class="ml-10">การติดต่อ</span>
                            </h3>
                        </div>
                        <div class="panel-body">
                            <div class="example">
                                <form>
                                    <div class="form-group">
                                        <div class="row">
                                            <label for="addphone" class="col-md-4 pt-md-2">เบอร์โทรศัพท์</label>
                                            <div class="col-md-8">
                                                <input type="text" id="addphone" class="form-control w-200" autocomplete="off" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label for="addphone1" class="col-md-4 pt-md-2">เบอร์โทรศัพท์มือถือ</label>
                                            <div class="col-md-8">
                                                <input type="text" id="addphone1" class="form-control w-200" autocomplete="off" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label for="addphone2" class="col-md-4 pt-md-2">เบอร์โทรสาร</label>
                                            <div class="col-md-8">
                                                <input type="text" id="addphone2" class="form-control w-200" autocomplete="off" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label for="addemail" class="col-md-4 pt-md-2">อีเมล</label>
                                            <div class="col-md-8">
                                                <input type="text" id="addemail" class="form-control" autocomplete="off" placeholder="you@email.com" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label for="addAddress" class="col-md-4 pt-md-2">ที่อยู่</label>
                                            <div class="col-md-8">
                                                <textarea type="text" id="addAddress" class="form-control" autocomplete="off"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label for="addcontactname" class="col-md-4 pt-md-2">ชื่อผู้ติดต่อ</label>
                                            <div class="col-md-8">
                                                <input type="text" id="addcontactname" class="form-control" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                </form>
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
                                <i class="icon icon-circle md-accounts white bg-blue-600" style="pointer-events: none;" aria-hidden="true"></i><span class="ml-10">ข้อมูลที่อยู่ผู้รับ</span>
                            </h3>
                        </div>
                        <div class="panel-body">
                            <div class="example">
                                <form>
                                    <div class="form-group">
                                        <div class="row">
                                            <label for="namerecipient" class="col-md-4 pt-md-2">ชื่อผู้รับ</label>
                                            <div class="col-md-8">
                                                <input type="text" id="namerecipient" class="form-control" autocomplete="off" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label for="phonerecipient" class="col-md-4 pt-md-2">เบอร์โทรศัพท์ผู้รับ</label>
                                            <div class="col-md-8">
                                                <input type="text" id="phonerecipient" class="form-control" autocomplete="off" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label for="emailrecipient" class="col-md-4 pt-md-2">อีเมลผู้รับ</label>
                                            <div class="col-md-8">
                                                <input type="text" id="emailrecipient" class="form-control" autocomplete="off" placeholder="you@email.com" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label for="addresssrecipient" class="col-md-4 pt-md-2">ที่อยู่/จัดส่ง</label>
                                            <div class="col-md-8">
                                                <input type="text" id="addresssrecipient" class="form-control" autocomplete="off" />
                                            </div>
                                        </div>
                                    </div>
                                </form>
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
                                <i class="icon icon-circle md-accounts white bg-blue-600" style="pointer-events: none;" aria-hidden="true"></i><span class="ml-10">ธนาคาร</span>
                            </h3>
                        </div>
                        <div class="panel-body">
                            <div class="example">
                                <form>
                                    <div class="form-group">
                                        <div class="row">
                                            <label for="bankname" class="col-md-4 pt-md-2">ชื่อธนาคาร</label>
                                            <div class="col-md-8">
                                                <input type="text" id="bankname" class="form-control" autocomplete="off" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label for="bankaccountname" class="col-md-4 pt-md-2">ชื่อบัญชีธนาคาร</label>
                                            <div class="col-md-8">
                                                <input type="text" id="bankaccountname" class="form-control" autocomplete="off" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label for="bankaccountnumber" class="col-md-4 pt-md-2">เลขที่บัญชีธนาคาร</label>
                                            <div class="col-md-8">
                                                <input type="text" id="bankaccountnumber" class="form-control" autocomplete="off" />
                                            </div>
                                        </div>
                                    </div>
                                </form>
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
                                <i class="icon icon-circle md-accounts white bg-blue-600" style="pointer-events: none;" aria-hidden="true"></i><span class="ml-10">สื่ออนไลน์</span>
                            </h3>
                        </div>
                        <div class="panel-body">
                            <div class="example">
                                <form>
                                    <div class="form-group">
                                        <div class="row">
                                            <label for="addfacebook" class="col-md-4 pt-md-2"><i class="icon bd-facebook mr-10"></i>Facebook</label>
                                            <div class="col-md-8">
                                                <input type="text" id="addfacebook" class="form-control" autocomplete="off" placeholder="https://www.facebook.com/xxx" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label for="addline" class="col-md-4 pt-md-2"><img src="/assets/images/line.png" width="15" class="mr-10">Line</label>
                                            <div class="col-md-8">
                                                <input type="text" id="addline" class="form-control" autocomplete="off" placeholder="http://line.me/ti/p/xxx" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label for="addig" class="col-md-4 pt-md-2"><i class="icon bd-instagram mr-10"></i>Instagram</label>
                                            <div class="col-md-8">
                                                <input type="text" id="addig" class="form-control" autocomplete="off" placeholder="https://www.instagram.com/xxx" />
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-md-12">
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
@endsection
