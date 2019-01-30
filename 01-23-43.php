<?php
include "header.php"
?>
<?php
include "sidebar.php"
?>


<div class="col-md-10 col-xs-8 col-xs-12 no-padding">

    <div class="col-md-12 col-xs-12 no-padding body-background">

        <div class="head-p ">
            <p>検針月報印刷指定

            </p>
        </div>

        <div class="col-xs-12 border1 no-padding">
            <p class="back-end">作成範囲指定</p>
            <form id="meter" action="/gas/meter-reading " method="POST">
                <div class="col-xs-12 border-margin ">
                    <div class="col-xs-2 no-padding ">
                        <p>営業所コード</p>
                    </div>
                    <div class="col-xs-1   ">
                        <input type="radio" name="officeSelection" id="officeSelection" value="all" checked onclick="$.fn.radioButtonSelectionChanged('officeSelection', 'officeSelectionId')"> <span>全て</span>
                    </div>
                    <div class="col-xs-1  no-padding">
                        <input type="radio" name="officeSelection" id="officeSelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('officeSelection', 'officeSelectionId')"> <span>選択</span>
                    </div>

                </div>
                <div id="officeSelectionId">
                 <div class="col-xs-12  ">

                    <div class="col-xs-1 col-xs-offset-2">
                        <div class="form-group">
                            <input id="officeCodeStartId" name="officeCodeStartId" placeholder="000"
                                   class="form-control" type="text" value="" disabled onchange="$.fn.onInputValueChange('officeCodeStartId', 'officeCodeStartName')"/>
                        </div>
                    </div>
                    <div class="col-xs-1 no-padding ratio">～</div>
                    <div class="col-xs-1   ">
                        <div class="form-group">
                            <input id="companyIdEndId" name="companyIdEndId" placeholder="999" class="form-control"
                                   type="text" value="" disabled onchange="$.fn.onInputValueChange('companyIdEndId', 'companyIdEndName')"/>
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <div class="form-group">
                            <input id="officeCodeStartName" name="officeCodeStartName" placeholder=""
                                   class="form-control" type="text" value="" disabled/>
                        </div>
                    </div>
                    <div class="col-xs-1 no-padding ratio">～</div>
                    <div class="col-xs-3">
                        <div class="form-group">
                            <input id="companyIdEndName" name="companyIdEndName" placeholder=""
                                   class="form-control" type="text" value="" disabled/>
                        </div>
                    </div>
                </div>
                </div>
                <div class="col-xs-12">
                    <div class="col-xs-2 no-padding">
                        <p>受託区分</p>
                    </div>
                    <div class="col-xs-1   ">
                        <input type="radio" name="trustSelection" id="trustSelection" value="all" checked onclick="$.fn.radioButtonSelectionChanged('trustSelection', 'trustSelectionId')"> <span>全て</span>
                    </div>
                    <div class="col-xs-1  no-padding">
                        <input type="radio" name="trustSelection" id="trustSelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('trustSelection', 'trustSelectionId')" > <span>直売</span>
                    </div>
                    <div class="col-xs-1 no-padding">
                        <input type="radio" name="trustSelection" id="trustSelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('trustSelection', 'trustSelectionId')"> <span>販売店</span>
                    </div>
                </div>
                <div id="trustSelectionId">
                <div class="col-xs-12  ">

                    <div class="col-xs-1 col-xs-offset-2">
                        <div class="form-group">
                            <input id="trustStartId" name="trustStartId" placeholder="000"
                                   class="form-control" type="text" value="" disabled onchange="$.fn.onInputValueChange('trustStartId', 'trustStartName')"/>
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
                            <input id="trustStartName" name="trustStartName" placeholder=""
                                   class="form-control" type="text" value="" disabled/>
                        </div>
                    </div>
                    <div class="col-xs-1 no-padding ratio">～</div>
                    <div class="col-xs-3">
                        <div class="form-group">
                            <input id="trustEndName" name="trustEndName" placeholder=""
                                   class="form-control" type="text" value="" disabled/>
                        </div>
                    </div>
                </div>
                </div>

                <div class="col-xs-12">
                    <div class="col-xs-2 no-padding">
                        <p>出力区分</p>
                    </div>
                    <div class="col-xs-1   ">
                        <input type="radio" name="outputSelection" id="outputSelection" value="all" checked onclick="$.fn.radioButtonSelectionChanged('outputSelection', 'outputSelectionId')"> <span>全て</span>
                    </div>
                    <div class="col-xs-1  no-padding">
                        <input type="radio" name="outputSelection" id="outputSelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('outputSelection', 'outputSelectionId')"> <span>地区</span>
                    </div>
                    <div class="col-xs-3  no-padding">
                        <input type="radio" name="outputSelection" id="outputSelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('outputSelection', 'outputSelectionId')"> <span>検針・工事担当者</span>
                    </div>
                </div>
                <div id="outputSelectionId">
                <div class="col-xs-12  ">

                    <div class="col-xs-1 col-xs-offset-2">
                        <div class="form-group">
                            <input id="outputStartId" name="outputStartId" placeholder="000"
                                   class="form-control" type="text" value="" disabled onchange="$.fn.onInputValueChange('outputStartId', 'outputStartName')"/>
                        </div>
                    </div>
                    <div class="col-xs-1 no-padding ratio">～</div>
                    <div class="col-xs-1  ">
                        <div class="form-group">
                            <input id="outputEndId" name="outputEndId" placeholder="999" class="form-control"
                                   type="text" value="" disabled onchange="$.fn.onInputValueChange('outputEndId', 'outputEndName')"/>
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <div class="form-group">
                            <input id="outputStartName" name="outputStartName" placeholder=""
                                   class="form-control" type="text" value="" disabled/>
                        </div>
                    </div>
                    <div class="col-xs-1 no-padding ratio">～</div>
                    <div class="col-xs-3">
                        <div class="form-group">
                            <input id="outputEndName" name="outputEndName" placeholder=""
                                   class="form-control" type="text" value="" disabled/>
                        </div>
                    </div>
                </div>
                </div>

                <div class="col-xs-12">
                    <div class="col-xs-2 no-padding">
                        <p>検針月</p>
                    </div>
                    <div class="form-group ">

                        <div class="col-xs-3">
                            <input type="date" class="form-control"/>
                        </div>


                    </div>


                </div>

        </div>


        <div class="col-xs-12 border1 no-padding">
            <p class="back-end">出力指定</p>
            <div class="col-xs-12">

                <div class="col-xs-12 no-padding">
                    <div class="col-xs-2 no-padding">
                        <p>改ページ指定</p>
                    </div>
                    <div class="col-xs-2  ">
                        <input id="meterReadingClassification1" name="meterReadingClassification" type="radio"
                               value="手書伝票"/> <span>営業所・販売店</span>
                    </div>
                    <div class="col-xs-2 no-padding">
                        <input id="meterReadingClassification2" name="meterReadingClassification" type="radio"
                               value="ハンディ"/><span> 検針・工事担当者</span>
                    </div>


                </div>

            </div>
            <div class="col-xs-12 ">

                <div class="col-xs-12 no-padding">
                    <div class="col-xs-2 no-padding">
                        <p>出力先</p>
                    </div>
                    <div class="col-xs-2">
                        <input id="meterSelection" name="meterSelection" type="radio"
                               value="手書伝票" onclick="$.fn.radioButtonSelectionChanged('meterSelection', 'meterSelectionId')"/> <span>プリンタ(印刷)</span>
                    </div>
                    <div class="col-xs-2 no-padding ">
                        <input id="meterSelection" name="meterSelection" type="radio"
                               value="ハンディ" onclick="$.fn.radioButtonSelectionChanged('meterSelection', 'meterSelectionId')"/> <span>画面(印刷イメージ)</span>
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

</body>

</html>
