<?php
include "header.php"
?>

<?php
include "sidebar.php"
?>

<div class="col-xs-10 col-md-10 no-padding  body-background">

	<div class="head-p">
            <p>検針兼請求書作成指定</p>
        </div>

	<div class="col-xs-12">
	    <div class="col-xs-3 border1 no-padding">
		<p class="back-end">テーブル一覧</p>
		<div class="col-xs-12">
		    <table class="table table-bordered">
			<thead>
			    <tr class="bg-color">
				<th></th>
				<th>テーブル名</th>
			    </tr>
			</thead>
			<tbody>
			    <tr>
				<th class="bg-color">1</th>
				<th>オートマスタ</th>
			    </tr>
                            <tr>
                                <th class="bg-color">2</th>
                                <th>オート運転者</th>
                            </tr>
                            <tr>
                                <th class="bg-color">3</th>
                                <th>オート契約者</th>
                            </tr>
                            <tr>
                                <th class="bg-color">4</th>
                                <th>オート充填機メータ</th>
                            </tr>
                            <tr>
                                <th class="bg-color">5</th>
                                <th>お知らせ文</th>
                            </tr>
			</tbody>
		    </table>
		</div>
	    </div>

	    <div class="col-xs-3 border1 no-padding" style="margin-left:20px;">
		<p class="back-end">お知らせ文</p>
		<div class="col-xs-12">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="bg-color">
                                <th></th>
                                <th>フィールド名</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th class="bg-color">1</th>
                                <th>文コード</th>
                            </tr>
                            <tr>
                                <th class="bg-color">2</th>
                                <th>文内容</th>
                            </tr>
                        </tbody>
                    </table>

		</div>
	    </div>

	    <div class="col-xs-1 no-padding ratio" style="margin-top:80px;">
		<p style="font-size:1.2em;">==</p>
	    </div>

	    <div class="col-xs-3 border1 no-padding">
		<p class="back-end">地区</p>
		<div class="col-xs-12">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="bg-color">
                                <th></th>
                                <th>フィールド名</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th class="bg-color">1</th>
                                <th>地区コード</th>
                            </tr>
                            <tr>
                                <th class="bg-color">2</th>
                                <th>地区名</th>
                            </tr>
                        </tbody>
                    </table>
		</div>
	    </div>
	</div>

	<div class="col-xs-12 border1 no-padding">
	    <p class="back-end">選択フィールド</p>

	    <div class="col-xs-12">
		<table class="table table-bordered">
		    <thead>
			<tr class="bg-color">
			    <th></th>
			    <th>フィールド名</th>
			    <th>型</th>
			    <th>取得元</th>
			    <th>=条件</th>
			    <th>&lt;&gt;条件</th>
			    <th>範囲開始</th>
			    <th>範囲終了</th>
			    <th>非出力</th>
			</tr>
		    </thead>
		    <tbody>
			<tr>
			    <th class="bg-color">1</th>
			    <th>フィールド名</th>
			    <th>型</th>
			    <th>お知らせ文</th>
			    <th></th>
			    <th></th>
			    <th></th>
			    <th></th>
			    <th><input type="checkbox"></input></th>
			</tr>
                        <tr>
                            <th class="bg-color">2</th>
                            <th>文コード</th>
                            <th>VARCHAR2</th>
                            <th>お知らせ文</th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th><input type="checkbox"></input></th>
                        </tr>
                        <tr>
                            <th class="bg-color">3</th>
                            <th>文内容</th>
                            <th>VARCHAR2</th>
                            <th>お知らせ文</th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th><input type="checkbox"></input></th>
                        </tr>

		    </tbody>
		</table>
	    </div>
	</div>

        <?php
        include "footer.php"
        ?>

        </form>
    </div>
</div>
</div>
</div>

</body>

</html>
