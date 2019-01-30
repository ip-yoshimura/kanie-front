<?php
include "header.php"
?>

<?php
include "sidebar.php"
?>


<div class="col-md-10 col-xs-8 col-xs-12 no-padding">

    <div class="col-md-12 col-xs-12 no-padding body-background">

        <div class="head-p ">
            <p>検針データ一覧表印刷指定

            </p>
        </div>


        <div class="col-xs-12 border1 no-padding">
            <p class="back-end">作成範囲指定</p>

                <form id="meter" action="/gas/meter-reading" method="POST">
                    <div class="col-xs-12   border-margin ">
                        <div class="col-xs-2 no-padding ">
                            <p>営業所コード</p>
                        </div>
                        <div class="col-xs-1  ">
                            <input type="radio" name="officeSelection" id="officeSelection" value="all" checked onclick="$.fn.radioButtonSelectionChanged('officeSelection', 'officeSelectionId')"><span> 全て</span>
                        </div>
                        <div class="col-xs-1">
                            <input type="radio" name="officeSelection" id="officeSelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('officeSelection', 'officeSelectionId')"><span> 選択</span>
                        </div>

                    </div>
                   <div id="officeSelectionId">
                    <div class="col-xs-12">

                        <div class="col-xs-1 col-xs-offset-2">
                            <div class="form-group">
                                <input id="officeCodeStartId" name="officeCodeStartId" placeholder="000"
                                       class="form-control" type="text" value="" disabled onchange="$.fn.onInputValueChange('officeCodeStartId', 'officeCodeStartName')"/>
                            </div>
                        </div>

                        <div class="col-xs-1 no-padding ratio">～</div>

                        <div class="col-xs-1  ">
                            <div class="form-group">
                                <input id="companyIdEndId" name="companyIdEndId" placeholder="999" class="form-control"
                                       type="text" value="" disabled onchange="$.fn.onInputValueChange('companyIdEndId', 'companyIdEndName')"/>
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input id="officeCodeStartName" name="officeCodeStartName" placeholder=""
                                       class="form-control" type="text" value="" disabled/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">～</div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input id="companyIdEndName" name="companyIdEndName" placeholder=""
                                       class="form-control" type="text" value="" disabled/>
                            </div>
                        </div>
                    </div>
                   </div>
                    <div class="col-xs-12 ">
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-2 no-padding">
                                <p class=" ">出力区分</p>
                            </div>
                            <div class="col-xs-2">
                                <input type="radio" name="outputSelection" id="outputSelection" value="all" checked onclick="$.fn.radioButtonSelectionChanged('outputSelection', 'outputSelectionId')"> <span> 配送委託先</span>
                            </div>

                            <div class="col-xs-2">
                                <input type="radio" name="outputSelection" id="outputSelection" value="directSales" onclick="$.fn.radioButtonSelectionChanged('outputSelection', 'outputSelectionId')"> <span> 販売店</span>
                            </div>


                        </div>
                        <div id="outputSelectionId">
                        <div class="col-xs-12 no-padding">

                            <div class="col-xs-1 col-xs-offset-2">
                                <div class="form-group">
                                    <input id="trustEndId" name="trustEndId" placeholder="999" class="form-control"
                                           type="text" value="" disabled onchange="$.fn.onInputValueChange('trustEndId', 'trustStartName')"/>
                                </div>

                            </div>
                            <div class="col-xs-3 no-padding">
                                <div class="form-group ">
                                    <input id="trustStartName" name="trustStartName" class="form-control" type="text"
                                           value="" disabled/>
                                </div>
                            </div>
                            <div class="col-xs-5" style="margin-top:5px;">
                                <div class="form-group">
                                    <span>（※配送委託先の場合 配送担当者を指定）</span>


                                </div>
                            </div>
                        </div>
                        </div>
                    </div>

                    <div class="col-xs-12">
                        <div class="col-xs-2 no-padding border-margin-exp">
                            <p>消費者コード</p>
                        </div>
                        <div class="col-xs-2">
                            <div class="form-group">
                                <input id="consumerCodeStart" name="consumerCodeStart" placeholder="0"
                                       class="form-control" type="text" value=""  onchange="$.fn.onInputValueChange('consumerCodeStart', 'consumerCodeStartName')"/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">～</div>
                        <div class="col-xs-2">
                            <div class="form-group">
                                <input id="consumeCodeEnd" name="consumeCodeEnd" placeholder="z" class="form-control"
                                       type="text" value="" onchange="$.fn.onInputValueChange('consumeCodeEnd', 'consumerCodeEndName')"/>
                            </div>
                        </div>

                        <div class="col-xs-2">
                            <div class="form-group">
                                <input id="consumerCodeStartName" name="consumerCodeStartName" class="form-control"
                                       type="text" value=""/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">～</div>
                        <div class="col-xs-2">
                            <div class="form-group">
                                <input id="consumerCodeEndName" name="consumerCodeEndName" class="form-control"
                                       type="text" value=""/>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="col-xs-2 no-padding border-margin-exp">
                            <p>検針日付</p>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-3">
                                <input type="date" class="form-control"/>
                            </div>
                            <div class="col-xs-1 no-padding ratio">～</div>
                            <div class="col-xs-3">
                                <input type="date" class="form-control"/>
                            </div>

                        </div>


                    </div>
                    <div class="col-xs-12  ">
                        <div class="col-xs-2 no-padding border-margin-exp">
                            <p>入力作業日


                            </p>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-3">
                                <input type="date" class="form-control"/>
                            </div>
                            <div class="col-xs-1 no-padding ratio">～</div>
                            <div class="col-xs-3">
                                <input type="date" class="form-control"/>
                            </div>

                        </div>


                    </div>
            </div>

        <div class="col-xs-12 border1 no-padding">
            <p class="back-end">出力指定

            </p>

                <div class="col-xs-12  ">

                    <div class="col-xs-12 no-padding border-margin">
                        <div class="col-xs-2  no-padding border-margin-exp">
                            <p>並び順</p>
                        </div>
                        <div class="col-xs-2">
                            <input id="classification1" name="classification" type="radio"
                                   value="手書伝票"/> 消費者コード順
                        </div>
                        <div class="col-xs-2 ml-n-30">
                            <input id="classification2" name="classification" type="radio"
                                   value="ハンディ"/> 検針順路順
                        </div>
                        <div class="col-xs-2 no-padding">
                            <input id="classification3" name="classification" type="radio"
                                   value="テレメ"/> 配送委託先管理コード順
                        </div>



                    </div>

                </div>
                <div class="col-xs-12  ">

                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-2  no-padding border-margin-exp">
                            <p>出力先</p>
                        </div>
                        <div class="col-xs-2">
                            <input id="meterReadingClassification1" name="meterReadingClassification" type="radio"
                                   value="手書伝票" onclick="$.fn.radioButtonSelectionChanged('meterReadingClassification', 'meterReadingClassification1')"/> プリンタ(印刷)
                        </div>
                        <div class="col-xs-2 no-padding ml-n-15">
                            <input id="meterReadingClassification2" name="meterReadingClassification" type="radio"
                                   value="ハンディ" onclick="$.fn.radioButtonSelectionChanged('meterReadingClassification', 'meterReadingClassification2')"/> 画面(印刷イメージ)
                        </div>




                    </div>

                </div>
            </div>

            <?php
            include "footer.php"
            ?>

            </form>
        </div>
     
 
</div>

</body>

</html>
