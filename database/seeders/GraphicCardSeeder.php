<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\GraphicCard;

class GraphicCardSeeder extends Seeder
{
    public function run()
    {
        $products = [
            [
                'name'  => 'NVIDIA GeForce RTX 5090',
                'price' => 389999,
                'img'   => 'https://imageio.forbes.com/specials-images/imageserve/677b8fb840871a88a354aac4/0x0.jpg?format=jpg&crop=1110,624,x44,y0,safe&height=900&width=1600&fit=bounds'
            ],
            [
                'name'  => 'NVIDIA GeForce RTX 5080',
                'price' => 269999,
                'img'   => 'https://www.zotac.com/download/files/styles/w1024/public/product_gallery/graphics_cards/zt-b50800d-10p-image01.jpg?itok=mfnHY9DP'
            ],
            [
                'name'  => 'NVIDIA GeForce RTX 5070 Ti',
                'price' => 199999,
                'img'   => 'https://techarc.pk/wp-content/uploads/2025/08/pny-geforce-rtx-5070-ti-16gb-stealth-oc-graphics-card-1-techarc.pk_-1.webp'
            ],
            [
                'name'  => 'AMD Radeon RX 9070 XT',
                'price' => 239999,
                'img'   => 'https://microless.com/cdn/products/d4ec9742a9777a48e19d80b51501156b-hi.jpg'
            ],
            [
                'name'  => 'AMD Radeon RX 9070',
                'price' => 219999,
                'img'   => 'https://microless.com/cdn/products/d4ec9742a9777a48e19d80b51501156b-hi.jpg'
            ],
            [
                'name'  => 'NVIDIA GeForce RTX 4070 Super',
                'price' => 169999,
                'img'   => 'https://static3.webx.pk/files/19643/Images/asus-tuf-gaming-rtx-4070-super-12gb-gpu-price-in-pakistan-3-19643-0-120924075621623.jpg'
            ],
            [
                'name'  => 'AMD Radeon RX 7900 XTX',
                'price' => 159999,
                'img'   => 'https://static3.webx.pk/files/19643/Images/sapphire-rx-7900-xtx-nitro--gpu-price-in-pakistan-2-19643-0-090223113858885.jpg'
            ],
            [
                'name'  => 'NVIDIA GeForce RTX 4060 Ti 16GB',
                'price' => 129999,
                'img'   => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcReGhSH2eMag9nLqPOAb_xpG7WBDf-RDbdhlA&s'
            ],
            [
                'name'  => 'AMD Radeon RX 7700 XT',
                'price' => 119999,
                'img'   => 'https://m.media-amazon.com/images/I/81XO1+7353L._AC_SL1500_.jpg'
            ],
            [
                'name'  => 'Intel Arc B580',
                'price' => 89999,
                'img'   => 'https://amirtraders.com/wp-content/uploads/2025/05/Get-ASRock-Intel-ARC-B580-Challenger-12GB-OC-GPU-1.jpg'
            ],
            [
                'name'  => 'AMD Radeon RX 7600 XT',
                'price' => 79999,
                'img'   => 'https://tpucdn.com/review/sapphire-radeon-rx-7600-xt-pulse/images/title.jpg'
            ],
            [
                'name'  => 'NVIDIA GeForce RTX 4050',
                'price' => 69999,
                'img'   => 'https://i.ytimg.com/vi/lYf7n8dNFIg/maxresdefault.jpg'
            ],
        ];

        foreach ($products as $p) {
            GraphicCard::create($p);
        }
    }
}
