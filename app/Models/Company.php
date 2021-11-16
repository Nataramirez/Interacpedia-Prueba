<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Company
 *
 * @property $id
 * @property $name
 * @property $email
 * @property $website
 * @property $img
 * @property $created_at
 * @property $updated_at
 *
 * @property Employee[] $employees
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Company extends Model
{
    
    static $rules = [
		'name' => 'required',
		'email' => 'required',
		'website' => 'required',
		'img' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','email','website','img'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function employees()
    {
        return $this->hasMany('App\Models\Employee', 'companies_id', 'id');
    }
    

}
