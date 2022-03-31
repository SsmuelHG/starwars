<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\starwars;
use Illuminate\Support\Facades\DB;

class warsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('personaje')->insert([
            'id' => 1,
            'name' => 'Darth Vader',
            'colour' => 'Black',
            'weapon' => 'Lightsaber',
            'planet' => 'Tatooine',
            'image' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.pngwing.com%2Fes%2Fsearch%3Fq%3DDarth%2BVader&psig=AOvVaw1a7gGmfhuWXrMogrJdcHiR&ust=1648704377087000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCJDqvOKM7fYCFQAAAAAdAAAAABAD',
            'created_at' => now(),
            'updated_at' => now()
        ]); 
        DB::table('personaje')->insert([
            'id' => 2,
            'name' => 'Luke Skywalker',
            'colour' => 'Blue',
            'weapon' => 'Blaster',
            'planet' => 'Tatooine',
            'image' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.pngwing.com%2Fes%2Ffree-png-hwoax&psig=AOvVaw1mAUMtaGHP-BoV2gGZw2qL&ust=1648706597198000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCMCc6oeV7fYCFQAAAAAdAAAAABAD',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('personaje')->insert([
            'id' => 3,
            'name' => 'Obi-Wan Kenobi',
            'colour' => 'Green',
            'weapon' => 'Blaster',
            'planet' => 'Tatooine',
            'image' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.pngwing.com%2Fes%2Ffree-png-kevzz&psig=AOvVaw2EBTbpNuMV5XiQ6Ey3RuWc&ust=1648706643854000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCPirh5uV7fYCFQAAAAAdAAAAABAD',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('personaje')->insert([
            'id' => 4,
            'name' => 'Han Solo',
            'colour' => 'Brown',
            'weapon' => 'Blaster',
            'planet' => 'Tatooine',
            'image' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.pngwing.com%2Fes%2Fsearch%3Fq%3DHan%2BSolo&psig=AOvVaw1u9ybpvXLL3bGGDh7LAWNz&ust=1648706696850000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCOi2yLOV7fYCFQAAAAAdAAAAABAD',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('personaje')->insert([
            'id' => 5,
            'name' => 'R2-D2',
            'colour' => 'Grey',
            'weapon' => 'Blaster',
            'planet' => 'Tatooine',
            'image' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.pngwing.com%2Fes%2Ffree-png-pntvp&psig=AOvVaw0GaxybP4fDz1HhyzAw5eJW&ust=1648706734690000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCPD3sMaV7fYCFQAAAAAdAAAAABAD',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('personaje')->insert([
            'id' => 6,
            'name' => 'C-3PO',
            'colour' => 'Grey',
            'weapon' => 'Blaster',
            'planet' => 'Tatooine',
            'image' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.pngegg.com%2Fes%2Fpng-wgmgf&psig=AOvVaw0UdOEHBQPq6Xuve-m7pNtR&ust=1648706769812000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCOiw0tqV7fYCFQAAAAAdAAAAABAM',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('personaje')->insert([
            'id' => 7,
            'name' => 'Yoda',
            'colour' => 'Green',
            'weapon' => 'Blaster',
            'planet' => 'Tatooine',
            'image' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.stickpng.com%2Fes%2Fimg%2Fbebe-yoda%2Fbebe-yoda-hola&psig=AOvVaw2ULVCtb0NhthxK8BpWfbch&ust=1648706827650000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCLixg_aV7fYCFQAAAAAdAAAAABAD',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('personaje')->insert([
            'id' => 8,
            'name' => 'Jar Jar Binks',
            'colour' => 'Brown',
            'weapon' => 'Blaster',
            'planet' => 'Tatooine',
            'image' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fdoblaje.fandom.com%2Fes%2Fwiki%2FJar_Jar_Binks&psig=AOvVaw198iflEGu2cILUe6IKo3y4&ust=1648706862369000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCOjP762b7fYCFQAAAAAdAAAAABAa',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('personaje')->insert([
            'id' => 9,
            'name' => 'Darth Maul',
            'colour' => 'Red',
            'weapon' => 'Blaster',
            'planet' => 'Tatooine',
            'image' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Ftoppng.com%2Ffree-image%2Fdarth-maul-logo-vector-free-download-PNG-free-PNG-Images_466281&psig=AOvVaw0edvaKGKztd_msbaiwdEAj&ust=1648706895323000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCIDmiaKb7fYCFQAAAAAdAAAAABAI',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('personaje')->insert([
            'id' => 10,
            'name' => 'Chewbacca',
            'colour' => 'Brown',
            'weapon' => 'Blaster',
            'planet' => 'Tatooine',
            'image' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.pngwing.com%2Fes%2Ffree-png-bnvmx&psig=AOvVaw2Zc4-GD6p2OZ87avcTQxUo&ust=1648706934553000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCLDP2aWW7fYCFQAAAAAdAAAAABAQ',
            'created_at' => now(),
            'updated_at' => now()
        ]); 
    }
}
