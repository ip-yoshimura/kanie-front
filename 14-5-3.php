<?php
include "header.php"
?>
<?php
include "sidebar.php"
?>
<div class="col-md-10 col-xs-8 col-xs-12 no-padding">

    <div class="col-md-12 col-xs-12 no-padding body-background">

        <div class="head-p ">
            <p>保安点検調査票印刷指定

            </p>
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
                            <input name="officeSelection" id="officeSelection" type="radio" value="all" checked onclick="$.fn.radioButtonSelectionChanged('officeSelection', 'officeSelectionId')"> <span>全て</span>
                        </div>
                        <div class="col-xs-1">
                            <input name="officeSelection" id="officeSelection" type="radio" value="directSales"  onclick="$.fn.radioButtonSelectionChanged('officeSelection', 'officeSelectionId')"> <span>選択</span>
                        </div>

                    </div>
                    <div id="officeSelectionId">
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
                            <p>自他社区分</p>
                        </div>
                        <div class="col-xs-1">
                            <input name="otherSelection" id="otherSelection" type="radio" value="all" checked onclick="$.fn.radioButtonSelectionChanged('otherSelection', 'otherSelectionId')"> <span>全て</span>


                        </div>
                        <div class="col-xs-1">
                            <input name="otherSelection" id="otherSelection" type="radio" value="directSales" onclick="$.fn.radioButtonSelectionChanged('otherSelection', 'otherSelectionId')"> <span>自社</span>


                        </div>
                        <div class="col-xs-1">
                            <input name="otherSelection" id="otherSelection" type="radio" value="salesOutlet" onclick="$.fn.radioButtonSelectionChanged('otherSelection', 'otherSelectionId')"> <span>他社</span>


                        </div>
                    </div>


                    <div id="otherSelectionId">
                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-1 col-xs-offset-1">
                            <div class="form-group">
                                <input class="form-control" id="otherStartId" name="otherStartId"
                                       placeholder="000"
                                       type="text" value="" disabled onchange="$.fn.onInputValueChange('otherStartId', 'otherStartName')"/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">~</div>
                        <div class="col-xs-1">
                            <div class="form-group">
                                <input class="form-control" id="otherEndId" name="otherEndId" placeholder="999"
                                       type="text" value="" disabled onchange="$.fn.onInputValueChange('otherEndId', 'otherEndName')"/>
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input class="form-control" id="otherStartName" name="otherStartName"
                                       type="text"
                                       value="" disabled/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">~</div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input class="form-control" id="otherEndName" name="otherEndName" type="text"
                                       value="" disabled/>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>


                <div class="col-xs-12">
                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-1 no-padding">
                            <p>出力区分1</p>
                        </div>
                        <div class="col-xs-1">
                            <input name="out2Selection" id="out2Selection" type="radio" value="all" checked onclick="$.fn.radioButtonSelectionChanged('out2Selection', 'out2SelectionId')"> <span>全て</span>


                        </div>
                        <div class="col-xs-1">
                            <input name="out2Selection" id="out2Selection" type="radio" value="directSales" onclick="$.fn.radioButtonSelectionChanged('out2Selection', 'out2SelectionId')"> <span>地区</span>


                        </div>
                        <div class="col-xs-2">
                            <input name="out2Selection" id="out2Selection" type="radio" value="salesOutlet" onclick="$.fn.radioButtonSelectionChanged('out2Selection', 'out2SelectionId')"> <span>営業担当者</span>


                        </div>

                    </div>
                    <div id="out2SelectionId">
                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-1 col-xs-offset-1">
                            <div class="form-group">
                                <input class="form-control" id="out2StartId" name="out2StartId"
                                       placeholder="000" type="text" value="" disabled onchange="$.fn.onInputValueChange('out2StartId', 'out2StartName')"/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">~</div>
                        <div class="col-xs-1">
                            <div class="form-group">
                                <input class="form-control" id="out2EndId" name="out2EndId"
                                       placeholder="999"
                                       type="text" value="" disabled onchange="$.fn.onInputValueChange('out2EndId', 'out2EndName')"/>
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input class="form-control" id="out2StartName" name="out2StartName"
                                       type="text"
                                       value="" disabled/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">~</div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input class="form-control" id="out2EndName" name="out2EndName" type="text"
                                       value="" disabled/>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-1 no-padding">
                            <p>出力区分2</p>
                        </div>
                        <div class="col-xs-1">
                            <input name="out3Selection" id="out3Selection" type="radio" value="all" checked onclick="$.fn.radioButtonSelectionChanged('out3Selection', 'out3SelectionId')"> <span>全て</span>
                        </div>
                        <div class="col-xs-1 no-padding">
                            <input name="out3Selection" id="out3Selection" type="radio" value="directSales" onclick="$.fn.radioButtonSelectionChanged('out3Selection', 'out3SelectionId')"> <span>保安機関</span>
                        </div>

                    </div>
                    <div id="out3SelectionId" >
                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-1 col-xs-offset-1">
                            <div class="form-group">
                                <input class="form-control" id="output3StartId" name="output3StartId"
                                       placeholder="000" type="text" value="" disabled onchange="$.fn.onInputValueChange('output3StartId', 'output3StartName')"/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">~</div>
                        <div class="col-xs-1">
                            <div class="form-group">
                                <input class="form-control" id="output3EndId" name="output3EndId"
                                       placeholder="999"
                                       type="text" value="" disabled onchange="$.fn.onInputValueChange('output3EndId', 'output3EndName')"/>
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input class="form-control" id="output3StartName" name="output3StartName"
                                       type="text"
                                       value="" disabled/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">~</div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input class="form-control" id="output3EndName" name="output3EndName" type="text"
                                       value="" disabled/>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="col-xs-12">
                    <div class="col-xs-1 no-padding">
                        <p>調査員</p>
                    </div>
                    <div class="col-xs-2">
                        <div class="form-group">
                            <input class="form-control" id="consumer3CodeStart" name="consumer3CodeStart"
                                   placeholder="0" type="text" value=""  onchange="$.fn.onInputValueChange('consumer3CodeStart', 'consume3CodeEnd')"/>
                        </div>
                    </div>
                    <div class="col-xs-1 no-padding ratio">~</div>
                    <div class="col-xs-2">
                        <div class="form-group">
                            <input class="form-control" id="consume3CodeEnd" name="consume3CodeEnd"
                                   placeholder="z"
                                   type="text" value=""/>
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <div class="form-group">
                            <input class="form-control" id="consumerCodeStartName" name="consumerCodeStartName"
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
                            <input class="form-control" id="consu2CodeStart" name="consu2CodeStart"
                                   placeholder="0" type="text" value=""  onchange="$.fn.onInputValueChange('consu2CodeStart', 'consu2CodeEnd')"/>
                        </div>
                    </div>
                    <div class="col-xs-1 no-padding ratio">~</div>
                    <div class="col-xs-2">
                        <div class="form-group">
                            <input class="form-control" id="consu2CodeEnd" name="consu2CodeEnd"
                                   placeholder="z"
                                   type="text" value=""/>
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <div class="form-group">
                            <input class="form-control" id="consumerCodeStartName" name="consumerCodeStartName"
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
                            <input name="move" id="move" type="radio" value="all" onclick="$.fn.radioButtonSelectionChanged('move', 'moveId')"><span>全て</span>
                        </div>
                        <div class="col-xs-2 no-padding">
                            <input name="move" id="move" type="radio" value="directSales" onclick="$.fn.radioButtonSelectionChanged('move', 'moveId')"><span>閉栓・休止除く</span>


                        </div>
                        <div class="col-xs-1 no-padding">
                            <input name="move" id="move" type="radio" value="directSales" onclick="$.fn.radioButtonSelectionChanged('move', 'moveId')"><span>未入居除く</span>

                        </div>

                    </div>

                </div>

                <div class="col-xs-12">
                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-1 no-padding">
                            <p>地図コード</p>
                        </div>

                        <div class="col-xs-3">
                            <div class="form-group">
                                <input class="form-control" id="mapCodeStartName" name="mapCodeStartName"
                                       type="text" value="" onchange="$.fn.onInputValueChange('mapCodeStartName', 'mapCodeStarId')"/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">~</div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input class="form-control" id="mapCodeStarId" name="mapCodeStarId"
                                       type="text" value=""/>
                            </div>
                        </div>

                    </div>

                </div>

            </div>


            <div class="col-xs-12 border1 no-padding">
                <p class="backend">作成範囲指定</p>
                <div class="col-xs-12">

                    <div class="form-group">

                        <label class="col-xs-1 no-padding"> 対象業務

                        </label>

                        <div class="col-xs-1">
                            <input type="radio" name="business" id="business" value="all" onclick="$.fn.radioButtonSelectionChanged('business', 'businessId')" /> <span>なし</span>
                        </div>
                        <div class="col-xs-1">
                            <input type="radio" name="business" id="business" value="business" onclick="$.fn.radioButtonSelectionChanged('business', 'businessId')"/> <span>選択</span>
                        </div>

                        <label class="col-xs-1"> 交換 </label>
                        <div class="col-xs-1 no-padding">
                            <div class="form-group">
                                <input class="form-control" id="consumerCodeStart" name="consumerCodeStart"
                                       placeholder="0" type="text" value=""/>
                            </div>
                        </div>

                        <label class="col-xs-1"> 供給 </label>
                        <div class="col-xs-1 no-padding">
                            <div class="form-group">
                                <input class="form-control" id="consumerCodeStart" name="consumerCodeStart"
                                       placeholder="0" type="text" value=""/>
                            </div>
                        </div>

                        <label class="col-xs-1"> 消費 </label>
                        <div class="col-xs-1 no-padding">
                            <div class="form-group">
                                <input class="form-control" id="consumerCodeStart" name="consumerCodeStart"
                                       placeholder="0" type="text" value=""/>
                            </div>
                        </div>

                        <label class="col-xs-1"> 周知 </label>
                        <div class="col-xs-1 no-padding">
                            <div class="form-group">
                                <input class="form-control" id="consumerCodeStart" name="consumerCodeStart"
                                       placeholder="0" type="text" value=""/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">

                    <label for="">
                    </label>
                    <div class="form-group ">
                        <label class="col-xs-1 no-padding">

                        </label>
                        <label class="col-xs-1"> 緊急 </label>
                        <div class="col-xs-1 no-padding">
                            <div class="form-group">
                                <input class="form-control" id="consumerCodeStart" name="consumerCodeStart"
                                       placeholder="0" type="text" value=""/>
                            </div>
                        </div>

                        <label class="col-xs-1"> その他 </label>
                        <div class="col-xs-1 no-padding">
                            <div class="form-group">
                                <input class="form-control" id="consumerCodeStart" name="consumerCodeStart"
                                       placeholder="0" type="text" value=""/>
                            </div>
                        </div>
                        <div class="col-xs-1">
                            <input type="radio" name="business2" id="business2" value="all" onclick="$.fn.radioButtonSelectionChanged('business2', 'business2Id')" /> <span>含む</span>
                        </div>
                        <div class="col-xs-1">
                            <input type="radio" name="business2" id="business2" value="business2" onclick="$.fn.radioButtonSelectionChanged('business2', 'business2Id')"/> <span>除く</span>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12">
                    <div class="form-group ">
                        <label class="col-xs-1 no-padding"> 調査日 </label>
                        <div class="col-xs-2">
                            <div class="form-group">
                                <input class="form-control" id="consumerCodeStart" name="consumerCodeStart"
                                       placeholder="0" type="date" value=""/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">~</div>
                        <div class="col-xs-2">
                            <div class="form-group">
                                <input class="form-control" id="consumerCodeStart" name="consumerCodeStart"
                                       placeholder="0" type="date" value=""/>
                            </div>
                        </div>


                        <label class="col-xs-1"> 次回期限 </label>
                        <div class="col-xs-1 no-padding">
                            <div class="form-group">
                                <input class="form-control" id="consumerCodeStart" name="consumerCodeStart"
                                       placeholder="0" type="date" value=""/>
                            </div>
                        </div>
                        <div class="col-xs-2">
                            <div class="form-group">
                                <input class="form-control" id="consumerCodeStart" name="consumerCodeStart"
                                       placeholder="0" type="date" value=""/>
                            </div>
                        </div>

                    </div>
                </div>


                <div class="col-xs-12">

                    <div class="form-group">
                        <label class="col-xs-1 no-padding"> 対象法律
                        </label>

                        <div class="col-xs-1">
                            <input type="radio" name="law" id="law" value="all" onclick="$.fn.radioButtonSelectionChanged('law', 'lawId')"/> <span>全て</span>
                        </div>
                        <div class="col-xs-1">
                            <input type="radio" name="law" id="law" value="law" onclick="$.fn.radioButtonSelectionChanged('law', 'lawId')"/> <span>液石法</span>
                        </div>
                        <div class="col-xs-1">
                            <input type="radio" name="law" id="law" value="law" onclick="$.fn.radioButtonSelectionChanged('law', 'lawId')"/> <span>高圧法</span>
                        </div>
                        <div class="col-xs-2">
                            <input type="radio" name="law" id="law" value="law" onclick="$.fn.radioButtonSelectionChanged('law', 'lawId')"/> <span>ガス事業法</span>
                        </div>


                    </div>
                </div>

            </div>

            <div class="col-xs-12 border1 no-padding bottom-box">
                <p class="backend"> 出力指定</p>
                <div class="col-xs-12">

                    <div class="form-group">
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-1 no-padding">
                                <p>出力帳票</p>
                            </div>
                            <div class="col-xs-1">
                                <input type="radio" name="form" id="form" value="all" onclick="$.fn.radioButtonSelectionChanged('form', 'formId')"/> <span>一覧表</span>
                            </div>
                            <div class="col-xs-2">
                                <input type="radio" name="form" id="form" value="form" onclick="$.fn.radioButtonSelectionChanged('form', 'formId')"/> <span>結果集計表</span>
                            </div>
                            <div class="col-xs-3">
                                <input type="radio" name="form" id="form" value="form" onclick="$.fn.radioButtonSelectionChanged('form', 'formId')"/> <span>次回期限集計表</span>
                            </div>
                            <div class="col-xs-2">
                                <input type="radio" name="form" id="form" value="form" onclick="$.fn.radioButtonSelectionChanged('form', 'formId')"/> <span>最新一覧表</span>
                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-xs-12">
                    <div class="form-group">

                        <label class="col-xs-1 no-padding"> 改ページ指定
                        </label>

                        <div class="col-xs-2">
                            <input type="radio" name="pagebreak" id="pagebreak" value="all" onclick="$.fn.radioButtonSelectionChanged('pagebreak', 'pagebreakId')"/> <span>営業所・販売店</span>
                        </div>

                        <div class="col-xs-2">
                            <input type="radio" name="pagebreak" id="pagebreak" value="pagebreak" onclick="$.fn.radioButtonSelectionChanged('pagebreak', 'pagebreakId')"/> <span>地区</span>
                        </div>

                        <div class="col-xs-2">
                            <input type="radio" name="pagebreak" id="pagebreak" value="pagebreak" onclick="$.fn.radioButtonSelectionChanged('pagebreak', 'pagebreakId')"/> <span>営業担当者</span>
                        </div>

                        <div class="col-xs-2">
                            <input type="radio"/> <span>なし</span>
                        </div>

                    </div>
                </div>

                <div class="col-xs-12">

                    <div class="form-group">

                        <label class="col-xs-1 no-padding"> 並び順1

                        </label>

                        <div class="col-xs-2">
                            <input type="radio" name="sort1" id="sort1" value="all" onclick="$.fn.radioButtonSelectionChanged('sort1', 'sort1Id')"/> <span>消費者コード順</span>
                        </div>

                        <div class="col-xs-2">
                            <input type="radio" name="sort1" id="sort1" value="sort1" onclick="$.fn.radioButtonSelectionChanged('sort1', 'sort1Id')"/> <span>検針順路順</span>
                        </div>

                        <div class="col-xs-2">
                            <input type="radio" name="sort1" id="sort1" value="sort1" onclick="$.fn.radioButtonSelectionChanged('sort1', 'sort1Id')"/> <span>検索名順</span>
                        </div>


                    </div>
                </div>

                <div class="col-xs-12">

                    <div class="form-group">

                        <label class="col-xs-1 no-padding"> 出力先

                        </label>

                        <div class="col-xs-2">
                            <input type="radio" name="out2" id="out2" value="all" onclick="$.fn.radioButtonSelectionChanged('out2', 'out2Id')"/> <span>プリンタ（印刷）</span>
                        </div>

                        <div class="col-xs-2 no-padding">
                            <input type="radio" name="out2" id="out2" value="out2" onclick="$.fn.radioButtonSelectionChanged('out2', 'out2Id')"/> <span>画面（印刷イメージ）</span>
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