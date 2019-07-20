<?php 

function cekemail($email)
{
    $kecil = preg_match('@[a-z]@', $email);//huruf kecil a-z
    $besar = preg_match('@[A-Z]@', $email);//huruf besar A-Z
    //$simbol = explode("@",$email);
    $valid = filter_var($email, FILTER_VALIDATE_EMAIL);
    if(!$kecil || $besar || !$valid)
    {
        echo('invalid');
    }
    else
    {
        echo('valid');
    }
}

function cekusername($username)
{
    $kecil = preg_match('@[a-z]@', $username);//huruf kecil a-z
    $besar = preg_match('@[A-Z]@', $username);//huruf besar A-Z
    if(!$kecil || $besar || strlen($username) !==8)
    {
        echo('invalid');
    }
    else
    {
        echo('valid');
    }
}

cekemail("kukuruyuk@gmail.com");
cekusername("vladimir");
?>