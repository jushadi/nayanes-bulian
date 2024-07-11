<?php
/**
 *
 * Copyright (C) 2012  Arie Nugraha (dicarve@yahoo.com)
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301  USA
 *
 */

// be sure that this file not accessed directly
if (!defined('INDEX_AUTH')) {
    die("can not access this file directly");
} else if (INDEX_AUTH != 1) {
    die("can not access this file directly");
}

// be sure that magic quote is off
@ini_set('magic_quotes_gpc', false);
@ini_set('magic_quotes_runtime', false);
@ini_set('magic_quotes_sybase', false);
// force disabling magic quotes

/** disable deprecated function
if (get_magic_quotes_gpc()) {
  function stripslashes_deep($value)
  {
    $value = is_array($value)?array_map('stripslashes_deep', $value):stripslashes($value);
    return $value;
  }

  $_POST = array_map('stripslashes_deep', $_POST);
  $_GET = array_map('stripslashes_deep', $_GET);
  $_COOKIE = array_map('stripslashes_deep', $_COOKIE);
  $_REQUEST = array_map('stripslashes_deep', $_REQUEST);
}
*/

// turn off all error messages for security reason
@ini_set('display_errors',true);

// set default timezone
// for a list of timezone, please see PHP Manual at "List of Supported Timezones" section
@date_default_timezone_set('Asia/Makassar');

// nayanes version
define('NAYANES_VERSION', 'Nayanes 5');

// directiry separator shortened
define('DSEP', DIRECTORY_SEPARATOR);

// nayanes base dir
define('NAYANES_BASE_DIR', realpath(dirname(__FILE__)).DIRECTORY_SEPARATOR);

// nayanes library base dir
define('LIB_DIR', NAYANES_BASE_DIR.'lib'.DIRECTORY_SEPARATOR);

// Apply language settings
require LIB_DIR.'lang/localisation.php';

// SEARCH NODE
// Array index/Node Index number MUST BE IN SEQUENTIAL ORDER start from 1
$sysconf['node'][1] = array('url' => 'https://eperpus-bdksurabaya.kemenag.go.id/opac/', 'desc' => 'opac-bdksurabaya.kemenag.go.id');

$sysconf['node'][2] = array('url' => 'https://eperpus-bdksurabaya.kemenag.go.id/repositori', 'desc' => 'repository-bdksurabaya.kemenag.go.id');

