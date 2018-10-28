<?php

namespace App\Repositories;

use App\Models\Anggota;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class AnggotaRepository
 * @package App\Repositories
 * @version October 28, 2018, 12:49 pm UTC
 *
 * @method Anggota findWithoutFail($id, $columns = ['*'])
 * @method Anggota find($id, $columns = ['*'])
 * @method Anggota first($columns = ['*'])
*/
class AnggotaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nim',
        'nama',
        'alamat',
        'noHp',
        'isActive'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Anggota::class;
    }
}
