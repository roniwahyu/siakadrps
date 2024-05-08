<!-- 
expose component model to current view
e.g $arrDataFromDb = $comp_model->fetchData(); //function name
-->
@inject('comp_model', 'App\Models\ComponentsData')
<?php
    $pageTitle = __('addNewCoreUser'); //set dynamic page title
?>
@extends($layout)
@section('title', $pageTitle)
@section('content')
<section class="page" data-page-type="add" data-page-url="{{ url()->full() }}">
    <?php
        if( $show_header == true ){
    ?>
    <div  class="bg-light p-3 mb-3 mb-3" >
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-auto  back-btn-col" >
                    <a class="back-btn btn " href="{{ url()->previous() }}" >
                        <i class="fa fa-angle-left"></i>                                
                        {{ __('') }} 
                    </a>
                </div>
                <div class="col  " >
                    <div class="">
                        <div class="h5 font-weight-bold text-primary">{{ __('userRegistration') }}</div>
                    </div>
                </div>
                <div class="col-md-auto comp-grid " >
                    <div class=" ">
                        {{ __('alreadyHaveAnAccount') }}  <a class="btn btn-primary" href="<?php print_link('') ?>"> {{ __('login') }}</a>
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
                        <form id="coreusers-userregister-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-horizontal needs-validation" action="{{ route('auth.register_store') }}" method="post">
                            <!--[form-content-start]-->
                            @csrf
                            <div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="username">{{ __('username') }} <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-username-holder" class=" ">
                                                <input id="ctrl-username" data-field="username"  value="<?php echo get_value('username') ?>" type="text" placeholder="{{ __('enterUsername') }}"  required="" name="username"  data-url="componentsdata/coreusers_username_value_exist/" data-loading-msg="{{ __('checkingAvailability') }}" data-available-msg="{{ __('available') }}" data-unavailable-msg="{{ __('notAvailable') }}" class="form-control  ctrl-check-duplicate" />
                                                <div class="check-status"></div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="password">{{ __('password') }} <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-password-holder" class="input-group ">
                                                <input id="ctrl-password" data-field="password"  value="<?php echo get_value('password') ?>" type="password" placeholder="{{ __('enterPassword') }}"  required="" name="password"  class="form-control  password password-strength" />
                                                <button type="button" class="btn btn-outline-secondary btn-toggle-password">
                                                <i class="fa fa-eye"></i>
                                                </button>
                                            </div>
                                            <div class="password-strength-msg">
                                                <small class="fw-bold">{{ __('shouldContain') }}</small>
                                                <small class="length chip">6 {{ __('charactersMinimum') }}</small>
                                                <small class="caps chip">{{ __('capitalLetter') }}</small>
                                                <small class="number chip">{{ __('number') }}</small>
                                                <small class="special chip">{{ __('symbol') }}</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="confirm_password">{{ __('confirmPassword') }} <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-confirm_password-holder" class="input-group ">
                                                <input id="ctrl-password-confirm" data-match="#ctrl-password"  class="form-control password-confirm " type="password" name="confirm_password" required placeholder="{{ __('confirmPassword') }}" />
                                                <button type="button" class="btn btn-outline-secondary btn-toggle-password">
                                                <i class="fa fa-eye"></i>
                                                </button>
                                                <div class="invalid-feedback">
                                                    Password does not match
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="email">{{ __('email') }} <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-email-holder" class=" ">
                                                <input id="ctrl-email" data-field="email"  value="<?php echo get_value('email') ?>" type="email" placeholder="{{ __('enterEmail') }}"  required="" name="email"  data-url="componentsdata/coreusers_email_value_exist/" data-loading-msg="{{ __('checkingAvailability') }}" data-available-msg="{{ __('available') }}" data-unavailable-msg="{{ __('notAvailable') }}" class="form-control  ctrl-check-duplicate" />
                                                <div class="check-status"></div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="phone">{{ __('phone') }} </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-phone-holder" class=" ">
                                                <input id="ctrl-phone" data-field="phone"  value="<?php echo get_value('phone') ?>" type="text" placeholder="{{ __('enterPhone') }}"  name="phone"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="picture">{{ __('picture') }} </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-picture-holder" class=" ">
                                                <div class="dropzone " input="#ctrl-picture" fieldname="picture" uploadurl="{{ url('fileuploader/upload/picture') }}"    data-multiple="false" dropmsg="{{ __('chooseFilesOrDropFilesHere') }}"    btntext="{{ __('browse') }}" extensions=".jpg,.png,.gif,.jpeg" filesize="3" maximum="1">
                                                    <input name="picture" id="ctrl-picture" data-field="picture" class="dropzone-input form-control" value="<?php echo get_value('picture') ?>" type="text"  />
                                                    <!--<div class="invalid-feedback animated bounceIn text-center">{{ __('pleaseAChooseFile') }}</div>-->
                                                    <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-ajax-status"></div>
                            <!--[form-content-end]-->
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
<!-- Page custom js --><script><!--pageautofill--><!--custom page js--><!--pagejs--></script>
<!-- Page custom css --><style><!--custom page css--><!--pagecss--></style>
@endsection
