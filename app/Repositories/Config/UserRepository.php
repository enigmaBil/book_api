<?php
/**
 * Created by VsCode.
 * User: Bilong Emmanuel
 * Date: 21/09/22
 * Time: 05:07
 */

use App\Models\Config\User;
use App\Repositories\ResourceRepository;

class UserRepository extends ResourceRepository{

    public function __construct(User $user) {
        $this->model = $user;
    }

    public function getAll() {
        return $this->model->get();
    }
}
