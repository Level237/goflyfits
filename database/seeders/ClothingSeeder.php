<?php

namespace Database\Seeders;

use App\Models\Clothing;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClothingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Clothing::create([
            "title"=>"clothing1",
            'description'=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta sunt neque, et, obcaecati repellendus velit ratione aliquid facilis sequi quisquam voluptatibus optio nisi perspiciatis repellat nostrum tempora fugit dolores quae.",
            "price"=>"45",
            "size"=>"L",
            "town_id"=>1,
            'slug'=>"clothing1",
            "clothing_profile"=>"clothings/clothings1.jpg",
        ]);

        Clothing::create([
            "title"=>"clothing2",
            'description'=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta sunt neque, et, obcaecati repellendus velit ratione aliquid facilis sequi quisquam voluptatibus optio nisi perspiciatis repellat nostrum tempora fugit dolores quae.",
            "price"=>"55",
            "size"=>"M",
            "town_id"=>1,
            'slug'=>"clothing2",
            "clothing_profile"=>"clothings/clothings2.jpg",
        ]);

        Clothing::create([
            "title"=>"clothing3",
            'description'=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta sunt neque, et, obcaecati repellendus velit ratione aliquid facilis sequi quisquam voluptatibus optio nisi perspiciatis repellat nostrum tempora fugit dolores quae.",
            "price"=>"85",
            "size"=>"XL",
            "town_id"=>1,
            'slug'=>"clothing3",
            "clothing_profile"=>"clothings/clothings3.jpg",
        ]);
        Clothing::create([
            "title"=>"clothing4",
            'description'=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta sunt neque, et, obcaecati repellendus velit ratione aliquid facilis sequi quisquam voluptatibus optio nisi perspiciatis repellat nostrum tempora fugit dolores quae.",
            "price"=>"45",
            "size"=>"XL",
            "town_id"=>2,
            'slug'=>"clothing4",
            "clothing_profile"=>"clothings/clothings4.jpg",
        ]);

        Clothing::create([
            "title"=>"clothing5",
            'description'=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta sunt neque, et, obcaecati repellendus velit ratione aliquid facilis sequi quisquam voluptatibus optio nisi perspiciatis repellat nostrum tempora fugit dolores quae.",
            "price"=>"75",
            "size"=>"XL",
            "town_id"=>2,
            'slug'=>"clothing5",
            "clothing_profile"=>"clothings/clothings5.jpg",
        ]);

        Clothing::create([
            "title"=>"clothing6",
            'description'=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta sunt neque, et, obcaecati repellendus velit ratione aliquid facilis sequi quisquam voluptatibus optio nisi perspiciatis repellat nostrum tempora fugit dolores quae.",
            "price"=>"55",
            "size"=>"XL",
            "town_id"=>2,
            'slug'=>"clothing6",
            "clothing_profile"=>"clothings/clothings6.jpg",
        ]);

        Clothing::create([
            "title"=>"clothing7",
            'description'=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta sunt neque, et, obcaecati repellendus velit ratione aliquid facilis sequi quisquam voluptatibus optio nisi perspiciatis repellat nostrum tempora fugit dolores quae.",
            "price"=>"85",
            "size"=>"XL",
            "town_id"=>1,
            'slug'=>"clothing7",
            "clothing_profile"=>"clothings/clothings7.jpg",
        ]);

        Clothing::create([
            "title"=>"clothing8",
            'description'=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta sunt neque, et, obcaecati repellendus velit ratione aliquid facilis sequi quisquam voluptatibus optio nisi perspiciatis repellat nostrum tempora fugit dolores quae.",
            "price"=>"95",
            "size"=>"XL",
            "town_id"=>2,
            'slug'=>"clothing8",
            "clothing_profile"=>"clothings/clothings8.jpg",
        ]);

        Clothing::create([
            "title"=>"clothing9",
            'description'=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta sunt neque, et, obcaecati repellendus velit ratione aliquid facilis sequi quisquam voluptatibus optio nisi perspiciatis repellat nostrum tempora fugit dolores quae.",
            "price"=>"75",
            "size"=>"M",
            "town_id"=>2,
            'slug'=>"clothing9",
            "clothing_profile"=>"clothings/clothings9.jpg",
        ]);

        Clothing::create([
            "title"=>"clothing10",
            'description'=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta sunt neque, et, obcaecati repellendus velit ratione aliquid facilis sequi quisquam voluptatibus optio nisi perspiciatis repellat nostrum tempora fugit dolores quae.",
            "price"=>"47",
            "size"=>"XL",
            "town_id"=>2,
            'slug'=>"clothing10",
            "clothing_profile"=>"clothings/clothings10.jpg",
        ]);

        Clothing::create([
            "title"=>"clothing11",
            'description'=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta sunt neque, et, obcaecati repellendus velit ratione aliquid facilis sequi quisquam voluptatibus optio nisi perspiciatis repellat nostrum tempora fugit dolores quae.",
            "price"=>"45",
            "size"=>"M",
            "town_id"=>2,
            'slug'=>"clothing11",
            "clothing_profile"=>"clothings/clothings11.jpg",
        ]);

        Clothing::create([
            "title"=>"clothing12",
            'description'=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta sunt neque, et, obcaecati repellendus velit ratione aliquid facilis sequi quisquam voluptatibus optio nisi perspiciatis repellat nostrum tempora fugit dolores quae.",
            "price"=>"86",
            "size"=>"L",
            "town_id"=>2,
            'slug'=>"clothing12",
            "clothing_profile"=>"clothings/clothings12.jpg",
        ]);
        Clothing::create([
            "title"=>"clothing13",
            'description'=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta sunt neque, et, obcaecati repellendus velit ratione aliquid facilis sequi quisquam voluptatibus optio nisi perspiciatis repellat nostrum tempora fugit dolores quae.",
            "price"=>"45",
            "size"=>"XL",
            "town_id"=>2,
            'slug'=>"clothing13",
            "clothing_profile"=>"clothings/clothings13.jpg",
        ]);

        Clothing::create([
            "title"=>"clothing14",
            'description'=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta sunt neque, et, obcaecati repellendus velit ratione aliquid facilis sequi quisquam voluptatibus optio nisi perspiciatis repellat nostrum tempora fugit dolores quae.",
            "price"=>"85",
            "size"=>"L",
            "town_id"=>2,
            'slug'=>"clothing14",
            "clothing_profile"=>"clothings/clothings14.jpg",
        ]);

        Clothing::create([
            "title"=>"clothing15",
            'description'=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta sunt neque, et, obcaecati repellendus velit ratione aliquid facilis sequi quisquam voluptatibus optio nisi perspiciatis repellat nostrum tempora fugit dolores quae.",
            "price"=>"67",
            "size"=>"M",
            "town_id"=>2,
            'slug'=>"clothing15",
            "clothing_profile"=>"clothings/clothings15.jpg",
        ]);

        Clothing::create([
            "title"=>"clothing16",
            'description'=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta sunt neque, et, obcaecati repellendus velit ratione aliquid facilis sequi quisquam voluptatibus optio nisi perspiciatis repellat nostrum tempora fugit dolores quae.",
            "price"=>"45",
            "size"=>"XL",
            "town_id"=>2,
            'slug'=>"clothing16",
            "clothing_profile"=>"clothings/clothings16.jpg",
        ]);

        Clothing::create([
            "title"=>"clothing17",
            'description'=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta sunt neque, et, obcaecati repellendus velit ratione aliquid facilis sequi quisquam voluptatibus optio nisi perspiciatis repellat nostrum tempora fugit dolores quae.",
            "price"=>"85",
            "size"=>"L",
            "town_id"=>2,
            'slug'=>"clothing17",
            "clothing_profile"=>"clothings/clothings17.jpg",
        ]);

        Clothing::create([
            "title"=>"clothing18",
            'description'=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta sunt neque, et, obcaecati repellendus velit ratione aliquid facilis sequi quisquam voluptatibus optio nisi perspiciatis repellat nostrum tempora fugit dolores quae.",
            "price"=>"78",
            "size"=>"L",
            "town_id"=>2,
            'slug'=>"clothing18",
            "clothing_profile"=>"clothings/clothings18.jpg",
        ]);

        Clothing::create([
            "title"=>"clothing19",
            'description'=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta sunt neque, et, obcaecati repellendus velit ratione aliquid facilis sequi quisquam voluptatibus optio nisi perspiciatis repellat nostrum tempora fugit dolores quae.",
            "price"=>"78",
            "size"=>"M",
            "town_id"=>2,
            'slug'=>"clothing19",
            "clothing_profile"=>"clothings/clothings19.jpg",
        ]);

        Clothing::create([
            "title"=>"clothing20",
            'description'=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta sunt neque, et, obcaecati repellendus velit ratione aliquid facilis sequi quisquam voluptatibus optio nisi perspiciatis repellat nostrum tempora fugit dolores quae.",
            "price"=>"45",
            "size"=>"XXL",
            "town_id"=>1,
            'slug'=>"clothing20",
            "clothing_profile"=>"clothings/clothings20.jpg",
        ]);

        Clothing::create([
            "title"=>"clothing21",
            'description'=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta sunt neque, et, obcaecati repellendus velit ratione aliquid facilis sequi quisquam voluptatibus optio nisi perspiciatis repellat nostrum tempora fugit dolores quae.",
            "price"=>"19",
            "size"=>"XL",
            "town_id"=>1,
            'slug'=>"clothing21",
            "clothing_profile"=>"clothings/clothings21.jpg",
        ]);

        Clothing::create([
            "title"=>"clothing22",
            'description'=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta sunt neque, et, obcaecati repellendus velit ratione aliquid facilis sequi quisquam voluptatibus optio nisi perspiciatis repellat nostrum tempora fugit dolores quae.",
            "price"=>"45",
            "size"=>"L",
            "town_id"=>1,
            'slug'=>"clothing22",
            "clothing_profile"=>"clothings/clothings22.jpg",
        ]);

        Clothing::create([
            "title"=>"clothing23",
            'description'=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta sunt neque, et, obcaecati repellendus velit ratione aliquid facilis sequi quisquam voluptatibus optio nisi perspiciatis repellat nostrum tempora fugit dolores quae.",
            "price"=>"45",
            "size"=>"XXL",
            "town_id"=>1,
            'slug'=>"clothing23",
            "clothing_profile"=>"clothings/clothings23.jpg",
        ]);

        Clothing::create([
            "title"=>"clothing24",
            'description'=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta sunt neque, et, obcaecati repellendus velit ratione aliquid facilis sequi quisquam voluptatibus optio nisi perspiciatis repellat nostrum tempora fugit dolores quae.",
            "price"=>"45",
            "size"=>"XXL",
            "town_id"=>1,
            'slug'=>"clothing24",
            "clothing_profile"=>"clothings/clothings24.jpg",
        ]);

        Clothing::create([
            "title"=>"clothing25",
            'description'=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta sunt neque, et, obcaecati repellendus velit ratione aliquid facilis sequi quisquam voluptatibus optio nisi perspiciatis repellat nostrum tempora fugit dolores quae.",
            "price"=>"45",
            "size"=>"XXL",
            "town_id"=>1,
            'slug'=>"clothing25",
            "clothing_profile"=>"clothings/clothings25.jpg",
        ]);

        Clothing::create([
            "title"=>"clothing26",
            'description'=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta sunt neque, et, obcaecati repellendus velit ratione aliquid facilis sequi quisquam voluptatibus optio nisi perspiciatis repellat nostrum tempora fugit dolores quae.",
            "price"=>"45",
            "size"=>"L",
            "town_id"=>1,
            'slug'=>"clothing26",
            "clothing_profile"=>"clothings/clothings26.jpg",
        ]);

        Clothing::create([
            "title"=>"clothing27",
            'description'=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta sunt neque, et, obcaecati repellendus velit ratione aliquid facilis sequi quisquam voluptatibus optio nisi perspiciatis repellat nostrum tempora fugit dolores quae.",
            "price"=>"45",
            "size"=>"M",
            "town_id"=>1,
            'slug'=>"clothing27",
            "clothing_profile"=>"clothings/clothings27.jpg",
        ]);

        Clothing::create([
            "title"=>"clothing28",
            'description'=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta sunt neque, et, obcaecati repellendus velit ratione aliquid facilis sequi quisquam voluptatibus optio nisi perspiciatis repellat nostrum tempora fugit dolores quae.",
            "price"=>"45",
            "size"=>"L",
            "town_id"=>1,
            'slug'=>"clothing28",
            "clothing_profile"=>"clothings/clothings28.jpg",
        ]);

        Clothing::create([
            "title"=>"clothing29",
            'description'=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta sunt neque, et, obcaecati repellendus velit ratione aliquid facilis sequi quisquam voluptatibus optio nisi perspiciatis repellat nostrum tempora fugit dolores quae.",
            "price"=>"56",
            "size"=>"XL",
            "town_id"=>1,
            'slug'=>"clothing29",
            "clothing_profile"=>"clothings/clothings29.jpg",
        ]);

        Clothing::create([
            "title"=>"clothing30",
            'description'=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta sunt neque, et, obcaecati repellendus velit ratione aliquid facilis sequi quisquam voluptatibus optio nisi perspiciatis repellat nostrum tempora fugit dolores quae.",
            "price"=>"34",
            "size"=>"XXL",
            "town_id"=>1,
            'slug'=>"clothing30",
            "clothing_profile"=>"clothings/clothings30.jpg",
        ]);

        Clothing::create([
            "title"=>"clothing31",
            'description'=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta sunt neque, et, obcaecati repellendus velit ratione aliquid facilis sequi quisquam voluptatibus optio nisi perspiciatis repellat nostrum tempora fugit dolores quae.",
            "price"=>"56",
            "size"=>"L",
            "town_id"=>3,
            'slug'=>"clothing31",
            "clothing_profile"=>"clothings/clothings31.jpg",
        ]);

        Clothing::create([
            "title"=>"clothing32",
            'description'=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta sunt neque, et, obcaecati repellendus velit ratione aliquid facilis sequi quisquam voluptatibus optio nisi perspiciatis repellat nostrum tempora fugit dolores quae.",
            "price"=>"56",
            "size"=>"L",
            "town_id"=>3,
            'slug'=>"clothing32",
            "clothing_profile"=>"clothings/clothings32.jpg",
        ]);

        Clothing::create([
            "title"=>"clothing33",
            'description'=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta sunt neque, et, obcaecati repellendus velit ratione aliquid facilis sequi quisquam voluptatibus optio nisi perspiciatis repellat nostrum tempora fugit dolores quae.",
            "price"=>"56",
            "size"=>"L",
            "town_id"=>3,
            'slug'=>"clothing33",
            "clothing_profile"=>"clothings/clothings33.jpg",
        ]);

        Clothing::create([
            "title"=>"clothing34",
            'description'=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta sunt neque, et, obcaecati repellendus velit ratione aliquid facilis sequi quisquam voluptatibus optio nisi perspiciatis repellat nostrum tempora fugit dolores quae.",
            "price"=>"56",
            "size"=>"L",
            "town_id"=>3,
            'slug'=>"clothing34",
            "clothing_profile"=>"clothings/clothings34.jpg",
        ]);

        Clothing::create([
            "title"=>"clothing35",
            'description'=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta sunt neque, et, obcaecati repellendus velit ratione aliquid facilis sequi quisquam voluptatibus optio nisi perspiciatis repellat nostrum tempora fugit dolores quae.",
            "price"=>"56",
            "size"=>"L",
            "town_id"=>3,
            'slug'=>"clothing35",
            "clothing_profile"=>"clothings/clothings35.jpg",
        ]);

        Clothing::create([
            "title"=>"clothing36",
            'description'=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta sunt neque, et, obcaecati repellendus velit ratione aliquid facilis sequi quisquam voluptatibus optio nisi perspiciatis repellat nostrum tempora fugit dolores quae.",
            "price"=>"56",
            "size"=>"XL",
            "town_id"=>3,
            'slug'=>"clothing36",
            "clothing_profile"=>"clothings/clothings36.jpg",
        ]);

        Clothing::create([
            "title"=>"clothing37",
            'description'=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta sunt neque, et, obcaecati repellendus velit ratione aliquid facilis sequi quisquam voluptatibus optio nisi perspiciatis repellat nostrum tempora fugit dolores quae.",
            "price"=>"56",
            "size"=>"M",
            "town_id"=>3,
            'slug'=>"clothing37",
            "clothing_profile"=>"clothings/clothings37.jpg",
        ]);

        Clothing::create([
            "title"=>"clothing38",
            'description'=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta sunt neque, et, obcaecati repellendus velit ratione aliquid facilis sequi quisquam voluptatibus optio nisi perspiciatis repellat nostrum tempora fugit dolores quae.",
            "price"=>"56",
            "size"=>"L",
            "town_id"=>3,
            'slug'=>"clothing38",
            "clothing_profile"=>"clothings/clothings38.jpg",
        ]);

        Clothing::create([
            "title"=>"clothing39",
            'description'=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta sunt neque, et, obcaecati repellendus velit ratione aliquid facilis sequi quisquam voluptatibus optio nisi perspiciatis repellat nostrum tempora fugit dolores quae.",
            "price"=>"56",
            "size"=>"XL",
            "town_id"=>3,
            'slug'=>"clothing39",
            "clothing_profile"=>"clothings/clothings39.jpg",
        ]);

        Clothing::create([
            "title"=>"clothing40",
            'description'=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta sunt neque, et, obcaecati repellendus velit ratione aliquid facilis sequi quisquam voluptatibus optio nisi perspiciatis repellat nostrum tempora fugit dolores quae.",
            "price"=>"56",
            "size"=>"XL",
            "town_id"=>3,
            'slug'=>"clothing41",
            "clothing_profile"=>"clothings/clothings41.jpg",
        ]);

        Clothing::create([
            "title"=>"clothing42",
            'description'=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta sunt neque, et, obcaecati repellendus velit ratione aliquid facilis sequi quisquam voluptatibus optio nisi perspiciatis repellat nostrum tempora fugit dolores quae.",
            "price"=>"56",
            "size"=>"XL",
            "town_id"=>3,
            'slug'=>"clothing42",
            "clothing_profile"=>"clothings/clothings42.jpg",
        ]);

        Clothing::create([
            "title"=>"clothing43",
            'description'=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta sunt neque, et, obcaecati repellendus velit ratione aliquid facilis sequi quisquam voluptatibus optio nisi perspiciatis repellat nostrum tempora fugit dolores quae.",
            "price"=>"56",
            "size"=>"XL",
            "town_id"=>3,
            'slug'=>"clothing43",
            "clothing_profile"=>"clothings/clothings43.jpg",
        ]);

        Clothing::create([
            "title"=>"clothing44",
            'description'=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta sunt neque, et, obcaecati repellendus velit ratione aliquid facilis sequi quisquam voluptatibus optio nisi perspiciatis repellat nostrum tempora fugit dolores quae.",
            "price"=>"67",
            "size"=>"XL",
            "town_id"=>3,
            'slug'=>"clothing44",
            "clothing_profile"=>"clothings/clothings44.jpg",
        ]);

        Clothing::create([
            "title"=>"clothing45",
            'description'=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta sunt neque, et, obcaecati repellendus velit ratione aliquid facilis sequi quisquam voluptatibus optio nisi perspiciatis repellat nostrum tempora fugit dolores quae.",
            "price"=>"56",
            "size"=>"XL",
            "town_id"=>3,
            'slug'=>"clothing45",
            "clothing_profile"=>"clothings/clothings45.jpg",
        ]);

        Clothing::create([
            "title"=>"clothing46",
            'description'=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta sunt neque, et, obcaecati repellendus velit ratione aliquid facilis sequi quisquam voluptatibus optio nisi perspiciatis repellat nostrum tempora fugit dolores quae.",
            "price"=>"56",
            "size"=>"XL",
            "town_id"=>3,
            'slug'=>"clothing46",
            "clothing_profile"=>"clothings/clothings46.jpg",
        ]);

        Clothing::create([
            "title"=>"clothing47",
            'description'=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta sunt neque, et, obcaecati repellendus velit ratione aliquid facilis sequi quisquam voluptatibus optio nisi perspiciatis repellat nostrum tempora fugit dolores quae.",
            "price"=>"89",
            "size"=>"XL",
            "town_id"=>3,
            'slug'=>"clothing47",
            "clothing_profile"=>"clothings/clothings47.jpg",
        ]);

        Clothing::create([
            "title"=>"clothing48",
            'description'=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta sunt neque, et, obcaecati repellendus velit ratione aliquid facilis sequi quisquam voluptatibus optio nisi perspiciatis repellat nostrum tempora fugit dolores quae.",
            "price"=>"89",
            "size"=>"L",
            "town_id"=>3,
            'slug'=>"clothing48",
            "clothing_profile"=>"clothings/clothings48.jpg",
        ]);

        Clothing::create([
            "title"=>"clothing49",
            'description'=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta sunt neque, et, obcaecati repellendus velit ratione aliquid facilis sequi quisquam voluptatibus optio nisi perspiciatis repellat nostrum tempora fugit dolores quae.",
            "price"=>"89",
            "size"=>"L",
            "town_id"=>3,
            'slug'=>"clothing49",
            "clothing_profile"=>"clothings/clothings49.jpg",
        ]);

        Clothing::create([
            "title"=>"clothing50",
            'description'=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta sunt neque, et, obcaecati repellendus velit ratione aliquid facilis sequi quisquam voluptatibus optio nisi perspiciatis repellat nostrum tempora fugit dolores quae.",
            "price"=>"76",
            "size"=>"M",
            "town_id"=>2,
            'slug'=>"clothing50",
            "clothing_profile"=>"clothings/clothings50.jpg",
        ]);

        Clothing::create([
            "title"=>"clothing51",
            'description'=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta sunt neque, et, obcaecati repellendus velit ratione aliquid facilis sequi quisquam voluptatibus optio nisi perspiciatis repellat nostrum tempora fugit dolores quae.",
            "price"=>"89",
            "size"=>"L",
            "town_id"=>2,
            'slug'=>"clothing51",
            "clothing_profile"=>"clothings/clothings51.jpg",
        ]);

        Clothing::create([
            "title"=>"clothing52",
            'description'=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta sunt neque, et, obcaecati repellendus velit ratione aliquid facilis sequi quisquam voluptatibus optio nisi perspiciatis repellat nostrum tempora fugit dolores quae.",
            "price"=>"56",
            "size"=>"XXL",
            "town_id"=>2,
            'slug'=>"clothing52",
            "clothing_profile"=>"clothings/clothings52.jpg",
        ]);

        Clothing::create([
            "title"=>"clothing53",
            'description'=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta sunt neque, et, obcaecati repellendus velit ratione aliquid facilis sequi quisquam voluptatibus optio nisi perspiciatis repellat nostrum tempora fugit dolores quae.",
            "price"=>"89",
            "size"=>"L",
            "town_id"=>2,
            'slug'=>"clothing53",
            "clothing_profile"=>"clothings/clothings53.jpg",
        ]);

        Clothing::create([
            "title"=>"clothing54",
            'description'=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta sunt neque, et, obcaecati repellendus velit ratione aliquid facilis sequi quisquam voluptatibus optio nisi perspiciatis repellat nostrum tempora fugit dolores quae.",
            "price"=>"89",
            "size"=>"XL",
            "town_id"=>2,
            'slug'=>"clothing54",
            "clothing_profile"=>"clothings/clothings54.jpg",
        ]);

        Clothing::create([
            "title"=>"clothing55",
            'description'=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta sunt neque, et, obcaecati repellendus velit ratione aliquid facilis sequi quisquam voluptatibus optio nisi perspiciatis repellat nostrum tempora fugit dolores quae.",
            "price"=>"89",
            "size"=>"L",
            "town_id"=>2,
            'slug'=>"clothing55",
            "clothing_profile"=>"clothings/clothings55.jpg",
        ]);

        Clothing::create([
            "title"=>"clothing56",
            'description'=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta sunt neque, et, obcaecati repellendus velit ratione aliquid facilis sequi quisquam voluptatibus optio nisi perspiciatis repellat nostrum tempora fugit dolores quae.",
            "price"=>"89",
            "size"=>"L",
            "town_id"=>2,
            'slug'=>"clothing56",
            "clothing_profile"=>"clothings/clothings56.jpg",
        ]);

        Clothing::create([
            "title"=>"clothing57",
            'description'=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta sunt neque, et, obcaecati repellendus velit ratione aliquid facilis sequi quisquam voluptatibus optio nisi perspiciatis repellat nostrum tempora fugit dolores quae.",
            "price"=>"59",
            "size"=>"L",
            "town_id"=>2,
            'slug'=>"clothing57",
            "clothing_profile"=>"clothings/clothings57.jpg",
        ]);

        Clothing::create([
            "title"=>"clothing58",
            'description'=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta sunt neque, et, obcaecati repellendus velit ratione aliquid facilis sequi quisquam voluptatibus optio nisi perspiciatis repellat nostrum tempora fugit dolores quae.",
            "price"=>"89",
            "size"=>"L",
            "town_id"=>2,
            'slug'=>"clothing58",
            "clothing_profile"=>"clothings/clothings58.jpg",
        ]);

        Clothing::create([
            "title"=>"clothing59",
            'description'=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta sunt neque, et, obcaecati repellendus velit ratione aliquid facilis sequi quisquam voluptatibus optio nisi perspiciatis repellat nostrum tempora fugit dolores quae.",
            "price"=>"89",
            "size"=>"M",
            "town_id"=>2,
            'slug'=>"clothing59",
            "clothing_profile"=>"clothings/clothings59.jpg",
        ]);

        Clothing::create([
            "title"=>"clothing60",
            'description'=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta sunt neque, et, obcaecati repellendus velit ratione aliquid facilis sequi quisquam voluptatibus optio nisi perspiciatis repellat nostrum tempora fugit dolores quae.",
            "price"=>"89",
            "size"=>"M",
            "town_id"=>2,
            'slug'=>"clothing60",
            "clothing_profile"=>"clothings/clothings60.jpg",
        ]);

        Clothing::create([
            "title"=>"clothing61",
            'description'=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta sunt neque, et, obcaecati repellendus velit ratione aliquid facilis sequi quisquam voluptatibus optio nisi perspiciatis repellat nostrum tempora fugit dolores quae.",
            "price"=>"89",
            "size"=>"M",
            "town_id"=>1,
            'slug'=>"clothing61",
            "clothing_profile"=>"clothings/clothings61.jpg",
        ]);

        Clothing::create([
            "title"=>"clothing62",
            'description'=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta sunt neque, et, obcaecati repellendus velit ratione aliquid facilis sequi quisquam voluptatibus optio nisi perspiciatis repellat nostrum tempora fugit dolores quae.",
            "price"=>"67",
            "size"=>"M",
            "town_id"=>1,
            'slug'=>"clothing62",
            "clothing_profile"=>"clothings/clothings62.jpg",
        ]);

        Clothing::create([
            "title"=>"clothing62",
            'description'=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta sunt neque, et, obcaecati repellendus velit ratione aliquid facilis sequi quisquam voluptatibus optio nisi perspiciatis repellat nostrum tempora fugit dolores quae.",
            "price"=>"89",
            "size"=>"M",
            "town_id"=>1,
            'slug'=>"clothing62",
            "clothing_profile"=>"clothings/clothings62.jpg",
        ]);

        Clothing::create([
            "title"=>"clothing63",
            'description'=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta sunt neque, et, obcaecati repellendus velit ratione aliquid facilis sequi quisquam voluptatibus optio nisi perspiciatis repellat nostrum tempora fugit dolores quae.",
            "price"=>"89",
            "size"=>"M",
            "town_id"=>1,
            'slug'=>"clothing63",
            "clothing_profile"=>"clothings/clothings63.jpg",
        ]);

        Clothing::create([
            "title"=>"clothing64",
            'description'=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta sunt neque, et, obcaecati repellendus velit ratione aliquid facilis sequi quisquam voluptatibus optio nisi perspiciatis repellat nostrum tempora fugit dolores quae.",
            "price"=>"39",
            "size"=>"M",
            "town_id"=>1,
            'slug'=>"clothing64",
            "clothing_profile"=>"clothings/clothings64.jpg",
        ]);
        Clothing::create([
            "title"=>"clothing65",
            'description'=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta sunt neque, et, obcaecati repellendus velit ratione aliquid facilis sequi quisquam voluptatibus optio nisi perspiciatis repellat nostrum tempora fugit dolores quae.",
            "price"=>"89",
            "size"=>"M",
            "town_id"=>1,
            'slug'=>"clothing65",
            "clothing_profile"=>"clothings/clothings65.jpg",
        ]);

        Clothing::create([
            "title"=>"clothing66",
            'description'=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta sunt neque, et, obcaecati repellendus velit ratione aliquid facilis sequi quisquam voluptatibus optio nisi perspiciatis repellat nostrum tempora fugit dolores quae.",
            "price"=>"56",
            "size"=>"XL",
            "town_id"=>1,
            'slug'=>"clothing66",
            "clothing_profile"=>"clothings/clothings66.jpg",
        ]);

        Clothing::create([
            "title"=>"clothing67",
            'description'=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta sunt neque, et, obcaecati repellendus velit ratione aliquid facilis sequi quisquam voluptatibus optio nisi perspiciatis repellat nostrum tempora fugit dolores quae.",
            "price"=>"34",
            "size"=>"M",
            "town_id"=>1,
            'slug'=>"clothing67",
            "clothing_profile"=>"clothings/clothings67.jpg",
        ]);

        Clothing::create([
            "title"=>"clothing68",
            'description'=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta sunt neque, et, obcaecati repellendus velit ratione aliquid facilis sequi quisquam voluptatibus optio nisi perspiciatis repellat nostrum tempora fugit dolores quae.",
            "price"=>"89",
            "size"=>"XL",
            "town_id"=>1,
            'slug'=>"clothing68",
            "clothing_profile"=>"clothings/clothings68.jpg",
        ]);

        Clothing::create([
            "title"=>"clothing69",
            'description'=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta sunt neque, et, obcaecati repellendus velit ratione aliquid facilis sequi quisquam voluptatibus optio nisi perspiciatis repellat nostrum tempora fugit dolores quae.",
            "price"=>"67",
            "size"=>"XL",
            "town_id"=>1,
            'slug'=>"clothing69",
            "clothing_profile"=>"clothings/clothings69.jpg",
        ]);

        Clothing::create([
            "title"=>"clothing70",
            'description'=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta sunt neque, et, obcaecati repellendus velit ratione aliquid facilis sequi quisquam voluptatibus optio nisi perspiciatis repellat nostrum tempora fugit dolores quae.",
            "price"=>"89",
            "size"=>"XL",
            "town_id"=>1,
            'slug'=>"clothing70",
            "clothing_profile"=>"clothings/clothings70.jpg",
        ]);

        Clothing::create([
            "title"=>"clothing71",
            'description'=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta sunt neque, et, obcaecati repellendus velit ratione aliquid facilis sequi quisquam voluptatibus optio nisi perspiciatis repellat nostrum tempora fugit dolores quae.",
            "price"=>"89",
            "size"=>"M",
            "town_id"=>3,
            'slug'=>"clothing71",
            "clothing_profile"=>"clothings/clothings71.jpg",
        ]);

        Clothing::create([
            "title"=>"clothing71",
            'description'=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta sunt neque, et, obcaecati repellendus velit ratione aliquid facilis sequi quisquam voluptatibus optio nisi perspiciatis repellat nostrum tempora fugit dolores quae.",
            "price"=>"89",
            "size"=>"M",
            "town_id"=>3,
            'slug'=>"clothing71",
            "clothing_profile"=>"clothings/clothings71.jpg",
        ]);

        Clothing::create([
            "title"=>"clothing72",
            'description'=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta sunt neque, et, obcaecati repellendus velit ratione aliquid facilis sequi quisquam voluptatibus optio nisi perspiciatis repellat nostrum tempora fugit dolores quae.",
            "price"=>"78",
            "size"=>"M",
            "town_id"=>3,
            'slug'=>"clothing72",
            "clothing_profile"=>"clothings/clothings72.jpg",
        ]);

        Clothing::create([
            "title"=>"clothing73",
            'description'=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta sunt neque, et, obcaecati repellendus velit ratione aliquid facilis sequi quisquam voluptatibus optio nisi perspiciatis repellat nostrum tempora fugit dolores quae.",
            "price"=>"30",
            "size"=>"M",
            "town_id"=>3,
            'slug'=>"clothing73",
            "clothing_profile"=>"clothings/clothings73.jpg",
        ]);

        Clothing::create([
            "title"=>"clothing74",
            'description'=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta sunt neque, et, obcaecati repellendus velit ratione aliquid facilis sequi quisquam voluptatibus optio nisi perspiciatis repellat nostrum tempora fugit dolores quae.",
            "price"=>"89",
            "size"=>"M",
            "town_id"=>3,
            'slug'=>"clothing74",
            "clothing_profile"=>"clothings/clothings74.jpg",
        ]);

        Clothing::create([
            "title"=>"clothing75",
            'description'=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta sunt neque, et, obcaecati repellendus velit ratione aliquid facilis sequi quisquam voluptatibus optio nisi perspiciatis repellat nostrum tempora fugit dolores quae.",
            "price"=>"89",
            "size"=>"M",
            "town_id"=>3,
            'slug'=>"clothing75",
            "clothing_profile"=>"clothings/clothings75.jpg",
        ]);
    }
}
