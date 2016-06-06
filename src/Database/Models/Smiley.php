<?php
/**
 * Smiley model for Eloquent.
 *
 * @author  MyBB Group
 * @version 2.0.0
 * @package mybb/parser
 * @license http://www.mybb.com/licenses/bsd3 BSD-3
 */

namespace Mybb\Parser\Database\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int    id
 * @property string find
 * @property string image
 * @property int    disporder
 */
class Smiley extends Model
{
	/**
	 * Indicates if the model should be timestamped.
	 *
	 * @var boolean
	 */
	public $timestamps = false;
	/**
	 * The table associated with the model.
	 *
	 * @var string
	 */
	protected $table = 'parser_smilies';
	/**
	 * The attributes that aren't mass assignable.
	 *
	 * @var array
	 */
	protected $guarded = [];
}
