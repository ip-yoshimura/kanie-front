<?php
include "header.php"
?>
<?php
include "sidebar.php"
?>
        <div class="col-xs-10 col-md-10   no-padding">
	    <div class="col-md-12 col-xs-12 head-color no-padding body-background">
		<div class="head-p">
		    <p>運用環境設定</p>
		</div>

		<form id="meter" action="/gas/meter-reading" method="POST">
		    <div class="col-xs-6">
			<div class="col-xs-12 border1 no-padding">
			    <p class="backend">販売業務初期値</p>
                           
			    <div class="col-xs-12">
				<div class="col-xs-4 no-padding">
				    <p>外税発生単位</p>
				</div>
				<div class="col-xs-8 no-padding">
				    <div class="col-xs-4 no-padding"><input type="radio" id="" name="salesOperation" value="all" onclick="$.fn.radioButtonSelectionChanged('salesOperation', 'salesOperationId')"><span> 明細単位</span></div>
				    <div class="col-xs-4 no-padding"><input type="radio" id="" name="salesOperation" value="salesOperation" onclick="$.fn.radioButtonSelectionChanged('salesOperation', 'salesOperationId')"><span> 伝票単位</span></div>
				    <div class="col-xs-4 no-padding"><input type="radio" id="" name="salesOperation" value="salesOperation" onclick="$.fn.radioButtonSelectionChanged('salesOperation', 'salesOperationId')"><span> 請求書単位</span></div>
				</div>
			    </div>

			    <div class="col-xs-12 border-margin-bottom">
				<div class="col-xs-4 no-padding">
				    <p>請求書売上印字</p>
				</div>
				<div class="col-xs-8 no-padding">
				    <div class="col-xs-4 no-padding"><input type="radio" id="" name="invoice" value="all" onclick="$.fn.radioButtonSelectionChanged('invoice', 'invoiceId')"><span> 明細単位</span></div>
				    <div class="col-xs-4 no-padding"><input type="radio" id="" name="invoice" value="invoice" onclick="$.fn.radioButtonSelectionChanged('invoice', 'invoiceId')"><span> 伝票単位</span></div>
				</div>
			    </div>
                        </div>
			
			<div class="col-xs-12 border1 no-padding">
			    <p class="backend">コンビニ業務</p>

			    <div class="col-xs-12">
				<div class="col-xs-3 no-padding">
				    <p>未指定時業者</p>
				</div>
				<div class="col-xs-3 form-group">
				    <input type="text" class="form-control" name="printingId" id="printingId"
					   value="" onchange="$.fn.onInputValueChange('printingId', 'printingName')">
				</div>
				<div class="col-xs-6 form-group">
				    <input type="text" class="form-control" name="printingName" id="printingName" value="">                            
				</div>
			    </div>

			    <div class="col-xs-12">
				<div class="col-xs-3 no-padding">
				    <p>入金区分</p>
				</div>
				<div class="col-xs-3">
				    <input type="text" class="form-control" name="depositCategory">
				</div>
				<div class="col-xs-6 form-group">
				    <select class="form-control">
					<option>現金</option>
					<option>小切手</option>
					<option>振替</option>
					<option>振込</option>
					<option>相殺</option>
					<option>コンビニ</option>
					<option>充当</option>
					<option>クレジット</option>
				    </select>                           
				</div>
			    </div>

			    <div class="col-xs-12 border-margin-bottom">
				<div class="col-xs-3 no-padding">
				    <p>入金タイプ</p>
				</div>
				<div class="col-xs-9 form-group">
				    <div class="col-xs-3 no-padding"><input type="radio" id="" name="depositType" value="all" onclick="$.fn.radioButtonSelectionChanged('depositType', 'depositTypeId')"><span> 速報</span></div>
				    <div class="col-xs-3 no-padding"><input type="radio" id="" name="depositType" value="depositType" onclick="$.fn.radioButtonSelectionChanged('depositType', 'depositTypeId')"><span> 確報</span></div>
				</div>
			    </div>
			</div>

			<div class="col-xs-12 border1 no-padding">
			    <p class="backend">クレジット業務</p>

			    <div class="col-xs-12">
				<div class="col-xs-3 no-padding">
				    <p>未指定時業者</p>
				</div>
				<div class="col-xs-3 form-group">
				    <input type="text" class="form-control" name="traderId" id="traderId" value="" onchange="$.fn.onInputValueChange('traderId', 'traderName')">
				</div>
				<div class="col-xs-6 form-group">
				    <input type="text" class="form-control" name="traderName" id="traderName" value="">                            
				</div>
			    </div>
                                     
			    <div class="col-xs-12 border-margin-bottom">
				<div class="col-xs-3 no-padding">
				    <p>入金区分</p>
				</div>
				<div class="col-xs-3">
				    <input type="text" class="form-control">
				</div>
				<div class="col-xs-6">
				    <select class="form-control">
					<option>現金</option>
					<option>小切手</option>
					<option>振替</option>
					<option>振込</option>
					<option>相殺</option>
					<option>コンビニ</option>
					<option>充当</option>
					<option>クレジット</option>
				    </select>                           
				</div>
			    </div>
			</div>
		    </div>

		    <div class="col-xs-6">
			<div class="col-xs-12 border1 no-padding">
			    <p  class="backend">販売業務設定</p>

			    <div class="col-xs-12">
				<div class="col-xs-3 no-padding">
				    <p>消費税名称</p>
				</div>
				<div class="col-xs-8 form-group">
				    <input type="text" class="form-control">
				</div>
			    </div>

			    <div class="col-xs-12">
				<div class="col-xs-3 no-padding">
				    <p>リース発生日</p>
				</div>
				<div class="col-xs-8 form-group">
				    <div class="col-xs-3 no-padding"><input type="radio" id="" name="date" value="all" onclick="$.fn.radioButtonSelectionChanged('date', 'dateId')"><span> 月初日</span></div>
				    <div class="col-xs-3 no-padding"><input type="radio" id="" name="date" value="date" onclick="$.fn.radioButtonSelectionChanged('date', 'dateId')"><span> 締切日</span></div>
				</div>
			    </div>
			</div>

			<div class="col-xs-12 border1 no-padding">
			    <p class="backend">消費者設定</p>

			    <div class="col-xs-12 border-margin-bottom">
				<div class="col-xs-3 no-padding">
				    <p>消費者コード桁数</p>
				</div>
				<div class="col-xs-2 form-group">
				    <input type="number" class="form-control">   
				</div>
				<div class="col-xs-1 no-padding border-margin-exp">
				    <p>桁</p>  
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
