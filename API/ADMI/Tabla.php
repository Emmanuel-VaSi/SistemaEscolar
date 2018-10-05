<?php

namespace ADMI;

require_once('API/SIST/SystemConstants.php');
require_once('API/SIST/BaseDeDatos.php');

class Tabla
{ 
    public $Id;
    public $Campo01;
    public $Campo02;
    public $Campo03;
    //--
    public $TABLE_NAME = "tabla";
    public $LISTADECAMPOS = " `Id`, `Campo01`, `Campo02`, `Campo03` ";
    
    public function __construct()
    {
        $this->ResetAttributes();
        $this->db = new \SIST\BaseDeDatos();
    }
    
    public function __destruct()
    {
        //En caso de que sea necesario realizar una secuencia al destruir el objeto.
    }
    
    public function InsertRegistro(Tabla $Tabla)
    {
        $db = new \SIST\BaseDeDatos();
        $Query = "INSERT INTO `". $db->dbname ."`.`tabla` VALUES(";
        $Query .= "' " . $Tabla->Id . "', ";
        $Query .= "' " . $Tabla->Campo01 . "', ";
        $Query .= "' " . $Tabla->Campo02 . "', ";
        $Query .= "' " . $Tabla->Campo03 . "');";
        echo($Query);
        //--
        return($db->EjecutarSentenciaINSERT($Query));
    }

    public function GetRegistro($Id)
    {
        $Query = "SELECT " + $this->LISTADECAMPOS + " FROM `"+ \SIST\BaseDeDatos::$dbname +"`.`"+ $this->TABLE_NAME +"` WHERE `Id` = '"+ $Id +"';";
        $db = new \SIST\BaseDeDatos();
        $ResultSet = $db->EjecutarSentenciaSELECT($Query);
        //--
        if($ResultSet != NULL)
        {
            $Tabla = new Tabla();
            $Tabla->Id = "";
            $Tabla->Campo01 = $ResultSet[0][0];
            $Tabla->Campo02= $ResultSet[0][1];
            $Tabla->Campo03 = $ResultSet[0][2];
            $Tabla->Campo04 = $ResultSet[0][3];
            //--
            return($Tabla);
        }
        else return(NULL);
    }

    public function GetNuevo()
    {
        $Tabla = new Tabla();
        $Tabla->Id = $this->GetIdUnico();
        //--
        return($Tabla);
    }
    
    private function GetIdUnico()
    {
        while (TRUE)
        {
            $Id = uniqid();
            if(!$this->ExisteEnBaseDeDatos($Id)) return($Id);
        }
    }
    
    private function ExisteEnBaseDeDatos($Id)
    {
        $db = new \SIST\BaseDeDatos();
        $Query = "SELECT `Id` FROM `test`.`tabla` WHERE `Id` = '" . $Id . "';";
        $ResultSet = $db->EjecutarSentenciaSELECT($Query);
        //--
        if($ResultSet != NULL)
        {
            return(true);
        }
        else return(false);
    }

    private function ResetAttributes()
    {
        $this->Id = "";
        $this->Campo01 = "";
        $this->Campo02 = "";
        $this->Campo03 = "";
    }
    
}

?>

