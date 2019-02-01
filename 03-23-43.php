<?php include 'header.php';?>
<?php include 'sidebar.php';?>
    <div class="col-xs-8 col-md-10 col-xs-12 no-padding">
        <div class="col-md-12 col-xs-12 no-padding">
                <div class="head-p">
                    <p>振替金額変更履歴 </p>
                </div>
                <form id="meter" action="/gas/meter-reading" method="POST">
                    <div class="col-xs-12">
                        <div class="col-xs-1 no-padding">
                            <p>金額変更日</p>
                        </div>
                        <div class="col-xs-2">
                            <div class="form-group">
                                <input id="officeCodeStartName" name="officeCodeStartName" placeholder="" class="form-control" type="date" value=""/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">～</div>
                        <div class="col-xs-2 no-padding">
                            <div class="form-group">
                                <input id="companyIdEndName" name="companyIdEndName" placeholder="" class="form-control" type="date" value=""/>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 tbl-scroll bottom-box">
                        <table class="table table-bordered tbl-31-main">
                            <thead class="tbl-31">
                            <tr>
                                <th></th>
                                <th>変更日</th>
                                <th>消費者コード</th>
                                <th>消費者名</th>
                                <th>変更前<br/>振替金額</th>
                                <th>変更前<br/>振替割引</th>
                                <th>変更後<br/>振替金額</th>
                                <th>変更後<br/>振替割引</th>
                                <th>変更者</th>
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
