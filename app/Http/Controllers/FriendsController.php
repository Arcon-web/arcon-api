<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Friend;

class FriendsController extends Controller
{
    
        public function addFriend(Request $request)
        {
            $this->validate($request, [
                'user_id'=>'required',
                'friend_id'=>'required',
            ]);

            $friend = new Friend;
            $friend->user_id = $request->input('user_id');
            $friend->user_id = $request->input('friend_id');
            $friend->save();

            return response()->json($friend, 201);
        }


}
