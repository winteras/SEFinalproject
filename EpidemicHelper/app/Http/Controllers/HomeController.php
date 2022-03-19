<?PHP
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //首頁
    public function indexPage()
    {
        /*
        $day = DB::table('day')->pluck('Day');
        $airplane = DB::table('airplane')->pluck('Airplane_name');
        
        return view('home',['days' => $day , 'airplanes' => $airplane]);
        */

        
        return view('index');
    }
}
?>

