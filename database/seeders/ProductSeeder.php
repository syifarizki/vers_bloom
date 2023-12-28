<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $url = "https://perenual.com/api/species-list?key=sk-QS2Q658a6307309aa3586";
    
        $response = Http::get($url);
        $products = $response->json()['data'];
    
        foreach ($products as $product) {
            // Cari kategori berdasarkan 'watering'
            $existingCategory = Category::where('name', $product['watering'])->first();
    
            // Jika tidak ada, buat kategori baru
            if (!$existingCategory) {
                $newCategory = Category::create(['name' => $product['watering']]);
                $categoryId = $newCategory->id;
            } else {
                $categoryId = $existingCategory->id;
            }
    
            $productData = [
                'category_id' => $categoryId,
                'product_name' => $product['common_name'], 
                'common_name' => $product['common_name'],
                'watering' => $product['watering'],
                'code' => Str::random(6),
                'price' => Rand(50000,500000),
                'description' => Str::random(150),                
            ];
    
            Product::create($productData);
        }
    }


   

}
