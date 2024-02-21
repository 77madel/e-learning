<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <!-- Container fluid -->
    <section class="container-fluid p-4">
        <div class="row">
            <!-- Page Header -->
            <div class="col-lg-12 col-md-12 col-12">
                <div class="border-bottom pb-3 mb-3 d-flex justify-content-between align-items-center">
                    <div class="mb-2 mb-lg-0">
                        <h1 class="mb-1 h2 fw-bold">
                            Instructor
                            <span class="fs-5">(12,105)</span>
                        </h1>
                        <!-- Breadcrumb  -->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="../dashboard/admin-dashboard.html">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">User</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Instructor</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="nav btn-group" role="tablist">
                        <button class="btn btn-outline-secondary active" data-bs-toggle="tab" data-bs-target="#tabPaneGrid" role="tab" aria-controls="tabPaneGrid" aria-selected="true">
                            <span class="fe fe-grid"></span>
                        </button>
                        <button class="btn btn-outline-secondary" data-bs-toggle="tab" data-bs-target="#tabPaneList" role="tab" aria-controls="tabPaneList" aria-selected="false">
                            <span class="fe fe-list"></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <!-- Tab -->
                <div class="tab-content">
                    <!-- Tab pane -->
                    <div class="tab-pane fade show active" id="tabPaneGrid" role="tabpanel" aria-labelledby="tabPaneGrid">
                        <div class="mb-4">
                            <input type="search" class="form-control" placeholder="Search Instructor" >
                        </div>
                        <div class="row">
                            <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                                <!-- Card -->
                                <div class="card mb-4">
                                    <!-- Card body -->
                                    <div class="card-body">
                                        <div class="text-center">
                                            <img src="../../assets/images/avatar/avatar-11.jpg" class="rounded-circle avatar-xl mb-3" alt="" >
                                            <h4 class="mb-0">Wade Warren</h4>
                                            <p class="mb-0">Web Developer, Designer</p>
                                        </div>
                                        <div class="d-flex justify-content-between border-bottom py-2 mt-4">
                                            <span>Students</span>
                                            <span class="text-dark">50,274</span>
                                        </div>
                                        <div class="d-flex justify-content-between border-bottom py-2">
                                            <span>Instructor Rating</span>
                                            <span class="text-warning">
                                                            4.5
                                                <span>
                                                    <svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        width="11"
                                                        height="11"
                                                        fill="currentColor"
                                                        class="bi bi-star-fill text-warning"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" >
                                                    </svg>
                                                </span>
                                            </span>
                                        </div>
                                        <div class="d-flex justify-content-between pt-2">
                                            <span>Courses</span>
                                            <span class="text-dark">12</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- tab pane -->
                    <div class="tab-pane fade" id="tabPaneList" role="tabpanel" aria-labelledby="tabPaneList">
                        <!-- card -->
                        <div class="card">
                            <!-- card header -->
                            <div class="card-header">
                                <input type="search" class="form-control" placeholder="Search Instructor" >
                            </div>
                            <!-- table -->
                            <div class="table-responsive">
                                <table class="table mb-0 text-nowrap table-hover table-centered">
                                    <thead class="table-light">
                                    <tr>
                                        <th>Name</th>
                                        <th>Topic</th>
                                        <th>Courses</th>
                                        <th>Joined</th>
                                        <th>Students</th>
                                        <th>Rating</th>

                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="../../assets/images/avatar/avatar-12.jpg" alt="" class="rounded-circle avatar-md me-2" >
                                                <h5 class="mb-0">Guy Hawkins</h5>
                                            </div>
                                        </td>
                                        <td>Engineering Architect</td>
                                        <td>6 Courses</td>
                                        <td>7 July, 2020</td>
                                        <td>50,274</td>
                                        <td>
                                            4.5
                                            <span class="fs-6 align-top">
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="11"
                                                                    height="11"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-secondary"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" >
                                                                </svg>
                                                            </span>
                                        </td>

                                        <td>
                                            <div class="hstack gap-4">
                                                <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Message"><i class="fe fe-mail"></i></a>
                                                <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Delete"><i class="fe fe-trash"></i></a>
                                                <span class="dropdown dropstart">
                                                                    <a
                                                                        class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                                                        href="#"
                                                                        role="button"
                                                                        data-bs-toggle="dropdown"
                                                                        data-bs-offset="-20,20"
                                                                        aria-expanded="false">
                                                                        <i class="fe fe-more-vertical"></i>
                                                                    </a>
                                                                    <span class="dropdown-menu">
                                                                        <span class="dropdown-header">Settings</span>
                                                                        <a class="dropdown-item" href="#">
                                                                            <i class="fe fe-edit dropdown-item-icon"></i>
                                                                            Edit
                                                                        </a>
                                                                        <a class="dropdown-item" href="#">
                                                                            <i class="fe fe-trash dropdown-item-icon"></i>
                                                                            Remove
                                                                        </a>
                                                                    </span>
                                                                </span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="../../assets/images/avatar/avatar-13.jpg" alt="" class="rounded-circle avatar-md me-2" >
                                                <h5 class="mb-0">Dianna Smiley</h5>
                                            </div>
                                        </td>
                                        <td>Front End Developer</td>
                                        <td>3 Courses</td>
                                        <td>6 July, 2020</td>
                                        <td>26,060</td>
                                        <td>
                                            4.5
                                            <span class="fs-6 align-top">
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="11"
                                                                    height="11"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-secondary"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" >
                                                                </svg>
                                                            </span>
                                        </td>

                                        <td>
                                            <div class="hstack gap-4">
                                                <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Message"><i class="fe fe-mail"></i></a>
                                                <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Delete"><i class="fe fe-trash"></i></a>
                                                <span class="dropdown dropstart">
                                                                    <a
                                                                        class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                                                        href="#"
                                                                        role="button"
                                                                        data-bs-toggle="dropdown"
                                                                        data-bs-offset="-20,20"
                                                                        aria-expanded="false">
                                                                        <i class="fe fe-more-vertical"></i>
                                                                    </a>
                                                                    <span class="dropdown-menu">
                                                                        <span class="dropdown-header">Settings</span>
                                                                        <a class="dropdown-item" href="#">
                                                                            <i class="fe fe-edit dropdown-item-icon"></i>
                                                                            Edit
                                                                        </a>
                                                                        <a class="dropdown-item" href="#">
                                                                            <i class="fe fe-trash dropdown-item-icon"></i>
                                                                            Remove
                                                                        </a>
                                                                    </span>
                                                                </span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="../../assets/images/avatar/avatar-17.jpg" alt="" class="rounded-circle avatar-md me-2" >
                                                <h5 class="mb-0">Nia Sikhone</h5>
                                            </div>
                                        </td>
                                        <td>Web Developer, Designer, and Teacher</td>
                                        <td>12 Courses</td>
                                        <td>12 June, 2020</td>
                                        <td>8,234</td>
                                        <td>
                                            4.5
                                            <span class="fs-6 align-top">
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="11"
                                                                    height="11"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-secondary"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" >
                                                                </svg>
                                                            </span>
                                        </td>

                                        <td>
                                            <div class="hstack gap-4">
                                                <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Message"><i class="fe fe-mail"></i></a>
                                                <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Delete"><i class="fe fe-trash"></i></a>
                                                <span class="dropdown dropstart">
                                                                    <a
                                                                        class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                                                        href="#"
                                                                        role="button"
                                                                        data-bs-toggle="dropdown"
                                                                        data-bs-offset="-20,20"
                                                                        aria-expanded="false">
                                                                        <i class="fe fe-more-vertical"></i>
                                                                    </a>
                                                                    <span class="dropdown-menu">
                                                                        <span class="dropdown-header">Settings</span>
                                                                        <a class="dropdown-item" href="#">
                                                                            <i class="fe fe-edit dropdown-item-icon"></i>
                                                                            Edit
                                                                        </a>
                                                                        <a class="dropdown-item" href="#">
                                                                            <i class="fe fe-trash dropdown-item-icon"></i>
                                                                            Remove
                                                                        </a>
                                                                    </span>
                                                                </span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="../../assets/images/avatar/avatar-14.jpg" alt="" class="rounded-circle avatar-md me-2" >
                                                <h5 class="mb-0">Jacob Jones</h5>
                                            </div>
                                        </td>
                                        <td>Bootstrap Expert</td>
                                        <td>7 Courses</td>
                                        <td>2 July, 2020</td>
                                        <td>14,944</td>
                                        <td>
                                            4.5
                                            <span class="fs-6 align-top">
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="11"
                                                                    height="11"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-secondary"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" >
                                                                </svg>
                                                            </span>
                                        </td>

                                        <td>
                                            <div class="hstack gap-4">
                                                <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Message"><i class="fe fe-mail"></i></a>
                                                <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Delete"><i class="fe fe-trash"></i></a>
                                                <span class="dropdown dropstart">
                                                                    <a
                                                                        class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                                                        href="#"
                                                                        role="button"
                                                                        data-bs-toggle="dropdown"
                                                                        data-bs-offset="-20,20"
                                                                        aria-expanded="false">
                                                                        <i class="fe fe-more-vertical"></i>
                                                                    </a>
                                                                    <span class="dropdown-menu">
                                                                        <span class="dropdown-header">Settings</span>
                                                                        <a class="dropdown-item" href="#">
                                                                            <i class="fe fe-edit dropdown-item-icon"></i>
                                                                            Edit
                                                                        </a>
                                                                        <a class="dropdown-item" href="#">
                                                                            <i class="fe fe-trash dropdown-item-icon"></i>
                                                                            Remove
                                                                        </a>
                                                                    </span>
                                                                </span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="../../assets/images/avatar/avatar-15.jpg" alt="" class="rounded-circle avatar-md me-2" >
                                                <h5 class="mb-0">Kristin Watson</h5>
                                            </div>
                                        </td>
                                        <td>Web Development</td>
                                        <td>5 Courses</td>
                                        <td>1 July, 2020</td>
                                        <td>6,845</td>
                                        <td>
                                            4.5
                                            <span class="fs-6 align-top">
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="11"
                                                                    height="11"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-secondary"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" >
                                                                </svg>
                                                            </span>
                                        </td>

                                        <td>
                                            <div class="hstack gap-4">
                                                <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Message"><i class="fe fe-mail"></i></a>
                                                <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Delete"><i class="fe fe-trash"></i></a>
                                                <span class="dropdown dropstart">
                                                                    <a
                                                                        class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                                                        href="#"
                                                                        role="button"
                                                                        data-bs-toggle="dropdown"
                                                                        data-bs-offset="-20,20"
                                                                        aria-expanded="false">
                                                                        <i class="fe fe-more-vertical"></i>
                                                                    </a>
                                                                    <span class="dropdown-menu">
                                                                        <span class="dropdown-header">Settings</span>
                                                                        <a class="dropdown-item" href="#">
                                                                            <i class="fe fe-edit dropdown-item-icon"></i>
                                                                            Edit
                                                                        </a>
                                                                        <a class="dropdown-item" href="#">
                                                                            <i class="fe fe-trash dropdown-item-icon"></i>
                                                                            Remove
                                                                        </a>
                                                                    </span>
                                                                </span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="../../assets/images/avatar/avatar-17.jpg" alt="" class="rounded-circle avatar-md me-2" >
                                                <h5 class="mb-0">Nia Sikhone</h5>
                                            </div>
                                        </td>
                                        <td>Web Developer, Designer, and Teacher</td>
                                        <td>12 Courses</td>
                                        <td>12 June, 2020</td>
                                        <td>8,234</td>
                                        <td>
                                            4.5
                                            <span class="fs-6 align-top">
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="11"
                                                                    height="11"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-secondary"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" >
                                                                </svg>
                                                            </span>
                                        </td>

                                        <td>
                                            <div class="hstack gap-4">
                                                <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Message"><i class="fe fe-mail"></i></a>
                                                <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Delete"><i class="fe fe-trash"></i></a>
                                                <span class="dropdown dropstart">
                                                                    <a
                                                                        class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                                                        href="#"
                                                                        role="button"
                                                                        data-bs-toggle="dropdown"
                                                                        data-bs-offset="-20,20"
                                                                        aria-expanded="false">
                                                                        <i class="fe fe-more-vertical"></i>
                                                                    </a>
                                                                    <span class="dropdown-menu">
                                                                        <span class="dropdown-header">Settings</span>
                                                                        <a class="dropdown-item" href="#">
                                                                            <i class="fe fe-edit dropdown-item-icon"></i>
                                                                            Edit
                                                                        </a>
                                                                        <a class="dropdown-item" href="#">
                                                                            <i class="fe fe-trash dropdown-item-icon"></i>
                                                                            Remove
                                                                        </a>
                                                                    </span>
                                                                </span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="../../assets/images/avatar/avatar-16.jpg" alt="" class="rounded-circle avatar-md me-2" >
                                                <h5 class="mb-0">Rivao Luke</h5>
                                            </div>
                                        </td>
                                        <td>Web Development</td>
                                        <td>5 Courses</td>
                                        <td>1 July, 2020</td>
                                        <td>6,845</td>
                                        <td>
                                            4.5
                                            <span class="fs-6 align-top">
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="11"
                                                                    height="11"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-secondary"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" >
                                                                </svg>
                                                            </span>
                                        </td>

                                        <td>
                                            <div class="hstack gap-4">
                                                <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Message"><i class="fe fe-mail"></i></a>
                                                <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Delete"><i class="fe fe-trash"></i></a>
                                                <span class="dropdown dropstart">
                                                                    <a
                                                                        class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                                                        href="#"
                                                                        role="button"
                                                                        data-bs-toggle="dropdown"
                                                                        data-bs-offset="-20,20"
                                                                        aria-expanded="false">
                                                                        <i class="fe fe-more-vertical"></i>
                                                                    </a>
                                                                    <span class="dropdown-menu">
                                                                        <span class="dropdown-header">Settings</span>
                                                                        <a class="dropdown-item" href="#">
                                                                            <i class="fe fe-edit dropdown-item-icon"></i>
                                                                            Edit
                                                                        </a>
                                                                        <a class="dropdown-item" href="#">
                                                                            <i class="fe fe-trash dropdown-item-icon"></i>
                                                                            Remove
                                                                        </a>
                                                                    </span>
                                                                </span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="../../assets/images/avatar/avatar-17.jpg" alt="" class="rounded-circle avatar-md me-2" >
                                                <h5 class="mb-0">Nia Sikhone</h5>
                                            </div>
                                        </td>
                                        <td>Web Developer, Designer, and Teacher</td>
                                        <td>12 Courses</td>
                                        <td>12 June, 2020</td>
                                        <td>8,234</td>
                                        <td>
                                            4.5
                                            <span class="fs-6 align-top">
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="11"
                                                                    height="11"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-secondary"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" >
                                                                </svg>
                                                            </span>
                                        </td>

                                        <td>
                                            <div class="hstack gap-4">
                                                <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Message"><i class="fe fe-mail"></i></a>
                                                <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Delete"><i class="fe fe-trash"></i></a>
                                                <span class="dropdown dropstart">
                                                                    <a
                                                                        class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                                                        href="#"
                                                                        role="button"
                                                                        data-bs-toggle="dropdown"
                                                                        data-bs-offset="-20,20"
                                                                        aria-expanded="false">
                                                                        <i class="fe fe-more-vertical"></i>
                                                                    </a>
                                                                    <span class="dropdown-menu">
                                                                        <span class="dropdown-header">Settings</span>
                                                                        <a class="dropdown-item" href="#">
                                                                            <i class="fe fe-edit dropdown-item-icon"></i>
                                                                            Edit
                                                                        </a>
                                                                        <a class="dropdown-item" href="#">
                                                                            <i class="fe fe-trash dropdown-item-icon"></i>
                                                                            Remove
                                                                        </a>
                                                                    </span>
                                                                </span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="../../assets/images/avatar/avatar-18.jpg" alt="" class="rounded-circle avatar-md me-2" >

                                                <h5 class="mb-0">Xiaon Merry</h5>
                                            </div>
                                        </td>
                                        <td>Web Developer, Designer, and Teacher</td>
                                        <td>9 Courses</td>
                                        <td>8 June, 2020</td>
                                        <td>3,242</td>
                                        <td>
                                            4.5
                                            <span class="fs-6 align-top">
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="11"
                                                                    height="11"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-secondary"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" >
                                                                </svg>
                                                            </span>
                                        </td>

                                        <td>
                                            <div class="hstack gap-4">
                                                <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Message"><i class="fe fe-mail"></i></a>
                                                <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Delete"><i class="fe fe-trash"></i></a>
                                                <span class="dropdown dropstart">
                                                                    <a
                                                                        class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                                                        href="#"
                                                                        role="button"
                                                                        data-bs-toggle="dropdown"
                                                                        data-bs-offset="-20,20"
                                                                        aria-expanded="false">
                                                                        <i class="fe fe-more-vertical"></i>
                                                                    </a>
                                                                    <span class="dropdown-menu">
                                                                        <span class="dropdown-header">Settings</span>
                                                                        <a class="dropdown-item" href="#">
                                                                            <i class="fe fe-edit dropdown-item-icon"></i>
                                                                            Edit
                                                                        </a>
                                                                        <a class="dropdown-item" href="#">
                                                                            <i class="fe fe-trash dropdown-item-icon"></i>
                                                                            Remove
                                                                        </a>
                                                                    </span>
                                                                </span>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <!-- Pagination -->
                                <div class="card-footer">
                                    <nav>
                                        <ul class="pagination justify-content-center mb-0">
                                            <li class="page-item disabled">
                                                <a class="page-link mx-1 rounded" href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                                                        <path
                                                            fill-rule="evenodd"
                                                            d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" >
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="page-item active">
                                                <a class="page-link mx-1 rounded" href="#">1</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link mx-1 rounded" href="#">2</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link mx-1 rounded" href="#">3</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link mx-1 rounded" href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                                        <path
                                                            fill-rule="evenodd"
                                                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" >
                                                    </svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
