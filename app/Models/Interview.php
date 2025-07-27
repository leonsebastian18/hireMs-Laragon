<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Interview
 * 
 * @property int $id
 * @property int $application_id
 * @property Carbon $interview_date
 * @property string|null $interviewer
 * @property string|null $feedback
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Application $application
 *
 * @package App\Models
 */
class Interview extends Model
{
	protected $table = 'interviews';

	protected $casts = [
		'application_id' => 'int',
		'interview_date' => 'datetime'
	];

	protected $fillable = [
		'application_id',
		'interview_date',
		'interviewer',
		'feedback'
	];

	public function application()
	{
		return $this->belongsTo(Application::class);
	}
}
