<?php
/*********************************************************************************
 * The contents of this file are subject to the SugarCRM Master Subscription
 * Agreement ("License") which can be viewed at
 * http://www.sugarcrm.com/crm/master-subscription-agreement
 * By installing or using this file, You have unconditionally agreed to the
 * terms and conditions of the License, and You may not use this file except in
 * compliance with the License.  Under the terms of the license, You shall not,
 * among other things: 1) sublicense, resell, rent, lease, redistribute, assign
 * or otherwise transfer Your rights to the Software, and 2) use the Software
 * for timesharing or service bureau purposes such as hosting the Software for
 * commercial gain and/or for the benefit of a third party.  Use of the Software
 * may be subject to applicable fees and any use of the Software without first
 * paying applicable fees is strictly prohibited.  You do not have the right to
 * remove SugarCRM copyrights from the source code or user interface.
 *
 * All copies of the Covered Code must include on each user interface screen:
 *  (i) the "Powered by SugarCRM" logo and
 *  (ii) the SugarCRM copyright notice
 * in the same form as they appear in the distribution.  See full license for
 * requirements.
 *
 * Your Warranty, Limitations of liability and Indemnity are expressly stated
 * in the License.  Please refer to the License for the specific language
 * governing these rights and limitations under the License.  Portions created
 * by SugarCRM are Copyright (C) 2004-2012 SugarCRM, Inc.; All Rights Reserved.
 ********************************************************************************/


// THIS CONTENT IS GENERATED BY MBPackage.php
$manifest = array (
  0 => 
  array (
    'acceptable_sugar_versions' => 
    array (
      0 => '',
    ),
  ),
  1 => 
  array (
    'acceptable_sugar_flavors' => 
    array (
      0 => 'PRO',
    ),
  ),
  'readme' => '',
  'key' => 'THHL',
  'author' => 'THHL',
  'description' => 'Pong App Modules',
  'icon' => '',
  'is_uninstallable' => true,
  'name' => 'PongModules',
  'published_date' => '2012-07-17 03:31:24',
  'type' => 'module',
  'version' => 1342495884,
  'remove_tables' => 'prompt',
);


