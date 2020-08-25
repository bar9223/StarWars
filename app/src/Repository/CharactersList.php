<?php


namespace App\Repository;

use App\EntityManagers\MainEntityManager;

class CharactersList
{
    protected $filteredGet;
    protected $em;

    public function __construct(MainEntityManager $em)
    {
        $this->em = $em;
    }

}