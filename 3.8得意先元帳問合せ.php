<?php include 'header.php';?>
<?php include 'sidebar.php';?>
    <div class="col-xs-8 col-md-10 col-xs-12 no-padding">

            <div class="col-md-12 col-xs-12 no-padding head-color body-background">
                <div class="head-p">
                    <p>得意先元帳問合せ </p>
                </div>
                <form id="meter" action="/gas/meter-reading" method="POST">
                    <div class="col-xs-12">
                        <div class="col-xs-1 no-padding">
                            <p>消費者コード</p>
                        </div>
                        <div class="col-xs-2">
                            <div class="form-group">
                                <input id="consumerId" name="consumerId" placeholder="" class="form-control" type="text" value="" onchange="$.fn.onInputValueChange('consumerId', 'consumerName')"/>
                            </div>
                        </div>
                        <div class="col-xs-2 ">
                            <div class="form-group">
                                <input id="consumerName" name="consumerName" placeholder="" class="form-control" type="text" value=""/>
                            </div>
                        </div>

                        <div class="col-xs-1">
                            <p>検針順路

                            </p>
                        </div>
                        <div class="col-xs-2">
                            <div class="form-group">
                                <input  name="officeCodeStartName" placeholder="" class="form-control" type="text" value=""/>
                            </div>
                        </div>

                        <div class="col-xs-1">
                            <p>最終年月

                            </p>
                        </div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input  name="officeCodeStartName" placeholder="" class="form-control" type="text" value=""/>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12">
                        <div class="col-xs-1 no-padding">
                            <p>対象月

                            </p>
                        </div>
                        <div class="col-xs-2">
                            <div class="form-group">
                                <input  name="officeCodeStartName" placeholder="" class="form-control" type="date" value=""/>
                            </div>
                        </div>
                        <div class="col-xs-2">
                            <div class="form-group">
                                <input  name="officeCodeStartName" placeholder="" class="form-control" type="date" value=""/>
                            </div>
                        </div>

                        <div class="col-xs-1 col-xs-offset-3">
                            <p>消込残
                            </p>
                        </div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input  name="officeCodeStartName" placeholder="0" class="form-control" type="number" value=""/>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12" style="margin-bottom: 10px">
                        <div style="border: 0.5px solid #E2E2E2">

                        </div>
                    </div>

                    <div class="col-xs-12 tbl-scroll">

                        <table class="table table-bordered tbl-31-main">
                            <thead class="tbl-31">
                            <tr>
                                <th></th>
                                <th>伝票日付

                                </th>
                                <th>商品名

                                    型式

                                </th>
                                <th>数量

                                </th>
                                <th>単価



                                </th>
                                <th>売上額

                                    うち消費税

                                </th>
                                <th>入金額

                                    値引額

                                </th>
                                <th>売掛残高

                                </th>
                                <th>済マ

                                    ーク

                                </th>
                                <th>税

                                    区分</th>
                                <th></th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="tbl-31-tr">1</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <select name="" class="selclass form-control">
                                        <option value="リスト1 ">リスト1 </option>
                                        <option value="リスト1 ">リスト2 </option>
                                        <option value="リスト1 ">リスト3 </option>
                                        <option value="リスト1 ">リスト4 </option>
                                        <option value="リスト1 ">リスト5 </option>
                                        <option value="リスト1 ">リスト6 </option>
                                    </select>
                                </td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="tbl-31-tr">  </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="tbl-31-tr">2</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><select name="" class="selclass form-control">
                                    <option value="リスト1 ">リスト1 </option>
                                    <option value="リスト1 ">リスト2 </option>
                                    <option value="リスト1 ">リスト3 </option>
                                    <option value="リスト1 ">リスト4 </option>
                                    <option value="リスト1 ">リスト5 </option>
                                    <option value="リスト1 ">リスト6 </option>
                                </select></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="tbl-31-tr"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="tbl-31-tr">3</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><select name="" class="selclass form-control">
                                    <option value="リスト1 ">リスト1 </option>
                                    <option value="リスト1 ">リスト2 </option>
                                    <option value="リスト1 ">リスト3 </option>
                                    <option value="リスト1 ">リスト4 </option>
                                    <option value="リスト1 ">リスト5 </option>
                                    <option value="リスト1 ">リスト6 </option>
                                </select></td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr>
                                <td class="tbl-31-tr"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr>
                                <td class="tbl-31-tr">4</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><select name="" class="selclass form-control">
                                    <option value="リスト1 ">リスト1 </option>
                                    <option value="リスト1 ">リスト2 </option>
                                    <option value="リスト1 ">リスト3 </option>
                                    <option value="リスト1 ">リスト4 </option>
                                    <option value="リスト1 ">リスト5 </option>
                                    <option value="リスト1 ">リスト6 </option>
                                </select></td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr>
                                <td class="tbl-31-tr"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="tbl-31-tr">5</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><select name="" class="selclass form-control">
                                    <option value="リスト1 ">リスト1 </option>
                                    <option value="リスト1 ">リスト2 </option>
                                    <option value="リスト1 ">リスト3 </option>
                                    <option value="リスト1 ">リスト4 </option>
                                    <option value="リスト1 ">リスト5 </option>
                                    <option value="リスト1 ">リスト6 </option>
                                </select></td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr>
                                <td class="tbl-31-tr"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="tbl-31-tr">6</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><select name="" class="selclass form-control">
                                    <option value="リスト1 ">リスト1 </option>
                                    <option value="リスト1 ">リスト2 </option>
                                    <option value="リスト1 ">リスト3 </option>
                                    <option value="リスト1 ">リスト4 </option>
                                    <option value="リスト1 ">リスト5 </option>
                                    <option value="リスト1 ">リスト6 </option>
                                </select></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="tbl-31-tr"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="tbl-31-tr">7</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><select name="" class="selclass form-control">
                                    <option value="リスト1 ">リスト1 </option>
                                    <option value="リスト1 ">リスト2 </option>
                                    <option value="リスト1 ">リスト3 </option>
                                    <option value="リスト1 ">リスト4 </option>
                                    <option value="リスト1 ">リスト5 </option>
                                    <option value="リスト1 ">リスト6 </option>
                                </select></td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr>
                                <td class="tbl-31-tr"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="tbl-31-tr">8</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><select name="" class="selclass form-control">
                                    <option value="リスト1 ">リスト1 </option>
                                    <option value="リスト1 ">リスト2 </option>
                                    <option value="リスト1 ">リスト3 </option>
                                    <option value="リスト1 ">リスト4 </option>
                                    <option value="リスト1 ">リスト5 </option>
                                    <option value="リスト1 ">リスト6 </option>
                                </select></td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr>
                                <td class="tbl-31-tr"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="tbl-31-tr">9</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><select name="" class="selclass form-control">
                                    <option value="リスト1 ">リスト1 </option>
                                    <option value="リスト1 ">リスト2 </option>
                                    <option value="リスト1 ">リスト3 </option>
                                    <option value="リスト1 ">リスト4 </option>
                                    <option value="リスト1 ">リスト5 </option>
                                    <option value="リスト1 ">リスト6 </option>
                                </select></td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr>
                                <td class="tbl-31-tr"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            </tbody>
                        </table>

                    </div>
                    <div class="container bottom-box">
                        <div class="col-xs-6 col-xs-offset-6">
                            <div class="col-xs-2">
                                <p>単位

                                </p>
                            </div>
                            <div class="col-xs-4">
                                <div class="form-group">
                                    <input  name="officeCodeStartName" placeholder="0" class="form-control" type="text" value="" contenteditable="false"/>
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="form-group">
                                    <input  name="companyIdEndName" placeholder="0" class="form-control" type="text" value="" contenteditable="false"/>
                                </div>
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