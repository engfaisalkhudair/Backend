<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Dress;
use App\Exports\sersxport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Validator;
// use PDF;

class DressController extends Controller
{
   ##########################################################

    // ----- Begin function  Check from Authorization---------
    public function __construct(){
        $this->middleware('auth');
    }
    // ----- End function  Check from Authorization-----------

    ##########################################################

    // ----- Begin function Index ----------------------------
    public function index()
    {
        $dress = Dress::orderby('created_at' , 'DESC')->paginate(10);
        $users = User::withTrashed()->orderby('created_at' , 'DESC')->paginate(10);
                /*
        __For Details Count Reservation :

        --[count All Reservation]   ##Done
        --[count Only Reservation]  ##Done
        --[count Only Done Reservation]     ##Done
        --[count All in The page trash]     ##Done

        ////////////////////////////////////////
        __For Details Count Reservation in day And Week And Month And Year And Price :

        --[count All Reservation in This Today And Price]
        --[count All Reservation in This Week  And Price]
        --[count All Reservation in This Month  And Price]
        --[count All Reservation in This Year  And Price]
        ////////////////////////////////////////
        __For Filtering to Reservation :

        --[Take All Reservation in This Today]
        --[Take All Reservation in This Week]
        --[Take All Reservation in This Month]
        --[Take All Reservation in This Year]
        ////////////////////////////////////////

        */

        // --[count All Reservation]
        $AllReservation = DB::select("SELECT count(id) as count FROM dresses where deleted_at is null");
        foreach($AllReservation as $item){
            $countAllReservation = $item->count;
        }

        // --[count Only Reservation]
        $OnlyReservation1 = DB::select("SELECT count(id) as count FROM dresses where dress_status = 0 and deleted_at is null");
        foreach($OnlyReservation1 as $item){
            $countOnlyReservation1 = $item->count;
        }
        $OnlyReservation2 = DB::select("SELECT count(id)  as count  FROM dresses where dress_status is null and deleted_at is null");
        foreach($OnlyReservation2 as $item){
            $countOnlyReservation2 = $item->count;
        }
        $countOnlyReservation = ($countOnlyReservation1 + $countOnlyReservation2);

        // --[count Only Done Reservation]
        $OnlyDoneReservation = DB::select("SELECT count(id)  as count  FROM dresses where dress_status = 1 and deleted_at is null");
        foreach($OnlyDoneReservation as $item){
            $countOnlyDoneReservation = $item->count;
        }
        // --[count All in The page trash]
        $OnlyTrashReservation = DB::select("SELECT count(id)  as count  FROM dresses where deleted_at is not null");
        foreach($OnlyTrashReservation as $item){
            $countOnlyTrashReservation = $item->count;
        }

        ////////////////////////////////////////

        // --[count All Reservation in This Today And Price]
        $dateToday = date('Y-m-d');
        // Get Count
        $getCountTodayEng = DB::select('SELECT count(id) as count FROM dresses WHERE created_at like "'.$dateToday.'%"');
        foreach($getCountTodayEng as $itemGetCountTodayEng){
            $countTodayEng = $itemGetCountTodayEng->count;
        }

        $TodayEng = DB::select('SELECT * FROM dresses WHERE created_at like "'.$dateToday.'%"');
        $TodayForTotalEn = 0;
        $sumReToday = 0;
        foreach($TodayEng as $itemTodayEng){
            $sumRe = ($itemTodayEng->paid_amount + $itemTodayEng->Remaining_amount);
            $TodayForTotalEn += $sumRe;
        }

        ###For Week
         $getCountWeekEng = DB::select('SELECT count(id) as count FROM dresses WHERE week(created_at)=week(now())');
        foreach($getCountWeekEng as $itemGetCountWeekEng){
            $countWeekEng = $itemGetCountWeekEng->count;
        }

        $WeekEng = DB::select('SELECT * FROM dresses WHERE week(created_at)=week(now())');
        $WeekForTotalEn = 0;
        $sumReWeek = 0;
        foreach($WeekEng as $itemWeekEng){
            $sumReWeek = ($itemWeekEng->paid_amount + $itemWeekEng->Remaining_amount);
            $WeekForTotalEn += $sumReWeek;
        }

        ##For Month
        //
        $dateMonth = date('m');

        // Get Count
        $getCountMonthEng = DB::select('SELECT count(id) as count FROM dresses WHERE MONTH(created_at) = '.$dateMonth.'');
        foreach($getCountMonthEng as $itemGetCountMonthEng){
             $countMonthEng = $itemGetCountMonthEng->count;
        }


        $MonthEng = DB::select('SELECT *  FROM dresses WHERE MONTH(created_at) = '.$dateMonth.'');
        $MonthForTotalEn = 0;
        $sumReMonth = 0;
        foreach($MonthEng as $itemMonthEng){
            $sumReMonth = ($itemMonthEng->paid_amount + $itemMonthEng->Remaining_amount);
            $MonthForTotalEn += $sumReMonth;
        }

        ##For Year
        $dateYear = date('Y');
        // Get Count
        $getCountYearEng = DB::select('SELECT count(id) as count FROM dresses WHERE YEAR(created_at) = '.$dateYear.'');
        foreach($getCountYearEng as $itemGetCountYearEng){
                $countYearEng = $itemGetCountYearEng->count;
        }

        $YearEng = DB::select('SELECT *  FROM dresses WHERE YEAR(created_at) = '.$dateYear.'');
        $YearForTotalEn = 0;
        $sumReYear = 0;
        foreach($YearEng as $itemYearEng){
            $sumReYear = ($itemYearEng->paid_amount + $itemYearEng->Remaining_amount);
            $YearForTotalEn += $sumReYear;
        }

        // return dd($dateYear);
        ////////////////////////////////////////
        $salesPercentage = 0;
        $sales = ($countOnlyDoneReservation / $countAllReservation);
        $totalSales = $sales * 100;
        $conv = strval($totalSales);
        if(strpos($conv , '.')){
            $newTotalSales = substr($conv , 0 , strpos($conv , '.'));
        }else{
            $newTotalSales = $conv;
        }

        // dd($newTotalSales);

        return view('Center.index')
        ->with('YearEng' , $YearEng)
        ->with('MonthEng' , $MonthEng)
        ->with('WeekEng' , $WeekEng)
        ->with('TodayEng' , $TodayEng)
        ->with('totalSales' , $newTotalSales)
        ->with('countYearEng' , $countYearEng)
        ->with('YearForTotalEn' , $YearForTotalEn)
        ->with('dateMonth' , $dateMonth)
        ->with('countMonthEng' , $countMonthEng)
        ->with('MonthForTotalEn' , $MonthForTotalEn)
        ->with('countWeekEng' , $countWeekEng)
        ->with('WeekForTotalEn' , $WeekForTotalEn)
        ->with('countTodayEng' , $countTodayEng)
        ->with('TodayForTotalEn' , $TodayForTotalEn)
        ->with('countAllReservation' , $countAllReservation)
        ->with('countOnlyReservation' , $countOnlyReservation)
        ->with('countOnlyDoneReservation' , $countOnlyDoneReservation)
        ->with('countOnlyTrashReservation' , $countOnlyTrashReservation)
        ->with('dress' , $dress)
        ->with('users' , $users);
    }
    // ----- End function Index -------------------------------

