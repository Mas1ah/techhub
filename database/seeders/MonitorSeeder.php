<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Monitor;

class MonitorSeeder extends Seeder
{
    public function run(): void
    {
        $monitors = [
            [
                'name'  => 'ASUS ROG Swift OLED PG27UCDM',
                'price' => 359999,
                'img'   => 'https://i.rtings.com/assets/products/OJanXy77/asus-rog-swift-oled-pg27ucdm/design-medium.jpg?format=auto'
            ],
            [
                'name'  => 'BenQ MOBIUZ EX321UX',
                'price' => 249999,
                'img'   => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSpln6eTUGRL13Mtjo0g0ivmam6beQHlj1lHQ&s'
            ],
            [
                'name'  => 'Dell Alienware AW2725Q',
                'price' => 219999,
                'img'   => 'https://gamingbolt.com/wp-content/uploads/2025/01/dell-alienware-aw2725q-gaming-monitor.jpg'
            ],
            [
                'name'  => 'Samsung Odyssey OLED G9 49″',
                'price' => 429999,
                'img'   => 'https://images.samsung.com/is/image/samsung/p6pim/pk/feature/165869899/pk-feature-gaming-545127471?$624_n_JPG$'
            ],
            [
                'name'  => 'LG UltraGear 27GP850-B',
                'price' => 124999,
                'img'   => 'https://www.lg.com/bd/images/consumer-monitors/md07564818/feature/27GP850-B-UltraGear-Gaming-Monitors-04-1-nano-ips-hdr400-m.jpg'
            ],
            [
                'name'  => 'Dell UltraSharp U3225QE 32″ 4K',
                'price' => 339999,
                'img'   => 'https://i.rtings.com/assets/products/L59W3KZp/dell-u3225qe/design-medium.jpg?format=auto'
            ],
            [
                'name'  => 'Acer Predator X27U F8',
                'price' => 299999,
                'img'   => 'https://cdn.mos.cms.futurecdn.net/nGoEHdgYavcxxZpZVNznpG.jpg'
            ],
            [
                'name'  => 'MSI MPG 321URX QD-OLED',
                'price' => 189999,
                'img'   => 'https://storage-asset.msi.com/global/picture/image/feature/monitor/MPG-321URX-QD-OLED/images/kv-xs.jpg'
            ],
        ];

        foreach ($monitors as $m) {
            Monitor::create($m);
        }
    }
}