$sysconf['node'][3] = array('url' => 'https://perpustakaan.masjidrayahasyimasyari.org', 'desc' => "Masjid Raya Kh. Hasyim Asy&#39;ari Jakarta");
$sysconf['node'][4] = array('url' => 'https://www.salmanreadingcorner.web.id', 'desc' => 'Masjid Salman ITB');
$sysconf['node'][5] = array('url' => 'https://perpustakaan-jic.id/opac', 'desc' => 'Jakarta Islamic Centre');
$sysconf['node'][6] = array('url' => 'https://perpustakaan.masjidomanalmakmur.id', 'desc' => 'Masjid Oman Almakmur');
$sysconf['node'][7] = array('url' => 'http://istinfonet.katalog-induk.net', 'desc' => 'Pusat Perpustakaan Islam Indonesia');
$sysconf['node'][8] = array('url' => 'http://library.uinmataram.ac.id', 'desc' => 'UIN Mataram');
$sysconf['node'][9] = array('url' => 'https://opac.uinkhas.ac.id', 'desc' => 'UIN KHAS Jember');
$sysconf['node'][10] = array('url' => 'https://library.metrouniv.ac.id', 'desc' => 'IAIN Metro');
$sysconf['node'][11] = array('url' => 'https://perpus.iainptk.ac.id/slims', 'desc' => 'IAIN Pontianak');
$sysconf['node'][12] = array('url' => 'https://lib-pasca.unpak.ac.id', 'desc' => 'lib-pasca.unpak.ac.id');
$sysconf['node'][13] = array('url' => 'https://lib.unpad.ac.id', 'desc' => 'lib.unpad.ac.id');
$sysconf['node'][14] = array('url' => 'https://digilib.unsri.ac.id/opac', 'desc' => 'digilib.unsri.ac.id/opac');
$sysconf['node'][15] = array('url' => 'https://stim-lpi.ac.id/perpustakaan', 'desc' => 'stim-lpi.ac.id/perpustakaan');
$sysconf['node'][16] = array('url' => 'https://www.perpustakaankarmelindo.org', 'desc' => 'www.perpustakaankarmelindo.org');
$sysconf['node'][17] = array('url' => 'https://smpn39.semarangkota.go.id/e-perpus', 'desc' => 'smpn39.semarangkota.go.id/e-perpus');
$sysconf['node'][18] = array('url' => 'https://elibrary.lldikti10.id', 'desc' => 'elibrary.lldikti10.id');
$sysconf['node'][19] = array('url' => 'https://perpustakaan-jic.id/opac', 'desc' => 'perpustakaan-jic.id/opac');
$sysconf['node'][20] = array('url' => 'https://brascho.info/perpustakaan', 'desc' => 'brascho.info/perpustakaan');
$sysconf['node'][21] = array('url' => 'https://digilib.pwk.undip.ac.id', 'desc' => 'digilib.pwk.undip.ac.id');
$sysconf['node'][22] = array('url' => 'https://library.walisongo.ac.id/slims', 'desc' => 'library.walisongo.ac.id/slims');
$sysconf['node'][23] = array('url' => 'https://perpustakaan.smpn7madiun.sch.id', 'desc' => 'perpustakaan.smpn7madiun.sch.id');
$sysconf['node'][24] = array('url' => 'http://elibrary.uvers.ac.id', 'desc' => 'elibrary.uvers.ac.id');
$sysconf['node'][25] = array('url' => 'http://fia.ub.ac.id/katalog', 'desc' => 'fia.ub.ac.id/katalog');
$sysconf['node'][26] = array('url' => 'https://portal.ubk.ac.id/perpustakaan', 'desc' => 'portal.ubk.ac.id/perpustakaan');
$sysconf['node'][27] = array('url' => 'http://www.bbpkciloto.or.id/opac', 'desc' => 'www.bbpkciloto.or.id/opac');
$sysconf['node'][28] = array('url' => 'https://www.mansel.id/elibrary', 'desc' => 'www.mansel.id/elibrary');
$sysconf['node'][29] = array('url' => 'https://opac.uinfasbengkulu.ac.id', 'desc' => 'opac.uinfasbengkulu.ac.id');
$sysconf['node'][30] = array('url' => 'https://library.unisma.ac.id/slims_unisma', 'desc' => 'library.unisma.ac.id/slims_unisma');
$sysconf['node'][31] = array('url' => 'https://sdmupat.sch.id/opac', 'desc' => 'sdmupat.sch.id/opac');
$sysconf['node'][32] = array('url' => 'https://www.robbanibanjarbaru.or.id/perpustakaansmpit', 'desc' => 'www.robbanibanjarbaru.or.id/perpustakaansmpit');
$sysconf['node'][33] = array('url' => 'https://all.fh.unair.ac.id', 'desc' => 'all.fh.unair.ac.id');
$sysconf['node'][34] = array('url' => 'http://elibrary.undipa.ac.id', 'desc' => 'elibrary.undipa.ac.id');
$sysconf['node'][35] = array('url' => 'http://e-library.poltera.ac.id', 'desc' => 'e-library.poltera.ac.id');
$sysconf['node'][36] = array('url' => 'https://www.bpkp.go.id/pustakabpkp', 'desc' => 'www.bpkp.go.id/pustakabpkp');
$sysconf['node'][37] = array('url' => 'https://sma1blora.sch.id/elibrary', 'desc' => 'sma1blora.sch.id/elibrary');
$sysconf['node'][38] = array('url' => 'https://perpustakaan.elsam.or.id', 'desc' => 'perpustakaan.elsam.or.id');
$sysconf['node'][39] = array('url' => 'http://digilib.univbinainsan.ac.id', 'desc' => 'digilib.univbinainsan.ac.id');
$sysconf['node'][40] = array('url' => 'https://smamuh4bara.sch.id/perpustakaan', 'desc' => 'smamuh4bara.sch.id/perpustakaan');
$sysconf['node'][41] = array('url' => 'http://pustaka.kampusmelayu.ac.id', 'desc' => 'pustaka.kampusmelayu.ac.id');
$sysconf['node'][42] = array('url' => 'https://perpustakaan.smkn1denpasar.sch.id', 'desc' => 'perpustakaan.smkn1denpasar.sch.id');
$sysconf['node'][43] = array('url' => 'https://library.unja.ac.id', 'desc' => 'library.unja.ac.id');
$sysconf['node'][44] = array('url' => 'https://slims.smpn41sby.sch.id', 'desc' => 'slims.smpn41sby.sch.id');
$sysconf['node'][45] = array('url' => 'http://perpus.smkn1binuang.sch.id', 'desc' => 'perpus.smkn1binuang.sch.id');
$sysconf['node'][46] = array('url' => 'http://sdnunggulanmagetan.sch.id/lib', 'desc' => 'sdnunggulanmagetan.sch.id/lib');
$sysconf['node'][47] = array('url' => 'https://test.stbalia.ac.id/uppm', 'desc' => 'test.stbalia.ac.id/uppm');
$sysconf['node'][48] = array('url' => 'https://e-perpustakaan.stt-tawangmangu.ac.id', 'desc' => 'e-perpustakaan.stt-tawangmangu.ac.id');
$sysconf['node'][49] = array('url' => 'https://digilib.sttintim.id', 'desc' => 'digilib.sttintim.id');
$sysconf['node'][50] = array('url' => 'http://senayan.iain-palangkaraya.ac.id', 'desc' => 'senayan.iain-palangkaraya.ac.id');
$sysconf['node'][51] = array('url' => 'http://libfisip.untagsmg.ac.id', 'desc' => 'libfisip.untagsmg.ac.id');
$sysconf['node'][52] = array('url' => 'https://www.uim.ac.id/digilib', 'desc' => 'www.uim.ac.id/digilib');
$sysconf['node'][53] = array('url' => 'https://perpustakaan.setneg.go.id', 'desc' => 'perpustakaan.setneg.go.id');
$sysconf['node'][54] = array('url' => 'https://library.uniba-bpn.ac.id', 'desc' => 'library.uniba-bpn.ac.id');
$sysconf['node'][55] = array('url' => 'https://perpustakaan.sttekumene.ac.id', 'desc' => 'perpustakaan.sttekumene.ac.id');
$sysconf['node'][56] = array('url' => 'https://lib.uty.ac.id', 'desc' => 'lib.uty.ac.id');
$sysconf['node'][57] = array('url' => 'http://perpustakaan-smpn3satapsbl.net', 'desc' => 'perpustakaan-smpn3satapsbl.net');
$sysconf['node'][58] = array('url' => 'https://opac.pip-semarang.ac.id', 'desc' => 'opac.pip-semarang.ac.id');
$sysconf['node'][59] = array('url' => 'https://lib.unika.ac.id', 'desc' => 'lib.unika.ac.id');
$sysconf['node'][60] = array('url' => 'https://perpustakaan.istiqlal.or.id', 'desc' => 'Masjid Istiqlal');

