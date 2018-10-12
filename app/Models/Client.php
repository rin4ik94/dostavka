<?php
namespace App\Models;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Client extends Authenticatable
{
		use Notifiable;
    
    protected $table = 'clients';
    
    protected $fillable = ['first_name','last_name','mobile','password','birth_date','jender','status','group_id','region_id'];
    
    protected $hidden = [
	    'password', 'remember_token',
    ];

    public function client_group(){
      return $this->belongsTo('App\Models\ClientGroup');
    }

    public function region(){
        return $this->belongsTo('App\Models\Region');
    }
}
