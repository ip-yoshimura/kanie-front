<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<div class="col-xs-8 col-md-10 col-xs-12 no-padding">
    <div class="col-md-12 col-xs-12 no-padding body-background">
        <div class="head-p">
            <p>延滞者（未納者）一覧表印刷指定</p>
        </div>
        <form action="/gas/meter-reading" id="meter" method="POST">
            <div class="col-xs-12 border1 no-padding">
                <p class="back-end">消費者範囲指定</p>
                <div class="col-xs-12">

                    <div class="form-group">
                        <label class="col-xs-1 no-padding">営業所コード</label>

                        <div class="col-xs-1">
                        <input type="radio" value="all" name="officeCodeSelection" id="officeCodeSelection" checked onclick="$.fn.radioButtonSelectionChanged('officeCodeSelection', 'officeCodeSelectionId')"> <span>全て</span>
                        </div>
                        <div class="col-xs-1">
                        <input type="radio" value="custom" name="officeCodeSelection" id="officeCodeSelection" onclick="$.fn.radioButtonSelectionChanged('officeCodeSelection', 'officeCodeSelectionId')"> <span>選択</span>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12">
                    <div id="officeCodeSelectionId">
                        <div class="col-xs-1 col-xs-offset-1">
                            <div class="form-group">
                                <input class="form-control" id="officeCodeStartId" name="officeCodeStartId"
                                       placeholder="000" type="text" value="" disabled onchange="$.fn.onInputValueChange('officeCodeStartId', 'officeCodeStartName')"/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">～</div>

                        <div class="col-xs-1">
                            <div class="form-group">
                                <input class="form-control" id="companyIdEndId" name="companyIdEndId" placeholder="999"
                                       type="text" value="" disabled onchange="$.fn.onInputValueChange('companyIdEndId', 'companyIdEndName')"/>
                            </div>
                        </div>

                        <div class="col-xs-3">
                            <div class="form-group">
                                <input class="form-control" id="officeCodeStartName" name="officeCodeStartName"
                                       placeholder="Company 1" type="text" value="" disabled/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">～</div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input class="form-control" id="companyIdEndName" name="companyIdEndName"
                                       placeholder="Company 2" type="text" value="" disabled/>
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
                            <input type="radio" value="all" name="trustClassificationSelection" id="trustClassificationSelection" checked onclick="$.fn.radioButtonSelectionChanged('trustClassificationSelection', 'trustClassificationId')"> <span>全て</span>
                        </div>
                        <div class="col-xs-1">
                            <input type="radio" value="directSales" name="trustClassificationSelection" id="trustClassificationSelection"  onclick="$.fn.radioButtonSelectionChanged('trustClassificationSelection', 'trustClassificationId')"> <span>直売</span>
                        </div>
                        <div class="col-xs-1 no-padding">
                            <input type="radio" value="salesOutlet" name="trustClassificationSelection" id="trustClassificationSelection"  onclick="$.fn.radioButtonSelectionChanged('trustClassificationSelection', 'trustClassificationId')"> <span>販売店</span>
                        </div>
                    </div>
                    <div id="trustClassificationId">
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-1 col-xs-offset-1">
                                <div class="form-group">
                                    <input id="trustStartId" name="trustStartId" placeholder="000" class="form-control"
                                        
                                           type="text" value="" disabled onchange="$.fn.onInputValueChange('trustStartId', 'trustStartName')"/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">～</div>
                            <div class="col-xs-1">
                                <div class="form-group">
                                    <input id="trustEndId" name="trustEndId" placeholder="999" class="form-control"
                                           type="text" value=""disabled onchange="$.fn.onInputValueChange('trustEndId', 'trustEndName')"/>
                                </div>
                            </div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input id="trustStartName" name="trustStartName" class="form-control" type="text"
                                           value="" disabled/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">～</div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input id="trustEndName" name="trustEndName" class="form-control" type="text"
                                           value="" disabled/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 ">
                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-1 no-padding">
                            <p>出力区分</p>
                        </div>
                        <div class="col-xs-1">
                            <input type="radio" name="outputSelection" id="outputSelection" value="all" checked onclick="$.fn.radioButtonSelectionChanged('outputSelection', 'outputSelectionId')"> <span>全て</span>
                        </div>
                        <div class="col-xs-1">
                            <input type="radio" name="outputSelection" id="outputSelection" value="directSales" onclick="$.fn.radioButtonSelectionChanged('outputSelection', 'outputSelectionId')"> <span>地区</span>
                        </div>
                        <div class="col-xs-1 no-padding">
                            <input type="radio" name="outputSelection" id="outputSelection" value="salesOutlet" onclick="$.fn.radioButtonSelectionChanged('outputSelection', 'outputSelectionId')"> <span>集金担当者</span>
                        </div>
                        <div class="col-xs-2">
                            <input type="radio" name="outputSelection" id="outputSelection" value="salesOutlet" onclick="$.fn.radioButtonSelectionChanged('outputSelection', 'outputSelectionId')"> <span>営業担当者</span>
                        </div>
                   </div>
                   <div id="outputSelectionId">
                   <div class="col-xs-12 no-padding">
                        <div class="col-xs-1 col-xs-offset-1">
                            <div class="form-group">
                                <input id="outputStartId" name="outputStartId" placeholder="000" class="form-control"
                                       type="text" value="" disabled onchange="$.fn.onInputValueChange('outputStartId', 'outputStartName')"/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">～</div>
                        <div class="col-xs-1">
                            <div class="form-group">
                                <input id="outputEndId" name="outputEndId" placeholder="999" class="form-control"
                                       type="text" value="" disabled onchange="$.fn.onInputValueChange('outputEndId', 'outputEndName')"/>
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input id="outputStartName" name="outputStartName" class="form-control" type="text"
                                       value="" disabled/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">～</div>
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
                    <div class="col-xs-1 no-padding border-margin-exp">
                        <p>消費者コード </p>
                    </div>
                    <div class="col-xs-2">
                        <div class="form-group">
                            <input class="form-control" id="consumerStartId" name="consumerStartId"
                                   type="text" value=""  onchange="$.fn.onInputValueChange('consumerStartId', 'consumerStartName')"/>
                        </div>
                    </div>
                    <div class="col-xs-1 no-padding ratio">～</div>
                    <div class="col-xs-2 ">
                        <div class="form-group">
                            <input class="form-control" id="consumerEndId" name="consumerEndId"
                                   type="text" value=""  onchange="$.fn.onInputValueChange('consumerEndId', 'consumerEndName')"/>
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <div class="form-group">
                            <input class="form-control" id="consumerStartName" name="consumerStartName"
                                    type="text" value="" />
                        </div>
                    </div>
                    <div class="col-xs-1 no-padding ratio">～</div>
                    <div class="col-xs-3">
                        <div class="form-group">
                            <input class="form-control" id="consumerEndName" name="consumerEndName"
                                    type="text" value="" />
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 border1 no-padding">
                <p class="back-end">作成範囲指定</p>

                <div class="col-xs-12 ">
                    <div class="col-xs-1 no-padding border-margin-exp">
                        <p>滞留月数</p>
                    </div>
                    <div class="col-xs-1">
                        <div class="form-group">
                            <input id="trustStartId" name="trustStartId" placeholder="" class="form-control"
                                   type="text" value=""/>
                        </div>
                    </div>
                    <div class="col-xs-1 border-margin-exp">
                        <span>ヶ月以上</span>
                    </div>
                </div>

                <div class="col-xs-12">
                    <div class="col-xs-1 no-padding border-margin-exp">
                        <p>売掛金額</p>
                    </div>
                    <div class="col-xs-1">
                        <div class="form-group">
                            <input id="trustStartId" name="trustStartId" placeholder="" class="form-control"
                                   type="text" value=""/>
                        </div>
                    </div>
                    <div class="col-xs-1 border-margin-exp">
                        <span>円以上</span>
                    </div>
                </div>

                <div class="col-xs-12">
                    <div class="col-xs-1 no-padding border-margin-exp">
                        <p>集金区分</p>
                    </div>
                    <div class="col-xs-1">
                        <input type="radio" name="collection" id="collection" value="all" onclick="$.fn.radioButtonSelectionChanged('collection', 'collectionId')"> <span>全て</span>
                    </div>
                    <div class="col-xs-1 no-padding">
                        <input type="radio" name="collection" id="collection" value="directSales" onclick="$.fn.radioButtonSelectionChanged('collection', 'collectionId')"> <span>振替のみ</span>
                    </div>
                    <div class="col-xs-1 no-padding">
                        <input type="radio" name="collection" id="collection" value="salesOutlet" onclick="$.fn.radioButtonSelectionChanged('collection', 'collectionId')"> <span>振替以外</span>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="col-xs-1">
                        <p><span>振替日指定</span></p>
                    </div>
                    <div class="col-xs-1">
                        <input type="radio" name="transfer" id="transfer" value="all" onclick="$.fn.radioButtonSelectionChanged('transfer', 'transferId')">  <span>する</span>
                    </div>
                    <div class="col-xs-1 no-padding">
                        <input type="radio" name="transfer" id="transfer" value="directSales" onclick="$.fn.radioButtonSelectionChanged('transfer', 'transferId')"> <span>しない</span>
                    </div>
                    <div class="col-xs-1 no-padding">
                        <div class="form-group">
                            <input id="trustStartId" name="trustStartId" placeholder="" class="form-control"
                                   type="text" value=""/>
                        </div>
                    </div>
                    <div class="col-xs-1 border-margin-exp">
                        <p>日</p>
                    </div>
                </div>

                <div class="col-xs-12">
                    <div class="col-xs-1 no-padding">
                        <p>消費者区分</p>
                    </div>
                    <div class="col-xs-1 ">
                        <input type="radio" name="consumerSelection" id="consumerSelection" value="all"> <span>全て</span>
                    </div>
                    <div class="col-xs-1 no-padding">
                        <input type="radio" name="consumerSelection" id="consumerSelection" value="directSales"> <span>選択</span>
                    </div>

                    <div id="">
                    <div class="col-xs-1 no-padding">
                        <div class="form-group">
                            <input id="classicStart" name="classicStart" placeholder="" class="form-control"
                                   type="number" value=""/>
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <div class="form-group">
                            <input id="classicStartName" name="classicStartName" placeholder="" class="form-control"
                                   type="number" value=""/>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="col-xs-12">
                    <div class="col-xs-1 no-padding">
                        <p>締切日指定</p>
                    </div>
                    <div class="col-xs-1">
                        <input type="radio" name="deadline" id="deadline" value="all" onclick="$.fn.radioButtonSelectionChanged('deadline', 'deadlineId')"> <span>する</span>

                    </div>
                    <div class="col-xs-1 no-padding">
                        <input type="radio" name="deadline" id="deadline" value="directSales" onclick="$.fn.radioButtonSelectionChanged('deadline', 'deadlineId')"> <span>しない</span>

                    </div>
                    <div class="col-xs-1 no-padding">
                        <div class="form-group">
                            <input id="trustStartId" name="trustStartId" placeholder="" class="form-control"
                                   type="number" value=""/>
                        </div>
                    </div>
                    <div class="col-xs-1">
                        <p>日</p>
                    </div>
                </div>
            </div>


            <div class="col-xs-12 border1 no-padding bottom-box">
                <p class="back-end">出力指定</p>

                <div class="col-xs-12">
                    <div class="col-xs-1 no-padding">
                        <p>改ページ指定</p>
                    </div>
                    <div class="col-xs-2">
                        <input type="radio" name="pagebreak" id="pagebreak" value="all" onclick="$.fn.radioButtonSelectionChanged('pagebreak', 'pagebreakId')"> <span>営業所・販売店</span>
                    </div>
                    <div class="col-xs-2 no-padding">
                        <input type="radio" name="pagebreak" id="pagebreak" value="directSales" onclick="$.fn.radioButtonSelectionChanged('pagebreak', 'pagebreakId')"> <span>集金担当者</span>
                    </div>
                    <div class="col-xs-2 no-padding">
                        <input type="radio" name="pagebreak" id="pagebreak" value="salesOutlet" onclick="$.fn.radioButtonSelectionChanged('pagebreak', 'pagebreakId')"> <span>営業担当者</span>
                    </div>
                </div>

                <div class="col-xs-12">
                    <div class="col-xs-1 no-padding">
                        <p>並び順</p>
                    </div>
                    <div class="col-xs-2">
                        <input type="radio" name="sortby" id="sortby" value="all" onclick="$.fn.radioButtonSelectionChanged('sortby', 'sortbyId')"> <span>消費者コード順</span>
                    </div>
                    <div class="col-xs-2 no-padding">
                        <input type="radio" name="sortby" id="sortby" value="directSales" onclick="$.fn.radioButtonSelectionChanged('sortby', 'sortbyId')"> <span>検針順路順</span>
                    </div>
                    <div class="col-xs-2 no-padding">
                        <input type="radio" name="sortby" id="sortby" value="salesOutlet" onclick="$.fn.radioButtonSelectionChanged('sortby', 'sortbyId')"> <span>検索名順</span>
                    </div>
                    <div class="col-xs-2 no-padding">
                        <input type="radio" name="sortby" id="sortby" value="directSales" onclick="$.fn.radioButtonSelectionChanged('sortby', 'sortbyId')"> <span>売掛金額降順</span>
                    </div>
                    <div class="col-xs-2 no-padding">
                        <input type="radio" name="sortby" id="sortby" value="salesOutlet" onclick="$.fn.radioButtonSelectionChanged('sortby', 'sortbyId')"> <span>滞留月数降順</span>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="col-xs-1 no-padding">
                        <p>出力先</p>
                    </div>
                    <div class="col-xs-2">
                        <input type="radio" name="output" id="output" value="all" onclick="$.fn.radioButtonSelectionChanged('output', 'outputId')"> <span>プリンタ(印刷)</span>
                    </div>
                    <div class="col-xs-3 no-padding">
                        <input type="radio" name="output" id="output" value="directSales" onclick="$.fn.radioButtonSelectionChanged('output', 'outputId')"> <span>画面(印刷イメージ)</span>
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
