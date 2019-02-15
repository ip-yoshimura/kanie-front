<?php
include "header.php"
?>
<?php
include "sidebar.php"
?>
<div class="col-xs-10 col-md-10  no-padding">

    <div class="col-md-12 col-xs-12 no-padding body-background">
        <div class="head-p">
            <p>請求一覧表印刷指定（消費者)</p>
        </div>

        <form id="meter" action="/gas/meter-reading" method="POST">
            <div class="col-xs-12 border1 no-padding">
                <p class="backend">
                    消費者範囲指定</p>
                <div class="col-xs-12">
                    <div class="col-xs-1 no-padding">
                        <p>営業所コード</p>
                    </div>
                    <div class="col-xs-1   ">
                        <input type="radio" name="officeCodeSelection" id="officeCodeSelection" value="all" checked onclick="$.fn.radioButtonSelectionChanged('officeCodeSelection', 'officeCodeSelectionId')"> <span>全て</span>
                    </div>
                    <div class="col-xs-1  no-padding">
                        <input type="radio" name="officeCodeSelection" id="officeCodeSelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('officeCodeSelection', 'officeCodeSelectionId')">  <span>選択</span>
                    </div>
                </div>
                <div id="officeCodeSelectionId">
                    <div class="col-xs-12">
                        <div class="col-xs-1 col-lg-offset-1  ">
                            <div class="form-group ">
                                <input id="officeCodeStartId" name="officeCodeStartId" placeholder="000" class="form-control" type="text" value="" disabled onchange="$.fn.onInputValueChange('officeCodeStartId', 'officeCodeStartName')"/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">~</div>
                        <div class="col-xs-1   ">
                            <div class="form-group">
                                <input id="companyIdEndId" name="companyIdEndId" placeholder="999" class="form-control" type="text" value="" disabled onchange="$.fn.onInputValueChange('companyIdEndId', 'companyIdEndName')"/>
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input id="officeCodeStartName" name="officeCodeStartName" placeholder="Company 1" class="form-control" type="text" value="" disabled/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">~</div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input id="companyIdEndName" name="companyIdEndName" placeholder="Company 2" class="form-control" type="text" value="" disabled/>
                            </div>
                        </div>
                    </div>
                </div>
              
                <div class="col-xs-12 no-padding">
                    <div class="col-xs-12  ">
                        <div class="col-xs-1 no-padding">
                            <p>受託区分</p>
                        </div>
                        <div class="col-xs-1  ">
                            <input type="radio" name="trusteeshipSelection" id="trusteeshipSelection" value="all" checked onclick="$.fn.radioButtonSelectionChanged('trusteeshipSelection', 'trusteeshipSelectionId')"> <span>全て</span>
                        </div>
                        <div class="col-xs-1">
                            <input type="radio" name="trusteeshipSelection" id="trusteeshipSelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('trusteeshipSelection', 'trusteeshipSelectionId')"> <span>直売</span>
                        </div>
                        <div class="col-xs-2">
                            <input type="radio" name="trusteeshipSelection" id="trusteeshipSelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('trusteeshipSelection', 'trusteeshipSelectionId')"> <span>販売店</span>
                        </div>
                    </div>
                    <div id="trusteeshipSelectionId">
                        <div class="col-xs-12  ">
                            <div class="col-xs-1 col-xs-offset-1">
                                <div class="form-group">
                                    <input id="trusteeshipStartId" name="trusteeshipStartId" placeholder="000" class="form-control" type="text" value="" disabled onchange="$.fn.onInputValueChange('trusteeshipStartId', 'trusteeshipStartName')"/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">~</div>
                            <div class="col-xs-1">
                                <div class="form-group">
                                    <input id="trusteeshipEndId" name="trusteeshipEndId" placeholder="999" class="form-control" type="text" value="" disabled onchange="$.fn.onInputValueChange('trusteeshipEndId', 'trusteeshipEndName')"/>
                                </div>
                            </div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input id="trusteeshipStartName" name="trusteeshipStartName" class="form-control" type="text" value="" disabled/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">~</div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input id="trusteeshipEndName" name="trusteeshipEndName" class="form-control" type="text" value="" disabled/>
                                </div>
                            </div>
                        </div>
                    </div>
                
                </div>

                <div class="col-xs-12  ">
                    <div class="col-xs-12 no-padding ">
                        <div class="col-xs-1 no-padding">
                            <p>出力区分</p>
                        </div>
                        <div class="col-xs-1  ">
                            <input type="radio" name="differentiation" id="differentiation" value="all" checked onclick="$.fn.radioButtonSelectionChanged('differentiation', 'differentiationId')"> <span>全て</span>
                        </div>
                        <div class="col-xs-1">
                            <input type="radio" name="differentiation" id="differentiation" value="custom" onclick="$.fn.radioButtonSelectionChanged('differentiation', 'differentiationId')"><span> 地区</span>
                        </div>
                        <div class="col-xs-2">
                            <input type="radio" name="differentiation" id="differentiation" value="custom" onclick="$.fn.radioButtonSelectionChanged('differentiation', 'differentiationId')"><span> 営業担当者</span>
                        </div>
                    </div>
                    <div id="differentiationId">
                        <div class="col-xs-12 no-padding ">
                            <div class="col-xs-12 no-padding ">
                                <div class="col-xs-1 col-xs-offset-1">
                                    <div class="form-group">
                                        <input id="differentiationStartId" name="differentiationStartId" placeholder="000" class="form-control" type="text" value="" disabled onchange="$.fn.onInputValueChange('differentiationStartId', 'differentiationStartName')"/>
                                    </div>
                                </div>
                                <div class="col-xs-1 no-padding ratio">~</div>
                                <div class="col-xs-1">
                                    <div class="form-group">
                                        <input id="differentiationEndId" name="differentiationEndId" placeholder="999" class="form-control" type="text" value="" disabled onchange="$.fn.onInputValueChange('differentiationEndId', 'differentiationEndName')"/>
                                    </div>
                                </div>
                                <div class="col-xs-3">
                                    <div class="form-group">
                                        <input id="differentiationStartName" name="differentiationStartName" class="form-control" type="text" value="" disabled/>
                                    </div>
                                </div>
                                <div class="col-xs-1 no-padding ratio">~</div>
                                <div class="col-xs-3">
                                    <div class="form-group">
                                        <input id="differentiationEndName" name="differentiationEndName" class="form-control" type="text" value="" disabled/>
                                    </div>
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
                            <input id="consumerCodeStart" name="consumerCodeStart" placeholder="0" class="form-control" type="text" value="" onchange="$.fn.onInputValueChange('consumerCodeStart', 'consumerCodeStartName')"/>
                        </div>
                    </div>
                    <div class="col-xs-1 no-padding ratio">~</div>
                    <div class="col-xs-2">
                        <div class="form-group">
                            <input id="consumeCodeEnd" name="consumeCodeEnd" placeholder="z" class="form-control" type="text" value="" onchange="$.fn.onInputValueChange('consumeCodeEnd', 'consumerCodeEndName')"/>
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <div class="form-group">
                            <input id="consumerCodeStartName" name="consumerCodeStartName" class="form-control" type="text" value=""/>
                        </div>
                    </div>
                    <div class="col-xs-1 no-padding ratio">~</div>
                    <div class="col-xs-3">
                        <div class="form-group">
                            <input id="consumerCodeEndName" name="consumerCodeEndName" class="form-control" type="text" value=""/>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 no-padding">
                <div class="col-xs-12 border1 no-padding">
                    <p class="backend">作成範囲指定</p>
                    <div class="form-group">
                        <label class="control-label col-xs-1  ">請求年月</label>
                        <div class="col-xs-2">
                            <input type="date" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-1">締切日</label>
                        <div class="col-xs-1">
                            <input type="text" class="form-control">
                        </div>
			<label class="col-xs-1 no-padding">日</label>
                    </div>








                </div>
            </div>




            <div class="col-xs-12 no-padding bottom-box">
                <div class="col-xs-12 border1 no-padding">
                    <p class="backend">出力指定</p>


                    <div class="col-xs-12">
                        <div class="no-padding">
                            <div class="col-xs-1 no-padding">
                                <p>改ページ指定</p>
                            </div>
                            <div class="col-xs-2">
                                <input type="radio" name="breakSelection" id="breakSelection" value="all" onclick="$.fn.radioButtonSelectionChanged('breakSelection', 'breakSelectionId')"> <span>営業所・販売店</span>
                            </div>
                            <div class="col-xs-1">
                                <input type="radio" name="breakSelection" id="breakSelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('breakSelection', 'breakSelectionId')"> <span>地区</span>
                            </div>
                            <div class="col-xs-2">
                                <input type="radio" name="breakSelection" id="breakSelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('breakSelection', 'breakSelectionId')"> <span>営業担当者</span>
                            </div>

                            <!--<div class="col-xs-2">
                                <input type="radio" name="all" value="all"> 検針担当者
                            </div>
                            <div class="col-xs-2">
                                <input type="radio" name="directSales" value="directSales"> 集金担当者
                            </div>-->
                            <div class="col-xs-1">
                                <input type="radio" name="breakSelection" id="breakSelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('breakSelection', 'breakSelectionId')"> <span>なし</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12">
                        <div class="no-padding">
                            <div class="col-xs-1 no-padding">
                                <p>並び順</p>
                            </div>
                            <div class="col-xs-2">
                                <input type="radio" name="sortBySelection" id="sortBySelection" value="all" onclick="$.fn.radioButtonSelectionChanged('sortBySelection', 'sortBySelectionId')"><span> 消費者コード順</span>
                            </div>
                            <div class="col-xs-2">
                                <input type="radio" name="sortBySelection" id="sortBySelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('sortBySelection', 'sortBySelectionId')"><span> 検針順路順</span>
                            </div>

                            <div class="col-xs-2 no-padding">
                                <input type="radio" name="sortBySelection" id="sortBySelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('sortBySelection', 'sortBySelectionId')"> <span>検索名順</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="no-padding">
                            <div class="col-xs-1 no-padding">
                                <p>出力先</p>
                            </div>
                            <div class="col-xs-2">
                                <input type="radio" name="destinationSelection" id="destinationSelection" value="all" onclick="$.fn.radioButtonSelectionChanged('destinationSelection', 'destinationSelectionId')"> <span>プリンタ(印刷)</span>
                            </div>
                            <div class="col-xs-4">
                                <input type="radio" name="destinationSelection" id="destinationSelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('destinationSelection', 'destinationSelectionId')"> <span>画面(印刷イメージ)</span>
                            </div>
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

</body>

</html>
