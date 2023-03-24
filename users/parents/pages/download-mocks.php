<?php
    
    //pages required
require('./../requires/database-Config.php');

    if (isset($_GET['docs'])) {
        
        $docs = $_GET['docs'];
        $stat = $dbconnect->prepare("SELECT * FROM files WHERE docs=?");
        $stat ->bind_param('s', $docs);
        $stat->execute();
        $data = $stat->fetch();

        $fileName = basename($_GET['docs']);
        $file = "documents/".$fileName; 

        if (file_exists($file)) {
            
            header("Cache-Control: public");
            header("Content-Description: File Transfer");
            header("Content-Disposition: attachment; filename=".$file."");
            header("Content-Type: application/zip");
            header("Content-Transfer-Encoding: binary");

            readfile($file);

            exit;
        }
    }
?>