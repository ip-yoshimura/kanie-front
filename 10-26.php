<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<div class="col-xs-8 col-md-10 no-padding body-background">

    <div class="col-md-12 col-xs-12 no-padding">
        <div class="head-p">
            <p>消費者マスタデータ読込</p>
        </div>
        <form action="/gas/meter-reading" id="meter" method="POST">

        <div class="col-xs-12 no-padding">
	    <div class="col-xs-12 no-padding">
		<div class="col-xs-4"><p>読込データの入っているファイル名を指定してください</p></div>
		<div class="col-xs-4" style="text-align:right;"><p>(※　必須)</p></div>
	    </div>

	    <div class="col-xs-8 no-padding">
		<div class="col-xs-1"></div>
		<div class="col-xs-11 no-padding">
		    <div class="col-xs-4 no-padding">
			<p>読込用ファイル1 (基本・銀行・受託設定)</p>
		    </div>
		    <div class="col-xs-6 no-padding">
			<div class="form-group">
			    <input id="inputFile1" name="inputFile1" class="form-control" type="text"
			        value="" />
			</div>
		    </div>
		</div>
	    </div>

            <div class="col-xs-8 no-padding">
                <div class="col-xs-1"></div>
                <div class="col-xs-11 no-padding">
                    <div class="col-xs-4 no-padding">
                        <p>読込用ファイル2 (検針・配送設定)</p>
                    </div>
                    <div class="col-xs-6 no-padding">
                        <div class="form-group">
                            <input id="inputFile2" name="inputFile2" class="form-control" type="text"
                                value="" />
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-8 no-padding">
                <div class="col-xs-1"></div>
                <div class="col-xs-11 no-padding">
                    <div class="col-xs-4 no-padding">
                        <p>読込用ファイル3 (個人情報・保安設定)</p>
                    </div>
                    <div class="col-xs-6 no-padding">
                        <div class="form-group">
                            <input id="inputFile3" name="inputFile3" class="form-control" type="text"
                                value="" />
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-8 no-padding">
                <div class="col-xs-1"></div>
                <div class="col-xs-11 no-padding">
                    <div class="col-xs-4 no-padding">
                        <p>読込用ファイル4 (設備使用料)</p>
                    </div>
                    <div class="col-xs-6 no-padding">
                        <div class="form-group">
                            <input id="inputFile4" name="inputFile4" class="form-control" type="text"
                                value="" />
                        </div>
                    </div>
                </div>
            </div>

	    <div class="col-xs-8 no-padding">
		<div class="col-xs-1"></div>
		<div class="col-xs-2 no-padding"><p>処理区分</p></div>
		<div class="col-xs-8">
		    <input type="radio" name="functionCategory" id="functionCategory1" value="all" /> 重大エラーデータ、読込後修正の必要なデータがあった場合、処理を中止する
		</div>
	    </div>

	    <div class="col-xs-8 no-padding">
		<div class="col-xs-3"><p>　</p></div>
                <div class="col-xs-8">
		    <input type="radio" name="functionCategory" id="functionCategory2" value="all" /> 重大エラーデータがあった場合のみ、処理を中止する
		</div>
	    </div>

            <div class="col-xs-8 no-padding">
                <div class="col-xs-3"><p>　</p></div>
                <div class="col-xs-8">
                    <input type="radio" name="functionCategory" id="functionCategory3" value="all" /> 適切な値のデータのみ追加する
                </div>
            </div>

            <div class="col-xs-8 no-padding">
                <div class="col-xs-3"><p>　</p></div>
                <div class="col-xs-8">
                    <input type="radio" name="functionCategory" id="functionCategory4" value="all" /> 重大エラーデータ以外、読込後修正の必要なデータも含めすべて追加する
                </div>
            </div>

        </div>

    </div>


    <?php include 'footer.php'; ?>

    </form>

</div>

</body>

</html>
