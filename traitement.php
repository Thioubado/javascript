<h2>Traitement du formulaire</h2>
<pre>
<?php
$mode = ['get', 'post'];

foreach ($mode as $mmm) {
    $var = '_' . strtoupper($mmm);
    $copie = $$var;
 
    if ($mmm=='get' && array_key_exists('page', $_GET)) {
        unset($copie['page']);
    }

    if (isset($copie) && !empty($copie)) {
        $copie = ['MODE' => '$' . $var]+$copie;
        var_dump($copie);
    }
}

?>
</pre>