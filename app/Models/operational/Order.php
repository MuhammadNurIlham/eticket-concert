<?php

namespace App\Models\operational;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use SoftDeletes;

    // kita define nama tabel nya
    public $table = 'order';

// kita define dates nya biar di isi format DATE biar g di isengin
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // declare fillable(field yang mau di isi)
    protected $fillable = [
        'concert_id',
        'name',
        'email',
        'phone',
        // date kita declare filable karena di isi lagi oleh user. di atas kita hanya set input nya wajib type date
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function user()
    {
        // parameter belongs to ada 3
        // 3 parameter (path model yang di tuju), FK nya, primart key(id)
        return $this->belongsTo('App\Models\User', 'concert_id', 'id');
    }
}
