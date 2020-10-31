<?php
class Tivicom extends Controller
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
        if($this->session->get('status') !== 1 and $this->session->get('status') !== 2 and $this->session->get('status') !== 4 and $this->session->get('status') !== 9){
            exit('Acceso denegado');   
        }
        $this->model = $this->modelo('Tivicom_Model');
        
    }
    public function index()
    {
        $this->vista('Tivicom/index');
    }
    //Method para ir a la seccion donde se agregan los productos.
    public function productos()
    {
        $rol = $this->session->get('status');
        $datos = array('rol' => $rol);
        $this->vista('Tivicom/products', $datos);
    }
    //Method para cuando se agrega productos nuevos.
    public function addproducts() 
    {
        $idempresa  = array_map("htmlspecialchars", $_POST['id_empresa']);
        $cantidadEx  = array_map("htmlspecialchars", $_POST['cantidad_Ex']);
        $codigos  = array_map("htmlspecialchars", $_POST['codigo']);
        $descripciones   = array_map("htmlspecialchars", $_POST['descripcion']);
        $vnetos   = array_map("htmlspecialchars", $_POST['vneto']);
        $vunitarios = array_map("htmlspecialchars", $_POST['vunitario']);
        $productos = $this->model->addproduct($idempresa, $cantidadEx, $codigos, $descripciones, $vnetos, $vunitarios);
        if ($productos) {
            header("Location: productos");
        } else {
            $Excepciones = new Excepciones;
            $Excepciones->system();
        }
    }
    //Method para ver los productos agregados.
    public function verproductos()
    {
        $sql = "SELECT * FROM productos WHERE id_empresa = 3";
        $products = $this->model->getProductos($sql);
        $rol = $this->session->get('status');
        $datos = array('rol' => $rol, 'productos' => $products);
        $this->vista('Tivicom/productosView', $datos);
    }
    //Method para ir a la seccion donde se agregan facturas y pedidos.
    public function addventas()
    {
        $cedula = $this->session->get('cedula');
        $rol = $this->session->get('status');
        $consulta = "SELECT cod_vendedor FROM vendedor WHERE cedula = '$cedula'";
        $sentencia = $this->model->obtenerSentencia($consulta);
        while($codigovendedor = mysqli_fetch_array($sentencia)){
            $vendedor = $codigovendedor['cod_vendedor'];
        }
        $consulta = "SELECT cod_factura FROM factura WHERE cod_vendedor = '$vendedor'";
        $sentencia = $this->model->obtenerSentencia($consulta);
        while($row_sentencia = mysqli_fetch_array($sentencia)){
            $id_factura = $row_sentencia['cod_factura'];
        }if(isset($id_factura)){
            $datos = array('id_factura' => $id_factura, 'rol' => $rol);
        $this->vista('Tivicom/agregarventa', $datos);    
        }else {
            $datos = array('rol' => $rol);
            $this->vista('Tivicom/agregarventa', $datos);
        }      
    }
    //Method que se utiliza para crear una factura de venta
    public function registrodatos()
    {
        $cedula = $this->session->get('cedula');
        $consulta = "SELECT cod_vendedor FROM vendedor WHERE cedula = '$cedula'";
        $sentencia = $this->model->obtenerSentencia($consulta);
        while($codigovendedor = mysqli_fetch_array($sentencia)){
            $vendedor = $codigovendedor['cod_vendedor'];
        }
        $nombreCliente = $_POST['nombres'];
        $cedulaCliente = $_POST['cedula'];
        $fv = date('Y-m-d');
        $idempresa = 3;
        $comentarioss = $_POST['comentarios'];
        $factura_venta = $this->model->crearFactura($idempresa, $nombreCliente, $cedulaCliente, $fv, $vendedor, $comentarioss);
        if($factura_venta){
            header("Location: addventas");
        }else {
            $Excepciones = new Excepciones;
            $Excepciones->system();
        }
    }
    //Method que se utiliza para agregar productos a un pedido
    public function addFact()
    {
        $valorfact  = array_map("htmlspecialchars", $_POST['valorfact']);
        $fechaventas  = array_map("htmlspecialchars", $_POST['fecha_venta']);
        $codigo     = array_map("htmlspecialchars", $_POST['codigo']);
        $cantidad   = array_map("htmlspecialchars", $_POST['cantidad']);
        $facturas   = $this->model->addFact($valorfact, $fechaventas, $codigo, $cantidad);
        if($facturas){
            header("Location: addventas");
        }else {
            $Excepciones = new Excepciones;
            $Excepciones->system();
        }
    }
    //Method que se utiliza para agregar una venta de tapabocas
    public function addTapabocas()
    {
        $cod_factura = 7;
        $cod_producto = 'TP-X';
        $cantidad = 1;
        date_default_timezone_set('America/Bogota');
        $fecha_venta = date('Y-m-d g:i');
        $consultaTapabocas = $this->model->sentenciaTapabocas($cod_factura, $cod_producto, $cantidad, $fecha_venta);
        if($consultaTapabocas){
            header("Location: addventas");
        }else {
            $Excepciones = new Excepciones;
            $Excepciones->system();
            echo 'Fallo';
        }
    }
    //Method que se utiliza para salir de la session
    public function logout()
    {
        $this->session->close();
        header("Location: http://www.makrotecno.net/");
    }
    public function bodega()
    {
        $rol = $this->session->get('status');
        $datos = array('rol' => $rol);
        $this->vista('Tivicom/EntradaSalida', $datos);
    }
    public function addEntrada()
    {
        $codigo = $_POST['codigo'];
        $cantidad = $_POST['cantidad'];
        if(empty($codigo) OR empty($cantidad)){
            $Excepciones = new Excepciones;
            $Excepciones->system();
        }else {
            $sentenciaEntrada = $this->model->modifyEntrada($codigo, $cantidad);
            if($sentenciaEntrada){
                header("Location: bodega");
            }else {
               $Excepciones = new Excepciones;
               $Excepciones->system(); 
            }
        }
    }
    public function modeloNegocio()
    {
        $rol = $this->session->get('status');
        $datos = array('rol' => $rol);
        $this->vista('Tivicom/pmnegocios', $datos);
    }
    public function ganancias()
    {
        $fechaventa = $_POST['fecha_venta'];
        $descripcion = $_POST['descripcion'];
        $valor_general = $_POST['vgeneral'];
        $ganancias = $_POST['ganancias'];
        $sentencia = $this->model->addGananciaMN($fechaventa, $descripcion, $valor_general, $ganancias);
        if($sentencia){
            header("Location: modeloNegocio");
        }else {
            $Excepciones = new Excepciones;
            $Excepciones->system();
        }
    }
}