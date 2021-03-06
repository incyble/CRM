@section('modalUpdate')
    @parent

@stop

@section('modalAccountAddress')
    @parent
    <div class="modal fade modal-dialog-center" id="modalAccountAddress-{{$type}}-{{$customerInfo['id']}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="custom-modal-content">

                <section class="panel">
                    <header class="panel-heading tab-bg-dark-navy-grey ">
                        Müşteri Adresi Ekleme
                    </header>
                    <div class="tab-pane active panel-body">
                        <form name="form_islem_müsteri_adresi" data-toggle="validator" role="form" id="form_islem_müsteri_adresi"
                              class="form-horizontal tasi-form center-block form-address">
                            <input name="parentid" type="hidden" value="{{$customerInfo['id']}}">
                            <input name="_token" type="hidden" value="<?= csrf_token();?>">
                            <input name="parenttype" type="hidden" value="{{$customerInfo['type']}}">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group control-group">
                                        <label class="col-sm-1 width-150 control-label" >Adres Türü </label>
                                        <div>
                                            <select name="type" id="info_type" class="form-control input-sm m-bot15"
                                                    style="width:200px; float: left;" required>
                                                <option value="" disabled selected>Seçiniz</option>
                                                <option value="is_address">İş Adresi</option>
                                                <option value="ev_address">Ev Adresi</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-1 control-label width-150">Durumu </label>
                                        <div>
                                            <select name="status" id="info_status"
                                                    class="form-control input-sm m-bot15"
                                                    style="width:200px; float: left;">
                                                <option value="" disabled selected>Seçiniz</option>
                                                <option value="aktif">Aktif</option>
                                                <option value="pasif">Pasif</option>
                                            </select>

                                        </div>

                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-1 control-label width-150" style="float: left">Adresi </label>
                                        <div>
                                            <textarea name="address" id="info_address" class="form-control" style="width:200px; height: 80px; float: left;" required></textarea>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class="col-sm-1 control-label width-150 control-label">İl </label>
                                        <div>
                                            <select name="citycode" class="info_citycode" onchange="onCityChanged('info_citycode','info_countycode',0)" class="form-control input-sm m-bot15"
                                                    style="width:200px; float: left;">
                                                <option value="" disabled selected>Seçiniz</option>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-1 control-label width-150">İlçe </label>
                                        <div>
                                            <select name="countycode" class="info_countycode"
                                                    class="form-control input-sm m-bot15"
                                                    style="width:200px; float: left;">
                                                <option value="" disabled selected>Seçiniz</option>
                                            </select>

                                        </div>

                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-1 control-label width-150">Posta Kodu</label>
                                        <div>
                                            <input name="zipcode" id="info_zipcode" type="text" class="form-control width-200">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class="col-sm-1 control-label width-150">Telefon-1</label>
                                        <div>
                                            <div class="col-sm-5">

                                                <input name="phone1" id="info_phone1"  type="text" placeholder=""  class="form-control width-200" required>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-1 control-label width-150">Telefon-2</label>
                                        <div>
                                            <div class="col-sm-5">
                                                <input name="phone2" id="info_phone2" type="text" class="form-control width-200" required>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-1 control-label width-150">WEB</label>
                                        <div class="col-sm-5">
                                            <input name="web" id="info_web" type="text" class="form-control width-200" required>
                                        </div>

                                    </div>

                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class="col-sm-1 control-label width-150">Vergi Dairesi</label>
                                        <div class="col-sm-5">
                                            <input name="taxoff" id="info_taxoff" type="text" class="form-control width-200" required>
                                        </div>

                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-1 control-label width-150">Vergi Numarası</label>
                                        <div class="col-sm-5">
                                            <input name="taxno" id="info_taxno" type="text" class="form-control width-200" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-1 control-label width-150">Muh. Kodu</label>
                                        <div class="col-sm-5">
                                            <input name="acccode" id="info_acccode" type="text" class="form-control width-200" required>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="col-sm-1 control-label width-150"></label>
                                        <div class="col-sm-5 width-200">
                                            <button name="btn_islem_musteri_adres_ekle" id="btn_islem_musteri_adres_ekle" type="button"
                                                    class="btn-mus-adres-add-margin-left btn btn-success">Ekle
                                            </button>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </form>
                    </div>

                </section>

                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                </div>
            </div>

        </div>
    </div>
@stop

