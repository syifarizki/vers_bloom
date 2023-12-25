<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
      

        // \App\Models\User::factory(10)->create([
        //     'firstname' => 'Test User',
        //     'lastname' => 'Test User',
        //     'email' => 'test@example.com',
        //     'password' => '123456',
        // ]);

        //   User::create([
        //     'name' => 'Syifa Rizki',
        //     'email' => 'syifa@gmail.com',
        //     'password' => bcrypt('12345')

        // ]);
        User::factory(3)->create();

        Category::create([
            'name' => 'Indoor Plants',
            'code' => 'in'
        ]);
        Category::create([
            'name' => 'Outdoor Plants',
            'code' => 'Out'
        ]);

        Product::factory(10)->create();
        // Product::create([
        //     'product_name' => 'Peace Lily',
        //     'common_name' => 'Peace Lily',
        //     'code' => 'TM0001',
        //     'price' => 'Rp.300.000',
        //     'description' => 'The Peace Lily is one of the most popular staple plants in the houseplant world. Its broad, deep green leaves bring a lush tropical vibe reminiscent of the jungles it comes from. The creamy white blooms are called spathes, which house tiny flowers. The rich white color of the spathes has come to signify peace, prosperity, and remembrance.
        //                       The Peace Lily is native to the dense rainforests of Venezuela and Colombia. It made its way to Europe in the 1860s and quickly gained traction for its beautiful yet forgiving nature. The plant will wilt dramatically if it gets too dry, but a thorough watering should quickly fix this. Peace lilies can adapt to low light, but provide bright indirect light to encourage the sought-after white blooms, or spathes.',
        //     'category_id' => 1
        // ]);

        // Product::create([
        //     'product_name' => 'Monstera',
        //     'common_name' => 'Swiss Cheese or Hurricane Plant, Fruit Salad Plant , Monstera',
        //     'code' => 'TM0002',
        //     'price' => 'Rp.400.000',
        //     'description' => 'When placed in the right environment, Monsteras are easy to care for and fast-growing—so give it some space to spread out, make a statement, and thrive! As the Monstera grows, its leaves will develop long ribbons and holes, resembling swiss cheese, giving it a distinct, graphic appearance.
        //                       This tropical plant originates from the rainforests of southern Mexico and is extremely adaptable to indoor conditions. Monsteras love bright, indirect light, but will be happy under fluorescent lights as well. Monsteras are climbers, so as they grow, they will want to vine out. This impressive, wild plant is also tolerant of the occasional missed watering, making it an ideal addition for any home.',
        //     'category_id' => 2
        // ]);
        // Product::create([
        //     'product_name' => 'Philodendron Birkin',
        //     'common_name' => 'Philodendron Birkin',
        //     'code' => 'TM0003',
        //     'price' => 'Rp.200.000',
        //     'description' => 'The Philodendron Birkin is an easy-going plant with glossy, thick leaves with delicate white pinstripes. Tolerant of many indoor environments, the Birkin makes for an eye-catching plant in any home. Whether you’re a seasoned plant enthusiast or just starting your green journey, its easy-going nature means you dont need a green thumb to enjoy its beauty.
        //                       While the Philodendron Birkin is a relatively new hybrid, many philodendrons hail from the lush rainforests of Brazil and Paraguay, meaning the Philodendron Birkin enjoys warm temperatures and high humidity. As this plant matures and receives enough sunlight, the variegation on its foliage will be more prominent and striking.',
        //     'category_id' => 2
        // ]);

        //  Product::create([
        //     'product_name' => 'Bromeliad Guzmania Yellow',
        //     'common_name' => 'Guzmania Bromeliad',
        //     'code' => 'TM0004',
        //     'price' => 'Rp.900.000',
        //     'description' => 'The Bromeliad Yellow adds a bold pop of color among a sea of green. With unusually long-lasting flowers, bromeliads are the gift that keeps on giving since they naturally grow pups that will develop their own bright flowers. This also means the mother plant will die off one day and be replaced by these pups, so don’t worry if you notice that yellow flower fading in a few months! This is natural.
        //                       Guzmania-type bromeliads hail from South America. In their native habitat, they’re epiphytic, meaning they grow on other plants like trees. They get their moisture from the rainwater that their vase catches and the water vapor in the air. Keep this center vase filled halfway with water at all times and you’ll have this tropical beauty thriving in your home.',
        //     'category_id' => 1
        // ]);
    }
}
