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
                                    <input name="officeSelection" id="officeSelection" type="radio" value="all" checked onclick="$.fn.radioButtonSelectionChanged('officeSelection', 'officeSelectionId')"><span>全て</span> 
                                </div>
                                <div class="col-xs-1">
                                    <input name="officeSelection" id="officeSelection" type="radio" value="directSales"  onclick="$.fn.radioButtonSelectionChanged('officeSelection', 'officeSelectionId')"><span>選択</span> 
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
                                    <input name="otherSelection" id="otherSelection" type="radio" value="all" checked onclick="$.fn.radioButtonSelectionChanged('otherSelection', 'otherSelectionId')"><span> 全て</span>


                                </div>
                                <div class="col-xs-1">
                                    <input name="otherSelection" id="otherSelection" type="radio" value="directSales"  onclick="$.fn.radioButtonSelectionChanged('otherSelection', 'otherSelectionId')"><span> 自社</span>


                                </div>
                                <div class="col-xs-1">
                                    <input name="otherSelection" id="otherSelection" type="radio" value="salesOutlet"  onclick="$.fn.radioButtonSelectionChanged('otherSelection', 'otherSelectionId')"><span>他社</span> 


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
                                    <input name="outputSelection" id="outputSelection" type="radio" value="all" checked onclick="$.fn.radioButtonSelectionChanged('outputSelection', 'outputSelectionId')"><span>全て</span> 


                                </div>
                                <div class="col-xs-1">
                                    <input name="outputSelection" id="outputSelection" type="radio" value="directSales"  onclick="$.fn.radioButtonSelectionChanged('outputSelection', 'outputSelectionId')"><span> 地区</span>


                                </div>
                                <div class="col-xs-2">
                                    <input name="outputSelection" id="outputSelection" type="radio" value="salesOutlet"  onclick="$.fn.radioButtonSelectionChanged('outputSelection', 'outputSelectionId')"><span> 営業担当者</span>


                                </div>

                            </div>
                           <div id="outputSelectionId">
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
                                    <p>出力区分2</p>
                                </div>
                                <div class="col-xs-1">
                                    <input name="outSelection" id="outSelection" type="radio" value="all" checked onclick="$.fn.radioButtonSelectionChanged('outSelection', 'outSelectionId')"><span>全て</span> 
                                </div>
                                <div class="col-xs-2 no-padding">
                                    <input name="outSelection" id="outSelection" type="radio" value="directSales"  onclick="$.fn.radioButtonSelectionChanged('outSelection', 'outSelectionId')"><span>保安機関（前回実施者）</span>
                                </div>

                                <div class="col-xs-3">
                                    <input name="outSelection" id="outSelection" type="radio" value="directSales"  onclick="$.fn.radioButtonSelectionChanged('outSelection', 'outSelectionId')"> <span>保安機関（供給設備点検実施者）</span>
                                </div>

                            </div>
                            <div id="outSelectionId">
                            
                            <div class="col-xs-12 no-padding">
                                <div class="col-xs-1 col-xs-offset-1">
                                    <div class="form-group">
                                        <input class="form-control" id="output2StartId" name="output2StartId"
                                               placeholder="000" type="text" value="" disabled onchange="$.fn.onInputValueChange('output2StartId', 'output2StartName')"/>
                                    </div>
                                </div>
                                <div class="col-xs-1 no-padding ratio">~</div>
                                <div class="col-xs-1">
                                    <div class="form-group">
                                        <input class="form-control" id="output2EndId" name="output2EndId"
                                               placeholder="999"
                                               type="text" value="" disabled onchange="$.fn.onInputValueChange('output2EndId', 'output2EndName')" onchange="$.fn.onInputValueChange('output2EndId', 'output2EndName')"/>
                                    </div>
                                </div>
                                <div class="col-xs-3">
                                    <div class="form-group">
                                        <input class="form-control" id="output2StartName" name="output2StartName"
                                               type="text"
                                               value="" disabled/>
                                    </div>
                                </div>
                                <div class="col-xs-1 no-padding ratio">~</div>
                                <div class="col-xs-3">
                                    <div class="form-group">
                                        <input class="form-control" id="output2EndName" name="output2EndName" type="text"
                                               value="" disabled/>
                                    </div>
                                </div>
                            </div></div>
                        </div>

                        <div class="col-xs-12">
                            <div class="col-xs-1 no-padding">
                                <p>調査員</p>
                            </div>
                            <div class="col-xs-2">
                                <div class="form-group">
                                    <input class="form-control" id="consumerCodeStart" name="consumerCodeStart"
                                           placeholder="0" type="text" value="" onchange="$.fn.onInputValueChange('consumerCodeStart', 'consumeCodeEnd')"/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">~</div>
                            <div class="col-xs-2">
                                <div class="form-group">
                                    <input class="form-control" id="consumeCodeEnd" name="consumeCodeEnd"
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
                                    <input class="form-control" id="consCodeStart" name="consCodeStart"
                                           placeholder="0" type="text" value="" onchange="$.fn.onInputValueChange('consCodeStart', 'conCodeEnd')"/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">~</div>
                            <div class="col-xs-2">
                                <div class="form-group">
                                    <input class="form-control" id="conCodeEnd" name="conCodeEnd"
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
                                <div class="col-xs-2">
                                    <input name="move" id="move" type="radio" value="directSales" onclick="$.fn.radioButtonSelectionChanged('move', 'moveId')"><span>閉栓・休止除く</span> 


                                </div>
                                <div class="col-xs-2">
                                    <input name="move" id="move" type="radio" value="directSales" onclick="$.fn.radioButtonSelectionChanged('move', 'moveId')"><span>未入居除く</span> 

                                </div>

                            </div>

                        </div>

                        <div class="col-xs-12">
                            <div class="col-xs-12 no-padding">
                                <div class="col-xs-1 no-padding">
                                    <p>容器区分</p>
                                </div>
                                <div class="col-xs-1">
                                    <input name="container" id="container" type="radio" value="all" onclick="$.fn.radioButtonSelectionChanged('container', 'containerId')"><span>全て</span> 
                                </div>
                                <div class="col-xs-2">
                                    <input name="container" id="container" type="radio" value="directSales" onclick="$.fn.radioButtonSelectionChanged('container', 'containerId')"><span>シリンダ</span> 


                                </div>
                                <div class="col-xs-2">
                                    <input name="container" id="container" type="radio" value="directSales" onclick="$.fn.radioButtonSelectionChanged('container', 'containerId')"><span>バルク</span> 

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

                                <div class="col-xs-1 no-padding">
                                    <input type="radio" name="terget" id="terget" value="all" onclick="$.fn.radioButtonSelectionChanged('terget', 'tergetId')"/> なし
                                </div>
                                <div class="col-xs-1 no-padding">
                                    <input type="radio" name="terget" id="terget" value="terget" onclick="$.fn.radioButtonSelectionChanged('terget', 'tergetId')"/><span> 選択</span>
                                </div>

                                <label class="col-xs-1 "> 開始 </label>
                                <div class="col-xs-1">
                                    <div class="form-group">
                                        <input class="form-control" id="consumerCodeStart" name="consumerCodeStart"
                                               placeholder="0" type="text" value=""/>
                                    </div>
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


                            </div>
                            <div class="col-xs-12 no-padding">
                                <div class="form-group">
                                    <label class="col-xs-1 no-padding"> 周知 </label>
                                    <div class="col-xs-1 no-padding">
                                        <div class="form-group">
                                            <input class="form-control" id="consumerCodeStart" name="consumerCodeStart"
                                                   placeholder="0" type="text" value=""/>
                                        </div>
                                    </div>

                                    <label class="col-xs-1"> 緊急 </label>
                                    <div class="col-xs-1 no-padding">
                                        <div class="form-group">
                                            <input class="form-control" id="consumerCodeStart" name="consumerCodeStart"
                                                   placeholder="0" type="text" value=""/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 no-padding">

                                <div class="form-group">
                                    <label class="col-xs-1 no-padding"> その他
                                    </label>

                                    <div class="col-xs-1">
                                        <input type="radio" name="other" id="other" value="all" onclick="$.fn.radioButtonSelectionChanged('other', 'otherId')"/><span>含む</span> 
                                    </div>

                                    <div class="col-xs-1">
                                        <input type="radio" name="other" id="other" value="all" onclick="$.fn.radioButtonSelectionChanged('other', 'otherId')"/><span>除く</span> 
                                    </div>

                                </div>
                            </div>
                            <div class="col-xs-12 no-padding">
                            <div class="form-group">

                                <label class="col-xs-1 no-padding"> 調査日

                                </label>

                                <div class="col-xs-2">
                                    <div class="form-group">
                                        <input class="form-control" id="consumeCodeEnd" name="consumeCodeEnd"
                                               placeholder="z"
                                               type="date" value=""/>
                                    </div>
                                </div>
                                <div class="col-xs-1 no-padding ratio">~</div>
                                <div class="col-xs-2">
                                    <div class="form-group">
                                        <input class="form-control" id="consumerCodeStartName" name="consumerCodeStartName"
                                               type="date" value=""/>
                                    </div>
                                </div>

                            </div>
                            </div>

                            <div class="col-xs-12 no-padding">
                            <div class="form-group">

                                <label class="col-xs-1 no-padding"> 次回期限

                                </label>

                                <div class="col-xs-2">
                                    <div class="form-group">
                                        <input class="form-control" id="consumeCodeEnd" name="consumeCodeEnd"
                                               placeholder="z"
                                               type="date" value=""/>
                                    </div>
                                </div>
                                <div class="col-xs-1 no-padding ratio">~</div>
                                <div class="col-xs-2">
                                    <div class="form-group">
                                        <input class="form-control" id="consumerCodeStartName" name="consumerCodeStartName"
                                               type="date" value=""/>
                                    </div>
                                </div>

                            </div>
                            </div>
                        </div>


                        <div class="col-xs-12">

                            <div class="form-group">
                                <label class="col-xs-1 no-padding"> 対象法律
                                </label>

                                <div class="col-xs-1">
                                    <input type="radio" name="law" id="law" value="all" onclick="$.fn.radioButtonSelectionChanged('law', 'lawId')"/><span>全て</span> 
                                </div>

                                <div class="col-xs-1">
                                    <input type="radio" name="law" id="law" value="law" onclick="$.fn.radioButtonSelectionChanged('law', 'lawId')"/><span>液石法</span> 
                                </div>

                                <div class="col-xs-1">
                                    <input type="radio" name="law" id="law" value="law" onclick="$.fn.radioButtonSelectionChanged('law', 'lawId')"/><span>高圧法</span> 
                                </div>
                                <div class="col-xs-2">
                                    <input type="radio" name="law" id="law" value="law" onclick="$.fn.radioButtonSelectionChanged('law', 'lawId')"/><span>ガス事業法</span> 
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 border1 no-padding bottom-box">
                        <p class="backend"> 出力指定</p>
                        <div class="col-xs-12">

                            <div class="form-group">

                                <label class="col-xs-1 no-padding"> 出力帳票
                                </label>

                                <div class="col-xs-1">
                                    <input type="radio" name="form" id="form" value="all" onclick="$.fn.radioButtonSelectionChanged('form', 'formId')"/><span>一覧表</span> 
                                </div>

                                <div class="col-xs-2 no-padding">
                                    <input type="radio" name="form" id="form" value="form" onclick="$.fn.radioButtonSelectionChanged('form', 'formId')"/><span>結果集計表</span> 
                                </div>

                                <div class="col-xs-2 no-padding">
                                    <input type="radio" name="form" id="form" value="form" onclick="$.fn.radioButtonSelectionChanged('form', 'formId')" /><span>次回期限集計表</span> 
                                </div>

                                <div class="col-xs-2 no-padding">
                                    <input type="radio" name="form" id="form" value="form" onclick="$.fn.radioButtonSelectionChanged('form', 'formId')"/><span>最新一覧表</span> 
                                </div>


                            </div>
                            <div class="col-xs-12 no-padding">
                            <div class="form-group">

                                <label class="col-xs-1 no-padding"> 改ページ指定
                                </label>

                                <div class="col-xs-2">
                                    <input type="radio" name="pagebreak" id="pagebreak" value="all" onclick="$.fn.radioButtonSelectionChanged('pagebreak', 'pagebreak')"/><span>営業所・販売店</span> 
                                </div>

                                <div class="col-xs-1 no-padding">
                                    <input type="radio" name="pagebreak" id="pagebreak" value="pagebreak" onclick="$.fn.radioButtonSelectionChanged('pagebreak', 'pagebreak')"/><span>地区</span> 
                                </div>

                                <div class="col-xs-2 no-padding">
                                    <input type="radio" name="pagebreak" id="pagebreak" value="pagebreak" onclick="$.fn.radioButtonSelectionChanged('pagebreak', 'pagebreak')"/><span>:営業担当者</span> 
                                </div>

                                <div class="col-xs-2">
                                    <input type="radio" name="pagebreak" id="pagebreak" value="pagebreak" onclick="$.fn.radioButtonSelectionChanged('pagebreak', 'pagebreak')"/><span>なし</span> 
                                </div>


                            </div>
                            </div>

                        </div>


                        <div class="col-xs-12">

                            <div class="form-group">

                                <label class="col-xs-1 no-padding">並び順1

                                </label>

                                <div class="col-xs-2">
                                    <input type="radio" name="sort" id="sort" value="all" onclick="$.fn.radioButtonSelectionChanged('sort', 'sortId')"/><span>消費者コード順</span> 
                                </div>

                                <div class="col-xs-2 no-padding">
                                    <input type="radio" name="sort" id="sort" value="sort" onclick="$.fn.radioButtonSelectionChanged('sort', 'sortId')"/><span>検針順路順</span> 
                                </div>

                                <div class="col-xs-2">
                                    <input type="radio" name="sort" id="sort" value="sort" onclick="$.fn.radioButtonSelectionChanged('sort', 'sortId')"/><span>検索名順</span> 
                                </div>

                            </div>
                        </div>

                        <div class="col-xs-12">

                            <div class="form-group">

                                <label class="col-xs-1 no-padding"> 出力先

                                </label>

                                <div class="col-xs-3">
                                    <input type="radio" name="out" id="out" value="all" onclick="$.fn.radioButtonSelectionChanged('out', 'outId')"/><span>プリンタ（印刷）</span> 
                                </div>

                                <div class="col-xs-3">
                                    <input type="radio" name="out" id="out" value="out" onclick="$.fn.radioButtonSelectionChanged('out', 'outId')"/><span>画面（印刷イメージ）</span> 
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