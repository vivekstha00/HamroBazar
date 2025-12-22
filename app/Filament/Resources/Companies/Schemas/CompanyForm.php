<?php

namespace App\Filament\Resources\Companies\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;

use Filament\Schemas\Schema;

class CompanyForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make("General")
                    ->columnSpanFull()
                    ->columns(2)
                    ->schema([
                        TextInput::make('name')
                            ->required(),
                        TextInput::make('email')
                            ->email()
                            ->required(),
                        TextInput::make('phone')
                            ->required(),
                        TextInput::make('address')
                            ->required(),
                        FileUpload::make('logo')
                            ->required(),
                    ]),
                Section::make("Mobile App Links")
                    ->columnSpanFull()
                    ->schema([
                        TextInput::make('playstore_link')
                            ->default(null),
                        TextInput::make('ios_link')
                            ->default(null),

                    ]),
                RichEditor::make('policy')
                    ->default(null)
                    ->extraInputAttributes(['style' => 'height: 300px; overflow-y: auto ;'])
                    ->columnSpanFull(),
                RichEditor::make('terms')
                    ->default(null)
                    ->extraInputAttributes(['style' => 'height: 300px; overflow-y: auto ;'])
                    ->columnSpanFull(),
                RichEditor::make('how_to_order')
                    ->default(null)
                    ->extraInputAttributes(['style' => 'height: 300px; overflow-y: auto ;'])
                    ->columnSpanFull(),

            ]);
    }
}
