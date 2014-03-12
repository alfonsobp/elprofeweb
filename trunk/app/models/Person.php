<?php

class Person extends Eloquent {
	protected $table = 'persons';


	//estas funciones retornan modelos eloquent asociados
	public function phones() {
    	return $this->hasMany('Phone');
    }

    public function notifications() {
    	return $this->belongsToMany('Notification');
    }


}	
