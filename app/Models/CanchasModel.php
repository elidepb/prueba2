<?php

namespace App\Models;

use CodeIgniter\Model;

class CanchasModel extends Model
{
    protected $table = 'canchas';
    protected $primaryKey = 'id_cancha';
    protected $allowedFields = ['nombre_cancha', 'ubicacion_cancha', 'direccion_cancha', 'telefono'];

    // No es necesario definir un constructor ni propiedades privadas en CodeIgniter 4.

    // Métodos para acceder a la base de datos
    public function getCanchaById($id)
    {
        return $this->find($id);
    }

    public function getAllCanchas()
    {
        return $this->findAll();
    }
}
