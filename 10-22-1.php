<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<div class="col-xs-8 col-md-10 no-padding body-background">

    <div class="col-md-12 col-xs-12 no-padding">
        <div class="head-p">
            <p>配送委託分検針データ出力</p>
        </div>
        <form action="/gas/meter-reading" id="meter" method="POST">

            <div class="col-xs-12 border1 no-padding">
                <p class="back-end">作成範囲指定</p>

                <div class="col-xs-12">
                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-1 no-padding">
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
                        <div class="col-xs-1 no-padding">
                            <p>仕入先</p>
                        </div>
			<div class="col-xs-3">
			    <div class="form-group">
				<input id="supplierText" name="supplierText" placeholder="マルエイ" class="form-control"
				    type="text" value="マルエイ" onchange="$.fn.onInputValueChange('consumerCodeStart', 'consumerCodeStartName')"/>
			    </div>
			</div>
                    </div>
                </div>

                <div class="col-xs-12">
                    <div class="col-xs-1 no-padding">
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

                <div class="col-xs-12">
                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-1 no-padding">
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
            </div>

            <div class="col-xs-12 border1 no-padding bottom-box">
                <p class="back-end">出力指定</p>

                <div class="col-xs-12">
                    <div class="col-xs-1 no-padding">
                        <p>作成方法</p>
                    </div>
                    <div class="col-xs-7 no-padding">
                        <div class="col-xs-3">
                            <input id="outputBy1" name="outputBy" type="radio" value="outputBy1" /> 対象全て
                        </div>
                        <div class="col-xs-3">
                            <input id="outputBy1" name="outputBy" type="radio" value="outputBy2" /> 対象検針分のみ
                        </div>
                    </div>
                </div>

                <div class="col-xs-12">
                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-1 no-padding">
                            <p>データタイプ</p>
                        </div>
                        <div class="col-xs-1">
                            <div class="form-group">
                                <input id="dataType" name="dataType" placeholder="0" class="form-control"
                                    type="number" value="" onchange="$.fn.onInputValueChange('consumerCodeStart', 'consumerCodeStartName')"/>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12">
                    <div class="col-xs-1 no-padding">
                        <p>出力先</p>
                    </div>
                    <div class="col-xs-7 no-padding">
                        <div class="col-xs-3">
                            <input id="output1" name="outputTarget" type="radio" value="output1" /> データ出力
                        </div>
                        <div class="col-xs-3">
                            <input id="output2" name="outputTarget" type="radio" value="output2" /> 台帳出力
                        </div>
                        <div class="col-xs-3">
                            <input id="output3" name="outputTarget" type="radio" value="output3" /> 台帳出力(画面)
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
