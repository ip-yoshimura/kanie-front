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
                                           type="text" value="" 
                                           onchange="$.fn.onInputValueChange('trust1trust1StartId', 'trust1trust1StartName')"/>
                                </div>
                            </div>
                            <div class="col-xs-2">
                                <div class="form-group">
                                    <input id="trust1trust1StartName" name="trust1trust1StartName" class="form-control"
                                           type="text"
                                           value="" />
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">～</div>
                            <div class="col-xs-2">
                                <div class="form-group">
                                    <input id="trust1trust1EndName" name="trust1trust1EndName" class="form-control"
                                           type="text"
                                           value="" />
                                </div>
                            </div>
                            <div class="col-xs-2">
                                <div class="form-group">
                                    <input id="trust1trust1StartName" name="trust1trust1StartName" class="form-control"
                                           type="text"
                                           value="" />
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">～</div>
                            <div class="col-xs-2">
                                <div class="form-group">
                                    <input id="trust1trust1EndName" name="trust1trust1EndName" class="form-control"
                                           type="text"
                                           value="" />
                                </div>
                            </div>
                        </div>
		    </div>
                </div>
            </div>


	    <div class="col-xl-12">
                <div class="col-xs-9 border1 no-padding bottom-box">
                    <p class="back-end">出力指定</p>
 		    <div class="col-xs-12">
                        <div class="col-xs-5 no-padding">
                            <div class="col-xs-3 no-padding">
                                <p>データ作成日</p>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-9">
                                    <input type="date" class="form-control"/>
                                </div>
                            </div>
                        </div>

	    	        <div class="col-xs-7">
			    <div class="col-xs-2 no-padding">
			        <p>検針状態</p>
    			    </div>
			    <div class="col-xs-10 no-padding">
			        <div class="col-xs-4 no-padding">
                                    <input id="trust1trust1EndName" name="checkStatus"
                                           type="radio"
                                           value="当月分全て" /> 当月分全て
                                </div>
                                <div class="col-xs-4 no-padding">
                                    <input id="trust1trust1EndName" name="checkStatus"
                                           type="radio"
                                           value="当月分未検針のみ" /> 当月分未検針のみ
                                </div>
                                <div class="col-xs-4 no-padding">
                                    <input id="trust1trust1EndName" name="checkStatus"
                                           type="radio"
                                           value="翌月分含む" /> 翌月分含む
                                </div>
			    </div>
		        </div>
		    </div>

                    <div class="col-xs-12">
                        <div class="col-xs-7 no-padding">
			    <div class="col-xs-3 no-padding">
                                <p>検針区分</p>
			    </div>
			    <div class="col-xs-9">
                                <div class="col-xs-3 no-padding">
                                    <input id="trust1trust1EndName" name="checkCategory"
                                           type="radio"
                                           value="" /> 手書伝票
                                </div>
                                <div class="col-xs-3 no-padding">
                                    <input id="trust1trust1EndName" name="checkCategory"
                                           type="radio"
                                           value="" /> ハンディ
                                </div>
                                <div class="col-xs-3 no-padding">
                                    <input id="trust1trust1EndName" name="checkCategory"
                                           type="radio"
                                           value="" /> テレメ
                                </div>
                                <div class="col-xs-3 no-padding">
                                    <input id="trust1trust1EndName" name="checkCategory"
                                           type="radio"
                                           value="" /> 全て
                                </div>
			    </div>
                        </div>
			<div class="col-xs-5 no-padding">
			    <div class="col-xs-4 no-padding">
				<p>お知らせ文</p>
			    </div>
			    <div class="col-xs-8 no-padding">
                                <div class="col-xs-4 no-padding">
                                    <input id="trust1trust1EndName" name="infoCategory"
                                           type="radio"
                                           value="" /> 固定
                                </div>
                                <div class="col-xs-4 no-padding">
                                    <input id="trust1trust1EndName" name="infoCategory"
                                           type="radio"
                                           value="" /> 料金表
                                </div>
                                <div class="col-xs-4 no-padding">
                                    <input id="trust1trust1EndName" name="infoCategory"
                                           type="radio"
                                           value="" /> なし
                                </div>
			    </div>
			</div>
                    </div>

                    <div class="col-xs-12">
                        <div class="col-xs-2 no-padding">
                            <p class=" border-margin-exp">お知らせ文　振替</p>
                        </div>
                        <div class="form-group col-xs-9 no-padding" >
                            <div class="col-xs-2">
                                <input type="text" class="form-control" placeholder="00" name="notificationStart" id="notificationStart" value="" onchange="$.fn.onInputValueChange('notificationStart', 'notificationStartName')">
                            </div>
                            <div class="col-xs-8">
                                <input type="text" placeholder="" class="form-control" name="notificationStartName" id="notificationStartName" value=""/>
                            </div>
                        </div>
		    </div>

		    <div class="col-xs-12">
                        <div class="col-xs-2 no-padding">
                            <p style="margin-left: 65px">現金</p>
                        </div>
                        <div class="form-group col-xs-9 no-padding">
                            <div class="col-xs-2">
                                <input type="text" class="form-control" placeholder="00" name="cashStart" id="cashStart" value="" onchange="$.fn.onInputValueChange('cashStart', 'cashStartName')">
                            </div>
                            <div class="col-xs-8">
                                <input type="text" placeholder="" class="form-control" name="cashStartName" id="cashStartName" value=""/>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12">
                        <div class="col-xs-2 no-padding">
                            <p style="margin-left: 65px">振込</p>
                        </div>
                        <div class="form-group col-xs-9 no-padding">
                            <div class="col-xs-2">
                                <input type="text" class="form-control" placeholder="00" name="cashStart" id="cashStart" value="" onchange="$.fn.onInputValueChange('cashStart', 'cashStartName')">
                            </div>
                            <div class="col-xs-8">
                                <input type="text" placeholder="" class="form-control" name="cashStartName" id="cashStartName" value=""/>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12">
                        <div class="col-xs-2 no-padding">
                            <p style="margin-left: 65px">コンビニ</p>
                        </div>
                        <div class="form-group col-xs-9 no-padding">
                            <div class="col-xs-2">
                                <input type="text" class="form-control" placeholder="00" name="cashStart" id="cashStart" value="" onchange="$.fn.onInputValueChange('cashStart', 'cashStartName')">
                            </div>
                            <div class="col-xs-8">
                                <input type="text" placeholder="" class="form-control" name="cashStartName" id="cashStartName" value=""/>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12">
                        <div class="col-xs-2 no-padding">
                            <p style="margin-left: 65px">クレジット</p>
                        </div>
                        <div class="form-group col-xs-9 no-padding">
                            <div class="col-xs-2">
                                <input type="text" class="form-control" placeholder="00" name="cashStart" id="cashStart" value="" onchange="$.fn.onInputValueChange('cashStart', 'cashStartName')">
                            </div>
                            <div class="col-xs-8">
                                <input type="text" placeholder="" class="form-control" name="cashStartName" id="cashStartName" value=""/>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

                <div class="col-xs-2 border1 no-padding bottom-box" style="margin-left:20px;">
                    <p class="back-end">料金表使用件数</p>
                    <div class="col-xs-12">
                        <div class="col-xs-6 no-padding">
                            <p>加算単価</p>
                        </div>
		        <div class="col-xs-4 no-padding">
		   	    0/122 件
		        </div>
                    </div>

                    <div class="col-xs-12">
                        <div class="col-xs-6 no-padding">
                            <p>加算単価</p>
                        </div>
                        <div class="col-xs-4 no-padding">
                            0/122 件
                        </div>
                    </div>

                    <div class="col-xs-12">
                        <div class="col-xs-6 no-padding">
                            <p>表形式</p>
                        </div>
                        <div class="col-xs-4 no-padding">
                            0/84 件
                       </div>
                    </div>

                    <div class="col-xs-12">
                        <div class="col-xs-6 no-padding">
                            <p>簡易ガス</p>
                        </div>
                        <div class="col-xs-4 no-padding">
                            0 件
                        </div>
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
