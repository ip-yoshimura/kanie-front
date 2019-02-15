<?php
include "header.php"
?>
<?php
include "sidebar.php"
?>

<div class="col-md-10 col-xs-8 col-xs-12 no-padding">

    <div class="col-md-12 col-xs-12 no-padding body-background">

        <div class="head-p ">
            <p>保安情報未登録一覧印刷指定
            </p>
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
                </div></div>
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


                <div id="otherCompanyId"><div class="col-xs-12 no-padding">
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
                </div></div>
            </div>


            <div class="col-xs-12 no-padding">
                <div class="col-xs-12 no-padding">
                    <div class="col-xs-2">
                        <p>出力区分</p>
                    </div>
                    <div class="col-xs-1">
                        <input type="radio" name="output_1" value="all" checked onclick="$.fn.radioButtonSelectionChanged('output_1', 'output_1Id')"> 全て


                    </div>
                    <div class="col-xs-1">
                        <input type="radio" name="output_1" value="directSales" onclick="$.fn.radioButtonSelectionChanged('output_1', 'output_1Id')"> 地区


                    </div>
                    <div class="col-xs-2">
                        <input type="radio" name="output_1" value="salesOutlet" onclick="$.fn.radioButtonSelectionChanged('output_1', 'output_1Id')"> 営業担当者


                    </div>

                </div>
                <div id="output_1Id">
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
                </div></div>
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
                        <input type="radio" name="MoveIn" value="all" onclick="$.fn.radioButtonSelectionChanged('MoveIn', 'MoveInId')"> 全て
                    </div>
                    <div class="col-xs-2">
                        <input type="radio" name="MoveIn" value="directSales" onclick="$.fn.radioButtonSelectionChanged('MoveIn', 'MoveInId')"> 閉栓・休止除く


                    </div>
                    <div class="col-xs-2 ml-n-30">
                        <input type="radio" name="MoveIn" value="directSales" onclick="$.fn.radioButtonSelectionChanged('MoveIn', 'MoveInId')">  未入居除く

                    </div>

                </div>

            </div>

            <div class="col-xs-12 no-padding">
                <div class="col-xs-12 no-padding">
                    <div class="col-xs-2">
                        <p>保安業務</p>
                    </div>
                    <div class="col-xs-1">
                        <input type="radio" name="security" value="all" onclick="$.fn.radioButtonSelectionChanged('security', 'securityId')"> 全て
                    </div>
                    <div class="col-xs-2">
                        <input type="radio" name="security" value="directSales" onclick="$.fn.radioButtonSelectionChanged('security', 'securityId')"> 行う消費者


                    </div>
                    <div class="col-xs-2 ml-n-30">
                        <input type="radio" name="security" value="directSales" onclick="$.fn.radioButtonSelectionChanged('security', 'securityId')"v> 行わない消費者

                    </div>

                </div>

            </div>
            </div>

            <div class="col-xs-12 border1 no-padding">

                <p class="back-end">作成範囲指定</p>
            <div class="col-xs-12 no-padding">

                <div class="form-group">

                    <label class="col-xs-2">対象項目
                    </label>
                    <div class="col-xs-10 no-padding">
                        <div class="col-xs-1">
                            <input type="radio" name="target" value="all" onclick="$.fn.radioButtonSelectionChanged('target', 'targetId')"/> 全て
                        </div>
                        <div class="col-xs-1 ml-15">
                            <input type="radio" name="target" value="alarm" onclick="$.fn.radioButtonSelectionChanged('target', 'targetId')"/> 選択
                        </div>


                    </div>
                </div>
            </div>

            <div class="col-xs-12">
<div class="col-xs-2 no-padding">
                <div class="col-xs-5">
                    <p>供給管</p>
                </div>
                <div class="col-xs-7 no-padding">
                    <div class="form-group">
                            <input type="radio" name="target" value="all" onclick="$.fn.radioButtonSelectionChanged('target', 'targetId')"/> 含む
                            <input type="radio" name="target" value="all" onclick="$.fn.radioButtonSelectionChanged('target', 'targetId')"/> 除く
                    </div>
                </div>
