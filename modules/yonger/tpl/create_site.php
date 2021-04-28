<html>

<div class="modal fade show" data-backdrop="false" tabindex="-1" role="dialog" id="yongerSiteCreator">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <span></span>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <input class="form-control" type="text" name="name" placeholder="Название сайта">
                    <input type="hidden" name="login" value="{{_sess.user.login}}">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary px-5" onclick="yonger.siteCreator();">Создать</button>
            </div>
        </div>
    </div>
</div>
<script wb-app>
    yonger.siteCreator = function(){
        if ($('#yongerSiteCreator form').verify()) {
            let form = $('#yongerSiteCreator form').serializeJson();
            let domain = document.location.host.split('.');
            let scheme = document.location.protocol; 
            domain = array_slice(domain,-2).join('.');
            let data = wbapp.postSync(scheme+'//'+domain+'/module/yonger/createSite',form);
            //let data = wbapp.postSync('/module/yonger/createSite',form);
            if (data.error == true) {
                wbapp.toast('Ошибка',data.msg);
            } else {
                $('#yongerSiteCreator').modal('hide');
                $('.content-header nav a[href="#sites"]').trigger('click');
            }
        }
    }
</script>


</html>