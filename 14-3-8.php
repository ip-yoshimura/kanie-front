<?php
include "header.php"
?>
<?php
include "sidebar.php"
?>

<div class="col-md-10 col-xs-8 col-xs-12 no-padding">

    <div class="col-md-12 col-xs-12 no-padding body-background">

        <div class="head-p ">
            <p>保安委託先提出用一覧表印刷指定
            </p>
        </div>
        <form id="meter" action="/gas/meter-reading" method="POST">
            <div class="col-xs-12 border1 no-padding">

                <p class="backend">消費者範囲指定</p>

                <div class="col-xs-12">
                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-1 no-padding">
                            <p>営業所コード</p>
                        </div>
                        <div class="col-xs-1">
                            <input type="radio" name="officeCode" value="all" checked onclick="$.fn.radioButtonSelectionChanged('officeCode', 'officeCodeId')"> 全て
                        </div>
                        <div class="col-xs-1">
                            <input type="radio" name="officeCode" value="directSales" onclick="$.fn.radioButtonSelectionChanged('officeCode', 'officeCodeId')"> 選択
                        </div>

                    </div>
                    <div id="officeCodeId">
                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-1 col-xs-offset-1">
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
                <div class="col-xs-12">
                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-1 no-padding">
                            <p>自他社区分</p>
                        </div>
                        <div class="col-xs-1">
                            <input type="radio" name="otherCompany" value="all" checked onclick="$.fn.radioButtonSelectionChanged('otherCompany', 'otherCompanyId')"> 全て


                        </div>
                        <div class="col-xs-1">
                            <input type="radio" name="otherCompany" value="directSales" onclick="$.fn.radioButtonSelectionChanged('otherCompany', 'otherCompanyId')"> 自社


                        </div>
                        <div class="col-xs-2">
                            <input type="radio" name="otherCompany" value="salesOutlet" onclick="$.fn.radioButtonSelectionChanged('otherCompany', 'otherCompanyId')"> 他社


                        </div>
                    </div>

                 <div id="otherCompanyId">
                     
                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-1 col-xs-offset-1">
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
                <div class="col-xs-12">
                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-1 no-padding">
                            <p>出力区分1</p>
                        </div>
                        <div class="col-xs-1">
                            <input type="radio" name="output" value="all" checked onclick="$.fn.radioButtonSelectionChanged('output', 'outputId')"> 全て


                        </div>
                        <div class="col-xs-1">
                            <input type="radio" name="output" value="directSales" onclick="$.fn.radioButtonSelectionChanged('output', 'outputId')"> 地区


                        </div>
                        <div class="col-xs-2">
                            <input type="radio" name="output" value="salesOutlet" onclick="$.fn.radioButtonSelectionChanged('output', 'outputId')"> 営業担当者


                        </div>

                    </div>
                    
                </div>
                <div class="col-xs-12">
                    <div class="col-xs-1 no-padding">
                        <p>消費者コード</p>
                    </div>
                    <div class="col-xs-2">
                        <div class="form-group">
                            <input id="consumerCodeStart" name="consumerCodeStart" placeholder="0"
                                   class="form-control" type="text" value="" onchange="$.fn.onInputValueChange('consumerCodeStart', 'consumerCodeStartName')"/>
                        </div>
                    </div>
                    <div class="col-xs-1 no-padding ratio">~</div>
                    <div class="col-xs-2">
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
                    <div class="col-xs-3">
                        <div class="form-group">
                            <input id="consumerCodeEndName" name="consumerCodeEndName" class="form-control"
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
                            <input type="radio" name="alarm" value="all" onclick="$.fn.radioButtonSelectionChanged('alarm', 'alarmId')">全て
                        </div>
                        <div class="col-xs-2 no-padding">
                            <input type="radio" name="alarm" value="directSales" onclick="$.fn.radioButtonSelectionChanged('alarm', 'alarmId')">閉栓・休止除く


                        </div>
                        <div class="col-xs-2 no-padding">
                            <input type="radio" name="alarm" value="directSales" onclick="$.fn.radioButtonSelectionChanged('alarm', 'alarmId')">未入居除く

                        </div>

                    </div>

                </div>

                <div class="col-xs-12">
                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-1 no-padding">
                            <p>容器区分</p>
                        </div>
                        <div class="col-xs-1">
                            <input type="radio" name="container" value="all" onclick="$.fn.radioButtonSelectionChanged('container', 'containerId')">全て
                        </div>
                        <div class="col-xs-1 no-padding">
                            <input type="radio" name="container" value="directSales" onclick="$.fn.radioButtonSelectionChanged('container', 'containerId')">シリンダ


                        </div>
                        <div class="col-xs-2=1">
                            <input type="radio" name="container" value="directSales" onclick="$.fn.radioButtonSelectionChanged('container', 'containerId')">バルク

                        </div>

                    </div>

                </div>
            </div>

            <div class="col-xs-12 border1 no-padding">
                <p class="backend">作成範囲指定</p>
                <div class="col-xs-12">
                    <div class="form-group">
                        <label class="col-xs-1 no-padding">保安機関
                        </label>

                        <div class="col-xs-10">
                            <div class="col-xs-1 no-padding">
                                <input type="radio" name="security" value="all" onclick="$.fn.radioButtonSelectionChanged('security', 'securityId')"/>全て
                            </div>

                            <div class="col-xs-1 no-padding">
                                <input type="radio" name="security" value="directSales" onclick="$.fn.radioButtonSelectionChanged('security', 'securityId')"/>保安機関
                            </div> 


                        </div>
                    </div>
                </div>

                <div class="col-xs-12">

                    <div class="form-group">

                        <label class="col-xs-1 no-padding">保安業務   
                        </label>

                        <div class="col-xs-1">
                            <input type="radio" name="service" value="all" onclick="$.fn.radioButtonSelectionChanged('service', 'serviceId')"/>全て
                        </div>

                        <div class="col-xs-2 no-padding">
                            <input type="radio" name="service" value="service" onclick="$.fn.radioButtonSelectionChanged('service', 'serviceId')"/> 供給開始時
                        </div>

                        <div class="col-xs-2 no-padding">
                            <input type="radio" name="service" value="service" onclick="$.fn.radioButtonSelectionChanged('service', 'serviceId')"/> 容器交換時
                        </div>

                        <div class="col-xs-2 no-padding">
                            <input type="radio" name="service" value="service" onclick="$.fn.radioButtonSelectionChanged('service', 'serviceId')"/> 容器交換時
                        </div>

                        <div class="col-xs-2 no-padding">
                            <input type="radio" name="service" value="service" onclick="$.fn.radioButtonSelectionChanged('service', 'serviceId')"/> 供給設備
                        </div>

                        <div class="col-xs-2 no-padding">
                            <input type="radio" name="service" value="service" onclick="$.fn.radioButtonSelectionChanged('service', 'serviceId')"/> 消費設備
                        </div>

                        <div class="col-xs-1 ">
                            <input type="radio" name="service" value="service" onclick="$.fn.radioButtonSelectionChanged('service', 'serviceId')"/> 周知
                        </div>

                        <div class="col-xs-1 no-padding">
                            <input type="radio" name="service" value="service" onclick="$.fn.radioButtonSelectionChanged('service', 'serviceId')"/> 緊急時対応
                        </div>

                        <div class="col-xs-2">
                            <input type="radio" name="service" value="service" onclick="$.fn.radioButtonSelectionChanged('service', 'serviceId')"/> 緊急時連絡
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-xs-12 border1 no-padding bottom-box">
                <p class="backend">消費者範囲指定</p>
                <div class="col-xs-12">

                    <div class="form-group">

                        <label class="col-xs-1 no-padding">並び順
                        </label>
                        <div class="col-xs-10">
                            <div class="col-xs-2 no-padding">
                                <input type="radio" name="sortBy" value="all" onclick="$.fn.radioButtonSelectionChanged('sortBy', 'sortById')"/>センタコード順
                            </div>

                            <div class="col-xs-2 no-padding">
                                <input type="radio" name="sortBy" value="sortBy" onclick="$.fn.radioButtonSelectionChanged('sortBy', 'sortById')"/>消費者コード順
                            </div>

                            <div class="col-xs-2">
                                <input type="radio" name="sortBy" value="sortBy" onclick="$.fn.radioButtonSelectionChanged('sortBy', 'sortById')"/>検針順路順
                            </div>

                            <div class="col-xs-2">
                                <input type="radio" name="sortBy" value="sortBy" onclick="$.fn.radioButtonSelectionChanged('sortBy', 'sortById')"/>検索名順
                            </div>

                        </div>


                    </div>
                </div>

                <div class="col-xs-12">

                    <div class="form-group">
                        <label class="col-xs-1 no-padding"> 出力先  
                        </label>
                        <div class="col-xs-10">
                            <div class="col-xs-2 no-padding">
                                <input type="radio" name="destination" value="all" onclick="$.fn.radioButtonSelectionChanged('destination', 'destinationId')"/> プリンタ（印刷）
                            </div>

                            <div class="col-xs-3 no-padding">
                                <input type="radio" name="destination" value="destination" onclick="$.fn.radioButtonSelectionChanged('destination', 'destinationId')"/> 画面（印刷イメージ）
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
</div>

</body>

</html>