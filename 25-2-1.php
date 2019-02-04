<?php include "header.php"; ?>
<?php include "sidebar.php"; ?>
<div class="col-xs-8 col-md-10 col-xs-12 no-padding">

    <div class="col-md-12 col-xs-12 no-padding body-background">

        <div class="head-p ">
            <p>受付内容入力</p>
        </div>
	<form id="meter" action="/gas/meter-reading" method="POST">
	    <div class="col-xs-12 border1" style="padding-top:20px;">

                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-1 no-padding">
                            <p>消費者コード</p>
                        </div>
                       <div class="col-xs-2 ">
                            <div class="form-group">
                                <input id="consumerCodeStart" name="consumerCodeStart" placeholder="000" class="form-control" type="text" value="" onchange="$.fn.onInputValueChange('consumerCodeStart', 'consumerCodeStartName')"/>
                            </div>
                        </div>
                        <div class="col-xs-3 no-padding">
                            <div class="form-group">
                                <input id="consumeCodeEnd" name="consumeCodeEnd" placeholder="" class="form-control" type="text" value="" />
                            </div>
                        </div>
                        <div class="col-xs-1">
                            <div class="form-group">
                                <input id="consumerCodeStartName" name="consumerCodeStartName" placeholder="" class="form-control" type="text" value="自" disabled/>
                            </div>
                        </div>

                        <div class="col-xs-4">
                            <div class="form-group">
                                <input id="consumerCodeEndName" name="consumerCodeEndName" placeholder="" class="form-control" type="text" value=""/>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-1 no-padding">
                            <p>住所</p>
                        </div>
                        <div class="col-xs-2">
                            <div class="form-group">
                                <input id="officeCodeStartId" name="officeCodeStartId" placeholder="000" class="form-control" type="number" value=""/>
                            </div>
                        </div>
                        <div class="col-xs-3 no-padding">
                            <div class="form-group">
                                <input id="companyIdEndId" name="companyIdEndId" placeholder="" class="form-control" type="text" value=""/>
                            </div>
                        </div>
                        <div class="col-xs-1">
                            <p>営業担当</p>
                        </div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input id="companyIdEndName" name="companyIdEndName" placeholder="" class="form-control" type="text" value=""/>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-3 col-xs-offset-3 no-padding">
                            <div class="form-group">
                                <input id="companyIdEndId" name="companyIdEndId" placeholder="" class="form-control" type="text" value=""/>
                            </div>
                        </div>
                        <div class="col-xs-1">
                            <p>消費者区</p>
                        </div>
                        <div class="col-xs-2 no-padding">
                            <div class="form-group">
                                <input id="companyIdEndName" name="companyIdEndName" placeholder="Company 2" class="form-control" type="text" value=""/>
                            </div>
                        </div>

                        <div class="col-xs-1">
                            <p>滞留</p>
                        </div>
                        <div class="col-xs-1 no-padding">
                            <div class="form-group">
                                <input id="companyIdEndName" name="companyIdEndName" placeholder="" class="form-control" type="number" value=""/>
                            </div>
                        </div>
                    </div>
		</div>

		<div class="col-xs-12 border1 no-padding">
		    <p class="backend">受付内容</p>

                    <div class="col-xs-12">
                        <div class="col-xs-1 no-padding">
                            <p>受付日</p>
                        </div>
                        <div class="col-xs-2 no-padding">
                            <div class="form-group">
                                <input id="officeCodeStartId" name="officeCodeStartId" placeholder="000" class="form-control" type="date" value=""/>
                            </div>
                        </div>
                        <div class="col-xs-1">
                            <p>時刻</p>
                        </div>
                        <div class="col-xs-1 no-padding">
                            <div class="form-group">
                                <input id="officeCodeStartId" name="officeCodeStartId" class="form-control" type="time" value=""/>
                            </div>
                        </div>
                        <div class="col-xs-1">
                            <p>受付項目</p>
                        </div>
                        <div class="col-xs-1 no-padding">
                            <div class="form-group">
                                <input id="officeCodeStartId" name="officeCodeStartId" placeholder="00" class="form-control" type="number" value=""/>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="form-group">
                                <select name="" id="" class="form-control">
                                    <option value="修理">修理</option>
                                    <option value="取替">取替</option>
                                    <option value="問合せ">問合せ</option>
                                    <option value="下見">下見</option>
                                    <option value="保留">保留</option>
                                    <option value="支払">支払</option>
                                    <option value="料金">料金</option>
                                    <option value="ガス止め">ガス止め</option>
                                    <option value="その他">その他</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12">
                        <div class="col-xs-1 no-padding">
                            <p>受付担当者</p>
                        </div>
                        <div class="col-xs-1 no-padding">
                            <div class="form-group">
                                <input id="officeCodeStartId" name="officeCodeStartId" placeholder="000" class="form-control" type="number" value=""/>
                            </div>
                        </div>
                        <div class="col-xs-3 ">
                            <div class="form-group">
                                <input id="companyIdEndId" name="companyIdEndId" placeholder="" class="form-control" type="text" value=""/>
                            </div>
                        </div>
                        <div class="col-xs-1">
                           <p>受付内容</p>
                        </div>
                        <div class="col-xs-5 no-padding">
                            <div class="form-group">
                                <textarea class="form-control" name="" cols="57" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="col-xs-12 no-padding">

                            <div class="form-group">
                                <label class="col-xs-1 no-padding">受付区分


                                </label>

                                <div class="col-xs-1 no-padding">
                                    <input name="directSales" type="radio" value="directSales"><span> 受付のみ</span>
                                </div>

                                <div class="col-xs-1 no-padding">
                                    <input name="directSales" type="radio" value="directSales"><span> 案件が発生</span>
                                </div>
                            </div>


                        </div>
                    </div>
                    </div>
                    <div class="container tbl-scroll col-xs-12 bottom-box">

                        <table class="table table-bordered tbl-30-main">
                            <thead class="tbl-31">
                            <tr>
                                <th></th>
                                <th>日付</th>
                                <th>時刻</th>
                                <th>受付項目/業務分類
                                </th>
                                <th>作業状況
                                </th>
                                <th>最終作業日
                                </th>
                                <th>受付者
                                </th>
                                <th>案件番号
                                </th>
                                <th>作業担当者</th>


                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="tbl-31-tr col-xs-1">1</td>
                                <td class="col-xs-2"></td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>


                            </tr>
                            <tr>
                                <td class="tbl-31-tr"></td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>


                            </tr>


                            <tr>
                                <td class="tbl-31-tr">2</td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td class="tbl-31-tr"></td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                            </tr>

                            <tr>
                                <td class="tbl-31-tr">3</td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td class="tbl-31-tr"></td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td class="tbl-31-tr">4</td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td class="tbl-31-tr"></td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                            </tr>

                            <tr>
                                <td class="tbl-31-tr">5</td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td class="tbl-31-tr"></td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                            </tr>

                            <tr>
                                <td class="tbl-31-tr">6</td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td class="tbl-31-tr"></td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                            </tr>

                            <tr>
                                <td class="tbl-31-tr">7</td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td class="tbl-31-tr"></td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td class="tbl-31-tr">8</td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td class="tbl-31-tr"></td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                            </tr>

                            <tr>
                                <td class="tbl-31-tr">9</td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td class="tbl-31-tr"></td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                            </tr>



                            </tbody>
                        </table>

                    </div>
                    <?php include 'footer.php';?>

                </form>
            </div>
        </div>
    </div>
</div>

</body>

</html>
