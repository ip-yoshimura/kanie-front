<?php
include "header.php"
?>
<?php
include "sidebar.php"
?>
<div class="col-md-10 col-xs-8 col-xs-12 no-padding">

    <div class="col-md-12 col-xs-12 no-padding body-background">

        <div class="head-p ">
            <p>メータ交換入力印刷指定
            </p>
        </div>
        <form id="meter" action="/gas/meter-reading" method="POST">

            <div class="col-xs-12 border1 no-padding">

                <p class="backend">消費者範囲指定</p>

                <div class="col-xs-12">
                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-1 no-padding">
                            <p>営業所コード</p>
                        </div>
                        <div class="col-xs-1 no-padding">
                            <input type="radio" name="all" value="all"> 全て
                        </div>
                        <div class="col-xs-1">
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
                                <input id="trustEndName" name="trustEndName" class="form-control" type="text"
                                       value=""/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-1 no-padding">
                            <p>受託区分</p>
                        </div>
                        <div class="col-xs-1 no-padding">
                            <input type="radio" name="all" value="all"> 全て


                        </div>
                        <div class="col-xs-1">
                            <input type="radio" name="directSales" value="directSales">  直売

                        </div>
                        <div class="col-xs-2">
                            <input type="radio" name="salesOutlet" value="salesOutlet"> 販売店


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
                                <input id="trustEndName" name="trustEndName" class="form-control" type="text"
                                       value=""/>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-xs-12">
                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-1 no-padding">
                            <p>出力区分

                            </p>
                        </div>
                        <div class="col-xs-1 no-padding">
                            <input type="radio" name="all" value="all"> 全て
                        </div>
                        <div class="col-xs-1">
                            <input type="radio" name="directSales" value="directSales"> 地区
                        </div>
                        <div class="col-xs-2">
                            <input type="radio" name="salesOutlet" value="salesOutlet"> 営業担当者
                        </div>
                        <div class="col-xs-2">
                            <input type="radio" name="salesOutlet" value="salesOutlet"> 工事担当者
                        </div>

                    </div>
                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-1 col-xs-offset-1">
                            <div class="form-group">
                                <input id="outputStartId" name="outputStartId" placeholder="000"
                                       class="form-control" type="text" value=""/>
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

                <div class="col-xs-12">
                    <div class="col-xs-1 no-padding">
                        <p>消費者コード</p>
                    </div>
                    <div class="col-xs-2">
                        <div class="form-group">
                            <input id="consumerCodeStart" name="consumerCodeStart" placeholder="0"
                                   class="form-control" type="text" value=""/>
                        </div>
                    </div>
                    <div class="col-xs-1 no-padding ratio">~</div>
                    <div class="col-xs-2">
                        <div class="form-group">
                            <input id="consumeCodeEnd" name="consumeCodeEnd" placeholder="z" class="form-control"
                                   type="text" value=""/>
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
                            <input id="consumerCodeEndName" name="consumerCodeEndName" class="form-control"
                                   type="text" value=""/>
                        </div>
                    </div>
                </div>


            </div>

            <div class="col-xs-12 border1 no-padding">

                <p class="backend">作成範囲指定</p>
                <div class="col-xs-12">

                    <div class="form-group">

                        <label class="col-xs-1 no-padding">メータ交換日</label>

                        <div class="col-xs-2">
                            <div class="form-group">
                                <input id="consumerCodeEndName" name="consumerCodeEndName" class="form-control"
                                       type="date" value=""/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">~</div>
                        <div class="col-xs-2">
                            <div class="form-group">
                                <input id="consumerCodeEndName" name="consumerCodeEndName" class="form-control"
                                       type="date" value=""/>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-xs-12 border1 no-padding bottom-box">

                <p class="backend">出力指定</p>
                <div class="col-xs-12">
                    <div class="form-group">

                        <label class="col-xs-1 no-padding"> 改ページ指定
                        </label>
                        <div class="col-xs-10">
                            <div class="col-xs-3">
                                <input type="radio"/>営業所・販売店
                            </div>

                            <div class="col-xs-3">
                                <input type="radio"/>地区
                            </div>

                            <div class="col-xs-2">
                                <input type="radio"/> 営業担当者
                            </div>
                            <div class="col-xs-2">
                                <input type="radio"/> 工事担当者
                            </div>
                            <div class="col-xs-2">
                                <input type="radio"/> なし
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-xs-12">

                    <div class="form-group">
                        <label class="col-xs-1 no-padding">並び順
                        </label>
                        <div class="col-xs-10">
                            <div class="col-xs-3">
                                <input type="radio"/> 消費者コード順
                            </div>

                            <div class="col-xs-3">
                                <input type="radio"/>検針順路順
                            </div>
                            <div class="col-xs-3">
                                <input type="radio"/>検索名順
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-xs-12">

                    <div class="form-group">
                        <label class="col-xs-1 no-padding">出力先
                        </label>
                        <div class="col-xs-10">
                            <div class="col-xs-3">
                                <input type="radio"/> プリンタ（印刷）
                            </div>

                            <div class="col-xs-3">
                                <input type="radio"/>画面（印刷イメージ）
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