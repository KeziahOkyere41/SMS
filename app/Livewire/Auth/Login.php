<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[layout('components.layouts.auth')]

class Login extends Component
{
    public function render()
    {
        return view('livewire.auth.login');
    }
}
