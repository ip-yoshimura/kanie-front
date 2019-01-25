<?php
include "header.php"
?>
<?php
include "sidebar.php"
?>
<div class="col-md-10 col-xs-8 col-xs-12 no-padding">

    <div class="col-md-12 col-xs-12 no-padding body-background">

        <div class="head-p ">
            <p>点検調査結果不良一覧印刷指定

            </p>
        </div>
                <form action="/gas/meter-reading" id="meter" method="POST">
                    <div class="col-xs-12 border1 no-padding">
                        <p class="backend">消費者範囲指定</p>
                        <div class="col-xs-12">
                            <div class="col-xs-12 no-padding">
                                <div class="col-xs-1 no-padding">
                                    <p>営業所コード</p>
                                </div>
                                <div class="col-xs-1">
                                    <input name="all" type="radio" value="all"> <span>全て</span>
                                </div>
                                <div class="col-xs-2">
                                    <input name="directSales" type="radio" value="directSales"> <span>選択</span>
                                </div>

                            </div>
                            <div class="col-xs-12 no-padding">
                                <div class="col-xs-1 col-xs-offset-1">
                                    <div class="form-group">
                                        <input class="form-control" id="trustStartId" name="trustStartId"
                                               placeholder="000"
                                               type="text" value=""/>
                                    </div>
                                </div>
                                <div class="col-xs-1 no-padding ratio">~</div>
                                <div class="col-xs-1">
                                    <div class="form-group">
                                        <input class="form-control" id="trustEndId" name="trustEndId" placeholder="999"
                                               type="text" value=""/>
                                    </div>
                                </div>
                                <div class="col-xs-3">
                                    <div class="form-group">
                                        <input class="form-control" id="trustStartName" name="trustStartName"
                                               type="text"
                                               value=""/>
                                    </div>
                                </div>
                                <div class="col-xs-1 no-padding ratio">~</div>
                                <div class="col-xs-3">
                                    <div class="form-group">
                                        <input class="form-control" id="trustEndName" name="trustEndName" type="text"
                                               value=""/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-12 no-padding">
                                <div class="col-xs-1 no-padding">
                                    <p>自他社区分</p>
                                </div>
                                <div class="col-xs-1">
                                    <input name="all" type="radio" value="all"> <span>全て</span>


                                </div>
                                <div class="col-xs-1">
                                    <input name="directSales" type="radio" value="directSales"> <span>自社</span>


                                </div>
                                <div class="col-xs-1">
                                    <input name="salesOutlet" type="radio" value="salesOutlet"> <span>他社</span>


                                </div>
                            </div>


                            <div class="col-xs-12 no-padding">
                                <div class="col-xs-1 col-xs-offset-1">
                                    <div class="form-group">
                                        <input class="form-control" id="trustStartId" name="trustStartId"
                                               placeholder="000"
                                               type="text" value=""/>
                                    </div>
                                </div>
                                <div class="col-xs-1 no-padding ratio">~</div>
                                <div class="col-xs-1">
                                    <div class="form-group">
                                        <input class="form-control" id="trustEndId" name="trustEndId" placeholder="999"
                                               type="text" value=""/>
                                    </div>
                                </div>
                                <div class="col-xs-3">
                                    <div class="form-group">
                                        <input class="form-control" id="trustStartName" name="trustStartName"
                                               type="text"
                                               value=""/>
                                    </div>
                                </div>
                                <div class="col-xs-1 no-padding ratio">~</div>
                                <div class="col-xs-3">
                                    <div class="form-group">
                                        <input class="form-control" id="trustEndName" name="trustEndName" type="text"
                                               value=""/>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-xs-12">
                            <div class="col-xs-12 no-padding">
                                <div class="col-xs-1 no-padding">
                                    <p>出力区分1</p>
                                </div>
                                <div class="col-xs-1">
                                    <input name="all" type="radio" value="all"> <span>全て</span>


                                </div>
                                <div class="col-xs-1">
                                    <input name="directSales" type="radio" value="directSales"> <span>地区</span>


                                </div>
                                <div class="col-xs-2">
                                    <input name="salesOutlet" type="radio" value="salesOutlet"> <span>営業担当者</span>


                                </div>

                            </div>
                            <div class="col-xs-12 no-padding">
                                <div class="col-xs-1 col-xs-offset-1">
                                    <div class="form-group">
                                        <input class="form-control" id="outputStartId" name="outputStartId"
                                               placeholder="000" type="text" value=""/>
                                    </div>
                                </div>
                                <div class="col-xs-1 no-padding ratio">~</div>
                                <div class="col-xs-1">
                                    <div class="form-group">
                                        <input class="form-control" id="outputEndId" name="outputEndId"
                                               placeholder="999"
                                               type="text" value=""/>
                                    </div>
                                </div>
                                <div class="col-xs-3">
                                    <div class="form-group">
                                        <input class="form-control" id="outputStartName" name="outputStartName"
                                               type="text"
                                               value=""/>
                                    </div>
                                </div>
                                <div class="col-xs-1 no-padding ratio">~</div>
                                <div class="col-xs-3">
                                    <div class="form-group">
                                        <input class="form-control" id="outputEndName" name="outputEndName" type="text"
                                               value=""/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-12 no-padding">
                                <div class="col-xs-1 no-padding">
                                    <p>出力区分2</p>
                                </div>
                                <div class="col-xs-1">
                                    <input name="all" type="radio" value="all"> <span>全て</span>
                                </div>
                                <div class="col-xs-2">
                                    <input name="directSales" type="radio" value="directSales"> <span>保安機関</span>
                                </div>

                            </div>
                            <div class="col-xs-12 no-padding">
                                <div class="col-xs-1 col-xs-offset-1">
                                    <div class="form-group">
                                        <input class="form-control" id="outputStartId" name="outputStartId"
                                               placeholder="000" type="text" value=""/>
                                    </div>
                                </div>
                                <div class="col-xs-1 no-padding ratio">~</div>
                                <div class="col-xs-1">
                                    <div class="form-group">
                                        <input class="form-control" id="outputEndId" name="outputEndId"
                                               placeholder="999"
                                               type="text" value=""/>
                                    </div>
                                </div>
                                <div class="col-xs-3">
                                    <div class="form-group">
                                        <input class="form-control" id="outputStartName" name="outputStartName"
                                               type="text"
                                               value=""/>
                                    </div>
                                </div>
                                <div class="col-xs-1 no-padding ratio">~</div>
                                <div class="col-xs-3">
                                    <div class="form-group">
                                        <input class="form-control" id="outputEndName" name="outputEndName" type="text"
                                               value=""/>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12">
                            <div class="col-xs-1 no-padding">
                                <p>調査員</p>
                            </div>
                            <div class="col-xs-2">
                                <div class="form-group">
                                    <input class="form-control" id="consumerCodeStart" name="consumerCodeStart"
                                           placeholder="0" type="text" value=""/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">~</div>
                            <div class="col-xs-2">
                                <div class="form-group">
                                    <input class="form-control" id="consumeCodeEnd" name="consumeCodeEnd"
                                           placeholder="z"
                                           type="text" value=""/>
                                </div>
                            </div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input class="form-control" id="consumerCodeStartName" name="consumerCodeStartName"
                                           type="text" value=""/>
                                </div>
                            </div>

                        </div>

                        <div class="col-xs-12">
                            <div class="col-xs-1 no-padding">
                                <p>消費者コード</p>
                            </div>
                            <div class="col-xs-2">
                                <div class="form-group">
                                    <input class="form-control" id="consumerCodeStart" name="consumerCodeStart"
                                           placeholder="0" type="text" value=""/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">~</div>
                            <div class="col-xs-2">
                                <div class="form-group">
                                    <input class="form-control" id="consumeCodeEnd" name="consumeCodeEnd"
                                           placeholder="z"
                                           type="text" value=""/>
                                </div>
                            </div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input class="form-control" id="consumerCodeStartName" name="consumerCodeStartName"
                                           type="text" value=""/>
                                </div>
                            </div>

                        </div>

                        <div class="col-xs-12">
                            <div class="col-xs-12 no-padding">
                                <div class="col-xs-1 no-padding">
                                    <p>入居状態</p>
                                </div>
                                <div class="col-xs-1">
                                    <input name="all" type="radio" value="all"><span>全て</span>
                                </div>
                                <div class="col-xs-2">
                                    <input name="directSales" type="radio" value="directSales"><span>閉栓・休止除く</span>


                                </div>
                                <div class="col-xs-2">
                                    <input name="directSales" type="radio" value="directSales"><span>未入居除く</span>

                                </div>

                            </div>

                        </div>


                    </div>


                    <div class="col-xs-12 border1 no-padding">
                        <p class="backend">作成範囲指定</p>
                        <div class="col-xs-12">

                            <div class="form-group">

                                <label class="col-xs-1 no-padding"> 点検調査日

                                </label>

                                <div class="col-xs-2">
                                    <div class="form-group">
                                        <input class="form-control" id="consumeCodeEnd" name="consumeCodeEnd"
                                               placeholder="z"
                                               type="date" value=""/>
                                    </div>
                                </div>
                                <div class="col-xs-1 no-padding ratio">~</div>
                                <div class="col-xs-2">
                                    <div class="form-group">
                                        <input class="form-control" id="consumerCodeStartName" name="consumerCodeStartName"
                                               type="date" value=""/>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-xs-12">

                            <div class="form-group">
                                <label class="col-xs-1 no-padding"> 期限不明
                                </label>

                                <div class="col-xs-1">
                                    <input type="radio"/> <span>含む</span>
                                </div>

                                <div class="col-xs-1">
                                    <input type="radio"/> <span>除く</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12">

                            <div class="form-group">
                                <label class="col-xs-1 no-padding"> 対象法律
                                </label>

                                <div class="col-xs-1">
                                    <input type="radio"/> <span>全て</span>
                                </div>

                                <div class="col-xs-1">
                                    <input type="radio"/> <span>液石法</span>
                                </div>

                                <div class="col-xs-1">
                                    <input type="radio"/> <span>高圧法</span>
                                </div>
                                <div class="col-xs-2">
                                    <input type="radio"/> <span>ガス事業法</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 border1 no-padding bottom-box">
                        <p class="backend"> 出力指定</p>
                        <div class="col-xs-12">

                            <div class="form-group">

                                <label class="col-xs-1 no-padding"> 改ページ指定
                                </label>

                                <div class="col-xs-2">
                                    <input type="radio"/> <span>営業所・販売店</span>
                                </div>

                                <div class="col-xs-2 no-padding">
                                    <input type="radio"/> <span>地区</span>
                                </div>

                                <div class="col-xs-2">
                                    <input type="radio"/> <span>営業担当者</span>
                                </div>

                                <div class="col-xs-2">
                                    <input type="radio"/> <span>なし</span>
                                </div>

                            </div>

                        </div>


                        <div class="col-xs-12">

                            <div class="form-group">

                                <label class="col-xs-1 no-padding"> 並び順

                                </label>

                                <div class="col-xs-2">
                                    <input type="radio"/>  <span>消費者コード順</span>
                                </div>

                                <div class="col-xs-2 no-padding">
                                    <input type="radio"/> <span>検針順路順</span>
                                </div>

                                <div class="col-xs-2">
                                    <input type="radio"/> <span>検索名順</span>
                                </div>

                            </div>
                        </div>

                        <div class="col-xs-12">

                            <div class="form-group">

                                <label class="col-xs-1 no-padding"> 出力先

                                </label>

                                <div class="col-xs-2">
                                    <input type="radio"/> <span>プリンタ（印刷）</span>
                                </div>

                                <div class="col-xs-2 no-padding">
                                    <input type="radio"/> <span>画面（印刷イメージ）</span>
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