<?php
include "header.php"
?>
<?php
include "sidebar.php"
?>
<div class="col-xs-10 col-md-10 no-padding">

    <div class="col-md-12 col-xs-12 body-background no-padding">

        <div class="head-p">
            <p>ハガキ請求書印刷設定</p>
        </div>
        <form id="meter" action="/gas/meter-reading" method="POST">
            <div class="col-xs-12 border1 no-padding">
                <p class="backend">消費者範囲指定</p>
                <div class="col-xs-12">
                    <div class="col-xs-1 no-padding">
                        <p>営業所コード</p>
                    </div>
                    <div class="col-xs-1   ">
                        <input type="radio" name="officeCodeSelection" id="officeCodeSelection" value="all" checked
                               onclick="$.fn.radioButtonSelectionChanged('officeCodeSelection', 'officeCodeSelectionId')">
                        <span>全て</span>
                    </div>
                    <div class="col-xs-1   ">
                        <input type="radio" name="officeCodeSelection" id="officeCodeSelection" value="custom"
                               onclick="$.fn.radioButtonSelectionChanged('officeCodeSelection', 'officeCodeSelectionId')"><span>選択</span>
                    </div>
                    <div id="officeCodeSelectionId">
                        <div class="col-xs-1   ">
                            <div class="form-group">
                                <input id="officeCodeStartId" name="officeCodeStartId" placeholder="000"
                                       class="form-control" type="text" value="" disabled
                                       onchange="$.fn.onInputValueChange('officeCodeStartId', 'officeCodeStartName')"/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">~</div>
                        <div class="col-xs-1   ">
                            <div class="form-group">
                                <input id="officeCodeEndId" name="officeCodeEndId" placeholder="999"
                                       class="form-control" type="text" value="" disabled
                                       onchange="$.fn.onInputValueChange('officeCodeEndId', 'officeCodeEndName')"/>
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input id="officeCodeStartName" name="officeCodeStartName" placeholder="Company 1"
                                       class="form-control" type="text" value="" disabled/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">~</div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input id="officeCodeEndName" name="officeCodeEndName" placeholder="Company 2"
                                       class="form-control" type="text" value="" disabled/>
                            </div>
                        </div>
                    </div>


                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-1 no-padding">
                                <p>受託区分</p>
                            </div>
                            <div class="col-xs-1">
                                <input type="radio" name="trust1Selection" id="trust1Selection" value="all" checked
                                       onclick="$.fn.radioButtonSelectionChanged('trust1Selection', 'trust1SelectionId')"><span> 全て</span>
                            </div>
                            <div class="col-xs-1">
                                <input type="radio" name="trust1Selection" id="trust1Selection" value="custom"
                                       onclick="$.fn.radioButtonSelectionChanged('trust1Selection', 'trust1SelectionId')">
                                <span>直売</span>
                            </div>
                            <div class="col-xs-2">
                                <input type="radio" name="trust1Selection" id="trust1Selection" value="custom"
                                       onclick="$.fn.radioButtonSelectionChanged('trust1Selection', 'trust1SelectionId')">
                                <span>販売店</span>
                            </div>
                        </div>
                        <div id="trust1SelectionId">
                            <div class="col-xs-12 no-padding">
                                <div class="col-xs-1 col-xs-offset-1">
                                    <div class="form-group">
                                        <input id="trust1StartId" name="trust1StartId" placeholder="000"
                                               class="form-control" type="text" value="" disabled
                                               onchange="$.fn.onInputValueChange('trust1StartId', 'trust1StartName')"/>
                                    </div>
                                </div>
                                <div class="col-xs-1 no-padding ratio">~</div>
                                <div class="col-xs-1">
                                    <div class="form-group">
                                        <input id="trust1EndId" name="trust1EndId" placeholder="999"
                                               class="form-control" type="text" value="" disabled
                                               onchange="$.fn.onInputValueChange('trust1EndId', 'trust1EndName')"/>
                                    </div>
                                </div>
                                <div class="col-xs-3">
                                    <div class="form-group">
                                        <input id="trust1StartName" name="trust1StartName" class="form-control"
                                               type="text" value="" disabled/>
                                    </div>
                                </div>
                                <div class="col-xs-1 no-padding ratio">~</div>
                                <div class="col-xs-3">
                                    <div class="form-group">
                                        <input id="trust1EndName" name="trust1EndName" class="form-control" type="text"
                                               value="" disabled/>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-1 no-padding">
                                <p>受託区分</p>
                            </div>
                            <div class="col-xs-1">
                                <input type="radio" name="trust2Selection" id="trust2Selection" value="all" checked
                                       onclick="$.fn.radioButtonSelectionChanged('trust2Selection', 'trust2SelectionId')">
                                <span>全て</span>
                            </div>
                            <div class="col-xs-1">
                                <input type="radio" name="trust2Selection" id="trust2Selection" value="custom"
                                       onclick="$.fn.radioButtonSelectionChanged('trust2Selection', 'trust2SelectionId')">
                                <span>地区</span>
                            </div>
                            <div class="col-xs-2">
                                <input type="radio" name="trust2Selection" id="trust2Selection" value="custom"
                                       onclick="$.fn.radioButtonSelectionChanged('trust2Selection', 'trust2SelectionId')">
                                <span>検針担当者</span>
                            </div>
                            <div class="col-xs-2">
                                <input type="radio" name="trust2Selection" id="trust2Selection" value="custom"
                                       onclick="$.fn.radioButtonSelectionChanged('trust2Selection', 'trust2SelectionId')">
                                <span>配送委託先</span>
                            </div>
                        </div>
                        <div id="trust2SelectionId">
                            <div class="col-xs-12 no-padding">
                                <div class="col-xs-1 col-xs-offset-1">
                                    <div class="form-group">
                                        <input id="trust2StartId" name="trust2StartId" placeholder="000"
                                               class="form-control" type="text" value="" disabled
                                               onchange="$.fn.onInputValueChange('trust2StartId', 'trust2StartName')"/>
                                    </div>
                                </div>
                                <div class="col-xs-1 no-padding ratio">~</div>
                                <div class="col-xs-1">
                                    <div class="form-group">
                                        <input id="trust2EndId" name="trust2EndId" placeholder="999"
                                               class="form-control" type="text" value="" disabled
                                               onchange="$.fn.onInputValueChange('trust2EndId', 'trust2EndName')"/>
                                    </div>
                                </div>
                                <div class="col-xs-3">
                                    <div class="form-group">
                                        <input id="trust2StartName" name="trust2StartName" class="form-control"
                                               type="text" value="" disabled/>
                                    </div>
                                </div>
                                <div class="col-xs-1 no-padding ratio">~</div>
                                <div class="col-xs-3">
                                    <div class="form-group">
                                        <input id="trust2EndName" name="trust2EndName" class="form-control" type="text"
                                               value="" disabled/>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-1 no-padding">
                            <p>消費者コード</p>
                        </div>
                        <div class="col-xs-2">
                            <div class="form-group">
                                <input id="consumerCodeStart" name="consumerCodeStart" placeholder="0"
                                       class="form-control" type="text" value=""
                                       onchange="$.fn.onInputValueChange('consumerCodeStart', 'consumerCodeStartName')"/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">~</div>
                        <div class="col-xs-2">
                            <div class="form-group">
                                <input id="consumeCodeEnd" name="consumeCodeEnd" placeholder="z" class="form-control"
                                       type="text" value=""
                                       onchange="$.fn.onInputValueChange('consumeCodeEnd', 'consumerCodeEndName')"/>
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input id="consumerCodeStartName" name="consumerCodeStartName" class="form-control"
                                       type="text" value=""/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">~</div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input id="consumerCodeEndName" name="consumerCodeEndName" class="form-control"
                                       type="text" value=""/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xs-12 border1 no-padding">
                <p class="backend ">作成範囲指定</p>

                <div class="col-xs-12 ">

                    <div class="col-xs-1 no-padding ">
                        <p class="font-exp-size1 ">印刷区分の指定</p>
                    </div>
                    <div class="col-xs-1  ">
                        <input type="radio" name="printing" id="printing" value="all"
                               onclick="$.fn.radioButtonSelectionChanged('printing', 'printingId')"> <span>当月</span>
                    </div>
                    <div class="col-xs-1 no-padding">
                        <input type="radio" name="printing" id="printing" value="custom"
                               onclick="$.fn.radioButtonSelectionChanged('printing', 'printingId')"> <span>不能</span>
                    </div>

                </div>


                <div class="col-xs-12">
                    <label class="control-label col-xs-1 no-padding">作成日付</label>
                    <div class="col-xs-2">
                        <input type="date" class="form-control"/>
                    </div>
                </div>
                <div class="col-xs-12 border-margin">
                    <label class="control-label col-xs-1 no-padding">締切日</label>
                    <div class="col-xs-1">
                        <input type="number" class="form-control" placeholder="0">
                    </div>
                    <div class="col-xs-1 border-margin-exp">
                        <span>日</span>
                    </div>

                </div>


                <div class="col-xs-12 border-margin">
                    <div class="">
                        <div class="col-xs-1 no-padding font-exp-size1">
                            <p>集金区分の指定</p>
                        </div>
                        <div class="col-xs-1">
                            <input type="radio" name="collection" id="collection" value="all"
                                   onclick="$.fn.radioButtonSelectionChanged('collection', 'collectionId')">
                            <span>全て</span>
                        </div>
                        <div class="col-xs-1">
                            <input type="radio" name="collection" id="collection" value="custom"
                                   onclick="$.fn.radioButtonSelectionChanged('collection', 'collectionId')">
                            <span>現金</span>
                        </div>
                        <div class="col-xs-1">
                            <input type="radio" name="collection" id="collection" value="custom"
                                   onclick="$.fn.radioButtonSelectionChanged('collection', 'collectionId')">
                            <span>振替</span>
                        </div>

                        <div class="col-xs-1">
                            <input type="radio" name="collection" id="collection" value="custom"
                                   onclick="$.fn.radioButtonSelectionChanged('collection', 'collectionId')">
                            <span>振込</span>
                        </div>
                        <div class="col-xs-1 no-padding">
                            <input type="radio" name="collection" id="collection" value="custom"
                                   onclick="$.fn.radioButtonSelectionChanged('collection', 'collectionId')">
                            <span>コンビニ</span>
                        </div>
                        <div class="col-xs-1 no-padding">
                            <input type="radio" name="collection" id="collection" value="custom"
                                   onclick="$.fn.radioButtonSelectionChanged('collection', 'collectionId')">
                            <span>クレジット</span>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 border-margin">
                    <div class="no-padding ">
                        <div class="col-xs-1 no-padding font-exp-size1">
                            <p>発行済請求書印刷</p>
                        </div>
                        <div class="col-xs-1">
                            <input type="radio" name="invoices" id="invoices" value="all"
                                   onclick="$.fn.radioButtonSelectionChanged('invoices', 'invoicesId')"> <span>する</span>
                        </div>
                        <div class="col-xs-5">
                            <input type="radio" name="invoices" id="invoices" value="custom"
                                   onclick="$.fn.radioButtonSelectionChanged('invoices', 'invoicesId')">
                            <span>しない</span>
                        </div>
                        <div class="col-xs-2 no-padding">
                            <p>明細が検針区分のみ消費者</p>
                        </div>
                        <div class="col-xs-1">
                            <input type="radio" name="category" id="category" value="all"
                                   onclick="$.fn.radioButtonSelectionChanged('category', 'categoryId')"> <span>含む</span>
                        </div>
                        <div class="col-xs-2">
                            <input type="radio" name="category" id="category" value="custom"
                                   onclick="$.fn.radioButtonSelectionChanged('category', 'categoryId')"><span> 含まな</span>
                        </div>


                    </div>
                </div>


                <div class="col-xs-12 border-margin">
                    <div class="col-xs-1 no-padding font-exp-size2">
                        <p>お知らせ文（現金)</p>
                    </div>

                    <div class="col-xs-1">
                        <input type="text" class="form-control" placeholder="00" value="" name="notificationSelection"
                               id="notificationSelection"
                               onchange="$.fn.onInputValueChange('notificationSelection', 'notificationEnd')">
                    </div>
                    <div class="col-xs-9">
                        <input type="text" placeholder="" class="form-control" name="notificationEnd"
                               id="notificationEnd"/>
                    </div>
                </div>

                <div class="col-xs-12 border-margin">
                    <div class="col-xs-1 no-padding  ">
                        <p>（振替）</p>
                    </div>

                    <div class="col-xs-1">
                        <input type="text" class="form-control" placeholder="00" value="" name="transfer1Selection"
                               id="transfer1Selection"
                               onchange="$.fn.onInputValueChange('transfer1Selection', 'transfer1End')">
                    </div>
                    <div class="col-xs-9">
                        <input type="text" placeholder="" class="form-control" value="" name="transfer1End"
                               id="transfer1End"/>
                    </div>
                </div>


                <div class="col-xs-12 border-margin  ">
                    <div class="col-xs-1 no-padding font-exp-size">
                        <p>(クレジット)）</p>
                    </div>

                    <div class="col-xs-1">
                        <input type="text" class="form-control" placeholder="00" name="credit1Selection"
                               id="credit1Selection"
                               onchange="$.fn.onInputValueChange('credit1Selection', 'credit1End')">
                    </div>
                    <div class="col-xs-9">
                        <input type="text" placeholder="" class="form-control" name="credit1End" id="credit1End"/>
                    </div>
                </div>

                <div class="col-xs-12 border-margin  ">
                    <div class="col-xs-1 no-padding font-exp-size">
                        <p>支払期限日</p>
                    </div>

                    <div class="col-xs-1">
                        <input type="text" class="form-control" placeholder="00" name="payment1Selection"
                               id="payment1Selection"
                               onchange="$.fn.onInputValueChange('payment1Selection', 'payment1End')">
                    </div>
                    <div class="col-xs-9">
                        <input type="text" placeholder="" class="form-control" name="payment1End" id="payment1End"/>
                    </div>
                </div>

                <div class="col-xs-12 border-margin  ">
                    <div class="col-xs-1 no-padding font-exp-size">
                        <p>(クレジット)</p>
                    </div>

                    <div class="col-xs-1">
                        <input type="text" class="form-control" placeholder="00" name="credit2Selection"
                               id="credit2Selection"
                               onchange="$.fn.onInputValueChange('credit2Selection', 'credit2End')">
                    </div>
                    <div class="col-xs-9">
                        <input type="text" placeholder="" class="form-control" name="credit2End" id="credit2End"/>
                    </div>
                </div>
                <div class="col-xs-12 border-margin   ">
                    <div class="col-xs-1 no-padding font-exp-size">
                        <p>支払期限日</p>
                    </div>


                    <div class="col-xs-2">
                        <input type="date" class="form-control"/>
                    </div>
                </div>

                <div class="col-xs-12 border-margin border-margin-bottom  ">
                    <div class="col-xs-1 no-padding font-exp-size">
                        <p>帳票タイプ<</p>
                    </div>

                    <div class="col-xs-4">
                        <select id="formType" name="formType" class="form-control">
                            <option value="11検針伝票_東北用">"1請求書</option>
                            <option value="New検針伝票_定期用">2請求書_愛知3インチ</option>
                            <option value="検針伝票">2請求書_愛知3インチ</option>
                            <option value="検針伝票_定期用">3請求書_A4ガス料金</option>
                            <option value="検針伝票_東北用">コンビニ東北</option>
                            <option value="New検針伝票_定期用">コンビニ関東</option>
                            <option value="検針伝票">化学事業部請求書</option>
                            <option value="検針伝票_定期用">東北_線無御請求書</option>
                            <option value="検針伝票_東北用">検針お知らせ東北</option>
                        </select>
                    </div>
                </div>


            </div>


            <div class="col-xs-12 bottom-box no-padding">
                <div class="col-xs-12 border1 no-padding">
                    <p class="backend">出力指定</p>


                    <div class="col-xs-12  ">
                        <div class="no-padding">
                            <div class="col-xs-1 no-padding">
                                <p>改ページ指定</p>
                            </div>
                            <div class="col-xs-2">
                                <input type="radio" name="pageBreak" id="pageBreak" value="all"
                                       onclick="$.fn.radioButtonSelectionChanged('pageBreak', 'pageBreakId')"> <span>営業所・販売店</span>
                            </div>
                            <div class="col-xs-1">
                                <input type="radio" name="pageBreak" id="pageBreak" value="custom"
                                       onclick="$.fn.radioButtonSelectionChanged('pageBreak', 'pageBreakId')">
                                <span>地区</span>
                            </div>
                            <div class="col-xs-2">
                                <input type="radio" name="pageBreak" id="pageBreak" value="custom"
                                       onclick="$.fn.radioButtonSelectionChanged('pageBreak', 'pageBreakId')"> <span>営業担当者</span>
                            </div>

                            <div class="col-xs-2">
                                <input type="radio" name="pageBreak" id="pageBreak" value="custom"
                                       onclick="$.fn.radioButtonSelectionChanged('pageBreak', 'pageBreakId')"> <span>検針担当者</span>
                            </div>
                            <div class="col-xs-2">
                                <input type="radio" name="pageBreak" id="pageBreak" value="custom"
                                       onclick="$.fn.radioButtonSelectionChanged('pageBreak', 'pageBreakId')"> <span>集金担当者</span>
                            </div>
                            <div class="col-xs-1">
                                <input type="radio" name="pageBreak" id="pageBreak" value="custom"
                                       onclick="$.fn.radioButtonSelectionChanged('pageBreak', 'pageBreakId')">
                                <span>なし</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12  ">
                        <div class="no-padding">
                            <div class="col-xs-1 no-padding">
                                <p>並び順</p>                                                            </p>
                            </div>
                            <div class="col-xs-2">
                                <input type="radio" name="sortBy" id="sortBy" value="all"
                                       onclick="$.fn.radioButtonSelectionChanged('sortBy', 'sortById')">
                                <span>消費者コード順</span>
                            </div>
                            <div class="col-xs-2">
                                <input type="radio" name="sortBy" id="sortBy" value="custom"
                                       onclick="$.fn.radioButtonSelectionChanged('sortBy', 'sortById')">
                                <span>検針順路順</span>
                            </div>

                            <div class="col-xs-2">
                                <input type="radio" name="sortBy" id="sortBy" value="custom"
                                       onclick="$.fn.radioButtonSelectionChanged('sortBy', 'sortById')">
                                <span>検索名順</span>
                            </div>
                            <div class="col-xs-2">
                                <input type="radio" name="sortBy" id="sortBy" value="custom"
                                       onclick="$.fn.radioButtonSelectionChanged('sortBy', 'sortById')">
                                <span>集金順路順</span>
                            </div>
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

</body>

</html>