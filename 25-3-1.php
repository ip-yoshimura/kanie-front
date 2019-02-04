<?php include "header.php"; ?>
<?php include "sidebar.php"; ?>
<div class="col-xs-8 col-md-10 col-xs-12 no-padding">

    <div class="col-md-12 col-xs-12 no-padding body-background">

        <div class="head-p ">
            <p>受付履歴帳票印刷指定</p>
        </div>
        <form id="meter" action="/gas/meter-reading" method="POST">
            <div class="col-xs-12 border1 no-padding">

                <p class="backend">消費者範囲指定</p>
                <div class="col-xs-12">
                    <div class="col-xs-1 no-padding">
                        <p>帳票タイプ</p>
                    </div>
                    <div class="col-xs-1">
                        <input type="radio" name="formTypeSelection" id="formTypeSelection" value="all" onclick="$.fn.radioButtonSelectionChanged('formTypeSelection', 'formTypeSelectionId')"><span> 一覧表</span>
                    </div>
                    <div class="col-xs-1 no-padding">
                        <input type="radio" name="formTypeSelection" id="formTypeSelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('formTypeSelection', 'formTypeSelectionId')"><span> 日別集計</span>
                    </div>
                    <div class="col-xs-1 no-padding">
                        <input type="radio" name="formTypeSelection" id="formTypeSelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('formTypeSelection', 'formTypeSelectionId')"><span> 月別集計</span>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="col-xs-1 no-padding">
                        <p>営業所コード</p>
                    </div>
                    <div class="col-xs-1">
                        <input type="radio" name="officeCodeSelection" id="officeCodeSelection" value="all" checked onclick="$.fn.radioButtonSelectionChanged('officeCodeSelection', 'officeCodeSelectionId')"><span> 全て</span>
                    </div>
                    <div class="col-xs-1">
                        <input type="radio" name="officeCodeSelection" id="officeCodeSelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('officeCodeSelection', 'officeCodeSelectionId')"><span> 選択</span>
                    </div>
                </div>
                <div id="officeCodeSelectionId">
                    <div class="col-xs-12">
                        <div class="col-xs-1 col-xs-offset-1">
                            <div class="form-group">
                                <input id="officeCodeStartId" name="officeCodeStartId" placeholder="000" class="form-control" type="text" value="" disabled onchange="$.fn.onInputValueChange('officeCodeStartId', 'officeCodeStartName')"/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">～</div>
                        <div class="col-xs-1">
                            <div class="form-group">
                                <input id="companyIdEndId" name="companyIdEndId" placeholder="999" class="form-control" type="text" value="" disabled onchange="$.fn.onInputValueChange('companyIdEndId', 'companyIdEndName')"/>
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input id="officeCodeStartName" name="officeCodeStartName" placeholder="Company 1" class="form-control" type="text" value="" disabled/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">～</div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input id="companyIdEndName" name="companyIdEndName" placeholder="Company 2" class="form-control" type="text" value="" disabled/>
                            </div>
                        </div>
                    </div>
                </div>
             
                <div class="col-xs-12">
                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-1 no-padding">
                            <p>受託区分</p>
                        </div>
                        <div class="col-xs-1">
                            <input type="radio" name="trusteeshipSelection" id="trusteeshipSelection" value="all" checked onclick="$.fn.radioButtonSelectionChanged('trusteeshipSelection', 'trusteeshipSelectionId')"> <span> 全て</span>
                        </div>
                        <div class="col-xs-1">
                            <input type="radio" name="trusteeshipSelection" id="trusteeshipSelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('trusteeshipSelection', 'trusteeshipSelectionId')"> <span> 直売</span>
                        </div>
                        <div class="col-xs-1">
                            <input type="radio" name="trusteeshipSelection" id="trusteeshipSelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('trusteeshipSelection', 'trusteeshipSelectionId')"> <span> 販売店</span>
                        </div>
                    </div>
                    <div id="trusteeshipSelectionId">
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-1 col-xs-offset-1">
                                <div class="form-group">
                                    <input id="trusteeshipStartId" name="trusteeshipStartId" placeholder="000" class="form-control" type="text" value="" disabled onchange="$.fn.onInputValueChange('trusteeshipStartId', 'trusteeshipStartName')"/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">～</div>
                            <div class="col-xs-1">
                                <div class="form-group">
                                    <input id="trusteeshipEndId" name="trusteeshipEndId" placeholder="999" class="form-control" type="text" value="" disabled onchange="$.fn.onInputValueChange('trusteeshipEndId', 'trusteeshipEndName')"/>
                                </div>
                            </div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input id="trusteeshipStartName" name="trusteeshipStartName" class="form-control" type="text"
                                           value="" disabled/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">～</div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input id="trusteeshipEndName" name="trusteeshipEndName" class="form-control" type="text"
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
                            <input type="radio" name="differentiation" id="differentiation" value="all" checked onclick="$.fn.radioButtonSelectionChanged('differentiation', 'differentiationId')"> <span> 全て</span>
                        </div>
                        <div class="col-xs-1">
                            <input type="radio" name="differentiation" id="differentiation" value="custom" onclick="$.fn.radioButtonSelectionChanged('differentiation', 'differentiationId')"> <span> 地区</span>
                        </div>
                        <div class="col-xs-1 no-padding">
                            <input type="radio"name="differentiation" id="differentiation" value="custom" onclick="$.fn.radioButtonSelectionChanged('differentiation', 'differentiationId')"> <span> 営業担当者</span>
                        </div>
                    </div>
                    <div id="differentiationId">
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-1 col-xs-offset-1">
                                <div class="form-group">
                                    <input id="differentiationStartId" name="differentiationStartId" placeholder="000" class="form-control" type="text" value="" disabled onchange="$.fn.onInputValueChange('differentiationStartId', 'differentiationStartName')"/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">～</div>
                            <div class="col-xs-1">
                                <div class="form-group">
                                    <input id="differentiationEndId" name="differentiationEndId" placeholder="999" class="form-control" type="text" value="" disabled onchange="$.fn.onInputValueChange('differentiationEndId', 'differentiationEndName')"/>
                                </div>
                            </div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input id="differentiationStartName" name="differentiationStartName" class="form-control" type="text" value="" disabled/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">～</div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input id="differentiationEndName" name="differentiationEndName" class="form-control" type="text" value="" disabled/>
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
                            <input id="consumerCodeStart" name="consumerCodeStart" placeholder="0" class="form-control" type="text" value="" onchange="$.fn.onInputValueChange('consumerCodeStart', 'consumerCodeStartName')"/>
                        </div>
                    </div>
                    <div class="col-xs-1 no-padding ratio">～</div>
                    <div class="col-xs-2">
                        <div class="form-group">
                            <input id="consumeCodeEnd" name="consumeCodeEnd" placeholder="z" class="form-control" type="text" value="" onchange="$.fn.onInputValueChange('consumeCodeEnd', 'consumerCodeEndName')"/>
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <div class="form-group">
                            <input id="consumerCodeStartName" name="consumerCodeStartName" class="form-control"
                                   type="text" value=""/>
                        </div>
                    </div>
                    <div class="col-xs-1 no-padding ratio">～</div>
                    <div class="col-xs-3">
                        <div class="form-group">
                            <input id="consumerCodeEndName" name="consumerCodeEndName" class="form-control"
                                   type="text" value=""/>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 border1 no-padding">
                <p class="backend">作成範囲指定</p>

                <div class="col-xs-12">
                    <div class="form-group">
                        <label class="col-xs-1 no-padding">受付日</label>
                        <div class="col-xs-2">
                            <div class="form-group">
                                <input id="receptionDateStartName" name="receptionDateStartName" class="form-control"
                                       type="date" value="" onchange="$.fn.onInputValueChange('receptionDateStartName', 'receptionDateStartEndName')"/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">～</div>
                        <div class="col-xs-2">
                            <div class="form-group">
                                <input id="receptionDateStartEndName" name="receptionDateStartEndName" class="form-control"
                                       type="date" value=""/>
                            </div>
                        </div>
                        <label class="col-xs-1">受付月</label>
                        <div class="col-xs-2">
                            <div class="form-group">
                                <input id="receptionMonthStartName" name="receptionMonthStartName" class="form-control"
                                       type="date" value="" onchange="$.fn.onInputValueChange('receptionMonthStartName', 'receptionMonthEndName')"/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">～</div>
                        <div class="col-xs-2">
                            <div class="form-group">
                                <input id="receptionMonthEndName" name="receptionMonthEndName" class="form-control"
                                       type="date" value=""/>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12">
                    <div class="form-group">
                        <label class="col-xs-1 no-padding">受付担当者</label>
                        <div class="col-xs-1">
                            <div class="form-group">
                                <input id="receptionistStartName" name="receptionistStartName" class="form-control"
                                       type="number" value="" onchange="$.fn.onInputValueChange('receptionistStartName', 'receptionistEndName')"/>
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input id="receptionistEndName" name="receptionistEndName" class="form-control"
                                       type="text" value=""/>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12">
                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-1 no-padding">
                            <p>受付区分</p>
                        </div>
                        <div class="col-xs-1">
                            <input type="radio" name="chargeSelection" id="chargeSelection" value="all" onclick="$.fn.radioButtonSelectionChanged('chargeSelection', 'chargeSelectionId')"> <span> 通常</span></div>
                        <div class="col-xs-1">
                            <input type="radio" name="chargeSelection" id="chargeSelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('chargeSelection', 'chargeSelectionId')"><span> 案件</span>
                        </div>
                        <div class="col-xs-1">
                            <input type="radio" name="chargeSelection" id="chargeSelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('chargeSelection', 'chargeSelectionId')"><span> 全て</span>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12">
                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-1 no-padding">
                            <p>受付項目</p>
                        </div>
                        <div class="col-xs-1">
                            <input type="radio" name="receptionItem" id="receptionItem" value="all" checked onclick="$.fn.radioButtonSelectionChanged('receptionItem', 'receptionItemId')"><span> 全て</span>
                        </div>
                        <div class="col-xs-1">
                            <input type="radio" name="receptionItem" id="receptionItem" value="custom" onclick="$.fn.radioButtonSelectionChanged('receptionItem', 'receptionItemId')"> <span> 選択</span>
                        </div>
                    </div>
                    <div id="receptionItemId">
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-1 col-xs-offset-1">
                                <div class="form-group">
                                    <input id="receptionItemStartId" name="receptionItemStartId" placeholder="" class="form-control"
                                           type="text" value="" disabled onchange="$.fn.onInputValueChange('receptionItemStartId', 'receptionItemStartName')"/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">～</div>
                            <div class="col-xs-1">
                                <div class="form-group">
                                    <input id="receptionItemEndId" name="receptionItemEndId" placeholder="" class="form-control"
                                           type="text" value="" disabled onchange="$.fn.onInputValueChange('receptionItemEndId', 'receptionItemEndName')"/>
                                </div>
                            </div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input id="receptionItemStartName" name="receptionItemStartName" placeholder="" class="form-control"
                                           type="text" value="" disabled/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">～</div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input id="receptionItemEndName" name="receptionItemEndName" placeholder="" class="form-control"
                                           type="text" value="" disabled/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12">
                    <div class="col-xs-1 no-padding">
                        <p>受付内容</p>
                    </div>
                    <div class="col-xs-5">
                        <div class="form-group">
                            <input id="trustStartId" name="trustStartId" placeholder="" class="form-control"
                                   type="text" value=""/>
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <p>を含む</p>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 border1 no-padding bottom-box">
                <p class="backend">出力指定</p>

                <div class="form-group">
                    <label class="col-xs-2">改ページ指定</label>
                    <div class="col-xs-9 no-padding">
                        <div class="col-xs-2">
                            <input type="radio" value="all" name="pageBreakSelection" id="pageBreakSelection" onclick="$.fn.radioButtonSelectionChanged('pageBreakSelection', 'pageBreakSelectionId')"/><span> 営業所・販売店</span>
                        </div>
                        <div class="col-xs-2">
                            <input type="radio" value="custom" name="pageBreakSelection" id="pageBreakSelection" onclick="$.fn.radioButtonSelectionChanged('pageBreakSelection', 'pageBreakSelectionId')"/><span> 地区</span>
                        </div>
                        <div class="col-xs-2">
                            <input type="radio" value="custom" name="pageBreakSelection" id="pageBreakSelection" onclick="$.fn.radioButtonSelectionChanged('pageBreakSelection', 'pageBreakSelectionId')"/><span> 営業担当者</span>
                        </div>
                        <div class="col-xs-2">
                            <input type="radio" value="custom" name="pageBreakSelection" id="pageBreakSelection" onclick="$.fn.radioButtonSelectionChanged('pageBreakSelection', 'pageBreakSelectionId')"/><span> 受付担当者</span>
                        </div>
                        <div class="col-xs-2">
                            <input type="radio" value="custom" name="pageBreakSelection" id="pageBreakSelection" onclick="$.fn.radioButtonSelectionChanged('pageBreakSelection', 'pageBreakSelectionId')"/><span> なし</span>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12">
                    <div class="form-group">
                        <label class="col-xs-2 no-padding">並び順</label>
                        <div class="col-xs-10 no-padding">
                            <div class="col-xs-2 no-padding">
                                <input type="radio" value="all" name="sortBySelection" id="sortBySelection" onclick="$.fn.radioButtonSelectionChanged('sortBySelection', 'sortBySelectionId')"/><span> 消費者コード順</span>
                            </div>
                            <div class="col-xs-2">
                                <input type="radio" value="custom" name="sortBySelection" id="sortBySelection" onclick="$.fn.radioButtonSelectionChanged('sortBySelection', 'sortBySelectionId')"/><span> 検針順路順</span>
                            </div>
                            <div class="col-xs-2">
                                <input type="radio" value="custom" name="sortBySelection" id="sortBySelection" onclick="$.fn.radioButtonSelectionChanged('sortBySelection', 'sortBySelectionId')"/><span> 検索名順</span>
                            </div>
                            <div class="col-xs-2">
                                <input type="radio" value="custom" name="sortBySelection" id="sortBySelection" onclick="$.fn.radioButtonSelectionChanged('sortBySelection', 'sortBySelectionId')"/><span> 受付日順</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12">
                    <div class="form-group">
                        <label class="col-xs-2 no-padding">出力先</label>
                        <div class="col-xs-10 no-padding">
                            <div class="col-xs-2 no-padding">
                                <input type="radio" value="all" name="outputSelection" id="outputSelection" onclick="$.fn.radioButtonSelectionChanged('outputSelection', 'outputSelectionId')"/><span> プリンタ(印刷)</span>
                            </div>
                            <div class="col-xs-3">
                                <input type="radio" value="custom" name="outputSelection" id="outputSelection" onclick="$.fn.radioButtonSelectionChanged('outputSelection', 'outputSelectionId')"/><SPAN> 画面(印刷イメージ)</SPAN>
                            </div>

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
