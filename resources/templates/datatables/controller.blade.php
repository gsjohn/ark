{!! $BEGIN_PHP !!}
<?php
		$searchCols = [];
		foreach ($columns as $col){
			if($col->data_type == 'string'){
				$searchCols[] = $col->name;
			}
		}

?>
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\DataTableController;
use App\Models\{{$model}};

class {{$model}}Controller extends DataTableController
{
	public function newEntity(array $attributes = [])
	{
		// TODO: Implement newEntity() method.
		return new {{$model}}($attributes);
	}

	/**
	* Display a listing of the resource.
	*
	* @return \Illuminate\Http\Response
	*/
	public function index()
	{
		//
		return view('admin.{{snake_case($model,'-')}}.index');
	}

	/**
	* Show the form for creating a new resource.
	*
	* @return \Illuminate\Http\Response
	*/
	public function create()
	{
		return view('admin.{{snake_case($model,'-')}}.create');
	}

	/**
	* Display the specified resource.
	*
	* @param  int  $id
	* @return \Illuminate\Http\Response
	*/
	public function edit($id)
	{
		$entity = {{$model}}::find($id);
		return view('admin.{{snake_case($model,'-')}}.edit', ['entity' => $entity]);
	}

	/**
	* Display the specified resource.
	*
	* @param  int  $id
	* @return \Illuminate\Http\Response
	*/
	public function show($id)
	{
		//
	}

	/**
	* @param Request $request
	* @param array $searchCols
	* @return \Illuminate\Http\JsonResponse
	*/
	public function pagination(Request $request, $searchCols = [], $conditionCall = null){
		$searchCols = {!! json_encode($searchCols) !!};
		return parent::pagination($request, $searchCols, $conditionCall);
	}

}
