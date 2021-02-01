<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactForm;
use App\Mail\ForgotPasswordEmail;
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

    public function postForgotPassword()
    {
        $inputs = request()->all();

        $user = User::where('email', $inputs['email'])->first();
        if (is_null($user)) {

            SWAL::message('No existe un usuario con esa direccion de email.','','error',['timer'=>5000]);
            return Redirect::back()->with('error', 'No existe un usuario con esa direccion de email.');
        }

        $user->verification_token = str_random(24);
        $user->save();

        $data = [
            'name' => $user->name,
            'url'  => URL::to('/forgotten-password-form' . '?token=' . $user->verification_token),
        ];

        SWAL::message('Se te ha enviado un correo de recuperación de contraseña.','','success',['timer'=>5000]);
        Mail::to($user->email)->queue(new ForgotPasswordEmail($data));
        return Redirect::back()->with('success', 'Se ha enviado un correo de recuperación de contraseña.');
    }

    public function getForgotPassword()
    {
        $token = request()->get('token');

        $user = User::where('verification_token', $token)->first();

        if (is_null($user)) {
            return Redirect::to('/login')->with('error', 'Este link ha expirado.');
        }

        return view('auth.forgot-password-form')->with(compact('token'));
    }

    public function postChangesForgotedPassword()
    {
        $inputs = request()->all();

        $user = User::where('verification_token', $inputs['verification_token'])->first();

        if (is_null($user)) {
            return Redirect::to('/login')->with('error', 'Este link ha expirado.');
        }

        if ($inputs['password'] === $inputs['password-confirmation']) {
            $user->password = Hash::make($inputs['password']);
            $user->verification_token = '';
            $user->save();
        } else {
            SWAL::message('Las contraseñas no coinciden.','','error',['timer'=>5000]);
            return Redirect::back()->with('error', 'Las contraseñas no coinciden.');
        }
        SWAL::message('Tu contraseña ha sido cambiado exitosamente.','','success',['timer'=>5000]);
        return Redirect::to('/login')->with('success', 'Tu contraseña ha sido cambiado exitosamente.');
    }
}
