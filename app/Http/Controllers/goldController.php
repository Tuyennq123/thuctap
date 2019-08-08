<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\gold;
class goldController extends Controller
{
    public function index (){
        $gold = gold::all(); //lấy toàn bộ dữ liệu

        $sumpar = gold::sum('par'); // tính tổng dữ liệu trong cột par

        $sumgross = gold::sum('gross'); // tính tổng dữ liệu trong cột gross

        $sumpar3= gold::all('par')->reverse()->take(3)->sum('par'); 

        $sumgross3= gold::all('gross')->reverse()->take(3)->sum('gross');
        
        $sumpar6= gold::all('par')->reverse()->take(6)->sum('par');

        $sumgross6= gold::all('gross')->reverse()->take(6)->sum('gross');

        $sumpar9= gold::all('par')->reverse()->take(9)->sum('par');

        $sumgross9= gold::all('gross')->reverse()->take(9)->sum('gross');
        
        
        if($sumpar == $sumgross){

            //hàm reverse giúp đảo ngược dữ liệu

            //take(3): giúp lấy ra 3 dữ liệu, mặc định lấy 3 dữ liệu đầu , kết hợp reverse giúp lấy 3 dữ liệu cuối

            //sum(par): tính tổng dữ liệu trong cột pars

            // return view('gold', ['gold' => $gold , 'sum' => $sum, 'sum2' => $sum2]);


            if($sumpar9 == $sumgross9){

                    if($sumpar6 == $sumgross6){
                
                    return view('gold', ['gold' => $gold , 'sumpar' => $sumpar, 'sumgross' => $sumgross,'sumgross9' => $sumgross9,

                    'sumpar9' => $sumpar9, 'sumgross6' => $sumgross6, 'sumpar6' => $sumpar6,'sumgross3' => $sumgross3, 'sumpar3' => $sumpar3 ]);

            }


                    return view('gold', ['gold' => $gold , 'sumpar' => $sumpar, 'sumgross' => $sumgross,'sumgross9' => $sumgross9,

                     'sumpar9' => $sumpar9, 'sumgross6' => $sumgross6, 'sumpar6' => $sumpar6 ]);

            }


                    return view('gold', ['gold' => $gold , 'sumpar' => $sumpar, 'sumgross' => $sumgross,

                    'sumgross9' => $sumgross9, 'sumpar9' => $sumpar9]);


            
        }
        else{   
                    return view('gold', ['gold' => $gold , 'sumpar' => $sumpar, 'sumgross' => $sumgross]);
            }
   
    }

    
}