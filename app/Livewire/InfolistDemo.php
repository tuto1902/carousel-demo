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
use Tuto1902\InfolistCarousel\Infolists\Components\Carousel;
use Tuto1902\InfolistCarousel\Infolists\Components\Carousel\CarouselOrientation;

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
                'slides' => [
                    'Slide 1',
                    'Slide 2',
                    'Slide 3'
                ]
            ])
            ->schema([
                Carousel::make('slides')
                    ->hiddenLabel()
                    ->slideView('components.infolists.carousel.slide')
                    ->loop()
                    ->orientation(CarouselOrientation::Vertical)
                    ->autoplay()
                    ->delay(2000)
            ]);
    }
}
