<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<div class="col-xs-8 col-md-10 no-padding body-background">

    <div class="col-md-12 col-xs-12 no-padding">
        <div class="head-p">
            <p>ハンディターミナル(KT-1)検針データ作成指定
            </p>
        </div>
        <form action="/gas/meter-reading" id="meter" method="POST">

	    <div class="col-xs-12 border1" style="height:40px;padding-top:5px;">
		<div class="col-xs-12 no-padding">
		    <div class="col-xs-2 no-padding">
			<p>データ作成区分</p>
		    </div>
		    <div class="col-xs-2">
			<input type="radio" name="makeDataCategory" id="makeDataCategory" value="custmer">消費者コード順
		    </div>
		    <div class="col-xs-2">
			<input type="radio" name="makeDataCategory" id="makeDataCategory" value="load">検針順路順
		    </div>
		</div>
	    </div>

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
                            配送委託先
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
                            <p>コード範囲</p>
                        </div>
			<div class="col-xs-1">
				先頭
			</div>
			<div class="col-xs-2">
				開始コード
			</div>
			<div class="col-xs-2" style="margin-left:20px;">
				終了コード
			</div>
		    </div>
		    <div class="col-xs-12 no-padding">
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-1 col-xs-offset-2">
                                <div class="form-group">
                                    <input id="trust1trust1StartId" name="trust1trust1StartId" placeholder="000"
                                           class="form-control"
                                           type="text" value="" disabled
                                           onchange="$.fn.onInputValueChange('trust1trust1StartId', 'trust1trust1StartName')"/>
                                </div>
                            </div>
                            <div class="col-xs-2">
                                <div class="form-group">
                                    <input id="trust1trust1StartName" name="trust1trust1StartName" class="form-control"
                                           type="text"
                                           value="" disabled/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">～</div>
                            <div class="col-xs-2">
                                <div class="form-group">
                                    <input id="trust1trust1EndName" name="trust1trust1EndName" class="form-control"
                                           type="text"
                                           value="" disabled/>
                                </div>
                            </div>
                            <div class="col-xs-2">
                                <div class="form-group">
                                    <input id="trust1trust1StartName" name="trust1trust1StartName" class="form-control"
                                           type="text"
                                           value="" disabled/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">～</div>
                            <div class="col-xs-2">
                                <div class="form-group">
                                    <input id="trust1trust1EndName" name="trust1trust1EndName" class="form-control"
                                           type="text"
                                           value="" disabled/>
                                </div>
                            </div>
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
