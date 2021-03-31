<!-- Modal Delete -->
<div class="modal fade" id="modalDelete" aria-hidden="true" aria-labelledby="modalDelete"
     role="dialog" tabindex="-1">
    <div class="modal-dialog modal-simple modal-center">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h3 class="modal-title">ลบรายการซื้อ</h3>
            </div>
            <div class="modal-body">
                <p>ยืนยันการลบรายการซื้อ ?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-pure" data-dismiss="modal">ยกเลิก</button>
                <button type="button" class="btn btn-primary">ยืนยัน</button>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->

<!-- Modal Return Product -->
<div class="modal fade" id="modalDeleteReturnProduct" aria-hidden="true" aria-labelledby="modalDeleteReturnProduct"
     role="dialog" tabindex="-1">
    <div class="modal-dialog modal-simple modal-center">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h3 class="modal-title">ลบรายการรับคืนสินค้า</h3>
            </div>
            <div class="modal-body">
                <p>ยืนยันการลบรายการรับคืนสินค้า ?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-pure" data-dismiss="modal">ยกเลิก</button>
                <button type="button" class="btn btn-primary">ยืนยัน</button>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->

<!-- Modal Print File -->
<div class="modal fade" id="modalPrint" aria-hidden="true" aria-labelledby="modalPrint"
     role="dialog" tabindex="-1">
    <div class="modal-dialog modal-simple modal-center">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h3 class="modal-title">พิมพ์เอกสาร : SO-202101001</h3>
            </div>
            <div class="modal-body">
                <div class="form-group row">
                    <label class="col-md-3 col-form-label">ขนาด</label>
                    <div class="col-md-9 mt-10 mb-10">
                        <div class="radio-custom radio-default radio-inline">
                            <input type="radio" id="inputRadiosPaperA4" name="inputRadiosPaper" checked value="a4" />
                            <label for="inputRadiosPaperA4">A4</label>
                        </div>
                        <div class="radio-custom radio-default radio-inline">
                            <input type="radio" id="inputRadiosPaperA5" name="inputRadiosPaper" value="a5" />
                            <label for="inputRadiosPaperA5">A5</label>
                        </div>
                        <div class="radio-custom radio-default radio-inline">
                            <input type="radio" id="inputRadiosReceipt" name="inputRadiosPaper" value="recript" />
                            <label for="inputRadiosReceipt">ใบเสร็จ</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row adjustformatpaper">
                    <label class="col-md-3 col-form-label">รูปแบบ</label>
                    <div class="col-md-9">
                        <select class="form-control mt-5 w-200">
                            <option selected>ทั่วไป</option>
                            <option>ฟอร์มใบกำกับภาษี</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row adjestheading1">
                    <label class="col-md-3 col-form-label">หัวเรื่อง<span class="required">*</span></label>
                    <div class="col-md-9">
                        <select class="form-control mt-5">
                            <option class="d-none"></option>
                            <option>ใบกำกับภาษี</option>
                            <option>ใบเสร็จรับเงิน</option>
                            <option>ใบลดหนี้</option>
                            <option>ใบเพิ่มหนี้</option>
                            <option>ใบสั่งซื้อสินค้า</option>
                            <option>ใบแจ้งหนี้/วางบิล</option>
                            <option>หนังสือหัก ณ ที่จ่าย</option>
                        </select>
                        <div class="mt-2">สามารถเว้นวรรค 2 ช่องเพื่อขึ้นบรรทัดใหม่ในเอกสาร</div>
                    </div>
                </div>
                <div class="form-group row adjestheading2">
                    <label class="col-md-3 col-form-label">หัวเรื่อง</label>
                    <div class="col-md-9">
                        <select class="form-control mt-5 w-300">
                            <option class="d-none"></option>
                            <option selected>ใบเสร็จรับเงิน</option>
                            <option>ใบกำกับภาษีอย่างย่อ</option>
                            <option>ใบเสร็จรับเงิน/ใบกำกับภาษีอย่างย่อ</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3"></label>
                    <div class="col-md-9">
                        <div class="checkbox-custom checkbox-primary">
                            <input type="checkbox" id="inputChecked">
                            <label for="inputChecked">กำหนดหมายเลขรายการเอง</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row adjusttransactionnumberarea">
                    <label class="col-md-3 col-form-label">หมายเลขรายการ</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" autocomplete="off" />
                        <a href="" class="d-block mt-1" data-target="#modalCreate" data-toggle="modal">แก้ไขคำนำหน้าเอกสาร</a>
                    </div>
                </div>
                <div class="form-group row adjustdate">
                    <label class="col-md-3 col-form-label">วันที่</label>
                    <div class="col-md-9">
                        <div class="form-group mb-0">
                            <div class="input-group input-group-icon">
                                <input type="text" class="form-control datepicker" data-plugin="datepicker" data-date-format="d/m/yyyy" readonly>
                                <div class="input-group-append">
                                <span class="input-group-text">
                                  <i class="icon md-close" aria-hidden="true"></i>
                                </span>
                                    <span class="input-group-text">
                                  <i class="icon md-calendar" aria-hidden="true"></i>
                                </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-lg btn-round">พิมพ์เอกสาร</button>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->
