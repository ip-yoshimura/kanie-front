<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<div class="col-xs-8 col-md-10 no-padding body-background">

    <div class="col-md-12 col-xs-12 no-padding">
        <div class="head-p">
            <p>口座振替依頼表印刷指定</p>
        </div>
        <form action="/gas/meter-reading" id="meter" method="POST">

            <div class="col-xs-12 border1 no-padding">
                <p class="back-end">消費者範囲指定</p>

                <div class="col-xs-12">
                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-2 no-padding">
                            <p>営業所コード</p>
                        </div>
                        <div class="col-xs-1">
                            <input type="radio" name="trustSelection" id="trustSelection" value="all" checked onclick="$.fn.radioButtonSelectionChanged('trustSelection', 'trustSelectionId')"> 全て
                        </div>
                        <div class="col-xs-1 no-padding">
                            <input type="radio" name="trustSelection" id="trustSelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('trustSelection', 'trustSelectionId')"> 選択
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
                                    <input id="trustEndName" name="trustEndName" class="form-control" type="text" value="" disabled/>
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
                            <input type="radio" name="trust1Selection" id="trust1Selection" value="all" checked onclick="$.fn.radioButtonSelectionChanged('trust1Selection', 'trust1SelectionId')"> 全て
                        </div>
                        <div class="col-xs-1 no-padding">
                            <input type="radio" name="trust1Selection" id="trust1Selection" value="custom" onclick="$.fn.radioButtonSelectionChanged('trust1Selection', 'trust1SelectionId')"> 直売
                        </div>
                        <div class="col-xs-2 no-padding">
                            <input type="radio" name="trust1Selection" id="trust1Selection" value="custom" onclick="$.fn.radioButtonSelectionChanged('trust1Selection', 'trust1SelectionId')"> 販売店
                        </div>
                    </div>
                    <div id="trust1SelectionId">
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
                                    <input id="trustEndName" name="trustEndName" class="form-control" type="text" value="" disabled/>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-xs-12">
                    <div class="col-xs-2 no-padding">
                        <p >消費者コード</p>
                    </div>
                    <div class="col-xs-2">
                        <div class="form-group">
                            <input id="consumerCodeStart" name="consumerCodeStart" placeholder="0" class="form-control"
                                   type="text" value="" onchange="$.fn.onInputValueChange('consumerCodeStart', 'consumerCodeStartName')"/>
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
                            <input id="consumerCodeEndName" name="consumerCodeEndName" class="form-control" type="text"
                                   value=""/>
                        </div>
                    </div>
                </div>
	    </div>

                <div class="col-xs-12 border1 no-padding">
                    <p class="back-end">作成範囲指定</p>
                    <div class="col-xs-12 form-group">
                        <div class="col-xs-2 no-padding">
                            <p>銀行コード</p>
                        </div>
                        <div class="col-xs-1 ">
                            <input type="text" name="personStart" id="personStart" class="form-control" placeholder="000" value="" onchange="$.fn.onInputValueChange('personStart', 'personEnd')" >
                        </div>
                        <div class="col-xs-3">
                            <input type="text" name="personEnd" id="personEnd" class="form-control" value=""/>
                        </div>
                    </div>
                    <div class="col-xs-12 form-group">
                        <div class="col-xs-2 no-padding">
                            <p>銀行区分</p>
                        </div>
                        <div class="col-xs-2">
                            <input type="radio" name="sortby" id="sortby" value="all" onclick="$.fn.radioButtonSelectionChanged('sortby', 'sortbyId')"> 直接取引分
                        </div>
                        <div class="col-xs-2 no-padding">
                            <input type="radio" name="sortby" id="sortby" value="sortby" onclick="$.fn.radioButtonSelectionChanged('sortby', 'sortbyId')"> 幹事銀行分(振替代行分)
                        </div>
                    </div>
                    <div class="col-xs-12 form-group">
                        <div class="col-xs-2 no-padding">
                            <p>振替日</p>
                        </div>
                        <div class="col-xs-2">
                            <input type="date" class="form-control">
                        </div>
                    </div>
                    <div class="col-xs-12 form-group">
                        <div class="col-xs-2 no-padding">
                            <p>出力区分指定</p>
                        </div>
                        <div class="col-xs-2">
                            <input type="radio" name="output" id="output" value="all" onclick="$.fn.radioButtonSelectionChanged('output', 'outputId')"> なし
                        </div>
                        <div class="col-xs-2 no-padding">
                            <input type="radio" name="output" id="output" value="output" onclick="$.fn.radioButtonSelectionChanged('output', 'outputId')"> 支店ごと
                        </div>
                    </div>
		</div>

                <div class="col-xs-12 border1 no-padding bottom-box">
                        <p class="back-end">出力指定 </p>
                    <div class="col-xs-12 form-group">
                        <div class="col-xs-2 no-padding">
                            <p>並び順</p>
                        </div>
                        <div class="col-xs-2">
                            <input type="radio" name="sortby" id="sortby" value="all" onclick="$.fn.radioButtonSelectionChanged('sortby', 'sortbyId')"> 消費者コード順
                        </div>
                        <div class="col-xs-2 no-padding">
                            <input type="radio" name="sortby" id="sortby" value="sortby" onclick="$.fn.radioButtonSelectionChanged('sortby', 'sortbyId')"> 口座番号順
                        </div>
                        <div class="col-xs-2">
                            <input type="radio" name="sortby" id="sortby" value="sortby" onclick="$.fn.radioButtonSelectionChanged('sortby', 'sortbyId')"> 預金者コード順
                        </div>
                        <div class="col-xs-2">
                            <input type="radio" name="sortby" id="sortby" value="sortby" onclick="$.fn.radioButtonSelectionChanged('sortby', 'sortbyId')"> 検索名順
                        </div>
                    </div>
                    <div class="col-xs-12 form-group">
                        <div class="col-xs-2 no-padding">
                            <p>出力先</p>
                        </div>
                        <div class="col-xs-2">
                            <input type="radio" name="output" id="output" value="all" onclick="$.fn.radioButtonSelectionChanged('output', 'outputId')"> プリンタ(印刷)
                        </div>
                        <div class="col-xs-2 no-padding">
                            <input type="radio" name="output" id="output" value="output" onclick="$.fn.radioButtonSelectionChanged('output', 'outputId')"> 画面(印刷イメージ)
                        </div>
                    </div>
		</div>


    </div>




    <?php include 'footer.php'; ?>

    </form>

</div>

</body>

</html>
