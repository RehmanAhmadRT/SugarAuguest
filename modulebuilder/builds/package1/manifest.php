<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */

// THIS CONTENT IS GENERATED BY MBPackage.php
$manifest = array (
  'built_in_version' => '7.7.1.2',
  'acceptable_sugar_versions' => 
  array (
    0 => '',
  ),
  'acceptable_sugar_flavors' => 
  array (
    0 => 'PRO',
    1 => 'CORP',
    2 => 'ENT',
    3 => 'ULT',
  ),
  'readme' => '',
  'key' => 'rt1',
  'author' => '',
  'description' => '',
  'icon' => '',
  'is_uninstallable' => true,
  'name' => 'package1',
  'published_date' => '2017-07-25 13:37:37',
  'type' => 'module',
  'version' => 1500989857,
  'remove_tables' => 'prompt',
);


$installdefs = array (
  'id' => 'package1',
  'beans' => 
  array (
    0 => 
    array (
      'module' => 'rt1_Student_Module',
      'class' => 'rt1_Student_Module',
      'path' => 'modules/rt1_Student_Module/rt1_Student_Module.php',
      'tab' => true,
    ),
    1 => 
    array (
      'module' => 'rt1_Teacher_Module',
      'class' => 'rt1_Teacher_Module',
      'path' => 'modules/rt1_Teacher_Module/rt1_Teacher_Module.php',
      'tab' => true,
    ),
  ),
  'layoutdefs' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/rt1_student_module_rt1_teacher_module_rt1_Teacher_Module.php',
      'to_module' => 'rt1_Teacher_Module',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/rt1_student_module_rt1_teacher_module_rt1_Student_Module.php',
      'to_module' => 'rt1_Student_Module',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/rt1_teacher_module_rt1_student_module_rt1_Student_Module.php',
      'to_module' => 'rt1_Student_Module',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/rt1_teacher_module_rt1_student_module_rt1_Teacher_Module.php',
      'to_module' => 'rt1_Teacher_Module',
    ),
  ),
  'relationships' => 
  array (
    0 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/rt1_student_module_rt1_teacher_moduleMetaData.php',
    ),
    1 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/rt1_teacher_module_rt1_student_moduleMetaData.php',
    ),
  ),
  'image_dir' => '<basepath>/icons',
  'copy' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/modules/rt1_Student_Module',
      'to' => 'modules/rt1_Student_Module',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/modules/rt1_Teacher_Module',
      'to' => 'modules/rt1_Teacher_Module',
    ),
  ),
  'language' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Teacher_Module.php',
      'to_module' => 'rt1_Teacher_Module',
      'language' => 'en_us',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Teacher_Module.php',
      'to_module' => 'rt1_Teacher_Module',
      'language' => 'bg_BG',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Teacher_Module.php',
      'to_module' => 'rt1_Teacher_Module',
      'language' => 'cs_CZ',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Teacher_Module.php',
      'to_module' => 'rt1_Teacher_Module',
      'language' => 'da_DK',
    ),
    4 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Teacher_Module.php',
      'to_module' => 'rt1_Teacher_Module',
      'language' => 'de_DE',
    ),
    5 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Teacher_Module.php',
      'to_module' => 'rt1_Teacher_Module',
      'language' => 'el_EL',
    ),
    6 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Teacher_Module.php',
      'to_module' => 'rt1_Teacher_Module',
      'language' => 'es_ES',
    ),
    7 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Teacher_Module.php',
      'to_module' => 'rt1_Teacher_Module',
      'language' => 'fr_FR',
    ),
    8 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Teacher_Module.php',
      'to_module' => 'rt1_Teacher_Module',
      'language' => 'he_IL',
    ),
    9 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Teacher_Module.php',
      'to_module' => 'rt1_Teacher_Module',
      'language' => 'hu_HU',
    ),
    10 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Teacher_Module.php',
      'to_module' => 'rt1_Teacher_Module',
      'language' => 'it_it',
    ),
    11 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Teacher_Module.php',
      'to_module' => 'rt1_Teacher_Module',
      'language' => 'lt_LT',
    ),
    12 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Teacher_Module.php',
      'to_module' => 'rt1_Teacher_Module',
      'language' => 'ja_JP',
    ),
    13 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Teacher_Module.php',
      'to_module' => 'rt1_Teacher_Module',
      'language' => 'ko_KR',
    ),
    14 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Teacher_Module.php',
      'to_module' => 'rt1_Teacher_Module',
      'language' => 'lv_LV',
    ),
    15 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Teacher_Module.php',
      'to_module' => 'rt1_Teacher_Module',
      'language' => 'nb_NO',
    ),
    16 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Teacher_Module.php',
      'to_module' => 'rt1_Teacher_Module',
      'language' => 'nl_NL',
    ),
    17 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Teacher_Module.php',
      'to_module' => 'rt1_Teacher_Module',
      'language' => 'pl_PL',
    ),
    18 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Teacher_Module.php',
      'to_module' => 'rt1_Teacher_Module',
      'language' => 'pt_PT',
    ),
    19 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Teacher_Module.php',
      'to_module' => 'rt1_Teacher_Module',
      'language' => 'ro_RO',
    ),
    20 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Teacher_Module.php',
      'to_module' => 'rt1_Teacher_Module',
      'language' => 'ru_RU',
    ),
    21 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Teacher_Module.php',
      'to_module' => 'rt1_Teacher_Module',
      'language' => 'sv_SE',
    ),
    22 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Teacher_Module.php',
      'to_module' => 'rt1_Teacher_Module',
      'language' => 'tr_TR',
    ),
    23 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Teacher_Module.php',
      'to_module' => 'rt1_Teacher_Module',
      'language' => 'zh_TW',
    ),
    24 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Teacher_Module.php',
      'to_module' => 'rt1_Teacher_Module',
      'language' => 'zh_CN',
    ),
    25 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Teacher_Module.php',
      'to_module' => 'rt1_Teacher_Module',
      'language' => 'pt_BR',
    ),
    26 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Teacher_Module.php',
      'to_module' => 'rt1_Teacher_Module',
      'language' => 'ca_ES',
    ),
    27 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Teacher_Module.php',
      'to_module' => 'rt1_Teacher_Module',
      'language' => 'en_UK',
    ),
    28 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Teacher_Module.php',
      'to_module' => 'rt1_Teacher_Module',
      'language' => 'sr_RS',
    ),
    29 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Teacher_Module.php',
      'to_module' => 'rt1_Teacher_Module',
      'language' => 'sk_SK',
    ),
    30 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Teacher_Module.php',
      'to_module' => 'rt1_Teacher_Module',
      'language' => 'sq_AL',
    ),
    31 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Teacher_Module.php',
      'to_module' => 'rt1_Teacher_Module',
      'language' => 'et_EE',
    ),
    32 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Teacher_Module.php',
      'to_module' => 'rt1_Teacher_Module',
      'language' => 'es_LA',
    ),
    33 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Teacher_Module.php',
      'to_module' => 'rt1_Teacher_Module',
      'language' => 'fi_FI',
    ),
    34 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Teacher_Module.php',
      'to_module' => 'rt1_Teacher_Module',
      'language' => 'ar_SA',
    ),
    35 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Teacher_Module.php',
      'to_module' => 'rt1_Teacher_Module',
      'language' => 'uk_UA',
    ),
    36 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Student_Module.php',
      'to_module' => 'rt1_Student_Module',
      'language' => 'en_us',
    ),
    37 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Student_Module.php',
      'to_module' => 'rt1_Student_Module',
      'language' => 'bg_BG',
    ),
    38 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Student_Module.php',
      'to_module' => 'rt1_Student_Module',
      'language' => 'cs_CZ',
    ),
    39 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Student_Module.php',
      'to_module' => 'rt1_Student_Module',
      'language' => 'da_DK',
    ),
    40 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Student_Module.php',
      'to_module' => 'rt1_Student_Module',
      'language' => 'de_DE',
    ),
    41 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Student_Module.php',
      'to_module' => 'rt1_Student_Module',
      'language' => 'el_EL',
    ),
    42 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Student_Module.php',
      'to_module' => 'rt1_Student_Module',
      'language' => 'es_ES',
    ),
    43 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Student_Module.php',
      'to_module' => 'rt1_Student_Module',
      'language' => 'fr_FR',
    ),
    44 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Student_Module.php',
      'to_module' => 'rt1_Student_Module',
      'language' => 'he_IL',
    ),
    45 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Student_Module.php',
      'to_module' => 'rt1_Student_Module',
      'language' => 'hu_HU',
    ),
    46 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Student_Module.php',
      'to_module' => 'rt1_Student_Module',
      'language' => 'it_it',
    ),
    47 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Student_Module.php',
      'to_module' => 'rt1_Student_Module',
      'language' => 'lt_LT',
    ),
    48 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Student_Module.php',
      'to_module' => 'rt1_Student_Module',
      'language' => 'ja_JP',
    ),
    49 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Student_Module.php',
      'to_module' => 'rt1_Student_Module',
      'language' => 'ko_KR',
    ),
    50 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Student_Module.php',
      'to_module' => 'rt1_Student_Module',
      'language' => 'lv_LV',
    ),
    51 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Student_Module.php',
      'to_module' => 'rt1_Student_Module',
      'language' => 'nb_NO',
    ),
    52 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Student_Module.php',
      'to_module' => 'rt1_Student_Module',
      'language' => 'nl_NL',
    ),
    53 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Student_Module.php',
      'to_module' => 'rt1_Student_Module',
      'language' => 'pl_PL',
    ),
    54 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Student_Module.php',
      'to_module' => 'rt1_Student_Module',
      'language' => 'pt_PT',
    ),
    55 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Student_Module.php',
      'to_module' => 'rt1_Student_Module',
      'language' => 'ro_RO',
    ),
    56 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Student_Module.php',
      'to_module' => 'rt1_Student_Module',
      'language' => 'ru_RU',
    ),
    57 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Student_Module.php',
      'to_module' => 'rt1_Student_Module',
      'language' => 'sv_SE',
    ),
    58 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Student_Module.php',
      'to_module' => 'rt1_Student_Module',
      'language' => 'tr_TR',
    ),
    59 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Student_Module.php',
      'to_module' => 'rt1_Student_Module',
      'language' => 'zh_TW',
    ),
    60 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Student_Module.php',
      'to_module' => 'rt1_Student_Module',
      'language' => 'zh_CN',
    ),
    61 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Student_Module.php',
      'to_module' => 'rt1_Student_Module',
      'language' => 'pt_BR',
    ),
    62 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Student_Module.php',
      'to_module' => 'rt1_Student_Module',
      'language' => 'ca_ES',
    ),
    63 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Student_Module.php',
      'to_module' => 'rt1_Student_Module',
      'language' => 'en_UK',
    ),
    64 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Student_Module.php',
      'to_module' => 'rt1_Student_Module',
      'language' => 'sr_RS',
    ),
    65 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Student_Module.php',
      'to_module' => 'rt1_Student_Module',
      'language' => 'sk_SK',
    ),
    66 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Student_Module.php',
      'to_module' => 'rt1_Student_Module',
      'language' => 'sq_AL',
    ),
    67 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Student_Module.php',
      'to_module' => 'rt1_Student_Module',
      'language' => 'et_EE',
    ),
    68 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Student_Module.php',
      'to_module' => 'rt1_Student_Module',
      'language' => 'es_LA',
    ),
    69 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Student_Module.php',
      'to_module' => 'rt1_Student_Module',
      'language' => 'fi_FI',
    ),
    70 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Student_Module.php',
      'to_module' => 'rt1_Student_Module',
      'language' => 'ar_SA',
    ),
    71 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Student_Module.php',
      'to_module' => 'rt1_Student_Module',
      'language' => 'uk_UA',
    ),
    72 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Student_Module.php',
      'to_module' => 'rt1_Student_Module',
      'language' => 'en_us',
    ),
    73 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Student_Module.php',
      'to_module' => 'rt1_Student_Module',
      'language' => 'bg_BG',
    ),
    74 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Student_Module.php',
      'to_module' => 'rt1_Student_Module',
      'language' => 'cs_CZ',
    ),
    75 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Student_Module.php',
      'to_module' => 'rt1_Student_Module',
      'language' => 'da_DK',
    ),
    76 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Student_Module.php',
      'to_module' => 'rt1_Student_Module',
      'language' => 'de_DE',
    ),
    77 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Student_Module.php',
      'to_module' => 'rt1_Student_Module',
      'language' => 'el_EL',
    ),
    78 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Student_Module.php',
      'to_module' => 'rt1_Student_Module',
      'language' => 'es_ES',
    ),
    79 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Student_Module.php',
      'to_module' => 'rt1_Student_Module',
      'language' => 'fr_FR',
    ),
    80 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Student_Module.php',
      'to_module' => 'rt1_Student_Module',
      'language' => 'he_IL',
    ),
    81 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Student_Module.php',
      'to_module' => 'rt1_Student_Module',
      'language' => 'hu_HU',
    ),
    82 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Student_Module.php',
      'to_module' => 'rt1_Student_Module',
      'language' => 'it_it',
    ),
    83 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Student_Module.php',
      'to_module' => 'rt1_Student_Module',
      'language' => 'lt_LT',
    ),
    84 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Student_Module.php',
      'to_module' => 'rt1_Student_Module',
      'language' => 'ja_JP',
    ),
    85 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Student_Module.php',
      'to_module' => 'rt1_Student_Module',
      'language' => 'ko_KR',
    ),
    86 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Student_Module.php',
      'to_module' => 'rt1_Student_Module',
      'language' => 'lv_LV',
    ),
    87 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Student_Module.php',
      'to_module' => 'rt1_Student_Module',
      'language' => 'nb_NO',
    ),
    88 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Student_Module.php',
      'to_module' => 'rt1_Student_Module',
      'language' => 'nl_NL',
    ),
    89 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Student_Module.php',
      'to_module' => 'rt1_Student_Module',
      'language' => 'pl_PL',
    ),
    90 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Student_Module.php',
      'to_module' => 'rt1_Student_Module',
      'language' => 'pt_PT',
    ),
    91 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Student_Module.php',
      'to_module' => 'rt1_Student_Module',
      'language' => 'ro_RO',
    ),
    92 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Student_Module.php',
      'to_module' => 'rt1_Student_Module',
      'language' => 'ru_RU',
    ),
    93 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Student_Module.php',
      'to_module' => 'rt1_Student_Module',
      'language' => 'sv_SE',
    ),
    94 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Student_Module.php',
      'to_module' => 'rt1_Student_Module',
      'language' => 'tr_TR',
    ),
    95 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Student_Module.php',
      'to_module' => 'rt1_Student_Module',
      'language' => 'zh_TW',
    ),
    96 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Student_Module.php',
      'to_module' => 'rt1_Student_Module',
      'language' => 'zh_CN',
    ),
    97 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Student_Module.php',
      'to_module' => 'rt1_Student_Module',
      'language' => 'pt_BR',
    ),
    98 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Student_Module.php',
      'to_module' => 'rt1_Student_Module',
      'language' => 'ca_ES',
    ),
    99 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Student_Module.php',
      'to_module' => 'rt1_Student_Module',
      'language' => 'en_UK',
    ),
    100 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Student_Module.php',
      'to_module' => 'rt1_Student_Module',
      'language' => 'sr_RS',
    ),
    101 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Student_Module.php',
      'to_module' => 'rt1_Student_Module',
      'language' => 'sk_SK',
    ),
    102 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Student_Module.php',
      'to_module' => 'rt1_Student_Module',
      'language' => 'sq_AL',
    ),
    103 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Student_Module.php',
      'to_module' => 'rt1_Student_Module',
      'language' => 'et_EE',
    ),
    104 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Student_Module.php',
      'to_module' => 'rt1_Student_Module',
      'language' => 'es_LA',
    ),
    105 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Student_Module.php',
      'to_module' => 'rt1_Student_Module',
      'language' => 'fi_FI',
    ),
    106 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Student_Module.php',
      'to_module' => 'rt1_Student_Module',
      'language' => 'ar_SA',
    ),
    107 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Student_Module.php',
      'to_module' => 'rt1_Student_Module',
      'language' => 'uk_UA',
    ),
    108 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Teacher_Module.php',
      'to_module' => 'rt1_Teacher_Module',
      'language' => 'en_us',
    ),
    109 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Teacher_Module.php',
      'to_module' => 'rt1_Teacher_Module',
      'language' => 'bg_BG',
    ),
    110 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Teacher_Module.php',
      'to_module' => 'rt1_Teacher_Module',
      'language' => 'cs_CZ',
    ),
    111 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Teacher_Module.php',
      'to_module' => 'rt1_Teacher_Module',
      'language' => 'da_DK',
    ),
    112 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Teacher_Module.php',
      'to_module' => 'rt1_Teacher_Module',
      'language' => 'de_DE',
    ),
    113 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Teacher_Module.php',
      'to_module' => 'rt1_Teacher_Module',
      'language' => 'el_EL',
    ),
    114 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Teacher_Module.php',
      'to_module' => 'rt1_Teacher_Module',
      'language' => 'es_ES',
    ),
    115 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Teacher_Module.php',
      'to_module' => 'rt1_Teacher_Module',
      'language' => 'fr_FR',
    ),
    116 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Teacher_Module.php',
      'to_module' => 'rt1_Teacher_Module',
      'language' => 'he_IL',
    ),
    117 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Teacher_Module.php',
      'to_module' => 'rt1_Teacher_Module',
      'language' => 'hu_HU',
    ),
    118 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Teacher_Module.php',
      'to_module' => 'rt1_Teacher_Module',
      'language' => 'it_it',
    ),
    119 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Teacher_Module.php',
      'to_module' => 'rt1_Teacher_Module',
      'language' => 'lt_LT',
    ),
    120 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Teacher_Module.php',
      'to_module' => 'rt1_Teacher_Module',
      'language' => 'ja_JP',
    ),
    121 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Teacher_Module.php',
      'to_module' => 'rt1_Teacher_Module',
      'language' => 'ko_KR',
    ),
    122 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Teacher_Module.php',
      'to_module' => 'rt1_Teacher_Module',
      'language' => 'lv_LV',
    ),
    123 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Teacher_Module.php',
      'to_module' => 'rt1_Teacher_Module',
      'language' => 'nb_NO',
    ),
    124 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Teacher_Module.php',
      'to_module' => 'rt1_Teacher_Module',
      'language' => 'nl_NL',
    ),
    125 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Teacher_Module.php',
      'to_module' => 'rt1_Teacher_Module',
      'language' => 'pl_PL',
    ),
    126 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Teacher_Module.php',
      'to_module' => 'rt1_Teacher_Module',
      'language' => 'pt_PT',
    ),
    127 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Teacher_Module.php',
      'to_module' => 'rt1_Teacher_Module',
      'language' => 'ro_RO',
    ),
    128 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Teacher_Module.php',
      'to_module' => 'rt1_Teacher_Module',
      'language' => 'ru_RU',
    ),
    129 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Teacher_Module.php',
      'to_module' => 'rt1_Teacher_Module',
      'language' => 'sv_SE',
    ),
    130 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Teacher_Module.php',
      'to_module' => 'rt1_Teacher_Module',
      'language' => 'tr_TR',
    ),
    131 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Teacher_Module.php',
      'to_module' => 'rt1_Teacher_Module',
      'language' => 'zh_TW',
    ),
    132 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Teacher_Module.php',
      'to_module' => 'rt1_Teacher_Module',
      'language' => 'zh_CN',
    ),
    133 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Teacher_Module.php',
      'to_module' => 'rt1_Teacher_Module',
      'language' => 'pt_BR',
    ),
    134 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Teacher_Module.php',
      'to_module' => 'rt1_Teacher_Module',
      'language' => 'ca_ES',
    ),
    135 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Teacher_Module.php',
      'to_module' => 'rt1_Teacher_Module',
      'language' => 'en_UK',
    ),
    136 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Teacher_Module.php',
      'to_module' => 'rt1_Teacher_Module',
      'language' => 'sr_RS',
    ),
    137 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Teacher_Module.php',
      'to_module' => 'rt1_Teacher_Module',
      'language' => 'sk_SK',
    ),
    138 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Teacher_Module.php',
      'to_module' => 'rt1_Teacher_Module',
      'language' => 'sq_AL',
    ),
    139 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Teacher_Module.php',
      'to_module' => 'rt1_Teacher_Module',
      'language' => 'et_EE',
    ),
    140 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Teacher_Module.php',
      'to_module' => 'rt1_Teacher_Module',
      'language' => 'es_LA',
    ),
    141 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Teacher_Module.php',
      'to_module' => 'rt1_Teacher_Module',
      'language' => 'fi_FI',
    ),
    142 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Teacher_Module.php',
      'to_module' => 'rt1_Teacher_Module',
      'language' => 'ar_SA',
    ),
    143 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt1_Teacher_Module.php',
      'to_module' => 'rt1_Teacher_Module',
      'language' => 'uk_UA',
    ),
    144 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/en_us.lang.php',
      'to_module' => 'application',
      'language' => 'en_us',
    ),
  ),
  'sidecar' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/clients/base/layouts/subpanels/rt1_student_module_rt1_teacher_module_rt1_Teacher_Module.php',
      'to_module' => 'rt1_Teacher_Module',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/clients/base/layouts/subpanels/rt1_student_module_rt1_teacher_module_rt1_Student_Module.php',
      'to_module' => 'rt1_Student_Module',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/clients/mobile/layouts/subpanels/rt1_student_module_rt1_teacher_module_rt1_Teacher_Module.php',
      'to_module' => 'rt1_Teacher_Module',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/clients/mobile/layouts/subpanels/rt1_student_module_rt1_teacher_module_rt1_Student_Module.php',
      'to_module' => 'rt1_Student_Module',
    ),
    4 => 
    array (
      'from' => '<basepath>/SugarModules/clients/base/layouts/subpanels/rt1_teacher_module_rt1_student_module_rt1_Student_Module.php',
      'to_module' => 'rt1_Student_Module',
    ),
    5 => 
    array (
      'from' => '<basepath>/SugarModules/clients/base/layouts/subpanels/rt1_teacher_module_rt1_student_module_rt1_Teacher_Module.php',
      'to_module' => 'rt1_Teacher_Module',
    ),
    6 => 
    array (
      'from' => '<basepath>/SugarModules/clients/mobile/layouts/subpanels/rt1_teacher_module_rt1_student_module_rt1_Student_Module.php',
      'to_module' => 'rt1_Student_Module',
    ),
    7 => 
    array (
      'from' => '<basepath>/SugarModules/clients/mobile/layouts/subpanels/rt1_teacher_module_rt1_student_module_rt1_Teacher_Module.php',
      'to_module' => 'rt1_Teacher_Module',
    ),
  ),
  'vardefs' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/rt1_student_module_rt1_teacher_module_rt1_Teacher_Module.php',
      'to_module' => 'rt1_Teacher_Module',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/rt1_student_module_rt1_teacher_module_rt1_Student_Module.php',
      'to_module' => 'rt1_Student_Module',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/rt1_teacher_module_rt1_student_module_rt1_Student_Module.php',
      'to_module' => 'rt1_Student_Module',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/rt1_teacher_module_rt1_student_module_rt1_Teacher_Module.php',
      'to_module' => 'rt1_Teacher_Module',
    ),
  ),
  'wireless_subpanels' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/wirelesslayoutdefs/rt1_student_module_rt1_teacher_module_rt1_Teacher_Module.php',
      'to_module' => 'rt1_Teacher_Module',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/wirelesslayoutdefs/rt1_student_module_rt1_teacher_module_rt1_Student_Module.php',
      'to_module' => 'rt1_Student_Module',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/wirelesslayoutdefs/rt1_teacher_module_rt1_student_module_rt1_Student_Module.php',
      'to_module' => 'rt1_Student_Module',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/wirelesslayoutdefs/rt1_teacher_module_rt1_student_module_rt1_Teacher_Module.php',
      'to_module' => 'rt1_Teacher_Module',
    ),
  ),
);