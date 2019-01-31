<?php include 'header.php';?>
<?php include 'sidebar.php';?>
    <div class="col-xs-8 col-md-10 col-xs-12 no-padding">
        <div class="col-md-12 col-xs-12 no-padding body-background">
                <div class="head-p">
                    <p>入金区分別日計表印刷指定（消費者）</p>
                </div>
                <form action="/gas/meter-reading" id="meter" method="POST">
                    <div class="col-xs-12 border1 no-padding">
                        <p class="back-end">作成範囲指定</p>
                    <div class="col-xs-12">

                        <div class="form-group">
                            <label class="col-xs-2 no-padding"> 印刷区分指定</label>

                            <div class="col-xs-2 ml-n-5 ">
                                <input name="directSales" type="radio" value="directSales"> <span> 営業所・販売店別 </span>
                            </div>

                            <div class="col-xs-2">
                                <input name="directSales" type="radio" value="directSales"> <span> 集金担当者別</span>
                            </div>


                        </div>


                    </div>

                    <div class="col-xs-12">

                        <div class="form-group">
                            <label class="col-xs-2 no-padding">営業所コード</label>

                            <div class="col-xs-1 ml-n-5">
                                <input name="printingSelection" id="printingSelection" type="radio" value="all" checked onclick="$.fn.radioButtonSelectionChanged('printingSelection', 'printingSelectionId')"> <span> 全て</span>

                            </div>

                            <div class="col-xs-1">
                                <input name="printingSelection" id="printingSelection" type="radio" value="directSales" onclick="$.fn.radioButtonSelectionChanged('printingSelection', 'printingSelectionId')"> <span> 選択</span>

                            </div>


                        </div>


                    </div>


                    <div id="printingSelectionId">
                    <div class="col-xs-12 no-padding col-xs-offset-2 no-padding">
                        <div class="col-xs-1">
                            <div class="form-group">
                                <input class="form-control" id="printingStart" name="printingStart"
                                       placeholder="000" type="text" value="" disabled onchange="$.fn.onInputValueChange('printingStart', 'prinitingStartName')"/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">～</div>
                        <div class="col-xs-1">
                            <div class="form-group">
                                <input class="form-control" id="printingEnd" name="printingEnd" placeholder="999"
                                       type="text" value="" disabled onchange="$.fn.onInputValueChange('printingEnd', 'printingEndName')"/>
                            </div>
                        </div>

                        <div class="col-xs-3">
                            <div class="form-group">
                                <input class="form-control" id="prinitingStartName" name="prinitingStartName"
                                       placeholder=" " type="text" value="" disabled/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">～</div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input class="form-control" id="printingEndName" name="printingEndName"
                                       placeholder=" " type="text" value="" disabled/>
                            </div>
                        </div>
                    </div>
                    </div>

                    <div class="col-xs-12">

                        <div class="form-group">
                            <label class="col-xs-2 no-padding">販売店指定</label>

                            <div class="col-xs-1 ml-n-5">
                                <input name="dealerSelection" id="dealerSelection" type="radio" value="all" checked onclick="$.fn.radioButtonSelectionChanged('dealerSelection', 'dealerSelectionId')"> <span> 全て</span>

                            </div>

                            <div class="col-xs-1">
                                <input name="dealerSelection" id="dealerSelection" type="radio" value="directSales" onclick="$.fn.radioButtonSelectionChanged('dealerSelection', 'dealerSelectionId')"> <span> 選択</span>

                            </div>


                        </div>


                    </div>

                   <div id="dealerSelectionId">
                   <div class="col-xs-12 col-xs-offset-2 no-padding" >

                        <div class="col-xs-1 ">
                            <div class="form-group">
                                <input class="form-control" id="officeCodeStartId" name="officeCodeStartId"
                                       placeholder="000" type="text" value="" disabled onchange="$.fn.onInputValueChange('officeCodeStartId', 'officeCodeStartName')"/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">～</div>
                        <div class="col-xs-1">
                            <div class="form-group">
                                <input class="form-control" id="companyIdEndId" name="companyIdEndId" placeholder="999"
                                       type="text" value="" disabled onchange="$.fn.onInputValueChange('companyIdEndId', 'companyIdEndName')"/>
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input class="form-control" id="officeCodeStartName" name="officeCodeStartName"
                                       placeholder=" " type="text" value="" disabled/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">～</div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input class="form-control" id="companyIdEndName" name="companyIdEndName"
                                       placeholder=" " type="text" value="" disabled/>
                            </div>
                        </div>
                    </div>
                   </div>



                    <div class="col-xs-12">
                        <div class="col-xs-2 no-padding">
                            <p>入金伝票日付 </p>
                        </div>
                        <div class="col-xs-2 ml-n-10">
                            <div class="form-group">
                                <input id="trustStartId" name="trustStartId" placeholder="" class="form-control"
                                       type="date" value=""/>
                            </div>
                        </div>

                        <div class="col-xs-1 no-padding ratio">～</div>
                        <div class="col-xs-2 no-padding ml-5">
                            <div class="form-group">
                                <input id="trustEndId" name="trustEndId" placeholder="" class="form-control" type="date"
                                       value=""/>
                            </div>
                        </div>

                    </div>
                    </div>


                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-12 border1 no-padding">
                            <p class="back-end">出力指定</p>
                            <div class="col-xs-12">

                                <div class="form-group">
                                    <label class="col-xs-2 no-padding">出力先</label>

                                    <div class="col-xs-2 no-padding">
                                        <input name="output" id="output" type="radio" value="all" onclick="$.fn.radioButtonSelectionChanged('output', 'outputId')"><span> プリンタ(印刷)</span>
                                    </div>

                                    <div class="col-xs-2 no-padding ml-n-30">
                                        <input name="output"  id="output" type="radio" value="salesOutlet" onclick="$.fn.radioButtonSelectionChanged('output', 'outputId')"><span> 画面(印刷イメージ)</span>

                                    </div>
                                </div>
                            </div>
                    </div>

                </div>

                    <?php include 'footer.php';?>

                </form>
            </div>
        </div>
    </div>
</div>

</body>

</html>
