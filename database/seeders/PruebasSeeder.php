<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class PruebasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (app()->environment('local')) {
            $libro_id1  = DB::table('libros')->insertGetId([
                'titulo' => 'Cronicas de la torre',
                'autor' => 'Laura Gallego',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
             $libro_id2  = DB::table('libros')->insertGetId([
                'titulo' => 'Natse el dragon',
                'autor' => 'Pepe flores',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);


            $ejemplar_id1 = DB::table('ejemplars')->insertGetId([
                'codigo' => '1111',
                'libro_id'=>$libro_id1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);

            $ejemplar_id2 = DB::table('ejemplars')->insertGetId([
                'codigo' => '2222',
                'libro_id' => $libro_id2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);

            $cliente_id1 = DB::table('clientes')->insertGetId([
                'nombre' => 'violeta',
            ]);

             DB::table('prestamos')->insert([
                'ejemplar_id' => $ejemplar_id1,
                'cliente_id' => $cliente_id1,
                'fecha_hora' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
            DB::table('prestamos')->insert([
                'ejemplar_id' => $ejemplar_id2,
                'cliente_id' => $cliente_id1,
                'fecha_hora' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }




    }
}
