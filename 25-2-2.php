<?php include "header.php"; ?>
<?php include "sidebar.php"; ?>

<div class="col-xs-8 col-md-10 col-xs-12 no-padding">

    <div class="col-md-12 col-xs-12 no-padding body-background">

        <div class="head-p ">
            <p>作業内容入力</p>
        </div>
        <form id="meter" action="/gas/meter-reading" method="POST">

        <div class="col-xs-12 no-padding border1" style="padding-top:20px;">
            <div class="col-xs-12">
                <div class="col-xs-1 no-padding">
                    <p>消費者コード</p>
                </div>
                <div class="col-xs-2">
                    <div class="form-group">
                        <input id="officeCodeStartId" name="officeCodeStartId" placeholder="" class="form-control" type="text" value=""/>
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="form-group">
                        <input id="companyIdEndId" name="companyIdEndId" placeholder="" class="form-control" type="text" value=""/>
                    </div>
                </div>
                <div class="col-xs-1">
                    <div class="form-group">
                        <input id="officeCodeStartName" name="officeCodeStartName" class="form-control" type="text" value="自" disabled/>
                    </div>
                </div>
                <div class="col-xs-4 no-padding">
                    <div class="form-group">
                        <input id="companyIdEndName" name="companyIdEndName" placeholder="Company 2" class="form-control" type="text" value=""/>
                    </div>
                </div>
            </div>

            <div class="col-xs-12">
                <div class="col-xs-1 no-padding">
                    <p>住所</p>
                </div>
                <div class="col-xs-2">
                    <div class="form-group">
                        <input id="officeCodeStartId" name="officeCodeStartId" placeholder="" class="form-control" type="text" value=""/>
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
                <div class="col-xs-3 no-padding">
                    <div class="form-group">
                        <input id="companyIdEndName" name="companyIdEndName" placeholder="" class="form-control" type="text" value=""/>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 no-padding">
                <div class="col-xs-3 col-xs-offset-3 no-padding">
                    <div class="form-group">
                        <input id="companyIdEndId" name="companyIdEndId" class="form-control" type="text" value=""/>
                    </div>
                </div>
                <div class="col-xs-1">
                    <p>消費者区</p>
                </div>
                <div class="col-xs-2 no-padding">
                    <div class="form-group">
                        <input id="companyIdEndName" name="companyIdEndName" placeholder="" class="form-control" type="text" value=""/>
                    </div>
                </div>
                <div class="col-xs-1">
                    <p>滞留</p>
                </div>
                <div class="col-xs-1 no-padding">
                    <div class="form-group">
                        <input id="companyIdEndName" name="companyIdEndName" placeholder="" class="form-control" type="text" value=""/>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xs-12 border1 no-padding">
            <p class="backend">作業内容</p>
            <div class="col-xs-12">

                <div class="form-group">
                    <label class="col-xs-1 no-padding">作業区分</label>
                    <div class="col-xs-1">
                        <input name="directSales" type="radio" value="directSales"><span> 通常</span>
                    </div>
                    <div class="col-xs-1">
                        <input name="directSales" type="radio" value="directSales"><span> 営業</span>
                    </div>
                    <div class="col-xs-1">
                        <input name="directSales" type="radio" value="directSales"><span> 案件</span>
                    </div>
                    <div class="col-xs-1">
                        <input name="directSales" type="radio" value="directSales"><span> その他</span>
                    </div>
                </div>
            </div>

            <div class="col-xs-12">
                <div class="col-xs-1 no-padding">
                    <p>案件番号</p>
                </div>
                <div class="col-xs-2 no-padding">
                    <div class="form-group">
                        <input id="officeCodeStartId" name="officeCodeStartId" class="form-control"
                               type="number" value=""/>
                    </div>
                </div>
                <div class="col-xs-1">
                    <p>案件名</p>
                </div>
                <div class="col-xs-4">
                    <div class="form-group">
                        <input id="officeCodeStartId" name="officeCodeStartId" class="form-control"
                               type="text" value=""/>
                    </div>
                </div>
            </div>

            <div class="col-xs-12">
                <div class="col-xs-1 no-padding">
                    <p>作業日</p>
                </div>
                <div class="col-xs-2 no-padding">
                    <div class="form-group">
                        <input id="officeCodeStartId" name="officeCodeStartId" class="form-control" type="date" value=""/>
                    </div>
                </div>
                <div class="col-xs-1">
                    <p>時刻</p>
                </div>
                <div class="col-xs-2">
                    <div class="form-group">
                        <input id="officeCodeStartId" name="officeCodeStartId" class="form-control" type="time" value=""/>
                    </div>
                </div>
                <div class="col-xs-1 no-padding ratio">～</div>
                <div class="col-xs-2">
                    <div class="form-group">
                        <input id="officeCodeStartId" name="officeCodeStartId" class="form-control" type="time" value=""/>
                    </div>
                </div>
            </div>

            <div class="col-xs-12">
                <div class="col-xs-1 no-padding">
                    <p>作業担当者</p>
                </div>
                <div class="col-xs-2">
                    <div class="form-group">
                        <input id="officeCodeStartId" name="officeCodeStartId" placeholder="000" class="form-control"
                               type="number" value=""/>
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="form-group">
                        <input id="companyIdEndId" name="companyIdEndId" class="form-control"
                               type="text" value=""/>
                    </div>
                </div>
                <div class="col-xs-1">
                    <p>作業内容</p>
                </div>
                <div class="col-xs-5">
                    <div class="form-group">
                        <textarea name="" cols="55" rows="3"></textarea>
                    </div>
                </div>
            </div>

            <div class="col-xs-12">
                <div class="col-xs-1 no-padding">
                    <p>業務分類</p>
                </div>
                <div class="col-xs-2">
                    <div class="form-group">
                        <input id="officeCodeStartId" name="officeCodeStartId" class="form-control" type="number" value=""/>
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="form-group">
                        <input id="companyIdEndId" name="companyIdEndId" class="form-control" type="text" value=""/>
                    </div>
                </div>
            </div>

            <div class="col-xs-12">
                <div class="col-xs-1 no-padding">
                    <p>業務詳細</p>
                </div>
                <div class="col-xs-2">
                    <div class="form-group">
                        <input id="officeCodeStartId" name="officeCodeStartId" class="form-control" type="number" value=""/>
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="form-group">
                        <input id="companyIdEndId" name="companyIdEndId" class="form-control" type="text" value=""/>
                    </div>
                </div>
                <div class="form-group col-xs-6">
                    <label class="col-xs-2 no-padding">作業状態
                    </label>
                    <div class="col-xs-2">
                        <input name="directSales" type="radio" value="directSales"><span> 未作業</span>
                    </div>
                    <div class="col-xs-2">
                        <input name="directSales" type="radio" value="directSales"><span> 作業中</span>
                    </div>
                    <div class="col-xs-2">
                        <input name="directSales" type="radio" value="directSales"><span> 作業済</span>
                    </div>
                </div>
            </div>

            <div class="col-xs-12">
                <div class="col-xs-1 no-padding">
                    <p>進捗度合</p>
                </div>
                <div class="col-xs-2">
                    <div class="form-group">
                        <input id="officeCodeStartId" name="officeCodeStartId" class="form-control" type="number" value=""/>
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="form-group">
                        <input id="companyIdEndId" name="companyIdEndId" class="form-control" type="text" value=""/>
                    </div>
                </div>
                <div class="col-xs-1">
                    <p>次回予定日</p>
                </div>
                <div class="col-xs-2">
                    <div class="form-group">
                        <input id="companyIdEndId" name="companyIdEndId" placeholder="999" class="form-control"
                               type="date" value=""/>
                    </div>
                </div>
            </div>
        </div>

                <div class="container tbl-scroll col-xs-12 bottom-box">

                    <table class="table table-bordered tbl-30-main">
                        <thead class="tbl-31">
                        <tr>
                            <th></th>
                            <th>日付

                            </th>
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
                            <th>作業担当者

                            </th>


                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="tbl-31-tr col-xs-1">1</td>
                            <td class="col-xs-2"></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
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
