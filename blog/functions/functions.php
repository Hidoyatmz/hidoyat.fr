<?php
function get_articles($bdd, $filtre_value) {
    switch ($filtre_value) {
        case 1:
            # Filtre Catégorie : Sport & Santé
            $req = $bdd->query("SELECT * FROM articles WHERE cat = 'sport'");
            $req->execute();
            $res = $req->fetchAll(\PDO::FETCH_ASSOC);
            break;
            
        case 2:
            # Filtre Catégorie : Programmation
            $req = $bdd->query("SELECT * FROM articles WHERE cat = 'prog'");
            $req->execute();
            $res = $req->fetchAll(\PDO::FETCH_ASSOC);
            break;
            
        case 3:
            # Filtre Catégorie : Hardware
            $req = $bdd->query("SELECT * FROM articles WHERE cat = 'hardware'");
            $req->execute();
            $res = $req->fetchAll(\PDO::FETCH_ASSOC);
            break;

        default:
            $req = $bdd->prepare("SELECT * FROM articles");
            $req->execute();
            $res = $req->fetchAll(\PDO::FETCH_ASSOC);
            break;
    }
    return json_encode($res);
}

function get_article($bdd, $id) {
    $req = $bdd->prepare("SELECT * FROM articles WHERE id = " . $id);
    $req->execute();
    $res = $req->fetchAll(\PDO::FETCH_ASSOC);
    return json_encode($res);
}
?>


