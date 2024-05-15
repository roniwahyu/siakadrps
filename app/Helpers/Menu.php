
<?php
	class Menu{
		
	public static function navbarsideleft(){
		return [
		[
			'path' => 'home',
			'label' => __('home'), 
			'icon' => '<i class="fa fa-globe"></i>'
		],
		
		[
			'path' => 'akadpt',
			'label' => __('setupPt'), 
			'icon' => '<i class="fa fa-globe"></i>'
		],
		
		[
			'path' => 'akaduniversitas',
			'label' => __('universitas'), 
			'icon' => '<i class="fa fa-globe"></i>'
		],
		
		[
			'path' => 'akadfakultas',
			'label' => __('fakultas'), 
			'icon' => '<i class="fa fa-globe"></i>'
		],
		
		[
			'path' => 'akadjenjang',
			'label' => __('jenjang'), 
			'icon' => '<i class="fa fa-globe"></i>'
		],
		
		[
			'path' => 'akadthnakademik',
			'label' => __('tahunAkademik'), 
			'icon' => '<i class="fa fa-globe"></i>'
		],
		
		[
			'path' => 'akadkurikulum',
			'label' => __('kurikulum'), 
			'icon' => '<i class="fa fa-globe"></i>'
		],
		
		[
			'path' => 'akadmk',
			'label' => __('mataKuliah'), 
			'icon' => '<i class="fa fa-globe"></i>'
		],
		
		[
			'path' => 'akadmksyarat',
			'label' => __('mkPrasyarat'), 
			'icon' => '<i class="fa fa-globe"></i>'
		],
		
		[
			'path' => 'audits',
			'label' => __('audits'), 
			'icon' => '<i class="fa fa-globe"></i>'
		],
		
		[
			'path' => 'corepermissions',
			'label' => __('corePermissions'), 
			'icon' => '<i class="fa fa-globe"></i>'
		],
		
		[
			'path' => 'coreusers',
			'label' => __('coreUsers'), 
			'icon' => '<i class="fa fa-globe"></i>'
		],
		
		[
			'path' => 'permissions',
			'label' => __('permissions'), 
			'icon' => '<i class="fa fa-globe"></i>'
		],
		
		[
			'path' => 'roles',
			'label' => __('roles'), 
			'icon' => '<i class="fa fa-globe"></i>'
		],
		
		[
			'path' => 'rpsasesmen',
			'label' => __('rpsAsesmen'), 
			'icon' => '<i class="fa fa-globe"></i>'
		],
		
		[
			'path' => 'rpsbahanajar',
			'label' => __('bahanAjarRps'), 
			'icon' => '<i class="fa fa-globe"></i>'
		],
		
		[
			'path' => 'rpsbentukpembelajaran',
			'label' => __('bentukPembelajaranRps'), 
			'icon' => '<i class="fa fa-globe"></i>'
		],
		
		[
			'path' => 'rpscp',
			'label' => __('cpRps'), 
			'icon' => '<i class="fa fa-globe"></i>'
		],
		
		[
			'path' => 'rpscpjenis',
			'label' => __('rpsCpJenis'), 
			'icon' => '<i class="fa fa-globe"></i>'
		],
		
		[
			'path' => 'rpscpmk',
			'label' => __('rpsCpMk'), 
			'icon' => '<i class="fa fa-globe"></i>'
		],
		
		[
			'path' => 'rpscprps',
			'label' => __('rpsCpRps'), 
			'icon' => '<i class="fa fa-globe"></i>'
		],
		
		[
			'path' => 'rpscpsubmk',
			'label' => __('rpsCpSubMk'), 
			'icon' => '<i class="fa fa-globe"></i>'
		],
		
		[
			'path' => 'rpskategorirelasi',
			'label' => __('rpsKategoriRelasi'), 
			'icon' => '<i class="fa fa-globe"></i>'
		],
		
		[
			'path' => 'rpskriteriacapaian',
			'label' => __('rpsKriteriaCapaian'), 
			'icon' => '<i class="fa fa-globe"></i>'
		],
		
		[
			'path' => 'rpsmetodepembelajaran',
			'label' => __('rpsMetodePembelajaran'), 
			'icon' => '<i class="fa fa-globe"></i>'
		],
		
		[
			'path' => 'rpspembahasanrps',
			'label' => __('rpsPembahasanRps'), 
			'icon' => '<i class="fa fa-globe"></i>'
		],
		
		[
			'path' => 'rpspenilaiancpmk',
			'label' => __('rpsPenilaianCpmk'), 
			'icon' => '<i class="fa fa-globe"></i>'
		],
		
		[
			'path' => 'rpspustakarps',
			'label' => __('rpsPustakaRps'), 
			'icon' => '<i class="fa fa-globe"></i>'
		],
		
		[
			'path' => 'rpsrps',
			'label' => __('rpsRps'), 
			'icon' => '<i class="fa fa-globe"></i>'
		],
		
		[
			'path' => 'rpssubcpmkasesmen',
			'label' => __('rpsSubCpmkAsesmen'), 
			'icon' => '<i class="fa fa-globe"></i>'
		],
		
		[
			'path' => 'akadprodi',
			'label' => __('akadProdi'), 
			'icon' => '<i class="fa fa-globe"></i>'
		],
		
		[
			'path' => 'akadjabfung',
			'label' => __('akadJabfung'), 
			'icon' => '<i class="fa fa-globe"></i>'
		],
		
		[
			'path' => 'akaddosen',
			'label' => __('akadDosen'), 
			'icon' => '<i class="fa fa-globe"></i>'
		],
		
		[
			'path' => '',
			'label' => __('rps'), 
			'icon' => '<i class="fa fa-align-justify "></i>'
		],
		
		[
			'path' => 'coregroupuser',
			'label' => __('coreGroupUser'), 
			'icon' => '<i class="fa fa-globe"></i>'
		],
		
		[
			'path' => 'coregroups',
			'label' => __('coreGroups'), 
			'icon' => '<i class="fa fa-globe"></i>'
		],
		
		[
			'path' => 'coreroles',
			'label' => __('coreRoles'), 
			'icon' => '<i class="fa fa-globe"></i>'
		],
		
		[
			'path' => 'coregrouprole',
			'label' => __('coreGroupRole'), 
			'icon' => '<i class="fa fa-globe"></i>'
		],
		
		[
			'path' => 'coregrouppermission',
			'label' => __('coreGroupPermission'), 
			'icon' => '<i class="fa fa-globe"></i>'
		]
	] ;
	}
	
	public static function navbartopleft(){
		return [
		[
			'path' => 'akadjabfung',
			'label' => __('akadJabfung'), 
			'icon' => '<i class="fa fa-globe"></i>'
		],
		
		[
			'path' => 'akaddosen',
			'label' => __('akadDosen'), 
			'icon' => '<i class="fa fa-globe"></i>'
		],
		
		[
			'path' => '#',
			'label' => __('rps'), 
			'icon' => '<i class="fa fa-align-justify "></i>'
		],
		
		[
			'path' => 'coregroupuser',
			'label' => __('coreGroupUser'), 
			'icon' => '<i class="fa fa-globe"></i>'
		],
		
		[
			'path' => 'coregroups',
			'label' => __('coreGroups'), 
			'icon' => '<i class="fa fa-globe"></i>'
		],
		
		[
			'path' => 'coreroles',
			'label' => __('coreRoles'), 
			'icon' => '<i class="fa fa-globe"></i>'
		],
		
		[
			'path' => 'coregrouprole',
			'label' => __('coreGroupRole'), 
			'icon' => '<i class="fa fa-globe"></i>'
		],
		
		[
			'path' => 'coregrouppermission',
			'label' => __('coreGroupPermission'), 
			'icon' => '<i class="fa fa-globe"></i>'
		]
	] ;
	}
	
	public static function navbartopright(){
		return [
		[
			'path' => 'akadjabfung',
			'label' => __('akadJabfung'), 
			'icon' => '<i class="fa fa-globe"></i>'
		],
		
		[
			'path' => 'akaddosen',
			'label' => __('akadDosen'), 
			'icon' => '<i class="fa fa-globe"></i>'
		],
		
		[
			'path' => 'coregroupuser',
			'label' => __('coreGroupUser'), 
			'icon' => '<i class="fa fa-globe"></i>'
		],
		
		[
			'path' => 'coregroups',
			'label' => __('coreGroups'), 
			'icon' => '<i class="fa fa-globe"></i>'
		],
		
		[
			'path' => 'coreroles',
			'label' => __('coreRoles'), 
			'icon' => '<i class="fa fa-globe"></i>'
		],
		
		[
			'path' => 'coregrouprole',
			'label' => __('coreGroupRole'), 
			'icon' => '<i class="fa fa-globe"></i>'
		],
		
		[
			'path' => 'coregrouppermission',
			'label' => __('coreGroupPermission'), 
			'icon' => '<i class="fa fa-globe"></i>'
		]
	] ;
	}
	
		
	public static function jkel(){
		return [
		[
			'value' => 'L', 
			'label' => __('l'), 
		],
		[
			'value' => 'P', 
			'label' => __('p'), 
		],] ;
	}
	
	public static function isactive(){
		return [
		[
			'value' => '1', 
			'label' => __('1'), 
		],
		[
			'value' => '0', 
			'label' => __('0'), 
		],] ;
	}
	
	public static function jnsMk(){
		return [
		[
			'value' => 'Wajib', 
			'label' => __('wajib'), 
		],
		[
			'value' => 'Pilihan', 
			'label' => __('pilihan'), 
		],] ;
	}
	
	public static function kurikulumMk(){
		return [
		[
			'value' => 'Inti', 
			'label' => __('inti'), 
		],
		[
			'value' => 'Institusi', 
			'label' => __('institusi'), 
		],] ;
	}
	
	public static function kelompokMk(){
		return [
		[
			'value' => 'MPK', 
			'label' => __('mpk'), 
		],
		[
			'value' => 'MKK', 
			'label' => __('mkk'), 
		],
		[
			'value' => 'MKB', 
			'label' => __('mkb'), 
		],
		[
			'value' => 'MPB', 
			'label' => __('mpb'), 
		],
		[
			'value' => 'MBB', 
			'label' => __('mbb'), 
		],] ;
	}
	
	public static function minMkLulus(){
		return [
		[
			'value' => 'A', 
			'label' => __('a'), 
		],
		[
			'value' => 'B+', 
			'label' => __('b'), 
		],
		[
			'value' => 'B', 
			'label' => __('b'), 
		],
		[
			'value' => 'C+', 
			'label' => __('c'), 
		],
		[
			'value' => 'C', 
			'label' => __('c'), 
		],
		[
			'value' => 'D+', 
			'label' => __('d'), 
		],
		[
			'value' => 'D', 
			'label' => __('d'), 
		],
		[
			'value' => 'E', 
			'label' => __('e'), 
		],
		[
			'value' => 'F', 
			'label' => __('f'), 
		],] ;
	}
	
	public static function statusMk(){
		return [
		[
			'value' => 'Aktif', 
			'label' => __('aktif'), 
		],
		[
			'value' => 'Hapus', 
			'label' => __('hapus'), 
		],] ;
	}
	
	public static function jenisPustaka(){
		return [
		[
			'value' => 'Utama', 
			'label' => __('utama'), 
		],
		[
			'value' => 'Pendukung', 
			'label' => __('pendukung'), 
		],] ;
	}
	
	}
