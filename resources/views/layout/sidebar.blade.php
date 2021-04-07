<div class="site-menubar">
    <div class="site-menubar-body">
        <div>
            <div>
                <ul class="site-menu" data-plugin="menu">
                    <li class="site-menu-item {{ Request::is('/')?'active':''}}">
                        <a class="animsition-link" href="/">
                            <i class="site-menu-icon md-view-dashboard" aria-hidden="true"></i>
                            <span class="site-menu-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="site-menu-item has-sub {{ Request::is('report/*','report')?'active open':''}}">
                        <a href="javascript:void(0)">
                            <i class="site-menu-icon icon wb-stats-bars" aria-hidden="true"></i>
                            <span class="site-menu-title">รายงาน</span>
                            <span class="site-menu-arrow"></span>
                        </a>
                        <ul class="site-menu-sub">
                            <li class="site-menu-item {{ Request::is('report/main')?'active':''}}">
                                <a class="animsition-link" href="/report/main">
                                    <span class="site-menu-title">ภาพรวม</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="site-menu-sub">
                            <li class="site-menu-item {{ Request::is('report/sell')?'active':''}}">
                                <a class="animsition-link" href="/report/sell">
                                    <span class="site-menu-title">ยอดขาย</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="site-menu-sub">
                            <li class="site-menu-item {{ Request::is('report/buy')?'active':''}}">
                                <a class="animsition-link" href="/report/buy">
                                    <span class="site-menu-title">ยอดซื้อ</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="site-menu-sub">
                            <li class="site-menu-item {{ Request::is('report/product')?'active':''}}">
                                <a class="animsition-link" href="/report/product">
                                    <span class="site-menu-title">สินค้า</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="site-menu-sub">
                            <li class="site-menu-item {{ Request::is('report/contact')?'active':''}}">
                                <a class="animsition-link" href="/report/contact">
                                    <span class="site-menu-title">ลูกค้า</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="site-menu-item has-sub {{ Request::is('sale-order/*','sale-order')?'active open':''}}">
                        <a href="javascript:void(0)">
                            <i class="site-menu-icon icon wb-clipboard" aria-hidden="true"></i>
                            <span class="site-menu-title">รายการขาย</span>
                            <span class="site-menu-arrow"></span>
                        </a>
                        <ul class="site-menu-sub">
                            <li class="site-menu-item {{ Request::is('sale-order')?'active':''}}">
                                <a class="animsition-link" href="/sale-order">
                                    <span class="site-menu-title">ดูรายการขาย</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="site-menu-sub">
                            <li class="site-menu-item {{ Request::is('sale-order/return-product/*')?'active':''}}">
                                <a class="animsition-link" href="/sale-order/return-product/list">
                                    <span class="site-menu-title">รับคืนสินค้า</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="site-menu-item has-sub {{ Request::is('purchase-order/*','purchase-order')?'active open':''}}">
                        <a href="javascript:void(0)">
                            <i class="site-menu-icon icon wb-shopping-cart" aria-hidden="true"></i>
                            <span class="site-menu-title">รายการซื้อ</span>
                            <span class="site-menu-arrow"></span>
                        </a>
                        <ul class="site-menu-sub">
                            <li class="site-menu-item {{ Request::is('purchase-order')?'active':''}}">
                                <a class="animsition-link" href="/purchase-order">
                                    <span class="site-menu-title">ดูรายการซื้อ</span>
                                </a>
                            </li>
                            <li class="site-menu-item {{ Request::is('purchase-order/create')?'active':''}}">
                                <a class="animsition-link" href="/purchase-order/create">
                                    <span class="site-menu-title">สร้างรายการซื้อ</span>
                                </a>
                            </li>
                            <li class="site-menu-item {{ Request::is('purchase-order/return-product/*')?'active':''}}">
                                <a class="animsition-link" href="/purchase-order/return-product/list">
                                    <span class="site-menu-title">คืนสินค้า</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="site-menu-item has-sub {{ Request::is('product/*','product')?'active open':''}}">
                        <a href="javascript:void(0)">
                            <i class="site-menu-icon icon wb-inbox" aria-hidden="true"></i>
                            <span class="site-menu-title">สินค้า</span>
                            <span class="site-menu-arrow"></span>
                        </a>
                        <ul class="site-menu-sub">
                            <li class="site-menu-item {{ Request::is('product','product/edit','product/create')?'active':''}}">
                                <a class="animsition-link" href="/product">
                                    <span class="site-menu-title">สินค้า</span>
                                </a>
                            </li>
                            <li class="site-menu-item {{ Request::is('product/category')?'active':''}}">
                                <a class="animsition-link" href="/product/category">
                                    <span class="site-menu-title">หมวดหมู่</span>
                                </a>
                            </li>
                            <li class="site-menu-item {{ Request::is('product/warehouse')?'active':''}}">
                                <a class="animsition-link" href="/product/warehouse">
                                    <span class="site-menu-title">คลังสินค้า/สาขา</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="site-menu-item has-sub {{ Request::is('contact/*','contact')?'active open':''}}">
                        <a href="javascript:void(0)">
                            <i class="site-menu-icon icon wb-users" aria-hidden="true"></i>
                            <span class="site-menu-title">ลูกค้า/ผู้ติดต่อ</span>
                            <span class="site-menu-arrow"></span>
                        </a>
                        <ul class="site-menu-sub">
                            <li class="site-menu-item {{ Request::is('contact','/contact/edit')?'active':''}}">
                                <a class="animsition-link" href="/contact">
                                    <span class="site-menu-title">ผู้ติดต่อ/คู่ค้า</span>
                                </a>
                            </li>
                            <li class="site-menu-item {{ Request::is('contact/agent/list','contact/agent/edit')?'active':''}}">
                                <a class="animsition-link" href="/contact/agent/list">
                                    <span class="site-menu-title">ตัวแทนจำหน่าย</span>
                                </a>
                            </li>
                            <li class="site-menu-item {{ Request::is('contact/agent/approve-withdrawal')?'active':''}}">
                                <a class="animsition-link" href="/contact/agent/approve-withdrawal">
                                    <span class="site-menu-title">อนุมัติการถอดเงิน</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="site-menu-item has-sub {{ Request::is('setting/*','setting')?'active open':''}}">
                        <a href="javascript:void(0)">
                            <i class="site-menu-icon icon wb-settings" aria-hidden="true"></i>
                            <span class="site-menu-title">ตั้งค่า</span>
                            <span class="site-menu-arrow"></span>
                        </a>
                        <ul class="site-menu-sub">
                            <li class="site-menu-item {{ Request::is('setting/profile','setting/change-password')?'active':''}}">
                                <a class="animsition-link" href="/setting/profile">
                                    <span class="site-menu-title">ข้อมูลส่วนตัว</span>
                                </a>
                            </li>
                            <li class="site-menu-item {{ Request::is('setting/company','setting')?'active':''}}">
                                <a class="animsition-link" href="/setting/company">
                                    <span class="site-menu-title">ข้อมูลบริษัท</span>
                                </a>
                            </li>
                            <li class="site-menu-item {{ Request::is('setting/transport')?'active':''}}">
                                <a class="animsition-link" href="/setting/transport">
                                    <span class="site-menu-title">ช่องทางขนส่ง</span>
                                </a>
                            </li>
                            <li class="site-menu-item {{ Request::is('setting/user/list','setting/user/detail')?'active':''}}">
                                <a class="animsition-link" href="/setting/user/list">
                                    <span class="site-menu-title">ผู้ใช้งาน</span>
                                </a>
                            </li>
                            <li class="site-menu-item {{ Request::is('setting/role/list','setting/role/edit/*','setting/role/create')?'active':''}}">
                                <a class="animsition-link" href="/setting/role/list">
                                    <span class="site-menu-title">สิทธิ์การใช้งาน</span>
                                </a>
                            </li>
                            <li class="site-menu-item {{ Request::is('setting/general')?'active':''}}">
                                <a class="animsition-link" href="/setting/general">
                                    <span class="site-menu-title">ตั้งค่าทั้วไป</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="site-menubar-footer">
        <a href="javascript: void(0);" class="fold-show" data-placement="top" data-toggle="tooltip"
           data-original-title="Settings">
            <span class="icon md-settings" aria-hidden="true"></span>
        </a>
        <a href="javascript: void(0);" data-placement="top" data-toggle="tooltip" data-original-title="Lock">
            <span class="icon md-eye-off" aria-hidden="true"></span>
        </a>
        <a href="javascript: void(0);" data-placement="top" data-toggle="tooltip" data-original-title="Logout">
            <span class="icon md-power" aria-hidden="true"></span>
        </a>
    </div>
</div>
