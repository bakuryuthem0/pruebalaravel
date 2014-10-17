<?php
class Continente extends Eloquent{

	

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */

	public function paises()
	{
		return $this->hasMany('Paises');
	}
	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

}
?>