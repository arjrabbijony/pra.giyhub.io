<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
class eventscontroller extends Controller
{


    function create(){
        return view('event/create');
    }
    public function show(\App\Events $events)
    {
        return view('event/show',compact('events'));
    }



    public function edit(\App\User $user)
    {
        $this->authorize('update',$user->events);
        return view('event/edit',compact('user'));

    }
    public function update(\App\User $user){

        $this->authorize('update',$user->events);

        $data =request()->validate([
            'caption'=>'required',
            'image'=>'required',
            'desc'=>'required',
        ]);
        if (request('image')) {
            $imagePath = request('image')->store('profile', 'public');
            $image = Image::make(public_path("storage/{$imagePath}"));
            $imageArray=['image'=>$imagePath];
            $image->save();

        }

        auth()->user()->events()->update(array_merge($data,$imageArray ?? [] ));

        return redirect('/c/'.auth()->user()->id);
    }
    function store(){
        $data=request()->validate([
            'caption'=>'required',
            'motive'=>'',
            'contact'=>'',
            're'=>'',
            'image'=>'required',
            'desc'=>'',


            'ename'=>'',
            'etitle'=>'',
            'eabout'=>'',
            'edate'=>'',
            'etime'=>'',


            'ename2'=>'',
            'etitle2'=>'',
            'eabout2'=>'',
            'edate2'=>'',
            'etime2'=>'',


            
            'ename3'=>'',
            'etitle3'=>'',
            'eabout3'=>'',
            'edate3'=>'',
            'etime3'=>'',


        ]);

        $imagePath = request('image')->store('uploads', 'public');
        $image = Image::make(public_path("storage/{$imagePath}"));
        $image->save();

        //$img = Image::make(request()->file("/storage/")->getRealPath($imagePath))->fit(1200, 1200);


        auth()->user()->events()->create([
            'caption'=> $data['caption'],
            'motive'=> $data['motive'],
            'contact'=> $data['contact'],
            're'=> $data['re'],
            'desc'=> $data['desc'],



            'ename'=> $data['ename'],
            'etitle'=> $data['etitle'],
            'eabout'=> $data['eabout'],
            'edate'=> $data['edate'],
            'etime'=> $data['etime'],


            'ename2'=> $data['ename2'],
            'etitle2'=> $data['etitle2'],
            'eabout2'=> $data['eabout2'],
            'edate2'=> $data['edate2'],
            'etime2'=> $data['etime2'],


            'ename3'=> $data['ename3'],
            'etitle3'=> $data['etitle3'],
            'eabout3'=> $data['eabout3'],
            'edate3'=> $data['edate3'],
            'etime3'=> $data['etime3'],


            


            'image'=>$imagePath,
        ]);

        return redirect('/profile/'.auth()->user()->id);
    }











}
