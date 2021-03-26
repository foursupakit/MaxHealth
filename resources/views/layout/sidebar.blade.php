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
                            <span class="site-menu-title">ลูกค้า</span>
                            <span class="site-menu-arrow"></span>
                        </a>
                        <ul class="site-menu-sub">
                            <li class="site-menu-item {{ Request::is('contact')?'active':''}}">
                                <a class="animsition-link" href="/contact">
                                    <span class="site-menu-title">ผู้ติดต่อ</span>
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
                            <li class="site-menu-item {{ Request::is('setting/company','setting')?'active':''}}">
                                <a class="animsition-link" href="/setting/company">
                                    <span class="site-menu-title">ข้อมูลบริษัท</span>
                                </a>
                            </li>
                            <li class="site-menu-item {{ Request::is('setting/change-password')?'active':''}}">
                                <a class="animsition-link" href="/setting/change-password">
                                    <span class="site-menu-title">เปลี่ยนรหัสผ่าน</span>
                                </a>
                            </li>
                            <li class="site-menu-item {{ Request::is('setting/transport')?'active':''}}">
                                <a class="animsition-link" href="/setting/transport">
                                    <span class="site-menu-title">ช่องทางขนส่ง</span>
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