    ##########################################################

    // ----- Begin function create ----------------------------
    public function create()
    {
        return view('Center.newDressRe');
    }
    // ----- End function create ------------------------------

    ##########################################################
    /*
    --[search by name Dress]
    --[search by code Dress]
    --[search by Date]
    --[search by name and Date]
     */
    // ----- Begin function searchDress ----------------------------
    public function searchDress(){
        return view('Center.searchDress');
    }
    // ----- Begin function searchDress ----------------------------

    // ----- Begin function searchAtName ----------------------------

    public function searchAtName(Request $request)
    {
        $input = $request->all();

        $validator = Validator::make($input,[
            'search_name' => 'required|max:255',
        ]);
        $search_name = $request->search_name;

        $filtersDress = Dress::where('dress_name' , 'like' , '%' . $search_name . '%')->paginate(8);

        if($filtersDress){
            // return redirect()->back()->with('filtersDress', $filtersDress);
            return view('Center.searchDress')->with('filtersDress', $filtersDress);
        }else{
            // return redirect()->back()->with('message', 'عذر , لا يوجد منتج بهذا الاسم ');
            return view('Center.searchDress')->with('message', 'عذر , لا يوجد منتج بهذا الاسم ');
        }
        // return redirect()->back()->with('message', 'عذر , لا يوجد منتج بهذا الاسم ');

        return view('Center.searchDress')->with('message', 'عذر , لا يوجد منتج بهذا الاسم ');


    }
    // ----- End function searchAtName ------------------------------
      // ----- Begin function searchAtNameClient ----------------------------

