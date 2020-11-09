<?php

namespace Database\Seeders;




use App\Categoria;
use App\Etiqueta;
use App\Libro;
/* Este metodo sigue sin funcionar, lo reemplace a traves de USE App */
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use App;




class LibrosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Models\Categoria::truncate(); // Evita duplicar datos

        $categoria = new App\Models\Categoria();
        $categoria->nombre = "Categoría 1";
        $categoria->save();

        App\Models\Etiqueta::truncate(); // Evita duplicar datos

        $etiqueta = new App\Models\Etiqueta();
        $etiqueta->nombre = "Etiqueta 1";
        $etiqueta->save();

        $etiqueta = new App\Models\Etiqueta();
        $etiqueta->nombre = "Etiqueta 2";
        $etiqueta->save();

        App\Models\Libro::truncate(); // Evita duplicar datos

        $libro = new App\Models\Libro();
        $libro->titulo = "Mi primer libro";
        $libro->descripcion = "Extracto de mi primer libro";
        $libro->contenido = "<p>Resumen de mi primer libro</p>";
        $libro->fecha = Carbon::now();
        $libro->categoria_id = 1;
        $libro->save();

        $libro->etiquetas()->attach([1, 2]); //Relacionar el libro a dos etiquetas

        $libro = new App\Models\Libro();
        $libro->titulo = "Mi segundo libro";
        $libro->descripcion = "Extracto de mi segundo libro";
        $libro->contenido = "<p>Resumen de mi segundo libro</p>";
        $libro->fecha = Carbon::now();
        $libro->categoria_id = 1;
        $libro->save();

        $libro->etiquetas()->attach([1]); //Relacionar el libro a una etiqueta

        $libro = new App\Models\Libro();
        $libro->titulo = "Mi tercer libro";
        $libro->descripcion = "Extracto de mi tercer libro";
        $libro->contenido = "<p>Resumen de mi tercer libro</p>";
        $libro->fecha = Carbon::now();
        $libro->categoria_id = 1;
        $libro->save();

        $libro->etiquetas()->attach([2]); //Relacionar el libro a una etiqueta
    }
}
