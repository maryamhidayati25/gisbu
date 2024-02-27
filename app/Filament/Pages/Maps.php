<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Illuminate\Database\Eloquent\Collection;
use App\Models\Company; // Replace with your actual model namespace

class Maps extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.maps';

    public function getViewData(): array
    {
        $markersData = $this->getMarkersData();

        return [
            'markersData' => $markersData,
        ];
    }

    private function getMarkersData(): array
    {
        $companies = $this->getCompanies();

        $markers = [];
        foreach ($companies as $company) {
            $markers[] = [
                'coordinates' => [$company->latitude, $company->longitude],
                'popupContent' => '<b>'.$company->name.'</b><br />'.$company->address,
            ];
        }

        return $markers;
    }

    private function getCompanies(): Collection
    {
        return Company::select('name', 'address', 'latitude', 'longitude')
            ->get();
    }
}