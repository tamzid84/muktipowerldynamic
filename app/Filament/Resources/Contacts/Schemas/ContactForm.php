<?php

namespace App\Filament\Resources\Contacts\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
class ContactForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                //
                 TextInput::make('name')
            ->required()
            ->maxLength(255),

        TextInput::make('phone')
            ->required()
            ->tel(),

        Textarea::make('message')
            ->required()
            ->rows(4),
            ]);
    }
}
