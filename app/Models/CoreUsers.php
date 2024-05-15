<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
class CoreUsers extends Authenticatable 
{
	use Notifiable;
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'core_users';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'id';
	protected $fillable = ['ip_address','username','password','email','email_login_hash','activation_selector','activation_code','remember_selector','remember_code','created_on','last_login','active','first_name','last_name','company','phone','picture','oauth_provider','oauth_uid','created','nim','claimed','wa_activated','email_activated','activated','otp','otp_login_code','otp_backup_code','user_group_id','forgotten_password_selector','forgotten_password_code','forgotten_password_time','user_role_id'];
	public $timestamps = true;
	const CREATED_AT = 'date_created'; 
	const UPDATED_AT = 'date_updated'; 
	

	/**
     * Set search query for the model
	 * @param \Illuminate\Database\Eloquent\Builder $query
	 * @param string $text
     */
	public static function search($query, $text){
		//search table record 
		$search_condition = '(
				id LIKE ?  OR 
				ip_address LIKE ?  OR 
				username LIKE ?  OR 
				email LIKE ?  OR 
				email_login_hash LIKE ?  OR 
				activation_selector LIKE ?  OR 
				activation_code LIKE ?  OR 
				forgotten_password_selector LIKE ?  OR 
				forgotten_password_code LIKE ?  OR 
				remember_selector LIKE ?  OR 
				remember_code LIKE ?  OR 
				first_name LIKE ?  OR 
				last_name LIKE ?  OR 
				company LIKE ?  OR 
				phone LIKE ?  OR 
				oauth_provider LIKE ?  OR 
				oauth_uid LIKE ?  OR 
				nim LIKE ?  OR 
				otp LIKE ?  OR 
				otp_login_code LIKE ?  OR 
				otp_backup_code LIKE ? 
		)';
		$search_params = [
			"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
		];
		//setting search conditions
		$query->whereRaw($search_condition, $search_params);
	}
	

	/**
     * return list page fields of the model.
     * 
     * @return array
     */
	public static function listFields(){
		return [ 
			"id",
			"ip_address",
			"username",
			"email",
			"email_login_hash",
			"activation_selector",
			"activation_code",
			"remember_selector",
			"remember_code",
			"created_on",
			"last_login",
			"active",
			"first_name",
			"last_name",
			"company",
			"phone",
			"picture",
			"oauth_provider",
			"oauth_uid",
			"created",
			"nim",
			"claimed",
			"wa_activated",
			"email_activated",
			"activated",
			"otp",
			"otp_login_code",
			"otp_backup_code",
			"user_role_id",
			"date_created",
			"date_updated",
			"user_group_id" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"id",
			"ip_address",
			"username",
			"email",
			"email_login_hash",
			"activation_selector",
			"activation_code",
			"remember_selector",
			"remember_code",
			"created_on",
			"last_login",
			"active",
			"first_name",
			"last_name",
			"company",
			"phone",
			"picture",
			"oauth_provider",
			"oauth_uid",
			"created",
			"nim",
			"claimed",
			"wa_activated",
			"email_activated",
			"activated",
			"otp",
			"otp_login_code",
			"otp_backup_code",
			"user_role_id",
			"date_created",
			"date_updated",
			"user_group_id" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"id",
			"ip_address",
			"username",
			"email",
			"email_login_hash",
			"activation_selector",
			"activation_code",
			"remember_selector",
			"remember_code",
			"created_on",
			"last_login",
			"active",
			"first_name",
			"last_name",
			"company",
			"phone",
			"oauth_provider",
			"oauth_uid",
			"created",
			"nim",
			"claimed",
			"wa_activated",
			"email_activated",
			"activated",
			"otp",
			"otp_login_code",
			"otp_backup_code",
			"user_role_id",
			"date_created",
			"date_updated",
			"user_group_id" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"id",
			"ip_address",
			"username",
			"email",
			"email_login_hash",
			"activation_selector",
			"activation_code",
			"remember_selector",
			"remember_code",
			"created_on",
			"last_login",
			"active",
			"first_name",
			"last_name",
			"company",
			"phone",
			"oauth_provider",
			"oauth_uid",
			"created",
			"nim",
			"claimed",
			"wa_activated",
			"email_activated",
			"activated",
			"otp",
			"otp_login_code",
			"otp_backup_code",
			"user_role_id",
			"date_created",
			"date_updated",
			"user_group_id" 
		];
	}
	

	/**
     * return accountedit page fields of the model.
     * 
     * @return array
     */
	public static function accounteditFields(){
		return [ 
			"id",
			"ip_address",
			"username",
			"email_login_hash",
			"activation_selector",
			"activation_code",
			"remember_selector",
			"remember_code",
			"created_on",
			"last_login",
			"active",
			"first_name",
			"last_name",
			"company",
			"phone",
			"picture",
			"oauth_provider",
			"oauth_uid",
			"created",
			"nim",
			"claimed",
			"wa_activated",
			"email_activated",
			"activated",
			"otp",
			"otp_login_code",
			"otp_backup_code",
			"user_role_id" 
		];
	}
	

	/**
     * return accountview page fields of the model.
     * 
     * @return array
     */
	public static function accountviewFields(){
		return [ 
			"id",
			"ip_address",
			"username",
			"email",
			"email_login_hash",
			"activation_selector",
			"activation_code",
			"remember_selector",
			"remember_code",
			"created_on",
			"last_login",
			"active",
			"first_name",
			"last_name",
			"company",
			"phone",
			"oauth_provider",
			"oauth_uid",
			"created",
			"nim",
			"claimed",
			"wa_activated",
			"email_activated",
			"activated",
			"otp",
			"otp_login_code",
			"otp_backup_code",
			"user_role_id",
			"date_created",
			"date_updated",
			"user_group_id" 
		];
	}
	

	/**
     * return exportAccountview page fields of the model.
     * 
     * @return array
     */
	public static function exportAccountviewFields(){
		return [ 
			"id",
			"ip_address",
			"username",
			"email",
			"email_login_hash",
			"activation_selector",
			"activation_code",
			"remember_selector",
			"remember_code",
			"created_on",
			"last_login",
			"active",
			"first_name",
			"last_name",
			"company",
			"phone",
			"oauth_provider",
			"oauth_uid",
			"created",
			"nim",
			"claimed",
			"wa_activated",
			"email_activated",
			"activated",
			"otp",
			"otp_login_code",
			"otp_backup_code",
			"user_role_id",
			"date_created",
			"date_updated",
			"user_group_id" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"id",
			"ip_address",
			"username",
			"email_login_hash",
			"activation_selector",
			"activation_code",
			"remember_selector",
			"remember_code",
			"created_on",
			"last_login",
			"active",
			"first_name",
			"last_name",
			"company",
			"phone",
			"picture",
			"oauth_provider",
			"oauth_uid",
			"created",
			"nim",
			"claimed",
			"wa_activated",
			"email_activated",
			"activated",
			"otp",
			"otp_login_code",
			"otp_backup_code",
			"user_role_id" 
		];
	}
	

	/**
     * Get current user name
     * @return string
     */
	public function UserName(){
		return $this->username;
	}
	

	/**
     * Get current user id
     * @return string
     */
	public function UserId(){
		return $this->id;
	}
	public function UserEmail(){
		return $this->email;
	}
	public function UserPhoto(){
		return $this->picture;
	}
	public function UserRole(){
		return $this->user_role_id;
	}
	

	/**
     * Send Password reset link to user email 
	 * @param string $token
     * @return string
     */
	public function sendPasswordResetNotification($token)
	{
		$this->notify(new \App\Notifications\ResetPassword($token));
	}
	
	private $roleNames = [];
	private $userPages = [];
	
	/**
	* Get the permissions of the user.
	*/
	public function permissions(){
		return $this->hasMany(Permissions::class, 'role_id', 'user_role_id');
	}
	
	/**
	* Get the roles of the user.
	*/
	public function roles(){
		return $this->hasMany(Roles::class, 'role_id', 'user_role_id');
	}
	
	/**
	* set user role
	*/
	public function assignRole($roleName){
		$roleId = Roles::select('role_id')->where('role_name', $roleName)->value('role_id');
		$this->user_role_id = $roleId;
		$this->save();
	}
	
	/**
     * return list of pages user can access
     * @return array
     */
	public function getUserPages(){
		if(empty($this->userPages)){ // ensure we make db query once
			$this->userPages = $this->permissions()->pluck('permission')->toArray();
		}
		return $this->userPages;
	}
	
	/**
     * return user role names
     * @return array
     */
	public function getRoleNames(){
		if(empty($this->roleNames)){// ensure we make db query once
			$this->roleNames = $this->roles()->pluck('role_name')->toArray();
		}
		return $this->roleNames;
	}
	
	/**
     * check if user has a role
     * @return bool
     */
	public function hasRole($arrRoles){
		if(!is_array($arrRoles)){
			$arrRoles = [$arrRoles];
		}
		$userRoles = $this->getRoleNames();
		if(array_intersect(array_map('strtolower', $userRoles), array_map('strtolower', $arrRoles))){
			return true;
		}
		return false;
	}
	
	/**
     * check if user is the owner of the record
     * @return bool
     */
	public function isOwner($recId){
		return $this->UserId() == $recId;
	}
	
	/**
     * check if user can access page
     * @return bool
     */
	public function canAccess($path){
		$userPages = $this->getUserPages();
		$arrPaths = explode("/", strtolower($path));
		$page = $arrPaths[0] ?? "home";
		$action = $arrPaths[1] ?? "index";
		$page_path = "$page/$action";
		return in_array($page_path, $userPages);
	}
	
	/**
     * check if user is the owner of the record or has role that can edit or delete it
     * @return bool
     */
	public function canManage($path, $recId){
		return false;
	}
}
