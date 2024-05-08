<!-- 
expose component model to current view
e.g $arrDataFromDb = $comp_model->fetchData(); //function name
-->
@inject('comp_model', 'App\Models\ComponentsData')
<?php
    $pageTitle = __('addNewAudit'); //set dynamic page title
?>
@extends($layout)
@section('title', $pageTitle)
@section('content')
<section class="page" data-page-type="add" data-page-url="{{ url()->full() }}">
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
                        <div class="h5 font-weight-bold text-primary">{{ __('addNewAudit') }}</div>
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
                <div class="col-md-9 comp-grid " >
                    <div  class="card card-1 border rounded page-content" >
                        <!--[form-start]-->
                        <form id="audits-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-horizontal needs-validation" action="{{ route('audits.store') }}" method="post">
                            @csrf
                            <div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="user_type">{{ __('userType') }} </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-user_type-holder" class=" ">
                                                <input id="ctrl-user_type" data-field="user_type"  value="<?php echo get_value('user_type') ?>" type="text" placeholder="{{ __('enterUserType') }}"  name="user_type"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="user_id">{{ __('userId') }} </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-user_id-holder" class=" ">
                                                <input id="ctrl-user_id" data-field="user_id"  value="<?php echo get_value('user_id') ?>" type="number" placeholder="{{ __('enterUserId') }}" step="any"  name="user_id"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="event">{{ __('event') }} <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-event-holder" class=" ">
                                                <input id="ctrl-event" data-field="event"  value="<?php echo get_value('event') ?>" type="text" placeholder="{{ __('enterEvent') }}"  required="" name="event"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="auditable_type">{{ __('auditableType') }} <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-auditable_type-holder" class=" ">
                                                <input id="ctrl-auditable_type" data-field="auditable_type"  value="<?php echo get_value('auditable_type') ?>" type="text" placeholder="{{ __('enterAuditableType') }}"  required="" name="auditable_type"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="auditable_id">{{ __('auditableId') }} <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-auditable_id-holder" class=" ">
                                                <input id="ctrl-auditable_id" data-field="auditable_id"  value="<?php echo get_value('auditable_id') ?>" type="number" placeholder="{{ __('enterAuditableId') }}" step="any"  required="" name="auditable_id"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="old_values">{{ __('oldValues') }} </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-old_values-holder" class=" ">
                                                <textarea placeholder="{{ __('enterOldValues') }}" id="ctrl-old_values" data-field="old_values"  rows="5" name="old_values" class=" form-control"><?php echo get_value('old_values') ?></textarea>
                                                <!--<div class="invalid-feedback animated bounceIn text-center">{{ __('pleaseEnterText') }}</div>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="new_values">{{ __('newValues') }} </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-new_values-holder" class=" ">
                                                <textarea placeholder="{{ __('enterNewValues') }}" id="ctrl-new_values" data-field="new_values"  rows="5" name="new_values" class=" form-control"><?php echo get_value('new_values') ?></textarea>
                                                <!--<div class="invalid-feedback animated bounceIn text-center">{{ __('pleaseEnterText') }}</div>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="url">{{ __('url') }} </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-url-holder" class=" ">
                                                <textarea placeholder="{{ __('enterUrl') }}" id="ctrl-url" data-field="url"  rows="5" name="url" class=" form-control"><?php echo get_value('url') ?></textarea>
                                                <!--<div class="invalid-feedback animated bounceIn text-center">{{ __('pleaseEnterText') }}</div>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="ip_address">{{ __('ipAddress') }} </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-ip_address-holder" class=" ">
                                                <input id="ctrl-ip_address" data-field="ip_address"  value="<?php echo get_value('ip_address') ?>" type="text" placeholder="{{ __('enterIpAddress') }}"  name="ip_address"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="user_agent">{{ __('userAgent') }} </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-user_agent-holder" class=" ">
                                                <input id="ctrl-user_agent" data-field="user_agent"  value="<?php echo get_value('user_agent') ?>" type="text" placeholder="{{ __('enterUserAgent') }}"  name="user_agent"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="tags">{{ __('tags') }} </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-tags-holder" class=" ">
                                                <input id="ctrl-tags" data-field="tags"  value="<?php echo get_value('tags') ?>" type="text" placeholder="{{ __('enterTags') }}"  name="tags"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-ajax-status"></div>
                            <!--[form-button-start]-->
                            <div class="form-group form-submit-btn-holder text-center mt-3">
                                <button class="btn btn-primary" type="submit">
                                {{ __('submit') }}
                                <i class="fa fa-send"></i>
                                </button>
                            </div>
                            <!--[form-button-end]-->
                        </form>
                        <!--[form-end]-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
