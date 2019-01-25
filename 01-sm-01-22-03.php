<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<div class="col-md-10 col-xs-8 col-xs-12 no-padding">

    <div class="col-md-12 col-xs-12 no-padding body-background">

        <div class="head-p ">
            <p>検針伝票入力チェックリスト印刷指定

            </p>
        </div>
                <form id="meter" action="/gas/meter-reading" method="POST">
                    <div class="col-xs-12 border1 no-padding">
                        <p class="backend">作成範囲指定 </p>
                    <div class="col-xs-12 form-group">
                        <div class="col-xs-1 no-padding">
                            <p>入力担当者</p>
                        </div>
                        <div class="col-xs-1 ">
                            <input type="text" name="personStart" id="personStart" class="form-control" placeholder="000" value="" onchange="$.fn.onInputValueChange('personStart', 'personEnd')" >
                        </div>
                        <div class="col-xs-1 no-padding ratio">~</div>
                        <div class="col-xs-3 no-padding">
                            <input type="text" name="personEnd" id="personEnd" class="form-control" value=""/>
                        </div>
                    </div>
                    <div class="col-xs-12 form-group">
                        <div class="col-xs-1 no-padding">
                            <p>入力作業日</p>
                        </div>
                        <div class="col-xs-2">
                            <input type="date" class="form-control">
                        </div>
                    </div>
                    <div class="col-xs-12 form-group">
                        <div class="col-xs-1 no-padding">
                            <p>出力区分</p>
                        </div>
                        <div class="col-xs-1">
                            <input type="radio" name="outputselection" id="outputselection" value="all" checked onclick="$.fn.radioButtonSelectionChanged('outputselection', 'outputselectionId')"> 全て
                        </div>
                        <div class="col-xs-1">
                            <input type="radio" name="outputselection" id="outputselection" value="output" onclick="$.fn.radioButtonSelectionChanged('outputselection', 'outputselectionId')"> 地区
                        </div>
                        <div class="col-xs-1 no-padding">
                            <input type="radio" name="outputselection" id="outputselection" value="output" onclick="$.fn.radioButtonSelectionChanged('outputselection', 'outputselectionId')"> 検針担当者
                        </div>
                        <div class="col-xs-2">
                            <input type="radio" name="outputselection" id="outputselection" value="output" onclick="$.fn.radioButtonSelectionChanged('outputselection', 'outputselectionId')"> 営業所・販売店
                        </div>
                    </div>
                        <div id="outputselectionId">
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-1 col-xs-offset-1">
                                <div class="form-group">
                                    <input id="outputStartId" name="outputStartId" placeholder="000" class="form-control"
                                           type="text" value="" disabled onchange="$.fn.onInputValueChange('outputStartId', 'outputStartName')"/>
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
                                           value=""disabled/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">~</div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input id="outputEndName" name="outputEndName" class="form-control" type="text"
                                           value="" disabled/>
                                </div>
                            </div>
                        </div>
                        </div>
                    <div class="col-xs-12 form-group">
                        <div class="col-xs-1 no-padding">
                            <p>検針日</p>
                        </div>
                        <div class="col-xs-2">
                            <input type="date" class="form-control">
                        </div>
                        <div class="col-xs-1 no-padding ratio">~</div>
                        <div class="col-xs-2">
                            <input type="date" class="form-control">
                        </div>
                    </div>
                    <div class="col-xs-12 form-group">
                        <div class="col-xs-1 no-padding">
                            <p>伝票番号</p>
                        </div>
                        <div class="col-xs-2">
                            <input type="date" class="form-control">
                        </div>
                        <div class="col-xs-1 no-padding ratio">~</div>
                        <div class="col-xs-2">
                            <input type="date" class="form-control">
                        </div>
                    </div>
                    <div class="col-xs-12 form-group">
                        <div class="col-xs-1 no-padding">
                            <p>検針区分</p>
                        </div>
                        <div class="col-xs-1">
                            <input type="radio" name="meter" id="meter" value="all" onclick="$.fn.radioButtonSelectionChanged('meter', 'meterId')"> 全て
                        </div>
                        <div class="col-xs-1 no-padding">
                            <input type="radio" name="meter" id="meter" value="meter" onclick="$.fn.radioButtonSelectionChanged('meter', 'meterId')"> 手書伝票
                        </div>
                        <div class="col-xs-1 no-padding">
                            <input type="radio" name="meter" id="meter" value="meter" onclick="$.fn.radioButtonSelectionChanged('meter', 'meterId')"> ハンディ
                        </div>
                        <div class="col-xs-1">
                            <input type="radio" name="meter" id="meter" value="meter" onclick="$.fn.radioButtonSelectionChanged('meter', 'meterId')"> テレメ
                        </div>
                    </div>
                    </div>

                    <div class="col-xs-12 border1 no-padding bottom-box">
                        <p class="backend">出力指定 </p>
                    <div class="col-xs-12 form-group">
                        <div class="col-xs-1 no-padding">
                            <p>並び順</p>
                        </div>
                        <div class="col-xs-1">
                            <input type="radio" name="sortby" id="sortby" value="all" onclick="$.fn.radioButtonSelectionChanged('sortby', 'sortbyId')"> 入力順
                        </div>
                        <div class="col-xs-2">
                            <input type="radio" name="sortby" id="sortby" value="sortby" onclick="$.fn.radioButtonSelectionChanged('sortby', 'sortbyId')"> 消費者コード順
                        </div>
                        <div class="col-xs-2">
                            <input type="radio" name="sortby" id="sortby" value="sortby" onclick="$.fn.radioButtonSelectionChanged('sortby', 'sortbyId')"> 検索名順
                        </div>
                        <div class="col-xs-2">
                            <input type="radio" name="sortby" id="sortby" value="sortby" onclick="$.fn.radioButtonSelectionChanged('sortby', 'sortbyId')"> 検針順路順
                        </div>
                    </div>
                    <div class="col-xs-12 form-group">
                        <div class="col-xs-1 no-padding">
                            <p>出力先</p>
                        </div>
                        <div class="col-xs-2">
                            <input type="radio" name="output" id="output" value="all" onclick="$.fn.radioButtonSelectionChanged('output', 'outputId')"> プリンタ（印刷
                        </div>
                        <div class="col-xs-3">
                            <input type="radio" name="output" id="output" value="output" onclick="$.fn.radioButtonSelectionChanged('output', 'outputId')">画面（印刷イメージ）
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