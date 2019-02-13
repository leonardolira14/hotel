<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'welcome/index';
$route['404_override'] = 'Errort/err_404_T';
$route['translate_uri_dashes'] = FALSE;
$route['home/(:any)']='welcome/index/$1';
$route['suites/(:any)']='welcome/suites/$1';
$route['clasica/(:any)']='welcome/clasica/$1';
$route['junior/(:any)']='welcome/junior/$1';
$route['familiar/(:any)']='welcome/familiar/$1';
$route['imperial/(:any)']='welcome/imperial/$1';
$route['marques/(:any)']='welcome/marques/$1';
$route['servicios/(:any)']='welcome/servicios/$1';
$route['restaurante/(:any)']='welcome/restaurante/$1';
$route['mezcaleria/(:any)']='welcome/mezcaleria/$1';
$route['eventos/(:any)']='welcome/eventos/$1';
$route['cotizador/(:any)']='welcome/cotizador/$1';
$route['reservacion/(:any)']="welcome/reservacion/$1";
$route['experiencias/(:any)']="welcome/experiencias/$1";
$route['contacto/(:any)']="welcome/contacto/$1";
$route['envicotiza']="mail/cotizacion";
$route['resultados/(:any)']="welcome/busqueda_habitacion/$1";
$route['detallesreserva/(:any)']="welcome/detallesreserva/$1";
$route['deleteroom']="welcome/deleteroom";
$route['addcar']="welcome/addcar";
$route['listroom/(:any)']="welcome/busquedareturn/$1";
$route['confirmarreservacion/(:any)']='welcome/confirmar_reserva/$1';
$route['newreservacion/(:any)']="welcome/newreservacion/$1";
$route["addrecervacion/(:any)"]="welcome/add_recervacion/$1";
$route["gracias/(:any)"]="welcome/gracias/$1";


