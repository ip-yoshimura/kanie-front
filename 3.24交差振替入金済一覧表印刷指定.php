<?php include 'header.php';?>
<?php include 'sidebar.php';?>
    <div class="col-xs-8 col-md-10 col-xs-12 no-padding">
        <div class="col-md-12 col-xs-12 no-padding body-background">

                <div class="head-p">
                    <p>口座振替不能者一覧表印刷指定 </p>

                </div>
                <form action="/gas/meter-reading" id="meter" method="POST">
                    <div class="col-xs-12 border1 no-padding">

                        <p class="backend">消費者範囲指定</p>

                    <div class="col-xs-12">
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-1 no-padding">
                                <p>営業所コード</p>
                            </div>

                            <div class="col-xs-1 no-padding">
                                <input name="OfficeCode" type="radio" value="all" checked onclick="$.fn.radioButtonSelectionChanged('OfficeCode', 'OfficeCodeId')">  <span>全て</span>


                            </div>
                            <div class="col-xs-1">
                                <input name="OfficeCode" type="radio" value="salesOutlet" onclick="$.fn.radioButtonSelectionChanged('OfficeCode', 'OfficeCodeId')">  <span>選択</span>

                            </div>
                        </div>
                        <div id="OfficeCodeId">
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-1 col-xs-offset-1">
                                <div class="form-group">
                                    <input class="form-control" id="trustStartId" name="trustStartId" placeholder="000"
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
                                    <input class="form-control" id="trustStartName" name="trustStartName" type="text"
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
                                <p>受託区分</p>
                            </div>
                            <div class="col-xs-1 no-padding">
                                <input name="Trusteeship" type="radio" value="all" checked onclick="$.fn.radioButtonSelectionChanged('Trusteeship', 'TrusteeshipId')">  <span>全て</span>

                            </div>
                            <div class="col-xs-1 no-padding">
                                <input name="Trusteeship" type="radio" value="directSales" onclick="$.fn.radioButtonSelectionChanged('Trusteeship', 'TrusteeshipId')">  <span>直売</span>
                            </div>
                            <div class="col-xs-1">
                                <input name="Trusteeship" type="radio" value="salesOutlet" onclick="$.fn.radioButtonSelectionChanged('Trusteeship', 'TrusteeshipId')">  <span>販売店</span>
                            </div>

                        </div>
                        <div id="TrusteeshipId">
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-1 col-xs-offset-1">
                                <div class="form-group">
                                    <input class="form-control" id="TrusteeshipStartId" name="TrusteeshipStartId" placeholder="000"
                                           type="text" value="" disabled onchange="$.fn.onInputValueChange('TrusteeshipStartId', 'TrusteeshipStartName')"/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">~</div>
                            <div class="col-xs-1">
                                <div class="form-group">
                                    <input class="form-control" id="TrusteeshipEndId" name="TrusteeshipEndId" placeholder="999"
                                           type="text" value="" disabled onchange="$.fn.onInputValueChange('TrusteeshipEndId', 'TrusteeshipEndName')"/>
                                </div>
                            </div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input class="form-control" id="TrusteeshipStartName" name="TrusteeshipStartName" type="text"
                                           value=""disabled/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">~</div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input class="form-control" id="TrusteeshipEndName" name="TrusteeshipEndName" type="text"
                                           value="" disabled/>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>

                    <div class="col-xs-12">
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-1 no-padding">
                                <p>出力区分

                                </p>
                            </div>
                            <div class="col-xs-1 no-padding">
                                <input name="OutputDifferentiation" type="radio" value="all" checked onclick="$.fn.radioButtonSelectionChanged('OutputDifferentiation', 'OutputDifferentiationId')">  <span> 全て</span>



                            </div>
                            <div class="col-xs-1">
                                <input name="OutputDifferentiation" type="radio" value="directSales" onclick="$.fn.radioButtonSelectionChanged('OutputDifferentiation', 'OutputDifferentiationId')">  <span>地区</span>


                            </div>
                            <div class="col-xs-2">
                                <input name="OutputDifferentiation" type="radio" value="salesOutlet" onclick="$.fn.radioButtonSelectionChanged('OutputDifferentiation', 'OutputDifferentiationId')">  <span>営業担当者</span>


                            </div>

                        </div>
                        <div id="OutputDifferentiationId">
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-1 col-xs-offset-1">
                                <div class="form-group">
                                    <input class="form-control" id="OutputDifferentiationStartId" name="OutputDifferentiationStartId" placeholder="000"
                                           type="text" value="" disabled onchange="$.fn.onInputValueChange('OutputDifferentiationStartId', 'OutputDifferentiationStartName')"/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">~</div>
                            <div class="col-xs-1">
                                <div class="form-group">
                                    <input class="form-control" id="OutputDifferentiationEndId" name="OutputDifferentiationEndId" placeholder="999"
                                           type="text" value="" disabled onchange="$.fn.onInputValueChange('OutputDifferentiationEndId', 'OutputDifferentiationEndName')"/>
                                </div>
                            </div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input class="form-control" id="OutputDifferentiationStartName" name="OutputDifferentiationStartName" type="text"
                                           value="" disabled/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">~</div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input class="form-control" id="OutputDifferentiationEndName" name="OutputDifferentiationEndName" type="text"
                                           value="" disabled/>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>


                    <div class="col-xs-12">
                        <div class="col-xs-1 no-padding">
                            <p>消費者コード </p>
                        </div>
                        <div class="col-xs-1">
                            <div class="form-group">
                                <input class="form-control" id="officeCodeStartId" name="officeCodeStartId"
                                       placeholder="000" type="text" value="" onchange="$.fn.onInputValueChange('officeCodeStartId', 'officeCodeStartName')"/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">~</div>
                        <div class="col-xs-1">
                            <div class="form-group">
                                <input class="form-control" id="companyIdEndId" name="companyIdEndId" placeholder="999"
                                       type="text" value="" onchange="$.fn.onInputValueChange('companyIdEndId', 'companyIdEndName')"/>
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input class="form-control" id="officeCodeStartName" name="officeCodeStartName"
                                       placeholder="Company 1" type="text" value=""/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">~</div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input class="form-control" id="companyIdEndName" name="companyIdEndName"
                                       placeholder="Company 2" type="text" value=""/>
                            </div>
                        </div>
                    </div>
                    </div>

                    <div class="col-xs-12 border1 no-padding">
                        <p class="backend">作成範囲指定</p>
                  
                   <div class="col-xs-12">
                        <div class="col-xs-1 no-padding">
                            <p>銀行コード</p>
                        </div>
                        <div class="col-xs-1 no-padding">
                            <div class="form-group">
                                <input class="form-control" id="BankClassificationStartId" name="BankClassificationStartId" placeholder=""
                                       type="text" value="" onchange="$.fn.onInputValueChange('BankClassificationStartId', 'BankClassificationStartName')"/>
                            </div>
                        </div>

                        <div class="col-xs-3">
                            <div class="form-group">
                                <input class="form-control" id="BankClassificationStartName" name="BankClassificationStartName" placeholder=""
                                       type="text" value=""/>
                            </div>
                        </div>
                    </div>
                   </div>
                    <div class="col-xs-12">
                        <div class="col-xs-1 no-padding">
                            <p>銀行区分</p>
                        </div>
                        <div class="col-xs-1 no-padding">
                            <input name="BankClassification" type="radio" value="all" checked onclick="$.fn.radioButtonSelectionChanged('BankClassification', 'BankClassificationId')"><span>直接取引分</span>
                        </div>
                        <div class="col-xs-3 no-padding">
                            <input name="BankClassification" type="radio" value="directSales" onclick="$.fn.radioButtonSelectionChanged('BankClassification', 'BankClassificationId')"> <span>幹事銀行分（振替代行分）</span>

                        </div>

                    </div>

                    <div class="col-xs-12">

                    
                        <div class="col-xs-1 no-padding">
                            <p>指定年月</p>
                        </div>

                        <div class="form-group">

                            <div class="col-xs-2 no-padding">
                                <input class="form-control" type="date"/>
                            </div>


                        </div>


                    </div>

                    </div>


                    <div class="col-xs-12 border1 no-padding bottom-box">
                        <p class="backend">作成範囲指定</p>

                    <div class="col-xs-12">
                        <div class="col-xs-1 no-padding">
                            <p>改ページ指定</p>
                        </div>
                        <div class="col-xs-2 no-padding">
                            <input name="PageBreak" type="radio" value="all" onclick="$.fn.radioButtonSelectionChanged('PageBreak', 'PageBreakId')"><span>営業所・販売店</span>
                        </div>
                        <div class="col-xs-2 no-padding">
                            <input name="PageBreak" type="radio" value="directSales" onclick="$.fn.radioButtonSelectionChanged('PageBreak', 'PageBreakId')"><span>なし</span>
                        </div>

                    </div>


                    <div class="col-xs-12">
                        <div class="col-xs-1 no-padding">
                            <p>並び順</p>
                        </div>
                        <div class="col-xs-2 no-padding">
                            <input name="SortBy" type="radio" value="all" onclick="$.fn.radioButtonSelectionChanged('SortBy', 'SortById')"><span>消費者コード順</span>
                        </div>
                        <div class="col-xs-2 no-padding">
                            <input name="SortBy" type="radio" value="directSales" onclick="$.fn.radioButtonSelectionChanged('SortBy', 'SortById')"><span>口座名義順</span>
                        </div>
                        <div class="col-xs-2 no-padding">
                            <input name="SortBy" type="radio" value="directSales" onclick="$.fn.radioButtonSelectionChanged('SortBy', 'SortById')"><span>預金者コード順</span>
                        </div>
                        <div class="col-xs-2 no-padding">
                            <input name="SortBy" type="radio" value="directSales" onclick="$.fn.radioButtonSelectionChanged('SortBy', 'SortById')"><span>検索名順</span>

                        </div>

                    </div>

                    <div class="col-xs-12">
                        <div class="col-xs-1 no-padding">
                            <p>出力先</p>
                        </div>
                        <div class="col-xs-2 no-padding">
                            <input name="Output" type="radio" value="all" onclick="$.fn.radioButtonSelectionChanged('Output', 'OutputId')"><span>プリンタ（印刷）</span>
                        </div>
                        <div class="col-xs-2 no-padding">
                            <input name="Output" type="radio" value="directSales" onclick="$.fn.radioButtonSelectionChanged('Output', 'OutputId')"> <span>画面（印刷イメージ）</span>
                        </div>

                    </div>
                    </div>

                    <?php include 'footer.php';?>

                </form>
            </div>
        </div>
    </div>
</div>

</body>

</html>