<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<div class="col-xs-8 col-md-10 no-padding body-background">

    <div class="col-md-12 col-xs-12 no-padding">
        <div class="head-p">
            <p>検針票及びガス料金請求書作成指定

            </p>
        </div>
        <form action="/gas/meter-reading" id="meter" method="POST">

            <div class="col-xs-12 border1 no-padding">
                <p class="back-end">作成範囲指定 </p>

                <div class="col-xs-12">
                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-2 no-padding">
                            <p>営業所コード</p>
                        </div>
                        <div class="col-xs-1">
                            <input type="radio" name="trustSelection" id="trustSelection" value="all" checked
                                   onclick="$.fn.radioButtonSelectionChanged('trustSelection', 'trustSelectionId')"> 全て
                        </div>
                        <div class="col-xs-1 no-padding">
                            <input type="radio" name="trustSelection" id="trustSelection" value="custom"
                                   onclick="$.fn.radioButtonSelectionChanged('trustSelection', 'trustSelectionId')"> 選択
                        </div>
                    </div>
                    <div id="trustSelectionId">
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-1 col-xs-offset-2">
                                <div class="form-group">
                                    <input id="trustStartId" name="trustStartId" placeholder="000" class="form-control"
                                           type="text" value="" disabled
                                           onchange="$.fn.onInputValueChange('trustStartId', 'trustStartName')"/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">～</div>
                            <div class="col-xs-1">
                                <div class="form-group">
                                    <input id="trustEndId" name="trustEndId" placeholder="999" class="form-control"
                                           type="text" value="" disabled
                                           onchange="$.fn.onInputValueChange('trustEndId', 'trustEndName')"/>
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
                            <p>受託区分</p>
                        </div>
                        <div class="col-xs-1">
                            <input type="radio" name="trustSelection2" id="trustSelection2" value="all" checked
                                   onclick="$.fn.radioButtonSelectionChanged('trustSelection2', 'trustSelectionId2')"> 全て
                        </div>
                        <div class="col-xs-1 no-padding">
                            <input type="radio" name="trustSelection2" id="trustSelection2" value="custom"
                                   onclick="$.fn.radioButtonSelectionChanged('trustSelection2', 'trustSelectionId2')"> 直売
                        </div>
                        <div class="col-xs-2 no-padding">
                            <input type="radio" name="trustSelection2" id="trustSelection2" value="custom"
                                   onclick="$.fn.radioButtonSelectionChanged('trustSelection2', 'trustSelectionId2')"> 販売店
                        </div>
                    </div>
                    <div id="trustSelectionId2">
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-1 col-xs-offset-2">
                                <div class="form-group">
                                    <input id="trustStartId" name="trustStartId" placeholder="000" class="form-control"
                                           type="text" value="" disabled
                                           onchange="$.fn.onInputValueChange('trustStartId', 'trustStartName')"/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">～</div>
                            <div class="col-xs-1">
                                <div class="form-group">
                                    <input id="trustEndId" name="trustEndId" placeholder="999" class="form-control"
                                           type="text" value="" disabled
                                           onchange="$.fn.onInputValueChange('trustEndId', 'trustEndName')"/>
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
                            <p>出力区分</p>
                        </div>
                        <div class="col-xs-1">
                            <input type="radio" name="trustSelection3" id="trustSelection3" value="all" checked
                                   onclick="$.fn.radioButtonSelectionChanged('trustSelection3', 'trustSelectionId3')">
                            全て
                        </div>
                        <div class="col-xs-1 no-padding">
                            <input type="radio" name="trustSelection3" id="trustSelection3" value="custom"
                                   onclick="$.fn.radioButtonSelectionChanged('trustSelection3', 'trust1SelectionId3')">
                            地区
                        </div>
                        <div class="col-xs-2 no-padding">
                            <input type="radio" name="trustSelection3" id="trustSelection3" value="custom"
                                   onclick="$.fn.radioButtonSelectionChanged('trustSelection3', 'trustSelectionId3')">
                            検針担当者
                        </div>
                        <div class="col-xs-2" style="margin-left: -70px;">
                            <input type="radio" name="trustSelection3" id="trustSelection3" value="custom"
                                   onclick="$.fn.radioButtonSelectionChanged('trustSelection3', 'trustSelectionId3')">
                            集金担当者
                        </div>
                    </div>
                    <div id="trust1SelectionId3">
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-1 col-xs-offset-2">
                                <div class="form-group">
                                    <input id="trust1trust1StartId" name="trust1trust1StartId" placeholder="000"
                                           class="form-control"
                                           type="text" value="" disabled
                                           onchange="$.fn.onInputValueChange('trust1trust1StartId', 'trust1trust1StartName')"/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">～</div>
                            <div class="col-xs-1">
                                <div class="form-group">
                                    <input id="trust1trust1EndId" name="trust1trust1EndId" placeholder="999"
                                           class="form-control"
                                           type="text" value="" disabled
                                           onchange="$.fn.onInputValueChange('trust1trust1EndId', 'trust1trust1EndName')"/>
                                </div>
                            </div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input id="trust1trust1StartName" name="trust1trust1StartName" class="form-control"
                                           type="text"
                                           value="" disabled/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">～</div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input id="trust1trust1EndName" name="trust1trust1EndName" class="form-control"
                                           type="text"
                                           value="" disabled/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12">
                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-2 no-padding">
                            <p>検針順路</p>
                        </div>
                        <div class="col-xs-1">
                            <input type="radio" name="trustSelection4" id="trustSelection4" value="all" checked
                                   onclick="$.fn.radioButtonSelectionChanged('trustSelection4', 'trustSelectionId4')">
                            全て
                        </div>
                        <div class="col-xs-1 no-padding">
                            <input type="radio" name="trustSelection4" id="trustSelection4" value="custom"
                                   onclick="$.fn.radioButtonSelectionChanged('trustSelection4', 'trustSelectionId4')">
                            選択
                        </div>
                    </div>
                    <div id="trustSelectionId4">
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-1 col-xs-offset-2">
                                <div class="form-group">
                                    <input id="trust1trust1StartId" name="trust1trust1StartId" placeholder="000"
                                           class="form-control"
                                           type="text" value="" disabled
                                           onchange="$.fn.onInputValueChange('trust1trust1StartId', 'trust1trust1StartName')"/>
                                </div>
                            </div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input id="trust1trust1StartName" name="trust1trust1StartName" class="form-control"
                                           type="text"
                                           value="" disabled/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">～</div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input id="trust1trust1EndName" name="trust1trust1EndName" class="form-control"
                                           type="text"
                                           value="" disabled/>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-1 col-xs-offset-2">
                                <div class="form-group">
                                    <input id="trust1trust1StartId" name="trust1trust1StartId" placeholder="000"
                                           class="form-control"
                                           type="text" value="" disabled
                                           onchange="$.fn.onInputValueChange('trust1trust1StartId', 'trust1trust1StartName')"/>
                                </div>
                            </div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input id="trust1trust1StartName" name="trust1trust1StartName"
                                           class="form-control"
                                           type="text"
                                           value="" disabled/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">～</div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input id="trust1trust1EndName" name="trust1trust1EndName" class="form-control"
                                           type="text"
                                           value="" disabled/>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-1 col-xs-offset-2">
                                <div class="form-group">
                                    <input id="trust1trust1StartId" name="trust1trust1StartId" placeholder="000"
                                           class="form-control"
                                           type="text" value="" disabled
                                           onchange="$.fn.onInputValueChange('trust1trust1StartId', 'trust1trust1StartName')"/>
                                </div>
                            </div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input id="trust1trust1StartName" name="trust1trust1StartName"
                                           class="form-control"
                                           type="text"
                                           value="" disabled/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">～</div>
                                <div class="col-xs-3">
                                    <div class="form-group">
                                    <input id="trust1trust1EndName" name="trust1trust1EndName"
                                           class="form-control"
                                           type="text"
                                           value="" disabled/>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-1 col-xs-offset-2">
                                <div class="form-group">
                                    <input id="trust1trust1StartId" name="trust1trust1StartId"
                                           placeholder="000"
                                           class="form-control"
                                           type="text" value="" disabled
                                           onchange="$.fn.onInputValueChange('trust1trust1StartId', 'trust1trust1StartName')"/>
                                </div>
                            </div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                     <input id="trust1trust1StartName" name="trust1trust1StartName"
                                            class="form-control"
                                            type="text"
                                            value="" disabled/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">～</div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input id="trust1trust1EndName" name="trust1trust1EndName"
                                           class="form-control"
                                           type="text"
                                           value="" disabled/>
                                </div>
                            </div>
			</div>
		    </div>
                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-2 no-padding border-margin-exp">
                            <p>消費者コード</p>
                        </div>
                        <div class="col-xs-2">
                            <div class="form-group">
                                <input id="consumerCodeStart" name="consumerCodeStart" placeholder="0"
                                       class="form-control"
                                       type="text" value=""
                                       onchange="$.fn.onInputValueChange('consumerCodeStart', 'consumerCodeStartName')"/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">～</div>
                        <div class="col-xs-2">
                            <div class="form-group">
                                <input id="consumeCodeEnd" name="consumeCodeEnd" placeholder="z"
                                       class="form-control"
                                       type="text" value=""
                                       onchange="$.fn.onInputValueChange('consumeCodeEnd', 'consumerCodeEndName')"/>
                            </div>
                        </div>
                        <div class="col-xs-2">
                            <div class="form-group">
                                <input id="consumerCodeStartName" name="consumerCodeStartName"
                                       class="form-control"
                                       type="text" value=""/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">～</div>
                        <div class="col-xs-2">
                            <div class="form-group">
                                <input id="consumerCodeEndName" name="consumerCodeEndName" class="form-control"
                                       type="text"
                                       value=""/>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 no-padding">
                        <div class="form-group">
                            <div class="col-xs-2 no-padding">
                                <p>検針区分</p>
                            </div>
                            <div class="col-xs-2">
                                <input id="meterReadingClassification1" name="meterReadingClassification"
                                       type="radio"
                                       value="all"
                                       onclick="$.fn.radioButtonSelectionChanged('meterReadingClassification', 'meterReadingClassification1')"/>
                                手書伝票
                            </div>
                            <div class="col-xs-2 no-padding ml-n-70">
                                <input id="meterReadingClassification1" name="meterReadingClassification"
                                       type="radio"
                                       value="ハンディ"
                                       onclick="$.fn.radioButtonSelectionChanged('meterReadingClassification', 'meterReadingClassification1')"/>
                                ハンディ
                            </div>
                            <div class="col-xs-1 no-padding ml-n-90">
                                <input id="meterReadingClassification1" name="meterReadingClassification"
                                       type="radio"
                                       value="テレメ"
                                       onclick="$.fn.radioButtonSelectionChanged('meterReadingClassification', 'meterReadingClassification1')"/>
                                テレメ
                            </div>
                            <div class="col-xs-1 no-padding ">
                                <input id="meterReadingClassification1" name="meterReadingClassification"
                                       type="radio"
                                       value="テレメ"
                                       onclick="$.fn.radioButtonSelectionChanged('meterReadingClassification', 'meterReadingClassification1')"/>
                                全て
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="form-group">
                        <div class="col-xs-2 no-padding">
                            <p>集金区分

                            </p>
                        </div>
                        <div class="col-xs-2">
                            <input id="meterReadingState1" name="meterReadingState" type="radio" value="all"
                                   onclick="$.fn.radioButtonSelectionChanged('meterReadingState', 'meterReadingState1')"/>
                            振替
                        </div>
                        <div class="col-xs-2 no-padding ml-n-70">
                            <input id="meterReadingState2" name="meterReadingState" type="radio" value="未検針のみ"
                                   onclick="$.fn.radioButtonSelectionChanged('meterReadingState', 'meterReadingState1')"/>
                            現金
                        </div>
                        <div class="col-xs-2 no-padding ml-n-90">
                            <input id="meterReadingState2" name="meterReadingState" type="radio" value="未検針のみ"
                                   onclick="$.fn.radioButtonSelectionChanged('meterReadingState', 'meterReadingState1')"/>
                            振込
                        </div>

                        <div class="col-xs-2 no-padding ml-n-90">
                            <input id="meterReadingState2" name="meterReadingState" type="radio" value="未検針のみ"
                                   onclick="$.fn.radioButtonSelectionChanged('meterReadingState', 'meterReadingState1')"/>
                            コンビニ
                        </div>

                        <div class="col-xs-2 no-padding ml-n-70">
                            <input id="meterReadingState2" name="meterReadingState" type="radio" value="未検針のみ"
                                   onclick="$.fn.radioButtonSelectionChanged('meterReadingState', 'meterReadingState1')"/>
                            クレジット
                        </div>

                        <div class="col-xs-2 no-padding ml-n-70">
                            <input id="meterReadingState2" name="meterReadingState" type="radio" value="未検針のみ"
                                   onclick="$.fn.radioButtonSelectionChanged('meterReadingState', 'meterReadingState1')"/>
                            振替以外
                        </div>

                        <div class="col-xs-2 no-padding ml-n-70">
                            <input id="meterReadingState2" name="meterReadingState" type="radio" value="未検針のみ"
                                   onclick="$.fn.radioButtonSelectionChanged('meterReadingState', 'meterReadingState1')"/>
                            全て
                        </div>
                    </div>

                </div>

                <div class="col-xs-12">
                    <div class="form-group">
                        <div class="col-xs-2 no-padding">
                            <p>料金表

                            </p>
                        </div>
                        <div class="col-xs-2">
                            <input id="meterReadingState1" name="meterReadingState" type="radio" value="all"
                                   onclick="$.fn.radioButtonSelectionChanged('meterReadingState', 'meterReadingState1')"/>
                            加算単価
                        </div>
                        <div class="col-xs-2 no-padding ml-n-90">
                            <input id="meterReadingState2" name="meterReadingState" type="radio" value="未検針のみ"
                                   onclick="$.fn.radioButtonSelectionChanged('meterReadingState', 'meterReadingState1')"/>
                            表形式
                        </div>
                        <div class="col-xs-2 no-padding ml-n-90">
                            <input id="meterReadingState2" name="meterReadingState" type="radio" value="未検針のみ"
                                   onclick="$.fn.radioButtonSelectionChanged('meterReadingState', 'meterReadingState1')"/>
                            契約単価
                        </div>

                        <div class="col-xs-2 no-padding ml-n-90">
                            <input id="meterReadingState2" name="meterReadingState" type="radio" value="未検針のみ"
                                   onclick="$.fn.radioButtonSelectionChanged('meterReadingState', 'meterReadingState1')"/>
                            簡易ガス
                        </div>

                        <div class="col-xs-2 no-padding ml-n-90">
                            <input id="meterReadingState2" name="meterReadingState" type="radio" value="未検針のみ"
                                   onclick="$.fn.radioButtonSelectionChanged('meterReadingState', 'meterReadingState1')"/>
                            加算単価及び表形式
                        </div>

                        <div class="col-xs-2 no-padding ml-n-30">
                            <input id="meterReadingState2" name="meterReadingState" type="radio" value="未検針のみ"
                                   onclick="$.fn.radioButtonSelectionChanged('meterReadingState', 'meterReadingState1')"/>
                            契約単価及び簡易ガス
                        </div>

                        <div class="col-xs-2 no-padding ml-n-30">
                            <input id="meterReadingState2" name="meterReadingState" type="radio" value="未検針のみ"
                                   onclick="$.fn.radioButtonSelectionChanged('meterReadingState', 'meterReadingState1')"/>
                            全て
                        </div>
                    </div>

                </div>

                <div class="col-xs-12">
                    <div class="form-group">
                        <div class="col-xs-2 no-padding">
                            <p>使用用途

                            </p>
                        </div>
                        <div class="col-xs-2">
                            <input id="meterReadingState1" name="meterReadingState" type="radio" value="all"
                                   onclick="$.fn.radioButtonSelectionChanged('meterReadingState', 'meterReadingState1')"/>
                            検針票
                        </div>
                        <div class="col-xs-2 no-padding ml-n-70">
                            <input id="meterReadingState2" name="meterReadingState" type="radio" value="未検針のみ"
                                   onclick="$.fn.radioButtonSelectionChanged('meterReadingState', 'meterReadingState1')"/>
                            請求書
                        </div>

                        <div class="col-xs-2 no-padding">
                            <p class="border-margin-exp">検針日範囲</p>
                        </div>
                        <div class="col-xs-2 no-padding ml-n-90">
                            <input type="date" class="form-control"/>
                        </div>
                        <div class="col-xs-1 no-padding ratio ml-10">～</div>
                        <div class="col-xs-2 no-padding ml-10">
                            <input type="date" class="form-control"/>
                        </div>

                    </div>

                </div>


            </div>


            <div class="col-xs-12 border1 no-padding bottom-box">
                <p class="back-end">出力指定</p>

                <div class="col-xs-12">
                    <div class="col-xs-2 no-padding">
                        <p>伝票作成日</p>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-2">
                            <input type="text" class="form-control" placeholder="000"/>
                        </div>

                    </div>
                </div>

                <div class="col-xs-12">
                    <div class="col-xs-2 no-padding">
                        <p>並び順</p>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-2">
                            <input type="text" class="form-control" placeholder="000"/>
                        </div>
                        <div class="col-xs-3">
                            <select class="form-control">
                                <option value="消費者コード順">消費者コード順</option>
                                <option value="検針順路順">検針順路順</option>
                                <option value="地区コード順">地区コード順</option>
                                <option value="検針担当者コード順">検針担当者コード順</option>
                                <option value="販売店コード順">販売店コード順</option>
                                <option value="販売店コード順→地区コード順">販売店コード順→地区コード順</option>
                                <option value="販売店コード順→検針担当者コード順">販売店コード順→検針担当者コード順</option>
                            </select>
                        </div>


                    </div>

                </div>

                <div class="col-xs-12">
                    <div class="col-xs-2 no-padding">
                        <p>帳票タイプ

                        </p>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-3">
                            <select class="form-control">
                                <option value="検針伝票_結果（引越用">検針伝票_結果（引越用</option>
                                <option value="検針伝票_結果（当月の">検針伝票_結果（当月の</option>
                                <option value="検針伝票_結果">検針伝票_結果</option>

                            </select>
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
