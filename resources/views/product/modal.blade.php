<!-- Modal Create -->
<div class="modal fade" id="modalCreate" aria-hidden="true" aria-labelledby="modalCreate"
     role="dialog" tabindex="-1">
    <div class="modal-dialog modal-simple modal-center">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title">เพิ่มหมวดหมู่</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <div class="row">
                        <label for="addcategoryname" class="col-md-4 pt-md-2">ชื่อหมวดหมู่<span class="required-field">*</span></label>
                        <div class="col-md-8">
                            <input type="text" id="addcategoryname" class="form-control" autocomplete="off" />
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

<!-- Modal Edit -->
<div class="modal fade" id="modalEdit" aria-hidden="true" aria-labelledby="modalEdit"
     role="dialog" tabindex="-1">
    <div class="modal-dialog modal-simple modal-center">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title">แก้ไขหมวดหมู่</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <div class="row">
                        <label for="editcategoryname" class="col-md-4 pt-md-2">ชื่อหมวดหมู่<span class="required-field">*</span></label>
                        <div class="col-md-8">
                            <input type="text" id="editcategoryname" class="form-control" autocomplete="off" value="เครื่องแต่งกาย" />
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
                <h4 class="modal-title">ลบหมวดหมู่</h4>
            </div>
            <div class="modal-body">
                <p>ยืนยันการลบหมวดหมู่ใช่หรือไม่ ?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-pure" data-dismiss="modal">ยกเลิก</button>
                <button type="button" class="btn btn-primary">ยืนยัน</button>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->
