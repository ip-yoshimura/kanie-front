<?php include 'header.php'; ?>
<?php include 'sidebar.php';?>
<div class="col-xs-8 col-md-10 col-xs-12 no-padding body-background">
    <div class="col-md-12 col-xs-10 no-padding ">
            <div class="head-p">
                <p>コンビニデータ出力指定</p>
            </div>
            <form id="meter" action="/gas/meter-reading" method="POST">
                <div class="col-xs-12 no-padding">
                    <div class="col-xs-1 no-padding">
                        <p>出力指定</p>
                    </div>
                    <div class="col-xs-1 ">
                        <input type="radio" name="all" value="all"> 通常
                    </div>
                    <div class="col-xs-2  no-padding">
                        <input type="radio" name="all" value="all" > 督促コメント付
                    </div>
                    <div class="col-xs-1  no-padding ml-n-30">
                        <input type="radio" name="all" value="all"> 自社発行
                    </div>
                    <div class="col-xs-1 border-margin-exp">
                        <p>発行日</p>
                    </div>
                    <div class="col-xs-2">
                        <div class="form-group">
                            <input id="trustStartId" name="trustStartId" class="form-control" type="date" value=""/>
                        </div>
                    </div>
                    <div class="col-xs-1 border-margin-exp">
                        <p>支払期限日</p>
                    </div>
                    <div class="col-xs-2 no-padding">
                        <div class="form-group">
                            <input id="trustStartId" name="trustStartId" class="form-control" type="date" value=""/>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12" style="margin-bottom: 10px">
                    <div style="border: 0.5px solid #E2E2E2">
                    </div>
                </div>

                <div class="col-xs-12 border1 no-padding">
                    <p class="back-end">消費者範囲指定</p>

                    <div class="col-xs-12">
                        <div class="form-group">
                            <label class="col-xs-1 no-padding">営業所コード</label>
                            <div class="col-xs-1">
                                <input name="OfficeCode" type="radio" value="all" checked onclick="$.fn.radioButtonSelectionChanged('OfficeCode', 'OfficeCodeId')"> 全て
                            </div>
                            <div class="col-xs-1 no-padding">
                                <input name="OfficeCode" type="radio" value="directSales" onclick="$.fn.radioButtonSelectionChanged('OfficeCode', 'OfficeCodeId')"> 選択
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 no-padding">
                        <div id="OfficeCodeId">
                            <div class="col-xs-1 col-xs-offset-1">
                                <div class="form-group">
                                    <input class="form-control" id="officeCodeStartId" name="officeCodeStartId"
                                           placeholder="000" type="text" value="" disabled onchange="$.fn.onInputValueChange('officeCodeStartId', 'officeCodeStartName')"/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">～</div>
                            <div class="col-xs-1 ">
                                <div class="form-group">
                                    <input class="form-control" id="officeCodeEndId" name="officeCodeEndId"
                                           placeholder="999"
                                           type="text" value="" disabled onchange="$.fn.onInputValueChange('officeCodeEndId', 'officeCodeEndName')"/>
                                </div>
                            </div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input class="form-control" id="officeCodeStartName" name="officeCodeStartName"
                                           placeholder="" type="text" value="" disabled/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">～</div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input class="form-control" id="officeCodeEndName" name="officeCodeEndName"
                                           placeholder="" type="text" value="" disabled/>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-1">
                                <p>受託区分</p>
                            </div>
                            <div class="col-xs-1">
                                <input type="radio" name="trusteeship" id="trusteeship" value="all" checked onclick="$.fn.radioButtonSelectionChanged('trusteeship', 'trusteeshipId')"> 全て
                            </div>
                            <div class="col-xs-1 no-padding">
                                <input type="radio" name="trusteeship" id="trusteeship" value="directSales" onclick="$.fn.radioButtonSelectionChanged('trusteeship', 'trusteeshipId')"> 直売
                            </div>
                            <div class="col-xs-2 no-padding">
                                <input type="radio" name="Trusteeship" id="trusteeship" value="salesOutlet" onclick="$.fn.radioButtonSelectionChanged('trusteeship', 'trusteeshipId')"> 販売店
                            </div>
                        </div>
                        <div id="trusteeshipId" class="no-padding">
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-1 col-xs-offset-1">
                                <div class="form-group">
                                    <input id="TrusteeshipStartId" name="TrusteeshipStartId" placeholder="000" class="form-control"
                                           type="text" value="" disabled onchange="$.fn.onInputValueChange('TrusteeshipStartId', 'TrusteeshipStartName')"/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">～</div>
                            <div class="col-xs-1">
                                <div class="form-group">
                                    <input id="TrusteeshipEndId" name="TrusteeshipEndId" placeholder="999" class="form-control"
                                           type="text" value="" disabled onchange="$.fn.onInputValueChange('TrusteeshipEndId', 'TrusteeshipEndName')"/>
                                </div>
                            </div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input id="TrusteeshipStartName" name="TrusteeshipStartName" class="form-control" type="text"
                                           value="" disabled/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">～</div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input id="TrusteeshipEndName" name="TrusteeshipEndName" class="form-control" type="text"
                                           value="" disabled/>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>

                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-1">
                                <p>出力区分</p>
                            </div>
                            <div class="col-xs-1">
                                <input type="radio" name="OutputDifferentiation" value="all" checked onclick="$.fn.radioButtonSelectionChanged('OutputDifferentiation', 'OutputDifferentiationId')"> 全て
                            </div>
                            <div class="col-xs-1 no-padding">
                                <input type="radio" name="OutputDifferentiation" value="directSales" onclick="$.fn.radioButtonSelectionChanged('OutputDifferentiation', 'OutputDifferentiationId')"> 地区
                            </div>
                            <div class="col-xs-1 no-padding">
                                <input type="radio" name="OutputDifferentiation" value="salesOutlet" onclick="$.fn.radioButtonSelectionChanged('OutputDifferentiation', 'OutputDifferentiationId')"> 集金担当者
                            </div>
                            <div class="col-xs-1 no-padding">
                                <input type="radio" name="OutputDifferentiation" value="salesOutlet"onclick="$.fn.radioButtonSelectionChanged('OutputDifferentiation', 'OutputDifferentiationId')"> 営業担当者
                            </div>
                            <div class="col-xs-2">
                                <input type="radio" name="OutputDifferentiation" value="salesOutlet" onclick="$.fn.radioButtonSelectionChanged('OutputDifferentiation', 'OutputDifferentiationId')">コンビニ担当者
                            </div>
                        </div>
                        <div id="OutputDifferentiationId">
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-1 col-xs-offset-1">
                                <div class="form-group">
                                    <input id="OutputDifferentiationStartId" name="OutputDifferentiationStartId" placeholder="000" class="form-control"
                                           type="text" value="" disabled onchange="$.fn.onInputValueChange('OutputDifferentiationStartId', 'OutputDifferentiationStartName')"/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">～</div>
                            <div class="col-xs-1">
                                <div class="form-group">
                                    <input id="OutputDifferentiationEndId" name="OutputDifferentiationEndId" placeholder="999" class="form-control"
                                           type="text" value="" disabled onchange="$.fn.onInputValueChange('OutputDifferentiationEndId', 'OutputDifferentiationEndName')"/>
                                </div>
                            </div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input id="OutputDifferentiationStartName" name="OutputDifferentiationStartName" class="form-control" type="text"
                                           value="" disabled/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">～</div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input id="OutputDifferentiationEndName" name="OutputDifferentiationEndName" class="form-control" type="text"
                                           value="" disabled/>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>

                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-12">
                            <div class="col-xs-1 no-padding">
                                <p>コンビニ担当</p>
                            </div>
                            <div class="col-xs-1">
                                <input type="radio" name="ConvenienceStore" value="all" checked onclick="$.fn.radioButtonSelectionChanged('ConvenienceStore', 'ConvenienceStoreId')"> 全て
                            </div>
                            <div class="col-xs-1 no-padding">
                                <input type="radio" name="ConvenienceStore" value="directSales" onclick="$.fn.radioButtonSelectionChanged('ConvenienceStore', 'ConvenienceStoreId')"> 選択

                            </div>
                        </div>
                        <div id="ConvenienceStoreId">
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-1 col-xs-offset-1">
                                <div class="form-group">
                                    <input id="ConvenienceStoreStartId" name="ConvenienceStoreStartId" placeholder="000" class="form-control"
                                           type="text" value="" disabled onchange="$.fn.onInputValueChange('ConvenienceStoreStartId', 'ConvenienceStoreStartName')"/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">～</div>
                            <div class="col-xs-1">
                                <div class="form-group">
                                    <input id="ConvenienceStoreEndId" name="ConvenienceStoreEndId" placeholder="999" class="form-control"
                                           type="text" value="" disabled onchange="$.fn.onInputValueChange('ConvenienceStoreEndId', 'ConvenienceStoreEndName')"/>
                                </div>
                            </div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input id="ConvenienceStoreStartName" name="ConvenienceStoreStartName" class="form-control" type="text"
                                           value="" disabled/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">～</div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input id="ConvenienceStoreEndName" name="ConvenienceStoreEndName" class="form-control" type="text"
                                           value="" disabled/>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>

                    <div class="col-xs-12">
                        <div class="col-xs-1 border-margin-exp no-padding">
                            <p>消費者コード </p>
                        </div>
                        <div class="col-xs-2">
                            <div class="form-group">
                                <input class="form-control" id="conCodeStartId" name="conCodeStartId"
                                       placeholder="000" type="text" value="" onchange="$.fn.onInputValueChange('conCodeStartId', 'conStartName')"/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">～</div>
                        <div class="col-xs-2">
                            <div class="form-group">
                                <input class="form-control" id="conEndId" name="conEndId" placeholder="999"
                                       type="text" value="" onchange="$.fn.onInputValueChange('conEndId', 'conEndName')"/>
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input class="form-control" id="conStartName" name="conStartName"
                                       placeholder="" type="text" value=""/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">～</div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input class="form-control" id="conEndName" name="conEndName"
                                       placeholder="" type="text" value=""/>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 border1 no-padding">
                    <p class="back-end">作成範囲指定</p>
                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-1 border-margin-exp">
                                <p>滞留月数</p>
                            </div>
                            <div class="col-xs-1">
                                <div class="form-group">
                                    <input class="form-control" id="companyIdEndName" name="companyIdEndName"
                                           placeholder="00" type="text" value=""/>
                                </div>
                            </div>
                            <div class="col-xs-1 border-margin-exp no-padding">
                                <span>ヶ月以上</span>
                            </div>
                            <div class="col-xs-1 no-padding border-margin-exp">
                                <p>集金区分</p>
                            </div>
                            <div class="col-xs-1">
                                <input type="radio" name="CollectionClassification" value="all" onclick="$.fn.radioButtonSelectionChanged('CollectionClassification', 'CollectionClassificationId')"> 全て
                            </div>
                            <div class="col-xs-1 no-padding">
                                <input type="radio" name="CollectionClassification" value="directSales" onclick="$.fn.radioButtonSelectionChanged('CollectionClassification', 'CollectionClassificationId')"> 振替のみ
                            </div>
                            <div class="col-xs-1 no-padding">
                                <input type="radio" name="CollectionClassification" value="salesOutlet" onclick="$.fn.radioButtonSelectionChanged('CollectionClassification', 'CollectionClassificationId')"> 振替以外
                            </div>
                            <div class="col-xs-1 no-padding">
                                <input type="radio" name="CollectionClassification" value="salesOutlet" onclick="$.fn.radioButtonSelectionChanged('CollectionClassification', 'CollectionClassificationId')"> コンビニ
                            </div>
                        </div>

                    </div>
                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-12">
                            <div class="col-xs-1 no-padding">
                                <p>振替日数指定</p>
                            </div>
                            <div class="col-xs-1">
                                <input type="radio" name="Designation" value="all" onclick="$.fn.radioButtonSelectionChanged('Designation', 'DesignationId')">する
                            </div>
                            <div class="col-xs-1">
                                <input type="radio" name="Designation" value="directSales" onclick="$.fn.radioButtonSelectionChanged('Designation', 'DesignationId')">しない
                            </div>
                            <div class="col-xs-1">
                                <div class="form-group">
                                    <input class="form-control" id="companyIdEndName" name="companyIdEndName"
                                           placeholder="000" type="text" value=""/>
                                </div>
                            </div>
                            <div class="col-xs-2 no-padding border-margin-exp">
                                <span>日</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-1">
                                <p>消費者区分</p>
                            </div>
                            <div class="col-xs-1">
                                <input type="radio" name="Consumer" value="all" checked onclick="$.fn.radioButtonSelectionChanged('Consumer', 'ConsumerId')"> 全て
                            </div>
                            <div class="col-xs-1">
                                <input type="radio" name="Consumer" value="directSales" onclick="$.fn.radioButtonSelectionChanged('Consumer', 'ConsumerId')"> 選択
                            </div>
                            <div id="ConsumerId">
                            <div class="col-xs-1">
                                <div class="form-group">
                                    <input class="form-control" id="ConsumerEndId" name="ConsumerEndId"
                                           placeholder="000" type="text" value="" disabled onchange="$.fn.onInputValueChange('ConsumerEndId', 'ConsumerEndName')"/>
                                </div>
                            </div>
                            <div class="col-xs-2">
                                <div class="form-group">
                                    <input class="form-control" id="ConsumerEndName" name="ConsumerEndName"
                                           placeholder="000" type="text" value="" disabled/>
                                </div>
                            </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-1">
                                <p>締切日指定</p>
                            </div>
                            <div class="col-xs-1">
                                <input type="radio" name="Deadline" value="all" onclick="$.fn.radioButtonSelectionChanged('Deadline', 'DeadlineId')"> する
                            </div>
                            <div class="col-xs-1">
                                <input type="radio" name="Deadline" value="directSales" onclick="$.fn.radioButtonSelectionChanged('Deadline', 'DeadlineId')"> しない
                            </div>
                            <div class="col-xs-1">
                                <div class="form-group">
                                    <input class="form-control" id="companyIdEndName" name="companyIdEndName"
                                           placeholder="000" type="text" value=""/>
                                </div>
                            </div>
                            <div class="col-xs-1 border-margin-exp">
                                <span>日</span>
                            </div>
                            <div class="col-xs-2 no-padding border-margin-exp">
                                <p><strong>出力済データ出力</strong>
                                </p>
                            </div>
                            <div class="col-xs-1 no-padding ml-n-40">
                                <input type="radio" name="Outputted" value="all" onclick="$.fn.radioButtonSelectionChanged('Outputted', 'OutputtedId')"> する
                            </div>
                            <div class="col-xs-1 no-padding">
                                <input type="radio" name="Outputted" value="directSales" onclick="$.fn.radioButtonSelectionChanged('Outputted', 'OutputtedId')"> しない
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-1 border-margin-exp">
                            <p>お知らせ文</p>
                        </div>
                        <div class="col-xs-2">
                            <div class="form-group">
                                <input class="form-control" id="officeCodeStartName" name="officeCodeStartName"
                                       placeholder="000" type="number" value=""/>
                            </div>
                        </div>
                        <div class="col-xs-7">
                            <div class="form-group">
                                <input class="form-control" id="companyIdEndName" name="companyIdEndName"
                                       placeholder="" type="text" value=""/>
                            </div>
                        </div>
                    </div>
                </div>
        </div>

    <div class="col-xs-12 border1 no-padding bottom-box">
        <p class="back-end">出力指定</p>

            <div class="col-xs-12 no-padding">
                <div class="form-group">
                    <label class="col-xs-1 no-padding" style="margin-left:15px;">改ページ指定</label>

                    <div class="col-xs-2">
                        <input name="directSales" type="radio" value="directSales"> 営業所・販売店
                    </div>
                    <div class="col-xs-2">
                        <input name="directSales" type="radio" value="directSales"> 集金担当者
                    </div>
                    <div class="col-xs-2 no-padding">
                        <input name="directSales" type="radio" value="directSales"> 営業担当者
                    </div>
                    <div class="col-xs-2 no-padding">
                        <input name="directSales" type="radio" value="directSales"> コンビニ担当者
                    </div>
                    <div class="col-xs-2 no-padding">
                        <input name="directSales" type="radio" value="directSales"> なし
                    </div>
                </div>
            </div>

            <div class="col-xs-12 no-padding">
                <div class="form-group">
                    <label class="col-xs-1 no-padding" style="margin-left:15px;">並び順</label>
                    <div class="col-xs-2">
                        <input name="directSales" type="radio" value="directSales"> 消費者コード順
                    </div>
                    <div class="col-xs-2">
                        <input name="directSales" type="radio" value="directSales"> 検針順路順
                    </div>
                    <div class="col-xs-2 no-padding">
                        <input name="directSales" type="radio" value="directSales"> 検索名順
                    </div>
                    <div class="col-xs-2 no-padding">
                        <input name="directSales" type="radio" value="directSales"> 金額
                    </div>
                    <div class="col-xs-2 no-padding">
                        <input name="directSales" type="radio" value="directSales">滞留月数
                    </div>
                </div>
            </div>

            <div class="col-xs-12 no-padding">
                <div class="form-group no-padding">
                    <label class="col-xs-1 no-padding" style="margin-left:15px;">一覧表改ページ</label>

                    <div class="col-xs-3">
                        <input name="directSales" type="radio" value="directSales"> 集金担当者 + コンビニ担当者
                    </div>
                    <div class="col-xs-2 ml-n-100">
                        <input name="directSales" type="radio" value="directSales"> 集金担当者
                    </div>
                    <div class="col-xs-2 no-padding">
                        <input name="directSales" type="radio" value="directSales"> コンビニ担当者
                    </div>
                    <div class="col-xs-1 no-padding">
                        <input name="directSales" type="radio" value="directSales"> なし
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
