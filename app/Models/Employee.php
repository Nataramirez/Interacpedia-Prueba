<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Employee
 *
 * @property $id
 * @property $companies_id
 * @property $name
 * @property $lastName
 * @property $email
 * @property $phone
 * @property $created_at
 * @property $updated_at
 *
 * @property Company $company
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Employee extends Model
{
    
    static $rules = [
		'companies_id' => 'required',
		'name' => 'required',
		'lastName' => 'required',
		'email' => 'required',
		'phone' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['companies_id','name','lastName','email','phone'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function company()
    {
        return $this->hasOne('App\Models\Company', 'id', 'companies_id');
    }
    

}
