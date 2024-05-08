<!-- 
expose component model to current view
e.g $arrDataFromDb = $comp_model->fetchData(); //function name
-->
@inject('comp_model', 'App\Models\ComponentsData')
<?php
    $pageTitle = __('addNewAkadPt'); //set dynamic page title
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
                        <div class="h5 font-weight-bold text-primary">{{ __('addNewAkadPt') }}</div>
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
                        <form id="akadpt-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-horizontal needs-validation" action="{{ route('akadpt.store') }}" method="post">
                            @csrf
                            <div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="kode_pt">{{ __('kodePt') }} <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-kode_pt-holder" class=" ">
                                                <input id="ctrl-kode_pt" data-field="kode_pt"  value="<?php echo get_value('kode_pt') ?>" type="text" placeholder="{{ __('enterKodePt') }}"  required="" name="kode_pt"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="nm_pt">{{ __('nmPt') }} <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-nm_pt-holder" class=" ">
                                                <input id="ctrl-nm_pt" data-field="nm_pt"  value="<?php echo get_value('nm_pt') ?>" type="text" placeholder="{{ __('enterNmPt') }}"  required="" name="nm_pt"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="tgl_pt">{{ __('tglPt') }} <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-tgl_pt-holder" class="input-group ">
                                                <input id="ctrl-tgl_pt" data-field="tgl_pt" class="form-control datepicker  datepicker"  required="" value="<?php echo get_value('tgl_pt') ?>" type="datetime" name="tgl_pt" placeholder="{{ __('enterTglPt') }}" data-enable-time="false" data-min-date="" data-max-date="" data-date-format="Y-m-d" data-alt-format="F j, Y" data-inline="false" data-no-calendar="false" data-mode="single" />
                                                <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="sk_pt">{{ __('skPt') }} <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-sk_pt-holder" class=" ">
                                                <input id="ctrl-sk_pt" data-field="sk_pt"  value="<?php echo get_value('sk_pt') ?>" type="text" placeholder="{{ __('enterSkPt') }}"  required="" name="sk_pt"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="tgl_sk_pt">{{ __('tglSkPt') }} <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-tgl_sk_pt-holder" class="input-group ">
                                                <input id="ctrl-tgl_sk_pt" data-field="tgl_sk_pt" class="form-control datepicker  datepicker"  required="" value="<?php echo get_value('tgl_sk_pt') ?>" type="datetime" name="tgl_sk_pt" placeholder="{{ __('enterTglSkPt') }}" data-enable-time="false" data-min-date="" data-max-date="" data-date-format="Y-m-d" data-alt-format="F j, Y" data-inline="false" data-no-calendar="false" data-mode="single" />
                                                <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="almt_pt">{{ __('almtPt') }} <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-almt_pt-holder" class=" ">
                                                <input id="ctrl-almt_pt" data-field="almt_pt"  value="<?php echo get_value('almt_pt') ?>" type="text" placeholder="{{ __('enterAlmtPt') }}"  required="" name="almt_pt"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="kota_pt">{{ __('kotaPt') }} <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-kota_pt-holder" class=" ">
                                                <input id="ctrl-kota_pt" data-field="kota_pt"  value="<?php echo get_value('kota_pt') ?>" type="text" placeholder="{{ __('enterKotaPt') }}"  required="" name="kota_pt"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="kodepos_pt">{{ __('kodeposPt') }} <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-kodepos_pt-holder" class=" ">
                                                <input id="ctrl-kodepos_pt" data-field="kodepos_pt"  value="<?php echo get_value('kodepos_pt') ?>" type="text" placeholder="{{ __('enterKodeposPt') }}"  required="" name="kodepos_pt"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="telp_pt">{{ __('telpPt') }} <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-telp_pt-holder" class=" ">
                                                <input id="ctrl-telp_pt" data-field="telp_pt"  value="<?php echo get_value('telp_pt') ?>" type="text" placeholder="{{ __('enterTelpPt') }}"  required="" name="telp_pt"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="fax_pt">{{ __('faxPt') }} <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-fax_pt-holder" class=" ">
                                                <input id="ctrl-fax_pt" data-field="fax_pt"  value="<?php echo get_value('fax_pt') ?>" type="text" placeholder="{{ __('enterFaxPt') }}"  required="" name="fax_pt"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="email_pt">{{ __('emailPt') }} <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-email_pt-holder" class=" ">
                                                <input id="ctrl-email_pt" data-field="email_pt"  value="<?php echo get_value('email_pt') ?>" type="email" placeholder="{{ __('enterEmailPt') }}"  required="" name="email_pt"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="web_pt">{{ __('webPt') }} <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-web_pt-holder" class=" ">
                                                <input id="ctrl-web_pt" data-field="web_pt"  value="<?php echo get_value('web_pt') ?>" type="text" placeholder="{{ __('enterWebPt') }}"  required="" name="web_pt"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="logo_pt">{{ __('logoPt') }} <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-logo_pt-holder" class=" ">
                                                <input id="ctrl-logo_pt" data-field="logo_pt"  value="<?php echo get_value('logo_pt') ?>" type="text" placeholder="{{ __('enterLogoPt') }}"  required="" name="logo_pt"  class="form-control " />
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
