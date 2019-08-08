<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\gold;
class goldController extends Controller
{
    public function index (){

        $gold = gold::all(); //lấy toàn bộ dữ liệu

        $sum = gold::sum('par'); // tính tổng dữ liệu trong cột par

        $sum2 = gold::sum('gross'); // tính tổng dữ liệu trong cột gross

        $sumpar= gold::all('par')->reverse()->take(6)->sum('par');

        $sumgross= gold::all('gross')->reverse()->take(6)->sum('gross');

        $sumpar1= gold::all('par')->reverse()->take(3)->sum('par');

        $sumgross1= gold::all('gross')->reverse()->take(3)->sum('gross');

        $sumpar2= gold::all('par')->reverse()->take(9)->sum('par');

        $sumgross2= gold::all('gross')->reverse()->take(9)->sum('gross');
        
        if($sum == $sum2){
            //hàm reverse giúp đảo ngược dữ liệu
            //take(3): giúp lấy ra 3 dữ liệu, mặc định lấy 3 dữ liệu đầu , kết hợp reverse giúp lấy 3 dữ liệu cuối
            //sum(par): tính tổng dữ liệu trong cột pars
            
            if($sumpar == $sumgross){
            return view('gold', ['gold' => $gold , 'sum' => $sum, 'sum2' => $sum2, 'sumgross' => $sumgross, 'sumpar' => $sumpar, 'sumgross1' => $sumgross1, 'sumpar1' => $sumpar1,
            $sumpar2, 'sumgross2' => $sumgross2, 'sumpar2' => $sumpar2]);
            }
        }
            else{
                return view('gold', ['gold' => $gold , 'sum' => $sum, 'sum2' => $sum2]);
            }
        
    }
   
}