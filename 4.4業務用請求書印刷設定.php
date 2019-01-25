<?php
include "header.php"
?>
<?php
include "sidebar.php"
?>
<div class="col-xs-10 col-md-10 no-padding">

    <div class="col-md-12 col-xs-12 body-background no-padding">

        <div class="head-p">
            <p>
                事務用請求書印刷設定

            </p>
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
                        <input type="radio" name="officeSelection" id="officeSelection" value="all" checked onclick="$.fn.radioButtonSelectionChanged('officeSelection', 'officeSelectionId')"> <span>全て</span>
                    </div>
                    <div class="col-xs-1   ">
                        <input type="radio" name="officeSelection" id="officeSelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('officeSelection', 'officeSelectionId')"><span>選択</span>
                    </div>
                    <div id="officeSelectionId">
                    <div class="col-xs-1   ">
                        <div class="form-group">
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

                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-1 no-padding">
                                <p>受託区分</p>
                            </div>
                            <div class="col-xs-1  ">
                                <input type="radio" name="trustSelection" id="trustSelection" value="all" checked onclick="$.fn.radioButtonSelectionChanged('trustSelection', 'trustSelectionId')"><span> 全て</span>
                            </div>
                            <div class="col-xs-1 no-padding">
                                <input type="radio" name="trustSelection" id="trustSelection" value="directSales" onclick="$.fn.radioButtonSelectionChanged('trustSelection', 'trustSelectionId')"> <span>地区</span>
                            </div>
                            <div class="col-xs-1 no-padding">
                                <input type="radio" name="trustSelection" id="trustSelection" value="directSales" onclick="$.fn.radioButtonSelectionChanged('trustSelection', 'trustSelectionId')"> <span>販売店</span>
                            </div>

                        </div>
                       <div id="trustSelectionId">
                       <div class="col-xs-12 no-padding">
                            <div class="col-xs-1 col-xs-offset-1">
                                <div class="form-group">
                                    <input id="trustStartId" name="trustStartId" placeholder="000" 
                                    class="form-control" type="text" value="" disabled onchange="$.fn.onInputValueChange('trustStartId', 'trustStartName')"/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">~</div>
                            <div class="col-xs-1">
                                <div class="form-group">
                                    <input id="trustEndId" name="trustEndId" placeholder="999" 
                                    class="form-control" type="text" value="" disabled onchange="$.fn.onInputValueChange('trustEndId', 'trustEndName')"/>
                                </div>
                            </div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input id="trustStartName" name="trustStartName" 
                                    class="form-control" type="text" value="" disabled/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">~</div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input id="trustEndName" name="trustEndName" 
                                    class="form-control" type="text" value="" disabled/>
                                </div>
                            </div>
                        </div>
                       </div>
                    </div>

                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-1 no-padding">
                                <p>出力区分</p>
                            </div>
                            <div class="col-xs-1">
                                <input type="radio" name="outputSelection" id="outputSelection" value="all" checked onclick="$.fn.radioButtonSelectionChanged('outputSelection', 'outputSelectionId')"> <span>全て</span>
                            </div>
                            <div class="col-xs-1">
                                <input type="radio" name="outputSelection" id="outputSelection" value="directSales" onclick="$.fn.radioButtonSelectionChanged('outputSelection', 'outputSelectionId')"> <span>地区</span>
                            </div>
                            <div class="col-xs-2">
                                <input type="radio" name="outputSelection" id="outputSelection" value="salesOutlet" onclick="$.fn.radioButtonSelectionChanged('outputSelection', 'outputSelectionId')"> <span>営業担当者</span>
                            </div>
                            <div class="col-xs-2">
                                <input type="radio" name="outputSelection" id="outputSelection" value="salesOutlet" onclick="$.fn.radioButtonSelectionChanged('outputSelection', 'outputSelectionId')"> <span>検針担当者</span>
                            </div>
                            <div class="col-xs-2">
                                <input type="radio" name="outputSelection" id="outputSelection" value="salesOutlet" onclick="$.fn.radioButtonSelectionChanged('outputSelection', 'outputSelectionId')"> <span>集金担当者</span>
                            </div>
                            <div class="col-xs-2">
                                <input type="radio" name="outputSelection" id="outputSelection" value="salesOutlet" onclick="$.fn.radioButtonSelectionChanged('outputSelection', 'outputSelectionId')"> <span>集金順路</span>
                            </div>
                        </div>
                        <div id="outputSelectionId">
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-1 col-xs-offset-1">
                                <div class="form-group">
                                    <input id="outputStartId" name="outputStartId" placeholder="000" 
                                    class="form-control" type="text" value="" disabled onchange="$.fn.onInputValueChange('outputStartId', 'outputStartName')"/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">~</div>
                            <div class="col-xs-1">
                                <div class="form-group">
                                    <input id="outputEndId" name="outputEndId" placeholder="999"
                                     class="form-control" type="text" value="" disabled onchange="$.fn.onInputValueChange('outputEndId', 'outputEndName')"/>
                                </div>
                            </div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input id="outputStartName" name="outputStartName" 
                                    class="form-control" type="text" value="" disabled/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">~</div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input id="outputEndName" name="outputEndName" 
                                    class="form-control" type="text" value="" disabled/>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>

                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-1 no-padding">
                            <p>消費者コード</p>
                        </div>
                        <div class="col-xs-2">
                            <div class="form-group">
                                <input id="consumerCodeStart" name="consumerCodeStart" placeholder="0" 
                                class="form-control" type="text" value=""  onchange="$.fn.onInputValueChange('consumerCodeStart', 'consumerCodeStartName')"/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">~</div>
                        <div class="col-xs-2">
                            <div class="form-group">
                                <input id="consumeCodeEnd" name="consumeCodeEnd" placeholder="z" 
                                class="form-control" type="text" value=""  onchange="$.fn.onInputValueChange('consumeCodeEnd', 'consumerCodeEndName')"/>
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input id="consumerCodeStartName" name="consumerCodeStartName" 
                                class="form-control" type="text" value=""/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">~</div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input id="consumerCodeEndName" name="consumerCodeEndName" 
                                class="form-control" type="text" value=""/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xs-12 border1 no-padding">

                <p class="backend ">
                    作成範囲指定</p>

                <div class="col-xs-12 ">

                    <div class="col-xs-1 no-padding ">
                        <p class="font-exp-size1 ">印刷区分の指定</p>
                    </div>
                    <div class="col-xs-1  ">
                        <input type="radio" name="designation" id="designation" value="all" onclick="$.fn.radioButtonSelectionChanged('designation', 'designationId')"> <span>当月</span>
                    </div>
                    <div class="col-xs-1 no-padding">
                        <input type="radio" name="designation" id="designation" value="directSales" onclick="$.fn.radioButtonSelectionChanged('designation', 'designationId')"> <span>不能</span>
                    </div>

                </div>


                <div class="col-xs-12">
                    <label class="control-label col-xs-1 no-padding">作成日付</label>
                    <div class="col-xs-2">
                        <input type="date" class="form-control"  />
                    </div>
                </div>
                <div class="col-xs-12 border-margin">
                    <label class="control-label col-xs-1 no-padding">締切日</label>
                    <div class="col-xs-1">
                        <input type="text" class="form-control" placeholder="0">
                    </div>
                    <div class="col-xs-1 border-margin-exp">
                        <span>日</span>
                    </div>

                </div>






                <div class="col-xs-12 border-margin">
                    <div class="">
                        <div class="col-xs-1 no-padding font-exp-size1">
                            <p>集金区分の指定</p>
                        </div>
                        <div class="col-xs-1">
                            <input type="radio" name="collectionClassic" id="collectionClassic" value="all" onclick="$.fn.radioButtonSelectionChanged('collectionClassic', 'collectionClassicId')"> <span>全て</span>
                        </div>
                        <div class="col-xs-1">
                            <input type="radio" name="collectionClassic" id="collectionClassic" value="directSales" onclick="$.fn.radioButtonSelectionChanged('collectionClassic', 'collectionClassicId')"> <span>現金</span>
                        </div>
                        <div class="col-xs-1">
                            <input type="radio" name="collectionClassic" id="collectionClassic" value="salesOutlet" onclick="$.fn.radioButtonSelectionChanged('collectionClassic', 'collectionClassicId')"> <span>振替</span>
                        </div>

                        <div class="col-xs-1">
                            <input type="radio" name="collectionClassic" id="collectionClassic" value="salesOutlet" onclick="$.fn.radioButtonSelectionChanged('collectionClassic', 'collectionClassicId')"> <span>振込</span>
                        </div>
                        <div class="col-xs-1 no-padding">
                            <input type="radio" name="collectionClassic" id="collectionClassic" value="directSales" onclick="$.fn.radioButtonSelectionChanged('collectionClassic', 'collectionClassicId')"> <span>コンビニ</span>
                        </div>
                        <div class="col-xs-1 no-padding">
                            <input type="radio" name="collectionClassic" id="collectionClassic" value="salesOutlet" onclick="$.fn.radioButtonSelectionChanged('collectionClassic', 'collectionClassicId')"> <span>クレジット</span>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 border-margin">
                    <div class="no-padding ">
                        <div class="col-xs-1 no-padding font-exp-size1">
                            <p>発行済請求書印刷</p>
                        </div>
                        <div class="col-xs-1">
                            <input type="radio" name="print" id="print" value="all" onclick="$.fn.radioButtonSelectionChanged('print', 'printId')"> <span>する</span>
                        </div>
                        <div class="col-xs-5">
                            <input type="radio" name="print" id="print" value="directSales" onclick="$.fn.radioButtonSelectionChanged('print', 'printId')"> <span>しない</span>
                        </div>
                        <div class="col-xs-2 no-padding">
                            <p>明細が検針区分のみ消費者</p>
                        </div>
                        <div class="col-xs-1">
                            <input type="radio" name="detailed" id="detailed" value="all" onclick="$.fn.radioButtonSelectionChanged('detailed', 'detailedId')"> <span>含む</span>
                        </div>
                        <div class="col-xs-2">
                            <input type="radio" name="detailed" id="detailed" value="directSales" onclick="$.fn.radioButtonSelectionChanged('detailed', 'detailedId')"><span> 含まな</span>
                        </div>


                    </div>
                </div>





                <div class="col-xs-12 border-margin">
                    <div class="col-xs-1 no-padding font-exp-size2">
                        <p>お知らせ文（現金)</p>
                    </div>

                    <div class="col-xs-1">
                        <input type="text" name="notificationStart" id="notificationStart" 
                        class="form-control" placeholder="00" value="" onchange="$.fn.onInputValueChange('notificationStart', 'notificationEnd')">
                    </div>
                    <div class="col-xs-9">
                        <input type="text" name="notificationEnd" id="notificationEnd"
                        placeholder="" class="form-control" value="" />
                    </div>
                </div>

                <div class="col-xs-12 border-margin">
                    <div class="col-xs-1 no-padding  ">
                        <p>（振替）</p>
                    </div>

                    <div class="col-xs-1">
                        <input type="text" name="transferStart" id="transferStart"
                        class="form-control" placeholder="00" value="" onchange="$.fn.onInputValueChange('transferStart', 'transferEnd')">
                    </div>
                    <div class="col-xs-9">
                        <input type="text" name="transferEnd" id="transferEnd"
                        placeholder="" class="form-control"  value=""/>
                    </div>
                </div>



                <div class="col-xs-12 border-margin  ">
                    <div class="col-xs-1 no-padding font-exp-size">
                        <p>（振込））</p>
                    </div>

                    <div class="col-xs-1">
                        <input type="text" name="transStart" id="transStart" 
                        class="form-control" placeholder="00" value="" onchange="$.fn.onInputValueChange('transStart', 'transEnd')">
                    </div>
                    <div class="col-xs-9">
                        <input type="text" name="transEnd" id="transEnd"
                        placeholder="" class="form-control" value=""/>
                    </div>
                </div>

                <div class="col-xs-12 border-margin  ">
                    <div class="col-xs-1 no-padding font-exp-size">
                        <p>（コンビニ）</p>
                    </div>

                    <div class="col-xs-1">
                        <input type="text" name="convenianceStart" id="convenianceStart"
                        class="form-control" placeholder="00" value="" onchange="$.fn.onInputValueChange('convenianceStart', 'conveniancEnd')">
                    </div>
                    <div class="col-xs-9">
                        <input type="text" name="conveniancEnd" id="conveniancEnd"
                        placeholder="" class="form-control" value=""/>
                    </div>
                </div>

                <div class="col-xs-12 border-margin  ">
                    <div class="col-xs-1 no-padding font-exp-size">
                        <p>(クレジット)</p>
                    </div>

                    <div class="col-xs-1">
                        <input type="text" name="creditStart" id="creditStart"
                        class="form-control" placeholder="00" value="" onchange="$.fn.onInputValueChange('creditStart', 'creditEnd')">
                    </div>
                    <div class="col-xs-9">
                        <input type="text" name="creditEnd" id="creditEnd"
                        placeholder="" class="form-control" value=""/>
                    </div>
                </div>
                <div class="col-xs-12 border-margin   ">
                    <div class="col-xs-1 no-padding font-exp-size">
                        <p>支払期限日</p>
                    </div>


                    <div class="col-xs-2">
                        <input type="date" class="form-control"  />
                    </div>
                </div>

                <div class="col-xs-12 border-margin border-margin-bottom  ">
                    <div class="col-xs-1 no-padding font-exp-size">
                        <p>帳票タイプ</p>
                    </div>

                    <div class="col-xs-2">
                        <select id="formType" name="formType" class="form-control">
                            <option value="11検針伝票_東北用">"1請求書</option>
                            <option value="New検針伝票_定期用">2請求書_愛知3インチ</option>
                            <option value="検針伝票">2請求書_愛知3インチ</option>
                            <option value="検針伝票_定期用">3請求書_A4ガス料金</option>
                            <option value="検針伝票_東北用">コンビニ東北</option>
                            <option value="New検針伝票_定期用">コンビニ関東</option>
                            <option value="検針伝票">化学事業部請求書</option>
                            <option value="検針伝票_定期用">東北_線無御請求書</option>
                            <option value="検針伝票_東北用">検針お知らせ東北</option>
                        </select>
                    </div>
                </div>








            </div>




            <div class="col-xs-12 bottom-box no-padding">
                <div class="col-xs-12 border1 no-padding">
                    <p class="backend">出力指定</p>


                    <div class="col-xs-12  ">
                        <div class="no-padding">
                            <div class="col-xs-1 no-padding">
                                <p>改ページ指定</p>
                            </div>
                            <div class="col-xs-2">
                                <input type="radio" name="pagebreak" id="pagebreak" value="all"  onclick="$.fn.radioButtonSelectionChanged('pagebreak', 'pagebreakId')"> <span>営業所・販売店</span>
                            </div>
                            <div class="col-xs-1">
                                <input type="radio" name="pagebreak" id="pagebreak" value="directSales"onclick="$.fn.radioButtonSelectionChanged('pagebreak', 'pagebreakId')" > <span>地区</span>
                            </div>
                            <div class="col-xs-2">
                                <input type="radio" name="pagebreak" id="pagebreak" value="salesOutlet" onclick="$.fn.radioButtonSelectionChanged('pagebreak', 'pagebreakId')"> <span>営業担当者</span>
                            </div>

                            <div class="col-xs-2">
                                <input type="radio" name="pagebreak" id="pagebreak" value="salesOutlet" onclick="$.fn.radioButtonSelectionChanged('pagebreak', 'pagebreakId')"> <span>検針担当者</span>
                            </div>
                            <div class="col-xs-2">
                                <input type="radio" name="pagebreak" id="pagebreak" value="directSales" onclick="$.fn.radioButtonSelectionChanged('pagebreak', 'pagebreakId')"> <span>集金担当者</span>
                            </div>
                            <div class="col-xs-1">
                                <input type="radio" name="pagebreak" id="pagebreak" value="salesOutlet" onclick="$.fn.radioButtonSelectionChanged('pagebreak', 'pagebreakId')"> <span>なし</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12  ">
                        <div class="no-padding">
                            <div class="col-xs-1 no-padding">
                                <p>並び順</p>                                                            </p>
                            </div>
                            <div class="col-xs-2">
                                <input type="radio" name="sortby" id="sortby" value="all"> <span>消費者コード順</span>
                            </div>
                            <div class="col-xs-2">
                                <input type="radio" name="sortby" id="sortby"  value="directSales">  <span>検針順路順</span>
                            </div>

                            <div class="col-xs-2">
                                <input type="radio" name="sortby" id="sortby"  value="directSales">  <span>検索名順</span>
                            </div>
                            <div class="col-xs-2">
                                <input type="radio" name="sortby" id="sortby"  value="directSales">  <span>集金順路順</span>
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