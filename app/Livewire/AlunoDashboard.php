<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class AlunoDashboard extends Component
{
    public $progresso = 68;
    public $atividadesConcluidas = 12;
    public $pontos = 2450;
    public $streak = 5;

    public function iniciarTrilha()
    {
        $this->progresso += 2;

        $this->dispatchBrowserEvent('toast', [
            'message' => 'Você iniciou uma nova trilha!',
        ]);
    }

    public function render()
    {
        return view('livewire.aluno-dashboard');
    }
}
