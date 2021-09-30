<?php

namespace App\Exports;

use App\Models\KategoriUrun\Urun;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UrunsExport implements FromCollection,WithHeadings
{
    use Exportable;
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Urun::all();
    }
    public function headings(): array
    {
        return [
            'id',
            'slug',
            'urun_adi',
            'urun_resmi',
            'defination',
            'renk',
            'sex',
            'perlantz_sku',
            'metal_color',
            'main_metal_k',
            'sizelen',
            'eightk_weight',
            'ninek_weight',
            'forteenk_weight',
            'eighteenk_weight',
            'ninefiveplt_weight',
            'twentyfivek_weight',
            'width_thickness',
            'stone',
            'chain',
            'certificate',
            'color',
            'clarity',
            'shape',
            'qty',
            'mm',
            'supplier_sku',
            'Supplier',
            'total_crt',
            'stone_dia1',
            'cert_dia1',
            'color_dia1',
            'clarity_dia1',
            'shape_dia1',
            'qty_dia1',
            'mm_dia1',
            'total_crt_dia1',
            'stone_dia2',
            'cert_dia2',
            'color_dia2',
            'clarity_dia2',
            'shape_dia2',
            'qty_dia2',
            'mm_dia2',
            'total_crt_dia2',
            'fiyat_eur',
            'fiyat_eur_indirim',
            'fiyat_usd',
            'fiyat_usd_indirim',
            'fiyat_gbp',
            'fiyat_gbp_indirim',
            'fiyat_indirim',
            'fiyat',
            'seo_description',
            'seo_keywords',
            'seo_title',
        ];
    }
}
