<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dress</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style>body { font-family: DejaVu Sans, sans-serif; }</style>
</head>
<body>
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        {{-- <div class="breadcrumb-title pe-3">{{ $title }}</div> --}}
     <!--begin::Table-->
     <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
        <!--begin::Table head-->
        <thead>
            <tr style="border-bottom-color: var(--kt-gray-300);">
                <th class="p-0 min-w-150px"style="font-family: 'Amiri', serif; font-weight:bold; font-size:14px;">#ID </th>
                <th class="p-0 min-w-150px"style="font-family: 'Amiri', serif;font-weight:bold; font-size:14px;"> اسم الفستان  </th>
                <th class="p-0 min-w-150px"style="font-family: 'Amiri', serif;font-weight:bold; font-size:14px;">  كود الفستان   </th>
                <th class="p-0 min-w-150px" style="padding-bottom:10px !important;font-weight:bold; font-size:14px;"> مقاس الفستان </th>
                <th class="p-0 min-w-150px" style="padding-bottom:10px !important;font-weight:bold; font-size:14px;">اسم الزبون  </th>
                <th class="p-0 min-w-150px" style="padding-bottom:10px !important;font-weight:bold; font-size:14px;"> رقم الزبون  </th>
                <th class="p-0 min-w-150px" style="padding-bottom:10px !important;font-weight:bold; font-size:14px;"> المبلغ المدفوع  </th>
                <th class="p-0 min-w-150px" style="padding-bottom:10px !important;font-weight:bold; font-size:14px;"> المبلغ المتبقي  </th>
                <th class="p-0 min-w-200px"style="padding-bottom:10px !important;font-weight:bold; font-size:14px;">  تاريخ المناسبة </th>
                <th class="p-0 min-w-200px"style="padding-bottom:10px !important;font-weight:bold; font-size:14px;"> ملاحظات </th>
                <th class="p-0 min-w-150px"style="padding-bottom:10px !important;font-weight:bold; font-size:14px;"> حالة الحجز  </th>
            </tr>
        </thead>
        <!--end::Table head-->
        <!--begin::Table body-->
        <tbody>
            @php
                $i = 1;
            @endphp
            @foreach ($dress as $itemdress)
                <tr>
                    <td class="text-muted fw-semibold text-end"> {{ $i++ }} </td>
                    <td class="text-muted fw-semibold text-end">   {{ $itemdress->dress_name }} </td>
                    <td class="text-muted fw-semibold text-end">   {{ $itemdress->dress_code }} </td>
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

                </tr>

            @endforeach


        </tbody>
        <!--end::Table body-->
    </table>
    <!--end::Table-->
    </div>
</body>
</html>
