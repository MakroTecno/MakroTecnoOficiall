<?php
class Menu 
{
    public function menuAdmin()
    {
        echo '
            <section class="header">
             <div class="container">
              <div class="row">
               <div class="col-12 menuinicio">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                 <a class="navbar-brand" href="'.RUTA.'Inicio">Portal</a>
                 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                 </button>
                 <div class="collapse navbar-collapse" id="navbarSupportedContent">
                   <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      CPanel
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="Usuarios/addmarca">Agregar Marca</a>
                        <a class="dropdown-item" href="Usuarios">Cambiar Privilegios</a>
                        <a class="dropdown-item" href="/MakrotecnoWeb/Usuarios/vendedores">Agregar Vendedores</a>
                        <a class="dropdown-item" href="/MakrotecnoWeb/Usuarios/panelUser">Panel de Usuarios</a>
                        <a class="dropdown-item" href="/MakrotecnoWeb/Usuarios/registrarempleado">Registrar Empleado</a>
                        <a class="dropdown-item" href="#">Estadistica de Recaudo</a>
                        <a class="dropdown-item" href="#">Balance General</a>
                      </div>
                    </li>
                   <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"     aria-haspopup="true" aria-expanded="false">
                      Empresas
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="'.RUTA.'Tivicom">TIVICOM</a>
                        <a class="dropdown-item" href="'.RUTA.'CrediFacil">Credi-Facil</a>
                        <a class="dropdown-item" href="'.RUTA.'DistriJ">Distri-Juegos</a>
                      </div>
                   </li>
                  </ul>
                  <li class="form-inline my-2 my-lg-0">
                    <a class="nav-link" href="'.RUTA.'Inicio/logout">Salir</a>
                  </li>
                 </div>
                </nav>
               </div>
              </div>
             </div>
            </section>
        ';
    }
    public function menuModerador()
    {
        echo '
            <section class="header">
             <div class="container">
              <div class="row">
               <div class="col-12 menuinicio">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                 <a class="navbar-brand" href="'.RUTA.'Inicio">Portal</a>
                 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                 </button>
                 <div class="collapse navbar-collapse" id="navbarSupportedContent">
                   <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      CPanel
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/MakrotecnoWeb/Usuarios/vendedores">Agregar Vendedores</a>
                        <a class="dropdown-item" href="/MakrotecnoWeb/Usuarios/panelUser">Panel de Usuarios</a>
                      </div>
                    </li>
                   <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"     aria-haspopup="true" aria-expanded="false">
                      Empresas
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="'.RUTA.'Tivicom">TIVICOM</a>
                        <a class="dropdown-item" href="'.RUTA.'CrediFacil">Credi-Facil</a>
                        <a class="dropdown-item" href="'.RUTA.'DistriJ">Distri-Juegos</a>
                      </div>
                   </li>
                  </ul>
                  <li class="form-inline my-2 my-lg-0">
                    <a class="nav-link" href="'.RUTA.'Inicio/logout">Salir</a>
                  </li>
                 </div>
                </nav>
               </div>
              </div>
             </div>
            </section>
        ';
    }
    public function menuTivicomTendero()
    {
        echo '
            <section class="header">
             <div class="container">
              <div class="row">
               <div class="col-12 menuinicio">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                 <a class="navbar-brand" href="'.RUTA.'Inicio">Portal</a>
                 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                 </button>
                 <div class="collapse navbar-collapse" id="navbarSupportedContent">
                   <ul class="navbar-nav mr-auto">
                   <li class="nav-item">
                      <a class="nav-link" href="'.RUTA.'Tivicom">Inicio</a>
                   </li>
                   <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      TIVICOM
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="'.RUTA.'Tivicom/productos">Agregar Productos</a>
                        <a class="dropdown-item" href="'.RUTA.'Tivicom/addventas">Facturacion</a>
                        <a class="dropdown-item" href="'.RUTA.'Tivicom/verproductos">Ver Productos</a>
                        <a class="dropdown-item" href="'.RUTA.'Tivicom/addventas">Ver Clientes</a>
                      </div>
                   </li>
                  </ul>
                  <li class="form-inline my-2 my-lg-0">
                    <a class="nav-link" href="'.RUTA.'Inicio/logout">Salir</a>
                  </li>
                 </div>
                </nav>
               </div>
              </div>
             </div>
            </section>
        ';
    }
    public function menuTivicomAdmin()
    {
        echo '
            <section class="header">
             <div class="container">
              <div class="row">
               <div class="col-12 menuinicio">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                 <a class="navbar-brand" href="'.RUTA.'Inicio">Portal</a>
                 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                 </button>
                 <div class="collapse navbar-collapse" id="navbarSupportedContent">
                   <ul class="navbar-nav mr-auto">
                   <li class="nav-item">
                      <a class="nav-link" href="'.RUTA.'Tivicom">Inicio</a>
                   </li>
                   <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Administracion
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="'.RUTA.'Tivicom">Agregar Actualizaciones</a>
                        <a class="dropdown-item" href="'.RUTA.'Facturas">Agregar Soporte(ticket)</a>
                        <a class="dropdown-item" href="#">Procesos Monitoreo del Negocio</a>
                        <a class="dropdown-item" href="#">Log´s de Soporte</a>
                        <a class="dropdown-item" href="#">Entradas/Salidas</a>

                      </div>
                   </li>
                   <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      TIVICOM
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="'.RUTA.'Tivicom/productos">Agregar Productos</a>
                        <a class="dropdown-item" href="'.RUTA.'Tivicom/addventas">Facturacion</a>
                        <a class="dropdown-item" href="'.RUTA.'Tivicom/verproductos">Productos</a>
                      </div>
                   </li>
                  </ul>
                  <li class="form-inline my-2 my-lg-0">
                    <a class="nav-link" href="'.RUTA.'Inicio/logout">Salir</a>
                  </li>
                 </div>
                </nav>
               </div>
              </div>
             </div>
            </section>
        ';
    }
    public function menuFacturas()
    {
        echo '
<section class="header">
 <div class="container">
  <div class="row">
   <div class="col-12 menuinicio">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
     <a class="navbar-brand" href="'.RUTA.'Inicio">Portal</a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarSupportedContent">
       <ul class="navbar-nav mr-auto">
       <li class="nav-item">
          <a class="nav-link" href="'.RUTA.'CrediFacil">Inicio</a>
       </li>
       <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"     aria-haspopup="true" aria-expanded="false">
          CREDIFACIL
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="'.RUTA.'CrediFacil/addPedido">Agregar Facturas</a>
            <a class="dropdown-item" href="'.RUTA.'CrediFacil/verfacturas">Facturas</a>
            <a class="dropdown-item" href="'.RUTA.'CrediFacil/productos">Mercancia</a>
            <a class="dropdown-item" href="'.RUTA.'CrediFacil/productos">Cobros</a>
            <a class="dropdown-item" href="'.RUTA.'CrediFacil/productos">Saldos</a>
          </div>
       </li>
      </ul>
      <li class="form-inline my-2 my-lg-0">
        <a class="nav-link" href="'.RUTA.'Inicio/logout">Salir</a>
      </li>
     </div>
    </nav>
   </div>
  </div>
 </div>
</section>
        ';
    }
    public function menuFacturaAdmin()
    {
        echo '
<section class="header">
 <div class="container">
  <div class="row">
   <div class="col-12 menuinicio">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
     <a class="navbar-brand" href="'.RUTA.'Inicio">Portal</a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarSupportedContent">
       <ul class="navbar-nav mr-auto">
       <li class="nav-item">
          <a class="nav-link" href="'.RUTA.'CrediFacil">Inicio</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"     aria-haspopup="true" aria-expanded="false">
          Administracion
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="'.RUTA.'Tivicom">Agregar Actualizaciones</a>
            <a class="dropdown-item" href="'.RUTA.'Facturas">Agregar Soporte(ticket)</a>
            <a class="dropdown-item" href="#">Procesos Monitoreo del Negocio</a>
            <a class="dropdown-item" href="#">Log´s de Soporte</a>
          </div>
       </li>
       <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"     aria-haspopup="true" aria-expanded="false">
          CREDIFACIL
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="'.RUTA.'CrediFacil/addPedido">Agregar Facturas</a>
            <a class="dropdown-item" href="'.RUTA.'CrediFacil/verfacturas">Facturas</a>
            <a class="dropdown-item" href="'.RUTA.'CrediFacil/productos">Mercancia</a>
            <a class="dropdown-item" href="'.RUTA.'CrediFacil/productos">Cobros</a>
            <a class="dropdown-item" href="'.RUTA.'CrediFacil/productos">Saldos</a>
          </div>
       </li>
      </ul>
      <li class="form-inline my-2 my-lg-0">
        <a class="nav-link" href="'.RUTA.'Inicio/logout">Salir</a>
      </li>
     </div>
    </nav>
   </div>
  </div>
 </div>
</section>
        ';
    }


    public function mainAdmin() 
    {
      echo '
      
      ';
    }
}
