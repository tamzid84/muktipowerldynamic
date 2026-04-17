<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Illuminate\Support\Facades\Hash;
use Filament\Forms\Components\Select;
use Spatie\Permission\Models\Role;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                //
            TextInput::make('name')
            ->required()
            ->maxLength(255),

        TextInput::make('email')
            ->email()
            ->required()
            ->unique(ignoreRecord: true),

        TextInput::make('password')
            ->password()
            ->required(fn ($livewire) =>
                $livewire instanceof \App\Filament\Resources\Users\Pages\CreateUser
            )
            ->dehydrateStateUsing(fn ($state) => Hash::make($state)),
        
        // ✅ ROLE ASSIGNMENT FIELD
            Select::make('roles')
                ->label('Role')
                ->multiple()
                ->relationship('roles', 'name')
                ->preload()
                ->searchable(),
    
        ]);
    }
}
