<?php

namespace ftlaravel;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Filiere extends Eloquent
{
    //
    protected $collection = 'filiere';
    protected $fillable = ['nom_fil','abrev_fil','diplome_fil','responsable_fil','note_elim_fil'];
}
