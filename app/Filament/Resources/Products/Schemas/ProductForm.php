<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Toggle;


class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                //
                // 🔗 Category Relation
        Select::make('category_id')
            ->relationship('category', 'name')
            ->required()
            ->searchable(),

        TextInput::make('title')
            ->required()
            ->maxLength(255),

        TextInput::make('slug')
            ->required()
            ->unique(ignoreRecord: true),

        TextInput::make('short_description')
            ->required(),

        Textarea::make('description')
            ->rows(4),

        // JSON Features
        Textarea::make('features')
            ->placeholder('Write JSON like: ["Feature 1", "Feature 2"]'),

        // Images
        FileUpload::make('image1')
    ->image()
    ->directory('products')
    ->disk('public'),
        FileUpload::make('image2')
    ->image()
    ->directory('products')
    ->disk('public'),
        FileUpload::make('image3')
    ->image()
    ->directory('products')
    ->disk('public'),

        TextInput::make('brand'),
        TextInput::make('model'),

        TextInput::make('price')
            ->numeric(),

        Toggle::make('status')
            ->default(true),

            ]);
    }
}
