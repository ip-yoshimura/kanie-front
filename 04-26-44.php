<?php
include "header.php"
?>
<?php
include "sidebar.php"
?>
<div class="col-xs-10 col-md-10  no-padding">

    <div class="col-md-12 col-xs-12 no-padding body-background">
        <div class="head-p">
            <p>集金予定一覧表印刷指定</p>
        </div>

        <form id="meter" action="/gas/meter-reading" method="POST">
            <div class="col-xs-12 border1 no-padding">
                <p class="backend">
                    消費者範囲指定</p>
                <div class="col-xs-12">
                    <div class="col-xs-1 no-padding">
                        <p>営業所コード</p>
                    </div>
                    <div class="col-xs-1   ">
                        <input type="radio" name="officeCodeSelection" id="officeCodeSelection" value="all" checked onclick="$.fn.radioButtonSelectionChanged('officeCodeSelection', 'officeCodeSelectionId')"> <span>全て</span>
                    </div>
                    <div class="col-xs-1  no-padding">
                        <input type="radio" name="officeCodeSelection" id="officeCodeSelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('officeCodeSelection', 'officeCodeSelectionId')">  <span>選択</span>
                    </div>
                </div>
                <div id="officeCodeSelectionId">
                    <div class="col-xs-12">

                        <div class="col-xs-1 col-lg-offset-1  ">
                            <div class="form-group ">
                                <input id="officeCodeStartId" name="officeCodeStartId" placeholder="000" class="form-control" type="text" value="" disabled onchange="$.fn.onInputValueChange('officeCodeStartId', 'officeCodeStartName')"/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">~</div>
                        <div class="col-xs-1   ">
                            <div class="form-group">
                                <input id="companyIdEndId" name="companyIdEndId" placeholder="999" class="form-control" type="text" value="" disabled onchange="$.fn.onInputValueChange('companyIdEndId', 'companyIdEndName')"/>
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input id="officeCodeStartName" name="officeCodeStartName" placeholder="Company 1" class="form-control" type="text" value="" disabled/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">~</div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input id="companyIdEndName" name="companyIdEndName" placeholder="Company 2" class="form-control" type="text" value="" disabled/>
                            </div>
                        </div>
                    </div>
                </div>
             
                <div class="col-xs-12 no-padding">
                    <div class="col-xs-12  ">
                        <div class="col-xs-1 no-padding">
                            <p>受託区分</p>
                        </div>
                        <div class="col-xs-1  ">
                            <input type="radio" name="trustSelection" id="trustSelection" value="all" checked onclick="$.fn.radioButtonSelectionChanged('trustSelection', 'trustSelectionId')"> <span>全て</span>
                        </div>
                        <div class="col-xs-1">
                            <input type="radio" name="trustSelection" id="trustSelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('trustSelection', 'trustSelectionId')"> <span>直売</span>
                        </div>
                        <div class="col-xs-2">
                            <input type="radio" name="trustSelection" id="trustSelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('trustSelection', 'trustSelectionId')"> <span>販売店</span>
                        </div>
                    </div>
                    <div id="trustSelectionId">
                        <div class="col-xs-12  ">
                            <div class="col-xs-1 col-xs-offset-1">
                                <div class="form-group">
                                    <input id="trustStartId" name="trustStartId" placeholder="000" class="form-control" type="text" value="" disabled onchange="$.fn.onInputValueChange('trustStartId', 'trustStartName')"/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">~</div>
                            <div class="col-xs-1">
                                <div class="form-group">
                                    <input id="trustEndId" name="trustEndId" placeholder="999" class="form-control" type="text" value="" disabled onchange="$.fn.onInputValueChange('trustEndId', 'trustEndName')"/>
                                </div>
                            </div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input id="trustStartName" name="trustStartName" class="form-control" type="text" value="" disabled/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">~</div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input id="trustEndName" name="trustEndName" class="form-control" type="text" value="" disabled/>
                                </div>
                            </div>
                        </div>
                    </div>
                
                </div>

                <div class="col-xs-12  ">
                    <div class="col-xs-12 no-padding ">
                        <div class="col-xs-1 no-padding">
                            <p>出力区分</p>
                        </div>
                        <div class="col-xs-1  ">
                            <input type="radio" name="segmentSelection" id="segmentSelection" value="all" checked onclick="$.fn.radioButtonSelectionChanged('segmentSelection', 'segmentSelectionId')"> <span>全て</span>
                        </div>
                        <div class="col-xs-1">
                            <input type="radio" name="segmentSelection" id="segmentSelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('segmentSelection', 'segmentSelectionId')"><span> 地区</span>
                        </div>
                        <div class="col-xs-2">
                            <input type="radio" name="segmentSelection" id="segmentSelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('segmentSelection', 'segmentSelectionId')"><span> 集金担当者</span>
                        </div>
                    </div>
                    <div id="segmentSelectionId">
                        <div class="col-xs-12 no-padding ">
                            <div class="col-xs-12 no-padding ">
                                <div class="col-xs-1 col-xs-offset-1">
                                    <div class="form-group">
                                        <input id="segmentStartId" name="segmentStartId" placeholder="000" class="form-control" type="text" value="" disabled onchange="$.fn.onInputValueChange('segmentStartId', 'segmentStartName')"/>
                                    </div>
                                </div>
                                <div class="col-xs-1 no-padding ratio">~</div>
                                <div class="col-xs-1">
                                    <div class="form-group">
                                        <input id="segmentEndId" name="segmentEndId" placeholder="999" class="form-control" type="text" value="" disabled onchange="$.fn.onInputValueChange('segmentEndId', 'segmentEndName')"/>
                                    </div>
                                </div>
                                <div class="col-xs-3">
                                    <div class="form-group">
                                        <input id="segmentStartName" name="segmentStartName" class="form-control" type="text" value="" disabled/>
                                    </div>
                                </div>
                                <div class="col-xs-1 no-padding ratio">~</div>
                                <div class="col-xs-3">
                                    <div class="form-group">
                                        <input id="segmentEndName" name="segmentEndName" class="form-control" type="text" value="" disabled/>
                                    </div>
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
                            <input id="consumerCodeStart" name="consumerCodeStart" placeholder="0" class="form-control" type="text" value="" onchange="$.fn.onInputValueChange('consumerCodeStart', 'consumerCodeStartName')"/>
                        </div>
                    </div>
                    <div class="col-xs-1 no-padding ratio">~</div>
                    <div class="col-xs-2">
                        <div class="form-group">
                            <input id="consumeCodeEnd" name="consumeCodeEnd" placeholder="z" class="form-control" type="text" value="" onchange="$.fn.onInputValueChange('consumeCodeEnd', 'consumerCodeEndName')"/>
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <div class="form-group">
                            <input id="consumerCodeStartName" name="consumerCodeStartName" class="form-control" type="text" value=""/>
                        </div>
                    </div>
                    <div class="col-xs-1 no-padding ratio">~</div>
                    <div class="col-xs-3">
                        <div class="form-group">
                            <input id="consumerCodeEndName" name="consumerCodeEndName" class="form-control" type="text" value=""/>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 no-padding">
                <div class="col-xs-12 border1 no-padding">
                    <p class="backend">作成範囲指定</p>
                    <div class="form-group">
                        <label class="control-label col-xs-1  ">指定年月</label>
                        <div class="col-xs-2">
                            <input type="date" class="form-control"  />
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <label class="control-label col-xs-1 no-padding">集金予定日</label>
                        <div class="col-xs-1">
                            <input type="radio" name="ScheduledSelection" id="ScheduledSelection" value="all" onclick="$.fn.radioButtonSelectionChanged('ScheduledSelection', 'ScheduledSelectionId')"><span> 全て</span>
                        </div>
                        <div class="col-xs-1">
                            <input type="radio" name="ScheduledSelection" id="ScheduledSelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('ScheduledSelection', 'ScheduledSelectionId')"><span> 指定</span>
                        </div>
                        <div class="col-xs-1">
                            <input type="text" class="form-control" placeholder="3">
                        </div>

                        <div class="col-xs-1" style="margin-top:10px;">
                            日
                        </div>

                    </div>
                    <div class="col-xs-12 border-margin border-margin-bottom">
                        <label class="control-label col-xs-1 no-padding">集金区分</label>
                        <div class="col-xs-1">
                            <input type="radio" name="collectionSelection" id="collectionSelection" value="all" onclick="$.fn.radioButtonSelectionChanged('collectionSelection', 'collectionSelectionId')"><span> 全て</span>
                        </div>
                        <div class="col-xs-1">
                            <input type="radio" name="collectionSelection" id="collectionSelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('collectionSelection', 'collectionSelectionId')"><span> 現金</span>
                        </div>
                        <div class="col-xs-1">
                            <input type="radio" name="collectionSelection" id="collectionSelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('collectionSelection', 'collectionSelectionId')"><span> 振替</span>
                        </div>

                        <div class="col-xs-1">
                            <input type="radio" name="collectionSelection" id="collectionSelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('collectionSelection', 'collectionSelectionId')"><span> 振込</span>
                        </div>

                        <div class="col-xs-1 no-padding">
                            <input type="radio" name="collectionSelection" id="collectionSelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('collectionSelection', 'collectionSelectionId')"><span> コンビニ</span>
                        </div>
                        <div class="col-xs-1 no-padding">
                            <input type="radio" name="collectionSelection" id="collectionSelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('collectionSelection', 'collectionSelectionId')"><span> クレジット</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 no-padding bottom-box">
                <div class="col-xs-12 border1 no-padding">
                    <p class="backend">出力指定</p>

                    <div class="col-xs-12">
                        <div class="no-padding">
                            <div class="col-xs-1 no-padding">
                                <p>改ページ指定</p>
                            </div>
                            <div class="col-xs-2">
                                <input type="radio" name="pageSelection" id="pageSelection" value="all" onclick="$.fn.radioButtonSelectionChanged('pageSelection', 'pageSelectionId')"> <span>営業所・販売店</span>
                            </div>
                            <div class="col-xs-2">
                                <input type="radio" name="pageSelection" id="pageSelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('pageSelection', 'pageSelectionId')"> <span>地区</span>
                            </div>
                            <div class="col-xs-2">
                                <input type="radio" name="pageSelection" id="pageSelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('pageSelection', 'pageSelectionId')"> <span>集金担当者</span>
                            </div>
                            <div class="col-xs-2">
                                <input type="radio" name="pageSelection" id="pageSelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('pageSelection', 'pageSelectionId')"> <span>なし</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12">
                        <div class="no-padding">
                            <div class="col-xs-1 no-padding">
                                <p>並び順</p>
                            </div>
                            <div class="col-xs-2">
                                <input type="radio" name="sortBySelection" id="sortBySelection" value="all" onclick="$.fn.radioButtonSelectionChanged('sortBySelection', 'sortBySelectionId')"><span> 集金順路順</span>
                            </div>
                            <div class="col-xs-2">
                                <input type="radio" name="sortBySelection" id="sortBySelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('sortBySelection', 'sortBySelectionId')"><span> 消費者コード順</span>
                            </div>
                            <div class="col-xs-2 no-padding">
                                <input type="radio" name="sortBySelection" id="sortBySelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('sortBySelection', 'sortBySelectionId')"> <span> 検針順路順</span>
                            </div>
                            <div class="col-xs-2 no-padding">
                                <input type="radio" name="sortBySelection" id="sortBySelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('sortBySelection', 'sortBySelectionId')"> <span> 検索名順</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12">
                        <div class="no-padding">
                            <div class="col-xs-1 no-padding">
                                <p>出力先</p>
                            </div>
                            <div class="col-xs-2">
                                <input type="radio" name="destinationSelection" id="destinationSelection" value="all" onclick="$.fn.radioButtonSelectionChanged('destinationSelection', 'destinationSelectionId')"> <span>プリンタ(印刷)</span>
                            </div>
                            <div class="col-xs-4">
                                <input type="radio" name="destinationSelection" id="destinationSelection" value="all" onclick="$.fn.radioButtonSelectionChanged('destinationSelection', 'destinationSelectionId')"> <span>画面(印刷イメージ)</span>
                            </div>

                            <!--<div class="col-xs-2">
                                <input type="radio" name="all" value="all"> 検索名順
                            </div>-->
                            <!--<div class="col-xs-2">
                                <input type="radio" name="directSales" value="directSales"> 集金順路順
                            </div>-->
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
