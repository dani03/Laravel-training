<?php
if (! function_exists('format_price')) {
  function format_price($events){
      if ($events->isFree()) {
          return '<strong>Gratuit! </strong>';
      }else {
        // $events->price. " euros"; 
        printf('%d francs', $events->price);
      }
  }
}

if (! function_exists('format_date')) {
  function format_date($date ){
     return $date->format("d/M/Y H:i");
  }
}