      public function searchAtNameClient(Request $request)
      {
          $input = $request->all();

          $validator = Validator::make($input,[
              'search_name_client' => 'required|max:255',
          ]);

          $search_name = $request->search_name_client;

          $filtersDress = Dress::where('client_name' , 'like' , '%' . $search_name . '%')->paginate(8);

          if($filtersDress){
              return view('Center.searchDress')->with('filtersDress', $filtersDress);
          }else{
              return view('Center.searchDress')->with('message', 'عذر , لا يوجد منتج بهذا الاسم ');
          }
          return view('Center.searchDress')->with('message', 'عذر , لا يوجد منتج بهذا الاسم ');

      }
      // ----- End function searchAtNameClient ------------------------------

    // ----- Begin function searchAtCode ----------------------------

    public function searchAtCode(Request $request)
    {
        $input = $request->all();

        $validator = Validator::make($input,[
            'search_code' => 'required|max:255',
        ]);
        $search_name = $request->search_code;

        $filtersDress = Dress::where('dress_code' , 'like' , '%' . $search_name . '%')->paginate(8);

        if($filtersDress){
            return view('Center.searchDress')->with('filtersDress', $filtersDress);
        }else{
            return view('Center.searchDress')->with('message', 'عذر , لا يوجد منتج بهذا الاسم ');
        }
        return view('Center.searchDress')->with('message', 'عذر , لا يوجد منتج بهذا الاسم ');


    }
    // ----- End function searchAtCode ------------------------------
        // ----- Begin function searchAtCode ----------------------------

    public function searchAtDate(Request $request)
    {
        $input = $request->all();

        $validator = Validator::make($input,[
            'search_date' => 'required|max:255',
        ]);
        $search_date = $request->search_date;

        $filtersDress = Dress::where('event_date' , 'like' , '%' . $search_date . '%')->paginate(8);

        if($filtersDress){
            return view('Center.searchDress')->with('filtersDress', $filtersDress);
        }else{
            return view('Center.searchDress')->with('message', 'عذر , لا يوجد منتج بهذا الاسم ');
        }
        return view('Center.searchDress')->with('message', 'عذر , لا يوجد منتج بهذا الاسم ');

    }
    // ----- End function searchAtCode ------------------------------

    ##########################################################

