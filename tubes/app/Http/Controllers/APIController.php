<?php 
namespace App\Http\Controllers;

use App\Models\transaksi_berlangsung;
use App\Models\regis1;
use App\Models\registrasi;
use App\Models\Menu;
use Illuminate\Http\Request;

class APIController extends Controller{
	public function login(Request $req){
		$akun = registrasi::where('username', $req -> username)->first();
        if(!empty($akun))
        {
            if($akun ->password === $req ->password)
                {
                    return response()->json(['message' => 'Berhasil']);
                }
            else
                {
                    return response()->json(['message' => 'Username atau Password salah']);
                }

        }
        else
        {
            return response()->json(['message' => 'Akun belum terdaftar']);
        }
	}

	public function getPesanan(){
		$date=date('Y-m-d');
		$data = transaksi_berlangsung::where('date_reservasi', '>', $date)->get();	
		if ($data){
			return response()->json($data);
		}else{
			return response()->json();
		}
	}

	public function getRiwayat(){
		$date=date('Y-m-d');
		$data = transaksi_berlangsung::where('date_reservasi', '<=', $date)->get();
		if ($data){
			return response()->json($data);
		}else{
			return response()->json();
		}
	}

	public function getDetail($id){
		$resto = regis1::find($id);
		if ($resto){
			return response()->json($resto);
		}else{
			return response()->json();
		}
	}

	public function getResto(){
		$data = regis1::all();
		if ($data){
			return response()->json($data);
		}else{
			return response()->json();
		}
	}

	public function getMenu($id){
		$data = Menu::where('resto_id', $id)->get();
		if ($data){
			return response()->json($data);
		}else{
			return response()->json();
		}
	}	

	public function getAkun($usr){
		$data = registrasi::where('username', $usr)->get();
		if ($data){
			return response()->json($data);
		}else{
			return response()->json();
		}
	}
}
