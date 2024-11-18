<?php

namespace App\Livewire\Forms\Admin;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Form;

class AuthForm extends Form
{
    #[Validate()]
    public $username;
    public $password;
    public function rules()
    {
        return [
            "username" => "required|string|max:255",
            "password" => "required|string|max:255",
        ];
    }

    public function login()
    {
        $validated = $this->validate();
        if (Auth::attempt($validated)) {
            $user = Auth::user();
            return true;
        } else {
            return false;
        }
    }
}
