<?php
include "header.php"
?>
<?php
include "sidebar.php"
?>
<div class="col-xs-10 col-md-10 col-xs-10 no-padding">

    <div class="col-md-12 col-xs-12 no-padding body-background">
        <div class="head-p">
            <p>保安台帳等保安担当者一括変更</p>
        </div>

        <form id="meter" action="/gas/meter-reading" method="POST">
            <div class="col-xs-12 border1 no-padding">
                <p class="back-end">消費者範囲指定</p>

                <div class="col-xs-12">
                    <div class="col-xs-1 no-padding">
                        <p>営業所コード</p>
                    </div>
                    <div class="col-xs-1 ">
                        <input type="radio" name="officeCode" value="all" checked
                               onclick="$.fn.radioButtonSelectionChanged('officeCode', 'officeCodeId')"> <span> 全て</span>
                    </div>
                    <div class="col-xs-1  no-padding">
                        <input type="radio" name="officeCode" value="custom"
                               onclick="$.fn.radioButtonSelectionChanged('officeCode', 'officeCodeId')"> <span> 選択</span>
                    </div>
                </div>

                <div class="col-xs-12 col-xs-offset-1">
                    <div id="officeCodeId">
                        <div class="col-xs-1">
                            <div class="form-group">
                                <input id="officeCodeStartId" name="officeCodeStartId" placeholder="000"
                                       class="form-control"
                                       type="text" value="" disabled
                                       onchange="$.fn.onInputValueChange('officeCodeStartId', 'officeCodeStartName')"/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">～</div>
                        <div class="col-xs-1">
                            <div class="form-group">
                                <input id="companyIdEndId" name="companyIdEndId" placeholder="999" class="form-control"
                                       type="text" value="" disabled
                                       onchange="$.fn.onInputValueChange('companyIdEndId', 'companyIdEndName')"/>
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input id="officeCodeStartName" name="officeCodeStartName" placeholder=""
                                       class="form-control" type="text" value="" disabled/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">～</div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input id="companyIdEndName" name="companyIdEndName" placeholder=""
                                       class="form-control"
                                       type="text" value="" disabled/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="col-xs-12 no-padding ">
                        <div class="col-xs-1 no-padding">
                            <p>自他社区分</p>
                        </div>
                        <div class="col-xs-1">
                            <input type="radio" name="otherCompany" value="all" checked
                                   onclick="$.fn.radioButtonSelectionChanged('otherCompany', 'otherCompanyId')"> <span> 全て</span>
                        </div>
                        <div class="col-xs-1 no-padding">
                            <input type="radio" name="otherCompany" value="directSales"
                                   onclick="$.fn.radioButtonSelectionChanged('otherCompany', 'otherCompanyId')"> <span> 直売</span>
                        </div>
                        <div class="col-xs-2">
                            <input type="radio" name="otherCompany" value="salesOutlet"
                                   onclick="$.fn.radioButtonSelectionChanged('otherCompany', 'otherCompanyId')"> <span> 販売店</span>
                        </div>
                    </div>

                    <div id="otherCompanyId">
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-1 col-xs-offset-1">
                                <div class="form-group">
                                    <input id="trustStartId" name="trustStartId" placeholder="000" class="form-control"
                                           type="text" value="" disabled
                                           onchange="$.fn.onInputValueChange('trustStartId', 'trustStartName')"/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">～</div>
                            <div class="col-xs-1">
                                <div class="form-group">
                                    <input id="trustEndId" name="trustEndId" placeholder="999" class="form-control"
                                           type="text" value="" disabled
                                           onchange="$.fn.onInputValueChange('trustEndId', 'trustEndName')"/>
                                </div>
                            </div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input id="trustStartName" name="trustStartName" class="form-control" type="text"
                                           value="" disabled/>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">～</div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input id="trustEndName" name="trustEndName" class="form-control" type="text"
                                           value="" disabled/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12">
                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-1 no-padding">
                            <p>出力区分</p>
                        </div>
                        <div class="col-xs-1">
                            <input type="radio" name="lable" value="all" checked
                                   onclick="$.fn.radioButtonSelectionChanged('lable', 'lableId')"> <span> 全て</span>
                        </div>
                        <div class="col-xs-1 no-padding">
                            <input type="radio" name="lable" value="directSales"
                                   onclick="$.fn.radioButtonSelectionChanged('lable', 'lableId')"> <span> 地区</span>
                        </div>
                        <div class="col-xs-2">
                            <input type="radio" name="lable" value="salesOutlet"
                                   onclick="$.fn.radioButtonSelectionChanged('lable', 'lableId')"> <span> 営業担当者</span>
                        </div>
                    </div>
