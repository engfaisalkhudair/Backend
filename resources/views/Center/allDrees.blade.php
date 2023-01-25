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
                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item  py-2">
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
                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item here show py-2">
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

<div class="g-5 gx-xxl-8" style="margin-bottom:80px">
    <!--begin::Tables Widget 10-->
    <div class="card">
        @if ($message = Session::get('message'))
        <div class="alert alert-primary" id="mydata">
            {{ $message }}
            {{-- <button type="button" id="btnclose" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
        </div>
        <!-- Modal -->
        @endif
        <!--begin::Header-->
        <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column" style="padding-bottom: 15px">
                <span class="card-label fw-bold fs-3 mb-1">  جميع الحجوزات  الخاصة بك  </span>
            </h3>
            <div class="card-toolbar">
                <!--begin::Menu-->
                <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                    <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                    <span class="svg-icon svg-icon-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor"></rect>
                                <rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3"></rect>
                                <rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3"></rect>
                                <rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3"></rect>
                            </g>
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </button>
                <!--begin::Menu 2-->
                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">

                    <!--begin::Menu separator-->
                    <div class="separator mb-3 opacity-75"></div>
                    <!--end::Menu separator-->

                </div>
                <!--end::Menu 2-->
                <!--end::Menu-->
            </div>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body pt-3">
            <!--begin::Table container-->
            <div class="table-responsive">
                <!--begin::Table-->
                <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                    <!--begin::Table head-->
                    <thead>
                        <tr style="border-bottom-color: var(--kt-gray-300);">
                            <th class="p-0 min-w-150px" style="padding-bottom:10px !important;"> اسم الفستان  </th>
                            <th class="p-0 min-w-150px" style="padding-bottom:10px !important;"> مقاس الفستان </th>
                            <th class="p-0 min-w-150px" style="padding-bottom:10px !important;">اسم الزبون  </th>
                            <th class="p-0 min-w-150px" style="padding-bottom:10px !important;"> رقم الزبون  </th>
                            <th class="p-0 min-w-150px" style="padding-bottom:10px !important;"> المبلغ المدفوع  </th>
                            <th class="p-0 min-w-150px" style="padding-bottom:10px !important;"> المبلغ المتبقي  </th>
                            <th class="p-0 min-w-200px"style="padding-bottom:10px !important;">  تاريخ المناسبة </th>
                            <th class="p-0 min-w-200px"style="padding-bottom:10px !important;"> ملاحظات </th>
                            <th class="p-0 min-w-150px"style="padding-bottom:10px !important;"> حالة الحجز  </th>
                            <th class="p-0 min-w-100px text-end"style="padding-bottom:10px !important;"> عمليات اخرى  </th>
                        </tr>
                    </thead>
                    <!--end::Table head-->
                    <!--begin::Table body-->
                    <tbody>
                        @foreach ($dress as $itemdress)
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Name-->
                                        <div class="d-flex justify-content-start flex-column">
                                            <a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">  {{ $itemdress->dress_name }}  </a>
                                            <a href="#" class="text-muted text-hover-primary fw-semibold text-muted d-block fs-7">
                                            <span class="text-dark">الكود  </span>:  {{ $itemdress->	dress_code }}  </a>
                                        </div>
                                        <!--end::Name-->
                                    </div>
                                </td>
                                <td class="text-muted fw-semibold text-end">   {{ $itemdress->dress_size }} </td>
                                <td class="text-muted fw-semibold text-end">    {{ $itemdress->client_name }}  </td>
                                <td class="text-muted fw-semibold text-end">   {{ $itemdress->client_phone }} </td>
                                <td class="text-muted fw-semibold text-end">    {{ $itemdress->paid_amount }} </td>
                                <td class="text-muted fw-semibold text-end">    {{ $itemdress->	Remaining_amount	 }} </td>
                                <td class="text-muted fw-semibold text-end">   {{ $itemdress->event_date }} </td>
                                <td class="text-muted fw-semibold text-end">  {{ $itemdress->	notes }} </td>
                                @php
                                    $dontRe = "badge-light-danger";
                                    $ReDone = "badge-light-success";
                                @endphp
                                <td class="text-end">
                                    <span class="badge <?= ($itemdress->dress_status == null || $itemdress->dress_status == 0) ? $dontRe : $ReDone; ?>"> <?=  ($itemdress->dress_status == null || $itemdress->dress_status == 0)? "محجوز" : "تم الانتهاء " ; ?> </span>
                                </td>

                                <td class="text-end" style="display: flex;">
                                    <form action="{{ route("dress.DoneReservation")}}" method="post">
                                        @csrf
                                        <input type="hidden" value="{{ $itemdress->id }}" name="id">
                                        <input type="hidden" value=" <?= ($itemdress->dress_status == null || $itemdress->dress_status == 0) ? 0 : 1; ?>" name="dress_status">

                                        <button style="margin-bottom:5px"
                                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                                            <span class="svg-icon svg-icon-3">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="currentColor"></path>
                                                    <path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </button>
                                    </form>

                                    <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                        <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#editRe{{ $itemdress->id }}" >
                                        <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                        <span class="svg-icon svg-icon-3">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor"></path>
                                                <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor"></path>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                        </button>


                                    </a>


                                    <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal{{  $itemdress->id }}"  class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                        <span class="svg-icon svg-icon-3">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor"></path>
                                                <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor"></path>
                                                <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor"></path>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </button>

                                </td>
                            </tr>

                            <div class="modal fade" id="editRe{{ $itemdress->id }}" tabindex="-1" aria-labelledby="editRe{{ $itemdress->id }}" aria-hidden="true">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h1 class="modal-title fs-5" id="exampleModalLabel">تحديث الحجز </h1>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('dress.update' , ["id" => $itemdress->id] ) }}" method="POST">
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
                                                            <input type="text" value="{{ $itemdress->client_name }}" name="client_name" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="ادخل اسم الزبون " required/>
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
                                                    <input type="tel" value="{{ $itemdress->client_phone }}" name="client_phone" class="form-control form-control-lg form-control-solid" placeholder=" ادخل رقم هاتف الزبون "  required />
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
                                                    <input type="number" value="{{ $itemdress->paid_amount }}" required name="paid_amount" class="form-control form-control-lg form-control-solid" placeholder=" المبلغ المدفوع من  الزبون  " />
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
                                                    <input type="number" value="{{ $itemdress->Remaining_amount }}"  required name="Remaining_amount" class="form-control form-control-lg form-control-solid" placeholder=" المبلغ المتبقي  من  الزبون  " />
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
                                                    <input type="text"  value="{{ $itemdress->dress_name }}" required name="dress_name" class="form-control form-control-lg form-control-solid" placeholder=" اسم الفستان " />
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
                                                    <input type="text"  value="{{ $itemdress->dress_code }}" required name="dress_code" class="form-control form-control-lg form-control-solid" placeholder=" ادخل كود الفستان  " />
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
                                                    <input type="text" value="{{ $itemdress->dress_size }}"  required name="dress_size" class="form-control form-control-lg form-control-solid" placeholder=" ادخل مقاس الفستان  " />
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
                                                    <input type="text" required value="{{ $itemdress->notes }}" name="notes" class="form-control form-control-lg form-control-solid" placeholder=" ادخل اي ملاحظات أن وجد ، يمكن ان تترك هذا الحقل فارغ " />
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
                                                    <input type="date" required value="{{ $itemdress->event_date }}"  name="event_date" class="form-control form-control-lg form-control-solid" placeholder=" ادخل تاريخ المناسبة " />
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Input group-->

                                        </div>
                                        <!--end::Card body-->
                                        <!--begin::Actions-->
                                        <div class="card-footer d-flex justify-content-end py-6 px-9">
                                            <button type="button" class="btn btn-light btn-active-light-primary me-2" data-bs-dismiss="modal">رجوع</button>
                                            {{-- <button type="button" class="btn btn-light btn-active-light-primary me-2">رجوع </button> --}}
                                            <button type="submit" class="btn btn-primary">  تعديل الحجز </button>
                                        </div>
                                        <!--end::Actions-->
                                    </form>
                                    </div>

                                  </div>
                            </div>
                              </div>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal{{  $itemdress->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content">
                                    <form action="{{ route("dress.destroy")}}" method="post">
                                        @csrf
                                        <input type="hidden" value="{{ $itemdress->id }}" name="id">
                                        {{-- <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1> --}}
                                        <div class="modal-body">
                                            هل انت متاكد من نقل هذا الحجز الى سهلة المهملات !
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">الغاء</button>
                                                                              <button type="submit" class="btn btn-primary"> نقل الى سلة المهملات </button>

                                        </div>
                                    </form>
                                </div>
                                </div>
                            </div>

                        @endforeach


                    </tbody>
                    <!--end::Table body-->
                </table>
                <!--end::Table-->
            </div>
            <!--end::Table container-->
        </div>
        <!--begin::Body-->
    </div>
    <!--end::Tables Widget 10-->
    {{ $dress->links() }}

</div>
@endsection
