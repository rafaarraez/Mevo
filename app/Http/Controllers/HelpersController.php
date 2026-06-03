<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Mail\ContactForm;
use App\Mail\ForgotPasswordEmail;
use App\Rules\ValidEmail;
use App\User;
use Redirect;
use URL;
use Softon\SweetAlert\Facades\SWAL;
use Illuminate\Support\Facades\Hash;
class HelpersController extends Controller
{
    public function sendContact() {

        $data = request()->all();
    
        Mail::to('atencionalcliente@conmevo.com')->queue(new ContactForm($data));
        
        return back();
    }

    public function forgotPassword()
    {
        return view('auth.forgot-password');
    }

    public function postForgotPassword(Request $request)
    {
        $request->validate(['email' => ['required', new ValidEmail]]);

        $user = User::where('email', $request->input('email'))->first();

        // Respuesta genérica: NO revelamos si el email existe (evita enumeración de cuentas).
        $message = 'Si el correo está registrado, te enviaremos un enlace de recuperación.';

        if (! is_null($user)) {
            // Token fuerte y con expiración (1 hora).
            $user->verification_token = Str::random(64);
            $user->verification_token_expires_at = now()->addHour();
            $user->save();

            $data = [
                'name' => $user->name,
                'url'  => URL::to('/forgotten-password-form?token=' . $user->verification_token),
            ];

            Mail::to($user->email)->queue(new ForgotPasswordEmail($data));
        }

        SWAL::message($message,'','success',['timer'=>5000]);
        return Redirect::back()->with('success', $message);
    }

    public function getForgotPassword()
    {
        $token = request()->get('token');

        $user = $this->userByValidToken($token);

        if (is_null($user)) {
            return Redirect::to('/login')->with('error', 'Este link ha expirado o no es válido.');
        }

        return view('auth.forgot-password-form')->with(compact('token'));
    }

    public function postChangesForgotedPassword(Request $request)
    {
        $request->validate(['password' => 'required|string|min:8']);

        $user = $this->userByValidToken($request->input('verification_token'));

        if (is_null($user)) {
            return Redirect::to('/login')->with('error', 'Este link ha expirado o no es válido.');
        }

        if ($request->input('password') === $request->input('password-confirmation')) {
            $user->password = Hash::make($request->input('password'));
            // Invalida el token tras usarlo (un solo uso).
            $user->verification_token = null;
            $user->verification_token_expires_at = null;
            $user->save();
        } else {
            SWAL::message('Las contraseñas no coinciden.','','error',['timer'=>5000]);
            return Redirect::back()->with('error', 'Las contraseñas no coinciden.');
        }
        SWAL::message('Tu contraseña ha sido cambiada exitosamente.','','success',['timer'=>5000]);
        return Redirect::to('/login')->with('success', 'Tu contraseña ha sido cambiada exitosamente.');
    }

    /**
     * Devuelve el usuario dueño de un token de recuperación VÁLIDO (no vacío y no expirado),
     * o null. Centraliza la verificación para getForgotPassword y postChangesForgotedPassword.
     */
    private function userByValidToken($token)
    {
        if (empty($token)) {
            return null;
        }

        return User::where('verification_token', $token)
                    ->where('verification_token_expires_at', '>', now())
                    ->first();
    }
}
