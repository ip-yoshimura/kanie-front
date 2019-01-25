<?php include 'header.php'; ?>
<?php include 'sidebar.php';?>
<div class="col-xs-8 col-md-10 col-xs-12 no-padding">
    <div class="col-md-12 col-xs-12 no-padding body-background">
            <div class="head-p">
                <p>コンビニ手数料発行処理</p>

            </div>
            <form action="/gas/meter-reading" id="meter" method="POST">
                <div class="col-xs-12 border1 no-padding">
                    <p class="backend">作成範囲指定</p>

                    <div class="col-xs-12">
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-1 no-padding">
                                <p>営業所コード</p>
                            </div>

                            <div class="col-xs-1">
                                <input name="OfficeCode" type="radio" value="all" checked onclick="$.fn.radioButtonSelectionChanged('OfficeCode', 'OfficeCodeId')">  <span>全て</span>


                            </div>
                            <div class="col-xs-1">
                                <input name="OfficeCode" type="radio" value="salesOutlet" onclick="$.fn.radioButtonSelectionChanged('OfficeCode', 'OfficeCodeId')"> <span>選択</span>

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
                            <div class="col-xs-1">
                                <input name="TrustClassification" type="radio" value="all" checked onclick="$.fn.radioButtonSelectionChanged('TrustClassification', 'TrustClassificationId')"> <span>全て</span>

                            </div>
                            <div class="col-xs-1">
                                <input name="TrustClassification" type="radio" value="directSales" onclick="$.fn.radioButtonSelectionChanged('TrustClassification', 'TrustClassificationId')"> <span>地区</span>


                            </div>
                            <div class="col-xs-2">
                                <input name="TrustClassification" type="radio" value="salesOutlet" onclick="$.fn.radioButtonSelectionChanged('TrustClassification', 'TrustClassificationId')"> <span>販売店</span>
                            </div>

                        </div>
                        <div id="TrustClassificationId">
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-1 col-xs-offset-1">
                                <div class="form-group">
                                    <input class="form-control" id="TrustClassificationStartId" name="TrustClassificationStartId" placeholder="000"
                                           type="text" value="" disabled onchange="$.fn.onInputValueChange('TrustClassificationStartId', 'TrustClassificationStartName')"/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">~</div>
                            <div class="col-xs-1">
                                <div class="form-group">
                                    <input class="form-control" id="TrustClassificationEndId" name="TrustClassificationEndId" placeholder="999"
                                           type="text" value="" disabled onchange="$.fn.onInputValueChange('TrustClassificationEndId', 'TrustClassificationEndName')"/>
                                </div>
                            </div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input class="form-control" id="TrustClassificationStartName" name="TrustClassificationStartName" type="text"
                                           value="" disabled/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">~</div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input class="form-control" id="TrustClassificationEndName" name="TrustClassificationEndName" type="text"
                                           value=""disabled/>
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
                            <div class="col-xs-1">
                                <input name="OutputDifferentiation" type="radio" value="all" checked onclick="$.fn.radioButtonSelectionChanged('OutputDifferentiation', 'OutputDifferentiationId')"> <span>全て</span>

                            </div>
                            <div class="col-xs-2">
                                <input name="OutputDifferentiation" type="radio" value="directSales" onclick="$.fn.radioButtonSelectionChanged('OutputDifferentiation', 'OutputDifferentiationId')"> <span>コンビニ担当者</span>

                            </div>
                            <div class="col-xs-2">
                                <input name="OutputDifferentiation" type="radio" value="salesOutlet" onclick="$.fn.radioButtonSelectionChanged('OutputDifferentiation', 'OutputDifferentiationId')"> <span>営業担当者</span>

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
                            <p>滞留月数

                            </p>
                        </div>
                        <div class="col-xs-2">
                            <div class="form-group">
                                <input class="form-control" id="trustStartId" name="trustStartId" placeholder=""
                                       type="text" value=""/>
                            </div>
                        </div>


                        <div class="col-xs-3">
                            <div class="form-group">
                                <span>ヶ月以上</span>

                            </div>
                        </div>
                    </div>


                    <div class="col-xs-12">
                        <div class="col-xs-1 no-padding">
                            <p>締切日指定
                            </p>
                        </div>
                        <div class="col-xs-1">
                            <input name="DeadlineSpecification" type="radio" value="all" onclick="$.fn.radioButtonSelectionChanged('DeadlineSpecification', 'DeadlineSpecificationId')"><span>する</span>
                        </div>
                        <div class="col-xs-2">
                            <input name="DeadlineSpecification" type="radio" value="directSales" onclick="$.fn.radioButtonSelectionChanged('DeadlineSpecification', 'DeadlineSpecificationId')"> <span>しない</span>

                        </div>
                        <div class="col-xs-1 no-padding">
                            <div class="form-group">
                                <input class="form-control" id="trustStartId" name="trustStartId" placeholder=""
                                       type="text" value=""/>
                            </div>
                        </div>

                        <div class="col-xs-1">
                            <div class="form-group">
                                日

                            </div>
                        </div>

                    </div>

                    <div class="col-xs-12">


                        <div class="col-xs-1 no-padding">
                            <p>計上年月</p>
                        </div>

                        <div class="form-group">

                            <div class="col-xs-2">
                                <input class="form-control" type="date"/>
                            </div>


                        </div>


                    </div>

                    <div class="col-xs-12">


                        <div class="col-xs-1 no-padding">
                            <p>計上日</p>
                        </div>

                        <div class="form-group">

                            <div class="col-xs-2">
                                <input class="form-control" type="date"/>
                            </div>


                        </div>


                    </div>
                    <div class="col-xs-12">
                        <div class="col-xs-1 no-padding">
                            <p>計上日</p>
                        </div>
                        <div class="col-xs-2">
                            <div class="form-group">
                                <input class="form-control" id="officeCodeStartId" name="officeCodeStartId"
                                       placeholder="000" type="number" value=""/>
                            </div>
                        </div>
                        <div class="col-xs-1">
                            <p>消費税</p>
                        </div>
                        <div class="col-xs-2  no-padding">
                            <div class="form-group">
                                <input class="form-control" id="companyIdEndId" name="companyIdEndId" placeholder="999"
                                       type="number" value=""/>
                            </div>
                        </div>
                        <div class="col-xs-1">
                            <p>税込金額</p>
                        </div>
                        <div class="col-xs-2  no-padding">
                            <div class="form-group">
                                <input class="form-control" id="companyIdEndId" name="companyIdEndId" placeholder="999"
                                       type="number" value=""/>
                            </div>
                        </div>

                    </div>
                    <div class="col-xs-12">
                        <div class="col-xs-1 no-padding">
                            <p>商品コード</p>
                        </div>
                        <div class="col-xs-2">
                            <div class="form-group">
                                <input class="form-control" id="officeCodeStartId" name="officeCodeStartId"
                                       placeholder="000" type="number" value=""/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">~</div>
                        <div class="col-xs-2">
                            <div class="form-group">
                                <input class="form-control" id="companyIdEndId" name="companyIdEndId" placeholder="999"
                                       type="text" value=""/>
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