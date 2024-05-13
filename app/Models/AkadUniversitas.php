<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class AkadUniversitas extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'akad_universitas';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'id_universitas';
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'kode_universitas','nama_universitas'
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
				kode_universitas LIKE ?  OR 
				nama_universitas LIKE ?  OR 
				id_universitas LIKE ? 
		)';
		$search_params = [
			"%$text%","%$text%","%$text%"
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
			"kode_universitas",
			"nama_universitas",
			"id_universitas" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"kode_universitas",
			"nama_universitas",
			"id_universitas" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"id_universitas",
			"kode_universitas",
			"nama_universitas" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"id_universitas",
			"kode_universitas",
			"nama_universitas" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"kode_universitas",
			"nama_universitas",
			"id_universitas" 
		];
	}
}
