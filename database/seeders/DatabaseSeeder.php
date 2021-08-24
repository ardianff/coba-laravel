<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => 'Ardian',
            'email' => 'arxd@gmail.com',
            'password' => bcrypt('12345')
        ]);
        User::create([
            'name' => 'Firmansyah',
            'email' => 'firman@gmail.com',
            'password' => bcrypt('12345')
        ]);
        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);
        Category::create([
            'name' => 'Design',
            'slug' => 'design'
        ]);
        Category::create([
            'name' => 'Berita',
            'slug' => 'berita'
        ]);
        Category::create([
            'name' => 'Teknologi',
            'slug' => 'teknologi'
        ]);

        Post::create([
            'title'=>'Judul Pertama',
            'category_id'=>1,
            'user_id'=>1,
            'slug'=>'judul-pertama',
            'excerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde harum eius magnam voluptatum. Praesentium
            tempora excepturi saepe obcaecati pariatur est!',
            'body'=>'<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae rem unde itaque, aliquam, nesciunt libero,
                quidem sunt cum magnam minus illum! Minus sint praesentium quas culpa et reiciendis, eveniet, temporibus, possimus
                voluptas voluptatem veniam voluptates labore incidunt veritatis. Voluptatem eveniet non neque qui laboriosam est
                ipsa voluptas eum. Dolor
            e quos voluptate blanditiis illum, mollitia architecto cumque accusantium fugiat quo.
                Blanditiis corporis ratione vitae enim, aut dolores amet eius delectus id recusandae. Expedita, aut maxime
                architecto error dolorem placeat tempore cupiditate nesciunt quibusdam reiciendis hic officiis ratione sed esse
                modi? Suscipit ipsum nihil est dolorem accusantium sit, iusto, ab sed aut impedit voluptatem. Cumque tempore
                deleniti impedit aspernatur perferendis reiciendis assumenda illo. Placeat, quis neque in ab cumque doloribus maxime
                earum numquam. Iure dolore vel, corrupti cupiditate rerum odit soluta veritatis sed tempore quasi consequuntur
                pariatur molestias officiis placeat, explicabo expedita necessitatibus, delectus facere veniam alias atque incidunt!
                Molestias perferendis ut deserunt pariatur magnam molestiae mollitia reiciendis possimus eum earum! Minus aliquid
                itaque fugiat. Distinctio natus temporibus tenetur, nulla porro deserunt facilis voluptatem esse nisi corporis
                quisquam soluta repellendus nemo ratione. Quisquam sapiente dignissimos rerum, ratione maxime velit commodi odio,
                fuga maiores culpa quia aliquam vero. Reprehenderit officiis commodi officia. Minima!</p>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio laboriosam dolorem deleniti doloremque
                similique! Eum temporibus, quia minus, perspiciatis pariatur est officia nihil cumque molestias saepe, doloremque
                exercitationem mollitia dolorem eveniet repudiandae atque adipisci modi repellendus debitis suscipit inventore? Amet
                placeat voluptas voluptatum quidem hic! Labore molestiae harum ab nostrum, fugiat praesentium. Cum ea, officia
                commodi dolorem ratione velit labore non cumque ducimus officiis dolore ipsam qui provident reprehenderit enim
                reiciendis animi delectus possimus assumenda! Laborum ducimus aliquid eius itaque inventore dolore amet voluptas ab
                eaque nemo recusandae voluptatum facere autem natus veniam, aliquam tempora culpa tempore debitis, deserunt soluta
                perferendis nam! Sit vero labore, laborum fugiat doloribus excepturi deleniti quibusdam sed consectetur placeat
                suscipit nostrum perspiciatis eveniet harum explicabo atque, fuga veniam numquam magni animi non. Aperiam dolore
                harum obcaecati, dicta minus, accusamus vero voluptatibus temporibus delectus est quibusdam molestias nostrum alias
                non, ad et illum eos mollitia impedit incidunt culpa? Voluptate suscipit voluptatum est quidem perspiciatis error
                debitis a deleniti reprehenderit praesentium vitae corporis itaque odit officiis molestiae nam accusamus sed rem,
                rerum dolore maiores cupiditate impedit fugiat sapiente? Consequatur ad expedita aliquam vel doloribus veritatis,
                sunt nostrum ducimus maxime id a perferendis tenetur itaque nam odio rerum qui minus ipsum quis quaerat alias atque
                similique iusto. Explicabo facere obcaecati error hic illo quasi excepturi in ullam itaque sit architecto, quis esse
                non quae impedit. Impedit commodi, sed obcaecati, eveniet fuga laborum inventore quis animi illo aut officiis eum
                quam recusandae. Aperiam est vitae sequi ullam, repellat animi.</p>'
            ]);
        Post::create([
            'title'=>'Judul Kedua',
            'category_id'=>2,
            'user_id'=>2,
            'slug'=>'judul-kedua',
            'excerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde harum eius magnam voluptatum. Praesentium
            tempora excepturi saepe obcaecati pariatur est!',
            'body'=>'<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae rem unde itaque, aliquam, nesciunt libero,
                quidem sunt cum magnam minus illum! Minus sint praesentium quas culpa et reiciendis, eveniet, temporibus, possimus
                voluptas voluptatem veniam voluptates labore incidunt veritatis. Voluptatem eveniet non neque qui laboriosam est
                ipsa voluptas eum. Dolor
            e quos voluptate blanditiis illum, mollitia architecto cumque accusantium fugiat quo.
                Blanditiis corporis ratione vitae enim, aut dolores amet eius delectus id recusandae. Expedita, aut maxime
                architecto error dolorem placeat tempore cupiditate nesciunt quibusdam reiciendis hic officiis ratione sed esse
                modi? Suscipit ipsum nihil est dolorem accusantium sit, iusto, ab sed aut impedit voluptatem. Cumque tempore
                deleniti impedit aspernatur perferendis reiciendis assumenda illo. Placeat, quis neque in ab cumque doloribus maxime
                earum numquam. Iure dolore vel, corrupti cupiditate rerum odit soluta veritatis sed tempore quasi consequuntur
                pariatur molestias officiis placeat, explicabo expedita necessitatibus, delectus facere veniam alias atque incidunt!
                Molestias perferendis ut deserunt pariatur magnam molestiae mollitia reiciendis possimus eum earum! Minus aliquid
                itaque fugiat. Distinctio natus temporibus tenetur, nulla porro deserunt facilis voluptatem esse nisi corporis
                quisquam soluta repellendus nemo ratione. Quisquam sapiente dignissimos rerum, ratione maxime velit commodi odio,
                fuga maiores culpa quia aliquam vero. Reprehenderit officiis commodi officia. Minima!</p>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio laboriosam dolorem deleniti doloremque
                similique! Eum temporibus, quia minus, perspiciatis pariatur est officia nihil cumque molestias saepe, doloremque
                exercitationem mollitia dolorem eveniet repudiandae atque adipisci modi repellendus debitis suscipit inventore? Amet
                placeat voluptas voluptatum quidem hic! Labore molestiae harum ab nostrum, fugiat praesentium. Cum ea, officia
                commodi dolorem ratione velit labore non cumque ducimus officiis dolore ipsam qui provident reprehenderit enim
                reiciendis animi delectus possimus assumenda! Laborum ducimus aliquid eius itaque inventore dolore amet voluptas ab
                eaque nemo recusandae voluptatum facere autem natus veniam, aliquam tempora culpa tempore debitis, deserunt soluta
                perferendis nam! Sit vero labore, laborum fugiat doloribus excepturi deleniti quibusdam sed consectetur placeat
                suscipit nostrum perspiciatis eveniet harum explicabo atque, fuga veniam numquam magni animi non. Aperiam dolore
                harum obcaecati, dicta minus, accusamus vero voluptatibus temporibus delectus est quibusdam molestias nostrum alias
                non, ad et illum eos mollitia impedit incidunt culpa? Voluptate suscipit voluptatum est quidem perspiciatis error
                debitis a deleniti reprehenderit praesentium vitae corporis itaque odit officiis molestiae nam accusamus sed rem,
                rerum dolore maiores cupiditate impedit fugiat sapiente? Consequatur ad expedita aliquam vel doloribus veritatis,
                sunt nostrum ducimus maxime id a perferendis tenetur itaque nam odio rerum qui minus ipsum quis quaerat alias atque
                similique iusto. Explicabo facere obcaecati error hic illo quasi excepturi in ullam itaque sit architecto, quis esse
                non quae impedit. Impedit commodi, sed obcaecati, eveniet fuga laborum inventore quis animi illo aut officiis eum
                quam recusandae. Aperiam est vitae sequi ullam, repellat animi.</p>'
            ]);
        Post::create([
            'title'=>'Judul Ketiga',
            'category_id'=>1,
            'user_id'=>1,
            'slug'=>'judul-ketiga',
            'excerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde harum eius magnam voluptatum. Praesentium
            tempora excepturi saepe obcaecati pariatur est!',
            'body'=>'<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae rem unde itaque, aliquam, nesciunt libero,
                quidem sunt cum magnam minus illum! Minus sint praesentium quas culpa et reiciendis, eveniet, temporibus, possimus
                voluptas voluptatem veniam voluptates labore incidunt veritatis. Voluptatem eveniet non neque qui laboriosam est
                ipsa voluptas eum. Dolor
            e quos voluptate blanditiis illum, mollitia architecto cumque accusantium fugiat quo.
                Blanditiis corporis ratione vitae enim, aut dolores amet eius delectus id recusandae. Expedita, aut maxime
                architecto error dolorem placeat tempore cupiditate nesciunt quibusdam reiciendis hic officiis ratione sed esse
                modi? Suscipit ipsum nihil est dolorem accusantium sit, iusto, ab sed aut impedit voluptatem. Cumque tempore
                deleniti impedit aspernatur perferendis reiciendis assumenda illo. Placeat, quis neque in ab cumque doloribus maxime
                earum numquam. Iure dolore vel, corrupti cupiditate rerum odit soluta veritatis sed tempore quasi consequuntur
                pariatur molestias officiis placeat, explicabo expedita necessitatibus, delectus facere veniam alias atque incidunt!
                Molestias perferendis ut deserunt pariatur magnam molestiae mollitia reiciendis possimus eum earum! Minus aliquid
                itaque fugiat. Distinctio natus temporibus tenetur, nulla porro deserunt facilis voluptatem esse nisi corporis
                quisquam soluta repellendus nemo ratione. Quisquam sapiente dignissimos rerum, ratione maxime velit commodi odio,
                fuga maiores culpa quia aliquam vero. Reprehenderit officiis commodi officia. Minima!</p>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio laboriosam dolorem deleniti doloremque
                similique! Eum temporibus, quia minus, perspiciatis pariatur est officia nihil cumque molestias saepe, doloremque
                exercitationem mollitia dolorem eveniet repudiandae atque adipisci modi repellendus debitis suscipit inventore? Amet
                placeat voluptas voluptatum quidem hic! Labore molestiae harum ab nostrum, fugiat praesentium. Cum ea, officia
                commodi dolorem ratione velit labore non cumque ducimus officiis dolore ipsam qui provident reprehenderit enim
                reiciendis animi delectus possimus assumenda! Laborum ducimus aliquid eius itaque inventore dolore amet voluptas ab
                eaque nemo recusandae voluptatum facere autem natus veniam, aliquam tempora culpa tempore debitis, deserunt soluta
                perferendis nam! Sit vero labore, laborum fugiat doloribus excepturi deleniti quibusdam sed consectetur placeat
                suscipit nostrum perspiciatis eveniet harum explicabo atque, fuga veniam numquam magni animi non. Aperiam dolore
                harum obcaecati, dicta minus, accusamus vero voluptatibus temporibus delectus est quibusdam molestias nostrum alias
                non, ad et illum eos mollitia impedit incidunt culpa? Voluptate suscipit voluptatum est quidem perspiciatis error
                debitis a deleniti reprehenderit praesentium vitae corporis itaque odit officiis molestiae nam accusamus sed rem,
                rerum dolore maiores cupiditate impedit fugiat sapiente? Consequatur ad expedita aliquam vel doloribus veritatis,
                sunt nostrum ducimus maxime id a perferendis tenetur itaque nam odio rerum qui minus ipsum quis quaerat alias atque
                similique iusto. Explicabo facere obcaecati error hic illo quasi excepturi in ullam itaque sit architecto, quis esse
                non quae impedit. Impedit commodi, sed obcaecati, eveniet fuga laborum inventore quis animi illo aut officiis eum
                quam recusandae. Aperiam est vitae sequi ullam, repellat animi.</p>'
            ]);
        Post::create([
            'title'=>'Judul Keempat',
            'category_id'=>2,
            'user_id'=>2,
            'slug'=>'judul-keempat',
            'excerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde harum eius magnam voluptatum. Praesentium
            tempora excepturi saepe obcaecati pariatur est!',
            'body'=>'<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae rem unde itaque, aliquam, nesciunt libero,
                quidem sunt cum magnam minus illum! Minus sint praesentium quas culpa et reiciendis, eveniet, temporibus, possimus
                voluptas voluptatem veniam voluptates labore incidunt veritatis. Voluptatem eveniet non neque qui laboriosam est
                ipsa voluptas eum. Dolor
            e quos voluptate blanditiis illum, mollitia architecto cumque accusantium fugiat quo.
                Blanditiis corporis ratione vitae enim, aut dolores amet eius delectus id recusandae. Expedita, aut maxime
                architecto error dolorem placeat tempore cupiditate nesciunt quibusdam reiciendis hic officiis ratione sed esse
                modi? Suscipit ipsum nihil est dolorem accusantium sit, iusto, ab sed aut impedit voluptatem. Cumque tempore
                deleniti impedit aspernatur perferendis reiciendis assumenda illo. Placeat, quis neque in ab cumque doloribus maxime
                earum numquam. Iure dolore vel, corrupti cupiditate rerum odit soluta veritatis sed tempore quasi consequuntur
                pariatur molestias officiis placeat, explicabo expedita necessitatibus, delectus facere veniam alias atque incidunt!
                Molestias perferendis ut deserunt pariatur magnam molestiae mollitia reiciendis possimus eum earum! Minus aliquid
                itaque fugiat. Distinctio natus temporibus tenetur, nulla porro deserunt facilis voluptatem esse nisi corporis
                quisquam soluta repellendus nemo ratione. Quisquam sapiente dignissimos rerum, ratione maxime velit commodi odio,
                fuga maiores culpa quia aliquam vero. Reprehenderit officiis commodi officia. Minima!</p>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio laboriosam dolorem deleniti doloremque
                similique! Eum temporibus, quia minus, perspiciatis pariatur est officia nihil cumque molestias saepe, doloremque
                exercitationem mollitia dolorem eveniet repudiandae atque adipisci modi repellendus debitis suscipit inventore? Amet
                placeat voluptas voluptatum quidem hic! Labore molestiae harum ab nostrum, fugiat praesentium. Cum ea, officia
                commodi dolorem ratione velit labore non cumque ducimus officiis dolore ipsam qui provident reprehenderit enim
                reiciendis animi delectus possimus assumenda! Laborum ducimus aliquid eius itaque inventore dolore amet voluptas ab
                eaque nemo recusandae voluptatum facere autem natus veniam, aliquam tempora culpa tempore debitis, deserunt soluta
                perferendis nam! Sit vero labore, laborum fugiat doloribus excepturi deleniti quibusdam sed consectetur placeat
                suscipit nostrum perspiciatis eveniet harum explicabo atque, fuga veniam numquam magni animi non. Aperiam dolore
                harum obcaecati, dicta minus, accusamus vero voluptatibus temporibus delectus est quibusdam molestias nostrum alias
                non, ad et illum eos mollitia impedit incidunt culpa? Voluptate suscipit voluptatum est quidem perspiciatis error
                debitis a deleniti reprehenderit praesentium vitae corporis itaque odit officiis molestiae nam accusamus sed rem,
                rerum dolore maiores cupiditate impedit fugiat sapiente? Consequatur ad expedita aliquam vel doloribus veritatis,
                sunt nostrum ducimus maxime id a perferendis tenetur itaque nam odio rerum qui minus ipsum quis quaerat alias atque
                similique iusto. Explicabo facere obcaecati error hic illo quasi excepturi in ullam itaque sit architecto, quis esse
                non quae impedit. Impedit commodi, sed obcaecati, eveniet fuga laborum inventore quis animi illo aut officiis eum
                quam recusandae. Aperiam est vitae sequi ullam, repellat animi.</p>'
            ]);
    }
}