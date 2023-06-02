<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use App\Models\BidangModel;

class AsnModel extends Model
{
    use HasFactory;
    protected $table = 'asn';
    protected $fillable = [
        'bidang_id',
        'rhk_id',
        'nama',
        'nip',
        'password',
        'image'
    ];
    
    public function bidang()
    {
        return $this->belongsTo(BidangModel::class, 'bidang_id');
    }
    public function rhk()
    {
        return $this->belongsTo(RhkModel::class, 'rhk_id');
    }
}
