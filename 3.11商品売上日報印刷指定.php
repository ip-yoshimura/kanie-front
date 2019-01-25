<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<div class="col-xs-8 col-md-10 col-xs-12 no-padding">

    <div class="col-md-12 col-xs-12 no-padding body-background">

        <div class="head-p">
            <p> 商品売上日報印刷指定

            </p>
        </div>
        <form action="/gas/meter-reading" id="meter" method="POST">

            <div class="col-xs-12 border1 no-padding">
                <p class="backend">作成範囲指定</p>
                <div class="col-xs-12">
                    <div class="form-group">
                        <label class="col-xs-1 no-padding">指定年月日
                        </label>
                        <div class="col-xs-2">
                            <input class="form-control" type="date"/>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12">

                    <div class="form-group">
                        <label class="col-xs-1 no-padding">商品分類
                        </label>

                        <div class="col-xs-1">
                            <input name="categoriesSelection" id="categoriesSelection" type="radio" value="all" checked onclick="$.fn.radioButtonSelectionChanged('categoriesSelection', 'categoriesSelectionId')"> <span>全て</span>

                        </div>

                        <div class="col-xs-2">
                            <input name="categoriesSelection" id="categoriesSelection" type="radio" value="directSales" onclick="$.fn.radioButtonSelectionChanged('categoriesSelection', 'categoriesSelectionId')"> <span>大分類範囲指定</span>


                        </div>
                        <div class="col-xs-2">
                            <input name="categoriesSelection" id="categoriesSelection" type="radio" value="directSales" onclick="$.fn.radioButtonSelectionChanged('categoriesSelection', 'categoriesSelectionId')"> <span>中分類範囲指定</span>

                        </div>

                        <div class="col-xs-2">
                            <input name="categoriesSelection" id="categoriesSelection" type="radio" value="directSales" onclick="$.fn.radioButtonSelectionChanged('categoriesSelection', 'categoriesSelectionId')"> <span>小分類範囲指定</span>
                        </div>


                    </div>


                </div>


                <div id="categoriesSelectionId">
                <div class="col-xs-12 col-xs-offset-1">
                    <div class="col-xs-1 no-padding">
                        <p>大分類コード
                        </p>
                    </div>
                    <div class="col-xs-1  ">
                        <div class="form-group">
                            <input class="form-control" id="largeClassificationStart" name="largeClassificationStart"
                                   placeholder="000" type="text" value="" disabled onchange="$.fn.onInputValueChange('largeClassificationStart', 'largeClassificationEndName')"/>
                        </div>
                    </div>
                    <div class="col-xs-1 no-padding ratio">~</div>
                    <div class="col-xs-1 ">
                        <div class="form-group">
                            <input class="form-control" id="largeClassificationEnd" name="largeClassificationEnd" placeholder="999"
                                   type="text" value="" disabled onchange="$.fn.onInputValueChange('largeClassificationEnd', 'largeClassificationStartName')"/>
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <div class="form-group">
                            <input class="form-control" id="largeClassificationEndName" name="largeClassificationEndName"
                                   placeholder="Company 1" type="text" value="" disabled/>
                        </div>
                    </div>
                    <div class="col-xs-1 no-padding ratio">~</div>
                    <div class="col-xs-3">
                        <div class="form-group">
                            <input class="form-control" id="largeClassificationStartName" name="largeClassificationStartName"
                                   placeholder="Company 2" type="text" value="" disabled/>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-xs-offset-1">
                    <div class="col-xs-1 no-padding">
                        <p>大分類コード
                        </p>
                    </div>
                    <div class="col-xs-1  ">
                        <div class="form-group">
                            <input class="form-control" id="classificationStart" name="classificationStart"
                                   placeholder="000" type="text" value="" disabled onchange="$.fn.onInputValueChange('classificationStart', 'classificationStartName')"/>
                        </div>
                    </div>
                    <div class="col-xs-1 no-padding ratio">~</div>
                    <div class="col-xs-1 ">
                        <div class="form-group">
                            <input class="form-control" id="classificationEnd" name="classificationEnd" placeholder="999"
                                   type="text" value="" disabled onchange="$.fn.onInputValueChange('classificationEnd', 'classificationEndName')"/>
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <div class="form-group">
                            <input class="form-control" id="classificationStartName" name="classificationStartName"
                                   placeholder="Company 1" type="text" value="" disabled/>
                        </div>
                    </div>
                    <div class="col-xs-1 no-padding ratio">~</div>
                    <div class="col-xs-3">
                        <div class="form-group">
                            <input class="form-control" id="classificationEndName" name="classificationEndName"
                                   placeholder="Company 2" type="text" value="" disabled/>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-xs-offset-1">
                    <div class="col-xs-1 no-padding">
                        <p>大分類コード
                        </p>
                    </div>
                    <div class="col-xs-1  ">
                        <div class="form-group">
                            <input class="form-control" id="classicStart" name="classicStart"
                                   placeholder="000" type="text" value="" disabled onchange="$.fn.onInputValueChange('classicStart', 'classicStartName')"/>
                        </div>
                    </div>
                    <div class="col-xs-1 no-padding ratio">~</div>
                    <div class="col-xs-1 ">
                        <div class="form-group">
                            <input class="form-control" id="classicEnd" name="classicEnd" placeholder="999"
                                   type="text" value="" disabled onchange="$.fn.onInputValueChange('classicEnd', 'classicEndName')"/>
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <div class="form-group">
                            <input class="form-control" id="classicStartName" name="classicStartName"
                                   placeholder="Company 1" type="text" value="" disabled/>
                        </div>
                    </div>
                    <div class="col-xs-1 no-padding ratio">~</div>
                    <div class="col-xs-3">
                        <div class="form-group">
                            <input class="form-control" id="classicEndName" name="classicEndName"
                                   placeholder="Company 2" type="text" value="" disabled/>
                        </div>
                    </div>
                </div>
                </div>

                <div class="col-xs-12">

                    <div class="form-group">
                        <label class="col-xs-1 no-padding">業務区分

                        </label>

                        <div class="col-xs-1">
                            <input name="directSales" type="radio" value="all"> <span>直売</span>


                        </div>
                        <div class="col-xs-1">
                            <input name="directSales" type="radio" value="directSales"> <span>卸</span>


                        </div>

                        <div class="col-xs-2">
                            <input name="directSales" type="radio" value="directSales"> <span>自社合計 </span>


                        </div>
                        <div class="col-xs-2">
                            <input name="directSales" type="radio" value="directSales"> <span>伝票受託</span>


                        </div>

                        <div class="col-xs-1 no-padding">
                            <input name="directSales" type="radio" value="directSales"> <span>全て</span>


                        </div>


                    </div>


                </div>


                <div class="col-xs-12">

                    <div class="form-group">
                        <label class="col-xs-1 no-padding">改ページ指定


                        </label>

                        <div class="col-xs-1">

                            <input name="business" id="business" type="radio" value="all" onclick="$.fn.radioButtonSelectionChanged('business', 'businessId')"> <span>営業所</span>


                        </div>
                        <div class="col-xs-2">

                            <input name="business" id="business" type="radio" value="directSales" onclick="$.fn.radioButtonSelectionChanged('business', 'businessId')"> <span>営業担当者</span>


                        </div>

                        <div class="col-xs-1 no-padding">

                            <input name="business" id="business" type="radio" value="directSales" onclick="$.fn.radioButtonSelectionChanged('business', 'businessId')"> <span>地区</span>


                        </div>
                        <div class="col-xs-1">

                            <input name="business" id="business" type="radio" value="directSales" onclick="$.fn.radioButtonSelectionChanged('business', 'businessId')"> <span>なし</span>


                        </div>

                    </div>


                </div>


                <div class="col-xs-12">
                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-1 no-padding">
                            <p>営業所指定</p>
                        </div>
                        <div class="col-xs-1">
                            <input name="businessSelection" id="businessSelection" type="radio" value="all" checked onclick="$.fn.radioButtonSelectionChanged('businessSelection', 'businessSelectionId')"> <span>全て</span>
                        </div>
                        <div class="col-xs-1">
                            <input name="businessSelection" id="businessSelection" type="radio" value="directSales" onclick="$.fn.radioButtonSelectionChanged('businessSelection', 'businessSelectionId')"> <span>選択</span>

                        </div>

                    </div>
                    <div id="businessSelectionId">
                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-1 col-xs-offset-1">
                            <div class="form-group">
                                <input class="form-control" id="businessStart" name="businessStart" placeholder="000"
                                       type="text" value="" disabled onchange="$.fn.onInputValueChange('businessStart', 'businessStartName')"/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">~</div>
                        <div class="col-xs-1">
                            <div class="form-group">
                                <input class="form-control" id="businessEnd" name="businessEnd" placeholder="999"
                                       type="text" value="" disabled onchange="$.fn.onInputValueChange('businessEnd', 'businessEndName')"/>
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input class="form-control" id="businessStartName" name="businessStartName" type="text"
                                       value="" disabled/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">~</div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input class="form-control" id="businessEndName" name="businessEndName" type="text"
                                       value="" disabled/>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="col-xs-12">
                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-1 no-padding">
                            <p>販売店指定

                            </p>
                        </div>
                        <div class="col-xs-1">
                            <input name="dealerSelection" id="dealerSelection" type="radio" value="all" checked onclick="$.fn.radioButtonSelectionChanged('dealerSelection', 'dealerSelectionId')"> <span>全て</span>


                        </div>
                        <div class="col-xs-1">
                            <input name="dealerSelection" id="dealerSelection" type="radio" value="directSales" onclick="$.fn.radioButtonSelectionChanged('dealerSelection', 'dealerSelectionId')"> <span>選択</span>


                        </div>

                    </div>
                    <div id="dealerSelectionId">
                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-1 col-xs-offset-1">
                            <div class="form-group">
                                <input class="form-control" id="dealerStart" name="dealerStart"
                                       placeholder="000" type="text" value="" disabled onchange="$.fn.onInputValueChange('dealerStart', 'dealerStartName')"/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">~</div>
                        <div class="col-xs-1">
                            <div class="form-group">
                                <input class="form-control" id="dealerEnd" name="dealerEnd" placeholder="999"
                                       type="text" value="" disabled onchange="$.fn.onInputValueChange('dealerEnd', 'dealerEndName')"/>
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input class="form-control" id="dealerStartName" name="dealerStartName" type="text"
                                       value="" disabled/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">~</div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input class="form-control" id="dealerEndName" name="dealerEndName" type="text"
                                       value="" disabled/>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>


            <div class="col-xs-12 border1 no-padding bottom-box">
                <p class="backend">出力指定
                <div class="col-xs-12 no-padding">

                    <div class="form-group">
                        <label class="col-xs-1">出力先


                        </label>

                        <div class="col-xs-2">
                            <input name="output" id="output" type="radio" value="all" onclick="$.fn.radioButtonSelectionChanged('output', 'output')"> <span>プリンタ（印刷）</span>


                        </div>

                        <div class="col-xs-2">
                            <input name="output" id="output" type="radio" value="salesOutlet" onclick="$.fn.radioButtonSelectionChanged('output', 'output')"><span>画面（印刷イメージ）</span>


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