$installdefs = array (
  'id' => 'PongModules',
  'beans' => 
  array (
    0 => 
    array (
      'module' => 'THHL_Games',
      'class' => 'THHL_Games',
      'path' => 'modules/THHL_Games/THHL_Games.php',
      'tab' => true,
    ),
    1 => 
    array (
      'module' => 'THHL_Matches',
      'class' => 'THHL_Matches',
      'path' => 'modules/THHL_Matches/THHL_Matches.php',
      'tab' => true,
    ),
    2 => 
    array (
      'module' => 'THHL_Parties',
      'class' => 'THHL_Parties',
      'path' => 'modules/THHL_Parties/THHL_Parties.php',
      'tab' => true,
    ),
  ),
  'layoutdefs' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/thhl_games_thhl_matches_THHL_Games.php',
      'to_module' => 'THHL_Games',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/thhl_parties_contacts_Contacts.php',
      'to_module' => 'Contacts',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/thhl_parties_contacts_THHL_Parties.php',
      'to_module' => 'THHL_Parties',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/thhl_parties_thhl_games_THHL_Parties.php',
      'to_module' => 'THHL_Parties',
    ),
  ),
  'relationships' => 
  array (
    0 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/thhl_games_thhl_matchesMetaData.php',
    ),
    1 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/thhl_parties_contactsMetaData.php',
    ),
    2 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/thhl_parties_thhl_gamesMetaData.php',
    ),
  ),
  'image_dir' => '<basepath>/icons',
  'copy' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/modules/THHL_Games',
      'to' => 'modules/THHL_Games',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/modules/THHL_Matches',
      'to' => 'modules/THHL_Matches',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/modules/THHL_Parties',
      'to' => 'modules/THHL_Parties',
    ),
  ),
  'language' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Matches.php',
      'to_module' => 'THHL_Matches',
      'language' => 'en_us',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Matches.php',
      'to_module' => 'THHL_Matches',
      'language' => 'bg_BG',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Matches.php',
      'to_module' => 'THHL_Matches',
      'language' => 'cs_CZ',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Matches.php',
      'to_module' => 'THHL_Matches',
      'language' => 'da_DK',
    ),
    4 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Matches.php',
      'to_module' => 'THHL_Matches',
      'language' => 'de_DE',
    ),
    5 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Matches.php',
      'to_module' => 'THHL_Matches',
      'language' => 'es_ES',
    ),
    6 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Matches.php',
      'to_module' => 'THHL_Matches',
      'language' => 'et_EE',
    ),
    7 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Matches.php',
      'to_module' => 'THHL_Matches',
      'language' => 'fr_FR',
    ),
    8 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Matches.php',
      'to_module' => 'THHL_Matches',
      'language' => 'he_IL',
    ),
    9 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Matches.php',
      'to_module' => 'THHL_Matches',
      'language' => 'hu_HU',
    ),
    10 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Matches.php',
      'to_module' => 'THHL_Matches',
      'language' => 'it_it',
    ),
    11 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Matches.php',
      'to_module' => 'THHL_Matches',
      'language' => 'lt_LT',
    ),
    12 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Matches.php',
      'to_module' => 'THHL_Matches',
      'language' => 'ja_JP',
    ),
    13 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Matches.php',
      'to_module' => 'THHL_Matches',
      'language' => 'nb_NO',
    ),
    14 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Matches.php',
      'to_module' => 'THHL_Matches',
      'language' => 'nl_NL',
    ),
    15 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Matches.php',
      'to_module' => 'THHL_Matches',
      'language' => 'pl_PL',
    ),
    16 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Matches.php',
      'to_module' => 'THHL_Matches',
      'language' => 'pt_PT',
    ),
    17 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Matches.php',
      'to_module' => 'THHL_Matches',
      'language' => 'ro_RO',
    ),
    18 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Matches.php',
      'to_module' => 'THHL_Matches',
      'language' => 'ru_RU',
    ),
    19 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Matches.php',
      'to_module' => 'THHL_Matches',
      'language' => 'sv_SE',
    ),
    20 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Matches.php',
      'to_module' => 'THHL_Matches',
      'language' => 'tr_TR',
    ),
    21 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Matches.php',
      'to_module' => 'THHL_Matches',
      'language' => 'zh_CN',
    ),
    22 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Matches.php',
      'to_module' => 'THHL_Matches',
      'language' => 'pt_br',
    ),
    23 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Matches.php',
      'to_module' => 'THHL_Matches',
      'language' => 'ca_ES',
    ),
    24 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Matches.php',
      'to_module' => 'THHL_Matches',
      'language' => 'en_UK',
    ),
    25 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Matches.php',
      'to_module' => 'THHL_Matches',
      'language' => 'sr_RS',
    ),
    26 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Games.php',
      'to_module' => 'THHL_Games',
      'language' => 'en_us',
    ),
    27 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Games.php',
      'to_module' => 'THHL_Games',
      'language' => 'bg_BG',
    ),
    28 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Games.php',
      'to_module' => 'THHL_Games',
      'language' => 'cs_CZ',
    ),
    29 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Games.php',
      'to_module' => 'THHL_Games',
      'language' => 'da_DK',
    ),
    30 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Games.php',
      'to_module' => 'THHL_Games',
      'language' => 'de_DE',
    ),
    31 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Games.php',
      'to_module' => 'THHL_Games',
      'language' => 'es_ES',
    ),
    32 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Games.php',
      'to_module' => 'THHL_Games',
      'language' => 'et_EE',
    ),
    33 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Games.php',
      'to_module' => 'THHL_Games',
      'language' => 'fr_FR',
    ),
    34 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Games.php',
      'to_module' => 'THHL_Games',
      'language' => 'he_IL',
    ),
    35 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Games.php',
      'to_module' => 'THHL_Games',
      'language' => 'hu_HU',
    ),
    36 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Games.php',
      'to_module' => 'THHL_Games',
      'language' => 'it_it',
    ),
    37 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Games.php',
      'to_module' => 'THHL_Games',
      'language' => 'lt_LT',
    ),
    38 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Games.php',
      'to_module' => 'THHL_Games',
      'language' => 'ja_JP',
    ),
    39 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Games.php',
      'to_module' => 'THHL_Games',
      'language' => 'nb_NO',
    ),
    40 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Games.php',
      'to_module' => 'THHL_Games',
      'language' => 'nl_NL',
    ),
    41 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Games.php',
      'to_module' => 'THHL_Games',
      'language' => 'pl_PL',
    ),
    42 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Games.php',
      'to_module' => 'THHL_Games',
      'language' => 'pt_PT',
    ),
    43 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Games.php',
      'to_module' => 'THHL_Games',
      'language' => 'ro_RO',
    ),
    44 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Games.php',
      'to_module' => 'THHL_Games',
      'language' => 'ru_RU',
    ),
    45 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Games.php',
      'to_module' => 'THHL_Games',
      'language' => 'sv_SE',
    ),
    46 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Games.php',
      'to_module' => 'THHL_Games',
      'language' => 'tr_TR',
    ),
    47 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Games.php',
      'to_module' => 'THHL_Games',
      'language' => 'zh_CN',
    ),
    48 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Games.php',
      'to_module' => 'THHL_Games',
      'language' => 'pt_br',
    ),
    49 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Games.php',
      'to_module' => 'THHL_Games',
      'language' => 'ca_ES',
    ),
    50 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Games.php',
      'to_module' => 'THHL_Games',
      'language' => 'en_UK',
    ),
    51 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Games.php',
      'to_module' => 'THHL_Games',
      'language' => 'sr_RS',
    ),
    52 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Contacts.php',
      'to_module' => 'Contacts',
      'language' => 'en_us',
    ),
    53 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Contacts.php',
      'to_module' => 'Contacts',
      'language' => 'bg_BG',
    ),
    54 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Contacts.php',
      'to_module' => 'Contacts',
      'language' => 'cs_CZ',
    ),
    55 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Contacts.php',
      'to_module' => 'Contacts',
      'language' => 'da_DK',
    ),
    56 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Contacts.php',
      'to_module' => 'Contacts',
      'language' => 'de_DE',
    ),
    57 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Contacts.php',
      'to_module' => 'Contacts',
      'language' => 'es_ES',
    ),
    58 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Contacts.php',
      'to_module' => 'Contacts',
      'language' => 'et_EE',
    ),
    59 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Contacts.php',
      'to_module' => 'Contacts',
      'language' => 'fr_FR',
    ),
    60 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Contacts.php',
      'to_module' => 'Contacts',
      'language' => 'he_IL',
    ),
    61 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Contacts.php',
      'to_module' => 'Contacts',
      'language' => 'hu_HU',
    ),
    62 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Contacts.php',
      'to_module' => 'Contacts',
      'language' => 'it_it',
    ),
    63 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Contacts.php',
      'to_module' => 'Contacts',
      'language' => 'lt_LT',
    ),
    64 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Contacts.php',
      'to_module' => 'Contacts',
      'language' => 'ja_JP',
    ),
    65 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Contacts.php',
      'to_module' => 'Contacts',
      'language' => 'nb_NO',
    ),
    66 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Contacts.php',
      'to_module' => 'Contacts',
      'language' => 'nl_NL',
    ),
    67 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Contacts.php',
      'to_module' => 'Contacts',
      'language' => 'pl_PL',
    ),
    68 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Contacts.php',
      'to_module' => 'Contacts',
      'language' => 'pt_PT',
    ),
    69 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Contacts.php',
      'to_module' => 'Contacts',
      'language' => 'ro_RO',
    ),
    70 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Contacts.php',
      'to_module' => 'Contacts',
      'language' => 'ru_RU',
    ),
    71 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Contacts.php',
      'to_module' => 'Contacts',
      'language' => 'sv_SE',
    ),
    72 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Contacts.php',
      'to_module' => 'Contacts',
      'language' => 'tr_TR',
    ),
    73 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Contacts.php',
      'to_module' => 'Contacts',
      'language' => 'zh_CN',
    ),
    74 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Contacts.php',
      'to_module' => 'Contacts',
      'language' => 'pt_br',
    ),
    75 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Contacts.php',
      'to_module' => 'Contacts',
      'language' => 'ca_ES',
    ),
    76 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Contacts.php',
      'to_module' => 'Contacts',
      'language' => 'en_UK',
    ),
    77 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Contacts.php',
      'to_module' => 'Contacts',
      'language' => 'sr_RS',
    ),
    78 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Parties.php',
      'to_module' => 'THHL_Parties',
      'language' => 'en_us',
    ),
    79 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Parties.php',
      'to_module' => 'THHL_Parties',
      'language' => 'bg_BG',
    ),
    80 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Parties.php',
      'to_module' => 'THHL_Parties',
      'language' => 'cs_CZ',
    ),
    81 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Parties.php',
      'to_module' => 'THHL_Parties',
      'language' => 'da_DK',
    ),
    82 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Parties.php',
      'to_module' => 'THHL_Parties',
      'language' => 'de_DE',
    ),
    83 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Parties.php',
      'to_module' => 'THHL_Parties',
      'language' => 'es_ES',
    ),
    84 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Parties.php',
      'to_module' => 'THHL_Parties',
      'language' => 'et_EE',
    ),
    85 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Parties.php',
      'to_module' => 'THHL_Parties',
      'language' => 'fr_FR',
    ),
    86 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Parties.php',
      'to_module' => 'THHL_Parties',
      'language' => 'he_IL',
    ),
    87 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Parties.php',
      'to_module' => 'THHL_Parties',
      'language' => 'hu_HU',
    ),
    88 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Parties.php',
      'to_module' => 'THHL_Parties',
      'language' => 'it_it',
    ),
    89 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Parties.php',
      'to_module' => 'THHL_Parties',
      'language' => 'lt_LT',
    ),
    90 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Parties.php',
      'to_module' => 'THHL_Parties',
      'language' => 'ja_JP',
    ),
    91 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Parties.php',
      'to_module' => 'THHL_Parties',
      'language' => 'nb_NO',
    ),
    92 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Parties.php',
      'to_module' => 'THHL_Parties',
      'language' => 'nl_NL',
    ),
    93 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Parties.php',
      'to_module' => 'THHL_Parties',
      'language' => 'pl_PL',
    ),
    94 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Parties.php',
      'to_module' => 'THHL_Parties',
      'language' => 'pt_PT',
    ),
    95 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Parties.php',
      'to_module' => 'THHL_Parties',
      'language' => 'ro_RO',
    ),
    96 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Parties.php',
      'to_module' => 'THHL_Parties',
      'language' => 'ru_RU',
    ),
    97 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Parties.php',
      'to_module' => 'THHL_Parties',
      'language' => 'sv_SE',
    ),
    98 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Parties.php',
      'to_module' => 'THHL_Parties',
      'language' => 'tr_TR',
    ),
    99 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Parties.php',
      'to_module' => 'THHL_Parties',
      'language' => 'zh_CN',
    ),
    100 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Parties.php',
      'to_module' => 'THHL_Parties',
      'language' => 'pt_br',
    ),
    101 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Parties.php',
      'to_module' => 'THHL_Parties',
      'language' => 'ca_ES',
    ),
    102 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Parties.php',
      'to_module' => 'THHL_Parties',
      'language' => 'en_UK',
    ),
    103 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Parties.php',
      'to_module' => 'THHL_Parties',
      'language' => 'sr_RS',
    ),
    104 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Games.php',
      'to_module' => 'THHL_Games',
      'language' => 'en_us',
    ),
    105 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Games.php',
      'to_module' => 'THHL_Games',
      'language' => 'bg_BG',
    ),
    106 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Games.php',
      'to_module' => 'THHL_Games',
      'language' => 'cs_CZ',
    ),
    107 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Games.php',
      'to_module' => 'THHL_Games',
      'language' => 'da_DK',
    ),
    108 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Games.php',
      'to_module' => 'THHL_Games',
      'language' => 'de_DE',
    ),
    109 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Games.php',
      'to_module' => 'THHL_Games',
      'language' => 'es_ES',
    ),
    110 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Games.php',
      'to_module' => 'THHL_Games',
      'language' => 'et_EE',
    ),
    111 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Games.php',
      'to_module' => 'THHL_Games',
      'language' => 'fr_FR',
    ),
    112 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Games.php',
      'to_module' => 'THHL_Games',
      'language' => 'he_IL',
    ),
    113 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Games.php',
      'to_module' => 'THHL_Games',
      'language' => 'hu_HU',
    ),
    114 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Games.php',
      'to_module' => 'THHL_Games',
      'language' => 'it_it',
    ),
    115 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Games.php',
      'to_module' => 'THHL_Games',
      'language' => 'lt_LT',
    ),
    116 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Games.php',
      'to_module' => 'THHL_Games',
      'language' => 'ja_JP',
    ),
    117 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Games.php',
      'to_module' => 'THHL_Games',
      'language' => 'nb_NO',
    ),
    118 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Games.php',
      'to_module' => 'THHL_Games',
      'language' => 'nl_NL',
    ),
    119 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Games.php',
      'to_module' => 'THHL_Games',
      'language' => 'pl_PL',
    ),
    120 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Games.php',
      'to_module' => 'THHL_Games',
      'language' => 'pt_PT',
    ),
    121 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Games.php',
      'to_module' => 'THHL_Games',
      'language' => 'ro_RO',
    ),
    122 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Games.php',
      'to_module' => 'THHL_Games',
      'language' => 'ru_RU',
    ),
    123 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Games.php',
      'to_module' => 'THHL_Games',
      'language' => 'sv_SE',
    ),
    124 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Games.php',
      'to_module' => 'THHL_Games',
      'language' => 'tr_TR',
    ),
    125 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Games.php',
      'to_module' => 'THHL_Games',
      'language' => 'zh_CN',
    ),
    126 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Games.php',
      'to_module' => 'THHL_Games',
      'language' => 'pt_br',
    ),
    127 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Games.php',
      'to_module' => 'THHL_Games',
      'language' => 'ca_ES',
    ),
    128 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Games.php',
      'to_module' => 'THHL_Games',
      'language' => 'en_UK',
    ),
    129 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Games.php',
      'to_module' => 'THHL_Games',
      'language' => 'sr_RS',
    ),
    130 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Parties.php',
      'to_module' => 'THHL_Parties',
      'language' => 'en_us',
    ),
    131 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Parties.php',
      'to_module' => 'THHL_Parties',
      'language' => 'bg_BG',
    ),
    132 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Parties.php',
      'to_module' => 'THHL_Parties',
      'language' => 'cs_CZ',
    ),
    133 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Parties.php',
      'to_module' => 'THHL_Parties',
      'language' => 'da_DK',
    ),
    134 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Parties.php',
      'to_module' => 'THHL_Parties',
      'language' => 'de_DE',
    ),
    135 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Parties.php',
      'to_module' => 'THHL_Parties',
      'language' => 'es_ES',
    ),
    136 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Parties.php',
      'to_module' => 'THHL_Parties',
      'language' => 'et_EE',
    ),
    137 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Parties.php',
      'to_module' => 'THHL_Parties',
      'language' => 'fr_FR',
    ),
    138 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Parties.php',
      'to_module' => 'THHL_Parties',
      'language' => 'he_IL',
    ),
    139 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Parties.php',
      'to_module' => 'THHL_Parties',
      'language' => 'hu_HU',
    ),
    140 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Parties.php',
      'to_module' => 'THHL_Parties',
      'language' => 'it_it',
    ),
    141 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Parties.php',
      'to_module' => 'THHL_Parties',
      'language' => 'lt_LT',
    ),
    142 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Parties.php',
      'to_module' => 'THHL_Parties',
      'language' => 'ja_JP',
    ),
    143 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Parties.php',
      'to_module' => 'THHL_Parties',
      'language' => 'nb_NO',
    ),
    144 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Parties.php',
      'to_module' => 'THHL_Parties',
      'language' => 'nl_NL',
    ),
    145 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Parties.php',
      'to_module' => 'THHL_Parties',
      'language' => 'pl_PL',
    ),
    146 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Parties.php',
      'to_module' => 'THHL_Parties',
      'language' => 'pt_PT',
    ),
    147 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Parties.php',
      'to_module' => 'THHL_Parties',
      'language' => 'ro_RO',
    ),
    148 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Parties.php',
      'to_module' => 'THHL_Parties',
      'language' => 'ru_RU',
    ),
    149 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Parties.php',
      'to_module' => 'THHL_Parties',
      'language' => 'sv_SE',
    ),
    150 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Parties.php',
      'to_module' => 'THHL_Parties',
      'language' => 'tr_TR',
    ),
    151 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Parties.php',
      'to_module' => 'THHL_Parties',
      'language' => 'zh_CN',
    ),
    152 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Parties.php',
      'to_module' => 'THHL_Parties',
      'language' => 'pt_br',
    ),
    153 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Parties.php',
      'to_module' => 'THHL_Parties',
      'language' => 'ca_ES',
    ),
    154 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Parties.php',
      'to_module' => 'THHL_Parties',
      'language' => 'en_UK',
    ),
    155 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/THHL_Parties.php',
      'to_module' => 'THHL_Parties',
      'language' => 'sr_RS',
    ),
    156 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/en_us.lang.php',
      'to_module' => 'application',
      'language' => 'en_us',
    ),
  ),
  'vardefs' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/thhl_games_thhl_matches_THHL_Matches.php',
      'to_module' => 'THHL_Matches',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/thhl_games_thhl_matches_THHL_Games.php',
      'to_module' => 'THHL_Games',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/thhl_parties_contacts_Contacts.php',
      'to_module' => 'Contacts',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/thhl_parties_contacts_THHL_Parties.php',
      'to_module' => 'THHL_Parties',
    ),
    4 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/thhl_parties_thhl_games_THHL_Games.php',
      'to_module' => 'THHL_Games',
    ),
    5 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/thhl_parties_thhl_games_THHL_Parties.php',
      'to_module' => 'THHL_Parties',
    ),
  ),
  'layoutfields' => 
  array (
    0 => 
    array (
      'additional_fields' => 
      array (
      ),
    ),
    1 => 
    array (
      'additional_fields' => 
      array (
      ),
    ),
  ),
  'wireless_subpanels' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/wirelesslayoutdefs/thhl_games_thhl_matches_THHL_Games.php',
      'to_module' => 'THHL_Games',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/wirelesslayoutdefs/thhl_parties_contacts_Contacts.php',
      'to_module' => 'Contacts',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/wirelesslayoutdefs/thhl_parties_contacts_THHL_Parties.php',
      'to_module' => 'THHL_Parties',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/wirelesslayoutdefs/thhl_parties_thhl_games_THHL_Parties.php',
      'to_module' => 'THHL_Parties',
    ),
  ),
);