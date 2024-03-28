<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class PageController extends Controller
{
    /*
    public $articles;
    public function __construct()
    {
        $this->articles = [
            [
                'titlearticles' => 'Le tre motivazioni per cui dovresti amare i videogiochi!',
                'category' => 'Videogames',
                'description' => 'Per molti posso sembrare stupidi e irrilevanti ma giocare non è del tutto una cosa senza senso!
                Ecco le tre motivazioni per cui dovresti amarli:
                1)Da una passione può nascere un lavoro, nel mondo attuale molte persone lavorano e si gudagnano da vivere semplicemnte giocando, creando intrattenimento.
                2)Possono essere stimolnati e pieni di logica, molti videogiochi si basano sulla strategia e sulla logica e inducono il cervello umano a uno sforzo inimmaginabile.
                3)I videogiochi ti traspostrano nel mondo dei tuoi sogni, da un gioco puoi aspettarti letteralmente di tutto, non esiste un limite è letteralmente tutto possibile.',
                "visible" => true
            ],
            [
                'titlearticles' => 'I tre videogiochi consigliati!',
                'category' => 'Videogames',
                'description' => 'Il mondo dei videogiochi è talmente ampio che risulterebbe impossible nominare solo 3 videogiochi, quindi oggi ne nomineremo uno per genere da un singleplayer a un gioco per famiglia.
                1)The legend of Zelda!
                2)GTA V.
                3)Super Mario Party.',
                "visible" => true
            ],
            [
                'titlearticles' => 'Nessun limite di età',
                'category' => 'Videogames',
                'description' => 'Il mondo dei videogiochi è cosi vasto da permettere di usufruirne a tutti, da i più grandi ai più piccoli!',
                "visible" => true
            ]
        ];

    }
*/
    public function homePage()
    {
        $titleHomePage = config('app.name');
        return view('welcome', compact('titleHomePage'));
    }

    public function contacts()
    {
        return view('pages.contacts', ['title' => 'Contacts us in this email: _____@gmail.com!']);
    }

    public function aboutMe()
    {
        return view('pages.about-me', [
            'h1title' => 'chi siamo e cosa facciamo?',
            'h1description' => 'Siamo un gruppo di sviluppo in servizio da 40 anni e offriamo servizi di sviluppo app in ambito web!'
        ]);
    }
    public function articles()
    {

        $article = Article::all();
        return view('pages.articles', ['articles' => $article]);

    }
    public function article($article)
    {

        $articles = $this->articles[$article];


        if (!$articles['visible']) {

            abort(404);
        }

        return view('pages.article', ['article' => $articles]);

    }
}