<!-- 
expose component model to current view
e.g $arrDataFromDb = $comp_model->fetchData(); //function name
-->
@inject('comp_model', 'App\Models\ComponentsData')
<?php
    //check if current user role is allowed access to the pages
    $can_add = $user->canAccess("akadmksyarat/add");
    $can_edit = $user->canAccess("akadmksyarat/edit");
    $can_view = $user->canAccess("akadmksyarat/view");
    $can_delete = $user->canAccess("akadmksyarat/delete");
    $field_name = request()->segment(3);
    $field_value = request()->segment(4);
    $total_records = $records->total();
    $limit = $records->perPage();
    $record_count = count($records);
    $pageTitle = __('mkPrasyarat'); //set dynamic page title
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
                        <div class="h4 font-weight-bold text-primary">{{ __('mkPrasyarat') }}</div>
                    </div>
                </div>
                <div class="col-auto  " >
                    <?php if($can_add){ ?>
                    <a  class="btn btn-success btn-block" href="<?php print_link("akadmksyarat/add", true) ?>" >
                    <i class="fa fa-plus"></i>                              
                    {{ __('addNewPrasyarat') }} 
                </a>
                <?php } ?>
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
                    <div id="akadmksyarat-list-records">
                        <div id="page-main-content" class="table-responsive">
                            <div class="ajax-page-load-indicator" style="display:none">
                                <div class="text-center d-flex justify-content-center load-indicator">
                                    <span class="loader mr-3"></span>
                                    <span class="fw-bold">{{ __('loading') }}</span>
                                </div>
                            </div>
                            <?php Html::page_bread_crumb("/akadmksyarat/", $field_name, $field_value); ?>
                            <?php Html::display_page_errors($errors); ?>
                            <div class="filter-tags mb-2">
                                <?php Html::filter_tag('search', __('Search')); ?>
                            </div>
                            <table class="table table-hover table-striped table-sm text-left">
                                <thead class="table-header ">
                                    <tr>
                                        <?php if($can_delete){ ?>
                                        <th class="td-checkbox">
                                        <label class="form-check-label">
                                        <input class="toggle-check-all form-check-input" type="checkbox" />
                                        </label>
                                        </th>
                                        <?php } ?>
                                        <th class="td-id_siakad_mk_syarat" > {{ __('idSiakadMkSyarat') }}</th>
                                        <th class="td-id_prodi" > {{ __('idProdi') }}</th>
                                        <th class="td-kode_mk_main" > {{ __('kodeMkMain') }}</th>
                                        <th class="td-kode_mk_syarat" > {{ __('kodeMkSyarat') }}</th>
                                        <th class="td-nil_mk_syarat" > {{ __('nilMkSyarat') }}</th>
                                        <th class="td-nil_angka_mk_syarat" > {{ __('nilAngkaMkSyarat') }}</th>
                                        <th class="td-urut_syarat" > {{ __('urutSyarat') }}</th>
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
                                        $rec_id = ($data['id_siakad_mk_syarat'] ? urlencode($data['id_siakad_mk_syarat']) : null);
                                        $counter++;
                                    ?>
                                    <tr>
                                        <?php if($can_delete){ ?>
                                        <td class=" td-checkbox">
                                            <label class="form-check-label">
                                            <input class="optioncheck form-check-input" name="optioncheck[]" value="<?php echo $data['id_siakad_mk_syarat'] ?>" type="checkbox" />
                                            </label>
                                        </td>
                                        <?php } ?>
                                        <!--PageComponentStart-->
                                        <td class="td-id_siakad_mk_syarat">
                                            <a href="<?php print_link("/akadmksyarat/view/$data[id_siakad_mk_syarat]") ?>"><?php echo $data['id_siakad_mk_syarat']; ?></a>
                                        </td>
                                        <td class="td-id_prodi">
                                            <?php echo  $data['id_prodi'] ; ?>
                                        </td>
                                        <td class="td-kode_mk_main">
                                            <?php echo  $data['kode_mk_main'] ; ?>
                                        </td>
                                        <td class="td-kode_mk_syarat">
                                            <?php echo  $data['kode_mk_syarat'] ; ?>
                                        </td>
                                        <td class="td-nil_mk_syarat">
                                            <?php echo  $data['nil_mk_syarat'] ; ?>
                                        </td>
                                        <td class="td-nil_angka_mk_syarat">
                                            <?php echo  $data['nil_angka_mk_syarat'] ; ?>
                                        </td>
                                        <td class="td-urut_syarat">
                                            <?php echo  $data['urut_syarat'] ; ?>
                                        </td>
                                        <!--PageComponentEnd-->
                                        <td class="td-btn">
                                            <div class="dropdown" >
                                                <button data-bs-toggle="dropdown" class="dropdown-toggle btn text-primary btn-flat btn-sm">
                                                <i class="fa fa-bars"></i> 
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <?php if($can_view){ ?>
                                                    <a class="dropdown-item "   href="<?php print_link("akadmksyarat/view/$rec_id"); ?>" >
                                                    <i class="fa fa-eye"></i> {{ __('view') }}
                                                </a>
                                                <?php } ?>
                                                <?php if($can_edit){ ?>
                                                <a class="dropdown-item "   href="<?php print_link("akadmksyarat/edit/$rec_id"); ?>" >
                                                <i class="fa fa-edit"></i> {{ __('edit') }}
                                            </a>
                                            <?php } ?>
                                            <?php if($can_delete){ ?>
                                            <a class="dropdown-item record-delete-btn" data-prompt-msg="{{ __('promptDeleteRecord') }}" data-display-style="modal" href="<?php print_link("akadmksyarat/delete/$rec_id"); ?>" >
                                            <i class="fa fa-times"></i> {{ __('delete') }}
                                        </a>
                                        <?php } ?>
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
                        <?php if($can_delete){ ?>
                        <button data-prompt-msg="{{ __('promptDeleteRecords') }}" data-display-style="modal" data-url="<?php print_link("akadmksyarat/delete/{sel_ids}"); ?>" class="btn btn-sm btn-danger btn-delete-selected d-none">
                        <i class="fa fa-times"></i> {{ __('deleteSelected') }}
                        </button>
                        <?php } ?>
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