    // ----- Begin function store ----------------------------
    public function store(Request $request)
    {
        $input = $request->all();

        $validator = Validator::make($input,[
            'client_name' => 'required|max:255',
            'client_phone' => 'required',
            'paid_amount' => 'required',
            'Remaining_amount' => 'required',
            'dress_name' => 'required',
            'dress_code' => 'required',
            'dress_size' => 'required',
            // 'notes' => 'required',
            'event_date' => 'required',
        ]);
        $errors = $validator->errors();

        $dress = Dress::create([
            'user_id' => Auth::id(),
            'client_name' => $request->client_name,
            'client_phone' => $request->client_phone,
            'paid_amount' => $request->paid_amount,
            'Remaining_amount' => $request->Remaining_amount,
            'dress_name' => $request->dress_name,
            'dress_code' => $request->dress_code,
            'dress_size' => $request->dress_size,
            'notes' => $request->notes,
            'event_date' => $request->event_date,
            'dress_status' => 0
        ]);

        return redirect()->route('dress')->with('message', 'تم اضافة الحجز بنجاح ');

    }
    // ----- End function store ------------------------------
    ##########################################################

    // ----- Begin function store ----------------------------
    public function dressAllInfo()
    {
        $dress = Dress::orderby('created_at' , 'DESC')->paginate(10);
        return view('Center.allDrees')
        ->with('dress' , $dress);

    }
    // ----- End function store ------------------------------
    ##########################################################

    // ----- Begin function store ----------------------------
    public function dressonlyRe()
    {
        $dress = Dress::where("dress_status" , 0)->orWhere("dress_status" , null)->orderby('created_at' , 'DESC')->paginate(10);
        return view('Center.onlyRes')
        ->with('dress' , $dress);

    }
        ##########################################################

    // ----- Begin function dressonlyDone ----------------------------
    public function dressonlyDone()
    {
        $dress = Dress::where("dress_status" , 1)->orderby('created_at' , 'DESC')->paginate(10);
        return view('Center.onlyDone')
        ->with('dress' , $dress);

    }

    ##########################################################

    // ----- Begin function show ----------------------------

    public function show($id)
    {
        $dress = Dress::find($id);
        return view("Center.dressDetail")->with('dress' , $dress);
    }
    // ----- End function show ------------------------------

    ##########################################################

    // ----- Begin function edit ----------------------------

    public function edit($id)
    {
        $dress = Dress::find($id);
        if($dress == null){
            return redirect()->back();
        }
        return view("Center.dressEdit")->with('dress' , $dress);
    }
    // ----- End function edit ------------------------------

    ##########################################################

    // ----- Begin function update ----------------------------
    public function update(Request $request,$id)
    {
        $dress = Dress::withTrashed()->find($id);

        $input = $request->all();

        $validator = Validator::make($input,[
            'client_name' => 'required|max:255',
            'client_phone' => 'required',
            'paid_amount' => 'required',
            'Remaining_amount' => 'required',
            'dress_name' => 'required',
            'dress_code' => 'required',
            'dress_size' => 'required',
            // 'notes' => 'required',
            'event_date' => 'required',
            'em_name' => 'required',

        ]);

        $errors = $validator->errors();

        $dress->client_name = $request->client_name;
        $dress->client_phone = $request->client_phone;
        $dress->paid_amount = $request->paid_amount;
        $dress->Remaining_amount = $request->Remaining_amount;
        $dress->dress_name = $request->dress_name;
        $dress->dress_code = $request->dress_code;
        $dress->dress_size = $request->dress_size;
        $dress->notes = $request->notes;
        $dress->event_date = $request->event_date;
        $dress->save();


        return redirect()->back()->with('message', 'تم تعديل الحجز بنجاح ');

    }
    // ----- End function update ----------------------------

    ##########################################################

    // ----- Begin function destroy ----------------------------

    public function destroy(Request $request)
    {
        $id = $request->id;
        $dress = Dress::find($id);
        if($dress == null){
            return redirect()->back();
        }
        $dress->delete();
        return redirect()->back()->with('message', 'تم نقل الحجز الى سلة المهملات  ');
    }
    // ----- End function destroy ----------------------------

    ##########################################################

    // ----- Begin function hdelete ----------------------------

    public function hdelete(Request $request)
    {
        $id = $request->id;
        $dress =Dress::withTrashed()->where('id',$id)->first();

        if ($dress != null) {
            $dress->forceDelete();
            return redirect()->back()->with('message', ' تم حذف الحجز بنجاح  ');
        }
        return redirect()->back()->with('message', ' لم تم حذف الحجز بنجاح  ');
    }
    // ----- End function hdelete ----------------------------

