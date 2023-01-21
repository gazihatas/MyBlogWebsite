<?php 
if(isset($_FILES['upload']['name']))
{
    $dosya=$FILES['upload']['tmp_name'];
    $dosyaadi=$_FILES['upload']['name'];
    $dosyaadi_array=explode(".",$dosyaadi);
    $yeni=end($dosyaadi_array);
    $resim_yeni=rand().'.'.$yeni;
    chmod('upload/',0777);
    $kabul=array("jpg","gif","png");
    if(in_array($yeni,$kabul))
    {
        move_uploaded_file($dosya,'upload/'.$resim_yeni);
        $fonksiyon_numarasi=$_GET['CKEditorFuncNum'];
        $url='upload/'.$resim_yeni;
        $mesaj='';
        echo "<script type='text/javascript'>window.parent.CKEDITOR.tools.callFunction($fonksiyon_numarasi,'$url',$mesaj);</script>";
    }
}

?>
