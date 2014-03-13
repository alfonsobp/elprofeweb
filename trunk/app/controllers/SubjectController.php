<?php

class SubjectController extends BaseController {

	public function getSubjects($category_id){
		$subjects = Subject::where('category_id','=',$category_id)->get(array('id','name'));
		return Response::json($subjects);
	}
}