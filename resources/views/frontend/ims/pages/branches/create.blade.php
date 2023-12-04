@extends('frontend.ims.layouts.app')
@section('title','IMS | Create Branch')


@section('content')


<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Create Branch</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Branchs</a></li>
                                <li class="breadcrumb-item active">Create Branch</li>
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
                                <div class="col-lg-6 mb-3 ">
                                    <label class="form-label" for="branch-title-input">Branch Title</label>
                                    <input type="text" class="form-control" id="branch-title-input"
                                        placeholder="Enter branch title">
                                </div>
                                <div class="col-lg-6 mb-3 ">
                                    <label class="form-label" for="branch-code-input">Branch Code</label>
                                    <input type="text" class="form-control" id="branch-code-input"
                                        placeholder="Enter branch code">
                                </div>

                                <!-- <div class="col-lg-6 mb-3 ">
                                    <label class="form-label" for="branch-thumbnail-img">Logo</label>
                                    <input class="form-control" id="branch-thumbnail-img" type="file"
                                        accept="image/png, image/gif, image/jpeg">
                                </div> -->
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Branch Rules</label>
                                <div id="ckeditor-classic">
                                    <p>It will be as simple as occidental in fact, it will be Occidental. To an
                                        English
                                        person, it will seem like simplified English, as a skeptical Cambridge
                                        friend of
                                        mine told me what Occidental is. The European languages are members of the
                                        same
                                        family. Their separate existence is a myth. For science, music, sport, etc,
                                        Europe uses the same vocabulary.</p>
                                    <ul>
                                        <li>Product Design, Figma (Software), Prototype</li>
                                        <li>Four Dashboards : Ecommerce, Analytics, Project etc.</li>
                                        <li>Create calendar, chat and email app pages.</li>
                                        <li>Add authentication pages</li>
                                    </ul>
                                </div>
                            </div>



                            <div class="row">

                                <div class="col-lg-6 mb-3 ">
                                    <div class="mb-lg-0">
                                        <label for="mobileInput" class="form-label">Mobile</label>
                                        <input type="text" class="form-control" id="mobileInput"
                                            placeholder="Enter branch's mobile">
                                    </div>
                                </div>

                                <div class="col-lg-6 mb-3 ">
                                    <div class="mb-lg-0">
                                        <label for="emailInput" class="form-label">Email</label>
                                        <input type="text" class="form-control" id="emailInput"
                                            placeholder="Enter branch's email">
                                    </div>
                                </div>

                                <div class="col-lg-6 mb-3 ">
                                    <div class="mb-lg-0">
                                        <label for="addressTextarea" class="form-label">Address</label>
                                        <textarea class="form-control" id="addressTextarea" rows="1"></textarea>
                                    </div>
                                </div>


                                <div class="col-lg-6 mb-3 ">
                                    <div class="mb-lg-0">
                                        <label for="choices-subdistrict-input" class="form-label">Subdistrict</label>
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

                                <div class="col-lg-6 mb-3 ">
                                    <div class="mb-lg-0">
                                        <label for="choices-district-input" class="form-label">District</label>
                                        <select class="form-select" data-choices data-choices-search-false
                                            id="choices-district-input">
                                            <option value="Please Select District" selected>Please Select District
                                            </option>
                                            <option value="Mymensingh">Mymensingh</option>
                                            <option value="Dhaka">Dhaka</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-6 mb-3 ">
                                    <div class="mb-lg-0">
                                        <label for="choices-division-input" class="form-label">Division</label>
                                        <select class="form-select" data-choices data-choices-search-false
                                            id="choices-division-input">
                                            <option value="Please Select Division" selected>Please Select Division
                                            </option>
                                            <option value="Mymensingh">Mymensingh</option>
                                            <option value="Dhaka">Dhaka</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="col-lg-6 mb-3 ">
                                    <div class="mb-lg-0">
                                        <label for="choices-privecy-input" class="form-label">Privecy</label>
                                        <select class="form-select" data-choices data-choices-search-false
                                            id="choices-privecy-input">
                                            <option value="Private" selected>Private</option>
                                            <option value="Public">Public</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="col-lg-6 mb-3 ">
                                    <div class="mb-lg-0">
                                        <label for="choices-status-input" class="form-label">Status</label>
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

    @include('frontend.ims.layouts.footer')

</div>
<!-- end main content-->

@endsection