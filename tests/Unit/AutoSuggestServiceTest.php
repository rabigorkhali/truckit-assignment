<?php

namespace Tests\Unit;

use App\Services\AutoSuggestService;
use PHPUnit\Framework\TestCase;

class AutoSuggestServiceTest extends TestCase
{
    private AutoSuggestService $service;

    protected function setUp(): void
    {
        $this->service = new AutoSuggestService();
    }

    public function test_get_category_returns_success_for_valid_fruit()
    {
        $result = $this->service->getCategory('banana');

        $this->assertTrue($result['success']);
        $this->assertEquals('Banana is a fruit', $result['message']);
    }

    public function test_get_category_returns_success_for_valid_vegetable()
    {
        $result = $this->service->getCategory('carrot');

        $this->assertTrue($result['success']);
        $this->assertEquals('Carrot is a vegetable', $result['message']);
    }

    public function test_get_category_returns_success_for_valid_meat()
    {
        $result = $this->service->getCategory('chicken');

        $this->assertTrue($result['success']);
        $this->assertEquals('Chicken is a meat', $result['message']);
    }

    public function test_get_category_returns_error_for_short_query()
    {
        $result = $this->service->getCategory('ba');

        $this->assertFalse($result['success']);
        $this->assertEquals('Please enter at least 3 characters', $result['message']);
    }

    public function test_get_category_returns_error_for_empty_query()
    {
        $result = $this->service->getCategory('');

        $this->assertFalse($result['success']);
        $this->assertEquals('Please enter at least 3 characters', $result['message']);
    }

    public function test_get_category_returns_error_for_nonexistent_item()
    {
        $result = $this->service->getCategory('nonexistent');

        $this->assertFalse($result['success']);
        $this->assertEquals("No category found for 'nonexistent'", $result['message']);
    }

    public function test_get_category_is_case_insensitive()
    {
        $result = $this->service->getCategory('BANANA');

        $this->assertTrue($result['success']);
        $this->assertEquals('Banana is a fruit', $result['message']);
    }

    public function test_get_category_trims_whitespace()
    {
        $result = $this->service->getCategory('  banana  ');

        $this->assertTrue($result['success']);
        $this->assertEquals('Banana is a fruit', $result['message']);
    }
} 