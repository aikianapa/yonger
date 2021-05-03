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
                    <h5>Шапка</h5>
                </div>
                <i class="fa fa-close r-20 position-absolute cursor-pointer" data-dismiss="modal"
                    aria-label="Close"></i>
            </div>
            <div class="modal-body pd-20">
                <form id="{{_form}}EditForm" class="row">


                    <div class="col-5">
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
                                <select class="form-control" placeholder="Путь" name="path">
                                    <wb-foreach wb='table=pages&sort=id' wb-filter="{'id':{'$ne':'{{id}}'}}">
                                        <wb-var if='"{{path}}" > ""' path="{{path}}" else="/" />
                                        <option value="{{id}}">{{_var.path}}/{{id}}</option>
                                    </wb-foreach>
                                </select>
                            </div>
                            <div class="input-group col-12">
                                <div class="input-group-prepend">
                                    <span class="input-group-text px-0">{{_route.hostname}}/<span class="path"></span></span>
                                </div>
                                <input type="text" name="id" class="form-control" wb="module=smartid" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-12 form-control-label">Шаблон</label>
                            <div class="col-12">
                                <select class="form-control" name="template" placeholder="Шаблон">
                                    <wb-foreach wb='call=wbListTpl()'>
                                        <option value="{{_val}}">{{_val}}</option>
                                    </wb-foreach>
                                </select>
                            </div>
                        </div>

                        <h5>Настройки страницы</h5>

                        <a href="#" class="btn btn-outline-secondary">SEO</a>
                        <a href="#" class="btn btn-outline-secondary">Вставки кода</a>

                    </div>

                    <div class="col-7">
                    <wb-multilang>
                        <wb-var lang="{{_key}}" />
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#{{_form}}EditForm-{{_var.lang}}-tab1" role="tab"
                                    aria-controls="{{_form}}EditForm-tab1" aria-selected="true">{{_lang.main}}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#{{_form}}EditForm-{{_var.lang}}-tab2" role="tab"
                                    aria-controls="{{_form}}EditForm-tab2" aria-selected="false">{{_lang.prop}}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#{{_form}}EditForm-{{_var.lang}}-tab3" role="tab"
                                    aria-controls="{{_form}}EditForm-tab3" aria-selected="false">{{_lang.seo}}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#{{_form}}EditForm-{{_var.lang}}-tab4" role="tab"
                                    aria-controls="{{_form}}EditForm-tab4" aria-selected="false">{{_lang.images}}</a>
                            </li>
                        </ul>
                        <div class="tab-content p-3">
                            <div class="tab-pane fade show active" id="{{_form}}EditForm-{{_var.lang}}-tab1" role="tabpanel"
                                aria-labelledby="{{_form}}EditForm-tab1">



                                <div class="form-group row">
                                    <label class="col-sm-2 form-control-label">{{_lang.header}}</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="header"
                                            placeholder="{{_lang.header}}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-12 form-control-label">Текст</label>
                                    <div class="col-12">
                                        <wb-module wb="{'module':'jodit'}" name="text" />
                                    </div>
                                </div>
                                
                            </div>
                            <div class="tab-pane fade" id="{{_form}}EditForm-{{_var.lang}}-tab2" role="tabpanel"
                                aria-labelledby="{{_form}}EditForm-tab2">
                                <input wb-tree name="prop">
                            </div>
                            <div class="tab-pane fade" id="{{_form}}EditForm-{{_var.lang}}-tab3" role="tabpanel"
                                aria-labelledby="{{_form}}EditForm-tab3">
                                <wb-include wb="form=common&mode=seo" />
                            </div>
                            <div class="tab-pane fade" id="{{_form}}EditForm-{{_var.lang}}-tab4" role="tabpanel"
                                aria-labelledby="{{_form}}EditForm-tab4">
                                <wb-module wb="module=filepicker&mode=multi" name="images" />
                            </div>
                        </div>
                    </wb-multilang>
                    </div>
                </form>

            </div>
            <div class="modal-footer pd-x-20 pd-b-20 pd-t-0 bd-t-0">
                <wb-include wb="{'form':'common_formsave.php'}" />
            </div>
        </div>
    </div>
</div>
<script wb-app>
var yongerPageEditor = function(){
    let $form = $('#{{_form}}EditForm');
    $form.delegate('[name=path]','change',function(){
        let path = $(this).val();
        if (path > '') path += '/';
        $form.find('[name=id]').parents('.input-group').find('.path').html(path);
    });
}
yongerPageEditor();
</script>
<wb-lang>
    [ru]
    main = Основное
    prop = Свойства
    seo = Оптимизация
    images = Изображения
    visible = Отображать
    header = Заголовок
    [en]
    main = Main
    prop = Properties
    seo = SEO
    images = Images
    visible = Visible
    header = Header
</wb-lang>
</html>