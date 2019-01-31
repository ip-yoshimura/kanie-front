<?php
include "header.php"
?>
<?php
include "sidebar.php"
?>
<div class="col-xs-10 col-md-10   no-padding">

    <div class="col-md-12 col-xs-12 no-padding body-background">

        <div class="head-p">
            <p>配送実績表印刷指定</p>
        </div>

        <form id="meter" action="/gas/meter-reading" method="POST">
            <div class="col-xs-12 no-padding">
                <div class="col-xs-12 border1 no-padding">
                    <p class="back-end">作成範囲指定 </p>
                    <div class="col-xs-12">
                        <div class="col-xs-2 no-padding ">
                            <p>
                                営業所コード</p>
                        </div>
                        <div class="col-xs-1   ">
                            <input type="radio" name="officeSelection" id="officeSelection" value="all" checked onclick="$.fn.radioButtonSelectionChanged('officeSelection', 'officeSelectionId')"> 全て
                        </div>
                        <div class="col-xs-1  no-padding">
                            <input type="radio" name="officeSelection" id="officeSelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('officeSelection', 'officeSelectionId')"> 選択
                        </div>

                    </div>
                    <div class="col-xs-12 col-xs-offset-2">
                        <div id="officeSelectionId">
                            <div class="col-xs-1   ">
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
                            <div class="col-xs-2">
                                <div class="form-group">
                                    <input id="officeCodeStartName" name="officeCodeStartName" placeholder="Company 1"
                                           class="form-control" type="text" value="" disabled/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">～</div>
                            <div class="col-xs-2">
                                <div class="form-group">
                                    <input id="companyIdEndName" name="companyIdEndName" placeholder="Company 2"
                                           class="form-control" type="text" value="" disabled/>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-xs-12 ">
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-2 no-padding">
                                <p>受託区分</p>
                            </div>
                            <div class="col-xs-1 ">
                                <input type="radio" name="trusteeShipSelection" id="trusteeShipSelection" value="all" checked onclick="$.fn.radioButtonSelectionChanged('trusteeShipSelection', 'trusteeShipSelectionId')"> 全て
                            </div>
                            <div class="col-xs-1 no-padding">
                                <input type="radio" name="trusteeShipSelection" id="trusteeShipSelection" value="alltrust" onclick="$.fn.radioButtonSelectionChanged('trusteeShipSelection', 'trusteeShipSelectionId')"> 直売
                            </div>
                            <div class="col-xs-2 no-padding">
                                <input type="radio" name="trusteeShipSelection" id="trusteeShipSelection" value="alltrustship" onclick="$.fn.radioButtonSelectionChanged('trusteeShipSelection', 'trusteeShipSelectionId')"> 販売店
                            </div>
                        </div>

                    </div>
                    <div id="trusteeShipSelectionId">
                        <div class="col-xs-12 col-xs-offset-2">

                            <div class="col-xs-1">
                                <div class="form-group">
                                    <input id="trustStartId" name="trustStartId" placeholder="000"
                                           class="form-control" type="text" value="" disabled onchange="$.fn.onInputValueChange('trustStartId', 'trustStartName')"/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">～</div>
                            <div class="col-xs-1   ">
                                <div class="form-group">
                                    <input id="trustEndId" name="trustEndId" placeholder="999" class="form-control"
                                           type="text" value="" disabled onchange="$.fn.onInputValueChange('trustEndId', 'trustEndName')"/>
                                </div>
                            </div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input id="trustStartName" name="trustStartName" placeholder="Company 1"
                                           class="form-control" type="text" value="" disabled/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">～</div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input id="trustEndName" name="trustEndName" placeholder="Company 2"
                                           class="form-control" type="text" value="" disabled/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 no-padding ">
                        <div class="col-xs-12  ">
                            <div class="col-xs-2 no-padding">
                                <p>出力区分</p>
                            </div>
                            <div class="col-xs-1">
                                <input type="radio" name="outputSelection" id="outputSelection" value="all" checked onclick="$.fn.radioButtonSelectionChanged('outputSelection', 'outputSelectionId')"> 全て
                            </div>
                            <div class="col-xs-2 no-padding">
                                <input type="radio" name="outputSelection" id="outputSelection" value="directSales" onclick="$.fn.radioButtonSelectionChanged('outputSelection', 'outputSelectionId')"> 検針担当者
                            </div>
                            <div class="col-xs-2 no-padding ml-n-90">
                                <input type="radio" name="outputSelection" id="outputSelection" value="salesOutlet" onclick="$.fn.radioButtonSelectionChanged('outputSelection', 'outputSelectionId')"> 配送担当者
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
                                <div class="col-xs-1 no-padding ratio">～</div>
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
                        <div class="col-xs-12">
                            <div class="col-xs-2 no-padding">
                                <p>消費者区分</p>
                            </div>
                            <div class="col-xs-1">
                                <input type="radio" name="consumerDifferentiationSelection" id="consumerDifferentiationSelection" value="all" checked onclick="$.fn.radioButtonSelectionChanged('consumerDifferentiationSelection', 'consumerDifferentiationSelectionId')"> 全て
                            </div>
                            <div class="col-xs-2">
                                <input type="radio" name="consumerDifferentiationSelection" id="consumerDifferentiationSelection" value="directSales" onclick="$.fn.radioButtonSelectionChanged('consumerDifferentiationSelection', 'consumerDifferentiationSelectionId')"> 選択
                            </div>

                        </div>
                        <div id="consumerDifferentiationSelectionId">
                            <div class="col-xs-12">
                                <div class="col-xs-1 col-xs-offset-2">
                                    <div class="form-group">
                                        <input id="consumerDifferentiationStartId" name="consumerDifferentiationStartId" placeholder="00"
                                               class="form-control" type="text" value="" disabled onchange="$.fn.onInputValueChange('consumerDifferentiationStartId', 'consumerDifferentiationStartName')"/>
                                    </div>
                                </div>
                                <div class="col-xs-1 no-padding ratio">～</div>
                                <div class="col-xs-1">
                                    <div class="form-group">
                                        <input id="consumerDifferentiationEndId" name="consumerDifferentiationEndId" placeholder="99" class="form-control"
                                               type="text" value="" disabled onchange="$.fn.onInputValueChange('consumerDifferentiationEndId', 'consumerDifferentiationEndName')"/>
                                    </div>
                                </div>
                                <div class="col-xs-3">
                                    <div class="form-group">
                                        <input id="consumerDifferentiationStartName" name="consumerDifferentiationStartName" class="form-control" type="text"
                                               value="" disabled/>
                                    </div>
                                </div>
                                <div class="col-xs-1 no-padding ratio">～</div>
                                <div class="col-xs-3">
                                    <div class="form-group">
                                        <input id="consumerDifferentiationEndName" name="consumerDifferentiationEndName" class="form-control" type="text"
                                               value="" disabled/>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12">
                            <div class="col-xs-2 no-padding">
                                <p>消費者コード</p>
                            </div>
                            <div class="col-xs-2">
                                <div class="form-group">
                                    <input id="consumerCodeStart" name="consumerCodeStart" placeholder="0"
                                           class="form-control" type="text" value="" onchange="$.fn.onInputValueChange('consumerCodeStart', 'consumerCodeStartName')"/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">～</div>
                            <div class="col-xs-2">
                                <div class="form-group">
                                    <input id="consumeCodeEnd" name="consumeCodeEnd" placeholder="z" class="form-control"
                                           type="text" value=""  onchange="$.fn.onInputValueChange('consumeCodeEnd', 'consumerCodeEndName')"/>
                                </div>
                            </div>
                            <div class="col-xs-2">
                                <div class="form-group">
                                    <input id="consumerCodeStartName" name="consumerCodeStartName" class="form-control"
                                           type="text" value=""/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">～</div>
                            <div class="col-xs-2">
                                <div class="form-group">
                                    <input id="consumerCodeEndName" name="consumerCodeEndName" class="form-control"
                                           type="text" value=""/>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 ">

                            <div class="col-xs-2 no-padding">
                                <p>検針・配送日</p>
                            </div>
                            <div class="col-xs-2">
                                <div class="form-group">
                                    <input id="outputEndName" name="outputEndName" class="form-control" type="date"
                                           value=""/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">～</div>
                            <div class="col-xs-2">
                                <div class="form-group">
                                    <input id="outputEndName" name="outputEndName" class="form-control" type="date"
                                           value=""/>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


                <div class="col-xs-12 bottom-box no-padding">
                    <div class="col-xs-12 border1 no-padding">

                        <p class="back-end">出力指定</p>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <div class="col-xs-2 no-padding">
                                    <p>改ページ指定</p>
                                </div>
                                <div class="col-xs-4">
                                    <div class="form-group">
                                        <select id="formType" name="formType" class="form-control">
                                            <option value="11検針伝票_東北用">配送実績表 （営業所・販売店別） 総括表</option>
                                            <option value="New検針伝票_定期用">配送実績表 （ 配送担当者別 ） 総括表</option>
                                            <option value="検針伝票">配送実績表 （営業所・販売店別） 配送担当者別</option>
                                            <option value="検針伝票_定期用">配送実績表 （ 配送担当者別 ） 営業所・販売店別</option>
                                            <option value="検針伝票_東北用">配送実績表 （ 配送担当者別 ） 日別</option>
                                            <option value="検針伝票">配送実績表 （営業所・販売店別） 配送担当者別</option>
                                            <option value="検針伝票_定期用">配送実績表 （ 消費者区分別 ） 営業所・販売店別</option>

                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="no-padding">
                                <div class="col-xs-3">
                                    <p>改ページ-明細に使用する担当者</p>
                                </div>
                                <div class="col-xs-1 no-padding ml-n-60">
                                    <input type="radio" name="pagebreak" id="pagebreak" value="all" onclick="$.fn.radioButtonSelectionChanged('pagebreak', 'pagebreakId')"> 検針担当者
                                </div>
                                <div class="col-xs-3 no-padding ml-50">
                                    <input type="radio" name="pagebreak" id="pagebreak" value="directSales" onclick="$.fn.radioButtonSelectionChanged('pagebreak', 'pagebreakId')"> 配送担当者
                                </div>

                            </div>
                        </div>

                        <div class="form-group">
                            <div class=" ">
                                <div class="col-xs-2">
                                    <p>出力先</p>
                                </div>
                                <div class="col-xs-2 ml-20">
                                    <input type="radio" name="output" id="output" value="all" onclick="$.fn.radioButtonSelectionChanged('output', 'outputId')"> プリンタ(印刷)
                                </div>
                                <div class="col-xs-3 ml-n-45">
                                    <input type="radio" name="output" id="output" value="directSales" onclick="$.fn.radioButtonSelectionChanged('output', 'outputId')"> 画面(印刷イメージ)
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
