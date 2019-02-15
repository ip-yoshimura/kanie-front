<?php
include "header.php"
?>
<?php
include "sidebar.php"
?>
<div class="col-md-10 col-xs-8 col-xs-12 no-padding">

    <div class="col-md-12 col-xs-12 no-padding body-background">

        <div class="head-p">
            <p>保安業務受託件数一覧表印刷指定</p>
        </div>
                <form id="meter" action="/gas/meter-reading" method="POST">
                    <div class="col-xs-12 border1 no-padding">
                    <p class="backend">消費者範囲指定</p>

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
                                        <input id="officeCodeStartId" name="officeCodeStartId" placeholder="000" class="form-control" type="text" value="" disabled onchange="$.fn.onInputValueChange('officeCodeStartId', 'officeCodeStartName')"/>
                                    </div>
                                </div>
                                <div class="col-xs-1 no-padding ratio">~</div>
                                <div class="col-xs-1">
                                    <div class="form-group">
                                        <input id="companyIdEndId" name="companyIdEndId" placeholder="999" class="form-control" type="text" value="" disabled onchange="$.fn.onInputValueChange('companyIdEndId', 'companyIdEndName')"/>
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
                                               value="" disabled />
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
                                <p>出力区分1</p>
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
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-1 no-padding">
                                <p>出力区分2</p>
                            </div>
                            <div class="col-xs-1">
                                <input type="radio" name="output2Selection" id="output2Selection" value="all" checked onclick="$.fn.radioButtonSelectionChanged('output2Selection', 'output2SelectionId')"> <span>全て</span>


                            </div>
                            <div class="col-xs-2">
                                <input type="radio" name="output2Selection" id="output2Selection" value="custom" onclick="$.fn.radioButtonSelectionChanged('output2Selection', 'output2SelectionId')"> <span>保安機関</span>


                            </div>


                        </div>
                        <div id="output2SelectionId">
                            <div class="col-xs-12 no-padding">
                                <div class="col-xs-1 col-xs-offset-1">
                                    <div class="form-group">
                                        <input id="output2StartId" name="output2StartId" placeholder="000"
                                               class="form-control" type="text" value="" disabled onchange="$.fn.onInputValueChange('output2StartId', 'output2StartName')"/>
                                    </div>
                                </div>
                                <div class="col-xs-1 no-padding ratio">~</div>
                                <div class="col-xs-1">
                                    <div class="form-group">
                                        <input id="output2EndId" name="output2EndId" placeholder="999" class="form-control"
                                               type="text" value="" disabled onchange="$.fn.onInputValueChange('output2EndId', 'output2EndName')"/>
                                    </div>
                                </div>
                                <div class="col-xs-3">
                                    <div class="form-group">
                                        <input id="output2StartName" name="output2StartName" class="form-control" type="text"
                                               value="" disabled/>
                                    </div>
                                </div>
                                <div class="col-xs-1 no-padding ratio">~</div>
                                <div class="col-xs-3">
                                    <div class="form-group">
                                        <input id="output2EndName" name="output2EndName" class="form-control" type="text"
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
                                       class="form-control" type="text" value=""  onchange="$.fn.onInputValueChange('consumerCodeStart', 'consumerCodeStartName')"/>
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
                            <div class="col-xs-1 no-padding">
                                <input type="radio" name="statusSelection" id="statusSelection" value="all" onclick="$.fn.radioButtonSelectionChanged('statusSelection', 'statusSelectionId')"> <span>全て</span>
                            </div>
                            <div class="col-xs-2 no-padding">
                                <input type="radio" name="statusSelection" id="statusSelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('statusSelection', 'statusSelectionId')"> <span>閉栓・休止除く</span>


                            </div>
                            <div class="col-xs-2 no-padding">
                                <input type="radio" name="statusSelection" id="statusSelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('statusSelection', 'statusSelectionId')"> <span>未入居除く</span>

                            </div>

                        </div>

                    </div>

                    </div>

                    <div class="col-xs-12 border1 no-padding">
                        <p class="backend">作成範囲指定
                        </p>
                    <div class="col-xs-12">

                        <div class="form-group">

                            <label class="col-xs-1 no-padding">調査日</label>

                            <div class="col-xs-2">
                                <div class="form-group">
                                    <input id="surveyDateStartName" name="surveyDateStartName" class="form-control"
                                           type="date" value="" onchange="$.fn.onInputValueChange('surveyDateStartName', 'surveyDateEndName')"/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">~</div>
                            <div class="col-xs-2">
                                <div class="form-group">
                                    <input id="surveyDateEndName" name="surveyDateEndName" class="form-control"
                                           type="date" value=""/>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>

                    <div class="col-xs-12 border1 no-padding bottom-box">
                        <p class="backend">出力指定
                        </p>
                    <div class="col-xs-12">
                        <div class="form-group">

                            <label class="col-xs-1 no-padding"> 改ページ指定
                            </label>
                            <div class="col-xs-10">
                                <div class="col-xs-2">
                                    <input type="radio" name="pageSelection" id="pageSelection" value="all" onclick="$.fn.radioButtonSelectionChanged('pageSelection', 'pageSelectionId')"/> <span>保安機関</span>
                                </div>


                                <div class="col-xs-2 no-padding">
                                    <input type="radio" name="pageSelection" id="pageSelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('pageSelection', 'pageSelectionId')"/> <span>なし</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12">
                        <div class="form-group">
                            <label class="col-xs-1 no-padding"> 出力先
                            </label>
                            <div class="col-xs-10">
                                <div class="col-xs-3">
                                    <input type="radio" name="destinationSelection" id="destinationSelection" value="all" onclick="$.fn.radioButtonSelectionChanged('destinationSelection', 'destinationSelectionId')"/> <span>プリンタ(印刷)</span>
                                </div>
                                <div class="col-xs-3 no-padding">
                                    <input type="radio" name="destinationSelection" id="destinationSelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('destinationSelection', 'destinationSelectionId')"/> <span>画面(印刷イメージ)</span>
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
