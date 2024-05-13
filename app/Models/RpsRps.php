<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class RpsRps extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'rps_rps';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'id';
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'id_fakultas','id_prodi','id_mk','id_otoritas1','id_otoritas2','deskripsi_rps'
	];
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
				deskripsi_rps LIKE ? 
		)';
		$search_params = [
			"%$text%","%$text%"
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
			"id_fakultas",
			"id_prodi",
			"id_mk",
			"id_otoritas1",
			"id_otoritas2",
			"deskripsi_rps",
			"date_created",
			"date_updated" 
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
			"id_fakultas",
			"id_prodi",
			"id_mk",
			"id_otoritas1",
			"id_otoritas2",
			"deskripsi_rps",
			"date_created",
			"date_updated" 
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
			"id_fakultas",
			"id_prodi",
			"id_mk",
			"id_otoritas1",
			"id_otoritas2",
			"deskripsi_rps",
			"date_created",
			"date_updated" 
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
			"id_fakultas",
			"id_prodi",
			"id_mk",
			"id_otoritas1",
			"id_otoritas2",
			"deskripsi_rps",
			"date_created",
			"date_updated" 
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
			"id_fakultas",
			"id_prodi",
			"id_mk",
			"id_otoritas1",
			"id_otoritas2",
			"deskripsi_rps" 
		];
	}
}
