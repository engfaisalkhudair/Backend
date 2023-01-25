@extends('layouts.app')

@section("kt_aside")
<!--begin::Aside-->
<div id="kt_aside" class="aside pb-5 pt-5 pt-lg-0" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'80px', '300px': '100px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle">
    <!--begin::Brand-->
    <div class="aside-logo py-8" id="kt_aside_logo">
        <!--begin::Logo-->
        <a href="index.html" class="d-flex align-items-center">
            <img alt="Logo" src="{{ asset("publicPage/image/1.png") }}" class="h-85px logo" />
        </a>
        <!--end::Logo-->
    </div>
    <!--end::Brand-->
    <!--begin::Aside menu-->
    <div class="aside-menu flex-column-fluid" id="kt_aside_menu">
        <!--begin::Aside Menu-->
        <div class="hover-scroll-overlay-y my-2 my-lg-5 pe-lg-n1" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside, #kt_aside_menu" data-kt-scroll-offset="5px">
            <!--begin::Menu-->
            <div class="menu menu-column menu-title-gray-700 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-semibold" id="#kt_aside_menu" data-kt-menu="true">
                <!--begin:Menu item-->
                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item  py-2">
                    <a href="{{ route("dress") }}" >
                    <!--begin:Menu link-->
                    <span class="menu-link menu-center">

                        <span class="menu-icon me-0">
                            <i class="fonticon-house fs-1"></i>
                        </span>
                        <span class="menu-title">الرئيسية</span>

                    </span>
                    <!--end:Menu link-->
                    </a>
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item here show py-2">
                    <a href="{{ route("dress.create") }}">
                    <span class="menu-link menu-center" style="width:100% ">
                        <span class="menu-icon me-0">
                            <i class="fonticon-stats fs-1"></i>
                        </span>
                        <span class="menu-title">اضافة حجز </span>
                    </span>
                    </a>

                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->

                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item py-2">
                    <!--begin:Menu link-->
                    <a href="{{ route("dress.searchDress") }}" >
                        <span class="menu-link menu-center" style="width:100% ">
                            <span class="menu-icon me-0">
                                <i class="fonticon-layers fs-1"></i>
                            </span>
                            <span class="menu-title">بحث عن حجز </span>
                        </span>
                    </a>
                    <!--end:Menu link-->

                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item py-2">
                    <!--begin:Menu link-->
                    <a href="{{ route("dress") }}">

                    <span class="menu-link menu-center" style="width:100% ">
                        <span class="menu-icon me-0">
                            <i class="fonticon-app-store fs-1"></i>
                        </span>
                        <span class="menu-title">عرض حجوزات</span>
                    </span>
                    </a>
                    <!--end:Menu link-->
                    <!--begin:Menu sub-->
                    <div class="menu-sub menu-sub-dropdown menu-sub-indention px-2 py-4 w-250px">
                        <!--begin:Menu item-->
                        <div class="menu-item">
                            <!--begin:Menu content-->
                            <div class="menu-content">
                                <span class="menu-section fs-5 fw-bolder ps-1 py-1">اختار نوع العرض</span>
                            </div>
                            <!--end:Menu content-->
                        </div>
                        <!--end:Menu item-->

                        <!--begin:Menu item-->
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                            <a href="{{ route("dress.allInfo") }}">
                            <!--begin:Menu link-->
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <i class="bi bi-patch-check fs-3"></i>
                                </span>
                                <span class="menu-title">عرض جميع الحجوزات </span>
                            </span>
                            </a>
                            <!--end:Menu link-->

                        </div>
                        <!--end:Menu item-->
                        <!--begin:Menu item-->
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                            <a href="{{ route("dress.onlyRe") }}">
                            <!--begin:Menu link-->
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <i class="bi bi-patch-check fs-3"></i>
                                </span>
                                <span class="menu-title"> عرض المحجوز فقط  </span>
                            </span>
                            </a>
                            <!--end:Menu link-->

                        </div>
                        <!--end:Menu item-->
                        <!--begin:Menu item-->
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                            <a href="{{ route("dress.onlyDone") }}">
                            <!--begin:Menu link-->
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <i class="bi bi-patch-check fs-3"></i>
                                </span>
                                <span class="menu-title">  عرض ما تم الانتهاء منه فقط </span>
                            </span>
                            </a>
                            <!--end:Menu link-->

                        </div>
                        <!--end:Menu item-->

                    </div>
                    <!--end:Menu sub-->
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item   py-2">
                    <!--begin:Menu link-->
                    <a href="{{ route("dress.trashed") }}">

                    <span class="menu-link menu-center" style="width:100% ">
                        <span class="menu-icon me-0">
                            <i class="fa-solid fa-trash"></i>
                        </span>
                        <span class="menu-title"> سلة المهملات </span>
                    </span>
                    </a>
                    <!--end:Menu link-->

                    </div>
                    <!--end:Menu item-->
            </div>
            <!--end::Menu-->
        </div>
        <!--end::Aside Menu-->
    </div>
    <!--end::Aside menu-->
    <!--begin::Footer-->
    <div class="aside-footer flex-column-auto" id="kt_aside_footer">
        <!--begin::Menu-->
        <div class="d-flex justify-content-center">
            <button type="button" class="btn btm-sm btn-icon btn-custom btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-overflow="true" data-kt-menu-placement="top-start" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-dismiss="click" title="تنقل بسهولة ">
                <i class="fonticon-notification fs-1"></i>
            </button>
            <!--begin::Menu 2-->
            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                    <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">تنقل بسهولة</div>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu separator-->
                <div class="separator mb-3 opacity-75"></div>
                <!--end::Menu separator-->
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                    <a href="{{ route("dress.create") }}" class="menu-link px-3">اضافة حجز</a>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                    <a href="{{ route("dress.searchDress") }}" class="menu-link px-3">بحث عن حجز </a>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu item-->
                <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                    <!--begin::Menu item-->
                    <a href="#" class="menu-link px-3">
                        <span class="menu-title">عرض الحجوزات بواسطة</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <!--end::Menu item-->
                    <!--begin::Menu sub-->
                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="{{ route("dress.allInfo") }}" class="menu-link px-3">عرض جميع الحجوزات</a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="{{ route("dress.onlyRe") }}" class="menu-link px-3">   عرض  المحجوز فقط   </a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="{{ route("dress.onlyDone") }}" class="menu-link px-3">   عرض ما تم الانتهاء منه فقط  </a>
                        </div>
                        <!--end::Menu item-->
                    </div>
                    <!--end::Menu sub-->
                </div>
                <!--end::Menu item-->
                <!--begin::Menu item-->

                <!--end::Menu item-->
                <!--begin::Menu separator-->
                <div class="separator mt-3 opacity-75"></div>
                <!--end::Menu separator-->
                <!--begin::Menu item-->

                <!--end::Menu item-->
            </div>
            <!--end::Menu 2-->
        </div>
        <!--end::Menu-->
    </div>
    <!--end::Footer-->
