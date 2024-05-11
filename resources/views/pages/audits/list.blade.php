<!-- 
expose component model to current view
e.g $arrDataFromDb = $comp_model->fetchData(); //function name
-->
@inject('comp_model', 'App\Models\ComponentsData')
<?php
    //check if current user role is allowed access to the pages
    $can_add = $user->canAccess("audits/add");
    $can_edit = $user->canAccess("audits/edit");
    $can_view = $user->canAccess("audits/view");
    $can_delete = $user->canAccess("audits/delete");
    $field_name = request()->segment(3);
    $field_value = request()->segment(4);
    $total_records = $records->total();
    $limit = $records->perPage();
    $record_count = count($records);
    $pageTitle = __('audits'); //set dynamic page title
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
                        <div class="h5 font-weight-bold text-primary">{{ __('audits') }}</div>
                    </div>
                </div>
                <div class="col-auto  " >
                    <a  class="btn " href="<?php print_link("audits/add") ?>" >
                    <i class="fa fa-plus"></i>                              
                    {{ __('addNewAudit') }} 
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
                    <div id="audits-list-records">
                        <div id="page-main-content" class="table-responsive">
                            <div class="ajax-page-load-indicator" style="display:none">
                                <div class="text-center d-flex justify-content-center load-indicator">
                                    <span class="loader mr-3"></span>
                                    <span class="fw-bold">{{ __('loading') }}</span>
                                </div>
                            </div>
                            <?php Html::page_bread_crumb("/audits/", $field_name, $field_value); ?>
                            <?php Html::display_page_errors($errors); ?>
                            <div class="filter-tags mb-2">
                                <?php Html::filter_tag('search', __('Search')); ?>
                            </div>
                            <table class="table table-hover table-striped table-sm text-left">
                                <thead class="table-header ">
                                    <tr>
                                        <th class="td-id" > {{ __('id') }}</th>
                                        <th class="td-user_type" > {{ __('userType') }}</th>
                                        <th class="td-user_id" > {{ __('userId') }}</th>
                                        <th class="td-event" > {{ __('event') }}</th>
                                        <th class="td-auditable_type" > {{ __('auditableType') }}</th>
                                        <th class="td-auditable_id" > {{ __('auditableId') }}</th>
                                        <th class="td-old_values" > {{ __('oldValues') }}</th>
                                        <th class="td-new_values" > {{ __('newValues') }}</th>
                                        <th class="td-url" > {{ __('url') }}</th>
                                        <th class="td-ip_address" > {{ __('ipAddress') }}</th>
                                        <th class="td-user_agent" > {{ __('userAgent') }}</th>
                                        <th class="td-tags" > {{ __('tags') }}</th>
                                        <th class="td-created_at" > {{ __('createdAt') }}</th>
                                        <th class="td-updated_at" > {{ __('updatedAt') }}</th>
                                        <th class="td-date_created" > {{ __('dateCreated') }}</th>
                                        <th class="td-date_updated" > {{ __('dateUpdated') }}</th>
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
                                        $rec_id = ($data['id'] ? urlencode($data['id']) : null);
                                        $counter++;
                                    ?>
                                    <tr>
                                        <!--PageComponentStart-->
                                        <td class="td-id">
                                            <a href="<?php print_link("/audits/view/$data[id]") ?>"><?php echo $data['id']; ?></a>
                                        </td>
                                        <td class="td-user_type">
                                            <?php echo  $data['user_type'] ; ?>
                                        </td>
                                        <td class="td-user_id">
                                            <?php echo  $data['user_id'] ; ?>
                                        </td>
                                        <td class="td-event">
                                            <?php echo  $data['event'] ; ?>
                                        </td>
                                        <td class="td-auditable_type">
                                            <?php echo  $data['auditable_type'] ; ?>
                                        </td>
                                        <td class="td-auditable_id">
                                            <?php echo  $data['auditable_id'] ; ?>
                                        </td>
                                        <td class="td-old_values">
                                            <?php echo  $data['old_values'] ; ?>
                                        </td>
                                        <td class="td-new_values">
                                            <?php echo  $data['new_values'] ; ?>
                                        </td>
                                        <td class="td-url">
                                            <?php echo  $data['url'] ; ?>
                                        </td>
                                        <td class="td-ip_address">
                                            <?php echo  $data['ip_address'] ; ?>
                                        </td>
                                        <td class="td-user_agent">
                                            <?php echo  $data['user_agent'] ; ?>
                                        </td>
                                        <td class="td-tags">
                                            <?php echo  $data['tags'] ; ?>
                                        </td>
                                        <td class="td-created_at">
                                            <?php echo  $data['created_at'] ; ?>
                                        </td>
                                        <td class="td-updated_at">
                                            <?php echo  $data['updated_at'] ; ?>
                                        </td>
                                        <td class="td-date_created">
                                            <?php echo  $data['date_created'] ; ?>
                                        </td>
                                        <td class="td-date_updated">
                                            <?php echo  $data['date_updated'] ; ?>
                                        </td>
                                        <!--PageComponentEnd-->
                                        <td class="td-btn">
                                            <div class="dropdown" >
                                                <button data-bs-toggle="dropdown" class="dropdown-toggle btn text-primary btn-flat btn-sm">
                                                <i class="fa fa-bars"></i> 
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <?php if($can_view){ ?>
                                                    <a class="dropdown-item "   href="<?php print_link("audits/view/$rec_id"); ?>" >
                                                    <i class="fa fa-eye"></i> {{ __('view') }}
                                                </a>
                                                <?php } ?>
                                                <a class="dropdown-item "   href="<?php print_link("audits/edit/$rec_id"); ?>" >
                                                <i class="fa fa-edit"></i> {{ __('edit') }}
                                            </a>
                                            <a class="dropdown-item "   href="<?php print_link("audits/delete/$rec_id"); ?>" >
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
                        <?php if($can_delete){ ?>
                        <button data-prompt-msg="{{ __('promptDeleteRecords') }}" data-display-style="modal" data-url="<?php print_link("audits/delete/{sel_ids}"); ?>" class="btn btn-sm btn-danger btn-delete-selected d-none">
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
