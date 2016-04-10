<?php

namespace ftlaravel;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Students extends Eloquent
{
    //
    protected $connection = 'mongodb';
    protected $collection = 'students';
    protected $fillable = ['nom','prenom','photo','dateN','lieuN','adresse','tel','email','situationFam','nomT','adresseT','teleF','profPere','profMere'];
}
