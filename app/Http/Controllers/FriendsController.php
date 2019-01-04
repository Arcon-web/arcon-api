<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Friend;
use App\User;


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
            $friend->friend_id = $request->input('friend_id');
            $friend->save();

            return response()->json($friend, 201);
        }

        public function showfriends($user_id)
        {
            $user = User::find($user_id);
            
            $friends = $user->friends;

            foreach($friends as $friend){

                $friendos[] = User::find($friend->friend_id)->name;

            }

            

            
            


            return response()->json($friendos, 200);
            //    $friends = Friend::where('user_id',$user_id)->get();
               
            //    return response()->json($friends->users(), 200);
        }
}
