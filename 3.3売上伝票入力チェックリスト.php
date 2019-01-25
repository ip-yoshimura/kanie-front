<?php
include "header.php"
?>
<?php
include "sidebar.php"
?>
<div class="col-md-10 col-xs-8 col-xs-12 no-padding">

    <div class="col-md-12 col-xs-12 no-padding body-background bottom-box">

        <div class="head-p ">
            <p>売上伝票入力チェックリスト
            </p>
        </div>
        <form id="meter" action="/gas/meter-reading" method="POST">



            <div class="col-xs-12 border1 no-padding">

                <p class="backend">作成範囲指定

                </p>
                <div class="col-xs-12">



                    <label class="col-xs-2 no-padding">伝票入力作業日</label>

                    <div class="col-xs-2">
                        <div class="form-group">
                            <input id="consumerCodeEndName" name="consumerCodeEndName" class="form-control"
                                   type="date" value=""/>
                        </div>
                    </div>




                </div>

                <div class="col-xs-12">
                    <div class="col-xs-2 no-padding">
                        <p>入力担当者</p>
                    </div>
                    <div class="col-xs-2">
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-xs-2">
                        <input type="text" class="form-control">
                    </div>

                </div>

                <div class="col-xs-12 border-margin">
                    <div class="col-xs-2 no-padding">
                        <p>伝票番号</p>
                    </div>
                    <div class="col-xs-2">
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-xs-1 no-padding ratio">~</div>
                    <div class="col-xs-2">
                        <input type="text" class="form-control" >
                    </div>


                </div>
                <div class="col-xs-12 border-margin">
                    <div class="col-xs-2 no-padding">
                        <p>伝票番号</p>
                    </div>
                    <div class="col-xs-2">
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-xs-2">

                    </div>


                </div>

                <div class="col-xs-12 border-margin">
                    <div class="col-xs-2 no-padding">
                        <p>削除伝票の印刷</p>
                    </div>
                    <div class="col-xs-1">
                        <input type="number" class="form-control">
                    </div>
                    <div class="col-xs-3">
                        <div class="col-xs-3 no-padding"><input type="radio" id="" name=""><span> する</span></div>
                        <div class="col-xs-3 no-padding"><input type="radio" id="" name=""><span> しない </span></div>
                    </div>


                </div>
                <div class="col-xs-12 border-margin">
                    <div class="col-xs-2 no-padding">
                        <p>削除伝票番号</p>
                    </div>
                    <div class="col-xs-2">
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-xs-1 no-padding ratio">~</div>
                    <div class="col-xs-2">
                        <input type="text" class="form-control">
                    </div>



                </div>
                <div class="col-xs-12 border-margin">
                    <div class="col-xs-2 no-padding">
                        <p>入金日</p>
                    </div>
                    <div class="col-xs-2">
                        <input type="date" class="form-control">
                    </div>
                    <div class="col-xs-1 no-padding ratio">~</div>
                    <div class="col-xs-2">
                        <input type="date" class="form-control">
                    </div>



                </div>

                <div class="col-xs-12 border-margin border-margin-bottom">
                    <div class="col-xs-2 no-padding">
                        <p>入金日</p>
                    </div>
                    <div class="col-xs-1">
                        <input type="number" class="form-control">
                    </div>

                    <div class="col-xs-4">
                        <div class="col-xs-3 no-padding"><input type="radio" id="" name=""><span> 全て</span></div>
                        <div class="col-xs-3 no-padding"><input type="radio" id="" name=""><span> 直売</span></div>
                        <div class="col-xs-3 no-padding"><input type="radio" id="" name=""><span> 卸</span></div>

                    </div>



                </div>



            </div>



            <div class="col-xs-12 border1 no-padding">

                <p class="backend">出力指定</p>

                <div class="col-xs-12 border-margin border-margin-bottom">
                    <div class="col-xs-2 no-padding">
                        <p>出力先</p>
                    </div>
                    <div class="col-xs-1">
                        <input type="number" class="form-control">
                    </div>

                    <div class="col-xs-4">
                        <div class="col-xs-6 no-padding"><input type="radio" id="" name=""><span> プリンタ（印刷）</span></div>
                        <div class="col-xs-6 no-padding"><input type="radio" id="" name=""><span> 画面（印刷イメージ</span></div>


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