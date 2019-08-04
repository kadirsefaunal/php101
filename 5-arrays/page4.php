<?php

$embed = 'region,hotels,client';

$arrEmbed = explode(',', $embed);
var_dump($arrEmbed);

$strEmbed = implode(',', $arrEmbed);
var_dump($strEmbed);

array_push($arrEmbed, 'destination');
var_dump($arrEmbed);