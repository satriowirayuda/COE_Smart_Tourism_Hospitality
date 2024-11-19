<?php

namespace App\Livewire\Admin;

use App\Livewire\Forms\Admin\AuthForm;
use Illuminate\Http\Middleware\TrustProxies;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Masmerise\Toaster\Toast;
use Masmerise\Toaster\Toaster;

class Login extends Component
{
    #[Layout("components.layouts.admin")]
    public AuthForm $form;
    public function render()
    {
        return view('admin.login')->title("Login");
    }
    public function login()
    {
        if ($this->form->login()) {
            $this->redirectRoute("admin.home", navigate: true);
            Toaster::success("Login Berhasil");
        } else {
            Toaster::error("Username / Password Salah");
        }
    }
}
