<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\CoreGroupRoleAddRequest;
use App\Http\Requests\CoreGroupRoleEditRequest;
use App\Models\CoreGroupRole;
use Illuminate\Http\Request;
use Exception;
class CoreGroupRoleController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$view = "pages.coregrouprole.list";
		$query = CoreGroupRole::query();
		$limit = $request->limit ?? 25;
		if($request->search){
			$search = trim($request->search);
			CoreGroupRole::search($query, $search); // search table records
		}
		$orderby = $request->orderby ?? "core_group_role.role_id";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a table field
		}
		$records = $query->paginate($limit, CoreGroupRole::listFields());
		return $this->renderView($view, compact("records"));
	}
	

	/**
     * Select table record by ID
	 * @param string $rec_id
     * @return \Illuminate\View\View
     */
	function view($rec_id = null){
		$query = CoreGroupRole::query();
		$record = $query->findOrFail($rec_id, CoreGroupRole::viewFields());
		return $this->renderView("pages.coregrouprole.view", ["data" => $record]);
	}
	

	/**
     * Display form page
     * @return \Illuminate\View\View
     */
	function add(){
		return $this->renderView("pages.coregrouprole.add");
	}
	

	/**
     * Save form record to the table
     * @return \Illuminate\Http\Response
     */
	function store(CoreGroupRoleAddRequest $request){
		$modeldata = $this->normalizeFormData($request->validated());
		
		//save CoreGroupRole record
		$record = CoreGroupRole::create($modeldata);
		$rec_id = $record->role_id;
		return $this->redirect("coregrouprole", __('recordAddedSuccessfully'));
	}
	

	/**
     * Update table record with form data
	 * @param string $rec_id //select record by table primary key
     * @return \Illuminate\View\View;
     */
	function edit(CoreGroupRoleEditRequest $request, $rec_id = null){
		$query = CoreGroupRole::query();
		$record = $query->findOrFail($rec_id, CoreGroupRole::editFields());
		if ($request->isMethod('post')) {
			$modeldata = $this->normalizeFormData($request->validated());
			$record->update($modeldata);
			return $this->redirect("coregrouprole", __('recordUpdatedSuccessfully'));
		}
		return $this->renderView("pages.coregrouprole.edit", ["data" => $record, "rec_id" => $rec_id]);
	}
	

	/**
     * Delete record from the database
	 * Support multi delete by separating record id by comma.
	 * @param  \Illuminate\Http\Request
	 * @param string $rec_id //can be separated by comma 
     * @return \Illuminate\Http\Response
     */
	function delete(Request $request, $rec_id = null){
		$arr_id = explode(",", $rec_id);
		$query = CoreGroupRole::query();
		$query->whereIn("role_id", $arr_id);
		$query->delete();
		$redirectUrl = $request->redirect ?? url()->previous();
		return $this->redirect($redirectUrl, __('recordDeletedSuccessfully'));
	}
}
