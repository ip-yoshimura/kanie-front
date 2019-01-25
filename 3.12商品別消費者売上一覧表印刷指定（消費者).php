<?php include 'header.php';?>
<?php include 'sidebar.php';?>
    <div class="col-xs-8 col-md-10 col-xs-12 no-padding">
        <div class="col-md-12 col-xs-12 no-padding body-background">

                <div class="head-p">
                    <p> 商品別消費者売上一覧表印刷指定（消費者）

                    </p>
                </div>
                <form action="/gas/meter-reading" id="meter" method="POST">
                    <div class="col-xs-12 border1 no-padding">
                        <p class="backend">作成範囲指定</p>

                    <div class="col-xs-12">
                        <div class="form-group">
                            <label class="col-xs-1 no-padding">指定年月
                            </label>
                            <div class="col-xs-2 no-padding">
                                <input class="form-control" type="date"/>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12">

                        <div class="form-group">
                            <label class="col-xs-1 no-padding">商品分類
                            </label>

                            <div class="col-xs-1 no-padding">
                                <input name="categoriesSelection" id="categoriesSelection" type="radio" value="all" checked onclick="$.fn.radioButtonSelectionChanged('categoriesSelection', 'categoriesSelectionId')"> <span>全て</span>

                            </div>

                            <div class="col-xs-2 no-padding">
                                <input name="categoriesSelection" id="categoriesSelection" type="radio" value="directSales" onclick="$.fn.radioButtonSelectionChanged('categoriesSelection', 'categoriesSelectionId')"><span>大分類範囲指定</span>


                            </div>
                            <div class="col-xs-2 no-padding">
                                <input name="categoriesSelection" id="categoriesSelection" type="radio" value="directSales" onclick="$.fn.radioButtonSelectionChanged('categoriesSelection', 'categoriesSelectionId')">  <span>中分類範囲指定</span>

                            </div>

                            <div class="col-xs-2 no-padding">
                                <input name="categoriesSelection" id="categoriesSelection" type="radio" value="directSales" onclick="$.fn.radioButtonSelectionChanged('categoriesSelection', 'categoriesSelectionId')">  <span>小分類範囲指定</span>
                            </div>


                        </div>


                    </div>


                        <div id="categoriesSelectionId">
                        <div class="col-xs-12 no-padding col-xs-offset-1">
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

                        <div class="col-xs-12 no-padding col-xs-offset-1">
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

                        <div class="col-xs-12 no-padding col-xs-offset-1">
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
                            <div class="col-xs-3 no-padding">
                                <div class="form-group">
                                    <input class="form-control" id="classicEndName" name="classicEndName"
                                           placeholder="Company 2" type="text" value="" disabled/>
                                </div>
                            </div>
                        </div>
                        </div>

                    <div class="col-xs-12">

                        <div class="form-group">
                            <label class="col-xs-1 no-padding p-size">商品コード指定</label>

                            <div class="col-xs-1">
                                <input name="directSales" type="radio" value="directSales">  <span>全て</span>


                            </div>
                            <div class="col-xs-2 no-padding">
                                <input name="directSales" type="radio" value="directSales">  <span>商品コード</span>

                            </div>

                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input class="form-control" id="companyIdEndName" name="companyIdEndName"
                                           placeholder="Company 2" type="text" value=""/>
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

                    <div class="col-xs-12">
                        <div class="col-xs-1 no-padding">
                            <p>大分類コード
                            </p>
                        </div>
                        <div class="col-xs-2 ">
                            <div class="form-group">
                                <input class="form-control" id="largeStartId" name="largeStartId"
                                       placeholder="000" type="text" value="" onchange="$.fn.onInputValueChange('largeStartId', 'largeStartName')"/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">~</div>
                        <div class="col-xs-2  no-padding">
                            <div class="form-group">
                                <input class="form-control" id="largeEndId" name="largeEndId" placeholder="999"
                                       type="text" value="" onchange="$.fn.onInputValueChange('largeEndId', 'largeEndName')"/>
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input class="form-control" id="largeStartName" name="largeStartName"
                                       placeholder="Company 1" type="text" value=""/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">~</div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input class="form-control" id="largeEndName" name="largeEndName"
                                       placeholder="Company 2" type="text" value=""/>
                            </div>
                        </div>
                    </div>




                    <div class="col-xs-12">
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-1 no-padding">
                                <p>消費者コード

                                </p>
                            </div>
                            <div class="col-xs-2">
                                <input name="consuSelection" id="consuSelection" type="radio" value="all" checked onclick="$.fn.radioButtonSelectionChanged('consuSelection', 'consuSelectionId')"> <span>オプション1</span>


                            </div>
                            <div class="col-xs-2 no-padding">
                                <input name="consuSelection" id="consuSelection" type="radio" value="directSales" onclick="$.fn.radioButtonSelectionChanged('consuSelection', 'consuSelectionId')" > <span>オプション2</span>



                            </div>

                        </div>
                        <div id="consuSelectionId">
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-1 col-xs-offset-1">
                                <div class="form-group">
                                    <input class="form-control" id="consutStartId" name="consutStartId" placeholder="000"
                                           type="text" value="" disabled onchange="$.fn.onInputValueChange('consutStartId', 'consuStartName')"/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">~</div>
                            <div class="col-xs-1">
                                <div class="form-group">
                                    <input class="form-control" id="consuEndId" name="consuEndId" placeholder="999"
                                           type="text" value="" disabled onchange="$.fn.onInputValueChange('consuEndId', 'consuEndName')"/>
                                </div>
                            </div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input class="form-control" id="consuStartName" name="consuStartName" type="text"
                                           value="" disabled/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">~</div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input class="form-control" id="consuEndName" name="consuEndName" type="text"
                                           value="" disabled/>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>

                    <div class="col-xs-12">

                        <div class="form-group">
                            <label class="col-xs-1 no-padding">改ページ指定</label>

                            <div class="col-xs-2">
                                <input name="pagebreak" id="pagebreak" type="radio" value="all" onclick="$.fn.radioButtonSelectionChanged('pagebreak', 'pagebreakId')"> <span>営業所・販売店</span>
                            </div>

                            <div class="col-xs-2 no-padding">
                                <input name="pagebreak" id="pagebreak" type="radio" value="salesOutlet" onclick="$.fn.radioButtonSelectionChanged('pagebreak', 'pagebreakId')"> <span>担当者ごと</span>
                            </div>

                            <div class="col-xs-2 no-padding">
                                <input name="pagebreak" id="pagebreak" type="radio" value="salesOutlet" onclick="$.fn.radioButtonSelectionChanged('pagebreak', 'pagebreakId')"> <span>地区ごと</span>
                            </div>


                        </div>


                    </div>

                    <div class="col-xs-12">
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-1 no-padding">
                                <p>営業担当者</p>
                            </div>
                            <div class="col-xs-1">
                                <input name="salesSelection" id="salesSelection" type="radio" value="all" checked onclick="$.fn.radioButtonSelectionChanged('salesSelection', 'salesSelectionId')">  <span>全て</span>


                            </div>
                            <div class="col-xs-1">
                                <input name="salesSelection" id="salesSelection" type="radio" value="directSales" onclick="$.fn.radioButtonSelectionChanged('salesSelection', 'salesSelectionId')">  <span>選択</span>


                            </div>

                        </div>
                       <div id="salesSelectionId">
                       <div class="col-xs-12 no-padding">
                            <div class="col-xs-1 col-xs-offset-1">
                                <div class="form-group">
                                    <input class="form-control" id="salesStartId" name="salesStartId"
                                           placeholder="000" type="text" value="" disabled onchange="$.fn.onInputValueChange('salesStartId', 'salesStartName')"/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">~</div>
                            <div class="col-xs-1">
                                <div class="form-group">
                                    <input class="form-control" id="salesEndId" name="salesEndId" placeholder="999"
                                           type="text" value="" disabled onchange="$.fn.onInputValueChange('salesEndId', 'salesEndName')"/>
                                </div>
                            </div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input class="form-control" id="salesStartName" name="salesStartName" type="text"
                                           value="" disabled/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">~</div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input class="form-control" id="salesEndName" name="salesEndName" type="text"
                                           value="" disabled/>
                                </div>
                            </div>
                        </div>
                       </div>
                    </div>
                    </div>

                    <div class="col-xs-12 border1 no-padding bottom-box">
                        <p class="backend">作成範囲指定</p>

                    <div class="col-xs-12">

                        <div class="form-group">
                            <label class="col-xs-1 no-padding">並び順</label>

                            <div class="col-xs-2">
                                <input name="sortby" id="sortby" type="radio" value="all" onclick="$.fn.radioButtonSelectionChanged('sortby', 'sortbyId')"> <span>商品コード順</span>
                            </div>

                            <div class="col-xs-2">
                                <input name="sortby" id="sortby" type="radio" value="salesOutlet" onclick="$.fn.radioButtonSelectionChanged('sortby', 'sortbyId')"> <span>売上高順</span>
                            </div>

                            <div class="col-xs-2">
                                <input name="sortby" id="sortby" type="radio" value="salesOutlet" onclick="$.fn.radioButtonSelectionChanged('sortby', 'sortbyId')"> <span>販売数量順</span>

                            </div>


                        </div>


                    </div>

                    <div class="col-xs-12">

                        <div class="form-group">
                            <label class="col-xs-1 no-padding">上位件数指定</label>

                            <div class="col-xs-1">
                                <input name="directSales" type="radio" value="directSales"> <span>なし</span>


                            </div>
                            <div class="col-xs-1 no-padding">
                                <input name="directSales" type="radio" value="directSales"><span>指定</span>

                            </div>
                            <label class="col-xs-1 no-padding">上位</label>
                            <div class="col-xs-3 no-padding">
                                <div class="form-group">
                                    <input class="form-control" id="companyIdEndName" name="companyIdEndName"
                                           placeholder="Company 2" type="text" value=""/>
                                </div>
                            </div>


                        </div>


                    </div>

                    <div class="col-xs-12">

                        <div class="form-group">
                            <label class="col-xs-1 no-padding">出力先</label>

                            <div class="col-xs-2 no-padding">
                                <input name="output" id="output" type="radio" value="all" onclick="$.fn.radioButtonSelectionChanged('output', 'outputId')"><span>プリンタ（印刷）</span>
                            </div>

                            <div class="col-xs-2 no-padding">
                                <input name="output" id="output" type="radio" value="salesOutlet" onclick="$.fn.radioButtonSelectionChanged('output', 'outputId')"> <span>画面（印刷イメージ）</span>

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