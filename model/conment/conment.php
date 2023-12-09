<?php
     function insert_binhluan($conment,$name_kh,$date_bl){
        $sql="insert into binhluan(conment,name_kh,date_bl) values('$conment','$name_kh','$date_bl')";
        pdo_execute($sql);
     }
     function loadall_binhluan($idpro){
        $sql="select * from conment where id_rom='".$idpro."' order by id desc";
        $listbl=pdo_query($sql);
         return $listbl;
     }
     
     function loadOne_binhluan ($id_rom) {
      $sql = "select * from conment where id_rom=".$id_rom;
      $bl = pdo_query_one($sql);
      return $bl; 
  }
  function delete_binhluan() {
   $sql = "delete from conment where id_bl=".$_GET['id_bl'];
   pdo_execute($sql);
}
?>