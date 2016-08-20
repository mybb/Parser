<?php
/**
 * Default custom code parser
 *
 * @author  MyBB Group
 * @version 2.0.0
 * @package mybb/parser
 * @license http://www.mybb.com/licenses/bsd3 BSD-3
 */

namespace MyBB\Parser\Database\Repositories\Eloquent;

use Illuminate\Support\Collection;
use MyBB\Parser\Database\Models\MyCode;
use MyBB\Parser\Database\Repositories\CustomMyCodeRepositoryInterface;

class CustomMyCodeRepository implements CustomMyCodeRepositoryInterface
{
    /**
     * @var MyCode $model
     */
    private $model;

    /**
     * @param MyCode $model
     */
    public function __construct(MyCode $model)
    {
        $this->model = $model;
    }

    /**
     * Get all of the custom MyCodes, in the form [find => replace].
     *
     * @return array
     */
    public function getAllForParsing(): array
    {
        return $this->model->newQuery()->orderBy('parseorder')->pluck('replacement', 'regex')->toArray();
    }

    /**
     * Get all of the custom MyCodes.
     *
     * @return Collection
     */
    public function getAll(): Collection
    {
        return $this->model->all();
    }
}
