<?php

namespace App\Filament\Resources\SiteSettings\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class SiteSettingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            TextInput::make('title')
                ->required(),

            Textarea::make('description')
                ->required(),

            FileUpload::make('hero_image')
                ->image()
                ->disk('public')
                ->directory('site-settings'),
        ]);
    }
}