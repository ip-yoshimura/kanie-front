<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<div class="col-xs-8 col-md-10 no-padding body-background">

    <div class="col-md-12 col-xs-12 no-padding">
        <div class="head-p">
            <p>検針伝票入力チェックリスト(ハンディ)印刷指定</p>
        </div>
        <form action="/gas/meter-reading" id="meter" method="POST">

            <div class="col-xs-12 border1 no-padding">
                <p class="back-end">作成範囲指定</p>

                <div class="col-xs-12">
                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-2 no-padding">
                            <p>入力担当者</p>
                        </div>
			<div class="form-group">
                            <div class="col-xs-1">
                                <input type="text" class="form-control" placeholder="000"/>
                            </div>
			    <div class="col-xs-4">
				<input type="txt" class="form-control" />
			    </div>
			</div>
                    </div>
                </div>

                <div class="col-xs-12">
                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-2 no-padding">
                            <p>入力作業日</p>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-2">
                                <input type="date" class="form-control" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12">
                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-2 no-padding">
                            <p>出力区分</p>
                        </div>
                        <div class="col-xs-1">
                            <input type="radio"  name="trust2Selection" id="trust2Selection" value="all" checked onclick="$.fn.radioButtonSelectionChanged('trust2Selection', 'trust2SelectionId')"> 全て
                        </div>
                        <div class="col-xs-1 no-padding">
                            <input type="radio" name="trust2Selection" id="trust2Selection" value="custom" onclick="$.fn.radioButtonSelectionChanged('trust2Selection', 'trust2SelectionId')"> 地区
                        </div>
                        <div class="col-xs-1 no-padding">
                            <input type="radio" name="trust2Selection" id="trust2Selection" value="custom" onclick="$.fn.radioButtonSelectionChanged('trust2Selection', 'trust2SelectionId')"> 検針担当者
                        </div>
                        <div class="col-xs-2">
                            <input type="radio" name="trust2Selection" id="trust2Selection" value="custom" onclick="$.fn.radioButtonSelectionChanged('trust2Selection', 'trust2SelectionId')"> 営業所・販売店
                        </div>
                    </div>
                    <div id="trust2SelectionId">
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-1 col-xs-offset-2">
                                <div class="form-group">
                                    <input id="trust1trust1StartId" name="trust1trust1StartId" placeholder="000" class="form-control"
                                           type="text" value="" disabled onchange="$.fn.onInputValueChange('trust1trust1StartId', 'trust1trust1StartName')"/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">～</div>
                            <div class="col-xs-1">
                                <div class="form-group">
                                    <input id="trust1trust1EndId" name="trust1trust1EndId" placeholder="999" class="form-control"
                                           type="text" value="" disabled onchange="$.fn.onInputValueChange('trust1trust1EndId', 'trust1trust1EndName')"/>
                                </div>
                            </div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input id="trust1trust1StartName" name="trust1trust1StartName" class="form-control" type="text"
                                           value="" disabled/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">～</div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input id="trust1trust1EndName" name="trust1trust1EndName" class="form-control" type="text"
                                           value="" disabled/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12">
                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-2 no-padding">
                            <p>検針日</p>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-2">
                                <input type="date" class="form-control" />
                            </div>
			    <div class="col-xs-1 no-padding ratio">～</div>
                            <div class="col-xs-2">
                                <input type="date" class="form-control" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12">
                    <div class="col-xs-2 no-padding">
                        <p>伝票番号</p>
                    </div>
                    <div class="col-xs-3">
                        <div class="form-group">
                            <input id="meterReadingRouteStart" name="meterReadingRouteStart" placeholder="0"
                                   class="form-control" type="text" value="" onchange="$.fn.onInputValueChange('meterReadingRouteStart', 'meterReadingRouteEnd')"/>
                        </div>
                    </div>
                    <div class="col-xs-1 no-padding ratio">～</div>
                    <div class="col-xs-3">
                        <div class="form-group">
                            <input id="meterReadingRouteEnd" name="meterReadingRouteEnd" placeholder="9999999"
                                   class="form-control" type="text" value=""/>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12">
                        <div class="col-xs-2 no-padding">
                            <p>検針区分</p>
                        </div>
                        <div class="col-xs-1">
                            <input id="meterReadingClassification1" name="meterReadingClassification" type="radio"
                                   value="all" onclick="$.fn.radioButtonSelectionChanged('meterReadingClassification', 'meterReadingClassification1')"/> 全て
                        </div>
                        <div class="col-xs-1 no-padding">
                            <input id="meterReadingClassification1" name="meterReadingClassification" type="radio"
                                   value="all" onclick="$.fn.radioButtonSelectionChanged('meterReadingClassification', 'meterReadingClassification1')"/> 手書伝票
                        </div>
                        <div class="col-xs-1 no-padding">
                            <input id="meterReadingClassification1" name="meterReadingClassification" type="radio"
                                   value="ハンディ" onclick="$.fn.radioButtonSelectionChanged('meterReadingClassification', 'meterReadingClassification1')"/> ハンディ
                        </div>
                        <div class="col-xs-1 no-padding">
                            <input id="meterReadingClassification1" name="meterReadingClassification" type="radio"
                                   value="テレメ" onclick="$.fn.radioButtonSelectionChanged('meterReadingClassification', 'meterReadingClassification1')"/> テレメ
                        </div>
		</div>
            </div>

            <div class="col-xs-12 border1 no-padding bottom-box">
                <p class="back-end">出力指定</p>

                <div class="col-xs-12">
                    <div class="col-xs-2 no-padding">
                        <p>並び順</p>
                    </div>
		    <div class="col-xs-6 no-padding">
                        <div class="col-xs-3">
                            <input id="orderBy1" name="orderBy" type="radio" value="order1" /> 入力順
                        </div>
                        <div class="col-xs-3">
                            <input id="orderBy1" name="orderBy" type="radio" value="order1" /> 消費者コード順
                        </div>
                        <div class="col-xs-3">
                            <input id="orderBy1" name="orderBy" type="radio" value="order1" /> 検索名順
                        </div>
                        <div class="col-xs-3">
                            <input id="orderBy1" name="orderBy" type="radio" value="order1" /> 検針順路順
                        </div>
                    </div>
		</div>

                <div class="col-xs-12">
                    <div class="col-xs-2 no-padding">
                        <p>出力先</p>
                    </div>
                    <div class="col-xs-6 no-padding">
                        <div class="col-xs-3">
                            <input id="output1" name="outputTarget" type="radio" value="output1" /> プリンタ(印刷)
                        </div>
                        <div class="col-xs-4">
                            <input id="output2" name="outputTarget" type="radio" value="output2" /> 画面(印刷イメージ)
                        </div>
                    </div>
                </div>

            </div>

    </div>


    <?php include 'footer.php'; ?>

    </form>

</div>

</body>

</html>
