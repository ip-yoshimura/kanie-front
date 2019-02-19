<?php include 'header.php';?>
<?php include 'sidebar.php';?>
    <div class="col-xs-8 col-md-10 col-xs-12 no-padding">

            <div class="col-md-12 col-xs-12 no-padding head-color body-background">
                <div class="head-p">
                    <p>入金伝票連続入力</p>
                </div>
                <form id="meter" action="/gas/meter-reading" method="POST">

		    <div class="col-xs-12 border1" style="padding-top:20px;">
			<div class="col-xs-12 no-padding">
			    <div class="col-xs-1">
				<label>伝票日付</label>
			    </div>
			    <div class="col-xs-2 form-group">
				<input id="reportDate" name="reportDate" class="form-control" type="date" value=""/>
			    </div>
			    <div class="col-xs-1">
				<label>集金担当</label>
			    </div>
			    <div class="col-xs-1 form-group">
				<input id="reportDate" name="reportDate" class="form-control" type="number" value=""/>
			    </div>
			    <div class="col-xs-2 form-group">
				<input id="reportDate" name="reportDate" class="form-control" type="text" value="" disabled/>
			    </div>
			</div>
		    </div>

		    <div class="col-xs-12 border1 bottom-box" style="padding-top:20px;">
		    <div class="col-xs-12 no-padding form-group">
			<div class="col-xs-6 col-xs-offset-2">
			    <div class="col-xs-2">
				<label>前月請求額</label>
			    </div>
			    <div class="col-xs-4">
				<input id="reportDate" name="reportDate" class="form-control" type="number" value=""/>
			    </div>
                            <div class="col-xs-2">
                                <label>現在売掛額</label>
                            </div>
                            <div class="col-xs-4">
                                <input id="reportDate" name="reportDate" class="form-control" type="number" value=""/>
                            </div>
			</div>
		    </div>

                    <div class="col-xs-12 tbl-scroll">
                        <table class="table table-bordered tbl-31-main">
                            <thead class="tbl-31">
                            <tr>
                                <th ></th>
                                <th>消費者コード</th>
                                <th>消費者名</th>
                                <th>区分</th>
                                <th>区分名</th>
                                <th>入金額</th>
                                <th>値引額</th>
                                <th>合計</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="tbl-31-tr">1</td>
                                <td><input type="text" class="form-control tbl-input"></td>
                                <td><input type="text" class="form-control tbl-input"></td>
                                <td><input type="text" class="form-control tbl-input"></td>
                                <td>
                                    <select name="" class="selclass form-control">
                                        <option value="リスト1 "> </option>
                                        <option value="リスト1 "> </option>
                                        <option value="リスト1 "> </option>
                                    </select>
                                </td>
                                <td><input type="text" class="form-control tbl-input"></td>
                                <td><input type="text" class="form-control tbl-input"></td>
                                <td><input type="text" class="form-control tbl-input"></td>
                            </tr>
                            <tr>
                                <td class="tbl-31-tr">2</td>
                                <td><input type="text" class="form-control tbl-input"></td>
                                <td><input type="text" class="form-control tbl-input"></td>
                                <td><input type="text" class="form-control tbl-input"></td>
                                <td>
                                    <select name="" class="selclass form-control">
                                        <option value="リスト1 "> </option>
                                        <option value="リスト1 "> </option>
                                        <option value="リスト1 "> </option>
                                    </select>
                                </td>
                                <td><input type="text" class="form-control tbl-input"></td>
                                <td><input type="text" class="form-control tbl-input"></td>
                                <td><input type="text" class="form-control tbl-input"></td>
                            </tr>
                            <tr>
                                <td class="tbl-31-tr">3</td>
                                <td><input type="text" class="form-control tbl-input"></td>
                                <td><input type="text" class="form-control tbl-input"></td>
                                <td><input type="text" class="form-control tbl-input"></td>
                                <td>
                                    <select name="" class="selclass form-control">
                                        <option value="リスト1 "> </option>
                                        <option value="リスト1 "> </option>
                                        <option value="リスト1 "> </option>
                                    </select>
                                </td>
                                <td><input type="text" class="form-control tbl-input"></td>
                                <td><input type="text" class="form-control tbl-input"></td>
                                <td><input type="text" class="form-control tbl-input"></td>
                            </tr>
                            <tr>
                                <td class="tbl-31-tr">4</td>
                                <td><input type="text" class="form-control tbl-input"></td>
                                <td><input type="text" class="form-control tbl-input"></td>
                                <td><input type="text" class="form-control tbl-input"></td>
                                <td>
                                    <select name="" class="selclass form-control">
                                        <option value="リスト1 "> </option>
                                        <option value="リスト1 "> </option>
                                        <option value="リスト1 "> </option>
                                    </select>
                                </td>
                                <td><input type="text" class="form-control tbl-input"></td>
                                <td><input type="text" class="form-control tbl-input"></td>
                                <td><input type="text" class="form-control tbl-input"></td>
                            </tr>
                            <tr>
                                <td class="tbl-31-tr">5</td>
                                <td><input type="text" class="form-control tbl-input"></td>
                                <td><input type="text" class="form-control tbl-input"></td>
                                <td><input type="text" class="form-control tbl-input"></td>
                                <td>
                                    <select name="" class="selclass form-control">
                                        <option value="リスト1 "> </option>
                                        <option value="リスト1 "> </option>
                                        <option value="リスト1 "> </option>
                                    </select>
                                </td>
                                <td><input type="text" class="form-control tbl-input"></td>
                                <td><input type="text" class="form-control tbl-input"></td>
                                <td><input type="text" class="form-control tbl-input"></td>
                            </tr>
                            <tr>
                                <td class="tbl-31-tr">6</td>
                                <td><input type="text" class="form-control tbl-input"></td>
                                <td><input type="text" class="form-control tbl-input"></td>
                                <td><input type="text" class="form-control tbl-input"></td>
                                <td>
                                    <select name="" class="selclass form-control">
                                        <option value="リスト1 "> </option>
                                        <option value="リスト1 "> </option>
                                        <option value="リスト1 "> </option>
                                    </select>
                                </td>
                                <td><input type="text" class="form-control tbl-input"></td>
                                <td><input type="text" class="form-control tbl-input"></td>
                                <td><input type="text" class="form-control tbl-input"></td>
                            </tr>
                            <tr>
                                <td class="tbl-31-tr">7</td>
                                <td><input type="text" class="form-control tbl-input"></td>
                                <td><input type="text" class="form-control tbl-input"></td>
                                <td><input type="text" class="form-control tbl-input"></td>
                                <td>
                                    <select name="" class="selclass form-control">
                                        <option value="リスト1 "> </option>
                                        <option value="リスト1 "> </option>
                                        <option value="リスト1 "> </option>
                                    </select>
                                </td>
                                <td><input type="text" class="form-control tbl-input"></td>
                                <td><input type="text" class="form-control tbl-input"></td>
                                <td><input type="text" class="form-control tbl-input"></td>
                            </tr>
                            <tr>
                                <td class="tbl-31-tr">8</td>
                                <td><input type="text" class="form-control tbl-input"></td>
                                <td><input type="text" class="form-control tbl-input"></td>
                                <td><input type="text" class="form-control tbl-input"></td>
                                <td>
                                    <select name="" class="selclass form-control">
                                        <option value="リスト1 "> </option>
                                        <option value="リスト1 "> </option>
                                        <option value="リスト1 "> </option>
                                    </select>
                                </td>
                                <td><input type="text" class="form-control tbl-input"></td>
                                <td><input type="text" class="form-control tbl-input"></td>
                                <td><input type="text" class="form-control tbl-input"></td>
                            </tr>
                            <tr>
                                <td class="tbl-31-tr">9</td>
                                <td><input type="text" class="form-control tbl-input"></td>
                                <td><input type="text" class="form-control tbl-input"></td>
                                <td><input type="text" class="form-control tbl-input"></td>
                                <td>
                                    <select name="" class="selclass form-control">
                                        <option value="リスト1 "> </option>
                                        <option value="リスト1 "> </option>
                                        <option value="リスト1 "> </option>
                                    </select>
                                </td>
                                <td><input type="text" class="form-control tbl-input"></td>
                                <td><input type="text" class="form-control tbl-input"></td>
                                <td><input type="text" class="form-control tbl-input"></td>
                            </tr>
                            <tr>
                                <td class="tbl-31-tr">10</td>
                                <td><input type="text" class="form-control tbl-input"></td>
                                <td><input type="text" class="form-control tbl-input"></td>
                                <td><input type="text" class="form-control tbl-input"></td>
                                <td>
                                    <select name="" class="selclass form-control">
                                        <option value="リスト1 "> </option>
                                        <option value="リスト1 "> </option>
                                        <option value="リスト1 "> </option>
                                    </select>
                                </td>
                                <td><input type="text" class="form-control tbl-input"></td>
                                <td><input type="text" class="form-control tbl-input"></td>
                                <td><input type="text" class="form-control tbl-input"></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="container">
                        <div class="col-xs-5 col-xs-offset-7">
                            <div class="col-xs-2 col-xs-offset-1 border-margin-exp">
                                <p>合計</p>
                            </div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input  name="officeCodeStartName" placeholder="0" class="form-control" type="text" value="" contenteditable="false"/>
                                </div>
                            </div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input  name="companyIdEndName" placeholder="0" class="form-control" type="text" value="" contenteditable="false"/>
                                </div>
                            </div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input  name="companyIdEndName" placeholder="0" class="form-control" type="text" value="" contenteditable="false"/>
                                </div>
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
