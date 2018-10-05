<?php
namespace SIST;

class BaseDeDatos
{ 
    public $servername = "127.0.0.1";
    public $username = "root";
    public $password = "";
    public $dbname = "test";
    public $port = "3306";
    //--
    public $conn = NULL;
    
    public function __construct()
    {
        
    }
    
    public function __destruct()
    {
        $this->CerrarConexion();
    }
    
    function EjecutarSentenciaINSERT($Query)
    { 
        return($this->RunNonQuery($Query));
    }
    
    function EjecutarSentenciaSELECT($Query, $FetchType = "ARRAY")
    { 
        $Result = $this->RunQuery($Query);
        //--
        if ($FetchType == 'ARRAY') return(mysqli_fetch_array($Result));
        else if ($FetchType == "ASSOC") return(mysqli_fetch_assoc($Result));
        else return(NULL);  
    }
    
    function EjecutarSentenciaUPDATE($Query)
    { 
        return($this->RunNonQuery($Query));
    }
    
    function EjecutarSentenciaDELETE($Query)
    { 
        return($this->RunNonQuery($Query));
    }
    
    private function RunNonQuery($Query)
    { 
        try
        {
            if(!$this->AbrirConexion())
            {
                if (mysqli_query($this->conn, $Query)) return(true);
                else return(false);
            }
            else return(false);
        }
        catch (Exception $e)
        {
            return(false);
        }
        finally
        {
            $this->CerrarConexion();
        }
    }
    
    private function RunQuery($Query)
    { 
        try
        {
            if(!$this->AbrirConexion())
            {
                $Result = mysqli_query($this->conn, $Query);
                //--
                if (mysqli_num_rows($Result) > 0)
                {
                    return($Result);
                }
                else return(NULL);
            }
            else return(NULL);
        }
        catch (Exception $e)
        {
            return(NULL);
        }
        finally
        {
            $this->CerrarConexion();
        }
    }
    
    public function ConexionEstaAbierta()
    {
        if($this->conn != NULL)
        {
            return(true);
        }
        else return(false);
    }
    
    public function CerrarConexion()
    {
        if ($this->ConexionEstaAbierta())
        {
            mysqli_close($this->conn);
            $this->conn = NULL;
        }
    }
    
    public function AbrirConexion()
    {
        try
        {
            if(!$this->ConexionEstaAbierta())
            {
                $this->conn = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname, $this->port);
                //--
                if($this->conn != NULL)
                {
                    if(!$this->conn)
                    {
                        return(true);
                    }
                    else return(false);
                }
                else return(false);
            }
            else return(true);
        }
        catch (Exception $ex)
        {
            return(false);
        }
    }
    
}

?> 