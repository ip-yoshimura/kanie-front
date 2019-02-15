<?php
include "header.php"
?>
<?php
include "sidebar.php"
?>
<div class="col-xs-8 col-md-10 col-xs-12 no-padding">

    <div class="col-md-12 col-xs-12 no-padding head-color">
        <div class="head-p">
            <p>警報器交換伝票印刷指定</p>
        </div>
        <form action="/gas/meter-reading" id="meter" method="POST">

            <div class="col-xs-12 border1 no-padding">
                <p class="backend">消費者範囲指定</p>
                <div class="col-xs-12">
                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-1 no-padding">
                            <p>営業所コード</p>
                        </div>
                        <div class="col-xs-1">
                            <input name="officeCode" type="radio" value="all" checked onclick="$.fn.radioButtonSelectionChanged('officeCode', 'officeCodeId')"><span> 全て</span>
                        </div>
                        <div class="col-xs-1">
                            <input name="officeCode" type="radio" value="directSales" onclick="$.fn.radioButtonSelectionChanged('officeCode', 'officeCodeId')"><span> 選択</span>
                        </div>

                    </div>
                    <div id="officeCodeId">
                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-1 col-xs-offset-1">
                            <div class="form-group">
                                <input class="form-control" id="trustStartId" name="trustStartId"
                                       placeholder="000"
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
                                <input class="form-control" id="trustStartName" name="trustStartName"
                                       type="text"
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
                            <input name="classification" type="radio" value="all" checked onclick="$.fn.radioButtonSelectionChanged('classification', 'classificationId')"><span> 全て</span>
                        </div>
                        <div class="col-xs-1">
                            <input name="classification" type="radio" value="directSales" onclick="$.fn.radioButtonSelectionChanged('classification', 'classificationId')"><span> 自社</span>
                        </div>
                        <div class="col-xs-1">
                            <input name="classification" type="radio" value="salesOutlet" onclick="$.fn.radioButtonSelectionChanged('classification', 'classificationId')"><span> 販売店</span>
                        </div>
                    </div>


                    <div id="classificationId">
                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-1 col-xs-offset-1">
                            <div class="form-group">
                                <input class="form-control" id="classificationStartId" name="classificationStartId"
                                       placeholder="000"
                                       type="text" value="" disabled onchange="$.fn.onInputValueChange('classificationStartId', 'classificationStartName')"/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">~</div>
                        <div class="col-xs-1">
                            <div class="form-group">
                                <input class="form-control" id="classificationEndId" name="classificationEndId" placeholder="999"
                                       type="text" value="" disabled onchange="$.fn.onInputValueChange('classificationEndId', 'classificationEndName')"/>
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input class="form-control" id="classificationStartName" name="classificationStartName"
                                       type="text"
                                       value="" disabled/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">~</div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input class="form-control" id="classificationEndName" name="classificationEndName" type="text"
                                       value="" disabled/>
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
                        <div class="col-xs-1">
                            <input name="output" type="radio" value="all" checked onclick="$.fn.radioButtonSelectionChanged('output', 'outputId')"><span> 全て</span>
                        </div>
                        <div class="col-xs-1">
                            <input name="output" type="radio" value="directSales" onclick="$.fn.radioButtonSelectionChanged('output', 'outputId')"><span> 地区</span>
                        </div>
                        <div class="col-xs-1 no-padding">
                            <input name="output" type="radio" value="salesOutlet" onclick="$.fn.radioButtonSelectionChanged('output', 'outputId')"><span> 営業担当者</span>
                        </div>
                        <div class="col-xs-1 no-padding">
                            <input name="output" type="radio" value="salesOutlet" onclick="$.fn.radioButtonSelectionChanged('output', 'outputId')"><span> 工事担当者</span>
                        </div>
                        <div class="col-xs-1 no-padding">
                            <input name="output" type="radio" value="salesOutlet" onclick="$.fn.radioButtonSelectionChanged('output', 'outputId')"><span> 配送担当者</span>
                        </div>
                        <div class="col-xs-1 no-padding">
                            <input name="output" type="radio" value="salesOutlet" onclick="$.fn.radioButtonSelectionChanged('output', 'outputId')"><span> 検針担当者</span>
                        </div>
                    </div>
                    <div id="outputId">
                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-1 col-xs-offset-1">
                            <div class="form-group">
                                <input class="form-control" id="outputStartId" name="outputStartId"
                                       placeholder="000" type="text" value="" disabled onchange="$.fn.onInputValueChange('outputStartId', 'outputStartName')"/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">~</div>
                        <div class="col-xs-1">
                            <div class="form-group">
                                <input class="form-control" id="outputEndId" name="outputEndId"
                                       placeholder="999"
                                       type="text" value="" disabled onchange="$.fn.onInputValueChange('outputEndId', 'outputEndName')"/>
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input class="form-control" id="outputStartName" name="outputStartName"
                                       type="text"
                                       value="" disabled/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">~</div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input class="form-control" id="outputEndName" name="outputEndName" type="text"
                                       value="" disabled/>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="col-xs-12">
                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-1 no-padding">
                            <p>保安機関</p>
                        </div>
                        <div class="col-xs-1">
                            <input name="directSales" type="radio" value="all" checked onclick="$.fn.radioButtonSelectionChanged('directSales', 'directSalesId')"><span> 全て</span>
                        </div>
                        <div class="col-xs-2">
                            <input name="directSales" type="radio" value="directSales" onclick="$.fn.radioButtonSelectionChanged('directSales', 'directSalesId')"><span> 保安機関</span>
                        </div>
                        <div class="col-xs-2 no-padding">
                            <input name="directSales" type="radio" value="salesOutlet" onclick="$.fn.radioButtonSelectionChanged('directSales', 'directSalesId')"><span> 調査員</span>
                        </div>
                    </div>
                   <div id="directSalesId">
                   <div class="col-xs-12 no-padding">
                        <div class="col-xs-1 col-xs-offset-1">
                            <div class="form-group">
                                <input class="form-control" id="directStartId" name="directStartId"
                                       placeholder="000" type="text" value="" disabled onchange="$.fn.onInputValueChange('directStartId', 'directStartName')"/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">~</div>
                        <div class="col-xs-1">
                            <div class="form-group">
                                <input class="form-control" id="directEndId" name="directEndId"
                                       placeholder="999"
                                       type="text" value="" disabled onchange="$.fn.onInputValueChange('directEndId', 'directEndName')"/>
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input class="form-control" id="directStartName" name="directStartName"
                                       type="text"
                                       value="" disabled/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">~</div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input class="form-control" id="directEndName" name="directEndName" type="text"
                                       value="" disabled/>
                            </div>
                        </div>
                    </div>
                   </div>
                </div>

                <div class="col-xs-12">
                    <div class="col-xs-1 col-xs-offset-1">
                        <p>調査員</p>
                    </div>
                    <div class="col-xs-2">
                        <div class="form-group">
                            <input class="form-control" id="consumCodeStart" name="consumCodeStart"
                                   placeholder="0" type="text" value="" onchange="$.fn.onInputValueChange('consumCodeStart', 'consumCodeStartName')"/>
                        </div>
                    </div>
                    <div class="col-xs-1 no-padding ratio">~</div>
                    <div class="col-xs-2">
                        <div class="form-group">
                            <input class="form-control" id="consumCodeEnd" name="consumCodeEnd"
                                   placeholder="z"
                                   type="text" value="" onchange="$.fn.onInputValueChange('consumCodeEnd', 'consumCodeEndName')"/>
                        </div>
                    </div>
                    <div class="col-xs-2">
                        <div class="form-group">
                            <input class="form-control" id="consumCodeStartName" name="consumCodeStartName"
                                   type="text" value=""/>
                        </div>
                    </div>
                    <div class="col-xs-1 no-padding ratio">~</div>
                    <div class="col-xs-2">
                        <div class="form-group">
                            <input class="form-control" id="consumCodeEndName" name="consumCodeEndName"
                                   type="text" value=""/>
                        </div>
                    </div>

                </div>

                <div class="col-xs-12">
                    <div class="col-xs-1 no-padding">
                        <p>消費者コード</p>
                    </div>
                    <div class="col-xs-2">
                        <div class="form-group">
                            <input class="form-control" id="consumer_2CodeStart" name="consumer_2CodeStart"
                                   placeholder="0" type="text" value="" onchange="$.fn.onInputValueChange('consumer_2CodeStart', 'consumer_2CodeStartName')"/>
                        </div>
                    </div>
                    <div class="col-xs-1 no-padding ratio">~</div>
                    <div class="col-xs-2">
                        <div class="form-group">
                            <input class="form-control" id="consumeCode_2End" name="consume_2CodeEnd"
                                   placeholder="z"
                                   type="text" value="" onchange="$.fn.onInputValueChange('consumeCode_2End', 'consumer_2CodeEndName')"/>
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <div class="form-group">
                            <input class="form-control" id="consumer_2CodeStartName" name="consumer_2CodeStartName"
                                   type="text" value=""/>
                        </div>
                    </div>
                    <div class="col-xs-1 no-padding ratio">~</div>
                    <div class="col-xs-3">
                        <div class="form-group">
                            <input class="form-control" id="consumer_2CodeEndName" name="consumer_2CodeEndName"
                                   type="text" value=""/>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12">
                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-1 no-padding">
                            <p>入居状態</p>
                        </div>
                        <div class="col-xs-1">
                            <input name="moveIn" type="radio" value="all" onclick="$.fn.radioButtonSelectionChanged('moveIn', 'moveInId')"><span> 全て</span>
                        </div>
                        <div class="col-xs-2">
                            <input name="moveIn" type="radio" value="directSales" onclick="$.fn.radioButtonSelectionChanged('moveIn', 'moveInId')"><span> 閉栓・休止除く</span>
                        </div>
                        <div class="col-xs-2">
                            <input name="moveIn" type="radio" value="directSales" onclick="$.fn.radioButtonSelectionChanged('moveIn', 'moveInId')"><span> 未入居除く</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 border1 no-padding">
                <p class="backend">作成範囲指定</p>

                <div class="col-xs-12">
                    <div class="form-group">
                        <label class="col-xs-1 no-padding"> 交換期限</label>
                        <div class="col-xs-2">
                                <input class="form-control" id="consumerCodeStart" name="consumerCodeStart"
                                       type="date" value=""/>
                        </div>
                        <div class="col-xs-1 no-padding ratio">~</div>
                        <div class="col-xs-2">
                                <input class="form-control" id="consumerCodeStart" name="consumerCodeStart"
                                       type="date" value=""/>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12">
                    <div class="form-group">
                        <label class="col-xs-1 no-padding"> 作成日付</label>
                        <div class="col-xs-3">
                                <input class="form-control" id="consumerCodeStart" name="consumerCodeStart" type="date" value=""/>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12">
                    <div class="form-group">
                        <label class="col-xs-1 no-padding"> 帳票タイプ</label>

                        <div class="col-xs-3">
                            <div class="form-group">
                                <select name="" id="" class="form-control">
                                    <option value="警報器交換伝票印字例">警報器交換伝票印字例</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 border1 no-padding bottom-box">
                <p class="backend"> 出力指定</p>

                <div class="col-xs-12">
                    <div class="form-group">
			<div class="col-xs-6 no-padding">
                            <label class="col-xs-3 no-padding"> 改ページ指定</label>
			    <div class="col-xs-3">
                                <input type="radio" name="pageBreak" value="all" onclick="$.fn.radioButtonSelectionChanged('pageBreak', 'pageBreakId')"/><span> 営業所・販売店</span>
			    </div>
			    <div class="col-xs-3">
                                <input type="radio" name="pageBreak" value="pageBreak" onclick="$.fn.radioButtonSelectionChanged('pageBreak', 'pageBreakId')"/><span> 地区</span>
			    </div>
			    <div class="col-xs-3">
                                <input type="radio" name="pageBreak" value="pageBreak" onclick="$.fn.radioButtonSelectionChanged('pageBreak', 'pageBreakId')"/><span> 調査員</span>
			    </div>
			</div>
			<div class="col-xs-6 no-padding">
			    <div class="col-xs-3">
                                <input type="radio" name="pageBreak" value="pageBreak" onclick="$.fn.radioButtonSelectionChanged('pageBreak', 'pageBreakId')"/><span> 工事担当者</span>
			    </div>
			    <div class="col-xs-3">
                                <input type="radio" name="pageBreak" value="pageBreak" onclick="$.fn.radioButtonSelectionChanged('pageBreak', 'pageBreakId')"/><span> 配送担当者</span>
			    </div>
			    <div class="col-xs-3">
                                <input type="radio" name="pageBreak" value="pageBreak" onclick="$.fn.radioButtonSelectionChanged('pageBreak', 'pageBreakId')"/><span> 検針担当者</span>
			    </div>
			    <div class="col-xs-3">
                                <input type="radio" name="pageBreak" value="pageBreak" onclick="$.fn.radioButtonSelectionChanged('pageBreak', 'pageBreakId')"/><span> なし</span>
			    </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12">
                    <div class="form-group">
                        <label class="col-xs-1 no-padding"> 並び順</label>
                        <div class="col-xs-2">
                            <input type="radio" name="sortBy" value="pageBreak" onclick="$.fn.radioButtonSelectionChanged('sortBy', 'sortById')"/><span> 消費者コード順</span>
                        </div>
                        <div class="col-xs-2">
                            <input type="radio" name="sortBy" value="pageBreak" onclick="$.fn.radioButtonSelectionChanged('sortBy', 'sortById')"/><span> 検針順路順</span>
                        </div>
                        <div class="col-xs-2">
                            <input type="radio" name="sortBy" value="pageBreak" onclick="$.fn.radioButtonSelectionChanged('sortBy', 'sortById')"/><span> 交換期限順</span>
                        </div>
                    </div>
                </div>
            </div>


            <?php
            include "footer.php"
            ?>

        </form>
    </div>
</div>
</div>
</div>

</body>

</html>
