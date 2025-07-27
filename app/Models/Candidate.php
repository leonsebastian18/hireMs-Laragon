<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Candidate
 * 
 * @property int $id
 * @property int|null $user_id
 * @property string|null $phone
 * @property string|null $address
 * @property string|null $cv
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property User|null $user
 * @property Collection|Application[] $applications
 *
 * @package App\Models
 */
class Candidate extends Model
{
	protected $table = 'candidates';

	protected $casts = [
		'user_id' => 'int'
	];

	protected $fillable = [
		'user_id',
		'phone',
		'address',
		'cv'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function applications()
	{
		return $this->hasMany(Application::class);
	}
}
