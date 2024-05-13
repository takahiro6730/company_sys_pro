<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Country;

class UserDetail extends Model
{
    use HasFactory;

    public function getLanguage(): string
    {   
        $code = $this->langauge;
        if($code == "JP") $language = "Japanese";
        if($code == "EN") $language = "English";
        if($code == "CH") $language = "Chinese";
        if($code == "SP") $language = "Spanish";
        if($code == "RU") $language = "Russian";

        return $language;
    }

    public function getCountry(): string 
    {
        $code = $this->country;
        $country = Country::where("code", $code)->first();

        return $country->code;
    }
}