<?php include 'header.php';?>
<?php include 'sidebar.php';?>
    <div class="col-xs-8 col-md-10 col-xs-12 no-padding">
            <div class="col-md-12 col-xs-12 no-padding head-color">
                <div class="head-p">
                <p> 売上伝票入力チェックリスト </p>
                </div>

                 <form id="meter" action="/gas/meter-reading" method="POST">
                     <div class="col-xs-12 border1 no-padding">
                        <p class="backend">消費者範囲指定</p>
                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-12">
                            <div class="col-xs-1 no-padding">
                                <p class="p-size">伝票入力作業日

                                </p>
                            </div>
                            <div class="col-xs-1">
                                <input type="radio" name="documentEntryDateSelection" value="all" checked onclick="$.fn.radioButtonSelectionChanged('documentEntryDateSelection', 'documentEntryDateSelectionId')">  <span>全て</span>
                            </div>
                            <div class="col-xs-1">
                                <input type="radio" name="documentEntryDateSelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('documentEntryDateSelection', 'documentEntryDateSelectionId')">  <span>選択</span>
                            </div>

                        </div>
                        <div id="documentEntryDateSelectionId">
                            <div class="col-xs-12 no-padding">
                                <div class="col-xs-1 col-xs-offset-1">
                                    <div class="form-group">
                                        <input id="documentEntryDateStartId" name="documentEntryDateStartId" placeholder="000" class="form-control"
                                               type="text" value="" disabled onchange="$.fn.onInputValueChange('documentEntryDateStartId', 'documentEntryDateStartName')"/>
                                    </div>
                                </div>
                                <div class="col-xs-1 no-padding ratio">~</div>
                                <div class="col-xs-1">
                                    <div class="form-group">
                                        <input id="documentEntryDateEndId" name="documentEntryDateEndId" placeholder="999" class="form-control"
                                               type="text" value="" disabled onchange="$.fn.onInputValueChange('documentEntryDateEndId', 'documentEntryDateEndName')"/>
                                    </div>
                                </div>
    
                                <div class="col-xs-3">
                                    <div class="form-group">
                                        <input id="documentEntryDateStartName" name="documentEntryDateStartName" class="form-control" type="text"
                                               value="" disabled/>
                                    </div>
                                </div>
                                <div class="col-xs-1 no-padding ratio">~</div>
                                <div class="col-xs-3">
                                    <div class="form-group">
                                        <input id="documentEntryDateEndName" name="documentEntryDateEndName" class="form-control" type="text"
                                               value="" disabled/>
                                    </div>
                                </div>
                            </div>
                        </div>
                      
                    </div>
                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-12 ">
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
                                <p>出力区分
                                </p>
                            </div>
                            <div class="col-xs-1 no-padding">
                                <input type="radio" name="outputClassificationSelection" value="all" checked onclick="$.fn.radioButtonSelectionChanged('outputClassificationSelection', 'outputClassificationForm')"><span> 全て</span>
                            </div>
                            <div class="col-xs-1 no-padding no-padding">
                                <input type="radio" name="outputClassificationSelection" value="directSales" onclick="$.fn.radioButtonSelectionChanged('outputClassificationSelection', 'outputClassificationForm')"><span> 地区</span>
                            </div>
                            <div class="col-xs-2 no-padding">
                                <input type="radio" name="outputClassificationSelection" value="salesOutlet" onclick="$.fn.radioButtonSelectionChanged('outputClassificationSelection', 'outputClassificationForm')"><span>
                                    営業担当者</span>
                            </div>

                        </div>
                        <div id="outputClassificationForm">
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
                                            value="" />
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
                                        type="text" value="" onchange="$.fn.onInputValueChange('consumerCodeStartId', 'consumerCodeStartName')"/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">~</div>
                            <div class="col-xs-2">
                                <div class="form-group">
                                    <input id="consumeCodeEndId" name="consumeCodeEndId" placeholder="z" class="form-control"
                                        type="text" value="" onchange="$.fn.onInputValueChange('consumeCodeEndId', 'consumerCodeEndName')"/>
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
                     <div class="border1 col-xs-12 no-padding">
                         <p class="backend">作成範囲指定</p>
                    <div class="col-xs-12">

                        <div class="form-group">
                            <label class="col-xs-1 no-padding">絞り込み日付</label>
                            <div class="col-xs-3 ">
                                <input type="date" class="form-control" />
                            </div>
                            <div class="lab1">
                                <label class="col-xs-2 control-label style2">日付種別
                                </label>

                                <div class="col-xs-2">
                                    <input type="radio" name="all" value="all"><span> 伝票入力日付</span>
                                </div>

                                <div class="col-xs-2 no-padding">
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
                                <input type="radio" name="personInChargeSelection" id="personInChargeSelection" value="all" checked onclick="$.fn.radioButtonSelectionChanged('personInChargeSelection', 'personInChargeSelectionId')"><span>全て</span>
                            </div>
                            <div class="col-xs-1">
                                <input type="radio" name="personInChargeSelection" id="personInChargeSelection" value="directSales" onclick="$.fn.radioButtonSelectionChanged('personInChargeSelection', 'personInChargeSelectionId')"><span> 選択</span>
                            </div>

                        </div>
                        <div id="personInChargeSelectionId">
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-2 col-xs-offset-1">
                                <div class="form-group">
                                    <input id="personStartId" name="personStartId" placeholder="" class="form-control"
                                        type="text" value="" disabled onchange="$.fn.onInputValueChange('personStartId', 'personEndId')"/>
                                </div>
                            </div>
                            <div class="col-xs-5">
                                <div class="form-group">
                                    <input id="personEndId" name="personEndId" placeholder="" class="form-control" type="text"
                                        value="" disabled />
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
                                <input id="slipStartId" name="slipStartId" placeholder="" class="form-control" type="text"
                                    value="" onchange="$.fn.onInputValueChange('slipStartId', 'slipEndId')"/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">~</div>
                        <div class="col-xs-4">
                            <div class="form-group">
                                <input id="slipEndId" name="slipEndId" placeholder="" class="form-control" type="text"
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
                      <div class="col-xs-12 border1 no-padding bottom-box">
                          <p class="backend">出力指定</p>
                    <div class="col-xs-12">

                        <div class="form-group">
                            <label class="col-xs-1 no-padding">並び順</label>
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