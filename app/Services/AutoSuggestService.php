<?php

namespace App\Services;

class AutoSuggestService
{
    private array $items = [
        'banana' => 'fruit',
        'apple' => 'fruit',
        'orange' => 'fruit',
        'carrot' => 'vegetable',
        'broccoli' => 'vegetable',
        'spinach' => 'vegetable',
        'chicken' => 'meat',
        'beef' => 'meat',
        'pork' => 'meat',
    ];

    public function getCategory(string $query): array
    {
        $query = strtolower(trim($query));
        
        if (strlen($query) < 3) {
            return [
                'success' => false,
                'message' => 'Please enter at least 3 characters'
            ];
        }

        foreach ($this->items as $item => $category) {
            if (str_contains($item, $query)) {
                return [
                    'success' => true,
                    'message' => ucfirst($item) . ' is a ' . $category
                ];
            }
        }

        return [
            'success' => false,
            'message' => "No category found for '$query'"
        ];
    }
} 