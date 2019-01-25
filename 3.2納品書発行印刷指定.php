<?php include 'header.php';?>
<?php include 'sidebar.php';?>
    <div class="col-xs-8 col-md-10 col-xs-12 no-padding" >

            <div class="col-md-12 col-xs-12 no-padding head-color">
                <div class="head-p">
                    <p>納品書発行印刷指定</p>
                </div>
                <form id="meter" action="/gas/meter-reading" method="POST">

                    <div class="col-xs-12 border1 no-padding">

                        <p class="backend">消費者範囲指定</p>
                        <div class="col-xs-12">
                            <div class="col-xs-12 no-padding">
                                <div class="col-xs-1 no-padding ">
                                    <p>営業所コード</p>

                                </div>
                                <div class="col-xs-1 no-padding">
                                    <input type="radio" id="officeCodeSelection" name="officeCodeSelection" value="all" checked onclick="$.fn.radioButtonSelectionChanged('officeCodeSelection', 'officeCodeSelectionForm')"> <span>全て</span>
                                </div>
                                <div class="col-xs-1 no-padding">
                                    <input type="radio" id="officeCodeSelection" name="officeCodeSelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('officeCodeSelection', 'officeCodeSelectionForm')"><span>選択</span>
                                </div>

                            </div>
                        </div>
                            <div id="officeCodeSelectionForm">
                            <div class="col-xs-12 no-padding">
                                <div class="col-xs-1 col-xs-offset-1">
                                    <div class="form-group">
                                        <input id="officeCodeStartId" name="officeCodeStartId" placeholder="000"
                                               class="form-control"
                                               type="text" value="" disabled onchange="$.fn.onInputValueChange('officeCodeStartId', 'officeCodeStartName')"/>
                                    </div>
                                </div>

                                <div class="col-xs-1 no-padding ratio">~</div>

                                <div class="col-xs-1 no-padding">
                                    <div class="form-group no-padding">
                                        <input id="officeCodeEndId" name="officeCodeEndId"  placeholder="999" class="form-control"
                                               type="text" value="" disabled onchange="$.fn.onInputValueChange('officeCodeEndId', 'officeCodeEndName')"/>
                                    </div>
                                </div>

                                <div class="col-xs-3">
                                    <div class="form-group">
                                        <input id="officeCodeStartName" name="officeCodeStartName" class="form-control"
                                               type="text"
                                               value="" disabled/>
                                    </div>
                                </div>
                                <div class="col-xs-1 no-padding ratio">~</div>
                                <div class="col-xs-3">
                                    <div class="form-group">
                                        <input id="officeCodeEndName" name="officeCodeEndName" class="form-control"
                                            type="text" value="" disabled />
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
                                    <input type="radio" name="trustClassificationSelection" value="all" checked onclick="$.fn.radioButtonSelectionChanged('trustClassificationSelection', 'trustClassificationForm')"><span>全て</span>
                                </div>
                                <div class="col-xs-1 no-padding">
                                    <input type="radio" name="trustClassificationSelection" value="directSales" onclick="$.fn.radioButtonSelectionChanged('trustClassificationSelection', 'trustClassificationForm')"><span>直売</span>
                                </div>
                                <div class="col-xs-2 no-padding">
                                    <input type="radio" name="trustClassificationSelection" value="salesOutlet" onclick="$.fn.radioButtonSelectionChanged('trustClassificationSelection', 'trustClassificationForm')"><span>販売店</span>
                                </div>
                            </div>
                            <div id="trustClassificationForm">
                                <div class="col-xs-12 no-padding">
                                    <div class="col-xs-1 col-xs-offset-1">
                                        <div class="form-group">
                                            <input id="trustStartId" name="trustStartId" placeholder="000" class="form-control"
                                                   type="text" value="" disabled onchange="$.fn.onInputValueChange('trustStartId', 'trustStartName')" />
                                        </div>
                                    </div>
                                    <div class="col-xs-1 no-padding ratio">~</div>
                                    <div class="col-xs-1">
                                        <div class="form-group">
                                            <input id="trustEndId" name="trustEndId" placeholder="999" class="form-control"
                                                   type="text" value="" disabled onchange="$.fn.onInputValueChange('trustEndId', 'trustEndName')" />
                                        </div>
                                    </div>
                                    <div class="col-xs-3">
                                        <div class="form-group">
                                            <input id="trustStartName" name="trustStartName" class="form-control" type="text"
                                                   value="" disabled />

                                        </div>
                                    </div>
                                    <div class="col-xs-1 no-padding ratio">~</div>
                                    <div class="col-xs-3">
                                        <div class="form-group">
                                            <input id="trustEndName" name="trustEndName" class="form-control" type="text"
                                                   value="" disabled />
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
                                <div class="col-xs-1 no-padding">
                                    <input type="radio" name="outputClassificationSelection" value="all" checked onclick="$.fn.radioButtonSelectionChanged('outputClassificationSelection', 'outputClassificationSelectionForm')"><span>
                                    全て</span>
                                </div>
                                <div class="col-xs-1 no-padding no-padding">
                                    <input type="radio" name="outputClassificationSelection" value="directSales" onclick="$.fn.radioButtonSelectionChanged('outputClassificationSelection', 'outputClassificationSelectionForm')"><span>
                                    地区</span>
                                </div>
                                <div class="col-xs-2 no-padding">
                                    <input type="radio" name="outputClassificationSelection" value="salesOutlet" onclick="$.fn.radioButtonSelectionChanged('outputClassificationSelection', 'outputClassificationSelectionForm')"><span>
                                    営業担当者</span>
                                </div>
                            </div>
                            <div id="outputClassificationSelectionForm">
                                <div class="col-xs-12 no-padding">
                                    <div class="col-xs-1 col-xs-offset-1">
                                        <div class="form-group">
                                            <input id="outputStartId" name="outputStartId" placeholder="000" class="form-control"
                                                   type="text" value="" disabled onchange="$.fn.onInputValueChange('outputStartId', 'outputStartName')" />
                                        </div>
                                    </div>
                                    <div class="col-xs-1 no-padding ratio">~</div>
                                    <div class="col-xs-1">
                                        <div class="form-group">
                                            <input id="outputEndId" name="outputEndId" placeholder="999" class="form-control"
                                                   type="text" value="" disabled onchange="$.fn.onInputValueChange('outputEndId', 'outputEndName')" />
                                        </div>
                                    </div>
                                    <div class="col-xs-3">
                                        <div class="form-group">
                                            <input id="outputStartName" name="outputStartName" class="form-control" type="text"
                                                   value="" disabled />
                                        </div>

                                    </div>
                                    <div class="col-xs-1 no-padding ratio">~</div>
                                    <div class="col-xs-3">
                                        <div class="form-group">
                                            <input id="outputEndName" name="outputEndName" class="form-control" type="text"
                                                   value="" disabled />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12">
                            <div class="col-xs-1 no-padding">
                                <p>消費者コード</p>
                            </div>
                            <div id="consumerCodeForm">
                                <div class="col-xs-2">
                                    <div class="form-group">
                                        <input id="consumerCodeStartId" name="consumerCodeStartId" placeholder="0" class="form-control"
                                               type="text" value="" onchange="$.fn.onInputValueChange('consumerCodeStartId', 'consumerCodeStartName')" />
                                    </div>
                                </div>
                                <div class="col-xs-1 no-padding ratio">~</div>
                                <div class="col-xs-2">
                                    <div class="form-group">
                                        <input id="consumeCodeEndId" name="consumeCodeEndId" placeholder="z" class="form-control"
                                               type="text" value=""  onchange="$.fn.onInputValueChange('consumeCodeEndId', 'consumerCodeEndName')" />
                                    </div>
                                </div>
                                <div class="col-xs-3">
                                    <div class="form-group">
                                        <input id="consumerCodeStartName" name="consumerCodeStartName" class="form-control"
                                               type="text" value="" />
                                    </div>
                                </div>
                                <div class="col-xs-1 no-padding ratio">~</div>
                                <div class="col-xs-2">
                                    <div class="form-group">
                                        <input id="consumerCodeEndName" name="consumerCodeEndName" class="form-control"
                                               type="text" value="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container col-xs-12 border1 no-padding">
                        <p class="backend">作成範囲指定</p>
                        <div class="col-xs-12 no-padding">

                            <div class="form-group">
                                <label class="col-xs-1 p-size-1">絞り込み日付</label>
                                <div class="col-xs-2 ">
                                    <input type="date" class="form-control" />
                                </div>
                                <div class="lab1">
                                    <label class="col-xs-1">日付種別
                                    </label>

                                    <div class="col-xs-2 no-padding">
                                        <input type="radio" name="all" value="all"><span> 伝票入力日付</span>
                                    </div>

                                    <div class="col-xs-1 no-padding">
                                        <input type="radio" name="all" value="all"><span>売上伝票日付</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12">
                            <div class="col-xs-12 no-padding">
                                <div class="col-xs-1 no-padding">
                                    <p>入力担当者</p>
                                </div>
                                <div class="col-xs-1">
                                    <input type="radio" id="personInChargeSelection" name="personInChargeSelection" value="all" checked onclick="$.fn.radioButtonSelectionChanged('personInChargeSelection', 'personInChargeSelectionForm')"><span>全て</span>
                                </div>
                                <div class="col-xs-1">
                                    <input type="radio" id="personInChargeSelection" name="personInChargeSelection" value="directSales" onclick="$.fn.radioButtonSelectionChanged('personInChargeSelection', 'personInChargeSelectionForm')"><span> 選択</span>
                                </div>

                            </div>
                            <div id="personInChargeSelectionForm">
                                <div class="col-xs-12 no-padding">
                                    <div class="col-xs-1 col-xs-offset-1">
                                        <div class="form-group">
                                            <input id="personInChargeSelectionId" name="personInChargeSelectionId" placeholder="" class="form-control"
                                                   type="text" value="" disabled onchange="$.fn.onInputValueChange('personInChargeSelectionId', 'personInChargeSelectionName')"/>
                                        </div>
                                    </div>
                                    <div class="col-xs-3">
                                        <div class="form-group">
                                            <input id="personInChargeSelectionName" disabled name="personInChargeSelectionName" placeholder="" class="form-control" type="text"
                                                   value="" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>


                        <div class="col-xs-12">
                            <div class="col-xs-1 no-padding">
                                <p>伝票番号</p>
                            </div>
                            <div class="col-xs-4">
                                <div class="form-group">
                                    <input id="slipId" name="slipId" placeholder="" class="form-control" type="text"
                                           value="" onchange="$.fn.onInputValueChange('slipId', 'slipName')"/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">~</div>
                            <div class="col-xs-4">
                                <div class="form-group">
                                    <input id="slipName" name="slipName" placeholder="" class="form-control" type="text"
                                           value="" />
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12">
                            <div class="col-xs-12 no-padding">
                                <div class="col-xs-1 no-padding">
                                    <p>返品分の印刷</p>
                                </div>
                                <div class="col-xs-1">
                                    <input type="radio" name="printingReturnsSelection" value="all"><span>する</span>
                                </div>
                                <div class="col-xs-1">
                                    <input type="radio" name="printingReturnsSelection" value="directSales"><span> しない</span>
                                </div>
                            </div>
                        </div>


                        <div class="col-xs-12">
                            <div class="col-xs-12 no-padding">
                                <div class="col-xs-1 no-padding">
                                    <p class="p-size-1">分割払明細書印刷
                                    </p>
                                </div>
                                <div class="col-xs-1">
                                    <input type="radio" name="dividedPaymentPrintingSelection" value="all"><span>する</span>
                                </div>
                                <div class="col-xs-1">
                                    <input type="radio" name="dividedPaymentPrintingSelection" value="directSales"><span>
                                    しない</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12" style="margin-bottom: 20px">
                            <div class="col-xs-12 no-padding">
                                <div class="col-xs-1 no-padding">
                                    <p>帳票タイプ</p>
                                </div>
                                <div class="col-xs-3">
                                    <select name="" class="selclass form-control">
                                        <option value="納品書元 （化学事業部"> 納品書元 （化学事業部）</option>
                                        <option value="納品書新 （化学事業部">納品書新 （化学事業部）</option>
                                        <option value="納品書 （三重">納品書 （三重）</option>
                                        <option value="納品書 （化学事業部">納品書 （化学事業部）</option>
                                        <option value="納品書 （化学事業部）">納品書 （化学事業部）</option>
                                        <option value="納品書 （本社）">納品書 （本社）</option>
                                        <option value="納品書 （本社） 百五">納品書 （本社） 百五</option>
                                        <option value="納品書 （関東）">納品書 （関東）</option>
                                        <option value="蟹江プロパン納品書">蟹江プロパン納品書"</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container col-xs-12 border1 no-padding bottom-box">
                        <div class="col-xs-12 no-padding">
                            <p class="backend">出力指定</p>
                            <div class="form-group">
                                <label class="col-xs-1">並び順</label>
                                <div class="col-xs-2">
                                    <input type="radio" name="directSales" value="directSales"> <span>伝票番号順</span>
                                </div>
                                <div class="col-xs-2">
                                    <input type="radio" name="directSales" value="directSales"> <span>消費者コード順</span>
                                </div>
                                <div class="col-xs-2">
                                    <input type="radio" name="directSales" value="directSales"><span>検針順路順</span>
                                </div>
                                <div class="col-xs-2">
                                    <input type="radio" name="directSales" value="directSales"> <span>検索名順</span>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php include 'footer.php';?>
            </form>
        </div>


    </div>
</div>
</body>

</html>