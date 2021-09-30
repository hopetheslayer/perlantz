<?php

namespace App\Imports;

use App\Models\KategoriUrun\Urun;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UrunsImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
       return new Urun([
          'id' => $row['id'],
          'slug' => $row['slug'],
          'urun_adi' => $row['urun_adi'],
          'urun_resmi'=> $row['urun_resmi'],
          'defination' => $row['defination'],
          'renk'    => $row['renk'],
          'sex'    => $row['sex'],
          'perlantz_sku'    => $row['perlantz_sku'],
          'metal_color'    => $row['metal_color'],
          'main_metal_k'    => $row['main_metal_k'],
          'sizelen' => $row['sizelen'],
          'eightk_weight'    => $row['eightk_weight'],
          'ninek_weight'    => $row['ninek_weight'],
          'forteenk_weight'    => $row['forteenk_weight'],
          'eighteenk_weight'   => $row['eighteenk_weight'],
          'ninefiveplt_weight' => $row['ninefiveplt_weight'],
          'twentyfivek_weight' => $row['twentyfivek_weight'],
          'width_thickness'    => $row['width_thickness'],
          'stone'    => $row['stone'],
          'chain'    => $row['chain'],
          'certificate'    => $row['certificate'],
          'color'    => $row['color'],
          'clarity'    => $row['clarity'],
          'shape'    => $row['shape'],
          'qty'    => $row['qty'],
          'mm'    => $row['mm'],
          'supplier_sku'    => $row['supplier_sku'],
          'supplier'    => $row['supplier'],
          'total_crt'    => $row['total_crt'],
          'stone_dia1'    => $row['stone_dia1'],
          'cert_dia1'    => $row['cert_dia1'],
          'color_dia1'    => $row['color_dia1'],
          'clarity_dia1'    => $row['clarity_dia1'],
          'shape_dia1'    => $row['shape_dia1'],
          'qty_dia1'    => $row['qty_dia1'],
          'mm_dia1'    => $row['mm_dia1'],
          'total_crt_dia1'    => $row['total_crt_dia1'],
          'stone_dia2'    => $row['stone_dia2'],
          'cert_dia2'    => $row['cert_dia2'],
          'color_dia2'    => $row['color_dia2'],
          'clarity_dia2'    => $row['clarity_dia2'],
          'shape_dia2'    => $row['shape_dia2'],
          'qty_dia2'    => $row['qty_dia2'],
          'mm_dia2'    => $row['mm_dia2'],
          'total_crt_dia2'    => $row['total_crt_dia2'],
          'fiyat_eur'    => $row['fiyat_eur'],
          'fiyat_eur_indirim'    => $row['fiyat_eur_indirim'],
          'fiyat_usd'    => $row['fiyat_usd'],
          'fiyat_gbp'    => $row['fiyat_gbp'],
          'fiyat_gbp_indirim'    => $row['fiyat_gbp_indirim'],
          'fiyat_indirim'    => $row['fiyat_indirim'],
          'fiyat'    => $row['fiyat'],
          'seo_description'    => $row['seo_description'],
          'seo_keywords'    => $row['seo_keywords'],
          'seo_title'    => $row['seo_title'],
       ]);
    }
}
