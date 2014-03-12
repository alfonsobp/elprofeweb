<?php

class Notification extends Eloquent {
    protected $fillable = [];

    public function persons() {
    	return $this->belongsToMany('Person');
    }
}