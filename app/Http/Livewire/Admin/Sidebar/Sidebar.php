<?php

namespace App\Http\Livewire\Admin\Sidebar;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Sidebar extends Component
{
    public $type;
    public $droits;
    public $type_droit;
    protected $listeners = ['type_droit'];

    public function type_droit($type)
    {
        $this->type = $type;
    }
    public function render()
    {
        if ($this->isNull($this->type)) {
            $session = session()->get("type");
            $droits = Auth::user()->role->droits;
            $this->droits = $droits->where('acces', 1)
                ->where('type_droit_id', $session);
        } else {
            $droits = Auth::user()->role->droits;
            $this->droits = $droits->where('acces', 1)
                ->where('type_droit_id', $this->type);
        }
        return view('livewire.admin.sidebar.sidebar');
    }

    private function isNull($type)
    {
    }
}
