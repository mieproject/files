<?php

namespace MieProject\Files\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @method static limit(int $int)
 */
class Files extends Model
{

//    public $path = storage_path('files'); // path is `storage/app/public/[f]iles`

    use HasFactory,SoftDeletes;
    /**
     * Get all of the owning fileable models.
     */

    public function fileable(): \Illuminate\Database\Eloquent\Relations\MorphTo
    {
        return $this->morphTo();
    }



    public static function boot() {
        parent::boot();
        $nextNO = rand(3, 7);

        $files = Files::limit(10)->orderBy('id','desc')->get();
        //while creating/inserting item into db
        static::creating(function (Files $item)use ($files,$nextNO) {

            foreach ($files->chunk(3) as $last3){
                $count = $last3->count();
                $sum = $last3->sum();
                $yet = 12 - $sum;
                if ($count == 2 && $yet != 0){
                    $nextNO = $yet;
                }elseif($count == 1){
                    $nextNO = rand(3, $yet);
                }else{
                    $nextNO = rand(3, 12);
                }
            }
            $item->col = $nextNO; //assigning value
        });

    }
}
