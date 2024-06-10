<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categoria;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Categoria::create([
            'nombre' => 'Malbec',
            'descripcion' => 'El malbec es un vino hecho con la cepa (tipo de uva) que lleva su mismo nombre y que es originaria de Francia. En la actualidad es Argentina la que se lleva el primer puesto como productor de sus vinos, aunque también los puedes encontrar en Estados Unidos, Chile, Sudáfrica, Australia y Nueva Zelanda. Si descorchamos una de sus botellas, nos podremos encontrar con un vino de personalidad cálida, sabores sutiles, buena acidez y fácil de beber.'
        ]);
        Categoria::create([
            'nombre' => 'Blend',
            'descripcion' => 'Son vinos en cuya elaboración interviene siempre más de una variedad, sin límite alguno. La combinación vendrá dada por la cantidad y variedades que el enólogo crea prudente para concretar el vino. Son vinos que no buscan el liderazgo de una cepa sobre las demás sino que todas aporten su identidad para lograr un resultado determinado.'
        ]);
        Categoria::create([
            'nombre' => 'Cabernet Franc',
            'descripcion' => 'La variedad Cabernet Franc es una variedad de origen Frances perfectamnte adaptada al clima y al suelo de las condiciones del viñedo español. Es considerada el padre del Cabernet Sauvignon.'
        ]);
        Categoria::create([
            'nombre' => 'Cabernet Sauvignon',
            'descripcion' => 'La cabernet sauvignon es una de las uvas tintas más conocidas del mundo. Crece en casi todas las grandes zonas vitícolas, en un diverso espectro de climas, desde el valle del Okanagan (Canadá) al valle de la Becá (Líbano). La cabernet sauvignon se hizo famosa por su presencia en el vino de Burdeos, donde es mezclada a menudo con la merlot y con la cabernet franc. Desde Francia, la uva se ha extendido por Europa y por el Nuevo Mundo instalándose en las montañas Santa Cruz de California, el valle de Napa, la bahía Hawkes de Nueva Zelanda, el río Margaret y la región de Coonawarra de Australia, y los valles chilenos del Maipo y de Colchagua. Durante buena parte del siglo xx, fue la uva tinta de vino premium más plantada del mundo, hasta que fue adelantada por la merlot en los años 1990.'
        ]);
        Categoria::create([
            'nombre' => 'Merlot',
            'descripcion' => 'Los vinos de Merlot son vinos con cierta intensidad colorante, con grado alcohólico elevado y con ligeros aromas afrutados y especiados.

    Los racimos son cilíndricos, de tamaño mediano, con uvas de color azul negruzco. La piel es espesa y la pupa jugosa y de sabor agradable. Es un vino de evolución rápida, con aromas frescos y frutales y de cuerpo elegante.
    
    Requiere terrenos frescos. Su brotación es temprana, siendo sensible a las heladas primaverales y al mildiu.
    
    Los aromas característicos de estos vinos son los de los frutos rojos entre ellos, grosellas, moras , cassis, pimiento dulce, humo, guinda, violeta además de trufas y el cuero.'
        ]);
        Categoria::create([
            'nombre' => 'Syrah',
            'descripcion' => 'La uva syrah es una de las variedades más valoradas en todo el mundo, además de, también, una de las más cultivadas. Su origen ha sido muy discutido, pues los primeros estudios acerca de la uva syrah la situaban como originaria de Persia, aunque las más recientes investigaciones colocan su nacimiento en nuestra vecina Francia, específicamente en la región del Ródano. Más allá de su verdadero origen, ambas teorías vienen a determinar un aspecto clave sobre la uva syrah, cuál es el clima más apropiado para su cultivo; aquellos climas especialmente cálidos aunque también se trata de una variedad perfectamente adaptable a áreas templadas.'
        ]);
        Categoria::create([
            'nombre' => 'Tempranillo',
            'descripcion' => 'La uva tempranillo, también llamada tempranilla, tinta del país o cencibel, entre otros nombres, es una variedad de uva tinta cultivada extensamente para producir vinos tintos con cuerpo1​ en España, de donde es originaria. Ocupa una superficie de cultivo de más de 214.000 ha en 2013, siendo la segunda en producción, tras la variedad Airén (blanca), y la primera en uva tinta. Cuenta con 31.046 hectáreas en la D.O. Rioja, lo que supone un 61% de la D.O. Calificada Rioja, con un aumento progresivo en los últimos años en detrimento de otras variedades. Se considera autóctona de Rioja. Es la principal uva usada en esta D.O., y a menudo se la menciona como la "uva noble" de España.2​ Su nombre es el diminutivo de temprano,1​ lo cual hace referencia al hecho de que madura varias semanas antes que la mayor parte de las variedades de uva tinta españolas.'
        ]);
    }
}
