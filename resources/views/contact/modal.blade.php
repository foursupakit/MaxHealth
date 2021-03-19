<!-- Modal Create -->
<div class="modal fade" id="modalCreate" aria-hidden="true" aria-labelledby="modalCreate"
     role="dialog" tabindex="-1">
    <div class="modal-dialog modal-simple modal-center">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title">เพิ่มผู้ติดต่อใหม่</h4>
            </div>
            <div class="modal-body">
                <div class="panel-heading">
                    <h5 class="panel-title">
                        <i class="icon icon-circle md-image white bg-blue-600" style="pointer-events: none;" aria-hidden="true"></i><span class="ml-10">ผู้ติดต่อ</span>
                    </h5>
                </div>
                <div class="panel-body">
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
                            <label class="col-md-4"></label>
                            <div class="col-md-8">
                                <input type="checkbox"> กำหนดเลขผู้เสียภาษี, ชื่อสาขา, เลขที่สาขา
                            </div>
                        </div>
                    </div>
                    {{--                <div class="form-group">--}}
                    {{--                    <div class="row">--}}
                    {{--                        <label for="addnumtag" class="col-md-4 pt-md-2">เลขผู้เสียภาษี</label>--}}
                    {{--                        <div class="col-md-8">--}}
                    {{--                            <input type="text" id="addnumtag" class="form-control" autocomplete="off" />--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    {{--                </div>--}}
                    {{--                <div class="form-group">--}}
                    {{--                    <div class="row">--}}
                    {{--                        <label for="addnamecompany" class="col-md-4 pt-md-2">ชื่อสาขา</label>--}}
                    {{--                        <div class="col-md-8">--}}
                    {{--                            <input type="text" id="addnamecompany" class="form-control" autocomplete="off" />--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    {{--                </div>--}}
                    {{--                <div class="form-group">--}}
                    {{--                    <div class="row">--}}
                    {{--                        <label for="addnumcompany" class="col-md-4 pt-md-2">เลขที่สาขา</label>--}}
                    {{--                        <div class="col-md-8">--}}
                    {{--                            <input type="text" id="addnumcompany" class="form-control" autocomplete="off" />--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    {{--                </div>--}}
                    <div class="form-group">
                        <div class="row">
                            <label for="addtag" class="col-md-4 pt-md-2">Tag ผู้ติดต่อ</label>
                            <div class="col-md-8">
                                <input type="text" id="addtag" class="form-control" autocomplete="off" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-heading">
                    <h5 class="panel-title">
                        <i class="icon icon-circle md-image white bg-blue-600" style="pointer-events: none;" aria-hidden="true"></i><span class="ml-10">ข้อมูลผู้ติดต่อ</span>
                    </h5>
                </div>
                <div class="panel-body">
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
                </div>
                <div class="panel-heading">
                    <h5 class="panel-title">
                        <i class="icon icon-circle md-image white bg-blue-600" style="pointer-events: none;" aria-hidden="true"></i><span class="ml-10">สื่ออนไลน์</span>
                    </h5>
                </div>
                <div class="panel-body">
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
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">บันทึก</button>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->

<!-- Modal Delete -->
<div class="modal fade" id="modalDelete" aria-hidden="true" aria-labelledby="modalDelete"
     role="dialog" tabindex="-1">
    <div class="modal-dialog modal-simple modal-center">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title">ลบผู้ติดต่อ</h4>
            </div>
            <div class="modal-body">
                <p>ยืนยันการลบผู้ติดต่อใช่หรือไม่ ?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-pure" data-dismiss="modal">ยกเลิก</button>
                <button type="button" class="btn btn-primary">ยืนยัน</button>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->
