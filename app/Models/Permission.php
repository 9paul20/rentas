<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    const SUPER_USER_PERMISSION_KEY_ID = 1;
    const SUPER_USER_PERMISSION_KEY = 'superuser';

    const PERMISSION_ALLOW         = 1;
    const PERMISSION_INHERIT    = 0;
    const PERMISSION_DENY         = -1;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'permissions';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'description', 'key'];

    /**
     * the rules of the Group for validation before persisting
     *
     * @var array
     */
    public static $rules = array(
        'title' => 'required|unique:permissions,title',
        'description' => 'required',
        'key' => 'required|unique:permissions,key'
    );
}