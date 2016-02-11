<?php

class Producto {

    protected $codigo;
    protected $nombre;
    protected $nombre_corto;
    protected $PVP;
    protected $descripcion;

    public function getcodigo() {
        return $this->codigo;
    }

    public function getnombre() {
        return $this->nombre;
    }

    public function getnombrecorto() {
        return $this->nombre_corto;
    }

    public function getPVP() {
        return $this->PVP;
    }

    public function getdescripcion() {
        return $this->descripcion;
    }

    public function muestra() {
        print "<p>" . $this->codigo . "</p>";
    }

    public function __construct($row) {

        if (isset($row['cod'])) {
            $this->codigo = $row['cod'];
        }

        if (isset($row['codigo'])) {
            $this->codigo = $row['codigo'];
        }



        $this->nombre = $row['nombre'];
        $this->nombre_corto = $row['nombre_corto'];
        $this->PVP = $row['PVP'];
        if (isset($row['descripcion'])) {
            $this->descripcion = $row['descripcion'];
        }
    }

}

?>
