<?php
include "header.php"
?>
<?php
include "sidebar.php"
?>
<div class="col-xs-8 col-md-10 col-xs-12 no-padding">

    <div class="col-md-12 col-xs-12 no-padding head-color">
        <div class="head-p">
            <p>供給設備種別一覧表印刷指定
            </p>
        </div>
                <form action="/gas/meter-reading" id="meter" method="POST">

                    <div class="col-xs-12 border1 no-padding">
                        <p class="backend">印刷範囲指定</p>
                <div class="col-xs-12">
                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-1 no-padding">
                            <p>種別区分</p>
                        </div>
                        <div class="col-xs-1">
                            <input type="radio" name="classification" value="all" checked onclick="$.fn.radioButtonSelectionChanged('classification', 'classificationId')"><span>全て</span> 
                        </div>
                        <div class="col-xs-1">
                            <input type="radio" name="classification" value="directSales" onclick="$.fn.radioButtonSelectionChanged('classification', 'classificationId')"><span>選択</span> 
                        </div>
                        <div class="col-xs-1">

                        </div>
                    </div>
                    
                    <div class="col-xs-12 no-padding">
                       <div id="classificationId">
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
                        <div class="col-xs-2">
                            <div class="form-group">
                                <input id="trustStartName" name="trustStartName" class="form-control" type="text"
                                       value="" disabled/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">~</div>
                        <div class="col-xs-2">
                            <div class="form-group">
                                <input id="trustEndName" name="trustEndName" class="form-control" type="text" value="" disabled/>
                            </div>
                        </div>
                       </div>

                        <div class="col-xs-4">
                            <input type="radio" name="directSales" value="all"><span>供給管</span> 
                            <input type="radio" name="directSales" value="directSales"><span>調整器等</span> 
                            <input type="radio" name="directSales" value="directSales"><span>ガスメータ</span> 
                        </div>
                    </div>
                    
                </div>
            </div>

                    <div class="col-xs-12 border1 no-padding bottom-box">
                <p class="backend">出力指定</p>
                <div class="col-xs-12">

                    <div class="col-xs-1 no-padding">
                        <p>出力先</p>
                    </div>
                    <div class="col-xs-6">
                        <input type="radio" name="output" value="all" onclick="$.fn.radioButtonSelectionChanged('output', 'outputId')"><span>プリンタ（印刷）</span>  
                        <input type="radio" name="output" value="all" onclick="$.fn.radioButtonSelectionChanged('output', 'outputId')"><span>画面（印刷イメージ）</span>  
                    </div>

                </div>
            </div>


            <!--Last-->

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