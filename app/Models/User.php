<?php

namespace App\Models;
use App\Models\Orders;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'active'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $appends=['full_name'];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    public function orders(){
        return $this->hasMany(orders::class);
    }
    public function getFullNameAttribute(){
        return $this->name.'---'.$this->id;
    }
    // mutatonr
    // public function setNameAttribute($value){
    //      $this->attributes['name']=Hash::make($value);
    // }


    // scopes
    // Local Scope
    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }   
    
    // Global Scope - Applied automatically
    protected static function booted()
    {
        static::addGlobalScope('status', function ($query) {
           $query->where('users.status', '=', 'active');
        });
    }

}
