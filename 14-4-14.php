<?php
include "header.php"
?>
<?php
include "sidebar.php"
?>
<div class="col-md-10 col-xs-8 col-xs-12 no-padding">

    <div class="col-md-12 col-xs-12 no-padding body-background">

        <div class="head-p ">
            <p>理設管帳票印刷指定</p>
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
                        <div class="col-xs-1">
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
            <div class="col-xs-12 border1 no-padding">
                <p class="backend">作成範囲指定 </p>

                <div class="col-xs-12">
                    <div class="form-group">
                        <label class="col-xs-1 no-padding"> 共消</label>
                        <div class="col-xs-10 no-padding">
                            <input type="radio" name="collapseSelection" id="collapseSelection" value="all" onclick="$.fn.radioButtonSelectionChanged('collapseSelection', 'collapseSelectionId')"/> <span>全て</span>
                            <input type="radio" name="collapseSelection" id="collapseSelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('collapseSelection', 'collapseSelectionId')"/> <span>供給管</span>
                            <input type="radio" name="collapseSelection" id="collapseSelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('collapseSelection', 'collapseSelectionId')"/> <span>配管</span>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12">
                    <div class="form-group">
                        <label class="col-xs-1 no-padding"> 種別</label>
                        <div class="col-xs-10 no-padding">
                            <input type="radio" name="classificationSelection" id="classificationSelection" value="all" checked onclick="$.fn.radioButtonSelectionChanged('classificationSelection', 'classificationSelectionId')"/> <span>全て</span>
                            <input type="radio" name="classificationSelection" id="classificationSelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('classificationSelection', 'classificationSelectionId')"/> <span>選択</span>
                        </div>
                        <div id="classificationSelectionId">
                            <div class="col-xs-2">
                                <div class="form-group">
                                    <input id="classificationStartId" name="classificationStartId" placeholder="0"
                                           class="form-control" type="text" value="" disabled onchange="$.fn.onInputValueChange('classificationStartId', 'classificationStartName')"/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">~</div>
                            <div class="col-xs-2">
                                <div class="form-group">
                                    <input id="classificationEndId" name="classificationEndId" placeholder="z" class="form-control"
                                           type="text" value="" disabled onchange="$.fn.onInputValueChange('classificationEndId', 'classificationEndName')"/>
                                </div>
                            </div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input id="classificationStartName" name="classificationStartName" class="form-control"
                                           type="text" value="" disabled/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">~</div>
                            <div class="col-xs-3">
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
                        <div class="col-xs-1 no-padding">
                            <label> 経過年数</label>
                        </div>
                        <div class="col-xs-3">
                            <div class="col-xs-6">
                                <input type="radio" name="years" id="years" value="all" onclick="$.fn.radioButtonSelectionChanged('distinguish', 'distinguishId')"/> <span>指定なし</span>
                            </div>
                            <div class="col-xs-6">
                                <input type="radio" name="years" id="years" value="all" onclick="$.fn.radioButtonSelectionChanged('distinguish', 'distinguishId')"/> <span>年数指定</span>
                            </div>
                        </div>
                        <div class="col-xs-1">
                            <input id="overYears" name="overYears" class="form-control" type="number" value="" />
                        </div>
                        <div class="col-xs-1">
                            <label>年以上</label>
                        </div>
                        <div class="col-xs-1">
                            <label>年数不明</label>
                        </div>
                        <div class="col-xs-3">
                            <div class="col-xs-6">
                                <input type="radio" name="unknownYears" id="unknownYears" value="all" onclick="$.fn.radioButtonSelectionChanged('distinguish', 'distinguishId')"/> <span>指定なし</span>
                            </div>
                            <div class="col-xs-6">
                                <input type="radio" name="unknownYears" id="unknownYears" value="all" onclick="$.fn.radioButtonSelectionChanged('distinguish', 'distinguishId')"/> <span>年数指定</span>
                            </div>
                        </div>
                    </div>
		</div>

                <div class="col-xs-12">
                    <div class="form-group">
                        <label class="col-xs-1 no-padding">漏洩</label>
			<div class="col-xs-3 no-padding">
                            <div class="col-xs-4">
                                <input type="radio" name="leakageSelection" id="leakageSelection" value="all" onclick="$.fn.radioButtonSelectionChanged('leakageSelection', 'leakageSelection')"/> <span>全て</span>
                            </div>
                            <div class="col-xs-4">
                                <input type="radio" name="leakageSelection" id="leakageSelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('leakageSelection', 'leakageSelection')"/> <span>有</span>
                            </div>
                            <div class="col-xs-4">
                                <input type="radio" name="leakageSelection" id="leakageSelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('leakageSelection', 'leakageSelection')"/> <span>無</span>
                            </div>
			</div>

                        <label class="col-xs-1 no-padding"> 地盤沈下</label>
			<div class="col-xs-3 no-padding">
                            <div class="col-xs-4">
                                <input type="radio" name="subsidenceSelection" id="subsidenceSelection" value="all" onclick="$.fn.radioButtonSelectionChanged('subsidenceSelection', 'subsidenceSelection')"/> <span>全て</span>
                            </div>
                            <div class="col-xs-4">
                                <input type="radio" name="subsidenceSelection" id="subsidenceSelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('subsidenceSelection', 'subsidenceSelection')"/> <span>有</span>
                            </div>
                            <div class="col-xs-4">
                                <input type="radio" name="subsidenceSelection" id="subsidenceSelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('subsidenceSelection', 'subsidenceSelection')"/> <span>無</span>
                            </div>
			</div>

                        <label class="col-xs-1 p-size-1 no-padding"> 漏洩検知装置設置</label>
			<div class="col-xs-3 no-padding">
                            <div class="col-xs-6">
                                <input type="radio" name="installationSelection" id="installationSelection" value="all" onclick="$.fn.radioButtonSelectionChanged('installationSelection', 'installationSelection')"/> <span>全て</span>
                            </div>
                            <div class="col-xs-6">
                                <input type="radio" name="installationSelection" id="installationSelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('installationSelection', 'installationSelection')"/> <span>未設置のみ</span>
                            </div>
			</div>
		    </div>
		</div>

		<div class="col-xs-12">
		    <div class="form-group">
                        <label class="col-xs-1 no-padding"> 対象法律</label>
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

                <div class="col-xs-12">
                    <div class="form-group">
                        <label class="col-xs-1 no-padding"> 施設区分</label>
                        <div class="col-xs-1">
                            <input type="radio" name="facilitySelection" id="facilitySelection" value="all" checked onclick="$.fn.radioButtonSelectionChanged('facilitySelection', 'facilitySelectionId')"/> <span>全て</span>
                        </div>
                        <div class="col-xs-1">
                            <input type="radio" name="facilitySelection" id="facilitySelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('facilitySelection', 'facilitySelectionId')"/> <span>選択</span>
                        </div>
                        <div id="facilitySelectionId">
                            <div class="col-xs-1">
                                <div class="form-group">
                                    <input id="facilityStartId" name="facilityStartId" placeholder="0"
                                           class="form-control" type="text" value="" disabled onchange="$.fn.onInputValueChange('facilityStartId', 'facilityStartName')"/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">~</div>
                            <div class="col-xs-1">
                                <div class="form-group">
                                    <input id="facilityEndId" name="facilityEndId" placeholder="z" class="form-control"
                                           type="text" value="" disabled onchange="$.fn.onInputValueChange('facilityEndId', 'facilityEndName')"/>
                                </div>
                            </div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input id="facilityStartName" name="facilityStartName" class="form-control"
                                           type="text" value="" disabled/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">~</div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input id="facilityEndName" name="facilityEndName" class="form-control"
                                           type="text" value="" disabled/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
	    </div>

            <div class="col-xs-12 border1 no-padding bottom-box">
                <p class="backend">出力指定 </p>


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

                        <div class="col-xs-1 no-padding">
                            <input type="radio" name="sortBySelection" id="sortBySelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('sortBySelection', 'sortBySelectionId')"/> <span>検針順路順</span>
                        </div>

                        <div class="col-xs-2">
                            <input type="radio" name="sortBySelection" id="sortBySelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('sortBySelection', 'sortBySelectionId')"/> <span>検索名順</span>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12">
                    <div class="form-group">

                        <label class="col-xs-1 no-padding"> 出力先
                        </label>

                        <div class="col-xs-2">
                            <input type="radio" name="outputDestination" id="outputDestination" value="all" onclick="$.fn.radioButtonSelectionChanged('outputDestination', 'outputDestinationId')"/> <span>プリンタ(印刷)</span>
                        </div>

                        <div class="col-xs-2 no-padding">
                            <input type="radio" name="outputDestination" id="outputDestination" value="custom" onclick="$.fn.radioButtonSelectionChanged('outputDestination', 'outputDestinationId')"/> <span>画面(印刷イメージ)</span>
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
