<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
     
        $post = new Post();
        $post->title = "BREAKING BAD";
        $post->poster= "posts/breakingBad.png";
        $post->status = true;
        $post->content= "Es una serie de televisión estadounidense de drama criminal creada por Vince Gilligan. La serie narra la historia de Walter White, un profesor de química de secundaria que, tras ser diagnosticado con cáncer de pulmón inoperable, decide producir y vender metanfetamina junto con su ex alumno Jesse Pinkman para asegurar el futuro financiero de su familia.";
        $post->date="2008";
        $post->seasons="5";
        $post->generos="Drama";
        $post->actors="Bryan Cranston, Aaron Paul, Anna Gunn";
        $post->director="George Vincent Gilligan, Gail Gilligan";
        $post->plataforma= "Netflix";
        $post->category_id=2;
        $post->user_id=1;
        $post->save();

        $post2 = new Post();
        $post2->title = "GAME OF TRONES";
        $post2->poster= "posts/game_of_trones.png";
        $post2->status = true;
        $post2->content= "Basada en la saga de novelas fantásticas 'Canción de hielo y fuego' de George R.R. Martin, es una serie de televisión estadounidense de drama y fantasía creada por David Benioff y D. B. Weiss para la cadena HBO. La serie se emitió desde el 17 de abril de 2011 hasta el 19 de mayo de 2019, con un total de ocho temporadas y 73 episodios.";
        $post2->date="2011";
        $post2->seasons="8";
        $post2->generos="Fantasia, Ciencia ficcion, Drama";
        $post2->actors="Sean Bean,Michelle Fairley,Richard Madden,Sophie Turner,Maisie Williams, Isaac Hempstead Wright,Art Parkinson,Kit Harington,Charles Dance,Lena Headey,Nikolaj Coster-Waldau,Peter Dinklage,Emilia Clarke,Harry Lloyd,Jack Gleeson, Stephen Dillane,Alfie Allen.";
        $post2->director="Alan Taylor,David Nutter,Miguel Sapochnik,Alex Graves";
        $post2->plataforma= "max";
        $post2->category_id=2;
        $post2->user_id=1;
        $post2->save();

        
        $post3 = new Post();
        $post3->title = "CHERNOBYL";
        $post3->poster= "posts/chernobyl.png";
        $post3->status = true;
        $post3->content= "Es una miniserie de televisión dramática histórica estadounidense-británica creada por Craig Mazin y dirigida por Johan Renck. Se emitió en HBO y Sky Atlantic en 2019. La serie narra el desastre nuclear de Chernóbil de 1986 y los esfuerzos de los trabajadores de emergencia y los científicos para contener la catástrofe y mitigar sus consecuencias..";
        $post3->date="2019";
        $post3->seasons="1";
        $post3->generos="Drama, Drama biografico";
        $post3->actors="Jared Harris,Stellan Skarsgård,Emily Watson,Paul Ritter,Jessie Buckley,Adam Nagaitis,Sam Troughton,Robert Emms,David Dencik.";
        $post3->director="Johan Renck";
        $post3->plataforma= "max";
        $post3->category_id=2;
        $post3->user_id=1;
        $post3->save();

        $post4 = new Post();
        $post4->title = "PEAKY BLINDERS";
        $post4->poster= "posts/peaky_blinders.png";
        $post4->status = true;
        $post4->content= "Peaky Blinders es una serie de televisión británica de drama criminal,La serie está ambientada en Birmingham, Inglaterra, después de la Primera Guerra Mundial, y sigue a la familia Shelby, una banda de gángsters que se alza en el poder a través de la violencia, la extorsión y la astucia.Se ha convertido en una de las series más populares de los últimos años. Ha recibido numerosos premios, incluyendo tres BAFTA Awards y un premio de la Academia Británica de Cine y Televisión (BAFTA) por Mejor Serie Dramática. La serie ha sido elogiada por su actuación, guion, dirección, ritmo y estilo visual.";
        $post4->date="2013";
        $post4->seasons="6";
        $post4->generos="Dramas";
        $post4->actors="Cillian Murphy, Sam Neill, Helen McCrory";
        $post4->director="Steven Knight";
        $post4->plataforma= "Netflix";
        $post4->category_id=2;
        $post4->user_id=1;
        $post4->save();

        $post5 = new Post();
        $post5->title = "NARCOS";
        $post5->poster= "posts/narcos.png";
        $post5->status = false;
        $post5->content= "Es una serie de televisión estadounidense de drama criminal creada por Carlo Bernard, Doug Miro y Bill Wheeler para Netflix. La serie se basa en la historia real del Cartel de Medellín y su líder, Pablo Escobar, durante la década de 1980 en Colombia. Se emitió desde el 28 de agosto de 2015 hasta el 16 de julio de 2017, con un total de tres temporadas y 30 episodios.";
        $post5->date="2015";
        $post5->seasons="3";
        $post5->generos="Drama";
        $post5->actors="Wagner Moura, Pedro Pascal, Boyd Holbrook";
        $post5->director="Chris Brancato, Carlo Bernard, Doug Miro";
        $post5->plataforma= "Netflix";
        $post5->category_id=4;
        $post5->user_id=1;
        $post5->save();

        $post6 = new Post();
        $post6->title = "THE BOYS";
        $post6->poster= "posts/the_boys.png";
        $post6->status = true;
        $post6->content= "Es una serie de televisión estadounidense de superhéroes creada por Eric Kripke para Amazon Prime Video. Se basa en la serie de cómics homónima escrita por Garth Ennis y dibujada por Darick Robertson. La serie se estrenó el 26 de julio de 2019 y hasta la fecha ha lanzado 3 temporadas, con una cuarta en camino para el 2023.";
        $post6->date="2019";
        $post6->seasons="2";
        $post6->generos="Acción,Comedia,Drama,Ciencia ficción";
        $post6->actors="Karl Urban, Jack Quaid, Antony Starr";
        $post6->director="Dan Trachtenberg, Matt Shakman, Phil Sgriccia, Fred Toye, Stefan Schwartz, Jennifer Phang, Dan Attias, Eric Kripke";
        $post6->plataforma= "prime video";
        $post6->category_id=1;
        $post6->user_id=1;
        $post6->save();

   

        $post7 = new Post();
        $post7->title = "THE LAST KINGDOM";
        $post7->poster= "posts/the_Last_Kingdom.PNg";
        $post7->status = true;
        $post7->content= "Es una serie de televisión de drama histórico basada en las novelas 'The Saxon Stories' de Bernard Cornwell. Se ha convertido en una favorita de muchos por su trama trepidante, sus personajes complejos y su ambientación histórica épica.El protagonista de la serie es Uhtred de Bebbanburg, un noble sajón que es secuestrado por los daneses cuando era niño y criado como uno de ellos. Uhtred se debate entre su lealtad a su tierra natal y a su familia adoptiva, y se ve envuelto en la lucha entre sajones y daneses por el control de Inglaterra";
        $post7->date="2015";
        $post7->seasons="5";
        $post7->generos="Drama, aventura";
        $post7->actors="Alexander Dreymon, Emily Cox, David Dawson";
        $post7->director="Peter Hoar Anthony Byrne Ben Chanan Nick Murphy";
        $post7->plataforma= "Netflix";
        $post7->category_id=4;
        $post7->user_id=1;
        $post7->save();

        $post8 = new Post();
        $post8->title = "Stranger Things";
        $post8->poster= "posts/stranger_things.png";
        $post8->status = true;
        $post8->content= "Stranger Things se ha convertido en un fenómeno global, cautivando a una audiencia de todas las edades con su mezcla de nostalgia ochentera, ciencia ficción, terror y drama adolescente.Si buscas una serie que te enganche desde el primer capítulo, te transporte a la década de 1980 y te haga sentir nostalgia por una época dorada de la televisión, Stranger Things es una opción que no puedes perderte.";
        $post8->date="2016";
        $post8->seasons="4";
        $post8->generos="Ciencia ficcion";
        $post8->actors="Winona Ryder, David Harbour, Millie Bobby Brown";
        $post8->director="The Duffer Brothers";
        $post8->plataforma= "Netflix";
        $post8->category_id=1;
        $post8->user_id=1;
        $post8->save();

        $post9 = new Post();
        $post9->title = "THE WITCHERT";
        $post9->poster= "posts/the_witcher.png";
        $post9->status = true;
        $post9->content= " The Witcher es una serie de televisión de fantasía oscura basada en la serie de novelas y videojuegos del mismo nombre. La serie sigue a Geralt de Rivia, un cazador de monstruos mutante conocido como 'brujo', que viaja por un continente ficticio plagado de criaturas peligrosas.Geralt se ve envuelto en las luchas de poder entre reinos y naciones, mientras busca su lugar en el mundo y protege a una joven llamada Ciri, que posee poderes mágicos extraordinarios.";
        $post9->date="2019";
        $post9->seasons="3";
        $post9->generos="Fantasia";
        $post9->actors="Henry Cavill, Anya Chalotra, Freya Allan";
        $post9->director="Lauren Schmidt Hissrich";
        $post9->plataforma= "Netflix";
        $post9->category_id=1;
        $post9->user_id=1;
        $post9->save();

        $post10 = new Post();
        $post10->title = "FALLOUT";
        $post10->poster= "posts/fallout.png";
        $post10->status = true;
        $post10->content= "Fallout es una serie de televisión de ciencia ficción postapocalíptica basada en la popular franquicia de videojuegos del mismo nombre. La serie se desarrolla en un Estados Unidos devastado por una guerra nuclear, donde los supervivientes luchan por sobrevivir en un mundo hostil plagado de mutantes, bandidos y peligrosas facciones.La serie sigue a un grupo de personajes diferentes que se ven obligados a unirse para encontrar un nuevo hogar y un futuro para la humanidad. En el camino, se enfrentarán a pruebas físicas y morales, mientras descubren los secretos del pasado y luchan por mantener la esperanza en un mundo sin futuro";
        $post10->date="2024";
        $post10->seasons="1";
        $post10->generos="Drama, Accion, Aventura";
        $post10->actors="Walton Goggins, Ella Purnell, Aaron Moten";
        $post10->director="Jonathan Nolan";
        $post10->plataforma= "prime video";
        $post10->category_id=1;
        $post10->user_id=1;
        $post10->save();

        $post11 = new Post();
        $post11->title = "DARK";
        $post11->poster= "posts/dark.png";
        $post11->status = true;
        $post11->content= "Es una serie de televisión alemana de suspenso y ciencia ficción creada por Baran bo Odar y Jantje Friese. Se desarrolla en la ciudad ficticia de Winden, Alemania, y explora los viajes en el tiempo, los universos paralelos y el destino. La serie ha sido elogiada por su trama compleja, sus actuaciones y su atmósfera.";
        $post11->date="2017";
        $post11->seasons="3";
        $post11->generos="De intriga";
        $post11->actors="Louis Hofmann, Oliver Masucci, Jördis Triebel";
        $post11->director="Baran bo Odar, Jantje Friese";
        $post11->plataforma= "Netflix";
        $post11->category_id=4;
        $post11->user_id=1;
        $post11->save();

        
        $post12 = new Post();
        $post12->title = "Friends";
        $post12->poster= "posts/friends.png";
        $post12->status = true;
        $post12->content= "Friends es una sitcom estadounidense que se emitió durante diez temporadas, desde 1994 hasta 2004. La serie sigue las vidas de seis amigos en sus veinti y treinta años que viven en Manhattan, Nueva York. Friends se convirtió en un fenómeno mundial, ganando numerosos premios y siendo elogiada por su humor, sus personajes y su retrato de la amistad.";
        $post12->date="1994";
        $post12->seasons="10";
        $post12->generos="Comedia";
        $post12->actors="Jennifer Aniston, Courteney Cox, Lisa Kudrow";
        $post12->director="David Crane, Marta Kauffman";
        $post12->plataforma= "Netflix";
        $post12->category_id=3;
        $post12->user_id=1;
        $post12->save();

        $post13 = new Post();
        $post13->title = "Los Soprano";
        $post13->poster= "posts/soprano.png";
        $post13->status = true;
        $post13->content= "Friends es una sitcom estadounidense que se emitió durante diez temporadas, desde 1994 hasta 2004. La serie sigue las vidas de seis amigos en sus veinti y treinta años que viven en Manhattan, Nueva York. Friends se convirtió en un fenómeno mundial, ganando numerosos premios y siendo elogiada por su humor, sus personajes y su retrato de la amistad.";
        $post13->date="1999";
        $post13->seasons="6";
        $post13->generos="Drama";
        $post13->actors="James Gandolfini, Edie Falco, Lorraine Bracco";
        $post13->director="Timothy Van Patten, John Patterson, Allen Coulter, Alan Taylor, Henry Bronchtein, Jack Bender, Steve Buscemi, Daniel Attias, David Chase, Nick Gomez";
        $post13->plataforma= "prime video";
        $post13->category_id=3;
        $post13->user_id=1;
        $post13->save();
    }
}

