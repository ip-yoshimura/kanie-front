<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<div class="col-xs-8 col-md-10 col-xs-12 no-padding">

    <div class="col-md-12 col-xs-12 no-padding head-color">
        <div class="head-p">
            <p>検針兼請求書作成指定

            </p>
        </div>
        <form action="/gas/meter-reading" id="meter" method="POST">

            <div class="col-xs-12 border1 no-padding">
                <p class="backend">作成範囲指定 </p>
                <div class="col-xs-12">
                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-1 no-padding">
                            <p>営業所コード</p>
                        </div>
                        <div class="col-xs-1">
                            <input type="radio" name="SalesCenterCode" id="all" value="all"> 全て
                    	</div>
                        <div class="col-xs-1 no-padding">
                            <input type="radio" name="SalesCenterCode" value="custom"> 選択
                        </div>
                    </div>
                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-1 col-xs-offset-1">
                            <div class="form-group">
                                <input id="officeCodeStartId" name="officeCodeStartId" placeholder="000"
                                       class="form-control" type="text" value=""/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">~</div>
                        <div class="col-xs-1">
                            <div class="form-group">
                                <input id="companyIdEndId" name="companyIdEndId" placeholder="999" class="form-control"
                                       type="text" value=""/>
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input id="officeCodeStartName" name="officeCodeStartName" placeholder="Company 1"
                                       class="form-control" type="text" value=""/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">~</div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input id="companyIdEndName" name="companyIdEndName" placeholder="Company 2"
                                       class="form-control" type="text" value=""/>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12">
                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-1 no-padding">
                            <p>受託区分</p>
                        </div>
                        <div class="col-xs-1">
                            <input type="radio" name="TrustType" value="all"> 全て
                        </div>
                        <div class="col-xs-1 no-padding">
                            <input type="radio" name="TrustType" value="directSales"> 直売
                        </div>
                        <div class="col-xs-1 no-padding">
                            <input type="radio" name="TrustType" value="salesOutlet"> 販売店
                        </div>
                    </div>
                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-1 col-xs-offset-1">
                            <div class="form-group">
                                <input id="trustStartId" name="trustStartId" placeholder="000" class="form-control"
                                       type="text" value=""/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">~</div>
                        <div class="col-xs-1">
                            <div class="form-group">
                                <input id="trustEndId" name="trustEndId" placeholder="999" class="form-control"
                                       type="text" value=""/>
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input id="trustStartName" name="trustStartName" class="form-control" type="text"
                                       value=""/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">~</div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input id="trustEndName" name="trustEndName" class="form-control" type="text" value=""/>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12">
                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-1 no-padding">
                            <p>出力区分</p>
                        </div>
                        <div class="col-xs-1 no-padding">
                            <input type="radio" name="OutputType" value="all"> 全て
                        </div>
                        <div class="col-xs-1 no-padding">
                            <input type="radio" name="OutputType" value="directSales"> 地区
                        </div>
                        <div class="col-xs-1 no-padding">
                            <input type="radio" name="OutputType" value="salesOutlet"> 検針担当者
                        </div>
                        <div class="col-xs-1 no-padding">
                            <input type="radio" name="OutputType" value="salesOutlet"> 配送委託先
                        </div>
                    </div>
                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-1 col-xs-offset-1">
                            <div class="form-group">
                                <input id="outputStartId" name="outputStartId" placeholder="000" class="form-control"
                                       type="text" value=""/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">~</div>
                        <div class="col-xs-1">
                            <div class="form-group">
                                <input id="outputEndId" name="outputEndId" placeholder="999" class="form-control"
                                       type="text" value=""/>
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input id="outputStartName" name="outputStartName" class="form-control" type="text"
                                       value=""/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">~</div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input id="outputEndName" name="outputEndName" class="form-control" type="text"
                                       value=""/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="col-xs-1 no-padding">
                        <p>検針順路</p>
                    </div>
                    <div class="col-xs-3">
                        <div class="form-group">
                            <input id="meterReadingRouteStart" name="meterReadingRouteStart" placeholder="0"
                                   class="form-control" type="text" value=""/>
                        </div>
                    </div>
                    <div class="col-xs-1 no-padding ratio">~</div>
                    <div class="col-xs-3">
                        <div class="form-group">
                            <input id="meterReadingRouteEnd" name="meterReadingRouteEnd" placeholder="9999999"
                                   class="form-control" type="text" value=""/>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="col-xs-1 no-padding">
                        <p>消費者コード</p>
                    </div>
                    <div class="col-xs-2">
                        <div class="form-group">
                            <input id="consumerCodeStart" name="consumerCodeStart" placeholder="0" class="form-control"
                                   type="text" value=""/>
                        </div>
                    </div>
                    <div class="col-xs-1 no-padding ratio">~</div>
                    <div class="col-xs-2">
                        <div class="form-group">
                            <input id="consumeCodeEnd" name="consumeCodeEnd" placeholder="z" class="form-control"
                                   type="text" value=""/>
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <div class="form-group">
                            <input id="consumerCodeStartName" name="consumerCodeStartName" class="form-control"
                                   type="text" value=""/>
                        </div>
                    </div>
                    <div class="col-xs-1 no-padding ratio">~</div>
                    <div class="col-xs-3">
                        <div class="form-group">
                            <input id="consumerCodeEndName" name="consumerCodeEndName" class="form-control" type="text"
                                   value=""/>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="col-xs-6 no-padding">
                        <div class="col-xs-2 no-padding">
                            <p>検針区分</p>
                        </div>
                        <div class="col-xs-6 col-xs-offset-1 no-padding">
                            <input id="meterReadingClassification1" name="meterReadingClassification" type="radio"
                                   value="手書伝票"/> 手書伝票
                            <input id="meterReadingClassification2" name="meterReadingClassification" type="radio"
                                   value="ハンディ"/> ハンディ
                            <input id="meterReadingClassification3" name="meterReadingClassification" type="radio"
                                   value="テレメ"/>テレメ
                        </div>
                    </div>
                    <div class="col-xs-6 no-padding">
                        <div class="col-xs-4">
                            <p>検針状態</p>
                        </div>
                        <div class="col-xs-8 no-padding">
                            <input id="meterReadingState1" name="meterReadingState" type="radio" value="全て"/> 全て
                            <input id="meterReadingState2" name="meterReadingState" type="radio" value="未検針のみ"/>未検針のみ
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="col-xs-1 no-padding">
                        <p>帳票タイプ</p>
                    </div>
                    <div class="col-xs-3">
                        <div class="form-group">
                            <select id="formType" name="formType" class="form-control">
                                <option value="11検針伝票_東北用">11検針伝票_東北用</option>
                                <option value="New検針伝票_定期用">New検針伝票_定期用</option>
                                <option value="検針伝票">検針伝票</option>
                                <option value="検針伝票_定期用">検針伝票_定期用</option>
                                <option value="検針伝票_東北用">検針伝票_東北用</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 border1 no-padding bottom-box">
                <p class="backend">出力指定</p>

                <div class="col-xs-12">
                    <div class="col-xs-1 no-padding">
                        <p>並び順</p>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-1">
                            <input type="text" class="form-control" placeholder="000"/>
                        </div>
                        <div class="col-xs-3">
                            <select class="form-control">
                                <option value="消費者コード順">消費者コード順</option>
                                <option value="">検針順路順</option>
                                <option value="">地区コード順</option>
                                <option value="">担当者コード順</option>
                                <option value="">販売店コード順</option>
                                <option value="">販売店コード順→地区コード順</option>
                                <option value="">販売店コード順→担当者コード順</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12">
                    <div class="col-xs-1 no-padding">
                        <p>伝票作成日</p>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-2">
                            <input type="date" class="form-control"/>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12">
                    <div class="form-group">
                        <div class="col-xs-1 no-padding">
                            <p>営業所名印刷</p>
                        </div>
                        <div class="col-xs-2">
                            <input type="radio" name="SalesNamePrint"/>すべて
                            <input type="radio" name="SalesNamePrint"/> 選択
                        </div>
                        <div class="col-xs-2">
                            <p>伝票番号変更</p>
                        </div>
                        <div class="col-xs-2">
                            <input type="text" placeholder="000000" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="col-xs-12">
                    <div class="col-xs-2 no-padding">
                        <p>お知らせ文 (振替）</p>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-1">
                            <input type="text" class="form-control" placeholder="00">
                        </div>
                        <div class="col-xs-3">
                            <input type="text" placeholder="" class="form-control"/>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12">
                    <div class="col-xs-2 no-padding">
                        <p>(現金）</p>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-1">
                            <input type="text" class="form-control" placeholder="00">
                        </div>
                        <div class="col-xs-3">
                            <input type="text" placeholder="" class="form-control"/>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12">
                    <p class="col-xs-2 no-padding">(振込)</p>
                    <div class="form-group">
                        <div class="col-xs-1">
                            <input type="text" class="form-control" placeholder="00">
                        </div>
                        <div class="col-xs-3">
                            <input type="text" placeholder="" class="form-control"/>
                        </div>
                    </div>
                </div>
                	
                <div class="col-xs-12">
                    <p class="col-xs-2 no-padding">(コンビニ)</p>
                    <div class="form-group">
                        <div class="col-xs-1">
                            <input type="text" class="form-control" placeholder="00">
                        </div>
                        <div class="col-xs-3">
                            <input type="text" placeholder="" class="form-control"/>
                        </div>
                    </div>
                </div>
                	
                <div class="col-xs-12">
                    <p class="col-xs-2 no-padding">(クレジット)</p>
                    <div class="form-group">
                        <div class="col-xs-1">
                            <input type="text" class="form-control" placeholder="00">
                        </div>
                        <div class="col-xs-3">
                            <input type="text" placeholder="" class="form-control"/>
                        </div>
                    </div>
                </div>

            </div>

    </div>


    <?php include 'footer.php'; ?>

    </form>

</div>

</body>

</html>