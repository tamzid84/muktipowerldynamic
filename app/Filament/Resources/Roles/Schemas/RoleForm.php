<?php

namespace App\Filament\Resources\Roles\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\CheckboxList;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Str;
class RoleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                //
                // 🟢 Role Name
            TextInput::make('name')
                ->label('Role Name')
                ->required()
                ->unique(ignoreRecord: true)
                ->maxLength(255),

            // 🟢 Guard Name (important for Spatie)
            TextInput::make('guard_name')
                ->default('web')
                ->required()
                ->hidden(),

            // 🟢 Permissions assign to Role
            CheckboxList::make('permissions')
                ->label('Permissions')
                ->relationship('permissions', 'name')
                ->columns(2)
                ->searchable()
                ->bulkToggleable(),

            ]);
    }
}