</div>

<div class="col-xs-2 no-padding">
                <div class="col-xs-5">
                    <p>配管</p>
                </div>
                <div class="col-xs-7 no-padding">
                    <div class="form-group">
                            <input type="radio" name="target" value="all" onclick="$.fn.radioButtonSelectionChanged('target', 'targetId')"/> 含む
                            <input type="radio" name="target" value="all" onclick="$.fn.radioButtonSelectionChanged('target', 'targetId')"/> 除く
                    </div>
                </div>
</div>

<div class="col-xs-2 no-padding">
                <div class="col-xs-5">
                    <p>調査日</p>
                </div>
                <div class="col-xs-7 no-padding">
                    <div class="form-group">
                            <input type="radio" name="target" value="all" onclick="$.fn.radioButtonSelectionChanged('target', 'targetId')"/> 含む
                            <input type="radio" name="target" value="all" onclick="$.fn.radioButtonSelectionChanged('target', 'targetId')"/> 除く
                    </div>
                </div>
</div>

<div class="col-xs-2 no-padding">
                <div class="col-xs-5">
                    <p>周知日</p>
                </div>
                <div class="col-xs-7 no-padding">
                    <div class="form-group">
                            <input type="radio" name="target" value="all" onclick="$.fn.radioButtonSelectionChanged('target', 'targetId')"/> 含む
                            <input type="radio" name="target" value="all" onclick="$.fn.radioButtonSelectionChanged('target', 'targetId')"/> 除く
                    </div>
                </div>
</div>

<div class="col-xs-2 no-padding">
                <div class="col-xs-5">
                    <p>メータ</p>
                </div>
                <div class="col-xs-7 no-padding">
                    <div class="form-group">
                            <input type="radio" name="target" value="all" onclick="$.fn.radioButtonSelectionChanged('target', 'targetId')"/> 含む
                            <input type="radio" name="target" value="all" onclick="$.fn.radioButtonSelectionChanged('target', 'targetId')"/> 除く
                    </div>
                </div>
	    </div>
</div>

	    <div class="col-xs-12">
<div class="col-xs-2 no-padding">
                <div class="col-xs-5">
                    <p>調整器</p>
                </div>
                <div class="col-xs-7 no-padding">
                    <div class="form-group">
                            <input type="radio" name="target" value="all" onclick="$.fn.radioButtonSelectionChanged('target', 'targetId')"/> 含む
                            <input type="radio" name="target" value="all" onclick="$.fn.radioButtonSelectionChanged('target', 'targetId')"/> 除く
                    </div>
                </div>
</div>

<div class="col-xs-2 no-padding">
                <div class="col-xs-5">
                    <p class="p-size">高圧ホース</p>
                </div>
                <div class="col-xs-7 no-padding">
                    <div class="form-group">
                            <input type="radio" name="target" value="all" onclick="$.fn.radioButtonSelectionChanged('target', 'targetId')"/> 含む
                            <input type="radio" name="target" value="all" onclick="$.fn.radioButtonSelectionChanged('target', 'targetId')"/> 除く
                    </div>
                </div>
</div>

<div class="col-xs-2 no-padding">
                <div class="col-xs-5">
                    <p>埋設管</p>
                </div>
                <div class="col-xs-7 no-padding">
                    <div class="form-group">
                            <input type="radio" name="target" value="all" onclick="$.fn.radioButtonSelectionChanged('target', 'targetId')"/> 含む
                            <input type="radio" name="target" value="all" onclick="$.fn.radioButtonSelectionChanged('target', 'targetId')"/> 除く
                    </div>
                </div>
</div>

