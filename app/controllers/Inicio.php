<?php
class Inicio extends Controller
{
    private $model;
    private $session;
    public function __construct()
    {
        $this->session = new Session;
        $this->session->init();
        if ($this->session->getStatus() === 1 || empty($this->session->get('nick')) and empty($this->session->get('clave'))) {
            exit('Acceso denegado');
        }
        $this->model = $this->modelo('Usuario');
    }
    public function index()
    {
    $nombre = $this->session->get('nombres');
    $apellido = $this->session->get('apellidos');
    $cedula = $this->session->get('cedula');
    $consulta = "SELECT cod_vendedor FROM vendedor WHERE cedula = '$cedula'";
    $sentencia = $this->model->obtenerSentencia($consulta);
    while($codigovendedor = mysqli_fetch_array($sentencia)){
            $vendedor = $codigovendedor['cod_vendedor'];
        }
     $rol = $this->session->get('status');
     $datos = array('rol' => $rol, 'codven' => $vendedor, 'nombre' => $nombre, 'apellido' => $apellido);
     $this->vista('Panel/CPANEL', $datos);
    }
    public function logout()
    {
        $this->session->close();
        header("Location: http://www.makrotecno.net");
    }
}
