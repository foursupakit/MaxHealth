<!-- Modal Signature -->
<div class="modal fade" id="modalSignature" aria-hidden="true" aria-labelledby="modalSignature"
     role="dialog" tabindex="-1">
    <div class="modal-dialog modal-simple modal-center">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h3 class="modal-title">เลือกไฟล์รูปภาพ</h3>
            </div>
            <div class="modal-body pb-0">
                <div class="form-group row">
                    <label for="img" class="col-md-3 col-form-label">เลือกไฟล์รูปภาพ</label>
                    <div class="col-md-9">
                        <input type="file" id="img" name="img" />
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-round">บันทึก</button>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->

<!-- Modal Create Transport -->
<div class="modal fade" id="modalCreateTransport" aria-hidden="true" aria-labelledby="modalCreateTransport"
     role="dialog" tabindex="-1">
    <div class="modal-dialog modal-simple modal-center">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h3 class="modal-title">เพิ่มช่องทางจัดส่ง</h3>
            </div>
            <div class="modal-body pb-0">
                <div class="form-group row">
                    <label class="col-md-3 col-form-label">ช่องทางจัดส่ง
                        <span class="required">*</span>
                    </label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" autocomplete="off" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 col-form-label">ค่าส่งพื้นฐาน</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" autocomplete="off" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 col-form-label">+ต่อชิ้น</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" autocomplete="off" />
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-3">การแสดงผล</div>
                    <div class="col-md-9">
                        <input type="checkbox" id="display2" name="display2" checked>
                        <label for="display2"> แสดงในหน้าสั่งซื้อ</label>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-round">บันทึก</button>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->

<!-- Modal Edit Transport -->
<div class="modal fade" id="modalEditTransport" aria-hidden="true" aria-labelledby="modalEditTransport"
     role="dialog" tabindex="-1">
    <div class="modal-dialog modal-simple modal-center">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h3 class="modal-title">แก้ไขช่องทางจัดส่ง</h3>
            </div>
            <div class="modal-body pb-0">
                <div class="form-group row">
                    <label class="col-md-3 col-form-label">ช่องทางจัดส่ง
                        <span class="required">*</span>
                    </label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" autocomplete="off" value="ไปรษณีย์ไทย" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 col-form-label">ค่าส่งพื้นฐาน</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" autocomplete="off" value="0.00" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 col-form-label">+ต่อชิ้น</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" autocomplete="off" value="0.00" />
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-3">การแสดงผล</div>
                    <div class="col-md-9">
                        <input type="checkbox" id="display1" name="display1" checked>
                        <label for="display1"> แสดงในรายการซื้อขาย</label><br>
                        <input type="checkbox" id="display2" name="display2" checked>
                        <label for="display2"> แสดงในหน้าสั่งซื้อ</label>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-round">บันทึก</button>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->

<!-- Modal Delete Transport -->
<div class="modal fade" id="modalDeleteTransport" aria-hidden="true" aria-labelledby="modalDeleteTransport"
     role="dialog" tabindex="-1">
    <div class="modal-dialog modal-simple modal-center">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h3 class="modal-title">ลบช่องทางจัดส่ง</h3>
            </div>
            <div class="modal-body">
                <p>ยืนยันการลบช่องทางจัดส่ง ?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-pure" data-dismiss="modal">ยกเลิก</button>
                <button type="button" class="btn btn-primary btn-round">ยืนยัน</button>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->

<!-- Modal Create User -->
<div class="modal fade" id="modalCreateUser" aria-hidden="true" aria-labelledby="modalCreateUser"
     role="dialog" tabindex="-1">
    <div class="modal-dialog modal-simple modal-center">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h3 class="modal-title">เพิ่มผู้ใช้งาน</h3>
            </div>
            <div class="modal-body pb-0">
                <div class="form-group row">
                    <label for="img" class="col-md-3 col-form-label">อีเมล<span class="required">*</span></label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" autocomplete="off" />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="img" class="col-md-3 col-form-label">รหัสผ่าน<span class="required">*</span></label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" autocomplete="off" />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="img" class="col-md-3 col-form-label">ยืนยันรหัสผ่าน<span class="required">*</span></label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" autocomplete="off" />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="img" class="col-md-3 col-form-label">ชื่อ<span class="required">*</span></label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" autocomplete="off" />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="img" class="col-md-3 col-form-label">สิทธิ์การใช้งาน<span class="required">*</span></label>
                    <div class="col-md-9">
                        <select class="form-control mt-5">
                            <option>Admin</option>
                            <option>User</option>
                            <option>Staff</option>
                        </select>
                        <a href="/setting/role/create" class="d-block pt-3">+เพิ่มสิทธิ์การใช้งาน</a>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-lg btn-primary btn-round">บันทึก</button>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->
