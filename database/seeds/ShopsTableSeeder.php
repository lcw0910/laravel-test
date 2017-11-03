<?php

use Illuminate\Database\Seeder;
use App\Repository\ShopRepository;

class ShopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @param $shop ShopRepository
     * @return void
     */
    public function run(ShopRepository $shop)
    {
        $defaultShopInfo = [
            'bagazimuri' => '바가지머리',
            'envylookkr' => '엔비룩',
            'gqsharp' => '스타일맨',
            'ju021026' => '블루팝스',
            'littleblack' => '리틀블랙',
            'mall66' => '육육걸즈',
            'minzzang7457' => '민짱나라',
            'mixxmix' => '믹스엑스믹스',
            'mozarto' => '패션풀',
            'nandaglobal' => '스타일난다(솔업)',
            'nsokr11' => '인스타일핏',
            'piachess' => '박남매',
            'prostj' => '프로스트제이',
            'reorder' => '올드미키',
            'righth' => '르엔제이 (구: 니뽄쭈야)',
            'tkddk3704' => '플라이모델',
            'uptownholic' => '업타운홀릭',
            'ectopsu1196' => '테스트몰'
        ];

        $insertRow = [];

        foreach ($defaultShopInfo as $mallId => $name) {
            $insertRow[] = [
                'mall_id'       => $mallId,
                'shop_no'       => 1,
                'name'          => $name,
                'solup_flag'    => true,
                'language_code' => 'ko'
            ];
        }

        $shop->store($insertRow);
    }
}
