<?php

namespace App\Filament\Resources\Products\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
class ProductsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                //
                ImageColumn::make('image1')
                ->label('Image'),

            TextColumn::make('title')
                ->searchable()
                ->sortable(),

            TextColumn::make('category.name')
                ->label('Category'),

            TextColumn::make('price')
                ->money('BDT'),

            TextColumn::make('brand'),

            IconColumn::make('status')
                ->boolean(),

            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make()
                ->visible(fn () => auth()->user()->can('edit')),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make()
                    ->visible(fn () => auth()->user()->can('delete')),
                ]),
            ]);
    }
}
