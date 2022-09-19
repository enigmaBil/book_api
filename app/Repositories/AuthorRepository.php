<?php

/**
 * Created by VsCode.
 * User: Bilong Emmanule
 * Date: 16/09/22
 * Time: 11:58
 */

    namespace App\Repositories;

    use App\Repositories\ResourceRepository;

    use App\Models\Author;

    class AuthorRepository extends ResourceRepository{

        public function __construct(Author $author){
            $this->model = $author;
        }

        public function getAll(){
            return $this->model->get();
        }
    }
