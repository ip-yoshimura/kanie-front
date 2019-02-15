<?php
include "header.php"
?>
<?php
include "sidebar.php"
?>
<div class="col-md-10 col-xs-8 col-xs-12 no-padding">

    <div class="col-md-12 col-xs-12 no-padding body-background">

        <div class="head-p ">
            <p>供給管期限管理帳票印刷指定

            </p>
        </div>
                <form id="meter" action="/gas/meter-reading" method="POST">
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
                            <div class="col-xs-1 no-padding">
                                <input type="radio" name="officeCodeSelection" id="officeCodeSelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('officeCodeSelection', 'officeCodeSelectionId')"> <span>選択</span>
                            </div>

                            <div id="officeCodeSelectionId">
                                <div class="col-xs-12 no-padding">
                                    <div class="col-xs-1 col-xs-offset-1">
                                        <div class="form-group">
                                            <input name="officeCodeStartId" id="officeCodeStartId" placeholder="000" class="form-control" type="text" value="" disabled onchange="$.fn.onInputValueChange('officeCodeStartId', 'officeCodeStartName')"/>
                                        </div>
                                    </div>
                                    <div class="col-xs-1 no-padding ratio">~</div>
                                    <div class="col-xs-1">
                                        <div class="form-group">
                                            <input name="companyIdEndId" id="companyIdEndId" placeholder="999" class="form-control" type="text" value="" disabled onchange="$.fn.onInputValueChange('companyIdEndId', 'companyIdEndName')"/>
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
                                <input type="radio" name="differentiation" id="differentiation" value="all" checked onclick="$.fn.radioButtonSelectionChanged('differentiation', 'differentiationId')"> <span>全て</span>


                            </div>
                            <div class="col-xs-1">
                                <input type="radio" name="differentiation" id="differentiation" value="custom" onclick="$.fn.radioButtonSelectionChanged('differentiation', 'differentiationId')"> <span>地区</span>


                            </div>
                            <div class="col-xs-2">
                                <input type="radio" name="differentiation" id="differentiation" value="custom" onclick="$.fn.radioButtonSelectionChanged('differentiation', 'differentiationId')"> <span>営業担当者</span>


                            </div>

                        </div>
                        <div id="differentiationId">
                            <div class="col-xs-12 no-padding">
                                <div class="col-xs-1 col-xs-offset-1">
                                    <div class="form-group">
                                        <input id="differentiationStartId" name="differentiationStartId" placeholder="000"
                                               class="form-control" type="text" value="" disabled onchange="$.fn.onInputValueChange('differentiationStartId', 'differentiationStartName')"/>
                                    </div>
                                </div>
                                <div class="col-xs-1 no-padding ratio">~</div>
                                <div class="col-xs-1">
                                    <div class="form-group">
                                        <input id="differentiationEndId" name="differentiationEndId" placeholder="999" class="form-control"
                                               type="text" value="" disabled onchange="$.fn.onInputValueChange('differentiationEndId', 'differentiationEndName')"/>
                                    </div>
                                </div>
                                <div class="col-xs-3">
                                    <div class="form-group">
                                        <input id="differentiationStartName" name="differentiationStartName" class="form-control" type="text"
                                               value="" disabled/>
                                    </div>
                                </div>
                                <div class="col-xs-1 no-padding ratio">~</div>
                                <div class="col-xs-3">
                                    <div class="form-group">
                                        <input id="differentiationEndName" name="differentiationEndName" class="form-control" type="text"
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
                    </div>

                    <div class="col-xs-12 border1 no-padding">
                        <p class="backend">作成範囲指定
                        </p>

                    <div class="col-xs-12">
                        <div class="form-group">

                            <label class="col-xs-1 no-padding"> 圧力

                            </label>

                            <div class="col-xs-1 no-padding">
                                <input type="radio" name="pressure" id="pressure" value="all" onclick="$.fn.radioButtonSelectionChanged('pressure', 'pressureId')"/> <span>全て</span>
                            </div>


                            <div class="col-xs-1 no-padding">
                                <input type="radio" name="pressure" id="pressure" value="custom" onclick="$.fn.radioButtonSelectionChanged('pressure', 'pressureId')"/> <span>高圧</span>
                            </div>

                            <div class="col-xs-1 no-padding">
                                <input type="radio" name="pressure" id="pressure" value="custom" onclick="$.fn.radioButtonSelectionChanged('pressure', 'pressureId')"/> <span>中圧</span>
                            </div>

                            <div class="col-xs-1 no-padding">
                                <input type="radio" name="pressure" id="pressure" value="custom" onclick="$.fn.radioButtonSelectionChanged('pressure', 'pressureId')"/> <span>低圧</span>
                            </div>



                        </div>
                    </div>

                    <div class="col-xs-12">
                        <div class="form-group">
                            <label class="col-xs-1 no-padding"> 種別

                            </label>

                            <div class="col-xs-1 no-padding">
                                <input type="radio" name="classificationSelection" id="classificationSelection" value="all" checked onclick="$.fn.radioButtonSelectionChanged('classificationSelection', 'classificationSelectionId')"/> <span>全て</span>
                            </div>

                            <div class="col-xs-1 no-padding">
                                <input type="radio" name="classificationSelection" id="classificationSelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('classificationSelection', 'classificationSelectionId')"/> <span>選択</span>
                            </div>
                            <div id="classificationSelectionId">
                                <div class="col-xs-1">
                                    <div class="form-group">
                                        <input id="classificationStartId" name="classificationStartId" placeholder="0"
                                               class="form-control" type="text" value="" disabled onchange="$.fn.onInputValueChange('classificationStartId', 'classificationStartName')"/>
                                    </div>
                                </div>
                                <div class="col-xs-1 no-padding ratio">~</div>
                                <div class="col-xs-1">
                                    <div class="form-group">
                                        <input id="classificationEndId" name="classificationEndId" placeholder="z" class="form-control"
                                               type="text" value="" disabled onchange="$.fn.onInputValueChange('classificationEndId', 'classificationEndName')"/>
                                    </div>
                                </div>
                                <div class="col-xs-2">
                                    <div class="form-group">
                                        <input id="classificationStartName" name="classificationStartName" class="form-control"
                                               type="text" value="" disabled/>
                                    </div>
                                </div>
                                <div class="col-xs-1 no-padding ratio">~</div>
                                <div class="col-xs-2">
                                    <div class="form-group">
                                        <input id="classificationEndName" name="classificationEndName" class="form-control"
                                               type="text" value="" disabled/>
                                    </div>
                                </div>
                            </div>
                           
                        </div>

                    </div>

                    <div class="col-xs-12">
                        <div class="form-group">
                            <label class="col-xs-1 no-padding"> 設置年月</label>
                            <div class="col-xs-2">
                                <div class="form-group">
                                    <input id="settingStart" name="settingStart" placeholder="0"
                                           class="form-control" type="date" value="" onchange="$.fn.onInputValueChange('settingStart', 'settingEnd')"/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">~</div>
                            <div class="col-xs-2">
                                <div class="form-group">
                                    <input id="settingEnd" name="settingEnd" placeholder="z" class="form-control"
                                           type="date" value=""/>
                                </div>
                            </div>

                            <label class="col-xs-1 no-padding"> 交換期限</label>
                            <div class="col-xs-2">
                                <div class="form-group">
                                    <input id="periodStart" name="periodStart" placeholder="0"
                                           class="form-control" type="date" value="" onchange="$.fn.onInputValueChange('periodStart', 'periodEnd')"/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">~</div>
                            <div class="col-xs-2">
                                <div class="form-group">
                                    <input id="periodEnd" name="periodEnd" placeholder="z" class="form-control"
                                           type="date" value=""/>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="col-xs-12">
                        <div class="form-group">

                            <label class="col-xs-1 no-padding">対象法律
                            </label>

                            <div class="col-xs-1 no-padding">
                                <input type="radio" name="targetSelection" id="targetSelection" value="all" onclick="$.fn.radioButtonSelectionChanged('targetSelection', 'targetSelectionId')"/> <span>全て</span>
                            </div>

                            <div class="col-xs-2">
                                <input type="radio" name="targetSelection" id="targetSelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('targetSelection', 'targetSelectionId')"/> <span>液石法</span>
                            </div>

                            <div class="col-xs-2">
                                <input type="radio" name="targetSelection" id="targetSelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('targetSelection', 'targetSelectionId')"/> <span>高圧法</span>
                            </div>

                            <div class="col-xs-2">
                                <input type="radio" name="targetSelection" id="targetSelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('targetSelection', 'targetSelectionId')"/> <span>ガス事業法</span>
                            </div>

                        </div>
                    </div>
                    </div>

                    <div class="col-xs-12 border1 no-padding bottom-box">
                        <p class="backend">出力指定
                        </p>
                    <div class="col-xs-12">

                        <div class="form-group">

                            <label class="col-xs-1 no-padding"> 出力帳票

                            </label>

                            <div class="col-xs-1">
                                <input type="radio" name="outputForm" id="outputForm" value="all" onclick="$.fn.radioButtonSelectionChanged('outputForm', 'outputFormId')"/> <span>一覧表</span>
                            </div>

                            <div class="col-xs-1">
                                <input type="radio" name="outputForm" id="outputForm" value="custom" onclick="$.fn.radioButtonSelectionChanged('outputForm', 'outputFormId')"/> <span>集計表</span>
                            </div>

                        </div>
                    </div>

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

                            <div class="col-xs-2">
                                <input type="radio" name="pageBreak" id="pageBreak" value="custom" onclick="$.fn.radioButtonSelectionChanged('pageBreak', 'pageBreakId')"/> <span>営業担当者</span>
                            </div>

                            <div class="col-xs-2">
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

                            <div class="col-xs-2 no-padding">
                                <input type="radio" name="sortBySelection" id="sortBySelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('sortBySelection', 'sortBySelectionId')"/> <span>検索名順</span>
                            </div>

                            <div class="col-xs-2">
                                <input type="radio" name="sortBySelection" id="sortBySelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('sortBySelection', 'sortBySelectionId')"/> <span>交換期限順</span>
                            </div>

                        </div>
                    </div>

                    <div class="col-xs-12">
                        <div class="form-group">

                            <label class="col-xs-1 no-padding"> 出力先
                            </label>

                            <div class="col-xs-3">
                                <input type="radio" name="destinationSelection" id="destinationSelection" value="all" onclick="$.fn.radioButtonSelectionChanged('destinationSelection', 'destinationSelectionId')"/> <span>プリンタ(印刷)</span>
                            </div>

                            <div class="col-xs-3">
                                <input type="radio" name="destinationSelection" id="destinationSelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('destinationSelection', 'destinationSelectionId')"/> <span>画面(印刷イメージ)</span>
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
