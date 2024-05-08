<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\CorePermissionsAddRequest;
use App\Models\CorePermissions;
use Illuminate\Http\Request;
use Exception;
class CorePermissionsController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$view = "pages.corepermissions.list";
		$query = CorePermissions::query();
		$limit = $request->limit ?? 10;
		if($request->search){
			$search = trim($request->search);
			CorePermissions::search($query, $search); // search table records
		}
		$orderby = $request->orderby ?? "core_permissions.id";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a table field
		}
		$records = $query->paginate($limit, CorePermissions::listFields());
		return $this->renderView($view, compact("records"));
	}
}
