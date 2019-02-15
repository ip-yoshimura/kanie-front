<?php
include "header.php"
?>
<?php
include "sidebar.php"
?>
<div class="col-xs-8 col-md-10 col-xs-12 no-padding">
    <div class="col-md-12 col-xs-12 no-padding body-background">

        <div class="head-p">
            <p>保安機関・調査員マスタ保守</p>
        </div>

        <form id="meter" action="/gas/meter-reading" method="POST">
            <div class="col-xs-12 border1">
		<div class="col-xs-12" style="margin-top:20px;">
		    <div class="col-xs-2 no-padding">
			<p>保安機関コード</p>
		    </div>
		    <div class="col-xs-2">
			<div class="form-group">
			    <input id="officeCodeStartName" name="officeCodeStartName" placeholder="0" class="form-control" type="text" value=""/>
			</div>
		    </div>
		    <div class="col-xs-2 border-margin-exp">
			<p>営業所・販売店</p>
		    </div>
		    <div class="col-xs-1 ml-n-60">
			<div class="form-group">
			    <input id="officeCodeStartName" name="officeCodeStartName" placeholder="0" class="form-control" type="text" value=""/>
			</div>
		    </div>
		    <div class="col-xs-3">
			<div class="form-group">
			    <input name="officeCodeStartName" placeholder="0" class="form-control" type="text" value=""/>
			</div>
		    </div>
		    <div class="col-xs-1 col-xs-offset-1">
			<div class="form-group">
			    <input type="button" value="閲覧" style="color: red;width: 60px;height: 30px">
			</div>
		    </div>
		</div>
	    </div>

            <div class="col-xs-12 no-padding">
                <div class="col-xs-6">
		    <div class="col-xs-12 no-padding">
                        <div class="col-xs-3 border-margin-exp">
                            <p>保安機関名</p>
                        </div>
                        <div class="col-xs-9">
                            <div class="form-group">
                                <input id="officeCodeStartName" name="officeCodeStartName" placeholder="000" class="form-control" type="text" value=""/>
                            </div>
                        </div>
		    </div>

		    <div class="col-xs-12 no-padding">
                        <div class="col-xs-3 border-margin-exp">
                            <p>郵便番号</p>
                        </div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input id="officeCodeStartName" name="officeCodeStartName" placeholder="" class="form-control" type="text" value=""/>
                            </div>
			</div>
                    </div>

		    <div class="col-xs-12 no-padding">
                        <div class="col-xs-3 border-margin-exp">
                            <p>住所1</p>
                        </div>
                        <div class="col-xs-9">
                            <div class="form-group">
                                <input id="officeCodeStartName" name="officeCodeStartName" 
                                       class="form-control" type="text" value=""/>
                            </div>
                        </div>
		    </div>

		    <div class="col-xs-12 no-padding">
                        <div class="col-xs-3 border-margin-exp">
                            <p>住所2</p>
                        </div>
                        <div class="col-xs-9">
                            <div class="form-group">
                                <input id="officeCodeStartName" name="officeCodeStartName"
                                       class="form-control" type="text" value=""/>
                            </div>
                        </div>
		    </div>

		    <div class="col-xs-12 no-padding">
                        <div class="col-xs-3 border-margin-exp">
                            <p>電話番号</p>
                        </div>
                        <div class="col-xs-9">
                            <div class="form-group">
                                <input id="officeCodeStartName" name="officeCodeStartName" 
                                       class="form-control" type="text" value=""/>
                            </div>
                        </div>
		    </div>

		    <div class="col-xs-12 no-padding">
                        <div class="col-xs-3 border-margin-exp">
                            <p>FAX</p>
                        </div>
                        <div class="col-xs-9">
                            <div class="form-group">
                                <input id="officeCodeStartName" name="officeCodeStartName" 
                                       class="form-control" type="text" value=""/>
                            </div>
                        </div>
		    </div>
                </div>

                <div class="col-xs-6 bottom-box">
                    <div class="col-xs-2">
                        <p>調査員</p>
                    </div>
                    <div>
                        <div class="col-xs-10">
                            <table class="table table-bordered">
                                <thead class="tbl-31">
                                <tr>
                                    <th class="col-xs-1"></th>
                                    <th>コード</th>
                                    <th style="width: 220px;">調査員名</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="tbl-31">1</td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                </tr>
                                <tr>
                                    <td class="tbl-31"> 2</td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                </tr>
                                <tr>
                                    <td class="tbl-31">3</td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                </tr>
                                <tr>
                                    <td class="tbl-31">4</td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                </tr>
                                <tr>
                                    <td class="tbl-31">5</td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                </tr>
                                <tr>
                                    <td class="tbl-31">6</td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                </tr>
                                <tr>
                                    <td class="tbl-31">7</td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                </tr>
                                <tr>
                                    <td class="tbl-31">8</td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                </tr>
                                <tr>
                                    <td class="tbl-31">9</td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                </tr>
                                <tr>
                                    <td class="tbl-31">10</td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                </tr>
                                <tr>
                                    <td class="tbl-31">11</td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                </tr>
                                <tr>
                                    <td class="tbl-31">12</td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                </tr>
                                <tr>
                                    <td class="tbl-31">13</td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                </tr>
                                <tr>
                                    <td class="tbl-31">14</td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                </tr>
                                <tr>
                                    <td class="tbl-31">15</td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                </tr>
                                <tr>
                                    <td class="tbl-31">16</td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                </tr>
                                <tr>
                                    <td class="tbl-31">17</td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                </tr>
                                <tr>
                                    <td class="tbl-31">18</td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                </tr>
                                <tr>
                                    <td class="tbl-31">19</td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                </tr>

                                <tr>
                                    <td class="tbl-31">20</td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>

            <?php
            include "footer.php"
            ?>

        </form>
    </div>
</div>

</body>

</html>
