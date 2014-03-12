<?php

class Phone extends Eloquent {
    protected $fillable = [];

    public function person() {
    	return $this->belongsTo('Person');
    }
}