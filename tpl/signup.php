<!DOCTYPE html>
<html lang="en">
<wb-var assets="/modules/yonger/tpl/assets" />
<wb-include wb-tpl="head.inc.php" />

<body class="bg-light">


    <wb-include wb-tpl="signhead.inc.php" />

    <div class="content content-fixed content-auth">
        <div class="container">
            <div class="ht-100p">

                <div class="row justify-content-center">
                    <div class="col-md-6 text-center">
                        <h1 class="display-4">Регистрация</h1>
                        <p class="lead">Давайте сначала зарегистрируемся на сайте.</p>
                    </div>
                </div>
                <div class="row  justify-content-center mt-5">
                    <div class="col-md-6">
                        <form class="tx-14" id="signup">
                            <fieldset class="form-fieldset signup-form">
                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" placeholder="Имя" name="first_name">
                                    </div>

                                    <div class="col-sm-6 mt-3 mt-sm-0">
                                        <input type="text" class="form-control" placeholder="Фамилия" name="last_name">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" placeholder="Номер телефона" name="phone" wb="module=mask" wb-mask="+7 (999) 999-99-99">
                                    </div>

                                    <div class="col-sm-6 mt-3 mt-sm-0">
                                        <input type="text" class="form-control" placeholder="Проверочный код" data-name="phone-confirm">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <input type="email" class="form-control" placeholder="Электронная почта" name="email" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Адрес профиля" name="login" wb-module="smartid" required autocomplete="off">
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-white">.{{_route.domain}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control" placeholder="Пароль" name="password" required>
                                    </div>
                                    <div class="col-sm-6 mt-3 mt-sm-0">
                                        <input type="password" class="form-control" placeholder="Пароль повторно" name="password-confirm" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="check" required>
                                            <label class="custom-control-label" for="check">Регистрируясь, вы даёте согласие на обработку
                                                <a href>Персональных данных</a> и принимаете
                                                <a href>Пользовательское соглашение</a>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-4">
                                    <a class="btn btn-secondary w-100" href="/signin">Войти</a>
                                    </div>
                                    <div class="col-sm-8">
                                    <a class="btn btn-primary w-100" href="javascript:wbapp.auth('#signup','signup');">Зарегистрироваться</a>
                                    </div>
                                </div>
                            </fieldset>
                            <div class="signup-error alert alert-danger text-center mt-3 d-none">
                                Не удалось выполнить регистрацию пользователя.<br>Возможно, такой пользователь уже существует.
                            </div>
                            <div class="signup-success alert alert-success text-center mt-3 d-none">
                                <p>Вы успешно зарегистрировались и можете войти в систему.</p>
                                <a class="btn btn-primary w-50" href="/signin">Войти</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- media -->
        </div>
        <!-- container -->
    </div>
    <!-- content -->

    <footer class="footer">
        <div>
            <span>&copy; 2021 Yonger v1.0.0. </span>
            <span>Created by
                <a href="{{_route.host}}">{{_sett.header}}</a>
            </span>
        </div>
        <div>
            <nav class="nav">
                <a href="https://themeforest.net/licenses/standard" class="nav-link">Licenses</a>
                <a href="../../change-log.html" class="nav-link">Change Log</a>
                <a href="https://discordapp.com/invite/RYqkVuw" class="nav-link">Get Help</a>
            </nav>
        </div>
    </footer>

    <wb-include wb-snippet="wbapp" />
    <wb-include wb-snippet="lineawesome" />
    <wb-include wb-tpl="scripts.inc.php" />
</body>

</html>