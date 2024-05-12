<x-layout> 
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Spice&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@1,300&family=Rubik+Bubbles&family=Rubik+Doodle+Shadow&display=swap"
        rel="stylesheet">
</head>

<body>

    <div class="container">
        <img class="imageStyle img-fluid"
            src="https://blog.eipass.com/wp-content/uploads/2019/09/cropped-Videogiochi-a-scuola.png" alt="">

    </div>
    <div class="position">GAME ACADEMY</div>
    <section class="d-flex mt-5 container justify-content-between">
        <div class="row">

{{--
            <div style="width: 80%;">
                <h2 style="color: black; text-align: center; font-size: 50px;">Inizia la tua ricerca</h2>

                <div style="display: flex;">

                    <div
                        style="flex: 1;  height: 130px; display: flex; align-items: center; justify-content: center; padding: 10px;">
                        <div style="background-color:#181818; height: 100%; width: 100%; border-radius: 20px; ">
                            <h5
                                style="color:rgb(255, 255, 255, 0.7); margin-top: 10px; font-size: 22px; margin-left: 30px;">
                                Categorie
                            </h5>

                            <select name="cars" id="cars" style="width: 80%;
                            font-size: 30px;
                            background-color: transparent;
                            border: none;
                            color: white;
                            margin-left: 20px;
                            margin-top: 10px;
                            outline: none;
                            position: relative;
                            bottom: 10px;">
                                <option style="background-color: #181818;" value="console">Console</option>
                                <option style="background-color: #181818;" value="videogiochi">Videogiochi</option>
                                <option style="background-color: #181818;" value="accessori">Accessori
                                </option>
                                <option style="background-color: #181818;" value="gadget">Gadget</option>




                            </select>


                        </div>
                    </div>
                    <div
                        style="flex: 1;  height: 130px; display: flex; align-items: center; justify-content: center; padding: 10px;">

                        <div style="background-color:#181818; height: 100%; width: 100%; border-radius: 20px;">

                            <h5
                                style="color:rgb(255, 255, 255, 0.7); margin-top: 10px; font-size: 22px; margin-left: 30px;">
                                Piattafoma
                            </h5>

                            <select name="cars" id="cars" style="width: 80%;
                         font-size: 30px;
                        background-color: transparent;
                        border: none;
                        color: white;
                        margin-left: 20px;
                        margin-top: 10px;
                        outline: none;
                        position: relative;
                        bottom: 10px;">
                                <option style="background-color: #181818;" value="xbox">Xbox</option>
                                <option style="background-color: #181818;" value="playstation">Playstation</option>
                                <option style="background-color: #181818;" value="nintendoswitch">Nintendo Switch
                                </option>
                                <option style="background-color: #181818;" value="pc">Pc</option>




                            </select>
                        </div>

                    </div>
                    <div
                        style="flex: 1;  height: 130px; display: flex; align-items: center; justify-content: center; padding: 10px;">
                        <div style="background-color:#181818; height: 100%; width: 100%; border-radius: 20px;">

                            <h5
                                style="color:rgb(255, 255, 255, 0.7); margin-top: 10px; font-size: 22px; margin-left: 30px;">
                                Prezzo
                            </h5>

                            <select name="cars" id="cars" style="width: 80%;
                         font-size: 30px;
                        background-color: transparent;
                        border: none;
                        color: white;
                        margin-left: 20px;
                        margin-top: 10px;
                        outline: none;
                        position: relative;
                        bottom: 10px;">
                                <option style="background-color: #181818;" value="prezzo1">10-20</option>
                                <option style="background-color: #181818;" value="prezzo2">30-70</option>
                                <option style="background-color: #181818;" value="prezzo3">70-150
                                </option>
                                <option style="background-color: #181818;" value="prezzo4">150-500</option>




                            </select>
                        </div>

                    </div>
                    <div
                        style="flex: 1;  height: 130px; display: flex; align-items: center; justify-content: center; padding: 10px;">
                        <div style="background-color:#181818; height: 100%; width: 100%; border-radius: 20px;">

                        </div>
                    </div>
                </div>

            </div>
--}}


            <h2 style="font-family:rubik bubbles ; font-size: 50px;">I vari tipi di console</h2>
            <div class="col-8 " style="font-family: archivo; font-size: 35px;">
                Abbiamo vari tipi di console, dalle console portatili a quelle fisse, naturalmente una console fissa che
                sia una Playstation oppure Xbox, può offrire un esperienza di gioco migliore graficamente rispetto a
                delle console portatili come Nintendo Switch, ma attenzione ciò non significa che queste ultime sono da
                sottovalutare. Anche perché ogni console offre delle esclusive, ovvero dei giochi, significative.

            </div>
            <div class="col-4 ">
                <img src="https://static1.pocketlintimages.com/wordpress/wp-content/uploads/154021-games-news-buyer-s-guide-best-games-console-2020-should-you-get-an-xbox-playstation-or-nintendo-switch-image11-pdijuoea6m.jpg"
                    alt="" width="800" height="auto" class="">
            </div>
        </div>
    </section>
    <section class=" container my-5">
        <div class="row">
            <h2 style="font-family: rubik bubbles; font-size: 50px;" class="mt-5">Le varie esclusive</h2>
            <div class=" col-4">


                <div class="card rounded-5  colorStyle2 pt-3 px-2" style="width: 25rem;  background-color: #74C914;">
                    <div>
                        <H3 style="text-align: center;">Esclusiva Xbox</H3>
                    </div>
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTKpwTAhAGpavMs71rKGh98RtqnCBw-39rHOQ&usqp=CAU"
                        class="img-fluid rounded" alt="...">
                    <div class="card-body ">
                        <h5 class="card-title">Halo</h5>
                        <p class="card-text ">Halo è una serie di videogiochi sparatutto in prima persona, in casa
                            Microsoft Halo è l'esclusiva più invidiata dai playstation player.Il primo Halo risale al
                            2001.
                        </p>
                        <a href="https://thegameawards.com/nominees/game-of-the-year"
                            class="btn btn-primary colorType rounded-pill">Guarda altro!</a>
                    </div>
                </div>
            </div>

            <div class=" col-4">
                <div class="card rounded-5    pt-3 px-2" style="width: 25rem; background-color: #03A7FF;">
                    <div>  
                        <H3 style="text-align: center;">Esclusiva Playstation</H3>
                    </div>
                    <img src="https://image.api.playstation.com/vulcan/img/rnd/202011/0204/g7QavKoff0uAngWn4Hiytel9.png"
                        class="img-fluid rounded" alt="...">
                    <div class="card-body ">
                        <h5 class="card-title">Ratchet & Clank</h5>
                        <p class="card-text ">Ratchet & Clank è tra i giochi più storici in casa Playstation, il primo
                            titolo risale al 2002 e ancora oggi prosegue ed è uno dei giochi più amati dai giocatori.
                        </p>
                        <a href="https://thegameawards.com/nominees/game-of-the-year"
                            class="btn btn-primary colorType rounded-pill">Guarda altro!</a>
                    </div>
                </div>
            </div>

            <div class=" col-4">

                <div class="card rounded-5  colorStyle3 pt-3 px-2" style="width: 25rem; background-color: #FF5854;">
                    <div> 
                        <H3 style="text-align: center;">Esclusiva Nintendo</H3>
                    </div>
                    <img src="https://www.zbozi.cz/magazin/wp-content/uploads/2022/09/zelda2-1280x721.jpg"
                        class="img-fluid rounded" alt="...">
                    <div class="card-body ">
                        <h5 class="card-title">The Legend of Zelda</h5>
                        <p class="card-text ">Il seguente titolo è un colosso in casa Nintendo, basta pensare che Zelda
                            nasce nel 1980 e ancora oggi è tra i giochi più ambiti da giocatori che ambiscono la console
                            portatile.</p>
                        <a href="https://thegameawards.com/nominees/game-of-the-year"
                            class="btn btn-primary colorType rounded-pill">Guarda altro!</a>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <h2 class="d-flex justify-content-center" style="font-size: 70px;font-family: rubik bubbles;"> Altre
        esclusive</h2>
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner">

            <div class="carousel-item active">

                <div class="d-flex justify-content-center">
                    <img src="https://fs-prod-cdn.nintendo-europe.com/media/images/10_share_images/others_3/SI_Pokemon.jpg"
                        class="d-block " width="1500px" height="auto" alt="...">
                </div>
                <div class="carousel-caption d-none d-md-block">
                    <h5 style="font-size: 50px; color: black;">Pokemon</h5>
                    <p style="font-size: 25px; color: black;">Una delle esclusive più importanti del mondo nintendo</p>
                </div>
            </div>
            <div class="carousel-item ">

                <div class="d-flex justify-content-center">
                    <img src="https://multiplayer.net-cdn.it/thumbs/images/2018/08/01/spider-man_ps4_preview_side_1532954590_jpg_1600x900_crop_q85.jpg"
                        class=" d-block" width="1500px" height="auto" alt="...">
                </div>
                <div class="carousel-caption d-none d-md-block">
                    <h5 style="font-size: 50px; color: white;">Spiderman</h5>
                    <p style="font-size: 25px; color: white;">Una delle esclusive più importanti del mondo Playstation
                    </p>
                </div>
            </div>
            <div class="carousel-item ">


                <div class="d-flex justify-content-center">
                    <img src="https://assetsio.reedpopcdn.com/news-videogiochi-gears-of-war-3-ps3-disponibile-1621593380772.jpg?width=1200&height=1200&fit=bounds&quality=70&format=jpg&auto=webp"
                        class=" d-block" width="1500px" height="auto" alt="...">
                </div>
                <div class="carousel-caption d-none d-md-block">
                    <h5 style="font-size: 50px; color: white;">Gears of War</h5>
                    <p style="font-size: 25px; color: white;">Una delle esclusive più importanti del mondo Microsoft</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon arrow2" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon arrow2" aria-hidden="true"></span>
            <span class="visually-hidden ">Next</span>
        </button>
    </div>


    <section class="d-flex ps-1 mt-5 container justify-content-around ">
        <div class=" row">

            <h2 class=" colorStyleS " style="text-align: center; font-family:rubik bubbles ; font-size: 50px;">The Game
                Awards</h2>

            <div class="col-5 " style="font-family: archivo; font-size: 28px;">
                Il Game Award per il gioco dell'anno è un premio assegnato ogni anno dai Game Awards. Viene assegnato a
                un videogioco giudicato in grado di offrire la migliore esperienza in tutti i campi creativi e tecnici.
                Il premio è tradizionalmente accettato dai registi del gioco o dai dirigenti dello studio.
                L'evento è ideato e condotto da Geoff Keighley, giornalista canadese che dal 2003 al 2013 aveva già
                presentato gli Spike Video Game Awards.
            </div>
            <div class="col-7 img-fluid ">
                <img src="https://www.liberta.it/wp-content/uploads/2022/12/the_game_awards-copertina_3026.jpg" alt=""
                    width="800" height="auto" class="">
            </div>
        </div>
    </section>



    <section class="  my-5">
        <div class="row">
            <h2 style="font-family: rubik bubbles; text-align: center; font-size: 50px;" class="colorStyleS mt-5 mb-4">
                Le nomination
                del
                GOTY 2023</h2>
            <div class="d-flex justify-content-around">
                <div class=" col-2">


                    <div class="card rounded-5  colorStyleS pt-3 px-2" style="width: 25rem; ">
                        <div>
                            <H3 style="  text-align: center;">Nominato</H3>
                        </div>
                        <img src="https://preview.redd.it/spiderman-2-game-cover-with-my-favourite-iterations-of-v0-e4717kkki4sb1.png?width=640&crop=smart&auto=webp&s=7e8bff1fd67b26969183254246db0a89568fb5d9"
                            class="img-fluid rounded" alt="...">
                        <div class="card-body ">
                            <h5 style="text-align: center;" class="card-title">MARVEL'S SPIDER-MAN 2</h5>
                            <p class="card-text ">
                            </p>

                        </div>
                    </div>
                </div>

                <div class=" col-2">
                    <div class="card rounded-5  colorStyleS pt-3 px-2" style="width: 25rem; ">
                        <div>
                            <H3 style="text-align: center;">Nominato</H3>
                        </div>
                        <img src="https://assetsio.reedpopcdn.com/co5vmg.png?width=1200&height=1200&fit=bounds&quality=70&format=jpg&auto=webp"
                            class="img-fluid rounded" alt="...">
                        <div class="card-body ">
                            <h5 style="text-align: center;" class="card-title">THE LEGEND OF ZELDA: TEARS OF THE KINGDOM
                            </h5>
                            <p class="card-text "></p>

                        </div>
                    </div>

                </div>

                <div class=" col-2">
                    <div class="card rounded-5  colorStyleS pt-3 px-2" style="width: 25rem; ">
                        <div>
                            <H3 style="text-align: center;">Nominato</H3>
                        </div>
                        <img src="https://supermariobroswonder.nintendo.com/images/share-tw.jpg"
                            class="img-fluid rounded" alt="...">
                        <div class="card-body ">
                            <h5 style="text-align: center;" class="card-title">SUPER MARIO BROS. WONDER</h5>
                            <p class="card-text ">
                            </p>

                        </div>
                    </div>

                </div>
                <div class=" col-2">
                    <div class="card rounded-5  colorStyleS pt-3 px-2" style="width: 25rem; ">
                        <div>
                            <H3 style="text-align: center;">Nominato</H3>
                        </div>
                        <img src="https://cdn1.epicgames.com/offer/c4763f236d08423eb47b4c3008779c84/EGS_AlanWake2_RemedyEntertainment_S2_1200x1600-c7c8091ddac0f9669c8e5905bca88aaa"
                            class="img-fluid rounded" alt="...">
                        <div class="card-body ">
                            <h5 style="text-align: center;" class="card-title">ALAN WAKE 2</h5>
                            <p class="card-text "></p>

                        </div>
                    </div>
                </div>
                <div class=" col-2">

                    <div class="card rounded-5  colorStyleS pt-3 px-2" style="width: 25rem; ">
                        <div>
                            <H3 style="text-align: center;">Nominato</H3>
                        </div>
                        <img src="https://m.media-amazon.com/images/M/MV5BMWVlMDdhNzYtNDY5ZS00YzdiLWI3NWEtMDUzMGQyMWQ2NDY3XkEyXkFqcGdeQXVyNDg4NjY5OTQ@._V1_.jpg"
                            class=" rounded" alt="...">
                        <div class="card-body ">
                            <h5 style="text-align: center;" class="card-title">BALDUR'S GATE 3</h5>
                            <p class="card-text "></p>

                        </div>
                    </div>
                    <div class=" col-2">


                    </div>
                </div>
            </div>
    </section>












    <div class="images ">

        <div class="row">
            <h2 class="d-flex ps-1 mt-5 container justify-content-around colorStyleS"
                style="font-family:rubik bubbles ; font-size: 50px; color: yellow;">
                IL VINCITORE DEL GOTY 2023
            </h2>
        </div>
        <div class=" mt-3 mb-5"> 
            <div class="row">
                <div class="col-6 col-md-6 img-fluid">
                    <img class="img-fluid"
                        src="https://www.nerdpool.it/wp-content/uploads/2023/11/baldurs-gate-3-thumb-maly.jpg" alt="">
                </div>
                <div class="col-6 col-md-6">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Oltre ogni limite
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>Se è vero che oggi esistono pochi team capaci di farci sognare così
                                        brutalmente
                                        a occhi aperti, è altresì giusto fare a Larian Studios i complimenti e non solo
                                        per
                                        averci riportato nei Forgotten Realms. Sono entrati in punti di piedi e ci hanno
                                        preso per mano, completamente immersi in un palpabile entusiasmo, senza crociate
                                        di
                                        marketing a viziarci. Baldur's Gate 3 ci sta trasmettendo tutta la genuina
                                        voglia di
                                        divertimento che provavamo attorno a quello schermo del master, con quattro
                                        dadi,
                                        qualche scheda del personaggio e un fiume in piena di gioia nel cuore.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Il miglior RPG
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>Un gioco di ruolo immenso, pieno di possibilità e scelte da compiere, che
                                        riesce
                                        a immergere gli appassionati in un contesto capace di reagire coerentemente alle
                                        loro azioni e dar vita a un'avventura memorabile, divertente ed emozionante.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    La scalata alla vittoria!
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>Baldur's Gate 3 ha superato la concorrenza di altri giochi di primissimo
                                        piano
                                        come The Legend of Zelda Tears of the Kingdom, Final Fantasy XVI, Starfield,
                                        Diablo
                                        IV e Marvel's Spider-Man 2 giusto per citare alcuni dei candidati al premio: il
                                        CEO
                                        di Larian Studios, Swen Vincke, si dice quindi non solo molto stupito ma anche
                                        davvero felice per i risultati raggiunti dalla sua creatura, specie considerando
                                        che
                                        il suo team non è sceso a compromessi per lo sviluppo del gioco.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>
</x-layout>  