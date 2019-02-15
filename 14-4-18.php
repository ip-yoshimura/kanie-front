<?php
include "header.php"
?>
<?php
include "sidebar.php"
?>
    <div class="col-md-10 col-xs-8 col-xs-12 no-padding">

    <div class="col-md-12 col-xs-12 no-padding body-background">

        <div class="head-p">
            <p>末端ガス栓帳票印刷指定</p>
        </div>
	<form action="/gas/meter-reading" id="meter" method="POST">
	    <div class="col-xs-12 border1 no-padding">
		<p class="backend">消費者範囲指定 </p>
		<div class="col-xs-12">
		    <div class="col-xs-12 no-padding">
			<div class="col-xs-1 no-padding">
			    <p>営業所コード</p>
			</div>
			<div class="col-xs-1">
			    <input name="officeCode" type="radio" value="all" checked onclick="$.fn.radioButtonSelectionChanged('officeCode', 'officeCodeId')"> <span>全て</span>
			</div>
			<div class="col-xs-1">
			    <input name="officeCode" type="radio" value="directSales" onclick="$.fn.radioButtonSelectionChanged('officeCode', 'officeCodeId')"> <span>選択</span>
			</div>
		    </div>
		    <div id="officeCodeId">
			<div class="col-xs-12 no-padding">
			    <div class="col-xs-1 col-xs-offset-1">
				<div class="form-group">
				    <input class="form-control" id="trustStartId" name="trustStartId" placeholder="000"
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
				    <input class="form-control" id="trustStartName" name="trustStartName" type="text" value="" disabled/>
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
				<p>自他社区分</p>
			    </div>
			    <div class="col-xs-1">
				<input name="otherCompany" type="radio" value="all" checked onclick="$.fn.radioButtonSelectionChanged('otherCompany', 'otherCompanyId')"> <span>全て</span>
			    </div>
			    <div class="col-xs-1">
				<input name="otherCompany" type="radio" value="directSales" onclick="$.fn.radioButtonSelectionChanged('otherCompany', 'otherCompanyId')"> <span>自社</span>
			    </div>
			    <div class="col-xs-1">
				<input name="otherCompany" type="radio" value="salesOutlet" onclick="$.fn.radioButtonSelectionChanged('otherCompany', 'otherCompanyId')"> <span>他社</span>
			    </div>
			</div>
			<div id="otherCompanyId">
                            <div class="col-xs-12 no-padding">
                                <div class="col-xs-1 col-xs-offset-1">
                                    <div class="form-group">
                                        <input class="form-control" id="otherStartId" name="otherStartId" placeholder="000"
                                               type="text" value="" disabled onchange="$.fn.onInputValueChange('otherStartId', 'otherStartName')"/>
                                    </div>
                                </div>
                                <div class="col-xs-1 no-padding ratio">~</div>
                                <div class="col-xs-1">
                                    <div class="form-group">
                                        <input class="form-control" id="otherEndId" name="otherEndId" placeholder="999"
                                               type="text" value="" disabled onchange="$.fn.onInputValueChange('otherEndId', 'otherEndName')"/>
                                    </div>
                                </div>
                                <div class="col-xs-3">
                                    <div class="form-group">
                                        <input class="form-control" id="otherStartName" name="otherStartName"
                                               type="text"
                                               value="" disabled/>
                                    </div>
                                </div>
                                <div class="col-xs-1 no-padding ratio">~</div>
                                <div class="col-xs-3">
                                    <div class="form-group">
                                        <input class="form-control" id="otherEndName" name="otherEndName" type="text"
                                               value="" disabled/>
                                    </div>
                                </div>
                            </div>
			</div>
		    </div>

                        <div class="col-xs-12">
                            <div class="col-xs-12 no-padding">
                                <div class="col-xs-1 no-padding">
                                    <p>出力区分</p>
                                </div>
                                <div class="col-xs-1">
                                    <input name="output" type="radio" value="all" checked onclick="$.fn.radioButtonSelectionChanged('output', 'outputId')"> <span>全て</span>


                                </div>
                                <div class="col-xs-1">
                                    <input name="output" type="radio" value="directSales" onclick="$.fn.radioButtonSelectionChanged('output', 'outputId')"> <span>地区</span>


                                </div>
                                <div class="col-xs-1 no-padding">
                                    <input name="output" type="radio" value="salesOutlet" onclick="$.fn.radioButtonSelectionChanged('output', 'outputId')"> <span>営業担当者</span>


                                </div>

                            </div>
                            <div id="outputId">
                            <div class="col-xs-12 no-padding">
                                <div class="col-xs-1 col-xs-offset-1">
                                    <div class="form-group">
                                        <input class="form-control" id="outputStartId" name="outputStartId"
                                               placeholder="000" type="text" value="" disabled onchange="$.fn.onInputValueChange('outputStartId', 'outputStartName')"/>
                                    </div>
                                </div>
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
                                               type="text"
                                               value="" disabled/>
                                    </div>
                                </div>
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
                            <div class="col-xs-1 no-padding">
                                <p>消費者コード</p>
                            </div>
                            <div class="col-xs-2">
                                <div class="form-group">
                                    <input class="form-control" id="consumer_1CodeStart" name="consumer_1CodeStart"
                                           placeholder="0" type="text" value="" onchange="$.fn.onInputValueChange('consumer_1CodeStart', 'consumer_1CodeStartName')"/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">~</div>
                            <div class="col-xs-2">
                                <div class="form-group">
                                    <input class="form-control" id="consumer_1CodeEnd" name="consumer_1CodeEnd"
                                           placeholder="z"
                                           type="text" value="" onchange="$.fn.onInputValueChange('consumer_1CodeEnd', 'consumer_1EndName')"/>
                                </div>
                            </div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input class="form-control" id="consumer_1CodeStartName" name="consumer_1CodeStartName"
                                           type="text" value=""/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">~</div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input class="form-control" id="consumer_1EndName" name="consumer_1EndName"
                                           type="text" value=""/>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12">
                            <div class="col-xs-12 no-padding">
                                <div class="col-xs-1 no-padding">
                                    <p>入居状態</p>
                                </div>
                                <div class="col-xs-2">
                                    <input name="moveIn" type="radio" value="all" onclick="$.fn.radioButtonSelectionChanged('moveIn', 'moveInId')"><span>全て</span>
                                </div>
                                <div class="col-xs-2">
                                    <input name="moveIn" type="radio" value="directSales" onclick="$.fn.radioButtonSelectionChanged('moveIn', 'moveInId')"><span>閉栓・休止除く</span>
                                </div>
                                <div class="col-xs-2">
                                    <input name="moveIn" type="radio" value="directSales" onclick="$.fn.radioButtonSelectionChanged('moveIn', 'moveInId')"><span>未入居除く</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 border1 no-padding">
                        <p class="backend">作成範囲指定</p>

                        <div class="col-xs-12">
                            <div class="form-group">
                                <label class="col-xs-1 no-padding">区分</label>
                                <div class="col-xs-10 no-padding">
                                    <input type="radio" name="distinguish" value="all" onclick="$.fn.radioButtonSelectionChanged('distinguish', 'distinguishId')"/> <span>全て</span>
                                    <input type="radio" name="distinguish" value="directSales" onclick="$.fn.radioButtonSelectionChanged('distinguish', 'distinguishId')"/> <span>未接続末端ガス栓のみ</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12">
                            <div class="form-group">
                                <label class="col-xs-1 no-padding"> 種別</label>
                                <div class="col-xs-10 no-padding">
                                    <input type="radio" name="classification" value="all" checked onclick="$.fn.radioButtonSelectionChanged('classification', 'classificationId')"/> <span>全て</span>
                                    <input type="radio" name="classification" value="classification" onclick="$.fn.radioButtonSelectionChanged('classification', 'classificationId')"/> <span>選択</span>
                                </div>
				<div id="classificationId">
				    <div class="col-xs-2">
                                        <div class="form-group">
                                            <input class="form-control" id="classificationStart" name="classificationStart"
                                                   placeholder="0" type="text" value="" disabled onchange="$.fn.onInputValueChange('classificationStart', 'classificationStartName')"/>
                                        </div>
                                    </div>
                                    <div class="col-xs-1 no-padding ratio">~</div>
                                    <div class="col-xs-2">
                                        <div class="form-group">
                                            <input class="form-control" id="classificationEnd" name="classificationEnd" placeholder="z"
                                                   type="text" value="" disabled onchange="$.fn.onInputValueChange('classificationEnd', 'classificationEndName')"/>
                                        </div>
                                    </div>
                                    <div class="col-xs-3">
                                        <div class="form-group">
                                            <input class="form-control" id="classificationStartName"
                                                   name="classificationStartName" type="text" value="" disabled/>
                                        </div>
                                    </div>
                                    <div class="col-xs-1 no-padding ratio">~</div>
                                    <div class="col-xs-3">
                                        <div class="form-group">
                                            <input class="form-control" id="classificationEndName" name="classificationEndName"
                                                   type="text" value="" disabled/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12">
                            <div class="form-group">
                                <label class="col-xs-1 no-padding">メーカ</label>
                                <div class="col-xs-10 no-padding">
                                    <input type="radio" name="manufacturer" value="all" checked onclick="$.fn.radioButtonSelectionChanged('manufacturer', 'manufacturerId')"/> <span>全て</span>
                                    <input type="radio" name="manufacturer" value="manufacturer" onclick="$.fn.radioButtonSelectionChanged('manufacturer', 'manufacturerId')"/> <span>選択</span>
                                </div>
                                <div id="manufacturerId">
                                    <div class="col-xs-2">
                                        <div class="form-group">
                                            <input class="form-control" id="manufacturerStart" name="manufacturerStart"
                                                   placeholder="0" type="text" value="" disabled onchange="$.fn.onInputValueChange('manufacturerStart', 'manufacturerName')"/>
                                        </div>
                                    </div>
                                    <div class="col-xs-1 no-padding ratio">~</div>
                                    <div class="col-xs-2">
                                        <div class="form-group">
                                            <input class="form-control" id="manufacturerEnd" name="manufacturerEnd" placeholder="z"
                                                   type="text" value="" disabled onchange="$.fn.onInputValueChange('manufacturerEnd', 'manufacturerEndName')"/>
                                        </div>
                                    </div>
                                    <div class="col-xs-3">
                                        <div class="form-group">
                                            <input class="form-control" id="manufacturerName"
                                                   name="manufacturerName" type="text" value="" disabled/>
                                        </div>
                                    </div>
                                    <div class="col-xs-1 no-padding ratio">~</div>
                                    <div class="col-xs-3">
                                        <div class="form-group">
                                            <input class="form-control" id="manufacturerEndName" name="manufacturerEndName"
                                                   type="text" value="" disabled/>
                                        </div>
                                    </div>
				</div>
			    </div>
                        </div>

                        <div class="col-xs-12">
                            <div class="form-group">
				<div class="col-xs-4 no-padding">
                                    <label class="col-xs-3 no-padding">型式</label>
                                    <div class="col-xs-4">
                                        <div class="form-group">
                                            <input type="radio" name="manufacturer_2" value="all" onclick="$.fn.radioButtonSelectionChanged('manufacturer_2', 'manufacturer_2Id')"/> <span>全て</span>
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                        <div class="form-group">
                                            <input type="radio" name="manufacturer_2" value="manufacturer_2" onclick="$.fn.radioButtonSelectionChanged('manufacturer_2', 'manufacturer_2Id')"/> <span>指定</span>
                                        </div>
                                    </div>
				</div>
				<div class="col-xs-4">
                                    <div class="col-xs-6">
                                            <input class="form-control" id="consumerCodeStart" name="consumerCodeStart"
                                                   placeholder="0" type="number" value=""/>
                                    </div>
				    <div class="col-xs-6">
					<div class="col-xs-6 no-padding">
                                            <input type="radio" name="manufacturer_3" value="all" onclick="$.fn.radioButtonSelectionChanged('manufacturer_3', 'manufacturer_3Id')"/> <span>を含む</span>
					</div>
					<div class="col-xs-6 no-padding">
                                            <input type="radio" name="manufacturer_3" value="manufacturer_3" onclick="$.fn.radioButtonSelectionChanged('manufacturer_3', 'manufacturer_3Id')"/> <span>で始まる</span>
					</div>
				    </div>
				</div>
				<div class="col-xs-4 no-padding">
                                    <label class="col-xs-4 no-padding"> 大小文字判別</label>
				    <div class="col-xs-8">
					<div class="col-xs-6">
					    <input type="radio" name="discrimination" value="all" onclick="$.fn.radioButtonSelectionChanged('discrimination', 'discriminationId')"/> <span>しない</span>
					</div>
					<div class="col-xs-6">
					    <input type="radio" name="discrimination" value="discrimination" onclick="$.fn.radioButtonSelectionChanged('discrimination', 'discriminationId')"/> <span>する</span>
					</div>
				    </div>
				</div>
			    </div>
			</div>

                        <div class="col-xs-12">
                            <div class="form-group">
				<div class="col-xs-4 no-padding">
                                    <label class="col-xs-4 no-padding"> 経過年数</label>
                                    <div class="col-xs-3">
                                        <input type="radio" name="years" value="all" onclick="$.fn.radioButtonSelectionChanged('years', 'yearsId')"/> <span>指定なし</span>
                                    </div>
                                    <div class="col-xs-3 no-padding">
                                        <input type="radio" name="years" value="years" onclick="$.fn.radioButtonSelectionChanged('years', 'yearsId')"/> <span>年数指定</span>
                                    </div>
                                </div>
				<div class="col-xs-4">
				    <div class="col-xs-4">
					<input class="form-control" id="consumerCodeStart" name="consumerCodeStart" type="number" value=""/>
				    </div>
				    <div class="col-xs-8">
					<label class="no-padding">年以上</label>
				    </div>
				</div>
				<div class="col-xs-4 no-padding">
				    <div class="col-xs-4 no-padding">
					<label class="no-padding">年数不明</label>
				    </div>
				    <div class="col-xs-8">
					<div class="col-xs-6">
					    <input type="radio" name="numberOfYear" value="all" onclick="$.fn.radioButtonSelectionChanged('numberOfYear', 'numberOfYearId')"/> <span>含む</span>
					</div>
					<div class="col-xs-6">
					    <input type="radio" name="numberOfYear" value="years" onclick="$.fn.radioButtonSelectionChanged('numberOfYear', 'numberOfYearId')"/> <span>除く</span>
					</div>
				    </div>
				</div>
			    </div>
                        </div>

                        <div class="col-xs-12">
                            <div class="form-group">
				<div class="col-xs-4 no-padding">
				    <label class="col-xs-2 no-padding">設置年月</label>
				    <div class="col-xs-4">
                                        <div class="form-group">
                                            <input class="form-control" id="consumer_2CodeStart" name="consumer_2CodeStart"
                                                   type="date" value="" onchange="$.fn.onInputValueChange('consumer_2CodeStart', 'consumer_2Name')"/>
                                        </div>
                                    </div>
                                    <div class="col-xs-1 no-padding ratio">~</div>
                                    <div class="col-xs-4">
                                        <div class="form-group">
                                            <input class="form-control" id="consumer_2Name" name="consumer_2Name"
                                                   type="date" value=""/>
                                        </div>
                                    </div>
                                </div>
				<div class="col-xs-5 no-padding">
                                    <label class="col-xs-2 no-padding">製造年月状態</label>
                                    <div class="col-xs-4">
                                        <div class="form-group">
                                            <input class="form-control" id="consume_3CodeStart" name="consume_3CodeStart"
                                                   type="date" value="" onchange="$.fn.onInputValueChange('consume_3CodeStart', 'consum_3End')"/>
                                        </div>
                                    </div>
                                    <div class="col-xs-1 no-padding ratio">~</div>
                                    <div class="col-xs-4">
                                        <div class="form-group">
                                            <input class="form-control" id="consum_3End" name="consum_3End"
                                                   type="date" value=""/>
                                        </div>
                                    </div>
				</div>
				<div class="col-xs-3 no-padding">
				    <label class="col-xs-3 no-padding">製造番号</label>
				    <div class="col-xs-5 form-group no-padding">
					<input class="form-control" id="consume_3CodeStart" name="consume_3CodeStart"
                                               type="date" value="" onchange="$.fn.onInputValueChange('consume_3CodeStart', 'consum_3End')"/>
				    </div>
				    <label class="col-xs-4 no-padding">で始まる</label>
				</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 border1 no-padding bottom-box">
                        <p class="backend">出力指定 </p>

                        <div class="col-xs-12 no-padding">
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label class="col-xs-2 no-padding">出力帳票</label>
                                        <div class="col-xs-3 no-padding">
                                            <input type="radio" name="outputFrom" value="all" onclick="$.fn.radioButtonSelectionChanged('outputFrom', 'outputFromId')"/> <span>一覧表</span>
                                        </div>
                                        <div class="col-xs-3 no-padding">
                                            <input type="radio" name="outputFrom" value="outputFrom" onclick="$.fn.radioButtonSelectionChanged('outputFrom', 'outputFromId')"/> <span>経過集計表</span>
                                        </div>
                                        <div class="col-xs-3 no-padding">
                                            <input type="radio" name="outputFrom" value="outputFrom" onclick="$.fn.radioButtonSelectionChanged('outputFrom', 'outputFromId')"/> <span>設置集計表</span>
                                        </div>
                                    </div>
                                </div>
				<div class="col-xs-6">
				    <div class="form-group">
					<label class="col-xs-2 no-padding">改ページ指定</label>
					<div class="col-xs-10 no-padding">
                                            <div class="col-xs-3 no-padding">
                                                <input type="radio" name="outputFrom" value="all" onclick="$.fn.radioButtonSelectionChanged('outputFrom', 'outputFromId')"/> <span>営・販</span>
                                            </div>
                                            <div class="col-xs-3 no-padding">
                                                <input type="radio" name="outputFrom" value="outputFrom" onclick="$.fn.radioButtonSelectionChanged('outputFrom', 'outputFromId')"/> <span>地区</span>
                                            </div>
                                            <div class="col-xs-3 no-padding">
                                                <input type="radio" name="outputFrom" value="outputFrom" onclick="$.fn.radioButtonSelectionChanged('outputFrom', 'outputFromId')"/> <span>営業担当</span>
                                            </div>
                                            <div class="col-xs-3 no-padding">
                                                <input type="radio" name="outputFrom" value="outputFrom" onclick="$.fn.radioButtonSelectionChanged('outputFrom', 'outputFromId')"/> <span>なし</span>
                                            </div>
					</div>
				    </div>
				</div>
                        </div>

                        <div class="col-xs-12">
                            <div class="form-group">
                                <label class="col-xs-1 no-padding"> 並び順</label>
                                <div class="col-xs-2 no-padding">
                                    <input type="radio" name="sortBy_2" value="all" onclick="$.fn.radioButtonSelectionChanged('sortBy_2', 'sortBy_2Id')"/> <span>消費者コード順</span>
                                </div>
                                <div class="col-xs-2">
                                    <input type="radio" name="sortBy_2" value="sortBy_2" onclick="$.fn.radioButtonSelectionChanged('sortBy_2', 'sortBy_2Id')"/> <span>検針順路順</span>
                                </div>
                                <div class="col-xs-2">
                                    <input type="radio" name="sortBy_2" value="sortBy_2" onclick="$.fn.radioButtonSelectionChanged('sortBy_2', 'sortBy_2Id')"/> <span>検索名順</span>
                                </div>
                                <div class="col-xs-2">
                                    <input type="radio" name="sortBy_2" value="sortBy_2" onclick="$.fn.radioButtonSelectionChanged('sortBy_2', 'sortBy_2Id')"/> <span>設置年月順</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12">
                            <div class="form-group">
                                <label class="col-xs-1 no-padding"> 出力先</label>
                                <div class="col-xs-2 no-padding">
                                    <input type="radio" name="sortBy_3" value="all" onclick="$.fn.radioButtonSelectionChanged('sortBy_3', 'sortBy_3Id')"/> <span>プリンタ(印刷)</span>
                                </div>
                                <div class="col-xs-3">
                                    <input type="radio" name="sortBy_3" value="sortBy_2" onclick="$.fn.radioButtonSelectionChanged('sortBy_3', 'sortBy_3Id')"/> <span>画面(印刷イメージ)</span>
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
</div>

</body>

</html>
