<?php
include "header.php"
?>
<?php
include "sidebar.php"
?>
<div class="col-md-10 col-xs-8 col-xs-12 no-padding">

    <div class="col-md-12 col-xs-12 no-padding body-background">

        <div class="head-p ">
            <p>燃焼器具帳票印刷指定

            </p>
        </div>
        <form action="/gas/meter-reading" id="meter" method="POST">

            <div class="col-xs-12 border1 no-padding">
                <p class="backend">消費者範囲指定 </p>
                <div class="col-xs-12">
                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-1 no-padding">
                            <p>営業所コード</p>
                        </div>
                        <div class="col-xs-1">
                            <input name="officeCode" type="radio" value="all" checked onclick="$.fn.radioButtonSelectionChanged('officeCode', 'officeCodeId')"> <span>全て</span>
                        </div>
                        <div class="col-xs-1 no-padding">
                            <input name="officeCode" type="radio" value="directSales" onclick="$.fn.radioButtonSelectionChanged('officeCode', 'officeCodeId')"> <span>選択</span>
                        </div>

                    </div>
                    <div id="officeCodeId">
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-1 col-xs-offset-1">
                                <div class="form-group">
                                    <input class="form-control" id="trustStartId" name="trustStartId"
                                           placeholder="000"
                                           type="text" value="" disabled onchange="$.fn.onInputValueChange('trustStartId', 'trustStartName')"/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">~</div>
                            <div class="col-xs-1">
                                <div class="form-group">
                                    <input class="form-control" id="trustEndId" name="trustEndId" placeholder="999"
                                           type="text" value="" disabled onchange="$.fn.onInputValueChange('trustEndId', 'trustEndName')"/>
                                </div>
                            </div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input class="form-control" id="trustStartName" name="trustStartName"
                                           type="text"
                                           value="" disabled/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">~</div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input class="form-control" id="trustEndName" name="trustEndName" type="text"
                                           value="" disabled/>
                                </div>
                            </div>
                    </div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-1 no-padding">
                            <p>自他社区分</p>
                        </div>
                        <div class="col-xs-1">
                            <input name="otherCompany" type="radio" value="all" checked onclick="$.fn.radioButtonSelectionChanged('otherCompany', 'otherCompanyId')"> <span>全て</span>


                        </div>
                        <div class="col-xs-1">
                            <input name="otherCompany" type="radio" value="directSales" onclick="$.fn.radioButtonSelectionChanged('otherCompany', 'otherCompanyId')"> <span>自社</span>


                        </div>
                        <div class="col-xs-1">
                            <input name="otherCompany" type="radio" value="salesOutlet" onclick="$.fn.radioButtonSelectionChanged('otherCompany', 'otherCompanyId')"> <span>他社</span>


                        </div>
                    </div>


                    <div id="otherCompanyId">
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-1 col-xs-offset-1">
                                <div class="form-group">
                                    <input class="form-control" id="otherStartId" name="otherStartId"
                                           placeholder="000"
                                           type="text" value="" disabled onchange="$.fn.onInputValueChange('otherStartId', 'otherStartName')"/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">~</div>
                            <div class="col-xs-1">
                                <div class="form-group">
                                    <input class="form-control" id="otherEndId" name="otherEndId" placeholder="999"
                                           type="text" value="" disabled onchange="$.fn.onInputValueChange('otherEndId', 'otherEndName')"/>
                                </div>
                            </div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input class="form-control" id="otherStartName" name="otherStartName"
                                           type="text"
                                           value="" disabled/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">~</div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input class="form-control" id="otherEndName" name="otherEndName" type="text"
                                           value="" disabled/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-xs-12">
                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-1 no-padding">
                            <p>出力区分</p>
                        </div>
                        <div class="col-xs-1">
                            <input name="output" type="radio" value="all" checked onclick="$.fn.radioButtonSelectionChanged('output', 'outputId')"> <span>全て</span>


                        </div>
                        <div class="col-xs-1">
                            <input name="output" type="radio" value="directSales" onclick="$.fn.radioButtonSelectionChanged('output', 'outputId')"> <span>地区</span>


                        </div>
                        <div class="col-xs-2">
                            <input name="output" type="radio" value="salesOutlet" onclick="$.fn.radioButtonSelectionChanged('output', 'outputId')"> <span>営業担当者</span>


                        </div>

                    </div>
                    <div id="outputId">
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-1 col-xs-offset-1">
                                <div class="form-group">
                                    <input class="form-control" id="outputStartId" name="outputStartId"
                                           placeholder="000" type="text" value="" disabled onchange="$.fn.onInputValueChange('outputStartId', 'outputStartName')"/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">~</div>
                            <div class="col-xs-1">
                                <div class="form-group">
                                    <input class="form-control" id="outputEndId" name="outputEndId"
                                           placeholder="999"
                                           type="text" value="" disabled onchange="$.fn.onInputValueChange('outputEndId', 'outputEndName')"/>
                                </div>
                            </div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input class="form-control" id="outputStartName" name="outputStartName"
                                           type="text"
                                           value="" disabled/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">~</div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input class="form-control" id="outputEndName" name="outputEndName" type="text"
                                           value="" disabled/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12">
                    <div class="col-xs-1 no-padding">
                        <p>消費者コード</p>
                    </div>
                    <div class="col-xs-2">
                        <div class="form-group">
                            <input class="form-control" id="consumerCodeStart" name="consumerCodeStart"
                                   placeholder="0" type="text" value="" onchange="$.fn.onInputValueChange('consumerCodeStart', 'consumerCodeStartName')"/>
                        </div>
                    </div>
                    <div class="col-xs-1 no-padding ratio">~</div>
                    <div class="col-xs-2">
                        <div class="form-group">
                            <input class="form-control" id="consumeCodeEnd" name="consumeCodeEnd"
                                   placeholder="z"
                                   type="text" value="" onchange="$.fn.onInputValueChange('consumeCodeEnd', 'consumerCodeEndName')"/>
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <div class="form-group">
                            <input class="form-control" id="consumerCodeStartName" name="consumerCodeStartName"
                                   type="text" value=""/>
                        </div>
                    </div>
                    <div class="col-xs-1 no-padding ratio">~</div>
                    <div class="col-xs-3">
                        <div class="form-group">
                            <input class="form-control" id="consumerCodeEndName" name="consumerCodeEndName"
                                   type="text" value=""/>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12">
                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-1 no-padding">
                            <p>入居状態</p>
                        </div>
                        <div class="col-xs-1">
                            <input name="moveIn" type="radio" value="all" onclick="$.fn.radioButtonSelectionChanged('moveIn', 'moveInId')"><span>全て</span>
                        </div>
                        <div class="col-xs-1">
                            <input name="moveIn" type="radio" value="directSales" onclick="$.fn.radioButtonSelectionChanged('moveIn', 'moveInId')"><span>閉栓・休止除く</span>


                        </div>
                        <div class="col-xs-1">
                            <input name="moveIn" type="radio" value="directSales" onclick="$.fn.radioButtonSelectionChanged('moveIn', 'moveInId')"><span>未入居除く</span>

                        </div>

                    </div>

                </div>
            </div>
            <div class="col-xs-12 border1 no-padding">
                <p class="backend">作成範囲指定 </p>

                <div class="form-group">

                    <label class="col-xs-1"> 共消

                    </label>

                    <div class="col-xs-10">
                        <input type="radio" name="total" value="all" onclick="$.fn.radioButtonSelectionChanged('total', 'totalId')"/> <span>全て</span>
                        <input type="radio" name="total" value="total" onclick="$.fn.radioButtonSelectionChanged('total', 'totalId')"/> <span>供給管</span>
                        <input type="radio" name="total" value="total" onclick="$.fn.radioButtonSelectionChanged('total', 'totalId')"/> <span>配管</span>


                    </div>

                </div>
                <div class="col-xs-12">

                    <div class="form-group">
                        <label class="col-xs-1 no-padding"> 種別
                        </label>

                        <div class="col-xs-10 no-padding">
                            <input type="radio" name="Classification" value="all" checked onclick="$.fn.radioButtonSelectionChanged('Classification', 'ClassificationId')"/> <span>全て</span>
                            <input type="radio" name="Classification" value="Classification" onclick="$.fn.radioButtonSelectionChanged('Classification', 'ClassificationId')"/> <span>選択</span>
                        </div>

                       <div id="ClassificationId">
                        <div class="col-xs-2">
                            <div class="form-group">
                                <input class="form-control" id="consumerCode_1Start" name="consumerCode_1Start"
                                       placeholder="0" type="text" value="" disabled onchange="$.fn.onInputValueChange('consumerCode_1Start', 'consumerCode_1StartName')"/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">~</div>
                        <div class="col-xs-2">
                            <div class="form-group">
                                <input class="form-control" id="consumeCode_1End" name="consumeCode_1End"
                                       placeholder="z"
                                       type="text" value="" disabled onchange="$.fn.onInputValueChange('consumeCode_1End', 'consumerCode_1EndName')"/>
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input class="form-control" id="consumerCode_1StartName"
                                       name="consumerCode_1Start_1Name"
                                       type="text" value="" dsabled/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">~</div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input class="form-control" id="consumerCode_1EndName" name="consumerCode_1EndName"
                                       type="text" value="" disabled/>
                            </div>
                        </div>
                       </div>

                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="form-group">
                        <label class="col-xs-1 no-padding"> メーカ

                        </label>

                        <div class="col-xs-1 no-padding">
                            <input type="radio" name="manufacturer" value="all" checked onclick="$.fn.radioButtonSelectionChanged('manufacturer', 'manufacturerId')"/> <span>全て</span>
                        </div>

                        <div class="col-xs-1">
                            <input type="radio" name="manufacturer" value="manufacturer" onclick="$.fn.radioButtonSelectionChanged('manufacturer', 'manufacturerId')"/> <span>選択</span>
                        </div>
                       <div id="manufacturerId">
                        <div class="col-xs-1">
                            <div class="form-group">
                                <input class="form-control" id="manufacturerCodeStart" name="manufacturerCodeStart"
                                       placeholder="0" type="text" value="" disabled onchange="$.fn.onInputValueChange('manufacturerCodeStart', 'manufacturerCodeStartName')"/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">~</div>
                        <div class="col-xs-1">
                            <div class="form-group">
                                <input class="form-control" id="manufacturerCodeEnd" name="manufacturerCodeEnd"
                                       placeholder="z"
                                       type="text" value="" disabled onchange="$.fn.onInputValueChange('manufacturerCodeEnd', 'manufacturerCodeEndName')"/>
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input class="form-control" id="manufacturerCodeStartName"
                                       name="manufacturerCodeStartName"
                                       type="text" value="" disabled/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">~</div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input class="form-control" id="manufacturerCodeEndName" name="manufacturerCodeEndName"
                                       type="text" value="" disabled/>
                            </div>
                        </div>
                       </div>

                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="form-group">
                        <label class="col-xs-1 no-padding"> 型式

                        </label>

                        <div class="col-xs-1 no-padding">
                            <input type="radio" name="type" value="all" checked onclick="$.fn.radioButtonSelectionChanged('type', 'typeId')"/> <span>全て</span>
                        </div>

                        <div class="col-xs-1">
                            <input type="radio" name="type" value="type" onclick="$.fn.radioButtonSelectionChanged('type', 'typeId')"/> <span>指定</span>
                        </div>
                        <div id="typeId">
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input class="form-control" id="typeStart" name="typeStart"
                                           placeholder="0" type="text" value="" disabled onchange="$.fn.onInputValueChange('typeStart', 'typeEnd')"/>
                                </div>
                            </div>
                            <div class="col-xs-1">
                                <div class="form-group">
                                    <input class="form-control" id="typeEnd" name="typeEnd"
                                           placeholder="z"
                                           type="text" value="" disabled/>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-1">
                            <input type="radio" name="type_2" value="all" onclick="$.fn.radioButtonSelectionChanged('type_2', 'type_2Id')"/> <span>を含む</span>
                        </div>

                        <div class="col-xs-1 no-padding">
                            <input type="radio" name="type_2" value="type_2" onclick="$.fn.radioButtonSelectionChanged('type_2', 'type_2Id')"/> <span>で始まる</span>
                        </div>


                    </div>
                </div>

                <div class="col-xs-12">
                    <div class="form-group">
                        <label class="col-xs-1 p-size no-padding"> 大小文字判別

                        </label>

                        <div class="col-xs-1 no-padding">
                            <input type="radio" name="sizeword" value="all" onclick="$.fn.radioButtonSelectionChanged('sizeword', 'sizewordId')"/> <span>しない</span>
                        </div>

                        <div class="col-xs-1">
                            <input type="radio" name="sizeword" value="sizeword" onclick="$.fn.radioButtonSelectionChanged('sizeword', 'sizewordId')"/> <span>する</span>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12">
                    <div class="form-group">
                        <label class="col-xs-1 no-padding"> 立消え

                        </label>
                        <div class="col-xs-1">
                            <div class="form-group">
                                <input class="form-control" id="consumerCodeStart" name="consumerCodeStart"
                                       placeholder="0" type="text" value=""/>
                            </div>
                        </div>
                        <label class="col-xs-1 no-padding"> 不燃防止

                        </label>
                        <div class="col-xs-1">
                            <div class="form-group">
                                <input class="form-control" id="consumeCodeEnd" name="consumeCodeEnd"
                                       placeholder="z"
                                       type="text" value=""/>
                            </div>
                        </div>
                        <label class="col-xs-1 no-padding"> 過熱防止

                        </label>
                        <div class="col-xs-1">
                            <div class="form-group">
                                <input class="form-control" id="consumeCodeEnd" name="consumeCodeEnd"
                                       placeholder="z"
                                       type="text" value=""/>
                            </div>
                        </div>
                        <div class="col-xs-1">
                            <input type="radio" name="size" value="all" onclick="$.fn.radioButtonSelectionChanged('size', 'sizeId')"/> <span>全て</span>
                        </div>

                        <div class="col-xs-1">
                            <input type="radio" name="size" value="size" onclick="$.fn.radioButtonSelectionChanged('size', 'sizeId')"/> <span>有</span>
                        </div>

                        <div class="col-xs-1">
                            <input type="radio" name="size" value="size" onclick="$.fn.radioButtonSelectionChanged('size', 'sizeId')"/> <span>無</span>
                        </div>

                        <div class="col-xs-2">
                            <input type="radio" name="size" value="size" onclick="$.fn.radioButtonSelectionChanged('size', 'sizeId')"/> <span>該当なし</span>
                        </div>


                    </div>
                </div>

                <div class="col-xs-12">
                    <div class="form-group">
                        <label class="col-xs-1 no-padding"> 製造番号

                        </label>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input class="form-control" id="consumeCodeEnd" name="consumeCodeEnd"
                                       placeholder="z"
                                       type="text" value=""/>
                            </div>
                        </div>
                        <label class="col-xs-2 control-label"> で始まる

                        </label>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="form-group">

                        <label class="col-xs-1 no-padding"> 年月指定
                        </label>

                        <div class="col-xs-1 no-padding">
                            <input type="radio" name="yearMonth" value="all" onclick="$.fn.radioButtonSelectionChanged('yearMonth', 'yearMonthId')"/> <span>指定なし</span>
                        </div>

                        <div class="col-xs-2">
                            <input type="radio" name="yearMonth" value="yearMonth" onclick="$.fn.radioButtonSelectionChanged('yearMonth', 'yearMonthId')"/> <span>経過年数</span>
                        </div>

                        <div class="col-xs-2">
                            <input type="radio" name="yearMonth" value="yearMonth" onclick="$.fn.radioButtonSelectionChanged('yearMonth', 'yearMonthId')"/> <span>製造年月</span>
                        </div>

                    </div>
                </div>

                <div class="col-xs-12">
                    <div class="form-group">

                        <label class="col-xs-1 no-padding"> 年以上
                        </label>
                        <label class="col-xs-1 no-padding"> 不明  
                        </label>

                        <div class="col-xs-1">
                            <input type="radio" name="unknown" value="all" onclick="$.fn.radioButtonSelectionChanged('unknown', 'unknownId')"/> <span>含む</span>
                        </div>

                        <div class="col-xs-2">
                            <input type="radio" name="unknown" value="unknown" onclick="$.fn.radioButtonSelectionChanged('unknown', 'unknownId')"/> <span>除く</span>
                        </div>


                    </div>
                </div>

                <div class="col-xs-12">
                    <div class="form-group">

                        <label class="col-xs-1 no-padding"> 対象法律
                        </label>

                        <div class="col-xs-1 no-padding">
                            <input type="radio" name="targetLow" value="all" onclick="$.fn.radioButtonSelectionChanged('targetLow', 'targetLowId')"/> <span>全て</span>
                        </div>

                        <div class="col-xs-2">
                            <input type="radio" name="targetLow" value="targetLow" onclick="$.fn.radioButtonSelectionChanged('targetLow', 'targetLowId')"/> <span>液石法</span>
                        </div>

                        <div class="col-xs-2">
                            <input type="radio" name="targetLow" value="targetLow" onclick="$.fn.radioButtonSelectionChanged('targetLow', 'targetLowId')"/> <span>高圧法</span>
                        </div>

                        <div class="col-xs-2">
                            <input type="radio" name="targetLow" value="targetLow" onclick="$.fn.radioButtonSelectionChanged('targetLow', 'targetLowId')"/> <span>ガス事業法</span>
                        </div>


                    </div>
                </div>

                <div class="col-xs-12">
                    <div class="form-group">

                        <label class="col-xs-1 no-padding"> 製造年月状態
                        </label>

                        <div class="col-xs-1 no-padding">
                            <input type="radio" name="production" value="all" onclick="$.fn.radioButtonSelectionChanged('production', 'productionId')"/> <span>全て</span>
                        </div>

                        <div class="col-xs-2">
                            <input type="radio" name="production" value="production" onclick="$.fn.radioButtonSelectionChanged('production', 'productionId')"/> <span>未調査</span>
                        </div>

                        <div class="col-xs-2">
                            <input type="radio" name="production" value="production" onclick="$.fn.radioButtonSelectionChanged('production', 'productionId')"/> <span>不明</span>
                        </div>

                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="form-group">

                        <label class="col-xs-1 no-padding"> 施設区分
                        </label>

                        <div class="col-xs-1 no-padding">
                            <input type="radio" name="facility" value="all" checked onclick="$.fn.radioButtonSelectionChanged('facility', 'facilityId')"/> <span>全て</span>
                        </div>

                        <div class="col-xs-2">
                            <input type="radio" name="facility" value="facility" onclick="$.fn.radioButtonSelectionChanged('facility', 'facilityId')"/> <span>選択</span>
                        </div>
                     <div id="facilityId">
                        <div class="col-xs-1">
                            <div class="form-group">
                                <input class="form-control" id="facilityStart" name="facilityStart"
                                       placeholder="0" type="text" value="" disabled onchange="$.fn.onInputValueChange('facilityStart', 'facilityStartName')"/>
                            </div>
                        </div>
                        <div class="col-xs-1">
                            <div class="form-group">
                                <input class="form-control" id="facilityEnd" name="facilityEnd"
                                       placeholder="0" type="text" value="" disabled onchange="$.fn.onInputValueChange('facilityEnd', 'facilityName')"/>
                            </div>
                        </div>

                        <div class="col-xs-2">
                            <div class="form-group">
                                <input class="form-control" id="facilityStartName" name="facilityStartName"
                                       placeholder="0" type="text" value="" disabled/>
                            </div>
                        </div>
                        <div class="col-xs-2">
                            <div class="form-group">
                                <input class="form-control" id="facilityName" name="facilityName"
                                       placeholder="0" type="text" value="" disabled/>
                            </div>
                        </div>
                     </div>
                    </div>
                </div>
            </div>


    </div>


    <div class="col-xs-12 border1 no-padding" style="background-color: white">
        <p class="backend">年異常 </p>


        <div class="col-xs-12">
            <div class="form-group">

                <label class="col-xs-1 no-padding">年数不明
                </label>

                <div class="col-xs-1 no-padding">
                    <input type="radio" name="number" value="all" onclick="$.fn.radioButtonSelectionChanged('number', 'numberId')"/> <span>含む</span>
                </div>

                <div class="col-xs-1">
                    <input type="radio" name="number" value="number" onclick="$.fn.radioButtonSelectionChanged('number', 'numberId')"/> <span>除く</span>
                </div>


            </div>
        </div>
        <div class="col-xs-12">
            <div class="form-group">

                <label class="col-xs-1 no-padding">漏洩
                </label>

                <div class="col-xs-1 no-padding">
                    <input type="radio" name="leakage" value="all" onclick="$.fn.radioButtonSelectionChanged('leakage', 'leakageId')"/> <span>全て</span>
                </div>

                <div class="col-xs-1">
                    <input type="radio" name="leakage" value="leakage" onclick="$.fn.radioButtonSelectionChanged('leakage', 'leakageId')"/> <span>有</span>
                </div>

                <div class="col-xs-1">
                    <input type="radio" name="leakage" value="leakage" onclick="$.fn.radioButtonSelectionChanged('leakage', 'leakageId')"/> <span>無</span>
                </div>

            </div>
        </div>

        <div class="col-xs-12">

            <div class="form-group">

                <label class="col-xs-1 no-padding"> 地盤沈下

                </label>

                <div class="col-xs-1 no-padding">
                    <input type="radio" name="ground" value="all" onclick="$.fn.radioButtonSelectionChanged('ground', 'groundId')"/> <span>全て</span>
                </div>

                <div class="col-xs-1">
                    <input type="radio" name="ground" value="ground" onclick="$.fn.radioButtonSelectionChanged('ground', 'groundId')"/> <span>有</span>
                </div>

                <div class="col-xs-1">
                    <input type="radio" name="ground" value="ground" onclick="$.fn.radioButtonSelectionChanged('ground', 'groundId')"/> <span>無</span>
                </div>

            </div>
        </div>

        <div class="col-xs-12">
            <div class="form-group">

                <label class="col-xs-1 p-size-1 no-padding"> 漏洩検知装置設置
                </label>

                <div class="col-xs-1 no-padding">
                    <input type="radio" name="detector" value="all" onclick="$.fn.radioButtonSelectionChanged('detector', 'detectorId')"/> <span>全て</span>
                </div>

                <div class="col-xs-2">
                    <input type="radio" name="detector" value="detector" onclick="$.fn.radioButtonSelectionChanged('detector', 'detectorId')"/> <span>未設置のみ</span>
                </div>


            </div>
        </div>
        <div class="col-xs-12">
            <div class="form-group">

                <label class="col-xs-1 no-padding"> 対象法律
                </label>

                <div class="col-xs-1 no-padding">
                    <input type="radio" name="targetLow_2" value="all" onclick="$.fn.radioButtonSelectionChanged('targetLow_2', 'targetLow_2Id')"/> <span>全て</span>
                </div>

                <div class="col-xs-2">
                    <input type="radio" name="targetLow_2" value="targetLow_2" onclick="$.fn.radioButtonSelectionChanged('targetLow_2', 'targetLow_2Id')"/> <span>液石法</span>
                </div>

                <div class="col-xs-2">
                    <input type="radio" name="targetLow_2" value="targetLow_2" onclick="$.fn.radioButtonSelectionChanged('targetLow_2', 'targetLow_2Id')"/> <span>高圧法</span>
                </div>

                <div class="col-xs-2">
                    <input type="radio" name="targetLow_2" value="targetLow_2" onclick="$.fn.radioButtonSelectionChanged('targetLow_2', 'targetLow_2Id')"/> <span>ガス事業法</span>
                </div>

            </div>
        </div>

        <div class="col-xs-12">
            <div class="form-group">

                <label class="col-xs-1 no-padding"> 施設区分
                </label>

                <div class="col-xs-1 no-padding">
                    <input type="radio" name="classification_2" value="all" checked onclick="$.fn.radioButtonSelectionChanged('classification_2', 'classification_2Id')"/> <span>全て</span>
                </div>

                <div class="col-xs-1">
                    <input type="radio" name="classification_2" value="classification_2" onclick="$.fn.radioButtonSelectionChanged('classification_2', 'classification_2Id')"/> <span>選択</span>
                </div>
              <div id="classification_2Id">
                <div class="col-xs-1">
                    <div class="form-group">
                        <input class="form-control" id="classification_2Start" name="classification_2Start"
                               placeholder="0" type="text" value="" disabled onchange="$.fn.onInputValueChange('classification_2Start', 'classification_2StartName')"/>
                    </div>
                </div>
                <div class="col-xs-1 no-padding ratio">~</div>
                <div class="col-xs-1">
                    <div class="form-group">
                        <input class="form-control" id="classification_2End" name="classification_2End"
                               placeholder="z"
                               type="text" value="" disabled onchange="$.fn.onInputValueChange('classification_2End', 'classification_2EndName')"/>
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="form-group">
                        <input class="form-control" id="classification_2StartName"
                               name="classification_2StartName"
                               type="text" value="" disabled/>
                    </div>
                </div>
                <div class="col-xs-1 no-padding ratio">~</div>
                <div class="col-xs-3">
                    <div class="form-group">
                        <input class="form-control" id="classification_2EndName" name="classification_2EndName"
                               type="text" value="" disabled/>
                    </div>
                </div>
              </div>

            </div>


        </div>

