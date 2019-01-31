<?php include 'header.php'; ?>
<?php include 'sidebar.php';?>
<div class="col-xs-8 col-md-10 col-xs-12 no-padding">

        <div class="col-md-12 col-xs-12 no-padding body-background">

            <div class="head-p">
                <p> 売上・売掛金管理表印刷指定（消費者）

                </p>
            </div>
            <form id="meter" action="/gas/meter-reading" method="POST">
                <div class="col-xs-12 border1 no-padding">
                    <p class="back-end">消費者範囲指定</p>
                    <div class="col-xs-12">
                        <div class="col-xs-2 no-padding">
                            <p>営業所コード</p>
                        </div>
                        <div class="col-xs-1 ">
                            <input type="radio" name="officeCode" value="all" checked onclick="$.fn.radioButtonSelectionChanged('officeCode', 'officeCodeId')">  <span> 全て</span>
                        </div>
                        <div class="col-xs-1  no-padding">
                            <input type="radio" name="officeCode" value="custom" onclick="$.fn.radioButtonSelectionChanged('officeCode', 'officeCodeId')">  <span> 選択</span>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div id="officeCodeId">
                            <div class="col-xs-1 col-xs-offset-2">
                                <div class="form-group">
                                    <input id="officeCodeStartId" name="officeCodeStartId" placeholder="000"
                                           class="form-control" type="text" value="" disabled onchange="$.fn.onInputValueChange('officeCodeStartId', 'officeCodeStartName')"/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">～</div>
                            <div class="col-xs-1">
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
                    <div class="col-xs-12">
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-2 no-padding">
                                <p>受託区分</p>
                            </div>
                            <div class="col-xs-1">
                                <input type="radio" name="Trusteeship" value="all" checked onclick="$.fn.radioButtonSelectionChanged('Trusteeship', 'TrusteeshipId')">  <span> 全て</span>
                            </div>
                            <div class="col-xs-1">
                                <input type="radio" name="Trusteeship" value="directSales" onclick="$.fn.radioButtonSelectionChanged('Trusteeship', 'TrusteeshipId')">  <span> 直売</span>
                            </div>
                            <div class="col-xs-2 ml-n-10">
                                <input type="radio" name="Trusteeship" value="salesOutlet" onclick="$.fn.radioButtonSelectionChanged('Trusteeship', 'TrusteeshipId')">  <span> 販売店</span>
                            </div>
                        </div>
                     <div id="TrusteeshipId">
                     <div class="col-xs-12 no-padding">
                            <div class="col-xs-1 col-xs-offset-2">
                                <div class="form-group">
                                    <input id="trustStartId" name="trustStartId" placeholder="000" class="form-control"
                                           type="text" value="" disabled onchange="$.fn.onInputValueChange('trustStartId', 'trustStartName')"/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">～</div>
                            <div class="col-xs-1">
                                <div class="form-group">
                                    <input id="trustEndId" name="trustEndId" placeholder="999" class="form-control"
                                           type="text" value="" disabled onchange="$.fn.onInputValueChange('trustEndId', 'trustEndName')"/>
                                </div>
                            </div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input id="trustStartName" name="trustStartName" class="form-control" type="text"
                                           value="" disabled/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">～</div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input id="trustEndName" name="trustEndName" class="form-control" type="text"
                                           value="" disabled/>
                                </div>
                            </div>
                        </div>
                     </div>
                    </div>

                    <div class="col-xs-12">
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-2 no-padding">
                                <p>出力区分</p>
                            </div>
                            <div class="col-xs-1">
                                <input type="radio" name="Trusteeship_2" value="all" checked onclick="$.fn.radioButtonSelectionChanged('Trusteeship_2', 'Trusteeship_2Id')">  <span> 全て</span>
                            </div>
                            <div class="col-xs-1">
                                <input type="radio" name="Trusteeship_2" value="directSales" onclick="$.fn.radioButtonSelectionChanged('Trusteeship_2', 'Trusteeship_2Id')">  <span> 地区</span>
                            </div>
                            <div class="col-xs-1 no-padding">
                                <input type="radio" name="Trusteeship_2" value="salesOutlet" onclick="$.fn.radioButtonSelectionChanged('Trusteeship_2', 'Trusteeship_2Id')">  <span> 営業担当者</span>
                            </div>
                        </div>
                        <div id="Trusteeship_2Id">
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-1 col-xs-offset-2">
                                <div class="form-group">
                                    <input id="outputStartId" name="outputStartId" placeholder="000"
                                           class="form-control" type="text" value="" disabled onchange="$.fn.onInputValueChange('outputStartId', 'outputStartName')"/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">～</div>
                            <div class="col-xs-1">
                                <div class="form-group">
                                    <input id="outputEndId" name="outputEndId" placeholder="999" class="form-control"
                                           type="text" value=""disabled onchange="$.fn.onInputValueChange('outputEndId', 'outputEndName')"/>
                                </div>
                            </div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input id="outputStartName" name="outputStartName" class="form-control" type="text"
                                           value="" disabled/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">～</div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input id="outputEndName" name="outputEndName" class="form-control" type="text"
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
                                <input id="consCodeStart" name="consCodeStart" placeholder="0"
                                       class="form-control" type="text" value=""  onchange="$.fn.onInputValueChange('consCodeStart', 'consCodeStartName')"/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">～</div>
                        <div class="col-xs-2">
                            <div class="form-group">
                                <input id="consCodeEnd" name="consCodeEnd" placeholder="z" class="form-control"
                                       type="text" value=""  onchange="$.fn.onInputValueChange('consCodeEnd', 'consCodeEndName')"/>
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input id="consCodeStartName" name="consCodeStartName" class="form-control"
                                       type="text" value="" />
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">～</div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input id="consCodeEndName" name="consCodeEndName" class="form-control"
                                       type="text" value="" />
                            </div>
                        </div>
                    </div>


                </div>

                <div class="col-xs-12 border1 no-padding">
                    <p class="back-end">作成範囲指定</p>
                    <div class="col-xs-12 ">

                        <div class="form-group">
                            <label class="col-xs-1 no-padding">指定年月
                            </label>
                            <div class="col-xs-3">
                                <input type="date" class="form-control"/>
                            </div>


                        </div>


                    </div>

                    <div class="col-xs-12">
                        <div class="col-xs-12 no-padding">
                            <div class="form-group">

                                <label class="col-xs-1 no-padding">金額範囲
                                </label>

                                <div class="col-xs-1">
                                    <input type="radio" name="Amount" value="all" onclick="$.fn.radioButtonSelectionChanged('Amount', 'AmountId')">  <span>全て</span>
                                </div>
                                <div class="col-xs-1 no-padding">
                                    <input type="radio" name="Amount" value="salesOutlet" onclick="$.fn.radioButtonSelectionChanged('Amount', 'AmountId')"> <span>￥0以外全て</span>
                                </div>
                                <div class="col-xs-1 no-padding">
                                    <input type="radio" name="Amount" value="salesOutlet" onclick="$.fn.radioButtonSelectionChanged('Amount', 'AmountId')">  <span>￥0のみ</span>
                                </div>
                                <div class="col-xs-1 no-padding">
                                    <input type="radio" name="Amount" value="salesOutlet" onclick="$.fn.radioButtonSelectionChanged('Amount', 'AmountId')"> <span>￥0より大</span>
                                </div>
                                <div class="col-xs-1 no-padding">
                                    <input type="radio" name="Amount" value="salesOutlet" onclick="$.fn.radioButtonSelectionChanged('Amount', 'AmountId')"> <span>￥0より小</span>
                                </div>
                                <div class="col-xs-1 no-padding">
                                    <input type="radio" name="Amount" value="salesOutlet" onclick="$.fn.radioButtonSelectionChanged('Amount', 'AmountId')"> <span>￥0以上</span>
                                </div>
                                <div class="col-xs-1 no-padding">
                                    <input type="radio" name="Amount" value="salesOutlet" onclick="$.fn.radioButtonSelectionChanged('Amount', 'AmountId')"> <span>￥0以下</span>
                                </div>

                            </div>


                        </div>
                    </div>
                </div>

                <div class="col-xs-12 border1 no-padding bottom-box">
                    <p class="back-end">出力指定</p>
                    <div class="col-xs-12">

                        <div class="form-group">
                            <label class="col-xs-1 no-padding">改ページ指定
                            </label>
                            <div class="col-xs-2">
                                <input type="radio" name="directSales" value="all">  <span>営業所・販売店</span>

                            </div>
                            <div class="col-xs-2 no-padding">
                                <input type="radio" name="directSales" value="directSales">  <span>地区</span>

                            </div>
                            <div class="col-xs-2 no-padding">
                                <input type="radio" name="directSales" value="directSales">  <span>営業担当者</span>

                            </div>
                            <div class="col-xs-2 no-padding">
                                <input type="radio" name="directSales" value="directSales">  <span>なし</span>

                            </div>


                        </div>


                    </div>

                    <div class="col-xs-12">

                        <div class="form-group">
                            <label class="col-xs-1 no-padding">並び順
                            </label>

                            <div class="col-xs-2">
                                <input type="radio" name="sortBy" value="all" onclick="$.fn.radioButtonSelectionChanged('sortBy', 'sortById')"><span>消費者コード順</span>
                            </div>

                            <div class="col-xs-2 no-padding">
                                <input type="radio" name="sortBy" value="salesOutlet" onclick="$.fn.radioButtonSelectionChanged('sortBy', 'sortById')"><span>検針順路順</span>
                            </div>

                            <div class="col-xs-2 no-padding">
                                <input type="radio" name="sortBy" value="directSales" onclick="$.fn.radioButtonSelectionChanged('sortBy', 'sortById')"><span>検索名順</span>
                            </div>


                        </div>


                    </div>
                    <div class="col-xs-12">
                        <div class="col-xs-12 no-padding">
                            <div class="form-group">
                                <label class="col-xs-1 no-padding">出力先
                                </label>

                                <div class="col-xs-2">
                                    <input type="radio" name="OutputDestination" value="all" onclick="$.fn.radioButtonSelectionChanged('OutputDestination', 'OutputDestinationId')"> <span>プリンタ(印刷)</span>
                                </div>

                                <div class="col-xs-2 no-padding">
                                    <input type="radio" name="OutputDestination" value="salesOutlet" onclick="$.fn.radioButtonSelectionChanged('OutputDestination', 'OutputDestinationId')"> <span>画面(印刷イメージ)</span>
                                </div>
                            </div>


                        </div>


                    </div>
                </div>

                <?php include 'footer.php'; ?>

            </form>
        </div>
    </div>
</div>
</div>

</body>

</html>
