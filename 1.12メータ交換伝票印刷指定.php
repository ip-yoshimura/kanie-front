<?php include 'header.php'; ?>

<?php include 'sidebar.php'; ?>


<div class="col-xs-8 col-md-10 col-xs-12 no-padding">

    <div class="col-md-12 col-xs-12 no-padding body-background">

        <div class="head-p">
            <p> メータ交換伝票印刷指定

            </p>
        </div>

        <form id="meter" action="/gas/meter-reading" method="POST">
            <div class="col-xs-12 border1 no-padding">
                <p class="backend">
                    作成範囲指定</p>
                <div class="col-xs-12 no-padding">
                    <div class="col-xs-1">
                        <p class="p-size-1">営業所コード

                        </p>
                    </div>
                    <div class="col-xs-1 ">
                        <input type="radio" name="officeCodeSelection" value="all" checked
                               onclick="$.fn.radioButtonSelectionChanged('officeCodeSelection', 'officeCodeSelectionForm')">
                        <span>全て</span>
                    </div>
                    <div class="col-xs-1 no-padding">
                        <input type="radio" name="officeCodeSelection" value="custom"
                               onclick="$.fn.radioButtonSelectionChanged('officeCodeSelection', 'officeCodeSelectionForm')"><span>選択</span>
                    </div>

                    <div id="officeCodeSelectionForm">
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-1 col-xs-offset-1">
                                <div class="form-group">
                                    <input id="officeCodeStartId" name="officeCodeStartId" placeholder="000"
                                           class="form-control"
                                           type="text" value="" disabled
                                           onchange="$.fn.onInputValueChange('officeCodeStartId', 'officeCodeStartName')"/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">~</div>
                            <div class="col-xs-1">
                                <div class="form-group no-padding">
                                    <input id="officeCodeEndId" name="officeCodeEndId" placeholder="999"
                                           class="form-control"
                                           type="text" value="" disabled
                                           onchange="$.fn.onInputValueChange('officeCodeEndId', 'officeCodeEndName')"/>
                                </div>
                            </div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input id="officeCodeStartName" name="officeCodeStartName" class="form-control"
                                           type="text" value="" disabled/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">~</div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input id="officeCodeEndName" name="officeCodeEndName" class="form-control"
                                           type="text" value="" disabled/>
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
                            <input type="radio" name="trustClassificationSelection" value="all" checked
                                   onclick="$.fn.radioButtonSelectionChanged('trustClassificationSelection', 'trustClassificationForm')"><span>全て</span>
                        </div>
                        <div class="col-xs-1">
                            <input type="radio" name="trustClassificationSelection" value="directSales"
                                   onclick="$.fn.radioButtonSelectionChanged('trustClassificationSelection', 'trustClassificationForm')"><span>直売</span>
                        </div>
                        <div class="col-xs-2">
                            <input type="radio" name="trustClassificationSelection" value="salesOutlet"
                                   onclick="$.fn.radioButtonSelectionChanged('trustClassificationSelection', 'trustClassificationForm')"><span>販売店</span>
                        </div>
                    </div>
                    <div id="trustClassificationForm">
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-1 col-xs-offset-1">
                                <div class="form-group">
                                    <input id="trustStartId" name="trustStartId" placeholder="000" class="form-control"
                                           type="text" value="" disabled
                                           onchange="$.fn.onInputValueChange('trustStartId', 'trustStartName')"/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">~</div>
                            <div class="col-xs-1">
                                <div class="form-group">
                                    <input id="trustEndId" name="trustEndId" placeholder="999" class="form-control"
                                           type="text" value="" disabled
                                           onchange="$.fn.onInputValueChange('trustEndId', 'trustEndName')"/>
                                </div>
                            </div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input id="trustStartName" name="trustStartName" class="form-control" type="text"
                                           value="" disabled/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">~</div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input id="trustEndName" name="trustEndName" class="form-control" type="text"
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
                        <div class="col-xs-1 no-padding">
                            <input type="radio" name="trustClassificationSelection1" value="all" checked
                                   onclick="$.fn.radioButtonSelectionChanged('trustClassificationSelection1', 'trustClassificationSelection1Form')">
                            <span>全て</span>
                        </div>
                        <div class="col-xs-1">
                            <input type="radio" name="trustClassificationSelection1" value="directSales"
                                   onclick="$.fn.radioButtonSelectionChanged('trustClassificationSelection1', 'trustClassificationSelection1Form')">
                            <span>地区</span>
                        </div>
                        <div class="col-xs-1 no-padding">
                            <input type="radio" name="trustClassificationSelection1" value="salesOutlet"
                                   onclick="$.fn.radioButtonSelectionChanged('trustClassificationSelection1', 'trustClassificationSelection1Form')">
                            <span>工事担当者</span>
                        </div>
                        <div class="col-xs-1 no-padding">
                            <input type="radio" name="trustClassificationSelection1" value="salesOutlet"
                                   onclick="$.fn.radioButtonSelectionChanged('trustClassificationSelection1', 'trustClassificationSelection1Form')">
                            <span>検針担当者</span>
                        </div>
                    </div>
                    <div id="trustClassificationSelection1Form">
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-1 col-xs-offset-1">
                                <div class="form-group">
                                    <input id="outputStartId" name="outputStartId" placeholder="000"
                                           class="form-control"
                                           type="text" value="" disabled
                                           onchange="$.fn.onInputValueChange('outputStartId', 'outputStartName')"/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">~</div>
                            <div class="col-xs-1">
                                <div class="form-group">
                                    <input id="outputEndId" name="outputEndId" placeholder="999" class="form-control"
                                           type="text" value="" disabled
                                           onchange="$.fn.onInputValueChange('outputEndId', 'outputEndName')"/>
                                </div>
                            </div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input id="outputStartName" name="outputStartName" class="form-control" type="text"
                                           value="" disabled/>
                                </div>

                            </div>
                            <div class="col-xs-1 no-padding ratio">~</div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input id="outputEndName" name="outputEndName" class="form-control" type="text"
                                           value="" disabled/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12">
                    <div class="col-xs-1 no-padding">
                        <p>検針順路</p>
                    </div>
                    <div id="consumerCodeForm">
                        <div class="col-xs-2">
                            <div class="form-group">
                                <input name="meterReadingRouteStartId" id="meterReadingRouteStartId" placeholder="0"
                                       class="form-control"
                                       type="number" value="0"
                                       onchange="$.fn.onInputValueChange('meterReadingRouteStartId', 'meterReadingRouteStartName')"/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">~</div>
                        <div class="col-xs-2">
                            <div class="form-group">
                                <input id="meterReadingRouteStartName" name="meterReadingRouteStartName" placeholder="z"
                                       class="form-control"
                                       type="number" value="0"/>
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
                                <input id="consumerCodeStartId" name="consumerCodeStartId" placeholder="0"
                                       class="form-control"
                                       type="number" value=""
                                       onchange="$.fn.onInputValueChange('consumerCodeStartId', 'consumerCodeStartName')"/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">~</div>
                        <div class="col-xs-2">
                            <div class="form-group">
                                <input id="consumeCodeEndId" name="consumeCodeEndId" placeholder="0"
                                       class="form-control"
                                       type="number" value=""
                                       onchange="$.fn.onInputValueChange('consumeCodeEndId', 'consumerCodeEndName')"/>
                            </div>
                        </div>

                        <div class="col-xs-3">
                            <div class="form-group">
                                <input id="consumerCodeStartName" name="consumerCodeStartName" class="form-control" type="text"
                                       value=""/>
                            </div>

                        </div>
                        <div class="col-xs-1 no-padding ratio">~</div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input id="consumerCodeEndName" name="consumerCodeEndName" class="form-control" type="text"
                                       value=""/>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="col-xs-1 no-padding">
                        <p>閉栓消費者</p>
                    </div>

                    <div class="col-xs-1 no-padding">
                        <input type="radio" name="closingSelection" id="closingSelection" value="all" onclick="$.fn.radioButtonSelectionChanged('closingSelection', 'closingSelectionId')"> <span>含む</span>
                    </div>
                    <div class="col-xs-1 no-padding">
                        <input type="radio" name="closingSelection" id="closingSelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('closingSelection', 'closingSelectionId')"> <span>含まない</span>
                    </div>


                </div>

                <div class="col-xs-12">
                    <div class="col-xs-1 no-padding">
                        <p>検定有効期限</p>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-2">
                            <input type="date" class="form-control"/>
                        </div>
                        <div class="col-xs-2">
                            <input type="date" class="form-control"/>
                        </div>

                    </div>
                </div>

                <div class="col-xs-12">
                    <div class="col-xs-1 no-padding">
                        <p>伝票作成日時</p>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-2">
                            <input type="date" class="form-control"/>
                        </div>

                    </div>
                </div>

                <div class="col-xs-12">
                    <div class="col-xs-1 no-padding">
                        <p>帳票タイプ</p>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-3">
                            <select name="" class="selclass form-control">
                                <option value="ガスメーター取替のお">"ガスメーター取替のお</option>
                                <option value="メータ交換">メータ交換</option>
                                <option value="帳票タイプ1">帳票タイプ1</option>
                            </select>
                        </div>

                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="col-xs-1 no-padding">
                        <p>お知らせ文</p>
                    </div>
                    <div id="consumerCodeForm">
                        <div class="col-xs-1">
                            <div class="form-group">
                                <input id="announcementStartId" name="announcementStartId" placeholder="0"
                                       class="form-control"
                                       type="text" value=""
                                       onchange="$.fn.onInputValueChange('announcementStartId', 'announcementStartName')"/>
                            </div>
                        </div>

                        <div class="col-xs-6">
                            <div class="form-group">
                                <input id="announcementStartName" name="announcementStartName" placeholder="z"
                                       class="form-control"
                                       type="text" value=""/>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-xs-12 border1 no-padding bottom-box">
                <p class="backend">
                    出力指定</p>
                <div class="col-xs-12">

                    <div class="form-group">
                        <label class="col-xs-1 no-padding control-label">改ページ指定</label>
                        <div class="col-xs-1">
                            <input type="radio" name="outputSpecificationSortBySelection" value="directSales">
                            <span>なし</span>
                        </div>

                        <div class="col-xs-2">
                            <input type="radio" name="outputSpecificationSortBySelection" value="salesOutlet">
                            <span>営業所・販売店</span>
                        </div>

                        <div class="col-xs-2">
                            <input type="radio" name="outputSpecificationSortBySelection" value="salesOutlet">
                            <span>地区</span>
                        </div>

                        <div class="col-xs-2">
                            <input type="radio" name="outputSpecificationSortBySelection" value="salesOutlet">
                            <span>工事担当者</span>
                        </div>

                        <div class="col-xs-2">
                            <input type="radio" name="outputSpecificationSortBySelection" value="salesOutlet">
                            <span>配送担当者</span>
                        </div>

                        <div class="col-xs-2">
                            <input type="radio" name="outputSpecificationSortBySelection" value="salesOutlet">
                            <span>検針担当者</span>
                        </div>

                    </div>


                </div>

                <div class="col-xs-12">

                    <div class="form-group">
                        <label class="col-xs-1 no-padding control-label">並び順</label>


                        <div class="col-xs-2">
                            <input type="radio" name="outputSpecificationSortBySelection" value="salesOutlet">
                            <span>消費者コード順</span>
                        </div>

                        <div class="col-xs-2">
                            <input type="radio" name="outputSpecificationSortBySelection" value="salesOutlet">
                            <span>検針順路順</span>
                        </div>

                        <div class="col-xs-2">
                            <input type="radio" name="outputSpecificationSortBySelection" value="salesOutlet">
                            <span>検定有効期限順</span>
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