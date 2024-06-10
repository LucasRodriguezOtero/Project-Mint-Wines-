<?php

namespace Database\Seeders;

use App\Models\Bodega;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BodegaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bodega::create([
            'bodega_name'=> 'Rutini',
            'location'=> 'Valle de Uco, Mendoza',
            'description'=> '“Labor y perseverancia” fue el lema que guió a Felipe Rutini desde el comienzo y que marcó a fuego el devenir de sus vinos hasta convertirlos en sinónimo de la más alta calidad. Siguiendo su espíritu innovador, hacia 1925 la bodega comienza a plantar viñedos en el Valle de Uco. A partir de esas plantaciones pioneras la región se ha ido consolidando como uno de los principales centros vitivinícolas de Mendoza. Durante la década del 90 las instalaciones originales de La Rural en Coquimbito son renovadas completamente, incorporando tecnología de punta a la estructura que funcionaba desde el siglo XIX. En ese mismo predio se encuentra hoy en día el Museo del Vino, donde los visitantes pueden conocer los primeros pasos de don Felipe Rutini en la producción de vinos y ver la evolución de las técnicas y de los mecanismos de trabajo tradicionales. En línea con el afán de superación y excelencia de su fundador, en 2008 comienza a construirse la planta de Rutini Wines en Tupungato. Allí se elaboran actualmente las líneas Felipe Rutini, Antología, Apartado, Colección Rutini, Encuentro y Trumpeter. Estas fincas abarcan más de 400 hectáreas a una altitud entre 1.050 y 1.200 metros sobre el nivel del mar. A esta superficie se agregan otras 120 hectáreas de campos en vías de implantación de vides, que ampliarán las posibilidades de producción de vinos únicos, cuidados y potenciados desde su origen',
        ]);
        Bodega::create([
            'bodega_name'=> 'Catena Zapata',
            'location'=> 'Luján de Cuyo, Mendoza',
            'description'=> 'Situada en Luján de Cuyo, Mendoza. Fundada en 1902, es conocida por su papel pionero en la resurrección del Malbec y en el descubrimiento de terruños de alturas extremas en las estribaciones andinas de la provincia.',
        ]);
        Bodega::create([
            'bodega_name'=> 'Trapiche',
            'location'=> 'Maipú, Mendoza',
            'description'=> 'Ubicada en Maipú, Mendoza. La bodega fue pionera en la introducción de cepas francesas, la importación de barricas de roble francés y la introducción de vinos provenientes de un micro-terroir.',
        ]);
        Bodega::create([
            'bodega_name'=> 'El Enemigo Wines',
            'location'=> 'Maipú, Mendoza',
            'description'=> ' En el paraje de Chachingo, ícono de Maipú, se encuentra Casa Vigil, inspirada en el mágico mundo de la Divina Comedia de Dante Alighieri. Una bodega que invita a experimentar el encanto del vino, la gastronomía y la literatura fusionados en una propuesta enoturística única.',
        ]);
        Bodega::create([
            'bodega_name'=> 'Bodegas Salentein',
            'location'=> 'Tunuyán, Mendoza',
            'description'=> 'Bodegas Salentein se encuentra en Mendoza, una provincia argentina que es sinónimo de vino. La tierra en esta región es franco arenosa, y el clima seco, con días muy calurosos y noches muy frescas. La presencia de más de 900 bodegas y 145 mil hectáreas de viñedos explican por qué esta zona es el área vitivinícola más importante del país. Sin embargo, esta tierra todavía tiene mucho por decir. Así lo cree Bodegas Salentein, y obra en consecuencia, difundiendo a nivel internacional el surgimiento de bodegas de primera línea en la Argentina.

            Una nueva visión de la calidad -con plantaciones de varietales clásicos, preservación de vides antiguas, re aplicación de técnicas artesanales europeas y la utilización de tecnología de avanzada- da como resultado vinos de nivel internacional.',
        ]);
        Bodega::create([
            'bodega_name'=> 'Zuccardi',
            'location'=> 'San Carlos, Mendoza',
            'description'=> 'Desde 2008 la bodega cuenta con un área de Investigación y Desarrollo, dedicada al estudio del terroir y las diversas variables que inciden en la calidad del vino. El objetivo es “no buscar vinos perfectos, sino aquellos que expresen el lugar, la región”.',
        ]);

      
        
    }
}
