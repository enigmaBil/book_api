<?php
/**
 * Created by VsCode.
 * User: Bilong Emmanuel
 * Date: 21/09/22
 * Time: 05:07
 */

 namespace App\Repositories\Config;

use App\Models\Config\Section;
use App\Repositories\ResourceRepository;

class SectionRepository extends ResourceRepository{

    public function __construct(Section $section){
        $this->model = $section;
    }

    public function getAll(){
        return $this->model->get();
    }
}
