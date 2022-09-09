<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    protected $table = "information";
    protected $primaryKey = "id";

    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'bannername',
        'slogan',
        'politic',
        'description',
        'map',
        'address',
        'city',
        'privacidad',
        'mission',
        'vision',
        'value1title',
        'value1text',
        'value2title',
        'value2text',
        'value3title',
        'value3text',
        'value4title',
        'value4text',
        'value5title',
        'value5text',
    ];

    protected $guarded = [

    ];
}
