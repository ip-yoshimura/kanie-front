<?php
include "header.php"
?>
<?php
include "sidebar.php"
?>
<div class="col-xs-8 col-md-10 col-xs-12 no-padding">

    <div class="col-md-12 col-xs-12 no-padding head-color">
        <div class="head-p">
            <p>保安担当者（調査員）一括変換

            </p>
        </div>
        <form id="meter" action="/gas/meter-reading" method="POST">
        <div class="col-xs-12 border1 no-padding">

            <p class="backend">ガス漏れ警報器

            </p>
            <div class="col-xs-12">

                <div class="col-xs-1 no-padding">
                    <p>一覧表タイプ</p>
                </div>

                <div class="col-xs-2 ">
                    <input type="radio" id="officeCodeSelection" name="officeCodeSelection" value="all"  onclick="$.fn.radioButtonSelectionChanged('officeCodeSelection', 'officeCodeSelectionId')"> <span>保安機関銘一覧表</span>
                </div>
                <div class="col-xs-3 no-padding">
                    <input type="radio" id="officeCodeSelectionId" name="officeCodeSelection" value="officeCodeSelectionId"  onclick="$.fn.radioButtonSelectionChanged('officeCodeSelection', 'officeCodeSelectionId')"> <span>保安機関別調査員名一覧表</span>
                </div>

            </div>
        </div>
            <div class="col-xs-12 border1 no-padding">

                <p class="backend">印刷範囲指定</p>
            <div class="col-xs-12">
                <div class="col-xs-12 no-padding">
                    <div class="col-xs-1 no-padding">
                        <p class="p-size">保安機関コード</p>
                    </div>
                    <div class="col-xs-1">
                        <input type="radio" name="securitySelection" id="securitySelection" value="all" checked onclick="$.fn.radioButtonSelectionChanged('securitySelection', 'securitySelectionId')"> 全て
                    </div>
                    <div class="col-xs-1">
                        <input type="radio" name="securitySelection" id="securitySelection" value="directSales" onclick="$.fn.radioButtonSelectionChanged('securitySelection', 'securitySelectionId')"> 選択
                    </div>

                </div>
                <div id="securitySelectionId">
                <div class="col-xs-12 no-padding">
                    <div class="col-xs-1 col-xs-offset-1">
                        <div class="form-group">
                            <input id="trustStartId" name="trustStartId" placeholder="000" class="form-control"
                                   type="text" value="" disabled onchange="$.fn.onInputValueChange('trustStartId', 'trustStartName')"/>
                        </div>
                    </div>
                    <div class="col-xs-1 no-padding ratio">~</div>
                    <div class="col-xs-1">
                        <div class="form-group">
                            <input id="trustEndId" name="trustEndId" placeholder="999" class="form-control" type="text"
                                   value="" disabled onchange="$.fn.onInputValueChange('trustEndId', 'trustEndName')"/>
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <div class="form-group">
                            <input id="trustStartName" name="trustStartName" class="form-control" type="text" value="" disabled/>
                        </div>
                    </div>
                    <div class="col-xs-1 no-padding ratio">~</div>
                    <div class="col-xs-3">
                        <div class="form-group">
                            <input id="trustEndName" name="trustEndName" class="form-control" type="text" value="" disabled/>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>


            <div class="col-xs-12 border1 no-padding bottom-box">

                <p class="backend">出力指定

                </p>
            <div class="col-xs-12">

                <div class="col-xs-1 no-padding">
                    <p>出力先</p>
                </div>
                <div class="col-xs-9">
                    <input type="radio" name="terget" id="terget" value="all" onclick="$.fn.radioButtonSelectionChanged('terget', 'tergetId')">プリンタ（印刷）
                    <input type="radio" name="terget" id="terget" value="terget" onclick="$.fn.radioButtonSelectionChanged('terget', 'tergetId')">画面（印刷イメージ）
                </div>

            </div>
        </div>


        <!--Last-->

        <?php
        include "footer.php"
        ?>


        </form>
    </div>
</div>
</div>
</div>

</body>

</html>