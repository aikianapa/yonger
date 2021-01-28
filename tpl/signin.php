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
                        <h1 class="display-4">Войти</h1>
                        <p class="lead">Войдите в систему, или
                            <a href="/signup">зарегистрируйтесь</a>.</p>
                    </div>
                </div>
                <div class="row  justify-content-center mt-5">
                    <div class="col-md-6">
                        <form class="tx-14" id="signin">
                            <fieldset class="form-fieldset">
                                <div class="form-group row">
                                    <div class="col-12">
                                        <input type="text" class="form-control" placeholder="Ваш Email/логин" name="login">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-12">
                                        <input type="password" class="form-control" placeholder="Пароль" name="password">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="check">
                                            <label class="custom-control-label" for="check">Запомнить меня</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 text-right">
                                        <a href="/signrc">Забыли пароль?</a>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <a class="btn btn-primary w-100" href="javascript:wbapp.auth('#signin', 'signin');">Войти</a>
                                    </div>
                                </div>
                            </fieldset>
                            <div class="signin-error alert alert-danger text-center mt-3 d-none">
                                Не удалось выполнить вход.<br>Пожалуйста, попробуйте ещё раз.
                            </div>
                        </form>
                        <p class="text-center">
                            <a href="/signup">У вас еще нет учетной записи? Зарегистрироваться</a>
                        </p>
                    </div>
                </div>
            </div>
            <!-- media -->
        </div>
        <!-- container -->
    </div>
    <!-- content -->
    <wb-include wb-tpl="signfoot.inc.php" />
    <wb-include wb-snippet="wbapp" />
    <wb-include wb-snippet="lineawesome" />
    <wb-include wb-tpl="scripts.inc.php" />
</body>

</html>