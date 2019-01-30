<?php
include "header.php"
?>
<?php
include "sidebar.php"
?>
<div class="col-xs-10 col-md-10   no-padding">

    <div class="col-md-12 col-xs-12 no-padding body-background">
        <div class="head-p">
            <p>ハガキ請求書印刷設定 </p>
        </div>

        <form id="meter" action="/gas/meter-reading" method="POST">
            <div class="col-xs-12 border1 no-padding">
                <p class="backend">消費者範囲指定</p>
                <div class="col-xs-12">

                    <div class="col-xs-1 no-padding">
                        <p>レーベル</p>
                    </div>
                    <div class="col-xs-1  no-padding">
                        <input type="radio" id="label1Selection" name="label1Selection" value="all" checked onclick="$.fn.radioButtonSelectionChanged('label1Selection', 'label1SelectionId')"><span> すべて</span>
                    </div>
                    <div class="col-xs-1  no-padding">
                        <input type="radio" id="label1Selection" name="label1Selection" value="custom" onclick="$.fn.radioButtonSelectionChanged('label1Selection', 'label1SelectionId')"><span> 選択</span>
                    </div>
                    <div id="label1SelectionId">
                        <div class="col-xs-1   ">
                            <div class="form-group">
                                <input id="label1StartId" name="label1StartId" placeholder="000"
                                       class="form-control" type="text" value="" disabled onchange="$.fn.onInputValueChange('label1StartId', 'label1StartName')"/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">~</div>
    
                        <div class="col-xs-1 ">
                            <div class="form-group">
                                <input id="label1EndId" name="label1EndId" placeholder="999" class="form-control"
                                       type="text" value="" disabled onchange="$.fn.onInputValueChange('label1EndId', 'label1EndName')"/>
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input id="label1StartName" name="label1StartName" placeholder="Company 1"
                                       class="form-control" type="text" value="" disabled/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">~</div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input id="label1EndName" name="label1EndName" placeholder="Company 2"
                                       class="form-control" type="text" value="" disabled/>
                            </div>
                        </div>
                    </div>
                    
                </div>


                <div class="col-xs-12">
                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-1 no-padding">
                            <p>レーベル</p>
                        </div>
                        <div class="col-xs-1 no-padding">
                            <input type="radio" id="label2Selection" name="label2Selection" value="all" checked onclick="$.fn.radioButtonSelectionChanged('label2Selection', 'label2SelectionId')"> <span>すべて</span>
                        </div>
                        <div class="col-xs-1 no-padding">
                            <input type="radio" id="label2Selection" name="label2Selection" value="custom" onclick="$.fn.radioButtonSelectionChanged('label2Selection', 'label2SelectionId')"> <span>売り手</span>
                        </div>
                        <div class="col-xs-2 no-padding">
                            <input type="radio" id="label2Selection" name="label2Selection" value="custom" onclick="$.fn.radioButtonSelectionChanged('label2Selection', 'label2SelectionId')"> <span>ディーラー</span>
                        </div>
                    </div>
                    <div id="label2SelectionId">
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-1 col-xs-offset-1  ">
                                <div class="form-group">
                                    <input id="label2StartId" name="label2StartId" placeholder="000" class="form-control"
                                           type="text" value="" disabled onchange="$.fn.onInputValueChange('label2StartId', 'label2StartName')"/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">~</div>
                            <div class="col-xs-1">
                                <div class="form-group">
                                    <input id="label2EndId" name="label2EndId" placeholder="999" class="form-control"
                                           type="text" value="" disabled onchange="$.fn.onInputValueChange('label2EndId', 'label2EndName')"/>
                                </div>
                            </div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input id="label2StartName" name="label2StartName" class="form-control" type="text"
                                           value="" disabled/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">~</div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input id="label2EndName" name="label2EndName" class="form-control" type="text" value="" disabled/>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                </div>

                <div class="col-xs-12">
                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-1 no-padding">
                            <p>レーベル</p>
                        </div>
                        <div class="col-xs-1 no-padding">
                            <input type="radio" id="label3Selection" name="label3Selection" value="all" checked onclick="$.fn.radioButtonSelectionChanged('label3Selection', 'label3SelectionId')"> <span>すべて</span>
                        </div>
                        <div class="col-xs-1">
                            <input type="radio" id="label3Selection" name="label3Selection" value="custom" onclick="$.fn.radioButtonSelectionChanged('label3Selection', 'label3SelectionId')"><span>地区</span>
                        </div>
                        <div class="col-xs-2">
                            <input type="radio" id="label3Selection" name="label3Selection" value="custom" onclick="$.fn.radioButtonSelectionChanged('label3Selection', 'label3SelectionId')"> <span>私的な人員</span>
                        </div>

                    </div>
                    <div id="label3SelectionId">
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-1 col-xs-offset-1">
                                <div class="form-group">
                                    <input id="label3StartId" name="label3StartId" placeholder="000" class="form-control"
                                           type="text" value="" disabled onchange="$.fn.onInputValueChange('label3StartId', 'label3StartName')"/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">~</div>
                            <div class="col-xs-1">
                                <div class="form-group">
                                    <input id="label3EndId" name="label3EndId" placeholder="999" class="form-control"
                                           type="text" value="" disabled onchange="$.fn.onInputValueChange('label3EndId', 'label3EndName')"/>
                                </div>
                            </div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input id="label3StartName" name="label3StartName" class="form-control" type="text"
                                           value="" disabled/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">~</div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input id="label3EndName" name="label3EndName" class="form-control" type="text"
                                           value="" disabled/>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>


                <div class="col-xs-12">
                    <div class="col-xs-1 no-padding">
                        <p>レーベル</p>
                    </div>
                    <div class="col-xs-2">
                        <div class="form-group">
                            <input id="consumerCodeStart" name="consumerCodeStart" placeholder="0" class="form-control"
                                   type="text" value="" onchange="$.fn.onInputValueChange('consumerCodeStart', 'consumerCodeStartName')"/>
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
                    <div class="col-xs-1 no-padding ratio">~</div>
                    <div class="col-xs-3">
                        <div class="form-group">
                            <input id="consumerCodeEndName" name="consumerCodeEndName" class="form-control" type="text"
                                   value=""/>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 border1 no-padding">
                <p class="backend">エリアラベル</p>
                <div class="form-group">
                    <div class=" ">
                        <div class="col-xs-1   ">
                            <p>レーベル</p>
                        </div>
                        <div class="col-xs-1 no-padding ">
                            <input type="radio" id="label5Selection" name="label5Selection" value="all" onclick="$.fn.radioButtonSelectionChanged('label5Selection', 'label5SelectionId')"> <span>選択肢1</span>
                        </div>
                        <div class="col-xs-1 no-padding">
                            <input type="radio" id="label5Selection" name="label5Selection" value="custom" onclick="$.fn.radioButtonSelectionChanged('label5Selection', 'label5SelectionId')"> <span>選択肢2</span>
                        </div>

                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-1 ">レーベル</label>
                    <div class="col-xs-2 no-padding">
                        <input type="date" class="form-control"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-1">レーベル</label>
                    <div class="col-xs-1 no-padding ">
                        <input type="text" class="form-control" placeholder="0">
                    </div>
                    <div class="col-xs-1" style="margin-top:10px;">
                        日
                    </div>

                </div>

                <div class="form-group">
                    <div class="no-padding">
                        <div class="col-xs-1">
                            <p>ラベル</p>
                        </div>
                        <div class="col-xs-2 no-padding">
                            <input type="radio" id="label8Selection" name="label8Selection" value="all" onclick="$.fn.radioButtonSelectionChanged('label8Selection', 'label8SelectionId')"> <span></span><span
                                    class="font-exp-size">オプション1</span>
                        </div>
                        <div class="col-xs-2 no-padding">
                            <input type="radio" id="label8Selection" name="label8Selection" value="custom" onclick="$.fn.radioButtonSelectionChanged('label8Selection', 'label8SelectionId')"> <span></span><span
                                    class="font-exp-size">オプション2</span>
                        </div>
                        <div class="col-xs-2 no-padding">
                            <input type="radio" id="label8Selection" name="label8Selection" value="custom" onclick="$.fn.radioButtonSelectionChanged('label8Selection', 'label8SelectionId')"> <span></span><span
                                    class="font-exp-size">オプション3</span>
                        </div>

                        <div class="col-xs-1 no-padding">
                            <input type="radio" id="label8Selection" name="label8Selection" value="custom" onclick="$.fn.radioButtonSelectionChanged('label8Selection', 'label8SelectionId')"> <span class="font-exp-size"></span><span
                                    class="font-exp-size">オプション4</span>
                        </div>
                        <div class="col-xs-2">
                            <input type="radio" id="label8Selection" name="label8Selection" value="custom" onclick="$.fn.radioButtonSelectionChanged('label8Selection', 'label8SelectionId')"> <span></span><span
                                    class="font-exp-size">オプション5</span>
                        </div>
                        <div class="col-xs-2">
                            <input type="radio" id="label8Selection" name="label8Selection" value="custom" onclick="$.fn.radioButtonSelectionChanged('label8Selection', 'label8SelectionId')"> <span></span><span
                                    class="font-exp-size">オプション6</span>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="no-padding">
                        <div class="col-xs-1">
                            <p>ラベル</p>
                        </div>
                        <div class="col-xs-2 no-padding">
                            <input type="radio" id="label9Selection" name="label9Selection" value="all" onclick="$.fn.radioButtonSelectionChanged('label9Selection', 'label9SelectionId')"> <span>オプション1</span>
                        </div>
                        <div class="col-xs-2">
                            <input type="radio" id="label9Selection" name="label9Selection" value="custom" onclick="$.fn.radioButtonSelectionChanged('label9Selection', 'label9SelectionId')"> <span>オプション2</span>
                        </div>
                        <div class="col-xs-1">
                            <p>ラベル</p>
                        </div>
                        <div class="col-xs-2">
                            <input type="radio" id="label10Selection" name="label10Selection" value="all" onclick="$.fn.radioButtonSelectionChanged('label10Selection', 'label10SelectionId')"> <span>オプション1</span>
                        </div>
                        <div class="col-xs-2">
                            <input type="radio" id="label10Selection" name="label10Selection" value="custom" onclick="$.fn.radioButtonSelectionChanged('label10Selection', 'label10SelectionId')"> <span>オプション2</span>
                        </div>


                    </div>
                </div>


                <div class="form-group">
                    <label class="col-xs-1 control-label">レーベル</label>
                    <div class="col-xs-1 no-padding">
                        <input type="text" class="form-control" placeholder="00" name="label13Selection" id="label13Selection" onchange="$.fn.onInputValueChange('label13Selection', 'label13End')">
                    </div>
                    <div class="col-xs-9">
                        <input type="text" placeholder="" class="form-control" name="label13End" id="label13End"/>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-xs-1 control-label">レーベル</label>
                    <div class="col-xs-1 no-padding">
                        <input type="text" class="form-control" placeholder="00" name="label14Selection" id="label14Selection" onchange="$.fn.onInputValueChange('label14Selection', 'label14End')">
                    </div>
                    <div class="col-xs-9">
                        <input type="text" placeholder="" class="form-control" name="label14End" id="label14End"/>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-xs-1 control-label">レーベル</label>
                    <div class="col-xs-1 no-padding">
                        <input type="text" class="form-control" placeholder="00" name="label15Selection" id="label15Selection" onchange="$.fn.onInputValueChange('label15Selection', 'label15End')">
                    </div>
                    <div class="col-xs-9">
                        <input type="text" placeholder="" class="form-control" name="label15End" id="label15End"/>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-xs-1 control-label">レーベル</label>
                    <div class="col-xs-1 no-padding">
                        <input type="text" class="form-control" placeholder="00" name="label16Selection" id="label16Selection" onchange="$.fn.onInputValueChange('label16Selection', 'label16End')">
                    </div>
                    <div class="col-xs-9">
                        <input type="text" placeholder="" class="form-control" name="label16End" id="label16End"/>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-xs-1 control-label">レーベル</label>
                    <div class="col-xs-1 no-padding">
                        <input type="text" class="form-control" placeholder="00" name="label17Selection" id="label17Selection" onchange="$.fn.onInputValueChange('label17Selection', 'label17End')">
                    </div>
                    <div class="col-xs-9">
                        <input type="text" placeholder="" class="form-control" name="label17End" id="label17End"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-1">レーベル</label>
                    <div class="col-xs-2 no-padding">
                        <input type="date" class="form-control"/>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-xs-1">レーベル</label>
                    <div class="col-xs-3 no-padding">
                        <select id="formType" name="formType" class="form-control">
                            <option value="11検針伝票_東北用">アイテム1をドロップダウン</option>
                            <option value="New検針伝票_定期用">項目2をドロップダウン</option>
                            <option value="検針伝票">アイテム3をドロップダウン</option>
                            <option value="検針伝票_定期用">アイテム4をドロップダウン</option>
                            <option value="検針伝票_東北用">アイテム5をドロップダウン</option>

                        </select>
                    </div>
                </div>


            </div>


            <div class="col-xs-12 border1 no-padding bottom-box">
                <p class="backend">エリアラベル</p>
                <div class="form-group">
                    <div class="no-padding">
                        <div class="col-xs-1">
                            <p>ラベル</p>
                        </div>
                        <div class="col-xs-2  no-padding">
                            <input type="radio" id="label11Selection" name="label11Selection" value="all" onclick="$.fn.radioButtonSelectionChanged('label11Selection', 'label11SelectionId')"> <span class="font-exp-size"> オプション1</span>
                        </div>
                        <div class="col-xs-2 no-padding">
                            <input type="radio" id="label11Selection" name="label11Selection" value="custom" onclick="$.fn.radioButtonSelectionChanged('label11Selection', 'label11SelectionId')"> <span class="font-exp-size">オプション2</span>
                        </div>
                        <div class="col-xs-2">
                            <input type="radio" id="label11Selection" name="label11Selection" value="custom" onclick="$.fn.radioButtonSelectionChanged('label11Selection', 'label11SelectionId')"> <span class="font-exp-size">オプション3</span>
                        </div>

                        <div class="col-xs-2">
                            <input type="radio" id="label11Selection" name="label11Selection" value="custom" onclick="$.fn.radioButtonSelectionChanged('label11Selection', 'label11SelectionId')"> <span class="font-exp-size">オプション4</span>
                        </div>
                        <div class="col-xs-2">
                            <input type="radio" id="label11Selection" name="label11Selection" value="custom" onclick="$.fn.radioButtonSelectionChanged('label11Selection', 'label11SelectionId')"> <span class="font-exp-size">オプション5</span>
                        </div>
                        <div class="col-xs-1 no-padding">
                            <input type="radio" id="label11Selection" name="label11Selection" value="custom" onclick="$.fn.radioButtonSelectionChanged('label11Selection', 'label11SelectionId')"> <span class="font-exp-size">オプション6</span>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="no-padding">
                        <div class="col-xs-1">
                            <p>ラベル</p>                                                            </p>
                        </div>
                        <div class="col-xs-2 no-padding">
                            <input type="radio" id="label12Selection" name="label12Selection" value="all" onclick="$.fn.radioButtonSelectionChanged('label12Selection', 'label12SelectionId')"> <span>オプション1</span>
                        </div>
                        <div class="col-xs-2 no-padding">
                            <input type="radio" id="label12Selection" name="label12Selection" value="custom" onclick="$.fn.radioButtonSelectionChanged('label12Selection', 'label12SelectionId')"> <span>オプション2</span>
                        </div>

                        <div class="col-xs-2">
                            <input type="radio" id="label12Selection" name="label12Selection" value="custom" onclick="$.fn.radioButtonSelectionChanged('label12Selection', 'label12SelectionId')"> <span>オプション3</span>
                        </div>
                        <div class="col-xs-2">
                            <input type="radio" id="label12Selection" name="label12Selection" value="custom" onclick="$.fn.radioButtonSelectionChanged('label12Selection', 'label12SelectionId')"> <span>オプション4</span>
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