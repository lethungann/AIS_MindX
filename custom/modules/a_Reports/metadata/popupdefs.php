<?php
$popupMeta = array (
    'moduleMain' => 'a_Reports',
    'varName' => 'a_Reports',
    'orderBy' => 'a_reports.name',
    'whereClauses' => array (
  'name' => 'a_reports.name',
  'type' => 'a_reports.type',
  'date_start' => 'a_reports.date_start',
  'date_end' => 'a_reports.date_end',
  'status' => 'a_reports.status',
),
    'searchInputs' => array (
  1 => 'name',
  3 => 'status',
  4 => 'type',
  5 => 'date_start',
  6 => 'date_end',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'type' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_TYPE',
    'width' => '10%',
    'name' => 'type',
  ),
  'date_start' => 
  array (
    'type' => 'date',
    'label' => 'Date Start',
    'width' => '10%',
    'name' => 'date_start',
  ),
  'date_end' => 
  array (
    'type' => 'date',
    'label' => 'Date End',
    'width' => '10%',
    'name' => 'date_end',
  ),
  'status' => 
  array (
    'type' => 'enum',
    'label' => 'Status',
    'width' => '10%',
    'name' => 'status',
  ),
),
);
