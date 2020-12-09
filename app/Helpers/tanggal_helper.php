<?php


function tanggal($waktu)
{
    $waktu = date($waktu);
    $hari_array = array(
        'Minggu',
        'Senin',
        'Selasa',
        'Rabu',
        'Kamis',
        'Jumat',
        'Sabtu'
    );
    $hr = date('w', strtotime($waktu));
    $hari = $hari_array[$hr];
    $tanggal = date('j', strtotime($waktu));
    $bulan_array = array(
        1 => 'Januari',
        2 => 'Februari',
        3 => 'Maret',
        4 => 'April',
        5 => 'Mei',
        6 => 'Juni',
        7 => 'Juli',
        8 => 'Agustus',
        9 => 'September',
        10 => 'Oktober',
        11 => 'November',
        12 => 'Desember',
    );
    $bl = date('n', strtotime($waktu));
    $bulan = $bulan_array[$bl];
    $tahun = date('Y', strtotime($waktu));

    $zone = date_default_timezone_set('Asia/Jakarta');
    $zone = date('H:i:s', time() + (60 * 60) * 2);

    $jam = date($zone, strtotime($waktu));

    $tampil = $hari;
    $tampil .= " ";
    $tampil .= $tanggal;
    $tampil .= " ";
    $tampil .= $bulan;
    $tampil .= " ";
    $tampil .= $tahun;

    //untuk menampilkan hari, tanggal bulan tahun jam
    //return "$hari, $tanggal $bulan $tahun $jam";

    //untuk menampilkan hari, tanggal bulan tahun
    return $tampil;
}

// echo tanggal('2020-11-01');
