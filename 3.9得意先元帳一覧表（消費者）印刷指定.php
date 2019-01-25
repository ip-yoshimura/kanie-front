<?php include 'header.php'; ?>

<?php include 'sidebar.php';?>


<div class="col-xs-8 col-md-10 col-xs-12 no-padding">

        <div class="col-md-12 col-xs-12 no-padding body-background">

            <div class="head-p">
                <p> 得意先元帳一覧表（消費者）印刷指定

                </p>
            </div>

            <form id="meter" action="/gas/meter-reading" method="POST">
                <div class="col-xs-12 border1 no-padding">
                    <p class="backend">消費者範囲指定</p>
                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-1">
                            <p class="p-size-1">営業所コード

                            </p>
                        </div>
                        <div class="col-xs-1 ">
                            <input type="radio" name="officeCodeSelection" value="all" checked onclick="$.fn.radioButtonSelectionChanged('officeCodeSelection', 'officeCodeSelectionForm')"> <span>全て</span>
                        </div>
                        <div class="col-xs-1 no-padding">
                            <input type="radio" name="officeCodeSelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('officeCodeSelection', 'officeCodeSelectionForm')"><span>選択</span>
                        </div>

                        <div id="officeCodeSelectionForm">
                            <div class="col-xs-12 no-padding">
                                <div class="col-xs-1 col-xs-offset-1">
                                    <div class="form-group">
                                        <input id="officeCodeStartId" name="officeCodeStartId" placeholder="000" class="form-control"
                                            type="text" value="" disabled onchange="$.fn.onInputValueChange('officeCodeStartId', 'officeCodeStartName')" />
                                    </div>
                                </div>
                                <div class="col-xs-1 no-padding ratio">~</div>
                                <div class="col-xs-1">
                                    <div class="form-group no-padding">
                                        <input id="officeCodeEndId" name="officeCodeEndId" placeholder="999" class="form-control"
                                            type="text" value="" disabled onchange="$.fn.onInputValueChange('officeCodeEndId', 'officeCodeEndName')" />
                                    </div>
                                </div>
                                <div class="col-xs-3">
                                    <div class="form-group">
                                        <input id="officeCodeStartName" name="officeCodeStartName" class="form-control"
                                            type="text" value="" disabled />
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


                    </div>
                    <div class="col-xs-12">
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-1 no-padding">
                                <p>受託区分</p>
                            </div>

                            <div class="col-xs-1 no-padding">
                                <input type="radio" name="trustClassificationSelection" value="all" checked onclick="$.fn.radioButtonSelectionChanged('trustClassificationSelection', 'trustClassificationForm')"><span>全て</span>
                            </div>
                            <div class="col-xs-1">
                                <input type="radio" name="trustClassificationSelection" value="directSales" onclick="$.fn.radioButtonSelectionChanged('trustClassificationSelection', 'trustClassificationForm')"><span>直売</span>
                            </div>
                            <div class="col-xs-2">
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
                                <p>受託区分</p>
                            </div>
                            <div class="col-xs-1 no-padding">
                                <input type="radio" name="trustClassificationSelection1" value="all" checked onclick="$.fn.radioButtonSelectionChanged('trustClassificationSelection1', 'trustClassificationSelection1Form')"> <span>全て</span>
                            </div>
                            <div class="col-xs-1">
                                <input type="radio" name="trustClassificationSelection1" value="directSales" onclick="$.fn.radioButtonSelectionChanged('trustClassificationSelection1', 'trustClassificationSelection1Form')"> <span>地区</span>
                            </div>
                            <div class="col-xs-1 no-padding">
                                <input type="radio" name="trustClassificationSelection1" value="salesOutlet" onclick="$.fn.radioButtonSelectionChanged('trustClassificationSelection1', 'trustClassificationSelection1Form')"> <span>営業担当者</span>
                            </div>
                        </div>
                        <div id="trustClassificationSelection1Form">
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
                                        type="text" value="" onchange="$.fn.onInputValueChange('consumeCodeEndId', 'consumerCodeEndName')" />
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
                <div class="col-xs-12 border1 no-padding">
                    <p class="backend">作成範囲指定</p>
                    <div class="col-xs-12">

                        <div class="form-group">
                            <label class="col-xs-1 no-padding control-label">作成指定

                            </label>
                            <div class="col-xs-3">
                                <input type="date" class="form-control" />
                            </div>
                            <div class="col-xs-1 no-padding ratio">~</div>
                            <div class="col-xs-3">
                                <input type="date" class="form-control" />
                            </div>

                        </div>

                        <div class="form-group">
                            <label class="control-label col-xs-1 no-padding">日付</label>
                            <div class="col-xs-2">
                                <select name="" class="selclass form-control">
                                    <option value="専用用紙">専用用紙</option>
                                    <option value="罫線なし">罫線なし</option>
                                    <option value="罫線付">罫線付</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 border1 no-padding bottom-box">
                    <p class="backend">出力指定</p>
                    <div class="col-xs-12">

                        <div class="form-group">
                            <label class="col-xs-1 no-padding control-label">並び順</label>
                            <div class="col-xs-2">
                                <input type="radio" name="outputSpecificationSortBySelection" value="directSales">
                                <span>消費者コード順</span>
                            </div>
                            <div class="col-xs-2">
                                <input type="radio" name="outputSpecificationSortBySelection" value="salesOutlet">
                                <span>検索名順</span>


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