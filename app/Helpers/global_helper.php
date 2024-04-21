<?php

use App\Models\metadata;

function get_meta_value($meta_key)
{
    $data = metadata::where('meta_key', $meta_key)->first();
    if ($data) {
        return $data->meta_value;
    }
}

function set_about_nama($nama)
{
    $arr = explode(" ", $nama);
    $kataakhir = end($arr);
    $kataakhir2 = "<span class='text-primary'>$kataakhir</span>";
    array_pop($arr);
    $namaAwal = implode(" ", $arr);
    return $namaAwal . " " . $kataakhir2;
}

function set_list_workflow($sisi)
{
    $html = '';
    $items = explode(', ', $sisi);

    foreach ($items as $item) {
        $cleanedItem = strip_tags($item); // Remove HTML tags from the item
        $html .= '<div class="col mb-4 mb-md-0">';
        $html .= '<div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">';
        $html .= e($cleanedItem); // Use the 'e' function to escape the content for safety
        $html .= '</div></div>';
    }

    return $html;
}


