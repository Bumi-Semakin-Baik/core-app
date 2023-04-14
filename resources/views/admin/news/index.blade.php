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
                                                <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                                <div class="toggle-expand-content" data-content="pageMenu">
                                                    <ul class="nk-block-tools g-3">
                                                        <li>
                                                            <div class="drodown">
                                                                <a href="#" class="dropdown-toggle btn btn-white btn-dim btn-outline-light" data-bs-toggle="dropdown"><em class="d-none d-sm-inline icon ni ni-filter-alt"></em><span>Filtered By</span><em class="dd-indc icon ni ni-chevron-right"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="#"><span>Open</span></a></li>
                                                                        <li><a href="#"><span>Closed</span></a></li>
                                                                        <li><a href="#"><span>Onhold</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="nk-block-tools-opt d-none d-sm-block">
                                                            <a href="#" class="btn btn-primary"><em class="icon ni ni-plus"></em><span>Add Project</span></a>
                                                        </li>
                                                        <li class="nk-block-tools-opt d-block d-sm-none">
                                                            <a href="#" class="btn btn-icon btn-primary"><em class="icon ni ni-plus"></em></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div><!-- .toggle-wrap -->
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="row g-gs">
                                        <div class="col-sm-6 col-lg-4 col-xxl-3">
                                            <div class="card h-100">
                                                <div class="card-inner">
                                                    <div class="project">
                                                        <div class="project-head">
                                                            <a href="html/apps-kanban.html" class="project-title">
                                                                <div class="user-avatar sq bg-purple"><span>CAT</span></div>
                                                                <div class="project-info">
                                                                    <h6 class="title">News Title</h6>
                                                                    <span class="sub-text">News Category</span>
                                                                </div>
                                                            </a>
                                                            <div class="drodown">
                                                                <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger mt-n1 me-n1" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="html/apps-kanban.html"><em class="icon ni ni-eye"></em><span>View News</span></a></li>
                                                                        <li><a href="#"><em class="icon ni ni-edit"></em><span>Edit News</span></a></li>
                                                                        <li><a href="#"  data-bs-toggle="modal" data-bs-target="#modalZoom"><em class="icon ni ni-check-round-cut"></em><span>Delete News</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="project-details">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit... <a href="#">See more</a></p>
                                                        </div>
                                                        <div class="project-meta">
                                                            <ul class="project-users g-1">
                                                                <li>
                                                                    <div class="user-avatar sm bg-blue"><img src="./images/avatar/b-sm.jpg" alt=""></div>
                                                                </li>
                                                                <li>
                                                                    <span class="sub-text">Author:</span>
                                                                    Mas Hardin
                                                                </li>
                                                            </ul>
                                                            <div class="project-progress-task"><em class="icon ni ni-check-round-cut"></em><span>2k views</span></div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-lg-4 col-xxl-3">
                                            <div class="card h-100">
                                                <div class="card-inner">
                                                    <div class="project">
                                                        <div class="project-head">
                                                            <a href="html/apps-kanban.html" class="project-title">
                                                                <div class="user-avatar sq bg-purple"><span>CAT</span></div>
                                                                <div class="project-info">
                                                                    <h6 class="title">News Title</h6>
                                                                    <span class="sub-text">News Category</span>
                                                                </div>
                                                            </a>
                                                            <div class="drodown">
                                                                <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger mt-n1 me-n1" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="html/apps-kanban.html"><em class="icon ni ni-eye"></em><span>View News</span></a></li>
                                                                        <li><a href="#"><em class="icon ni ni-edit"></em><span>Edit News</span></a></li>
                                                                        <li><a href="#"  data-bs-toggle="modal" data-bs-target="#modalZoom"><em class="icon ni ni-check-round-cut"></em><span>Delete News</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="project-details">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit... <a href="#">See more</a></p>
                                                        </div>
                                                        <div class="project-meta">
                                                            <ul class="project-users g-1">
                                                                <li>
                                                                    <div class="user-avatar sm bg-blue"><img src="./images/avatar/b-sm.jpg" alt=""></div>
                                                                </li>
                                                                <li>
                                                                    <span class="sub-text">Author:</span>
                                                                    Mas Hardin
                                                                </li>
                                                            </ul>
                                                            <div class="project-progress-task"><em class="icon ni ni-check-round-cut"></em><span>2k views</span></div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-lg-4 col-xxl-3">
                                            <div class="card h-100">
                                                <div class="card-inner">
                                                    <div class="project">
                                                        <div class="project-head">
                                                            <a href="html/apps-kanban.html" class="project-title">
                                                                <div class="user-avatar sq bg-purple"><span>CAT</span></div>
                                                                <div class="project-info">
                                                                    <h6 class="title">News Title</h6>
                                                                    <span class="sub-text">News Category</span>
                                                                </div>
                                                            </a>
                                                            <div class="drodown">
                                                                <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger mt-n1 me-n1" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="html/apps-kanban.html"><em class="icon ni ni-eye"></em><span>View News</span></a></li>
                                                                        <li><a href="#"><em class="icon ni ni-edit"></em><span>Edit News</span></a></li>
                                                                        <li><a href="#"  data-bs-toggle="modal" data-bs-target="#modalZoom"><em class="icon ni ni-check-round-cut"></em><span>Delete News</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="project-details">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit... <a href="#">See more</a></p>
                                                        </div>
                                                        <div class="project-meta">
                                                            <ul class="project-users g-1">
                                                                <li>
                                                                    <div class="user-avatar sm bg-blue"><img src="./images/avatar/b-sm.jpg" alt=""></div>
                                                                </li>
                                                                <li>
                                                                    <span class="sub-text">Author:</span>
                                                                    Mas Hardin
                                                                </li>
                                                            </ul>
                                                            <div class="project-progress-task"><em class="icon ni ni-check-round-cut"></em><span>2k views</span></div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div><!-- .nk-block -->

                                <div class="nk-block">
                                    <div class="row g-gs">
                                        <div class="col-sm-6 col-lg-4 col-xxl-3">
                                            <div class="card h-100">
                                                <div class="card-inner">
                                                    <div class="project">
                                                        <div class="project-head">
                                                            <a href="html/apps-kanban.html" class="project-title">
                                                                <div class="user-avatar sq bg-purple"><span>CAT</span></div>
                                                                <div class="project-info">
                                                                    <h6 class="title">News Title</h6>
                                                                    <span class="sub-text">News Category</span>
                                                                </div>
                                                            </a>
                                                            <div class="drodown">
                                                                <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger mt-n1 me-n1" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="html/apps-kanban.html"><em class="icon ni ni-eye"></em><span>View News</span></a></li>
                                                                        <li><a href="#"><em class="icon ni ni-edit"></em><span>Edit News</span></a></li>
                                                                        <li><a href="#"  data-bs-toggle="modal" data-bs-target="#modalZoom"><em class="icon ni ni-check-round-cut"></em><span>Delete News</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="project-details">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit... <a href="#">See more</a></p>
                                                        </div>
                                                        <div class="project-meta">
                                                            <ul class="project-users g-1">
                                                                <li>
                                                                    <div class="user-avatar sm bg-blue"><img src="./images/avatar/b-sm.jpg" alt=""></div>
                                                                </li>
                                                                <li>
                                                                    <span class="sub-text">Author:</span>
                                                                    Mas Hardin
                                                                </li>
                                                            </ul>
                                                            <div class="project-progress-task"><em class="icon ni ni-check-round-cut"></em><span>2k views</span></div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-lg-4 col-xxl-3">
                                            <div class="card h-100">
                                                <div class="card-inner">
                                                    <div class="project">
                                                        <div class="project-head">
                                                            <a href="html/apps-kanban.html" class="project-title">
                                                                <div class="user-avatar sq bg-purple"><span>CAT</span></div>
                                                                <div class="project-info">
                                                                    <h6 class="title">News Title</h6>
                                                                    <span class="sub-text">News Category</span>
                                                                </div>
                                                            </a>
                                                            <div class="drodown">
                                                                <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger mt-n1 me-n1" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="html/apps-kanban.html"><em class="icon ni ni-eye"></em><span>View News</span></a></li>
                                                                        <li><a href="#"><em class="icon ni ni-edit"></em><span>Edit News</span></a></li>
                                                                        <li><a href="#"  data-bs-toggle="modal" data-bs-target="#modalZoom"><em class="icon ni ni-check-round-cut"></em><span>Delete News</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="project-details">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit... <a href="#">See more</a></p>
                                                        </div>
                                                        <div class="project-meta">
                                                            <ul class="project-users g-1">
                                                                <li>
                                                                    <div class="user-avatar sm bg-blue"><img src="./images/avatar/b-sm.jpg" alt=""></div>
                                                                </li>
                                                                <li>
                                                                    <span class="sub-text">Author:</span>
                                                                    Mas Hardin
                                                                </li>
                                                            </ul>
                                                            <div class="project-progress-task"><em class="icon ni ni-check-round-cut"></em><span>2k views</span></div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div><!-- .nk-block -->

                            </div>
                        </div>
                    </div>
                </div>

@include('admin.template.footer')

<div class="modal fade zoom" tabindex="-1" id="modalZoom">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Hapus Berita?</h5>
                <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <em class="icon ni ni-cross"></em>
                </a>
            </div>
            <div class="modal-body">
                <p>Apakah anda yakin akan menghapus data berita berikut?</p>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-primary">Hapus</a>
                <a class="btn btn-outline-light" data-bs-dismiss="modal">Tidak</a>
            </div>
        </div>
    </div>
</div>
