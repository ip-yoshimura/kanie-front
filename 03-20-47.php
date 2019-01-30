<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<div class="col-xs-8 col-md-10 col-xs-12 no-padding">

    <div class="col-md-12 col-xs-12 no-padding body-background">

        <div class="head-p">
            <p>入金伝票入力チェックリスト </p>
        </div>
        <form id="meter" action="/gas/meter-reading" method="POST">
            <div class="col-xs-12 border1 no-padding">
                <p class="back-end">消費者範囲指定</p>
                <div class="col-xs-12 ">
                    <div class="col-xs-2 no-padding">
                        <p>伝票入力作業日

                        </p>
                    </div>

                    <div class="form-group">

                        <div class="col-xs-2 no-padding">
                            <input type="date" class="form-control"/>
                        </div>

                    </div>


                </div>

                <div class="col-xs-12">
                    <div class="col-xs-2 no-padding">
                        <p>入力担当者</p>
                    </div>
                    <div class="col-xs-1 ml-n-15">
                        <div class="form-group">
                            <input id="trustStartId" name="trustStartId" placeholder="" class="form-control"
                                   type="text" value="" onchange="$.fn.onInputValueChange('trustStartId', 'trustEndId')"/>
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <div class="form-group">
                            <input id="trustEndId" name="trustEndId" placeholder="" class="form-control" type="text"
                                   value=""/>
                        </div>
                    </div>

                </div>

                <div class="col-xs-12">
                    <div class="col-xs-2 no-padding">
                        <p>伝票番号</p>
                    </div>
                    <div class="col-xs-2 ml-n-15">
                        <div class="form-group">
                            <input id="slipStartId" name="slipStartId" placeholder="" class="form-control"
                                   type="text" value="" onchange="$.fn.onInputValueChange('slipStartId', 'slipEndId')"/>
                        </div>
                    </div>
                    <div class="col-xs-1 no-padding ratio">~</div>
                    <div class="col-xs-2">
                        <div class="form-group">
                            <input id="slipEndId" name="slipEndId" placeholder="" class="form-control" type="text"
                                   value=""/>
                        </div>
                    </div>

                </div>

                <div class="col-xs-12">
                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-2 no-padding">
                            <p >削除伝票の印刷</p>
                        </div>
                        <div class="col-xs-1 ml-n-15">
                            <input type="radio" name="printingDeleteDocumentsSelection" value="all" onclick="$.fn.radioButtonSelectionChanged('printingDeleteDocumentsSelection', 'printingDeleteDocumentsSelectionId')"> <span> する</span>

                        </div>
                        <div class="col-xs-1">
                            <input type="radio" name="printingDeleteDocumentsSelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('printingDeleteDocumentsSelection', 'printingDeleteDocumentsSelectionId')"><span> しない</span>

                        </div>
                    </div>

                </div>

                <div class="col-xs-12">
                    <div class="col-xs-2 no-padding">
                        <p>削除伝票番号

                        </p>
                    </div>
                    <div class="col-xs-2 ml-n-15">
                        <div class="form-group">
                            <input id="deleteStartId" name="deleteStartId" placeholder="" class="form-control"
                                   type="text" value="" onchange="$.fn.onInputValueChange('deleteStartId', 'deleteEndId')"/>
                        </div>
                    </div>
                    <div class="col-xs-1 no-padding ratio">~</div>
                    <div class="col-xs-2">
                        <div class="form-group">
                            <input id="deleteEndId" name="deleteEndId" placeholder="" class="form-control" type="text"
                                   value=""/>
                        </div>
                    </div>

                </div>


                <div class="col-xs-12">
                    <div class="col-xs-2 no-padding">
                        <p>入金日
                        </p>
                    </div>
                    <div class="col-xs-2 ml-n-15">
                        <div class="form-group">
                            <input id="trustStartId" name="trustStartId" placeholder="" class="form-control"
                                   type="date" value=""/>
                        </div>
                    </div>
                    <div class="col-xs-1 no-padding ratio">~</div>
                    <div class="col-xs-2">
                        <div class="form-group">
                            <input id="trustEndId" name="trustEndId" placeholder="" class="form-control" type="date"
                                   value=""/>
                        </div>
                    </div>

                </div>

                <div class="col-xs-12">
                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-2 no-padding">
                            <p>区分
                            </p>
                        </div>
                        <div class="col-xs-1 ml-n-15">
                            <input type="radio" name="classificationSelection" value="all" onclick="$.fn.radioButtonSelectionChanged('classificationSelection', 'classificationSelectionId')"> <span> 全て</span>

                        </div>
                        <div class="col-xs-1">
                            <input type="radio" name="classificationSelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('classificationSelection', 'classificationSelectionId')"> <span> 直売</span>

                        </div>
                        <div class="col-xs-1">
                            <input type="radio" name="classificationSelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('classificationSelection', 'classificationSelectionId')"> <span> 卸</span>
                        </div>

                    </div>

                </div>

            </div>
            <div class="col-xs-12 border1 no-padding">
                <div class="col-xs-12 no-padding">
                    <p class="back-end">出力してい</p>
                    <div class="form-group">

                        <div class="col-xs-2">
                            <p>出力先</p>
                        </div>
                        <div class="col-xs-2">
                            <input type="radio" name="classificationSelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('classificationSelection', 'classificationSelectionId')"> <span> プリンタ（印刷）</span>

                        </div>
                        <div class="col-xs-2 ml-n-30">
                            <input type="radio" name="classificationSelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('classificationSelection', 'classificationSelectionId')"> <span> 画面（印刷イメージ）</span>
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