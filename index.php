<!doctype html>
<html>
<head>
  <title>Mon univers Parcourssup</title>
  <link rel="stylesheet" href="parcoursup.css" />


</head>
<body>
  <div id="zoom" class="zoom"style="display :none;">
    <br>
    <img class="zoom_image"  id="paysage_01_zoom" src="image/paysage_01.jpg" alt="image zoom" style="display : none;">
    <img class="zoom_image"  id="paysage_02_zoom" src="image/paysage_02.jpg" alt="image zoom" style="display : none;">
    <img class="zoom_image"  id="study_01_zoom" src="image/study_01.jpg" alt="image zoom" style="display : none;">
    <img class="zoom_image"  id="projet_carotte_zoom" src="image/projet_carotte.jpg" alt="image zoom" style="display : none;">
    <img class="zoom_image"  id="modele_3d_zoom" src="image/modele_3d.jpg" alt="image zoom" style="display : none;">
    <img class="zoom_image"  id="carte_histoire_zoom" src="image/carte_histoire.jpeg" alt="image zoom" style="display : none;">
    <img class="zoom_image"  id="concept_combat_zoom" src="image/concept_combat.jpg" alt="image zoom" style="display : none;">
    <img class="zoom_image"  id="concept_affinite_zoom" src="image/concept_affinite.jpg" alt="image zoom" style="display : none;">
    <img class="zoom_image"  id="concept_deroulement_zoom" src="image/concept_deroulement.jpg" alt="image zoom" style="display : none;">
    <br>
  </div>

  <div class="banniere">
    <p> RANAIVO <br>KLARENS </p>

