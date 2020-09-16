<?php
    require_once('Tutor_Model.php');
	 $db=new Tutor_Model();
	 $sql="DELETE FROM `tutor` WHERE id=".$_GET['q'];
	 if ($db->delete_tutor($sql)) {
         header('Location: ../admin_home_page.php');
      }


 ?>
	

