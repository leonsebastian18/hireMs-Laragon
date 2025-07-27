<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class JobsAt
 * 
 * @property int $id
 * @property int $company_id
 * @property string $title
 * @property string $description
 * @property string|null $location
 * @property float|null $salary
 * @property string|null $type
 * @property string|null $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Company $company
 *
 * @package App\Models
 */
class JobsAt extends Model
{
	protected $table = 'jobs_ats';

	protected $casts = [
		'company_id' => 'int',
		'salary' => 'float'
	];

	protected $fillable = [
		'company_id',
		'title',
		'description',
		'location',
		'salary',
		'type',
		'status'
	];

	public function company()
	{
		return $this->belongsTo(Company::class);
	}
}
