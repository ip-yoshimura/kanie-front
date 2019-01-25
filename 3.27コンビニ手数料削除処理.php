<?php include 'header.php';?>
<?php include 'sidebar.php';?>
    <div class="col-xs-8 col-md-10 col-xs-12 no-padding">
        <div class="col-md-12 col-xs-12 no-padding body-background">

                <div class="head-p">
                    <p>コンビニ手数料削除処理</p>

                </div>
                <form action="/gas/meter-reading" id="meter" method="POST">
                    <div class="col-xs-12 border1 no-padding">
                        <p class="backend">作成範囲指定</p>


                    <div class="col-xs-12">
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-1 no-padding">
                                <p>営業所コード</p>
                            </div>

                            <div class="col-xs-1 no-padding">
                                <input name="OfficeCode" type="radio" value="all" checked onclick="$.fn.radioButtonSelectionChanged('OfficeCode', 'OfficeCodeId')"> 全て


                            </div>
                            <div class="col-xs-2">
                                <input name="OfficeCode" type="radio" value="salesOutlet" onclick="$.fn.radioButtonSelectionChanged('OfficeCode', 'OfficeCodeId')"> 選択

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
                                <input name="Trusteeship" type="radio" value="all" checked onclick="$.fn.radioButtonSelectionChanged('Trusteeship', 'TrusteeshipId')"> 全て

                            </div>
                            <div class="col-xs-1">
                                <input name="Trusteeship" type="radio" value="directSales" onclick="$.fn.radioButtonSelectionChanged('Trusteeship', 'TrusteeshipId')"> 直売


                            </div>
                            <div class="col-xs-1">
                                <input name="Trusteeship" type="radio" value="salesOutlet" onclick="$.fn.radioButtonSelectionChanged('Trusteeship', 'TrusteeshipId')"> 販売店
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
                                           value="" disabled/>
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
                        <div class="col-xs-1 no-padding">
                            <p>消費者コード </p>
                        </div>
                        <div class="col-xs-1">
                            <div class="form-group">
                                <input class="form-control" id="consumerCodeStartId" name="consumerCodeStartId"
                                       placeholder="000" type="text" value="" onchange="$.fn.onInputValueChange('consumerCodeStartId', 'consumerCodeStartName')"/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">~</div>
                        <div class="col-xs-1">
                            <div class="form-group">
                                <input class="form-control" id="consumerCodeIdEndId" name="consumerCodeIdEndId" placeholder="999"
                                       type="text" value="" onchange="$.fn.onInputValueChange('consumerCodeIdEndId', 'consumerCodeIdEndName')"/>
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input class="form-control" id="consumerCodeStartName" name="consumerCodeStartName"
                                       placeholder="Company 1" type="text" value=""/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">~</div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input class="form-control" id="consumerCodeIdEndName" name="consumerCodeIdEndName"
                                       placeholder="Company 2" type="text" value=""/>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-xs-12 border1 no-padding bottom-box">
                        <p class="backend">作成範囲指定</p>
                    <div class="col-xs-12">


                        <div class="col-xs-1 no-padding">
                            <p>計上年月</p>
                        </div>

                        <div class="form-group">

                            <div class="col-xs-2 no-padding">
                                <input class="form-control" type="date"/>
                            </div>


                        </div>


                    </div>

                    <div class="col-xs-12">
                        <div class="col-xs-1 no-padding">
                            <p>商品コード</p>
                        </div>
                        <div class="col-xs-3 no-padding">
                            <div class="form-group">
                                <input class="form-control" id="officeCodeStartId" name="officeCodeStartId"
                                       placeholder="000" type="number" value=""/>
                            </div>
                        </div>

                        <div class="col-xs-3 ">
                            <div class="form-group">
                                <input class="form-control" id="companyIdEndId" name="companyIdEndId" placeholder="999"
                                       type="text" value=""/>
                            </div>
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