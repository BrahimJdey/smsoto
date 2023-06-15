<?php
namespace App\Http\Controllers\Auth;
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        $user = DB::table('playsms_tblUser')->where('username', $username)->first();

        if ($user && $this->checkPassword($password, $user->password)) {
            // L'authentification a réussi
            // Faites vos opérations d'authentification ici
            return redirect()->route('home');
        } else {
            // L'authentification a échoué
            return back()->withErrors(['message' => 'Identifiants invalides']);
        }
    }

    private function checkPassword($password, $hashedPassword)
    {
        // Effectuez ici la logique personnalisée pour comparer les mots de passe hachés avec PlaySMS

        // Par exemple, si PlaySMS utilise une fonction de hachage personnalisée appelée 'myCustomHash'
        // Vous pouvez utiliser la même fonction pour comparer les mots de passe

        $hashedInputPassword = MD5($password);

        return $hashedInputPassword === $hashedPassword;
    }


    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
