<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Reply;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    /**
     * @param Reply $reply
     */
    public function likeIt(Reply $reply){

        $reply->like()->create(
           [ 'user_id'=> auth()->id()]
        );
    }

    public function unLikeIt(Reply $reply){

        $reply->like()->where(['user_id',auth()->id()])->first()->delete();
    }

}
