<?php
include "header.php"
?>
<?php
include "sidebar.php"
?>
<div class="col-xs-10 col-md-10 col-xs-12 no-padding body-background">

    <div class="head-p">
        <p>
            保安台帳保守</p>
    </div>
    <div class="col-xs-12">
        <div class="col-xs-1 no-padding">
            <p>消費者コード
            </p>
        </div>

        <div class="col-xs-2 no-padding">
            <input class="form-control" id="directStartId" name="directStartId"
                   type="number" value="" onchange="$.fn.onInputValueChange('directStartId', 'directStartName')">
        </div>
        <div class="col-xs-3">
            <input class="form-control" type="text" id="directStartName" name="directStartName">
        </div>
    </div>

    <div class="col-xs-12" style="margin-top:20px;">
        <div class="col-xs-12 border1 no-padding" style="padding-top:20px;">
            <div class="col-xs-12">
		<div class="col-xs-3">
                    <div class="col-xs-6 no-padding">
                        <p>検索名</p>
                    </div>
		    <div class="col-xs-6 no-padding">
			input
		    </div>
		</div>
		<div class="col-xs-3">
		    <div class="col-xs-6 no-padding">
		        <p>販売区分</p>
		    </div>
		    <div class="col-xs-6 no-padding">
		        input
		    </div>
		</div>
		<div class="col-xs-3">
		    <div class="col-xs-6 no-padding">
		        <p>集金担当</p>
		    </div>
		    <div class="col-xs-6 no-padding">
			input
		    </div>
		</div>
		<div class="col-xs-3">
		    <div class="col-xs-6 no-padding">
		        <p>LV特定コード</p>
		    </div>
		    <div class="col-xs-6 no-padding">
			input
		    </div>
		</div>
	    </div>

	    <div class="col-xs-12">
		<div class="col-xs-3">
		    <div class="col-xs-6 no-padding">
		        <p>郵便番号</p>
		    </div>
		    <div class="col-xs-6 no-padding">
			input
		    </div>
		</div>
                <div class="col-xs-3">
                    <div class="col-xs-6 no-padding">
                        <p>地図コード</p>
                    </div>
                    <div class="col-xs-6 no-padding">
                        input
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="col-xs-6 no-padding">
                        <p>メータ型式</p>
                    </div>
                    <div class="col-xs-6 no-padding">
                        input
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="col-xs-6 no-padding">
                        <p>メータ製造番号</p>
                    </div>
                    <div class="col-xs-6 no-padding">
                        input
                    </div>
                </div>
	    </div>

	    <div class="col-xs-12">
                <div class="col-xs-4">
                    <div class="col-xs-6 no-padding">
                        <p>住所1</p>
                    </div>
                    <div class="col-xs-6 no-padding">
                        input
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="col-xs-6 no-padding">
                        <p>固定電話</p>
                    </div>
                    <div class="col-xs-6 no-padding">
                        input
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="col-xs-6 no-padding">
                        <p>検定有効期限</p>
                    </div>
                    <div class="col-xs-6 no-padding">
                        input
                    </div>
                </div>
	    </div>

	    <div class="col-xs-12">
                <div class="col-xs-5">
                    <div class="col-xs-6 no-padding">
                        <p>住所2</p>
                    </div>
                    <div class="col-xs-6 no-padding">
                        input
                    </div>
                </div>
                <div class="col-xs-7">
		    <div class="col-xs-4">
                        <div class="col-xs-6 no-padding">
                            <p>携帯電話</p>
                        </div>
                        <div class="col-xs-6 no-padding">
                            input
                        </div>
		    </div>
                    <div class="col-xs-4">
                        <div class="col-xs-6 no-padding">
                            <p>検針区分</p>
                        </div>
                        <div class="col-xs-6 no-padding">
                            input
                        </div>
		    </div>
                    <div class="col-xs-4">
                        <div class="col-xs-6 no-padding">
                            <p>料金表</p>
                        </div>
                        <div class="col-xs-6 no-padding">
                            input
                        </div>
                    </div>
                </div>
	   </div>

	   <div class="col-xs-12">
                <div class="col-xs-3">
                    <div class="col-xs-6 no-padding">
                        <p>検針担当</p>
                    </div>
                    <div class="col-xs-6 no-padding">
                        input
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="col-xs-6 no-padding">
                        <p>配送担当</p>
                    </div>
                    <div class="col-xs-6 no-padding">
                        input
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="col-xs-6 no-padding">
                        <p>保証金</p>
                    </div>
                    <div class="col-xs-6 no-padding">
                        input
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="col-xs-6 no-padding">
                        <p>精算日</p>
                    </div>
                    <div class="col-xs-6 no-padding">
                        input
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
            <div id="home" class="tab-pane fade in active table-margin tab-scroll">
                <div class="col-xs-12 border1 no-padding  bottom-box">
                    <p class="backend">消費者の状況</p>
                    <div class="col-xs-12">
                        <div class="col-xs-1 no-padding"><p>カナ氏名</p></div>
                        <div class="col-xs-5"><input type="text" class="form-control"></div>
                        <div class="col-xs-1 no-padding"><p>入居区分</p></div>
                        <div class="col-xs-4">
                            <div class="col-xs-6 no-padding"><input type="radio" id="" name="tenancy" value="all"
                                                                    onclick="$.fn.radioButtonSelectionChanged('tenancy', 'tenancyId')"><span> 入居（開栓）</span>
                            </div>
                            <div class="col-xs-6 no-padding"><input type="radio" id="" name="tenancy" value="tenancy"
                                                                    onclick="$.fn.radioButtonSelectionChanged('tenancy', 'tenancyId')"><span> 空家（閉栓）</span>
                            </div>


                        </div>
                    </div>
                    <div class="col-xs-12 border-margin">
                        <div class="col-xs-1 no-padding"><p>集合親コード</p></div>
                        <div class="col-xs-1"><input type="text" class="form-control" name="setParentId"
                                                     id="setParentId"
                                                     value=""
                                                     onchange="$.fn.onInputValueChange('setParentId', 'setParentName')">
                        </div>
                        <div class="col-xs-4"><input type="text" class="form-control" name="setParentName"
                                                     id="setParentName" value=""></div>
                        <div class="col-xs-1 no-padding">
                            <p>閉栓日付</p>
                        </div>
                        <div class="col-xs-3"><input type="date" class="form-control"></div>


                    </div>
                    <div class="col-xs-12 border-margin">
                        <div class="col-xs-1 no-padding"><p>集合親コード</p></div>
                        <div class="col-xs-1"><input type="text" class="form-control" name="setParent_2Id"
                                                     id="setParent_2Id"
                                                     value=""
                                                     onchange="$.fn.onInputValueChange('setParent_2Id', 'setParent_2Name')">
                        </div>
                        <div class="col-xs-4"><input type="text" class="form-control" name="setParent_2Name"
                                                     id="setParent_2Name" value=""></div>
                        <div class="col-xs-1 no-padding">
                            <p>適用法令</p>
                        </div>
                        <div class="col-xs-4">
                            <div class="col-xs-4 no-padding"><input type="radio" id="" name="closurCode" value="all"
                                                                    onclick="$.fn.radioButtonSelectionChanged('closurCode', 'closurCodeId')"><span> 液石法</span>
                            </div>
                            <div class="col-xs-4 no-padding"><input type="radio" id="" name="closurCode"
                                                                    value="closurCode"
                                                                    onclick="$.fn.radioButtonSelectionChanged('closurCode', 'closurCodeId')"><span> 高圧法</span>
                            </div>
                            <div class="col-xs-4 no-padding"><input type="radio" id="" name="closurCode"
                                                                    value="closurCode"
                                                                    onclick="$.fn.radioButtonSelectionChanged('closurCode', 'closurCodeId')"><span> (ガス事業法）</span>
                            </div>


                        </div>


                    </div>
                    <div class="col-xs-12 border-margin">
                        <div class="col-xs-1 no-padding"><p>集合親コード</p></div>
                        <div class="col-xs-3"><input type="date" class="form-control"></div>
                        <div class="col-xs-2"></div>
                        <div class="col-xs-1 no-padding">
                            <p>用途区分</p>
                        </div>
                        <div class="col-xs-4">
                            <div class="col-xs-4 no-padding"><input type="radio" id="" name="application" value="all"
                                                                    onclick="$.fn.radioButtonSelectionChanged('application', 'applicationId')"><span> 家庭用</span>
                            </div>
                            <div class="col-xs-4 no-padding"><input type="radio" id="" name="application"
                                                                    value="application"
                                                                    onclick="$.fn.radioButtonSelectionChanged('application', 'applicationId')"><span>業務用</span>
                            </div>
                            <div class="col-xs-4 no-padding"><input type="radio" id="" name="application"
                                                                    value="application"
                                                                    onclick="$.fn.radioButtonSelectionChanged('application', 'applicationId')"><span> その他</span>
                            </div>

                        </div>


                    </div>
                    <div class="col-xs-12 border-margin">
                        <div class="col-xs-1 no-padding"><p>住所1</p></div>
                        <div class="col-xs-5"><input type="text" class="form-control"></div>

                        <div class="col-xs-1 no-padding">
                            <p>供給区分</p>
                        </div>
                        <div class="col-xs-1"><input type="text" class="form-control"></div>
                        <div class="col-xs-4">
                            <select class="form-control">
                                <option>単独戸建</option>
                                <option>単独共同</option>
                                <option>集合戸建</option>
                                <option>集合共同</option>
                                <option>特定単独</option>
                                <option>特定集団戸建</option>
                                <option>特定集団共同</option>
                                <option>質量販売"</option>

                            </select>
                        </div>

                    </div>
                    <div class="col-xs-12 border-margin">
                        <div class="col-xs-1 no-padding"><p>住所2</p></div>
                        <div class="col-xs-4"><input type="text" class="form-control"></div>
                        <div class="col-xs-1"></div>
                        <div class="col-xs-1 no-padding">
                            <p>親子</p>
                        </div>
                        <div class="col-xs-4">
                            <div class="col-xs-4 no-padding"><input type="radio" id="" name="child" value="all"
                                                                    onclick="$.fn.radioButtonSelectionChanged('child', 'childId')"><span> 空白:該当なし</span>
                            </div>
                            <div class="col-xs-3 no-padding"><input type="radio" id="" name="child" value="child"
                                                                    onclick="$.fn.radioButtonSelectionChanged('child', 'childId')"><span>親</span>
                            </div>
                            <div class="col-xs-4 no-padding"><input type="radio" id="" name="child" value="child"
                                                                    onclick="$.fn.radioButtonSelectionChanged('child', 'childId')"><span> 個</span>
                            </div>

                        </div>


                    </div>
                    <div class="col-xs-12 border-margin">
                        <div class="col-xs-1 no-padding"><p>目標</p></div>
                        <div class="col-xs-5"><input type="text" class="form-control"></div>

                        <div class="col-xs-1 no-padding">
                            <p>施設区分</p>
                        </div>
                        <div class="col-xs-1"><input type="text" class="form-control" name="facilityId" id="facilityId"
                                                     value=""
                                                     onchange="$.fn.onInputValueChange('facilityId', 'facilityEndId')">
                        </div>
                        <div class="col-xs-4">
                            <input type="text" class="form-control " name="facilityEndId" id="facilityEndId">
                        </div>

                    </div>
                    <div class="col-xs-12 border-margin">
                        <div class="col-xs-1 no-padding"><p>目標</p></div>
                        <div class="col-xs-5"><input type="text" class="form-control"></div>

                        <div class="col-xs-1 no-padding">
                            <p>建築物区分1</p>
                        </div>
                        <div class="col-xs-4">
                            <div class="col-xs-5 no-padding"><input type="radio" id="" name="building" value="all"
                                                                    onclick="$.fn.radioButtonSelectionChanged('building', 'buildingId')"><span> 鉄筋コンクリート</span>
                            </div>
                            <div class="col-xs-3 no-padding"><input type="radio" id="" name="building" value="building"
                                                                    onclick="$.fn.radioButtonSelectionChanged('building', 'buildingId')"><span>木造</span>
                            </div>
                            <div class="col-xs-4 no-padding"><input type="radio" id="" name="building" value="building"
                                                                    onclick="$.fn.radioButtonSelectionChanged('building', 'buildingId')"><span> (その他）</span>
                            </div>


                        </div>


                    </div>
                    <div class="col-xs-12 border-margin">
                        <div class="col-xs-1 no-padding"><p>地図コード</p></div>
                        <div class="col-xs-2  "><input type="text" class="form-control"></div>
                        <div class="col-xs-1 no-padding"><p>図面番号</p></div>
                        <div class="col-xs-2  "><input type="text" class="form-control"></div>

                        <div class="col-xs-1 no-padding  ">
                            <p>建築物区分1</p>
                        </div>
                        <div class="col-xs-4">
                            <div class="col-xs-6 no-padding"><input type="radio" id="" name="building_2" value="all"
                                                                    onclick="$.fn.radioButtonSelectionChanged('building_2', 'building_2Id')"><span> 200㎡以上</span>
                            </div>
                            <div class="col-xs-6 no-padding"><input type="radio" id="" name="building_2"
                                                                    value="building_2"
                                                                    onclick="$.fn.radioButtonSelectionChanged('building_2', 'building_2Id')"><span> 200㎡未満</span>
                            </div>


                        </div>


                    </div>
                    <div class="col-xs-12 border-margin">
                        <div class="col-xs-1 no-padding"><p>保安機関</p></div>
                        <div class="col-xs-1"><input type="text" class="form-control" name="securityId" id="securityId"
                                                     value=""
                                                     onchange="$.fn.onInputValueChange('securityId', 'securityEnd')">
                        </div>
                        <div class="col-xs-4"><input type="text" class="form-control" name="securityEnd"
                                                     id="securityEnd"></div>

                        <div class="col-xs-1 no-padding">
                            <p>世帯区分</p>
                        </div>
                        <div class="col-xs-1"><input type="text" class="form-control"></div>
                        <div class="col-xs-4">
                            <select class="form-control">
                                <option>一般世帯</option>
                                <option>一人住まい世帯</option>
                                <option>老人世帯</option>
                                <option>外国人世帯</option>
                                <option>一人住まい・老人世帯</option>
                                <option>一人住まい・外国人世帯</option>
                                <option>老人・外国人世帯</option>
                                <option>一人住まい・老人・外国人世帯"</option>

                            </select>
                        </div>

                    </div>
                    <div class="col-xs-12 border-margin">
                        <div class="col-xs-1 no-padding"><p>保安担当者</p></div>
                        <div class="col-xs-1"><input type="text" class="form-control" name="securityOfficerId"
                                                     id="securityOfficerId"
                                                     value=""
                                                     onchange="$.fn.onInputValueChange('securityOfficerId', 'securityOfficerEndId')">
                        </div>
                        <div class="col-xs-4"><input type="text" class="form-control" name="securityOfficerEndId"
                                                     id="securityOfficerEndId"
                                                     value=""></div>

                        <div class="col-xs-1 no-padding">
                            <p>転倒防止</p>
                        </div>

                        <div class="col-xs-4">
                            <div class="col-xs-3 no-padding"><input type="radio" id="prevent" name="prevent" value="all"
                                                                    onclick="$.fn.radioButtonSelectionChanged('prevent', 'preventId')"><span> 有</span>
                            </div>
                            <div class="col-xs-3 no-padding"><input type="radio" id="prevent" name="prevent"
                                                                    value="prevent"
                                                                    onclick="$.fn.radioButtonSelectionChanged('prevent', 'preventId')"><span> 無</span>
                            </div>

                        </div>

                    </div>
                    <div class="col-xs-12 border-margin">
                        <div class="col-xs-1 no-padding"><p>保安担当者</p></div>
                        <div class="col-xs-1"><input type="text" class="form-control" name="securityOfficer_2Id"
                                                     id="securityOfficer_2Id"
                                                     value=""
                                                     onchange="$.fn.onInputValueChange('securityOfficer_2Id', 'securityOfficer_2EndId')">
                        </div>
                        <div class="col-xs-4"><input type="text" class="form-control" name="securityOfficer_2EndId"
                                                     id="securityOfficer_2EndId"></div>

                        <div class="col-xs-1 no-padding">
                            <p>昇温防止</p>
                        </div>

                        <div class="col-xs-4">
                            <div class="col-xs-3 no-padding"><input type="radio" id="" name="heating" value="all"
                                                                    onclick="$.fn.radioButtonSelectionChanged('heating', 'heatingId')"><span> 有</span>
                            </div>
                            <div class="col-xs-3 no-padding"><input type="radio" id="" name="heating" value="heating"
                                                                    onclick="$.fn.radioButtonSelectionChanged('heating', 'heatingId')"><span> 無</span>
                            </div>

                        </div>

                    </div>
                    <div class="col-xs-12 border-margin">
                        <div class="col-xs-2 no-padding"><p>販売店からの距離</p></div>

                        <div class="col-xs-4"><input type="text" class="form-control"></div>

                        <div class="col-xs-1 no-padding">
                            <p>保安業務</p>
                        </div>

                        <div class="col-xs-4">
                            <div class="col-xs-3 no-padding"><input type="radio" id="" name="service" value="all"
                                                                    onclick="$.fn.radioButtonSelectionChanged('service', 'serviceId')"><span> 行う</span>
                            </div>
                            <div class="col-xs-3 no-padding"><input type="radio" id="" name="service" value="service"
                                                                    onclick="$.fn.radioButtonSelectionChanged('service', 'serviceId')"><span> 行わない</span>
                            </div>

                        </div>

                    </div>
                    <div class="col-xs-12 border-margin">
                        <div class="col-xs-2 no-padding"><p>大規模料理飲食店該当</p></div>

                        <div class="col-xs-4">
                            <div class="col-xs-3 no-padding"><input type="radio" id="" name="restaurant" value="all"
                                                                    onclick="$.fn.radioButtonSelectionChanged('restaurant', 'restaurantId')"><span> 該当</span>
                            </div>
                            <div class="col-xs-3 no-padding"><input type="radio" id="" name="restaurant"
                                                                    value="restaurant"
                                                                    onclick="$.fn.radioButtonSelectionChanged('restaurant', 'restaurantId')"><span>  非該当</span>
                            </div>

                        </div>

                        <div class="col-xs-1 no-padding">
                            <p>保安確保機器</p>
                        </div>

                        <div class="col-xs-4">
                            <div class="col-xs-3 no-padding"><input type="radio" id="" name="equipment" value="all"
                                                                    onclick="$.fn.radioButtonSelectionChanged('equipment', 'equipmentId')"><span>該当</span>
                            </div>
                            <div class="col-xs-3 no-padding"><input type="radio" id="" name="equipment"
                                                                    value="equipment"
                                                                    onclick="$.fn.radioButtonSelectionChanged('equipment', 'equipmentId')"><span>  非該当</span>
                            </div>

                        </div>

                    </div>
                    <div class="col-xs-12 border-margin">
                        <div class="col-xs-2 no-padding"><p>LPガス保安連絡担当者</p></div>

                        <div class="col-xs-4"><input type="text" class="form-control"></div>

                        <div class="col-xs-1 no-padding">
                            <p>期限年月</p>
                        </div>

                        <div class="col-xs-5">
                            <input type="date" placeholder="-----">
                        </div>

                    </div>
                    <div class="col-xs-12" style="margin-top:5px;">
                        <div class="col-xs-2 no-padding"><p>認定対象消費者区分</p></div>

                        <div class="col-xs-3">
                            <div class="col-xs-3 no-padding"><input type="radio" id="" name="accredited" value="all"
                                                                    onclick="$.fn.radioButtonSelectionChanged('accredited', 'accreditedId')"><span> 該当</span>
                            </div>
                            <div class="col-xs-3 no-padding"><input type="radio" id="" name="accredited"
                                                                    value="accredited"
                                                                    onclick="$.fn.radioButtonSelectionChanged('accredited', 'accreditedId')"><span> 非該当</span>
                            </div>


                        </div>

                        <div class="col-xs-2">

                        </div>

                        <div class="col-xs-4">


                        </div>

                    </div>
                    <div class="col-xs-12" style="margin-top:5px;">
                        <div class="col-xs-2 no-padding"><p>豪雪・地震対策区分</p></div>

                        <div class="col-xs-5">
                            <div class="col-xs-3 no-padding"><input type="radio" id="" name="heavySnow" value="all"
                                                                    onclick="$.fn.radioButtonSelectionChanged('heavySnow', 'heavySnowId')"><span>  該当なし</span>
                            </div>
                            <div class="col-xs-3 no-padding"><input type="radio" id="" name="heavySnow"
                                                                    value="heavySnow"
                                                                    onclick="$.fn.radioButtonSelectionChanged('heavySnow', 'heavySnowId')"><span> 地震対策地域</span>
                            </div>
                            <div class="col-xs-3 no-padding"><input type="radio" id="" name="heavySnow"
                                                                    value="heavySnow"
                                                                    onclick="$.fn.radioButtonSelectionChanged('heavySnow', 'heavySnowId')"><span> 豪雪対策地域</span>
                            </div>

                        </div>


                    </div>

                    <div class="col-xs-3">


                    </div>
                </div>
            </div>
            <!--First Tab-->

            <!--second Tab-->
            <div id="menu1" class="tab-pane fade table-margin no">
                <div class="col-xs-12 no-padding tab-scroll" style="">
                    <div class="col-xs-12 border1 no-padding">
                        <p class="backend">貯蔵設備</p>
                        <div class="col-xs-12">
                            <div class="col-xs-1 no-padding">
                                <p>容器</p>
                            </div>
                            <div class="col-xs-1 no-padding">
                                <input type="number" class="form-control">
                            </div>
                            <div class="col-xs-1">
                                <p>kg</p>
                            </div>
                            <div class="col-xs-1 no-padding">
                                <input type="number" class="form-control">
                            </div>
                            <div class="col-xs-1">
                                <p>本</p>
                            </div>
                            <div class="col-xs-1 no-padding">
                                <input type="number" class="form-control">
                            </div>
                            <div class="col-xs-1">
                                <p>kg</p>
                            </div>
                            <div class="col-xs-1 no-padding">
                                <input type="number" class="form-control">
                            </div>
                            <div class="col-xs-1">
                                <p>本</p>
                            </div>


                        </div>

                        <div class="col-xs-12 border-margin">

                            <div class="col-xs-1 no-padding">
                                <p>貯蔵量</p>
                            </div>

                            <div class="col-xs-1 no-padding">
                                <input type="number" class="form-control">
                            </div>
                            <div class="col-xs-1 ">
                                <p>貯槽</p>
                            </div>

                            <div class="col-xs-1 no-padding">
                                <input type="number" class="form-control">
                            </div>

                            <div class="col-xs-1">
                                <p>容量</p>
                            </div>

                            <div class="col-xs-1 no-padding">
                                <input type="number" class="form-control">
                            </div>
                            <div class="col-xs-1">
                                <p>kg</p>
                            </div>
                            <div class="col-xs-1 p-size border-margin-exp">
                                <p>合計貯蔵量</p>
                            </div>

                            <div class="col-xs-1 no-padding">
                                <input type="number" class="form-control">
                            </div>
                            <div class="col-xs-1">
                                <p>kg</p>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-12 border1 no-padding border-margin">
                                <p class="back-end">バルク</p>
                                <div class="col-xs-12 table-scroll" style="">


                                    <table class="table table-bordered col-xs-12">
                                        <thead>
                                        <tr class="bg-color">
                                            <th></th>
                                            <th></th>
                                            <th>設置区分</th>
                                            <th>容量（kg）</th>
                                            <th>形態</th>
                                            <th>基</th>
                                            <th>設置年月</th>
                                            <th>製造年月</th>
                                            <th>貯槽番号</th>
                                            <th></th>
                                            <th>（安全弁）型式</th>
                                            <th>製造年月</th>
                                            <th>番号</th>
                                            <th>交換年月</th>
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
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                        <tr>
                                            <th class="bg-color">5</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
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
                                <div class="col-xs-12 border-margin-bottom">

                                    <div class="col-xs-2 col-xs-offset-2 ">
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-xs-1  no-padding">
                                        <p>設置区分</p>
                                    </div>
                                    <div class="col-xs-2">
                                        <div class="col-xs-6 no-padding"><input type="radio" id="" name="Installation"
                                                                                value="all"
                                                                                onclick="$.fn.radioButtonSelectionChanged('Installation', 'InstallationId')"><span> 地上</span>
                                        </div>
                                        <div class="col-xs-6 no-padding"><input type="radio" id="" name="Installation"
                                                                                value="Installation"
                                                                                onclick="$.fn.radioButtonSelectionChanged('Installation', 'InstallationId')"><span> 地下</span>
                                        </div>
                                    </div>

                                    <div class="col-xs-1 no-padding"><p>形態</p></div>
                                    <div class="col-xs-2 no-padding">

                                        <div class="col-xs-6 no-padding"><input type="radio" id="" name="Form_2"
                                                                                value="all"
                                                                                onclick="$.fn.radioButtonSelectionChanged('Form_2', 'Form_2Id')"><span> 縦型</span>
                                        </div>
                                        <div class="col-xs-6 no-padding"><input type="radio" id="" name="Form_2"
                                                                                value="Form_2"
                                                                                onclick="$.fn.radioButtonSelectionChanged('Form_2', 'Form_2Id')"><span> 横型</span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-xs-12 border1 no-padding">
                        <p class="backend">供給管</p>
                        <div class="col-xs-12">

                        </div>

                        <div class="col-xs-12">
                            <div class="col-xs-1 no-padding">
                                <p>圧力</p>
                            </div>
                            <div class="col-xs-4">
                                <div class="col-xs-3 no-padding"><input type="radio" id="" name="pressure" value="all"
                                                                        onclick="$.fn.radioButtonSelectionChanged('pressure', 'pressureId')"><span> 高圧</span>
                                </div>
                                <div class="col-xs-3 no-padding"><input type="radio" id="" name="pressure"
                                                                        value="pressure"
                                                                        onclick="$.fn.radioButtonSelectionChanged('pressure', 'pressureId')"><span> 中圧</span>
                                </div>
                                <div class="col-xs-3 no-padding"><input type="radio" id="" name="pressure"
                                                                        value="pressure"
                                                                        onclick="$.fn.radioButtonSelectionChanged('pressure', 'pressureId')"><span> 低圧</span>
                                </div>

                            </div>
                            <div class="col-xs-1 no-padding">
                                <p>埋設</p>
                            </div>
                            <div class="col-xs-4">
                                <div class="col-xs-3 no-padding"><input type="radio" id="" name="embedding" value="all"
                                                                        onclick="$.fn.radioButtonSelectionChanged('embedding', 'embeddingId')"><span> 露出管</span>
                                </div>
                                <div class="col-xs-3 no-padding"><input type="radio" id="" name="embedding"
                                                                        value="embedding"
                                                                        onclick="$.fn.radioButtonSelectionChanged('embedding', 'embeddingId')"><span>埋設管</span>
                                </div>


                            </div>

                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-1 no-padding">
                                <p>設置</p>
                            </div>

                            <div class="col-xs-10">
                                <div class="col-xs-2 no-padding"><input type="radio" id="" name="Installation_2"
                                                                        value="all"
                                                                        onclick="$.fn.radioButtonSelectionChanged('Installation_2', 'Installation_2Id')"><span> 無償貸与</span>
                                </div>
                                <div class="col-xs-1 no-padding"><input type="radio" id="" name="Installation_2"
                                                                        value="Installation_2"
                                                                        onclick="$.fn.radioButtonSelectionChanged('Installation_2', 'Installation_2Id')"><span> 有償施工</span>
                                </div>
                                <div class="col-xs-1 no-padding"><input type="radio" id="" name="Installation_2"
                                                                        value="Installation_2"
                                                                        onclick="$.fn.radioButtonSelectionChanged('Installation_2', 'Installation_2Id')"><span> :客先施工</span>
                                </div>
                                <div class="col-xs-1 no-padding"><input type="radio" id="" name="Installation_2"
                                                                        value="Installation_2"
                                                                        onclick="$.fn.radioButtonSelectionChanged('Installation_2', 'Installation_2Id')"><span> その他</span>
                                </div>


                            </div>

                        </div>

                        <div class="col-xs-12 table-scroll">
                            <table class="table table-bordered col-xs-11">
                                <thead>
                                <sr>
                                    <tr class="bg-color">
                                        <td></td>
                                        <td></td>
                                        <td class="td-style">圧力</td>
                                        <td></td>
                                        <td class="td-style">埋設</td>
                                        <td></td>
                                        <td class="td-style">種別</td>
                                        <td class="td-style">設置年月</td>
                                        <td class="td-style">交換期限</td>
                                        <td class="td-style">A</td>
                                        <td class="td-style">長さ</td>
                                        <td class="td-style">単位</td>
                                        <td class="td-style">設置方法</td>

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
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </sr>
                                </thead>
                            </table>
                        </div>
                    </div>

                    <div class="col-xs-12 border1 no-padding">
                        <p class="backend">ホース</p>
                        <div class="col-xs-7 table-scroll">
                            <table class="table table-bordered">
                                <thead>
                                <tr class="bg-color">
                                    <th></th>
                                    <th></th>
                                    <th>圧力</th>
                                    <th>製造年月</th>
                                    <th>交換期限</th>
                                    <th>長さ</th>
                                    <th>単位</th>
                                    <th>本</th>
                                    <th>安全機構</th>
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
                                <tr>
                                    <th class="bg-color">5</th>
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
                                    <th class="bg-color">6</th>
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
                        <div class="col-xs-5">
                            <div class="col-xs-12">
                                <div class="col-xs-4">
                                    <p>圧力</p>
                                </div>
                                <div class="col-xs-8">
                                    <div class="col-xs-3 no-padding"><input type="radio" id="" name="pressure_2"
                                                                            value="all"
                                                                            onclick="$.fn.radioButtonSelectionChanged('pressure_2', 'pressure_2Id')"><span> 高圧f</span>
                                    </div>
                                    <div class="col-xs-3 no-padding"><input type="radio" id="" name="pressure_2"
                                                                            value="pressure_2"
                                                                            onclick="$.fn.radioButtonSelectionChanged('pressure_2', 'pressure_2Id')"><span> 低圧</span>
                                    </div>

                                </div>

                            </div>
                            <div class="col-xs-12">
                                <div class="col-xs-4">
                                    <p>安全機構</p>
                                </div>
                                <div class="col-xs-8">
                                    <div class="col-xs-3 no-padding"><input type="radio" id="" name="safety" value="all"
                                                                            onclick="$.fn.radioButtonSelectionChanged('safety', 'safetyId')"><span> 有</span>
                                    </div>
                                    <div class="col-xs-3 no-padding"><input type="radio" id="" name="safety"
                                                                            value="safety"
                                                                            onclick="$.fn.radioButtonSelectionChanged('safety', 'safetyId')"><span> 無</span>
                                    </div>

                                </div>
                            </div>

                        </div>


                    </div>
                    <div class="col-xs-12 no-padding bottom-box">
                        <div class="col-xs-9 no-padding">
                            <div class="col-xs-12 border1 no-padding">
                                <p class="backend">バルブ等</p>
                                <div class="col-xs-5" style="padding:0;">

                                    <div class="col-xs-12 table-scroll">
                                        <table class="table table-bordered">
                                            <thead>
                                            <tr class="bg-color">
                                                <th></th>
                                                <th></th>
                                                <th>圧力</th>
                                                <th></th>
                                                <th>型式</th>
                                                <th>個数</th>
                                                <th>製造年月</th>
                                            </tr>
                                            <tr>
                                                <th class="bg-color">1</th>
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
                                            </tr>
                                            <tr>
                                                <th class="bg-color">3</th>
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
                                            </tr>
                                            <tr>
                                                <th class="bg-color">5</th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                            <tr>
                                                <th class="bg-color">6</th>
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
                                <div class="col-xs-4" style="margin-top:30px;">

                                    <div class="col-xs-12">
                                        <div class="col-xs-3 no-padding">
                                            <p>圧力</p>
                                        </div>
                                        <div class="col-xs-9">
                                            <div class="col-xs-6 no-padding"><input type="radio" id="" name="pressure_3"
                                                                                    value="all"
                                                                                    onclick="$.fn.radioButtonSelectionChanged('pressure_3', 'pressure_3Id')"><span> 高圧</span>
                                            </div>
                                            <div class="col-xs-6 no-padding"><input type="radio" id="" name="pressure_3"
                                                                                    value="pressure_3"
                                                                                    onclick="$.fn.radioButtonSelectionChanged('pressure_3', 'pressure_3Id')"><span> 中圧</span>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>


                        <div class="col-xs-3">
                            <div class="col-xs-12 border1 no-padding">
                                <p class="back-end">中間コック（低圧）</p>
                                <div class="col-xs-12 table-scroll ">
                                    <table class="table table-bordered"
                                    <thead>
                                    <tr class="bg-color">
                                        <th class=""></th>
                                        <th>A</th>
                                        <th>個数</th>
                                        <th>製造年月</th>

                                    </tr>
                                    <tr>
                                        <th class="bg-color">1</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>

                                    </tr>
                                    <tr>
                                        <th class="bg-color">2</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>

                                    </tr>
                                    <tr>
                                        <th class="bg-color">3</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>

                                    </tr>
                                    <tr>
                                        <th class="bg-color">4</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>

                                    </tr>
                                    <tr>
                                        <th class="bg-color">5</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>

                                    </tr>
                                    <tr>
                                        <th class="bg-color">5</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>

                                    </tr>
                                    </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--third Tab-->
            <div id="menu2" class="tab-pane fade border-margin tab-scroll">
                <div class="col-xs-12 border1 no-padding">
                    <p class="backend">調整器等</p>
                    <div class="col-xs-12">

                        <div class="col-xs-1 no-padding">
                            <p>区分</p>
                        </div>
                        <div class="col-xs-10">
                            <div class="col-xs-3 no-padding"><input type="radio" id="" name="classification" value="all"
                                                                    onclick="$.fn.radioButtonSelectionChanged('classification', 'classificationId')"><span> 警報機連動遮断装置</span>
                            </div>
                            <div class="col-xs-3 no-padding"><input type="radio" id="" name="classification"
                                                                    value="classification"
                                                                    onclick="$.fn.radioButtonSelectionChanged('classification', 'classificationId')"><span> ガス放出防止器</span>
                            </div>
                            <div class="col-xs-3 no-padding"><input type="radio" id="" name="classification"
                                                                    value="classification"
                                                                    onclick="$.fn.radioButtonSelectionChanged('classification', 'classificationId')"><span> 耐震自動ガス遮断装置</span>
                            </div>
                            <div class="col-xs-3 no-padding"><input type="radio" id="" name="classification"
                                                                    value="classification"
                                                                    onclick="$.fn.radioButtonSelectionChanged('classification', 'classificationId')"><span> 気化器</span>
                            </div>

                        </div>


                    </div>
                    <div class="col-xs-12 table-scroll">
                        <table class="table table-bordered">
                            <thead>
                            <tr class="bg-color">
                                <th></th>
                                <th>区分</th>
                                <th></th>
                                <th>種別 <br>メーカ</th>
                                <th></th>
                                <th>型式</th>
                                <th>個数<br>
                                    容量
                                </th>
                                <th>ロット番号</th>
                                <th>製造年月</th>
                                <th>期限年数</th>
                                <th>交換期限</th>

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
                                <th></th>
                                <th></th>

                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
                <div class="col-xs-12 border1 no-padding bottom-box">
                    <p class="back-end">ガスメータ</p>
                    <div class="col-xs-12">

                        <div class="col-xs-1 no-padding font-exp-size1">
                            <p>ガスメータ有無</p>
                        </div>
                        <div class="col-xs-1">
                            <input type="number" class="form-control">
                        </div>
                        <div class="col-xs-3">
                            <div class="col-xs-3 no-padding"><input type="radio" id="" name="meter" value="all"
                                                                    onclick="$.fn.radioButtonSelectionChanged('meter', 'meterId')"><span> 有</span>
                            </div>
                            <div class="col-xs-3 no-padding"><input type="radio" id="" name="meter" value="meter"
                                                                    onclick="$.fn.radioButtonSelectionChanged('meter', 'meterId')"><span> 無</span>
                            </div>


                        </div>
                        <div class="col-xs-1 no-padding">
                            <p>設定区分</p>
                        </div>
                        <div class="col-xs-2">
                            <input type="number" class="form-control">
                        </div>
                        <div class="col-xs-2">
                            <select class="form-control">
                                <option value="">自動</option>
                                <option value="">Ⅰ</option>
                                <option value="">Ⅱ</option>
                                <option value="">Ⅲ</option>
                                <option value="">L</option>
                                <option value="">M</option>
                                <option value="">S</option>

                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12 border-margin ">

                        <div class="col-xs-1 no-padding">
                            <p>種別</p>
                        </div>
                        <div class="col-xs-1">
                            <input type="number" class="form-control">
                        </div>
                        <div class="col-xs-3">
                            <input type="number" class="form-control">
                        </div>
                        <div class="col-xs-1 no-padding">
                            <p>S型調査日</p>
                        </div>
                        <div class="col-xs-2">
                            <input type="number" class="form-control">
                        </div>
                        <div class="col-xs-2">

                        </div>
                    </div>
                    <div class="col-xs-12 border-margin">

                        <div class="col-xs-1 no-padding">
                            <p>メーカ</p>
                        </div>
                        <div class="col-xs-1">
                            <input type="number" class="form-control">
                        </div>
                        <div class="col-xs-3">
                            <input type="number" class="form-control">
                        </div>
                        <div class="col-xs-1 no-padding">
                            <p>設定内容</p>
                        </div>
                        <div class="col-xs-1">
                            <input type="number" class="form-control">
                        </div>
                        <div class="col-xs-3">
                            <div class="col-xs-4 no-padding"><input type="radio" id="" name="setting" value="all"
                                                                    onclick="$.fn.radioButtonSelectionChanged('setting', 'settingId')"><span> 標準</span>
                            </div>
                            <div class="col-xs-3 no-padding"><input type="radio" id="" name="setting" value="setting"
                                                                    onclick="$.fn.radioButtonSelectionChanged('setting', 'settingId')"><span> 機能</span>
                            </div>
                            <div class="col-xs-5 no-padding"><input type="radio" id="" name="setting" value="setting"
                                                                    onclick="$.fn.radioButtonSelectionChanged('setting', 'settingId')"><span> 圧力監視等</span>
                            </div>


                        </div>
                    </div>
                    <div class="col-xs-12 border-margin">

                        <div class="col-xs-1 no-padding">
                            <p>型式</p>
                        </div>
                        <div class="col-xs-1">
                            <input type="number" class="form-control">
                        </div>
                        <div class="col-xs-3">
                            <input type="number" class="form-control">
                        </div>
                        <div class="col-xs-1 no-padding font-exp-size1">
                            <p>ストーブの有無</p>
                        </div>
                        <div class="col-xs-2">
                            <input type="number" class="form-control">
                        </div>
                        <div class="col-xs-2">
                            <div class="col-xs-3 no-padding"><input type="radio" id="" name="stove" value="all"
                                                                    onclick="$.fn.radioButtonSelectionChanged('stove', 'stoveId')"><span> 有</span>
                            </div>
                            <div class="col-xs-3 no-padding"><input type="radio" id="" name="stove" value="stove"
                                                                    onclick="$.fn.radioButtonSelectionChanged('stove', 'stoveId')"><span> 無</span>
                            </div>


                        </div>
                    </div>
                    <div class="col-xs-12 border-margin">

                        <div class="col-xs-1 no-padding">
                            <p>容量</p>
                        </div>
                        <div class="col-xs-2">
                            <input type="date" class="form-control">
                        </div>

                        <div class="col-xs-2 no-padding col-xs-offset-2">
                            <p>警報機との接続状況</p>
                        </div>
                        <div class="col-xs-1">
                            <input type="number" class="form-control">
                        </div>
                        <div class="col-xs-4">
                            <div class="col-xs-3 no-padding"><input type="radio" id="" name="connection" value="all"
                                                                    onclick="$.fn.radioButtonSelectionChanged('connection', 'connectionId')"><span> 接続</span>
                            </div>
                            <div class="col-xs-3 no-padding"><input type="radio" id="" name="connection"
                                                                    alue="connection"
                                                                    onclick="$.fn.radioButtonSelectionChanged('connection', 'connectionId')"><span> 併設</span>
                            </div>
                            <div class="col-xs-3 no-padding"><input type="radio" id="" name="connection"
                                                                    alue="connection"
                                                                    onclick="$.fn.radioButtonSelectionChanged('connection', 'connectionId')"><span
                                        class="font-exp-size2"> DAアダプタ</span></div>
                            <div class="col-xs-3 no-padding"><input type="radio" id="" name="connection"
                                                                    alue="connection"
                                                                    onclick="$.fn.radioButtonSelectionChanged('connection', 'connectionId')"><span> 不要</span>
                            </div>


                        </div>
                    </div>
                    <div class="col-xs-12 border-margin">

                        <div class="col-xs-1 no-padding">
                            <p>設置年月</p>
                        </div>
                        <div class="col-xs-2">
                            <input type="number" class="form-control">
                        </div>
                        <div class="col-xs-1">
                            <input type="number" class="form-control">
                        </div>
                        <div class="col-xs-2 no-padding col-xs-offset-1">
                            <p>集中監視機能の有無</p>
                        </div>
                        <div class="col-xs-1">
                            <input type="number" class="form-control">
                        </div>
                        <div class="col-xs-2">
                            <div class="col-xs-3 no-padding"><input type="radio" id="" name="monitoring" value="all"
                                                                    onclick="$.fn.radioButtonSelectionChanged('monitoring', 'monitoringId')"><span> 有</span>
                            </div>
                            <div class="col-xs-3 no-padding"><input type="radio" id="" name="monitoring"
                                                                    value="monitoring"
                                                                    onclick="$.fn.radioButtonSelectionChanged('monitoring', 'monitoringId')"><span> 無</span>
                            </div>

                        </div>
                    </div>
                    <div class="col-xs-12 border-margin no">

                        <div class="col-xs-1 no-padding">
                            <p>検定期限</p>
                        </div>
                        <div class="col-xs-2">
                            <input type="date" class="form-control">
                        </div>
                        <div class="col-xs-1">

                        </div>
                        <div class="col-xs-3">

                        </div>
                        <div class="col-xs-1">

                        </div>
                        <div class="col-xs-2">

                        </div>
                    </div>
                    <div class="col-xs-12 border-margin">

                        <div class="col-xs-1 no-padding">
                            <p>入口</p>
                        </div>
                        <div class="col-xs-2">
                            <input type="number" class="form-control">
                        </div>
                        <div class="col-xs-3">
                            <div class="col-xs-3 no-padding"><input type="radio" id="" name="deadline" value="all"
                                                                    onclick="$.fn.radioButtonSelectionChanged('deadline', 'deadlineId')"><span> 左</span>
                            </div>
                            <div class="col-xs-3 no-padding"><input type="radio" id="" name="deadline" value="deadline"
                                                                    onclick="$.fn.radioButtonSelectionChanged('deadline', 'deadlineId')"><span> 右</span>
                            </div>

                        </div>
                        <div class="col-xs-3">

                        </div>
                        <div class="col-xs-1">

                        </div>
                        <div class="col-xs-2">

                        </div>
                    </div>
                    <div class="col-xs-12 border-margin border-margin-bottom">

                        <div class="col-xs-1 no-padding">
                            <p>製造番号</p>
                        </div>
                        <div class="col-xs-3">
                            <input type="number" class="form-control">
                        </div>


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
