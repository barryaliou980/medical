@extends('layouts.app')
@section('content')
{{-- include the navigation (navbar) --}}
@include('components/navBar')

<!-- Masthead-->
<header class="masthead">
    <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
        <div class="d-flex justify-content-center">
            <div class="text-center">
                <h1 class="mx-auto my-0 text-uppercase"> Sérenité Santé</h1>
                <h2 class="text-white-50 mx-auto mt-2 mb-5">Nous sommes une agence de placement de Professionnel dans le domaine de la santé</h2>
                <a class="btn btn-warning" href="#postuler">Postuler ou nous contacter sans attendre </a>
            </div>
        </div>
    </div>
</header>
    {{-- <section classs="h-1" style="height: 5px" ></section> --}}
    <!-- About-->
    <section class="about-section text-center" id="about">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-10">
                    <h2 class="text-white mb-4"> Qui sommes-Nous ?  </h2>
                    <p class="lead text-white-50">
                        <span class="lead text-warning"  style="font-weight: bold"> Notre mission : </span>
                        Fournir du personnel qualifié dans les milieux de santé. Avec la situation actuelle, les besoins de personnels dans le domaine de la santé sont énormes. 
                        Nous voulons proposer du personnel qualifié qui saura mettre en confiance les gens qui sont dans le besoins. 
                        Nous croyons fermement qu’il est possible de concilier le travail, la vie familiale et la vie sociale. 
                        C’est pourquoi nous offrons à notre personnel la possibilité de choisir leur horaire de travail ainsi que le milieu. 
                        Les conditions de travail sont une donnée importante qui est trop souvent négligée et c’est sur ce point que nous viendrons mettre l’emphase.
                        Le but est que chacun puisse choisir son département où il a le plus d’expérience et que nous travaillions tous avec sérénité.
                    </p>
                </div>
            </div>
            {{-- <img  class="img-fluid" src="/assets/img/ipad2.png" alt="..." />  --}}
        </div>
    </section>
<section id="valeur" class="valeur-section">
      <div class="container px-4 py-5" id="custom-cards">
    <h2 class="pb-2 border-bottom">Nos valeurs</h2>
    <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
        <div style=" text-align: center; padding:2" class=" col-lg-3">
            <div class="card card-cover h-80 overflow-hidden text-white valeur1 rounded-5 shadow-lg">
          <div class="d-flex flex-column h-80 p-5 pb-3 text-white text-shadow-1">
            <h2 style="font-weight: bold" class="pb-2 border-bottom text-light">L’efficience</h2>
          </div>
        </div>  
        </div>
          <div style="text-align: center;" class=" col-lg-3">
            <div class="card card-cover h-80 overflow-hidden text-white valeur2 rounded-5 shadow-lg" >
          <div class="d-flex flex-column h-80 p-5 pb-3 text-white text-shadow-1">
             <h2 style="font-weight: bold" class="pb-2 border-bottom text-light">L’expérience</h2>
          </div>
        </div>  
        </div>
          <div style="text-align: center;" class=" col-lg-3">
            <div class="card card-cover h-80 overflow-hidden text-white valeur3 rounded-5 shadow-lg" >
          <div class="d-flex flex-column h-80 p-5 pb-3 text-white text-shadow-1">
             <h2 style=" ; font-weight: bold" class="pb-2 border-bottom text-light">La confiance</h2>
          </div>
        </div>  
        </div>
          <div style="text-align: center;"  class=" col-lg-3">
            <div class="card card-cover h-80 overflow-hidden text-white valeur4 rounded-5 shadow-lg" >
          <div class="d-flex flex-column h-80 p-5 pb-3 text-white text-shadow-1">
             <h2 style="font-weight: bold" class="pb-2 border-bottom text-light">L’intégrité</h2>
          </div   >
        </div>  
        </div>

    </div>
  </div>
