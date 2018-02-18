
    <link href="{{ asset('css/dark-admin/css/font.css') }}" rel="stylesheet">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <link href="{{ asset('css/style.default.premium.css') }}" rel="stylesheet" id="theme-stylesheet">
    <link id="new-stylesheet" rel="stylesheet" href="{{ asset('css/style.default.premium.css') }}">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/dark-admin-premium/1-3-2/css/style.default.premium.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link href="{{ asset('css/dark-admin/css/custom.css') }}" rel="stylesheet">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

<div class="login-page">
    <div class="container d-flex align-items-center">
        <div class="form-holder has-shadow">
            <div class="row">
                <!-- Logo & Information Panel-->
                <div class="col-lg-6">
                    <div class="info d-flex align-items-center">
                        <div class="content">
                            <div class="logo">
                                <h1>Dashboard</h1>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>
                <!-- Form Panel    -->
                <div class="col-lg-6 bg-white">
                    <div class="form d-flex align-items-center">
                        <div class="content">
                            <form id="register-form">
                                <div class="form-group">
                                    <input id="register-username" type="text" name="registerUsername" required class="input-material">
                                    <label for="register-username" class="label-material">User Name</label>
                                </div>
                                <div class="form-group">
                                    <input id="register-email" type="email" name="registerEmail" required class="input-material">
                                    <label for="register-email" class="label-material">Email Address      </label>
                                </div>
                                <div class="form-group">
                                    <input id="register-passowrd" type="password" name="registerPassword" required class="input-material">
                                    <label for="register-passowrd" class="label-material">password        </label>
                                </div>
                                <div class="form-group terms-conditions">
                                    <input id="license" type="checkbox" class="checkbox-template">
                                    <label for="license" class="no-margin-bottom">Agree the terms and policy</label>
                                </div>
                                <input id="register" type="submit" value="Register" class="btn btn-primary">
                            </form><small>Already have an account? </small><a href="login.html" class="signup">Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyrights text-center">
        <p>Design by <a href="https://bootstrapious.com" class="external">Bootstrapious</a></p>
        <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
    </div>
</div>
<button type="button" data-toggle="collapse" data-target="#style-switch" id="style-switch-button" class="btn btn-primary btn-sm d-none d-md-inline-block"><i class="fa fa-cog fa-2x"></i></button>
<div id="style-switch" class="collapse">
    <h5 class="mb-3">Select theme colour</h5>
    <form class="mb-3">
        <select name="colour" id="colour" class="form-control">
            <option value="">select colour variant</option>
            <option value="default.premium">pink</option>
            <option value="red.premium">red</option>
            <option value="green.premium">green</option>
            <option value="violet.premium">violet</option>
            <option value="sea.premium">sea</option>
            <option value="blue.premium">blue</option>
        </select>
    </form>
    <p><img src="https://d19m59y37dris4.cloudfront.net/dark-admin-premium/1-3-2/img/template-mac.png" alt="" class="img-fluid"></p>
    <p class="text-muted text-small">Stylesheet switching is done via JavaScript and can cause a blink while page loads. This will not happen in your production code.</p>
</div>

