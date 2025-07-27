<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Application
 * 
 * @property int $id
 * @property int $candidate_id
 * @property int $job_id
 * @property string|null $status
 * @property string|null $cover_letter
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Candidate $candidate
 * @property Job $job
 * @property Collection|Interview[] $interviews
 *
 * @package App\Models
 */
class Application extends Model
{
	protected $table = 'applications';

	protected $casts = [
		'candidate_id' => 'int',
		'job_id' => 'int'
	];

	protected $fillable = [
		'candidate_id',
		'job_id',
		'status',
		'cover_letter'
	];

	public function candidate()
	{
		return $this->belongsTo(Candidate::class);
	}

	public function job()
	{
		return $this->belongsTo(Job::class);
	}

	public function interviews()
	{
		return $this->hasMany(Interview::class);
	}
}
