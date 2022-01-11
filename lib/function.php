<?php
function supprime_dossier_visiteur($addresse_dossier)
{
    if (is_dir($addresse_dossier)){
        $contenu_objet = scandir($addresse_dossier);
        foreach ($contenu_objet as $objet){
            if ($objet != "." && $objet != ".."){
                if (filetype($addresse_dossier."/".$objet) == "dir"){
                    rmdir($addresse_dossier."/".$objet);
                }else{
                    unlink($addresse_dossier."/".$objet);
                }
            }
        }
        reset( $contenu_objet);
        rmdir($addresse_dossier);
    }
}
