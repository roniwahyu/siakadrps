<!-- 
expose component model to current view
e.g $arrDataFromDb = $comp_model->fetchData(); //function name
-->
@inject('comp_model', 'App\Models\ComponentsData')
<?php
    $field_name = request()->segment(3);
    $field_value = request()->segment(4);
    $total_records = $records->total();
    $limit = $records->perPage();
    $record_count = count($records);
    $pageTitle = __('akadKurikulum'); //set dynamic page title
?>
@extends($layout)
@section('title', $pageTitle)
@section('content')
<section class="page ajax-page" data-page-type="list" data-page-url="{{ url()->full() }}">
    <?php
        if( $show_header == true ){
    ?>
    <div  class="bg-light p-3 mb-3" >
        <div class="container-fluid">
            <div class="row justify-content-between align-items-center gap-3">
                <div class="col  " >
                    <div class="">
                        <div class="h5 font-weight-bold text-primary">{{ __('akadKurikulum') }}</div>
                    </div>
                </div>
                <div class="col-auto  " >
                    <a  class="btn btn-primary btn-block" href="<?php print_link("akadkurikulum/add", true) ?>" >
                    <i class="fa fa-plus"></i>                              
                    {{ __('addNewAkadKurikulum') }} 
                </a>
            </div>
            <div class="col-md-3  " >
                <!-- Page drop down search component -->
                <form  class="search" action="{{ url()->current() }}" method="get">
                    <input type="hidden" name="page" value="1" />
                    <div class="input-group">
                        <input value="<?php echo get_value('search'); ?>" class="form-control page-search" type="text" name="search"  placeholder="{{ __('search') }}" />
                        <button class="btn btn-primary"><i class="fa fa-search"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
    }
