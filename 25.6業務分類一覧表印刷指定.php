<?php include "header.php"; ?>
<?php include "sidebar.php"; ?>

<div class="col-xs-8 col-md-10 col-xs-12 no-padding">

    <div class="col-md-12 col-xs-12 no-padding body-background">

        <div class="head-p ">
            <p>業務分類一覧表印刷指定
            </p>
        </div>
        <form action="/gas/meter-reading" id="meter" method="POST">
            <div class="col-xs-12 border1 no-padding">

                <p class="backend">消費者範囲指定</p>

                <div class="col-xs-12">
                    <div class="col-xs-1 no-padding">
                        <p>業務分類

                        </p>
                    </div>
                    <div class="col-xs-1">
                        <input type="radio" name="businessSelection" id="businessSelection" value="all" checked onclick="$.fn.radioButtonSelectionChanged('businessSelection', 'businessSelectionId')"><span> 全て</span>
                    </div>
                    <div class="col-xs-1">
                        <input type="radio" name="businessSelection" id="businessSelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('businessSelection', 'businessSelectionId')"> <span> 選択</span>
                    </div>

                </div>
                <div id="businessSelectionId">
                    <div class="col-xs-12">
                        <div class="col-xs-1 col-xs-offset-1">
                            <div class="form-group">
                                <input id="businessStartId" name="businessStartId" placeholder="000" class="form-control"
                                       type="number" value="" disabled onchange="$.fn.onInputValueChange('businessStartId', 'businessStartName')"/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">~</div>
                        <div class="col-xs-1">
                            <div class="form-group">
                                <input id="businessEndId" name="businessEndId" placeholder="999" class="form-control"
                                       type="number" value="" disabled onchange="$.fn.onInputValueChange('businessEndId', 'businessEndName')"/>
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input id="businessStartName" name="businessStartName" class="form-control" type="text"
                                       value="" disabled/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">~</div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input id="businessEndName" name="businessEndName" class="form-control" type="text"
                                       value="" disabled/>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-xs-12 border1 no-padding">
                <p class="backend">出力指定</p>

                <div class="col-xs-12">

                    <div class="form-group">
                        <label class="col-xs-1 no-padding">出力先
                        </label>

                        <div class="col-xs-2">
                            <input type="radio" name="outputDestination" id="outputDestination" value="all" onclick="$.fn.radioButtonSelectionChanged('outputDestination', 'outputDestination')"><span> プリンタ（印刷）</span>
                        </div>

                        <div class="col-xs-2 no-padding">
                            <input type="radio" name="outputDestination" id="outputDestination" value="custom" onclick="$.fn.radioButtonSelectionChanged('outputDestination', 'outputDestination')"><span> 画面（印刷イメージ）</span>
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