<?php
include "header.php"
?>
<?php
include "sidebar.php"
?>
<div class="col-xs-10 col-md-10  no-padding body-background">

    <div class="col-md-12 col-xs-12 no-padding head-color body-background">
        <div class="head-p">
            <p>ユーザ登録</p>
        </div>

        <form id="meter" action="/gas/meter-reading" method="POST">
            <div class="col-xs-8 no-padding">
                <div class="col-xs-12 border1 no-padding">
                    <p class="back-end">ユーザ登録</p>

                    <div class="col-xs-12">
                        <div class="col-xs-2 no-padding border-margin-exp">
                            <p>ユーザ名</p>
                        </div>
                        <div class="col-xs-3  ">
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-xs-5 no-padding">
                        </div>
                        <div class="col-xs-2">
                            <input type="text" class="form-control" value="閲覧" style="color: red;text-align: center">
                        </div>
                    </div>

                    <div class="col-xs-12 border-margin">

                        <div class="col-xs-2 no-padding border-margin-exp">
                            <p>パスワード</p>
                        </div>
                        <div class="col-xs-4  ">
                            <input type="password" class="form-control">
                        </div>
                        <div class="col-xs-1 " style="padding:5px;">
                            <p>（再）</p>
                        </div>
                        <div class="col-xs-4 no-padding">
                            <input type="password" class="form-control">
                        </div>
                    </div>

                    <div class="col-xs-12 border-margin">

                        <div class="col-xs-2 no-padding">
                            <p>権限</p>
                        </div>

                        <div class="col-xs-10 ">

                            <div class="col-xs-3 no-padding"><input type="radio" id="" name="authority" value="all"
                                                                    onclick="$.fn.radioButtonSelectionChanged('authority', 'authorityId')"><span> 閲覧（画面のみ)</span>
                            </div>
                            <div class="col-xs-3 no-padding"><input type="radio" id="" name="authority"
                                                                    value="authority"
                                                                    onclick="$.fn.radioButtonSelectionChanged('authority', 'authorityId')"><span> 閲覧（印刷可)</span>
                            </div>
                            <div class="col-xs-3 no-padding"><input type="radio" id="" name="authority"
                                                                    value="authority"
                                                                    onclick="$.fn.radioButtonSelectionChanged('authority', 'authorityId')"><span> 伝票入力1</span>
                            </div>

                            <div class="col-xs-3 no-padding"><input type="radio" id="" name="authority"
                                                                    value="authority"
                                                                    onclick="$.fn.radioButtonSelectionChanged('authority', 'authorityId')"><span> 伝票入力2</span>
                            </div>
                            <div class="col-xs-3 no-padding"><input type="radio" id="" name="authority"
                                                                    value="authority"
                                                                    onclick="$.fn.radioButtonSelectionChanged('authority', 'authorityId')"><span> 一般</span>
                            </div>
                            <div class="col-xs-3 no-padding"><input type="radio" id="" name="authority"
                                                                    value="authority"
                                                                    onclick="$.fn.radioButtonSelectionChanged('authority', 'authorityId')"><span> 一般2</span>
                            </div>
                            <div class="col-xs-3 no-padding"><input type="radio" id="" name="restriction"
                                                                    value="restriction"
                                                                    onclick="$.fn.radioButtonSelectionChanged('restriction', 'restrictionId')"><span> 更新処理</span>
                            </div>
                            <div class="col-xs-3 no-padding"><input type="radio" id="" name="restriction"
                                                                    value="restriction"
                                                                    onclick="$.fn.radioButtonSelectionChanged('restriction', 'restrictionId')"><span> 運用管理者</span>
                            </div>
                            <div class="col-xs-3 no-padding"><input type="radio" id="" name="restriction"
                                                                    value="restriction"
                                                                    onclick="$.fn.radioButtonSelectionChanged('restriction', 'restrictionId')"><span> システム管理者</span>
                            </div>


                        </div>


                    </div>
                    <div class="col-xs-12 border-margin">

                        <div class="col-xs-2 no-padding">
                            <p>使用制限</p>
                        </div>
                        <div class="col-xs-10">
                            <div class="col-xs-3 no-padding"><input type="radio" id="" name="restriction" value="all"
                                                                    onclick="$.fn.radioButtonSelectionChanged('restriction', 'restrictionId')"><span> かける</span>
                            </div>
                            <div class="col-xs-3 no-padding"><input type="radio" id="" name="restriction"
                                                                    value="restriction"
                                                                    onclick="$.fn.radioButtonSelectionChanged('restriction', 'restrictionId')"><span> かけない</span>
                            </div>


                        </div>


                    </div>
                    <div class="col-xs-12">
                        <div class="col-xs-2 no-padding border-margin-exp">
                            <p>所属営業所</p>
                        </div>
                        <div class="col-xs-2 ">
                            <input type="number" class="form-control" name="affiliationId" id="affiliationId"
                                   value="" onchange="$.fn.onInputValueChange('affiliationId', 'affiliationName')">
                        </div>

                        <div class="col-xs-6">
                            <input type="text" class="form-control" name="affiliationName" id="affiliationName"
                                   value="">
                        </div>
                    </div>

                    <div class="col-xs-12 border-margin">
                        <div class="col-xs-2 no-padding border-margin-exp">
                            <p>担当者</p>
                        </div>
                        <div class="col-xs-2 ">
                            <input type="number" class="form-control" name="officeId" id="officeId"
                                   value="" onchange="$.fn.onInputValueChange('officeId', 'officeName')">
                        </div>

                        <div class="col-xs-6">
                            <input type="text" class="form-control" name="officeName" id="officeName"
                                   value="">
                        </div>


                    </div>
                    <div class="col-xs-12 border-margin border-margin-bottom">

                        <div class="col-xs-2 no-padding border-margin-exp">
                            <p>備考</p>
                        </div>
                        <div class="col-xs-8  ">
                            <input type="text" class="form-control">
                        </div>

                    </div>


                </div>

            </div>

            <div class="col-xs-4 no-padding neg-margin">

                <div class="col-xs-12 ">

                    <div class="col-xs-8 no-padding ">
                        <p>メニュー大分類別の使用制限</p>
                    </div>
                    <div class="col-xs-4 no-padding">

                        <div class="col-xs-6 no-padding"><input type="radio" id="" name="menu" value="all"
                                                                onclick="$.fn.radioButtonSelectionChanged('menu', 'menuId')"><span> する</span>
                        </div>
                        <div class="col-xs-6 no-padding"><input type="radio" id="" name="menu" value="menu"
                                                                onclick="$.fn.radioButtonSelectionChanged('menu', 'menuId')"><span> しない</span>
                        </div>

                    </div>
                </div>
                <div style="height:357px !important; overflow-y:scroll;" class="col-xs-12">
                    <table class="table table-bordered col-xs-12">
                        <thead>
                        <tr class="bg-color">
                            <th>大分類</th>
                            <th>大分類名</th>
                            <th>制限</th>
                            <th></th>

                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="bg-color td-style">01</td>
                            <td>検針管理</td>
                            <td></td>
                            <td></td>

                        </tr>
                        <tr>
                            <td class="bg-color td-style">02</td>
                            <td>配送・容器管理</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="bg-color td-style">03</td>
                            <td>販売管理</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="bg-color td-style">04</td>
                            <td>請求締切業務</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="bg-color td-style">05</td>
                            <td>売上管理資料</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="bg-color td-style">08</td>
                            <td>オートガス管理</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="bg-color td-style">09</td>
                            <td>マスタ管理</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="bg-color td-style">10</td>
                            <td>データ入出力</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="bg-color td-style">11</td>
                            <td>システム</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="bg-color td-style">12</td>
                            <td>
                                消費者情報
                            </td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="bg-color td-style">14</td>
                            <td>保安業務</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="bg-color td-style">17</td>
                            <td>追加</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="bg-color td-style">23</td>
                            <td>営業支援</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="bg-color td-style">25</td>
                            <td>受付管理</td>
                            <td></td>
                            <td></td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>


        </form>
    </div>

    <div class="col-xs-12 no-padding">
        <p>※ 使用制限設定は次回このユーザがGas21-LMにログインした時から有効になります</p>
    </div>
    <div class="col-xs-12 no-padding table-scroll" >
        <table class="table table-bordered col-xs-12">
            <thead class="bg-color">
            <tr style="">
                <th class="bg-color col-xs-1 "></th>
                <th class="col-xs-1">ユーザ名</th>
                <th class="col-xs-2">権限</th>
                <th class="col-xs-1">所営</th>
                <th class="col-xs-3">営業所名</th>
                <th class="col-xs-1">担当</th>
                <th class="col-xs-1" >担当者名</th>
                <th class="col-xs-3">備考</th>
            </tr>
            </thead>
        </table>
    </div>
    <div class="col-xs-12 bottom-box table-scroll no-padding table-join" >
        <table class="table table-bordered col-xs-12">

            <tr style="">
                <th class="  bg-color col-xs-1">1</th>
                <th class="col-xs-1"> </th>
                <th class="col-xs-2"></th>
                <th class="col-xs-1"></th>
                <th class="col-xs-3"></th>
                <th class="col-xs-1"></th>
                <th class="col-xs-1" ></th>
                <th class="col-xs-2"></th>
            </tr>
            <tr>
                <td class="bg-color td-style td-num-style">2</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td class="bg-color td-style td-num-style">3</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td class="bg-color td-style td-num-style">4</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td class="bg-color td-style td-num-style">5</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td class="bg-color td-style td-num-style">6</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td class="bg-color td-style td-num-style">7</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td class="bg-color td-style td-num-style">8</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td class="bg-color td-style td-num-style">9</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td class="bg-color td-style td-num-style">10</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td class="bg-color td-style td-num-style">11</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>

        </table>

    </div>
    <?php
    include "footer.php"
    ?>

</div>


</form>
</div>
</div>
</div>
</div>

</body>

</html>
