<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Hash;
use Session;
use DataTables;
use App\Models\User;
use App\Models\player;


use Illuminate\Support\Facades\Auth;

class CustomAuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }  

    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                        ->withSuccess('Signed in');
        }

        return redirect("login")->withSuccess('Login details are not valid');
    }

    public function registration()
    {
        return view('auth.registration');
    }

    public function customRegistration(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            
        ]);
    
        $data = $request->all();
        $check = $this->create($data);
        
        return redirect("dashboard")->withSuccess('You have signed-in');
    }

    public function create(array $data)
    {
    return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
    ]);
    }    
    
    public function dashboard()
    {
        if(Auth::check()){
            return view('dashboard');
        }

        return redirect("login")->withSuccess('You are not allowed to access');
    }
    
    public function signOut() {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }

    public function store(Request $request)
    {
        // echo "<pre>";
        // print_r($request->all());
        //insert query
        $player = new Player;
        $player->fname = $request['fname'];
        $player->lname = $request['lname'];
        $player->email = $request['email'];
        $player->phone = $request['number'];
        $player->path = $request['path'];
        

            $fileName = time().'.'.$request->path->extension();
            $request->path->storeAs('/images', $fileName);
            $player->path = $fileName;


        $player->save();
        $player = Player::all();
        $data = compact('player');
        // $player->setContent(strval($data));
        return view('display')->with($data);
        //return redirect('display');
        //-------------------
    }
 public function Show(Request $request){

        if ($request->ajax()) {
            $player = Player::all();
            
            $data = compact('player');
            return Datatables::of($data);
        
        
        return view('display')->with('player',$data);

    }
}
}





    

