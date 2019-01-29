<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<div class="col-xs-8 col-md-10 no-padding body-background">

    <div class="col-md-12 col-xs-12 no-padding">
        <div class="head-p">
            <p>検針兼請求書作成指定

            </p>
        </div>
        <form action="/gas/meter-reading" id="meter" method="POST">

            <div class="col-xs-12 border1 no-padding">
                <p class="back-end">印刷範囲指定 </p>

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
                            <div class="col-xs-1 no-padding ratio">~</div>
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
                            <div class="col-xs-1 no-padding ratio">~</div>
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
                            <input type="radio" name="trustSelection" id="trustSelection" value="all" checked onclick="$.fn.radioButtonSelectionChanged('trustSelection', 'trustSelectionId')"> 全て
                        </div>
                        <div class="col-xs-1 no-padding">
                            <input type="radio" name="trustSelection" id="trustSelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('trustSelection', 'trustSelectionId')"> 直売
                        </div>
                        <div class="col-xs-2 no-padding">
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
                            <div class="col-xs-1 no-padding ratio">~</div>
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
                            <div class="col-xs-1 no-padding ratio">~</div>
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
                            <input type="radio"  name="trust1Selection" id="trust1Selection" value="all" checked onclick="$.fn.radioButtonSelectionChanged('trust1Selection', 'trust1SelectionId')"> 全て
                        </div>
                        <div class="col-xs-1 no-padding">
                            <input type="radio" name="trust1Selection" id="trust1Selection" value="custom" onclick="$.fn.radioButtonSelectionChanged('trust1Selection', 'trust1SelectionId')"> 地区
                        </div>
                        <div class="col-xs-2 no-padding">
                            <input type="radio" name="trust1Selection" id="trust1Selection" value="custom" onclick="$.fn.radioButtonSelectionChanged('trust1Selection', 'trust1SelectionId')"> 検針担当者
                        </div>
                        <div class="col-xs-2" style="margin-left: -70px;">
                            <input type="radio" name="trust1Selection" id="trust1Selection" value="custom" onclick="$.fn.radioButtonSelectionChanged('trust1Selection', 'trust1SelectionId')"> 配送委託先
                        </div>
                    </div>
                    <div id="trust1SelectionId">
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-1 col-xs-offset-2">
                                <div class="form-group">
                                    <input id="trust1trust1StartId" name="trust1trust1StartId" placeholder="000" class="form-control"
                                           type="text" value="" disabled onchange="$.fn.onInputValueChange('trust1trust1StartId', 'trust1trust1StartName')"/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">~</div>
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
                            <div class="col-xs-1 no-padding ratio">~</div>
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
                    <div class="col-xs-2 no-padding">
                        <p>検針順路</p>
                    </div>
                    <div class="col-xs-3">
                        <div class="form-group">
                            <input id="meterReadingRouteStart" name="meterReadingRouteStart" placeholder="0"
                                   class="form-control" type="text" value="" onchange="$.fn.onInputValueChange('meterReadingRouteStart', 'meterReadingRouteEnd')"/>
                        </div>
                    </div>
                    <div class="col-xs-1 no-padding ratio">~</div>
                    <div class="col-xs-3">
                        <div class="form-group">
                            <input id="meterReadingRouteEnd" name="meterReadingRouteEnd" placeholder="9999999"
                                   class="form-control" type="text" value=""/>
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
                    <div class="col-xs-1 no-padding ratio">~</div>
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
                    <div class="col-xs-1 no-padding ratio">~</div>
                    <div class="col-xs-2">
                        <div class="form-group">
                            <input id="consumerCodeEndName" name="consumerCodeEndName" class="form-control" type="text"
                                   value=""/>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">

                        <div class="col-xs-2 no-padding">
                            <p>検針区分</p>
                        </div>
                        <div class="col-xs-2">
                            <input id="meterReadingClassification1" name="meterReadingClassification" type="radio"
                                   value="all" onclick="$.fn.radioButtonSelectionChanged('meterReadingClassification', 'meterReadingClassification1')"/> 手書伝票
                        </div>
                        <div class="col-xs-2 no-padding" style="margin-left: -70px">
                            <input id="meterReadingClassification1" name="meterReadingClassification" type="radio"
                                   value="ハンディ" onclick="$.fn.radioButtonSelectionChanged('meterReadingClassification', 'meterReadingClassification1')"/> ハンディ
                        </div>
                        <div class="col-xs-1 no-padding" style="margin-left: -90px">
                            <input id="meterReadingClassification1" name="meterReadingClassification" type="radio"
                                   value="テレメ" onclick="$.fn.radioButtonSelectionChanged('meterReadingClassification', 'meterReadingClassification1')"/> テレメ
                        </div>

                    </div>
                    <div class="col-xs-12">
                        <div class="col-xs-2 no-padding">
                            <p>検針状態</p>
                        </div>
                        <div class="col-xs-2">
                            <input id="meterReadingState1" name="meterReadingState" type="radio" value="all" onclick="$.fn.radioButtonSelectionChanged('meterReadingState', 'meterReadingState1')"/> 全て
                        </div>
                        <div class="col-xs-2 no-padding" style="margin-left: -70px">
                            <input id="meterReadingState2" name="meterReadingState" type="radio" value="未検針のみ" onclick="$.fn.radioButtonSelectionChanged('meterReadingState', 'meterReadingState1')"/> 未検針のみ
                        </div>
                        </div>
                <div class="col-xs-12">
                    <div class="col-xs-2 no-padding">
                        <p>帳票タイプ</p>
                    </div>
                    <div class="col-xs-3">
                        <div class="form-group">
                            <select id="formType" name="formType" class="form-control">
                                <option value="11検針伝票_東北用">11検針伝票_東北用</option>
                                <option value="New検針伝票_定期用">New検針伝票_定期用</option>
                                <option value="検針伝票">検針伝票</option>
                                <option value="検針伝票_定期用">検針伝票_定期用</option>
                                <option value="検針伝票_東北用">検針伝票_東北用</option>
                            </select>
                        </div>
                    </div>
                </div>
                    </div>




            <div class="col-xs-12 border1 no-padding bottom-box">
                <p class="back-end">出力指定</p>

                <div class="col-xs-12">
                    <div class="col-xs-2 no-padding">
                        <p>並び順</p>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-1">
                            <input type="text" class="form-control" placeholder="000"/>
                        </div>


                        <div class="col-xs-3">
                            <select class="form-control">
                                <option value="消費者コード順">消費者コード順</option>
                                <option value="">検針順路順</option>
                                <option value="">地区コード順</option>
                                <option value="">担当者コード順</option>
                                <option value="">販売店コード順</option>
                                <option value="">販売店コード順→地区コード順</option>
                                <option value="">販売店コード順→担当者コード順</option>
                            </select>
                        </div>

                    </div>
                </div>


                <div class="col-xs-12">
                    <div class="col-xs-2 no-padding">
                        <p>日付</p>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-2">
                            <input type="date" class="form-control"/>
                        </div>

                    </div>


                </div>

                <div class="col-xs-12">
                    <div class="form-group">
                        <div class="col-xs-2 no-padding">
                            <p>営業所名印刷</p>
                        </div>

                        <div class="col-xs-1">
                            <input id="meterReadingState1" name="meterReadingState" type="radio" value="all" onclick="$.fn.radioButtonSelectionChanged('meterReadingState', 'meterReadingState1')"/> する
                        </div>

                        <div class="col-xs-1 no-padding">
                            <input id="meterReadingState1" name="meterReadingState" type="radio" value="all" onclick="$.fn.radioButtonSelectionChanged('meterReadingState', 'meterReadingState1')"/> しない
                        </div>

                        <div class="col-xs-1 no-padding border-margin-exp">
                            <p class="p-size">伝票番号変更</p>
                        </div>

                        <div class="col-xs-2">
                            <input type="text" placeholder="000000" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="col-xs-12">

                    <div class="col-xs-2 no-padding">
                        <p class=" border-margin-exp">お知らせ文 (振替）</p>
                    </div>
                    <div class="form-group" >
                    <div class="col-xs-1">
                        <input type="text" class="form-control" placeholder="00" name="notificationStart" id="notificationStart" value="" onchange="$.fn.onInputValueChange('notificationStart', 'notificationStartName')">
                    </div>
                    <div class="col-xs-8">
                        <input type="text" placeholder="" class="form-control" name="notificationStartName" id="notificationStartName" value=""/>
                    </div>
                    </div>

                </div>
                <div class="col-xs-12">
                    <div class="col-xs-2 no-padding">
                        <p style="margin-left: 65px">(現金）</p>
                    </div>
                    <div class="form-group">
                    <div class="col-xs-1">
                        <input type="text" class="form-control" placeholder="00" name="cashStart" id="cashStart" value="" onchange="$.fn.onInputValueChange('cashStart', 'cashStartName')">
                    </div>
                    <div class="col-xs-8">
                        <input type="text" placeholder="" class="form-control" name="cashStartName" id="cashStartName" value=""/>
                    </div>
                    </div>

                </div>

                <div class="col-xs-12">

                    <div class="col-xs-2 no-padding">
                        <p style="margin-left: 65px">(振込)</p>
                    </div>
                    <div class="form-group">
                    <div class="col-xs-1" >
                        <input type="text" class="form-control" placeholder="00" name="transferStart" id="transferStart" value="" onchange="$.fn.onInputValueChange('transferStart', 'transferStartName')">
                    </div>
                    <div class="col-xs-8">
                        <input type="text" placeholder="" class="form-control" name="transferStartName" id="transferStartName" value=""/>
                    </div>
                    </div>

                </div>
                <div class="col-xs-12">

                    <div class="col-xs-2 no-padding">
                        <p style="margin-left: 65px">(コンビニ)</p>
                    </div>
                    <div class="form-group">
                    <div class="col-xs-1">
                        <input type="text" class="form-control" placeholder="00" name="convenienceStart" id="convenienceStart" value="" onchange="$.fn.onInputValueChange('convenienceStart', 'convenienceStartName')">
                    </div>
                    <div class="col-xs-8">
                        <input type="text" placeholder="" class="form-control" name="convenienceStartName" id="convenienceStartName" value=""/>
                    </div>
                    </div>

                </div>
                <div class="col-xs-12">
                    <div class="col-xs-2 no-padding">
                        <p style="margin-left: 65px">(クレジット)
                        </p>
                    </div>
                    <div class="form-group">
                    <div class="col-xs-1">
                        <input type="text" class="form-control" placeholder="00" name="creditStart" id="creditStart" value="" onchange="$.fn.onInputValueChange('creditStart', 'creditStartName')">
                    </div>
                    <div class="col-xs-8">
                        <input type="text" placeholder="" class="form-control" name="creditStartName" id="creditStartName" value=""/>
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