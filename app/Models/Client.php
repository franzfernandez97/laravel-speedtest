<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'clients';

    protected $fillable = [
        'username', 'user_domain', 'os_name', 'os_version', 'machine_name'
    ];
}