    ##########################################################

    // ----- Begin function restore ----------------------------
    public function restore($id)
    {

        $dress = Dress::withTrashed()->find($id);
        $dress->restore();
        return redirect()->back()->with('message', 'تم استرجاع هذا الحجز بنجاح ');
    }
    // ----- End function restore ----------------------------

    ##########################################################

    // ----- Begin function dreesTrashed -----------------
    public function dreesTrashed()
    {

        $dress = Dress::onlyTrashed()->orderby('created_at' , 'DESC')->paginate(10);

        return view('Center.dreesTrashed')
        ->with('dress', $dress);
    }
    // ----- End function dreesTrashed -------------------

    ##########################################################

    // ----- Begin function DoneReservation -----------------
    public function DoneReservation(Request $request)
    {
        $input = $request->all();
        $id = $request->id;
        $dress = Dress::find($id);
        // dd($input);
        $message = "";
        if($request->dress_status == 1){
            $dress->dress_status = 0;
            $message = " تم الغاء انهاء هذا الحجز  ";

        }else{
            $dress->dress_status = 1;
            $message = "تم انهاء الحجز ";

        }
        $dress->save();
        // dd($dress);
        return redirect()->back()->with('message', $message );

    }
    // ----- End function DoneReservation -------------------

    ##########################################################

    // ----- Begin function adduser -----------------
    public function adduser(Request $request)
    {
        $input = $request->all();

        $validator = Validator::make($input,[
            'name' => 'required|max:255',
            'email' => 'required',
            'photo' => 'required',
            'em_name' => 'required',
            'password' => ['required', 'string', 'min:8'],
        ]);

        $errors = $validator->errors();
        if($request->has('photo')){
            $photo = $request->photo;
            $newPhoto = time().$photo->getClientOriginalName();
            $photo->move('uploads/users/' , $newPhoto);
            $userphoto = 'uploads/users/'.$newPhoto;
        }else{
            $userphoto = '';
        }


        $user =  User::create([
            'name' => $request->name,
            'email' => $request->email,
            'em_name' => $request->em_name,
            'photo' => $userphoto,
            'password' => Hash::make($request->password),
        ]);


        return redirect()->back()->with('message' , 'تم انشاء الحساب بنجاح');

    }
    // ----- End function adduser -------------------

    ##########################################################

    // ----- Begin function hdeleteUser -----------------
    public function hdeleteUser(Request $request)
    {
        $id = $request->id;
        $user =User::withTrashed()->where('id',$id)->first();

        if ($user != null) {
            $user->forceDelete();
            return redirect()->back()->with('message', ' تم حذف المستخدم بنجاح  ');
        }
        return redirect()->back()->with('message', ' لم تم حذف المستخدم بنجاح  ');
    }
    // ----- End function hdeleteUser -------------------

    ##########################################################

    // ----- Begin function statusUser -----------------
    public function statusUser(Request $request){
        $id = $request->id;
        $user = User::withTrashed()->find($id);

        if($user->deleted_at != null){
            $usered = User::withTrashed()->find($id);
            $usered->restore();
        }else{
            $user->delete();
        }

        return redirect()->back();
    }
    // ----- End function statusUser -------------------

    ##########################################################

