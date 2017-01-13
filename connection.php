<?php
  //abrindo conexao com Mysql
    function _dbConecta(){
      //@ == ESCONDE O ERRO
      $link = @mysqli_connect(DB_HOSTNAME,DB_USERNAME,DB_PASSWORD,DB_DATABASE) or die(mysqli_connect_error());
      mysqli_set_charset($link,DB_CHARSET) or die (mysqli_error($link));

      return $link;
    }

  //fechando a conexao com o DB
    function _dbClose($link){
      @mysqli_close($link) or die (mysqli_error($link));
    }
 ?>
