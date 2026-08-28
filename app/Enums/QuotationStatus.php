<?php

namespace App\Enums;

enum QuotationStatus: string
{
    case Prospek = 'prospek';
    case SuksesKeluarPo = 'sukses_keluar_po';
    case SuksesTanpaPo = 'sukses_tanpa_po';
    case Gagal = 'gagal';
}
