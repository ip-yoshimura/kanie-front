<?php
include "header.php"
?>
<?php
include "sidebar.php"
?>
<div class="col-md-10 col-xs-8 col-xs-12 no-padding">

    <div class="col-md-12 col-xs-12 no-padding body-background">

        <div class="head-p ">
            <p>保安点検調査票印刷指定 </p>
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
			    <input name="officeSelection" id="officeSelection" type="radio" value="all" checked onclick="$.fn.radioButtonSelectionChanged('officeSelection', 'officeSelectionId')"> <span>全て</span>
			</div>
			<div class="col-xs-1">
			    <input name="officeSelection" id="officeSelection" type="radio" value="directSales" onclick="$.fn.radioButtonSelectionChanged('officeSelection', 'officeSelectionId')"> <span>選択</span>
			</div>
		    </div>
		    <div id="officeSelectionId"> 
			<div class="col-xs-12 no-padding">
			    <div class="col-xs-1 col-xs-offset-1">
				<div class="form-group">
				    <input class="form-control" id="trustStartId" name="trustStartId"
					   type="text" value="" disabled onchange="$.fn.onInputValueChange('trustStartId', 'trustStartName')"/>
				</div>
			    </div>
			    <div class="col-xs-1 no-padding ratio">~</div>
				<div class="col-xs-1">
                                    <div class="form-group">
					<input class="form-control" id="trustEndId" name="trustEndId" placeholder="999"
                                               type="text" value="" disabled onchange="$.fn.onInputValueChange('trustEndId', 'trustEndName')"/>
                                    </div>
                                </div>
				<div class="col-xs-3">
                                    <div class="form-group">
                                        <input class="form-control" id="trustStartName" name="trustStartName"
                                               type="text" value="" disabled/>
                                    </div>
                                </div>
                                <div class="col-xs-1 no-padding ratio">~</div>
                                <div class="col-xs-3">
                                    <div class="form-group">
                                        <input class="form-control" id="trustEndName" name="trustEndName" type="text" value="" disabled/>
                                    </div>
                                </div>
                            </div>
			</div>
		    </div>

                        <div class="col-xs-12">
                            <div class="col-xs-12 no-padding">
                                <div class="col-xs-1 no-padding">
                                    <p>受託区分</p>
                                </div>
                                <div class="col-xs-1">
                                    <input name="trustSelection" id="trustSelection" type="radio" value="all" checked onclick="$.fn.radioButtonSelectionChanged('trustSelection', 'trustSelectionId')"> <span>全て</span>
                                </div>
                                <div class="col-xs-1">
                                    <input name="trustSelection" id="trustSelection" type="radio" value="directSales" onclick="$.fn.radioButtonSelectionChanged('trustSelection', 'trustSelectionId')"> <span>直売</span>
                                </div>
                                <div class="col-xs-1">
                                    <input name="trustSelection" id="trustSelection" type="radio" value="salesOutlet" onclick="$.fn.radioButtonSelectionChanged('trustSelection', 'trustSelectionId')"> <span>販売店</span>
                                </div>
                            </div>


                            <div id="trustSelectionId">
                            <div class="col-xs-12 no-padding">
                                <div class="col-xs-1 col-xs-offset-1">
                                    <div class="form-group">
                                        <input class="form-control" id="officeStartId" name="officeStartId"
                                               placeholder="000"
                                               type="text" value="" disabled onchange="$.fn.onInputValueChange('officeStartId', 'officeStartName')"/>
                                    </div>
                                </div>
                                <div class="col-xs-1 no-padding ratio">~</div>
                                <div class="col-xs-1">
                                    <div class="form-group">
                                        <input class="form-control" id="officeEndId" name="officeEndId" placeholder="999"
                                               type="text" value="" disabled onchange="$.fn.onInputValueChange('officeEndId', 'officeEndName')"/>
                                    </div>
                                </div>
                                <div class="col-xs-3">
                                    <div class="form-group">
                                        <input class="form-control" id="officeStartName" name="officeStartName"
                                               type="text"
                                               value="" disabled/>
                                    </div>
                                </div>
                                <div class="col-xs-1 no-padding ratio">~</div>
                                <div class="col-xs-3">
                                    <div class="form-group">
                                        <input class="form-control" id="officeEndName" name="officeEndName" type="text"
                                               value="" disabled/>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>


                        <div class="col-xs-12">
                            <div class="col-xs-12 no-padding">
                                <div class="col-xs-1 no-padding">
                                    <p>出力区分1</p>
                                </div>
                                <div class="col-xs-1">
                                    <input name="outputSelection" id="outputSelection" type="radio" value="all" checked onclick="$.fn.radioButtonSelectionChanged('outputSelection', 'outputSelectionId')"> <span>全て</span>
                                </div>
                                <div class="col-xs-1">
                                    <input name="outputSelection" id="outputSelection" type="radio" value="directSales" onclick="$.fn.radioButtonSelectionChanged('outputSelection', 'outputSelectionId')"> <span>地区</span>
                                </div>
                                <div class="col-xs-2">
                                    <input name="outputSelection" id="outputSelection" type="radio" value="salesOutlet" onclick="$.fn.radioButtonSelectionChanged('outputSelection', 'outputSelectionId')"> <span>営業担当者</span>
                                </div>
                            </div>
                            <div id="outputSelectionId">
                            <div class="col-xs-12 no-padding">
                                <div class="col-xs-1 col-xs-offset-1">
                                    <div class="form-group">
                                        <input class="form-control" id="outputStartId" name="outputStartId"
                                               placeholder="000" type="text" value="" disabled onchange="$.fn.onInputValueChange('outputStartId', 'outputStartName')"/>
                                    </div>
                                </div>
                                <div class="col-xs-1 no-padding ratio">~</div>
                                <div class="col-xs-1">
                                    <div class="form-group">
                                        <input class="form-control" id="outputEndId" name="outputEndId"
                                               placeholder="999"
                                               type="text" value="" disabled onchange="$.fn.onInputValueChange('outputEndId', 'outputEndName')"/>
                                    </div>
                                </div>
                                <div class="col-xs-3">
                                    <div class="form-group">
                                        <input class="form-control" id="outputStartName" name="outputStartName"
                                               type="text" value="" disabled/>
                                    </div>
                                </div>
                                <div class="col-xs-1 no-padding ratio">~</div>
                                <div class="col-xs-3">
                                    <div class="form-group">
                                        <input class="form-control" id="outputEndName" name="outputEndName" type="text"
                                               value="" disabled/>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-12 no-padding">
                                <div class="col-xs-1 no-padding">
                                    <p>出力区分2</p>
                                </div>
                                <div class="col-xs-1">
                                    <input name="outSelection" id="outSelection" type="radio" value="all" checked onclick="$.fn.radioButtonSelectionChanged('outSelection', 'outSelectionId')"> <span>全て</span>
                                </div>
                                <div class="col-xs-1 no-padding">
                                    <input name="outSelection" id="outSelection" type="radio" value="directSales" onclick="$.fn.radioButtonSelectionChanged('outSelection', 'outSelectionId')"> <span>保安機関</span>
                                </div>
                                <div class="col-xs-2 no-padding">
                                    <input name="outSelection" id="outSelection" type="radio" value="salesOutlet" onclick="$.fn.radioButtonSelectionChanged('outSelection', 'outSelectionId')"> <span>保安機関と調査員</span>
                                </div>
                                <div class="col-xs-2 no-padding">
                                    <input name="outSelection"  id="outSelection" type="radio" value="salesOutlet" onclick="$.fn.radioButtonSelectionChanged('outSelection', 'outSelectionId')"> <span>保安機関（特殊）</span>
                                </div>
                                <div class="col-xs-3 no-padding">
                                    <input name="outSelection" id="outSelection" type="radio" value="salesOutlet" onclick="$.fn.radioButtonSelectionChanged('outSelection', 'outSelectionId')"> <span>保安機関と調査員（特殊）</span>
                                </div>
                           </div>
                           <div id="outSelectionId">
                           <div class="col-xs-12 no-padding">
                                <div class="col-xs-1 col-xs-offset-1">
                                    <div class="form-group">
                                        <input class="form-control" id="outStartId" name="outStartId"
                                               placeholder="000" type="text" value="" disabled onchange="$.fn.onInputValueChange('outStartId', 'outStartName')"/>
                                    </div>
                                </div>
                                <div class="col-xs-1 no-padding ratio">~</div>
                                <div class="col-xs-1">
                                    <div class="form-group">
                                        <input class="form-control" id="outEndId" name="outEndId"
                                               placeholder="999"
                                               type="text" value="" disabled onchange="$.fn.onInputValueChange('outEndId', 'outEndName')"/>
                                    </div>
                                </div>
                                <div class="col-xs-3">
                                    <div class="form-group">
                                        <input class="form-control" id="outStartName" name="outStartName"
                                               type="text" value="" disabled/>
                                    </div>
                                </div>
                                <div class="col-xs-1 no-padding ratio">~</div>
                                <div class="col-xs-3">
                                    <div class="form-group">
                                        <input class="form-control" id="outEndName" name="outEndName" type="text"
                                               value="" disabled/>
                                    </div>
                                </div>
                            </div>
                           </div>
                        </div>

                        <div class="col-xs-12">
                            <div class="col-xs-1 col-xs-offset-1 no-padding">
                                <p>調査員</p>
                            </div>
                            <div class="col-xs-2">
                                <div class="form-group">
                                    <input class="form-control" id="investCodeStart" name="investCodeStart"
                                           placeholder="0" type="text" value="" onchange="$.fn.onInputValueChange('investCodeStart', 'investCodeEnd')"/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">~</div>
                            <div class="col-xs-2">
                                <div class="form-group">
                                    <input class="form-control" id="investCodeEnd" name="investCodeEnd"
                                           placeholder="z"
                                           type="text" value=""/>
                                </div>
                            </div>
                            <div class="col-xs-2">
                                <div class="form-group">
                                    <input class="form-control" id="consumerCodeStartName" name="consumerCodeStartName"
                                           type="text" value=""/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">~</div>
                            <div class="col-xs-2">
                                <div class="form-group">
                                    <input class="form-control" id="consumerCodeStartName" name="consumerCodeStartName"
                                           type="text" value=""/>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12">
                            <div class="col-xs-1 no-padding">
                                <p>消費者コード</p>
                            </div>
                            <div class="col-xs-2">
                                <div class="form-group">
                                    <input class="form-control" id="consumerStart" name="consumerStart"
                                           placeholder="0" type="text" value="" onchange="$.fn.onInputValueChange('consumerStart', 'consumeEnd')"/>
                                </div>
                            </div>
                            <div class="col-xs-2">
                                <div class="form-group">
                                    <input class="form-control" id="consumeEnd" name="consumeEnd"
                                           placeholder="z"
                                           type="text" value=""/>
                                </div>
                            </div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input class="form-control" id="consumerCodeStartName" name="consumerCodeStartName"
                                           type="text" value=""/>
                                </div>
                            </div>

                        </div>

                        <div class="col-xs-12">
                            <div class="col-xs-12 no-padding">
                                <div class="col-xs-1 no-padding">
                                    <p>入居状態</p>
                                </div>
                                <div class="col-xs-1">
                                    <input name="move" id="move" type="radio" value="all" onclick="$.fn.radioButtonSelectionChanged('move', 'moveId')"><span>全て</span>
                                </div>
                                <div class="col-xs-2">
                                    <input name="move" id="move" type="radio" value="directSales" onclick="$.fn.radioButtonSelectionChanged('move', 'moveId')"><span>閉栓・休止除く</span>


                                </div>
                                <div class="col-xs-2">
                                    <input name="move" id="move" type="radio" value="directSales" onclick="$.fn.radioButtonSelectionChanged('move', 'moveId')"><span>未入居除く</span>

                                </div>

                            </div>

                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-12 no-padding">
                                <div class="col-xs-1 no-padding">
                                    <p>容器区分</p>
                                </div>
                                <div class="col-xs-1">
                                    <input name="container" id="container" type="radio" value="all" onclick="$.fn.radioButtonSelectionChanged('container', 'containerId')"> <span>全て</span>
                                </div>
                                <div class="col-xs-2">
                                    <input name="container" id="container" type="radio" value="directSales" onclick="$.fn.radioButtonSelectionChanged('container', 'containerId')"> <span>シリンダ</span>


                                </div>
                                <div class="col-xs-2">
                                    <input name="container" id="container" type="radio" value="directSales" onclick="$.fn.radioButtonSelectionChanged('container', 'containerId')"> <span>バルク</span>

                                </div>

                            </div>

                        </div>
                    </div>


                    <div class="col-xs-12 border1 no-padding">
                        <p class="backend">作成範囲指定 </p>
                        <div class="col-xs-12">
                            <div class="form-group">
                                <label class="col-xs-1 no-padding"> 業務指定</label>
                                <div class="col-xs-10">
                                    <input type="radio" name="business" id="business" value="all"  onclick="$.fn.radioButtonSelectionChanged('business', 'businessId')"/> <span>なし</span>
                                    <input type="radio" name="business" id="business" value="business"  onclick="$.fn.radioButtonSelectionChanged('business', 'businessId')"/> <span>選択</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12">
                            <div class="form-group">
                                <label class="col-xs-1 col-xs-offset-1 no-padding"> 対象業務</label>
                                <div class="col-xs-10">
                                    <input type="radio" name="target" id="target" value="all"  onclick="$.fn.radioButtonSelectionChanged('target', 'targetId')"/> <span>定期供給・消費</span>
                                    <input type="radio" name="target" id="target" value="target"  onclick="$.fn.radioButtonSelectionChanged('target', 'targetId')"/> <span>再調査</span>
                                    <input type="radio" name="target" id="target" value="target"  onclick="$.fn.radioButtonSelectionChanged('target', 'targetId')"/> <span>CO点検</span>
                                    <input type="radio" name="target" id="target" value="target"  onclick="$.fn.radioButtonSelectionChanged('target', 'targetId')"/> <span>埋設管</span>
                                    <input type="radio" name="target" id="target" value="target"  onclick="$.fn.radioButtonSelectionChanged('target', 'targetId')"/> <span>定期自首</span>
                                    <input type="radio" name="target" id="target" value="target"  onclick="$.fn.radioButtonSelectionChanged('target', 'targetId')"/> <span>本支管</span>
                                    <input type="radio" name="target" id="target" value="target"  onclick="$.fn.radioButtonSelectionChanged('target', 'targetId')"/> <span>消費機器</span>
                                    <input type="radio" name="target" id="target" value="target"  onclick="$.fn.radioButtonSelectionChanged('target', 'targetId')"/> <span>容器交換時等</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12">
                            <div class="form-group">
                                <label class="col-xs-1 col-xs-offset-1 no-padding"> 次回期限</label>
                                <div class="col-xs-2">
                                    <div class="form-group">
                                        <input class="form-control" id="consumerStart" name="consumerStart"
                                               type="date" value="" onchange="$.fn.onInputValueChange('consumerStart', 'consumCodeStart')"/>
                                    </div>
                                </div>
                                <div class="col-xs-1 no-padding ratio">~</div>
                                <div class="col-xs-2">
                                    <div class="form-group">
                                        <input class="form-control" id="consumCodeStart" name="consumCodeStart"
                                               type="date" value=""/>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12">
                            <div class="form-group">
				<div class="col-xs-6 no-padding">
                                    <label class="col-xs-2 no-padding"> 対象法律</label>
                                    <div class="col-xs-10">
                                        <input type="radio" name="classic" id="classic" value="all"  onclick="$.fn.radioButtonSelectionChanged('classic', 'classicId')"/> <span>全て</span>
                                        <input type="radio" name="classic" id="classic" value="classic"  onclick="$.fn.radioButtonSelectionChanged('classic', 'classicId')"/> <span>液石法</span>
                                        <input type="radio" name="classic" id="classic" value="classic"  onclick="$.fn.radioButtonSelectionChanged('classic', 'classicId')"/> <span>高圧法</span>
                                        <input type="radio" name="classic" id="classic" value="classic"  onclick="$.fn.radioButtonSelectionChanged('classic', 'classicId')"/> <span>ガス事業法</span>
                                    </div>
				</div>
			    </div>
			</div>

			<div class="col-xs-12">
			    <div class="form-group">
				<div class="col-xs-5 no-padding">
                                    <label class="col-xs-3 no-padding"> 帳票タイプ</label>
                                    <div class="col-xs-8">
                                        <div class="form-group">
                                            <select name="" id="" class="selclass form-control">
                                                <option value="NEW液化石油ガス設備調査 ・ 点検票">NEW液化石油ガス設備調査 ・ 点検票</option>
                                                <option value="ガス消費機器調査 （再調査） 点検結果">ガス消費機器調査 （再調査） 点検結果</option>
                                                <option value="本社専用_ガス消費機器調査 （再調査）">本社専用_ガス消費機器調査 （再調査）</option>
                                                <option value="本社専用_液化石油ガス設備調査 ・ 点検">本社専用_液化石油ガス設備調査 ・ 点検</option>
                                                <option value="液化石油ガス設備調査 ・ 点検票">液化石油ガス設備調査 ・ 点検票</option>
                                                <option value="（液石-再調査） 液化石油ガス設備調査">（液石-再調査） 液化石油ガス設備調査</option>
                                                <option value="（液石-定期） 液化石油ガス設備調査">（液石-定期） 液化石油ガス設備調査</option>
                                                <option value="（簡易-再調査） 液化石油ガス設備調査">（簡易-再調査） 液化石油ガス設備調査</option>
                                                <option value="（簡易-定期） 液化石油ガス設備調査">（簡易-定期） 液化石油ガス設備調査</option>
                                                <option value="LPガスご利用通知書">LPガスご利用通知書</option>
                                            </select>
                                        </div>
                                    </div>
				</div>
				<div class="col-xs-6 no-padding">
                                    <label class="col-xs-2 no-padding"> ページ指定</label>
				    <div class="col-xs-6 no-padding">
                                        <div class="col-xs-6">
                                            <input type="radio" name="pages" id="pages" value="all"  onclick="$.fn.radioButtonSelectionChanged('pages', 'pagesId')"/> <span>全て</span>
                                        </div>
                                        <div class="col-xs-6">
                                            <input type="radio" name="pages" id="pages" value="pages"  onclick="$.fn.radioButtonSelectionChanged('pages', 'pagesId')"/> <span>指定</span>
                                        </div>
                                    </div> 
				    <div class="col-xs-4 no-padding">
					<div class="col-xs-10">
                                            <input class="form-control" id="consumerCodeStart" name="consumerCodeStart"
                                                   placeholder="0" type="number" value=""/>
					</div>
                                        <label class="col-xs-2 no-padding">以降</label>
                                    </div>
				</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 border1 no-padding bottom-box">
                        <p class="backend">出力指定 </p>
                        <div class="col-xs-12">
                            <div class="col-xs-12 no-padding">
                                <label class="col-xs-1 no-padding"> 並び順1</label>
                                <div class="col-xs-2">
                                    <input type="radio" name="sortorder" id="sortorder" value="all"  onclick="$.fn.radioButtonSelectionChanged('sortorder', 'sortorderId')"/> <span>営業所・販売店</span>
                                </div>
                                <div class="col-xs-1 no-padding">
                                    <input type="radio" name="sortorder" id="sortorder" value="sortorder"  onclick="$.fn.radioButtonSelectionChanged('sortorder', 'sortorderId')"/> <span>なし</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12">
                            <label class="col-xs-1 no-padding"> 並び順2</label>
			    <div class="col-xs-9 no-padding">
                                <div class="col-xs-2">
                                    <input type="radio" name="sortorder1" id="sortorder1" value="all"  onclick="$.fn.radioButtonSelectionChanged('sortorder1', 'sortorder1Id')"/> <span>地区</span>
                                </div>
                                <div class="col-xs-2">
                                    <input type="radio" name="sortorder1" id="sortorder1" value="sortorder1"  onclick="$.fn.radioButtonSelectionChanged('sortorder1', 'sortorder1Id')"/> <span>営業担当者</span>
                                </div>
                                <div class="col-xs-2">
                                    <input type="radio" name="sortorder1" id="sortorder1" value="sortorder1"  onclick="$.fn.radioButtonSelectionChanged('sortorder1', 'sortorder1Id')"/> <span>調査員</span>
                                </div>
                                <div class="col-xs-2">
                                    <input type="radio" name="sortorder1" id="sortorder1" value="sortorder1"  onclick="$.fn.radioButtonSelectionChanged('sortorder1', 'sortorder1Id')"/> <span>調査員(特殊)</span>
                                </div>
                                <div class="col-xs-2">
                                    <input type="radio" name="sortorder1" id="sortorder1" value="sortorder1"  onclick="$.fn.radioButtonSelectionChanged('sortorder1', 'sortorder1Id')"/> <span>なし</span>
                                </div>
	    		    </div>
                        </div>

                        <div class="col-xs-12">
                                <label class="col-xs-1 no-padding"> 並び順3</label>
                                <div class="col-xs-2">
                                    <input type="radio" name="sortorder2" id="sortorder1" value="all"  onclick="$.fn.radioButtonSelectionChanged('sortorder2', 'sortorder2Id')"/> <span>消費者コード順</span>
                                </div>
                                <div class="col-xs-2">
                                    <input type="radio" name="sortorder2" id="sortorder1" value="sortorder2"  onclick="$.fn.radioButtonSelectionChanged('sortorder2', 'sortorder2Id')"/> <span>検針順路順</span>
                                </div>
                                <div class="col-xs-2">
                                    <input type="radio" name="sortorder2" id="sortorder1" value="sortorder2"  onclick="$.fn.radioButtonSelectionChanged('sortorder2', 'sortorder2Id')"/> <span>検索名順</span>
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
