<?php

namespace App\Http\Controllers;

use App\Models\VerifyQuestions;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\UserDetail;
use App\Models\UserVerify;
use App\Models\UserPhotoCheck;
use Auth;

class UserVerifyController extends Controller
{
    //
    
    public function user_detail_save(Request $request)
    {
        $user = Auth::user();
        if (UserDetail::find($user->detail)){
            $user_detail = UserDetail::find($user->detail);
        }
        else {
            $user_detail = new UserDetail();
        }
        
        $user_detail->user_id = Auth::user()->id;
        $user_detail->language = $request->user_language;
        $user_detail->birthday = $request->user_birthday;
        $user_detail->country = $request->user_nationality;
        $user_detail->address = $request->user_address;
        $user_detail->save();

        $user->detail = $user_detail->id;
        $user->save();

        return redirect()->route('userMana.show', ['userMana' => Auth::user()->id]);
    }

    public function user_verify_save(Request $request)
    {
        //dd($request);
        $user = Auth::user();
        if (UserVerify::find($user->verify)){
            $user_verify = UserVerify::find($user->verify);
        }
        else {
            $user_verify = new UserVerify();
        }

        $user_verify->user_id = Auth::user()->id;
        $user_verify->question_id1 = $request->user_verify_question1;
        $user_verify->answer1 = $request->user_verify_answer1;
        $user_verify->question_id2 = $request->user_verify_question2;
        $user_verify->answer2 = $request->user_verify_answer2;
        $user_verify->question_id3 = $request->user_verify_question3;
        $user_verify->answer3 = $request->user_verify_answer3;
        $user_verify->save();

        $user->verify = $user_verify->id;
        $user->save();

        return redirect()->route('userMana.show', ['userMana' => Auth::user()->id]);
    }

    public function user_photo_check_save(Request $request)
    {
        $user = Auth::user();
        if (UserPhotoCheck::find($user->photo_check)){
            $user_photo_check = UserPhotoCheck::find($user->photo_check);
        }
        else {
            $user_photo_check = new UserPhotoCheck();
        }
        
        $user_photo_check->user_id = Auth::user()->id;
        $user_photo_check->user_photo_url = $request->user_photo_url;
        $user_photo_check->user_check_url = $request->user_check_url;
        $user_photo_check->save();

        $user->photo_check = $user_photo_check->id;
        $user->save();

        return redirect()->route('userMana.show', ['userMana' => Auth::user()->id]);
    }

    public function changeFace(Request $request) {
        $request->validate([
            'face' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
    
        $user = Auth::user();
        $imageName = $user->id . '_face.' . $request->face->extension();
        $request->face->move(public_path('assets/images/users'), $imageName);
    
        return asset('assets/images/users/'.$imageName);
    }

    public function changeId(Request $request) {
        $request->validate([
            'id_card' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
    
        $user = Auth::user();
        $imageName = $user->id . '_id_card.' . $request->id_card->extension();
        $request->id_card->move(public_path('assets/images/users'), $imageName);
    
        return asset('assets/images/users/'.$imageName);
    }

    public function password_question(Request $request) 
    {
        $user = Auth::user();
        if(UserVerify::find($user->verify)){
            $user_verify = UserVerify::find($user->verify);
        }
        else {
            return "NO_VERIFY_QUESTION";
        }
        $user_questions[0] = ['id'=> $user_verify->question_id1, 'text'=> $user_verify->getQuestion($user_verify->question_id1)];
        $user_questions[1] = ['id'=> $user_verify->question_id2, 'text'=> $user_verify->getQuestion($user_verify->question_id2)];
        $user_questions[2] = ['id'=> $user_verify->question_id3, 'text'=> $user_verify->getQuestion($user_verify->question_id3)];

        return json_encode($user_questions);
    }

    public function pass_modal_check(Request $request)
    {
        $check_count =    $this->answer_check("question_id1", "answer1", $request->pass_question1_id, $request->pass_answer1)
                        + $this->answer_check("question_id2", "answer2", $request->pass_question2_id, $request->pass_answer2)
                        + $this->answer_check("question_id3", "answer3", $request->pass_question3_id, $request->pass_answer3);
        if( $check_count == 3) return "SUCCESS";
        return "FAILED";
    }

    public function answer_check($col_name, $answer_name, $question_id, $answer)
    {
        
        $user_verify = UserVerify::find(Auth::user()->id);
        if($user_verify == null) return 0;
        if($user_verify->$col_name == $question_id) {
            if(VerifyQuestions::find($question_id) == null) return 0;
            if($user_verify->$answer_name == $answer) return 1;
            return 0;
        }
        else { return 0; }
    }

    public function confirm(Request $request)
    {
        $id = $request->userId;
        $user = User::find($id);

        if(Auth::user()->id == $id || $id == 1 || $id == 2) {
            return "FAIL";
        }

        if(Auth::user()->role_id > 2) {
            return "Unauthorized";
        }

        if($user->confirmed === null || $user->confirmed == 0) {
            $user->confirmed = 1;
            $user->save();
        } else {
            $user->confirmed = 0;
            $user->save();
        }

        return redirect()->route('userMana.edit', $id);
    }
    public function unconfirm(Request $request)
    {
        $id = $request->userId;
        $user = User::find($id);

        if(Auth::user()->id == $id || $id == 1 || $id == 2) {
            return "FAIL";
        }

        if(Auth::user()->role_id > 2) {
            return "Unauthorized";
        }

        if($user->confirmed == 1) {
            $user->confirmed = 0;
            $user->save();
        } else {
            $user->confirmed = 1;
            $user->save();
        }

        return redirect()->route('userMana.edit', $id);
    }
}
