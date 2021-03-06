<?php
// created: 2017-07-27 15:27:51
$dictionary["rt2_M1"]["fields"]["rt2_m1_rt2_m2_1"] = array (
  'name' => 'rt2_m1_rt2_m2_1',
  'type' => 'link',
  'relationship' => 'rt2_m1_rt2_m2_1',
  'source' => 'non-db',
  'module' => 'rt2_M2',
  'bean_name' => 'rt2_M2',
  'vname' => 'LBL_RT2_M1_RT2_M2_1_FROM_RT2_M2_TITLE',
  'id_name' => 'rt2_m1_rt2_m2_1rt2_m2_idb',
);
$dictionary["rt2_M1"]["fields"]["rt2_m1_rt2_m2_1_name"] = array (
  'name' => 'rt2_m1_rt2_m2_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_RT2_M1_RT2_M2_1_FROM_RT2_M2_TITLE',
  'save' => true,
  'id_name' => 'rt2_m1_rt2_m2_1rt2_m2_idb',
  'link' => 'rt2_m1_rt2_m2_1',
  'table' => 'rt2_m2',
  'module' => 'rt2_M2',
  'rname' => 'name',
);
$dictionary["rt2_M1"]["fields"]["rt2_m1_rt2_m2_1rt2_m2_idb"] = array (
  'name' => 'rt2_m1_rt2_m2_1rt2_m2_idb',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_RT2_M1_RT2_M2_1_FROM_RT2_M2_TITLE_ID',
  'id_name' => 'rt2_m1_rt2_m2_1rt2_m2_idb',
  'link' => 'rt2_m1_rt2_m2_1',
  'table' => 'rt2_m2',
  'module' => 'rt2_M2',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
