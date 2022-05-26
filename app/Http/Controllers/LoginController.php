<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Session;

class LoginController extends Controller
{
    // Tampilan Login
    public function index(){
        return view('login',[
            "title" => "Login"
        ]);
    }

    // Tampilan Register
    public function create(){
        return view('register',[
            "title" => "Register"
        ]);
    }

    // Simpan Data User
    public function store(Request $request){
        $validatedData=$request->validate([
            'name' => 'required|min:5',
            'email' => 'required',
            'password' => 'required|min:5'
        ]);
        $validatedData['password']=bcrypt($validatedData["password"]);
        User::create($validatedData); //untuk menyimpan data
        $request->session()->flash('success','Data Anda berhasil disimpan');
        return redirect("/login"); // untuk diarahkan kemana
    }

    // Tampilan Edit
    public function edit($id){
    		return view("useredit",[
    		'title' => 'Edit User',
            'item' => User::find($id)
    	]);
    }
        
    // Simpan Hasil Edit
    public function update(Request $request, $id){
        $validatedData=$request->validate([
            'name' => 'required|min:5',
            'email' => 'required',
            'password' => 'required|min:5'
        ]);
        $validatedData['password']=bcrypt($validatedData["password"]);

        // Menyimpan update
    	$user = User::find($id);
    	$user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
    	$user->save();
    	
        $request->session()->flash('updatesuccess','Data Anda berhasil disimpan');
    	return redirect("/dashboarduser"); // untuk diarahkan kemana
    }

    // Hapus Data User
    public function destroy(Request $request, $id){
    	User::destroy($id);
    	// Session::flash('hapussuccess', 'Data berhasil dihapus!');
    	return redirect("/dashboarduser"); // untuk diarahkan kemana
    }        
    
    // Autentikasi
    public function validasiLogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('dashboarduser');
        }
 
        return back()->withErrors([
            'salah' => 'Login gagal!',
        ]);
    }

    // Logout
    public function logout(Request $request){
        // Auth::logout();
        // $request->session->invalidate();
        // $request->session->regenerateToken();
        // return redirect('/home');
        Session::flush();
        Auth::logout();
        return redirect('login');
    }
}
