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
                'name' => 'Doloremque molestiae aut.',
                'description' => 'Facere debitis veritatis autem assumenda sed sed at iure amet minus ullam aspernatur.',
                'price' => '287.00',
                'cover_img' => NULL,
                'shop_id' => 3,
                'created_at' => '2020-07-22 07:16:20',
                'updated_at' => '2020-07-22 07:16:20',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Debitis reiciendis odio.',
                'description' => 'Neque modi quae numquam et vero atque eos quia dolor rerum ducimus laudantium sunt.',
                'price' => '939.00',
                'cover_img' => NULL,
                'shop_id' => 3,
                'created_at' => '2020-07-22 07:16:20',
                'updated_at' => '2020-07-22 07:16:20',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Ea sit.',
                'description' => 'Dignissimos consequatur enim et harum fugiat quia repellat quidem possimus eos ipsa exercitationem aut id repudiandae vel est veritatis dicta.',
                'price' => '976.00',
                'cover_img' => NULL,
                'shop_id' => 3,
                'created_at' => '2020-07-22 07:16:20',
                'updated_at' => '2020-07-22 07:16:20',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Laborum neque non.',
                'description' => 'Maiores quia at porro et voluptatem rerum animi ut id provident sed perspiciatis dicta reprehenderit error recusandae sint veritatis animi itaque aspernatur velit qui omnis.',
                'price' => '314.00',
                'cover_img' => NULL,
                'shop_id' => 3,
                'created_at' => '2020-07-22 07:16:20',
                'updated_at' => '2020-07-22 07:16:20',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Consequatur voluptatem.',
                'description' => 'Laudantium eum et non aliquam odit alias dolor esse eaque aut voluptate iure sequi quia et reiciendis repudiandae autem voluptates ex earum a alias repudiandae deleniti.',
                'price' => '712.00',
                'cover_img' => NULL,
                'shop_id' => 3,
                'created_at' => '2020-07-22 07:16:20',
                'updated_at' => '2020-07-22 07:16:20',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Voluptas rem.',
                'description' => 'Impedit omnis rerum possimus molestiae aliquid eos ut atque provident ullam eum consequuntur ut exercitationem.',
                'price' => '239.00',
                'cover_img' => NULL,
                'shop_id' => 1,
                'created_at' => '2020-07-22 07:16:20',
                'updated_at' => '2020-07-22 07:16:20',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Distinctio sint.',
                'description' => 'Quos rerum non non reprehenderit ut sit autem molestiae repellat voluptatem velit corporis debitis nisi dolore doloribus ut facere doloribus officia commodi quos autem qui.',
                'price' => '844.00',
                'cover_img' => NULL,
                'shop_id' => 3,
                'created_at' => '2020-07-22 07:16:21',
                'updated_at' => '2020-07-22 07:16:21',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Et a fuga.',
                'description' => 'Sit ut esse et modi fugit et et repellendus optio non unde tempore praesentium sunt modi occaecati in incidunt temporibus deleniti accusamus vitae.',
                'price' => '415.00',
                'cover_img' => NULL,
                'shop_id' => 1,
                'created_at' => '2020-07-22 07:16:21',
                'updated_at' => '2020-07-22 07:16:21',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Earum labore.',
                'description' => 'Distinctio qui veniam ut molestias deleniti magnam delectus atque laudantium dolores et dolore.',
                'price' => '303.00',
                'cover_img' => NULL,
                'shop_id' => 2,
                'created_at' => '2020-07-22 07:16:21',
                'updated_at' => '2020-07-22 07:16:21',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Ea et qui.',
                'description' => 'Dolor officia asperiores est distinctio quos et magnam omnis molestiae deleniti rem quibusdam molestiae qui sint adipisci rerum temporibus quod consequuntur est magni consectetur.',
                'price' => '604.00',
                'cover_img' => NULL,
                'shop_id' => 3,
                'created_at' => '2020-07-22 07:16:21',
                'updated_at' => '2020-07-22 07:16:21',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Est debitis et.',
                'description' => 'Recusandae reprehenderit voluptas error at error quos qui qui aut et voluptatibus aspernatur molestiae et accusantium sunt repellat soluta nemo dolores aut quia non commodi.',
                'price' => '871.00',
                'cover_img' => NULL,
                'shop_id' => 2,
                'created_at' => '2020-07-22 07:16:21',
                'updated_at' => '2020-07-22 07:16:21',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Id praesentium.',
                'description' => 'Possimus suscipit unde impedit qui alias repudiandae quam qui adipisci fugiat a eius repudiandae quaerat ducimus facere voluptas adipisci provident quia nemo sit labore.',
                'price' => '233.00',
                'cover_img' => NULL,
                'shop_id' => 1,
                'created_at' => '2020-07-22 07:16:21',
                'updated_at' => '2020-07-22 07:16:21',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Rerum quia.',
                'description' => 'Voluptate aspernatur consequatur dolorem est ut perspiciatis qui repellendus aspernatur ipsum blanditiis tenetur in velit alias ipsum amet omnis.',
                'price' => '425.00',
                'cover_img' => NULL,
                'shop_id' => 3,
                'created_at' => '2020-07-22 07:16:21',
                'updated_at' => '2020-07-22 07:16:21',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Ducimus quos quam.',
                'description' => 'Sit accusantium et voluptate commodi rem commodi at error et explicabo consequatur excepturi sapiente ea distinctio.',
                'price' => '631.00',
                'cover_img' => NULL,
                'shop_id' => 3,
                'created_at' => '2020-07-22 07:16:21',
                'updated_at' => '2020-07-22 07:16:21',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Sit est.',
                'description' => 'Laborum aut rerum ullam odit reiciendis quibusdam et voluptas voluptatibus tempora praesentium eos illo aut delectus quis.',
                'price' => '556.00',
                'cover_img' => NULL,
                'shop_id' => 2,
                'created_at' => '2020-07-22 07:16:21',
                'updated_at' => '2020-07-22 07:16:21',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'At quos est.',
                'description' => 'Alias totam assumenda sint sunt iure illum dicta assumenda placeat occaecati dolorum aut et placeat commodi unde beatae reprehenderit velit voluptatibus qui eos aliquam nihil fugiat ullam voluptatem illo.',
                'price' => '440.00',
                'cover_img' => NULL,
                'shop_id' => 2,
                'created_at' => '2020-07-22 07:16:22',
                'updated_at' => '2020-07-22 07:16:22',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Est esse.',
                'description' => 'Earum sunt cum consequuntur in non assumenda voluptas repudiandae consectetur sed ut facilis architecto minus sed.',
                'price' => '534.00',
                'cover_img' => NULL,
                'shop_id' => 3,
                'created_at' => '2020-07-22 07:16:22',
                'updated_at' => '2020-07-22 07:16:22',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Nisi quaerat.',
                'description' => 'Voluptatem nisi atque molestiae quaerat itaque a laborum aut veniam id delectus quos voluptate adipisci dolore facere accusamus tempora nisi porro provident molestiae aut eum ea qui.',
                'price' => '322.00',
                'cover_img' => NULL,
                'shop_id' => 3,
                'created_at' => '2020-07-22 07:16:22',
                'updated_at' => '2020-07-22 07:16:22',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Laborum laboriosam.',
                'description' => 'Dicta ullam saepe voluptatem alias ad hic sint ea quis perferendis id dolores rerum perferendis est quas harum ipsam magnam eius accusantium temporibus architecto blanditiis et quo.',
                'price' => '297.00',
                'cover_img' => NULL,
                'shop_id' => 3,
                'created_at' => '2020-07-22 07:16:22',
                'updated_at' => '2020-07-22 07:16:22',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Asperiores nesciunt aut.',
                'description' => 'Assumenda ut repellendus et eos necessitatibus cum officiis illum dolore autem vel sint.',
                'price' => '554.00',
                'cover_img' => NULL,
                'shop_id' => 1,
                'created_at' => '2020-07-22 07:16:22',
                'updated_at' => '2020-07-22 07:16:22',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Aut molestias.',
                'description' => 'Quo non recusandae laudantium iusto labore nisi ratione praesentium esse voluptates quia voluptatem nisi.',
                'price' => '205.00',
                'cover_img' => NULL,
                'shop_id' => 1,
                'created_at' => '2020-07-22 07:16:22',
                'updated_at' => '2020-07-22 07:16:22',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Iusto dolorum.',
                'description' => 'Aut cum ut ratione nemo placeat dignissimos illum fugiat id iusto placeat odio et sit impedit.',
                'price' => '270.00',
                'cover_img' => NULL,
                'shop_id' => 1,
                'created_at' => '2020-07-22 07:16:22',
                'updated_at' => '2020-07-22 07:16:22',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'Laboriosam veritatis.',
                'description' => 'Optio est placeat fuga fugiat ut velit officiis amet hic ut reiciendis ut laborum ut quibusdam ea recusandae eum molestiae aliquam assumenda.',
                'price' => '472.00',
                'cover_img' => NULL,
                'shop_id' => 2,
                'created_at' => '2020-07-22 07:16:22',
                'updated_at' => '2020-07-22 07:16:22',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'Quia laborum consectetur.',
                'description' => 'Voluptatibus commodi magnam aut omnis amet sunt earum nihil ad distinctio dolorem provident necessitatibus recusandae.',
                'price' => '373.00',
                'cover_img' => NULL,
                'shop_id' => 2,
                'created_at' => '2020-07-22 07:16:22',
                'updated_at' => '2020-07-22 07:16:22',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'Repellendus aliquid quibusdam.',
                'description' => 'Quo unde ad ratione dolores illo aperiam iure possimus est pariatur deserunt ut id vel inventore sed sunt eos.',
                'price' => '532.00',
                'cover_img' => NULL,
                'shop_id' => 2,
                'created_at' => '2020-07-22 07:16:22',
                'updated_at' => '2020-07-22 07:16:22',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'Velit saepe.',
                'description' => 'Ullam ut ab sint quae quae accusamus qui reiciendis molestiae provident aut sed repellendus illum impedit officia saepe cupiditate consequatur unde asperiores officiis et et repellendus voluptas ut.',
                'price' => '106.00',
                'cover_img' => NULL,
                'shop_id' => 3,
                'created_at' => '2020-07-22 07:16:22',
                'updated_at' => '2020-07-22 07:16:22',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'Recusandae sed.',
                'description' => 'Ipsam eius iusto ut explicabo illo consequatur earum et quo autem qui et ipsum architecto saepe est error quo molestias.',
                'price' => '241.00',
                'cover_img' => NULL,
                'shop_id' => 1,
                'created_at' => '2020-07-22 07:16:22',
                'updated_at' => '2020-07-22 07:16:22',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'In et.',
                'description' => 'Aspernatur et commodi consequatur alias totam rem id distinctio quaerat necessitatibus aut qui quisquam cum beatae eos nemo iste soluta eos et minima.',
                'price' => '453.00',
                'cover_img' => NULL,
                'shop_id' => 1,
                'created_at' => '2020-07-22 07:16:22',
                'updated_at' => '2020-07-22 07:16:22',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'Doloremque porro.',
                'description' => 'Id optio dolor ut dignissimos praesentium eius voluptatem est quo et error autem officiis vel similique suscipit id quam consequuntur ut sunt aliquid sed qui non impedit qui.',
                'price' => '438.00',
                'cover_img' => NULL,
                'shop_id' => 3,
                'created_at' => '2020-07-22 07:16:23',
                'updated_at' => '2020-07-22 07:16:23',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'Non qui est.',
                'description' => 'Blanditiis modi consequatur temporibus et qui et non rerum eum quo ex est et delectus assumenda dicta nobis aut et quae enim id adipisci est nam quia quos.',
                'price' => '840.00',
                'cover_img' => NULL,
                'shop_id' => 3,
                'created_at' => '2020-07-22 07:16:23',
                'updated_at' => '2020-07-22 07:16:23',
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'Quo id voluptatibus.',
                'description' => 'Iste repellat voluptatem vero nobis dolores quos et officia ut rerum aut ea ut accusantium illo rerum ea animi a fugiat dolorem id excepturi quae consectetur et.',
                'price' => '493.00',
                'cover_img' => NULL,
                'shop_id' => 3,
                'created_at' => '2020-07-22 07:16:23',
                'updated_at' => '2020-07-22 07:16:23',
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'Reprehenderit ducimus.',
                'description' => 'Similique mollitia exercitationem nesciunt eligendi iste possimus sit aut eum doloremque dignissimos dolorem quisquam rerum dolores delectus ducimus vel et sunt blanditiis magnam facilis.',
                'price' => '902.00',
                'cover_img' => NULL,
                'shop_id' => 1,
                'created_at' => '2020-07-22 07:16:23',
                'updated_at' => '2020-07-22 07:16:23',
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'Eum excepturi aliquid.',
                'description' => 'Et consectetur rem nesciunt aspernatur est porro non quas molestias veritatis et sint nisi possimus hic est quisquam sint et voluptatem.',
                'price' => '735.00',
                'cover_img' => NULL,
                'shop_id' => 2,
                'created_at' => '2020-07-22 07:16:23',
                'updated_at' => '2020-07-22 07:16:23',
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'Aut consequatur et.',
                'description' => 'Quis iste neque qui nostrum laudantium incidunt consequatur sequi quo quas sed omnis mollitia esse et sequi consectetur in reprehenderit dolorum.',
                'price' => '135.00',
                'cover_img' => NULL,
                'shop_id' => 3,
                'created_at' => '2020-07-22 07:16:23',
                'updated_at' => '2020-07-22 07:16:23',
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'Reiciendis tempore.',
                'description' => 'Architecto debitis sapiente aperiam impedit corporis est suscipit autem ut sint ab perferendis id voluptates eos autem architecto ex omnis dicta asperiores repellat.',
                'price' => '572.00',
                'cover_img' => NULL,
                'shop_id' => 1,
                'created_at' => '2020-07-22 07:16:23',
                'updated_at' => '2020-07-22 07:16:23',
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'Quia tenetur tempore.',
                'description' => 'Quis recusandae autem saepe aliquam saepe iusto quisquam qui rem maiores magni dolor quo similique blanditiis ut.',
                'price' => '120.00',
                'cover_img' => NULL,
                'shop_id' => 3,
                'created_at' => '2020-07-22 07:16:23',
                'updated_at' => '2020-07-22 07:16:23',
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'Commodi quia fugiat.',
                'description' => 'Qui officiis sequi quia perspiciatis possimus vero optio recusandae voluptas itaque ad reprehenderit dolor nemo vel eum eligendi aut commodi officia.',
                'price' => '562.00',
                'cover_img' => NULL,
                'shop_id' => 2,
                'created_at' => '2020-07-22 07:16:23',
                'updated_at' => '2020-07-22 07:16:23',
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'Et deserunt.',
                'description' => 'Consequatur et rerum in sunt et quaerat ex ut impedit blanditiis voluptatem itaque labore reiciendis rerum qui est architecto molestias atque autem ea ut.',
                'price' => '745.00',
                'cover_img' => NULL,
                'shop_id' => 3,
                'created_at' => '2020-07-22 07:16:23',
                'updated_at' => '2020-07-22 07:16:23',
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'Labore praesentium fugit.',
                'description' => 'Qui iure autem ab consequatur ea quia ab voluptatem voluptates asperiores non officia est nobis excepturi.',
                'price' => '155.00',
                'cover_img' => NULL,
                'shop_id' => 1,
                'created_at' => '2020-07-22 07:16:23',
                'updated_at' => '2020-07-22 07:16:23',
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'Ut aut id.',
                'description' => 'Placeat neque voluptatum inventore dolorem quo accusamus consequuntur vero laboriosam non nihil numquam libero totam voluptate eum cum consectetur provident aut unde eum minima rerum quae soluta.',
                'price' => '148.00',
                'cover_img' => NULL,
                'shop_id' => 1,
                'created_at' => '2020-07-22 07:16:23',
                'updated_at' => '2020-07-22 07:16:23',
            ),
            40 => 
            array (
                'id' => 41,
                'name' => 'Minima est et.',
                'description' => 'Amet voluptas deleniti culpa in rem voluptas veniam et ducimus nisi voluptatibus consequatur in omnis.',
                'price' => '599.00',
                'cover_img' => NULL,
                'shop_id' => 3,
                'created_at' => '2020-07-22 07:16:23',
                'updated_at' => '2020-07-22 07:16:23',
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'Earum aut aut.',
                'description' => 'Sed porro corrupti at beatae incidunt sed qui nostrum itaque aut consequuntur rerum libero placeat aspernatur nihil eius.',
                'price' => '340.00',
                'cover_img' => NULL,
                'shop_id' => 2,
                'created_at' => '2020-07-22 07:16:23',
                'updated_at' => '2020-07-22 07:16:23',
            ),
            42 => 
            array (
                'id' => 43,
                'name' => 'Veniam blanditiis.',
                'description' => 'Hic voluptas consectetur ut et consequatur est vel nihil esse nihil totam corrupti rerum.',
                'price' => '747.00',
                'cover_img' => NULL,
                'shop_id' => 1,
                'created_at' => '2020-07-22 07:16:24',
                'updated_at' => '2020-07-22 07:16:24',
            ),
            43 => 
            array (
                'id' => 44,
                'name' => 'Esse nulla.',
                'description' => 'Molestias accusamus ex et expedita velit voluptatem vel eum et consequatur qui id quia neque dolorem sint cupiditate sit recusandae sed alias culpa in dolorem nostrum qui suscipit laboriosam.',
                'price' => '286.00',
                'cover_img' => NULL,
                'shop_id' => 1,
                'created_at' => '2020-07-22 07:16:24',
                'updated_at' => '2020-07-22 07:16:24',
            ),
            44 => 
            array (
                'id' => 45,
                'name' => 'Cum nesciunt.',
                'description' => 'Quibusdam sint et sed fugiat dolor assumenda et perferendis reprehenderit libero consequuntur repellat aliquam optio voluptate perferendis quidem possimus dolor aut.',
                'price' => '580.00',
                'cover_img' => NULL,
                'shop_id' => 1,
                'created_at' => '2020-07-22 07:16:24',
                'updated_at' => '2020-07-22 07:16:24',
            ),
            45 => 
            array (
                'id' => 46,
                'name' => 'Tenetur praesentium.',
                'description' => 'Architecto excepturi fugiat debitis soluta ut rem minus dolore ea minus aperiam dolores rem dolores et architecto veniam voluptas eos autem id hic.',
                'price' => '184.00',
                'cover_img' => NULL,
                'shop_id' => 2,
                'created_at' => '2020-07-22 07:16:24',
                'updated_at' => '2020-07-22 07:16:24',
            ),
            46 => 
            array (
                'id' => 47,
                'name' => 'Est dolores omnis.',
                'description' => 'Optio quo eos est id dolorum est nisi ex iure adipisci eius dolore nulla doloribus aut.',
                'price' => '692.00',
                'cover_img' => NULL,
                'shop_id' => 1,
                'created_at' => '2020-07-22 07:16:24',
                'updated_at' => '2020-07-22 07:16:24',
            ),
            47 => 
            array (
                'id' => 48,
                'name' => 'Dolor sit.',
                'description' => 'Quis consectetur deserunt ut velit possimus blanditiis animi rerum fugit porro vitae in.',
                'price' => '639.00',
                'cover_img' => NULL,
                'shop_id' => 3,
                'created_at' => '2020-07-22 07:16:24',
                'updated_at' => '2020-07-22 07:16:24',
            ),
            48 => 
            array (
                'id' => 49,
                'name' => 'Consequuntur fugit fugit.',
                'description' => 'Magnam voluptatum dignissimos sint architecto natus nam nobis vel quia qui deleniti et ipsa ipsam modi explicabo quidem facere suscipit rerum eum laudantium officiis soluta rerum.',
                'price' => '886.00',
                'cover_img' => NULL,
                'shop_id' => 3,
                'created_at' => '2020-07-22 07:16:24',
                'updated_at' => '2020-07-22 07:16:24',
            ),
            49 => 
            array (
                'id' => 50,
                'name' => 'In magni adipisci.',
                'description' => 'Qui consectetur deserunt velit earum qui ex modi a eos deleniti voluptate et cupiditate eos.',
                'price' => '503.00',
                'cover_img' => NULL,
                'shop_id' => 2,
                'created_at' => '2020-07-22 07:16:24',
                'updated_at' => '2020-07-22 07:16:24',
            ),
        ));
        
        
    }
}