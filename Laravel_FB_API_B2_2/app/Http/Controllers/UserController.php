<?php

namespace App\Http\Controllers;

use App\Models\AddFriends;
use App\Models\Like;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function me(Request $request): JsonResponse
    {
        return response()->json([
            'message'       => 'Login success',
            'data'  => $request->user(),
        ]);
    }

    public function friends()
    {
        return $this->belongsToMany(User::class, 'friends', 'user_id', 'friend_id')
                    ->withPivot('status')
                    ->withTimestamps();
    }

    public function friendRequests()
    {
        return $this->hasMany(AddFriends::class, 'friend_id')->where('status', 'pending');
    }

    public function sentFriendRequests()
    {
        return $this->hasMany(AddFriends::class, 'user_id')->where('status', 'pending');
    }

    public function isFriendsWith(User $user)
    {
        return (bool) $this->friends()->where('friend_id', $user->id)->count();
    }

    public function hasSentFriendRequestTo(User $user)
    {
        return (bool) $this->sentFriendRequests()->where('friend_id', $user->id)->count();
    }

    public function hasReceivedFriendRequestFrom(User $user)
    {
        return (bool) $this->friendRequests()->where('user_id', $user->id)->count();
    }
}
