<div class="left-sidebar-pro">
            <nav id="sidebar">
                <div class="sidebar-header">
                    <a href="#"><img src="admin/img/message/1.jpg" alt="" />
                    </a>
                    <h3>{{$current_user->full_name}}</h3>
                    <p>{{$current_user->email}}</p>
                    <strong>AP+</strong>
                </div>
                <div class="left-custom-menu-adp-wrap">
                    <ul class="nav navbar-nav left-sidebar-menu-pro">
                        <li class="nav-item">
                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-home"></i> <span class="mini-dn">Trang Chủ</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>

                        </li>
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-users"></i> <span class="mini-dn">Khách hàng</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="admin/khachhang/danhsach" class="dropdown-item">Danh sách</a>
                                <a href="admin/khachhang/them" class="dropdown-item">Thêm</a>

                            </div>
                        </li>
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-credit-card "></i> <span class="mini-dn">Bills</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="admin/bill/danhsach" class="dropdown-item">Danh sách</a>
                                <a href="admin/bill/them" class="dropdown-item">Thêm</a>

                            </div>
                        </li>
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-credit-card-alt "></i> <span class="mini-dn">Chi tiết Bills</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="admin/chitietbill/danhsach" class="dropdown-item">Danh sách</a>
                            </div>
                        </li>
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-product-hunt "></i> <span class="mini-dn">Sản Phẩm</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="admin/product/danhsach" class="dropdown-item">Danh sách</a>
                                <a href="admin/product/them" class="dropdown-item">Thêm</a>

                            </div>
                        </li>
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-archive "></i> <span class="mini-dn">Loại Sản Phẩm</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="admin/type_product/danhsach" class="dropdown-item">Danh sách</a>
                                <a href="admin/type_product/them" class="dropdown-item">Thêm</a>

                            </div>
                        </li>
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-user "></i> <span class="mini-dn">User</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="admin/user/danhsach" class="dropdown-item">Danh sách</a>
                                <a href="admin/user/them" class="dropdown-item">Thêm</a>

                            </div>
                        </li>
{{--                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-envelope"></i> <span class="mini-dn">Mailbox</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>--}}
{{--                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">--}}
{{--                                <a href="inbox.html" class="dropdown-item">Inbox</a>--}}
{{--                                <a href="view-mail.html" class="dropdown-item">View Mail</a>--}}
{{--                                <a href="compose-mail.html" class="dropdown-item">Compose Mail</a>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-flask"></i> <span class="mini-dn">Interface</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>--}}
{{--                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">--}}
{{--                                <a href="google-map.html" class="dropdown-item">Google Map</a>--}}
{{--                                <a href="data-maps.html" class="dropdown-item">Data Maps</a>--}}
{{--                                <a href="pdf-viewer.html" class="dropdown-item">Pdf Viewer</a>--}}
{{--                                <a href="x-editable.html" class="dropdown-item">X-Editable</a>--}}
{{--                                <a href="code-editor.html" class="dropdown-item">Code Editor</a>--}}
{{--                                <a href="tree-view.html" class="dropdown-item">Tree View</a>--}}
{{--                                <a href="preloader.html" class="dropdown-item">Preloader</a>--}}
{{--                                <a href="images-cropper.html" class="dropdown-item">Images Cropper</a>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-pie-chart"></i> <span class="mini-dn">Miscellaneous</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>--}}
{{--                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">--}}
{{--                                <a href="profile.html" class="dropdown-item">Profile</a>--}}
{{--                                <a href="contact-client.html" class="dropdown-item">Contact Client</a>--}}
{{--                                <a href="contact-client-v.1.html" class="dropdown-item">Contact Client v.1</a>--}}
{{--                                <a href="project-list.html" class="dropdown-item">Project List</a>--}}
{{--                                <a href="project-details.html" class="dropdown-item">Project Details</a>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-bar-chart-o"></i> <span class="mini-dn">Charts</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>--}}
{{--                            <div role="menu" class="dropdown-menu left-menu-dropdown chart-left-menu-std animated flipInX">--}}
{{--                                <a href="bar-charts.html" class="dropdown-item">Bar Charts</a>--}}
{{--                                <a href="line-charts.html" class="dropdown-item">Line Charts</a>--}}
{{--                                <a href="area-charts.html" class="dropdown-item">Area Charts</a>--}}
{{--                                <a href="rounded-chart.html" class="dropdown-item">Rounded Charts</a>--}}
{{--                                <a href="c3.html" class="dropdown-item">C3 Charts</a>--}}
{{--                                <a href="sparkline.html" class="dropdown-item">Sparkline Charts</a>--}}
{{--                                <a href="peity.html" class="dropdown-item">Peity Charts</a>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-table"></i> <span class="mini-dn">Data Tables</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>--}}
{{--                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">--}}
{{--                                <a href="static-table.html" class="dropdown-item">Static Table</a>--}}
{{--                                <a href="data-table.html" class="dropdown-item">Data Table</a>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-edit"></i> <span class="mini-dn">Forms Elements</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>--}}
{{--                            <div role="menu" class="dropdown-menu left-menu-dropdown form-left-menu-std animated flipInX">--}}
{{--                                <a href="basic-form-element.html" class="dropdown-item">Basic Elements</a>--}}
{{--                                <a href="advance-form-element.html" class="dropdown-item">Advance Elements</a>--}}
{{--                                <a href="password-meter.html" class="dropdown-item">Password Meter</a>--}}
{{--                                <a href="multi-upload.html" class="dropdown-item">Multi Upload</a>--}}
{{--                                <a href="tinymc.html" class="dropdown-item">Text Editor</a>--}}
{{--                                <a href="dual-list-box.html" class="dropdown-item">Dual List Box</a>--}}
{{--                            </div>--}}
{{--                        </li>--}}

{{--                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-files-o"></i> <span class="mini-dn">Pages</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>--}}
{{--                            <div role="menu" class="dropdown-menu left-menu-dropdown pages-left-menu-std animated flipInX">--}}
{{--                                <a href="login.html" class="dropdown-item">Danh sách</a>--}}
{{--                                <a href="register.html" class="dropdown-item">Thêm</a>--}}
{{--                                <a href="captcha.html" class="dropdown-item">Captcha</a>--}}
{{--                                <a href="checkout.html" class="dropdown-item">Checkout</a>--}}
{{--                                <a href="contact.html" class="dropdown-item">Contacts</a>--}}
{{--                                <a href="review.html" class="dropdown-item">Review</a>--}}
{{--                                <a href="order.html" class="dropdown-item">Order</a>--}}
{{--                                <a href="comment.html" class="dropdown-item">Comment</a>--}}
{{--                            </div>--}}
{{--                        </li>--}}
                    </ul>
                </div>
            </nav>
        </div>
