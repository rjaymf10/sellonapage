<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Repellat voluptatem.',
                'description' => 'Quia doloremque optio aut quia itaque voluptatibus nihil odit dolores totam sint qui quibusdam.',
                'price' => '167.00',
                'cover_img' => NULL,
                'shop_id' => 1,
                'created_at' => '2020-07-22 12:58:54',
                'updated_at' => '2020-07-22 12:58:54',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Ipsa a nobis.',
                'description' => 'Aliquid molestiae cumque voluptate et at quis esse id rerum voluptatem ut qui.',
                'price' => '257.00',
                'cover_img' => NULL,
                'shop_id' => 3,
                'created_at' => '2020-07-22 12:58:54',
                'updated_at' => '2020-07-22 12:58:54',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Facere consequatur.',
                'description' => 'Ut quae et deleniti at consectetur asperiores rerum incidunt sit laudantium magnam commodi veritatis voluptatum occaecati minus reprehenderit libero reprehenderit quia sit.',
                'price' => '697.00',
                'cover_img' => NULL,
                'shop_id' => 2,
                'created_at' => '2020-07-22 12:58:54',
                'updated_at' => '2020-07-22 12:58:54',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Dolorem at amet.',
                'description' => 'Eius maiores reiciendis voluptatem nemo enim perferendis aut corrupti ut repellat recusandae voluptatem enim dolorem voluptatum odio quos voluptatum harum sit et aperiam quis.',
                'price' => '716.00',
                'cover_img' => NULL,
                'shop_id' => 2,
                'created_at' => '2020-07-22 12:58:54',
                'updated_at' => '2020-07-22 12:58:54',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Est pariatur.',
                'description' => 'Et commodi voluptas qui ut perferendis rem aut sunt sapiente ut sit ut qui dignissimos est odit ipsam et ut est.',
                'price' => '724.00',
                'cover_img' => NULL,
                'shop_id' => 1,
                'created_at' => '2020-07-22 12:58:54',
                'updated_at' => '2020-07-22 12:58:54',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Culpa vel.',
                'description' => 'Perspiciatis ea ducimus ducimus error incidunt sit sed quia quo eum facere adipisci pariatur veniam magni deserunt nihil est perferendis aut maxime in aliquid.',
                'price' => '648.00',
                'cover_img' => NULL,
                'shop_id' => 2,
                'created_at' => '2020-07-22 12:58:55',
                'updated_at' => '2020-07-22 12:58:55',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Quae saepe dolores.',
                'description' => 'Eos nesciunt est ullam nihil asperiores et tempore nam quia earum explicabo vero consectetur facere similique laboriosam non officiis aut doloremque suscipit tempora quos omnis id aut impedit.',
                'price' => '642.00',
                'cover_img' => NULL,
                'shop_id' => 2,
                'created_at' => '2020-07-22 12:58:55',
                'updated_at' => '2020-07-22 12:58:55',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Aut neque facere.',
                'description' => 'Laborum illo corporis et error cum non id sed culpa est itaque labore ut aut facilis.',
                'price' => '115.00',
                'cover_img' => NULL,
                'shop_id' => 3,
                'created_at' => '2020-07-22 12:58:55',
                'updated_at' => '2020-07-22 12:58:55',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Molestiae dolores velit.',
                'description' => 'Ullam explicabo possimus voluptas nisi voluptas labore nihil autem delectus eveniet aut occaecati.',
                'price' => '580.00',
                'cover_img' => NULL,
                'shop_id' => 2,
                'created_at' => '2020-07-22 12:58:55',
                'updated_at' => '2020-07-22 12:58:55',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Sed ullam excepturi.',
                'description' => 'Qui porro est odio laudantium mollitia nobis eius consequuntur voluptas ut eveniet explicabo earum distinctio incidunt dolorem labore distinctio amet est omnis quasi.',
                'price' => '340.00',
                'cover_img' => NULL,
                'shop_id' => 2,
                'created_at' => '2020-07-22 12:58:55',
                'updated_at' => '2020-07-22 12:58:55',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Explicabo ipsum.',
                'description' => 'Quis officiis quo sed repellat consequuntur quia id laborum soluta corrupti est illum occaecati earum et quidem quis.',
                'price' => '727.00',
                'cover_img' => NULL,
                'shop_id' => 1,
                'created_at' => '2020-07-22 12:58:55',
                'updated_at' => '2020-07-22 12:58:55',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Consequatur omnis.',
                'description' => 'Non atque non esse pariatur rerum dolores tempore illum non et quo alias facere amet rem sint provident distinctio molestiae repellat est voluptatem ea quia.',
                'price' => '259.00',
                'cover_img' => NULL,
                'shop_id' => 1,
                'created_at' => '2020-07-22 12:58:55',
                'updated_at' => '2020-07-22 12:58:55',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Eos rem.',
                'description' => 'Assumenda quasi aut rem rerum dolor et ipsa velit ut provident rerum et nobis quia omnis iure aliquam ipsum in quae.',
                'price' => '698.00',
                'cover_img' => NULL,
                'shop_id' => 1,
                'created_at' => '2020-07-22 12:58:55',
                'updated_at' => '2020-07-22 12:58:55',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Necessitatibus aut rerum.',
                'description' => 'Sunt dolorem illum fuga et sed cum quasi a explicabo eligendi ut maxime corporis quia quos corrupti est sed.',
                'price' => '606.00',
                'cover_img' => NULL,
                'shop_id' => 2,
                'created_at' => '2020-07-22 12:58:55',
                'updated_at' => '2020-07-22 12:58:55',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Laudantium sint at.',
                'description' => 'Officiis quia dicta et quo ea eos eaque nihil est cupiditate velit nisi accusantium corrupti.',
                'price' => '434.00',
                'cover_img' => NULL,
                'shop_id' => 2,
                'created_at' => '2020-07-22 12:58:56',
                'updated_at' => '2020-07-22 12:58:56',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Dolores sed.',
                'description' => 'Omnis porro culpa natus voluptatem ut id ad nisi nemo at illo iure quo expedita accusantium non.',
                'price' => '710.00',
                'cover_img' => NULL,
                'shop_id' => 1,
                'created_at' => '2020-07-22 12:58:56',
                'updated_at' => '2020-07-22 12:58:56',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Vel rerum qui.',
                'description' => 'Quia et dicta aut repudiandae quo animi maiores repudiandae voluptate quas odit autem neque.',
                'price' => '951.00',
                'cover_img' => NULL,
                'shop_id' => 1,
                'created_at' => '2020-07-22 12:58:56',
                'updated_at' => '2020-07-22 12:58:56',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Sed ab sit.',
                'description' => 'Ducimus est temporibus debitis quaerat consequuntur voluptatem facere at voluptates illum optio et voluptatum illo deleniti minima assumenda magni nisi suscipit laborum animi debitis libero magni.',
                'price' => '448.00',
                'cover_img' => NULL,
                'shop_id' => 2,
                'created_at' => '2020-07-22 12:58:56',
                'updated_at' => '2020-07-22 12:58:56',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Magni asperiores.',
                'description' => 'Atque qui officia eveniet exercitationem qui odio et aspernatur rerum maiores quisquam delectus dolorem consequuntur consectetur veritatis accusamus id qui saepe deleniti sed a id ipsum ut.',
                'price' => '870.00',
                'cover_img' => NULL,
                'shop_id' => 3,
                'created_at' => '2020-07-22 12:58:56',
                'updated_at' => '2020-07-22 12:58:56',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Ut praesentium ipsa.',
                'description' => 'Sunt sed provident quo ut quidem doloremque nulla rerum officia et quis est eos distinctio repellendus magni eveniet accusantium fuga molestias at dolorum.',
                'price' => '983.00',
                'cover_img' => NULL,
                'shop_id' => 3,
                'created_at' => '2020-07-22 12:58:56',
                'updated_at' => '2020-07-22 12:58:56',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Enim est accusantium.',
                'description' => 'Est non nihil tempore error autem delectus dolorem ut qui et nemo reiciendis saepe iure et.',
                'price' => '506.00',
                'cover_img' => NULL,
                'shop_id' => 1,
                'created_at' => '2020-07-22 12:58:56',
                'updated_at' => '2020-07-22 12:58:56',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Optio debitis.',
                'description' => 'Voluptates earum dolore qui perferendis soluta quod libero qui consequatur asperiores autem omnis.',
                'price' => '413.00',
                'cover_img' => NULL,
                'shop_id' => 2,
                'created_at' => '2020-07-22 12:58:56',
                'updated_at' => '2020-07-22 12:58:56',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'Enim maiores fugit.',
                'description' => 'Quo consequatur ut nihil quis fuga recusandae itaque quam reprehenderit ipsum dolores ullam officia laboriosam amet qui.',
                'price' => '653.00',
                'cover_img' => NULL,
                'shop_id' => 1,
                'created_at' => '2020-07-22 12:58:56',
                'updated_at' => '2020-07-22 12:58:56',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'Doloribus est.',
                'description' => 'Est ut sed animi odio corporis inventore in eveniet ut ut optio eaque consequatur reprehenderit et ut eum cum in ipsam aspernatur inventore.',
                'price' => '361.00',
                'cover_img' => NULL,
                'shop_id' => 1,
                'created_at' => '2020-07-22 12:58:56',
                'updated_at' => '2020-07-22 12:58:56',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'Ipsa accusantium.',
                'description' => 'Consectetur quia repudiandae consequatur consequatur saepe facilis debitis nobis voluptatem recusandae quia repudiandae.',
                'price' => '380.00',
                'cover_img' => NULL,
                'shop_id' => 3,
                'created_at' => '2020-07-22 12:58:56',
                'updated_at' => '2020-07-22 12:58:56',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'Rerum sunt.',
                'description' => 'Modi maxime at eos ut iusto beatae a doloribus voluptatum architecto quasi facilis saepe non odio cumque voluptatem ut ipsam eligendi.',
                'price' => '651.00',
                'cover_img' => NULL,
                'shop_id' => 1,
                'created_at' => '2020-07-22 12:58:56',
                'updated_at' => '2020-07-22 12:58:56',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'Saepe quasi.',
                'description' => 'Commodi ducimus sint voluptatibus minus facere ea modi repudiandae eveniet quos deleniti consequatur magnam.',
                'price' => '977.00',
                'cover_img' => NULL,
                'shop_id' => 2,
                'created_at' => '2020-07-22 12:58:57',
                'updated_at' => '2020-07-22 12:58:57',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'Qui accusantium omnis.',
                'description' => 'Et in voluptas perferendis libero atque eaque et voluptate ea qui et dolorem est saepe dolorem voluptatem optio totam voluptatem deserunt omnis.',
                'price' => '776.00',
                'cover_img' => NULL,
                'shop_id' => 2,
                'created_at' => '2020-07-22 12:58:57',
                'updated_at' => '2020-07-22 12:58:57',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'Nisi vitae.',
                'description' => 'Expedita nulla iure expedita harum nihil magni ea corporis non animi sit ipsa quia autem rerum beatae ipsam iusto ad magni eum.',
                'price' => '453.00',
                'cover_img' => NULL,
                'shop_id' => 3,
                'created_at' => '2020-07-22 12:58:57',
                'updated_at' => '2020-07-22 12:58:57',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'Consequuntur iure ducimus.',
                'description' => 'Consequatur ullam voluptatem recusandae maiores provident accusantium enim expedita aliquid eveniet sunt ducimus sit veritatis nobis nihil explicabo tempore voluptate ut.',
                'price' => '152.00',
                'cover_img' => NULL,
                'shop_id' => 2,
                'created_at' => '2020-07-22 12:58:57',
                'updated_at' => '2020-07-22 12:58:57',
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'Sint itaque ullam.',
                'description' => 'Neque quis cupiditate et ut nesciunt doloribus nam assumenda eaque voluptatem iusto minima inventore autem dolorem sapiente qui eos ut.',
                'price' => '227.00',
                'cover_img' => NULL,
                'shop_id' => 2,
                'created_at' => '2020-07-22 12:58:57',
                'updated_at' => '2020-07-22 12:58:57',
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'Nostrum rerum quisquam.',
                'description' => 'Eaque et nihil magnam adipisci commodi deleniti totam minus ducimus velit iste dolorem ut possimus et vitae odit ut voluptas optio vel iure ut aperiam eius.',
                'price' => '608.00',
                'cover_img' => NULL,
                'shop_id' => 1,
                'created_at' => '2020-07-22 12:58:57',
                'updated_at' => '2020-07-22 12:58:57',
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'Exercitationem in aut.',
                'description' => 'Cum ea possimus explicabo repudiandae dolorum aliquam dicta nostrum fugit accusamus nihil voluptatem repudiandae odio doloribus eos.',
                'price' => '913.00',
                'cover_img' => NULL,
                'shop_id' => 2,
                'created_at' => '2020-07-22 12:58:57',
                'updated_at' => '2020-07-22 12:58:57',
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'Laudantium expedita.',
                'description' => 'Et qui saepe repellat quas soluta officiis consectetur repudiandae accusamus accusamus aut voluptatem.',
                'price' => '496.00',
                'cover_img' => NULL,
                'shop_id' => 2,
                'created_at' => '2020-07-22 12:58:57',
                'updated_at' => '2020-07-22 12:58:57',
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'Est deleniti.',
                'description' => 'Est porro commodi commodi adipisci suscipit amet quas vel accusantium a sunt nihil ut omnis voluptatum numquam eaque quae numquam sed consectetur soluta.',
                'price' => '908.00',
                'cover_img' => NULL,
                'shop_id' => 1,
                'created_at' => '2020-07-22 12:58:57',
                'updated_at' => '2020-07-22 12:58:57',
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'Nam repudiandae.',
                'description' => 'Aut est voluptas eum non dolores doloribus voluptatem et est blanditiis vel quisquam quis sunt eveniet exercitationem sequi consequuntur.',
                'price' => '840.00',
                'cover_img' => NULL,
                'shop_id' => 3,
                'created_at' => '2020-07-22 12:58:57',
                'updated_at' => '2020-07-22 12:58:57',
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'Eaque ab ut.',
                'description' => 'Voluptatem recusandae itaque autem nesciunt sint velit et veritatis et nulla cum corrupti minus et sed omnis iste accusamus omnis sapiente.',
                'price' => '122.00',
                'cover_img' => NULL,
                'shop_id' => 3,
                'created_at' => '2020-07-22 12:58:57',
                'updated_at' => '2020-07-22 12:58:57',
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'Dolor delectus.',
                'description' => 'Voluptas minima rerum at nobis et nesciunt tempore consectetur nisi nam et porro laudantium sint facere voluptatibus molestias expedita ipsum eum quasi et quisquam voluptatem.',
                'price' => '396.00',
                'cover_img' => NULL,
                'shop_id' => 3,
                'created_at' => '2020-07-22 12:58:57',
                'updated_at' => '2020-07-22 12:58:57',
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'Non aut.',
                'description' => '<p>Ad tenetur blanditiis labore tempore ut voluptas asperiores qui voluptates delectus aperiam minima cum laborum et qui est sit dignissimos deserunt deleniti.</p>',
                'price' => '584.00',
                'cover_img' => NULL,
                'shop_id' => 2,
                'created_at' => '2020-07-22 12:58:00',
                'updated_at' => '2020-07-22 14:08:34',
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'Nulla error.',
                'description' => '<p>Qui ex quisquam maiores sed blanditiis quis voluptatibus aut praesentium consequuntur magnam voluptatem omnis voluptas architecto quis laborum illo at et et quis maxime aut.</p>',
                'price' => '832.00',
                'cover_img' => NULL,
                'shop_id' => 2,
                'created_at' => '2020-07-22 12:58:00',
                'updated_at' => '2020-07-22 15:46:38',
            ),
            40 => 
            array (
                'id' => 41,
                'name' => 'Doloribus amet.',
                'description' => 'Voluptas autem sit possimus fuga delectus et repellat molestiae asperiores est rerum facere quidem doloribus impedit vitae.',
                'price' => '130.00',
                'cover_img' => NULL,
                'shop_id' => 1,
                'created_at' => '2020-07-22 12:58:58',
                'updated_at' => '2020-07-22 12:58:58',
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'Ullam at.',
                'description' => '<p>A qui aut sed tempora non incidunt et totam unde architecto minus ut nihil quibusdam fuga aut est aut amet quae.</p>',
                'price' => '615.00',
                'cover_img' => NULL,
                'shop_id' => 2,
                'created_at' => '2020-07-22 12:58:00',
                'updated_at' => '2020-07-22 15:47:02',
            ),
            42 => 
            array (
                'id' => 43,
                'name' => 'Provident occaecati.',
                'description' => 'Labore non accusamus sint et molestias ea repudiandae minima aut fugit aut est.',
                'price' => '696.00',
                'cover_img' => NULL,
                'shop_id' => 3,
                'created_at' => '2020-07-22 12:58:58',
                'updated_at' => '2020-07-22 12:58:58',
            ),
            43 => 
            array (
                'id' => 44,
                'name' => 'Aut non sit.',
                'description' => 'Nihil numquam incidunt enim magni debitis quibusdam et doloremque officia esse quidem optio ab et voluptatem deleniti velit tempora.',
                'price' => '547.00',
                'cover_img' => NULL,
                'shop_id' => 2,
                'created_at' => '2020-07-22 12:58:58',
                'updated_at' => '2020-07-22 12:58:58',
            ),
            44 => 
            array (
                'id' => 45,
                'name' => 'Facilis nisi.',
                'description' => 'Alias voluptas magni et omnis sit et veniam soluta sit est magni perspiciatis nemo qui quae ducimus veritatis beatae perspiciatis.',
                'price' => '596.00',
                'cover_img' => NULL,
                'shop_id' => 2,
                'created_at' => '2020-07-22 12:58:58',
                'updated_at' => '2020-07-22 12:58:58',
            ),
            45 => 
            array (
                'id' => 46,
                'name' => 'Enim quas.',
                'description' => 'Et labore laboriosam qui eos quia perferendis rerum debitis iure minus odio dolorum ad totam inventore eligendi animi doloremque laudantium nesciunt magni.',
                'price' => '663.00',
                'cover_img' => NULL,
                'shop_id' => 3,
                'created_at' => '2020-07-22 12:58:58',
                'updated_at' => '2020-07-22 12:58:58',
            ),
            46 => 
            array (
                'id' => 47,
                'name' => 'Facere sint.',
                'description' => 'Deserunt ratione dignissimos nesciunt dolor sed eius qui tempora dolores ut debitis consequatur unde.',
                'price' => '764.00',
                'cover_img' => NULL,
                'shop_id' => 3,
                'created_at' => '2020-07-22 12:58:58',
                'updated_at' => '2020-07-22 12:58:58',
            ),
            47 => 
            array (
                'id' => 48,
                'name' => 'Dolores laudantium.',
                'description' => 'Recusandae nulla corrupti cupiditate iste nihil nesciunt atque et dignissimos rem suscipit qui saepe ut eos dolorem sit in quia tempore recusandae minus.',
                'price' => '154.00',
                'cover_img' => NULL,
                'shop_id' => 3,
                'created_at' => '2020-07-22 12:58:58',
                'updated_at' => '2020-07-22 12:58:58',
            ),
            48 => 
            array (
                'id' => 49,
                'name' => 'Quasi at.',
                'description' => 'Aliquam amet quasi quisquam qui omnis unde minima perspiciatis consectetur eveniet voluptatem cum et possimus enim non consequatur nihil.',
                'price' => '209.00',
                'cover_img' => NULL,
                'shop_id' => 2,
                'created_at' => '2020-07-22 12:58:58',
                'updated_at' => '2020-07-22 12:58:58',
            ),
            49 => 
            array (
                'id' => 50,
                'name' => 'Qui et.',
                'description' => 'Ea totam harum ut nam omnis ipsum quidem consectetur rerum recusandae maiores et voluptatem et consequatur praesentium eum id veritatis quia iste iure quisquam optio.',
                'price' => '970.00',
                'cover_img' => NULL,
                'shop_id' => 1,
                'created_at' => '2020-07-22 12:58:58',
                'updated_at' => '2020-07-22 12:58:58',
            ),
        ));
        
        
    }
}