<?php

namespace App\Http\Controllers;

session_start();

use Illuminate\Http\Request;
use App\Models\Menu;

class c_menu extends Controller
{
    //
	public function index(){
		return view('Signin');
	}
	
	public function SignUp(){
		return view('SignUp');
	}
	
	public function Registrasi2(){
		return view('Registrasi2');
	}
	
	public function simpan(Request $req){
		$this->validate($req, [
			'gambar' => 'mimes:jpg,jpeg,png',
			'nama' => 'required',
			'deskripsi' => 'required',
			'harga' => 'required|max:9',
		]);
		$gbr = $req->gambar;
		$namafile = $gbr->getClientOriginalName();
		$dMenu = new Menu;
		$dMenu->resto_id = $_SESSION['idResto'];
		$dMenu->nama = $req->nama;
		$dMenu->deskripsi = $req->deskripsi;
		$dMenu->harga = $req->harga;
		$dMenu->gambar = $namafile;
		$gbr->move(public_path().'/Image_Menu',$namafile);
		$dMenu->save();
		
		return redirect('/showMenu');//Registrasi2-2(page regis2 untuk show menu yg ditambah)
	}
	
	public function showMenu(){
		$menu = Menu::where('resto_id', $_SESSION['idResto'])->get();
		return view('Registrasi2-2')->with('menus',$menu);
	}
	
	public function halamanHapus(){
		$menu = Menu::where('resto_id', $_SESSION['idResto'])->get();
		return view('Registrasi2-3',['menus' => $menu]);
	}
	
	public function halamanEdit($id){
		$menu = Menu::find($id);
		return view('edit', compact(['menu']));
	}
	
	public function editMenu($id, Request $req){
		$menu = Menu::find($id);
		$menu->nama = $req->nama;
		$menu->deskripsi = $req->deskripsi;
		$menu->harga = $req->harga;
		$menu->save();
		return redirect('/showMenu');
	}
	
	public function hapus(){
		if(isset($_POST['submit'])){
			if(!empty($_POST['menuid'])){
				foreach($_POST['menuid'] as $key=>$value){
					$delMenu=Menu::find($_POST['menuid'][$key]);
					$delMenu->delete();
				}
			}
		}
		
		return redirect('/showMenu');
	}
	
	public function dsMenu(){
		$id = $_SESSION['idResto'];
		$menu = Menu::where('resto_id', $id)->get();
		return view('DasboardMenu', ['menus'=>$menu]);
	}
	
	public function tambahMenu(Request $req){
		$this->validate($req, [
			'nama' => 'required',
			'deskripsi' => 'required',
			'harga' => 'required|max:9',
		]);
		$gbr = $req->gambar;
		$namafile = $gbr->getClientOriginalName();
		$dMenu = new Menu;
		$dMenu->resto_id = $_SESSION['idResto'];
		$dMenu->nama = $req->nama;
		$dMenu->deskripsi = $req->deskripsi;
		$dMenu->harga = $req->harga;
		$dMenu->gambar = $namafile;
		$gbr->move(public_path().'/Image_Menu',$namafile);
		$dMenu->save();
		return redirect('/d');
	}
	
	public function hlmDelete(){
		$id = $_SESSION['idResto'];
		$menu = Menu::where('resto_id', $id)->get();
		return view('DasboardMenu-hapus')->with('menus',$menu);
	}
	
	public function hapusMenu(){
		if(isset($_POST['submit'])){
			if(!empty($_POST['menuid'])){
				foreach($_POST['menuid'] as $key=>$value){
					$delMenu=Menu::find($_POST['menuid'][$key]);
					$delMenu->delete();
				}
			}
		}
		
		return redirect('/d');
	}
	
	public function formUpdate($id){
		$menu = Menu::find($id);
		return view('formUpdate', compact(['menu']));
	}
	
	public function updateMenu($id, Request $req){
		$menu = Menu::find($id);
		$menu->nama = $req->nama;
		$menu->deskripsi = $req->deskripsi;
		$menu->harga = $req->harga;
		$menu->save();
		return redirect('/d');
	}
}
