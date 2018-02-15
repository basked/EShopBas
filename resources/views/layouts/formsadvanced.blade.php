@extends('layouts.layout')
@section('content')
    <div class="page-content">
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
            <div class="container-fluid">
                <h2 class="h5 no-margin-bottom">Advanced forms</h2>
            </div>
        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Advanced forms</li>
            </ul>
        </div>
        <section class="no-padding-top">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <!-- No UI Slider-->
                        <div class="block">
                            <div class="title"><strong class="d-block">No UI Slider</strong><span class="d-block">Read more about this component at <a
                                            href="https://refreshless.com/nouislider/">https://refreshless.com/nouislider/</a>.</span>
                            </div>
                            <div class="block-body">
                                <form>
                                    <div class="nouislider">
                                        <div id="basicNoUISlider"></div>
                                    </div>
                                    <div class="nouislider mt-5">
                                        <div id="stepNoUISlider"></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Bootstrap Select-->
                        <div class="block">
                            <div class="title"><strong class="d-block">Bootstrap Select</strong><span class="d-block">Read more about Bootstrap Select at <a
                                            href="https://silviomoreto.github.io/bootstrap-select/">https://silviomoreto.github.io/bootstrap-select/</a>.</span>
                            </div>
                            <div class="block-body">
                                <form class="form-horizontal">
                                    <div class="form-group row">
                                        <label class="col-sm-3 form-control-label">Variant 1</label>
                                        <div class="col-sm-9">
                                            <select data-style="btn-primary" class="selectpicker">
                                                <option>Mustard</option>
                                                <option>Ketchup</option>
                                                <option>Relish</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 form-control-label">Variant 2 - Secondary</label>
                                        <div class="col-sm-9">
                                            <select data-style="btn-secondary" class="selectpicker">
                                                <option>Mustard</option>
                                                <option>Ketchup</option>
                                                <option>Relish</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 form-control-label">Variant 3 - Light</label>
                                        <div class="col-sm-9">
                                            <select data-style="btn-outline-light" title="Choose one of the following"
                                                    class="selectpicker">
                                                <option>Mustard</option>
                                                <option>Ketchup</option>
                                                <option>Relish</option>
                                            </select>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- jQuery Multiselect-->
                        <div class="block">
                            <div class="title"><strong class="d-block">jQuery Multiselect</strong><span class="d-block">jQuery Multiselect is a user-friendlier drop-in replacement for the standard <code>&lt;select&gt;</code> with multiple attribute activated. Read more about jQuery Multiselect at <a
                                            href="http://loudev.com/">http://loudev.com/</a>.</span></div>
                            <div class="block-body">
                                <form>
                                    <div class="form-group">
                                        <label class="form-control-label">Multiselect - simple with pre-selected
                                            values</label>
                                        <select id="multiselect1" multiple="multiple" name="multiselect1[]">
                                            <option value="Baker" selected>Baker</option>
                                            <option value="Independence">Independence</option>
                                            <option value="Emerald">Emerald</option>
                                            <option value="Beyerville">Beyerville</option>
                                            <option value="Vallonia">Vallonia</option>
                                            <option value="Weogufka" selected>Weogufka</option>
                                            <option value="Catherine">Catherine</option>
                                            <option value="Healy">Healy</option>
                                            <option value="Coalmont">Coalmont</option>
                                            <option value="Glenville">Glenville</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- Datepickers-->
                        <div class="block">
                            <div class="title"><strong class="d-block">Datepicker</strong><span class="d-block">Read more about Bootstrap Datepicker at <a
                                            href="https://github.com/uxsolutions/bootstrap-datepicker">https://github.com/uxsolutions/bootstrap-datepicker</a>.</span>
                            </div>
                            <div class="block-body">
                                <form>
                                    <div class="form-group">
                                        <label class="form-control-label">Variant 1 - Date</label>
                                        <input type="text" value="10/20/2017" class="form-control input-datepicker">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label">Variant 2 - Autoclose</label>
                                        <input type="text" value="06/22/1980"
                                               class="form-control input-datepicker-autoclose">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label">Variant 3 - Multiple dates</label>
                                        <input type="text" class="form-control input-datepicker-multiple">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Bootstrap Touchspin-->
                        <div class="block">
                            <div class="title"><strong class="d-block">Bootstrap Touchspin</strong><span
                                        class="d-block">Read more about Touchspin at <a
                                            href="https://www.virtuosoft.eu/code/bootstrap-touchspin/">https://www.virtuosoft.eu/code/bootstrap-touchspin/</a>.</span>
                            </div>
                            <div class="block-body">
                                <form class="form-horizontal">
                                    <div class="form-group row">
                                        <label class="col-sm-3 form-control-label">Variant 1</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="touchspin0" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 form-control-label">Variant 2</label>
                                        <div class="col-sm-9">
                                            <input type="text" value="55.50" name="touchspin1" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 form-control-label">Variant 3</label>
                                        <div class="col-sm-9">
                                            <input type="text" value="1500" name="touchspin2" class="form-control">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Bootstrap Tags Input-->
                        <div class="block">
                            <div class="title"><strong class="d-block">Bootstrap Tags Input</strong><span
                                        class="d-block">Read more about Tags Input at <a
                                            href="https://bootstrap-tagsinput.github.io/bootstrap-tagsinput/examples/">https://bootstrap-tagsinput.github.io/bootstrap-tagsinput/examples/</a>.</span>
                            </div>
                            <div class="block-body">
                                <form>
                                    <div class="form-group">
                                        <label class="form-control-label">Variant 1 - As an
                                            <code>&lt;input&gt;</code></label>
                                        <input type="text" value="Amsterdam,Washington,Sydney" data-role="tagsinput"
                                               placeholder="Add tags">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label">Variant 2 - As a
                                            <code>&lt;select&gt;</code></label>
                                        <select multiple="" data-role="tagsinput">
                                            <option value="Amsterdam">Amsterdam</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Bootstrap Input Masks-->
                <div class="block">
                    <div class="title"><strong class="d-block">Bootstrap Input Masks</strong></div>
                    <div class="block-body">
                        <p>Input masks can be used to force the user to enter data conform a specific format. Unlike
                            validation, the user can't enter any other key than the ones specified by the mask.</p>
                        <p class="mb-4">Read more about Bootstrap Input Masks at <a
                                    href="http://www.jasny.net/bootstrap/javascript/">http://www.jasny.net/bootstrap/javascript/</a>.
                        </p>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>ISBN 1</label>
                                    <input type="text" placeholder="" data-mask="999-99-999-9999-9"
                                           class="form-control">
                                    <small class="help-block-none">e.g &quot;999-99-999-9999-9&quot;</small>
                                </div>
                                <div class="form-group">
                                    <label>ISBN 2</label>
                                    <input type="text" placeholder="" data-mask="999 99 999 9999 9"
                                           class="form-control">
                                    <small class="help-block-none">999 99 999 9999 9</small>
                                </div>
                                <div class="form-group">
                                    <label>ISBN 3</label>
                                    <input type="text" placeholder="" data-mask="999/99/999/9999/9"
                                           class="form-control">
                                    <small class="help-block-none">999/99/999/9999/9</small>
                                </div>
                                <div class="form-group">
                                    <label>IPV4</label>
                                    <input type="text" placeholder="" data-mask="999.999.999.9999" class="form-control">
                                    <small class="help-block-none">192.168.110.310</small>
                                </div>
                                <div class="form-group">
                                    <label>IPV6</label>
                                    <input type="text" placeholder="" data-mask="wwww:wwww:wwww:w:www:wwww:wwww:wwww"
                                           class="form-control">
                                    <small class="help-block-none">4deg:1340:6547:2:540:h8je:ve73:98pd</small>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Tax ID</label>
                                    <input type="text" placeholder="" data-mask="99-9999999" class="form-control"><span
                                            class="font-13 text-muted">99-9999999</span>
                                </div>
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="text" placeholder="" data-mask="(999) 999-9999"
                                           class="form-control"><span class="font-13 text-muted">(999) 999-9999</span>
                                </div>
                                <div class="form-group">
                                    <label>Currency</label>
                                    <input type="text" placeholder="" data-mask="$ 999,999,999.99" class="form-control"><span
                                            class="font-13 text-muted">$ 999,999,999.99</span>
                                </div>
                                <div class="form-group">
                                    <label>Date</label>
                                    <input type="text" placeholder="" data-mask="99/99/9999" class="form-control"><span
                                            class="font-13 text-muted">dd/mm/yyyy</span>
                                </div>
                                <div class="form-group m-b-0">
                                    <label>Date 2</label>
                                    <input type="text" placeholder="" data-mask="99-99-9999" class="form-control"><span
                                            class="font-13 text-muted">dd-mm-yyyy </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection