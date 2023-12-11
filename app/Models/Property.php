<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Property extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable= [
        'title',
        'description',
        'surface',
        'rooms',
        'bedrooms',
        'floor',
        'price',
        'city',
        'address',
        'postal_code',
        'sold',
        'picture_id'
    ];
     //relation with
    public function options(){
        return $this->belongsToMany(Option::class);
    }
    //get slug
    public function getSlug(){
        return Str::slug($this->title);
    }
    //relation with pictures
    public function picture(){
        return $this->belongsTo(Picture::class);
    }

    //scope 
    public function scopeAvailable(Builder $builder,$sold=true){

      return  $builder->where('sold',$sold);

    }
    public function scopeRecent(Builder $builder){
        return $builder->orderBy('created_at','desc');
    }
    //cast
    protected $casts =[
        'sold'=>'boolean'
    ];
}