    // ----- Begin function updateUser -----------------
    public function updateUser(Request $request){

        $input = $request->all();

        $validator = Validator::make($input,[
            'name' => 'required|max:255',
            'em_name' => 'required',
            'email' => 'required',
            // 'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $errors = $validator->errors();

        $id = $request->id;

        $user = User::withTrashed()->find($id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->em_name = $request->em_name;
        // $user->password = Hash::make($request->password);

        // Begin Check from change password ------
        if($request->has('password')){
            $user->password= bcrypt($request->password);
        }
        // End Check from change password ------

        if($request->has('photo') && !empty($request->photo)){
            $photo = $request->photo;
            $newPhoto = time().$photo->getClientOriginalName();
            $photo->move('uploads/users/' , $newPhoto);
            $user->photo = 'uploads/users/'.$newPhoto;
        }

        $user->save();

        return redirect()->back();
    }
    // ----- End function updateUser -------------------

    ##########################################################

    // ----- Begin function export -----------------
    public function export()
    {
        return Excel::download(new sersxport, 'users.xlsx');

    }
    // ----- End function export -------------------

    ##########################################################

    // ----- Begin function analytics -----------------
    public function analytics()
    {
                     /*
        __For Details Count Reservation :

        --[count All Reservation]   ##Done
        --[count Only Reservation]  ##Done
        --[count Only Done Reservation]     ##Done
        --[count All in The page trash]     ##Done

        ////////////////////////////////////////
        __For Details Count Reservation in day And Week And Month And Year And Price :

        --[count All Reservation in This Today And Price]
        --[count All Reservation in This Week  And Price]
        --[count All Reservation in This Month  And Price]
        --[count All Reservation in This Year  And Price]
        ////////////////////////////////////////
        __For Filtering to Reservation :

        --[Take All Reservation in This Today]
        --[Take All Reservation in This Week]
        --[Take All Reservation in This Month]
        --[Take All Reservation in This Year]
        ////////////////////////////////////////

        */

        // --[count All Reservation]
        $AllReservation = DB::select("SELECT count(id) as count FROM dresses where deleted_at is null");
        foreach($AllReservation as $item){
            $countAllReservation = $item->count;
        }

        // --[count Only Reservation]
        $OnlyReservation1 = DB::select("SELECT count(id) as count FROM dresses where dress_status = 0 and deleted_at is null");
        foreach($OnlyReservation1 as $item){
            $countOnlyReservation1 = $item->count;
        }
        $OnlyReservation2 = DB::select("SELECT count(id)  as count  FROM dresses where dress_status is null and deleted_at is null");
        foreach($OnlyReservation2 as $item){
            $countOnlyReservation2 = $item->count;
        }
        $countOnlyReservation = ($countOnlyReservation1 + $countOnlyReservation2);

        // --[count Only Done Reservation]
        $OnlyDoneReservation = DB::select("SELECT count(id)  as count  FROM dresses where dress_status = 1 and deleted_at is null");
        foreach($OnlyDoneReservation as $item){
            $countOnlyDoneReservation = $item->count;
        }
        // --[count All in The page trash]
        $OnlyTrashReservation = DB::select("SELECT count(id)  as count  FROM dresses where deleted_at is not null");
        foreach($OnlyTrashReservation as $item){
            $countOnlyTrashReservation = $item->count;
        }

        ////////////////////////////////////////

        // --[count All Reservation in This Today And Price]
        $dateToday = date('Y-m-d');
        // Get Count
        $getCountTodayEng = DB::select('SELECT count(id) as count FROM dresses WHERE created_at like "'.$dateToday.'%"');
        foreach($getCountTodayEng as $itemGetCountTodayEng){
            $countTodayEng = $itemGetCountTodayEng->count;
        }

        $TodayEng = DB::select('SELECT * FROM dresses WHERE created_at like "'.$dateToday.'%"');
        $TodayForTotalEn = 0;
        $sumReToday = 0;
        foreach($TodayEng as $itemTodayEng){
            $sumRe = ($itemTodayEng->paid_amount + $itemTodayEng->Remaining_amount);
            $TodayForTotalEn += $sumRe;
        }

        ###For Week
        //  $getCountWeekEng = DB::select('SELECT count(id) as count FROM dresses WHERE yearweek(created_at) = yearweek(curdate())');
         $getCountWeekEng = DB::select('SELECT count(id) as count FROM dresses WHERE week(created_at)=week(now())');
        foreach($getCountWeekEng as $itemGetCountWeekEng){
            $countWeekEng = $itemGetCountWeekEng->count;
        }

        // $WeekEng = DB::select('SELECT * FROM dresses WHERE yearweek(created_at) = yearweek(curdate())');
        $WeekEng = DB::select('SELECT * FROM dresses  WHERE week(created_at)=week(now())');

        $WeekForTotalEn = 0;
        $sumReWeek = 0;
        foreach($WeekEng as $itemWeekEng){
            $sumReWeek = ($itemWeekEng->paid_amount + $itemWeekEng->Remaining_amount);
            $WeekForTotalEn += $sumReWeek;
        }

        ##For Month
        //
        $dateMonth = date('m');

        // Get Count
        $getCountMonthEng = DB::select('SELECT count(id) as count FROM dresses WHERE MONTH(created_at) = '.$dateMonth.'');
        foreach($getCountMonthEng as $itemGetCountMonthEng){
             $countMonthEng = $itemGetCountMonthEng->count;
        }


        $MonthEng = DB::select('SELECT *  FROM dresses WHERE MONTH(created_at) = '.$dateMonth.'');
        $MonthForTotalEn = 0;
        $sumReMonth = 0;
        foreach($MonthEng as $itemMonthEng){
            $sumReMonth = ($itemMonthEng->paid_amount + $itemMonthEng->Remaining_amount);
            $MonthForTotalEn += $sumReMonth;
        }

        ##For Year
        $dateYear = date('Y');
        // Get Count
        $getCountYearEng = DB::select('SELECT count(id) as count FROM dresses WHERE YEAR(created_at) = '.$dateYear.'');
        foreach($getCountYearEng as $itemGetCountYearEng){
                $countYearEng = $itemGetCountYearEng->count;
        }

        $YearEng = DB::select('SELECT *  FROM dresses WHERE YEAR(created_at) = '.$dateYear.'');
        $YearForTotalEn = 0;
        $sumReYear = 0;
        foreach($YearEng as $itemYearEng){
            $sumReYear = ($itemYearEng->paid_amount + $itemYearEng->Remaining_amount);
            $YearForTotalEn += $sumReYear;
        }

        // return dd($dateYear);
        ////////////////////////////////////////
        $salesPercentage = 0;
        $sales = ($countOnlyDoneReservation / $countAllReservation);
        $totalSales = $sales * 100;
        $conv = strval($totalSales);
        if(strpos($conv , '.')){
            $newTotalSales = substr($conv , 0 , strpos($conv , '.'));
        }else{
            $newTotalSales = $conv;
        }

        // dd($newTotalSales);

        return view('Center.analytics')
        ->with('YearEng' , $YearEng)
        ->with('MonthEng' , $MonthEng)
        ->with('WeekEng' , $WeekEng)
        ->with('TodayEng' , $TodayEng)
        ->with('totalSales' , $newTotalSales)
        ->with('countYearEng' , $countYearEng)
        ->with('YearForTotalEn' , $YearForTotalEn)
        ->with('dateMonth' , $dateMonth)
        ->with('countMonthEng' , $countMonthEng)
        ->with('MonthForTotalEn' , $MonthForTotalEn)
        ->with('countWeekEng' , $countWeekEng)
        ->with('WeekForTotalEn' , $WeekForTotalEn)
        ->with('countTodayEng' , $countTodayEng)
        ->with('TodayForTotalEn' , $TodayForTotalEn)
        ->with('countAllReservation' , $countAllReservation)
        ->with('countOnlyReservation' , $countOnlyReservation)
        ->with('countOnlyDoneReservation' , $countOnlyDoneReservation)
        ->with('countOnlyTrashReservation' , $countOnlyTrashReservation);
        // ->with('dress' , $dress)
        // ->with('users' , $users);


        // return view("Center.analytics");
    }
    // ----- End function analytics -------------------

    ##########################################################

}

