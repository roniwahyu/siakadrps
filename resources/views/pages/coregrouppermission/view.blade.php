<!-- 
expose component model to current view
e.g $arrDataFromDb = $comp_model->fetchData(); //function name
-->
@inject('comp_model', 'App\Models\ComponentsData')
<?php
    //check if current user role is allowed access to the pages
    $can_add = $user->canAccess("coregrouppermission/add");
    $can_edit = $user->canAccess("coregrouppermission/edit");
    $can_view = $user->canAccess("coregrouppermission/view");
    $can_delete = $user->canAccess("coregrouppermission/delete");
    $pageTitle = __('coreGroupPermissionDetails'); //set dynamic page title
?>
@extends($layout)
@section('title', $pageTitle)
@section('content')
<section class="page ajax-page" data-page-type="view" data-page-url="{{ url()->full() }}">
    <?php
        if( $show_header == true ){
    ?>
    <div  class="bg-light p-3 mb-3" >
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-auto  back-btn-col" >
                    <a class="back-btn btn " href="{{ url()->previous() }}" >
                        <i class="fa fa-angle-left"></i>                                
                         
                    </a>
                </div>
                <div class="col  " >
                    <div class="">
                        <div class="h5 font-weight-bold text-primary">{{ __('coreGroupPermissionDetails') }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
        }
    ?>
    <div  class="" >
        <div class="container">
            <div class="row ">
                <div class="col comp-grid " >
                    <div  class=" page-content" >
                        <?php
                            if($data){
                            $rec_id = ($data['group_id'] ? urlencode($data['group_id']) : null);
                        ?>
                        <div id="page-main-content" class=" px-3 mb-3">
                            <div class="ajax-page-load-indicator" style="display:none">
                                <div class="text-center d-flex justify-content-center load-indicator">
                                    <span class="loader mr-3"></span>
                                    <span class="fw-bold">{{ __('loading') }}</span>
                                </div>
                            </div>
                            <div class="page-data">
                                <!--PageComponentStart-->
                                <div class="mb-3 row row justify-content-start g-0">
                                    <div class="col-12">
                                        <div class="bg-light mb-1 card-1 p-2 border rounded">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <small class="text-muted">{{ __('groupId') }}</small>
                                                    <div class="fw-bold">
                                                        <?php echo  $data['group_id'] ; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="bg-light mb-1 card-1 p-2 border rounded">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <small class="text-muted">{{ __('permissionId') }}</small>
                                                    <div class="fw-bold">
                                                        <?php echo  $data['permission_id'] ; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--PageComponentEnd-->
                                <div class="d-flex align-items-center gap-2">
                                    <?php if($can_edit){ ?>
                                    <a class="btn btn-sm btn-success has-tooltip "   title="{{ __('edit') }}" href="<?php print_link("coregrouppermission/edit/$rec_id"); ?>" >
                                    <i class="fa fa-edit"></i> {{ __('edit') }}
                                </a>
                                <?php } ?>
                                <?php if($can_delete){ ?>
                                <a class="btn btn-sm btn-danger has-tooltip record-delete-btn" data-prompt-msg="{{ __('promptDeleteRecord') }}" data-display-style="modal" title="{{ __('delete') }}" href="<?php print_link("coregrouppermission/delete/$rec_id?redirect=coregrouppermission"); ?>" >
                                <i class="fa fa-times"></i> {{ __('delete') }}
                            </a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <?php
                    }
                    else{
                ?>
                <!-- Empty Record Message -->
                <div class="text-muted p-3">
                    <i class="fa fa-ban"></i> {{ __('noRecordFound') }}
                </div>
                <?php
                    }
                ?>
            </div>
        </div>
    </div>
</div>
</div>
</section>


@endsection