</div>




  <div id="introduction" class="introduction">
    <p> Bonjour/Bonsoir, ceci est un site internet crée par mes soins de A à Z, j'ai fait des recherches sur internet et ai reussi à produire un site dont je suis plutôt fière pour mon niveau.
    <br>Ce dernier a pour but de montrer mon implication pour les domaines informatique et créatif, en cliquant sur les bouttons plus bas vous decouvrirez quelque oeuvres,projets,realisation ou tentatives effectué durant ma vie.
    <br>Ce site a uniquement pour but de prouver des capacités aprisses en classes et sur mon temps libre.
    <br>L'idée est de vous montrez que même si je ne me donne pas a fond pour se qui ne m'interesse pas, je sais fournir des efforts personnels pour les choses qui me sont utiles.</p>
  </div>
  <hr>
  <div id="biographie" class="biographie">
    <p>Comme dit précédement, il faut cliquer sur les bouttons pour afficher la suite du site. D'un point de vu technique j'ai utilisé différentes "div" et j'ai fait fonctionner la chose à l'aide de javascript.</p>ici, normalement on pourra voir une petite biographie sur moi ou bien dans la div du dessus et dans ce cas il y a ici une image
    <br>
    il s'agit donc d'une autobio avec des infos vendeuses, a quel point je suis curieux et que j'ai fait plein de chose pour explorer differentes possibilité.Est ce que je fais vraiment une bio ???
  </div>
  <!-- ici une div inutile pour l'instant a garder peut etre
  <hr>
  <div id="image_02">
    donc encore une div ici il s'agirait surement de faire des petits 'axes' sur des thematiques que j'ai exploré ?
    <br>
    on pourrait cité le dessin papier, numerique, le projet croque carrote et zolda, effort de recherche (chara design et histoire avec théo) et on devrait être pas mal
  </div>
  -->
  <hr>

  <div id="menuDeroulant" class="menuDeroulant">
    ici il y aura une sorte de bande style amazon/discount ou on pourra cliquer pour montrer une div avec un des 3 axes, à savoir Dessin,Projet,Recherche chiiich grosse update on rajoute un axe, l'axe concept
    <br> apres recherche sur le code de cdiscount, il faudra user du javascript pour faire des fonction onclick et tt, apres plus d'anamyse, il semblent se passer quelque chose avec les classes, des onAct en dirait
    <br>
    <button id="axe_Dessin"  class="button_Dessin"> Art / Dessin </button>
    <button id="axe_Projet" class="button_Projet"> Projet </button>
    <button id="axe_Recherche" class="button_Recherche"> Recherche / Exploration </button>
    <button id="axe_Concept" class="button_Concept"> Concept </button>

  </div>


  <div id="div_Dessin" style="display: none;">
    <p> Voici la div conscernant le dessin, il s'agit de montrer les differentes oeuvres que j'ai pu produire au cours de ma vie. <br>
      Comme vous pouvez le constater si dessous, il s'agit de dessin numerique réaliser sur le logiciel sketchbook.<br>
      Mais il s'agit encore une fois de montrer que je ne me suis pas contenter de ce que j'apprenais à l'école et à mes cours de dessins,
      je suis allé plus loin et j'ai su être curieux de découvrir de nouvelle méthode et possibilités et voici une partie du résultat.</p>

    Ici il s'agit de quelque oeuvres que j'ai souhaité vous montrez car je trouvais petinent de le faire tout simplement<br>
    Voici une oeuvre réalisé à la main en jouant avec les nuances de gris
    <img class="image"  src="" alt="mdrr faut afficher l'image la" >
    <br>
    <br>
    Ensuite viens un autre dessins à la main qui à été cette fois ci colorirer au feutre à alcool
    <img class="image"  src="" alt="non tjrs pas mdrr" >
    <br>
    <br>
    gros flash pour demain les peintures et les cours d'arts a la mjc pour les points d'implications
    <br>
    <br>
    Mais depuis un certains temps j'essaie de plus en plus le dessin digital à l'aide d'une tablette graphique et d'outils tel que photoshop ou sketchbook
    <br> voici quelques productions <br>
    <img class="image"  id="paysage_01" src="image/paysage_01.jpg" alt="bon la va falloir aller dormir" width="320" height="240" >
    <img class="image"  id="paysage_02" src="image/paysage_02.jpg" alt="encore 1  image ?" width="320" height="240">
    <img class="image"  id="study_01" src="image/study_01.jpg" alt="encore 1  image ?" width="240" height="240">
    <br>

  </div>

  <div id="div_projet" style="display : none;">
    mais non une deuxieme version du chat ??
    <img class="image"  src="image/chat_mignion.jpg" alt="chat mignion" width="50" height="60">
    <br> toujours serieux bien sur pas envie de finir en gap year ma foi
    <br> donc là on va parler de différentes choses mais surtout les projets menés à bien donc il y a <br>la chasse au trésor et le croque carrote, ont pourra citer un shifoumi et la bataille naval en precisant qu'il n'y a pas d'IA<br>
    <img class="image" id="projet_carotte" src="image/projet_carotte.jpg" width="500" height="400">
  </div>

  <div id="div_Recherche" style="display : none;">
    et oui bien renseigner, mais soi digne + aboie + t'es finito
    <img class="image"  src="image/chat_mignion.jpg" alt="chat mignion" width="50" height="60">
    <br>
    Plus serieusement ici voici un espace four tout qui montre que j'ai touché à beaucoup de chose même si ce n'est pas digne d'etre considéré comme des oeuvres à part entiere
    <br> pour commencer le modele 3d, on parle de la formation udemy etc...
    <br><img class="image" id="modele_3d" src="image/modele_3d.jpg" width="320" height="240" >
    <br> ensuite on enchaine sur la photo peut etre ?
    <br> on continue par l'histoire feat theophile
    <br><img class="image" id="carte_histoire" src="image/carte_histoire.jpeg" width="320" height="240" >
    <br> on termine par des photos de game concept ou alors on le met dans l'onglet projet ?
  </div>

  <div id="div_Concept" style="display : none;">
    leeet im knowwww
    <br> donc ici on va mettre tout ce qui est concept de perso et surtout le game concept du jeu sans nom
    <br>voici un extrait d'un game concept que j'ai realisé, accompagné de quelques images expliquants les différents aspects et méchaniques du gameplay
    <br><img class="image" id="concept_affinite" src="image/concept_affinite.jpg" width="320" height="240" >
    <img class="image" id="concept_deroulement" src="image/concept_deroulement.jpg" width="320" height="240" >
    <img class="image" id="concept_combat" src="image/concept_combat.jpg" width="320" height="240" >
  </div>

  <button id="boutest" > test </button>
  <p id="demo"></p>

  <script>
  /* Partie Bouton action */


    let axe_Dessin = document.getElementById("axe_Dessin");
  	let div_D = document.getElementById("div_Dessin");
  	function axe1(){
  	  if(getComputedStyle(div_D).display != "none"){
  	    div_D.style.display = "none";
        div_P.style.display = "none";
        div_R.style.display = "none";
        div_C.style.display = "none";
  	  } else {
  	    div_D.style.display = "block";
        div_P.style.display = "none";
        div_R.style.display = "none";
        div_C.style.display = "none";
  	  }
  	};
  	axe_Dessin.onclick = axe1;

    let axe_P = document.getElementById("axe_Projet");
    let div_P = document.getElementById("div_projet");
    function axe_2(){
      if (getComputedStyle(div_P).display != "none"){
        div_D.style.display = "none";
        div_P.style.display = "none";
        div_R.style.display = "none";
        div_C.style.display = "none";
      } else {
        div_D.style.display = "none";
        div_P.style.display = "block";
        div_R.style.display = "none";
        div_C.style.display = "none";
      }
    };
    axe_Projet.onclick = axe_2;

    let axe_R = document.getElementById("axe_Recherche");
    let div_R = document.getElementById("div_Recherche");
    function axe_3(){
      if (getComputedStyle(div_R).display != "none"){
        div_D.style.display = "none";
        div_P.style.display = "none";
        div_R.style.display = "none";
        div_C.style.display = "none";
      } else {
        div_D.style.display = "none";
        div_P.style.display = "none";
        div_R.style.display = "block";
        div_C.style.display = "none";
      }
    };
    axe_Recherche.onclick = axe_3;

    let axe_C = document.getElementById("axe_Concept");
    let div_C = document.getElementById("div_Concept");
    function axe_4(){
      if (getComputedStyle(div_C).display != "none"){
        div_D.style.display = "none";
        div_P.style.display = "none";
        div_R.style.display = "none";
        div_C.style.display = "none";
      } else {
        div_D.style.display = "none";
        div_P.style.display = "none";
        div_R.style.display = "none";
        div_C.style.display = "block";
      }
    };
    axe_Concept.onclick = axe_4;

    let div_Zoom = document.getElementById("zoom");

    let paysage_01_boutton = document.getElementById("paysage_01")
    let paysage_02_boutton = document.getElementById("paysage_02")
    let study_01_boutton = document.getElementById("study_01")
    let projet_carotte_boutton = document.getElementById("projet_carotte")
    let modele_3d_boutton = document.getElementById("modele_3d")
    let carte_histoire_boutton = document.getElementById("carte_histoire")
    let concept_combat_boutton = document.getElementById("concept_combat")
    let concept_affinite_boutton = document.getElementById("concept_affinite")
    let concept_deroulement_boutton = document.getElementById("concept_deroulement")

    let paysage_01_zoom = document.getElementById("paysage_01_zoom")
    let paysage_02_zoom = document.getElementById("paysage_02_zoom")
    let study_01_zoom = document.getElementById("study_01_zoom")
    let projet_carotte_zoom = document.getElementById("projet_carotte_zoom")
    let modele_3d_zoom = document.getElementById("modele_3d_zoom")
    let carte_histoire_zoom = document.getElementById("carte_histoire_zoom")
    let concept_combat_zoom = document.getElementById("concept_combat_zoom")
    let concept_affinite_zoom = document.getElementById("concept_affinite_zoom")
    let concept_deroulement_zoom = document.getElementById("concept_deroulement_zoom")



    function zoom_f_image01(){
      div_Zoom.style.display = "block";
      paysage_01_zoom.style.display = "block";
    };
    function zoom_f_image02(){
      div_Zoom.style.display = "block";
      paysage_02_zoom.style.display = "block";
    };
    function zoom_f_image03(){
      div_Zoom.style.display = "block";
      study_01_zoom.style.display = "block";
    };
    function zoom_f_image04(){
      div_Zoom.style.display = "block";
      projet_carotte_zoom.style.display = "block";
    };
    function zoom_f_image05(){
      div_Zoom.style.display = "block";
      modele_3d_zoom.style.display = "block";
    };
    function zoom_f_image06(){
      div_Zoom.style.display = "block";
      carte_histoire_zoom.style.display = "block";
    };
    function zoom_f_image07(){
      div_Zoom.style.display = "block";
      concept_combat_zoom.style.display = "block";
    };
    function zoom_f_image08(){
      div_Zoom.style.display = "block";
      concept_affinite_zoom.style.display = "block";
    };
    function zoom_f_image09(){
      div_Zoom.style.display = "block";
      concept_deroulement_zoom.style.display = "block";
    };

    function cancel_zoom(){
      if(getComputedStyle(paysage_01_zoom).display != "none"){
        paysage_01_zoom.style.display = "none"
      }
      if(getComputedStyle(paysage_02_zoom).display != "none"){
        paysage_02_zoom.style.display = "none"
      }
      if(getComputedStyle(study_01_zoom).display != "none"){
        study_01_zoom.style.display = "none"
      }
      if(getComputedStyle(projet_carotte_zoom).display != "none"){
        projet_carotte_zoom.style.display = "none"
      }
      if(getComputedStyle(modele_3d_zoom).display != "none"){
        modele_3d_zoom.style.display = "none"
      }
      if(getComputedStyle(carte_histoire_zoom).display != "none"){
        carte_histoire_zoom.style.display = "none"
      }
      if(getComputedStyle(concept_combat_zoom).display != "none"){
        concept_combat_zoom.style.display = "none"
      }
      if(getComputedStyle(concept_affinite_zoom).display != "none"){
        concept_affinite_zoom.style.display = "none"
      }
      if(getComputedStyle(concept_deroulement_zoom).display != "none"){
        concept_deroulement_zoom.style.display = "none"
      }

      div_Zoom.style.display = "none"
    }

    paysage_01_boutton.onclick = zoom_f_image01;
    paysage_02_boutton.onclick = zoom_f_image02;
    study_01_boutton.onclick = zoom_f_image03;
    projet_carotte_boutton.onclick = zoom_f_image04;
    modele_3d_boutton.onclick = zoom_f_image05;
    carte_histoire_boutton.onclick = zoom_f_image06
    concept_combat_boutton.onclick = zoom_f_image07;
    concept_affinite_boutton.onclick = zoom_f_image08;
    concept_deroulement_boutton.onclick = zoom_f_image09;
    div_Zoom.onclick = cancel_zoom;

    </script>
</body>
</html>
