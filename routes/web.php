<?php

use App\Models\User;

use App\Models\Dress;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('/');

Route::get('/dashboard', function () {
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

})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

// ### -- Begin:: Request  For Dress -- #############################

Route::get('/dress' , 'DressController@index')->name('dress');
Route::get('/dress/allInfo' , 'DressController@dressAllInfo')->name('dress.allInfo');
Route::get('/dress/onlyRe' , 'DressController@dressonlyRe')->name('dress.onlyRe');
Route::get('/dress/onlyDone' , 'DressController@dressonlyDone')->name('dress.onlyDone');
Route::get('/dress/create' , 'DressController@create')->name('dress.create');
Route::post('/dress/store' , 'DressController@store')->name('dress.store');
Route::post('/dress/edit/{id}' , 'DressController@edit')->name("dress.edit");
Route::post('/dress/update/{id}' , 'DressController@update')->name("dress.update");
Route::post('/dress/destroy' , 'DressController@destroy')->name('dress.destroy');
Route::get('/dress/trashed' , 'DressController@dreesTrashed')->name('dress.trashed');
Route::get('/dress/restore/{id}' , 'DressController@restore')->name('dress.restore');
Route::post('/dress/hdelete' , 'DressController@hdelete')->name('dress.hdelete');

Route::post('/dress/DoneReservation' , 'DressController@DoneReservation')->name('dress.DoneReservation');
Route::get('/dress/searchDress' , 'DressController@searchDress')->name('dress.searchDress');
// Search for drees
Route::post('/dress/searchAtName' , 'DressController@searchAtName')->name('dress.searchAtName');
Route::post('/dress/searchAtNameClient' , 'DressController@searchAtNameClient')->name('dress.searchAtNameClient');
Route::post('/dress/searchAtCode' , 'DressController@searchAtCode')->name('dress.searchAtCode');
Route::post('/dress/searchAtDate' , 'DressController@searchAtDate')->name('dress.searchAtDate');

// ### -- End:: Request  For Dress -- ###############################
Route::post('/dress/statusUser' , 'DressController@statusUser')->name('statusUser');
Route::post('/dress/updateUser' , 'DressController@updateUser')->name('updateUser');
Route::post('/dress/adduser' , 'DressController@adduser')->name('adduser');
Route::post('/dress/hdeleteUser' , 'DressController@hdeleteUser')->name('dress.hdeleteUser');

// ### -- Begin:: Request  For Export Data For PDF-- #############################
Route::get('/exportData' , 'DressController@exportData')->name('exportData');
Route::get('users/export/', 'DressController@export')->name('export');;
// ### -- End:: Request  For Export Data For PDF-- #############################

// ### -- Begin:: Request  For Page Analytics -- ###########################
Route::get('/analytics' , 'DressController@analytics')->name('analytics');
// ### -- End:: Request  For Page Analytics -- #############################
