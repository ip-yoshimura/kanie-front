<?php
include "header.php"
?>
<?php
include "sidebar.php"
?>
<div class="col-md-10 col-xs-8 col-xs-12 no-padding">

    <div class="col-md-12 col-xs-12 no-padding body-background">

        <div class="head-p ">
            <p>保安委託先提出用一覧表印刷指定</p>
        </div>
                <form id="meter" action="/gas/meter-reading" method="POST">

                    <div class="col-xs-12 border1 no-padding">

                        <p class="back-end">消費者範囲指定</p>

                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-2">
                                <p>営業所コード</p>
                            </div>
                            <div class="col-xs-1">
                                <input type="radio" name="officeCode" value="all" checked onclick="$.fn.radioButtonSelectionChanged('officeCode', 'officeCodeId')"> 全て
                            </div>
                            <div class="col-xs-1 no-padding">
                                <input type="radio" name="officeCode" value="directSales" onclick="$.fn.radioButtonSelectionChanged('officeCode', 'officeCodeId')"> 選択
                            </div>
                        </div>
                        <div id="officeCodeId">
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
                                        <input id="trustEndName" name="trustEndName" class="form-control" type="text"
                                               value="" disabled/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-2 ">
                                <p>自他社区分</p>
                            </div>
                            <div class="col-xs-1">
                                <input type="radio" name="otherCompany" value="all" checked onclick="$.fn.radioButtonSelectionChanged('otherCompany', 'otherCompanyId')"> 全て
                            </div>
                            <div class="col-xs-1 no-padding">
                                <input type="radio" name="otherCompany" value="directSales" onclick="$.fn.radioButtonSelectionChanged('otherCompany', 'otherCompanyId')"> 自社
                            </div>
                            <div class="col-xs-1 no-padding">
                                <input type="radio" name="otherCompany" value="salesOutlet" onclick="$.fn.radioButtonSelectionChanged('otherCompany', 'otherCompanyId')"> 他社
                            </div>
                        </div>

                        <div id="otherCompanyId">
                            <div class="col-xs-12 no-padding">
                                <div class="col-xs-1 col-xs-offset-2">
                                    <div class="form-group">
                                        <input id="otherStartId" name="otherStartId" placeholder="000" class="form-control"
                                               type="text" value="" disabled onchange="$.fn.onInputValueChange('otherStartId', 'otherStartName')"/>
                                    </div>
                                </div>
                                <div class="col-xs-1 no-padding ratio">~</div>
                                <div class="col-xs-1">
                                    <div class="form-group">
                                        <input id="otherEndId" name="otherEndId" placeholder="999" class="form-control"
                                               type="text" value="" disabled onchange="$.fn.onInputValueChange('otherEndId', 'otherEndName')"/>
                                    </div>
                                </div>
                                <div class="col-xs-3">
                                    <div class="form-group">
                                        <input id="otherStartName" name="otherStartName" class="form-control" type="text"
                                               value="" disabled/>
                                    </div>
                                </div>
                                <div class="col-xs-1 no-padding ratio">~</div>
                                <div class="col-xs-3">
                                    <div class="form-group">
                                        <input id="otherEndName" name="otherEndName" class="form-control" type="text"
                                               value="" disabled/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-2">
                                <p>出力区分</p>
                            </div>
                            <div class="col-xs-1 no-padding">
                                <input type="radio" name="outPut" value="all" checked onclick="$.fn.radioButtonSelectionChanged('outPut', 'outPutId')"> 全て
                            </div>
                            <div class="col-xs-1 no-padding">
                                <input type="radio" name="outPut" value="directSales" onclick="$.fn.radioButtonSelectionChanged('outPut', 'outPutId')"> 地区
                            </div>
                            <div class="col-xs-1 no-padding">
                                <input type="radio" name="outPut" value="salesOutlet" onclick="$.fn.radioButtonSelectionChanged('outPut', 'outPutId')"> 営業担当者
                            </div>
                        </div>
                        <div id="outPutId">
                            <div class="col-xs-12 no-padding">
                                <div class="col-xs-1 col-xs-offset-2">
                                    <div class="form-group">
                                        <input id="outputStartId" name="outputStartId" placeholder="000"
                                               class="form-control" type="text" value="" disabled onchange="$.fn.onInputValueChange('outputStartId', 'outputStartName')"/>
                                    </div>
                                </div>
                                <div class="col-xs-1 no-padding ratio">~</div>
                                <div class="col-xs-1">
                                    <div class="form-group">
                                        <input id="outputEndId" name="outputEndId" placeholder="999" class="form-control"
                                               type="text" value="" disabled onchange="$.fn.onInputValueChange('outputEndId', 'outputEndName')"/>
                                    </div>
                                </div>
                                <div class="col-xs-3">
                                    <div class="form-group">
                                        <input id="outputStartName" name="outputStartName" class="form-control" type="text"
                                               value="" disabled/>
                                    </div>
                                </div>
                                <div class="col-xs-1 no-padding ratio">~</div>
                                <div class="col-xs-3">
                                    <div class="form-group">
                                        <input id="outputEndName" name="outputEndName" class="form-control" type="text"
                                               value="" disabled/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-2 border-margin-exp">
                            <p>消費者コード</p>
                        </div>
                        <div class="col-xs-1">
                            <div class="form-group">
                                <input id="consumerCodeStart" name="consumerCodeStart" placeholder="0"
                                       class="form-control" type="text" value="" onchange="$.fn.onInputValueChange('consumerCodeStart', 'consumerCodeStartName')"/>
                            </div>
                        </div>
                         <div class="col-xs-1 no-padding ratio">~</div>

                        <div class="col-xs-1">
                            <div class="form-group">
                                <input id="consumeCodeEnd" name="consumeCodeEnd" placeholder="z" class="form-control"
                                       type="text" value="" onchange="$.fn.onInputValueChange('consumeCodeEnd', 'consumerCodeEndName')"/>
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input id="consumerCodeStartName" name="consumerCodeStartName" class="form-control"
                                       type="text" value=""/>
                            </div>
                        </div>
                         <div class="col-xs-1 no-padding ratio">~</div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input id="consumerCodeEndName" name="consumerCodeEndName" class="form-control"
                                       type="text" value=""/>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-2">
                                <p>入居状態</p>
                            </div>
                            <div class="col-xs-1 ">
                                <input type="radio" name="move" value="all" onclick="$.fn.radioButtonSelectionChanged('move', 'moveId')">  全て
                            </div>
                            <div class="col-xs-1 no-padding">
                                <input type="radio" name="move" value="directSales" onclick="$.fn.radioButtonSelectionChanged('move', 'moveId')">  閉栓・休止除
                            </div>
                            <div class="col-xs-2">
                                <input type="radio" name="move" value="directSales" onclick="$.fn.radioButtonSelectionChanged('move', 'moveId')">  未入居除く
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-2">
                                <p>容器区分</p>
                            </div>
                            <div class="col-xs-1 ">
                                <input type="radio" name="move" value="all" onclick="$.fn.radioButtonSelectionChanged('move', 'moveId')"> 全て
                            </div>
                            <div class="col-xs-1 no-padding">
                                <input type="radio" name="move" value="directSales" onclick="$.fn.radioButtonSelectionChanged('move', 'moveId')"> シリンダ
                            </div>
                            <div class="col-xs-2">
                                <input type="radio" name="move" value="directSales" onclick="$.fn.radioButtonSelectionChanged('move', 'moveId')"> バルク
                            </div>
                        </div>
                    </div>

                    </div>
                    </div>

                    <div class="col-xs-12 border1 no-padding">
                        <p class="back-end">作成範囲指定</p>
                        <div class="col-xs-12 no-padding">
			    <div class="col-xs-12 no-padding">
				<div class="col-xs-2">
				    <p>保安機関</p>
				</div>
				<div class="col-xs-1">
				    <input type="radio" name="officeCodes" value="all" checked onclick="$.fn.radioButtonSelectionChanged('officeCodes', 'officeCodesId')"> 全て
				</div>
				<div class="col-xs-1 no-padding">
				    <input type="radio" name="officeCodes" value="directSales" onclick="$.fn.radioButtonSelectionChanged('officeCodes', 'officeCodesId')"> 保安機関
				</div>
			    </div>
			    <div id="officeCodesId">
				<div class="col-xs-12 no-padding">
				    <div class="col-xs-1 col-xs-offset-2">
					<div class="form-group">
					    <input id="trustStartsId" name="trustStartsId" placeholder="000" class="form-control"
						   type="text" value="" disabled onchange="$.fn.onInputValueChange('trustStartsId', 'trustStartsName')"/>
					</div>
				    </div>
				    <div class="col-xs-1 no-padding ratio">~</div>
				    <div class="col-xs-1">
					<div class="form-group">
					    <input id="trustEndSId" name="trustEndSId" placeholder="999" class="form-control"
						   type="text" value="" disabled onchange="$.fn.onInputValueChange('trustEndSId', 'trustEndSName')"/>
					</div>
				    </div>
				    <div class="col-xs-3">
					<div class="form-group">
					    <input id="trustStartsName" name="trustStartsName" class="form-control" type="text" value="" disabled/>
					</div>
				    </div>
				    <div class="col-xs-1 no-padding ratio">~</div>
				    <div class="col-xs-3">
					<div class="form-group">
					    <input id="trustEndSName" name="trustEndSName" class="form-control" type="text"
						   value="" disabled/>
					</div>
				    </div>
				</div>
			    </div>
			</div>

			<div class="col-xs-12 no-padding">
			    <div class="form-group">
				<label class="col-xs-1">対象法律</label>
				<div class="col-xs-5 no-padding">
				    <div class="col-xs-3">
					<input type="radio" name="target" value="all" onclick="$.fn.radioButtonSelectionChanged('target', 'targetId')"/> 全て
				    </div>
				    <div class="col-xs-3 no-padding">
					<input type="radio" name="target" value="custom" onclick="$.fn.radioButtonSelectionChanged('target', 'targetId')"/> 供給開始時
				    </div>
				    <div class="col-xs-3 no-padding">
					<input type="radio" name="target" value="custom" onclick="$.fn.radioButtonSelectionChanged('target', 'targetId')"/> 容器交換時
				    </div>
				    <div class="col-xs-3 no-padding">
					<input type="radio" name="target" value="custom" onclick="$.fn.radioButtonSelectionChanged('target', 'targetId')"/> 供給設備
				    </div>
				</div>
				<div class="col-xs-5 no-padding">
				    <div class="col-xs-3">
					<input type="radio" name="target" value="all" onclick="$.fn.radioButtonSelectionChanged('target', 'targetId')"/> 消費設備
				    </div>
				    <div class="col-xs-3 no-padding ">
					<input type="radio" name="target" value="custom" onclick="$.fn.radioButtonSelectionChanged('target', 'targetId')"/> 周知
				    </div>
				    <div class="col-xs-3 no-padding ">
					<input type="radio" name="target" value="custom" onclick="$.fn.radioButtonSelectionChanged('target', 'targetId')"/> 緊急時対応
				    </div>
				    <div class="col-xs-3 no-padding">
					<input type="radio" name="target" value="custom" onclick="$.fn.radioButtonSelectionChanged('target', 'targetId')"/> 緊急時連絡
				    </div>
				</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 border1 no-padding bottom-box">
                        <p class="back-end">出力指定</p>
                        <div class="col-xs-12 no-padding">
                            <label class="col-xs-2"> 並び順</label>
                            <div class="col-xs-10 no-padding">
                                <div class="col-xs-2">
				    <input type="radio" name="specification" value="all" onclick="$.fn.radioButtonSelectionChanged('specification', 'specificationId')"/> センタコード順
                                </div>
                                <div class="col-xs-2">
                                    <input type="radio" name="specification" value="custom" onclick="$.fn.radioButtonSelectionChanged('specification', 'specificationId')"/> 消費者コード順
                                </div>
                                <div class="col-xs-2">
                                    <input type="radio" name="specification" value="custom" onclick="$.fn.radioButtonSelectionChanged('specification', 'specificationId')"/> 検診順路
                                </div>
                                <div class="col-xs-2">
                                    <input type="radio" name="specification" value="custom" onclick="$.fn.radioButtonSelectionChanged('specification', 'specificationId')"/> 検索名順
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 no-padding">
                            <div class="form-group">
                                <label class="col-xs-2 ">出力先</label>
                                <div class="col-xs-10 no-padding">
                                    <div class="col-xs-2">
                                        <input type="radio" name="destination" value="all" onclick="$.fn.radioButtonSelectionChanged('destination', 'destinationId')"/> プリンタ(印刷)
                                    </div>
                                    <div class="col-xs-3">
                                        <input type="radio" name="destination" value="custom" onclick="$.fn.radioButtonSelectionChanged('destination', 'destinationId')"/> 画面(印刷イメージ)
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
