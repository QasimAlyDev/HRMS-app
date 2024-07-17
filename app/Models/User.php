<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    static public function getRecord(Request $request){
        // $return = self::select('users.*')
        //             ->orderBy('id', 'desc')
        //             ->paginate(5);

        //             return $return ;

        $query = self::select('users.*');

        // search box start
        if (!empty($request->get('id'))) {
            $query = $query->where('id', '=', $request->get('id'));
        }
        if (!empty($request->get('name'))) {
            $query = $query->where('name', 'like', '%' . $request->get('name') . '%');
        }
        if (!empty($request->get('last_name'))) {
            $query = $query->where('last_name', 'like', '%' . $request->get('last_name') . '%');
        }
        if (!empty($request->get('email'))) {
            $query = $query->where('email', 'like', '%' . $request->get('email') . '%');
        }
        // search box end

        $records = $query->orderBy('id' , 'asc')
                    ->paginate(10);
        return $records ;

    }   
}
