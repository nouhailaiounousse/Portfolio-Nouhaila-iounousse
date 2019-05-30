<?php 
if (isset($_POST['submit'])) {
    $name=$_POST['name'];
    $mailform=$_POST['email'];
    $subj=$_POST['subj'];
    $message=$_POST['msg'];
    $mailto="nouhaila.iounousse@gmail.com";
    $header="From : ".$mailform;
    $txt="You have received an email from ".$name.".\n\n".$message; 
    
    mail($mailto,$subj,$txt,$header);
    header("Location:../index.php?mailsend");

   
}