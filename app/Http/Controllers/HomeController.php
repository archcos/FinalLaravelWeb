<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Validator;
use Auth;
use App\Models\User;
use App\Models\Admin;
use DB;

class HomeController extends Controller
{
    public function index()
    {
     return view('auth.login');
    }
    
    public function registration(){
        return view('registration');
    }

    function check(Request $request){
        //Validate requests
        $request->validate([
            'username'   => 'required',
            'password'  => 'required'
        ]);

        $userInfo = User::where('username','=', $request->username)->first();

        return redirect('admin/dashboard');
        }
    
        public function delete(Request $request, User $id)
        {
            $username = $request->input('username');

        DB::delete('delete from users where username=?',[$username]);
             return redirect('delsuccess');
        }
    
        public function update(Request $request, User $id)
        {
            $username = $request->input('username');
            $password = $request->input('password');
            $firstName = $request->input('firstName');
            $lastName = $request->input('lastName');
        DB::update('update users set username = ?,password=?,firstName=?,lastName=? where username = ?',[$username,$password,$firstName,$lastName,$username]);
    
        
            return redirect('upsuccess');
        }
    

  

    function dashboard(){
        $data = ['LoggedUserInfo'=>Admin::where('id','=', session('LoggedUser'))->first()];
        return view('admin.dashboard', $data);
    }

    public function regsuccess()
    {
        return view('regsuccess');
    }  

    public function store(Request $request){

    $request->validate([
        'username' => 'required|max:10',
        'password' => 'required|max:20',
        'firstName' => 'required|max:100',
        'lastName' => 'required|max:100',
    ]);

     //Insert data into database
     $users = new User;
     $users->username = $request->username;
     $users->password = $request->password;
     $users->firstName = $request->firstName;
     $users->lastName = $request->lastName;
     $save = $users->save();

     if($save){
        return redirect('regsuccess');
    }
     else{
         return back()->with('fail','Something went wrong, try again later');
     }
 }

}

?>