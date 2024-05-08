<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class AkadProdi extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'akad_prodi';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'id_prodi';
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'fakultas_id','kode_prodi','nama_prodi'
	];
	public $timestamps = false;
	

	/**
     * Set search query for the model
	 * @param \Illuminate\Database\Eloquent\Builder $query
	 * @param string $text
     */
	public static function search($query, $text){
		//search table record 
		$search_condition = '(
				kode_prodi LIKE ?  OR 
				nama_prodi LIKE ?  OR 
				id_prodi LIKE ? 
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
			"fakultas_id",
			"kode_prodi",
			"nama_prodi",
			"id_prodi" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"fakultas_id",
			"kode_prodi",
			"nama_prodi",
			"id_prodi" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"id_prodi",
			"fakultas_id",
			"kode_prodi",
			"nama_prodi" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"id_prodi",
			"fakultas_id",
			"kode_prodi",
			"nama_prodi" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"fakultas_id",
			"kode_prodi",
			"nama_prodi",
			"id_prodi" 
		];
	}
}
