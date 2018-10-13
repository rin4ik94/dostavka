<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    protected $table = 'managers';
    protected $fillable = [
        'name', 'logo', 'status', 'manager_category_id',
    ];

    public function managerCategory(){
    	return $this->belongsTo('App\Models\ManagerCategory');
    }

  	public function employee_groups() {
	    return $this->hasMany('App\Models\UserRole');
	}

    public function employees() {
        return $this->hasMany('App\Models\Employee');
    }

    public function branches() {
        return $this->hasMany('App\Models\Branch');
    }

    public function categories() {
        return $this->hasMany('App\Models\Category');
    }

    public function products() {
        return $this->hasMany('App\Models\Product');
    }
}