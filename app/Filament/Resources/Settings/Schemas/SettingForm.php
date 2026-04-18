<?php

namespace App\Filament\Resources\Settings\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;

class SettingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                //
                TextInput::make('key')
                ->label('Setting Key')
                ->required()
                ->unique(ignoreRecord: true)
                ->maxLength(255),

            Textarea::make('value')
                ->label('Value')
                ->rows(4)
                ->nullable(),
            ]);
    }
}
