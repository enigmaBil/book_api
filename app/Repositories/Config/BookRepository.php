<?php
/**
 * Created by VsCode.
 * User: Bilong Emmanuel
 * Date: 21/09/22
 * Time: 03:58
 */

namespace App\Repositories\Config;

use App\Models\Config\Book;
use App\Repositories\ResourceRepository;



class BookRepository extends ResourceRepository{

    public function __construct(Book $book){
        $this->model = $book;
    }

    public function getAll(){
        return $this->model->get()->paginate(5);
    }
}
