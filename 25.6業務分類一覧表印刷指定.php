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
                                <input type="radio" name="all" value="all"><span> 全て</span>
                            </div>
                            <div class="col-xs-1">
                                <input type="radio" name="directSales" value="directSales"> <span> 選択</span>
                            </div>

                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-1 col-xs-offset-1">
                                <div class="form-group">
                                    <input id="trustStartId" name="trustStartId" placeholder="000" class="form-control"
                                           type="text" value=""/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">~</div>
                            <div class="col-xs-1">
                                <div class="form-group">
                                    <input id="trustEndId" name="trustEndId" placeholder="999" class="form-control"
                                           type="text" value=""/>
                                </div>
                            </div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input id="trustStartName" name="trustStartName" class="form-control" type="text"
                                           value=""/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">~</div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input id="trustEndName" name="trustEndName" class="form-control" type="text"
                                           value=""/>
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
                                <input name="directSales" type="radio" value="directSales"><span> プリンタ（印刷）</span>
                            </div>

                            <div class="col-xs-2 no-padding">
                                <input name="directSales" type="radio" value="directSales"><span> 画面（印刷イメージ）</span>
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