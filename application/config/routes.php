<?php
defined('BASEPATH') or exit('No direct script access allowed');


$route['default_controller'] = 'inventarisasi';

$route['inventarisasi'] = 'inventarisasi/inventory';
$route['data-inventaris'] = 'inventarisasi/data_inventory';
$route['tambah-inventaris'] = 'inventarisasi/add_inventory';
$route['hapus-inventaris'] = 'inventarisasi/delete_inventory';
$route['ubah-inventaris'] = 'inventarisasi/update_inventory';

$route['lainnya'] = 'inventarisasi/another';
$route['data-lembaga'] = 'inventarisasi/data_unit';
$route['tambah-lembaga'] = 'inventarisasi/add_unit';
$route['hapus-lembaga'] = 'inventarisasi/delete_unit';

$route['data-lokasi'] = 'inventarisasi/data_location';
$route['tambah-lokasi'] = 'inventarisasi/add_location';
$route['hapus-lokasi'] = 'inventarisasi/delete_location';

$route['proses'] = 'inventarisasi/process';


$route['404_override'] = '';
$route['translate_uri_dashes'] = TRUE;
