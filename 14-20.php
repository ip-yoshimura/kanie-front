<?php
include "header.php"
?>
<?php
include "sidebar.php"
?>

    <div class="col-xs-8 col-md-10 col-xs-12 no-padding">

        <div class="col-md-12 col-xs-12 no-padding head-color">
            <div class="head-p">
                <p>保安点検調査票印刷指定
                </p>
            </div>
            <form action="/gas/meter-reading" id="meter" method="POST">

                <div class="col-xs-12 border1 no-padding">
                    <p class="backend">消費者範囲指定

                    </p>
                    <div class="col-xs-12">
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-1 no-padding">
                                <p>営業所コード</p>
                            </div>
                            <div class="col-xs-1">
                                <input name="officeCode" type="radio" value="all" checked onclick="$.fn.radioButtonSelectionChanged('officeCode', 'officeCodeId')"> <span>全て</span>
                            </div>
                            <div class="col-xs-1">
                                <input name="officeCode" type="radio" value="directSales" onclick="$.fn.radioButtonSelectionChanged('officeCode', 'officeCodeId')"><span>選択</span>
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
                                <input name="classification" type="radio" value="directSales" onclick="$.fn.radioButtonSelectionChanged('classification', 'classificationId')"><span> 直売</span>


                            </div>
                            <div class="col-xs-1">
                                <input name="classification" type="radio" value="salesOutlet" onclick="$.fn.radioButtonSelectionChanged('classification', 'classificationId')"><span> 販売店</span>


                            </div>
                        </div>


                        <div id="classificationId">
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-1 col-xs-offset-1">
                                <div class="form-group">
                                    <input class="form-control" id="StartId" name="StartId"
                                           placeholder="000"
                                           type="text" value="" disabled onchange="$.fn.onInputValueChange('StartId', 'StartName')"/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">~</div>
                            <div class="col-xs-1">
                                <div class="form-group">
                                    <input class="form-control" id="EndId" name="EndId" placeholder="999"
                                           type="text" value="" disabled onchange="$.fn.onInputValueChange('EndId', 'EndName')"/>
                                </div>
                            </div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input class="form-control" id="StartName" name="StartName"
                                           type="text"
                                           value="" disabled/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">~</div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input class="form-control" id="EndName" name="EndName" type="text"
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
                                <input name="output" type="radio" value="all" checked onclick="$.fn.radioButtonSelectionChanged('output', 'outputId')"><span> 全て</span>


                            </div>
                            <div class="col-xs-1">
                                <input name="output" type="radio" value="directSales" onclick="$.fn.radioButtonSelectionChanged('output', 'outputId')"><span> 地区</span>


                            </div>
                            <div class="col-xs-2">
                                <input name="output" type="radio" value="salesOutlet" onclick="$.fn.radioButtonSelectionChanged('output', 'outputId')"><span> 営業担当者</span>


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
                                <p>出力区分2</p>
                            </div>
                            <div class="col-xs-1">
                                <input name="output_2" type="radio" value="all" checked onclick="$.fn.radioButtonSelectionChanged('output_2', 'output_2Id')"><span> 全て</span>
                            </div>
                            <div class="col-xs-2">
                                <input name="output_2" type="radio" value="directSales" onclick="$.fn.radioButtonSelectionChanged('output_2', 'output_2Id')"><span> 保安機関</span>
                            </div>
                            <div class="col-xs-2">
                                <input name="output_2" type="radio" value="salesOutlet" onclick="$.fn.radioButtonSelectionChanged('output_2', 'output_2Id')"><span> 保安機関と調査員</span>
                            </div>
                            <div class="col-xs-2">
                                <input name="output_2" type="radio" value="salesOutlet" onclick="$.fn.radioButtonSelectionChanged('output_2', 'output_2Id')"><span> 保安機関（特殊）</span>
                            </div>
                            <div class="col-xs-3">
                                <input name="output_2" type="radio" value="salesOutlet" onclick="$.fn.radioButtonSelectionChanged('output_2', 'output_2Id')"><span> 保安機関と調査員（特殊）</span>
                            </div>

                        </div>
                        <div id="output_2Id">
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-1 col-xs-offset-1">
                                <div class="form-group">
                                    <input class="form-control" id="output_2StartId" name="output_2StartId"
                                           placeholder="000" type="text" value="" disabled onchange="$.fn.onInputValueChange('output_2StartId', 'output_2StartName')"/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">~</div>
                            <div class="col-xs-1">
                                <div class="form-group">
                                    <input class="form-control" id="output_2EndId" name="output_2EndId"
                                           placeholder="999"
                                           type="text" value="" disabled onchange="$.fn.onInputValueChange('output_2EndId', 'output_2EndName')"/>
                                </div>
                            </div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input class="form-control" id="output_2StartName" name="output_2StartName"
                                           type="text"
                                           value="" disabled/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">~</div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input class="form-control" id="output_2EndName" name="output_2EndName" type="text"
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
                                       placeholder="0" type="text" value="" onchange="$.fn.onInputValueChange('consumerCodeStart', 'consumerCodeStartName')"/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">~</div>
                        <div class="col-xs-2">
                            <div class="form-group">
                                <input class="form-control" id="consumeCodeEnd" name="consumeCodeEnd"
                                       placeholder="z"
                                       type="text" value="" onchange="$.fn.onInputValueChange('consumeCodeEnd', 'consumerEndName')"/>
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input class="form-control" id="consumerCodeStartName" name="consumerCodeStartName"
                                       type="text" value=""/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">~</div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input class="form-control" id="consumerEndName" name="consumerEndName"
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
                                       placeholder="0" type="text" value="" onchange="$.fn.onInputValueChange('consumer_2CodeStart', 'consumer_2CodeName')"/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">~</div>
                        <div class="col-xs-2">
                            <div class="form-group">
                                <input class="form-control" id="consumer_2CodeEnd" name="consumer_2CodeEnd"
                                       placeholder="z"
                                       type="text" value="" onchange="$.fn.onInputValueChange('consumer_2CodeEnd', 'consumer_2Code')"/>
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input class="form-control" id="consumer_2CodeName" name="consumer_2CodeName"
                                       type="text" value=""/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">~</div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input class="form-control" id="consumer_2Code" name="consumer_2Code"
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
                    <div class="col-xs-12">
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-1 no-padding">
                                <p>容器区分</p>
                            </div>
                            <div class="col-xs-1">
                                <input name="container" type="radio" value="all" onclick="$.fn.radioButtonSelectionChanged('container', 'container')"><span> 全て</span>
                            </div>
                            <div class="col-xs-2">
                                <input name="container" type="radio" value="directSales" onclick="$.fn.radioButtonSelectionChanged('container', 'container')"><span> シリンダ</span>


                            </div>
                            <div class="col-xs-2">
                                <input name="container" type="radio" value="directSales" onclick="$.fn.radioButtonSelectionChanged('container', 'container')"><span> バルク</span>

                            </div>

                        </div>

                    </div>
                </div>


                <div class="col-xs-12 border1 no-padding">

                        <p class="backend">作成範囲指定
                        </p>
                        <div class="form-group">

                            <label class="col-xs-1"> 業務指定 

                            </label>

                            <div class="col-xs-4">
                                <input name="business" type="radio" value="all" onclick="$.fn.radioButtonSelectionChanged('business', 'business')"/><span> なし</span>
                                <input name="business" type="radio" value="business" onclick="$.fn.radioButtonSelectionChanged('business', 'business')"/><span> 選択</span>

                            </div>
                        </div>
                    <div class="col-xs-12">

                        <div class="form-group">
                            <label class="col-xs-1 no-padding"> 対象業務
                            </label>

                            <div class="col-xs-10 no-padding">
                                <input type="radio" name="target" value="all" onclick="$.fn.radioButtonSelectionChanged('target', 'targetId')"/><span> 定期供給・消費</span>
                                <input type="radio" name="target" value="target" onclick="$.fn.radioButtonSelectionChanged('target', 'targetId')"/><span> 再調査</span>
                                <input type="radio" name="target" value="target" onclick="$.fn.radioButtonSelectionChanged('target', 'targetId')"/><span> CO点検</span>
                                <input type="radio" name="target" value="target" onclick="$.fn.radioButtonSelectionChanged('target', 'targetId')"/><span> 埋設管</span>
                                <input type="radio" name="target" value="target" onclick="$.fn.radioButtonSelectionChanged('target', 'targetId')"/><span> 定期自首</span>
                                <input type="radio" name="target" value="target" onclick="$.fn.radioButtonSelectionChanged('target', 'targetId')"/><span> 本支管</span>
                                <input type="radio" name="target" value="target" onclick="$.fn.radioButtonSelectionChanged('target', 'targetId')"/><span> 消費機器</span>
                                <input type="radio" name="target" value="target" onclick="$.fn.radioButtonSelectionChanged('target', 'targetId')"/><span> 容器交換時等</span>
                            </div>


                        </div>
                    </div>

                    <div class="col-xs-12">
                        <div class="form-group">

                            <label class="col-xs-1 no-padding"> 消費者コード


                            </label>

                            <div class="col-xs-2">
                                <div class="form-group">
                                    <input class="form-control" id="consumer_3CodeStart" name="consumer_3CodeStart"
                                           placeholder="0" type="text" value="" onchange="$.fn.onInputValueChange('consumer_3CodeStart', 'consumer_3Code')"/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">~</div>
                            <div class="col-xs-2">
                                <div class="form-group">
                                    <input class="form-control" id="consumer_3Code" name="consumer_3Code"
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
                                <input type="radio" name="targetLow" value="all" onclick="$.fn.radioButtonSelectionChanged('targetLow', 'targetLowId')"/><span> 全て</span>
                                <input type="radio" name="targetLow" value="targetLow" onclick="$.fn.radioButtonSelectionChanged('targetLow', 'targetLowId')"/><span> 液石法</span>
                                <input type="radio" name="targetLow" value="targetLow" onclick="$.fn.radioButtonSelectionChanged('targetLow', 'targetLowId')"/><span> 高圧法</span>
                                <input type="radio" name="targetLow" value="targetLow" onclick="$.fn.radioButtonSelectionChanged('targetLow', 'targetLowId')"/><span> ガス事業法</span>
                            </div>

                        </div>
                    </div>

                    <div class="col-xs-12">
                        <div class="form-group">

                            <label class="col-xs-1 no-padding"> 帳票タイプ
                            </label>

                            <div class="col-xs-4">
                                <div class="form-group">
                                    <select name="" id="" class="form-control">
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
                                <input type="radio" name="pages" value="all" onclick="$.fn.radioButtonSelectionChanged('pages', 'pagesId')"/><span> 全て</span>
                            </div>
                            <div class="col-xs-1">
                                <input type="radio" name="pages" value="pages" onclick="$.fn.radioButtonSelectionChanged('pages', 'pagesId')"/><span> 指定</span>
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






                <div class="col-xs-12 border1 no-padding bottom-box">

                        <p class="backend"> 出力指定

                        </p>

                        <div class="col-xs-12">
                            <div class="form-group">

                                <label class="col-xs-1 no-padding"> 並び順1
                                </label>

                                <div class="col-xs-2">
                                    <input type="radio" name="order" value="all" onclick="$.fn.radioButtonSelectionChanged('order', 'orderId')"/><span> 営業所・販売店</span>
                                </div>

                                <div class="col-xs-2">
                                    <input type="radio" name="order" value="order" onclick="$.fn.radioButtonSelectionChanged('order', 'orderId')"/><span> なし</span>
                                </div>

                            </div>
                        </div>
                    <div class="col-xs-12">
                        <div class="form-group">

                            <label class="col-xs-1 no-padding"> 並び順2
                            </label>

                            <div class="col-xs-2">
                                <input type="radio" name="order_2" value="all" onclick="$.fn.radioButtonSelectionChanged('order_2', 'order_2Id')"/><span> 地区</span>
                            </div>

                            <div class="col-xs-2">
                                <input type="radio" name="order_2" value="order_2" onclick="$.fn.radioButtonSelectionChanged('order_2', 'order_2Id')"/><span> 営業担当者</span>
                            </div>

                            <div class="col-xs-2">
                                <input type="radio" name="order_2" value="order_2" onclick="$.fn.radioButtonSelectionChanged('order_2', 'order_2Id')"/><span> 調査員</span>
                            </div>

                            <div class="col-xs-2">
                                <input type="radio" name="order_2" value="order_2" onclick="$.fn.radioButtonSelectionChanged('order_2', 'order_2Id')"/><span> 調査員（特殊）</span>
                            </div>

                            <div class="col-xs-2">
                                <input type="radio" name="order_2" value="order_2" onclick="$.fn.radioButtonSelectionChanged('order_2', 'order_2Id')"/><span> なし<span></span></span>
                            </div>

                        </div>
                    </div>

                    <div class="col-xs-12">

                        <div class="form-group">

                            <label class="col-xs-1 no-padding"> 並び順3

                            </label>

                            <div class="col-xs-2">
                                <input type="radio" name="order_3" value="all" onclick="$.fn.radioButtonSelectionChanged('order_3', 'order_3Id')"/><span> 消費者コード順</span>
                            </div>

                            <div class="col-xs-2">
                                <input type="radio" name="order_3" value="order_3" onclick="$.fn.radioButtonSelectionChanged('order_3', 'order_3Id')"/><span> 検針順路順</span>
                            </div>

                            <div class="col-xs-2">
                                <input type="radio" name="order_3" value="order_3" onclick="$.fn.radioButtonSelectionChanged('order_3', 'order_3Id')"/><span> 検索名順</span>
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
</div>

</body>

</html>