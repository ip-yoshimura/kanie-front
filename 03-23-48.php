<?php include 'header.php';?>
<?php include 'sidebar.php';?>
    <div class="col-xs-8 col-md-10 col-xs-12 no-padding">
        <div class="col-md-12 col-xs-12 no-padding body-background">
                <div class="head-p">
                    <p>口座振替入金済一覧表印刷指定</p>
                </div>
                <form action="/gas/meter-reading" id="meter" method="POST">
                    <div class="col-xs-12 border1 no-padding">
                        <p class="back-end">作成範囲指定</p>

                    <div class="col-xs-12">
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-2 no-padding">
                                <p>営業所コード</p>
                            </div>

                            <div class="col-xs-1">
                                <input name="officeCodeSelectionForm" type="radio" value="all" checked onclick="$.fn.radioButtonSelectionChanged('officeCodeSelectionForm', 'officeCodeSelectionForm')">  <span> 全て</span>


                            </div>
                            <div class="col-xs-1">
                                <input name="officeCodeSelectionForm" type="radio" value="salesOutlet" onclick="$.fn.radioButtonSelectionChanged('officeCodeSelectionForm', 'officeCodeSelectionForm')">  <span> 選択</span>

                            </div>
                        </div>
                        <div id="officeCodeSelectionForm">
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-1 col-xs-offset-2">
                                <div class="form-group">
                                    <input class="form-control" id="officeCodeStartId" name="officeCodeStartId" placeholder="000"
                                           type="text" value="" disabled onchange="$.fn.onInputValueChange('officeCodeStartId', 'officeCodeStartName')"/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">~</div>
                            <div class="col-xs-1">
                                <div class="form-group">
                                    <input class="form-control" id="officeCodeEndId" name="officeCodeEndId" placeholder="999"
                                           type="text" value="" disabled onchange="$.fn.onInputValueChange('officeCodeEndId', 'officeCodeEndName')"/>
                                </div>
                            </div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input class="form-control" id="officeCodeStartName" name="officeCodeStartName" type="text"
                                           value="" disabled/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">~</div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input class="form-control" id="officeCodeEndName" name="officeCodeEndName" type="text"
                                           value="" disabled/>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>

                    <div class="col-xs-12 ">
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-2 no-padding">
                                <p>受託区分</p>
                            </div>
                            <div class="col-xs-1">
                                <input name="Trusteeship" type="radio" value="all" checked onclick="$.fn.radioButtonSelectionChanged('Trusteeship', 'TrusteeshipId')">  <span> 全て</span>

                            </div>
                            <div class="col-xs-1">
                                <input name="Trusteeship" type="radio" value="directSales" onclick="$.fn.radioButtonSelectionChanged('Trusteeship', 'TrusteeshipId')">  <span> 直売</span>
                            </div>
                            <div class="col-xs-1">
                                <input name="Trusteeship" type="radio" value="salesOutlet" onclick="$.fn.radioButtonSelectionChanged('Trusteeship', 'TrusteeshipId')">  <span> 販売店</span>
                            </div>

                        </div>
                        <div id="TrusteeshipId">
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-1 col-xs-offset-2">
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
                        <div class="col-xs-2 no-padding">
                            <p>消費者コード </p>
                        </div>
                        <div class="col-xs-1 ">
                            <div class="form-group">
                                <input class="form-control" id="codeStartId" name="codeStartId"
                                       placeholder="000" type="text" value="" onchange="$.fn.onInputValueChange('codeStartId', 'codeStartName')" />
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">~</div>
                        <div class="col-xs-1  ">
                            <div class="form-group">
                                <input class="form-control" id="codeEndId" name="codeEndId" placeholder="999"
                                       type="text" value="" onchange="$.fn.onInputValueChange('codeEndId', 'codeEndName')"/>
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input class="form-control" id="codeStartName" name="codeStartName"
                                       placeholder="" type="text" value=""/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">~</div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input class="form-control" id="codeEndName" name="codeEndName"
                                       placeholder="" type="text" value=""/>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-xs-12 border1 no-padding">
                        <p class="back-end">作成範囲指定</p>
                    
                    <div class="col-xs-12">
                        <div class="col-xs-2 no-padding">
                            <p>銀行コード</p>
                        </div>
                        <div class="col-xs-1">
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
                    


                    <div class="col-xs-12">
                        <div class="form-group">
                            <div class="col-xs-2 no-padding">
                                <p>銀行区分</p>
                            </div>
                            <div class="col-xs-2">
                                <input name="BankClassification" type="radio" value="all" checked onclick="$.fn.radioButtonSelectionChanged('BankClassification', 'BankClassificationId')"> <span> 直接取引分</span>
                            </div>
                            <div class="col-xs-2 no-padding ml-n-30">
                                <input name="BankClassification" type="radio" value="directSales" onclick="$.fn.radioButtonSelectionChanged('BankClassification', 'BankClassificationId')"> <span> 幹事銀行分（振替代行分）</span>

                            </div>
                        </div>


                    </div>

                    <div class="col-xs-12">


                        <div class="col-xs-2 no-padding">
                            <p>指定年月</p>
                        </div>

                        <div class="form-group">

                            <div class="col-xs-2 no-padding ml-10">
                                <input class="form-control" type="date"/>
                            </div>
                            <div class="col-xs-1 no-padding ratio ml-10">~</div>
                            <div class="col-xs-2 no-padding ml-20">
                                <input class="form-control" type="date"/>
                            </div>

                        </div>


                    </div>

                    <div class="col-xs-12">
                        <div class="form-group">
                            <div class="col-xs-2 no-padding">
                                <p>金額\0の消費者
                                </p>
                            </div>
                            <div class="col-xs-2">
                                <input name="amount" type="radio" value="all" onclick="$.fn.radioButtonSelectionChanged('amount', 'amountId')"> <span> 出力する</span>


                            </div>
                            <div class="col-xs-1 no-padding ml-n-30">
                                <input name="amount" type="radio" value="directSales" onclick="$.fn.radioButtonSelectionChanged('amount', 'amountId')"> <span> 出力しない</span>


                            </div>
                        </div>
                    </div>

                        <div class="col-xs-12">
                            <div class="form-group">
                                <div class="col-xs-2 no-padding">
                                    <p>出力区分指定
                                    </p>
                                </div>
                                <div class="col-xs-2">
                                    <input name="segment" type="radio" value="all" onclick="$.fn.radioButtonSelectionChanged('segment', 'segmentId')"> <span>なし</span>


                                </div>
                                <div class="col-xs-1 no-padding ml-n-30">
                                    <input name="segment" type="radio" value="directSales"  onclick="$.fn.radioButtonSelectionChanged('segment', 'segmentId')">  <span>支店ごと</span>


                                </div>


                            </div>
                            </div>

                    </div>


                    <div class="col-xs-12 border1 no-padding bottom-box">
                        <p class="back-end">作成範囲指定</p>

                    <div class="col-xs-12">
                        <div class="col-xs-2 no-padding">
                            <p>改ページ指定</p>
                        </div>
                        <div class="col-xs-2">
                            <input name="PageBreak" type="radio" value="all" onclick="$.fn.radioButtonSelectionChanged('PageBreak', 'PageBreakId')"> <span> 営業所・販売店</span>
                        </div>
                        <div class="col-xs-2 ml-n-40">
                            <input name="PageBreak" type="radio" value="directSales" onclick="$.fn.radioButtonSelectionChanged('PageBreak', 'PageBreakId')"> <span> なし</span>
                        </div>

                    </div>


                    <div class="col-xs-12">
                        <div class="col-xs-2 no-padding">
                            <p>並び順</p>
                        </div>
                        <div class="col-xs-2">
                            <input name="SortBy" type="radio" value="all" onclick="$.fn.radioButtonSelectionChanged('SortBy', 'SortById')"> <span>消費者コード順</span>
                        </div>
                        <div class="col-xs-2 ml-n-40">
                            <input name="SortBy" type="radio" value="directSales" onclick="$.fn.radioButtonSelectionChanged('SortBy', 'SortById')"> <span>口座名義順</span>
                        </div>
                        <div class="col-xs-2 ml-n-40">
                            <input name="SortBy" type="radio" value="directSales" onclick="$.fn.radioButtonSelectionChanged('SortBy', 'SortById')"> <span>預金者コード順</span>
                        </div>
                        <div class="col-xs-2 ml-n-40">
                            <input name="SortBy" type="radio" value="directSales" onclick="$.fn.radioButtonSelectionChanged('SortBy', 'SortById')"> <span>検索名順</span>

                        </div>

                    </div>

                    <div class="col-xs-12">
                        <div class="col-xs-2 no-padding">
                            <p>出力先</p>
                        </div>
                        <div class="col-xs-2">
                            <input name="directSales" type="radio" value="all" onclick="$.fn.radioButtonSelectionChanged('directSales', 'directSalesId')"> <span>プリンタ（印刷）</span>
                        </div>
                        <div class="col-xs-3 ml-n-40">
                            <input name="directSales" type="radio" value="directSales" onclick="$.fn.radioButtonSelectionChanged('directSales', 'directSalesId')"> <span>画面（印刷イメージ）</span>
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