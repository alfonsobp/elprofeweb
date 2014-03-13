<?php

class PersonController extends BaseController {

	public function create() {

		$academicdegrees = Academicdegree::all();
		$localizationController = new LocalizationController();
		$localizations_depts = $localizationController->getDepartments();
		return View::make('registro',compact('academicdegrees','localizations_depts'));
	}

	public function handleCreate() {

		

		DB::transaction(function() {

			$input = Input::all();
			$person = new Person;
			$localizationController = new LocalizationController();

			$person->names =  $input['names'];
			$person->last_name = $input['last_name'];
			$person->doc_number = $input['doc_number'];
			$person->doc_type = $input['doc_type'];
			$person->email=$input['email'];
			$person->career=$input['career'];
			$person->state=1;

		//para transformar a fecha
			$borndate = date("Y-m-d", strtotime($input['born_date']));
			$person->born_date = $borndate;

			$person->nationality = $input['nationality'];
			$person->academicdegree_id= $input['academicdegree_id'];
			$person->localization_id = $localizationController->getLocalizationId(
				$input['localization_dept'],$input['localization_prov'],$input['localization_dist']);
			$person->save();	

			$i=0;
			foreach ($input['mobile_number'] as $mobil ) {
				$phone = new Phone;
				$phone->person()->associate($person);
				$phone->mobile_number=$mobil;
				$phone->type=$input['phone_type'][$i];
				$phone->save();
				$i=$i+1;
			}




			if (isset($input['notif1'])) {

			//asociar la persona a las notificaciones de tipo 1
			//$person->notifications()->save(Notification::find(1));
				$person->notifications()->attach(1);
				$person->notifications()->where('person_id','=',$person->id)->update(array('state'=>1));
			}

			if (isset($input['notif2'])) {

			//asociar la persona a las notificaciones de tipo 1
				$person->notifications()->attach(2);
				$person->notifications()->where('person_id','=',$person->id)->update(array('state'=>1));

			}


		});

	return Redirect::to('registro');
}


}	
