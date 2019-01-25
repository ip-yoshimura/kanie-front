<?php
include "header.php"
?>
<?php
include "sidebar.php"
?>
<div class="col-md-10 col-xs-8 col-xs-12 no-padding">

    <div class="col-md-12 col-xs-12 no-padding body-background">

        <div class="head-p ">
            <p>調整器等期限管理帳票印刷指定 </p>
        </div>
                <form id="meter" action="/gas/meter-reading" method="POST">
                    <div class="col-xs-12 border1 no-padding">
                        <p class="backend">消費者範囲指定</p>

                    <div class="col-xs-12">
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-1 no-padding">
                                <p>営業所コード</p>
                            </div>
                            <div class="col-xs-1">
                                <input type="radio" name="all" value="all"> <span>全て</span>
                            </div>
                            <div class="col-xs-1">
                                <input type="radio" name="directSales" value="directSales"> <span>選択</span>
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
                                <p>自他社区分</p>
                            </div>
                            <div class="col-xs-1">
                                <input type="radio" name="all" value="all"> <span>全て</span>


                            </div>
                            <div class="col-xs-1">
                                <input type="radio" name="directSales" value="directSales"> <span>自社</span>


                            </div>
                            <div class="col-xs-2">
                                <input type="radio" name="salesOutlet" value="salesOutlet"> <span>他社</span>


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
                                <p>出力区分</p>
                            </div>
                            <div class="col-xs-1">
                                <input type="radio" name="all" value="all"> <span>全て</span>


                            </div>
                            <div class="col-xs-1">
                                <input type="radio" name="directSales" value="directSales"> <span>地区</span>


                            </div>
                            <div class="col-xs-2">
                                <input type="radio" name="salesOutlet" value="salesOutlet"> <span>営業担当者</span>


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

                    <div class="col-xs-12">
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-1 no-padding">
                                <p>入居状態</p>
                            </div>
                            <div class="col-xs-1">
                                <input type="radio" name="all" value="all"><span>全て</span>
                            </div>
                            <div class="col-xs-2">
                                <input type="radio" name="directSales" value="directSales"><span>閉栓・休止除く</span>


                            </div>
                            <div class="col-xs-2">
                                <input type="radio" name="directSales" value="directSales"><span>未入居除く</span>

                            </div>

                        </div>

                    </div>
                    </div>

                    <div class="col-xs-12 border1 no-padding">
                        <p class="backend">作成範囲指定 </p>
                    <div class="col-xs-12">

                        <div class="form-group">

                            <label class="col-xs-1 no-padding"> 区分

                            </label>

                            <div class="col-xs-10">
                                <input type="radio"/> <span>全て</span>
                                <input type="radio"/> <span>調整器</span>
                                <input type="radio"/> <span>警報器連動遮断装置</span>
                                <input type="radio"/> <span>ガス放出防止器</span>
                                <input type="radio"/> <span>対震自動ガス遮断装置</span>
                                <input type="radio"/> <span>気化器</span>
                            </div>

                        </div>
                    </div>

                    <div class="col-xs-12">

                        <div class="form-group">
                            <label class="col-xs-1 no-padding"> 種別
                            </label>

                            <div class="col-xs-10">
                                <input type="radio"/> <span>全て</span>
                                <input type="radio"/> <span>種別指定</span>
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


                    <div class="col-xs-12">
                        <div class="form-group">
                            <label class="col-xs-1 no-padding"> 製造年月

                            </label>

                            <div class="col-xs-2">
                                <div class="form-group">
                                    <input id="consumerCodeStartName" name="consumerCodeStartName" class="form-control"
                                           type="text" value=""/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">~</div>
                            <div class="col-xs-2">
                                <div class="form-group">
                                    <input id="consumerCodeEndName" name="consumerCodeEndName" class="form-control"
                                           type="text" value=""/>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-xs-12">
                        <div class="form-group">
                            <label class="col-xs-1 no-padding"> 設置年月

                            </label>

                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input id="consumerCodeStart" name="consumerCodeStart" placeholder="0"
                                           class="form-control" type="text" value=""/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">~</div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input id="consumeCodeEnd" name="consumeCodeEnd" placeholder="z" class="form-control"
                                           type="text" value=""/>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="col-xs-12">
                        <div class="form-group">
                            <label class="col-xs-1 no-padding"> 交換期限

                            </label>

                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input id="consumerCodeStart" name="consumerCodeStart" placeholder="0"
                                           class="form-control" type="text" value=""/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">~</div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input id="consumeCodeEnd" name="consumeCodeEnd" placeholder="z" class="form-control"
                                           type="text" value=""/>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="col-xs-12">
                        <div class="form-group">

                            <label class="col-xs-1 no-padding">対象法律
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
                        <p class="backend">出力指定 </p>

                    <div class="col-xs-12">
                        <div class="form-group">

                            <label class="col-xs-1 no-padding"> 出力帳票

                            </label>

                            <div class="col-xs-1">
                                <input type="radio"/> <span>一覧表</span>
                            </div>

                            <div class="col-xs-1">
                                <input type="radio"/> <span>集計表</span>
                            </div>

                        </div>
                    </div>

                    <div class="col-xs-12">
                        <div class="form-group">

                            <label class="col-xs-1 no-padding"> 改ページ指定
                            </label>

                            <div class="col-xs-2">
                                <input type="radio"/> <span>営業所・販売店</span>
                            </div>

                            <div class="col-xs-1">
                                <input type="radio"/> <span>地区</span>
                            </div>

                            <div class="col-xs-1 no-padding">
                                <input type="radio"/> <span>営業担当者</span>
                            </div>

                            <div class="col-xs-1">
                                <input type="radio"/> <span>なし</span>
                            </div>

                        </div>
                    </div>

                    <div class="col-xs-12">
                        <div class="form-group">

                            <label class="col-xs-1 no-padding"> 並び順
                            </label>

                            <div class="col-xs-2">
                                <input type="radio"/> <span>消費者コード順</span>
                            </div>

                            <div class="col-xs-2">
                                <input type="radio"/> <span>検針順路順</span>
                            </div>

                            <div class="col-xs-2">
                                <input type="radio"/> <span>検索名順</span>
                            </div>

                            <div class="col-xs-2">
                                <input type="radio"/> <span>交換期限順</span>
                            </div>

                        </div>
                    </div>

                    <div class="col-xs-12">
                        <div class="form-group">

                            <label class="col-xs-1 no-padding"> 出力先
                            </label>

                            <div class="col-xs-2 ">
                                <input type="radio"/> <span>プリンタ（印刷）</span>
                            </div>

                            <div class="col-xs-3">
                                <input type="radio"/> <span>画面（印刷イメージ）</span>
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