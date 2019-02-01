<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<div class="col-xs-8 col-md-10 col-xs-12 no-padding">
    <div class="col-md-12 col-xs-12 no-padding body-background">

        <div class="head-p">
            <p>振替金額変更チェックリスト印刷指定

            </p>
        </div>
        <form id="meter" action="/gas/meter-reading" method="POST">
            <div class="col-xs-12 border1 no-padding">
                <p class="back-end">作成範囲指定</p>

                <div class="col-xs-12">
                    <div class="col-xs-2 no-padding">
                        <p>金額変更日</p>
                    </div>
                    <div class="col-xs-2">
                        <div class="form-group">
                            <input id="trustStartId" name="trustStartId" placeholder="" class="form-control"
                                   type="date" value=""/>
                        </div>
                    </div>

                </div>

                <div class="col-xs-12">
                    <div class="col-xs-2 no-padding">
                        <p>入力担当者</p>
                    </div>
                    <div class="col-xs-1">
                        <div class="form-group">
                            <input id="personStartId" name="personStartId" placeholder="" class="form-control"
                                   type="number" value=""
                                   onchange="$.fn.onInputValueChange('personStartId', 'personEndName')"/>
                        </div>
                    </div>
                    <div class="col-xs-3 no-padding">
                        <div class="form-group">
                            <input id="personEndName" name="personEndName" placeholder="" class="form-control"
                                   type="text"
                                   value=""/>
                        </div>
                    </div>

                </div>

                <div class="col-xs-12">
                    <div class="col-xs-2 no-padding">
                        <p>銀行コード</p>
                    </div>
                    <div class="col-xs-1 ">
                        <div class="form-group">
                            <input id="bankCodeStartId" name="bankCodeStartId" placeholder="" class="form-control"
                                   type="number" value=""
                                   onchange="$.fn.onInputValueChange('bankCodeStartId', 'bankCodeEndId')"/>
                        </div>
                    </div>
                    <div class="col-xs-3 no-padding">
                        <div class="form-group">
                            <input id="bankCodeEndId" name="bankCodeEndId" placeholder="" class="form-control"
                                   type="text"
                                   value=""/>
                        </div>
                    </div>

                </div>

                <div class="col-xs-12">
                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-2 no-padding">
                            <p>銀行区分</p>
                        </div>
                        <div class="col-xs-2">
                            <input type="radio" name="bankClassificationSelection" value="all"
                                   onclick="$.fn.radioButtonSelectionChanged('bankClassificationSelection', 'bankClassificationSelectionId')">
                            <span> 直接取引分</span>

                        </div>
                        <div class="col-xs-2 no-padding ml-n-40">
                            <input type="radio" name="bankClassificationSelection" value="custom"
                                   onclick="$.fn.radioButtonSelectionChanged('bankClassificationSelection', 'bankClassificationSelectionId')">
                            <span> 幹事銀行分（振替代行分）</span>
                        </div>
                    </div>

                </div>
            </div>


            <div class="col-xs-12 border1 no-padding">
                <p class="back-end">作成範囲指定</p>
                <div class="form-group">
                    <label class="control-label col-xs-2">並び順
                    </label>
                    <div class="col-xs-2 ml-10">
                        <input type="radio" name="bankClassificationSelection" value="all"
                               onclick="$.fn.radioButtonSelectionChanged('bankClassificationSelection', 'bankClassificationSelectionId')">
                        <span> 消費者コード順</span>

                    </div>

                    <div class="col-xs-2 m ml-n-60">
                        <input type="radio" name="bankClassificationSelection" value="all"
                               onclick="$.fn.radioButtonSelectionChanged('bankClassificationSelection', 'bankClassificationSelectionId')">
                        <span> 口座番号順</span>

                    </div>

                    <div class="col-xs-2 ml-n-60">
                        <input type="radio" name="bankClassificationSelection" value="all"
                               onclick="$.fn.radioButtonSelectionChanged('bankClassificationSelection', 'bankClassificationSelectionId')">
                        <span> 預金者コード順</span>

                    </div>
                    <div class="col-xs-2 ml-n-50">
                        <input type="radio" name="bankClassificationSelection" value="all"
                               onclick="$.fn.radioButtonSelectionChanged('bankClassificationSelection', 'bankClassificationSelectionId')">
                        <span> 検索名順</span>

                    </div>


                </div>
                <div class="form-group">
                    <label class="col-xs-2">出力先
                    </label>
                    <div class="col-xs-2 ml-10">
                        <input type="radio" name="bankClassificationSelection" value="all"
                               onclick="$.fn.radioButtonSelectionChanged('bankClassificationSelection', 'bankClassificationSelectionId')">
                        <span> プリンタ（印刷）</span>

                    </div>

                    <div class="col-xs-2 ml-n-50">
                        <input type="radio" name="bankClassificationSelection" value="all"
                               onclick="$.fn.radioButtonSelectionChanged('bankClassificationSelection', 'bankClassificationSelectionId')">
                        <span> 画面（印刷イメージ）</span>

                    </div>


                </div>
            </div>
    </div>


    <?php include 'footer.php'; ?>

    </form>
</div>
</div>
</div>
</div>

</body>

</html>