</div>

    <div class="col-xs-12 border1 no-padding bottom-box" style="background-color: white">
        <p class="backend">消費者範囲指定 </p>
    <div class="col-xs-12">
        <div class="form-group">
            <div class="col-xs-12 no-padding">
                <div class="form-group">

                    <label class="col-xs-1 no-padding"> 出力帳票
                    </label>

                    <div class="col-xs-1">
                        <input type="radio" name="outputFrom" value="all" onclick="$.fn.radioButtonSelectionChanged('outputFrom', 'outputFromId')"/> <span>一覧表</span>
                    </div>

                    <div class="col-xs-2">
                        <input type="radio" name="outputFrom" value="outputFrom" onclick="$.fn.radioButtonSelectionChanged('outputFrom', 'outputFromId')"/> <span>集計表</span>
                    </div>


                </div>
            </div>

        </div>

    </div>

    <div class="col-xs-12">
        <div class="form-group">

            <label class="col-xs-1 no-padding"> 改ページ指定
            </label>

            <div class="col-xs-2">
                <input type="radio" name="pageBreak" value="all" onclick="$.fn.radioButtonSelectionChanged('pageBreak', 'pageBreakId')"/> <span>営業所・販売店</span>
            </div>

            <div class="col-xs-2">
                <input type="radio" name="pageBreak" value="pageBreak" onclick="$.fn.radioButtonSelectionChanged('pageBreak', 'pageBreakId')"/> <span>地区</span>
            </div>

            <div class="col-xs-2">
                <input type="radio" name="pageBreak" value="pageBreak" onclick="$.fn.radioButtonSelectionChanged('pageBreak', 'pageBreakId')"/> <span>営業担当者</span>
            </div>

            <div class="col-xs-2">
                <input type="radio" name="pageBreak" value="pageBreak" onclick="$.fn.radioButtonSelectionChanged('pageBreak', 'pageBreakId')"/> <span>なし</span>
            </div>

        </div>
    </div>

    <div class="col-xs-12">

        <div class="form-group">

            <label class="col-xs-1 no-padding"> 並び順

            </label>

            <div class="col-xs-2">
                <input type="radio" name="sortBy" value="all" onclick="$.fn.radioButtonSelectionChanged('sortBy', 'sortById')"/> <span>消費者コード順</span>
            </div>

            <div class="col-xs-2">
                <input type="radio" name="sortBy" value="sortBy" onclick="$.fn.radioButtonSelectionChanged('sortBy', 'sortById')"/> <span>検針順路順</span>
            </div>


        </div>
    </div>

    <div class="col-xs-12">
        <div class="form-group">

            <label class="col-xs-1 no-padding"> 出力先
            </label>

            <div class="col-xs-2">
                <input type="radio" name="destination" value="all" onclick="$.fn.radioButtonSelectionChanged('destination', 'destinationId')"/> <span>プリンタ（印刷）</span>
            </div>

            <div class="col-xs-2 no-padding">
                <input type="radio" name="destination" value="destination" onclick="$.fn.radioButtonSelectionChanged('destination', 'destinationId')"/> <span>画面（印刷イメージ）</span>
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
</div>
</div>

</body>

</html>