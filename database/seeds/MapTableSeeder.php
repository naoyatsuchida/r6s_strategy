<?php

use Illuminate\Database\Seeder;

class MapTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $maps = [
            [
                'name' => '銀行',
                'path' => 'images/maps_top/bank.jpg',
                    'children' => [
                        [                    
                            ['path' => 'images/maps/bank/bank_1.jpg'],
                            ['path' => 'images/maps/bank/bank_2.jpg'],
                            ['path' => 'images/maps/bank/bank_3.jpg'],
                            ['path' => 'images/maps/bank/bank_4.jpg'],            
                        ],
                    ],
                ],
            [
                'name' => '国境',
                'path' => 'images/maps_top/border.jpg',
                    'children' => [
                        [                    
                            ['path' => 'images/maps/border/border_1.jpg'],
                            ['path' => 'images/maps/border/border_2.jpg'],
                            ['path' => 'images/maps/border/border_3.jpg'],
                        ],
                    ],
                ],
            [
                'name' => 'カフェ・ドフトエスキー',
                'path' => 'images/maps_top/cafe.jpg',
                    'children' => [
                        [                    
                            ['path' => 'images/maps/cafe/cafe_1.jpg'],
                            ['path' => 'images/maps/cafe/cafe_2.jpg'],
                            ['path' => 'images/maps/cafe/cafe_3.jpg'],
                            ['path' => 'images/maps/cafe/cafe_4.jpg'],
                        ],
                    ],
                ],
            [
                'name' => 'クラブハウス',
                'path' => 'images/maps_top/club.jpg',
                    'children' => [
                        [                    
                            ['path' => 'images/maps/club/club_1.jpg'],
                            ['path' => 'images/maps/club/club_2.jpg'],
                            ['path' => 'images/maps/club/club_3.jpg'],
                            ['path' => 'images/maps/club/club_4.jpg'],
                        ],
                    ],
                ],
            [
                'name' => '海岸線',
                'path' => 'images/maps_top/coastline.jpg',
                    'children' => [
                        [                    
                            ['path' => 'images/maps/coastline/coastline_1.jpg'],
                            ['path' => 'images/maps/coastline/coastline_2.jpg'],
                            ['path' => 'images/maps/coastline/coastline_3.jpg'],
                            ['path' => 'images/maps/coastline/coastline_4.jpg'],
                            
                        ],
                    ],
                ],
            [
                'name' => '領事館',
                'path' => 'images/maps_top/consulate.jpg',
                    'children' => [
                        [                    
                            ['path' => 'images/maps/consulate/consulate_1.jpg'],
                            ['path' => 'images/maps/consulate/consulate_2.jpg'],
                            ['path' => 'images/maps/consulate/consulate_3.jpg'],
                            ['path' => 'images/maps/consulate/consulate_4.jpg'],
                        ],
                    ],
                ],
            [
                'name' => '領事館',
                'path' => 'images/maps_top/consulate.jpg',
                    'children' => [
                        [                    
                            ['path' => 'images/maps/consulate/consulate_1.jpg'],
                            ['path' => 'images/maps/consulate/consulate_2.jpg'],
                            ['path' => 'images/maps/consulate/consulate_3.jpg'],
                            ['path' => 'images/maps/consulate/consulate_4.jpg'],
                        ],
                    ],
                ],
            [
                'name' => '山荘',
                'path' => 'images/maps_top/mountain.jpg',
                    'children' => [
                        [                    
                            ['path' => 'images/maps/mountain/mountain_1.jpg'],
                            ['path' => 'images/maps/mountain/mountain_2.jpg'],
                            ['path' => 'images/maps/mountain/mountain_3.jpg'],
                            ['path' => 'images/maps/mountain/mountain_4.jpg'],
                        ],
                    ],
                ],
            [
                'name' => 'オレゴン',
                'path' => 'images/maps_top/oregon.jpg',
                    'children' => [
                        [                    
                            ['path' => 'images/maps/oregon/oregon_1.jpg'],
                            ['path' => 'images/maps/oregon/oregon_2.jpg'],
                            ['path' => 'images/maps/oregon/oregon_3.jpg'],
                            ['path' => 'images/maps/oregon/oregon_4.jpg'],
                            ['path' => 'images/maps/oregon/oregon_5.jpg'],
                        ],
                    ],
                ],
            [
                'name' => 'アウトバック',
                'path' => 'images/maps_top/outback.jpg',
                    'children' => [
                        [                    
                            ['path' => 'images/maps/outoback/outback_1.jpg'],
                            ['path' => 'images/maps/outoback/outback_2.jpg'],
                            ['path' => 'images/maps/outoback/outback_3.jpg'],
                            ['path' => 'images/maps/outoback/outback_4.jpg'],
                        ],
                    ],
                ],
            [
                'name' => 'テーマパーク',
                'path' => 'images/maps_top/themapark.jpg',
                    'children' => [
                        [                    
                            ['path' => 'images/maps/theme_park/themepark_1.jpg'],
                            ['path' => 'images/maps/theme_park/themepark_2.jpg'],
                            ['path' => 'images/maps/theme_park/themepark_3.jpg'],
                        ],
                    ],
                ],
            [
                'name' => '運河',
                'path' => 'images/maps_top/unga.jpg',
                    'children' => [
                        [                    
                            ['path' => 'images/maps/unga/unga_1.jpg'],
                            ['path' => 'images/maps/unga/unga_2.jpg'],
                            ['path' => 'images/maps/unga/unga_3.jpg'],
                            ['path' => 'images/maps/unga/unga_4.jpg'],
                            ['path' => 'images/maps/unga/unga_5.jpg'],
                    
                        ],
                    ],
                ],
            [
                'name' => 'ヴィラ',
                'path' => 'images/maps_top/villa.jpg',
                    'children' => [
                        [                    
                            ['path' => 'images/maps/villa/villa_1.jpg'],
                            ['path' => 'images/maps/villa/villa_2.jpg'],
                            ['path' => 'images/maps/villa/villa_3.jpg'],
                            ['path' => 'images/maps/villa/villa_4.jpg'],

                    
                        ],
                    ],
                ],
            
        ];
    
        foreach($maps as $map){

            \App\Models\Map_Category::create($map);
        }
}
}
