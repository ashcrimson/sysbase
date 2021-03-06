<?php

namespace App\Repositories;

use App\Models\Role;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class RolRepository
 * @package App\Repositories
 * @version February 11, 2019, 5:08 pm CST
 *
 * @method Rol findWithoutFail($id, $columns = ['*'])
 * @method Rol find($id, $columns = ['*'])
 * @method Rol first($columns = ['*'])
*/
class RolRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'guard_name'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Role::class;
    }
}
