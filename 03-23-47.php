<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<div class="col-xs-8 col-md-10 col-xs-12 no-padding">
    <div class="col-md-12 col-xs-12 no-padding body-background">
        <div class="head-p">
            <p>口座振替金額一覧表印刷指定</p>

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
                            <input name="directSales" id="directSales" type="radio" value="all" checked onclick="$.fn.radioButtonSelectionChanged('directSales', 'directSalesId')"> <span>全て</span>


                        </div>
                        <div class="col-xs-1">
                            <input name="directSales" id="directSales" type="radio" value="directSales" onclick="$.fn.radioButtonSelectionChanged('directSales', 'directSalesId')"> <span>選択</span>

                        </div>
                    </div>
                    <div id="directSalesId"><div class="col-xs-12 no-padding">
                        <div class="col-xs-1 col-xs-offset-1">
                            <div class="form-group">
                                <input class="form-control" id="trustStartId" name="trustStartId" placeholder="000"
                                       type="text" value=""disabled onchange="$.fn.onInputValueChange('trustStartId', 'trustStartName')"/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">~</div>
                        <div class="col-xs-1">
                            <div class="form-group">
                                <input class="form-control" id="trustEndId" name="trustEndId" placeholder="999"
                                       type="text" value=""disabled onchange="$.fn.onInputValueChange('trustEndId', 'trustEndName')"/>
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input class="form-control" id="trustStartName" name="trustStartName" type="text"
                                       value=""disabled/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">~</div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input class="form-control" id="trustEndName" name="trustEndName" type="text"
                                       value=""disabled/>
                            </div>
                        </div>
                    </div></div>
                </div>

                <div class="col-xs-12">
                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-1 no-padding">
                            <p>受託区分</p>
                        </div>
                        <div class="col-xs-1">
                            <input name="trusteeShipSelection" type="radio" value="all" checked onclick="$.fn.radioButtonSelectionChanged('trusteeShipSelection', 'trusteeShipSelectionId')"> <span>全て</span>

                        </div>
                        <div class="col-xs-1">
                            <input name="trusteeShipSelection" type="radio" value="custom" onclick="$.fn.radioButtonSelectionChanged('trusteeShipSelection', 'trusteeShipSelectionId')"> <span>直売</span>
                        </div>
                        <div class="col-xs-1">
                            <input name="trusteeShipSelection" type="radio" value="salesOutlet" onclick="$.fn.radioButtonSelectionChanged('trusteeShipSelection', 'trusteeShipSelectionId')"> <span>販売店</span>
                        </div>

                    </div>
                    <div id="trusteeShipSelectionId">
                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-1 col-xs-offset-1">
                            <div class="form-group">
                                <input class="form-control" id="trusteeShipStartId" name="trusteeShipStartId" placeholder="000"
                                       type="text" value="" disabled onchange="$.fn.onInputValueChange('trusteeShipStartId', 'trusteeShipStartName')" />
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">~</div>
                        <div class="col-xs-1">
                            <div class="form-group">
                                <input class="form-control" id="trusteeShipEndId" name="trusteeShipEndId" placeholder="999"
                                       type="text" value="" disabled onchange="$.fn.onInputValueChange('trusteeShipEndId', 'trusteeShipEndName')" />
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input class="form-control" id="trusteeShipStartName" name="trusteeShipStartName" type="text"
                                       value="" disabled/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">~</div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input class="form-control" id="trusteeShipEndName" name="trusteeShipEndName" type="text"
                                       value="" disabled/>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>


               <div id="">
               <div class="col-xs-12">
                    <div class="col-xs-1 no-padding">
                        <p>消費者コード </p>
                    </div>
                    <div class="col-xs-1 ">
                        <div class="form-group">
                            <input class="form-control" id="consumerCodeStartId" name="consumerCodeStartId"
                                   placeholder="000" type="text" value="" onchange="$.fn.onInputValueChange('consumerCodeStartId', 'consumerCodeStartName')"/>
                        </div>
                    </div>
                    <div class="col-xs-1 no-padding ratio">~</div>
                    <div class="col-xs-1">
                        <div class="form-group">
                            <input class="form-control" id="consumerCodeEndId" name="consumerCodeEndId" placeholder="999"
                                   type="text" value="" onchange="$.fn.onInputValueChange('consumerCodeEndId', 'consumerCodeEndName')"/>
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <div class="form-group">
                            <input class="form-control" id="consumerCodeStartName" name="consumerCodeStartName"
                                   placeholder="Company 1" type="text" value=""/>
                        </div>
                    </div>
                    <div class="col-xs-1 no-padding ratio">~</div>
                    <div class="col-xs-3">
                        <div class="form-group">
                            <input class="form-control" id="consumerCodeEndName" name="consumerCodeEndName"
                                   placeholder="Company 2" type="text" value=""/>
                        </div>
                    </div>
                </div>
               </div>
            </div>


            <div class="col-xs-12 border1 no-padding">
                <p class="backend">作成範囲指定</p>
                
                <div class="col-xs-12">
                    <div class="col-xs-1 no-padding">
                        <p>銀行コード</p>
                    </div>
                    <div class="col-xs-1">
                        <div class="form-group">
                            <input class="form-control" id="CollectionStartId" name="CollectionSrartId" placeholder=""
                                   type="text" value="" onchange="$.fn.onInputValueChange('CollectionStartId', 'CollectionStartName')"/>
                        </div>
                    </div>

                    <div class="col-xs-3">
                        <div class="form-group">
                            <input class="form-control" id="CollectionStartName" name="CollectionStartName" placeholder=""
                                   type="text" value=""/>
                        </div>
                    </div>
                </div>


                <div class="col-xs-12">
                    <div class="col-xs-1 no-padding">
                        <p>集金区分</p>
                    </div>
                    <div class="col-xs-2">
                        <input name="Collection" type="radio" value="all" checked onclick="$.fn.radioButtonSelectionChanged('Collection', 'CollectionId')"> <span>直接取引分</span>

                    </div>
                    <div class="col-xs-3 no-padding">
                        <input name="Collection" type="radio" value="directSales" onclick="$.fn.radioButtonSelectionChanged('Collection', 'CollectionId')"> <span>幹事銀行分（振替代行分）</span>
                    </div>

                </div>

                <div class="col-xs-12">


                    <div class="col-xs-1 no-padding">
                        <p>振替日

                        </p>
                    </div>


                    <div class="col-xs-2">
                        <div class="form-group">
                            <input class="form-control" type="date"/>
                        </div>
                    </div>


                </div>
                <div class="col-xs-12">
                    <div class="col-xs-1 no-padding">
                        <p>出力区分指定

                        </p>
                    </div>
                    <div class="col-xs-1">
                        <input name="segment" type="radio" value="all" checked onclick="$.fn.radioButtonSelectionChanged('segment', 'segmentId')"> <span>なし</span>

                    </div>
                    <div class="col-xs-2">
                        <input name="segment" type="radio" value="directSales" onclick="$.fn.radioButtonSelectionChanged('segment', 'segmentId')"> <span>支店ごと</span>

                    </div>


                </div>
            </div>


            <div class="col-xs-12 border1 no-padding bottom-box">
                <p class="backend">作成範囲指定</p>

                <div class="col-xs-12">
                    <div class="col-xs-1 no-padding">
                        <p>並び順

                        </p>
                    </div>
                    <div class="col-xs-2 no-padding">
                        <input name="SortBy" type="radio" value="all" onclick="$.fn.radioButtonSelectionChanged('SortBy', 'SortById')"> <span>消費者コード順</span>


                    </div>
                    <div class="col-xs-2 no-padding">
                        <input name="SortBy" type="radio" value="directSales" onclick="$.fn.radioButtonSelectionChanged('SortBy', 'SortById')"> <span>口座番号順</span>


                    </div>
                    <div class="col-xs-2 no-padding">
                        <input name="SortBy" type="radio" value="salesOutlet" onclick="$.fn.radioButtonSelectionChanged('SortBy', 'SortById')"> <span>預金者コード順</span>

                    </div>
                    <div class="col-xs-2 no-padding">
                        <input name="SortBy" type="radio" value="salesOutlet" onclick="$.fn.radioButtonSelectionChanged('SortBy', 'SortById')"> <span>検索名順</span>

                    </div>
                </div>


                <div class="col-xs-12">
                    <div class="col-xs-1 no-padding">
                        <p>出力先</p>
                    </div>
                    <div class="col-xs-2 no-padding">
                        <input name="OutputDestination" type="radio" value="all" onclick="$.fn.radioButtonSelectionChanged('OutputDestination', 'OutputDestinationId')"> <span>プリンタ（印刷）</span>


                    </div>
                    <div class="col-xs-2 no-padding">
                        <input name="OutputDestination" type="radio" value="directSales" onclick="$.fn.radioButtonSelectionChanged('OutputDestination', 'OutputDestinationId')"> <span>画面（印刷イメージ）</span>


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