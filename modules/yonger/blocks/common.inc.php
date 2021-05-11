<section class="row">
    <div class="col-sm-6">
        <div class="form-group row">
        <label class="form-control-label col-md-5">{{_lang.name}}</label>
        <input type="text" class="form-control col-md-7" name="header" placeholder="{{_lang.name}}">
        </div>
        <div class="form-group row">
        <label class="form-control-label col-md-5">{{_lang.id}}</label>
        <input type="text" class="form-control col-md-7" name="block_id" placeholder="{{_lang.id}}">
        </div>
        <div class="form-group row">
        <label class="form-control-label col-md-5">{{_lang.class}}</label>
        <input type="text" class="form-control col-md-7" name="block_class" placeholder="{{_lang.class}}">
        </div>
    </div>

    <div class="col-sm-6">
        <div class="form-group row">
            <div class="col-12">
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" name="active" id="switchActive-{{_sess.order_id}}">
                    <label class="custom-control-label" for="switchActive-{{_sess.order_id}}">{{_lang.active}}</label>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-12">
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" name="container" id="switchContainer-{{_sess.order_id}}">
                    <label class="custom-control-label" for="switchContainer-{{_sess.order_id}}">{{_lang.container}}</label>
                </div>
            </div>
        </div>
    </div>
</section>


<wb-lang>
    [ru]
    name = "Название"
    id = "#ID"
    class = "Class"
    active = "Отображать блок"
    container = "В контейнер"
    template = Шаблон
</wb-lang>