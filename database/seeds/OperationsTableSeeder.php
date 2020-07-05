<?php

use Illuminate\Database\Seeder;

class OperationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $operations = [
            [
                'name' => '新兵（フリー）',
                'path' => 'images/icon/sinpei.jpeg',
                'color' => 'white',
                'role' => 'attack',
            ],
            [
                'name' => 'スレッジ',
                'path' => 'images/icon/attack/sledge.png',
                'color' => '#916E79',
                'role' => 'attack',
            ],
            [
                'name' => 'サッチャー',
                'path' => 'images/icon/attack/thatcher.png',
                'color' => '#916E79',
                'role' => 'attack',
            ],
            [
                'name' => 'アッシュ',
                'path' => 'images/icon/attack/ash.jpg',
                'color' => '#D55D2F',
                'role' => 'attack',
            ],
            [
                'name' => 'テルミット',
                'path' => 'images/icon/attack/thermite.png',
                'color' => '#D55D2F',
                'role' => 'attack',
            ],
            [
                'name' => 'フューズ',
                'path' => 'images/icon/attack/fuze.jpg',
                'color' => '#A81814',
                'role' => 'attack',
            ],
            [
                'name' => 'グラズ',
                'path' => 'images/icon/attack/glaz.jpg',
                'color' => '#A81814',
                'role' => 'attack',
            ],
            [
                'name' => 'スイッチ',
                'path' => 'images/icon/attack/twitch.png',
                'color' => '#3B6081',
                'role' => 'attack',
            ],
            [
                'name' => 'モンターニュ',
                'path' => 'images/icon/attack/montagne.png',
                'color' => '#3B6081',
                'role' => 'attack',
            ],
            [
                'name' => 'ブリッツ',
                'path' => 'images/icon/attack/blitz.jpg',
                'color' => '#FAC331',
                'role' => 'attack',
            ],
            [
                'name' => 'アイキュー',
                'path' => 'images/icon/attack/iq.png',
                'color' => '#FAC331',
                'role' => 'attack',
            ],
            [
                'name' => 'バック',
                'path' => 'images/icon/attack/buck.jpg',
                'color' => '#1B8BB1',
                'role' => 'attack',
            ],
            [
                'name' => 'ブラックビアード',
                'path' => 'images/icon/attack/blackbeard.jpg',
                'color' => '#C2920A',
                'role' => 'attack',
            ],
            [
                'name' => 'カピタオ',
                'path' => 'images/icon/attack/capitao.jpg',
                'color' => '#4A8A40',
                'role' => 'attack',
            ],
            [
                'name' => 'ヒバナ',
                'path' => 'images/icon/attack/hibana.jpg',
                'color' => '#992B41',
                'role' => 'attack',
            ],
            [
                'name' => 'ジャッカル',
                'path' => 'images/icon/attack/jackal.png',
                'color' => '#733691',
                'role' => 'attack',
            ],
            [
                'name' => 'イン',
                'path' => 'images/icon/attack/ying.jpg',
                'color' => '#AD4524',
                'role' => 'attack',
            ],
            [
                'name' => 'ゾフィア',
                'path' => 'images/icon/attack/zofia.jpg',
                'color' => '#579D99',
                'role' => 'attack',
            ],
            [
                'name' => 'トッケビ',
                'path' => 'images/icon/attack/dokkaebi.png',
                'color' => '#C5CFD1',
                'role' => 'attack',
            ],
            [
                'name' => 'フィンカ',
                'path' => 'images/icon/attack/finka.png',
                'color' => '#FDA800',
                'role' => 'attack',
            ],
            [
                'name' => 'ライオン',
                'path' => 'images/icon/attack/lion.png',
                'color' => '#FDA800',
                'role' => 'attack',
            ],
            [
                'name' => 'マーベリック',
                'path' => 'images/icon/attack/maverick.jpg',
                'color' => '#6E8191',
                'role' => 'attack',
            ],
            [
                'name' => 'ノマド',
                'path' => 'images/icon/attack/nomad.jpg',
                'color' => '#B9935E',
                'role' => 'attack',
            ],
            [
                'name' => 'グリッドロック',
                'path' => 'images/icon/attack/gridlock.jpg',
                'color' => '#9B1042',
                'role' => 'attack',
            ],
            [
                'name' => 'ノック',
                'path' => 'images/icon/attack/nokk.jpg',
                'color' => '#2D3F89',
                'role' => 'attack',
            ],
            [
                'name' => 'アマル',
                'path' => 'images/icon/attack/amaru.jpg',
                'color' => '#0F5A0A',
                'role' => 'attack',
            ],
            [
                'name' => 'カーリー',
                'path' => 'images/icon/attack/kali.jpg',
                'color' => '#25B9C5',
                'role' => 'attack',
            ],
            [
                'name' => 'イアナ',
                'path' => 'images/icon/attack/iana.jpg',
                'color' => '#986E9A',
                'role' => 'attack',
            ],
            [
                'name' => 'エース',
                'path' => 'images/icon/attack/Ace.jpg',
                'color' => '#2E7B8E',
                'role' => 'attack',
            ],
            
            //防衛
            [
                'name' => '新兵（フリー）',
                'path' => 'images/icon/sinpei.jpeg',
                'color' => 'white',
                'role' => 'defense',
            ],
            [
                'name' => 'スモーク',
                'path' => 'images/icon/defense/smoke.png',
                'color' => '#926F7A',
                'role' => 'defense',
            ],
            [
                'name' => 'ミュート',
                'path' => 'images/icon/defense/mute.jpg',
                'color' => '#926F7A',
                'role' => 'defense',
            ],
            [
                'name' => 'キャッスル',
                'path' => 'images/icon/defense/castle.png',
                'color' => '#D65C2B',
                'role' => 'defense',
            ],
            [
                'name' => 'パルス',
                'path' => 'images/icon/defense/pulse.jpg',
                'color' => '#D65C2B',
                'role' => 'defense',
            ],
            [
                'name' => 'カプカン',
                'path' => 'images/icon/defense/kapkan.png',
                'color' => '#A81814',
                'role' => 'defense',
            ],
            [
                'name' => 'タチャンカ',
                'path' => 'images/icon/defense/tachanka.png',
                'color' => '#A81814',
                'role' => 'defense',
            ],

            [
                'name' => 'ドク',
                'path' => 'images/icon/defense/doc.jpg',
                'color' => '#396188',
                'role' => 'defense',
            ],
            [
                'name' => 'ルーク',
                'path' => 'images/icon/defense/rook.jpg',
                'color' => '#396188',
                'role' => 'defense',
            ],
            [
                'name' => 'イェーガ',
                'path' => 'images/icon/defense/jager.jpg',
                'color' => '#F5C037',
                'role' => 'defense',
            ],
            [
                'name' => 'バンディット',
                'path' => 'images/icon/defense/bandit.png',
                'color' => '#F5C037',
                'role' => 'defense',
            ],
            [
                'name' => 'フロスト',
                'path' => 'images/icon/defense/frost.jpg',
                'color' => '#1D82A7',
                'role' => 'defense',
            ],
            [
                'name' => 'ヴァルキリー',
                'path' => 'images/icon/defense/valkyrie.jpg',
                'color' => '#C49205',
                'role' => 'defense',
            ],
            [
                'name' => 'カベイラ',
                'path' => 'images/icon/defense/caveira.jpg',
                'color' => '#4A8A40',
                'role' => 'defense',
            ],
            [
                'name' => 'エコー',
                'path' => 'images/icon/defense/echo.jpg',
                'color' => '#B75E65',
                'role' => 'defense',
            ],
            [
                'name' => 'ミラ',
                'path' => 'images/icon/defense/mira.png',
                'color' => '#784594',
                'role' => 'defense',
            ],
            [
                'name' => 'リージョン',
                'path' => 'images/icon/defense/lesion.png',
                'color' => '#B45D40',
                'role' => 'defense',
            ],
            [
                'name' => 'エラ',
                'path' => 'images/icon/defense/ela.jpg',
                'color' => '#4E9A97',
                'role' => 'defense',
            ],
            [
                'name' => 'ヴィジル',
                'path' => 'images/icon/defense/vigil.jpg',
                'color' => '#C3CCCE',
                'role' => 'defense',
            ],
            [
                'name' => 'アリバイ',
                'path' => 'images/icon/defense/alibi.jpg',
                'color' => '#656C11',
                'role' => 'defense',
            ],
            [
                'name' => 'マエストロ',
                'path' => 'images/icon/defense/maestro.jpg',
                'color' => '#656C11',
                'role' => 'defense',
            ],
            [
                'name' => 'クラッシュ',
                'path' => 'images/icon/defense/clash.jpg',
                'color' => '#6E8291',
                'role' => 'defense',
            ],
            [
                'name' => 'カイド',
                'path' => 'images/icon/defense/kaid.jpg',
                'color' => '#B4915B',
                'role' => 'defense',
            ],
            [
                'name' => 'モジー',
                'path' => 'images/icon/defense/mozzie.png',
                'color' => '#990F40',
                'role' => 'defense',
            ],
            [
                'name' => 'オーディン',
                'path' => 'images/icon/defense/warden.jpg',
                'color' => '#364EA7',
                'role' => 'defense',
            ],
            [
                'name' => 'ゴヨ',
                'path' => 'images/icon/defense/goyo.jpg',
                'color' => '#17630E',
                'role' => 'defense',
            ],
            [
                'name' => 'ワマイ',
                'path' => 'images/icon/defense/wamai.jpg',
                'color' => '#1CAFBA',
                'role' => 'defense',
            ],
            [
                'name' => 'オリックス',
                'path' => 'images/icon/defense/oryx.jpg',
                'color' => '#664A67',
                'role' => 'defense',
            ],
            [
                'name' => 'メルシィ',
                'path' => 'images/icon/defense/melusi.jpg',
                'color' => '#569BA8',
                'role' => 'defense',
            ],
        ];
        
        foreach($operations as $operation){
    
            \App\Models\Operation::create($operation);
        }
}
}