</section>

        {{-- </section>
        <section class ="valeurs-section " id="valeurs">
            <div class="container px-4 py-5" id="icon-grid">
                <h2 class="pb-2 border-bottom">Nos Valeurs</h2>

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 py-5">
                <div class="col d-flex align-items-start">
                    <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#bootstrap"/></svg>
                    <div>
                    <h4 class="fw-bold mb-0">L’efficience</h4>
                    <p>Cette efficience engendre un ensemble de services reflétant une réelle préoccupation d’assurer la satisfaction des clients de façon durable.</p>
                    </div>
                </div>
                <div class="col d-flex align-items-start">
                    <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#cpu-fill"/></svg>
                    <div>
                    <h4 class="fw-bold mb-0">L’expérience</h4>
                    <p> Nous continuons de renforcer notre professionnalisme par le développement de nos métiers et l'échange d'expériences.</p>
                    </div>
                </div>
                <div class="col d-flex align-items-start">
                    <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#calendar3"/></svg>
                    <div>
                    <h4 class="fw-bold mb-0">La confiance</h4>
                    <p>Elle guide notre façon de travailler et d’accompagner nos clients et nos collaborateurs et intégre loyauté et confiance.</p>
                    </div>
                </div>
                <div class="col d-flex align-items-start">
                    <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#home"/></svg>
                    <div>
                    <h4 class="fw-bold mb-0">L’intégrité</h4>
                    <p>C’est d’abord tenir nos promesses et respecter nos engagements. C’est aussi communiquer de façon à créer un climat de confiance et de respect.</p>
                    </div>
                </div>
                </div>
            </div>
        </section> --}}

        <!-- Projects-->
        <section class="projects-section bg-light" id="projects">
            <div class="container px-4 px-lg-5">
                <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                    <div class="container justify-content-center">
                        <h2 class="pb-2 border-bottom">Notre engagement</h2>
                    </div>
                    <div class="col-lg-6"><img class="img-fluid" src="/assets/img/wentia3.jpg" alt="..." /></div>
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <h4 class="text-white"> Pourquoi travaillez avec Nous ? </h4>
                                    <p class="mb-0 text-white-50">Offrir un service adapté qui saura répondre à vos attentes. Nous vous offrirons du soutien, un bon salaire ainsi qu’un bon encadrement. Vous ne serez pas laissé a vous-même puisque nos services sont personnalisé. Vous pourrez ainsi aller travailler sereinement. </p>
                                    <hr class="d-none d-lg-block mb-0 ms-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <br/>
                <!-- Project Two Row-->
                <div class="row gx-0 justify-content-center text-center">
                    <div class="col-lg-6"><img class="img-fluid" src="/assets/img/wentia4.jpg" alt="..." /></div>
                    <div class="col-lg-6 order-lg-first">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-right">
                                    <h4 class="text-white">Avantages de travailler avec nou !</h4>
                                    <p class="mb-0 text-white-50">Another example of a project with its respective description. These sections work well responsively as well, try this theme on a small screen!</p>
                                    <hr class="d-none d-lg-block mb-0 me-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                       <!-- Featured Project Row-->
                {{-- <div class="row gx-0 mb-4 mb-lg-5 mt-5 align-items-center" id="valeurs">
                    <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="/assets/img/wentia2.jpg" alt="..." /></div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="featured-text text-center text-lg-left">
                            <h4>Nos valeurs</h4>
                            <h6>- Experience</h6>
                             <h6>- Experience</h6>
                              <h6>- Experience</h6>
                        </div>
                    </div>
                </div> --}}
                <!-- Project One Row-->
            </div>
        </section>

        <section>

            <div class="container my-5">
                <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
                <div class="col-lg-8 p-3 p-lg-5 pt-lg-3">
                    <h2 class="display-6 fw-bold lh-1">Avantages de travailler avec nous</h2>
                    <hr/>
                    <p class="lead">Nous aimons la modernité, donc fini les feuilles de temps papiers. Tout est fait de manière électronique.<br/>
                            Horaire de travail flexible. Vous pourrez faire votre propre horaire.</p><p class="lead">
                            Nous voulons que vous soyez à l’aise dans les milieux ou vous travaillerai, donc nous mettrons une emphase sur les endroits où vous avez plus d’expérience
                            Le bien être de notre personnel nous tiens à cœur, c’est pourquoi nous offrons en encadrement personnalisé. <br/>
                            Les conditions de travail sont optimales pour faciliter le rendement.<br/>
                            Le salaire est très avantageux <br/>
                            Une expérience différentes de tout ce que vous avez vécu que ce soit au public ou au privé
                        </p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
                    <a  href="#postuler" type="button" class="btn btn-warning btn-lg px-4 me-md-2 fw-bold">Contactez-nous</a>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1 p-0 overflow-hidden shadow-lg">
                    <img class="rounded-lg-3" src="/assets/img/wentia3.jpg" alt="" height="500" width="675">
                </div>
                </div>
            </div>
        </section>
        <!-- Postuler-->
        <section class="signup-section" id="postuler">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5">
                    <div class=" mx-auto text-center">
                        <i class="far fa-paper-plane fa-2x text-white"></i>
                        <h2 class="text-white mb-5">Présenter une candidature spontannée</h2>
                        <form class="form-signup d-flex flex-column ">
                            <div class="row">
                                <input class="form col m-1" id="inputEmail" type="text"placeholder="Nom" />
                                <input class="form col m-1" id="inputEmail" type="text" placeholder="Prénom" />
                            </div>
                            <div class="row">
                                <input class="form col m-1" id="inputEmail" type="email" placeholder="Email" />
                            </div>
                            <div class="row">
                                <select style="height: 50px" class="form col m-1">
                                    <option>Objet de votre message</option>
                                     <option>Contact </option>
                                      <option>postuler </option>
                                </select>
                                <select  style="height: 50px" class="form col m-1">
                                     <option>Specification</option>
                                     <option>Infirmière </option>
                                      <option>Infirmière auxiliaire </option>
                                      <option>Pab</option>
                                </select>
                                
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1 " class="form-label text-white mt-5">Votre message </label>
                                <textarea class="form-control " id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <div>
                                <button class="btn btn-danger m-4" type="upload">upload CV</button>
                                <button class="btn btn-warning" type="file">Envoyé</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    
        <section class="contact-section bg-black">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-envelope text-primary"></i>
                                <h4 class="text-uppercase m-0">Email</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50"><a href="#!"> <strong> Agence@serenitesante.com </strong></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-mobile-alt text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Téléphone</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50">+1(514)-265-8343</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="social d-flex justify-content-center">
                    <a class="mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                    <a class="mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                </div>
            </div>
        </section>
        @endsection