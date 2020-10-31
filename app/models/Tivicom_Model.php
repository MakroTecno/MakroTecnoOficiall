<?php
class Tivicom_Model
{
    private $conn;
    public function __construct()
    {
        $this->conn = new Db;
    }
    public function obtenerSentencia($consulta)
    {
        $sentencia = $this->conn->query($consulta);
        return $sentencia;
    }
    public function addproduct($idempresa, $cantidadEx, $codigos, $descripciones, $vnetos, $vunitarios)
    {
        foreach ($idempresa as $key => $value) {
            $cantidad_Ex = $cantidadEx[$key];
            $codigo = $codigos[$key];
            $descrip = $descripciones[$key];
            $vnetoo = $vnetos[$key];
            $vunitario = $vunitarios[$key];
            $dato[] = '("'.$codigo.'", "'.$value.'", "'.$descrip.'", "'.$vnetoo.'", "'.$vunitario.'", "'.$cantidad_Ex.'")';
        }
        $sql = "INSERT INTO productos (cod_producto, id_empresa, descripcion, valor_neto, valor_venta, cantidad_ex) VALUES " .implode(',', $dato);
        $productos = $this->conn->query($sql);
        return $productos;
    }
    public function crearFactura($idempresa, $nombreCliente, $cedulaCliente, $fv, $vendedor, $comentarioss)
    {
        $factura_venta = $this->conn->prepare("INSERT INTO factura (id_empresa, cod_vendedor, cedula_cliente, fecha_venta, nombre_cliente, comentarios) VALUES (?,?,?,?,?,?)");
        $factura_venta->bind_param("isssss", $idempresa, $vendedor, $cedulaCliente, $fv, $nombreCliente, $comentarioss);
        $factura_venta->execute();
        var_dump($factura_venta);
        return $factura_venta;
    }
    public function getProductos($sql)
    {
        $products = $this->conn->query($sql);
        return $products;
    }
    public function addFact($valorfact, $fechaventas, $codigo, $cantidad)
    {
        foreach ($valorfact as $key => $value) {
            $fecha_ventas = $fechaventas[$key];
            $codigofact = $codigo[$key];
            $cantidads = $cantidad[$key];
            $dato[] = '("'.$value.'", "'.$codigofact.'", "'.$cantidads.'", "'.$fecha_ventas.'")';
        }
        $sql = "INSERT INTO pedido (cod_factura, cod_producto, cantidad, fecha_venta) VALUES " .implode(',', $dato);
        $facturas = $this->conn->query($sql);
        return $facturas;
    }
    public function sentenciaTapabocas($cod_factura, $cod_producto, $cantidad, $fecha_venta)
    {
        $consultaTapabocas = $this->conn->prepare("INSERT INTO pedido (cod_factura, cod_producto, cantidad, fecha_venta) VALUES (?,?,?,?)");
        var_dump($consultaTapabocas);
        $consultaTapabocas->bind_param("isis", $cod_factura, $cod_producto, $cantidad, $fecha_venta);
        $consultaTapabocas->execute();
        return $consultaTapabocas;
    }
    public function modifyEntrada($codigo, $cantidad)
    {
        $sentenciaEntrada = $this->conn->query("UPDATE productos SET cantidad_ex = '$cantidad' WHERE cod_producto = '$codigo'");
        return $sentenciaEntrada;

    }
    public function addGananciaMN($fechaventa, $descripcion, $valor_general, $ganancias)
    {
        $mysql = "INSERT INTO modelonegocio (descripcion_general, valor_general, ganancias_monetarias, fecha_registro) VALUES ('$descripcion', '$valor_general', '$ganancias', '$fechaventa')";
        $sentencia = $this->conn->query($mysql);
        return $sentencia;
        /*$sentencia  = $this->conn->prepare("INSERT INTO modelonegocio (descripcion_general, valor_general, ganancias_monetarias, fecha_registro) VALUES (?,?,?,?)");
        $sentencia = bind_param("siis", $descripcion, $valor_general, $ganancias, $fechaventa);
        var_dump($sentencia);
        $sentencia->execute();
        return $sentencia;*/
    }
}
