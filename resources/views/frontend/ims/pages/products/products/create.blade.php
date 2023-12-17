@extends('frontend.ims.layouts.app')
@section('title','IMS | Add Product')


@section('content')


<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Product -> Product</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Products</a></li>
                                <li class="breadcrumb-item active">Products</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">


                                <div class="col-lg-6 mb-3">
                                    <div class="mb-lg-0">
                                        <label for="choices-status-input" class="form-label">
                                            Project Title
                                            <span class="text-danger">
                                                *
                                            </span>
                                        </label>
                                        <div class="input-group">
                                            <select class="form-select" id="choices-status-input">
                                                <option selected>Choose...</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                            <button class="btn btn-outline-success" data-bs-toggle="modal"
                                                id="color-create-btn" data-bs-target="#showModal-project" type="button">
                                                <i class="bx bx-add-to-queue"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-lg-6 mb-3 ">
                                    <div class="mb-lg-0">
                                        <label for="choices-groups-input" class="form-label">
                                            Group
                                            <span class="text-danger">
                                                *
                                            </span>
                                        </label>
                                        <div class="input-group">
                                            <select class="form-select" id="choices-status-input">
                                                <option selected>Choose...</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                            <button class="btn btn-outline-success" type="button">
                                                <i class="bx bx-add-to-queue"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 mb-3 ">
                                    <div class="mb-lg-0">
                                        <label for="choices-Categorys-input" class="form-label">
                                            Category
                                            <span class="text-danger">
                                                *
                                            </span>
                                        </label>
                                        <div class="input-group">
                                            <select class="form-select" id="choices-status-input">
                                                <option selected>Choose...</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                            <button class="btn btn-outline-success" type="button">
                                                <i class="bx bx-add-to-queue"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 mb-3 ">
                                    <div class="mb-lg-0">
                                        <label for="choices-brands-input" class="form-label">
                                            Brand <span class="text-danger">
                                                *
                                            </span>
                                        </label>
                                        <div class="input-group">
                                            <select class="form-select" id="choices-status-input">
                                                <option selected>Choose...</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                            <button class="btn btn-outline-success" type="button">
                                                <i class="bx bx-add-to-queue"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 mb-3 ">
                                    <div class="mb-lg-0">
                                        <label for="choices-styles-input" class="form-label">
                                            Style
                                            <span class="text-danger">
                                                *
                                            </span>
                                        </label>
                                        <div class="input-group">
                                            <select class="form-select" id="choices-status-input">
                                                <option selected>Choose...</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                            <button class="btn btn-outline-success" type="button">
                                                <i class="bx bx-add-to-queue"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 mb-3 ">
                                    <div class="mb-lg-0">
                                        <label for="choices-sizes-input" class="form-label">
                                            Size
                                            <span class="text-danger">
                                                *
                                            </span>
                                        </label>
                                        <div class="input-group">
                                            <select class="form-select" id="choices-status-input">
                                                <option selected>Choose...</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                            <button class="btn btn-outline-success" type="button">
                                                <i class="bx bx-add-to-queue"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 mb-3 ">
                                    <div class="mb-lg-0">
                                        <label for="choices-status-input" class="form-label">
                                            Color
                                            <span class="text-danger">
                                                *
                                            </span>
                                        </label>
                                        <div class="input-group">
                                            <select class="form-select" id="choices-status-input">
                                                <option selected>Choose...</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                            <button class="btn btn-outline-success" data-bs-toggle="modal"
                                                id="color-create-btn" data-bs-target="#showModal-color" type="button">
                                                <i class="bx bx-add-to-queue"></i>
                                            </button>


                                            
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 mb-3 ">
                                    <div class="mb-lg-0">
                                        <label for="choices-status-input" class="form-label">
                                            UOM
                                            <span class="text-danger">
                                                *
                                            </span>
                                        </label>
                                        <div class="input-group">
                                            <select class="form-select" id="choices-status-input">
                                                <option selected>Choose...</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                            <button class="btn btn-outline-success" type="button">
                                                <i class="bx bx-add-to-queue"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <!-- <div class="col-lg-6 mb-3 ">
                                    <div class="mb-lg-0">
                                        <label for="choices-Suppliers-input" class="form-label">
                                            Supplier
                                            <span class="text-danger">
                                                *
                                            </span>
                                        </label>
                                        <div class="input-group">
                                            <select class="form-select" id="choices-status-input">
                                                <option selected>Choose...</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                            <button class="btn btn-outline-success" type="button">
                                                <i class="bx bx-add-to-queue"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div> -->


                                <div class="col-lg-6 mb-3 ">
                                    <!-- <div class="mb-3"> -->
                                    <label class="form-label" for="group-title-input">Group Title <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="group-title-input"
                                        placeholder="Enter group title">
                                </div>

                                <div class="col-lg-6 mb-3 ">
                                    <!-- <div class="mb-3"> -->
                                    <label class="form-label" for="group-title-input">Group Title <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="group-title-input"
                                        placeholder="Enter group title">
                                </div>

                                <div class="col-lg-6 mb-3 ">
                                    <label class="form-label" for="group-description-input">Description</label>
                                    <input type="text" class="form-control" id="group-description-input"
                                        placeholder="Enter group's description">
                                </div>

                                <div class="col-lg-6 mb-3 ">
                                    <label class="form-label" for="remarks-input">Remarks</label>
                                    <input type="text" class="form-control" id="remarks-input"
                                        placeholder="Enter group's remarks">
                                </div>

                                <div class="col-lg-6 mb-3 ">
                                    <div class="mb-lg-0">
                                        <label for="choices-status-input" class="form-label">Status <span
                                                class="text-danger">*</span></label>
                                        <select class="form-select" data-choices data-choices-search-false
                                            id="choices-status-input">
                                            <option value="Active" selected>Active</option>
                                            <option value="Inactive">Inactive</option>
                                        </select>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->



                </div>
                <!-- end col -->

                <div class="col-lg-7">
                    <div class="text-end mb-4">
                        <!-- <button type="submit" class="btn btn-secondary w-sm">Draft</button> -->
                        <button type="submit" class="btn btn-success w-sm">Save</button>
                        <button type="reset" onclick="history.back()" class="btn btn-danger w-sm">Back</button>
                    </div>


                </div>
            </div>
            <!-- end row -->

        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->



    <!-- Add Project Pop-up Start -->

    <div class="modal fade" id="showModal-project" tabindex="-1" aria-labelledby="add_project" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-light p-3">
                    <!-- <h5 class="modal-title" id="exampleModalLabel">&nbsp;</h5> -->
                    <h5 class="modal-title" id="add_project">Add Project</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                        id="close-modal"></button>
                </div>
                <form class="tablelist-form" autocomplete="off">
                    <div class="modal-body">
                        <input type="hidden" id="id-field" />

                        <div class="mb-3" id="modal-id">
                            <label for="projectId" class="form-label">ID</label>
                            <input type="text" id="projectId" class="form-control" placeholder="ID" readonly />
                        </div>

                        <!-- <div class="mb-3">
                            <label for="color-title-field" class="form-label">Color Title</label>
                            <input type="text" id="color-title-field" class="form-control"
                                placeholder="Enter color title" required />
                        </div> -->

                        <div class="mb-3 ">
                            <!-- <div class="mb-3"> -->
                            <label class="form-label" for="project-title-input">Project Title <span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="project-title-input"
                                placeholder="Enter project title">
                        </div>

                        <div class="mb-3 ">
                            <!-- <div class="mb-3"> -->
                            <label class="form-label" for="project-thumbnail-img">Logo</label>
                            <input class="form-control" id="project-thumbnail-img" type="file"
                                accept="image/png, image/gif, image/jpeg">
                        </div>


                        <div class="mb-3 ">
                            <div class="mb-lg-0">
                                <label for="projectDescriptionTextarea" class="form-label">Project's Description</label>
                                <textarea class="form-control" id="projectDescriptionTextarea" rows="4"></textarea>
                            </div>
                        </div>



                        <div class="mb-3 ">
                            <div class="mb-lg-0">
                                <label for="mobileInput" class="form-label">Mobile <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="mobileInput"
                                    placeholder="Enter project's mobile">
                                <!-- <label for="datepicker-deadline-input" class="form-label">Deadline</label>
                                        <input type="text" class="form-control" id="datepicker-deadline-input"
                                            placeholder="Enter due date" data-provider="flatpickr"> -->
                            </div>
                        </div>

                        <div class="mb-3 ">
                            <div class="mb-lg-0">
                                <label for="emailInput" class="form-label">Email <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="emailInput"
                                    placeholder="Enter project's email">
                                <!-- <label for="datepicker-deadline-input" class="form-label">Deadline</label>
                                        <input type="text" class="form-control" id="datepicker-deadline-input"
                                            placeholder="Enter due date" data-provider="flatpickr"> -->
                            </div>
                        </div>

                        <div class="mb-3 ">
                            <div class="mb-lg-0">
                                <label for="addressTextarea" class="form-label">Address <span
                                        class="text-danger">*</span></label>
                                <textarea class="form-control" id="addressTextarea" rows="1"></textarea>
                            </div>
                        </div>


                        <div class="mb-3 ">
                            <div class="mb-lg-0">
                                <label for="choices-subdistrict-input" class="form-label">Subdistrict <span
                                        class="text-danger">*</span></label>
                                <select class="form-select" data-choices data-choices-search-false
                                    id="choices-subdistrict-input">
                                    <option value="Please Select Subdistrict" selected>Please Select
                                        Subdistrict
                                    </option>
                                    <option value="Mymensingh">Mymensingh</option>
                                    <option value="Dhaka">Dhaka</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-3 ">
                            <div class="mb-lg-0">
                                <label for="choices-district-input" class="form-label">District <span
                                        class="text-danger">*</span></label>
                                <select class="form-select" data-choices data-choices-search-false
                                    id="choices-district-input">
                                    <option value="Please Select District" selected>Please Select District
                                    </option>
                                    <option value="Mymensingh">Mymensingh</option>
                                    <option value="Dhaka">Dhaka</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-3 ">
                            <div class="mb-lg-0">
                                <label for="choices-division-input" class="form-label">Division <span
                                        class="text-danger">*</span></label>
                                <select class="form-select" data-choices data-choices-search-false
                                    id="choices-division-input">
                                    <option value="Please Select Division" selected>Please Select Division
                                    </option>
                                    <option value="Mymensingh">Mymensingh</option>
                                    <option value="Dhaka">Dhaka</option>
                                </select>
                            </div>
                        </div>


                        <div class="mb-3">
                            <div class="mb-lg-0">
                                <label for="choices-privecy-input" class="form-label">Privecy <span
                                        class="text-danger">*</span></label>
                                <select class="form-select" data-choices data-choices-search-false
                                    id="choices-privecy-input">
                                    <option value="Private" selected>Private</option>
                                    <option value="Public">Public</option>
                                    <!-- <option value="Team">Team</option> -->
                                </select>
                            </div>
                        </div>


                        <div class="mb-3">
                            <div class="mb-lg-0">
                                <label for="choices-status-input" class="form-label">Status <span
                                        class="text-danger">*</span></label>
                                <select class="form-select" data-choices data-choices-search-false
                                    id="choices-status-input">
                                    <option value="Active" selected>Active</option>
                                    <option value="Inactive">Inactive</option>
                                </select>
                            </div>
                        </div>



                    </div>
                    <div class="modal-footer">
                        <div class="hstack gap-2 justify-content-end">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success" id="add-btn">Add Project</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Add Project Pop-up End  -->






    <!-- Add Color Pop-up Start -->

    <div class="modal fade" id="showModal-color" tabindex="-1" aria-labelledby="add_color" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-light p-3">
                    <!-- <h5 class="modal-title" id="exampleModalLabel">&nbsp;</h5> -->
                    <h5 class="modal-title" id="add_color">Add Color</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                        id="close-modal"></button>
                </div>
                <form class="tablelist-form" autocomplete="off">
                    <div class="modal-body">
                        <input type="hidden" id="id-field" />

                        <div class="mb-3" id="modal-id">
                            <label for="orderId" class="form-label">ID</label>
                            <input type="text" id="orderId" class="form-control" placeholder="ID" readonly />
                        </div>

                        <!-- <div class="mb-3">
                            <label for="color-title-field" class="form-label">Color Title</label>
                            <input type="text" id="color-title-field" class="form-control"
                                placeholder="Enter color title" required />
                        </div> -->

                        <div class="mb-3 ">
                            <label class="form-label" for="color-title-input">Color Title <span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="color-title-input"
                                placeholder="Enter color title" required>
                        </div>

                        <div class="mb-3 ">
                            <label class="form-label" for="color-description-input">Description</label>
                            <input type="text" class="form-control" id="color-description-input"
                                placeholder="Enter color's description">
                        </div>

                        <div class="mb-3 ">
                            <label class="form-label" for="remarks-input">Remarks</label>
                            <input type="text" class="form-control" id="remarks-input"
                                placeholder="Enter color's remarks">
                        </div>

                        <div class="mb-3 ">
                            <div class="mb-lg-0">
                                <label for="choices-status-input" class="form-label">Status <span
                                        class="text-danger">*</span></label>
                                <select class="form-select" data-choices data-choices-search-false
                                    id="choices-status-input">
                                    <option value="Active" selected>Active</option>
                                    <option value="Inactive">Inactive</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="hstack gap-2 justify-content-end">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success" id="add-btn">Add Color</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Add Color Pop-up End  -->




    @include('frontend.ims.layouts.footer')

</div>
<!-- end main content-->

@endsection