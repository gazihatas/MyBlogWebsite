<?php
require_once '../config/default.php';



if ($_POST) :

    $site_url = $_POST['site_url'];
    $site_aciklama = $_POST['site_aciklama'];
    $site_kelimeler = $_POST['site_kelimeler'];
    $google_dogrulama_kodu = $_POST['google_dogrulama_kodu'];
    $yandex_dogrulama_kodu = $_POST['yandex_dogrulama_kodu'];
    $bing_dogrulama_kodu = $_POST['bing_dogrulama_kodu'];
    $analytics_kodu = $_POST['analytics_kodu'];

        /*
        $ayarEkle = $db->prepare("INSERT INTO ayar SET
                                                                site_url =: site_url,
                                                                site_aciklama =:site_aciklama,
                                                                site_kelimeler =:site_kelimeler,
                                                                google_dogrulama_kodu=:google,
                                                                yandex_dogrulama_kodu=:yandex,
                                                                bing_dogrulama_kodu=:bing,
                                                                analytics_kodu=:analytics
                                                            
                                                                ");

        $ayarEkle->execute([
            ':site_url'=>$site_url,
            ':site_aciklama'=>$site_aciklama,
            ':site_kelimeler'=>$site_kelimeler,
            ':google'=>$google_dogrulama_kodu,
            ':yandex'=>$yandex_dogrulama_kodu,
            ':bing'=>$bing_dogrulama_kodu,
            ':analytics'=>$analytics_kodu
        ]);

        */


    $guncelle = $db->prepare("UPDATE ayar SET
                                                site_url =:site_url,
                                                site_aciklama =:site_aciklama,
                                                site_kelimeler =:site_kelimeler,
                                                google_dogrulama_kodu =:google,
                                                yandex_dogrulama_kodu =:yandex,    
                                                bing_dogrulama_kodu =:bing,
                                                analytics_kodu =:analytics WHERE id=:id
                                                ");

    $guncelle->execute([
        ':site_url'=>$site_url,
        ':site_aciklama'=>$site_aciklama,
        ':site_kelimeler'=>$site_kelimeler,
        ':google'=>$google_dogrulama_kodu,
        ':yandex'=>$yandex_dogrulama_kodu,
        ':bing'=>$bing_dogrulama_kodu,
        ':analytics'=>$analytics_kodu, ':id'=>1]);

        if ($guncelle) :
            //header('refresh:2;url='.$site_url)
            echo "basarili";
        else :
            echo  "hata";
        endif;




endif;



?>