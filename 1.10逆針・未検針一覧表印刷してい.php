<?php
include "header.php"
?>
<?php
include "sidebar.php"
?>

<div class="col-md-10 col-xs-8 col-xs-12 no-padding">

    <div class="col-md-12 col-xs-12 no-padding body-background">

        <div class="head-p ">
            <p>逆針・未検針一覧表印刷指定

            </p>
        </div>

    <div class="col-xs-12 border1 no-padding">
        <div class="col-xs-12 no-padding ">

                <p class="backend">作成範囲指定

                </p>
        </div>
        <form id="meter" action="/gas/meter-reading" method="POST">
            <div class="col-xs-12 border-margin">
                <div class="col-xs-1 no-padding">
                    <p>営業所コード</p>
                </div>
                <div class="col-xs-1   ">
                    <input type="radio" name="officeSelection" id="officeSelection" value="all" checked onclick="$.fn.radioButtonSelectionChanged('officeSelection', 'officeSelectionId')"> <span>全て</span>
                </div>
                <div class="col-xs-1  no-padding">
                    <input type="radio" name="officeSelection" id="officeSelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('officeSelection', 'officeSelectionId')"> <span>選択</span>
                </div>

            </div>
           <div id="officeSelectionId">
            <div class="col-xs-12 ">

                <div class="col-xs-1  col-xs-offset-1">
                    <div class="form-group">
                        <input id="officeCodeStartId" name="officeCodeStartId" placeholder="000"
                               class="form-control" type="text" value="" disabled onchange="$.fn.onInputValueChange('officeCodeStartId', 'officeCodeStartName')"/>
                    </div>
                </div>
                <div class="col-xs-1 no-padding ratio">~</div>
                <div class="col-xs-1 ">
                    <div class="form-group">
                        <input id="companyIdEndId" name="companyIdEndId" placeholder="999" class="form-control"
                               type="text" value="" disabled onchange="$.fn.onInputValueChange('companyIdEndId', 'companyIdEnd')"/>
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="form-group">
                        <input id="officeCodeStartName" name="officeCodeStartName" placeholder="Company 1"
                               class="form-control" type="text" value="" disabled/>
                    </div>
                </div>
                <div class="col-xs-1 no-padding ratio">~</div>
                <div class="col-xs-3">
                    <div class="form-group">
                        <input id="companyIdEnd" name="companyIdEnd" placeholder="Company 2"
                               class="form-control" type="text" value="" disabled/>
                    </div>
                </div>

            </div>
           </div>
            <div class="col-xs-12  ">
                <div class="col-xs-12 no-padding">
                    <div class="col-xs-1 no-padding">
                        <p>受託区分</p>
                    </div>
                    <div class="col-xs-1  ">
                        <input type="radio" name="trustSelection" id="trustSelection" value="all" checked onclick="$.fn.radioButtonSelectionChanged('trustSelection', 'trustSelectionId')"> <span>全て</span>
                    </div>
                    <div class="col-xs-1">
                        <input type="radio" name="trustSelection" id="trustSelection" value="directSales" onclick="$.fn.radioButtonSelectionChanged('trustSelection', 'trustSelectionId')"> <span>直売</span>
                    </div>
                    <div class="col-xs-1  no-padding">
                        <input type="radio" name="trustSelection" id="trustSelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('trustSelection', 'trustSelectionId')"> <span>販売店</span>


                    </div>

                </div>
               <div id="trustSelectionId">
                <div class="col-xs-12 no-padding">

                    <div class="col-xs-12 no-padding ">

                        <div class="col-xs-1 col-xs-offset-1">
                            <div class="form-group">
                                <input id="trustCodeStartId" name="trustCodeStartId" placeholder="000"
                                       class="form-control" type="text" value="" disabled onchange="$.fn.onInputValueChange('trustCodeStartId', 'trustStartName')"/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">~</div>
                        <div class="col-xs-1 ">
                            <div class="form-group">
                                <input id="trustEndId" name="trustEndId" placeholder="999"
                                       class="form-control" type="text" value="" disabled onchange="$.fn.onInputValueChange('trustEndId', 'trustEndName')" />
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input id="trustStartName" name="trustStartName"
                                       placeholder="Company 1" class="form-control" type="text" value="" disabled/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">~</div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input id="trustEndName" name="trustEndName" placeholder="Company 2"
                                       class="form-control" type="text" value="" disabled/>
                            </div>
                        </div>
                    </div>
                </div>
               </div>
            </div>
            <div class="col-xs-12 ">
                <div class="col-xs-12 no-padding">
                    <div class="col-xs-1 no-padding">
                        <p>出力区分

                        </p>
                    </div>
                    <div class="col-xs-1  ">
                        <input type="radio" name="outputSelection" id="outputSelection" value="all" checked onclick="$.fn.radioButtonSelectionChanged('outputSelection', 'outputSelectionId')"> <span>全て</span>
                    </div>
                    <div class="col-xs-1">
                        <input type="radio" name="outputSelection" id="outputSelection" value="directSales" onclick="$.fn.radioButtonSelectionChanged('outputSelection', 'outputSelectionId')"> <span>地区</span>
                    </div>
                    <div class="col-xs-1  no-padding">
                        <input type="radio" name="outputSelection" id="outputSelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('outputSelection', 'outputSelectionId')"> <span>検針担当者</span>
                    </div>
                    <div class="col-xs-1  no-padding">
                        <input type="radio" name="outputSelection" id="outputSelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('outputSelection', 'outputSelectionId')"> <span>検針順路</span>

                    </div>
                </div>
                <div id="outputSelectionId">
                <div class="col-xs-12 no-padding ">

                    <div class="col-xs-12 no-padding">

                        <div class="col-xs-1 col-xs-offset-1 ">
                            <div class="form-group no-padding">
                                <input id="outputStartId" name="outputStartId" placeholder="000"
                                       class="form-control" type="text" value="" disabled onchange="$.fn.onInputValueChange('outputStartId', 'outputStartName')"/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">~</div>
                        <div class="col-xs-1  ">
                            <div class="form-group">
                                <input id="outputEndId" name="outputEndId" placeholder="999"
                                       class="form-control" type="text" value="" disabled onchange="$.fn.onInputValueChange('outputEndId', 'outputEndName')"/>
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input id="outputStartName" name="outputStartName"
                                       placeholder="Company 1" class="form-control" type="text" value="" disabled/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">~</div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input id="outputEndName" name="outputEndName" placeholder="Company 2"
                                       class="form-control" type="text" value="" disabled/>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-xs-12  ">
                <div class="col-xs-1 no-padding">
                    <p>消費者コード</p>
                </div>
                <div class="col-xs-2 ">
                    <div class="form-group">
                        <input id="consumerCodeStart" name="consumerCodeStart" placeholder="0"
                               class="form-control" type="text" value=""  onchange="$.fn.onInputValueChange('consumerCodeStart', 'consumerCodeStartName')"/>
                    </div>
                </div>
                <div class="col-xs-1 no-padding ratio">~</div>
                <div class="col-xs-2">
                    <div class="form-group">
                        <input id="consumeCodeEnd" name="consumeCodeEnd" placeholder="z" class="form-control"
                               type="text" value=""  onchange="$.fn.onInputValueChange('consumeCodeEnd', 'consumerCodeEndName')"/>
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="form-group">
                        <input id="consumerCodeStartName" name="consumerCodeStartName" class="form-control"
                               type="text" value=""/>
                    </div>
                </div>
                <div class="col-xs-1 no-padding ratio">~</div>
                <div class="col-xs-3">
                    <div class="form-group">
                        <input id="consumerCodeEndName" name="consumerCodeEndName" class="form-control"
                               type="text" value=""/>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 no-padding">

                <div class="col-xs-12  ">
                    <div class="col-xs-1 no-padding">
                        <p>検針区分</p>
                    </div>

                    <div class="col-xs-1    ">
                        <input id="readingClassification1" name="meterClassification" type="radio"
                               value="全て" onclick="$.fn.radioButtonSelectionChanged('meterClassification', 'readingClassification1')"/> <span>全て</span>
                    </div>
                    <div class="col-xs-1 no-padding  ">
                        <input id="readingClassification1" name="meterClassification" type="radio"
                               value="手書伝票" onclick="$.fn.radioButtonSelectionChanged('meterClassification', 'readingClassification1')"/> <span>手書伝票</span>
                    </div>
                    <div class="col-xs-1 no-padding ">
                        <input id="readingClassification1" name="meterClassification" type="radio"
                               value="ハンディ" onclick="$.fn.radioButtonSelectionChanged('meterClassification', 'readingClassification1')"/><span>ハンディ</span>
                    </div>
                    <div class="col-xs-1  no-padding">
                        <input id="readingClassification1" name="meterClassification" type="radio"
                               value="テレメ" onclick="$.fn.radioButtonSelectionChanged('meterClassification', 'readingClassification1')"/><span>テレメ</span>
                    </div>


                </div>

            </div>


            <div class="col-xs-12 no-padding ">

                <div class="col-xs-12  ">
                    <div class="col-xs-1 no-padding">
                        <p>締切日</p>
                    </div>
                    <div class="col-xs-1  "><input id="meterSelection" name="meterSelection"
                                                   type="radio"
                                                   value="全て" onclick="$.fn.radioButtonSelectionChanged('meterSelection', 'meterSelectionId')"/> <span>全て</span>
                    </div>
                    <div class="col-xs-1 no-padding"><input id="meterSelection"
                                                            name="meterSelection" type="radio"
                                                            value="指定" onclick="$.fn.radioButtonSelectionChanged('meterSelection', 'meterSelectionId')"/> <span>指定</span>
                    </div>
                    <div class="col-xs-1"><input id="meterSelection" class="form-control"
                                                 name="meterSelection" type="text" style="height:25px;"/></div>日


                </div>

            </div>

            <div class="col-xs-12 no-padding">

                <div class="col-xs-12  ">
                    <div class="col-xs-1 no-padding">
                        <p>出力対象</p>
                    </div>

                    <div class="col-xs-2"><input id="meterReadingClassification1" name="meterReadingClassification"
                                                   type="radio"
                                                   value="手書伝票"/> <span>逆針のみ</span>
                    </div>
                    <div class="col-xs-2 no-padding"><input id="meterReadingClassification2"
                                                            name="meterReadingClassification" type="radio"
                                                            value="ハンディ"/> <span>未検針のみ</span>
                    </div>
                    <div class="col-xs-2 no-padding"><input id="meterReadingClassification2"
                                                            name="meterReadingClassification" type="radio"
                                                            value="ハンディ"/> <span>両方</span>
                    </div>


                </div>

            </div>
    </div>
    <div class="col-xs-12 border1 no-padding bottom-box">
        <p class="backend">出力指定

        </p>
        <div class="col-xs-12 no-padding border-margin">

            <div class="col-xs-12  ">
                <div class="col-xs-1 no-padding">
                    <p>改ページ指定</p>
                </div>
                <div class="col-xs-2">
                    <input id="meterClassification1" name="meterClassification" type="radio"
                           value="手書伝票"/> <span>営業所・販売店</span>
                </div>
                <div class="col-xs-1 no-padding">
                    <input id="meterClassification2" name="meterClassification" type="radio"
                           value="ハンディ"/> <span>地区</span>
                </div>
                <div class="col-xs-1 no-padding">
                    <input id="meterClassification3" name="meterClassification" type="radio" value="テレメ"/>
                    <span>検針担当者</span>
                </div>

                <div class="col-xs-1  ">
                    <input id="meterClassification3" name="meterClassification" type="radio" value="テレメ"/>
                    <span>なし</span>
                </div>


            </div>

        </div>


        <div class="col-xs-12 no-padding">

            <div class="col-xs-12  ">
                <div class="col-xs-1 no-padding">
                    <p>並び順 </p>
                </div>
                <div class="col-xs-2  ">
                    <input id="sortby" name="sortby" type="radio"
                           value="手書伝票" onclick="$.fn.radioButtonSelectionChanged('sortby', 'sortbyId')"/> <span>消費者コード順</span>
                </div>
                <div class="col-xs-1 no-padding">
                    <input id="sortby" name="sortby" type="radio"
                           value="ハンディ" onclick="$.fn.radioButtonSelectionChanged('sortby', 'sortbyId')"/> <span>検索名順</span>
                </div>
                <div class="col-xs-2">
                    <input id="sortby" name="sortby" type="radio" value="テレメ" onclick="$.fn.radioButtonSelectionChanged('sortby', 'sortbyId')"/><span>検針順路順</span>
                </div>


            </div>

        </div>
        <div class="col-xs-12 no-padding">

            <div class="col-xs-12  ">
                <div class="col-xs-1 no-padding">
                    <p>出力先</p>
                </div>
                <div class="col-xs-2  ">
                    <input id="sortSelection" name="sortSelection" type="radio"
                           value="手書伝票" onclick="$.fn.radioButtonSelectionChanged('sortSelection', 'sortSelectionId')"/><span> プリンタ(印刷)</span>
                </div>
                <div class="col-xs-2 no-padding">
                    <input id="sortSelection" name="sortSelection" type="radio"
                           value="ハンディ" onclick="$.fn.radioButtonSelectionChanged('sortSelection', 'sortSelectionId')"/> <span>画面(印刷イメージ)</span>
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