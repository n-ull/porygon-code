<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DraftForm extends Component
{

    public $title, $description, $content;
    public $totalSteps = 3;
    public $currentStep = 1;

    public function mount()
    {
        $this->currentStep = 1;
    }

    public function render()
    {
        return view('livewire.draft-form');
    }

    public function increaseStep()
    {
        $this->validateData();
        $this->currentStep++;
        if ($this->currentStep > $this->totalSteps) {
            $this->currentStep = $this->totalSteps;
        }

        if ($this->currentStep == 2) {
            $this->emit('editorInitialized');
        }
    }

    public function decreaseStep()
    {
        $this->validateData();
        $this->currentStep--;
        if ($this->currentStep < 1) {
            $this->currentStep = 1;
        }
    }

    public function validateData()
    {
        if ($this->currentStep == 1) {
            $this->validate([
                'title' => 'required|min:3|max:255',
                'description' => 'required|min:3|max:255',
            ]);
        }

        if ($this->currentStep == 2) {
            $this->validate([
                'content' => 'required|min:3|max:255',
            ]);
        }
    }
}
