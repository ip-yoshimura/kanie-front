<?php
include "header.php"
?>
<?php
include "sidebar.php"
?>
<div class="col-md-10 col-xs-8 col-xs-12 no-padding">

    <div class="col-md-12 col-xs-12 no-padding body-background">

        <div class="head-p ">
            <p>メータ交換入力印刷指定
            </p>
        </div>
        <form id="meter" action="/gas/meter-reading" method="POST">

            <div class="col-xs-12 border1 no-padding">

                <p class="back-end">消費者範囲指定</p>

                <div class="col-xs-12">
                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-2 no-padding">
                            <p>営業所コード</p>
                        </div>
                        <div class="col-xs-1">
                            <input type="radio" name="officeSelection" id="officeSelection" value="all" checked onclick="$.fn.radioButtonSelectionChanged('officeSelection', 'officeSelectionId')"> 全て
                        </div>
                        <div class="col-xs-1">
                            <input type="radio" name="officeSelection" id="officeSelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('officeSelection', 'officeSelectionId')"> 選択
                        </div>

                    </div>
                    <div id="officeSelectionId">
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-1 col-xs-offset-2">
                                <div class="form-group">
                                    <input id="officeCodeStartId" name="officeCodeStartId" placeholder="000"
                                    class="form-control" type="text" value="" disabled onchange="$.fn.onInputValueChange('officeCodeStartId', 'officeCodeStartName')"/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">～</div>
                            <div class="col-xs-1">
                                <div class="form-group">
                                    <input id="companyIdEndId" name="companyIdEndId" placeholder="999" class="form-control"
                                    type="text" value="" disabled onchange="$.fn.onInputValueChange('companyIdEndId', 'companyIdEndName')"/>
                                </div>
                            </div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input id="officeCodeStartName" name="officeCodeStartName" class="form-control" type="text"
                                           value="" disabled/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">～</div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input id="companyIdEndName" name="companyIdEndName" class="form-control" type="text"
                                           value="" disabled/>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
                <div class="col-xs-12">
                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-2 no-padding">
                            <p>受託区分</p>
                        </div>
                        <div class="col-xs-1">
                            <input type="radio" name="trustSelection" id="trustSelection" value="all" checked onclick="$.fn.radioButtonSelectionChanged('trustSelection', 'trustSelectionId')"> 全て


                        </div>
                        <div class="col-xs-1">
                            <input type="radio" name="trustSelection" id="trustSelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('trustSelection', 'trustSelectionId')">  直売

                        </div>
                        <div class="col-xs-2">
                            <input type="radio" name="trustSelection" id="trustSelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('trustSelection', 'trustSelectionId')"> 販売店


                        </div>
                    </div>

                    <div id="trustSelectionId">
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-1 col-xs-offset-2">
                                <div class="form-group">
                                    <input id="trustStartId" name="trustStartId" placeholder="000" class="form-control"
                                    type="text" value="" disabled onchange="$.fn.onInputValueChange('trustStartId', 'trustStartName')"/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">～</div>
                            <div class="col-xs-1">
                                <div class="form-group">
                                    <input id="trustEndId" name="trustEndId" placeholder="999" class="form-control"
                                    type="text" value="" disabled onchange="$.fn.onInputValueChange('trustEndId', 'trustEndName')"/>
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


                <div class="col-xs-12">
                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-2 no-padding">
                            <p>出力区分

                            </p>
                        </div>
                        <div class="col-xs-1">
                            <input type="radio" name="outputSegment" id="outputSegment" value="all" checked onclick="$.fn.radioButtonSelectionChanged('outputSegment', 'outputSegmentId')"> 全て
                        </div>
                        <div class="col-xs-1">
                            <input type="radio" name="outputSegment" id="outputSegment" value="custom" onclick="$.fn.radioButtonSelectionChanged('outputSegment', 'outputSegmentId')"> 地区
                        </div>
                        <div class="col-xs-2">
                            <input type="radio" name="outputSegment" id="outputSegment" value="custom" onclick="$.fn.radioButtonSelectionChanged('outputSegment', 'outputSegmentId')"> 営業担当者
                        </div>
                        <div class="col-xs-2 ml-n-60">
                            <input type="radio" name="outputSegment" id="outputSegment" value="custom" onclick="$.fn.radioButtonSelectionChanged('outputSegment', 'outputSegmentId')"> 工事担当者
                        </div>

                    </div>
                    <div id="outputSegmentId">
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-1 col-xs-offset-2">
                                <div class="form-group">
                                    <input id="outputSegmentStartId" name="outputSegmentStartId" placeholder="000"
                                           class="form-control" type="text" value="" disabled onchange="$.fn.onInputValueChange('outputSegmentStartId', 'outputSegmentStartName')"/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">～</div>
                            <div class="col-xs-1">
                                <div class="form-group">
                                    <input id="outputSegmentEndId" name="outputSegmentEndId" placeholder="999" class="form-control"
                                           type="text" value="" disabled onchange="$.fn.onInputValueChange('outputSegmentEndId', 'outputSegmentEndName')"/>
                                </div>
                            </div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input id="outputSegmentStartName" name="outputSegmentStartName" class="form-control" type="text"
                                           value="" disabled/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">～</div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input id="outputSegmentEndName" name="outputSegmentEndName" class="form-control" type="text"
                                           value="" disabled/>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>

                <div class="col-xs-12">
                    <div class="col-xs-2 no-padding border-margin-exp">
                        <p>消費者コード</p>
                    </div>
                    <div class="col-xs-2">
                        <div class="form-group">
                            <input id="consumerCodeStart" name="consumerCodeStart" placeholder="0"
                                   class="form-control" type="text" value="" onchange="$.fn.onInputValueChange('consumerCodeStart', 'consumerCodeStartName')"/>
                        </div>
                    </div>
                    <div class="col-xs-1 no-padding ratio">～</div>
                    <div class="col-xs-2">
                        <div class="form-group">
                            <input id="consumeCodeEnd" name="consumeCodeEnd" placeholder="z" class="form-control"
                                   type="text" value="" onchange="$.fn.onInputValueChange('consumeCodeEnd', 'consumerCodeEndName')"/>
                        </div>
                    </div>
                    <div class="col-xs-2">
                        <div class="form-group">
                            <input id="consumerCodeStartName" name="consumerCodeStartName" class="form-control"
                                   type="text" value=""/>
                        </div>
                    </div>
                    <div class="col-xs-1 no-padding ratio">～</div>
                    <div class="col-xs-2">
                        <div class="form-group">
                            <input id="consumerCodeEndName" name="consumerCodeEndName" class="form-control"
                                   type="text" value=""/>
                        </div>
                    </div>
                </div>


            </div>

            <div class="col-xs-12 border1 no-padding">

                <p class="back-end">作成範囲指定</p>
                <div class="col-xs-12">

                    <div class="form-group">

                        <label class="col-xs-2 no-padding border-margin-exp">メータ交換日</label>

                        <div class="col-xs-2">
                            <div class="form-group">
                                <input id="consumerCodeEndName" name="consumerCodeEndName" class="form-control"
                                       type="date" value=""/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">～</div>
                        <div class="col-xs-2">
                            <div class="form-group">
                                <input id="consumerCodeEndName" name="consumerCodeEndName" class="form-control"
                                       type="date" value=""/>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-xs-12 border1 no-padding bottom-box">

                <p class="back-end">出力指定</p>
                <div class="col-xs-12">
                    <div class="form-group">

                        <label class="col-xs-2 no-padding"> 改ページ指定
                        </label>
                        <div class="col-xs-10">
                            <div class="col-xs-3">
                                <input type="radio" name="pageBreak" id="pageBreak" value="all" onclick="$.fn.radioButtonSelectionChanged('pageBreak', 'pageBreakId')"/>営業所・販売店
                            </div>

                            <div class="col-xs-3 ml-n-30">
                                <input type="radio" name="pageBreak" id="pageBreak" value="custom" onclick="$.fn.radioButtonSelectionChanged('pageBreak', 'pageBreakId')"/>地区
                            </div>

                            <div class="col-xs-2 ml-n-90">
                                <input type="radio" name="pageBreak" id="pageBreak" value="custom" onclick="$.fn.radioButtonSelectionChanged('pageBreak', 'pageBreakId')"/> 営業担当者
                            </div>
                            <div class="col-xs-2">
                                <input type="radio" name="pageBreak" id="pageBreak" value="custom" onclick="$.fn.radioButtonSelectionChanged('pageBreak', 'pageBreakId')"/> 工事担当者
                            </div>
                            <div class="col-xs-2">
                                <input type="radio" name="pageBreak" id="pageBreak" value="custom" onclick="$.fn.radioButtonSelectionChanged('pageBreak', 'pageBreakId')"/> なし
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-xs-12">

                    <div class="form-group">
                        <label class="col-xs-2 no-padding">並び順
                        </label>
                        <div class="col-xs-10">
                            <div class="col-xs-3">
                                <input type="radio" name="sortBySelection" id="sortBySelection" value="all" onclick="$.fn.radioButtonSelectionChanged('sortBySelection', 'sortBySelectionId')"/> 消費者コード順
                            </div>

                            <div class="col-xs-3 ml-n-30">
                                <input type="radio" name="sortBySelection" id="sortBySelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('sortBySelection', 'sortBySelectionId')"/>検針順路順
                            </div>
                            <div class="col-xs-3 ml-n-90">
                                <input type="radio" name="sortBySelection" id="sortBySelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('sortBySelection', 'sortBySelectionId')"/>検索名順
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-xs-12">

                    <div class="form-group">
                        <label class="col-xs-2 no-padding">出力先
                        </label>
                        <div class="col-xs-10">
                            <div class="col-xs-3">
                                <input type="radio" name="outputDestination" id="outputDestination" value="all" onclick="$.fn.radioButtonSelectionChanged('outputDestination', 'outputDestinationId')"/> プリンタ(印刷)
                            </div>

                            <div class="col-xs-3 ml-n-30">
                                <input type="radio" name="outputDestination" id="outputDestination" value="custom" onclick="$.fn.radioButtonSelectionChanged('outputDestination', 'outputDestinationId')"/>画面(印刷イメージ)
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
