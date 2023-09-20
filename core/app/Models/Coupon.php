<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Coupon
 * 
 * @property int $id
 * @property string|null $ma
 * @property int|null $stt
 * @property int|null $loai
 * @property int|null $tinhtrang
 * @property int|null $chietkhau
 * @property int|null $ngaybatdau
 * @property int|null $ngayketthuc
 * @property int $solan
 * @property float $toithieu
 * @property float $toida
 *
 * @package App\Models
 */
class Coupon extends Model
{
	protected $table = 'table_coupon';
	public $timestamps = false;

	protected $casts = [
		'stt' => 'int',
		'loai' => 'int',
		'tinhtrang' => 'int',
		'chietkhau' => 'int',
		'ngaybatdau' => 'int',
		'ngayketthuc' => 'int',
		'solan' => 'int',
		'toithieu' => 'float',
		'toida' => 'float'
	];

	protected $fillable = [
		'ma',
		'stt',
		'loai',
		'tinhtrang',
		'chietkhau',
		'ngaybatdau',
		'ngayketthuc',
		'solan',
		'toithieu',
		'toida'
	];
}
