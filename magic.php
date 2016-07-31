<?php
header('Content-type: application/json');

$input = trim($_GET['i']);

//$raw = file_get_contents('https://www.openthesaurus.de/synonyme/search?format=application/json&q=' . $input);
//mock
$raw = utf8_encode('{"metaData":{"apiVersion":"0.2","warning":"ACHTUNG: Bitte vor ernsthafter Nutzung feedback@openthesaurus.de kontaktieren, um bei API-�nderungen informiert zu werden","copyright":"Copyright (C) 2014 Daniel Naber (www.danielnaber.de)","license":"GNU LESSER GENERAL PUBLIC LICENSE Version 2.1","source":"http://www.openthesaurus.de","date":"Fri Jul 22 18:59:13 CEST 2016"},"synsets":[{"id":6302,"categories":[],"terms":[{"term":"�rger"},{"term":"Aufgebrachtheit"},{"term":"Aufgebrachtsein"},{"term":"Aufgeregtheit"},{"term":"Aufregung"},{"term":"Echauffiertheit"},{"term":"Echauffierung"},{"term":"Emp�rtheit"},{"term":"Emp�rung"},{"term":"Entr�stung"},{"term":"Erbostheit"},{"term":"Feindseligkeit"},{"term":"Furor"},{"term":"Gereiztheit"},{"term":"heiliger Zorn"},{"term":"Indignation"},{"term":"Ingrimm"},{"term":"J�hzorn"},{"term":"Rage"},{"term":"Raserei"},{"term":"Stinkwut"},{"term":"Ver�rgerung"},{"term":"Wut"},{"term":"Wut im Bauch"},{"term":"Wutanfall"},{"term":"W�terei"},{"term":"Zorn"},{"term":"b�ses Blut","level":"umgangssprachlich"},{"term":"Gefrett","level":"umgangssprachlich"},{"term":"Gfrett","level":"umgangssprachlich"},{"term":"Schei�wut","level":"derb"}]},{"id":8284,"categories":[],"terms":[{"term":"�rger"},{"term":"�rgerlichkeiten"},{"term":"Konflikte"},{"term":"Misshelligkeiten"},{"term":"Probleme"},{"term":"Streit"},{"term":"Stress"},{"term":"Unmut"},{"term":"Verdrie�lichkeiten","level":"gehoben"},{"term":"(der) Haussegen h�ngt schief","level":"umgangssprachlich"},{"term":"Huddel","level":"umgangssprachlich"},{"term":"Krach","level":"umgangssprachlich"},{"term":"Theater","level":"umgangssprachlich"},{"term":"Trouble","level":"umgangssprachlich"},{"term":"(die) Kacke ist am dampfen","level":"derb"}]},{"id":29996,"categories":[],"terms":[{"term":"�rger"},{"term":"Konflikt"},{"term":"Problem"},{"term":"Streitfall"},{"term":"Streitfrage"},{"term":"strittige Angelegenheit"}]},{"id":10106,"categories":[],"terms":[{"term":"�rger"},{"term":"Groll"},{"term":"Leidwesen"},{"term":"Missfallen"},{"term":"Missmut"},{"term":"Missvergn�gen"},{"term":"Unmut"},{"term":"Ver�rgerung"},{"term":"Verdruss"},{"term":"Verstimmung"},{"term":"Grant","level":"umgangssprachlich"}]},{"id":31142,"categories":[],"terms":[{"term":"�rger (machen)"},{"term":"Geschichten (machen)"},{"term":"Fisimatenten","level":"umgangssprachlich"},{"term":"Sperenzchen","level":"umgangssprachlich"},{"term":"Theater","level":"umgangssprachlich"},{"term":"Zicken","level":"umgangssprachlich"}]}]}');
$result = json_decode($raw, true);

$syns = [];

foreach ($result['synsets'] as $syn) {
  $count = 0;
  foreach ($syn['terms'] as $term) {
    if ($count > 2) {
      break;
    }

    $syns[] = $term['term'];
    $count++;
  }
}

$syns = array_unique($syns);
//shuffle($syns);

$result = [
  'input' => $input,
  'syns' => $syns
];

echo json_encode($result);