<div class="col-xs-2 no-padding">
                <div class="col-xs-5">
                    <p>警報機</p>
                </div>
                <div class="col-xs-7 no-padding">
                    <div class="form-group">
                            <input type="radio" name="target" value="all" onclick="$.fn.radioButtonSelectionChanged('target', 'targetId')"/> 含む
                            <input type="radio" name="target" value="all" onclick="$.fn.radioButtonSelectionChanged('target', 'targetId')"/> 除く
                    </div>
                </div>
	    </div>
</div>

                <div class="col-xs-12">

                    <div class="form-group">
                        <label class="col-xs-1 no-padding"> 対象法律
                        </label>
                        <div class="col-xs-10">
                            <div class="col-xs-2">
                                <input type="radio" name="targetLow" value="all" onclick="$.fn.radioButtonSelectionChanged('targetLow', 'targetLowId')"/> 全て
                            </div>

                            <div class="col-xs-2">
                                <input type="radio" name="targetLow" value="targetLow" onclick="$.fn.radioButtonSelectionChanged('targetLow', 'targetLowId')"/> 液石法
                            </div>

                            <div class="col-xs-2">
                                <input type="radio" name="targetLow" value="targetLow" onclick="$.fn.radioButtonSelectionChanged('targetLow', 'targetLowId')"/> 高圧法
                            </div>

                            <div class="col-xs-2">
                                <input type="radio" name="targetLow" value="targetLow" onclick="$.fn.radioButtonSelectionChanged('targetLow', 'targetLowId')"/> ガス事業法
                            </div>

                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xs-12 border1 no-padding bottom-box">

                <p class="backend">出力指定</p>
            <div class="col-xs-12">

                <div class="form-group">

                    <label class="col-xs-1 no-padding">改ページ指定
                    </label>
                    <div class="col-xs-10">
                        <div class="col-xs-3">
                            <input type="radio" name="pageBreak" value="all" onclick="$.fn.radioButtonSelectionChanged('pageBreak', 'pageBreakId')"/>営業所・販売店
                        </div>

                        <div class="col-xs-2">
                            <input type="radio" name="pageBreak" value="pageBreak" onclick="$.fn.radioButtonSelectionChanged('pageBreak', 'pageBreakId')"/>地区
                        </div>

                        <div class="col-xs-2">
                            <input type="radio" name="pageBreak" value="pageBreak" onclick="$.fn.radioButtonSelectionChanged('pageBreak', 'pageBreakId')"/>営業担当者
                        </div>

                        <div class="col-xs-2">
                            <input type="radio" name="pageBreak" value="pageBreak" onclick="$.fn.radioButtonSelectionChanged('pageBreak', 'pageBreakId')"/>なし
                        </div>

                    </div>


                </div>
            </div>

            <div class="col-xs-12">

                <div class="form-group">
                    <label class="col-xs-1 no-padding"> 並び順
                    </label>
                    <div class="col-xs-10">
                        <div class="col-xs-3">
                            <input type="radio" name="sortBy" value="all" onclick="$.fn.radioButtonSelectionChanged('sortBy', 'sortById')"/> 消費者コード順
                        </div>

                        <div class="col-xs-4">
                            <input type="radio" name="sortBy" value="all" onclick="$.fn.radioButtonSelectionChanged('sortBy', 'sortById')"/> 検針順路順
                        </div>

                        <div class="col-xs-4">
                            <input type="radio" name="sortBy" value="all" onclick="$.fn.radioButtonSelectionChanged('sortBy', 'sortById')"/> 検索名順
                        </div>


                    </div>
                </div>
            </div>

            <div class="col-xs-12">

                <div class="form-group">
                    <label class="col-xs-1 no-padding"> 出力先
                    </label>
                    <div class="col-xs-10">
                        <div class="col-xs-3">
                            <input type="radio" name="destination" value="all" onclick="$.fn.radioButtonSelectionChanged('destination', 'destinationId')"/> プリンタ(印刷)  
                        </div>

                        <div class="col-xs-4">
                            <input type="radio" name="destination" value="destination" onclick="$.fn.radioButtonSelectionChanged('destination', 'destinationId')"/> 画面(印刷イメージ)
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