<div id="lableId">
                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-1 col-xs-offset-1">
                            <div class="form-group">
                                <input id="outputStartId" name="outputStartId" placeholder="000" class="form-control"
                                       type="text" value="" disabled
                                       onchange="$.fn.onInputValueChange('outputStartId', 'outputStartName')"/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">～</div>
                        <div class="col-xs-1">
                            <div class="form-group">
                                <input id="outputEndId" name="outputEndId" placeholder="999" class="form-control"
                                       type="text" value="" disabled
                                       onchange="$.fn.onInputValueChange('outputEndId', 'outputEndName')"/>
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input id="outputStartName" name="outputStartName" class="form-control" type="text"
                                       value="" disabled />
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">～</div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input id="outputEndName" name="outputEndName" class="form-control" type="text"
                                       value="" disabled />
                            </div>
                        </div>
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
                                   type="text" value=""
                                   onchange="$.fn.onInputValueChange('consumerCodeStart', 'consumerCodeStartName')"/>
                        </div>
                    </div>
                    <div class="col-xs-1 no-padding ratio">～</div>
                    <div class="col-xs-2">
                        <div class="form-group">
                            <input id="consumeCodeEnd" name="consumeCodeEnd" placeholder="z" class="form-control"
                                   type="text" value=""
                                   onchange="$.fn.onInputValueChange('consumeCodeEnd', 'consumerCodeEndName')"/>
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <div class="form-group">
                            <input id="consumerCodeStartName" name="consumerCodeStartName" class="form-control"
                                   type="text" value=""/>
                        </div>
                    </div>
                    <div class="col-xs-1 no-padding ratio">～</div>
                    <div class="col-xs-3">
                        <div class="form-group">
                            <input id="consumerCodeEndName" name="consumerCodeEndName" class="form-control"
                                   type="text" value=""/>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12">
                    <div class="col-xs-1 no-padding">
                        <p>入居状況</p>
                    </div>
                    <div class="col-xs-10">
                        <div class="col-xs-1 no-padding"><input type="radio" id="" name="status" value="all"
                                                                onclick="$.fn.radioButtonSelectionChanged('status', 'statusId')"><span> 全て</span>
                        </div>
                        <div class="col-xs-2 no-padding"><input type="radio" id="" name="status" value="status"
                                                                onclick="$.fn.radioButtonSelectionChanged('status', 'statusId')"><span> 閉栓・休止除く</span>
                        </div>
                        <div class="col-xs-2 no-padding"><input type="radio" id="" name="status" value="status"
                                                                onclick="$.fn.radioButtonSelectionChanged('status', 'statusId')"><span> 未入荷除く</span>
                        </div>

                    </div>

                </div>
            </div>
            <div class="col-xs-12 border1 no-padding">
                <p class="back-end">変更指定</p>

            <div class="col-xs-11 border1 no-padding ml-10">
                <p class="back-end">
                    変更前調査員 </p>
                <div class="col-xs-12">
                    <div class="col-xs-1 no-padding border-margin-bottom border-margin-exp">
                        <p>調査員</p>
                    </div>
                    <div class="col-xs-1">
                        <input type="text" class="form-control" id="investigatorId" name="investigatorId"
                               value="" onchange="$.fn.onInputValueChange('investigatorId', 'investigatorName')">
                    </div>
                    <div class="col-xs-3">
                        <input type="text" class="form-control" id="investigatorName" name="investigatorName">
                    </div>
                    <div class="col-xs-1 no-padding border-margin-exp col-xs-offset-1">
                        <p>保安機関</p>
                    </div>
                    <div class="col-xs-1">
                        <input type="text" class="form-control" placeholder="999" id="agencyId" name="agencyId"
                               value="" onchange="$.fn.onInputValueChange('agencyId', 'agencyName')">
                    </div>
                    <div class="col-xs-4">
                        <input type="text" class="form-control" id="agencyName" name="agencyName"
                               value="">
                    </div>
                </div>
            </div>

            <div class="col-xs-11 border1 no-padding ml-10">
                <p class="back-end">
                    変更後調査員 </p>
                <div class="col-xs-12 border-margin-bottom">
                    <div class="col-xs-1 no-padding border-margin-exp">
                        <p>調査員</p>
                    </div>
                    <div class="col-xs-1">
                        <input type="text" class="form-control" id="investigator_2Id" name="investigator_2Id"
                               value="" onchange="$.fn.onInputValueChange('investigator_2Id', 'investigator_2Name')">
                    </div>
                    <div class="col-xs-3">
                        <input type="text" class="form-control" id="investigator_2Name" name="investigator_2Name"
                               value="">
                    </div>
                    <div class="col-xs-1 no-padding border-margin-exp col-xs-offset-1">
                        <p>保安機関</p>
                    </div>
                    <div class="col-xs-1">
                        <input type="text" class="form-control" placeholder="999" id="investigator_3Id"
                               name="investigator_3Id"
                               value="" onchange="$.fn.onInputValueChange('investigator_3Id', 'investigator_3Name')">
                    </div>
                    <div class="col-xs-4">
                        <input type="text" class="form-control" id="investigator_3Name" name="investigator_3Name"
                               value="">
                    </div>
                </div>
            </div>

            <div class="col-xs-12 no-padding">
                <div class="col-xs-1">
                    <p>登録訂正日</p>
                </div>
                <div class="col-xs-2 form-group">
                    <input type="date" class="form-control">
                </div>
		<div class="col-xs-3">
		    <p>(保安業務実施者情報変更時に使用)</p>
		</div>
            </div>

		<div class="col-xs-12 bottom-box no-padding">
                    <div class="col-xs-1">
                        <p>変更対象</p>
                    </div>
                    <div class="col-xs-6">
                        <div class="col-xs-4 no-padding"><input type="radio" id="" name="business" value="all"
                                                                onclick="$.fn.radioButtonSelectionChanged('business', 'businessId')"><span> 両方</span>
                        </div>
                        <div class="col-xs-4 no-padding"><input type="radio" id="" name="business" value="business"
                                                                onclick="$.fn.radioButtonSelectionChanged('business', 'businessId')"><span> 保安台帳のみ</span>
                        </div>
                        <div class="col-xs-4 no-padding"><input type="radio" id="" name="business" value="business"
                                                                onclick="$.fn.radioButtonSelectionChanged('business', 'businessId')"><span> 保安業務実施者情報のみ</span>
                        </div>
                    </div>
		</div>


</div>
            <!--Last-->


            <?php
            include "footer.php"
            ?>

        </form>

    </div>
</div>
</div>

</body>

</html>
