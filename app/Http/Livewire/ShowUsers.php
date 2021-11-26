<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Log;

class ShowUsers extends Component
{
    public function delete(User $user) {

        $user->delete();
    }

    public function edit() {

        $this->emit('test');
        // Log::debug($user);
    }

    public function render()
    {
        $allUsers = User::all();
        return view('livewire.show-users', compact('allUsers'));
    }
}
