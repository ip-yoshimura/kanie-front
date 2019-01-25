<?php include 'header.php';?>
<?php include 'sidebar.php';?>
    <div class="col-xs-8 col-md-10 col-xs-12 no-padding">

            <div class="col-md-12 col-xs-12 no-padding body-background">
                <div class="head-p">
                <p>入金伝票入力 </p>
                </div>
                <form action="/gas/meter-reading" id="meter" method="POST">
                    <div class="col-xs-12">
                        <div class="col-xs-1 no-padding">
                            <p>消費者コード

                            </p>
                        </div>
                        <div class="col-xs-1">
                            <div class="form-group">
                                <input class="form-control" id="consumerId" name="officeCodeStartName"
                                       placeholder="" type="number" value="" onchange="$.fn.onInputValueChange('consumerId', 'consumerName')"/>
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input class="form-control" id="consumerName" name="companyIdEndName" placeholder=""
                                       type="text" value=""/>
                            </div>
                        </div>

                    </div>

                    <div class="col-xs-12">
                        <div class="col-xs-1 no-padding">
                            <p>営業所名

                            </p>
                        </div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input class="form-control" name="officeCodeStartName" placeholder="" type="text"
                                       value=""/>
                            </div>
                        </div>

                        <div class="col-xs-1 ">
                            <p class="p-size">担当営業所

                            </p>
                        </div>
                        <div class="col-xs-3 no-padding">
                            <div class="form-group">
                                <input class="form-control" name="officeCodeStartName" placeholder="" type="text"
                                       value=""/>
                            </div>
                        </div>

                    </div>

                    <div class="col-xs-12">
                        <div class="col-xs-1 no-padding">
                            <p>伝票日付

                            </p>
                        </div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input class="form-control" name="officeCodeStartName" placeholder="" type="date"
                                       value=""/>
                            </div>
                        </div>

                        <div class="col-xs-1">
                            <p class="p-size">集金担当者

                            </p>
                        </div>
                        <div class="col-xs-1">
                            <div class="form-group">
                                <input class="form-control" name="goldCollectiorId" id="goldCollectiorId" placeholder="" type="number"
                                       value="" onchange="$.fn.onInputValueChange('goldCollectiorId', 'goldCollectiorName')"/>
                            </div>
                        </div>
                        <div class="col-xs-2">
                            <div class="form-group">
                                <input class="form-control" name="goldCollectiorName" id="goldCollectiorName" placeholder="" type="text"
                                       value=""/>
                            </div>
                        </div>

                        <div class="col-xs-1">
                            <p>請求年月

                            </p>
                        </div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input class="form-control" name="officeCodeStartName" placeholder="" type="date"
                                       value=""/>
                            </div>
                        </div>
                    </div>


                    <div class="col-xs-12">
                        <div class="col-xs-1 no-padding">
                            <p>検針順路


                            </p>
                        </div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input class="form-control" name="officeCodeStartName" placeholder="" type="text"
                                       value=""/>
                            </div>
                        </div>

                        <div class="col-xs-1">
                            <p class="p-size">前月請求額


                            </p>
                        </div>

                        <div class="col-xs-3">
                            <div class="form-group">
                                <input class="form-control" name="officeCodeStartName" placeholder="" type="text"
                                       value=""/>
                            </div>
                        </div>

                        <div class="col-xs-1">
                            <p class="p-size">現在売掛額


                            </p>
                        </div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input class="form-control" name="officeCodeStartName" placeholder="" type="text"
                                       value=""/>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12" style="margin-bottom: 10px">
                        <div style="border: 0.5px solid #E2E2E2">

                        </div>
                    </div>

                    <div class="col-xs-12 tbl-scroll ">
                            <table class="table table-bordered tbl-30-main">
                            <thead class="tbl-31">
                            <tr>
                                <th style="width: 20px;height: 10px"></th>
                                <th>区</th>
                                <th>区分名

                                </th>
                                <th>入金額

                                </th>
                                <th>値引額

                                </th>
                                <th>合計

                                </th>
                                <th>摘要

                                </th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="tbl-31-tr" >1</td>
                                <td></td>
                                <td>
                                    <select name="" class="selclass">
                                    <option value="現金 ">現金</option>
                                    <option value="小切手">小切手</option>
                                    <option value="振替">振替</option>
                                    <option value="振込">振込</option>
                                    <option value="相殺">相殺</option>
                                    <option value="コンビニ">コンビニ</option>
                                    <option value="充当">充当</option>
                                    <option value="クレジット">クレジット</option>
                                    <option value="償却">償却</option>
                                    <option value="その他">その他</option>
                                </select>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>

                                <td>

                                </td>

                            </tr>
                            <tr>
                                <td class="tbl-31-tr">2</td>
                                <td></td>
                                <td><select name="" class="selclass">
                                    <option value="現金 ">現金</option>
                                    <option value="小切手">小切手</option>
                                    <option value="振替">振替</option>
                                    <option value="振込">振込</option>
                                    <option value="相殺">相殺</option>
                                    <option value="コンビニ">コンビニ</option>
                                    <option value="充当">充当</option>
                                    <option value="クレジット">クレジット</option>
                                    <option value="償却">償却</option>
                                    <option value="その他">その他</option>
                                </select></td>
                                <td></td>
                                <td></td>
                                <td></td>

                                <td>

                                </td>

                            </tr>
                            <tr>
                                <td class="tbl-31-tr">
                                    3
                                </td>
                                <td></td>
                                <td><select name="" class="selclass">
                                    <option value="現金 ">現金</option>
                                    <option value="小切手">小切手</option>
                                    <option value="振替">振替</option>
                                    <option value="振込">振込</option>
                                    <option value="相殺">相殺</option>
                                    <option value="コンビニ">コンビニ</option>
                                    <option value="充当">充当</option>
                                    <option value="クレジット">クレジット</option>
                                    <option value="償却">償却</option>
                                    <option value="その他">その他</option>
                                </select></td>
                                <td></td>
                                <td></td>
                                <td></td>

                                <td>

                                </td>

                            </tr>
                            <tr>
                                <td class="tbl-31-tr">4</td>
                                <td></td>
                                <td><select name="" class="selclass">
                                    <option value="現金 ">現金</option>
                                    <option value="小切手">小切手</option>
                                    <option value="振替">振替</option>
                                    <option value="振込">振込</option>
                                    <option value="相殺">相殺</option>
                                    <option value="コンビニ">コンビニ</option>
                                    <option value="充当">充当</option>
                                    <option value="クレジット">クレジット</option>
                                    <option value="償却">償却</option>
                                    <option value="その他">その他</option>
                                </select></td>
                                <td></td>
                                <td></td>
                                <td></td>

                                <td>

                                </td>

                            </tr>
                            <tr>
                                <td class="tbl-31-tr">5</td>
                                <td></td>
                                <td><select name="" class="selclass">
                                    <option value="現金 ">現金</option>
                                    <option value="小切手">小切手</option>
                                    <option value="振替">振替</option>
                                    <option value="振込">振込</option>
                                    <option value="相殺">相殺</option>
                                    <option value="コンビニ">コンビニ</option>
                                    <option value="充当">充当</option>
                                    <option value="クレジット">クレジット</option>
                                    <option value="償却">償却</option>
                                    <option value="その他">その他</option>
                                </select></td>
                                <td></td>
                                <td></td>
                                <td></td>

                                <td>
                                </td>

                            </tr>

                            <tr>
                                <td class="tbl-31-tr">6</td>
                                <td></td>
                                <td><select name="" class="selclass">
                                    <option value="現金 ">現金</option>
                                    <option value="小切手">小切手</option>
                                    <option value="振替">振替</option>
                                    <option value="振込">振込</option>
                                    <option value="相殺">相殺</option>
                                    <option value="コンビニ">コンビニ</option>
                                    <option value="充当">充当</option>
                                    <option value="クレジット">クレジット</option>
                                    <option value="償却">償却</option>
                                    <option value="その他">その他</option>
                                </select></td>
                                <td></td>
                                <td></td>
                                <td></td>

                                <td>

                                </td>

                            </tr>

                            <tr>
                                <td class="tbl-31-tr">7</td>
                                <td></td>
                                <td><select name="" class="selclass">
                                    <option value="現金 ">現金</option>
                                    <option value="小切手">小切手</option>
                                    <option value="振替">振替</option>
                                    <option value="振込">振込</option>
                                    <option value="相殺">相殺</option>
                                    <option value="コンビニ">コンビニ</option>
                                    <option value="充当">充当</option>
                                    <option value="クレジット">クレジット</option>
                                    <option value="償却">償却</option>
                                    <option value="その他">その他</option>
                                </select></td>
                                <td></td>
                                <td></td>
                                <td></td>

                                <td>

                                </td>

                            </tr>

                            <tr>
                                <td class="tbl-31-tr">8</td>
                                <td></td>
                                <td><select name="" class="selclass">
                                    <option value="現金 ">現金</option>
                                    <option value="小切手">小切手</option>
                                    <option value="振替">振替</option>
                                    <option value="振込">振込</option>
                                    <option value="相殺">相殺</option>
                                    <option value="コンビニ">コンビニ</option>
                                    <option value="充当">充当</option>
                                    <option value="クレジット">クレジット</option>
                                    <option value="償却">償却</option>
                                    <option value="その他">その他</option>
                                </select></td>
                                <td></td>
                                <td></td>
                                <td></td>

                                <td>

                                </td>

                            </tr>
                            <tr>
                                <td class="tbl-31-tr">9</td>
                                <td></td>
                                <td><select name="" class="selclass">
                                    <option value="現金 ">現金</option>
                                    <option value="小切手">小切手</option>
                                    <option value="振替">振替</option>
                                    <option value="振込">振込</option>
                                    <option value="相殺">相殺</option>
                                    <option value="コンビニ">コンビニ</option>
                                    <option value="充当">充当</option>
                                    <option value="クレジット">クレジット</option>
                                    <option value="償却">償却</option>
                                    <option value="その他">その他</option>
                                </select></td>
                                <td></td>
                                <td></td>
                                <td></td>

                                <td>

                                </td>

                            </tr>

                            <tr>
                                <td class="tbl-31-tr">10</td>
                                <td></td>
                                <td><select name="" class="selclass">
                                    <option value="現金 ">現金</option>
                                    <option value="小切手">小切手</option>
                                    <option value="振替">振替</option>
                                    <option value="振込">振込</option>
                                    <option value="相殺">相殺</option>
                                    <option value="コンビニ">コンビニ</option>
                                    <option value="充当">充当</option>
                                    <option value="クレジット">クレジット</option>
                                    <option value="償却">償却</option>
                                    <option value="その他">その他</option>
                                </select></td>
                                <td></td>
                                <td></td>
                                <td></td>

                                <td>

                                </td>

                            </tr>
                            <tr>
                                <td class="tbl-31-tr">11</td>
                                <td></td>
                                <td><select name="" class="selclass">
                                    <option value="現金 ">現金</option>
                                    <option value="小切手">小切手</option>
                                    <option value="振替">振替</option>
                                    <option value="振込">振込</option>
                                    <option value="相殺">相殺</option>
                                    <option value="コンビニ">コンビニ</option>
                                    <option value="充当">充当</option>
                                    <option value="クレジット">クレジット</option>
                                    <option value="償却">償却</option>
                                    <option value="その他">その他</option>
                                </select></td>
                                <td></td>
                                <td></td>
                                <td></td>

                                <td>

                                </td>

                            </tr>
                            <tr>
                                <td class="tbl-31-tr">12</td>
                                <td></td>
                                <td><select name="" class="selclass">
                                    <option value="現金 ">現金</option>
                                    <option value="小切手">小切手</option>
                                    <option value="振替">振替</option>
                                    <option value="振込">振込</option>
                                    <option value="相殺">相殺</option>
                                    <option value="コンビニ">コンビニ</option>
                                    <option value="充当">充当</option>
                                    <option value="クレジット">クレジット</option>
                                    <option value="償却">償却</option>
                                    <option value="その他">その他</option>
                                </select></td>
                                <td></td>
                                <td></td>
                                <td></td>

                                <td>

                                </td>

                            </tr>
                            <tr>
                                <td class="tbl-31-tr">13</td>
                                <td></td>
                                <td><select name="" class="selclass">
                                    <option value="現金 ">現金</option>
                                    <option value="小切手">小切手</option>
                                    <option value="振替">振替</option>
                                    <option value="振込">振込</option>
                                    <option value="相殺">相殺</option>
                                    <option value="コンビニ">コンビニ</option>
                                    <option value="充当">充当</option>
                                    <option value="クレジット">クレジット</option>
                                    <option value="償却">償却</option>
                                    <option value="その他">その他</option>
                                </select></td>
                                <td></td>
                                <td></td>
                                <td></td>

                                <td>

                                </td>

                            </tr>

                            <tr>
                                <td class="tbl-31-tr">14</td>
                                <td></td>
                                <td><select name="" class="selclass">
                                    <option value="現金 ">現金</option>
                                    <option value="小切手">小切手</option>
                                    <option value="振替">振替</option>
                                    <option value="振込">振込</option>
                                    <option value="相殺">相殺</option>
                                    <option value="コンビニ">コンビニ</option>
                                    <option value="充当">充当</option>
                                    <option value="クレジット">クレジット</option>
                                    <option value="償却">償却</option>
                                    <option value="その他">その他</option>
                                </select></td>
                                <td></td>
                                <td></td>
                                <td></td>

                                <td>

                                </td>

                            </tr>
                            <tr>
                                <td class="tbl-31-tr">15</td>
                                <td></td>
                                <td><select name="" class="selclass">
                                    <option value="現金 ">現金</option>
                                    <option value="小切手">小切手</option>
                                    <option value="振替">振替</option>
                                    <option value="振込">振込</option>
                                    <option value="相殺">相殺</option>
                                    <option value="コンビニ">コンビニ</option>
                                    <option value="充当">充当</option>
                                    <option value="クレジット">クレジット</option>
                                    <option value="償却">償却</option>
                                    <option value="その他">その他</option>
                                </select></td>
                                <td></td>
                                <td></td>
                                <td></td>

                                <td>

                                </td>

                            </tr>

                            <tr>
                                <td class="tbl-31-tr">16</td>
                                <td></td>
                                <td><select name="" class="selclass">
                                    <option value="現金 ">現金</option>
                                    <option value="小切手">小切手</option>
                                    <option value="振替">振替</option>
                                    <option value="振込">振込</option>
                                    <option value="相殺">相殺</option>
                                    <option value="コンビニ">コンビニ</option>
                                    <option value="充当">充当</option>
                                    <option value="クレジット">クレジット</option>
                                    <option value="償却">償却</option>
                                    <option value="その他">その他</option>
                                </select></td>
                                <td></td>
                                <td></td>
                                <td></td>

                                <td>

                                </td>

                            </tr>
                            <tr>
                                <td class="tbl-31-tr">17</td>
                                <td></td>
                                <td><select name="" class="selclass">
                                    <option value="現金 ">現金</option>
                                    <option value="小切手">小切手</option>
                                    <option value="振替">振替</option>
                                    <option value="振込">振込</option>
                                    <option value="相殺">相殺</option>
                                    <option value="コンビニ">コンビニ</option>
                                    <option value="充当">充当</option>
                                    <option value="クレジット">クレジット</option>
                                    <option value="償却">償却</option>
                                    <option value="その他">その他</option>
                                </select></td>
                                <td></td>
                                <td></td>
                                <td></td>

                                <td>

                                </td>

                            </tr>

                            <tr>
                                <td class="tbl-31-tr">18</td>
                                <td></td>
                                <td><select name="" class="selclass">
                                    <option value="現金 ">現金</option>
                                    <option value="小切手">小切手</option>
                                    <option value="振替">振替</option>
                                    <option value="振込">振込</option>
                                    <option value="相殺">相殺</option>
                                    <option value="コンビニ">コンビニ</option>
                                    <option value="充当">充当</option>
                                    <option value="クレジット">クレジット</option>
                                    <option value="償却">償却</option>
                                    <option value="その他">その他</option>
                                </select></td>
                                <td></td>
                                <td></td>
                                <td></td>

                                <td>

                                </td>

                            </tr>
                            </tbody>
                        </table>

                    </div>
                    <div class="col-xs-12" style="margin-bottom: 10px">
                        <div style="border: 0.5px solid #E2E2E2">

                        </div>
                    </div>
                    <div class="container ">
                        <div class="col-xs-6 col-xs-offset-6">
                            <div class="col-xs-2">
                                <p>単位

                                </p>
                            </div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input class="form-control" contenteditable="false" name="officeCodeStartName" placeholder="0"
                                           type="text" value=""/>
                                </div>
                            </div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input class="form-control" contenteditable="false" name="companyIdEndName" placeholder="0"
                                           type="text" value=""/>
                                </div>
                            </div>

                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input class="form-control" contenteditable="false" name="companyIdEndName" placeholder="0"
                                           type="text" value=""/>
                                </div>
                            </div>

                        </div>
                    </div>


                    <div class="col-xs-12 bottom-box">

                        <div class="col-xs-2">
                            <div class="form-group">
                                <input class="form-control" contenteditable="false" name="officeCodeStartName" placeholder=""
                                       type="text" value=""/>
                            </div>
                        </div>
                        <div class="col-xs-2">
                            <div class="form-group">
                                <input class="form-control" contenteditable="false" name="companyIdEndName" placeholder="" type="text"
                                       value=""/>
                            </div>
                        </div>
                        <div class="col-xs-2">
                            <div class="form-group">
                                <input class="form-control" contenteditable="false" name="officeCodeStartName" placeholder=""
                                       type="text" value=""/>
                            </div>
                        </div>
                        <div class="col-xs-2">
                            <div class="form-group">
                                <input class="form-control" contenteditable="false" name="companyIdEndName" placeholder="" type="text"
                                       value=""/>
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