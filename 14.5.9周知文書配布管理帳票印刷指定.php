<?php
include "header.php"
?>
<?php
include "sidebar.php"
?>
<div class="col-md-10 col-xs-8 col-xs-12 no-padding">

    <div class="col-md-12 col-xs-12 no-padding body-background">

        <div class="head-p">
            <p>改善状況帳票印刷指定

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
                                    <input name="otherSelection" id="otherSelection" type="radio" value="directSales"  onclick="$.fn.radioButtonSelectionChanged('otherSelection', 'otherSelectionId')"> <span>自社</span>


                                </div>
                                <div class="col-xs-1">
                                    <input name="otherSelection" id="otherSelection" type="radio" value="salesOutlet"  onclick="$.fn.radioButtonSelectionChanged('otherSelection', 'otherSelectionId')"> <span>他社</span>


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
                                               type="text" value="" disabled onchange="$.fn.onInputValueChange('otherEndId', 'otherEndName')" onchange="$.fn.onInputValueChange('output2StartId', 'output2StartName')"/>
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
                                    <input name="out3Selection" id="out3Selection" type="radio" value="all" checked onclick="$.fn.radioButtonSelectionChanged('out3Selection', 'out3SelectionId')"> <span>全て</span>


                                </div>
                                <div class="col-xs-1">
                                    <input name="out3Selection" id="out3Selection" type="radio" value="directSales" onclick="$.fn.radioButtonSelectionChanged('out3Selection', 'out3SelectionId')"> <span>地区</span>


                                </div>
                                <div class="col-xs-2">
                                    <input name="out3Selection" id="out3Selection" type="radio" value="salesOutlet" onclick="$.fn.radioButtonSelectionChanged('out3Selection', 'out3SelectionId')"> <span>営業担当者</span>


                                </div>

                            </div>
                           <div id="out3SelectionId">
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
                            <div class="col-xs-12 no-padding">
                                <div class="col-xs-1 no-padding">
                                    <p>出力区分2</p>
                                </div>
                                <div class="col-xs-1">
                                    <input name="out4Selection" id="out4Selection" type="radio" value="all" checked onclick="$.fn.radioButtonSelectionChanged('out4Selection', 'out4SelectionId')"> <span>全て</span>
                                </div>
                                <div class="col-xs-1 no-padding">
                                    <input name="out4Selection" id="out4Selection" type="radio" value="directSales" onclick="$.fn.radioButtonSelectionChanged('out4Selection', 'out4SelectionId')"> <span>保安機関</span>
                                </div>

                            </div>
                            <div id="out4SelectionId">
                            <div class="col-xs-12 no-padding">
                                <div class="col-xs-1 col-xs-offset-1">
                                    <div class="form-group">
                                        <input class="form-control" id="out4StartId" name="out4StartId"
                                               placeholder="000" type="text" value="" disabled onchange="$.fn.onInputValueChange('out4StartId', 'out4StartName')"/>
                                    </div>
                                </div>
                                <div class="col-xs-1 no-padding ratio">~</div>
                                <div class="col-xs-1">
                                    <div class="form-group">
                                        <input class="form-control" id="out4EndId" name="out4EndId"
                                               placeholder="999"
                                               type="text" value="" disabled onchange="$.fn.onInputValueChange('out4EndId', 'out4EndName')" onchange="$.fn.onInputValueChange('output2StartId', 'output2StartName')"/>
                                    </div>
                                </div>
                                <div class="col-xs-3">
                                    <div class="form-group">
                                        <input class="form-control" id="out4StartName" name="out4StartName"
                                               type="text"
                                               value="" disabled/>
                                    </div>
                                </div>
                                <div class="col-xs-1 no-padding ratio">~</div>
                                <div class="col-xs-3">
                                    <div class="form-group">
                                        <input class="form-control" id="out4EndName" name="out4EndName" type="text"
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
                                    <input class="form-control" id="con3CodeStart" name="con3CodeStart"
                                           placeholder="0" type="text" value=""  onchange="$.fn.onInputValueChange('con3CodeStart', 'con3CodeEnd')"/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">~</div>
                            <div class="col-xs-2">
                                <div class="form-group">
                                    <input class="form-control" id="con3CodeEnd" name="con3CodeEnd"
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
                                    <input class="form-control" id="consumer4CodeStart" name="consumer4CodeStart"
                                           placeholder="0" type="text" value=""  onchange="$.fn.onInputValueChange('consumer4CodeStart', 'consume4CodeEnd')"/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">~</div>
                            <div class="col-xs-2">
                                <div class="form-group">
                                    <input class="form-control" id="consume4CodeEnd" name="consume4CodeEnd"
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
                        <p class="backend">作成範囲指定</p>
                        <div class="col-xs-12">

                            <div class="form-group">

                                <label class="col-xs-1 no-padding"> 周知内容

                                </label>

                                <div class="col-xs-1">
                                    <input type="radio" name="content" id="content" value="all" onclick="$.fn.radioButtonSelectionChanged('content', 'contentId')"/> <span>全て</span>
                                </div>
                                <div class="col-xs-1 no-padding">
                                    <input type="radio" name="content" id="content" value="content" onclick="$.fn.radioButtonSelectionChanged('content', 'contentId')"/> <span>一般家庭用</span>
                                </div>
                                <div class="col-xs-1">
                                    <input type="radio" name="content" id="content" value="content" onclick="$.fn.radioButtonSelectionChanged('content', 'contentId')"/> <span>業務用</span>
                                </div>
                                <div class="col-xs-1 no-padding">
                                    <input type="radio" name="content" id="content" value="content" onclick="$.fn.radioButtonSelectionChanged('content', 'contentId')"/> <span>質量販売用</span>
                                </div>

                                <div class="col-xs-1 no-padding">
                                    <input type="radio" name="content" id="content" value="content" onclick="$.fn.radioButtonSelectionChanged('content', 'contentId')"/> <span>外国語用</span>
                                </div>

                                <div class="col-xs-2 no-padding">
                                    <input type="radio" name="content" id="content" value="content" onclick="$.fn.radioButtonSelectionChanged('content', 'contentId')"/> <span>工業用（高圧法）</span>
                                </div>

                                <div class="col-xs-2 no-padding">
                                    <input type="radio" name="content" id="content" value="content" onclick="$.fn.radioButtonSelectionChanged('content', 'contentId')"/> <span>一般用（ガス事業法）</span>
                                </div>

                            </div>
                        </div>


                        <div class="col-xs-12">

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
                        <div class="col-xs-12">

                            <div class="form-group">
                                <label class="col-xs-1 no-padding"> 期限不明
                                </label>

                                <div class="col-xs-1">
                                    <input type="radio" name="unknown" id="unknown" value="all" onclick="$.fn.radioButtonSelectionChanged('unknown', 'unknownId')"/> <span>含む</span>
                                </div>

                                <div class="col-xs-1">
                                    <input type="radio" name="unknown" id="unknown" value="unknown" onclick="$.fn.radioButtonSelectionChanged('unknown', 'unknownId')"/> <span>除く</span>
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
                                <div class="col-xs-1 no-padding">
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
                                    <div class="col-xs-1">
                                        <input type="radio" name="form" id="form" value="form" onclick="$.fn.radioButtonSelectionChanged('form', 'formId')"/> <span>集計表</span>
                                    </div>


                                </div>

                            </div>

                        </div>

                        <div class="col-xs-12">
                            <div class="form-group">

                                <label class="col-xs-1 no-padding"> 改ページ指定
                                </label>

                                <div class="col-xs-2 ">
                                    <input type="radio" name="page" id="page" value="all" onclick="$.fn.radioButtonSelectionChanged('page', 'pageId')"/> <span>営業所・販売店</span>
                                </div>

                                <div class="col-xs-1 no-padding">
                                    <input type="radio" name="page" id="page" value="page" onclick="$.fn.radioButtonSelectionChanged('page', 'pageId')"/> <span>地区</span>
                                </div>

                                <div class="col-xs-2 no-padding">
                                    <input type="radio" name="page" id="page" value="page" onclick="$.fn.radioButtonSelectionChanged('page', 'pageId')"/> <span>営業担当者</span>
                                </div>

                                <div class="col-xs-2">
                                    <input type="radio" name="page" id="page" value="page" onclick="$.fn.radioButtonSelectionChanged('page', 'pageId')"/> <span>なし</span>
                                </div>

                            </div>
                        </div>

                        <div class="col-xs-12">

                            <div class="form-group">

                                <label class="col-xs-1 no-padding"> 並び順

                                </label>

                                <div class="col-xs-2">
                                    <input type="radio" name="sortby" id="sortby" value="all" onclick="$.fn.radioButtonSelectionChanged('sortby', 'sortbyId')"/>  <span>消費者コード順</span>
                                </div>

                                <div class="col-xs-2 no-padding">
                                    <input type="radio" name="sortby" id="sortby" value="sortby" onclick="$.fn.radioButtonSelectionChanged('sortby', 'sortbyId')"/> <span>検針順路順</span>
                                </div>

                                <div class="col-xs-2">
                                    <input type="radio" name="sortby" id="sortby" value="sortby" onclick="$.fn.radioButtonSelectionChanged('sortby', 'sortbyId')"/> <span>検索名順</span>
                                </div>

                                <div class="col-xs-2">
                                    <input type="radio" name="sortby" id="sortby" value="sortby" onclick="$.fn.radioButtonSelectionChanged('sortby', 'sortbyId')"/>  <span>次回期限順</span>
                                </div>


                            </div>
                        </div>

                        <div class="col-xs-12">

                            <div class="form-group">

                                <label class="col-xs-1 no-padding"> 出力先

                                </label>

                                <div class="col-xs-2">
                                    <input type="radio" name="output" id="output" value="all" onclick="$.fn.radioButtonSelectionChanged('output', 'outputId')"/> <span>プリンタ（印刷）</span>
                                </div>

                                <div class="col-xs-2 no-padding">
                                    <input type="radio" name="output" id="output" value="output" onclick="$.fn.radioButtonSelectionChanged('output', 'outputId')"/> <span>画面（印刷イメージ）</span>
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