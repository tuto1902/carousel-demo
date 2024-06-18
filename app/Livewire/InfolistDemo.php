<?php

namespace App\Livewire;

use App\View\Components\AppLayout;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Infolists\Concerns\InteractsWithInfolists;
use Filament\Infolists\Contracts\HasInfolists;
use Filament\Infolists;
use Filament\Infolists\Infolist;
use Livewire\Attributes\Layout;
use Livewire\Component;

class InfolistDemo extends Component implements HasInfolists, HasForms
{
    use InteractsWithInfolists, InteractsWithForms;

    #[Layout(AppLayout::class)]
    public function render()
    {
        return view('livewire.infolist-demo');
    }

    public function carouselInfolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->state([
                'message' => 'Hello World'
            ])
            ->schema([
                Infolists\Components\TextEntry::make('message')
            ]);
    }
}
