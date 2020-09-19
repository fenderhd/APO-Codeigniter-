

<div class="row">
<?php
  
    if($post == false){
      echo 'Post não encontrado';
    }
    else{
      //var_dump($post);
      foreach($post as $p){
        echo $p->texto;
      }
    }
    
?>
</div>