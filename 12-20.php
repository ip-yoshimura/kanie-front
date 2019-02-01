<?php
include "header.php"
?>
<?php
include "sidebar.php"
?>
<div class="col-xs-10 col-md-10 col-xs-12 no-padding body-background">

    <div class="head-p">
        <p>保安台帳保守</p>
    </div>
    <div class="col-xs-12">
        <div class="col-xs-1 no-padding">
            <p>消費者コード</p>
        </div>

        <div class="col-xs-2 no-padding">
            <input class="form-control" id="directStartId" name="directStartId"
                   type="number" value="">
        </div>
        <div class="col-xs-3">
            <input class="form-control" type="text" id="directStartName" name="directStartName">
        </div>
    </div>

    <div class="col-xs-12" style="margin-top:20px;">
        <div class="col-xs-12 border1 no-padding" style="padding-top:20px;">
            <div class="col-xs-12">
		<div class="col-xs-3">
                    <div class="col-xs-4 no-padding">
                        <p>検索名</p>
                    </div>
		    <div class="col-xs-6 no-padding">
                        <div class="form-group">
                            <input class="form-control" id="searchName" name="searchName"
                                   placeholder="" type="text" value=""/>
                        </div>
		    </div>
		</div>
		<div class="col-xs-3">
		    <div class="col-xs-3 no-padding">
		        <p>販売区分</p>
		    </div>
		    <div class="col-xs-6 no-padding">
                        <div class="form-group">
                            <input class="form-control" id="salesType" name="salesType"
                                   placeholder="" type="text" value=""/>
                        </div>
		    </div>
		</div>
		<div class="col-xs-3">
		    <div class="col-xs-3 no-padding">
		        <p>集金担当</p>
		    </div>
		    <div class="col-xs-6 no-padding">
                        <div class="form-group">
                            <input class="form-control" id="chargeName" name="chargeName"
                                   placeholder="" type="text" value=""/>
                        </div>
		    </div>
		</div>
		<div class="col-xs-3">
		    <div class="col-xs-5 no-padding">
		        <p>LV特定コード</p>
		    </div>
		    <div class="col-xs-6 no-padding">
                        <div class="form-group">
                            <input class="form-control" id="lvCode" name="lvCode"
                                   placeholder="" type="number" value=""/>
                        </div>
		    </div>
		</div>
	    </div>

	    <div class="col-xs-12">
		<div class="col-xs-3">
		    <div class="col-xs-4 no-padding">
		        <p>郵便番号</p>
		    </div>
		    <div class="col-xs-6 no-padding">
                        <div class="form-group">
                            <input class="form-control" id="zipCode" name="zipCode"
                                   placeholder="" type="text" value=""/>
                        </div>
		    </div>
		</div>
                <div class="col-xs-3">
                    <div class="col-xs-4 no-padding">
                        <p>地図コード</p>
                    </div>
                    <div class="col-xs-6 no-padding">
                        <div class="form-group">
                            <input class="form-control" id="mapCode" name="mapCode"
                                   placeholder="" type="text" value=""/>
                        </div>
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="col-xs-4 no-padding">
                        <p>メータ型式</p>
                    </div>
                    <div class="col-xs-6 no-padding">
                        <div class="form-group">
                            <input class="form-control" id="meterCode" name="meterCode"
                                   placeholder="" type="text" value=""/>
                        </div>
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="col-xs-5 no-padding">
                        <p>メータ製造番号</p>
                    </div>
                    <div class="col-xs-6 no-padding">
                        <div class="form-group">
                            <input class="form-control" id="meterNumber" name="meterNumber"
                                   placeholder="" type="text" value=""/>
                        </div>
                    </div>
                </div>
	    </div>

	    <div class="col-xs-12">
                <div class="col-xs-4">
                    <div class="col-xs-3 no-padding">
                        <p>住所1</p>
                    </div>
                    <div class="col-xs-9 no-padding">
                        <div class="form-group">
                            <input class="form-control" id="address1" name="address1"
                                   placeholder="" type="text" value=""/>
                        </div>
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="col-xs-4 no-padding">
                        <p>固定電話</p>
                    </div>
                    <div class="col-xs-8 no-padding">
                        <div class="form-group">
                            <input class="form-control" id="phoneNumber" name="phoneNumber"
                                   placeholder="" type="text" value=""/>
                        </div>
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="col-xs-5 no-padding">
                        <p>検定有効期限</p>
                    </div>
                    <div class="col-xs-7 no-padding">
                        <div class="form-group">
                            <input class="form-control" id="verificationLimit" name="verificationLimit"
                                   placeholder="" type="date" value=""/>
                        </div>
                    </div>
                </div>
	    </div>

	    <div class="col-xs-12">
                <div class="col-xs-4">
                    <div class="col-xs-3 no-padding">
                        <p>住所2</p>
                    </div>
                    <div class="col-xs-9 no-padding">
                        <div class="form-group">
                            <input class="form-control" id="address2" name="address2"
                                   placeholder="" type="text" value=""/>
                        </div>
                    </div>
                </div>
                <div class="col-xs-7">
		    <div class="col-xs-5">
                        <div class="col-xs-4 no-padding">
                            <p>携帯電話</p>
                        </div>
                        <div class="col-xs-8 no-padding">
                        <div class="form-group">
                            <input class="form-control" id="mobileNumber" name="mobileNumber"
                                   placeholder="" type="text" value=""/>
                        </div>
                        </div>
		    </div>
                    <div class="col-xs-4">
                        <div class="col-xs-5 no-padding">
                            <p>検針区分</p>
                        </div>
                        <div class="col-xs-7 no-padding">
                        <div class="form-group">
                            <input class="form-control" id="meterType" name="meterType"
                                   placeholder="" type="text" value=""/>
                        </div>
                        </div>
		    </div>
                    <div class="col-xs-3">
                        <div class="col-xs-6 no-padding">
                            <p>料金表</p>
                        </div>
                        <div class="col-xs-6 no-padding">
                        <div class="form-group">
                            <input class="form-control" id="pliceTable" name="pliceTable"
                                   placeholder="" type="text" value=""/>
                        </div>
                        </div>
                    </div>
                </div>
	   </div>

	   <div class="col-xs-12">
                <div class="col-xs-3">
                    <div class="col-xs-3 no-padding">
                        <p>検針担当</p>
                    </div>
                    <div class="col-xs-6 no-padding">
                        <div class="form-group">
                            <input class="form-control" id="securityCharge" name="securityCharge"
                                   placeholder="" type="text" value=""/>
                        </div>
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="col-xs-3 no-padding">
                        <p>配送担当</p>
                    </div>
                    <div class="col-xs-6 no-padding">
                            <input class="form-control" id="deliveryCharge" name="deliveryCharge"
                                   placeholder="" type="text" value=""/>
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="col-xs-3 no-padding">
                        <p>保証金</p>
                    </div>
                    <div class="col-xs-6 no-padding">
                            <input class="form-control" id="deposit" name="deposit"
                                   placeholder="" type="text" value=""/>
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="col-xs-3 no-padding">
                        <p>精算日</p>
                    </div>
                    <div class="col-xs-8 no-padding">
                            <input class="form-control" id="liquidationDate" name="liquidationDate"
                                   placeholder="" type="date" value=""/>
                    </div>
                </div>
	   </div>

	</div>
    </div>


    <!--tab -part-->

    <div class="col-xs-12 menu-border border-margin bottom-box no-padding">

        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#home">検針・配送</a></li>
            <li><a data-toggle="tab" href="#menu1">請求情報</a></li>
            <li><a data-toggle="tab" href="#menu2">特記事項</a></li>
        </ul>

        <div class="tab-content">

	    <!-- first tab -->
            <div id="home" class="tab-pane fade in active table-margin tab-scroll">

                    <div class="col-xs-12">

			<!-- left side -->
                        <div class="col-xs-5 no-padding">

                            <div class="col-xs-12 no-padding">
                                <div class="col-xs-6 no-padding">
				    <div class="col-xs-4 no-padding">				
	                                    <p>最終検針日</p>
                                    </div>
                                    <div class="col-xs-8 no-padding form-group">
                                        <input class="form-control" id="deposit" name="deposit"
                                                      placeholder="" type="date" value=""/>
                                    </div>
                                </div>
				<div class="col-xs-6">
                                    <div class="col-xs-4 no-padding">
                                            <p>指針値</p>
                                    </div>
                                    <div class="col-xs-8 no-padding form-group">
                                        <input class="form-control" id="deposit" name="deposit"
                                                      placeholder="" type="number" value=""/>
                                    </div>
                                </div>
			    </div>

                            <div class="col-xs-12 no-padding">
                                <div class="col-xs-6 no-padding">
                                    <div class="col-xs-4 no-padding">
                                            <p>最終配送日</p>
                                    </div>
                                    <div class="col-xs-8 no-padding form-group">
                                        <input class="form-control" id="deposit" name="deposit"
                                                      placeholder="" type="date" value=""/>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="col-xs-4 no-padding">
                                            <p>指針値</p>
                                    </div>
                                    <div class="col-xs-8 no-padding form-group">
                                        <input class="form-control" id="deposit" name="deposit"
                                                      placeholder="" type="number" value=""/>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 no-padding">
                                <div class="col-xs-6 no-padding">
                                    <div class="col-xs-4 no-padding">
                                            <p>配送予測日</p>
                                    </div>
                                    <div class="col-xs-8 no-padding form-group">
                                        <input class="form-control" id="deposit" name="deposit"
                                                      placeholder="" type="date" value=""/>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="col-xs-4 no-padding">
                                            <p>配送指定日</p>
                                    </div>
                                    <div class="col-xs-8 no-padding form-group">
                                        <input class="form-control" id="deposit" name="deposit"
                                                      placeholder="" type="date" value=""/>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 no-padding">
                                <div class="col-xs-2 no-padding">
                                        <p>設置容器構成</p>
                                </div>
                                <div class="col-xs-10 no-padding">
				    <div class="col-xs-7 no-padding form-group">
					<div class="col-xs-5 no-padding" style="margin-left:5px;">
                                            <input class="form-control" id="deposit" name="deposit"
                                                      placeholder="" type="number" value=""/>
					</div>
                                        <div class="col-xs-2 no-padding" style="margin-left:5px;">
                                            <input class="form-control" id="deposit" name="deposit"
                                                      placeholder="" type="text" value=""/>
                                        </div>
                                        <div class="col-xs-4 no-padding" style="margin-left:5px;">
                                            <input class="form-control" id="deposit" name="deposit"
                                                      placeholder="" type="number" value=""/>
                                        </div>
				    </div>
				    <div class="col-xs-5 no-padding form-group">
                                        <div class="col-xs-6 no-padding" style="margin-left:5px;">
                                            <input class="form-control" id="deposit" name="deposit"
                                                      placeholder="" type="number" value=""/>
                                        </div>
                                        <div class="col-xs-5 no-padding" style="margin-left:5px;">
                                            <input class="form-control" id="deposit" name="deposit"
                                                      placeholder="" type="number" value=""/>
                                        </div>
				    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 no-padding">
                                <div class="col-xs-2 no-padding">
                                        <p>次回交換容器</p>
                                </div>
                                <div class="col-xs-10 no-padding">
                                    <div class="col-xs-7 no-padding form-group">
                                        <div class="col-xs-5 no-padding" style="margin-left:5px;">
                                            <input class="form-control" id="deposit" name="deposit"
                                                      placeholder="" type="number" value=""/>
                                        </div>
                                        <div class="col-xs-2 no-padding" style="margin-left:5px;">
                                            <input class="form-control" id="deposit" name="deposit"
                                                      placeholder="" type="text" value=""/>
                                        </div>
                                        <div class="col-xs-4 no-padding" style="margin-left:5px;">
                                            <input class="form-control" id="deposit" name="deposit"
                                                      placeholder="" type="number" value=""/>
                                        </div>
                                    </div>
                                    <div class="col-xs-5 no-padding form-group">
                                        <div class="col-xs-6 no-padding" style="margin-left:5px;">
                                            <input class="form-control" id="deposit" name="deposit"
                                                      placeholder="" type="number" value=""/>
                                        </div>
                                        <div class="col-xs-5 no-padding" style="margin-left:5px;">
                                            <input class="form-control" id="deposit" name="deposit"
                                                      placeholder="" type="number" value=""/>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 no-padding">
                                <div class="col-xs-6 no-padding">
                                    <div class="col-xs-4 no-padding">
                                            <p>切替方式</p>
                                    </div>
                                    <div class="col-xs-4 no-padding form-group">
                                        <input class="form-control" id="deposit" name="deposit"
                                                      placeholder="" type="text" value="" />
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="col-xs-4 no-padding">
                                            <p>中圧倍率</p>
                                    </div>
                                    <div class="col-xs-4 no-padding form-group">
                                        <input class="form-control" id="deposit" name="deposit"
                                                      placeholder="" type="number" value=""/>
                                    </div>
                                </div>
			    </div>

                            <div class="col-xs-12 no-padding">
                                <div class="col-xs-6 no-padding">
                                    <div class="col-xs-4 no-padding">
                                            <p>交換方式</p>
                                    </div>
                                    <div class="col-xs-4 no-padding form-group">
                                        <input class="form-control" id="deposit" name="deposit"
                                                      placeholder="" type="text" value=""/>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 no-padding">
                                <div class="col-xs-6 no-padding">
                                    <div class="col-xs-4 no-padding">
                                            <p>供給区分</p>
                                    </div>
                                    <div class="col-xs-4 no-padding form-group">
                                        <input class="form-control" id="deposit" name="deposit"
                                                      placeholder="" type="text" value=""/>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="col-xs-4 no-padding">
                                            <p>配送集計先</p>
                                    </div>
                                    <div class="col-xs-6 no-padding form-group">
                                        <input class="form-control" id="deposit" name="deposit"
                                                      placeholder="" type="text" value=""/>
                                    </div>
                                </div>
                            </div>

			    <div class="col-xs-12 no-padding">
				<div class="col-xs-5 no-padding">
				    <img src="/images/cap-gas.PNG" style="width:100%">
				</div>
				<div class="col-xs-7">
				    <div class="col-xs-12 no-padding">
					<div class="col-xs-5 no-padding">
					    <p>消費量</p>
					</div>
					<div class="col-xs-6 no-padding">
					    <input class="form-control" id="deposit" name="deposit"
						   placeholder="" type="text" value=""/>
					</div>
				    </div>
                                    <div class="col-xs-12 no-padding">
                                        <div class="col-xs-5 no-padding">
                                            <p>設置容器残量</p>
                                        </div>
                                        <div class="col-xs-6 no-padding">
                                            <input class="form-control" id="deposit" name="deposit"
                                                   placeholder="" type="text" value=""/>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 no-padding">
                                        <div class="col-xs-5 no-padding">
                                            <p>うち次回交換</p>
                                        </div>
                                        <div class="col-xs-6 no-padding">
                                            <input class="form-control" id="deposit" name="deposit"
                                                   placeholder="" type="text" value=""/>
                                        </div>
                                    </div>
				</div>
			    </div>

                        </div>

			<!-- right side -->
                        <div class="col-xs-7 table-scroll">
                            <table class="table table-bordered">
                                <thead>
                                <tr class="bg-color">
                                    <th></th>
                                    <th>区分</th>
                                    <th>日付</th>
                                    <th>指針</th>
                                    <th>旧指針</th>
                                    <th>回転</th>
                                    <th>使用量</th>
                                    <th>日数</th>
                                    <th>m3/日</th>
                                </tr>
                                </thead>
                                <tr>
                                    <th class="bg-color">1</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                <tr>
                                    <th class="bg-color">2</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                <tr>
                                    <th class="bg-color">3</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                <tr>
                                    <th class="bg-color">4</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </table>
                        </div>

		</div>
            </div>
            <!--First Tab-->

            <!--second Tab-->
            <div id="menu1" class="tab-pane fade table-margin no">
                <div class="col-xs-12 no-padding tab-scroll" style="">
			<div class="col-xs-12">
			    <div class="col-xs-3 no-padding">
                                <div class="col-xs-4 no-padding">
                                    <p>前月締切日</p>
                                </div>
                                <div class="col-xs-8">
                                    <div class="form-group">
                                        <input class="form-control" id="verificationLimit" name="verificationLimit"
                                              placeholder="" type="date" value=""/>
                                    </div>
				</div>
			    </div>

			    <div class="col-xs-2 no-padding">
                                <div class="col-xs-3 no-padding">
                                    <p>請求額</p>
                                </div>
                                <div class="col-xs-6 no-padding">
                                    <div class="form-group">
                                        <input class="form-control" id="verificationLimit" name="verificationLimit"
                                              placeholder="" type="number" value=""/>
                                    </div>
                                </div>
			    </div>

			    <div class="col-xs-2 no-padding">
                                <div class="col-xs-4 no-padding">
                                    <p>現在売掛額</p>
                                </div>
                                <div class="col-xs-6 no-padding">
                                    <div class="form-group">
                                        <input class="form-control" id="verificationLimit" name="verificationLimit"
                                              placeholder="" type="number" value=""/>
                                    </div>
                                </div>
			    </div>

			    <div class="col-xs-5">
                                <div class="col-xs-2 no-padding">
                                    <p>集金区分</p>
                                </div>
                                <div class="col-xs-3">
                                    <div class="form-group">
                                        <input class="form-control" id="verificationLimit" name="verificationLimit"
                                              placeholder="" type="text" value="現金" disabled/>
                                    </div>
                                </div>
                                <div class="col-xs-3">
                                    <div class="form-group">
                                        <input class="form-control" id="verificationLimit" name="verificationLimit"
                                              placeholder="" type="text" value=""/>
                                    </div>
                                </div>
                                <div class="col-xs-3">
                                    <div class="form-group">
                                        <input class="form-control" id="verificationLimit" name="verificationLimit"
                                              placeholder="00" type="number" value=""/>
                                    </div>
                                </div>
			    </div>

                        <div class="col-xs-12 table-scroll">
                            <table class="table table-bordered col-xs-11">
                                <thead>
                                <sr>
                                    <tr class="bg-color">
                                        <td></td>
                                        <td>請求年月</td>
                                        <td>伝票日付</td>
                                        <td>商品名</td>
                                        <td>数量</td>
                                        <td>売上額</td>
                                        <td>うち消費税</td>
                                        <td>入金額</td>
                                        <td>入金値引き</td>
                                        <td>税区分</td>
                                    </tr>
                                    <tr>
                                        <td class="bg-color td-style">1</td>
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
                                        <td class="bg-color td-style">2</td>
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
                                        <td class="bg-color td-style">3</td>
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
                                        <td class="bg-color td-style">4</td>
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
                                </sr>
                                </thead>
                            </table>
                        </div>
                    </div>

                </div>
	    </div>

            <!--third Tab-->
            <div id="menu2" class="tab-pane fade border-margin tab-scroll">
                <div class="col-xs-12 border1 no-padding">
                    <div class="col-xs-12 form-group" style="margin-top:20px;">
			<textarea rows="10" class="form-control"></textarea>
                    </div>
                    <div class="col-xs-12 table-scroll">
                        <table class="table table-bordered">
                            <thead>
                            <tr class="bg-color">
                                <th></th>
                                <th>日付</th>
                                <th>時刻</th>
                                <th>受付項目/業務分類</th>
                                <th>作業状況</th>
                                <th>最終作業日</th>
                                <th>受付者</th>
                                <th>案件番号</th>
                                <th>作業担当者</th>
                            </tr>
                            <tr>
                                <th class="bg-color">1</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                            <tr>
                                <th class="bg-color">2</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                            <tr>
                                <th class="bg-color">3</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                            <tr>
                                <th class="bg-color">4</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>

            </div>
            <!--third Tab-->
        </div>


    </div>


    <!--tab -part-->


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
