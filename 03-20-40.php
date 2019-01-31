<?php include 'header.php';?>
<?php include 'sidebar.php';?>

<div class="col-md-10 col-xs-8 col-xs-12 no-padding">

        <div class="col-md-12 col-xs-12 no-padding body-background">

            <div class="head-p ">
                <p>売上伝票入力</p>
            </div>

            <form id="meter" action="/gas/meter-reading" method="POST">

                <div class="col-xs-12">
                    <div class="col-xs-2 no-padding border-margin-exp">
                        <p>消費者コード</p>
                    </div>
                    <div class="col-xs-1">
                        <div class="form-group">
                            <input id="consumerId" name="consumerId" placeholder="" class="form-control" type="text"
                                   value="" onchange="$.fn.onInputValueChange('consumerId', 'consumerName')" />
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <div class="form-group">
                            <input id="consumerName" name="consumerName" placeholder="" class="form-control" type="text"
                                   value="" />
                        </div>
                    </div>
                    <div class="col-xs-1 no-padding border-margin-exp ml-20">
                        <p>検針順路</p>
                    </div>
                    <div class="col-xs-2 no-padding ml-n-20">
                        <div class="form-group">
                            <input name="officeCodeStartName" placeholder="" class="form-control" type="text" value="" />
                        </div>
                    </div>
                </div>

                <div class="col-xs-12">
                    <div class="col-xs-2  no-padding border-margin-exp">
                        <p>営業所名</p>
                    </div>
                    <div class="col-xs-3 ml-15 no-padding">
                        <div class="form-group">
                            <input name="officeCodeStartName" placeholder="" class="form-control" type="text" value="" />
                        </div>
                    </div>
                    <div class="col-xs-1 border-margin-exp">
                        <p>集金区分</p>
                    </div>
                    <div class="col-xs-1 no-padding ml-n-10">
                        <div class="form-group">
                            <input name="officeCodeStartName" placeholder="" class="form-control" type="text" value="" />
                        </div>
                    </div>
                </div>

                <div class="col-xs-12" style="margin-bottom: 10px">
                    <div style="border: 0.5px solid #E2E2E2">

                    </div>
                </div>


                <div class="col-xs-12">
                    <div class="col-xs-2 no-padding border-margin-exp">
                        <p>伝票日付</p>
                    </div>
                    <div class="col-xs-2 no-padding ml-15">
                        <div class="form-group">
                            <input name="officeCodeStartName" placeholder="" class="form-control" type="date" value="" />
                        </div>
                    </div>

                    <div class="col-xs-1 border-margin-exp">
                        <p>営業担当者</p>
                    </div>
                    <div class="col-xs-1">
                        <div class="form-group">
                            <input name="actingBusinessId" id="actingBusinessId" placeholder="" class="form-control"
                                   type="number" value="001" onchange="$.fn.onInputValueChange('actingBusinessId', 'actingBusinessName')" />
                        </div>
                    </div>
                    <div class="col-xs-2">
                        <div class="form-group">
                            <input name="actingBusinessName" id="actingBusinessName" placeholder="" class="form-control"
                                   type="text" value="" />
                        </div>
                    </div>

                    <div class="col-xs-1 border-margin-exp ml-10">
                        <p>伝票区分</p>
                    </div>
                    <div class="col-xs-1 ml-n-10">
                        <div class="form-group">
                            <input name="invoiceDestinationId" id="invoiceDestinationId" placeholder="" class="form-control"
                                   type="text" value="" onchange="$.fn.onSelectBoxChange('invoiceDestinationId', 'invoiceDestinationSelect')" />
                        </div>
                    </div>
                    <div class="col-xs-1 no-padding ml-10">
                        <select class="form-control" id="invoiceDestinationSelect" name="invoiceDestinationSelect" >
                            <option value="掛売 ">掛売</option>
                            <option value="現金売">現金売 </option>
                            <option value="掛返品 ">掛返品 </option>
                            <option value="現金返品">現金返品</option>
                            <option value="分割">分割</option>

                        </select>
                    </div>
                </div>

                <div class="col-xs-12">
                    <div class="col-xs-2 border-margin-exp col-xs-offset-4">
                        <p class="ml-20">単価初期値</p>
                    </div>
                    <div class="col-xs-1 ml-n-75">
                        <div class="form-group">
                            <input name="initialId" id="initialId" placeholder="" class="form-control" type="number"
                                   value="001" onchange="$.fn.onSelectBoxChange('initialId', 'initialSelect')" />
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <div class="form-group">
                            <select class="form-control"  name="initialSelect" id="initialSelect">
                                <option value="販売単価">販売単価</option>
                                <option value="アイテム2">アイテム2</option>
                                <option value="アイテム3">アイテム3</option>
                                <option value="アイテム4">アイテム4</option>
                                <option value="アイテム5">アイテム5</option>

                            </select>
                        </div>
                    </div>

                    <div class="col-xs-1">
                        <p></p>
                    </div>
                    <div class="col-xs-1 no-padding">
                        <div class="form-group">

                        </div>
                    </div>
                    <div class="col-xs-2">

                    </div>
                </div>


                <div class="col-xs-12" style="margin-bottom: 10px">
                    <div style="border: 0.5px solid #E2E2E2">

                    </div>
                </div>
                <div class="col-xs-12 container bottom-box tbl-scroll">

                    <table class="table table-bordered tbl-31-main">
                        <thead class="tbl-31">
                        <tr>
                            <th></th>
                            <th>区分</th>
                            <th>商品コード<br>営業所</th>
                            <th>商品名<br>在庫管理店名</th>
                            <th>型式</th>
                            <th>数量<br>販売入数</th>
                            <th>販売単価<br>仕入単価</th>
                            <th>単位</th>
                            <th>販売金額<br>仕入金額</th>
                            <th>外税<br>税区分</th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="tbl-31-tr ">1</td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td>
                                <select style="width: 80px;height: 30px;">
                                    <option value="リスト1 ">リスト1 </option>
                                    <option value="リスト1 ">リスト2 </option>
                                    <option value="リスト1 ">リスト3 </option>
                                    <option value="リスト1 ">リスト4 </option>
                                    <option value="リスト1 ">リスト5 </option>
                                    <option value="リスト1 ">リスト6 </option>
                                </select>
                            </td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                        </tr>
                        <tr>
                            <td class="tbl-31-tr"> </td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
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
                            <td class="tbl-31-tr">2</td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><select style="width: 80px;height: 30px;">
                                    <option value="リスト1 ">リスト1 </option>
                                    <option value="リスト1 ">リスト2 </option>
                                    <option value="リスト1 ">リスト3 </option>
                                    <option value="リスト1 ">リスト4 </option>
                                    <option value="リスト1 ">リスト5 </option>
                                    <option value="リスト1 ">リスト6 </option>
                                </select></td>
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
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                        </tr>
                        <tr>
                            <td class="tbl-31-tr">3</td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><select style="width: 80px;height: 30px;">
                                    <option value="リスト1 ">リスト1 </option>
                                    <option value="リスト1 ">リスト2 </option>
                                    <option value="リスト1 ">リスト3 </option>
                                    <option value="リスト1 ">リスト4 </option>
                                    <option value="リスト1 ">リスト5 </option>
                                    <option value="リスト1 ">リスト6 </option>
                                </select></td>
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
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                        </tr>

                        <tr>
                            <td class="tbl-31-tr">4</td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><select style="width: 80px;height: 30px;">
                                    <option value="リスト1 ">リスト1 </option>
                                    <option value="リスト1 ">リスト2 </option>
                                    <option value="リスト1 ">リスト3 </option>
                                    <option value="リスト1 ">リスト4 </option>
                                    <option value="リスト1 ">リスト5 </option>
                                    <option value="リスト1 ">リスト6 </option>
                                </select></td>
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
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                        </tr>
                        <tr>
                            <td class="tbl-31-tr">5</td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><select style="width: 80px;height: 30px;">
                                    <option value="リスト1 ">リスト1 </option>
                                    <option value="リスト1 ">リスト2 </option>
                                    <option value="リスト1 ">リスト3 </option>
                                    <option value="リスト1 ">リスト4 </option>
                                    <option value="リスト1 ">リスト5 </option>
                                    <option value="リスト1 ">リスト6 </option>
                                </select></td>
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
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                        </tr>
                        <tr>
                            <td class="tbl-31-tr">6</td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><select style="width: 80px;height: 30px;">
                                    <option value="リスト1 ">リスト1 </option>
                                    <option value="リスト1 ">リスト2 </option>
                                    <option value="リスト1 ">リスト3 </option>
                                    <option value="リスト1 ">リスト4 </option>
                                    <option value="リスト1 ">リスト5 </option>
                                    <option value="リスト1 ">リスト6 </option>
                                </select></td>
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
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                        </tr>
                        <tr>
                            <td class="tbl-31-tr">7</td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><select style="width: 80px;height: 30px;">
                                    <option value="リスト1 ">リスト1 </option>
                                    <option value="リスト1 ">リスト2 </option>
                                    <option value="リスト1 ">リスト3 </option>
                                    <option value="リスト1 ">リスト4 </option>
                                    <option value="リスト1 ">リスト5 </option>
                                    <option value="リスト1 ">リスト6 </option>
                                </select></td>
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
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                        </tr>
                        <tr>
                            <td class="tbl-31-tr">8</td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><select style="width: 80px;height: 30px;">
                                    <option value="リスト1 ">リスト1 </option>
                                    <option value="リスト1 ">リスト2 </option>
                                    <option value="リスト1 ">リスト3 </option>
                                    <option value="リスト1 ">リスト4 </option>
                                    <option value="リスト1 ">リスト5 </option>
                                    <option value="リスト1 ">リスト6 </option>
                                </select></td>
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
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                        </tr>
                        <tr>
                            <td class="tbl-31-tr">9</td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><select style="width: 80px;height: 30px;">
                                    <option value="リスト1 ">リスト1 </option>
                                    <option value="リスト1 ">リスト2 </option>
                                    <option value="リスト1 ">リスト3 </option>
                                    <option value="リスト1 ">リスト4 </option>
                                    <option value="リスト1 ">リスト5 </option>
                                    <option value="リスト1 ">リスト6 </option>
                                </select></td>
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
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                        </tr>
                        </tbody>
                    </table>


                    <div class="col-xs-6 col-xs-offset-8">
                        <div class="col-xs-2 no-padding border-margin-exp">
                            <p>合計</p>
                        </div>
                        <div class="col-xs-4 ml-n-40">
                            <div class="form-group">
                                <input name="officeCodeStartName" placeholder="0" class="form-control" type="number"
                                       value="" contenteditable="false" />
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input name="companyIdEndName" placeholder="0" class="form-control" type="number" value=""
                                       contenteditable="false" />
                            </div>
                        </div>

                    </div>

                    <div class="col-xs-12 no-padding" style="margin-bottom: 10px">
                        <div style="border: 0.5px solid #E2E2E2">

                        </div>
                    </div>

                    <div class="col-xs-12 no-padding" style="margin-left: -18px">

                        <div class="col-xs-2">
                            <div class="form-group">
                                <input name="officeCodeStartName" placeholder="" class="form-control" type="text" value="モード：新規"
                                       contenteditable="false" />
                            </div>
                        </div>
                        <div class="col-xs-2">
                            <div class="form-group">
                                <input name="companyIdEndName" placeholder="" class="form-control" type="text" value="自動切換：なし"
                                       contenteditable="false" />
                            </div>
                        </div>
                        <div class="col-xs-2">
                            <div class="form-group">
                                <input name="officeCodeStartName" placeholder="" class="form-control" type="text" value=""
                                       contenteditable="false" />
                            </div>
                        </div>
                        <div class="col-xs-2">
                            <div class="form-group">
                                <input name="companyIdEndName" placeholder="" class="form-control" type="text" value="1/1"
                                       contenteditable="false" />
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
</div>

</body>

</html>
