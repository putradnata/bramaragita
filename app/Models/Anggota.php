<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Anggota
 * @package App\Models
 * @version October 28, 2018, 12:49 pm UTC
 *
 * @property string nama
 * @property string alamat
 * @property string noHp
 * @property string isActive
 */
class Anggota extends Model
{
    use SoftDeletes;

    public $table = 'anggota';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];

    protected $primaryKey = 'nim';

    public $fillable = [
        'nim',
        'nama',
        'alamat',
        'noHp',
        'isActive'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nim' => 'string',
        'nama' => 'string',
        'alamat' => 'string',
        'noHp' => 'string',
        'isActive' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
