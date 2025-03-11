<?php

namespace App\Livewire;

use App\Models\Eloquent;
use Illuminate\Support\Str;
use Livewire\Component;

class GenerateLivewire extends Component
{
    public function render()
    {
        return view('livewire.generate-livewire');
    }
    public function generate()
    {

        for($i = 0; $i < 1000; $i++){
            Eloquent::create([
                'name' => 'Тестовый заголовок'. rand(1,1000),
                'price' => rand(1000,5000),
                'description' => Str::random(100),
                'created_at'=>now(),
                'updated_at'=>now(),
            ]);
        }

        return redirect()->route('crud-livewire');
    }
    public function destroy(Eloquent $eloquent)
    {

        Eloquent::truncate();

        return redirect()->route('crud-livewire');
    }
}