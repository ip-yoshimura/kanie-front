<?php include 'header.php';?>
<?php include 'sidebar.php';?>
    <div class="col-xs-8 col-md-10 col-xs-12 no-padding">
        <div class="col-md-12 col-xs-12 no-padding body-background">

                <div class="head-p">
                    <p>口座振替金額変更</p>
                </div>
                <form id="meter" action="/gas/meter-reading" method="POST">


                    <div class="col-xs-12">
                        <div class="col-xs-2 no-padding border-margin-exp ">
                            <p>消費者コード</p>
                        </div>
                        <div class="col-xs-2 ml-n-10">
                            <div class="form-group">
                                <input id="officeCodeStartId" name="officeCodeStartId" placeholder="" class="form-control" type="text"
                                 value="" onchange="$.fn.onInputValueChange('officeCodeStartId', 'companyIdEndName')"/>
                            </div>
                        </div>

                        <div class="col-xs-3">
                            <div class="form-group">
                                <input id="companyIdEndName" name="companyIdEndName" placeholder="" class="form-control" type="text" value=""/>
                            </div>
                        </div>
                        <div class="col-xs-1 border-margin-exp">
                            <p>検針順路</p>
                        </div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input  name="officeCodeStartName" placeholder="" class="form-control" type="text" value=""/>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-2">
                            <p>銀行名</p>
                        </div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input  name="officeCodeStartName" placeholder="" class="form-control" type="text" value=""/>
                            </div>
                        </div>

                        <div class="col-xs-1 border-margin-exp">
                            <p>支店名</p>
                        </div>
                        <div class="col-xs-3 no-padding">
                            <div class="form-group">
                                <input  name="officeCodeStartName" placeholder="" class="form-control" type="text" value=""/>
                            </div>
                        </div>

                    </div>

                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-2">
                            <p>幹事銀行名</p>
                        </div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input  name="officeCodeStartName" placeholder="" class="form-control" type="text" value=""/>
                            </div>
                        </div>


                    </div>

                    <div class="col-xs-12 no-padding border-margin-exp">
                        <div class="col-xs-2">
                            <p>幹事銀行名</p>
                        </div>
                        <div class="col-xs-2">
                            <div class="form-group">
                                <input  name="officeCodeStartName" placeholder="0" class="form-control" type="number" value=""/>
                            </div>
                        </div>

                        <div class="col-xs-2 border-margin-exp">
                            <p>売上明細金額合計</p>
                        </div>
                        <div class="col-xs-2 no-padding ml-n-40">
                            <div class="form-group">
                                <input  name="officeCodeStartName" placeholder="0" class="form-control" type="number" value=""/>
                            </div>
                        </div>

                        <div class="col-xs-1 border-margin-exp">
                            <p>消込残</p>
                        </div>
                        <div class="col-xs-2 no-padding ml-n-20">
                            <div class="form-group">
                                <input  name="officeCodeStartName" placeholder="0" class="form-control" type="number" value=""/>
                            </div>
                        </div>


                    </div>
                    <div class="col-xs-12" style="margin-bottom: 10px">
                        <div style="border: 0.5px solid #E2E2E2">
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="col-xs-2 no-padding ml-5">
                            <p>代行金額</p>
                        </div>
                        <div class="col-xs-2 ml-n-15">
                            <div class="form-group">
                                <input  name="officeCodeStartName" placeholder="0" class="form-control" type="number" value=""/>
                            </div>
                        </div>

                        <div class="col-xs-1 no-padding ml-10 border-margin-exp">
                            <p>振替値引金額
                            </p>
                        </div>
                        <div class="col-xs-2">
                            <div class="form-group">
                                <input  name="officeCodeStartName" placeholder="0" class="form-control" type="number" value=""/>
                            </div>
                        </div>

                        <div class="col-xs-1 no-padding border-margin-exp">
                            <p>振替依頼金額</p>
                        </div>
                        <div class="col-xs-2 ml-n-10">
                            <div class="form-group">
                                <input  name="officeCodeStartName" placeholder="0" class="form-control" type="number" value=""/>
                            </div>
                        </div>

                        <div class="col-xs-1 no-padding border-margin-exp">
                            <p>自社分依頼額

                            </p>
                        </div>
                        <div class="col-xs-1 ml-n-20">
                            <div class="form-group">
                                <input  name="officeCodeStartName" placeholder="0" class="form-control" type="number" value=""/>
                            </div>
                        </div>


                    </div>


                        <div class="col-xs-12" style="margin-bottom: 10px">
                            <div style="border: 0.5px solid #E2E2E2">

                            </div>
                        </div>

                        <div class="col-xs-12 tbl-scroll bottom-box">
                            <table class="table table-bordered tbl-31-main">
                                <thead class="tbl-31">
                                <tr>
                                    <th></th>
                                    <th>伝票日付

                                    </th>
                                    <th>"商品名

                                        型式"</th>
                                    <th>数量</th>
                                    <th>単価</th>
                                    <th>"売上額

                                        消費税"</th>
                                    <th>"税

                                        区分"</th>
                                    <th>摘要

                                    </th>
                                    <th>列8</th>
                                    <th>"済マ

                                        ーク"</th>

                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="tbl-31-tr">1</td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"> </td>

                                </tr>
                                <tr>
                                    <td class="tbl-31-tr">  </td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>

                                </tr>
                                <tr>
                                    <td class="tbl-31-tr">2</td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>

                                </tr>
                                <tr>
                                    <td class="tbl-31-tr"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>

                                </tr>
                                <tr>
                                    <td class="tbl-31-tr">3</td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>

                                </tr>

                                <tr>
                                    <td class="tbl-31-tr"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>

                                </tr>

                                <tr>
                                    <td class="tbl-31-tr">4</td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>

                                </tr>

                                <tr>
                                    <td class="tbl-31-tr"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>

                                </tr>
                                <tr>
                                    <td class="tbl-31-tr">5</td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>

                                </tr>

                                <tr>
                                    <td class="tbl-31-tr"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>

                                </tr>
                                <tr>
                                    <td class="tbl-31-tr">6</td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>

                                </tr>
                                <tr>
                                    <td class="tbl-31-tr"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>

                                </tr>
                                <tr>
                                    <td class="tbl-31-tr">7</td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>

                                </tr>

                                <tr>
                                    <td class="tbl-31-tr"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>

                                </tr>
                                <tr>
                                    <td class="tbl-31-tr">8</td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>

                                </tr>

                                <tr>
                                    <td class="tbl-31-tr"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>

                                </tr>
                                <tr>
                                    <td class="tbl-31-tr">9</td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>

                                </tr>

                                <tr>
                                    <td class="tbl-31-tr"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>

                                </tr>
                                </tbody>
                            </table>
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