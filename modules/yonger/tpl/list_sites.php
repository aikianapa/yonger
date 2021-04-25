<html>
<div class="m-3">
    <h4 class="py-2">
        Мои сайты
    </h4>
    <table class="table table-striped table-hover tx-14">
        <thead>
            <tr>
                <th>Наименование</th>
                <th>Идентификатор</th>
                <th>Создан</th>
                <th>Действие</th>
            </tr>

        </thead>
        <tbody>
            <wb-foreach wb="table=sites&sort=_created:d" wb-filter="{'login':'{{_sess.user.login}}'}">
                <tr data-id="{{id}}">
                    <td class="w-50">
                        <a href="{{_route.scheme}}://{{id}}.{{_route.domain}}">
                            {{name}}
                        </a>
                    </td>
                    <td>{{id}}</td>
                    <td>{{date("d.m.Y H:i",strtotime({{_created}}))}}</td>
                    <td>
                        <a href="/workspace/{{id}}">
                            <svg class="mi mi-brush-edit-create-sqaure" wb-module="myicons"></svg>
                        </a>
                        <a href="/workspace/{{id}}/remove" onclick="confirm('Удалить сайт?')">
                            <svg class="mi mi-trash-delete-bin-2" wb-module="myicons"></svg>
                        </a>
                    </td>
                </tr>
            </wb-foreach>

        </tbody>
    </table>
</div>

</html>