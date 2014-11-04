<?php
  if(isset($errors)):
    foreach($errors as $error):
      print "<div class='error-line'>".$error."</div>";
    endforeach;
  endif;
?>
