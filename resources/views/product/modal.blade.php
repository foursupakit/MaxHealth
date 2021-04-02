<!-- Modal Create Category -->
<div class="modal fade" id="modalCreateCategory" aria-hidden="true" aria-labelledby="modalCreateCategory"
     role="dialog" tabindex="-1">
    <div class="modal-dialog modal-simple modal-center">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h3 class="modal-title">เพิ่มหมวดหมู่</h3>
            </div>
            <div class="modal-body">
                <div class="form-group row">
                    <label for="addcategoryname" class="col-md-4 col-form-label">ชื่อหมวดหมู่<span class="required">*</span></label>
                    <div class="col-md-8">
                        <input type="text" id="addcategoryname" class="form-control" autocomplete="off" />
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-round btn-lg">บันทึก</button>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->

<!-- Modal Edit Category -->
<div class="modal fade" id="modalEditCategory" aria-hidden="true" aria-labelledby="modalEditCategory"
     role="dialog" tabindex="-1">
    <div class="modal-dialog modal-simple modal-center">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h3 class="modal-title">แก้ไขหมวดหมู่</h3>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <div class="row">
                        <label for="editcategoryname" class="col-md-4 col-form-label">ชื่อหมวดหมู่<span class="required">*</span></label>
                        <div class="col-md-8">
                            <input type="text" id="editcategoryname" class="form-control" autocomplete="off" value="เครื่องแต่งกาย" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-round btn-lg">บันทึก</button>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->

<!-- Modal Delete Category -->
<div class="modal fade" id="modalDeleteCategory" aria-hidden="true" aria-labelledby="modalDeleteCategory"
     role="dialog" tabindex="-1">
    <div class="modal-dialog modal-simple modal-center">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h3 class="modal-title">ลบหมวดหมู่</h3>
            </div>
            <div class="modal-body">
                <p>ยืนยันการลบหมวดหมู่ใช่หรือไม่ ?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-pure btn-round btn-lg" data-dismiss="modal">ยกเลิก</button>
                <button type="button" class="btn btn-primary btn-round btn-lg">ยืนยัน</button>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->

<!-- Modal Create Warehouse -->
<div class="modal fade" id="modalCreateWarehouse" aria-hidden="true" aria-labelledby="modalCreateWarehouse"
     role="dialog" tabindex="-1">
    <div class="modal-dialog modal-simple modal-center">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h3 class="modal-title">เพิ่มคลังสินค้า/สาขา</h3>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <div class="row">
                        <label for="addwarehouse" class="col-md-4 col-form-label">รหัสคลัง/สาขา</label>
                        <div class="col-md-8">
                            <input type="text" id="addwarehouse" class="form-control w-200" autocomplete="off" value="W0004" />
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <label for="addbranch" class="col-md-4 col-form-label">ชื่อคลัง/สาขา<span class="required">*</span></label>
                        <div class="col-md-8">
                            <input type="text" id="addbranch" class="form-control" autocomplete="off" />
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <label for="addprovince" class="col-md-4 col-form-label">จังหวัด</label>
                        <div class="col-md-8">
                            <select class="form-control mt-5 w-200" id="addprovince">
                                <option>ไม่ระบุ</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <label for="addDistrict" class="col-md-4 col-form-label">อำเภอ/เขต</label>
                        <div class="col-md-8">
                            <select class="form-control mt-5 w-200" id="addDistrict">
                                <option>ไม่ระบุ</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <label for="addAddress" class="col-md-4 col-form-label">ที่อยู่</label>
                        <div class="col-md-8">
                            <textarea class="form-control" id="addAddress" rows="3"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-round btn-lg">บันทึก</button>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->

<!-- Modal Delete -->
<div class="modal fade" id="modalDeleteWarehouse" aria-hidden="true" aria-labelledby="modalDeleteWarehouse"
     role="dialog" tabindex="-1">
    <div class="modal-dialog modal-simple modal-center">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h3 class="modal-title">ลบคลังสินค้า/สาขา</h3>
            </div>
            <div class="modal-body">
                <p>ยืนยันการลบข้อมูลคลังสินค้า/สาขา ?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-pure btn-round btn-lg" data-dismiss="modal">ยกเลิก</button>
                <button type="button" class="btn btn-primary btn-round btn-lg">ยืนยัน</button>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->

<!-- Modal Edit Warehouse Product -->
<div class="modal fade" id="modalEditWarehouseProduct" aria-hidden="true" aria-labelledby="modalEditWarehouseProduct"
     role="dialog" tabindex="-1">
    <div class="modal-dialog modal-simple modal-center">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h3 class="modal-title">ปรับจำนวนคงเหลือในคลัง</h3>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <div class="row">
                        <label class="col-md-4 col-form-label">สินค้า</label>
                        <div class="col-md-8">
                            <p class="form-control-plaintext">เสื้อ(s)</p>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <label class="col-md-4 col-form-label">คลังสินค้า</label>
                        <div class="col-md-8">
                            <p class="form-control-plaintext">คลังสินค้าหลัก</p>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <label class="col-md-4 col-form-label">จำนวนคงเหลือปัจจุบัน</label>
                        <div class="col-md-8">
                            <p class="form-control-plaintext">19</p>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <label class="col-md-4 col-form-label">จำนวนคงเหลือที่ปรับ <span class="required">*</span></label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" autocomplete="off" />
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <label class="col-md-4"></label>
                        <div class="col-md-8">
                            <input type="checkbox" checked> กำหนดราคาปรับ/หน่วย
                            <span class="d-block mt-1 red-600">*ราคาปรับ/หน่วยมีผลกระทบกับต้นทุนสินค้า</span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <label class="col-md-4"></label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" autocomplete="off" placeholder="ราคาปรับ/หน่วย" />
                            <span class="d-block mt-2">
                                <a href="" class="mt-2">ใช้ราคาซื้อตั้งต้น</a> |
                                <a href="" class="mt-2">ใช้ราคาทุนสินค้าเฉลี่ย</a>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <label class="col-md-4 col-form-label">หมายเหตุ</label>
                        <div class="col-md-8">
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-round btn-lg">บันทึก</button>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->
