<?php
include "header.php"
?>
<?php
include "sidebar.php"
?>
<div class="col-md-10 col-xs-8 col-xs-12 no-padding">

    <div class="col-md-12 col-xs-12 no-padding body-background">

        <div class="head-p ">
            <p>消費設備配管期限管理帳票印刷指定

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
                                    <input type="radio" name="officeCodeSelection" id="officeCodeSelection" value="all" checked onclick="$.fn.radioButtonSelectionChanged('officeCodeSelection', 'officeCodeSelectionId')"> <span>全て</span>
                                </div>
                                <div class="col-xs-1">
                                    <input type="radio" name="officeCodeSelection" id="officeCodeSelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('officeCodeSelection', 'officeCodeSelectionId')"> <span>選択</span>
                                </div>

                            </div>
                            <div id="officeCodeSelectionId">
                                <div class="col-xs-12 no-padding">
                                    <div class="col-xs-1 col-xs-offset-1">
                                        <div class="form-group">
                                            <input id="officeCodeStartId" name="officeCodeStartId" placeholder="000" class="form-control" type="text" value="" 
                                            disabled onchange="$.fn.onInputValueChange('officeCodeStartId', 'officeCodeStartName')"/>
                                        </div>
                                    </div>
                                    <div class="col-xs-1 no-padding ratio">~</div>
                                    <div class="col-xs-1">
                                        <div class="form-group">
                                            <input id="companyIdEndId" name="companyIdEndId" placeholder="999" class="form-control" type="text" value="" 
                                            disabled onchange="$.fn.onInputValueChange('companyIdEndId', 'companyIdEndName')"/>
                                        </div>
                                    </div>
                                    <div class="col-xs-3">
                                        <div class="form-group">
                                            <input id="officeCodeStartName" name="officeCodeStartName" class="form-control" type="text"
                                            value="" disabled/>
                                        </div>
                                    </div>
                                    <div class="col-xs-1 no-padding ratio">~</div>
                                    <div class="col-xs-3">
                                        <div class="form-group">
                                            <input id="companyIdEndName" name="companyIdEndName" class="form-control" type="text"
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
                                    <input type="radio" name="companyClassification" id="companyClassification" value="all" checked onclick="$.fn.radioButtonSelectionChanged('companyClassification', 'companyClassificationId')"> <span>全て</span>


                                </div>
                                <div class="col-xs-1">
                                    <input type="radio" name="companyClassification" id="companyClassification" value="custom" onclick="$.fn.radioButtonSelectionChanged('companyClassification', 'companyClassificationId')"> <span>自社</span>


                                </div>
                                <div class="col-xs-2">
                                    <input type="radio" name="companyClassification" id="companyClassification" value="custom" onclick="$.fn.radioButtonSelectionChanged('companyClassification', 'companyClassificationId')"> <span>他社</span>


                                </div>
                            </div>

                            <div id="companyClassificationId">
                                <div class="col-xs-12 no-padding">
                                    <div class="col-xs-1 col-xs-offset-1">
                                        <div class="form-group">
                                            <input id="companyClassificationStartId" name="companyClassificationStartId" placeholder="000" class="form-control"
                                            type="text" value="" disabled onchange="$.fn.onInputValueChange('companyClassificationStartId', 'companyClassificationStartName')"/>
                                        </div>
                                    </div>
                                    <div class="col-xs-1 no-padding ratio">~</div>
                                    <div class="col-xs-1">
                                        <div class="form-group">
                                            <input id="companyClassificationEndId" name="companyClassificationEndId" placeholder="999" class="form-control"
                                            type="text" value="" disabled onchange="$.fn.onInputValueChange('companyClassificationEndId', 'companyClassificationEndName')"/>
                                        </div>
                                    </div>
                                    <div class="col-xs-3">
                                        <div class="form-group">
                                            <input id="companyClassificationStartName" name="companyClassificationStartName" class="form-control" type="text"
                                            value="" disabled/>
                                        </div>
                                    </div>
                                    <div class="col-xs-1 no-padding ratio">~</div>
                                    <div class="col-xs-3">
                                        <div class="form-group">
                                            <input id="companyClassificationEndName" name="companyClassificationEndName" class="form-control" type="text"
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
                                    <input type="radio" name="output1Selection" id="output1Selection" value="all" checked onclick="$.fn.radioButtonSelectionChanged('output1Selection', 'output1SelectionId')"> <span>全て</span>


                                </div>
                                <div class="col-xs-1">
                                    <input type="radio" name="output1Selection" id="output1Selection" value="custom" onclick="$.fn.radioButtonSelectionChanged('output1Selection', 'output1SelectionId')"> <span>地区</span>


                                </div>
                                <div class="col-xs-2">
                                    <input type="radio" name="output1Selection" id="output1Selection" value="custom" onclick="$.fn.radioButtonSelectionChanged('output1Selection', 'output1SelectionId')"> <span>営業担当者</span>


                                </div>

                            </div>
                            <div id="output1SelectionId">
                                <div class="col-xs-12 no-padding">
                                    <div class="col-xs-1 col-xs-offset-1">
                                        <div class="form-group">
                                            <input id="output1StartId" name="output1StartId" placeholder="000"
                                            class="form-control" type="text" value="" disabled onchange="$.fn.onInputValueChange('output1StartId', 'output1StartName')"/>
                                        </div>
                                    </div>
                                    <div class="col-xs-1 no-padding ratio">~</div>
                                    <div class="col-xs-1">
                                        <div class="form-group">
                                            <input id="output1EndId" name="output1EndId" placeholder="999" class="form-control"
                                            type="text" value="" disabled onchange="$.fn.onInputValueChange('output1EndId', 'output1EndName')"/>
                                        </div>
                                    </div>
                                    <div class="col-xs-3">
                                        <div class="form-group">
                                            <input id="output1StartName" name="output1StartName" class="form-control" type="text"
                                            value="" disabled/>
                                        </div>
                                    </div>
                                    <div class="col-xs-1 no-padding ratio">~</div>
                                    <div class="col-xs-3">
                                        <div class="form-group">
                                            <input id="output1EndName" name="output1EndName" class="form-control" type="text"
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
                                    <input id="consumerCodeStart" name="consumerCodeStart" placeholder="0"
                                    class="form-control" type="text" value="" onchange="$.fn.onInputValueChange('consumerCodeStart', 'consumerCodeStartName')"/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">~</div>
                            <div class="col-xs-2">
                                <div class="form-group">
                                    <input id="consumeCodeEnd" name="consumeCodeEnd" placeholder="z" class="form-control"
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
                                    <input type="radio" name="statusSelection" id="statusSelection" value="all" onclick="$.fn.radioButtonSelectionChanged('statusSelection', 'statusSelectionId')"><span>全て</span>
                                </div>
                                <div class="col-xs-2">
                                    <input type="radio" name="statusSelection" id="statusSelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('statusSelection', 'statusSelectionId')"><span>閉栓・休止除く</span>


                                </div>
                                <div class="col-xs-2">
                                    <input type="radio" name="statusSelection" id="statusSelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('statusSelection', 'statusSelectionId')"><span>未入居除く</span>

                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="col-xs-12 border1 no-padding">
                        <p class="backend">作成範囲指定 </p>
                        <div class="col-xs-12">
                            <div class="form-group">

                                <label class="col-xs-1 no-padding"> 経過年数

                                </label>

                                <div class="col-xs-10 no-padding">
                                    <input type="radio" name="elapsedYears" id="elapsedYears" value="all" onclick="$.fn.radioButtonSelectionChanged('elapsedYears', 'elapsedYearsId')"/> <span>指定なし</span>
                                    <input type="radio" name="elapsedYears" id="elapsedYears" value="custom" onclick="$.fn.radioButtonSelectionChanged('elapsedYears', 'elapsedYearsId')"/> <span>年数指定</span>


                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="form-group">

                                <label class="col-xs-1 no-padding"> 年以上
                                </label>
                                <label class="col-xs-1 no-padding"> 年数不明
                                </label>

                                <div class="col-xs-1 no-padding">
                                    <input type="radio" name="yearsUnknown" id="yearsUnknown" value="all" onclick="$.fn.radioButtonSelectionChanged('yearsUnknown', 'yearsUnknownId')"/> <span>含む</span>
                                </div>

                                <div class="col-xs-1">
                                    <input type="radio" name="yearsUnknown" id="yearsUnknown" value="custom" onclick="$.fn.radioButtonSelectionChanged('yearsUnknown', 'yearsUnknownId')"/> <span>除く</span>
                                </div>


                            </div>
                        </div>


                        <div class="col-xs-12">
                            <div class="form-group">

                                <label class="col-xs-1 no-padding"> 設置年月
                                </label>

                                <div class="col-xs-2">
                                    <div class="form-group">
                                        <input class="form-control" id="settingStartId" name="settingStartId"
                                               placeholder="0" type="text" value="" onchange="$.fn.onInputValueChange('settingStartId', 'settingStartName')"/>
                                    </div>
                                </div>
                                <div class="col-xs-1 no-padding ratio">~</div>
                                <div class="col-xs-2">
                                    <div class="form-group">
                                        <input class="form-control" id="settingStartName" name="settingStartName"
                                               placeholder="0" type="text" value=""/>
                                    </div>
                                </div>


                            </div>
                        </div>

                        <div class="col-xs-12">
                            <div class="form-group">

                                <label class="col-xs-1 no-padding"> 製造年月
                                </label>

                                <div class="col-xs-2">
                                    <div class="form-group">
                                        <input class="form-control" id="manufacturingDateStartId" name="manufacturingDateStartId"
                                               placeholder="0" type="text" value="" onchange="$.fn.onInputValueChange('manufacturingDateStartId', 'manufacturingDateStartName')"/>
                                    </div>
                                </div>
                                <div class="col-xs-1 no-padding ratio">~</div>
                                <div class="col-xs-2">
                                    <div class="form-group">
                                        <input class="form-control" id="manufacturingDateStartName" name="manufacturingDateStartName"
                                               placeholder="0" type="text" value=""/>
                                    </div>
                                </div>


                            </div>
                        </div>

                        <div class="col-xs-12">
                            <div class="form-group">

                                <label class="col-xs-1 p-size no-padding"> 安全弁交換年月
                                </label>

                                <div class="col-xs-2">
                                    <div class="form-group">
                                        <input class="form-control" id="safetyStartId" name="safetyStartId"
                                               placeholder="0" type="text" value="" onchange="$.fn.onInputValueChange('safetyStartId', 'safetyStartName')"/>
                                    </div>
                                </div>
                                <div class="col-xs-1 no-padding ratio">~</div>
                                <div class="col-xs-2">
                                    <div class="form-group">
                                        <input class="form-control" id="safetyStartName" name="safetyStartName"
                                               placeholder="0" type="text" value=""/>
                                    </div>
                                </div>


                            </div>
                        </div>


                        <div class="col-xs-12">
                            <div class="form-group">

                                <label class="col-xs-1 no-padding"> 対象法律
                                </label>

                                <div class="col-xs-1">
                                    <input type="radio" name="targetSelection" id="targetSelection" value="all" onclick="$.fn.radioButtonSelectionChanged('targetSelection', 'targetSelection')"/> <span>全て</span>
                                </div>

                                <div class="col-xs-1">
                                    <input type="radio" name="targetSelection" id="targetSelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('targetSelection', 'targetSelection')"/> <span>液石法</span>
                                </div>

                                <div class="col-xs-1">
                                    <input type="radio" name="targetSelection" id="targetSelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('targetSelection', 'targetSelection')"/> <span>高圧法</span>
                                </div>

                                <div class="col-xs-2">
                                    <input type="radio" name="targetSelection" id="targetSelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('targetSelection', 'targetSelection')"/> <span>ガス事業法</span>
                                </div>


                            </div>
                        </div>




                    </div>


                    <div class="col-xs-12 border1 no-padding bottom-box">
                        <p class="backend">出力指定 </p>

                        <div class="col-xs-12">
                            <div class="form-group">

                                <label class="col-xs-1 no-padding"> 改ページ指定
                                </label>

                                <div class="col-xs-2">
                                    <input type="radio" name="pageBreak" id="pageBreak" value="all" onclick="$.fn.radioButtonSelectionChanged('pageBreak', 'pageBreakId')"/> <span>営業所・販売店</span>
                                </div>

                                <div class="col-xs-1 no-padding">
                                    <input type="radio" name="pageBreak" id="pageBreak" value="custom" onclick="$.fn.radioButtonSelectionChanged('pageBreak', 'pageBreakId')"/> <span>地区</span>
                                </div>

                                <div class="col-xs-2 no-padding">
                                    <input type="radio" name="pageBreak" id="pageBreak" value="custom" onclick="$.fn.radioButtonSelectionChanged('pageBreak', 'pageBreakId')"/> <span>営業担当者</span>
                                </div>

                                <div class="col-xs-1 no-padding">
                                    <input type="radio" name="pageBreak" id="pageBreak" value="custom" onclick="$.fn.radioButtonSelectionChanged('pageBreak', 'pageBreakId')"/> <span>なし</span>
                                </div>

                            </div>
                        </div>

                        <div class="col-xs-12">

                            <div class="form-group">

                                <label class="col-xs-1 no-padding"> 並び順

                                </label>

                                <div class="col-xs-2">
                                    <input type="radio" name="sortBySelection" id="sortBySelection" value="all" onclick="$.fn.radioButtonSelectionChanged('sortBySelection', 'sortBySelectionId')"/> <span>消費者コード順</span>
                                </div>

                                <div class="col-xs-2 no-padding">
                                    <input type="radio" name="sortBySelection" id="sortBySelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('sortBySelection', 'sortBySelectionId')"/> <span>検針順路順</span>
                                </div>

                                <div class="col-xs-2">
                                    <input type="radio" name="sortBySelection" id="sortBySelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('sortBySelection', 'sortBySelectionId')"/> <span>検索名順</span>
                                </div>

                                <div class="col-xs-2">
                                    <input type="radio" name="sortBySelection" id="sortBySelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('sortBySelection', 'sortBySelectionId')"/> <span>設置年月順</span>
                                </div>

                                <div class="col-xs-2">
                                    <input type="radio" name="sortBySelection" id="sortBySelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('sortBySelection', 'sortBySelectionId')"/> <span>製造年月順</span>
                                </div>

                            </div>
                        </div>

                        <div class="col-xs-12">
                            <div class="form-group">

                                <label class="col-xs-1 no-padding"> 出力先
                                </label>

                                <div class="col-xs-2">
                                    <input type="radio" name="outputDestination" id="outputDestination" value="all" onclick="$.fn.radioButtonSelectionChanged('outputDestination', 'outputDestinationId')"/> <span>プリンタ（印刷）</span>
                                </div>

                                <div class="col-xs-2 no-padding">
                                    <input type="radio" name="outputDestination" id="outputDestination" value="custom" onclick="$.fn.radioButtonSelectionChanged('outputDestination', 'outputDestinationId')"/> <span>画面（印刷イメージ）</span>
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