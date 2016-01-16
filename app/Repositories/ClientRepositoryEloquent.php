<?php
/**
 * Created by PhpStorm.
 * User: leandroluz
 * Date: 1/14/16
 * Time: 3:59 PM
 */

namespace CodeProject\Repositories;


use Prettus\Repository\Eloquent\BaseRepository;

class ClientRepositoryEloquent extends BaseRepository implements ClientRepository
{
    public function model()
    {
        return Client::class;
    }
}