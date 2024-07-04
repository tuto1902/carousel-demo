<?php

namespace App\Livewire;

use App\Models\Carousel as CarouselModel;
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
use Tuto1902\InfolistCarousel\Infolists\Components\Carousel\CarouselSize;

class InfolistDemo extends Component implements HasInfolists, HasForms
{
    use InteractsWithInfolists, InteractsWithForms;

    public CarouselModel $carousel;

    #[Layout(AppLayout::class)]
    public function render()
    {
        return view('livewire.infolist-demo');
    }

    public function mount()
    {
        $this->carousel = CarouselModel::find(1);
    }

    public function carouselInfolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->record($this->carousel)
            ->schema([
                Carousel::make('slides')
                    ->hiddenLabel()
                    ->slideView('components.infolists.carousel.slide')
                    ->loop()
                    // ->orientation(CarouselOrientation::Vertical)
                    ->size(CarouselSize::Large)
                    // ->autoplay()
                    // ->delay(2000)
            ]);
    }
}