</div>
<!--end::Aside-->
@endsection


@section('content')
	<!--begin::Basic info-->
    <div class="card mb-5 mb-xl-10" style="margin-right: 20px;margin-left: 20px;">
        <!--begin::Card header-->
        <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
            <!--begin::Card title-->
            <div class="card-title m-0">
                <h3 class="fw-bold m-0"> اضافة حجز جديد </h3>
            </div>
            <!--end::Card title-->
        </div>
        <!--begin::Card header-->
        <!--begin::Content-->
        <div id="kt_account_settings_profile_details" class="collapse show">
            <!--begin::Form-->
            {{-- <form id="kt_account_profile_details_form" class="form"> --}}
                <!--begin::Card body-->
                <div class="card-body border-top p-9">

                    <form action="{{ route('dress.store') }}" method="POST">
                        @csrf
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6"> اسم الزبون </label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8">
                                <!--begin::Row-->
                                <div class="row">
                                    <!--begin::Col-->
                                    <div class="col-lg-12 fv-row">
                                        <input type="text" name="client_name" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="ادخل اسم الزبون " required/>
                                    </div>
                                    <!--end::Col-->

                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6"> رقم الزبون </label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="tel" name="client_phone" class="form-control form-control-lg form-control-solid" placeholder=" ادخل رقم هاتف الزبون "  required />
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                <span class="required">المبلغ المدفوع </span>
                            </label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="number" required name="paid_amount" class="form-control form-control-lg form-control-solid" placeholder=" المبلغ المدفوع من  الزبون  " />
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                <span class="required">المبلغ المتبقي  </span>
                            </label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="number" required name="Remaining_amount" class="form-control form-control-lg form-control-solid" placeholder=" المبلغ المتبقي  من  الزبون  " />
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                <span class="required"> اسم الفستان  </span>
                            </label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="text" required name="dress_name" class="form-control form-control-lg form-control-solid" placeholder=" اسم الفستان " />
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->

                         <!--begin::Input group-->
                         <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                <span class="required"> كود الفستان </span>
                            </label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="text" required name="dress_code" class="form-control form-control-lg form-control-solid" placeholder=" ادخل كود الفستان  " />
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                <span class="required"> مقاس الفستان </span>
                            </label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="text" required name="dress_size" class="form-control form-control-lg form-control-solid" placeholder=" ادخل مقاس الفستان  " />
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                <span class="required"> ملاحظات  </span>
                            </label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="text" required name="notes" class="form-control form-control-lg form-control-solid" placeholder=" ادخل اي ملاحظات أن وجد ، يمكن ان تترك هذا الحقل فارغ " />
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                <span class="required"> تاريخ المناسبة  </span>
                            </label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="date" required name="event_date" class="form-control form-control-lg form-control-solid" placeholder=" ادخل تاريخ المناسبة " />
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->

                </div>
                <!--end::Card body-->
                <!--begin::Actions-->
                <div class="card-footer d-flex justify-content-end py-6 px-9">
                    <button type="reset" class="btn btn-light btn-active-light-primary me-2">رجوع </button>
                    <button type="submit" class="btn btn-primary"> حفظ الحجز </button>
                </div>
                <!--end::Actions-->
            </form>
            <!--end::Form-->
        </div>
        <!--end::Content-->

    </div>
    <!--end::Basic info-->
@endsection
