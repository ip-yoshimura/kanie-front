<?php
include "header.php"
?>
<?php
include "sidebar.php"
?>
<div class="col-xs-10 col-md-10   no-padding">

    <div class="col-md-12 col-xs-12 no-padding body-background">
        <div class="head-p">
            <p>締切処理漏れ一覧表印刷指定</p>
        </div>


        <form id="meter" action="/gas/meter-reading" method="POST">
            <div class="col-xs-12 no-padding">
                <div class="col-xs-12 border1 no-padding">
                    <p class="backend"> 消費者範囲指定</p>
                    <div class="col-xs-12">
                        <div class="col-xs-1 no-padding">
                            <p>営業所コード</p>

                        </div>
                        <div class="col-xs-1   ">
                            <input type="radio" name="officeCode" value="all" checked
                                   onclick="$.fn.radioButtonSelectionChanged('officeCode', 'officeCodeId')"> 全て
                        </div>
                        <div class="col-xs-1  no-padding">
                            <input type="radio" name="officeCode" value="custom"
                                   onclick="$.fn.radioButtonSelectionChanged('officeCode', 'officeCodeId')"> 選択
                        </div>

                    </div>

                    <div id="officeCodeId">
                        <div class="col-xs-12">
                            <div class="col-xs-1">

                            </div>
                            <div class="col-xs-1   ">
                                <div class="form-group">
                                    <input id="officeCodeStartId" name="officeCodeStartId" placeholder="000"
                                           class="form-control"
                                           type="text" value="" disabled
                                           onchange="$.fn.onInputValueChange('officeCodeStartId', 'officeCodeStartName')"/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">~</div>
                            <div class="col-xs-1   ">
                                <div class="form-group">
                                    <input id="companyIdEndId" name="companyIdEndId" placeholder="999"
                                           class="form-control"
                                           type="text" value="" disabled
                                           onchange="$.fn.onInputValueChange('companyIdEndId', 'companyIdEndName')"/>
                                </div>
                            </div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input id="officeCodeStartName" name="officeCodeStartName" placeholder="Company 1"
                                           class="form-control" type="text" value="" disabled/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">~</div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input id="companyIdEndName" name="companyIdEndName" placeholder="Company 2"
                                           class="form-control" type="text" value="" disabled/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-xs-12 no-padding">
                    <div class="col-xs-12 border1 no-padding">
                        <p class="backend">作成範囲指定</p>
                        <div class="form-group">
                            <!-- <div class="no-padding">
                                     <div class="col-xs-2">
                                         <p>印刷区分の指定</p>
                                     </div>
                                     <div class="col-xs-1">
                                         <input type="radio" name="all" value="all"> 当月
                                     </div>
                                     <div class="col-xs-1">
                                         <input type="radio" name="directSales" value="directSales"> 不能
                                     </div>
                                     <div class="col-xs-2">
                                         <input type="radio" name="salesOutlet" value="salesOutlet"> 販売店
                                     </div>
                                 </div>-->
                        </div>
                        <div class="col-xs-12">
                            <label class="control-label col-xs-1 no-padding">
                                作成範囲指定</label>
                            <div class="col-xs-2">
                                <input type="date" class="form-control"/>
                            </div>
                        </div>
                        <div class="col-xs-12 border-margin-bottom border-margin">
                            <label class="control-label col-xs-1 no-padding ">
                                締切日指定</label>
                            <div class="col-xs-1">
                                <input type="radio" name="directSales" value="all"
                                       onclick="$.fn.radioButtonSelectionChanged('directSales', 'directSalesId')"> する
                            </div>
                            <div class="col-xs-2">
                                <input type="radio" name="directSales" value="salesOutlet"
                                       onclick="$.fn.radioButtonSelectionChanged('directSales', 'directSalesId')"> しない
                            </div>

                            <div class="col-xs-1">
                                <input type="number" class="form-control" placeholder="3">
                            </div>
                            <div class="col-xs-1" style="margin-top:10px;">
                                日
                            </div>

                        </div>

                    </div>
                </div>

                <div class="col-xs-12 no-padding">
                    <div class="col-xs-12 border1 no-padding">
                        <p class="backend">出力指定</p>


                        <div class="form-group">

                        </div>

                        <div class="col-xs-12">

                            <div class="col-xs-1 no-padding">
                                <p>並び順</p>
                            </div>
                            <div class="col-xs-2">
                                <input type="radio" name="sortBy" value="all"
                                       onclick="$.fn.radioButtonSelectionChanged('sortBy', 'sortById')"> 消費者コード順
                            </div>
                            <div class="col-xs-2">
                                <input type="radio" name="sortBy" value="directSales"
                                       onclick="$.fn.radioButtonSelectionChanged('sortBy', 'sortById')"> 検針順路順
                            </div>

                            <div class="col-xs-2">
                                <input type="radio" name="sortBy" value="directSales"
                                       onclick="$.fn.radioButtonSelectionChanged('sortBy', 'sortById')"> 検索名順
                            </div>
                            <!--<div class="col-xs-2">
                                <input type="radio" name="directSales" value="directSales"> 集金順路順
                            </div>-->

                        </div>

                        <div class="col-xs-12">
                            <div class="no-padding">
                                <div class="col-xs-1 no-padding">
                                    <p>出力先</p>
                                </div>
                                <div class="col-xs-2 no-padding">
                                    <input type="radio" name="outputDestination" value="all"
                                           onclick="$.fn.radioButtonSelectionChanged('outputDestination', 'outputDestinationId')">
                                    プリンタ（印刷）
                                </div>
                                <div class="col-xs-4">
                                    <input type="radio" name="outputDestination" value="directSales"
                                           onclick="$.fn.radioButtonSelectionChanged('outputDestination', 'outputDestinationId')">
                                    画面（印刷イメージ）
                                </div>

                                <!--<div class="col-xs-2">
                                    <input type="radio" name="all" value="all"> 検索名順
                                </div>-->
                                <!--<div class="col-xs-2">
                                    <input type="radio" name="directSales" value="directSales"> 集金順路順
                                </div>-->
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