<?php

include_once __DIR__.'/info.php';

$replaces['pagination'] = str_replace(['{PAGENO}', '{nb}'], ['[[page_cu]]', '[[page_nb]]'], $replaces['pagination']);

$prefixes = [
    'c_',
    'f_',
];

foreach ($prefixes as $prefix) {
    if ($replaces[$prefix.'piva'] != $replaces[$prefix.'codicefiscale']) {
        $replaces[$prefix.'piva'] = !empty($replaces[$prefix.'piva']) ? 'P.Iva: '.$replaces[$prefix.'piva'] : '';
        $replaces[$prefix.'codicefiscale'] = !empty($replaces[$prefix.'codicefiscale']) ? 'C.F.: '.$replaces[$prefix.'codicefiscale'] : '';
    } else {
        $replaces[$prefix.'piva'] = !empty($replaces[$prefix.'piva']) ? 'P.Iva/C.F.: '.$replaces[$prefix.'piva'] : '';
        $replaces[$prefix.'codicefiscale'] = '';
    }

    $replaces[$prefix.'capsoc'] = !empty($replaces[$prefix.'capsoc']) ? 'Cap.Soc.: '.$replaces[$prefix.'capsoc'] : '';
    $replaces[$prefix.'sitoweb'] = !empty($replaces[$prefix.'sitoweb']) ? 'Web: '.$replaces[$prefix.'sitoweb'] : '';
    $replaces[$prefix.'telefono'] = !empty($replaces[$prefix.'telefono']) ? 'Tel: '.$replaces[$prefix.'telefono'] : '';
    $replaces[$prefix.'fax'] = !empty($replaces[$prefix.'fax']) ? 'Fax: '.$replaces[$prefix.'fax'] : '';
    $replaces[$prefix.'cellulare'] = !empty($replaces[$prefix.'cellulare']) ? 'Cell: '.$replaces[$prefix.'cellulare'] : '';
    $replaces[$prefix.'email'] = !empty($replaces[$prefix.'email']) ? 'Email: '.$replaces[$prefix.'email'] : '';
    $replaces[$prefix.'codiceiban'] = !empty($replaces[$prefix.'codiceiban']) ? 'IBAN: '.$replaces[$prefix.'codiceiban'] : '';

    foreach ($replaces as $key => $value) {
        if (starts_with($key, $prefix)) {
            $replaces[$key] = empty($value) ? $value : $value.'<br/>';
        }
    }
}
