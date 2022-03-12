<?php

function obtenerIP () {
   if ( filter_var( $_SERVER['HTTP_CLIENT_IP'], FILTER_VALIDATE_IP ) ) {
      return $_SERVER['HTTP_CLIENTE_IP'];
   }
   elseif ( filter_var ( $_SERVER['HTTP_X_FORWARDED_FOR'], FILTER_VALIDATE_IP ) ) {
      return $_SERVER['HTTP_X_FORWARDED_FOR'];
   }
   elseif ( filter_var ( $_SERVER['HTTP_VIA'], FILTER_VALIDATE_IP ) ) {
      return $_SERVER['HTTP_VIA'];
   }
   else {
      return $_SERVER['REMOTE_ADDR'];
   }
}

echo obtenerIP();
