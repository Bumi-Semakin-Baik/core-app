@include('admin.template.header')
@include('admin.template.sidebar')
@include('admin.template.topbar')

<!-- main header @e -->
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Newsletter</h3>
                                        </div><!-- .nk-block-head-content -->
                                        <div class="nk-block-head-content">
                                            <div class="toggle-wrap nk-block-tools-toggle">
                                                <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                                <div class="toggle-expand-content" data-content="pageMenu">
                                                    <ul class="nk-block-tools g-3">
                                                        <li>
                                                            <div class="drodown">
                                                                <a href="#" class="dropdown-toggle btn btn-white btn-dim btn-outline-light" data-bs-toggle="dropdown"><em class="d-none d-sm-inline icon ni ni-calender-date"></em><span><span class="d-none d-md-inline">Last</span> 30 Days</span><em class="dd-indc icon ni ni-chevron-right"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="#"><span>Last 30 Days</span></a></li>
                                                                        <li><a href="#"><span>Last 6 Months</span></a></li>
                                                                        <li><a href="#"><span>Last 1 Years</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="nk-block-tools-opt"><a href="#" class="btn btn-primary"><em class="icon ni ni-reports"></em><span>Reports</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
    <div class="card card-bordered card-preview">
        <div class="card-inner">
            <table class="datatable-init nk-tb-list nk-tb-ulist" data-auto-responsive="false">
                <thead>
                    <tr class="nk-tb-item nk-tb-head">
                        <th class="nk-tb-col nk-tb-col-check">
                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                <input type="checkbox" class="custom-control-input" id="uid">
                                <label class="custom-control-label" for="uid"></label>
                            </div>
                        </th>
                        <th class="nk-tb-col"><span class="sub-text">User</span></th>
                        <th class="nk-tb-col tb-col-mb"><span class="sub-text">Balance</span></th>
                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Phone</span></th>
                        <th class="nk-tb-col tb-col-lg"><span class="sub-text">Verified</span></th>
                        <th class="nk-tb-col tb-col-lg"><span class="sub-text">Last Login</span></th>
                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Status</span></th>
                        <th class="nk-tb-col nk-tb-col-tools text-end">
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="nk-tb-item">
                        <td class="nk-tb-col nk-tb-col-check">
                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                <input type="checkbox" class="custom-control-input" id="uid1">
                                <label class="custom-control-label" for="uid1"></label>
                            </div>
                        </td>
                        <td class="nk-tb-col">
                            <div class="user-card">
                                <div class="user-avatar bg-dim-primary d-none d-sm-flex">
                                    <span>AB</span>
                                </div>
                                <div class="user-info">
                                    <span class="tb-lead">Abu Bin Ishtiyak <span class="dot dot-success d-md-none ms-1"></span></span>
                                    <span>info@softnio.com</span>
                                </div>
                            </div>
                        </td>
                        <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                            <span class="tb-amount">35040.34 <span class="currency">USD</span></span>
                        </td>
                        <td class="nk-tb-col tb-col-md">
                            <span>+811 847-4958</span>
                        </td>
                        <td class="nk-tb-col tb-col-lg" data-order="Email Verified - Kyc Unverified">
                            <ul class="list-status">
                                <li><em class="icon text-success ni ni-check-circle"></em> <span>Email</span></li>
                                <li><em class="icon ni ni-alert-circle"></em> <span>KYC</span></li>
                            </ul>
                        </td>
                        <td class="nk-tb-col tb-col-lg">
                            <span>05 Oct 2019</span>
                        </td>
                        <td class="nk-tb-col tb-col-md">
                            <span class="tb-status text-success">Active</span>
                        </td>
                        <td class="nk-tb-col nk-tb-col-tools">
                            <ul class="nk-tb-actions gx-1">
                                <li class="nk-tb-action-hidden">
                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Wallet">
                                        <em class="icon ni ni-wallet-fill"></em>
                                    </a>
                                </li>
                                <li class="nk-tb-action-hidden">
                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                        <em class="icon ni ni-mail-fill"></em>
                                    </a>
                                </li>
                                <li class="nk-tb-action-hidden">
                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">
                                        <em class="icon ni ni-user-cross-fill"></em>
                                    </a>
                                </li>
                                <li>
                                    <div class="drodown">
                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <ul class="link-list-opt no-bdr">
                                                <li><a href="#"><em class="icon ni ni-focus"></em><span>Quick View</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-repeat"></em><span>Transaction</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-activity-round"></em><span>Activities</span></a></li>
                                                <li class="divider"></li>
                                                <li><a href="#"><em class="icon ni ni-shield-star"></em><span>Reset Pass</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-shield-off"></em><span>Reset 2FA</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-na"></em><span>Suspend User</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </td>
                    </tr><!-- .nk-tb-item  -->
                    <tr class="nk-tb-item">
                        <td class="nk-tb-col nk-tb-col-check">
                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                <input type="checkbox" class="custom-control-input" id="uid2">
                                <label class="custom-control-label" for="uid2"></label>
                            </div>
                        </td>
                        <td class="nk-tb-col">
                            <div class="user-card">
                                <div class="user-avatar bg-success d-none d-sm-flex">
                                    <span>AL</span>
                                </div>
                                <div class="user-info">
                                    <span class="tb-lead">Ashley Lawson <span class="dot dot-warning d-md-none ms-1"></span></span>
                                    <span>ashley@softnio.com</span>
                                </div>
                            </div>
                        </td>
                        <td class="nk-tb-col tb-col-mb" data-order="580.00">
                            <span class="tb-amount">580.00 <span class="currency">USD</span></span>
                        </td>
                        <td class="nk-tb-col tb-col-md">
                            <span>+124 394-1787</span>
                        </td>
                        <td class="nk-tb-col tb-col-lg" data-order="Email Verified - Kyc Submited">
                            <ul class="list-status">
                                <li><em class="icon text-success ni ni-check-circle"></em> <span>Email</span></li>
                                <li><em class="icon text-info ni ni-alert-circle"></em> <span>KYC</span></li>
                            </ul>
                        </td>
                        <td class="nk-tb-col tb-col-lg">
                            <span>07 Feb 2020</span>
                        </td>
                        <td class="nk-tb-col tb-col-md">
                            <span class="tb-status text-warning">Pending</span>
                        </td>
                        <td class="nk-tb-col nk-tb-col-tools">
                            <ul class="nk-tb-actions gx-1">
                                <li class="nk-tb-action-hidden">
                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Wallet">
                                        <em class="icon ni ni-wallet-fill"></em>
                                    </a>
                                </li>
                                <li class="nk-tb-action-hidden">
                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                        <em class="icon ni ni-mail-fill"></em>
                                    </a>
                                </li>
                                <li class="nk-tb-action-hidden">
                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">
                                        <em class="icon ni ni-user-cross-fill"></em>
                                    </a>
                                </li>
                                <li>
                                    <div class="drodown">
                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <ul class="link-list-opt no-bdr">
                                                <li><a href="#"><em class="icon ni ni-focus"></em><span>Quick View</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-repeat"></em><span>Transaction</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-activity-round"></em><span>Activities</span></a></li>
                                                <li class="divider"></li>
                                                <li><a href="#"><em class="icon ni ni-shield-star"></em><span>Reset Pass</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-shield-off"></em><span>Reset 2FA</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-na"></em><span>Suspend User</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </td>
                    </tr><!-- .nk-tb-item  -->
                    <tr class="nk-tb-item">
                        <td class="nk-tb-col nk-tb-col-check">
                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                <input type="checkbox" class="custom-control-input" id="uid3">
                                <label class="custom-control-label" for="uid3"></label>
                            </div>
                        </td>
                        <td class="nk-tb-col">
                            <div class="user-card">
                                <div class="user-avatar bg-info d-none d-sm-flex">
                                    <span>JL</span>
                                </div>
                                <div class="user-info">
                                    <span class="tb-lead">Joe Larson <span class="dot dot-success d-md-none ms-1"></span></span>
                                    <span>larson@example.com</span>
                                </div>
                            </div>
                        </td>
                        <td class="nk-tb-col tb-col-mb" data-order="32000.34">
                            <span class="tb-amount">32,000.34 <span class="currency">USD</span></span>
                        </td>
                        <td class="nk-tb-col tb-col-md">
                            <span>+168 603-2320</span>
                        </td>
                        <td class="nk-tb-col tb-col-lg" data-order="Email Verified - Kyc Verified">
                            <ul class="list-status">
                                <li><em class="icon text-success ni ni-check-circle"></em> <span>Email</span></li>
                                <li><em class="icon text-success ni ni-alert-circle"></em> <span>KYC</span></li>
                            </ul>
                        </td>
                        <td class="nk-tb-col tb-col-lg">
                            <span>04 Feb 2020</span>
                        </td>
                        <td class="nk-tb-col tb-col-md">
                            <span class="tb-status text-success">Active</span>
                        </td>
                        <td class="nk-tb-col nk-tb-col-tools">
                            <ul class="nk-tb-actions gx-1">
                                <li class="nk-tb-action-hidden">
                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Wallet">
                                        <em class="icon ni ni-wallet-fill"></em>
                                    </a>
                                </li>
                                <li class="nk-tb-action-hidden">
                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                        <em class="icon ni ni-mail-fill"></em>
                                    </a>
                                </li>
                                <li class="nk-tb-action-hidden">
                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">
                                        <em class="icon ni ni-user-cross-fill"></em>
                                    </a>
                                </li>
                                <li>
                                    <div class="drodown">
                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <ul class="link-list-opt no-bdr">
                                                <li><a href="#"><em class="icon ni ni-focus"></em><span>Quick View</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-repeat"></em><span>Transaction</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-activity-round"></em><span>Activities</span></a></li>
                                                <li class="divider"></li>
                                                <li><a href="#"><em class="icon ni ni-shield-star"></em><span>Reset Pass</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-shield-off"></em><span>Reset 2FA</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-na"></em><span>Suspend User</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </td>
                    </tr><!-- .nk-tb-item  -->
                    <tr class="nk-tb-item">
                        <td class="nk-tb-col nk-tb-col-check">
                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                <input type="checkbox" class="custom-control-input" id="uid4">
                                <label class="custom-control-label" for="uid4"></label>
                            </div>
                        </td>
                        <td class="nk-tb-col">
                            <div class="user-card">
                                <div class="user-avatar bg-danger d-none d-sm-flex">
                                    <span>JM</span>
                                </div>
                                <div class="user-info">
                                    <span class="tb-lead">Jane Montgomery <span class="dot dot-success d-md-none ms-1"></span></span>
                                    <span>jane84@example.com</span>
                                </div>
                            </div>
                        </td>
                        <td class="nk-tb-col tb-col-mb" data-order="0.00">
                            <span class="tb-amount">0.00 <span class="currency">USD</span></span>
                        </td>
                        <td class="nk-tb-col tb-col-md">
                            <span>+439 271-5360</span>
                        </td>
                        <td class="nk-tb-col tb-col-lg" data-order="Email Unverified - Kyc Unverified">
                            <ul class="list-status">
                                <li><em class="icon ni ni-check-circle"></em> <span>Email</span></li>
                                <li><em class="icon ni ni-alert-circle"></em> <span>KYC</span></li>
                            </ul>
                        </td>
                        <td class="nk-tb-col tb-col-lg">
                            <span>01 Feb 2020</span>
                        </td>
                        <td class="nk-tb-col tb-col-md">
                            <span class="tb-status text-danger">Suspend</span>
                        </td>
                        <td class="nk-tb-col nk-tb-col-tools">
                            <ul class="nk-tb-actions gx-1">
                                <li class="nk-tb-action-hidden">
                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Wallet">
                                        <em class="icon ni ni-wallet-fill"></em>
                                    </a>
                                </li>
                                <li class="nk-tb-action-hidden">
                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                        <em class="icon ni ni-mail-fill"></em>
                                    </a>
                                </li>
                                <li class="nk-tb-action-hidden">
                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">
                                        <em class="icon ni ni-user-cross-fill"></em>
                                    </a>
                                </li>
                                <li>
                                    <div class="drodown">
                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <ul class="link-list-opt no-bdr">
                                                <li><a href="#"><em class="icon ni ni-focus"></em><span>Quick View</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-repeat"></em><span>Transaction</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-activity-round"></em><span>Activities</span></a></li>
                                                <li class="divider"></li>
                                                <li><a href="#"><em class="icon ni ni-shield-star"></em><span>Reset Pass</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-shield-off"></em><span>Reset 2FA</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-na"></em><span>Suspend User</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </td>
                    </tr><!-- .nk-tb-item  -->
                    <tr class="nk-tb-item">
                        <td class="nk-tb-col nk-tb-col-check">
                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                <input type="checkbox" class="custom-control-input" id="uid5">
                                <label class="custom-control-label" for="uid5"></label>
                            </div>
                        </td>
                        <td class="nk-tb-col">
                            <div class="user-card">
                                <div class="user-avatar bg-purple d-none d-sm-flex">
                                    <span>FB</span>
                                </div>
                                <div class="user-info">
                                    <span class="tb-lead">Frances Burns <span class="dot dot-success d-md-none ms-1"></span></span>
                                    <span>info@softnio.com</span>
                                </div>
                            </div>
                        </td>
                        <td class="nk-tb-col tb-col-mb" data-order="42.50">
                            <span class="tb-amount">42.50 <span class="currency">USD</span></span>
                        </td>
                        <td class="nk-tb-col tb-col-md">
                            <span>+639 130-3150</span>
                        </td>
                        <td class="nk-tb-col tb-col-lg" data-order="Email Submited - Kyc Unverified">
                            <ul class="list-status">
                                <li><em class="icon text-info ni ni-check-circle"></em> <span>Email</span></li>
                                <li><em class="icon ni ni-alert-circle"></em> <span>KYC</span></li>
                            </ul>
                        </td>
                        <td class="nk-tb-col tb-col-lg">
                            <span>31 Jan 2020</span>
                        </td>
                        <td class="nk-tb-col tb-col-md">
                            <span class="tb-status text-success">Active</span>
                        </td>
                        <td class="nk-tb-col nk-tb-col-tools">
                            <ul class="nk-tb-actions gx-1">
                                <li class="nk-tb-action-hidden">
                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Wallet">
                                        <em class="icon ni ni-wallet-fill"></em>
                                    </a>
                                </li>
                                <li class="nk-tb-action-hidden">
                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                        <em class="icon ni ni-mail-fill"></em>
                                    </a>
                                </li>
                                <li class="nk-tb-action-hidden">
                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">
                                        <em class="icon ni ni-user-cross-fill"></em>
                                    </a>
                                </li>
                                <li>
                                    <div class="drodown">
                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <ul class="link-list-opt no-bdr">
                                                <li><a href="#"><em class="icon ni ni-focus"></em><span>Quick View</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-repeat"></em><span>Transaction</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-activity-round"></em><span>Activities</span></a></li>
                                                <li class="divider"></li>
                                                <li><a href="#"><em class="icon ni ni-shield-star"></em><span>Reset Pass</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-shield-off"></em><span>Reset 2FA</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-na"></em><span>Suspend User</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </td>
                    </tr><!-- .nk-tb-item  -->
                    <tr class="nk-tb-item">
                        <td class="nk-tb-col nk-tb-col-check">
                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                <input type="checkbox" class="custom-control-input" id="uid6">
                                <label class="custom-control-label" for="uid6"></label>
                            </div>
                        </td>
                        <td class="nk-tb-col">
                            <div class="user-card">
                                <div class="user-avatar bg-dark d-none d-sm-flex">
                                    <span>AB</span>
                                </div>
                                <div class="user-info">
                                    <span class="tb-lead">Alan Butler<span class="dot dot-success d-md-none ms-1"></span></span>
                                    <span>butler@example.com</span>
                                </div>
                            </div>
                        </td>
                        <td class="nk-tb-col tb-col-mb" data-order="440.34">
                            <span class="tb-amount">440.34 <span class="currency">USD</span></span>
                        </td>
                        <td class="nk-tb-col tb-col-md">
                            <span>+963 309-1706</span>
                        </td>
                        <td class="nk-tb-col tb-col-lg" data-order="Email Submited - Kyc More Info">
                            <ul class="list-status">
                                <li><em class="icon text-info ni ni-check-circle"></em> <span>Email</span></li>
                                <li><em class="icon text-warning ni ni-alert-circle"></em> <span>KYC</span></li>
                            </ul>
                        </td>
                        <td class="nk-tb-col tb-col-lg">
                            <span>18 Jan 2020</span>
                        </td>
                        <td class="nk-tb-col tb-col-md">
                            <span class="tb-status text-info">Inactive</span>
                        </td>
                        <td class="nk-tb-col nk-tb-col-tools">
                            <ul class="nk-tb-actions gx-1">
                                <li class="nk-tb-action-hidden">
                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Wallet">
                                        <em class="icon ni ni-wallet-fill"></em>
                                    </a>
                                </li>
                                <li class="nk-tb-action-hidden">
                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                        <em class="icon ni ni-mail-fill"></em>
                                    </a>
                                </li>
                                <li class="nk-tb-action-hidden">
                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">
                                        <em class="icon ni ni-user-cross-fill"></em>
                                    </a>
                                </li>
                                <li>
                                    <div class="drodown">
                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <ul class="link-list-opt no-bdr">
                                                <li><a href="#"><em class="icon ni ni-focus"></em><span>Quick View</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-repeat"></em><span>Transaction</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-activity-round"></em><span>Activities</span></a></li>
                                                <li class="divider"></li>
                                                <li><a href="#"><em class="icon ni ni-shield-star"></em><span>Reset Pass</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-shield-off"></em><span>Reset 2FA</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-na"></em><span>Suspend User</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </td>
                    </tr><!-- .nk-tb-item  -->
                    <tr class="nk-tb-item">
                        <td class="nk-tb-col nk-tb-col-check">
                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                <input type="checkbox" class="custom-control-input" id="uid7">
                                <label class="custom-control-label" for="uid7"></label>
                            </div>
                        </td>
                        <td class="nk-tb-col">
                            <div class="user-card">
                                <div class="user-avatar bg-warning d-none d-sm-flex">
                                    <span>VL</span>
                                </div>
                                <div class="user-info">
                                    <span class="tb-lead">Victoria Lynch <span class="dot dot-success d-md-none ms-1"></span></span>
                                    <span>victoria@example.com</span>
                                </div>
                            </div>
                        </td>
                        <td class="nk-tb-col tb-col-mb" data-order="59400.68">
                            <span class="tb-amount">59,400.68 <span class="currency">USD</span></span>
                        </td>
                        <td class="nk-tb-col tb-col-md">
                            <span>+811 985-4846</span>
                        </td>
                        <td class="nk-tb-col tb-col-lg" data-order="Email Verified - Kyc Verified">
                            <ul class="list-status">
                                <li><em class="icon text-success ni ni-check-circle"></em> <span>Email</span></li>
                                <li><em class="icon text-success ni ni-alert-circle"></em> <span>KYC</span></li>
                            </ul>
                        </td>
                        <td class="nk-tb-col tb-col-lg">
                            <span>15 Jan 2020</span>
                        </td>
                        <td class="nk-tb-col tb-col-md">
                            <span class="tb-status text-success">Active</span>
                        </td>
                        <td class="nk-tb-col nk-tb-col-tools">
                            <ul class="nk-tb-actions gx-1">
                                <li class="nk-tb-action-hidden">
                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Wallet">
                                        <em class="icon ni ni-wallet-fill"></em>
                                    </a>
                                </li>
                                <li class="nk-tb-action-hidden">
                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                        <em class="icon ni ni-mail-fill"></em>
                                    </a>
                                </li>
                                <li class="nk-tb-action-hidden">
                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">
                                        <em class="icon ni ni-user-cross-fill"></em>
                                    </a>
                                </li>
                                <li>
                                    <div class="drodown">
                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <ul class="link-list-opt no-bdr">
                                                <li><a href="#"><em class="icon ni ni-focus"></em><span>Quick View</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-repeat"></em><span>Transaction</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-activity-round"></em><span>Activities</span></a></li>
                                                <li class="divider"></li>
                                                <li><a href="#"><em class="icon ni ni-shield-star"></em><span>Reset Pass</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-shield-off"></em><span>Reset 2FA</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-na"></em><span>Suspend User</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </td>
                    </tr><!-- .nk-tb-item  -->
                    <tr class="nk-tb-item">
                        <td class="nk-tb-col nk-tb-col-check">
                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                <input type="checkbox" class="custom-control-input" id="uid8">
                                <label class="custom-control-label" for="uid8"></label>
                            </div>
                        </td>
                        <td class="nk-tb-col">
                            <div class="user-card">
                                <div class="user-avatar bg-success d-none d-sm-flex">
                                    <span>PN</span>
                                </div>
                                <div class="user-info">
                                    <span class="tb-lead">Patrick Newman <span class="dot dot-success d-md-none ms-1"></span></span>
                                    <span>patrick@example.com</span>
                                </div>
                            </div>
                        </td>
                        <td class="nk-tb-col tb-col-mb" data-order="30.00">
                            <span class="tb-amount">30.00 <span class="currency">USD</span></span>
                        </td>
                        <td class="nk-tb-col tb-col-md">
                            <span>+942 238-4474</span>
                        </td>
                        <td class="nk-tb-col tb-col-lg" data-order="Email Verified - Kyc Submited">
                            <ul class="list-status">
                                <li><em class="icon text-success ni ni-check-circle"></em> <span>Email</span></li>
                                <li><em class="icon text-info ni ni-alert-circle"></em> <span>KYC</span></li>
                            </ul>
                        </td>
                        <td class="nk-tb-col tb-col-lg">
                            <span>08 Jan 2020</span>
                        </td>
                        <td class="nk-tb-col tb-col-md">
                            <span class="tb-status text-success">Active</span>
                        </td>
                        <td class="nk-tb-col nk-tb-col-tools">
                            <ul class="nk-tb-actions gx-1">
                                <li class="nk-tb-action-hidden">
                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Wallet">
                                        <em class="icon ni ni-wallet-fill"></em>
                                    </a>
                                </li>
                                <li class="nk-tb-action-hidden">
                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                        <em class="icon ni ni-mail-fill"></em>
                                    </a>
                                </li>
                                <li class="nk-tb-action-hidden">
                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">
                                        <em class="icon ni ni-user-cross-fill"></em>
                                    </a>
                                </li>
                                <li>
                                    <div class="drodown">
                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <ul class="link-list-opt no-bdr">
                                                <li><a href="#"><em class="icon ni ni-focus"></em><span>Quick View</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-repeat"></em><span>Transaction</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-activity-round"></em><span>Activities</span></a></li>
                                                <li class="divider"></li>
                                                <li><a href="#"><em class="icon ni ni-shield-star"></em><span>Reset Pass</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-shield-off"></em><span>Reset 2FA</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-na"></em><span>Suspend User</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </td>
                    </tr><!-- .nk-tb-item  -->
                    <tr class="nk-tb-item">
                        <td class="nk-tb-col nk-tb-col-check">
                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                <input type="checkbox" class="custom-control-input" id="uid9">
                                <label class="custom-control-label" for="uid9"></label>
                            </div>
                        </td>
                        <td class="nk-tb-col">
                            <div class="user-card">
                                <div class="user-avatar bg-info d-none d-sm-flex">
                                    <span>JL</span>
                                </div>
                                <div class="user-info">
                                    <span class="tb-lead">Joe Larson <span class="dot dot-success d-md-none ms-1"></span></span>
                                    <span>larson@example.com</span>
                                </div>
                            </div>
                        </td>
                        <td class="nk-tb-col tb-col-mb" data-order="32000.34">
                            <span class="tb-amount">32,000.34 <span class="currency">USD</span></span>
                        </td>
                        <td class="nk-tb-col tb-col-md">
                            <span>+168 603-2320</span>
                        </td>
                        <td class="nk-tb-col tb-col-lg" data-order="Email Verified - Kyc Verified">
                            <ul class="list-status">
                                <li><em class="icon text-success ni ni-check-circle"></em> <span>Email</span></li>
                                <li><em class="icon text-success ni ni-alert-circle"></em> <span>KYC</span></li>
                            </ul>
                        </td>
                        <td class="nk-tb-col tb-col-lg">
                            <span>04 Feb 2020</span>
                        </td>
                        <td class="nk-tb-col tb-col-md">
                            <span class="tb-status text-success">Active</span>
                        </td>
                        <td class="nk-tb-col nk-tb-col-tools">
                            <ul class="nk-tb-actions gx-1">
                                <li class="nk-tb-action-hidden">
                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Wallet">
                                        <em class="icon ni ni-wallet-fill"></em>
                                    </a>
                                </li>
                                <li class="nk-tb-action-hidden">
                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                        <em class="icon ni ni-mail-fill"></em>
                                    </a>
                                </li>
                                <li class="nk-tb-action-hidden">
                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">
                                        <em class="icon ni ni-user-cross-fill"></em>
                                    </a>
                                </li>
                                <li>
                                    <div class="drodown">
                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <ul class="link-list-opt no-bdr">
                                                <li><a href="#"><em class="icon ni ni-focus"></em><span>Quick View</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-repeat"></em><span>Transaction</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-activity-round"></em><span>Activities</span></a></li>
                                                <li class="divider"></li>
                                                <li><a href="#"><em class="icon ni ni-shield-star"></em><span>Reset Pass</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-shield-off"></em><span>Reset 2FA</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-na"></em><span>Suspend User</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </td>
                    </tr><!-- .nk-tb-item  -->
                    <tr class="nk-tb-item">
                        <td class="nk-tb-col nk-tb-col-check">
                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                <input type="checkbox" class="custom-control-input" id="uid10">
                                <label class="custom-control-label" for="uid10"></label>
                            </div>
                        </td>
                        <td class="nk-tb-col">
                            <div class="user-card">
                                <div class="user-avatar bg-success d-none d-sm-flex">
                                    <span>AL</span>
                                </div>
                                <div class="user-info">
                                    <span class="tb-lead">Ashley Lawson <span class="dot dot-warning d-md-none ms-1"></span></span>
                                    <span>ashley@softnio.com</span>
                                </div>
                            </div>
                        </td>
                        <td class="nk-tb-col tb-col-mb" data-order="580.00">
                            <span class="tb-amount">580.00 <span class="currency">USD</span></span>
                        </td>
                        <td class="nk-tb-col tb-col-md">
                            <span>+124 394-1787</span>
                        </td>
                        <td class="nk-tb-col tb-col-lg" data-order="Email Verified - Kyc Submited">
                            <ul class="list-status">
                                <li><em class="icon text-success ni ni-check-circle"></em> <span>Email</span></li>
                                <li><em class="icon text-info ni ni-alert-circle"></em> <span>KYC</span></li>
                            </ul>
                        </td>
                        <td class="nk-tb-col tb-col-lg">
                            <span>07 Feb 2020</span>
                        </td>
                        <td class="nk-tb-col tb-col-md">
                            <span class="tb-status text-warning">Pending</span>
                        </td>
                        <td class="nk-tb-col nk-tb-col-tools">
                            <ul class="nk-tb-actions gx-1">
                                <li class="nk-tb-action-hidden">
                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Wallet">
                                        <em class="icon ni ni-wallet-fill"></em>
                                    </a>
                                </li>
                                <li class="nk-tb-action-hidden">
                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                        <em class="icon ni ni-mail-fill"></em>
                                    </a>
                                </li>
                                <li class="nk-tb-action-hidden">
                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">
                                        <em class="icon ni ni-user-cross-fill"></em>
                                    </a>
                                </li>
                                <li>
                                    <div class="drodown">
                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <ul class="link-list-opt no-bdr">
                                                <li><a href="#"><em class="icon ni ni-focus"></em><span>Quick View</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-repeat"></em><span>Transaction</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-activity-round"></em><span>Activities</span></a></li>
                                                <li class="divider"></li>
                                                <li><a href="#"><em class="icon ni ni-shield-star"></em><span>Reset Pass</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-shield-off"></em><span>Reset 2FA</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-na"></em><span>Suspend User</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </td>
                    </tr><!-- .nk-tb-item  -->
                    <tr class="nk-tb-item">
                        <td class="nk-tb-col nk-tb-col-check">
                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                <input type="checkbox" class="custom-control-input" id="uid11">
                                <label class="custom-control-label" for="uid11"></label>
                            </div>
                        </td>
                        <td class="nk-tb-col">
                            <div class="user-card">
                                <div class="user-avatar bg-danger d-none d-sm-flex">
                                    <span>JM</span>
                                </div>
                                <div class="user-info">
                                    <span class="tb-lead">Jane Montgomery <span class="dot dot-success d-md-none ms-1"></span></span>
                                    <span>jane84@example.com</span>
                                </div>
                            </div>
                        </td>
                        <td class="nk-tb-col tb-col-mb" data-order="0.00">
                            <span class="tb-amount">0.00 <span class="currency">USD</span></span>
                        </td>
                        <td class="nk-tb-col tb-col-md">
                            <span>+439 271-5360</span>
                        </td>
                        <td class="nk-tb-col tb-col-lg" data-order="Email Unverified - Kyc Unverified">
                            <ul class="list-status">
                                <li><em class="icon ni ni-check-circle"></em> <span>Email</span></li>
                                <li><em class="icon ni ni-alert-circle"></em> <span>KYC</span></li>
                            </ul>
                        </td>
                        <td class="nk-tb-col tb-col-lg">
                            <span>01 Feb 2020</span>
                        </td>
                        <td class="nk-tb-col tb-col-md">
                            <span class="tb-status text-danger">Suspend</span>
                        </td>
                        <td class="nk-tb-col nk-tb-col-tools">
                            <ul class="nk-tb-actions gx-1">
                                <li class="nk-tb-action-hidden">
                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Wallet">
                                        <em class="icon ni ni-wallet-fill"></em>
                                    </a>
                                </li>
                                <li class="nk-tb-action-hidden">
                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                        <em class="icon ni ni-mail-fill"></em>
                                    </a>
                                </li>
                                <li class="nk-tb-action-hidden">
                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">
                                        <em class="icon ni ni-user-cross-fill"></em>
                                    </a>
                                </li>
                                <li>
                                    <div class="drodown">
                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <ul class="link-list-opt no-bdr">
                                                <li><a href="#"><em class="icon ni ni-focus"></em><span>Quick View</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-repeat"></em><span>Transaction</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-activity-round"></em><span>Activities</span></a></li>
                                                <li class="divider"></li>
                                                <li><a href="#"><em class="icon ni ni-shield-star"></em><span>Reset Pass</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-shield-off"></em><span>Reset 2FA</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-na"></em><span>Suspend User</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </td>
                    </tr><!-- .nk-tb-item  -->
                    <tr class="nk-tb-item">
                        <td class="nk-tb-col nk-tb-col-check">
                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                <input type="checkbox" class="custom-control-input" id="uid12">
                                <label class="custom-control-label" for="uid12"></label>
                            </div>
                        </td>
                        <td class="nk-tb-col">
                            <div class="user-card">
                                <div class="user-avatar bg-purple d-none d-sm-flex">
                                    <span>FB</span>
                                </div>
                                <div class="user-info">
                                    <span class="tb-lead">Frances Burns <span class="dot dot-success d-md-none ms-1"></span></span>
                                    <span>info@softnio.com</span>
                                </div>
                            </div>
                        </td>
                        <td class="nk-tb-col tb-col-mb" data-order="42.50">
                            <span class="tb-amount">42.50 <span class="currency">USD</span></span>
                        </td>
                        <td class="nk-tb-col tb-col-md">
                            <span>+639 130-3150</span>
                        </td>
                        <td class="nk-tb-col tb-col-lg" data-order="Email Submited - Kyc Unverified">
                            <ul class="list-status">
                                <li><em class="icon text-info ni ni-check-circle"></em> <span>Email</span></li>
                                <li><em class="icon ni ni-alert-circle"></em> <span>KYC</span></li>
                            </ul>
                        </td>
                        <td class="nk-tb-col tb-col-lg">
                            <span>31 Jan 2020</span>
                        </td>
                        <td class="nk-tb-col tb-col-md">
                            <span class="tb-status text-success">Active</span>
                        </td>
                        <td class="nk-tb-col nk-tb-col-tools">
                            <ul class="nk-tb-actions gx-1">
                                <li class="nk-tb-action-hidden">
                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Wallet">
                                        <em class="icon ni ni-wallet-fill"></em>
                                    </a>
                                </li>
                                <li class="nk-tb-action-hidden">
                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                        <em class="icon ni ni-mail-fill"></em>
                                    </a>
                                </li>
                                <li class="nk-tb-action-hidden">
                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">
                                        <em class="icon ni ni-user-cross-fill"></em>
                                    </a>
                                </li>
                                <li>
                                    <div class="drodown">
                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <ul class="link-list-opt no-bdr">
                                                <li><a href="#"><em class="icon ni ni-focus"></em><span>Quick View</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-repeat"></em><span>Transaction</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-activity-round"></em><span>Activities</span></a></li>
                                                <li class="divider"></li>
                                                <li><a href="#"><em class="icon ni ni-shield-star"></em><span>Reset Pass</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-shield-off"></em><span>Reset 2FA</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-na"></em><span>Suspend User</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </td>
                    </tr><!-- .nk-tb-item  -->
                    <tr class="nk-tb-item">
                        <td class="nk-tb-col nk-tb-col-check">
                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                <input type="checkbox" class="custom-control-input" id="uid13">
                                <label class="custom-control-label" for="uid13"></label>
                            </div>
                        </td>
                        <td class="nk-tb-col">
                            <div class="user-card">
                                <div class="user-avatar bg-dark d-none d-sm-flex">
                                    <span>AB</span>
                                </div>
                                <div class="user-info">
                                    <span class="tb-lead">Alan Butler<span class="dot dot-success d-md-none ms-1"></span></span>
                                    <span>butler@example.com</span>
                                </div>
                            </div>
                        </td>
                        <td class="nk-tb-col tb-col-mb" data-order="440.34">
                            <span class="tb-amount">440.34 <span class="currency">USD</span></span>
                        </td>
                        <td class="nk-tb-col tb-col-md">
                            <span>+963 309-1706</span>
                        </td>
                        <td class="nk-tb-col tb-col-lg" data-order="Email Submited - Kyc More Info">
                            <ul class="list-status">
                                <li><em class="icon text-info ni ni-check-circle"></em> <span>Email</span></li>
                                <li><em class="icon text-warning ni ni-alert-circle"></em> <span>KYC</span></li>
                            </ul>
                        </td>
                        <td class="nk-tb-col tb-col-lg">
                            <span>18 Jan 2020</span>
                        </td>
                        <td class="nk-tb-col tb-col-md">
                            <span class="tb-status text-info">Inactive</span>
                        </td>
                        <td class="nk-tb-col nk-tb-col-tools">
                            <ul class="nk-tb-actions gx-1">
                                <li class="nk-tb-action-hidden">
                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Wallet">
                                        <em class="icon ni ni-wallet-fill"></em>
                                    </a>
                                </li>
                                <li class="nk-tb-action-hidden">
                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                        <em class="icon ni ni-mail-fill"></em>
                                    </a>
                                </li>
                                <li class="nk-tb-action-hidden">
                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">
                                        <em class="icon ni ni-user-cross-fill"></em>
                                    </a>
                                </li>
                                <li>
                                    <div class="drodown">
                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <ul class="link-list-opt no-bdr">
                                                <li><a href="#"><em class="icon ni ni-focus"></em><span>Quick View</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-repeat"></em><span>Transaction</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-activity-round"></em><span>Activities</span></a></li>
                                                <li class="divider"></li>
                                                <li><a href="#"><em class="icon ni ni-shield-star"></em><span>Reset Pass</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-shield-off"></em><span>Reset 2FA</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-na"></em><span>Suspend User</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </td>
                    </tr><!-- .nk-tb-item  -->
                </tbody>
            </table>
        </div>
    </div><!-- .card-preview -->
</div> <!-- nk-block -->
</div>
</div>
</div>

@include('admin.template.footer')
