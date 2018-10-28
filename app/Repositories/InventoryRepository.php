<?php

namespace App\Repositories;

use App\Models\Inventory;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class InventoryRepository
 * @package App\Repositories
 * @version October 28, 2018, 12:48 pm UTC
 *
 * @method Inventory findWithoutFail($id, $columns = ['*'])
 * @method Inventory find($id, $columns = ['*'])
 * @method Inventory first($columns = ['*'])
*/
class InventoryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama',
        'jumlah',
        'kondisi'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Inventory::class;
    }
}