@section('modalAccountContact')
    @parent
    <div class="modal fade modal-dialog-center" id="modalAccountContact-{{$type}}-{{$customerInfo['id']}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="custom-modal-content">

                <section class="panel">
                    <header class="panel-heading tab-bg-dark-navy-grey ">
                        Kişi Ekleme
                    </header>
                    <div class="tab-pane active panel-body">
                        <form name="form_kisi_ekle" id="form_kisi_ekle"
                              class="form-horizontal tasi-form center-block">
                            <input name="parentid" type="hidden" value="{{$customerInfo['id']}}">
                            <input name="_token" type="hidden" value="<?= csrf_token();?>">
                            <input name="xcmpcode" type="hidden" value="{{$xcmpcode}}">
                            <input name="parenttype" type="hidden" value="{{$customerInfo['type']}}">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label class="col-sm-1 control-label width-150">Adı</label>
                                        <div>
                                            <div class="col-sm-5">
                                                <input name="name" id="contact_name" type="text" class="form-control width-200">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-1 control-label width-150">Soyadı</label>
                                        <div>
                                            <div class="col-sm-5">
                                                <input name="surname" id="contact_surname" type="text" class="form-control width-200">
                                            </div>

                                        </div>

                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-1 control-label width-150">Firması</label>
                                        <div class="col-sm-5">
                                            <input name="account" id="contact_campaigncode" type="text" class="form-control width-200" value="{{$customerInfo["name"]}}" disabled>
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-1 control-label width-150">Durumu</label>
                                        <div class="col-sm-5">
                                            <select name="status" id="info_status" class="form-control input-sm m-bot15"
                                                    style="width:200px; float: left;">
                                                <option value="" disabled selected>Seçiniz</option>
                                                <option value="aktif">Çalışan</option>
                                                <option value="pasif">Ayrılmış</option>
                                            </select>

                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-1 control-label width-150">Ünvanı</label>
                                        <div class="col-sm-5">
                                            <input name="title" id="contact_campaigncode" type="text" class="form-control width-200">
                                        </div>

                                    </div>

                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label class="col-sm-1 control-label width-150">İş Telefonu</label>
                                        <div>
                                            <div class="col-sm-5">
                                                <input name="phone1" id="info_phone1" type="text" class="form-control width-200">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-1 control-label width-150">Cep Telefonu</label>
                                        <div>
                                            <div class="col-sm-5">
                                                <input name="phone2" id="info_phone2" type="text" class="form-control width-200">
                                            </div>

                                        </div>

                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-1 control-label width-150">Facebook</label>
                                        <div class="col-sm-5">
                                            <input name="facebook" id="info_facebook" type="text" class="form-control width-200">
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-1 control-label width-150">Twitter</label>
                                        <div class="col-sm-5">
                                            <input name="twitter" id="info_twitter" type="text" class="form-control width-200">
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-1 control-label width-150">Linkedin</label>
                                        <div class="col-sm-5">
                                            <input name="linkedin" id="info_linkedin" type="text" class="form-control width-200">
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-1 control-label width-150">E-Bülten</label>
                                        <div class="col-sm-5">
                                            <select name="bulletin" id="bulletin" class="form-control input-sm m-bot15"
                                                    style="width:200px; float: left;">
                                                <option value="" disabled selected>Seçiniz</option>
                                                <option value="evet">Evet</option>
                                                <option value="hayır">Hayır</option>
                                                <option value="reddetti">Kişi Reddetti</option>
                                            </select>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="col-sm-1 control-label width-150" style="float: left">Açıklama</label>
                                        <div>
                                            <textarea name="description" id="info_address" class="form-control" style="width:500px; height: 280px; float: left;"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-1 control-label width-150"></label>
                                        <div class="col-sm-5 width-200">
                                            <button name="btn_islem_musteri_adres_ekle" id="btn_islem_musteri_kisi_ekle" type="button"
                                                    class="btn-kisi-add-margin-left btn btn-success">Ekle
                                            </button>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </form>
                    </div>
                </section>


                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                </div>
            </div>

        </div>
    </div>
@stop
<script type="text/javascript">
    $('body').on('click', '#btn_islem_musteri_adres_ekle', function() {
        var a = $('#form_islem_müsteri_adresi').serializeArray();
        console.log(a);
        $.ajax({
            url:  'http://localhost/CRM/public/crm/musteri_yonetimi/adres_ekle',
            type: 'POST',
            data: a,
            success: function(data) {
                toastrMessage("Başarılı!", "Adres ekleme işlemi başarıyla tamamlandı!", "success");
                $('#modalAccountAddress-{{$type}}-{{$customerInfo['id']}}').modal('hide');
                insertIletisimToListe(data,'{{$type}}-{{$customerInfo['id']}}');
            }, error: function() {
                toastrMessage("Hata!","İstediğiniz işlem yapılamadı!", "error");
            }
        });
    });
    $('body').on('click', '#btn_islem_musteri_kisi_ekle', function() {
      var b = $('#form_kisi_ekle').serializeArray();
      $.ajax({
        url: 'http://localhost/CRM/public/crm/musteri_yonetimi/kisi_ekle',
        type: 'POST',
        data: b,
        success:function(data) {
          toastrMessage("Başarılı!", "Kişi ekleme işlemi başarıyla tamamlandı!", "success");
          $('#modalAccountContact-{{$type}}-{{$customerInfo['id']}}').modal('hide');
          insertDataToContact(data, '{{$type}}-{{$customerInfo['id']}}');
        }, error: function() {
          toastrMessage("Hata!","İstediğiniz işlem yapılamadı!", "error");
        }
      });
    });
</script>
