<?php

/**
 * Provinces of Italy
 * - 107 provinces
 * 
 * Source: 
 * - Wikipedia
 *
 * @author  Claudio Tegazzini <claudio.tegazzini@gmail.com> | https://www.claudiotegazzini.it
 * @version 1.0.0
 * @license http://www.gnu.org/licenses/gpl-2.0.html
 */

global $states;

$states['IT'] = array(
  '101' => 'Agrigento',
  '102' => 'Alessandria',
  '103' => 'Ancona',
  '104' => 'Aosta',
  '105' => 'L&#8242;Aquila',
  '106' => 'Arezzo',
  '107' => 'Ascoli-Piceno',
  '108' => 'Asti',
  '109' => 'Avellino',
  '110' => 'Bari',
  '111' => 'Barletta-Andria-Trani',
  '112' => 'Belluno',
  '113' => 'Benevento',
  '114' => 'Bergamo',
  '115' => 'Biella',
  '116' => 'Bologna',
  '117' => 'Bolzano/Bozen',
  '118' => 'Brescia',
  '119' => 'Brindisi',
  '120' => 'Cagliari',
  '121' => 'Caltanissetta',
  '122' => 'Campobasso',
  '123' => 'Caserta',
  '124' => 'Catania',
  '125' => 'Catanzaro',
  '126' => 'Chieti',
  '127' => 'Como',
  '128' => 'Cosenza',
  '129' => 'Cremona',
  '130' => 'Crotone',
  '131' => 'Cuneo',
  '132' => 'Enna',
  '133' => 'Fermo',
  '134' => 'Ferrara',
  '135' => 'Firenze',
  '136' => 'Foggia',
  '137' => 'Forli-Cesena',
  '138' => 'Frosinone',
  '139' => 'Genova',
  '140' => 'Gorizia',
  '141' => 'Grosseto',
  '142' => 'Imperia',
  '143' => 'Isernia',
  '144' => 'La Spezia',
  '145' => 'Latina',
  '146' => 'Lecce',
  '147' => 'Lecco',
  '148' => 'Livorno',
  '149' => 'Lodi',
  '150' => 'Lucca',
  '151' => 'Macerata',
  '152' => 'Mantova',
  '153' => 'Massa-Carrara',
  '154' => 'Matera',
  '155' => 'Messina',
  '156' => 'Milano',
  '157' => 'Modena',
  '158' => 'Monza-Brianza',
  '159' => 'Napoli',
  '160' => 'Novara',
  '161' => 'Nuoro',
  '162' => 'Oristano',
  '163' => 'Padova',
  '164' => 'Palermo',
  '165' => 'Parma',
  '166' => 'Pavia',
  '167' => 'Perugia',
  '168' => 'Pesaro-Urbino',
  '169' => 'Pescara',
  '170' => 'Piacenza',
  '171' => 'Pisa',
  '172' => 'Pistoia',
  '173' => 'Pordenone',
  '174' => 'Potenza',
  '175' => 'Prato',
  '176' => 'Ragusa',
  '177' => 'Ravenna',
  '178' => 'Reggio-Calabria',
  '179' => 'Reggio-Emilia',
  '180' => 'Rieti',
  '181' => 'Rimini',
  '182' => 'Roma',
  '183' => 'Rovigo',
  '184' => 'Salerno',
  '185' => 'Sassari',
  '186' => 'Savona',
  '187' => 'Siena',
  '188' => 'Siracusa',
  '189' => 'Sondrio',
  '190' => 'Sud Sardegna',
  '191' => 'Taranto',
  '192' => 'Teramo',
  '193' => 'Terni',
  '194' => 'Torino',
  '195' => 'Trapani',
  '196' => 'Trento',
  '197' => 'Treviso',
  '198' => 'Trieste',
  '199' => 'Udine',
  '200' => 'Varese',
  '201' => 'Venezia',
  '202' => 'Verbano-Cusio-Ossola',
  '203' => 'Vercelli',
  '204' => 'Verona',
  '205' => 'Vibo-Valentia',
  '206' => 'Vicenza',
  '207' => 'Viterbo',
);

// Use this filter to handle the Provinces of Italy
$states['IT'] = apply_filters('scpwoo_custom_states_it', $states['IT']);