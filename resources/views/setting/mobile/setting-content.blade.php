@extends('layout.main')

@section('style')
    <style>
        .icon-wrap > .icon {
            font-size: 65px;
        }
        .pointer {
            cursor: pointer;
        }

        .form-horizontal .checkbox-custom, .form-horizontal .radio-custom {
            padding-top: 0;
        }
    </style>
@endsection

@section('content')
    <div class="page page-profile">
        <div class="page-header">
            <h1 class="page-title">จัดการ content</h1>
        </div>
        <div class="page-content container-fluid">
            <div class="panel">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel-body">
                            <form class="form-horizontal" autocomplete="off">
                                <div>
                                    <div class="nav-tabs-horizontal" data-plugin="tabs">
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li class="nav-item" role="presentation"><a class="nav-link active" data-toggle="tab" href="#exampleTabsOne"
                                                                                        aria-controls="exampleTabsOne" role="tab">Home</a></li>
                                            <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#exampleTabsTwo"
                                                                                        aria-controls="exampleTabsTwo" role="tab">Care</a></li>
                                            <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#exampleTabsThree"
                                                                                        aria-controls="exampleTabsThree" role="tab">Cart</a></li>
                                            <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#exampleTabsFour"
                                                                                        aria-controls="exampleTabsFour" role="tab">Account</a></li>
                                        </ul>
                                        <div class="tab-content pt-20">
                                            <div class="tab-pane active" id="exampleTabsOne" role="tabpanel">
                                                <h4 class="example-title">การแสดงผล</h4>
                                                <div class="form-group form-material row">
                                                    <label class="col-md-3 form-control-label">สินค้าแนะนำ</label>
                                                    <div class="col-md-9">
                                                        <div class="radio-custom radio-default radio-inline">
                                                            <input type="radio" id="inputBasicItemSuggestOpen" name="inputBasicItemSuggestOpen" checked />
                                                            <label for="inputBasicItemSuggestOpen">เปิด</label>
                                                        </div>
                                                        <div class="radio-custom radio-default radio-inline">
                                                            <input type="radio" id="inputBasicItemSuggestClose" name="inputBasicItemSuggestClose" />
                                                            <label for="inputBasicItemSuggestClose">ปิด</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group form-material row">
                                                    <label class="col-md-3 form-control-label">สินค้าใหม่</label>
                                                    <div class="col-md-9">
                                                        <div class="radio-custom radio-default radio-inline">
                                                            <input type="radio" id="inputBasicItemNewOpen" name="inputBasicItemNewOpen" checked />
                                                            <label for="inputBasicItemNewOpen">เปิด</label>
                                                        </div>
                                                        <div class="radio-custom radio-default radio-inline">
                                                            <input type="radio" id="inputBasicItemNewClose" name="inputBasicItemNewClose" />
                                                            <label for="inputBasicItemNewClose">ปิด</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group form-material row">
                                                    <label class="col-md-3 form-control-label">สินค้าสำหรับคุณ</label>
                                                    <div class="col-md-9">
                                                        <div class="radio-custom radio-default radio-inline">
                                                            <input type="radio" id="inputBasicItemForYouNew" name="inputBasicItemForYouNew" checked />
                                                            <label for="inputBasicItemForYouNew">เปิด</label>
                                                        </div>
                                                        <div class="radio-custom radio-default radio-inline">
                                                            <input type="radio" id="inputBasicItemForYouClose" name="inputBasicItemForYouClose" />
                                                            <label for="inputBasicItemForYouClose">ปิด</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group form-material row">
                                                    <button type="button" class="btn btn-round btn-primary btn-lg offset-md-3 w-auto">บันทึก</button>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="exampleTabsTwo" role="tabpanel">
                                                <h4 class="example-title">การแสดงผล</h4>
                                                <div class="form-group form-material row">
                                                    <label class="col-md-3 form-control-label">section#1</label>
                                                    <div class="col-md-9">
                                                        <div class="radio-custom radio-default radio-inline">
                                                            <input type="radio" id="inputBasicSectionOneOpen" name="inputBasicSectionOneOpen" checked />
                                                            <label for="inputBasicSectionOneOpen">เปิด</label>
                                                        </div>
                                                        <div class="radio-custom radio-default radio-inline">
                                                            <input type="radio" id="inputBasicSectionOneClose" name="inputBasicSectionOneClose" />
                                                            <label for="inputBasicSectionOneClose">ปิด</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group form-material row">
                                                    <label class="col-md-3 form-control-label">section#2</label>
                                                    <div class="col-md-9">
                                                        <div class="radio-custom radio-default radio-inline">
                                                            <input type="radio" id="inputBasicSectionTwoOpen" name="inputBasicSectionTwoOpen" checked />
                                                            <label for="inputBasicSectionTwoOpen">เปิด</label>
                                                        </div>
                                                        <div class="radio-custom radio-default radio-inline">
                                                            <input type="radio" id="inputBasicSectionTwoClose" name="inputBasicSectionTwoClose" />
                                                            <label for="inputBasicSectionTwoClose">ปิด</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group form-material row">
                                                    <button type="button" class="btn btn-round btn-primary btn-lg offset-md-3 w-auto">บันทึก</button>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="exampleTabsThree" role="tabpanel">
                                                <h4 class="example-title">การแสดงผล</h4>
                                                <div class="form-group form-material row">
                                                    <label class="col-md-3 form-control-label">ประวัติการซื้อของฉัน</label>
                                                    <div class="col-md-9">
                                                        <div class="radio-custom radio-default radio-inline">
                                                            <input type="radio" id="inputBasicHistoryOpen" name="inputBasicHistoryOpen" checked />
                                                            <label for="inputBasicHistoryOpen">เปิด</label>
                                                        </div>
                                                        <div class="radio-custom radio-default radio-inline">
                                                            <input type="radio" id="inputBasicHistoryClose" name="inputBasicHistoryClose" />
                                                            <label for="inputBasicHistoryClose">ปิด</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group form-material row">
                                                    <button type="button" class="btn btn-round btn-primary btn-lg offset-md-3 w-auto">บันทึก</button>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="exampleTabsFour" role="tabpanel">
                                                <h4 class="example-title">การแสดงผล</h4>
                                                <div class="form-group form-material row">
                                                    <label class="col-md-3 form-control-label">สั่งซื้ออีกครั้ง</label>
                                                    <div class="col-md-9">
                                                        <div class="radio-custom radio-default radio-inline">
                                                            <input type="radio" id="inputBasicBuyAgainOpen" name="inputBasicBuyAgainOpen" checked />
                                                            <label for="inputBasicBuyAgainOpen">เปิด</label>
                                                        </div>
                                                        <div class="radio-custom radio-default radio-inline">
                                                            <input type="radio" id="inputBasicBuyAgainClose" name="inputBasicBuyAgainClose" />
                                                            <label for="inputBasicBuyAgainClose">ปิด</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group form-material row">
                                                    <button type="button" class="btn btn-round btn-primary btn-lg offset-md-3 w-auto">บันทึก</button>
                                                </div>
                                            </div>
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
@endsection

@section('script')
    <!-- Plugins -->
    <script src="../../../global/vendor/jquery-placeholder/jquery.placeholder.js"></script>

    <!-- Page -->
    <script src="../../../global/js/Plugin/jquery-placeholder.js"></script>
    <script src="../../../global/js/Plugin/input-group-file.js"></script>
@endsection
