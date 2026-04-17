<?php

namespace App\Filament\Resources\Permissions\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Spatie\Permission\Models\Permission;

class PermissionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                //
                // 🟢 Permission Name
            TextInput::make('name')
                ->label('Permission Name')
                ->required()
                ->unique(ignoreRecord: true)
                ->maxLength(255),

            // 🟢 Guard Name (Spatie required field)
            TextInput::make('guard_name')
                ->default('web')
                ->required()
                ->hidden(),
            ]);
    }
}
