<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<div class="col-xs-8 col-md-10 col-xs-12 no-padding">

    <div class="col-md-12 col-xs-12 no-padding">
        <div class="head-p">
            <p>配送日時更新処理

            </p>
        </div>
        <div class="text-center"><strong>配送日時更新処理を開始します</strong></div>
        <div class="text-center"><strong>開始する場合は条件を指定して [実行] を選択してください</strong></div>
        <br>
        <form action="/gas/meter-reading" id="meter" method="POST">

            <div class="col-xs-12 border1 no-padding">
                <p class="back-end">実行対象範囲指定 </p>

                <div class="col-xs-12">
                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-2 no-padding">
                            <p>営業所コード</p>
                        </div>
                        <div class="col-xs-1">
                            <input type="radio" name="officeCode" id="officeCode" value="all" checked
                                   onclick="$.fn.radioButtonSelectionChanged('officeCode', 'officeCodeId')"> 全て
                        </div>
                        <div class="col-xs-1 no-padding">
                            <input type="radio" name="officeCode" id="officeCode" value="all-exp"
                                   onclick="$.fn.radioButtonSelectionChanged('officeCode', 'officeCodeId')"> 選択
                        </div>

                    </div>
                    <div class="col-xs-12 no-padding" id="officeCodeId">
                        <div class="col-xs-1 col-xs-offset-2">
                            <div class="form-group">
                                <input id="trustStartId" name="trustStartId" placeholder="000" class="form-control"
                                       type="text" value="" disabled
                                       onchange="$.fn.onInputValueChange('trustStartId', 'trustStartName')"/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">~</div>
                        <div class="col-xs-1">
                            <div class="form-group">
                                <input id="trustEndId" name="trustEndId" placeholder="999" class="form-control"
                                       type="text" value="" disabled
                                       onchange="$.fn.onInputValueChange('trustEndId', 'trustEndName')"/>
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input id="trustStartName" name="trustStartName" class="form-control" type="text"
                                       value="" disabled/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">~</div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input id="trustEndName" name="trustEndName" class="form-control" type="text"
                                       value="" disabled/>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12">
                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-2 no-padding">
                            <p>受託区分</p>
                        </div>
                        <div class="col-xs-1">
                            <input type="radio" name="trusteeship" id="trusteeship" value="all" checked
                                   onclick="$.fn.radioButtonSelectionChanged('trusteeship', 'trusteeshipId')"> 全て
                        </div>
                        <div class="col-xs-1 no-padding">
                            <input type="radio" name="trusteeship" id="trusteeship" value="all1"
                                   onclick="$.fn.radioButtonSelectionChanged('trusteeship', 'trusteeshipId')"> 直売
                        </div>
                        <div class="col-xs-2">
                            <input type="radio" name="trusteeship" id="trusteeship" value="all2"
                                   onclick="$.fn.radioButtonSelectionChanged('trusteeship', 'trusteeshipId')"> 販売店
                        </div>

                    </div>
                    <div class="col-xs-12 no-padding" id="trusteeshipId">
                        <div class="col-xs-1 col-xs-offset-2">
                            <div class="form-group">
                                <input id="trusteeshipStartId" name="trusteeshipStartId" placeholder="000" class="form-control"
                                       type="text" value="" disabled
                                       onchange="$.fn.onInputValueChange('trusteeshipStartId', 'trusteeshipStartName')"/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">~</div>
                        <div class="col-xs-1">
                            <div class="form-group">
                                <input id="trusteeshipEndId" name="trusteeshipEndId" placeholder="999" class="form-control"
                                       type="text" value="" disabled
                                       onchange="$.fn.onInputValueChange('trusteeshipEndId', 'trusteeshipEndName')"/>
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input id="trusteeshipStartName" name="trusteeshipStartName" class="form-control" type="text"
                                       value="" disabled/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">~</div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input id="trusteeshipEndName" name="trusteeshipEndName" class="form-control" type="text"
                                       value="" disabled/>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


    </div>


    <?php include 'footer.php'; ?>

    </form>

</div>

</body>

</html>