/*
$sysconf['node'][12] = array('url' => 'http://uptperpustakaan.unismabekasi.ac.id/katalog-buku/', 'desc' => 'Koleksi Buku Lokasi Di Perpustakaan Pusat');
$sysconf['node'][13] = array('url' => 'http://perpustakaan.fai.unismabekasi.ac.id/katalog-buku/', 'desc' => 'Koleksi Buku Lokasi Di Perpustakaan FAI');
$sysconf['node'][14] = array('url' => 'http://perpustakaan.fkip.unismabekasi.ac.id/katalog-buku/', 'desc' => 'Koleksi Buku Lokasi Di Perpustakaan FKIP');
$sysconf['node'][15] = array('url' => 'http://perpustakaan.fe.unismabekasi.ac.id/katalog-buku/', 'desc' => 'Koleksi Buku Lokasi Di Perpustakaan FE');
$sysconf['node'][16] = array('url' => 'http://perpustakaan.faperta.unismabekasi.ac.id/katalog-buku/', 'desc' => 'Koleksi Buku Lokasi Di Perpustakaan FAPERTA');
$sysconf['node'][17] = array('url' => 'http://perpustakaan.fisip.unismabekasi.ac.id/katalog-buku/', 'desc' => 'Koleksi Buku Lokasi Di Perpustakaan FISIP');
$sysconf['node'][18] = array('url' => 'http://perpustakaan.fksb.unismabekasi.ac.id/katalog-buku/', 'desc' => 'Koleksi Buku Lokasi Di Perpustakaan FKSB');
$sysconf['node'][19] = array('url' => 'http://perpustakaan.ft.unismabekasi.ac.id/katalog-buku/', 'desc' => 'Koleksi Buku Lokasi Di Perpustakaan Teknik');
$sysconf['node'][20] = array('url' => 'http://perpustakaan.pascasarjana.unismabekasi.ac.id/katalog-buku/', 'desc' => 'Koleksi Buku Lokasi Di Perpustakaan PASCASARJANA');
$sysconf['node'][21] = array('url' => 'http://catalogue.ubharajaya.ac.id/slims/', 'desc' => 'Koleksi Buku Di Perpustakaan Universitas Bhayangkara Jakarta raya');
$sysconf['node'][22] = array('url' => 'http://jialib.stba-jia.ac.id/', 'desc' => 'Koleksi Buku Di Perpustakaan STBA JIA Bekasi');
*/
$sysconf['request_timeout'] = 5000; // in miliseconds

// theme to use
$sysconf['theme'] = 'bulian';
