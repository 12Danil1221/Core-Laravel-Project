<?php

namespace App\Livewire;

use App\Models\feedback;
use App\Models\Image;
use App\Models\User;
use Livewire\Component;

class FitnesLivewire extends Component
{
    public function render(feedback $feedback, User $user)
    {
        $feedback = feedback::all();
        $images = Image::simplePaginate(3);
        return view('livewire.fitnes-livewire', compact('feedback', 'images','user'));
    }
}