<?php

class AdvertsController extends BaseController {

	protected $advert;

	public function __construct(Advert $advert)
	{
		$this->advert = $advert;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$adverts = $this->advert->all();
        return View::make('adverts.index', compact('adverts'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$categories = Category::all();
        return View::make('adverts.create', compact('categories'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();

		$v = Validator::make($input, Advert::$rules);

		if ($v->passes()) {
			//$this->advert->create($input);
			$advert = new Advert;
			$advert->ads_type_id = 1;
			$advert->title = $input['title'];
			$advert->content = $input['content'];
			$advert->rate = $input['rate'];
			$advert->permanence = 40;
			$advert->save();

			return Redirect::route('adverts.index');
		}
		
		return Redirect::route('adverts.create')
			->whitInput()
			->whitErroes($v)
			->whith('message', 'Hubo un error de validación');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$advert = $this->advert->findOrFail($id);
        return View::make('adverts.show', compact('advert'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$advert = $this->advert->find($id);

		if (is_null($advert)) {
			return Redirect::round('advert.index');
		}

        return View::make('adverts.edit', compact('advert'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = array_except(Input::all(), '_method');
		$v = Validator::make($input, Advert::$rules);

		if ($v->passes()) {
			$advert = $this->advert->find($id);
			$advert->update($input);

			return Redirect::route('adverts.show', $id);
		}

		return Redirect::route('adverts.edit', $id)
			->whitInput()
			->whitErroes($v)
			->whith('message', 'Hubo un error de validación');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->advert->find($id)->delete();
		return Redirect::route('adverts.index');
	}

}
