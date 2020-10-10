<?php


namespace AYakovlev\Models;


use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    protected const ID = 3;

    protected $table = 'vacancies';
    protected $fillable =  [
        'title',
        'price',
        'organization',
        'address',
        'telephone',
        'experience',
        'technology',
        'skills',
        'descriptions',
        'category',
    ];
    public $timestamps = true;

    /*
    public static function getById(int $id): Vacancy
    {
        $vac = Vacancy::where('id', $id)->get();
        return $vac;
    }
    */
}