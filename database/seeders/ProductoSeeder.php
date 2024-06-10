<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Producto;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Producto::create([
            'nombre' => 'Rutini Syrah',
            'descripcion' => 'BODEGA: Rutini Wines
            TIPO: Tinto 
            VARIEDAD: Syrah
            CORTE:  Syrah 100 % 
            ALCOHOL: 13 %',
            'nota_cata' => 'Rubí intenso, con matices violáceos y rojizos. Tinto caracterizado por su perfil aromático especiado, típico de la variedad. La fruta roja madura despliega toda su seducción en este vino untuoso y complejo que, al mismo tiempo, es dueño de taninos de notable suavidad.',
            'crianza_barricado' => 'Cosecha manual. Crianza en barril 14 meses. Tipo de roble 30% francés, nuevo; 30% francés de 2do. uso; 40% francés, de 3er. uso.',
            'precio' => '3722',
            'categoria_id' => '6',
            'is_visible' => '1',
            'bodega_id' => '1',
            'imagen' => 'productos/rutini_syrah.jpg',
        ]);

        Producto::create([
            'nombre' => 'Rutini Merlot',
            'descripcion' => 'BODEGA: Rutini Wines
            TIPO: Tinto
            VARIEDAD: Merlot
            CORTE:  Merlot 100 % 
            ALCOHOL: 13,5 %',
            'nota_cata' => 'Rojo rubí denso, con reflejos violáceos. De la noble crianza en roble francés que tuvo este tinto perdurable y firme en boca surgen vahos -vainilla, cacao, cuero- bien integrados al generoso aroma frutado (ciruelas, frutos rojos) que lo distingue.',
            'crianza_barricado' => 'Cosecha manual. Crianza en barril 12 meses. Tipo de roble 50% francés, nuevo; 50% francés, de 2do. uso.',
            'precio' => '3750',
            'categoria_id' => '5',
            'is_visible' => '1',
            'bodega_id' => '1',
            'imagen' => 'productos/Rutini_Merlot_j5vw1j.jpg',
        ]);

        Producto::create([
            'nombre' => 'Rutini Malbec
            ',
            'descripcion' => 'BODEGA: Rutini Wines  
            TIPO: Tinto
            VARIEDAD: Malbec 
            CORTE:  Malbec 100 % 
            ALCOHOL: 13,5 %
            ',
            'nota_cata' => '-',
            'crianza_barricado' => 'Cosechado manualmente. Crianza en barril 12 meses. Tipo de roble 80% francés, nuevo; 20% americano, nuevo.',
            'precio' => '6154',
            'categoria_id' => '1',
            'is_visible' => '1',
            'bodega_id' => '1',
            'imagen' => 'productos/Rutini-Malbec.jpg',
        ]);

        Producto::create([
            'nombre' => 'Rutini Cabernet Franc
            ',
            'descripcion' => 'BODEGA: Rutini Wines
            TIPO: Tinto
            VARIEDAD: Cabernet Franc
            CORTE: Cabernet Franc 100%  
            ALCOHOL: 14%
            ENÓLOGO: Luis Reginato
            COSECHA: 2020',
            'nota_cata' => 'Temperatura de servicio para este vino es entre 16º y 18º C, Potencial de guarda 8 años. Decantar por espacio de una hora antes de beberlo. Conservar en lugar fresco, oscuro, y sin vibraciones. Ideal para acompañar una Entraña a la parrilla con calabaza gratinada. ',
            'crianza_barricado' => 'Cosecha manual. Crianza 14 meses en barricas de roble francés, 100% nuevo.',
            'precio' => '4699',
            'categoria_id' => '3',
            'is_visible' => '1',
            'bodega_id' => '1',
            'imagen' => 'productos/Rutini_Cabernet_Franc_naothh.jpg',
        ]);

        Producto::create([
            'nombre' => 'Rutini Antología XXXVIII
            ',
            'descripcion' => 'BODEGA: Rutini Wines
            TIPO: Tinto
            VARIEDAD: Blend
            CORTE: 35% Malbec de Altamira, 35% Malbec de Tupungato, 10% Petit Verdot de Tupungato, 10% Merlot de Altamira, 10% C. Sauvignon de Tupungato
            ALCOHOL: 13,2%
            ENÓLOGO: Mariano Di Paola
            COSECHA: 2018',
            'nota_cata' => 'Rojo muy intenso, con matiz azulado. Regala una nariz con acentos florales de violeta, combinados con otros –frutales- de cereza y guinda. También, surgen notas de menta y especias. En boca, se aprecia la jugosidad de la uva Malbec (mayoritaria en el corte), así como también la riqueza de sus aromas. Redondo, de gran longitud, destaca su persistente y sedoso final.',
            'crianza_barricado' => '12 meses, Roble francés nuevo y de 1 año.',
            'precio' => '9644',
            'categoria_id' => '2',
            'is_visible' => '1',
            'bodega_id' => '1',
            'imagen' => 'productos/36662_vinho-rutini-antologia-xxxviii-750ml_m1_636840184587539369.jpg',
        ]);

        Producto::create([
            'nombre' => 'Rutini Apartado Gran Blend
            ',
            'descripcion' => 'BODEGA: Rutini Wines
            TIPO: Tinto
            VARIEDAD: Blend  
            CORTE: Cabernet Sauvignon 30 % Cabernet Franc 20 % Malbec 30 % Syrah 20 %
            ALCOHOL: 14,2 %',
            'nota_cata' => 'De color rojo intenso con delicados matices violáceos. En nariz posee una elegante frutosidad, acompañada por ricas especias, con notas de chocolate y tabaco aportadas por su crianza en barricas de roble. En boca es un vino de gran estructura y complejidad, con taninos presentes y sedosos. Es un blend elegante y de gran personalidad.',
            'crianza_barricado' => 'Tipo de cosecha manual. Fermantación maloláctica 100% Crianza en barrica por 24 meses. Tipo de roble 50% francés, nuevo; 50% francés, de 2do. uso.',
            'precio' => '22491',
            'categoria_id' => '2',
            'is_visible' => '1',
            'bodega_id' => '1',
            'imagen' => 'productos/Rutini_Apartado_Gran_Blend_psjtbr.jpg',
        ]);

        Producto::create([
            'nombre' => 'Rutini Apartado Gran Malbec
            ',
            'descripcion' => 'BODEGA: Rutini Wines  
            TIPO: Tinto
            VARIEDAD: Malbec  
            CORTE: Malbec  100 %
            ALCOHOL: 14,6 %
            ',
            'nota_cata' => 'De color rojo intenso con deslumbrantes reflejos violáceos. En nariz es complejo, elegante con notas florales y frutales muy diversas y un anisado sutil. En boca es un vino de gran concentración, muy largo y complejo. Su amplia frutosidad y potencia se complementan con algunas características del terruño de La Consulta como el regaliz. Notas de de cacao y café aparecen dadas por el tostado medio de las barricas.',
            'crianza_barricado' => 'Tipo de cosecha manual Fermentación maloláctica 100%. Tiempo en roble 18 meses, 100% roble francés nuevo.',
            'precio' => '22491',
            'categoria_id' => '1',
            'is_visible' => '1',
            'bodega_id' => '1',
            'imagen' => 'productos/Rutini_Apartado_Gran_Malbec_x4uks6.jpg',
        ]);

        Producto::create([
            'nombre' => 'Rutini Cabernet Sauvignon',
            'descripcion' => 'BODEGA: Rutini Wines
            TIPO: Tinto
            VARIEDAD: Blend  
            CORTE:  Cabernet Sauvignon 50 % Malbec 50 % 
            ALCOHOL: 13,5 %',
            'nota_cata' => 'Rojo rubí profundo. El dúo de cepas de origen bordelés da como resultado un tinto armonioso y equilibrado: la Cabernet Sauvignon entrega su carácter corpóreo y pleno y la Malbec matiza de suaves y dulces taninos el assemblage, realzando una combinación única de aromas y sabor frutados.',
            'crianza_barricado' => 'Cosecha manual. Crianza en barril 12 meses. Tipo de roble 50% francés, nuevo; 50% americano, nuevo.',
            'precio' => '3439',
            'categoria_id' => '4',
            'is_visible' => '1',
            'bodega_id' => '1',
            'imagen' => 'productos/Rutini_Cabernet_Sauvignon_Malbec_aoewyd.jpg',
        ]);

        Producto::create([
            'nombre' => 'Felipe Rutini Blend
            ',
            'descripcion' => 'BODEGA: Rutini Wines
            TIPO: Tinto
            VARIEDAD: Blend
            CORTE: Cabernet Sauvignon 50 % Merlto 30 % Malbec 20 %
            ALCOHOL: 14,5 %
            ',
            'nota_cata' => 'Rojo rubí profundo, con reflejos púrpura. La gama aromática, intensa y frutada, revela notas de frutos rojos maduros (cerezas, frutillas, ciruelas) finamente ensamblados con suaves acentos de vainilla, cuero, tabaco y cacao amargo, que aporta el roble francés nuevo. Los sabores que despliega en boca son complejos y, al mismo tiempo, de asombrosa suavidad. Su singular estructura promete un prolongado potencial de añejamiento.',
            'crianza_barricado' => 'Tipo de cosecha manual. Crianza en barrica 24 meses. Tipo de roble francés, nuevo.',
            'precio' => '173670',
            'categoria_id' => '2',
            'is_visible' => '1',
            'bodega_id' => '1',
            'imagen' => 'productos/Felipe_Rutini_Blend_wmz3lx.jpg',
        ]);

        Producto::create([
            'nombre' => 'Catena Malbec Argentino
            ',
            'descripcion' => 'BODEGA: Catena Zapata
            TIPO: Tinto
            VARIEDAD: Malbec
            CORTE: Malbec 100 %
            ALCOHOL: 14,1',
            'nota_cata' => 'No importa cuál sea la cosecha, en realidad este vino posee más de 100 años de antigüedad. Representa el trayecto emprendido por una familia para producir un Malbec argentino que pudiese competir con los mejores vinos del mundo.',
            'crianza_barricado' => 'Fermentación en barriles de roble francés nuevo, de 225 a 500 litros; 20% fermentación de racimos enteros. Los granos enteros, volcados manualmente en los barriles, fermentan durante 30 días en los mismos, alcanzando una perfecta integración de fruta/madera. Temperaturas bajas de fermentación para mayor extracción de componentes aromáticos. Tareas de remontaje manual para extracción suave y gentil de sabores y taninos. Levaduras indígenas. La fermentación alcohólica y maloláctica en barriles favorece la precipitación de lías y sedimentos. Finalizado el período de fermentación, el vino se añeja durante 18 meses en barricas de roble francés.',
            'precio' => '22699',
            'categoria_id' => '1',
            'is_visible' => '1',
            'bodega_id' => '2',
            'imagen' => 'productos/vino-catena-zapata-malbec-argentino.jpg',
        ]);

        Producto::create([
            'nombre' => 'Nicolas Catena Zapata
            ',
            'descripcion' => 'BODEGA: Catena Zapata
            TIPO: Tinto
            VARIEDAD: Blend
            CORTE: Cabernet Sauvignon 61% Malbec 31% Cabernet Franc 8%
            ALCOHOL: 13,6',
            'nota_cata' => 'De profundo e intenso color violeta, su aroma remite a concentradas notas de frutos negros, chocolate amargo y licor. También se perciben complejos aromas minerales y florales, junto a notas especiadas y de hierbas frescas. En boca es un vino de gran concentración, con pronunciados sabores a frutos negros y un fuerte lado mineral.',
            'crianza_barricado' => 'Fermentación en barriles de roble francés de 225 a 500 litros; 10% racimos enteros y 90% granos de uva. Las uvas, volcadas manualmente en los barriles, fermentan durante 15 días en los mismos, alcanzando una perfecta integración de fruta/madera. Temperaturas bajas de fermentación para mayor extracción de componentes aromáticos. Tareas de remontaje manual para extracción suave y gentil de sabores y taninos. La fermentación alcohólica y maloláctica en barriles favorece la precipitación de lías y sedimentos. Finalizado el período de fermentación, el vino se añeja durante 18 meses en barricas de roble francés. Luego se estiba en botella durante 18 meses, antes de su lanzamiento al mercado. Este vino se elaboró a partir de 210 micro vinificaciones de distintas hileras, pertenecientes a diferentes lotes y cosechadas en diferentes momentos.',
            'precio' => '22699',
            'categoria_id' => '2',
            'is_visible' => '1',
            'bodega_id' => '2',
            'imagen' => 'productos/botella.jpg',
        ]);

        Producto::create([
            'nombre' => 'DV Catena Adrianna Vineyard Malbec
            ',
            'descripcion' => 'BODEGA: Catena Zpata 
            TIPO: Tinto
            VARIEDAD: Malbec
            CORTE: Malbec
            ALCOHOL: 14 %',
            'nota_cata' => 'dasda',
            'crianza_barricado' => 'Cosecha manual, 3 momentos de cosecha. Fermentación en barriles de roble francés. Levaduras seleccionadas, máxima. temperatura de fermentacion 28° C, durante 17 días, con 29 días de maceración. Criado 24 meses en 100% Roble francés (100% nuevo).',
            'precio' => '7838',
            'categoria_id' => '1',
            'is_visible' => '1',
            'bodega_id' => '2',
            'imagen' => 'productos/DV_Catena_Adrianna_Vineyard_Malbec_ectk1u.jpg',
        ]);

        Producto::create([
            'nombre' => 'Angelica Zapata Malbec
            ',
            'descripcion' => 'BODEGA: Catena Zapata   
            TIPO: Tinto
            VARIEDAD: Malbec 
            CORTE: Malbec  100 %
            ALCOHOL: 14 %',
            'nota_cata' => 'Angélica Zapata Malbec es un blend proveniente de uvas Malbec de diferentes viñedos. El resultado es un vino de gran concentración y elegancia. El viñedo Angélica aporta aromas de ciruelas maduras, mermelada de frutos rojos, suavidad y volumen al paladar. La Pirámide entrega aromas de frutos negros de carozo y notas especiadas de pimienta negra y clavo de olor. Nicasia cuartel 2, aporta frutos rojos del bosque , frescura y elegancia. El cuartel 3 de Adrianna presenta aromas florales intensos que recuerdan a violeta y lavanda, mientras que el cuartel 9 de este viñedo aporta un color violeta oscuro y profundo, aroma de frutos negros maduros, notas minerales y un largo final en boca',
            'crianza_barricado' => 'Tiempo en barriles 18 meses en Roble Francés, 50% Nuevo. Fermentación con levaduras seleccionadas , maxima. temperatura 29º C durante 10 días, con 30 días de maceración.',
            'precio' => '7760',
            'categoria_id' => '1',
            'is_visible' => '1',
            'bodega_id' => '2',
            'imagen' => 'productos/Angelica_Zapata_Malbec_pydsjp.jpg',
        ]);

        Producto::create([
            'nombre' => 'DV Catena Malbec Malbec',
            'descripcion' => 'BODEGA: Catena Zapata  
            TIPO: Tinto
            VARIEDAD: Malbec-Malbec  
            CORTE: Malbec 100 %
            ALCOHOL: 14 %',
            'nota_cata' => 'El viñedo Angelica aporta aromas de mermeladas de ciruelas maduras y moras negras, suavidad y volumen al paladar. La Pirámide entrega aromas de frutos negros de carozo y notas de especias como pimienta negra y clavo de olor. Se conjugan de manera excepcional para dar origen a este vino, intenso y concentrado, de final largo y muy persistente.',
            'crianza_barricado' => 'Crianza 18 meses en Roble Francés 50% Nuevo. Fermentación maxima temperatura 30º C durante 14 días con 25 días de maceración.',
            'precio' => '5552',
            'categoria_id' => '1',
            'is_visible' => '1',
            'bodega_id' => '2',
            'imagen' => 'productos/DV_Catena_Malbec_Malbec_ur8wbi.jpg',
        ]);

        Producto::create([
            'nombre' => 'DV Catena Cabernet Cabernet
            ',
            'descripcion' => 'BODEGA: Catena Zapata  
            TIPO: Tinto
            VARIEDAD: Cabernet Sauvignon
            CORTE: Cabernet Sauvignon 100 %
            ALCOHOL: 14 %',
            'nota_cata' => 'D.V. Catena Cabernet - Cabernet es un vino de gran complejidad y elegancia: Las uvas Cabernet provenientes de Agrelo confieren un intenso sabor a frutos negros y excelente estructura. El Cabernet Sauvignon de Villa Bastías otorga aromas a cerezas negras maduras y un refrescante lado mineral. El paso por roble añade a su vez deliciosas notas de tostado y caramelo.',
            'crianza_barricado' => 'La cosecha en La Pirámide es la ultima semana de Marzo y en Domingo, la segunda semana de abril. La fermentacion La Pirámide: Max temp. 28° C, 28 días de maceración Domingo: Max temp. 28° C, 26 días de maceración. Crianza  18 meses en Roble francés 80 % nuevo',
            'precio' => '5552',
            'categoria_id' => '4',
            'is_visible' => '1',
            'bodega_id' => '2',
            'imagen' => 'productos/DV_Catena_Cabernet_Cabernet_oqb3zr.jpg',
        ]);

        Producto::create([
            'nombre' => 'Angelica Zapata Cabernet Franc',
            'descripcion' => 'BODEGA: Catena Zapata   
            TIPO: Tinto
            VARIEDAD: Cabernet Franc  
            CORTE: Cabernet Franc 100 %
            ALCOHOL: 14 %',
            'nota_cata' => 'Presenta un color rojo rubí con suaves tonalidades violáceas. Posee aroma intenso y concentrado con notas de cassis, grosellas maduras, y toques de vainilla y especias dulces como pimienta negra y clavo de olor. De impacto dulce y excelente estructura en boca, muestra frutos rojos maduros con marcados dejos a eucalipto y pimienta negra. Este vino, de excelente balance y elegancia, posee ahora un final bien estructurado y persistente y se prevé que evolucionará favorablemente en botella hasta por lo menos el año 2021..',
            'crianza_barricado' => 'Tiempo en barriles 18 meses roble francés 100% , 50%  son nuevo. Máxima temperatura de fermentación: 30° C. Maceración pelicular 30 días.',
            'precio' => '5369',
            'categoria_id' => '3',
            'is_visible' => '1',
            'bodega_id' => '2',
            'imagen' => 'productos/Angelica_Zapata_Cabernet_Franc_jtb02m.jpg',
        ]);

        Producto::create([
            'nombre' => 'Angelica Zapata Merlot
            ',
            'descripcion' => 'BODEGA: Catena Zapata   
            TIPO: Tinto
            VARIEDAD: Merlot
            CORTE: Merlot 100 %
            ALCOHOL: 14 %',
            'nota_cata' => 'Angélica Zapata Merlot, es un vino elegante y complejo de color rojo violáceo con destellos rubíes, de nariz delicada, donde sobresalen aromas que recuerdan a de frutos rojos del bosque y notas suaves de especias como pimienta negra y clavo de olor, aportados por las uvas del viñedo La Pirámide , y aromas a frutos rojos y negros maduros como cassis y grosellas aportados por las uvas de Nicasia y Adrianna. El paso por roble aporta notas suaves de especias y vainilla. En boca de impacto dulce y cuerpo medio, muy equilibrado con la acidez, se perciben taninos muy suaves y redondos que ofrecen un final longevo y agradable.',
            'crianza_barricado' => 'Tiempo enbarriles 16 meses en roble Francés, 40% nuevo. Con 3 trasiegos. Fermentación con levaduras seleccionadas, temperatura maxima de fermentación 29º C durante 12 días, con 30 días de maceración.',
            'precio' => '4154',
            'categoria_id' => '5',
            'is_visible' => '1',
            'bodega_id' => '2',
            'imagen' => 'productos/Angelica_Zapata_Merlot_bsaotr.jpg',
        ]);

        Producto::create([
            'nombre' => 'Angelica Zapata Cabernet Sauvignon
            ',
            'descripcion' => 'BODEGA: Catena Zapata   
            TIPO: Tinto
            VARIEDAD: Cabernet Sauvignon
            CORTE: Cabernet Sauvignon 100 %
            ALCOHOL: 14 %',
            'nota_cata' => 'Color rojo rubí profundo. Se perciben en este vino aromas a frutas rojas, como cassis, cerezas y ciruelas maduras, junto a fragancias especiadas, tal como pimienta negra , clavo de olor, y notas suaves de orégano y tomillo. En la boca resulta un vino complejo, de buen cuerpo y estructura, taninos bien integrados, maduros, de excelente longitud e intensidad. El paso por roble aporta sabores especiados y vainilla.',
            'crianza_barricado' => 'Tiempo en barriles  12 meses en roble francés. Cosecha manual. Fermentación con levaduras seleccionadas. Máxima temperatura de fermentacion 30° C durante 14 días. 32 días de maceración.',
            'precio' => '4154',
            'categoria_id' => '4',
            'is_visible' => '1',
            'bodega_id' => '2',
            'imagen' => 'productos/Angelica_Zapata_Cabernet_Sauvignon_tocmjc.jpg',
        ]);

        Producto::create([
            'nombre' => 'DV Catena Syrah Syrah
            ',
            'descripcion' => 'BODEGA: Catena Zapata  
            TIPO: Tinto
            VARIEDAD: Syrah-Syrah
            CORTE: Syrah 100 %
            ALCOHOL: 13,5 %',
            'nota_cata' => 'dasda',
            'crianza_barricado' => 'Añejamiento 16 meses en 85% roble francés (30% nuevo), y 15% roble americano nuevo. Fermentación con levaduras seleccionadas. Máxima temperatura de fermentación  30º C, durante 12 días, descube en caliente y fin de fermentación alcohólica en barricas',
            'precio' => '3723',
            'categoria_id' => '6',
            'is_visible' => '1',
            'bodega_id' => '2',
            'imagen' => 'productos/DV_Catena_Syrah_Syrah_erlftk.jpg',
        ]);

        Producto::create([
            'nombre' => 'Trapiche Gran Medalla Cabernet Franc',
            'descripcion' => 'BODEGA:  Trapiche
            TIPO: Tinto
            VARIEDAD: Cabernet Franc
            CORTE: Cabernet Franc 100 % 
            ALCOHOL: 14 %',
            'nota_cata' => 'Temperatura de servicio para este vino es entre 16º y 18º C, Potencial de guarda 10 años. Decantar por espacio de una hora antes de beberlo. Conservar en lugar fresco, oscuro, y sin vibraciones. Ideal para acompañar un Lomo de cordero con pure de coliflor.',
            'crianza_barricado' => ' Criado en barricas de roble francés de primer uso durante 18 meses.',
            'precio' => '6455',
            'categoria_id' => '3',
            'is_visible' => '1',
            'bodega_id' => '3',
            'imagen' => 'productos/trapiche-gran-medalla-cf.jpg',
        ]);
        Producto::create([
            'nombre' => 'Trapiche Gran Medalla Malbec
            ',
            'descripcion' => 'BODEGA:  Trapiche
            TIPO: Tinto
            CORTE: Malbec 100 % 
            ALCOHOL: 14 %',
            'nota_cata' => 'Temperatura de servicio para este vino es entre 17º y 19º C, Potencial de guarda 10 años. Decantar por espacio de una hora antes de beberlo. Conservar en lugar fresco, oscuro, y sin vibraciones. Ideal para acompañar platos típicos argentinos: carnes asadas, a la masa o en horno de barro. Locros, carbonadas, guisos y fiambres ahumados.',
            'crianza_barricado' => 'Cosecha de forma manual, crianza en barricas de roble francés.',
            'precio' => '6640',
            'categoria_id' => '1',
            'is_visible' => '1',
            'bodega_id' => '3',
            'imagen' => 'productos/Trapiche_Gran_Medalla_Malbec_fcahm9.jpg',
        ]);
        Producto::create([
            'nombre' => 'Trapiche Gran Medalla Cabernet Sauvignon',
            'descripcion' => 'BODEGA:  Trapiche
            TIPO: Tinto
            VARIEDAD: Cabernet Sauvignon
            CORTE: Cabernet Sauvignon 100 % 
            ALCOHOL: 14 %',
            'nota_cata' => 'Temperatura de servicio para este vino es entre 16º y 18º C, Potencial de guarda 10 años. Decantar por espacio de una hora antes de beberlo. Conservar en lugar fresco, oscuro, y sin vibraciones. Ideal para acompañar un Lomo de cordero con pure de coliflor.',
            'crianza_barricado' => 'Cosecha de forma manual, crianza en barricas de roble francés.',
            'precio' => '6460',
            'categoria_id' => '4',
            'is_visible' => '1',
            'bodega_id' => '3',
            'imagen' => 'productos/Trapiche_Gran_Medalla_Cabernet_Sauvignon_kumuyz.jpg',
        ]);
        Producto::create([
            'nombre' => 'Trapiche Medalla Blend
            ',
            'descripcion' => 'BODEGA:  Trapiche
            TIPO: Tinto
            VARIEDAD: Blend
            CORTE: Cabernet Sauvignon, Malbec, Merlot 
            ALCOHOL: 14 %',
            'nota_cata' => 'Temperatura de servicio para este vino es entre 16º y 18º C, Potencial de guarda 10 años. Decantar por espacio de una hora antes de beberlo. Conservar en lugar fresco, oscuro, y sin vibraciones. Ideal para acompañar un buen Bife de chorizo a la parrilla con ensalada de vegetales.',
            'crianza_barricado' => 'Cosecha y selección de forma manual. Añejado en barricas de roble francés ',
            'precio' => '3099',
            'categoria_id' => '2',
            'is_visible' => '1',
            'bodega_id' => '3',
            'imagen' => 'productos/Trapiche_Medalla_hotscv.jpg',
        ]);
        Producto::create([
            'nombre' => 'El Enemigo Malbec
            ',
            'descripcion' => 'BODEGA: El Enemigo Wines  
            TIPO: Tinto
            VARIEDAD: Malbec 
            CORTE: Malbec 89 %  Cabernet Franc 6 % Petit Verdot 5 %
            ALCOHOL: 13,9 %',
            'nota_cata' => '-',
            'crianza_barricado' => 'Añejamiento 14 meses de crianza en barricas de roble francés. Fermentacion con l<span class="notranslate">evadura salvaje, Maxima t<span class="notranslate">emperatura <span class="notranslate">29º C durante 20 días, <span class="notranslate">con 30 días de maceración.',
            'precio' => '6036',
            'categoria_id' => '1',
            'is_visible' => '1',
            'bodega_id' => '4',
            'imagen' => 'productos/El_Enemigo_Malbec_leuxof.jpg',
        ]);
        Producto::create([
            'nombre' => 'El Enemigo Cabernet Franc',
            'descripcion' => 'BODEGA: El Enemigo Wines  
            TIPO: Tinto
            VARIEDAD: Cabernet Franc  
            CORTE: Malbec 8 %  Cabernet Franc 92 % 
            ALCOHOL: 13,9 %
            ',
            'nota_cata' => 'Este Cabernet Franc es de color rojo rubí con tonos violetas suaves. En nariz, aromas intensos y notas concentradas de cassis, grosellas maduras y especias dulces que incluyen la pimienta negro. Su paso por roble ofrece notas integradas de cedro y vainilla. Impacto fresco y excelente estructura en boca, que recuerda a frutos rojos maduros con notas de eucalipto y pimienta negra. Este vino tiene un excelente equilibrio y elegancia con un final persistente bien estructurado.',
            'crianza_barricado' => 'Elaboración .Máxima Temperatura 28º C durante 22 días, con 28 días de maceración. 5 tiempos de cosecha diferentes (con un total de un período de 5 semanas diferencia entre el primero y el último). Criado 16 meses en barricas de roble francés, 20% nuevas.',
            'precio' => '6036',
            'categoria_id' => '3',
            'is_visible' => '1',
            'bodega_id' => '4',
            'imagen' => 'productos/El_Enemigo_Cabernet_Franc_mo9sxm.jpg',
        ]);
        Producto::create([
            'nombre' => 'Gran Enemigo Corte
            ',
            'descripcion' => 'BODEGA: El Enemigo Wines  
            TIPO: Tinto
            VARIEDAD: Blend 
            CORTE: Cabernet Franc 73 % Cabernet Sauvignon 12 % Petit Verdot 10 % Malbec 5 % 
            ALCOHOL: 13,9 %',
            'nota_cata' => 'De sabor intenso, buen color y aroma frutal.',
            'crianza_barricado' => 'Cosecha las uvas se levantan en 7 momentos diferentes de la temporada , La fermentación en barrica, temperatura media 22ºC. Maceración en frío durante 5 días. Maceración media de 23 días. 30% manojo entero. Barricas de roble francés segunda y tercera uso. 4 tiempos de cosecha diferentes (1,5 meses entre la primera y la última). Añejado por 18 meses en roble francés y americano, 35% nuevo. ',
            'precio' => '12125',
            'categoria_id' => '2',
            'is_visible' => '1',
            'bodega_id' => '4',
            'imagen' => 'productos/El_Gran_Enemigo_appw56.jpg',
        ]);
        Producto::create([
            'nombre' => 'Gran Enemigo Gualtallary Cabernet Franc',
            'descripcion' => 'BODEGA: El Enemigo Wines  
            TIPO: Tinto
            VARIEDAD: Blend 
            CORTE: Cabernet Franc 85 % Malbec 15 % 
            ALCOHOL: 13,9 %',
            'nota_cata' => 'Adrianna y yo lo hacemos en honor al antiguo estilo Pomerol donde se mezclaba Cabernet Franc con las otras variedades de Burdeos", dice Alejandro',
            'crianza_barricado' => '7 meses en foudres. Fermentación en barrica, temperatura media: 22ºC. Maceración en frío durante 5 días. Maceración media 23 días. 30% del racimo entero. 2º y 3º uso de barricas de roble francés. 4 tiempos de cosecha diferentes',
            'precio' => '15899',
            'categoria_id' => '3',
            'is_visible' => '1',
            'bodega_id' => '4',
            'imagen' => 'productos/gran-enemigo-gualtallary-2013-100-puntos-caja-saavedra-d_nq_np_686116-mla28296533979_102018-f11-05d5edf381f1cc3f7615918989757886-640-0.jpg',
        ]);
        Producto::create([
            'nombre' => 'Salentein Gran VU Blend
            ',
            'descripcion' => 'BODEGA: Bodegas Salentein
            TIPO: Tinto
            VARIEDAD: Blend
            CORTE: Malbec 73 % Cabernet Sauvignon 23 %
            ALCOHOL: 15 %',
            'nota_cata' => 'Temperatura de servicio de este vino es entre 16º y 18º C. Potencial de guarda unos 10 años. Recomendamos decantar este vino 1 hora antes de su consumo. . Conservar en lugar fresco, oscuro, y sin vibraciones. Ideal para acompañar carnes asadas con verduras grilladas.',
            'crianza_barricado' => '7 meses en barrica de Roble, estacionado por 12 meses mas.',
            'precio' => '18599',
            'categoria_id' => '2',
            'is_visible' => '1',
            'bodega_id' => '5',
            'imagen' => 'productos/Salentein_Gran_VU_Blend_jfntpk.jpg',
        ]);
        Producto::create([
            'nombre' => 'Salentein Single Vineyard Malbec Los Jabalíes',
            'descripcion' => 'BODEGA: Bodegas Salentein
            TIPO: Tinto
            VARIEDAD: Malbec
            CORTE: Malbec 100 %
            ALCOHOL: 14,5 %
            ',
            'nota_cata' => 'Este vino se destaca por la intensidad y complejidad de sus aromas frutales y de violetas. En boca es elegante y exótico, con taninos sedosos, notas de frutos negros, pimienta y grafito. Su acidez refrescante le otorga un prolongado final.',
            'crianza_barricado' => 'El clima frío, la gran amplitud térmica y mayor humedad, sumados a suelos pedregosos con carbonatos de calcio y un manejo sustentable del viñedo, nos permite producir uvas Malbec de altísima calidad que, vinificadas con mínima intervención, alcanzan la mayor expresión varietal de este viñedo único.',
            'precio' => '14839',
            'categoria_id' => '1',
            'is_visible' => '1',
            'bodega_id' => '5',
            'imagen' => 'productos/SAN-PABLO-MALBEC.png',
        ]);
        Producto::create([
            'nombre' => 'Salentein Primus Cabernet Sauvignon',
            'descripcion' => 'BODEGA: Bodegas Salentein
            TIPO: Tinto
            VARIEDAD: Cabernet 
            CORTE: Cabernet Sauvignon 100 %
            ALCOHOL: 14,5 %
            ',
            'nota_cata' => 'De sabor intenso y agradable. Color Rubi. Temperatura de servicio de este vino es entre 16º y 18º C. ',
            'crianza_barricado' => '8 meses en Barrica de pino :P',
            'precio' => '8875',
            'categoria_id' => '4',
            'is_visible' => '1',
            'bodega_id' => '5',
            'imagen' => 'productos/primus_cabernet_bot_web__85770_zoom-1.jpg',
        ]);
        Producto::create([
            'nombre' => 'Numina Cabernet Franc
            '
            ,
            'descripcion' => 'BODEGA: Bodegas Salentein
            TIPO: Tinto
            VARIEDAD: Cabernet Franc
            CORTE: Cabernet Franc 100 %
            ALCOHOL: 14,5 %
            ENÓLOGO: Pepe Galante
            COSECHA: 2020',
            'nota_cata' => 'Rojo con tonalidades bordo de buena intensidad y limpidez. Aroma, de mucha expresión y tipicidad varietal, crema de cassis, arándanos, especies tales como el clavo de olor. En la boca se sienten taninos maduros, dulces y redondos, amplio y untuoso en la media boca muy persistente.',
            'crianza_barricado' => '14 meses en barricas francesas',
            'precio' => '3074',
            'categoria_id' => '3',
            'is_visible' => '1',
            'bodega_id' => '5',
            'imagen' => 'productos/Numina-Cabernet-Franc.jpg',
        ]);
        
        Producto::create([
            'nombre' => 'Numina Syrah',
            'descripcion' => 'Excelente presentacion de familiaNumina',
            'nota_cata' => 'Muy rico :P, Temperatura de servicio de este vino es entre 16º y 18º C.',
            'crianza_barricado' => 'Otro estacionado en barrica de pino :P',
            'precio' => '2269',
            'categoria_id' => '6',
            'is_visible' => '1',
            'bodega_id' => '5',
            'imagen' => 'productos/Numina_Syrah_f1ph98.jpg',
        ]);
        Producto::create([
            'nombre' => 'Salentein Reserve Merlot
            ',
            'descripcion' => 'BODEGA: Bodegas Salentein
            TIPO: Tinto
            VARIEDAD: Merlot
            CORTE: Merlot 100 %
            ALCOHOL: 14 %
            ENÓLOGO: Pepe Galante
            COSECHA: 2019',
            'nota_cata' => 'A la vista presenta color rojo con tonalidades bordó. En la nariz es complejo, se destacan aromas a membrillo y frutos rojos y dulce de tomate. En la boca es sedoso y envolvente, de muy buena estructura.',
            'crianza_barricado' => '10 a 12 meses en barricas de roble francés. Varietales provenientes de las fincas que se ubican entre los 1050 y 1700 metros, con suelos pedregosos, gran amplitud térmica, optima exposición solar y agua pura de deshielo de los Andes que brindan las condiciones ideales para elaborar vinos que son la máxima expresión del Valle de Uco.',
            'precio' => '9888',
            'categoria_id' => '5',
            'is_visible' => '1',
            'bodega_id' => '5',
            'imagen' => 'productos/Salentein_Reserve_Merlot_sndhhr.jpg',
        ]);
        Producto::create([
            'nombre' => 'Zuccardi Aluvional Altamira Malbec',
            'descripcion' => 'BODEGA: Zuccardi
            TIPO: Tinto
            VARIEDAD: Malbec
            CORTE: Malbec 100 %
            ALCOHOL: 15,3 %
            ENÓLOGO: Sebastián Zuccardi
            COSECHA: 2016',
            'nota_cata' => 'Color Rojo Rubi, de aroma intenso, agradable a la vista. Temperatura de servicio para este vino es entre 16º y 18º C, Potencial de guarda 15 años. Decantar por espacio de una hora antes de beberlo. Conservar en lugar fresco, oscuro, y sin vibraciones. Ideal para acompañar un Bife de chorizo con ensalada mixta.',
            'crianza_barricado' => 'Doble cinta vibratoria de selección; selección inicial de racimos y selección de granos posterior al descobajado. Suave molienda. Llenado de piletas de concreto por gravedad usando pequeñas cubas de 500 kg. Fermentación con levaduras indígenas, maceración de 26 días siguiendo procesos de pigeage y delestage periódicos. Fermentación maloláctica completa en barricas. Selección de las mejores barricas por degustación para realizar el corte final. Puesto en botella sin filtrar. Crianza en barricas nuevas de roble francés de tostado medio, durante 24 meses.',
            'precio' => '16168',
            'categoria_id' => '1',
            'is_visible' => '1',
            'bodega_id' => '6',
            'imagen' => 'productos/Zuccardi_Aluvional_Altamira_Malbec_f9mowu.jpg',
        ]);
        Producto::create([
            'nombre' => 'Jose Zuccardi
            ',
            'descripcion' => 'BODEGA: Zuccardi
            TIPO: Tinto
            VARIEDAD: Malbec
            CORTE: Malbec 95 % Cabernet Sauvignon 5 %
            ALCOHOL: 14,5 %
            ENÓLOGO: Sebastián Zuccardi
            COSECHA: 2018',
            'nota_cata' => 'Temperatura de servicio para este vino es entre 16º y 18º C, Potencial de guarda 10 años. Decantar por espacio de una hora antes de beberlo. Conservar en lugar fresco, oscuro, y sin vibraciones. Ideal para acompañar unos Ravioles de ossobuco.',
            'crianza_barricado' => 'Cosecha manual en cajas plásticas. Selección de racimos, llenado de piletas de hormigón por gravedad y fermentación con levaduras indígenas. Maceración de 20 días, con pigeage y delestage. La crianza se realizó en foudres de roble. Embotellado sin filtrar. Crianza 14 meses en barricas nuevas de roble francés, por separado.',
            'precio' => '9880',
            'categoria_id' => '1',
            'is_visible' => '1',
            'bodega_id' => '6',
            'imagen' => 'productos/vino-zuccardi-malbec-D_NQ_NP_803303-MLA28694184384_112018-F.jpg',
        ]);
        Producto::create([
            'nombre' => 'Tito Zuccardi Blend
            ',
            'descripcion' => 'BODEGA: Zuccardi
            TIPO: Tinto
            VARIEDAD: Blend
            CORTE: Malbec 83 % Cabernet Sauvignon 10 % Caladoc 7 %
            ALCOHOL: 15,4 %
            ENÓLOGO: Sebastián Zuccardi
            COSECHA: 2020',
            'nota_cata' => 'Temperatura de servicio para este vino es entre 16º y 18º C, Potencial de guarda 10 años. Decantar por espacio de una hora antes de beberlo. Conservar en lugar fresco, oscuro, y sin vibraciones. Ideal para acompañar unos Bife a la criolla. ',
            'crianza_barricado' => 'Doble selección de la uva, antes y después del descobajado y llenado de piletas de fermentación por gravedad. En todos los casos se hizo fermentación en piletas de hormigón, sin epoxi, usando levaduras indígenas, con pigeage manual y delestage. Parte del Malbec fue fermentado con escobajo. La maceración total sobre los orujos fue de 30 días y la fermentación maloláctica se desarrolló en barrica. La crianza de cada uno de los vinos se realizó en barricas de roble francés nuevas durante 12 meses antes del corte final.',
            'precio' => '6736',
            'categoria_id' => '2',
            'is_visible' => '1',
            'bodega_id' => '6',
            'imagen' => 'productos/Tito_Zuccardi_Blend_cojtac.jpg',
        ]);
        Producto::create([
            'nombre' => 'Zuccardi Q Tempranillo',
            'descripcion' => 'BODEGA: Zuccardi
            TIPO: Tinto
            CORTE: Tempranillo 100 %
            ALCOHOL: 14,1 %
            ENÓLOGO: Sebastián Zuccardi
            COSECHA: 2017',
            'nota_cata' => 'Temperatura de servicio para este vino es entre 16º y 18º C, Potencial de guarda 8 años. Decantar por espacio de una hora antes de beberlo. Conservar en lugar fresco, oscuro, y sin vibraciones. Ideal para acompañar una Colita de cuadril al horno con un salteado de hongos.',
            'crianza_barricado' => 'Cosecha manual. Fermentación selección de la uva, descobajado y molienda suave, fermentación con levaduras seleccionadas con delestage y pigeage periódicos. Prolongada maceración pot-fermentativa sobre los orujos. Fermentación maloláctica completa en la barrica. Durante 12 meses en barricas de roble francés y americano. Crianza en botella: Por 12 meses antes de la venta.',
            'precio' => '5444',
            'categoria_id' => '7',
            'is_visible' => '1',
            'bodega_id' => '6',
            'imagen' => 'productos/Zuccardi-Q-Tempranillo.jpg',
        ]);
        Producto::create([
            'nombre' => 'Zuccardi Q Cabernet Sauvignon
            ',
            'descripcion' => 'BODEGA: Zuccardi
            TIPO: Tinto
            VARIEDAD: Cabernet Sauvignon
            CORTE: Cabernet Sauvignon 100 %
            ALCOHOL: 14 %',
            'nota_cata' => 'Temperatura de servicio para este vino es entre 16º y 18º C, Potencial de guarda 8 años. Decantar por espacio de una hora antes de beberlo. Conservar en lugar fresco, oscuro, y sin vibraciones. Ideal para acompañar un Strudel de ternera y quinoa. ',
            'crianza_barricado' => 'Cosecha manual. Fermentación selección de racimos, descobajado, selección de granos y gentil molienda. Vinificación clásica en tinto con fermentación en tanques de acero inoxidable con pigeage y delestage, con control de temperatura entre 25º-27º C. Maceración sobre los orujos de 20 días. Fermentación maloláctica natural, en barrica. 12 meses en barricas de roble francés tostado medio. Crianza en botella 12 meses antes de su lanzamiento.',
            'precio' => '2222',
            'categoria_id' => '4',
            'is_visible' => '1',
            'bodega_id' => '6',
            'imagen' => 'productos/Zuccardi-Q-Cabernet-Sauvignon-002.png',
        ]);
        Producto::create([
            'nombre' => 'Zuccardi Serie A Syrah
            ',
            'descripcion' => 'BODEGA: Zuccardi
            TIPO: Tinto
            VARIEDAD: Syrah
            CORTE: Syrah 100 % 
            ALCOHOL: 14 %
            ENÓLOGO: Sebastián Zuccardi',
            'nota_cata' => 'Temperatura de servicio para este vino es entre 16º y 18º C, Potencial de guarda 5 años. Decantar por espacio de una hora antes de beberlo. Conservar en lugar fresco, oscuro, y sin vibraciones. Ideal para acompañar unas Albóndigas de cordero con puré de papas.',
            'crianza_barricado' => 'Cosecha manual, con selección de racimos y granos en la bodega, antes de la molienda. Las uvas fueron decobajadas y molidas, luego se realizó una maceración prefermentativa fría para seguir con una vinificación clásica en tinto, con siembra de levaduras seleccionadas y fermentación entre 25-27º C. Maceración de 20 días sobre los orujos, con remontajes y delestage periódicos, descube y fermentación maloláctica completa. El 30% del vino fue madurado en barricas de roble francés de primer, segundo y tercer uso, durante 10 meses.',
            'precio' => '2222',
            'categoria_id' => '6',
            'is_visible' => '1',
            'bodega_id' => '6',
            'imagen' => 'productos/Zuccardi_Serie_A_Syrah_vuyfqc.jpg',
        ]);
        
        
    }
}
