<?php

class LocalizationController extends BaseController {


	public function getDepartments() {

		$localizations_depts = Localization::where('cod_prov','=','0')->where('cod_dist','=','0')->get(array('cod_dept','name'));
		return $localizations_depts;
	}

	public function getProvinces($cod_dept) {
		$localizations_provs = Localization::where('cod_dept','=',$cod_dept)->where('cod_prov','<>','0')->where('cod_dist','=','0')->get(array('cod_prov','name'));
		return Response:: json($localizations_provs);	
	}

	public function getDistricts($cod_dept,$cod_prov) {
		$localizations_dists = Localization::where('cod_dept','=',$cod_dept)->where('cod_prov','=',$cod_prov)->where('cod_dist','<>','0')->get(array('cod_dist','name'));
		return Response::json($localizations_dists);	
	}

	public function getLocalizationId($cod_dept,$cod_prov,$cod_dist) {
		$localizations_id = Localization::where('cod_dept','=',$cod_dept)
		->where('cod_prov','=',$cod_prov)
		->where('cod_dist','=',$cod_dist)
		->get(array('id'))->toArray();

return $localizations_id[0]['id'];
}


}	
