<?php
class AdditionnalContentModel extends Model
{

    public function __construct()
    {
        // Nous définissons la table par défaut de ce modèle
        $this->table = 'addcontent';

        // Nous ouvrons la connexion à la base de données
        $this->getConnection();
    }
}