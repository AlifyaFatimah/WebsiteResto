<?php 
namespace App\Http\Controllers\API\Controller;

use App\Models\transaksi_berlangsung;
use Illuminate\Http\Request;

class PesananController extends Controller{
	public function getPesanan(){
		$data = transaksi_berlangsung::all();
		
		if ($data){
			return response()->json($data);
		}else{
			return response()->json();
		}
	}
}
