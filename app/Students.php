<?php

namespace ftlaravel;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Students extends Eloquent
{
    //
    protected $collection = 'students';
    protected $fillable = ['nom','prenom','photo','dateNaiss','lieuNaiss','adresse','telephone','email','situation','nomTuteur','adresseTuteur','telephoneFixe','professionPere','professionMere'];
}
