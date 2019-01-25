<?php
include "header.php"
?>
<?php
include "sidebar.php"
?>


		<div class="col-xs-10 col-md-10  no-padding body-background">


				<div class="col-md-12 col-xs-12 no-padding">

                    <div class="head-p">
                        <p>請求明細問合せ

                        </p>
                    </div>


					<div class="form-group col-xs-12 ">
						<label class="col-xs-1 no-padding">消費者コード

						</label>
						<div class="col-xs-2">
							<input type="text" class="form-control" placeholder="" value="" name="consumerCodeSelection" id="consumerCodeSelection" onchange="$.fn.onInputValueChange('consumerCodeSelection', 'consumerCodeEnd')"/>
						</div>

						<div class="col-xs-3">
							<input type="text" class="form-control" placeholder="" value="" name="consumerCodeEnd" id="consumerCodeEnd" />
						</div>
						<label class="col-xs-1 control-label">検針順路</label>
						<div class="col-xs-2">
							<input type="text" class="form-control" placeholder="" />
						</div>
						<label class="col-xs-1 control-label">集金区分</label>
						<div class="col-xs-2">
							<input type="text" class="form-control" placeholder="" />
						</div>

					</div>
					<div class="form-group col-xs-12 ">
						<label class="col-xs-1 no-padding">締切日

						</label>

						<div class="col-xs-2">
							<input type="date" class="form-control" placeholder="" />
						</div>
						<label class="col-xs-1 no-padding">現在売掛額

						</label>
						<div class="col-xs-2">
							<input type="text" class="form-control" placeholder="" />
						</div>
						<label class="col-xs-1 control-label no-padding">振替予定日</label>
						<div class="col-xs-2">
							<input type="text" class="form-control" placeholder="" />
						</div>
						<label class="col-xs-1 control-label no-padding">振替依頼額

						</label>
						<div class="col-xs-2">
							<input type="text" class="form-control" placeholder="" />
						</div>

					</div>

				</div>


				<div class="col-xs-12">
					<div class="col-xs-9 no-padding">
						<table class="table table-bordered col-xs-12">
							<thead>
								<tr class="bg-color">
									<th class="bg-color"></th>
									<th class="col-xs-3">入金</th>
									<th>入金値引</th>
									<th>売上（税込</th>
									<th>うちメータ販売</th>
									<th>請求額</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="bg-color td-style">前月</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td class="bg-color td-style">前月</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>

							</tbody>
						</table>
					</div>
					<div class="col-xs-3">
						<label class="col-xs-4 no-padding control-label">振替依頼額

						</label>
						<div class="col-xs-8">
							<input type="text" class="form-control" placeholder="" />
						</div>
					</div>
				</div>

				<div class="col-xs-12 ">

                     <div class="col-xs-12 no-padding">
                         <div class="col-xs-6 div-border">
                             <p class="td-style">
                                 請求明細</p>
                         </div>
                         <div class="col-xs-6 div-border">
                             <p class="td-style">ガス料金履歴 </p>
                         </div>

					 </div>

				</div>
            <div class="col-xs-12" style="height:150px;overflow: scroll;">
                <table class="table table-bordered">
                    <thead>
                    <tr class="bg-color">
                        <th>請求年月</th>
                        <th>伝票日付</th>
                        <th>商品名</th>
                        <th>数量</th>
                        <th>売上額</th>
                        <th>うち消費税</th>
                        <th>うち消費税</th>
                        <th>入金額</th>
                        <th>入金値引額</th>
                        <th>税区分</th>

                    </tr>
                   <!-- <tr>
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

                    </tr>-->



                    </thead>
                </table>
            </div>
 <div class="col-xs-12 no-padding bottom-box">
     <div class="col-xs-2">
         <input type="text" name="" id="" class="form-control">
     </div>
     <div class="col-xs-2">
         <input type="text" name="" id="" class="form-control">
     </div>
     <div class="col-xs-2">
         <input type="text" name="" id="" class="form-control">
     </div>
     <div class="col-xs-2">
         <input type="text" name="" id="" class="form-control">
     </div>
 </div>

                <?php
                include "footer.php"
                ?>

				</form>

		</div>
	</div>
	</div>

</body>

</html>