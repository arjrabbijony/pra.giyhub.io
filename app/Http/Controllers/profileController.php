<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
//use App\user;
class profilecontroller extends Controller
{
  public function index($user)
  {

      $user=\App\User::findOrFail($user);

      return view('profile.index',  [
          'user'=>$user,
      ]);
  }
  public function edit(\App\User $user)
  {
    $this->authorize('update',$user->profile);
        return view('profile/edit',compact('user'));

  }
  public function update(\App\User $user){

 $this->authorize('update',$user->profile);

 $data =request()->validate([
     'title' => 'required',
     'description' => '',
     'url' => '',
     'image' => '',
 ]);
if (request('image')) {
  $imagePath = request('image')->store('profile', 'public');
  $image = Image::make(public_path("storage/{$imagePath}"));
  $imageArray=['image'=>$imagePath];
  $image->save();

}

   auth()->user()->profile()->update(array_merge($data,$imageArray ?? [] ));

    return redirect('/profile/'.auth()->user()->id);
  }

}
