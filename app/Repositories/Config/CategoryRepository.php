<?php
/**
 * Created by VsCode.
 * User: Bilong Emmanuel
 * Date: 21/09/22
 * Time: 04:58
 */

namespace App\Repositories\Config;

use App\Models\Config\Category;
use App\Repositories\ResourceRepository;

class CategoryRepository extends ResourceRepository{

    public function __construct(Category $category) {
        $this->model = $category;
    }

    public function getAll(){
        return $this->model->get();
    }
}
