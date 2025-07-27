<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Company
 * 
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property string|null $website
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|JobsAt[] $jobs_ats
 *
 * @package App\Models
 */
class Company extends Model
{
	protected $table = 'companies';

	protected $fillable = [
		'name',
		'description',
		'website'
	];

	public function jobs_ats()
	{
		return $this->hasMany(JobsAt::class);
	}
}
