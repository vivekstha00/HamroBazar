<?php

namespace App\Filament\Resources\Companies\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class CompanyForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),
                TextInput::make('phone')
                    ->tel()
                    ->required(),
                TextInput::make('address')
                    ->required(),
                TextInput::make('logo')
                    ->required(),
                TextInput::make('playstore_link')
                    ->default(null),
                TextInput::make('ios_link')
                    ->default(null),
                TextInput::make('terms')
                    ->default(null),
                TextInput::make('how_to_order')
                    ->default(null),
            ]);
    }
}
