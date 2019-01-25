<?php
include "header.php"
?>
<?php
include "sidebar.php"
?>
<div class="col-xs-10 col-md-10 no-padding">

    <div class="col-md-12 col-xs-12 no-padding body-background">
        <div class="head-p">
            <p>保安台帳等保安担当者一括変更</p>
        </div>
        <form id="meter" action="/gas/meter-reading" method="POST">
            <div class="col-xs-12 no-padding">
                <div class="col-xs-12 border1 no-padding">
                    <p class="backend"> 消費者範囲指定</p>
                    <div class="col-xs-12">
                    <div class="col-xs-1 no-padding">
                        <p>営業所コード</p>
                    </div>
                    <div class="col-xs-1  no-padding">
                        <input type="radio" name="officeCodeSelection" id="officeCodeSelection" value="all" checked onclick="$.fn.radioButtonSelectionChanged('officeCodeSelection', 'officeCodeSelectionId')"> 全て
                    </div>
                    <div class="col-xs-1  no-padding">
                        <input type="radio" name="officeCodeSelection" id="officeCodeSelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('officeCodeSelection', 'officeCodeSelectionId')"> 選択
                    </div>
                    <div id="officeCodeSelectionId">
                        <div class="col-xs-1">
                            <div class="form-group">
                                <input id="officeCodeStartId" name="officeCodeStartId" placeholder="000"
                                       class="form-control"
                                       type="text" value="" disabled onchange="$.fn.onInputValueChange('officeCodeStartId', 'officeCodeStartName')"/>
                            </div>
                        </div>
                            <div class="col-xs-1 no-padding ratio">~</div>
                        <div class="col-xs-1">
                            <div class="form-group">
                                <input id="companyIdEndId" name="companyIdEndId" placeholder="999" class="form-control"
                                       type="text" value="" disabled onchange="$.fn.onInputValueChange('companyIdEndId', 'companyIdEndName')"/>
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
                                <input id="companyIdEndName" name="companyIdEndName" placeholder="Company 2"
                                       class="form-control"
                                       type="text" value="" disabled/>
                            </div>
                        </div>
                    </div>
                 
                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-12 no-padding">
                            <div class="col-xs-1 no-padding">
                                <p>自他社区分</p>
                            </div>
                            <div class="col-xs-1 no-padding">
                                <input type="radio" name="otherSelection" id="otherSelection" value="all" checked onclick="$.fn.radioButtonSelectionChanged('otherSelection', 'otherSelectionId')"> 全て
                            </div>
                            <div class="col-xs-1 no-padding">
                                <input type="radio" name="otherSelection" id="otherSelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('otherSelection', 'otherSelectionId')"> 直売
                            </div>
                            <div class="col-xs-1 no-padding">
                                <input type="radio" name="otherSelection" id="otherSelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('otherSelection', 'otherSelectionId')"> 販売店
                            </div>
                        </div>
                        <div id="otherSelectionId">
                            <div class="col-xs-12 no-padding">
                                <div class="col-xs-1 col-xs-offset-1">
                                    <div class="form-group">
                                        <input id="otherStartId" name="otherStartId" placeholder="000" class="form-control"
                                               type="text" value="" disabled onchange="$.fn.onInputValueChange('otherStartId', 'otherStartName')"/>
                                    </div>
                                </div>
                                <div class="col-xs-1 no-padding ratio">~</div>
                                <div class="col-xs-1">
                                    <div class="form-group">
                                        <input id="otherEndId" name="otherEndId" placeholder="999" class="form-control"
                                               type="text" value="" disabled onchange="$.fn.onInputValueChange('otherEndId', 'otherEndName')"/>
                                    </div>
                                </div>
                                <div class="col-xs-3">
                                    <div class="form-group">
                                        <input id="otherStartName" name="otherStartName" class="form-control" type="text"
                                               value="" disabled/>
                                    </div>
                                </div>
                                <div class="col-xs-1 no-padding ratio">~</div>
                                <div class="col-xs-3">
                                    <div class="form-group">
                                        <input id="otherEndName" name="otherEndName" class="form-control" type="text"
                                               value="" disabled/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>

                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-1 no-padding">
                                <p>レーベル</p>
                            </div>
                            <div class="col-xs-1 no-padding">
                                <input type="radio" name="labelSelection" id="labelSelection" value="all" checked onclick="$.fn.radioButtonSelectionChanged('labelSelection', 'labelSelectionId')"> 全て
                            </div>
                            <div class="col-xs-1">
                                <input type="radio" name="labelSelection" id="labelSelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('labelSelection', 'labelSelectionId')"> 地区
                            </div>
                            <div class="col-xs-2">
                                <input type="radio" name="labelSelection" id="labelSelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('labelSelection', 'labelSelectionId')"> 営業担当者
                            </div>
                        </div>
                        <div id="labelSelectionId">
                            <div class="col-xs-12 no-padding">
                                <div class="col-xs-1 col-xs-offset-1">
                                    <div class="form-group">
                                        <input id="labelStartId" name="labelStartId" placeholder="000"
                                               class="form-control"
                                               type="text" value="" disabled onchange="$.fn.onInputValueChange('labelStartId', 'labelStartName')"/>
                                    </div>
                                </div>
                                <div class="col-xs-1 no-padding ratio">~</div>
                                <div class="col-xs-1">
                                    <div class="form-group">
                                        <input id="labelEndId" name="labelEndId" placeholder="999" class="form-control"
                                               type="text" value="" disabled onchange="$.fn.onInputValueChange('labelEndId', 'labelEndName')"/>
                                    </div>
                                </div>
                                <div class="col-xs-3">
                                    <div class="form-group">
                                        <input id="labelStartName" name="labelStartName" class="form-control" type="text"
                                               value="" disabled/>
                                    </div>
                                </div>
                                <div class="col-xs-1 no-padding ratio">~</div>
                                <div class="col-xs-3">
                                    <div class="form-group">
                                        <input id="labelEndName" name="labelEndName" class="form-control" type="text"
                                               value="" disabled/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-1 no-padding">
                            <p>消費者コード</p>
                        </div>
                        <div class="col-xs-2">
                            <div class="form-group">
                                <input id="consumerCodeStart" name="consumerCodeStart" placeholder="0"
                                       class="form-control"
                                       type="text" value="" onchange="$.fn.onInputValueChange('consumerCodeStart', 'consumerCodeStartName')"/>
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
                    <div class="col-xs-12 no-padding">

                        <div class="col-xs-1 no-padding">
                            <p>入居状況</p>
                        </div>
                        <div class="col-xs-10">

                            <input id="meterReadingClassification2" name="meterReadingClassification" type="radio"
                                   value="ハンディ"/> 全て
                            <input id="meterReadingClassification3" name="meterReadingClassification" type="radio"
                                   value="テレメ"/>閉栓・休止除く
                            <input id="meterReadingClassification3" name="meterReadingClassification" type="radio"
                                   value="テレメ"/>閉栓・休止除く
                        </div>

                    </div>
                </div>
                    </div>
                </div>


                <div class="col-xs-12 border1 no-padding">
                    <p class="backend"> 変更指定</p>
                    <p class="backend"> 変更前調査員</p>
                    <div class="col-xs-1">
                        <p>調査員</p>
                    </div>
                    <div class="form-group">
                    <div class="col-xs-1">
                        <input type="text" class="form-control" placeholder="999" name="investigatorSelection" id="investigatorSelection" value="" onchange="$.fn.onInputValueChange('investigatorSelection', 'investigatorEndName')">
                    </div>
                    <div class="col-xs-4">
                        <input type="text" class="form-control" name="investigatorEndName" id="investigatorEndName">
                    </div>
                    <div class="col-xs-2">
                        <p>保安機関</p>
                    </div>
                    <div class="col-xs-1 no-padding">
                        <input type="text" class="form-control" placeholder="999" name="agencySelection" id="agencySelection" value="" onchange="$.fn.onInputValueChange('agencySelection', 'agencyEndName')">
                    </div>
                    <div class="col-xs-3">
                        <input type="text" class="form-control" name="agencyEndName" id="agencyEndName" value="">
                    </div>
                </div>
                </div>
                <div class="col-xs-12 border1 no-padding bottom-box">
                    <p class="backend"> 変更後調査員</p>
                    <div class="form-group">
                    <div class="col-xs-1">
                        <p>調査員</p>
                    </div>
                    <div class="col-xs-1">
                        <input type="text" class="form-control" placeholder="999" name="investigator1Selection" id="investigator1Selection" value="" onchange="$.fn.onInputValueChange('investigator1Selection', 'investigator1EndName')">
                    </div>
                    <div class="col-xs-4">
                        <input type="text" class="form-control" name="investigator1EndName" id="investigator1EndName">
                    </div>
                    <div class="col-xs-2">
                        <p>保安機関</p>
                    </div>
                    <div class="col-xs-1">
                        <input type="text" class="form-control" placeholder="999" name="agency1Selection" id="agency1Selection" value="" onchange="$.fn.onInputValueChange('agency1Selection', 'agency1EndName')">
                    </div>
                    <div class="col-xs-2">
                        <input type="text" class="form-control" name="agency1EndName" id="agency1EndName" value="">
                    </div>
                </div>
                <div class="col-xs-12" style="margin-bottom:30px;">

                    <div class="col-xs-1 no-padding">
                        <p>登録訂正日</p>
                    </div>
                    <div class="col-xs-2">
                        <input type="date" class="form-control">
                    </div>
                    <div class="col-xs-7">
                        <strong>（保安業務実施者情報変更時に使用）</strong>
                    </div>

                </div>
                <div class="col-xs-12" style="margin-bottom:30px;">

                    <div class="col-xs-1 no-padding">
                        <p>入居状況</p>
                    </div>
                    <div class="col-xs-10">
                        <input type="radio" name="statusSelection" id="statusSelection" value="all" onclick="$.fn.radioButtonSelectionChanged('statusSelection', 'statusSelectionId')">両方
                        <input type="radio" name="statusSelection" id="statusSelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('statusSelection', 'statusSelectionId')">保安台帳のみ
                        <input type="radio" name="statusSelection" id="statusSelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('statusSelection', 'statusSelectionId')">保安業務実施者情報のみ
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