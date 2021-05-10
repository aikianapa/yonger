<div class="form-group row">
    <div class="col-sm-6">
        <label class="form-control-label">{{_lang.name}}</label>
        <input type="text" class="form-control" name="header" placeholder="{{_lang.name}}">
    </div>

    <div class="col-sm-6">
        <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" name="active" id="{{_form}}SwitchItemActive">
            <label class="custom-control-label" for="{{_form}}SwitchItemActive">{{_lang.active}}</label>
        </div>
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 form-control-label">{{_lang.template}}</label>
    <div class="col-sm-10">
        <select class="form-control" name="template" placeholder="{{_lang.template}}">
            <wb-foreach wb='call=wbListTpl()'>
                <option value="{{_val}}">{{_val}}</option>
            </wb-foreach>
        </select>
    </div>
</div>

<wb-lang>
        [ru]
        name = "Наименование блока"
        active = "Отображать блок"
        template = Шаблон
</wb-lang>