?>
<div  class="" >
    <div class="container-fluid">
        <div class="row ">
            <div class="col comp-grid " >
                <div  class=" page-content" >
                    <div id="akadkurikulum-list-records">
                        <div id="page-main-content" class="table-responsive">
                            <div class="ajax-page-load-indicator" style="display:none">
                                <div class="text-center d-flex justify-content-center load-indicator">
                                    <span class="loader mr-3"></span>
                                    <span class="fw-bold">{{ __('loading') }}</span>
                                </div>
                            </div>
                            <?php Html::page_bread_crumb("/akadkurikulum/", $field_name, $field_value); ?>
                            <?php Html::display_page_errors($errors); ?>
                            <div class="filter-tags mb-2">
                                <?php Html::filter_tag('search', __('Search')); ?>
                            </div>
                            <table class="table table-hover table-striped table-sm text-left">
                                <thead class="table-header ">
                                    <tr>
                                        <th class="td-checkbox">
                                        <label class="form-check-label">
                                        <input class="toggle-check-all form-check-input" type="checkbox" />
                                        </label>
                                        </th>
                                        <th class="td-id_siakad_kurikulum" > #</th>
                                        <th class="td-kode_kurikulum" > {{ __('kode') }}</th>
                                        <th class="td-nm_kurikulum" > {{ __('nama') }}</th>
                                        <th class="td-id_prodi" > {{ __('prodi') }}</th>
                                        <th class="td-nama_prodi" > {{ __('namaProdi') }}</th>
                                        <th class="td-isactive" > {{ __('aktif') }}</th>
                                        <th class="td-btn"></th>
                                    </tr>
                                </thead>
                                <?php
                                    if($total_records){
                                ?>
                                <tbody class="page-data">
                                    <!--record-->
                                    <?php
                                        $counter = 0;
                                        foreach($records as $data){
                                        $rec_id = ($data['id_siakad_kurikulum'] ? urlencode($data['id_siakad_kurikulum']) : null);
                                        $counter++;
                                    ?>
                                    <tr>
                                        <td class=" td-checkbox">
                                            <label class="form-check-label">
                                            <input class="optioncheck form-check-input" name="optioncheck[]" value="<?php echo $data['id_siakad_kurikulum'] ?>" type="checkbox" />
                                            </label>
                                        </td>
                                        <!--PageComponentStart-->
                                        <td class="td-id_siakad_kurikulum">
                                            <a href="<?php print_link("/akadkurikulum/view/$data[id_siakad_kurikulum]") ?>"><?php echo $data['id_siakad_kurikulum']; ?></a>
                                        </td>
                                        <td class="td-kode_kurikulum">
                                            <?php echo  $data['kode_kurikulum'] ; ?>
                                        </td>
                                        <td class="td-nm_kurikulum">
                                            <?php echo  $data['nm_kurikulum'] ; ?>
                                        </td>
                                        <td class="td-id_prodi">
                                            <a size="sm" class="btn btn-sm btn btn-secondary page-modal" href="<?php print_link("akadprodi/view/$data[id_prodi]?subpage=1") ?>">
                                            <i class="fa fa-eye"></i> <?php echo "Akad Prodi" ?>
                                        </a>
                                    </td>
                                 
                                    <td class="td-akadprodi_nama_prodi">
                                        <?php echo  $data['akadprodi_nama_prodi'] ; ?>
                                    </td>
                                    <td class="td-isactive">
                                        <?php //echo  $data['isactive'] ; ?>
                                        <?= ($data['isactive']=='Aktif')?'<span class="badge bg-danger">'.$data['isactive'].'</span>':'<span class="badge bg-secondary">'.$data['isactive'].'</span>'; ?>
                                    </td>
                                    <!--PageComponentEnd-->
                                    <td class="td-btn">
                                        <div class="dropdown" >
                                            <button data-bs-toggle="dropdown" class="dropdown-toggle btn text-primary btn-flat btn-sm">
                                            <i class="fa fa-bars"></i> 
                                            </button>
                                            <ul class="dropdown-menu">
                                                <a class="dropdown-item "   href="<?php print_link("akadkurikulum/view/$rec_id"); ?>" >
                                                <i class="fa fa-eye"></i> {{ __('view') }}
                                            </a>
                                            <a class="dropdown-item "   href="<?php print_link("akadkurikulum/edit/$rec_id"); ?>" >
                                            <i class="fa fa-edit"></i> {{ __('edit') }}
                                        </a>
                                        <a class="dropdown-item record-delete-btn" data-prompt-msg="{{ __('promptDeleteRecord') }}" data-display-style="modal" href="<?php print_link("akadkurikulum/delete/$rec_id"); ?>" >
                                        <i class="fa fa-times"></i> {{ __('delete') }}
                                    </a>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <?php 
                        }
                    ?>
                    <!--endrecord-->
                </tbody>
                <tbody class="search-data"></tbody>
                <?php
                    }
                    else{
                ?>
                <tbody class="page-data">
                    <tr>
                        <td class="bg-light text-center text-muted animated bounce p-3" colspan="1000">
                            <i class="fa fa-ban"></i> {{ __('noRecordFound') }}
                        </td>
                    </tr>
                </tbody>
                <?php
                    }
                ?>
            </table>
        </div>
        <?php
            if($show_footer){
        ?>
        <div class=" mt-3">
            <div class="row align-items-center justify-content-between">    
                <div class="col-md-auto d-flex">    
                    <button data-prompt-msg="{{ __('promptDeleteRecords') }}" data-display-style="modal" data-url="<?php print_link("akadkurikulum/delete/{sel_ids}"); ?>" class="btn btn-sm btn-danger btn-delete-selected d-none">
                    <i class="fa fa-times"></i> {{ __('deleteSelected') }}
                    </button>
                </div>
                <div class="col">   
                    <?php
                        if($show_pagination == true){
                        $pager = new Pagination($total_records, $record_count);
                        $pager->show_page_count = false;
                        $pager->show_record_count = true;
                        $pager->show_page_limit =false;
                        $pager->limit = $limit;
                        $pager->show_page_number_list = true;
                        $pager->pager_link_range=5;
                        $pager->ajax_page = true;
                        $pager->render();
                        }
                    ?>
                </div>
            </div>
        </div>
        <?php
            }
        ?>
    </div>
</div>
</div>
</div>
</div>
</div>
</section>


@endsection
