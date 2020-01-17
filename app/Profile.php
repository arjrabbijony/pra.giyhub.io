<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Profile extends Model
{
    protected $guarded=[];

    public function profileimage(){
      $imagePath=($this->image) ? $this->image : '/img/p2.jpg';
      return '/storage/'. $imagePath;
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
