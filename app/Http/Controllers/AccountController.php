<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\CoreUsers;
use App\Http\Requests\CoreUsersAccountEditRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Exception;
/**
 * Account Page Controller
 * @category  Controller
 */
class AccountController extends Controller{
	

	/**
     * Select user account data
     * @return \Illuminate\View\View
     */
	function index(){
		$rec_id = Auth::id();
		$query = CoreUsers::query();
		$record = $query->find($rec_id, CoreUsers::accountviewFields());
		if(!$record){
			return $this->reject(__('noRecordFound'), 404);
		}
		return $this->renderView("pages.account.view", ["data" => $record, "rec_id" => $rec_id]);
	}
	

	/**
     * Update user account data
     * @return \Illuminate\View\View;
     */
	function edit(CoreUsersAccountEditRequest $request){
		$rec_id = Auth::id();
		$query = CoreUsers::query();
		$query->where("core_users.user_group_id", auth()->user()->id);
		$user = $query->findOrFail($rec_id, CoreUsers::accounteditFields());
		if ($request->isMethod('post')) {
			$modeldata = $this->normalizeFormData($request->validated());
		
		if( array_key_exists("picture", $modeldata) ){
			//move uploaded file from temp directory to destination directory
			$fileInfo = $this->moveUploadedFiles($modeldata['picture'], "picture");
			$modeldata['picture'] = $fileInfo['filepath'];
		}
			$user->update($modeldata);
			return $this->redirect("account", __('recordUpdatedSuccessfully'));
		}
		return $this->renderView("pages.account.edit", ["data" => $user, "rec_id" => $rec_id]);
	}
	

	/**
     * Change user account password
     * @return \Illuminate\Http\Response
     */
	public function changepassword(Request $request)
	{
		$request->validate([
			'oldpassword' => ['required'],
			'newpassword' => ['required'],
			'confirmpassword' => ['same:newpassword'],
		]);
		$userid = auth()->id();
		$user = CoreUsers::find($userid);
		$oldPasswordText = $request->oldpassword;
		$oldPasswordHash = $user->password;
		if(!Hash::check($oldPasswordText, $oldPasswordHash)){
			return back()->withErrors(["Current password is incorrect"]);
		}
		$modeldata = ['password' => Hash::make($request->newpassword)];
		$user->update($modeldata);
		return $this->redirect("/account", "Password change completed");
	}
}
