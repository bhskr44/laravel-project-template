<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    // Table name
    protected $table = 'location';

    // Primary Key
    protected $primaryKey = 'uuid';
    public $incrementing = false; // Since UUIDs are not auto-incrementing

    // Timestamps
    public $timestamps = false;

    // Fillable attributes
    protected $fillable = [
        'dist_code', 'subdiv_code', 'cir_code', 'mouza_pargona_code',
        'lot_no', 'vill_townprt_code', 'loc_name', 'unique_loc_code',
        'locname_eng', 'cir_abbr', 'dist_abbr', 'rural_urban', 'is_gmc',
        'uuid', 'village_status', 'is_map', 'created_date', 'updated_date',
        'user_code', 'lgd_code', 'status', 'nc_btad', 'is_periphary',
        'is_tribal', 'district_headquater'
    ];

    // Cast attributes for correct data types
    protected $casts = [
        'created_date' => 'datetime',
        'updated_date' => 'datetime',
        'is_gmc' => 'boolean',
        'is_map' => 'boolean',
        'is_periphary' => 'boolean',
        'is_tribal' => 'boolean',
        'nc_btad' => 'boolean',
    ];
}
