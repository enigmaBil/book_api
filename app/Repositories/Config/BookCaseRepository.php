<?php
/**
 * Created by VsCode.
 * User: Bilong Emmanuel
 * Date: 21/09/22
 * Time: 04:41
 */

namespace App\Repositories\Config;

use App\Models\Config\BookCase;
use App\Repositories\ResourceRepository;

class BookCaseRepository extends ResourceRepository{

    public function __construct(BookCase $bookCase){
        $this->model = $bookCase;
    }

    public function getAll(){
        return $this->model->get();
    }

}
