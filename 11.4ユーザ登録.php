<?php
include "header.php"
?>
<?php
include "sidebar.php"
?>
        <div class="col-xs-10 col-md-10  no-padding">

                <div class="col-md-12 col-xs-12 no-padding head-color body-background">
                    <div class="head-p">
                        <p>ユーザ登録</p>
                    </div>

                    <form id="meter" action="/gas/meter-reading" method="POST">
                        <div class="col-xs-8">
                            <div class="col-xs-12 border1 no-padding">

                            <p class="backend">
                                ユーザ登録</p>


                            <div class="col-xs-12">
                                <div class="col-xs-2 no-padding">
                                    <p>ユーザ名</p>
                                </div>
                                <div class="col-xs-3 no-padding">
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-xs-5 no-padding">

                                </div>
                                <div class="col-xs-2">
                                    <input type="text" class="form-control" >
                                </div>

                            </div>

                            <div class="col-xs-12 border-margin">

                                <div class="col-xs-2 no-padding">
                                    <p>パスワード</p>
                                </div>
                                <div class="col-xs-4 no-padding">
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-xs-1" style="padding:5px;">
                                    <p>（再）</p>
                                </div>
                                <div class="col-xs-4 no-padding">
                                    <input type="text" class="form-control">
                                </div>


                            </div>

                            <div class="col-xs-12 border-margin">

                                <div class="col-xs-2 no-padding">
                                    <p>権限</p>
                                </div>
                                <div class="col-xs-10 no-padding">
                                    <div class="col-xs-3 no-padding"><input type="radio" id="" name="authority" value="all" onclick="$.fn.radioButtonSelectionChanged('authority', 'authorityId')"><span>閲覧（画面のみ)</span></div>
                                    <div class="col-xs-3 no-padding"><input type="radio" id="" name="authority" value="authority" onclick="$.fn.radioButtonSelectionChanged('authority', 'authorityId')"><span>閲覧（印刷可)</span></div>
                                    <div class="col-xs-2 no-padding"><input type="radio" id="" name="authority" value="authority" onclick="$.fn.radioButtonSelectionChanged('authority', 'authorityId')"><span>伝票入力1</span></div>
                                    <div class="col-xs-2 no-padding"><input type="radio" id="" name="authority" value="authority" onclick="$.fn.radioButtonSelectionChanged('authority', 'authorityId')"><span>伝票入力2</span></div>
                                    <div class="col-xs-2 no-padding"><input type="radio" id="" name="authority" value="authority" onclick="$.fn.radioButtonSelectionChanged('authority', 'authorityId')"><span>一般</span></div>
                                    <div class="col-xs-2 no-padding"><input type="radio" id="" name="authority" value="authority" onclick="$.fn.radioButtonSelectionChanged('authority', 'authorityId')"><span>一般2</span></div>






                                </div>



                            </div>
                            <div class="col-xs-12 border-margin">

                                <div class="col-xs-2 no-padding">
                                    <p>使用制限</p>
                                </div>
                                <div class="col-xs-10 no-padding">
                                    <div class="col-xs-2 no-padding"><input type="radio" id="" name="restriction" value="all" onclick="$.fn.radioButtonSelectionChanged('restriction', 'restrictionId')"><span>かける</span></div>
                                    <div class="col-xs-2 no-padding"><input type="radio" id="" name="restriction" value="restriction" onclick="$.fn.radioButtonSelectionChanged('restriction', 'restrictionId')"><span>かけない</span></div>
                                    <div class="col-xs-2 no-padding"><input type="radio" id="" name="restriction" value="restriction" onclick="$.fn.radioButtonSelectionChanged('restriction', 'restrictionId')"><span>更新処理</span></div>
                                    <div class="col-xs-3 no-padding"><input type="radio" id="" name="restriction" value="restriction" onclick="$.fn.radioButtonSelectionChanged('restriction', 'restrictionId')"><span>運用管理者</span></div>
                                    <div class="col-xs-3 no-padding"><input type="radio" id="" name="restriction" value="restriction" onclick="$.fn.radioButtonSelectionChanged('restriction', 'restrictionId')"><span>システム管理者</span></div>





                                </div>



                            </div>
                                <div class="col-xs-12">
                                    <div class="col-xs-2 no-padding">
                                        <p>所属営業所</p>
                                    </div>
                                    <div class="col-xs-4 no-padding">
                                        <input type="text" class="form-control" name="affiliationId" id="affiliationId"
                                        value="" onchange="$.fn.onInputValueChange('affiliationId', 'affiliationName')">
                                    </div>

                                    <div class="col-xs-4">
                                        <input type="text" class="form-control"name="affiliationName" id="affiliationName"
                                        value="">
                                    </div>

                                </div>

                                <div class="col-xs-12 border-margin border-margin-bottom">
                                    <div class="col-xs-2 no-padding">
                                        <p style="padding: 5px;">所属営業所</p>
                                    </div>
                                    <div class="col-xs-2 no-padding">
                                        <input type="text" class="form-control" name="officeId" id="officeId"
                                        value="" onchange="$.fn.onInputValueChange('officeId', 'officeName')">
                                    </div>

                                    <div class="col-xs-3">
                                        <input type="text" class="form-control" name="officeName" id="officeName"
                                        value="" >
                                    </div>
                                    <div class="col-xs-1" style="padding:5px;">
                                         <p>備考</p>
                                    </div>
                                    <div class="col-xs-4">
                                        <input type="text" class="form-control" >
                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="col-xs-4 no-padding neg-margin" >

                              <div class="col-xs-12 ">

                                  <div class="col-xs-8 no-padding">
                                      <p>メニュー大分類別の使用制限</p>
                                  </div>
                                  <div class="col-xs-4 no-padding">

                                      <div class="col-xs-6 no-padding"><input type="radio" id="" name="menu" value="all" onclick="$.fn.radioButtonSelectionChanged('menu', 'menuId')"><span>する</span></div>
                                      <div class="col-xs-6 no-padding"><input type="radio" id="" name="menu" value="menu" onclick="$.fn.radioButtonSelectionChanged('menu', 'menuId')"><span>しない</span></div>

                                  </div>
                              </div>
                              <div  style="height:304px !important; overflow-y:scroll;" class="col-xs-12">
                                <table class="table table-bordered col-xs-12" >
                                        <thead>
                                            <tr class="bg-color">
                                                <th></th>
                                                <th>大分類</th>
                                                <th>大分類名</th>
                                                <th>制限</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="bg-color td-style">1</td>
                                                <td>検針管理</td>
                                                <td> </td>
                                                <td> </td>
                                            </tr>
                                            <tr>
                                                    <td class="bg-color td-style">2</td>
                                                    <td>配送・容器管理</td>
                                                    <td> </td>
                                                    <td> </td>
                                                </tr>
                                                <tr>
                                                        <td class="bg-color td-style">3</td>
                                                        <td>販売管理</td>
                                                        <td> </td>
                                                        <td> </td>
                                                </tr>
                                                <tr>
                                                        <td class="bg-color td-style">4</td>
                                                        <td>請求締切業務</td>
                                                        <td> </td>
                                                        <td> </td>
                                                </tr>
                                                <tr>
                                                        <td class="bg-color td-style">5</td>
                                                        <td>売上管理資料</td>
                                                        <td> </td>
                                                        <td> </td>
                                                </tr>
                                                <tr>
                                                        <td class="bg-color td-style">8</td>
                                                        <td>オートガス管理  </td>
                                                        <td> </td>
                                                        <td> </td>
                                                </tr>
                                                <tr>
                                                        <td class="bg-color td-style">9</td>
                                                        <td>マスタ管理</td>
                                                        <td> </td>
                                                        <td> </td>
                                                </tr>
                                                <tr>
                                                        <td class="bg-color td-style">10</td>
                                                        <td>データ入出力</td>
                                                        <td> </td>
                                                        <td> </td>
                                                </tr>
                                                <tr>
                                                        <td class="bg-color td-style">11</td>
                                                        <td>システム</td>
                                                        <td> </td>
                                                        <td> </td>
                                                </tr>
                                                <tr>
                                                        <td class="bg-color td-style">12</td>
                                                        <td>
                                                                消費者情報</td>
                                                        <td> </td>
                                                        <td> </td>
                                                </tr>
                                                <tr>
                                                        <td class="bg-color td-style">14</td>
                                                        <td>保安業務</td>
                                                        <td> </td>
                                                        <td> </td>
                                                </tr>
                                                <tr>
                                                        <td class="bg-color td-style">17</td>
                                                        <td>追加</td>
                                                        <td> </td>
                                                        <td> </td>
                                                </tr>
                                                <tr>
                                                        <td class="bg-color td-style">23</td>
                                                        <td>営業支援</td>
                                                        <td> </td>
                                                        <td> </td>
                                                </tr>
                                                <tr>
                                                        <td class="bg-color td-style">25</td>
                                                        <td>受付管理</td>
                                                        <td> </td>
                                                        <td> </td>
                                                </tr>
                                                 
                                        </tbody>
                                    </table>
                                    </div>
                        </div>


                    </form>
                </div>

                <div class="col-xs-12">
                    <p>※ 使用制限設定は次回このユーザがGas21-LMにログインした時から有効になります</p>
                </div>
                    <div class="col-xs-12 bottom-box" style="overflow-y:scroll; height:375px; ">
                    <table class="table table-bordered col-xs-12" >
                        <thead class="bg-color">
                            <tr>
                                <th> </th>
                                <th>ユーザ名</th>
                                <th>権限</th>
                                <th>所営</th>
                                <th>営業所名</th>
                                <th>担当</th>
                                <th>担当者名</th>
                                <th>備考</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td class="bg-color td-style td-num-style">1</td>
                                <td></td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="bg-color td-style td-num-style">2</td>
                                <td></td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="bg-color td-style td-num-style">3</td>
                                <td></td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="bg-color td-style td-num-style">4</td>
                                <td></td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="bg-color td-style td-num-style">5</td>
                                <td></td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="bg-color td-style td-num-style">6</td>
                                <td></td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="bg-color td-style td-num-style">7</td>
                                <td></td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="bg-color td-style td-num-style">8</td>
                                <td></td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="bg-color td-style td-num-style">9</td>
                                <td></td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="bg-color td-style td-num-style">10</td>
                                <td></td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td></td>
                            </tr>
                            <tr> 
                                <td class="bg-color td-style td-num-style">11</td>
                                <td></td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td></td>
                            </tr>

                        </tbody>
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