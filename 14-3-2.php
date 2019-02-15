<?php
include "header.php"
?>
<?php
include "sidebar.php"
?>

<div class="col-md-10 col-xs-8 col-xs-12 no-padding">

    <div class="col-md-12 col-xs-12 no-padding body-background">

        <div class="head-p ">
            <p>消費者保安情報印刷指定
            </p>
        </div>
        <form id="meter" action="/gas/meter-reading" method="POST">
            <div class="col-xs-12 border1 no-padding">

                <p class="back-end">消費者範囲指定</p>

                <div class="col-xs-12 no-padding">
                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-2 ">
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
                        <div class="col-xs-2">
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
                        <div class="col-xs-2 ">
                            <p>出力区分1</p>
                        </div>
                        <div class="col-xs-1">
                            <input type="radio" name="category" value="all" checked onclick="$.fn.radioButtonSelectionChanged('category', 'categoryId')"> 全て


                        </div>
                        <div class="col-xs-1">
                            <input type="radio" name="category" value="directSales" onclick="$.fn.radioButtonSelectionChanged('category', 'categoryId')"> 地区


                        </div>
                        <div class="col-xs-2">
                            <input type="radio" name="category" value="salesOutlet" onclick="$.fn.radioButtonSelectionChanged('category', 'categoryId')"> 営業担当者


                        </div>

                    </div>
                    <div id="categoryId">
                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-1 col-xs-offset-2">
                            <div class="form-group">
                                <input id="categoryStartId" name="categoryStartId" placeholder="000"
                                       class="form-control" type="text" value="" disabled onchange="$.fn.onInputValueChange('categoryStartId', 'categoryStartName')"/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">~</div>
                        <div class="col-xs-1">
                            <div class="form-group">
                                <input id="categoryEndId" name="categoryEndId" placeholder="999" class="form-control"
                                       type="text" value="" disabled onchange="$.fn.onInputValueChange('categoryEndId', 'categoryEndName')"/>
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input id="categoryStartName" name="categoryStartName" class="form-control" type="text"
                                       value="" disabled/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">~</div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input id="categoryEndName" name="categoryEndName" class="form-control" type="text"
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
                    <div class="col-xs-2">
                        <div class="form-group">
                            <input id="consumerCodeStartName" name="consumerCodeStartName" class="form-control"
                                   type="text" value=""/>
                        </div>
                    </div>
                    <div class="col-xs-1 no-padding ratio">~</div>
                    <div class="col-xs-2">
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
                        <div class="col-xs-1">
                            <input type="radio" name="status" value="all" onclick="$.fn.radioButtonSelectionChanged('status', 'statusId')">  全て
                        </div>
                        <div class="col-xs-2">
                            <input type="radio" name="status" value="directSales" onclick="$.fn.radioButtonSelectionChanged('status', 'statusId')"> 閉栓・休止除く


                        </div>
                        <div class="col-xs-2 ml-n-40">
                            <input type="radio" name="status" value="directSales" onclick="$.fn.radioButtonSelectionChanged('status', 'statusId')">  未入居除く

                        </div>

                    </div>

                </div>

                <div class="col-xs-12 no-padding">
                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-2">
                            <p>容器区分</p>
                        </div>
                        <div class="col-xs-1">
                            <input type="radio" name="container" value="all" onclick="$.fn.radioButtonSelectionChanged('container', 'containerId')"> 全て
                        </div>
                        <div class="col-xs-2">
                            <input type="radio" name="container" value="directSales" onclick="$.fn.radioButtonSelectionChanged('container', 'containerId')">  シリンダ


                        </div>
                        <div class="col-xs-2 ml-n-40">
                            <input type="radio" name="container" value="directSales" onclick="$.fn.radioButtonSelectionChanged('container', 'containerId')">  バルク

                        </div>

                    </div>

                </div>

            </div>
            <div class="col-xs-12 border1 no-padding">

                <p class="back-end">作成範囲指定</p>
                <div class="col-xs-12 no-padding">

                    <div class="form-group">

                        <label class="col-xs-2">対象法律
                        </label>
                        <div class="col-xs-10 no-padding">
                            <div class="col-xs-2">
                                <input type="radio" name="targetLaw" value="all" onclick="$.fn.radioButtonSelectionChanged('contaitargetLawner', 'targetLawId')"/> 全て
                            </div>
                            <div class="col-xs-2">
                                <input type="radio" name="targetLaw" value="custom" onclick="$.fn.radioButtonSelectionChanged('contaitargetLawner', 'targetLawId')"/> 液石法
			    </div>
                            <div class="col-xs-2">
                                <input type="radio" name="targetLaw" value="custom" onclick="$.fn.radioButtonSelectionChanged('contaitargetLawner', 'targetLawId')"/> 高圧法
                            </div>
                            <div class="col-xs-2">
                                <input type="radio" name="targetLaw" value="custom" onclick="$.fn.radioButtonSelectionChanged('contaitargetLawner', 'targetLawId')"/> ガス事業法
                            </div>

                        </div>


                    </div>
                </div>

                <div class="col-xs-12 no-padding">

                    <div class="form-group">
                        <label class="col-xs-2">施設区分
                        </label>
                        <div class="col-xs-10 no-padding">
                            <div class="col-xs-2">
                                <input type="radio" name="facility" value="all" checked onclick="$.fn.radioButtonSelectionChanged('facility', 'facilityId')"/> 全て
                            </div>

                            <div class="col-xs-2 ml-n-60">
                                <input type="radio" name="facility" value="custom" onclick="$.fn.radioButtonSelectionChanged('facility', 'facilityId')"/> 選択
                            </div>


                        </div>


                    </div>
                    <div id="facilityId">
                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-1 col-xs-offset-2">
                            <div class="form-group">
                                <input id="facilitystartId" name="facilitystartId" placeholder="000"
                                       class="form-control" type="text" value="" disabled onchange="$.fn.onInputValueChange('facilitystartId', 'facilityName')"/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">~</div>
                        <div class="col-xs-1">
                            <div class="form-group">
                                <input id="facilityEndId" name="facilityEndId" placeholder="999" class="form-control"
                                       type="text" value="" disabled onchange="$.fn.onInputValueChange('facilityEndId', 'facilityEndName')"/>
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input id="facilityName" name="facilityName" class="form-control" type="text"
                                       value="" disabled/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">~</div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input id="facilityEndName" name="facilityEndName" class="form-control" type="text"
                                       value="" disabled/>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-xs-12 no-padding">
                    <div class="form-group">
                        <label class="col-xs-2">供給形態
                        </label>
                        <div class="col-xs-10 no-padding">
                            <div class="col-xs-1">
                                <input type="radio" name="supply" value="all" onclick="$.fn.radioButtonSelectionChanged('supply', 'supplyId')"/> 全て
                            </div>

                            <div class="col-xs-2 ml-15">
                                <input type="radio" name="supply" value="custom" onclick="$.fn.radioButtonSelectionChanged('supply', 'supplyId')"/> 個別供給
                            </div>
                            <div class="col-xs-3 ml-n-15">

                                <input type="radio" name="supply" value="custom" onclick="$.fn.radioButtonSelectionChanged('supply', 'supplyId')"/> 個別、集合子  

                            </div>

                            <div class="col-xs-2 ml-n-80">
                                <input type="radio" name="supply" value="custom" onclick="$.fn.radioButtonSelectionChanged('supply', 'supplyId')"/> 集合子
                            </div>

                            <div class="col-xs-2  ml-n-60">
                                <input type="radio" name="supply" value="custom" onclick="$.fn.radioButtonSelectionChanged('supply', 'supplyId')"/> 集合親
                            </div>

                        </div>


                    </div>
                </div>
            </div>

            <div class="col-xs-12 border1 no-padding bottom-box">

                <p class="back-end">出力指定</p>
                <div class="col-xs-12 no-padding">

                    <div class="form-group">

                        <label class="col-xs-2">出力帳票
                        </label>
                        <div class="col-xs-10 no-padding">
                            <div class="col-xs-1 no-padding ml-15">
                                <input type="radio" name="from" value="all" onclick="$.fn.radioButtonSelectionChanged('from', 'fromId')"/> 一覧表
                            </div>

                            <div class="col-xs-3 ml-61">
                                <input type="radio" name="from" value="custom" onclick="$.fn.radioButtonSelectionChanged('from', 'fromId')"/> 集計表
                            </div>


                        </div>
                    </div>
                </div>

                <div class="col-xs-12 no-padding">

                    <div class="form-group">
                        <label class="col-xs-2"> 改ページ指定
                        </label>
                        <div class="col-xs-10 no-padding">
                            <div class="col-xs-2">
                                <input type="radio" name="pageBreak" value="all" onclick="$.fn.radioButtonSelectionChanged('pageBreak', 'pageBreakId')"/> 営業所・販売店
                            </div>

                            <div class="col-xs-2">
                                <input type="radio" name="pageBreak" value="custom" onclick="$.fn.radioButtonSelectionChanged('pageBreak', 'pageBreakId')"/> 地区
                            </div>

                            <div class="col-xs-2">
                                <input type="radio" name="pageBreak" value="custom" onclick="$.fn.radioButtonSelectionChanged('pageBreak', 'pageBreakId')"/> 営業担当者
                            </div>

                            <div class="col-xs-2">
                                <input type="radio" name="pageBreak" value="custom" onclick="$.fn.radioButtonSelectionChanged('pageBreak', 'pageBreakId')"/> なし
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-xs-12 no-padding">

                    <div class="form-group">
                        <label class="col-xs-2"> 並び順
                        </label>
                        <div class="col-xs-10 no-padding">
                            <div class="col-xs-2">
                                <input type="radio" name="sortBy" value="all" onclick="$.fn.radioButtonSelectionChanged('sortBy', 'sortById')"/> 消費者コード順
                            </div>

                            <div class="col-xs-3">
                                <input type="radio" name="sortBy" value="custom" onclick="$.fn.radioButtonSelectionChanged('sortBy', 'sortById')"/> 検針順路順
                            </div>

                            <div class="col-xs-3 ml-n-60">
                                <input type="radio" name="sortBy" value="custom" onclick="$.fn.radioButtonSelectionChanged('sortBy', 'sortById')"/> 検索名順
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-xs-12 no-padding">

                    <div class="form-group">
                        <label class="col-xs-2"> 出力先
                        </label>
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
