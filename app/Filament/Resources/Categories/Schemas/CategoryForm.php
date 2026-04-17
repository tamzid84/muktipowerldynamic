<?php

namespace App\Filament\Resources\Categories\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;


class CategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                //
                TextInput::make('name')
            ->required()
            ->maxLength(255),

        TextInput::make('slug')
            ->required()
            ->unique(ignoreRecord: true),

        Textarea::make('description'),

        TextInput::make('icon')
            ->placeholder('e.g. fa-solid fa-home'),

        Toggle::make('status')
            ->default(true),
            ]);
    }
}
