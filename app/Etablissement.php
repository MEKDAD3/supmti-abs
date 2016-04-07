<?php

namespace ftlaravel;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Etablissement extends Eloquent
{
    //
    protected $collection = 'etablissement';
    protected $fillable = ['nom_et','abrev_et','email_et','adresse_et','num_agr_et','site_web_et','telephone_et','fax_et'];
}
