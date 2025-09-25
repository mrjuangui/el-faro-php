<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Noticia;

class NoticiaSeeder extends Seeder
{
    public function run()
    {
        // Noticia 1
        Noticia::updateOrCreate(
            ['slug' => 'alexis-sanchez-sevilla'],
            [
            'titulo' => 'El nuevo rol de Alexis Sánchez en el Sevilla y cuándo regresa a La Liga',
            'contenido' => <<<EOT
<p>Alexis Sánchez fue apagando las duras críticas que generó su sorpresiva llegada a Sevilla, luego de una temporada para el olvido en Udinese, en la cual apenas jugó en 14 partidos.</p>
<p>En su debut, el tocopillano se lució con una asistencia para el gol del empate ante Elche, actuación que le valió un mar de elogios de parte de la prensa hispana.</p>
<p>Sevilla volverá a jugar el sábado ante Deportivo Alavés, desde las 13:30 horas de Chile, por la Liga española.</p>
<center><iframe width="560" height="315" src="https://www.youtube.com/embed/v2akak98fmY?si=NAE3QUz1-0KGwJde" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe><center>
EOT,
            'imagen' => 'deportes-1.jpg',
            'user_id' => 1,
            'categoria' => 'deporte',
            'destacado' => 1
        ]);

        // Noticia 2
        Noticia::updateOrCreate(
            ['slug' => 'espana-numero-uno-fifa'],
            [
            'titulo' => 'España es el nuevo número uno del ranking FIFA y Chile sigue 57°',
            'contenido' => <<<EOT
<p>La FIFA dio a conocer una nueva actualización del ranking de selecciones y hay un nuevo equipo en el número uno. Es España.</p>
<p>El equipo español, campeón de la última Eurocopa y finalista de la última Nations League, no estaba en los más alto de la clasificación desde junio de 2014. En estos momentos tiene 1875.37 puntos.</p>
<p>¿Y Chile? Sigue en el puesto 57° con 1441.46 puntos.</p>
<center><iframe width="560" height="315" src="https://www.youtube.com/embed/4Lve33vH1G8?si=JtTHcGGReTADWEj6" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe><center>
EOT,
            'imagen' => 'deportes-2.jpg',
            'user_id' => 1,
            'categoria' => 'deporte',
            'destacado' => 0
        ]);

        // Noticia 3
        Noticia::updateOrCreate(
            ['slug' => 'mourinho-entrendador-benfica'],
            [
            'titulo' => 'Oficial: José Mourinho es el nuevo entrenador del Benfica',
            'contenido' => <<<EOT
<p>Ya es oficial. José Mourinho, a menos de un mes de su salida del Fenerbahce, tiene nuevo club.</p>
<p>El entrenador dirigirá al Benfica. El cuadro lisboeta despidió a Bruno Lage luego de la inesperada derrota frente al Qarabag por la Champions League y se movió rápido para encontrar un reemplazante.</p>
<p>"Mou" vuelve a sus orígenes. En el Benfica inició su carrera en el año 2000. Luego, vinieron muchos éxitos en Porto, Chelsea, Inter de Milán, Real Madrid y Manchester United.</p>
<center><iframe width="560" height="315" src="https://www.youtube.com/embed/n0uO5yLpHy4?si=YMnu1ooRaOMQ8trJ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe></center>
EOT,
            'imagen' => 'deportes-3.jpg',
            'user_id' => 1,
            'categoria' => 'deporte',
            'destacado' => 0
        ]);

        // Noticia 4
        Noticia::updateOrCreate(
            ['slug' => 'ADVS-presupuesto-Serviu'],
            [
            'titulo' => 'Alertan por déficit presupuestario que "pone en riesgo el corazón del plan de emergencia habitacional"',
            'contenido' => <<<EOT
<p>Un severo déficit presupuestario que enfrenta el Plan de Emergencia Habitacional fue lo que la Asociación de Desarrolladores de Viviendas Sociales (ADVS) expuso en la Comisión de Vivienda del Senado.</p>
<p>Una situación que -según dicen- ya comienza a impactar en la construcción de viviendas sociales y en el empleo ligado al sector.</p>
<p>De acuerdo con las estimaciones del gremio, en el caso del Serviu Metropolitano se registra un faltante de $312 mil millones, lo que equivale al 32,3% de su presupuesto vigente.</p>
<div class="audio" >
    <audio controls>
        <source src="../mp3/negocios-1.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>
</div>
EOT,
            'imagen' => 'negocios-1.jpg',
            'user_id' => 1,
            'categoria' => 'negocios',
            'destacado' => 0
        ]);

        // Noticia 5
        Noticia::updateOrCreate(
            ['slug' => 'Fed-reduce-tasas-interes'],
            [
            'titulo' => 'Fed cumple con las expectativas y aplica el primer recorte de tasas en EE.UU. desde que Trump asumió',
            'contenido' => <<<EOT
<p>Sin sorpresas -aunque con un voto en contra-, el Comité Federal de Mercado Abierto (FOMC, por sus siglas en inglés) de la Reserva Federal (Fed) de Estados Unidos, aplicó el primer recorte a las tasas de interés en ese país de 2025 y desde que Donald Trump -quien desde hace meses viene presionando fuertemente por una baja- asumió su segundo mandato.</p>
<p>El banco central estadounidense redujo los tipos de interés en 25 puntos base hasta el rango objetivo del 4% al 4,25%, en línea con lo esperado por el mercado. Se trata de la primera baja desde diciembre de 2024.</p>
<p>Este recorte se sucede a las cinco veces consecutivas por las que el instituto emisor ha venido manteniendo el precio del dinero congelado desde enero, cuando pausó por primera vez.</p>
<div class="audio" >
    <audio controls>
        <source src="../mp3/negocios-2.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>
</div>
EOT,
            'imagen' => 'negocios-2.jpg',
            'user_id' => 1,
            'categoria' => 'negocios',
            'destacado' => 0
        ]);

        // Noticia 6
        Noticia::updateOrCreate(
            ['slug' => 'china-control-transelec'],
            [
            'titulo' => 'Gigante china busca tomar el control de Transelec, la mayor empresa de transmisión eléctrica de Chile',
            'contenido' => <<<EOT
<p>La gigante china Southern Power Grid Co. estaría en conversaciones avanzadas para adquirir una participación controladora Transelec, la mayor compañía de transmisión eléctrica de Chile, según fuentes de Bloomberg.</p>
<p>El segundo mayor operador de red eléctrica de China, que ya posee casi el 28% de Transelec, está considerando asociarse con el administrador de activos alternativos centrado en América Latina Patria Investments Ltd. y un fondo soberano de riqueza chino para ofertar por las participaciones en manos de tres fondos de pensiones canadienses, dijeron las fuentes, que pidieron no ser identificadas porque las discusiones son privadas.</p>
<p>Un posible acuerdo, que se ha estado negociando durante aproximadamente dos años, podría estar valorado en más de US$4 mil millones, según las fuentes. Las compañías podrían llegar a un acuerdo en las próximas semanas, indicaron, añadiendo que las conversaciones continúan y que aún no se han tomado decisiones definitivas.</p>
<div class="audio" >
    <audio controls>
        <source src="../mp3/negocios-3.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>
</div>
EOT,
            'imagen' => 'negocios-3.jpg',
            'user_id' => 1,
            'categoria' => 'negocios',
            'destacado' => 1
        ]);

        // Noticia 7
        Noticia::updateOrCreate(
            ['slug' => 'mon-laferte-grammy-2025'],
            [
            'titulo' => 'Mon Laferte recibe dos nominaciones a los Grammy Latinos 2025: Bad Bunny lidera candidaturas con 12',
            'contenido' => <<<EOT
<p>La cantante chilena Mon Laferte recibió dos nominaciones a la edición 26 de los Grammy Latinos, en las categorías de Canción del año, por "Otra noche de llorar", y Mejor video musical versión larga, por "Te Amo".</p>
<p>Por su parte, Bad Bunny lideró las candidaturas con 12, seguido de los argentinos Ca7riel & Paco Amoroso, y el compositor mexicano Edgar Barrera, quienes acumularon diez menciones cada uno.</p>
<p>El artista puertorriqueño logró consolidar el éxito de DeBÍ TiRAR MáS FOToS (DTMF), su séptimo trabajo publicado el pasado 5 de enero, en tres de las categorías reina, incluida Mejor grabación del año, Mejor canción del año y Mejor álbum del año.</p>
EOT,
            'imagen' => 'otros-1.jpg',
            'user_id' => 1,
            'categoria' => 'otros',
            'destacado' => 1
        ]);

        // Noticia 8
        Noticia::updateOrCreate(
            ['slug' => 'momias-mas-antiguas'],
            [
            'titulo' => 'Las momias más antiguas del mundo no serían chilenas: Científicos creen haberlas encontrado en Asia',
            'contenido' => <<<EOT
<p>Algunas civilizaciones antiguas de China y el sudeste asiático secaban los cuerpos de sus difuntos con humo, lo que sugiere que realizaron momificaciones miles de años antes que los egipcios o los chilenos, según un estudio.</p>
<p>Si bien las momificaciones en el antiguo Egipto, donde se envolvía a los cuerpos con vendas, se remontan a hace 4.500 años, los ejemplos más antiguos de momificación conocidos hasta ahora proceden de antiguas civilizaciones chilenas.</p>
<p>Aunque los científicos afirmaron que el ahumado era probablemente la "opción más eficaz para conservar los cadáveres en climas tropicales", es probable que el proceso también tuviera un significado cultural.</p>
EOT,
            'imagen' => 'otros-2.jpg',
            'user_id' => 1,
            'categoria' => 'otros',
            'destacado' => 0
        ]);

        // Noticia 9
        Noticia::updateOrCreate(
            ['slug' => 'machu-picchu-riesgo'],
            [
            'titulo' => 'Título de "Nueva Maravilla del Mundo" de Machu Picchu en riesgo: Podría perderlo si no soluciona varios problemas',
            'contenido' => <<<EOT
<p>La ciudadela inca de Machu Picchu, en el sur de Perú, puede perder su título de "Nueva Maravilla del Mundo" si se mantienen problemas como la alta presión del turismo sin gestión sostenible, el incremento de precios, el riesgo de afectación al patrimonio histórico y prácticas irregulares vinculadas a la venta de entradas, advirtió la organización New 7 Wonders.</p>
<p>La entidad señaló, en un comunicado difundido este lunes por medios locales de Perú, que "los principales responsables de la toma de decisiones" a nivel del Gobierno nacional, local y del Congreso peruano "han recibido desde hace tiempo" sus propuestas para "implementar un plan estratégico de transformación de Machu Picchu".</p>
<p>"La permanencia, justificable y creíble, de Machu Picchu como una de las Nuevas Siete Maravillas del Mundo bajo nuestra jurisdicción depende de ello, lo cual sigue siendo nuestro objetivo primordial", remarcó el comunicado, que fue suscrito el sábado pasado en Zurich por el director de la organización, Jean-Paul de la Fuente.</p>
EOT,
            'imagen' => 'otros-3.jpg',
            'user_id' => 1,
            'categoria' => 'otros',
            'destacado' => 0
        ]);




    }





}
