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
                        <p class="backend">消費者範囲指定 </p>
                        <div class="col-xs-12">
                            <div class="col-xs-12 no-padding">
                                <div class="col-xs-1 no-padding">
                                    <p>営業所コード</p>
                                </div>
                                <div class="col-xs-1">
                                    <input name="officeSelection" id="officeSelection" type="radio" value="all" checked onclick="$.fn.radioButtonSelectionChanged('officeSelection', 'officeSelectionId')"> <span>全て</span>
                                </div>
                                <div class="col-xs-1">
                                    <input name="officeSelection" id="officeSelection" type="radio" value="directSales" onclick="$.fn.radioButtonSelectionChanged('officeSelection', 'officeSelectionId')"> <span>選択</span>
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
                                               type="text" value=""disabled onchange="$.fn.onInputValueChange('otherEndId', 'otherEndName')" />
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
                                    <input name="outputSelection" id="outputSelection" type="radio" value="all" checked onclick="$.fn.radioButtonSelectionChanged('outputSelection', 'outputSelectionId')"> <span>全て</span>


                                </div>
                                <div class="col-xs-1">
                                    <input name="outputSelection" id="outputSelection" type="radio" value="directSales" onclick="$.fn.radioButtonSelectionChanged('outputSelection', 'outputSelectionId')"> <span>地区</span>


                                </div>
                                <div class="col-xs-2">
                                    <input name="outputSelection" id="outputSelection" type="radio" value="salesOutlet" onclick="$.fn.radioButtonSelectionChanged('outputSelection', 'outputSelectionId')"> <span>営業担当者</span>


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
                                    <input name="outSelection" id="outSelection" type="radio" value="all" checked onclick="$.fn.radioButtonSelectionChanged('outSelection', 'outSelectionId')"> <span>全て</span>
                                </div>
                                <div class="col-xs-2">
                                    <input name="outSelection" id="outSelection" type="radio" value="directSales" onclick="$.fn.radioButtonSelectionChanged('outSelection', 'outSelectionId')"> <span>保安機関</span>
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
                                               type="text" value="" disabled onchange="$.fn.onInputValueChange('output2EndId', 'output2EndName')"/>
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
                            </div>
                            </div>
                        </div>

                        <div class="col-xs-12">
                            <div class="col-xs-1 no-padding">
                                <p>調査員</p>
                            </div>
                            <div class="col-xs-2">
                                <div class="form-group">
                                    <input class="form-control" id="consumerCodeStart" name="consumerCodeStart"
                                           placeholder="0" type="text" value=""  onchange="$.fn.onInputValueChange('consumerCodeStart', 'consumeCodeEnd')"/>
                                </div>
                            </div>
                            <div class="col-xs-2">
                                <div class="form-group">
                                    <input class="form-control" id="consumeCodeEnd" name="consumeCodeEnd"
                                           placeholder="z"
                                           type="text" value="" />
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

                    </div>


                    <div class="col-xs-12 border1 no-padding">
                        <p class="backend">作成範囲指定 </p>
                        <div class="col-xs-12">
                            <div class="form-group">

                                <label class="col-xs-1 no-padding"> 点検調査日

                                </label>

                                <div class="col-xs-10">
                                    <input type="radio" name="inspect" id="inspect" value="all" onclick="$.fn.radioButtonSelectionChanged('inspect', 'inspectId')"/> <span>なし</span>
                                    <input type="radio" name="inspect" id="inspect" value="inspect" onclick="$.fn.radioButtonSelectionChanged('inspect', 'inspectId')"/> <span>選択</span>

                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12">

                            <div class="form-group">
                                <label class="col-xs-1 no-padding"> 対象業務
                                </label>

                                <div class="col-xs-10">
                                    <input type="radio" name="terget" id="terget" value="all" onclick="$.fn.radioButtonSelectionChanged('terget', 'tergetId')"/> <span>定期供給・消費</span>
                                    <input type="radio" name="terget" id="terget" value="terget" onclick="$.fn.radioButtonSelectionChanged('terget', 'tergetId')"/> <span>再調査</span>
                                    <input type="radio" name="terget" id="terget" value="terget" onclick="$.fn.radioButtonSelectionChanged('terget', 'tergetId')"/> <span>CO点検</span>
                                    <input type="radio" name="terget" id="terget" value="terget" onclick="$.fn.radioButtonSelectionChanged('terget', 'tergetId')"/> <span>埋設管</span>
                                    <input type="radio" name="terget" id="terget" value="terget" onclick="$.fn.radioButtonSelectionChanged('terget', 'tergetId')"/> <span>定期自首</span>
                                    <input type="radio" name="terget" id="terget" value="terget" onclick="$.fn.radioButtonSelectionChanged('terget', 'tergetId')"/> <span>本支管</span>
                                    <input type="radio" name="terget" id="terget" value="terget" onclick="$.fn.radioButtonSelectionChanged('terget', 'tergetId')"/> <span>消費機器</span>
                                    <input type="radio" name="terget" id="terget" value="terget" onclick="$.fn.radioButtonSelectionChanged('terget', 'tergetId')"/> <span>容器交換時等</span>
                                </div>


                            </div>
                        </div>

                        <div class="col-xs-12">
                            <div class="form-group">

                                <label class="col-xs-1 no-padding"> 次回期限
                                </label>

                                <div class="col-xs-2">
                                    <div class="form-group">
                                        <input class="form-control" id="deadlineCodeStart" name="deadlineCodeStart"
                                               placeholder="0" type="text" value="" onchange="$.fn.onInputValueChange('deadlineCodeStart', 'deadlineCode')"/>
                                    </div>
                                </div>
                                <div class="col-xs-1 no-padding ratio">~</div>
                                <div class="col-xs-2">
                                    <div class="form-group">
                                        <input class="form-control" id="deadlineCode" name="deadlineCode"
                                               placeholder="0" type="text" value=""/>
                                    </div>
                                </div>


                            </div>
                        </div>

                        <div class="col-xs-12">

                            <div class="form-group">
                                <label class="col-xs-1 no-padding"> 対象法律
                                </label>

                                <div class="col-xs-10">
                                    <input type="radio" name="law" id="law" value="all" onclick="$.fn.radioButtonSelectionChanged('law', 'lawId')"/> <span>全て</span>
                                    <input type="radio" name="law" id="law" value="law" onclick="$.fn.radioButtonSelectionChanged('law', 'lawId')"/> <span>液石法</span>
                                    <input type="radio" name="law" id="law" value="law" onclick="$.fn.radioButtonSelectionChanged('law', 'lawId')"/> <span>高圧法</span>
                                    <input type="radio" name="law" id="law" value="law" onclick="$.fn.radioButtonSelectionChanged('law', 'lawId')"/> <span>ガス事業法</span>
                                </div>

                            </div>
                        </div>

                        <div class="col-xs-12">
                            <div class="form-group">

                                <label class="col-xs-1 no-padding"> 帳票タイプ
                                </label>

                                <div class="col-xs-4">
                                    <div class="form-group">
                                        <select name="" id="" class="selclass form-control">
                                            <option value="NEW液化石油ガス設備調査 ・ 点検票">NEW液化石油ガス設備調査 ・ 点検票</option>
                                            <option value="ガス消費機器調査 （再調査） 点検結果">ガス消費機器調査 （再調査） 点検結果</option>
                                            <option value="本社専用_ガス消費機器調査 （再調査）">本社専用_ガス消費機器調査 （再調査）</option>
                                            <option value="本社専用_液化石油ガス設備調査 ・ 点検">本社専用_液化石油ガス設備調査 ・ 点検</option>
                                            <option value="液化石油ガス設備調査 ・ 点検票">液化石油ガス設備調査 ・ 点検票</option>
                                            <option value="（液石-再調査） 液化石油ガス設備調査">（液石-再調査） 液化石油ガス設備調査</option>
                                            <option value="（液石-定期） 液化石油ガス設備調査">（液石-定期） 液化石油ガス設備調査</option>
                                            <option value="（簡易-再調査） 液化石油ガス設備調査">（簡易-再調査） 液化石油ガス設備調査</option>
                                            <option value="（簡易-定期） 液化石油ガス設備調査">（簡易-定期） 液化石油ガス設備調査</option>
                                            <option value="LPガスご利用通知書">LPガスご利用通知書</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-xs-12">

                            <div class="form-group">
                                <label class="col-xs-1 no-padding"> ページ指定
                                </label>

                                <div class="col-xs-1">
                                    <input type="radio" name="pages" id="pages" value="all" onclick="$.fn.radioButtonSelectionChanged('pages', 'pagesId')" /> <span>全て</span>
                                </div>
                                <div class="col-xs-1">
                                    <input type="radio" name="pages" id="pages" value="pages" onclick="$.fn.radioButtonSelectionChanged('pages', 'pagesId')"/> <span>指定</span>
                                </div>
                                <div class="col-xs-2">
                                    <div class="form-group">
                                        <input class="form-control" id="consumerCodeStart" name="consumerCodeStart"
                                               placeholder="0" type="text" value=""/>
                                    </div>
                                </div>

                                <div class="col-xs-2">
                                    <div class="form-group">
                                        <label for="">以降</label>
                                    </div>
                                </div>

                            </div>
                        </div>


                    </div>



                    <div class="col-xs-12 border1 no-padding">
                        <p class="backend">出力指定 </p>
                        <div class="col-xs-12">
                            <div class="form-group">

                                <div class="col-xs-12 no-padding">
                                    <div class="col-xs-1 no-padding">
                                        <p>点検調査日</p>
                                    </div>
                                    <div class="col-xs-2">
                                        <div class="form-group">
                                            <input class="form-control" id="inspectCodeStart" name="inspectCodeStart"
                                                   placeholder="0" type="text" value="" onchange="$.fn.onInputValueChange('inspectCodeStart', 'inspectCodeId')"/>
                                        </div>
                                    </div>
                                    <div class="col-xs-1 no-padding ratio">~</div>
                                    <div class="col-xs-2">
                                        <div class="form-group">
                                            <input class="form-control" id="inspectCodeId" name="inspectCodeId"
                                                   placeholder="0" type="text" value=""/>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="col-xs-12">
                            <div class="form-group">

                                <label class="col-xs-1 no-padding"> 結果
                                </label>

                                <div class="col-xs-1">
                                    <input type="radio" name="result" id="result" value="all" onclick="$.fn.radioButtonSelectionChanged('result', 'resultId')" /> <span>全て</span>
                                </div>

                                <div class="col-xs-1">
                                    <input type="radio" name="result" id="result" value="result" onclick="$.fn.radioButtonSelectionChanged('result', 'resultId')"/> <span>良</span>
                                </div>

                                <div class="col-xs-1">
                                    <input type="radio" name="result" id="result" value="result" onclick="$.fn.radioButtonSelectionChanged('result', 'resultId')"/> <span>不良</span>
                                </div>

                                <div class="col-xs-1">
                                    <input type="radio" name="result" id="result" value="result" onclick="$.fn.radioButtonSelectionChanged('result', 'resultId')"/> <span>不能</span>
                                </div>

                                <div class="col-xs-1">
                                    <input type="radio" name="result" id="result" value="result" onclick="$.fn.radioButtonSelectionChanged('result', 'resultId')"/> <span>その他</span>
                                </div>

                            </div>
                        </div>

                        <div class="col-xs-12">

                            <div class="form-group">

                                <label class="col-xs-1 no-padding"> 対象法律

                                </label>

                                <div class="col-xs-1">
                                    <input type="radio" name="targetlaw" id="targetlaw" value="all" onclick="$.fn.radioButtonSelectionChanged('targetlaw', 'targetlaw')"/> <span>全て</span>
                                </div>

                                <div class="col-xs-1">
                                    <input type="radio" name="targetlaw" id="targetlaw" value="targetlaw" onclick="$.fn.radioButtonSelectionChanged('targetlaw', 'targetlaw')"/> <span>液石法</span>
                                </div>

                                <div class="col-xs-1">
                                    <input type="radio" name="targetlaw" id="targetlaw" value="targetlaw" onclick="$.fn.radioButtonSelectionChanged('targetlaw', 'targetlaw')"/> <span>高圧法</span>
                                </div>

                                <div class="col-xs-2">
                                    <input type="radio" name="targetlaw" id="targetlaw" value="targetlaw" onclick="$.fn.radioButtonSelectionChanged('targetlaw', 'targetlaw')"/> <span>ガス事業法</span>
                                </div>


                            </div>
                        </div>


                    </div>

                    <div class="col-xs-12 border1 no-padding bottom-box">
                        <p class="backend">出力指定 </p>

                        <div class="col-xs-12">
                            <div class="form-group">

                                <label class="col-xs-1 no-padding"> 出力順
                                </label>

                                <div class="col-xs-2">
                                    <input type="radio" name="order" id="order" value="all" onclick="$.fn.radioButtonSelectionChanged('order', 'orderId')"/> <span>消費者コード順</span>
                                </div>

                                <div class="col-xs-2 no-padding">
                                    <input type="radio" name="order" id="order" value="all" onclick="$.fn.radioButtonSelectionChanged('order', 'orderId')"/> <span>検針順路順</span>
                                </div>

                                <div class="col-xs-2">
                                    <input type="radio" name="order" id="order" value="all" onclick="$.fn.radioButtonSelectionChanged('order', 'orderId')"/> <span>検索名順</span>
                                </div>

                            </div>
                        </div>

                        <div class="col-xs-12">

                            <div class="form-group">

                                <label class="col-xs-1 no-padding"> 出力先

                                </label>

                                <div class="col-xs-2">
                                    <input type="radio" name="order2" id="order2" value="all" onclick="$.fn.radioButtonSelectionChanged('order2', 'order2Id')"/> <span>プリンタ（印刷）</span>
                                </div>

                                <div class="col-xs-2 no-padding">
                                    <input type="radio" name="order2" id="order2" value="order2" onclick="$.fn.radioButtonSelectionChanged('order2', 'order2Id')"/> <span>画面（印刷イメージ）</span>
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