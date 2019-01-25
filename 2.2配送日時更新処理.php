<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<div class="col-xs-8 col-md-10 col-xs-12 no-padding">

    <div class="col-md-12 col-xs-12 no-padding head-color">
        <div class="head-p">
            <p>配送日時更新処理

            </p>
        </div>
        <div class="text-center"><strong>配送日時更新処理を開始します</strong></div>
        <div class="text-center"><strong>開始する場合は条件を指定して [実行] を選択してください</strong></div>
        <br>
        <form action="/gas/meter-reading" id="meter" method="POST">

            <div class="col-xs-12 border1 no-padding">
                <p class="backend">実行対象範囲指定 </p>

                <div class="col-xs-12">
                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-1 no-padding">
                            <p>営業所コード</p>
                        </div>
                        <div class="col-xs-1">
                            <input type="radio" name="all" value="all"> 全て
                        </div>
                        <div class="col-xs-1 no-padding">
                            <input type="radio" name="directSales" value="directSales"> 選択
                        </div>

                    </div>
                    <div class="col-xs-12 no-padding">
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
                                <input id="trustEndName" name="trustEndName" class="form-control" type="text" value=""/>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12">
                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-1 no-padding">
                            <p>受託区分</p>
                        </div>
                        <div class="col-xs-1">
                            <input type="radio" name="all" value="all"> 全て
                        </div>
                        <div class="col-xs-1">
                            <input type="radio" name="directSales" value="directSales"> 直売
                        </div>
                        <div class="col-xs-2">
                            <input type="radio" name="salesOutlet" value="salesOutlet"> 販売店
                        </div>

                    </div>
                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-1 col-xs-offset-1">
                            <div class="form-group">
                                <input id="outputStartId" name="outputStartId" placeholder="000" class="form-control"
                                       type="text" value=""/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">~</div>
                        <div class="col-xs-1">
                            <div class="form-group">
                                <input id="outputEndId" name="outputEndId" placeholder="999" class="form-control"
                                       type="text" value=""/>
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input id="outputStartName" name="outputStartName" class="form-control" type="text"
                                       value=""/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">~</div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input id="outputEndName" name="outputEndName" class="form-control" type="text"
                                       value=""/>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


    </div>


    <?php include 'footer.php'; ?>

    </form>

</div>

</body>

</html>