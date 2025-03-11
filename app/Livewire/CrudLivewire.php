<?php

namespace App\Livewire;

use App\Models\Eloquent;
use Illuminate\Http\Request;
use Livewire\Component;

class CrudLivewire extends Component
{
    public function render()
    {
        
        $eloquents = Eloquent::simplePaginate(50);
        return view('livewire.crud-livewire', compact('eloquents'));
    }
    public function create()
    {
        $eloquents = Eloquent::all();
        return view('livewire.crud-livewire-create', compact('eloquents'));
    }
    public function store(Request $request, Eloquent $eloquent)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'status' => 'required',
        ]);

        Eloquent::create([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'status' => $request->status,
        ]);

        return redirect()->route('crud-livewire');
    }
    public function edit(Eloquent $eloquent)
    {
        $statuses = ['Allowed'=>'Allowed','Prohibited'=>'Prohibited'];
        return view('livewire.crud-livewire-edit', compact('eloquent','statuses'));
    }
    public function update(Request $request, Eloquent $eloquent)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'status' => 'required',
        ]);

        $eloquent->update([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'status' => $request->status,
        ]);

        return redirect()->route('crud-livewire');
    }
    public function destroy(Request $request, Eloquent $eloquent)
    {
       $eloquent->delete();

        return redirect()->route('crud-livewire');
    }

}