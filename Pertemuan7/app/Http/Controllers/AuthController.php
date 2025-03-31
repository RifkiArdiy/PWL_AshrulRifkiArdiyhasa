<?php 
 
namespace App\Http\Controllers; 
 
use App\Models\LevelModel;
use App\Models\UserModel;
use Hash;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Auth; 
 
class AuthController extends Controller 
{ 
    public function login() 
    { 
        if(Auth::check()){ // jika sudah login, maka redirect ke halaman home 
            return redirect('/'); 
        } 
        return view('auth.login'); 
    } 
 
    public function postlogin(Request $request) 
    { 
        if($request->ajax() || $request->wantsJson()){ 
            $credentials = $request->only('username', 'password'); 
 
            if (Auth::attempt($credentials)) { 
                return response()->json([ 
                    'status' => true, 
                    'message' => 'Login Berhasil', 
                    'redirect' => url('/') 
                ]); 
            } 
             
            return response()->json([ 
                'status' => false, 
                'message' => 'Login Gagal' 
            ]); 
        } 
 
        // return redirect('login'); 
        return back(); 
    } 
 
    public function logout(Request $request) 
    { 
        Auth::logout(); 
 
        $request->session()->invalidate(); 
        $request->session()->regenerateToken();     
        return redirect('login'); 
    }
    
    public function register()
    {
        $levels = LevelModel::all(); // Ambil daftar level dari database
        return view('auth.register', compact('levels'));
    }

    public function post_register(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:m_user,username|min:3',
            'nama' => 'required|min:3',
            'password' => 'required|min:6',
            'level_id' => 'required|exists:m_level,level_id',
        ]);

        UserModel::create([
            'username' => $request->username,
            'nama' => $request->nama,
            'password' => Hash::make($request->password),
            'level_id' => $request->level_id,
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Akun berhasil dibuat! Silakan login.',
            'redirect' => url('/login')
        ]);
        // return redirect('/login')->with('success', 'Registrasi berhasil! Silakan login.');
    }
} 