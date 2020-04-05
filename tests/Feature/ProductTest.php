<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Product;

class ProductTest extends TestCase
{
    use RefreshDatabase;
    /**
     * @test
     * @group api
     */
    public function get_all_product()
    {
        factory(Product::class)->create();
        $response = $this->get('/product/all')->assertOk();
        $this->assertCount(1, Product::all());
    }

    /** @test */
    public function show_product()
    {
        $product = factory(Product::class)->create();
        $this->get(route('product.show', $product->id))->assertStatus(200);
    }

}
