<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\VerifyQuestions;

class UserVerify extends Model
{
    use HasFactory;

    public function getQuestion($id): string 
    {
        $question = VerifyQuestions::find($id);

        return $question->question;
    }
}
