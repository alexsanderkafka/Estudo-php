<?php
    $url = "https://www.google.com";

    $arrUrl = parse_url($url);

    echo "<pre>";
    print_r($arrUrl);
    echo "</pre> <br>";

    echo $arrUrl["host"] . "<br>";
    
    $url2 = "https://www.hostinger.com.br/tutoriais/o-que-e-site";
    $arrUrl2 = parse_url($url2);
    echo "<pre>";
    print_r($arrUrl2);
    echo "</pre> <br>";

    $url3 = "https://accounts.google.com/AccountChooser/signinchooser?hl=pt-BR&service=blogger&ltmpl=blogger&continue=https%3A%2F%2Fwww.blogger.com%2Fhome%23create&theme=glif&flowName=GlifWebSignIn&flowEntry=AccountChooser";
    $arrUrl3 = parse_url($url3);
    echo "<pre>";
    print_r($arrUrl3);
    echo "</pre> <br>";
?>