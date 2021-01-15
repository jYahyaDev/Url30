<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Recette</title>
  <meta name="description" content="que personne ne fasse la blaque avec la pod'castor 🦫">
</head>
<body><pre><?php

  // séparer ses identifiants et les protéger, une bonne habitude à prendre
  include "connect.php";

  try {

    // instancie un objet $connexion à partir de la classe PDO
    $connexion = new PDO(DB_DRIVER . ":host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET, DB_LOGIN, DB_PASS, DB_OPTIONS);

    // Requête de sélection
   /*  $requete = "SELECT * FROM `motcles`";
    $prepare = $connexion->prepare($requete);
    $prepare->execute();
    $resultat = $prepare->fetchAll();
    print_r([$requete, $resultat]); */ // debug & vérification */ 

    // Requête d'insertion
  /*   $requete = "INSERT INTO `motcles`(`contenu`)
                VALUES (:contenu);";
    $prepare = $connexion->prepare($requete);
    $prepare->execute(array(
      ":contenu" => "gaming"
    ));
    $resultat = $prepare->rowCount(); // rowCount() nécessite PDO::MYSQL_ATTR_FOUND_ROWS => true
    $lastInsertedEpisodeId = $connexion->lastInsertId(); // on récupère l'id automatiquement créé par SQL
    print_r([$requete, $resultat, $lastInsertedEpisodeId]); // debug & vérificatio   */
 
   // Requête de modification
   /*  $lastInsertedEpisodeId = 47; 
    $requete = "UPDATE `motcles`
                SET `contenu` = :contenu
                WHERE `id` =  :id";
    $prepare = $connexion->prepare($requete);
    $prepare->execute(array(
      ":contenu" => "game",
      ":id"=>  $lastInsertedEpisodeId
    ));
    $resultat = $prepare->rowCount();
    print_r([$requete, $resultat]); // debug & vérification   */
 
   // Requête de suppression
/* 
     $requete = "DELETE FROM `motcles`
                WHERE ((`id` = :id));";
    $prepare = $connexion->prepare($requete);
    $prepare->execute(array("id"=>45)); // 
    $resultat = $prepare->rowCount();
    print_r([$requete, $resultat]); // debug & vérification  */ 

    //  7/ Ajout d'une URL 
/*     $requete = "INSERT INTO url(url,shortcut,description) VALUE(:url,:shortcut,:description)";
    $prepare = $connexion->prepare($requete);
    $prepare->execute(array('url'=>'https://www.zataz.com/total-energie-direct-obligee-de-stopper-un-jeu-en-ligne-suite-a-une-fuite-de-donnees/',
                                'shortcut'=>'ztz7',
                                'description'=>'L\'entreprise Total Energie Direct avait lancé un jeu en ligne. Le concours a dû être stoppé. Il était possible d\'accéder aux données des autres joueurs.'
                                  ));
    $resultat = $prepare->rowCount();
    print_r([$requete, $resultat]);
 */
    // 8. Ajout mot clés piratage
   /*  $requete = "INSERT INTO `motcles`(`contenu`)
                VALUES (:contenu);";
    $prepare = $connexion->prepare($requete);
    $prepare->execute(array(
      ":contenu" => "piratage"
    ));                               
     */
    //9
/*     $requete = "INSERT INTO `url_motcles`(`url_id`, `id_motcles`) VALUE(:url_id,:id_motcles)";
    $prepare = $connexion->prepare($requete);
    $prepare->execute(array(":url_id"=>10,// id de l'url à lier 
                            ":id_motcles"=>49));//id piratage
    print_r([$resultat]);  */
    
    //10

  /*   $requete = "SELECT url  
                FROM url_motcles 
                JOIN url on url.id = url_motcles.url_id 
                JOIN motcles on motcles.id = url_motcles.id_motcles 
                WHERE motcles.contenu = 'piratage'"; 

    $prepare = $connexion->prepare($requete);
    $prepare->execute();
    // Affiche le résultat
    while($resultat = $prepare->fetch()){
        echo $resultat['url'];
    } */

    /* $requete = "SELECT * FROM `motcles`";
    $prepare = $connexion->prepare($requete);
    $prepare->execute();
    $resultat = $prepare->fetchAll();
    print_r([$requete, $resultat]); // debug & vérification 

    print_r($resultat); */

  } catch (PDOException $e) {

    // en cas d'erreur, on récup et on affiche, grâce à notre try/catch
    exit("❌🙀💀 OOPS :\n" . $e->getMessage());

  }

?></pre></body>
</html>