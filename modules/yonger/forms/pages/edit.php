<html>
<div class="modal fade effect-scale show removable" id="modalPagesEdit" data-backdrop="static" tabindex="-1"
    role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header row">
                <div class="col-5">
                    <h5>Редактирование страницы</h5>
                </div>
                <div class="col-7">
                    <h5 class='header'></h5>
                </div>
                <i class="fa fa-close r-20 position-absolute cursor-pointer" data-dismiss="modal"
                    aria-label="Close"></i>
            </div>
            <div class="modal-body pd-20">
                <div class="row">
                    <div class="col-5">
                        <form id="{{_form}}EditForm">
                            <div class="form-group row">
                                <div class="col-12">
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" name="active"
                                            id="{{_form}}SwitchItemActive">
                                        <label class="custom-control-label" for="{{_form}}SwitchItemActive">Отображать
                                            страницу</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-12 form-control-label">Адрес страницы</label>
                                <div class="col-12">
                                    <select class="form-control" placeholder="/" name="path">
                                        <wb-foreach wb='table=pages&sort=url' wb-filter="{'id':{'$ne':'{{id}}'}}">
                                            <wb-var wb-if='"{{url}}" == "/"' url="/home" else="{{url}}" />
                                            <option value="{{_var.path}}/{{name}}">{{_var.url}}</option>
                                        </wb-foreach>
                                    </select>
                                </div>
                                <div class="input-group col-12">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text px-0">{{_route.hostname}}<span
                                                class="path"></span></span>
                                    </div>
                                    <input type="text" name="name" class="form-control" wb="module=smartid" required>
                                </div>
                            </div>

                        <div class="form-group row">
                            <label class="col-12 form-control-label">Заголовок</label>
                            <div class="col-12">
                                <input type="text" name="header" class="form-control" placeholder="Заголовок" wb="module=langinp" required>
                            </div>
                        </div>

                            <!--div class="form-group row">
                            <label class="col-12 form-control-label">Шаблон</label>
                            <div class="col-12">
                                <select class="form-control" name="template" placeholder="Шаблон">
                                    <wb-foreach wb='call=wbListTpl()'>
                                        <option value="{{_val}}">{{_val}}</option>
                                    </wb-foreach>
                                </select>
                            </div>
                        </div-->
                            <div class="form-group row">
                                <div class="col-12">
                                    <h5>Настройки страницы</h5>

                                    <a href="#" class="btn btn-outline-secondary">SEO</a>
                                    <a href="#" class="btn btn-outline-secondary">Вставки кода</a>
                                </div>
                            </div>


                            <div class="form-group row">

                                <nav class="nav navbar navbar-expand-md col">
                                    <h5 class="order-1">Структура</h5>
                                    <div class="dropdown  dropright ml-auto order-2 float-right">
                                        <a href="#" id="pageBlockAdd"
                                            class="btn btn-sm btn-primary dropdown-toggle"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <img src="/module/myicons/item-select-plus-add.svg?size=18&stroke=FFFFFF">
                                            Добавить блок
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="pageBlockAdd">
                                            <wb-foreach wb="ajax=/module/yonger/blocklist&render=server">
                                            <a class="dropdown-item" onclick="yonger.pageBlockAdd('{{file}}','{{name}}')" href="#">{{name}}</a>
                                            </wb-foreach>
                                        </div>
                                    </div>
                                </nav>
                                <div class="col-12">
                                    <wb-module wb="module=yonger&mode=structure" />
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="col-7">
                        <div id="yongerBlocksForm">
                            <form method="post">

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer pd-x-20 pd-b-20 pd-t-0 bd-t-0">
                <wb-include wb="{'form':'common_formsave.php'}" />
            </div>
        </div>
    </div>
</div>
<script wb-app>
yonger.pageEditor = function() {
    let $form = $('#{{_form}}EditForm');
    $form.delegate('[name=path]', 'change', function() {
        let path = $(this).val() + '/';
        $form.find('[name=name]').parents('.input-group').find('.path').html(path);
    });
    $form.find('[name=path]').trigger('change');
}

yonger.pageBlockAdd = function(form, name) {
    let id = wbapp.newId();
    let data = {
        'id': id,
        'header': name,
        'name': name,
        'form': form
    }
    console.log(data);
    wbapp.storage('cms.page.blocks.' + id, data);
    $('#yongerBlocksForm [name=blocks]').text(json_encode(wbapp.storage('cms.page.blocks')));
}

yonger.pageEditor();
</script>
<wb-lang>
    [ru]
    main = Основное
    prop = Вставки кода
    seo = Оптимизация
    images = Изображения
    visible = Отображать
    header = Заголовок
    [en]
    main = Main
    prop = Code injection
    seo = SEO
    images = Images
    visible = Visible
    header = Header
</wb-lang>

</html>