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
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Container-->
    <div id="kt_content_container" class="container-xxl">
        <div class="col-xl-12">
            <!--begin::Timeline Widget 1-->
            <div class="card card-flush h-xl-100">
                <!--begin::Card header-->
                <div class="card-header pt-5">
                    <!--begin::Card title-->
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold text-dark"> تفاصيل عن الحجوزات الخاصة بك  </span>
                        <span class="text-gray-400 pt-2 fw-semibold fs-6">  </span>
                    </h3>
                    <!--end::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Tabs-->
                        <ul class="nav" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light fw-bold px-4 me-1 active" data-kt-timeline-widget-1="tab" data-bs-toggle="tab" href="#kt_timeline_widget_1_tab_day" aria-selected="true" role="tab">يوم</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light fw-bold px-4 me-1" data-kt-timeline-widget-1="tab" data-bs-toggle="tab" href="#kt_timeline_widget_1_tab_week" aria-selected="false" tabindex="-1" role="tab">أسبوع</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light fw-bold px-4 me-1" data-kt-timeline-widget-1="tab" data-bs-toggle="tab" href="#kt_timeline_widget_1_tab_month" aria-selected="false" tabindex="-1" role="tab">شهر</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light fw-bold px-4 me-1" data-kt-timeline-widget-1="tab" data-bs-toggle="tab" href="#kt_timeline_widget_1_tab_year" aria-selected="false" tabindex="-1" role="tab">سنة</a>
                            </li>
                        </ul>
                        <!--end::Tabs-->
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pb-0">
                    <!--begin::Tab content-->
                    <div class="tab-content">
                        <!--begin::Tab pane-->
                        <div class="tab-pane active blockui" id="kt_timeline_widget_1_tab_day" role="tabpanel" aria-labelledby="day-tab" data-kt-timeline-widget-1-blockui="true" style="">
                            <div class="table-responsive pb-10">
                                <div class="row" style="overflow: hidden;">
                                    <div class="col-md-4">
                                        <div class="border border-dashed border-gray-300 rounded px-7 py-3 mb-6">
                                            <!--begin::Info-->
                                            <div class="d-flex flex-stack mb-3">
                                                <!--begin::Wrapper-->
                                                <div class="me-3">
                                                    <!--begin::Icon-->
                                                    <img src="../assets/media/stock/ecommerce/210.gif" class="w-50px ms-n1 me-1" alt="">
                                                    <!--end::Icon-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="text-gray-800 text-hover-primary fw-bold"> عدد الحجوزات في اليوم </a>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Wrapper-->

                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Customer-->
                                            <div class="d-flex flex-stack">
                                                <!--begin::Name-->
                                                <span class="text-gray-400 fw-bold">
                                                <a href="#" class="text-gray-800 text-hover-primary fw-bold">{{ $countTodayEng }} </a></span>
                                                <!--end::Name-->

                                            </div>
                                            <!--end::Customer-->
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="border border-dashed border-gray-300 rounded px-7 py-3 mb-6">
                                            <!--begin::Info-->
                                            <div class="d-flex flex-stack mb-3">
                                                <!--begin::Wrapper-->
                                                <div class="me-3">
                                                    <!--begin::Icon-->
                                                    <img src="../assets/media/stock/ecommerce/210.gif" class="w-50px ms-n1 me-1" alt="">
                                                    <!--end::Icon-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="text-gray-800 text-hover-primary fw-bold"> سعر كل الحجوزات في اليوم </a>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Wrapper-->

                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Customer-->
                                            <div class="d-flex flex-stack">
                                                <!--begin::Name-->
                                                <span class="text-gray-400 fw-bold">
                                                <a href="../apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">{{ $TodayForTotalEn }} </a></span>
                                                <!--end::Name-->

                                            </div>
                                            <!--end::Customer-->
                                        </div>
                                    </div>
                                </div>
                                <!--begin::Card title-->
                                <h3 class="card-title align-items-start flex-column mt-3">
                                    <span class="card-label fw-bold text-dark"> كل الحجوزات :  </span>
                                    <span class="text-gray-400 pt-2 fw-semibold fs-6">  </span>
                                </h3>
                                <!--end::Card title-->
                                <div class="card-body pt-2" style="padding-right:0;">
                                    <!--begin::Table-->
                                    <div id="kt_table_widget_4_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="table-responsive"><table class="table align-middle table-row-dashed fs-6 gy-3 dataTable no-footer" id="kt_table_widget_4_table">
                                        <table>
                                            @if (count($TodayEng) > 0)

                                            <!--begin::Table head-->
                                            <thead>
                                                <!--begin::Table row-->
                                                <tr class=" text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                                    <th class="min-w-100px sorting_disabled" rowspan="1" colspan="1" style="width: 100px;text-align:right">#رقم</th>
                                                    <th class="p-0 min-w-150px min-w-100px sorting_disabled"  rowspan="1" colspan="1"  style="padding-bottom:10px !important;text-align:right"> اسم الفستان  </th>
                                                    <th class="p-0 min-w-150px min-w-100px sorting_disabled"  rowspan="1" colspan="1"  style="padding-bottom:10px !important;text-align:right"> كود الفستان  </th>
                                                    <th class="p-0 min-w-150px min-w-100px sorting_disabled"  rowspan="1" colspan="1"  style="padding-bottom:10px !important;text-align:right"> مقاس الفستان </th>
                                                    <th class="p-0 min-w-150px min-w-100px sorting_disabled"  rowspan="1" colspan="1"  style="padding-bottom:10px !important;text-align:right">اسم الزبون  </th>
                                                    <th class="p-0 min-w-150px min-w-100px sorting_disabled"  rowspan="1" colspan="1"  style="padding-bottom:10px !important;text-align:right"> رقم الزبون  </th>
                                                    <th class="p-0 min-w-150px min-w-100px sorting_disabled"  rowspan="1" colspan="1"  style="padding-bottom:10px !important;text-align:right"> المبلغ المدفوع  </th>
                                                    <th class="p-0 min-w-150px min-w-100px sorting_disabled"  rowspan="1" colspan="1"  style="padding-bottom:10px !important;text-align:right"> المبلغ المتبقي  </th>
                                                    <th class="p-0 min-w-200px min-w-100px sorting_disabled" rowspan="1" colspan="1"  style="padding-bottom:10px !important;text-align:right">  تاريخ المناسبة </th>
                                                    <th class="p-0 min-w-200px min-w-100px sorting_disabled" rowspan="1" colspan="1"  style="padding-bottom:10px !important;text-align:right"> ملاحظات </th>
                                                    <th class="p-0 min-w-150px min-w-100px sorting_disabled" rowspan="1" colspan="1"  style="padding-bottom:10px !important;text-align:right"> حالة الحجز  </th>
                                                    <th class="p-0 min-w-100px min-w-100px sorting_disabled text-end" rowspan="1" colspan="1"  style="padding-bottom:10px !important;text-align:right"> عمليات اخرى  </th>
                                                </tr>
                                                <!--end::Table row-->
                                            </thead>
                                            <!--end::Table head-->

                                            <!--begin::Table body-->
                                            <tbody class="fw-bold text-gray-600">
                                                @php
                                                $i=1;
                                                @endphp
                                            @foreach ($TodayEng as $itemdress)
                                                <tr class="border border-dashed border-gray-300 rounded px-7 py-3 mb-6" style="border-right:none;padding-bottom:15px;">
                                                    {{-- <td>
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Name-->
                                                            <div class="d-flex justify-content-start flex-column">
                                                                <a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">  {{ $itemdress->dress_name }}  </a>
                                                                <a href="#" class="text-muted text-hover-primary fw-semibold text-muted d-block fs-7">
                                                                <span class="text-dark">الكود  </span>:  {{ $itemdress->dress_code }}  </a>
                                                            </div>
                                                            <!--end::Name-->
                                                        </div>
                                                    </td> --}}
                                                    <td class="text-muted fw-semibold text-end odd" style="padding-right:20px;"> {{ $i++ }}</td>
                                                    <td class="text-muted fw-semibold text-end odd">   {{ $itemdress->dress_name }} </td>
                                                    <td class="text-muted fw-semibold text-end odd">   {{ $itemdress->dress_code }} </td>
                                                    <td class="text-muted fw-semibold text-end odd">   {{ $itemdress->dress_size }} </td>
                                                    <td class="text-muted fw-semibold text-end odd">    {{ $itemdress->client_name }}  </td>
                                                    <td class="text-muted fw-semibold text-end odd">   {{ $itemdress->client_phone }} </td>
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
                                            @endforeach
                                            </tbody>
                                            <!--end::Table body-->
                                            @else

                                            <div class="alert alter-danger hoverable bg-danger">لا يوجد اي حجوزات في هذا اليوم</div>
                                            @endif
                                        </table>

                                  </div>
                                  <div class="row"><div class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start"></div><div class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end"></div></div></div>
                                    <!--end::Table-->
                                </div>
                            <!--end::Timeline Widget 1-->
                            </div>
                        </div>
                        <!--End::Tab pane-->
                         <!--begin::Tab pane-->
                         <div class="tab-pane  blockui" id="kt_timeline_widget_1_tab_week" role="tabpanel" aria-labelledby="day-tab" data-kt-timeline-widget-1-blockui="true" style="">
                            <div class="table-responsive pb-10">
                                <div class="row" style="overflow: hidden;">
                                    <div class="col-md-4">
                                        <div class="border border-dashed border-gray-300 rounded px-7 py-3 mb-6">
                                            <!--begin::Info-->
                                            <div class="d-flex flex-stack mb-3">
                                                <!--begin::Wrapper-->
                                                <div class="me-3">
                                                    <!--begin::Icon-->
                                                    <img src="../assets/media/stock/ecommerce/210.gif" class="w-50px ms-n1 me-1" alt="">
                                                    <!--end::Icon-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="text-gray-800 text-hover-primary fw-bold"> عدد الحجوزات في الاسبوع </a>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Wrapper-->

                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Customer-->
                                            <div class="d-flex flex-stack">
                                                <!--begin::Name-->
                                                <span class="text-gray-400 fw-bold">
                                                <a href="#" class="text-gray-800 text-hover-primary fw-bold">{{ $countWeekEng }} </a></span>
                                                <!--end::Name-->

                                            </div>
                                            <!--end::Customer-->
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="border border-dashed border-gray-300 rounded px-7 py-3 mb-6">
                                            <!--begin::Info-->
                                            <div class="d-flex flex-stack mb-3">
                                                <!--begin::Wrapper-->
                                                <div class="me-3">
                                                    <!--begin::Icon-->
                                                    <img src="../assets/media/stock/ecommerce/210.gif" class="w-50px ms-n1 me-1" alt="">
                                                    <!--end::Icon-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="text-gray-800 text-hover-primary fw-bold"> سعر كل الحجوزات في الاسبوع </a>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Wrapper-->

                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Customer-->
                                            <div class="d-flex flex-stack">
                                                <!--begin::Name-->
                                                <span class="text-gray-400 fw-bold">
                                                <a href="../apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">{{ $WeekForTotalEn }} </a></span>
                                                <!--end::Name-->

                                            </div>
                                            <!--end::Customer-->
                                        </div>
                                    </div>
                                </div>
                                <!--begin::Card title-->
                                <h3 class="card-title align-items-start flex-column mt-3">
                                    <span class="card-label fw-bold text-dark"> كل الحجوزات :  </span>
                                    <span class="text-gray-400 pt-2 fw-semibold fs-6">  </span>
                                </h3>
                                <!--end::Card title-->
                                <div class="card-body pt-2" style="padding-right:0;">
                                    <!--begin::Table-->
                                    <div id="kt_table_widget_4_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="table-responsive"><table class="table align-middle table-row-dashed fs-6 gy-3 dataTable no-footer" id="kt_table_widget_4_table">
                                        <table>
                                            @if (count($WeekEng) > 0)

                                            <!--begin::Table head-->
                                            <thead>
                                                <!--begin::Table row-->
                                                <tr class=" text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                                    <th class="min-w-100px sorting_disabled" rowspan="1" colspan="1" style="width: 100px;text-align:right">#رقم</th>
                                                    <th class="p-0 min-w-150px min-w-100px sorting_disabled"  rowspan="1" colspan="1"  style="padding-bottom:10px !important;text-align:right"> اسم الفستان  </th>
                                                    <th class="p-0 min-w-150px min-w-100px sorting_disabled"  rowspan="1" colspan="1"  style="padding-bottom:10px !important;text-align:right"> كود الفستان  </th>
                                                    <th class="p-0 min-w-150px min-w-100px sorting_disabled"  rowspan="1" colspan="1"  style="padding-bottom:10px !important;text-align:right"> مقاس الفستان </th>
                                                    <th class="p-0 min-w-150px min-w-100px sorting_disabled"  rowspan="1" colspan="1"  style="padding-bottom:10px !important;text-align:right">اسم الزبون  </th>
                                                    <th class="p-0 min-w-150px min-w-100px sorting_disabled"  rowspan="1" colspan="1"  style="padding-bottom:10px !important;text-align:right"> رقم الزبون  </th>
                                                    <th class="p-0 min-w-150px min-w-100px sorting_disabled"  rowspan="1" colspan="1"  style="padding-bottom:10px !important;text-align:right"> المبلغ المدفوع  </th>
                                                    <th class="p-0 min-w-150px min-w-100px sorting_disabled"  rowspan="1" colspan="1"  style="padding-bottom:10px !important;text-align:right"> المبلغ المتبقي  </th>
                                                    <th class="p-0 min-w-200px min-w-100px sorting_disabled" rowspan="1" colspan="1"  style="padding-bottom:10px !important;text-align:right">  تاريخ المناسبة </th>
                                                    <th class="p-0 min-w-200px min-w-100px sorting_disabled" rowspan="1" colspan="1"  style="padding-bottom:10px !important;text-align:right"> ملاحظات </th>
                                                    <th class="p-0 min-w-150px min-w-100px sorting_disabled" rowspan="1" colspan="1"  style="padding-bottom:10px !important;text-align:right"> حالة الحجز  </th>
                                                    <th class="p-0 min-w-100px min-w-100px sorting_disabled text-end" rowspan="1" colspan="1"  style="padding-bottom:10px !important;text-align:right"> عمليات اخرى  </th>
                                                </tr>
                                                <!--end::Table row-->
                                            </thead>
                                            <!--end::Table head-->

                                            <!--begin::Table body-->
                                            <tbody class="fw-bold text-gray-600">
                                                @php
                                                $i=1;
                                                @endphp
                                            @foreach ($WeekEng as $itemdress)
                                                <tr class="border border-dashed border-gray-300 rounded px-7 py-3 mb-6" style="border-right:none;padding-bottom:15px;">
                                                    {{-- <td>
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Name-->
                                                            <div class="d-flex justify-content-start flex-column">
                                                                <a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">  {{ $itemdress->dress_name }}  </a>
                                                                <a href="#" class="text-muted text-hover-primary fw-semibold text-muted d-block fs-7">
                                                                <span class="text-dark">الكود  </span>:  {{ $itemdress->dress_code }}  </a>
                                                            </div>
                                                            <!--end::Name-->
                                                        </div>
                                                    </td> --}}
                                                    <td class="text-muted fw-semibold text-end odd" style="padding-right:20px;"> {{ $i++ }}</td>
                                                    <td class="text-muted fw-semibold text-end odd">   {{ $itemdress->dress_name }} </td>
                                                    <td class="text-muted fw-semibold text-end odd">   {{ $itemdress->dress_code }} </td>
                                                    <td class="text-muted fw-semibold text-end odd">   {{ $itemdress->dress_size }} </td>
                                                    <td class="text-muted fw-semibold text-end odd">    {{ $itemdress->client_name }}  </td>
                                                    <td class="text-muted fw-semibold text-end odd">   {{ $itemdress->client_phone }} </td>
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
                                            @endforeach
                                            </tbody>
                                            <!--end::Table body-->
                                            @else

                                            <div class="alert alter-danger hoverable bg-danger">لا يوجد اي حجوزات في هذا اليوم</div>
                                            @endif
                                        </table>

                                  </div>
                                  <div class="row"><div class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start"></div><div class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end"></div></div></div>
                                    <!--end::Table-->
                                </div>
                            <!--end::Timeline Widget 1-->
                            </div>
                        </div>
                        <!--End::Tab pane-->
                        <!--begin::Tab pane-->
                        <div class="tab-pane  blockui" id="kt_timeline_widget_1_tab_month" role="tabpanel" aria-labelledby="day-tab" data-kt-timeline-widget-1-blockui="true" style="">
                            <div class="table-responsive pb-10">
                                <div class="row" style="overflow: hidden;">
                                    <div class="col-md-4">
                                        <div class="border border-dashed border-gray-300 rounded px-7 py-3 mb-6">
                                            <!--begin::Info-->
                                            <div class="d-flex flex-stack mb-3">
                                                <!--begin::Wrapper-->
                                                <div class="me-3">
                                                    <!--begin::Icon-->
                                                    <img src="../assets/media/stock/ecommerce/210.gif" class="w-50px ms-n1 me-1" alt="">
                                                    <!--end::Icon-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="text-gray-800 text-hover-primary fw-bold"> عدد الحجوزات في الشهر </a>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Wrapper-->

                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Customer-->
                                            <div class="d-flex flex-stack">
                                                <!--begin::Name-->
                                                <span class="text-gray-400 fw-bold">
                                                <a href="#" class="text-gray-800 text-hover-primary fw-bold">{{ $countMonthEng }} </a></span>
                                                <!--end::Name-->

                                            </div>
                                            <!--end::Customer-->
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="border border-dashed border-gray-300 rounded px-7 py-3 mb-6">
                                            <!--begin::Info-->
                                            <div class="d-flex flex-stack mb-3">
                                                <!--begin::Wrapper-->
                                                <div class="me-3">
                                                    <!--begin::Icon-->
                                                    <img src="../assets/media/stock/ecommerce/210.gif" class="w-50px ms-n1 me-1" alt="">
                                                    <!--end::Icon-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="text-gray-800 text-hover-primary fw-bold"> سعر كل الحجوزات في الشهر </a>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Wrapper-->

                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Customer-->
                                            <div class="d-flex flex-stack">
                                                <!--begin::Name-->
                                                <span class="text-gray-400 fw-bold">
                                                <a href="../apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">{{ $MonthForTotalEn }} </a></span>
                                                <!--end::Name-->

                                            </div>
                                            <!--end::Customer-->
                                        </div>
                                    </div>
                                </div>
                                <!--begin::Card title-->
                                <h3 class="card-title align-items-start flex-column mt-3">
                                    <span class="card-label fw-bold text-dark"> كل الحجوزات :  </span>
                                    <span class="text-gray-400 pt-2 fw-semibold fs-6">  </span>
                                </h3>
                                <!--end::Card title-->
                                <div class="card-body pt-2" style="padding-right:0;">
                                    <!--begin::Table-->
                                    <div id="kt_table_widget_4_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="table-responsive"><table class="table align-middle table-row-dashed fs-6 gy-3 dataTable no-footer" id="kt_table_widget_4_table">
                                    <table>
                                            @if (count($MonthEng) > 0)

                                            <!--begin::Table head-->
                                            <thead>
                                                <!--begin::Table row-->
                                                <tr class=" text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                                    <th class="min-w-100px sorting_disabled" rowspan="1" colspan="1" style="width: 100px;text-align:right">#رقم</th>
                                                    <th class="p-0 min-w-150px min-w-100px sorting_disabled"  rowspan="1" colspan="1"  style="padding-bottom:10px !important;text-align:right"> اسم الفستان  </th>
                                                    <th class="p-0 min-w-150px min-w-100px sorting_disabled"  rowspan="1" colspan="1"  style="padding-bottom:10px !important;text-align:right"> كود الفستان  </th>
                                                    <th class="p-0 min-w-150px min-w-100px sorting_disabled"  rowspan="1" colspan="1"  style="padding-bottom:10px !important;text-align:right"> مقاس الفستان </th>
                                                    <th class="p-0 min-w-150px min-w-100px sorting_disabled"  rowspan="1" colspan="1"  style="padding-bottom:10px !important;text-align:right">اسم الزبون  </th>
                                                    <th class="p-0 min-w-150px min-w-100px sorting_disabled"  rowspan="1" colspan="1"  style="padding-bottom:10px !important;text-align:right"> رقم الزبون  </th>
                                                    <th class="p-0 min-w-150px min-w-100px sorting_disabled"  rowspan="1" colspan="1"  style="padding-bottom:10px !important;text-align:right"> المبلغ المدفوع  </th>
                                                    <th class="p-0 min-w-150px min-w-100px sorting_disabled"  rowspan="1" colspan="1"  style="padding-bottom:10px !important;text-align:right"> المبلغ المتبقي  </th>
                                                    <th class="p-0 min-w-200px min-w-100px sorting_disabled" rowspan="1" colspan="1"  style="padding-bottom:10px !important;text-align:right">  تاريخ المناسبة </th>
                                                    <th class="p-0 min-w-200px min-w-100px sorting_disabled" rowspan="1" colspan="1"  style="padding-bottom:10px !important;text-align:right"> ملاحظات </th>
                                                    <th class="p-0 min-w-150px min-w-100px sorting_disabled" rowspan="1" colspan="1"  style="padding-bottom:10px !important;text-align:right"> حالة الحجز  </th>
                                                    <th class="p-0 min-w-100px min-w-100px sorting_disabled text-end" rowspan="1" colspan="1"  style="padding-bottom:10px !important;text-align:right"> عمليات اخرى  </th>
                                                </tr>
                                                <!--end::Table row-->
                                            </thead>
                                            <!--end::Table head-->

                                            <!--begin::Table body-->
                                            <tbody class="fw-bold text-gray-600">
                                                @php
                                                $i=1;
                                                @endphp
                                            @foreach ($MonthEng as $itemdress)
                                                <tr class="border border-dashed border-gray-300 rounded px-7 py-3 mb-6" style="border-right:none;padding-bottom:15px;">
                                                    {{-- <td>
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Name-->
                                                            <div class="d-flex justify-content-start flex-column">
                                                                <a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">  {{ $itemdress->dress_name }}  </a>
                                                                <a href="#" class="text-muted text-hover-primary fw-semibold text-muted d-block fs-7">
                                                                <span class="text-dark">الكود  </span>:  {{ $itemdress->dress_code }}  </a>
                                                            </div>
                                                            <!--end::Name-->
                                                        </div>
                                                    </td> --}}
                                                    <td class="text-muted fw-semibold text-end odd" style="padding-right:20px;"> {{ $i++ }}</td>
                                                    <td class="text-muted fw-semibold text-end odd">   {{ $itemdress->dress_name }} </td>
                                                    <td class="text-muted fw-semibold text-end odd">   {{ $itemdress->dress_code }} </td>
                                                    <td class="text-muted fw-semibold text-end odd">   {{ $itemdress->dress_size }} </td>
                                                    <td class="text-muted fw-semibold text-end odd">    {{ $itemdress->client_name }}  </td>
                                                    <td class="text-muted fw-semibold text-end odd">   {{ $itemdress->client_phone }} </td>
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
                                            @endforeach
                                            </tbody>
                                            <!--end::Table body-->
                                            @else

                                            <div class="alert alter-danger hoverable bg-danger">لا يوجد اي حجوزات في هذا اليوم</div>
                                            @endif
                                        </table>

                                  </div>
                                  <div class="row"><div class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start"></div><div class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end"></div></div></div>
                                    <!--end::Table-->
                                </div>
                            <!--end::Timeline Widget 1-->
                            </div>
                        </div>
                        <!--End::Tab pane-->
                        <!--begin::Tab pane-->
                        <div class="tab-pane  blockui" id="kt_timeline_widget_1_tab_year" role="tabpanel" aria-labelledby="day-tab" data-kt-timeline-widget-1-blockui="true" style="">
                            <div class="table-responsive pb-10">
                                <div class="row" style="overflow: hidden;">
                                    <div class="col-md-4">
                                        <div class="border border-dashed border-gray-300 rounded px-7 py-3 mb-6">
                                            <!--begin::Info-->
                                            <div class="d-flex flex-stack mb-3">
                                                <!--begin::Wrapper-->
                                                <div class="me-3">
                                                    <!--begin::Icon-->
                                                    <img src="../assets/media/stock/ecommerce/210.gif" class="w-50px ms-n1 me-1" alt="">
                                                    <!--end::Icon-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="text-gray-800 text-hover-primary fw-bold"> عدد الحجوزات في السنة </a>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Wrapper-->

                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Customer-->
                                            <div class="d-flex flex-stack">
                                                <!--begin::Name-->
                                                <span class="text-gray-400 fw-bold">
                                                <a href="#" class="text-gray-800 text-hover-primary fw-bold">{{ $countYearEng }} </a></span>
                                                <!--end::Name-->

                                            </div>
                                            <!--end::Customer-->
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="border border-dashed border-gray-300 rounded px-7 py-3 mb-6">
                                            <!--begin::Info-->
                                            <div class="d-flex flex-stack mb-3">
                                                <!--begin::Wrapper-->
                                                <div class="me-3">
                                                    <!--begin::Icon-->
                                                    <img src="../assets/media/stock/ecommerce/210.gif" class="w-50px ms-n1 me-1" alt="">
                                                    <!--end::Icon-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="text-gray-800 text-hover-primary fw-bold"> سعر كل الحجوزات في السنة </a>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Wrapper-->

                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Customer-->
                                            <div class="d-flex flex-stack">
                                                <!--begin::Name-->
                                                <span class="text-gray-400 fw-bold">
                                                <a href="../apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">{{ $YearForTotalEn }} </a></span>
                                                <!--end::Name-->

                                            </div>
                                            <!--end::Customer-->
                                        </div>
                                    </div>
                                </div>
                                <!--begin::Card title-->
                                <h3 class="card-title align-items-start flex-column mt-3">
                                    <span class="card-label fw-bold text-dark"> كل الحجوزات :  </span>
                                    <span class="text-gray-400 pt-2 fw-semibold fs-6">  </span>
                                </h3>
                                <!--end::Card title-->
                                <div class="card-body pt-2" style="padding-right:0;">
                                    <!--begin::Table-->
                                    <div id="kt_table_widget_4_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="table-responsive"><table class="table align-middle table-row-dashed fs-6 gy-3 dataTable no-footer" id="kt_table_widget_4_table">
                                        <table>
                                        @if (count($YearEng) > 0)

                                        <!--begin::Table head-->
                                        <thead>
                                            <!--begin::Table row-->
                                            <tr class=" text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                                <th class="min-w-100px sorting_disabled" rowspan="1" colspan="1" style="width: 100px;text-align:right">#رقم</th>
                                                <th class="p-0 min-w-150px min-w-100px sorting_disabled"  rowspan="1" colspan="1"  style="padding-bottom:10px !important;text-align:right"> اسم الفستان  </th>
                                                <th class="p-0 min-w-150px min-w-100px sorting_disabled"  rowspan="1" colspan="1"  style="padding-bottom:10px !important;text-align:right"> كود الفستان  </th>
                                                <th class="p-0 min-w-150px min-w-100px sorting_disabled"  rowspan="1" colspan="1"  style="padding-bottom:10px !important;text-align:right"> مقاس الفستان </th>
                                                <th class="p-0 min-w-150px min-w-100px sorting_disabled"  rowspan="1" colspan="1"  style="padding-bottom:10px !important;text-align:right">اسم الزبون  </th>
                                                <th class="p-0 min-w-150px min-w-100px sorting_disabled"  rowspan="1" colspan="1"  style="padding-bottom:10px !important;text-align:right"> رقم الزبون  </th>
                                                <th class="p-0 min-w-150px min-w-100px sorting_disabled"  rowspan="1" colspan="1"  style="padding-bottom:10px !important;text-align:right"> المبلغ المدفوع  </th>
                                                <th class="p-0 min-w-150px min-w-100px sorting_disabled"  rowspan="1" colspan="1"  style="padding-bottom:10px !important;text-align:right"> المبلغ المتبقي  </th>
                                                <th class="p-0 min-w-200px min-w-100px sorting_disabled" rowspan="1" colspan="1"  style="padding-bottom:10px !important;text-align:right">  تاريخ المناسبة </th>
                                                <th class="p-0 min-w-200px min-w-100px sorting_disabled" rowspan="1" colspan="1"  style="padding-bottom:10px !important;text-align:right"> ملاحظات </th>
                                                <th class="p-0 min-w-150px min-w-100px sorting_disabled" rowspan="1" colspan="1"  style="padding-bottom:10px !important;text-align:right"> حالة الحجز  </th>
                                                <th class="p-0 min-w-100px min-w-100px sorting_disabled text-end" rowspan="1" colspan="1"  style="padding-bottom:10px !important;text-align:right"> عمليات اخرى  </th>
                                            </tr>
                                            <!--end::Table row-->
                                        </thead>
                                        <!--end::Table head-->

                                        <!--begin::Table body-->
                                        <tbody class="fw-bold text-gray-600">
                                            @php
                                            $i=1;
                                            @endphp
                                        @foreach ($YearEng as $itemdress)
                                            <tr class="border border-dashed border-gray-300 rounded px-7 py-3 mb-6" style="border-right:none;padding-bottom:15px;">
                                                {{-- <td>
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Name-->
                                                        <div class="d-flex justify-content-start flex-column">
                                                            <a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">  {{ $itemdress->dress_name }}  </a>
                                                            <a href="#" class="text-muted text-hover-primary fw-semibold text-muted d-block fs-7">
                                                            <span class="text-dark">الكود  </span>:  {{ $itemdress->dress_code }}  </a>
                                                        </div>
                                                        <!--end::Name-->
                                                    </div>
                                                </td> --}}
                                                <td class="text-muted fw-semibold text-end odd" style="padding-right:20px;"> {{ $i++ }}</td>
                                                <td class="text-muted fw-semibold text-end odd">   {{ $itemdress->dress_name }} </td>
                                                <td class="text-muted fw-semibold text-end odd">   {{ $itemdress->dress_code }} </td>
                                                <td class="text-muted fw-semibold text-end odd">   {{ $itemdress->dress_size }} </td>
                                                <td class="text-muted fw-semibold text-end odd">    {{ $itemdress->client_name }}  </td>
                                                <td class="text-muted fw-semibold text-end odd">   {{ $itemdress->client_phone }} </td>
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
                                        @endforeach
                                        </tbody>
                                        <!--end::Table body-->
                                        @else

                                        <div class="alert alter-danger hoverable bg-danger">لا يوجد اي حجوزات في هذا اليوم</div>
                                        @endif
                                    </table>

                                  </div>
                                  <div class="row"><div class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start"></div><div class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end"></div></div></div>
                                    <!--end::Table-->
                                </div>
                            <!--end::Timeline Widget 1-->
                            </div>
                        </div>
                        <!--End::Tab pane-->
                    <!--end::Container-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end::Content-->
@endsection
