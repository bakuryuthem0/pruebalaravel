<?php
class Paises extends Eloquent{

	
	protected $table = 'paises';
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */

	public function paises()
	{
		return $this->hasMany('informacion');
	}
	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

}
?>