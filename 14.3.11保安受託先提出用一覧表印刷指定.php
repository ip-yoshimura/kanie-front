<?php
include "header.php"
?>
<?php
include "sidebar.php"
?>
<div class="col-md-10 col-xs-8 col-xs-12 no-padding">

    <div class="col-md-12 col-xs-12 no-padding body-background">

        <div class="head-p">
            <p>保安受託先提出用一覧表印刷指定 </p>
        </div>
                <form id="meter" action="/gas/meter-reading" method="POST">
                    <div class="col-xs-12 border1 no-padding">
                    <p class="backend">消費者範囲指定
                    </p>

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
                                <p>出力区分1</p>
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
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-1 no-padding">
                                <p>出力区分2</p>
                            </div>
                            <div class="col-xs-1">
                                <input type="radio" name="all" value="all"> <span>全て</span>


                            </div>
                            <div class="col-xs-2">
                                <input type="radio" name="directSales" value="directSales"> <span>保安機関</span>


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
                            <div class="col-xs-1 ">
                                <input type="radio" name="all" value="all"> <span>全て</span>
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
                        <p class="backend">作成範囲指定
                    <div class="col-xs-12">
                        <div class="form-group">

                            <label class="col-xs-1 no-padding"> 保安業務

                            </label>

                                <div class="col-xs-1 no-padding">
                                    <input type="radio"/> <span>全て</span>
                                </div>


                                <div class="col-xs-2">
                                    <input type="radio"/> <span>供給開始時</span>
                                </div>

                                <div class="col-xs-2">
                                    <input type="radio"/> <span>容器交換時</span>
                                </div>

                                <div class="col-xs-2">
                                    <input type="radio"/> <span>供給設備</span>
                                </div>



                        </div>
                    </div>

                    <div class="col-xs-12">

                        <div class="form-group">
                                <div class="col-xs-1 col-xs-offset-1 no-padding">
                                    <input type="radio"/> <span>消費設備</span>
                                </div>

                                <div class="col-xs-2">
                                    <input type="radio"/> <span>周知</span>
                                </div>

                                <div class="col-xs-2">
                                    <input type="radio"/> <span>緊急時対応</span>
                                </div>

                                <div class="col-xs-2">
                                    <input type="radio"/> <span>緊急時連絡</span>
                                </div>

                        </div>
                    </div>

                    <div class="col-xs-12">
                        <div class="form-group">
                            <label class="col-xs-1 no-padding"> 調査日

                            </label>
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
                    </div>
                    <div class="col-xs-12 border1 no-padding bottom-box">
                        <p class="backend">出力指定
                    <div class="col-xs-12">

                        <div class="form-group">

                            <label class="col-xs-1 no-padding"> 並び順

                            </label>

                            <div class="col-xs-2 no-padding">
                                <input type="radio"/> <span>消費者コード順</span>
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

                            <label class="col-xs-1 no-padding">出力先
                            </label>

                            <div class="col-xs-2 no-padding">
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