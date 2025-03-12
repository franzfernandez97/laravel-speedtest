<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SpeedTest extends Model
{   
    protected $table = 'speed_tests';
    
    protected $fillable = [
        'file_name', 'date', 'download_speed', 'upload_speed', 
        'isp', 'server_country', 'server_location', 'client_id'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
