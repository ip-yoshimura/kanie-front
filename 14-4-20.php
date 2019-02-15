<?php
include "header.php"
?>
<?php
include "sidebar.php"
?>
<div class="col-md-10 col-xs-8 col-xs-12 no-padding">

    <div class="col-md-12 col-xs-12 no-padding body-background">

        <div class="head-p ">
            <p>消費設備配管期限管理帳票印刷指定
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
                        <div class="col-xs-1 no-padding">
                            <input name="officeSeletion" id="officeSeletion" type="radio" value="all" checked onclick="$.fn.radioButtonSelectionChanged('officeSeletion', 'officeSeletionId')"> <span>全て</span>
                        </div>
                        <div class="col-xs-1 no-padding">
                            <input name="officeSeletion" id="officeSeletion" type="radio" value="directSales"  onclick="$.fn.radioButtonSelectionChanged('officeSeletion', 'officeSeletionId')"> <span>選択</span>
                        </div>

                    </div>
                   <div id="officeSeletionId">
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
                        <div class="col-xs-1 no-padding">
                            <input name="otherSelection" id="otherSelection" type="radio" value="all" checked onclick="$.fn.radioButtonSelectionChanged('otherSelection', 'otherSelectionId')"> <span>全て</span>


                        </div>
                        <div class="col-xs-1 no-padding">
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
                            <p>出力区分</p>
                        </div>
                        <div class="col-xs-1 no-padding">
                            <input name="outputSelection" id="outputSelection" type="radio" value="all" checked onclick="$.fn.radioButtonSelectionChanged('outputSelection', 'outputSelectionId')"> <span>全て</span>


                        </div>
                        <div class="col-xs-1">
                            <input name="outputSelection" id="outputSelection" type="radio" value="directSales"  onclick="$.fn.radioButtonSelectionChanged('outputSelection', 'outputSelectionId')"> <span>地区</span>


                        </div>
                        <div class="col-xs-1 no-padding">
                            <input name="outputSelection" id="outputSelection" type="radio" value="salesOutlet"  onclick="$.fn.radioButtonSelectionChanged('outputSelection', 'outputSelectionId')"> <span>営業担当者</span>


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
                    <div class="col-xs-1 no-padding">
                        <p>消費者コード</p>
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
                                   type="text" value="" onchange="$.fn.onInputValueChange('consumeCodeEnd', 'consumerCodeEndName')"/>
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
                            <input class="form-control" id="consumerCodeEndName" name="consumerCodeEndName"
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
            </div>
            <div class="col-xs-12 border1 no-padding">
                <p class="backend">作成範囲指定 </p>
                <div class="col-xs-12">
                    <div class="form-group">

                        <label class="col-xs-1 no-padding"> 圧力

                        </label>

                        <div class="col-xs-10 no-padding">
                            <input type="radio" name="distinguish" id="distinguish" value="all" onclick="$.fn.radioButtonSelectionChanged('distinguish', 'distinguishId')"/> <span>全て</span>
                            <input type="radio" name="distinguish" id="distinguish" value="distinguish" onclick="$.fn.radioButtonSelectionChanged('distinguish', 'distinguishId')"/> <span>高圧</span>
                            <input type="radio" name="distinguish" id="distinguish" value="distinguish" onclick="$.fn.radioButtonSelectionChanged('distinguish', 'distinguishId')"/> <span>中圧</span>
                            <input type="radio" name="distinguish" id="distinguish" value="distinguish" onclick="$.fn.radioButtonSelectionChanged('distinguish', 'distinguishId')"/> <span>低圧</span>

                        </div>
                    </div>
                </div>

                <div class="col-xs-12">

                    <div class="form-group">
                        <label class="col-xs-1 no-padding"> 種別
                        </label>

                        <div class="col-xs-10 no-padding">
                            <input type="radio" name="classicSelection" id="classicSelection" value="all" checked onclick="$.fn.radioButtonSelectionChanged('classicSelection', 'classicSelectionId')"/> <span>全て</span>
                            <input type="radio" name="classicSelection" id="classicSelection" value="classicSelection"  onclick="$.fn.radioButtonSelectionChanged('classicSelection', 'classicSelectionId')"/> <span>種別指定</span>
                        </div>

                        <div id="classicSelectionId">
                        <div class="col-xs-2">
                            <div class="form-group">
                                <input class="form-control" id="consumer5CodeStart" name="consumer5CodeStart"
                                       placeholder="0" type="text" value="" disabled onchange="$.fn.onInputValueChange('consumer5CodeStart', 'consumer5CodeStartName')"/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">~</div>
                        <div class="col-xs-2">
                            <div class="form-group">
                                <input class="form-control" id="consume5CodeEnd" name="consume5CodeEnd"
                                       placeholder="z"
                                       type="text" value="" disabled onchange="$.fn.onInputValueChange('consume5CodeEnd', 'consumer5CodeEndName')"/>
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input class="form-control" id="consumer5CodeStartName"
                                       name="consumer5CodeStartName"
                                       type="text" value="" disabled/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">~</div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input class="form-control" id="consumer5CodeEndName" name="consumer5CodeEndName"
                                       type="text" value="" disabled/>
                            </div>
                        </div>
                        </div>

                    </div>
                </div>

                <div class="col-xs-12">
                    <div class="form-group">

                        <label class="col-xs-1 no-padding"> 設置年月</label>
                        <div class="col-xs-2">
                            <div class="form-group">
                                <input class="form-control" id="consumer7CodeStart" name="consumer7CodeStart"
                                       type="date" value=""  onchange="$.fn.onInputValueChange('consumer7CodeStart', 'consume7CodeEnd')"/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">~</div>
                        <div class="col-xs-2">
                            <div class="form-group">
                                <input class="form-control" id="consume7CodeEnd" name="consume7CodeEnd"
                                       type="date" value=""/>
                            </div>
                        </div>
                        <label class="col-xs-1 no-padding"> 交換期限</label>
                        <div class="col-xs-2">
                            <div class="form-group">
                                <input class="form-control" id="consumer9CodeStart" name="consumer9CodeStart"
                                       type="date" value=""  onchange="$.fn.onInputValueChange('consumer9CodeStart', 'consumer9CodeEnd')"/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">~</div>
                        <div class="col-xs-2">
                            <div class="form-group">
                                <input class="form-control" id="consumer9CodeEnd" name="consumer9CodeEnd"
                                       type="date" value=""/>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-xs-12">
                    <div class="form-group">

                        <label class="col-xs-1 no-padding"> 対象法律
                        </label>

                        <div class="col-xs-1 no-padding">
                            <input type="radio" name="law" id="law" value="all" onclick="$.fn.radioButtonSelectionChanged('law', 'lawId')"/> <span>全て</span>
                        </div>

                        <div class="col-xs-1 no-padding">
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
                <p class="backend">出力指定 </p>
                <div class="col-xs-12">
                    <div class="form-group">

                        <div class="col-xs-12 no-padding">
                                <label class="col-xs-1 no-padding"> 出力帳票
                                </label>

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
                            <input type="radio" name="pagebreak" id="pagebreak" value="pagebreak" onclick="$.fn.radioButtonSelectionChanged('pagebreak', 'pagebreakId')"/> <span>なし</span>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12">

                    <div class="form-group">

                        <label class="col-xs-1 no-padding"> 並び順

                        </label>

                        <div class="col-xs-2">
                            <input type="radio" name="sortby" id="sortby" value="all" onclick="$.fn.radioButtonSelectionChanged('sortby', 'sortbyId')"/> <span>消費者コード順</span>
                        </div>

                        <div class="col-xs-2">
                            <input type="radio" name="sortby" id="sortby" value="sortby" onclick="$.fn.radioButtonSelectionChanged('sortby', 'sortbyId')"/> <span>検針順路順</span>
                        </div>

                        <div class="col-xs-2">
                            <input type="radio" name="sortby" id="sortby" value="sortby" onclick="$.fn.radioButtonSelectionChanged('sortby', 'sortbyId')"/> <span>検索名順</span>
                        </div>

                        <div class="col-xs-2">
                            <input type="radio" name="sortby" id="sortby" value="sortby" onclick="$.fn.radioButtonSelectionChanged('sortby', 'sortbyId')"/> <span>交換期限順</span>
                        </div>

                    </div>
                </div>

                <div class="col-xs-12">
                    <div class="form-group">

                        <label class="col-xs-1 no-padding"> 出力先
                        </label>

                        <div class="col-xs-2">
                            <input type="radio" name="out" id="out" value="all" onclick="$.fn.radioButtonSelectionChanged('out', 'outId')"/> <span>プリンタ(印刷)</span>
                        </div>

                        <div class="col-xs-2 no-padding">
                            <input type="radio" name="out" id="out" value="out" onclick="$.fn.radioButtonSelectionChanged('out', 'outId')"/> <span>画面(印刷イメージ)</span>
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
