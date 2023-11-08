<?php
namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\CanchasModel; // Aquí debe ser "CanchasModel" en lugar de "CanchaModel"

class Canchas extends ResourceController
{
    use ResponseTrait;

    public function index()
    {
        $model = new CanchasModel(); // Aquí debe ser "CanchasModel" en lugar de "CanchaModel"
        $canchas = $model->findAll();
        return $this->respond($canchas, 200);
    }

    public function show($id = null)
    {
        $model = new CanchasModel(); // Aquí debe ser "CanchasModel" en lugar de "CanchaModel"
        $cancha = $model->find($id);

        if ($cancha) {
            return $this->respond($cancha);
        } else {
            return $this->failNotFound('No Data Found with id ' . $id);
        }
    }

}
