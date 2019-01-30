<?php
include "header.php"
?>
<?php
include "sidebar.php"
?>
<div class="col-md-10 col-xs-8 col-xs-12 no-padding">

    <div class="col-md-12 col-xs-12 no-padding body-background bottom-box">

        <div class="head-p ">
            <p>口座振替消費者一括入金
            </p>
        </div>
        <form id="meter" action="/gas/meter-reading" method="POST">






            <div class="col-xs-12 no-padding">



                <label class="col-xs-1 no-padding">銀行コード</label>

                <div class="col-xs-1">
                    <div class="form-group">
                        <input id="consumerCodeEndName" name="consumerCodeEndName" class="form-control"
                               type="text" value=""/>
                    </div>
                </div>
                <div class="col-xs-2">
                    <div class="form-group">
                        <input id="consumerCodeEndName" name="consumerCodeEndName" class="form-control"
                               type="text" value=""/>
                    </div>
                </div>
                <div class="col-xs-1 no-padding">
                    <p>銀行区分</p>
                </div>
                <div class="col-xs-2">
                    <div class="form-group">
                        <input id="consumerCodeEndName" name="consumerCodeEndName" class="form-control"
                               type="number" value=""/>
                    </div>
                </div>
                <div class="col-xs-5 no-padding">
                    <div class="col-xs-3 no-padding"><input type="radio" id="" name=""><span> 直接取引分</span></div>
                    <div class="col-xs-7 no-padding"><input type="radio" id="" name=""><span> 幹事銀行（振替代行分）</span></div>
                </div>



            </div>

            <div class="col-xs-12 no-padding">
                <div class="col-xs-1 no-padding">
                    <p>振替日</p>
                </div>
                <div class="col-xs-2">
                    <input type="date" class="form-control">
                </div>


            </div>

            <div class="col-xs-12 border-margin no-padding">
                <div class="col-xs-1 no-padding">
                    <p>表示選択</p>
                </div>
                <div class="col-xs-1 no-padding">
                    <p>入金未処理</p>
                </div>
                <div class="col-xs-1">
                    <input type="number" class="form-control">
                </div>
                <div class="col-xs-1 no-padding">
                    <p>入金済み</p>
                </div>
                <div class="col-xs-1">
                    <input type="number" class="form-control">
                </div>
                <div class="col-xs-1 no-padding">
                    <p>入金不能</p>
                </div>
                <div class="col-xs-1">
                    <input type="number" class="form-control">
                </div>
                <div class="col-xs-3 no-padding">
                    <div class="col-xs-5 no-padding"><input type="radio" id="" name=""><span> 表示する</span></div>
                    <div class="col-xs-6 no-padding"><input type="radio" id="" name=""><span> 表示しない</span></div>
                </div>




            </div>
            <div class="col-xs-12 border-margin no-padding">
                <div class="col-xs-1 no-padding">
                    <p>並び順</p>
                </div>
                <div class="col-xs-1">
                    <input type="number" class="form-control">
                </div>
                <div class="col-xs-10">
                    <div class="col-xs-2 no-padding"><input type="radio" id="" name=""><span> 消費者コード順</span></div>
                    <div class="col-xs-2 no-padding"><input type="radio" id="" name=""><span> 口座名義順</span></div>
                    <div class="col-xs-2 no-padding"><input type="radio" id="" name=""><span> 預金者コード</span></div>
                    <div class="col-xs-2 no-padding"><input type="radio" id="" name=""><span> 検索名順</span></div>
                </div>



            </div>

            <div class="col-xs-12 border-margin no-padding">
                <div class="col-xs-1 no-padding">
                    <p>初期表示</p>
                </div>
                <div class="col-xs-1">
                    <input type="number" class="form-control">
                </div>
                <div class="col-xs-3">
                    <div class="col-xs-6 no-padding"><input type="radio" id="" name=""><span> 現在状態</span></div>
                    <div class="col-xs-6 no-padding"><input type="radio" id="" name=""><span> 入金あり</span></div>

                </div>
                <div class="col-xs-2 no-padding">
                    <p>請求書掲載年月</p>
                </div>
                <div class="col-xs-2">
                    <input type="date" class="form-control">
                </div>


            </div>



            <div class="col-xs-12 border1 no-padding border-margin">

                <p class="backend">振替結果欄</p>

                <div class="col-xs-12 border-margin border-margin-bottom table-scroll">
                    <div class="col-xs-12 no-padding">
                        <table class="col-xs-12 table table-bordered">
                            <tr class="bg-color">
                                <th> </th>
                                <th>区分</th>
                                <th>振替結果</th>
                                <th>消費者コード</th>
                                <th class="col-xs-3">消費者名</th>
                                <th>振替金額</th>
                                <th>不能理由</th>

                            </tr>
                            <tr>
                                <td>1</td>
                                <td><input type="text" class="form-control border-none"> </td>
                                <td><input type="text" class="form-control border-none"> </td>
                                <td><input type="text" class="form-control border-none"> </td>
                                <td><input type="text" class="form-control border-none"> </td>
                                <td><input type="text" class="form-control border-none"> </td>
                                <td><input type="text" class="form-control border-none"> </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><input type="text" class="form-control border-none"> </td>
                                <td><input type="text" class="form-control border-none"> </td>
                                <td><input type="text" class="form-control border-none"> </td>
                                <td><input type="text" class="form-control border-none"> </td>
                                <td><input type="text" class="form-control border-none"> </td>
                                <td><input type="text" class="form-control border-none"> </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td><input type="text" class="form-control border-none"> </td>
                                <td><input type="text" class="form-control border-none"> </td>
                                <td><input type="text" class="form-control border-none"> </td>
                                <td><input type="text" class="form-control border-none"> </td>
                                <td><input type="text" class="form-control border-none"> </td>
                                <td><input type="text" class="form-control border-none"> </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td><input type="text" class="form-control border-none"> </td>
                                <td><input type="text" class="form-control border-none"> </td>
                                <td><input type="text" class="form-control border-none"> </td>
                                <td><input type="text" class="form-control border-none"> </td>
                                <td><input type="text" class="form-control border-none"> </td>
                                <td><input type="text" class="form-control border-none"> </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td><input type="text" class="form-control border-none"> </td>
                                <td><input type="text" class="form-control border-none"> </td>
                                <td><input type="text" class="form-control border-none"> </td>
                                <td><input type="text" class="form-control border-none"> </td>
                                <td><input type="text" class="form-control border-none"> </td>
                                <td><input type="text" class="form-control border-none"> </td>
                            </tr>


                        </table>
                    </div>



                </div>



            </div>

            <div class="col-xs-12 border-margin-bottom">
                <div class="col-xs-1 no-padding">
                    <p>振替済</p>
                </div>
                <div class="col-xs-1">
                    <input type="number" class="form-control">
                </div>
                <div class="col-xs-1 no-padding">
                    <p>件</p>
                </div>
                <div class="col-xs-2">
                    <input type="number" class="form-control">
                </div>
                <div class="col-xs-1 no-padding">
                    <p>円</p>
                </div>
                <div class="col-xs-1 no-padding">
                    <p>不能者</p>
                </div>
                <div class="col-xs-1">
                    <input type="number" class="form-control">
                </div>
                <div class="col-xs-1 no-padding">
                    <p>件</p>
                </div>
                <div class="col-xs-2">
                    <input type="number" class="form-control">
                </div>
                <div class="col-xs-1 no-padding">
                    <p>円</p>
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