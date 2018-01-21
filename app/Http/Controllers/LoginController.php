<?php 
namespace MyFirstLaravel\Http\Controllers;
Use DB;

class LoginController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Login Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	/*public function __construct()
	{
		$this->middleware('auth');
	}*/

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('adminLogin');
	}

	public function checkLogin(){
		$user =$_POST["usr_name"];
		$pass =$_POST["password"];

		$sql="SELECT * FROM users WHERE NAME='".$user."' AND user_hash=SHA1('".$pass."')";
		//return $sql;
        $locs = DB::select($sql);
         if(count($locs)){  
         	return view('adminSection');
         }
         else{
         	return 500;
         }

        
	}
	public function add_account(){
		return view('addAccountant');
	}

}
