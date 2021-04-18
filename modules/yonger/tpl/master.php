<html lang="en">
<meta http-equiv="refresh" content="2; url=/signin/" wb-disallow="user">
<wb-include wb="{'src':'/modules/yonger/tpl/head.inc.php'}" />

<body wb-allow="user">
    <div>
        <div class="row h-100">
            <div class="col-4 bg-dark p-5" id="steps">
                <div class="d-flex align-items-center h-75">
                    <img src="/tpl/assets/img/logo.svg" class="position-absolute" style="top: 10vh; width: 150px;">
                    <ul class="steps steps-vertical text-white-50" role="tablist">
                        <li class="step-item active">
                            <a href="#step-1" class="step-link">
                                <span class="step-number">1</span>
                                <span class="step-title">Адрес профиля</span>
                            </a>
                        </li>
                        <li class="step-item">
                            <a href="#" class="step-link">
                                <span class="step-number">2</span>
                                <span class="step-title">Сфера деятельности</span>
                            </a>
                        </li>
                        <li class="step-item">
                            <a href="#" class="step-link">
                                <span class="step-number">3</span>
                                <span class="step-title">Какова ваша главная цель</span>
                            </a>
                        </li>
                        <li class="step-item">
                            <a href="#" class="step-link">
                                <span class="step-number">4</span>
                                <span class="step-title">Личные данные</span>
                            </a>
                        </li>
                        <li class="step-item">
                            <a href="#" class="step-link">
                                <span class="step-number">5</span>
                                <span class="step-title">Данные компании</span>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
            <div class="col-8" id="form">
                <div class="d-flex flex-wrap align-items-center h-75">
                    <div class="container">
                        <form class="text-black-50 tab-content">
                            <div class="tab-pane active" id="step-1">
                                <h4>Адрес вашего профиля</h4>
                                <p class="my-4">
                                    На этом этапе, вы можете создать уникальный адрес для своего профиля. Просто введите
                                    его
                                    в форму ниже. Ваш личный кабинет будет находиться по адресу yourprofile.yonger.ru
                                </p>

                                <div class="input-group">
                                    <input class="form-control" type="text" name="login" placeholder="Ваш профиль"
                                        required>
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="my-addon">{{_route.domain}}</span>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-6">
                                        <a href="#" onclick="wbapp.master.nextstep(this);"
                                            class="btn btn-primary w-100">Продолжить</a>
                                    </div>
                                    <div class="col-6">
                                        <a href="#" onclick="wbapp.master.nextstep(this,false);"
                                            class="btn btn-secondary w-100">Пропустить</a>
                                    </div>
                                </div>
                                <p class="my-4 text-muted">
                                    * Если вы пропустите этот шаг, личный кабинет будет создан со случайным
                                    сгенерированным адресом
                                </p>
                            </div>

                            <div class="tab-pane" id="step-2">
                                <h4>Сфера деятельности</h4>
                                <p class="my-4">
                                    Выберите один из наиболее подходящих вариантов характеризующих вашу профессиональную
                                    деятельность
                                </p>
                                <div class="input-group">
                                    <select class="form-control" name="activity" required>
                                        <option value="" disabled selected>Сфера деятельности</option>
                                        <option value="1">Маркетинг и дизайн</option>
                                        <option value="2">Продажи</option>
                                        <option value="3">Разработка ПО</option>
                                        <option value="4">Бухгалтерия</option>
                                        <option value="5">Консалтинг</option>
                                    </select>

                                </div>
                                <div class="row mt-4">
                                    <div class="col-6">
                                        <a href="#" onclick="wbapp.master.nextstep(this);"
                                            class="btn btn-primary w-100">Продолжить</a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="step-3">
                                <h4>Какова ваша главная цель?</h4>
                                <p class="my-4">
                                    Что вас больше всего интересует в использовании сервиса Yonger?
                                </p>
                                <div class="input-group">
                                    <select class="form-control" name="activity" required>
                                        <option value="" disabled selected>Ваша цель</option>
                                        <option value="1">Управление целями</option>
                                        <option value="2">Управление портфелем и рабочей нагрузкой</option>
                                        <option value="3">Управление проектами и процессами</option>
                                        <option value="4">Управление личными задачами</option>
                                    </select>

                                </div>
                                <div class="row mt-4">
                                    <div class="col-6">
                                        <a href="#" onclick="wbapp.master.nextstep(this);"
                                            class="btn btn-primary w-100">Продолжить</a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="step-4">
                                <h4>Расскажите немного о себе</h4>
                                <p class="my-4">
                                    Мы просим указать лишь самый минимум информации
                                </p>
                                <div class="col-12 col-sm-6">
                                    <label class="form-control-label">Имя</label>
                                    <input type="text" class="form-control" name="first_name" required>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <label class="form-control-label">Фамилия</label>
                                    <input type="text" class="form-control" name="last_name" required>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <label class="form-control-label">Эл.почта'</label>
                                    <input type="email" class="form-control" name="email" required>
                                </div>
                                <div class="col-12 col-sm-6">
                                <label class="form-control-label after-send-code d-none">Проверочный код</label>
                                <input type="text" placeholder="Проверочный код" wb-mask='999-999'
                                        class="form-control after-send-code d-none" data-name="code">                
                                </div>
                                <div class="row mt-4">
                                    <div class="col-6">
                                        <a href="#" onclick="wbapp.master.nextstep(this);"
                                            class="btn btn-primary w-100">Продолжить</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>
<wb-include wb="{'src':'/modules/yonger/tpl/foot.inc.php'}" />
<script type="wbapp">
    wbapp.master = {
        nextstep: function(ev, verify = true) {
            if (verify && !$('form').verify()) return;
            let $pane = $(ev).parents('.tab-pane.active');
            let $step = $('#steps .step-item.active:last').next('.step-item').addClass('active');
            $pane.next().addClass('active');
            $pane.removeClass('active');
        }
    }
</script>
</body>

</html>