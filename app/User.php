<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    const IS_BANNED = 1;
    const IS_ACTIVE = 0;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    // add user function
    public static function add($fields)    
    {
        $user = new static;
        $user->fill($fields);
        $user->password = bcrypt($fields['password']);
        $user->save();

        return $user;
    }
    // editing user info function 
    public function edit($value)
    {
        $this->fill($field);
        $this->password = bcrypt($fields['password']);
        $this->save();
    }
    // Delete User function
    public function remove()
    {
        $this->delete();
    }
    //Function for uoload user Avatar
    public function uploadAvatar($image)     
    {
        if ($image == null) { return; }

        Storage::delete('uploads/' . $this->$image);
        $filename = str_random(10) . '.' . $image->extension();
        $image->saveAs('uploads', $filename);
        $this->image = $filename;
        $this->save();
    }
    //Function for getting Avatar
    public function getAvatar()
    {
        if ($this->image == null) 
        {
            return '/img/no-user-image.png';    
        }

        return '/uploads/' . $this->image;
    }

    // Make User Admin
    public function makeAdmin()
    {
        $this->is_admin = 1;
        $this->save();
    }
    // Make user normal user, not Admin
    public function makeNormal()
    {
        $this->is_admin = 0;
        $this->save();
    }
    //summary function for toogle Admin or normal User 
    public function toggleAmin($value)
    {
        if ($value == 0) {
            return $this->makeNormal();
        }

        return $this->makeAdmin();
    }
    //ban user status function 
    public function ban()
    {
        $this->status = User::IS_BANNED;
        $this->save();
    }
    //unban user status function
    public function unban()
    {
        $this->status = User::IS_ACTIVE;
        $this-save();
    }

    public function toggleBan($value)
    {
        if ($value == 0) {
            return $this->unban();
        }

        return $this->ban();
    }

}
