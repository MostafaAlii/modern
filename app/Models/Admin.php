<?php
namespace App\Models;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
class Admin extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;
    protected $table = "admins";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'username', 'email', 'password', 'email_verified_at', 'receive_email',
        'avatar', 'status', 'city', 'state', 'address', 'bio',
        'created_at', 'updated_at',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public  function getStatus(){
        echo ($this->status == 0) ? '<button class="btn btn-outline-success">'.trans('admin.active').'</button>' : '<button class="btn btn-outline-danger">'.trans('admin.not_active').'</button>';
    }

    public  function getReceivedEmail(){
        echo ($this->receive_email == 0) ? '<button class="btn btn-outline-success">'.trans('admin.available').'</button>' : '<button class="btn btn-outline-danger">'.trans('admin.not_available').'</button>';
    }
}
